<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Origin;

class OriginController extends Controller
{
    //Load add File
    public function index(){
        return view('Moderator.Origin.add-origin');
    }
    //Load Table File
    public function table(){
        $origin = Origin::orderBy('id', 'desc')->get();
        return view('Moderator.Origin.all-origin',compact('origin'));
    }
    public function save(Request $req){
        $store=new Origin();
        $store->name=$req->name;
        $store->save();
        return redirect()->route('moderator.all.cylinder-origin');
    }
}
