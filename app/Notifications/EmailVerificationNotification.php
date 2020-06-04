<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;

class EmailVerificationNotification extends VerifyEmail
{
    public function verificationUrl($notifiable)
    {
        return parent::verificationUrl($notifiable);
    }
}
