<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Cylinder Report | </title>

    @extends('layouts.Moderator.backend')
    @section('context')
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Form Elements</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form Design <small>different form elements</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="#">Settings 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('moderator.save.report') }}">
                                    @csrf
                                     {{-- Test Date --}}
                                     <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Test Date <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="test_date" class="date-picker form-control" name="test_date" placeholder="dd-mm-yyyy" type="text" required="required" 
                                                onfocus="(this.type='date')" 
                                                onmouseover="(this.type='date')" 
                                                onclick="(this.type='date')" 
                                                onblur="formatDate(this)" 
                                                onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function formatDate(input) {
                                                    if (input.value) {
                                                        let date = new Date(input.value);
                                                        let formattedDate = ("0" + date.getDate()).slice(-2) + "-" + 
                                                                            ("0" + (date.getMonth() + 1)).slice(-2) + "-" + 
                                                                            date.getFullYear();
                                                        input.type = 'text';
                                                        input.value = formattedDate;
                                                    } else {
                                                        input.type = 'text';
                                                    }
                                                }
                                    
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    
                                    {{-- Serial Number --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Serial Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="serial" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Customer Name --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Customer Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Customer Username --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Customer Username <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="username" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Vehicle Registration Number --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vehicle Registration Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="vehicle" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Cylinder Manufacturer --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Cylinder Manufacture</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="cyliner_manu">
                                                <option>Choose option</option>
                                                @foreach ($cylinder as $cylinder)
                                                <option value="{{ $cylinder->name }}">{{ $cylinder->name }}</option>
                                                @endforeach
                                            
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Cylinder Number --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cylinder Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="cylinder_number" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Country Of Origin --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Country Of Origin</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="cylinder_origin">
                                                <option>Choose option</option>
                                                @foreach ($origin as $origin)
                                                <option value="{{ $origin->name }}">{{ $origin->name }}</option>
                                                @endforeach
                                             
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Manufacture Date --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Manufacture Date <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="date-picker form-control" id="manu_date" 
                                                   name="manu_date" placeholder="dd-mm-yyyy" type="text" required="required" 
                                                   onfocus="changeToDate(this)" onmouseover="changeToDate(this)" 
                                                   onclick="changeToDate(this)" onblur="formatDate(this)" 
                                                   onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function changeToDate(input) {
                                                    input.type = 'date';
                                                }
                                    
                                                function formatDate(input) {
                                                    if (input.value) {
                                                        let date = new Date(input.value);
                                                        let formattedDate = ('0' + date.getDate()).slice(-2) + '-' + 
                                                                            ('0' + (date.getMonth() + 1)).slice(-2) + '-' + 
                                                                            date.getFullYear();
                                                        input.type = 'text';
                                                        input.value = formattedDate;
                                                    }
                                                }
                                    
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        formatDate(input);
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    
                                    {{-- Water Capacity --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Water Capacity <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="water_capacity" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Marked weight --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Marked weight <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="marked_weight" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    
                                    {{-- Cylinder Type / Standard --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cylinder Type / Standard <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="cylinder_type" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Marking Defects --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Marking Defects</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="marking_defects">
                                                <option>Choose option</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Crack --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Crack</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="crack">
                                                <option>Choose option</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Dents --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Dents</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="dents">
                                                <option>Choose option</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Thred Condition --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Thred Condition</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="thred">
                                                <option>Choose option</option>
                                                <option value="Good">Good</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Inside Condition --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Inside Condition</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="Inside">
                                                <option>Choose option</option>
                                                <option value="Good">Good</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Actual Weight --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Actual Weight <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="actual_weight" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Test Step --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Test Step <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="test_step" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Test Pressure --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Test Pressure <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="test_pressure" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Water Hiter Temperature --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Water Hiter Temperature <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="water_hiter" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Total Expansion --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Total Expansion <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="total_expension" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Permanent Expansion --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Permanent Expansion <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="permanent_expension" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Percentage Of(TE/PE) --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Percentage Of(TE/PE) <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="percentage" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Air Dry Pressure --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Air Dry Pressure <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" name="air_dry" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    {{-- Next Re-Test Time --}}
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">
                                            Next Re-Test Time <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="next_test" class="date-picker form-control" placeholder="dd-mm-yyyy" name="next_test" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="formatDate(this)" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function () {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                    
                                                function formatDate(input) {
                                                    if (input.value) {
                                                        let date = new Date(input.value);
                                                        let day = String(date.getDate()).padStart(2, '0');
                                                        let month = String(date.getMonth() + 1).padStart(2, '0');
                                                        let year = date.getFullYear();
                                                        input.type = 'text';
                                                        input.value = `${day}-${month}-${year}`;
                                                    } else {
                                                        input.type = 'text';
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    
                                     {{-- Physical Properties result --}}
                                     <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Physical Properties result</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="physical_result">
                                                <option>Choose option</option>
                                                <option value="Pass">Pass</option>
                                                <option value="Fail">Fail</option>
                                            </select>
                                        </div>
                                    </div>
                                     {{-- Hydrostatic Stress result --}}
                                     <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Hydrostatic Stress result</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" required="required" name="hydro_result">
                                                <option>Choose option</option>
                                                <option value="Pass">Pass</option>
                                                <option value="Fail">Fail</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button"
                                                onclick="cancelAction()">Cancel</button>
                                            <button class="btn btn-primary" type="reset"
                                                onclick="resetForm()">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function cancelAction() {
                    
                    window.history.back(); // Go back to the previous page
                }
            
                function resetForm() {
                    document.querySelector('form').reset(); // Reset the form
                }
            </script>
        @endsection
