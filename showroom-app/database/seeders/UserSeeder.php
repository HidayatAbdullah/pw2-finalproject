<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'id' => 1,
                'fullname' => 'hidayat',
                'username' => 'dayat',
                'password' => Hash::make('12345678'),
                'email' => 'dayat@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'id' => 2,
                'fullname' => 'reza arif',
                'username' => 'reja',
                'password' => Hash::make('12345678'),
                'email' => 'reja@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'id' => 3,
                'fullname' => 'ramadani',
                'username' => 'rama',
                'password' => Hash::make('12345678'),
                'email' => 'rama@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'id' => 4,
                'fullname' => 'deli sartika',
                'username' => 'delisa',
                'password' => Hash::make('12345678'),
                'email' => 'delisa@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
