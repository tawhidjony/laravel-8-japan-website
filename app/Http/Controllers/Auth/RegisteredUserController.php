<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerNext(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = $request->all();
        $request->session()->put(['user' => $user]);
        return redirect()->route('preview.register');
    }

    public function registerPreview(Request $request){
        $userData = $request->session()->get('user');
        if(!$userData){
            return redirect()->back();
        }
        return view('auth.register-preview', compact('userData'));
    }

    public function store(Request $request)
    {

        $userData = $request->session()->get('user');

        Auth::login($user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'osh_code' => 'OSH'.rand(10000, 99999),
        ]));

        if($user){
            $request->session()->forget('user');
            event(new Registered($user));
            return redirect(RouteServiceProvider::HOME);
        }

    }
    public function register_success()
    {
        return view('auth.registration-success');
    }
}
