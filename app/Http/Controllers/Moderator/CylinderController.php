<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CylinderController extends Controller
{
    //View Add File
    public function index(){
        return view('Moderator.Cylinder.add-cylinder');
    }
    //View Table File
    public function table(){
        return view('Moderator.Cylinder.all-cylinder');
    }
}
