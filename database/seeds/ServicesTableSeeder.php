<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Test 1',
            'parent_id' => '0',
            'active' => true,
        ]);
        DB::table('services')->insert([
        'name' => 'Test 2',
        'parent_id' => '0',
        'active' => true,
        ]);
        DB::table('services')->insert([
        'name' => 'Sub Test 1',
        'parent_id' => '1',
        'active' => true,
        ]);
    }
}
