<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Department\DepartmentStoreRequest;
use App\Http\Requests\Department\DepartmentUpdateRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::with('employees.paymentType')->paginate($request->limit);
        $departments->appends(request()->query());
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
