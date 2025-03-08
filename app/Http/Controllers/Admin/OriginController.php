<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    //Load add File
    public function index(){
        return view('Admin.Origin.add-origin');
    }
    //Load Table File
    public function table(){
        return view('Admin.Origin.all-origin');
    }
}
