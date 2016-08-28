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
            'Холодильник',
            'Духовка',
            'Вытяжка',
            'Микроволновая печь',
            'Внутри кухонных шкафов',
            'Помыть посуду',
            'Глажка',
            'Окна',
            'Балконы',
            'Шторы',
            'Уборка гардеробной системы',
            'Мойка люстр',
            'Доставить ключи'
        ];

        foreach ($additionalOptions as $option) {
            DB::table('subservices')->insert([
                'name' => $option,
                'active' => true,
                'service_id' => 1,
            ]);
        }

    }
}
