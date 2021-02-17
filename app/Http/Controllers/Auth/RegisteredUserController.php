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
    public function registerGet(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = $request->all();
        $request->session()->put(['user' => $user]);
        return redirect()->route('preview.register');
    }
    public function registerPreview(Request $request){

        $userData = $request->session()->get('user');
        return view('frontend.preview-register', compact('userData'));
    }

    // public function userStore(Request $request){

    //     $userData = $request->session()->get('user');

    //     $user = User::create([
    //         'name' => $userData['name'],
    //         'email' => $userData['email'],
    //         'password' => Hash::make($userData['password']),
    //     ]);

    //     if($user){
    //         return redirect()->route('verify.email');
    //     }
    // }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|confirmed|min:8',
        // ]);
        $userData = $request->session()->get('user');
        Auth::login($user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
