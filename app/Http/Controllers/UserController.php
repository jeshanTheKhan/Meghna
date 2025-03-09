<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    //
    public function index(){
        $report=Report::all()->where('user_name',Auth::user()->user_name);
        return view('dashboard',compact('report'));
    }
    public function view($id){
        $report=Report::find($id);
        $pdf = Pdf::loadView('all-reportuser-view',compact('report'));
        return $pdf->stream('invoice.pdf');
    }
    // User
    public function userdetails(){
        $user=User::all();
        return view('Admin.User.users',compact('user'));
    }
    public function edit($id){
        $user=User::find($id);
        return view('Admin.User.edit',compact('user'));
    }
    public function update(Request $req): RedirectResponse{
        
        $store= User::find($req->c_id);
        $store->name=$req->name;
        $store->email=$req->email;
        $store->password = Hash::make($req->password);

        
         $store->save();
            return redirect()->back();
        }
}
