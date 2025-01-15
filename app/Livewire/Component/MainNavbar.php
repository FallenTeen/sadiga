<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Redirect;

use App\Models\Kategori;
use App\Models\Barang;

class MainNavbar extends Component
{
    public $likedItems = [], $searchTerm = '', $recommendedItems = [], $categoriesWithTopItems = [];

    protected $listeners = ['likeUpdated' => 'updateLikedItems'];

    public function mount()
    {
        $this->categoriesWithTopItems = $this->getTop3RecommendedItemsByCategory();
        $this->recommendedItems = Barang::where('rekomendasi', true)
            ->get(['id', 'nama_barang', 'gambar', 'harga']);
        if (auth()->check()) {
            $this->likedItems = auth()->user()->likedBarangs()->get(['tb_barang.id', 'tb_barang.nama_barang', 'tb_barang.harga']);
        } else {
            $this->likedItems = collect();
        }
    }

    public function getTop3RecommendedItemsByCategory()
    {
        // Fetch all categories
        $categories = Kategori::all();

        // Prepare an array to store categories with their top 3 recommended items
        $categoriesWithTopItems = [];

        // Loop through each category and fetch top 3 recommended items
        foreach ($categories as $category) {
            // Fetch top 3 recommended items for the current category
            $topItems = $category->barangs()->where('rekomendasi', true)->take(3)->get();

            // Add to the result array
            $categoriesWithTopItems[] = [
                'category' => $category,
                'topItems' => $topItems
            ];
        }

        return $categoriesWithTopItems;
    }

    public function search()
    {
        return redirect()->route('produk', ['search' => $this->searchTerm]);
    }

    public function updateLikedItems()
    {
        if (auth()->check()) {
            $this->likedItems = auth()->user()->likedBarangs()->get(['tb_barang.id', 'tb_barang.nama_barang', 'tb_barang.harga']);
        } else {
            $this->likedItems = collect();
        }
    }


    public function render()
    {
        return view('livewire.component.main-navbar', [
            'recommendedItems' => $this->recommendedItems,
            'categoriesWithTopItems' => $this->categoriesWithTopItems,
        ]);
    }
}
