<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    public function index() {
        
    $homeDetails = DB::table('pages')->where('page_name', 'home')->first();

    $banners = json_decode($homeDetails->banners, true);
    $marques = json_decode($homeDetails->marque, true);
    $businessData = json_decode($homeDetails->business, true);
    $counter = json_decode($homeDetails->counters, true);
    $project = json_decode($homeDetails->projects, true);
    return view('frontend.pages.home.index', compact('homeDetails', 'banners', 'marques', 'businessData', 'counter', 'project'));
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

        $aboutDetails = DB::table('pages')->where('page_name', 'about')->first();
        $introduction = json_decode($aboutDetails->introduction, true);
        $steps = json_decode($aboutDetails->steps, true);
        $teams = json_decode($aboutDetails->teams, true);
        $missionVision = json_decode($aboutDetails->mission_vision, true);
        $ourvalues = json_decode($aboutDetails->our_values, true);
    
        return view('frontend.pages.about.about-us', compact('aboutDetails','introduction', 'steps', 'teams', 'missionVision', 'ourvalues'));
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