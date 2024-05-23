<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index() {
        return view('backend.pages.about.index');
    }

    public function about_banner(Request $request){

        $validator = Validator::make($request->all(), [
            'Banner' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }
        
        $file = $request->file('Banner');
        $bannerPath = $file->store('assets/banner/', 'public');

        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'banners' => $bannerPath,
        ]);

        if($result){
            $response = [
                'status' => true,
                'notification' => 'About Banners Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);

    }

    public function about_intro(Request $request){

        $validator = Validator::make($request->all(), [
            'intro' => 'required',
            'partner' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }   

        $intro_data = $request->intro;
        $partner_data = $request->partner;

        $intro = [
            'intro' => $intro_data,
            'partner' => $partner_data
        ];

        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'introduction' => json_encode($intro),
        ]);

        if($result){
            $response = [
                'status' => true,
                'notification' => 'About Intro Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);
        
    }

    public function about_steps(Request $request){

        
        
    }

    public function about_business(Request $request){

    }

    public function about_counter(Request $request){

    }

    public function about_project(Request $request){

    }


}
