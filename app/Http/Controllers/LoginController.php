<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginCredential;
use Illuminate\Support\Facades\Hash;
use session;
class LoginController extends Controller
{
    public function LoginForm()
    {
        return view('auth.login');
    }

    public function LoginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $hashedValue = LoginCredential::find(1)->password;
        if (LoginCredential::where('email', $request->email)->exists()) {
            if (Hash::check($password, $hashedValue)) {
                session(['authenticated' => true]);
                return redirect()->route('Dashboard');
            } else {
                toasterSuccess('Invalid password.');
                return redirect()->back();
            }
        } else {
            toasterSuccess('Invalid Email.');
            return redirect()->back();
        }
    }
    public function logout(){
         session(['authenticated' => false]);
        return redirect()->route('Login')->with('success','You are successfully Logged out.');
    }
}
