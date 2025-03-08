<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CylinderController extends Controller
{
    //View Add File
    public function index(){
        return view('Admin.Cylinder.add-cylinder');
    }
    //View Table File
    public function table(){
        return view('Admin.Cylinder.all-cylinder');
    }
}
