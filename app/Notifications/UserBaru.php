<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class UserBaru extends Notification
{
    use Queueable;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['database'];
    }
    public function toDatabase($notifiable)
    {
        return [
            'title' => 'User Baru Terdaftar',
            'message' => isset($this->user)
                ? "Pengguna baru dengan username {$this->user->name} telah mendaftar."
                : 'Informasi pengguna tidak tersedia.',
        ];
    }

}

