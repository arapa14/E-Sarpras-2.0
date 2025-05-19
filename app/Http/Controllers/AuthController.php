<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function landing()
    {
        $qnas = Qna::all();
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();

        $data = compact('qnas', 'sliders');
        return view('landing', $data);
    }

    public function index()
    {
        return view('auth.auth');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'whatsapp' => 'required|numeric|min:10',
                'password' => 'required|min:6|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'role' => ('user'),
                'password' => Hash::make($request->password),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat registrasi.')
                ->with('form', 'register'); // flag untuk tetap di tab register
        }
    }
}
