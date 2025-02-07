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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('LS Advance Calibration and Services');
            $table->string('address')->default('Fitness Zone Bldg. Circumferential Road, Cor. E. Rodriguez Ave., Brgy. Dalig');
            $table->string('contact')->default('(+63)9155656265');
            $table->string('email')->unique()->default('ls.calibrationservices@gmail.com');
            $table->string('image');
            $table->string('latitude')->default('14.581000');
            $table->string('longtitude')->default('121.180220');
            $table->string('start_working_day')->default('Monday');
            $table->string('end_working_day')->default('Friday');
            $table->string('start_working_hours')->default('8:00 AM');
            $table->string('end_working_hours')->default('5:00 PM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
