<?php

namespace Database\Seeders;

use Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $item = [
            'id'=> (string)\Str::uuid(),
            'name' => 'Nguyễn Công Luật',
            'email' => 'phanlaiquyen@gmail.com',
            'password'=> Hash::make('123'),
            'role_admin'=> 'ADMIN'
        ];
        DB::table('users')->insert($item);
    }
}