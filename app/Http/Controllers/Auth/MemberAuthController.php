<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.member_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        if (Auth::guard('web')->attempt([
            'Email' => $credentials['Email'],
            'Password' => $credentials['Password'],
            'Status' => 'Enabled'
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'Email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
