<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {


        Type::create([
            'name' => 'Sedan',
            'description' => 'Urban car with a capacity of five passengers, equipped with four doors and has a special trunk at the back.',
        ]);
    
        Type::create([
            'name' => 'Sport',
            'description' => 'A car that prioritizes handling and performance.',
        ]);
    
        Type::create([
            'name' => 'Electric',
            'description' => ' Vehicles that use 100% electricity using electric batteries that need to be recharged.',
        ]);

        Type::create([
            'name' => 'Offroad',
            'description' => 'A type of vehicle specifically designed for use off paved or concrete roads',
        ]);

        Type::create([
            'name' => 'MPV',
            'description' => 'Classification of "multi-function" cars that can be used as passenger carriers as well as goods carriers.',
        ]);
    }
}