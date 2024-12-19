<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Barang;

class ProdukDesk extends Component
{
    public $barangId, $barang;
    public $isLiked = false;

    public function mount($id)
    {
        $this->barangId = $id;
        $this->barang = Barang::findOrFail($id);
        if (auth()->check()) {
            $this->isLiked = auth()->user()->likedBarangs()->where('barang_id', $this->barangId)->exists();
        }
    }

    public function toggleLike()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login untuk menyukai item.');
        }

        $user = auth()->user();
        if ($this->isLiked) {
            $user->likedBarangs()->detach($this->barangId);
        } else {
            $user->likedBarangs()->attach($this->barangId);
        }

        $this->isLiked = !$this->isLiked;
        $this->dispatch('likeUpdated');
    }

    public function generateWhatsAppLink()
    {
        $phoneNumber = '6285156208507';
        $message = rawurlencode("Halo, saya tertarik untuk memesan barang berikut:\n\nNama Barang: {$this->barang->nama_barang}\nHarga: Rp " . number_format($this->barang->harga_akhir, 0, ',', '.') . "\n\nTerima kasih.");
        return "https://wa.me/{$phoneNumber}?text={$message}";
    }
    public function render()
    {
        return view('livewire.component.produk-desk', [
            'barang' => $this->barang,
        ])->layout('layouts.custom');
    }
}
