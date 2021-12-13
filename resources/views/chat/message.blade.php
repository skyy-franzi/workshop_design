@extends('layouts.main')


@section('title', 'Message')

@section('content')
    <div class="row clearfix">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <ul class="mail_list list-group list-unstyled">
                @foreach($chats as $chat)
                    <li class="list-group-item">
                        <div class="media">
                            <div class="pull-left">
                                <div class="controls">
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm-down m-r-20"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{ route('chat.channel', ['offer_id' => $chat->first()->offer_id, 'sender_user_id'=> $chat->first()->sender_user_id]) }}" class="m-r-10">
                                        @if($chat->first()->recipient_user_id == 0)
                                            Owner
                                        @else
                                            Customer
                                        @endif - @php
                                        $offer = \App\Models\Offer::find($chat->first()->offer_id);
                                        $offerTitle = $offer->title;
                                        @endphp

                                        {{ $offer->title }}
                                    </a>

                                    <small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">{{ $chat->first()->message }} </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
