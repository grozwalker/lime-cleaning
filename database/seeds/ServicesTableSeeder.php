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
            'Квартира',
            'Дом',
            'Офис',
            'Склад',
            'Другое',
        ];
        foreach ($services as $service) {
            DB::table('services')->insert([
                'name' => $service,
            ]);
        }
    }
}
