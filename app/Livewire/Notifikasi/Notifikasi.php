<?php

namespace App\Livewire\Notifikasi;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;

class Notifikasi extends Component
{
    public $notifications;
    public $filter = 'daily'; // Filter default

    public function mount()
    {
        $this->loadNotifications();
    }

    /**
     * Load notifications based on the filter.
     */
    public function loadNotifications()
    {
        $user = auth()->user();

        if ($user) {
            // Query notifikasi berdasarkan filter
            $query = $user->notifications();

            if ($this->filter == 'daily') {
                $this->notifications = $query->whereDate('created_at', Carbon::today())->get();
            } elseif ($this->filter == 'weekly') {
                $this->notifications = $query->whereBetween('created_at', [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ])->get();
            } elseif ($this->filter == 'monthly') {
                $this->notifications = $query->whereMonth('created_at', Carbon::now()->month)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->get();
            } else {
                $this->notifications = $query->get(); // Default jika tidak ada filter
            }
        } else {
            $this->notifications = collect(); // Kosongkan jika tidak ada user
        }
    }

    /**
     * Tandai notifikasi sebagai dibaca.
     */
    public function markAsRead($notificationId)
    {
        $user = auth()->user();

        if ($user) {
            $notification = $user->notifications()->find($notificationId);
            if ($notification) {
                $notification->markAsRead();
                $this->loadNotifications(); // Memuat ulang notifikasi setelah ditandai sebagai dibaca
            }
        }
    }

    /**
     * Update filter dan muat ulang notifikasi.
     */
    public function updatedFilter()
    {
        $this->loadNotifications(); // Muat ulang notifikasi saat filter berubah
    }

    public function render()
    {
        return view('livewire.notifikasi.notifikasi', [
            'notifications' => $this->notifications
        ])->layout('layouts.custom');
    }
}
