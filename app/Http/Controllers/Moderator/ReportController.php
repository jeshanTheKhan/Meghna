<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Load Add File
    public function index(){
        return view('Moderator.Report.add-report');
    }
    //Load Table File
    public function table(){
        return view('Moderator.Report.all-report');
    }
}
