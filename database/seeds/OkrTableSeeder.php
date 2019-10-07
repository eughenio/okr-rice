<?php

use Illuminate\Database\Seeder;

class OkrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $okrs = factory(App\Okr::class, 15)->create();
    }
}
