<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function registrationform()
    {
        return view('auth.register');
    }

    public function loginform()
    {
        return view ('auth.login');
    }

    public function logincheck(Request $request)
    {
        $validated= $request->validate([
            'email'=> 'required|email',
            'password'=>'required|min:3',
        ]);

       if (Auth::attempt($validated)) {
         $request->session()->regenerate();
          return redirect()->route('home')->with('success', 'You have successfully logged in!');
        }

        throw ValidationException::withMessages([
            'email' => 'Sorry, those credentials do not match',
        ]);
    }
    public function registeruser(Request $request)
    {
        $validatedData=$request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email'=> 'required|unique:users|email|max:255',
            'password'=>['required',    
            Password::min(9)->mixedCase()->numbers()],
        ]);

        User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' =>Hash::make($validatedData['password']), 
        ]);

        return redirect()->route('login')->with('Successfully logged in');

    }

    public function logoutuser(Request $request){
    Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken(); 

      return redirect('login')->with('success', 'You have been logged out.');
    }

   
}

