<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Str;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    
     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
             'password' => ['required', 'confirmed', Rules\Password::defaults()],
         ]);
     
         if (User::where('email', $request->email)->exists()) {
             return back()->withErrors(['email' => 'The email is already taken.']);
         }
     
         // Generate unique username
         $baseUserName = Str::slug($request->name, '_'); // Convert name to slug format
         $randomNumber = rand(100, 999); // Generate a random 3-digit number
         $username = "@{$baseUserName}_{$randomNumber}";
     
         // Ensure username is unique in the database
         while (User::where('user_name', $username)->exists()) {
             $randomNumber = rand(100, 999);
             $username = "@{$baseUserName}_{$randomNumber}";
         }
     
         // Create user
         $user = User::create([
             'name' => $request->name,
             'user_name' => $username, // Store generated username
             'email' => $request->email,
             'password' => Hash::make($request->password),
         ]);
     
         event(new Registered($user));
     
         Auth::login($user);
     
         return redirect(route('dashboard', absolute: false));
     }
    
}
