
@extends('layouts.main')


@section('title', 'Notification')

@section('content')
    <main class="content">
        <div class="container p-0">

            <h1 class="h3 mb-3">Messages</h1>

            <div class="card">
                <div class="row g-0">

                    <div class="col-12 ">
                        <div class="position-relative">
                            <div class="chat-messages p-4">
                                @foreach($chats as $chat)
                                    <div class="jonas
                                      @if($chat->recipient_user_id == 0)
                                            chat-message-left
                                       @else
                                             chat-message-right
                                        @endif pb-4">
                                        <div>
                                            <div class="text-muted small text-nowrap mt-2"> {{$chat->created_at->format('H:i')}}</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3 ml-3">
                                            <div class="font-weight-bold mb-1">
                                                @if($chat->recipient_user_id == 0)
                                                    Owner
                                                @else
                                                    Customer
                                                @endif
                                            </div>
                                            {{$chat->message}}
                                        </div>
                                    </div>
                            @endforeach
                            </div>
                        </div>
                        <form method="POST" action="{{ route('chat.channel', ['offer_id' => $offerId, 'sender_user_id'=> $sender_user_id]) }}">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="flex-grow-0 py-3 px-4 border-top">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="message" placeholder="Type your message">

                                        <input type="submit" name="submit" class="btn btn-primary"></input>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
