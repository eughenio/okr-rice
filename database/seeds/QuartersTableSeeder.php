<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuartersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quarters')->insert([
        	['quarter' => 'Q1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['quarter' => 'Q2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['quarter' => 'Q3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['quarter' => 'Q4','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
