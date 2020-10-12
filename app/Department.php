<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public $fillable = [
        'name',
        'email',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id', 'id');
    }
}
