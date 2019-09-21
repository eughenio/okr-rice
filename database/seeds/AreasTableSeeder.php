<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
        	['name' => 'Tecnologia','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'RH','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Fiscal','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Financeiro','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Supply','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Comercial','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Marketing Performance','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Marketing','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Private Label','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'Estilo','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        	['name' => 'CRC','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
    	]);
    }
}
