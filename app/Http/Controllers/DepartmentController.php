<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Department\DepartmentStoreRequest;
use App\Http\Requests\Department\DepartmentUpdateRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request, int $limit = 5)
    {
        $lim = $request->limit;
        $departments = Department::with('employees.paymentType')->take($lim ?? $limit)->paginate($lim ?? $limit);
        return view('department', compact('departments'));
    }

    public function create()
    {
        //
    }

    public function store(DepartmentStoreRequest $request)
    {
        //
    }

    public function show(Department $department)
    {
        $department->setRelation('employees', $department->employees()->paginate(10));
        return view('department.show', compact('department'));
    }

    public function edit($id)
    {
        //
    }

    public function update(DepartmentUpdateRequest $request, Department $department)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
