<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index');
    }

//--------------=============================== Pages ================================------------------------------

    public function contact_Us(){
        return view('frontend.pages.contactus.contact-us');
    }
    public function projects(){
        return view('frontend.pages.projects.projects-and-accreditations');
    }

    public function products(){
        return view('frontend.pages.products.products');
    }

    public function our_Business(){
        return view('frontend.pages.ourbusiness.our-business');
    }

    public function career(){
        return view('frontend.pages.career.careers');
    }

    public function about_Us(){
        return view('frontend.pages.about.about-us');
    }

//--------------=============================== Pages ================================------------------------------



//--------------=============================== other ================================------------------------------

public function not_found(){

    return view('frontend.pages.404.index');
}
public function thank_you(){

    return view('frontend.pages.thankyou.index');
}

public function cookie_policy(){

    return view('frontend.pages.cookiePolicy.index');
}

//--------------=============================== other ================================------------------------------



}