<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;

class OfferController
{
    public function index()
    {
        $offers = Offer::orderBy('created_at', 'DESC')->get();

        return view('overview.offer.index', [
            'offers' => $offers,
        ]);
    }

    public function show($id)
    {
        /** @var Offer $offers */
        $offers = Offer::find($id);

        $offers->views_count = $offers->views_count + 1 ;
        $offers->save();

        $offerUser = User::find($offers->user_id);


        return view('overview.offer.show', [
            'offers' => $offers,
            'offerUser' => $offerUser
        ]);
    }
}
