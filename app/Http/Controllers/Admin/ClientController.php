<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class ClientController extends Controller
{
    //Load View File
    public function index(){
        return view('Admin.Client.add-client');
    }
    //Load Table File
    public function table(){
         $user=User::all();
        return view('Admin.Client.all-client',compact('user'));
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
       
        return redirect()->route('admin.all.client');
    }
    // Delete
    public function delete($id){
        $result = User::find($id);
        // Delete the database entry
        $result->delete();
        return redirect()->back();
    }
}
