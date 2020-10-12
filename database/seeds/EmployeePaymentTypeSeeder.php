<?php

use App\EmployeePaymentType;
use Illuminate\Database\Seeder;

class EmployeePaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeePaymentType::create([
            'payment_name' => 'payment per day',
            'payment_value' => 1000,
        ]);
        EmployeePaymentType::create([
            'payment_name' => 'payment per hour',
            'payment_value' => 100,
        ]);
    }
}
