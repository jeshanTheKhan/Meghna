<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table = 'report_table';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'serial_number',
        'name',
        'user_name',
        'vehicle_number',
        'cylinder_manu',
        'cylinder_number',
        'cylinder_origin',
        'manufacture_date',
        'water_capacity',
        'marked_weight',
        'cylinder_installation',
        'cylinder_type',
        'marking_defects',
        'crack',
        'thred_condition',
        'inside_condition',
        'actual_weight',
        'test_step',
        'test_pressure',
        'water_hiter',
        'total_expension',
        'percentage',
        'thickness_test',
        'air_dry',
        'next_retest',
        'physical_test',
        'hydrostatic_test',
        'status',
    ];
}
