<?php

namespace App\Livewire\Backoffice;

use Livewire\Component;
use App\Models\Barang;
use App\Models\User;
use App\Models\Kategori;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $jmlUserBaru, $jmlKategori, $jmlBarangPerKategori, $itemPalingBanyakDisukai, $jmlItemBaruPerInterval, $grafikAnalisaItemDisukai, $currentDateTime, $currentTimeOfDay, $filterType, $likedItemsPerCategory;

    public function mount()
    {
        $this->filterType = 'monthly';
        $hour = Carbon::now('Asia/Jakarta')->format('H');
        if ($hour >= 6 && $hour < 12) {
            $this->currentTimeOfDay = 'Pagi';
        } elseif ($hour >= 12 && $hour < 18) {
            $this->currentTimeOfDay = 'Siang';
        } else {
            $this->currentTimeOfDay = 'Malam';
        }
        $this->currentDateTime = Carbon::now('Asia/Jakarta')->format('l, j F Y, H:i');
        $this->filterData($this->filterType);
    }

    public function filterData($filterType)
    {
        Carbon::setLocale('id');
        $now = Carbon::now('Asia/Jakarta');
        $startDate = $now->startOfWeek(Carbon::MONDAY);

        switch ($filterType) {
            case 'weekly':
                $startDate = $now->startOfWeek();
                break;
            case 'monthly':
                $startDate = $now->startOfMonth();
                break;
            case 'yearly':
                $startDate = $now->startOfYear();
                break;
            default:
                $startDate = $now->startOfMonth();
                break;
        }

        $this->jmlUserBaru = User::where('created_at', '>=', $startDate)->count();
        $this->jmlKategori = Kategori::count();

        $this->jmlBarangPerKategori = Kategori::withCount(['barangs', 'jasas'])
            ->get()
            ->map(function ($kategori) use ($startDate) {
                $kategori->total_items = $kategori->barangs()
                    ->where('created_at', '>=', $startDate)
                    ->count() +
                    $kategori->jasas()
                        ->where('created_at', '>=', $startDate)
                        ->count();

                return $kategori;
            });

        $this->jmlItemBaruPerInterval = $this->getItemsPerInterval($filterType, $startDate);

        $this->itemPalingBanyakDisukai = Barang::withCount('likedByUsers')
            ->orderByDesc('liked_by_users_count')
            ->take(3)
            ->get();

        // Correct join and select raw to get the data with the category name
        $this->grafikAnalisaItemDisukai = Barang::selectRaw('DATE(tb_barang.created_at) as date, tb_kategori.nama_kategori, COUNT(*) as count')
            ->join('tb_kategori', 'tb_kategori.id', '=', 'tb_barang.kategori_id') // Proper join with 2 arguments
            ->where('tb_barang.created_at', '>=', $startDate)
            ->groupBy('date', 'tb_kategori.nama_kategori') // Group by the date and category name
            ->get();

        // Mapping the result to get the liked items per category
        $this->likedItemsPerCategory = $this->grafikAnalisaItemDisukai->mapWithKeys(function ($group) {
            return [$group->nama_kategori => $group->count]; // Map category name to total likes
        });

        $this->dispatch('dataUpdated');
    }


    public function getItemsPerInterval($filterType, $startDate)
    {
        switch ($filterType) {
            case 'weekly':
                return Barang::selectRaw('YEAR(created_at) as year, WEEK(created_at) as week_number, COUNT(*) as count')
                    ->where('created_at', '>=', $startDate)
                    ->groupByRaw('YEAR(created_at), WEEK(created_at)')
                    ->get()
                    ->map(function ($item) {
                        $item->week_name = 'Minggu ke-' . Carbon::parse("{$item->year}-W{$item->week_number}")->isoWeek();
                        return $item;
                    });
            case 'monthly':
                return Barang::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
                    ->where('created_at', '>=', $startDate)
                    ->groupByRaw('YEAR(created_at), MONTH(created_at)')
                    ->get()
                    ->map(function ($item) {
                        $item->month_name = Carbon::createFromFormat('Y-m', "{$item->year}-{$item->month}")->format('F');
                        return $item;
                    });
            case 'yearly':
                return Barang::selectRaw('YEAR(created_at) as year, COUNT(*) as count')
                    ->where('created_at', '>=', $startDate)
                    ->groupBy('year')
                    ->get()
                    ->map(function ($item) {
                        $item->year_name = $item->year;
                        return $item;
                    });
            default:
                return collect([]);
        }
    }

    public function updatedFilterType($value)
    {
        $this->filterData($value);
        $this->dispatch('update-chart');
    }


    public function render()
    {
        return view('livewire.backoffice.dashboard')->layout('layouts.custom');
    }
}
