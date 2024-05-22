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

//--------------=============================== Pages ================================------------------------------

    public function contact_us(){
        return view('frontend.pages.contact.index');
    }
    public function information(){
        return view('frontend.pages.information.index');
    }

    public function opennew_account(){
        return view('frontend.pages.opennewaccount.index');
    }

    public function faq(){
        $faq = Faq::where('status', 1)->get();
        return view('frontend.pages.faq.index', compact('faq'));
    }

    public function instantpay(){
        return view('frontend.pages.instantpay.index');
    }

    public function privacy_policy(){
        return view('frontend.pages.privacypolice.index');
    }

    public function terms_page(){
        return view('frontend.pages.terms.index');
    }

    public function refund_policy(){
        return view('frontend.pages.refund_policy.index');
    }

//--------------=============================== Pages ================================------------------------------





}