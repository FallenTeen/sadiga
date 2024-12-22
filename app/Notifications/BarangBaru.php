<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;

class BarangBaru extends Notification
{
    use Queueable;
    public $barangId;

    /**
     * Create a new notification instance.
     */
    public function __construct($barangId)
    {
        $this->barangId = $barangId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toDatabase($notifiable)
    {
        // Generate the URL for the edit page
        $editUrl = route('productmanage.edit', ['barangId' => $this->barangId]);

        return [
            'title' => 'Barang Baru Ditambahkan',
            'message' => "Barang Baru dengan ID {$this->barangId} telah ditambahkan. Silahkan tambahkan detail barang sebelum publikasi. <a href=\"{$editUrl}\" class=\"text-blue-500 underline\" target=\"_blank\">Klik di sini untuk mengedit.</a>",
            'barang_id' => $this->barangId,
            'url' => $editUrl,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
