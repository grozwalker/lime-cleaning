<?php

use Illuminate\Database\Seeder;

class SubservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subservices')->insert([
            'name' => 'Test 1',
            'active' => true,
            'service_id' => 1,
        ]);

        DB::table('subservices')->insert([
            'name' => 'Test 2',
            'active' => true,
            'service_id' => 3,
        ]);
    }
}
