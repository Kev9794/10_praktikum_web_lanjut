<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'adminKevin',
            'name' => 'Administrator Baru',
            'email' => 'admin.kevin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
