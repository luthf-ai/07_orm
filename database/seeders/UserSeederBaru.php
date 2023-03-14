<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeederBaru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'name' => 'Administrator baru',
        //     'email' => 'admin.baru@admin.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
