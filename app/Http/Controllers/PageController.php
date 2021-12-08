<?php

namespace App\Http\Controllers;

class PageController
{

    public function about(){
        return view('page/about');
    }

    public function show(){
        return view('page/show');
    }

}
