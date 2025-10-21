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

    public function eb1visa()
    {


    return view('pages.eb1-visa');
    }



    public function contactus()
{


    return view('pages.contactus');
}



public function o1avisa()
{


    return view('pages.o1avisa');
}

public function eb2niw()
{


    return view('pages.eb2-niw');
}



public function ourstory()
{


    return view('pages.our-story');
}



public function leadershipteam()
{


    return view('pages.leadership-team');
}



    public function reports()
{


    return view('pages.reports');
}

public function annualreport2024()
{


    return view('pages.annual-report-2024');
}



public function partnershipsboundless()
{


    return view('pages.partnerships-boundless');
}

public function medianews()
{


    return view('pages.media-news');
}


    public function webinar()
{


    return view('pages.webinar');
}

public function turingai()
{


    return view('pages.turing-ai');
}

    public function reviews()
{


    return view('pages.reviews');
}

public function resources()
{


    return view('pages.resources');
}


public function casestudies()
{


    return view('pages.case-studies');
}


public function vodcast()
{


    return view('pages.vodcast');
}

public function blog()
{


    return view('pages.blog');
}

public function faqs()
{


    return view('pages.faqs');
}

public function whoarewe()
{


    return view('pages.who-are-we');
}

public function refundpolicy()
{


    return view('pages.refund-policy');
}

public function disclaimer()
{


    return view('pages.disclaimer');
}

    public function testimonials()
    {
        return view('pages.testimonials');
    }


    public function privacypolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsofuse()
    {
        return view('pages.terms-of-use');
    }





}
