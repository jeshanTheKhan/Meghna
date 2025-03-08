<?php

namespace App\Http\Controllers\Moderator;

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
        return view('Moderator.Report.add-report',compact('cylinder','origin'));
    }
    //Load Table File
    public function table(){
        $report = Report::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Moderator.Report.all-report',compact('report'));
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
        return redirect()->route('moderator.all.report');
    }
    // View Report
    public function view($id){
        $report=Report::find($id);
        return view('Moderator.Report.all-report-view',compact('report'));
    }
    public function edit($id){
        $report=Report::find($id);
        $cylinder=cylinder::all()->where('status',1);
        $origin=Origin::all()->where('status',1);
        return view('Moderator.Report.all-report-edit',compact('report','cylinder','origin'));
    }
    public function update(Request $req){
        $store=Report::find($req->c_id);
        $store->test_date = $req->test_date ?? $store->test_date;
        $store->serial_number = $req->serial ?? $store->serial_number;
        $store->name = $req->name ?? $store->name;
        $store->user_name = $req->username ?? $store->user_name;
        $store->vehicle_number = $req->vehicle ?? $store->vehicle_number;
        $store->cylinder_manu = $req->cyliner_manu ?? $store->cylinder_manu;
        $store->cylinder_number = $req->cylinder_number ?? $store->cylinder_number;
        $store->cylinder_origin = $req->cylinder_origin ?? $store->cylinder_origin;
        $store->manufacture_date = $req->manu_date ?? $store->manufacture_date;
        $store->water_capacity = $req->water_capacity ?? $store->water_capacity;
        $store->marked_weight = $req->marked_weight ?? $store->marked_weight;
        $store->cylinder_installation = $req->cylinder_installation ?? $store->cylinder_installation;
        $store->cylinder_type = $req->cylinder_type ?? $store->cylinder_type;
        $store->marking_defects = $req->marking_defects ?? $store->marking_defects;
        $store->crack = $req->crack ?? $store->crack;
        $store->thred_condition = $req->thred ?? $store->thred_condition;
        $store->inside_condition = $req->Inside ?? $store->inside_condition;
        $store->actual_weight = $req->actual_weight ?? $store->actual_weight;
        $store->test_step = $req->test_step ?? $store->test_step;
        $store->test_pressure = $req->test_pressure ?? $store->test_pressure;
        $store->water_hiter = $req->water_hiter ?? $store->water_hiter;
        $store->total_expension = $req->total_expension ?? $store->total_expension;
        $store->permanent_expension = $req->permanent_expension ?? $store->permanent_expension;
        $store->percentage = $req->percentage ?? $store->percentage;
        $store->air_dry = $req->air_dry ?? $store->air_dry;
        $store->next_retest = $req->next_test ?? $store->next_retest;
        $store->physical_test = $req->physical_result ?? $store->physical_test;
        $store->hydrostatic_test = $req->hydro_result ?? $store->hydrostatic_test;



        $store->save();
        return redirect()->route('moderator.all.report');

    }
}
