<?php

namespace App\Service;

use Illuminate\Support\Facades\Session;

class MessageService
{
    public function add(string $messageText, string $messageType)
    {
        $allSessionMessages = Session::get('messages');
        $allSessionMessages[] = [$messageText, $messageType];
        Session::put('messages', $allSessionMessages);
    }

    public function getAll():array
    {
        $message = Session::get('messages');
        if (!$message) {
            return [];
        }
        Session::forget('messages');
        return $message;
    }

}
