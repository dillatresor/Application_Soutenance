<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: truncate();
        DB::table('Role_users')->truncate();

        User::create([
            'name' => 'RUKUNDO PARIE BELYSE',
            'email' =>'belysezrukundo@gmail.com',
            'password' => Hash::make('marie2023'),
        ]);

        DB::table('users')->truncate();

        User::create([
            'name' => 'RUCIEN MARAYO',
            'email' =>'rucienmarayo11@gmail.com',
            'password' => Hash::make('Ruciana@2023'),
        ]);

        DB::table('users')->truncate();
        User::create([
            'name' => 'BEMSSE T FLORA',
            'email' =>'fsislinebemsse@gmail.com',
            'password' => Hash::make('22222222'),
        ]);

    }
}
