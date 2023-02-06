<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return redirect()->back();
        
    }

public function updatePassword(User $user ,Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        // dd($request->new_password);
        // return $user->password; 
        
        
      
         

        //  #Match The Old Password
         if(!Hash::check($request->old_password, $user->password)){
            return redirect()->back()->with("error", "Old Password Doesn't match!");
        }


        // #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
}
    

