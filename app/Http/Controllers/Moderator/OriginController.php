<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    //Load add File
    public function index(){
        return view('Moderator.Origin.add-origin');
    }
    //Load Table File
    public function table(){
        return view('Moderator.Origin.all-origin');
    }
}
