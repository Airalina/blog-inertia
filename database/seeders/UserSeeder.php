<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'id'=>1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('12345678'),
        ]);

    }
}
