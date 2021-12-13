@extends('layouts.main')

@section('title', 'Offer')

@section('content')
    <section class="d-flex justify-content-center">
        <main>
            @include('components.messages')
            <h1 class="mb-5">Create an offer!</h1>
            <form method="POST" action="{{ route('offer.create') }}">
                <div class="form-group">
                    <div class="form-group">


                        <label for="offer_date">Date:
                            <input type="date" name="offer_date" class="form-control" value="" style="width: 400px;"/></label><br>
                        <label for="title">Title:
                            <input type="text" name="title" class="form-control" value="" style="width: 400px;"/></label><br>

                        <label for="description">Description:
                            <textarea name="description" class="form-control mb-5"
                            style="
                                     border: 0px;
                                     border-bottom: 1px solid #a5a5a5;
                                     min-height: 80px;
                                     padding: 0px;
                                     padding-top: 10px;
                            "></textarea>
                        <label for="street">Street:
                            <input type="text" name="street" class="form-control" value="" style="width: 400px;"/></label><br>
                        <label for="city">City:
                            <input type="text" name="city" class="form-control" value="" style="width: 400px;"/></label><br>
                        <label for="zip">Zip:
                            <input type="text" name="zip" class="form-control" value="" style="width: 400px;"/></label><br>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-dark" type="submit" name="submit" value="Send" style="width: 400px;"/>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
        </main>
    </section>
@endsection
