<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePaymentType extends Model
{
    protected $table = 'employee_payment_types';

    public $fillable = [
        'payment_name',
        'payment_value',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id', 'type_id');
    }
}
