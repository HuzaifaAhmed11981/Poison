<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginCredential;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function Profile(){
        $data = LoginCredential::find(1);
          return view('admin.profile.index',compact('data'));
    }
    public function ChangeEmail(Request $request){
        $email = $request->email;
        LoginCredential::find(1)->update([
           'email' => $request->email
        ]);

        toasterSuccess('Email updated successfully.');
        return redirect()->back();


    }
    public function ChangePassword(Request $request){
     $hashedValue = LoginCredential::find(1)->password;
     $old_password = $request->old_password;
     $new_password = $request->new_password;

       if(Hash::check($old_password, $hashedValue)){
              $request->validate([
                    'new_password' => 'required|min:8|confirmed'
              ]);
            LoginCredential::find(1)->update([
            'password' => Hash::make($new_password)
            ]);
          toasterSuccess('Password Updated Successfully.');
            return redirect()->back();
       }else{
          return redirect()->back()->with('error','old password invalid.');
       }

    }
}
