<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Car::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Car::create([
            'name' => ' Toyota Avanza',
            'photo' => 'car1.jpg',
            'type_id' => '1',
            'cost_per_day' => '10000',
            'year' => '2024',
            'license_plate' => 'B3450EYZ',
        ]);

        Car::create([
            'name' => 'Fenyr Supersport',
            'photo' => 'car2.jpg',
            'type_id' => '2',
            'cost_per_day' => '12000',
            'year' => '2024',
            'license_plate' => 'B3569EYZ',
        ]);

        Car::create([
            'name' => 'Fiat New 500',
            'photo' => 'car3.jpg',
            'type_id' => '3',
            'cost_per_day' => '10000',
            'year' => '2024',
            'license_plate' => 'B3464EYZ',
        ]);
    }
}