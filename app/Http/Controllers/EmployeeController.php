<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\Employee\EmployeeStoreRequest;
use App\Http\Requests\Employee\EmployeeUpdateRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request, int $limit = 20)
    {
        $lim = $request->limit;
        $employees = Employee::with('department', 'paymentType')->take($lim ?? $limit)->paginate($lim ?? $limit);
        return view('employee', compact('employees'));
    }

    public function store(EmployeeStoreRequest $request)
    {
        //
    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit($id)
    {
        //
    }

    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}