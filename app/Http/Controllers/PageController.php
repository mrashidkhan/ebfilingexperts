<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {

        return view('pages.index', );
    }


    // }

    public function eb1avisa()
    {


    return view('pages.eb1avisa');
    }



    public function contactus()
{


    return view('pages.contactus');
}



public function o1avisa()
{


    return view('pages.o1avisa');
}


    public function testimonials()
    {
        return view('pages.testimonials');
    }


    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }





}
