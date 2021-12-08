<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Offer;
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


    public function messageHTML()
    {

        return view('components/chat-message', ['text' => 'Hello franzi'])->render();

    }


    public function channel($offer_id, Request $request)
    {
        $userId = $request->session()->get('loginUser');


        if ($request->has('submit')) {



            $chat = new Chat();
            $chat->sender_user_id = $userId;
            $chat->recipient_user_id = $userId;
            $chat->read = 0 ;
            $chat->message = $request->input('message');
            $chat->offer_id = $offer_id;
            $chat->save();

        }

        $chatAll = Chat::where('sender_user_id', $userId)
            ->where('offer_id', $offer_id)
            ->orderBy('created_at')
            ->get();
        return view('chat/channel', ['chats' => $chatAll, 'offerId' => $offer_id]);
    }


}
