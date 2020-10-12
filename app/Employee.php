<?php

namespace App;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Employee extends Model
{
    protected $table = 'employees';

    public $fillable = [
        'department_id',
        'type_id',
        'first_name',
        'middle_name',
        'last_name',
        'b_day',
        'rank',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function paymentType()
    {
        return $this->hasOne(EmployeePaymentType::class, 'id', 'type_id');
    }

    public function getRevardAttribute()
    {
        $hours = Carbon::parse($this->start_work)->diffForHumans(Carbon::now());
        $hours = CarbonInterval::hours($hours)->hours;
        return $hours * 100;
    }
}
