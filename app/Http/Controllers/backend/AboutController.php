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
    public function index()
    {
        return view('backend.pages.about.index');
    }

    public function about_banner(Request $request)
    {

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

        if ($result) {
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

    public function about_intro(Request $request)
    {

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

        if ($result) {
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

    public function about_steps(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $title = $request->title;
        $description = $request->description;

        // Storing new image
        $newImage = [];
        if ($request->has('image')) {
            foreach ($request->file('image') as $index => $file) {
                $ImagePath = $file->store('assets/project/', 'public');
                $newImage[$index] = $ImagePath;
            }
        }

        $Image = [];
        foreach ($title as $key => $name) {
            if (isset($newImage[$key])) {
                $Image[$key] = $newImage[$key];
            } else {
                $old = "old_image$key";
                $Image[$key] = $request->$old ?? null;
            }
        }

        $steps = [];

        // Creating the business array
        for ($i = 0; $i < count($title); $i++) {
            $steps[$i] = [
                'title' => $title[$i],
                'image' => $Image[$i],
                'description' => $description[$i]
            ];
        }

        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'steps' => json_encode($steps),
        ]);

        if ($result) {
            $response = [
                'status' => true,
                'notification' => 'About Steps Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);
    }

    public function about_teamwork(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'expert' => 'required',
            'designers' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $expert = $request->expert;
        $designers = $request->designers;

        if ($request->has('img')) {
            $file = $request->file('img');
            $ImagePath = $file->store('assets/banner/', 'public');
        } else {
            $ImagePath = $request->old_img;
        }


        // $teamwork = [];

        // for ($i = 0; $i < count($name); $i++) {
        //     $teamwork[$i] = [
        //         'expert' => $expert[$i],
        //         'designers' => $designers[$i]
        //     ];
        // }

        $teamwork = [
            'expert' => $expert,
            'designers' => $designers
        ];


        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'teams' => json_encode($teamwork),
            'team_img' => $ImagePath,
        ]);

        if ($result) {
            $response = [
                'status' => true,
                'notification' => 'About Team Work Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);
    }

    public function about_mnv_section(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mission' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        if ($request->has('image')) {
            $file = $request->file('image');
            $ImagePath = $file->store('assets/banner/', 'public');
        } else {
            $ImagePath = $request->old_img;
        }

        $mission = $request->mission;

        $mission = [
            'mission' => $mission,
            'img' => $ImagePath
        ];

        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'mission_vision' => json_encode($mission),
        ]);

        if ($result) {
            $response = [
                'status' => true,
                'notification' => 'About Mission Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);
    }

    public function about_our_values(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'values' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        if ($request->has('image')) {
            $file = $request->file('image');
            $ImagePath = $file->store('assets/banner/', 'public');
        } else {
            $ImagePath = $request->old_img;
        }

        $values = $request->values;
        $values2 = $request->values2;

        $values = [
            'values' => $values,
            'values2' => $values2,
            'img' => $ImagePath
        ];



        $result = DB::table('pages')->where('page_name', $request->page)->update([
            'our_values' => json_encode($values),
        ]);

        if ($result) {
            $response = [
                'status' => true,
                'notification' => 'About Our Values Save successfully!',
            ];
        } else {
            $response = [
                'status' => false,
                'notification' => 'Somthing Went Wrong!',
            ];
        }

        return response()->json($response);
    }
}
