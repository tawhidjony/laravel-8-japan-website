<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {

        if ($request->user()->hasVerifiedEmail()) {
            // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
            $code['osh_code'] = 'OSH'.'-'.rand(1000000,000000);
            $user = User::find($request->id);
            return $user->update($code);
            return redirect()->route('register.done');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }



        // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        return redirect()->route('register.done');
    }
}
