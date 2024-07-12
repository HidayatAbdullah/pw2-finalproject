<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'car_id' => '1',
            'user_id'=>'1',
            'loan_date'=>'2024-07-01',
            'return_date'=>'2024-07-12',
            'total_cost'=>'150000',
            'status'=> 'pending',
        ]);

        Loan::create([
            'car_id' => '2',
            'user_id'=>'2',
            'loan_date'=>'2024-06-01',
            'return_date'=>'2024-07-01',
            'total_cost'=>'100000',
            'status'=> 'ongoing',
        ]);

        Loan::create([
            'car_id' => '3',
            'user_id'=>'3',
            'loan_date'=>'2024-05-01',
            'return_date'=>'2024-06-01',
            'total_cost'=>'200000',
            'status'=> 'completed',
        ]);

        Loan::create([
            'car_id' => '2',
            'user_id'=>'4',
            'loan_date'=>'2024-06-20',
            'return_date'=>'2024-07-06',
            'total_cost'=>'100000',
            'status'=> 'ongoing',
        ]);
    }
}
