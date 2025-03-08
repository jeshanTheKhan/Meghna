<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Load View File
    public function index(){
        return view('Moderator.Client.add-client');
    }
    //Load Table File
    public function table(){
        return view('Moderator.Client.all-client');
    }
}
