<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        $bmi = '';
        $uniqueid = $request->input('uniqueid', null);
        $gender = $request->input('gender', null);
        $weight = $request->input('weight', 1.00);
        $height = $request->input('height', 1.00);

        if ($uniqueid && $gender && $weight && $height) {
            $bmiHeight = $height * $height;
            $bmi = $weight / $bmiHeight;
        }

        return view('welcome')->with([
            'uniqueid' => $uniqueid,
            'gender' => $gender,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmi
        ]);
    }
}
