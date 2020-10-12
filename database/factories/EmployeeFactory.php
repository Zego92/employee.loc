<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use App\Employee;
use App\EmployeePaymentType;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Employee::class, function (Faker $faker) {
    return [
//        'department_id' => function() {
//            return factory(Department::class)->create()->id;
//        },
//        'type_id' => function() {
//            return factory(EmployeePaymentType::class)->create()->id;
//        },
        'department_id' => rand(1,20),
        'type_id' => rand(1,2),
        'first_name' => $faker->name,
        'middle_name' => $faker->name,
        'last_name' => $faker->name,
        'b_day' => $faker->date(),
        'start_work' => Carbon::now()->subDays(20),
        'rank' => $faker->word,
    ];
});
