@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h5><strong>Department name:</strong> {{ $department->name }}</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ route('department.index') }}" class="btn btn-success">To All Departments</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ route('employee.index') }}" class="btn btn-success">To All Employees</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>Payment Type</th>
                            <th>Revards</th>
                            <th>B Day</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($department->employees as $key => $employee)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}</td>
                                <td>{{ $employee['paymentType']->payment_name }} - {{ $employee['paymentType']->payment_value }}</td>
                                @if($employee['paymentType']->id == 1)
                                    <td><button class="btn btn-info">Month Revards - {{ $employee['paymentType']->payment_value }}</button></td>
                                @endif
                                @if($employee['paymentType']->id == 2)
                                    <td><button class="btn btn-warning">Hours Revards - {{ $employee->revard }}</button></td>
                                @endif
                                <td>{{ $employee->b_day }}</td>
                                <td>{{ $employee->rank }}</td>
                                <td><a href="{{ route('employee.show', $employee->id) }}" class="btn btn-primary btn-sm">Info</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $department->employees->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


