<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferCreateController
{
    public function create(Request $request)
    {

        if ($request->has('submit')) {

            $offers = new Offer();
            $offers->user_id = $request->session()->get('loginUser');

            $dateInput = $request->input('offer_date');
            $titleInput = $request->input('title');
            $descriptionInput = nl2br($request->input('description'));
            $streetInput = $request->input('street');
            $cityInput = $request->input('city');
            $zipInput = $request->input('zip');


            $offers->offer_date = $dateInput;
            $offers->title = $titleInput;
            $offers->description = $descriptionInput;
            $offers->street = $streetInput;
            $offers->city = $cityInput;
            $offers->zip = $zipInput;
            $offers->lat = 0;
            $offers->lng = 0;
            $offers->views_count = 0;
            $offers->expiration_time = "01.01.1111";
            $offers->save();


            return redirect('overview/offer/show/' . $offers->id);
        }

        return view('overview/offer/create');
    }

    public function update($id, Request $request)
    {

        if ($request->has('submit')) {
            if ($id) {
                $offers = Offer::find($id);
            }

            $titleInput = $request->input('title');
            $descriptionInput = nl2br($request->input('description'));
            $streetInput = $request->input('street');
            $cityInput = $request->input('city');
            $zipInput = $request->input('city');


            return redirect('overview/offer/create/' . $offers->id);
        }
    }
}
