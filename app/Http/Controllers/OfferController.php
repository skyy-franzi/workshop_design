<?php

namespace App\Http\Controllers;

use App\Models\Offer;

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
        $offers = Offer::find($id);

        return view('overview.offer.show', [
            'offers' => $offers,
        ]);
    }
}
