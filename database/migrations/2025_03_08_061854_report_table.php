<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('report_table', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('name');
            $table->string('user_name');
            $table->string('vehicle_number');
            $table->string('cylinder_manu');
            $table->string('cylinder_number');
            $table->string('cylinder_origin');
            $table->string('manufacture_date');
            $table->string('water_capacity');
            $table->string('marked_weight');
            $table->string('cylinder_installation');
            $table->string('cylinder_type');
            $table->string('marking_defects');
            $table->string('crack');
            $table->string('thred_condition');
            $table->string('inside_condition');
            $table->string('actual_weight');
            $table->string('test_step');
            $table->string('test_pressure');
            $table->string('water_hiter');
            $table->string('total_expension');
            $table->string('percentage');
            $table->string('thickness_test');
            $table->string('air_dry');
            $table->string('next_retest');
            $table->string('physical_test');
            $table->string('hydrostatic_test');
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
