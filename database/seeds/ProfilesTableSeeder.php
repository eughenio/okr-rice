<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
        	['name' => 'PM','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Devops','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev PHP Pleno','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev PHP Senior','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'QA','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'PM (Gustavo)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev PHP pleno (WMS)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev PHP Senior (WMS)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev Front-end','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Devops (terceiro)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev PHP Pleno (terceiro)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev Dados Senior (terceiro)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Dev SAP Senior (terceiro)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'QA (terceiro)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'UX (freela)','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
