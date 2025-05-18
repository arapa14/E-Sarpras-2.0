<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Slider;
use Illuminate\Http\Request;

class AuthController
{
    public function landing() {
        $qnas = Qna::all();
         $sliders = Slider::where('is_active', true)->orderBy('order')->get();

        $data = compact('qnas', 'sliders');
        return view('landing', $data);
    }
}
