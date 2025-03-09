<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Origin;


class OriginController extends Controller
{
    //Load add File
    public function index(){
        return view('Admin.Origin.add-origin');
    }
    //Load Table File
    public function table(){
        $origin = Origin::orderBy('id', 'desc')->get();
        return view('Admin.Origin.all-origin',compact('origin'));
    }
    // Save Origin
    public function save(Request $req){
        $store=new Origin();
        $store->name=$req->name;
        $store->save();
        return redirect()->route('admin.all.cylinder-origin');
    }
    // Delete
    public function delete($id){
        $result = Origin::find($id);
        // Delete the database entry
        $result->delete();
        return redirect()->back();
    }
   
}
