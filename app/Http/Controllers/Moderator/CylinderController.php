<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cylinder;

class CylinderController extends Controller
{
    //View Add File
    public function index(){
        return view('Moderator.Cylinder.add-cylinder');
    }
    //View Table File
    public function table(){
        $cylinder = Cylinder::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Moderator.Cylinder.all-cylinder',compact('cylinder'));
    }
    // Save Cylinder
    public function save(Request $req){
        $store=new Cylinder();
        $store->name=$req->name;
        $store->save();
        return redirect()->route('moderator.all.cylinder-manu');
    }

}
