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
        $additionalOptions = [
            'Генеральная уборка',
            'Стандартная уборка',
            'Уборка после ремонта',
            'Стандартная уборка',
            'Уборка после ремонта',
            'Химчистка',
            'Стрижка газонов',
            'Мойка окон, фасадов, витрин',
            'Уборка прилегающей территории',
            'Удаление высолов',
        ];

        foreach ($additionalOptions as $option) {
            DB::table('subservices')->insert([
                'name' => $option,
            ]);
        }

    }
}
