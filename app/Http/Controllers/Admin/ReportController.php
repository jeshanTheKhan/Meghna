<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Origin;
use App\Models\Cylinder;
use App\Models\Report;

class ReportController extends Controller
{
    //Load Add File
    public function index(){
        $cylinder=cylinder::all()->where('status',1);
        $origin=Origin::all()->where('status',1);
        return view('Admin.Report.add-report',compact('cylinder','origin'));
    }
    //Load Table File
    public function table(){
        $report = Report::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Admin.Report.all-report',compact('report'));
    }
     // Save Report
     public function save(Request $req){
        $store=new Report();
        $store->test_date=$req->test_date;
        $store->serial_number=$req->serial;
        $store->name=$req->name;
        $store->user_name=$req->username;
        $store->vehicle_number=$req->vehicle;
        $store->cylinder_manu=$req->cyliner_manu;
        $store->cylinder_number=$req->cylinder_number;
        $store->cylinder_origin=$req->cylinder_origin;
        $store->manufacture_date=$req->manu_date;
        $store->water_capacity=$req->water_capacity;
        $store->marked_weight=$req->marked_weight;
        $store->cylinder_installation=$req->cylinder_installation;
        $store->cylinder_type=$req->cylinder_type;
        $store->marking_defects=$req->marking_defects;
        $store->crack=$req->crack;
        $store->thred_condition=$req->thred;
        $store->inside_condition=$req->Inside;
        $store->actual_weight=$req->actual_weight;
        $store->test_step=$req->test_step;
        $store->test_pressure=$req->test_pressure;
        $store->water_hiter=$req->water_hiter;
        $store->total_expension=$req->total_expension;
        $store->permanent_expension=$req->permanent_expension;
        $store->percentage=$req->percentage;
        $store->air_dry=$req->air_dry;
        $store->next_retest=$req->next_test;
        $store->physical_test=$req->physical_result;
        $store->hydrostatic_test=$req->hydro_result;

        $store->save();
        return redirect()->route('admin.all.report');
    }
}
