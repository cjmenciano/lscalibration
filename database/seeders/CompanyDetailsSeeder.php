<?php

namespace Database\Seeders;

use App\Models\CompanyDetails;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyDetails::factory()->create([
            'company_name'=>'LS Advance Calibration and Services',
            'address'=>'Fitness Zone Bldg. Circumferential Road, Cor. E. Rodriguez Ave., Brgy. Dalig',
            'contact'=>'9155656265',
            'email'=>'ls.calibrationservices@gmail.com',
            'image' => '',
            'latitude' =>'14.581000',
            'longtitude' =>'121.180220',
            'start_working_day'=>'Monday',
            'end_working_day'=>'Friday',
            'start_working_hours'=>'8:00 AM',
            'end_working_hours'=>'5:00 PM',
        ]);
    }
}
