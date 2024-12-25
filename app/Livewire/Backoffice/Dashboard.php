<?php

namespace App\Livewire\Backoffice;

use Livewire\Component;
use App\Models\Barang;
use App\Models\User;
use App\Models\Kategori;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $jmlUserBaru, $jmlKategori, $jmlBarangPerKategori, $itemPalingBanyakDisukai, $jmlItemBaruPerInterval, $grafikAnalisaItemDisukai, $currentDateTime, $currentTimeOfDay, $filterType;

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
        $now = Carbon::now('Asia/Jakarta');
        $startDate = null;

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

        if ($filterType === 'weekly') {
            $this->jmlItemBaruPerInterval = Barang::selectRaw('YEAR(created_at) as year, WEEK(created_at) as week_number, COUNT(*) as count')
                ->where('created_at', '>=', $startDate)
                ->groupByRaw('YEAR(created_at), WEEK(created_at)')
                ->get()
                ->map(function ($item) {
                    $item->week_name = 'Minggu ke-' . $item->week_number;
                    return $item;
                });
        } elseif ($filterType === 'monthly') {
            $this->jmlItemBaruPerInterval = Barang::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
                ->where('created_at', '>=', $startDate)
                ->groupByRaw('YEAR(created_at), MONTH(created_at)')
                ->get()
                ->map(function ($item) {
                    $item->month_name = Carbon::createFromFormat('Y-m', "{$item->year}-{$item->month}")->format('F');
                    return $item;
                });
        } elseif ($filterType === 'yearly') {
            $this->jmlItemBaruPerInterval = Barang::selectRaw('YEAR(created_at) as year, COUNT(*) as count')
                ->where('created_at', '>=', $startDate)
                ->groupBy('year')
                ->get()
                ->map(function ($item) {
                    $item->year_name = $item->year;
                    return $item;
                });
        }

        $this->itemPalingBanyakDisukai = Barang::withCount('likedByUsers')
            ->orderByDesc('liked_by_users_count')
            ->take(3)
            ->get();

        $this->grafikAnalisaItemDisukai = Barang::selectRaw('DATE(tb_barang.created_at) as date, kategori_id, COUNT(*) as count')
            ->join('tb_kategori', 'tb_kategori.id', '=', 'tb_barang.kategori_id')
            ->where('tb_barang.created_at', '>=', $startDate)
            ->groupBy('date', 'kategori_id')
            ->get();

        $this->dispatch('dataUpdated');
    }

    public function updatedFilterType($value)
    {
        $this->filterData($value);
        $this->dispatch('update-chart');
    }

    public function getChartData()
    {
        $itemsPerCategory = $this->jmlBarangPerKategori->mapWithKeys(function ($kategori) {
            return [$kategori->name => $kategori->total_items];
        });

        $likedItemsPerCategory = $this->grafikAnalisaItemDisukai->groupBy('kategori_id')->map(function ($group) {
            return $group->sum('count');
        });
        return [
            'itemsPerCategory' => $itemsPerCategory,
            'likedItemsPerCategory' => $likedItemsPerCategory
        ];
    }


    public function render()
    {
        return view('livewire.backoffice.dashboard')->layout('layouts.custom');
    }
}