<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;


class ClientController extends Controller
{
    //Load View File
    public function index(){
        return view('Moderator.Client.add-client');
    }
    //Load Table File
    public function table(){
        $user = User::where('user_role', 'client')->orderBy('id', 'desc')->get();
        return view('Moderator.Client.all-client',compact('user'));
    }
    // Save Client information
    public function save(Request $req){
        $store=New User();
        $store->name=$req->name;
        // Generate unique username
        $baseUserName = Str::slug($req->name, '_'); // Convert name to slug format
        $randomNumber = rand(100, 999); // Generate a random 3-digit number
        $username = "@{$baseUserName}_{$randomNumber}";
         // Ensure username is unique in the database
         while (User::where('user_name', $username)->exists()) {
            $randomNumber = rand(100, 999);
            $username = "@{$baseUserName}_{$randomNumber}";
        }
        $store->user_name = $username;
        $store->password= $username;


        
        $store->save();
       
        return redirect()->route('moderator.all.client');
    }

    
}
