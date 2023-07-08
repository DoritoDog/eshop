<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'phone' => ['required'],
            'company_name' => ['required'],
            'vat' => ['required'],
            'company_address1' => ['required'],
            'company_address2' => ['required'],
            'company_city' => ['required'],
            'company_postal_code' => ['required'],
            'country' => ['required'],
            'invoice_email' => ['required', 'email'],
            'tracking_email' => ['required', 'email'],
        ]);

        $user = UserFactory::new()->create([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'phone' => $request->get('phone'),
            'company_name' => $request->get('company_name'),
            'vat' => $request->get('vat'),
            'company_address1' => $request->get('company_address1'),
            'company_address2' => $request->get('company_address2'),
            'company_city' => $request->get('company_city'),
            'company_postal_code' => $request->get('company_postal_code'),
            'country' => $request->get('country'),
            'invoice_email' => $request->get('invoice_email'),
            'tracking_email' => $request->get('tracking_email'),
        ]);

        $user->save();

        return redirect('/');
    }
}
