@extends('layouts.main')


@section('title', 'Detail')

@section('content')

    <div class="container">
        <div class="card">
             <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/GrobwWXuvTMgehN8bID_IFA5BSOKFiZsAG7wLQszDHOrIPGmrP-uyvucbu2T4-SwUld9uRLJUAyiS0r4aCJs7h3O_Q6CgvAD2GymYwzF66v7gQ8-E5fj3OCNVDlIztb6IAuC">

            <div class="card-body">
                <p class="d-flex justify-content-end">{{ $offers->offer_date }}</p>
                <h3>{{ $offers->title }}</h3>
                <p class="txt2">{{ $offers->description }}</p>
            </div>
            <div class="card-footer">
                <div class="justify-content-left"><i class="fas fa-map-marker-alt"></i>
                <p>{{ $offers->street }}</p>
                <p>{{ $offers->zip }}</p>
                <p>{{ $offers->city }}</p>
                </div>
                <p class="d-flex justify-content-end">
                    <span class="views"><i class="far fa-eye"></i> 45 Views</span>
                </p>
            </div>
        </div>
    </div>




@endsection
