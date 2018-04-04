<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact')->with([
            'email' => config('app.supportEmail')
        ]);
    }

    public function calculate()
    {
        return view('pages.calculateBMI');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'uniqueid' => 'required|alpha_num',
            'gender' => 'required',
            'weight' => 'required|min:0|numeric',
            'height' => 'required|min:0|numeric',
        ]);
        $bmi = '';
        $uniqueid = $request->input('uniqueid', null);
        $gender = $request->input('gender', null);
        $weight = $request->input('weight', 1.00);
        $height = $request->input('height', 1.00);

        if ($uniqueid && $gender && $weight && $height) {
            $bmiHeight = $height * $height;
            $bmi = $weight / $bmiHeight;
        }

        return view('result')->with([
            'uniqueid' => $uniqueid,
            'gender' => $gender,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmi
        ]);
    }
}
