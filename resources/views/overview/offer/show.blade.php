@extends('layouts.main')


@section('title', 'Detail')

@section('content')
    <div class="row">
    <div class="col-md-6 justify-content-center">
        <div class="card">
             <img class="card-img-top" src="https://health.gov/sites/default/files/2019-06/SVG%20Layer4.svg">

            <div class="card-body">
                <p class="d-flex justify-content-end">{{ $offers->offer_date }}</p>
                <h3>{{ $offers->title }}</h3>
                <p class="txt2">{{ $offers->description }}</p>
                <p><i class="fas fa-user"></i> {{$offerUser->username}}</p>
                <div class="justify-content-left">
                    <p><i class="fas fa-map-marker-alt"></i> {{ $offers->street }} - {{ $offers->zip }} - {{ $offers->city }}</p>
                </div>
                <p class="d-flex justify-content-end">
                    <span class="views"><i class="far fa-eye"></i> {{ $offers->views_count }} Views</span>
                </p>
            </div>

            @if($offerUser->id != session('loginUser'))
               <div class="card-footer">
                        <a href="{{ route('chat.channel', ['offer_id' => $offers->id, 'sender_user_id' => session('loginUser')]) }}" class="btn btn-primary">Make a request</a>
               </div>
            @endif
        </div>
    </div>
    </div>
@endsection
