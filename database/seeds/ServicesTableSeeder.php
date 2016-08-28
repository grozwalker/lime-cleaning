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
        $services = [
            'Уборка квартир, домов, коттеджей',
            'Химчистка',
            'Мойка',
            'Уборка офисов, магазинов',
            'Уборка складских помещений',
            'Машинная мойка пола'
        ];
        foreach ($services as $service) {
            DB::table('services')->insert([
                'name' => $service,
                'parent_id' => '0',
                'active' => true,
            ]);
        }

        DB::table('services')->insert([
            'name' => 'Sub Test 2',
            'parent_id' => '2',
            'active' => true,
        ]);

        DB::table('services')->insert([
            'name' => 'Sub Test 1',
            'parent_id' => '1',
            'active' => true,
        ]);
    }
}
