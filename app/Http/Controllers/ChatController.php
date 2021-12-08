<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Pusher\Pusher;


class ChatController extends Controller
{
    public function notification()
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );


        $data['message'] = $this->messageHTML();
        $pusher->trigger('notify-channel', 'App\\Events\\Notify', $data);
    }



    public function messageHTML() {

        return view('components/chat-message', ['text' => 'Hello franzi'])->render();

    }


}
