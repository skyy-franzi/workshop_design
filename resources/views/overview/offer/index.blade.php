@extends('layouts.main')


@section('title', 'Offer')

@section('content')
    <h1 class="pb-5">Offer Overview<a class="btn btn-primary ml-5" href="{{ route('offer.create') }}">Create an offer</a></h1>
    <div class="row">
    @foreach($offers as $offer)
            <div class="col-md-4">
                    <div class="card card-custom bg-white border-white">
                        <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="https://health.gov/sites/default/files/2019-06/SVG%20Layer4.svg" alt="Avatar" />
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">{{ $offer->title }}</h4>
                            <div class="justify-content-left">
                                <p><i class="fas fa-map-marker-alt"></i> {{ $offer->street }} - {{ $offer->zip }} - {{ $offer->city }}</p>
                            </div>
                        </div>
                        <div class="card-footer" style="background: inherit; border-color: inherit;">
                            <p><i class="far fa-eye"></i> {{ $offer->views_count }} Views</p>
                            <a class="btn btn-light" href="{{ route('offer.show', ['id' => $offer->id]) }}">See Offer</a>
                        </div>
                    </div>
            </div>
    @endforeach
        <div class="col-md-4">

        </div>
    </div>
@endsection
