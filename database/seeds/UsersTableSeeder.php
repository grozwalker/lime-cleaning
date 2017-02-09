<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Groza',
            'email' => 'andrey_groza@mail.ru',
            'password' => bcrypt('1231230'),
        ]);

        DB::table('users')->insert([
            'name' => 'lime-cleaning',
            'email' => 'lime-cleaning@yandex.ru',
            'password' => bcrypt('Kfqv2016'),
        ]);
    }
}
