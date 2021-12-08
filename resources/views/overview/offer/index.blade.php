@extends('layouts.main')


@section('title', 'Offer')

@section('content')
    <h1 class="mb-5">Willkommen!</h1>
    <div class="row">
    @foreach($offers as $offer)
                <div class="col-md-4">
                    <div class="card mb-5">
                        <h5 class="card-header">{{ $offer->title }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{ $offer->title }}</h5>
                            <p class="card-text">{!! $offer->description !!}</p>
                        </div>
                        <a class="btn btn-light" href="{{ route('offer.show', ['id' => $offer->id]) }}">See Offer</a>
                    </div>
                </div>
    @endforeach
    </div>
@endsection
