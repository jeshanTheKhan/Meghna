<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Load Add File
    public function index(){
        return view('Admin.Report.add-report');
    }
    //Load Table File
    public function table(){
        return view('Admin.Report.all-report');
    }
}
