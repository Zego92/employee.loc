@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Employee Info</h5>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('employee.index') }}" class="btn btn-success">Back to employee</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-center justify-content-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="2">Full name</th>
                            <th colspan="2">{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}</th>
                        </tr>
                        <tr>
                            <th colspan="2">Department</th>
                            <th colspan="2">{{ $employee->department->name }}</th>
                        </tr>
                        <tr>
                            <th colspan="2">Payment Type</th>
                            <th colspan="2">{{ $employee['paymentType']->payment_name }} - {{ $employee['paymentType']->payment_value }}</th>
                        </tr>
                        <tr>
                            @if($employee['paymentType']->id == 1)

                                <th colspan="2">Revards</th>
                                <th colspan="2">
                                    <button class="btn btn-info">Month Revards - {{ $employee['paymentType']->payment_value }}</button>
                                </th>
                            @endif
                            @if($employee['paymentType']->id == 2)
                                    <th colspan="2">Revards</th>
                                    <th colspan="2">
                                        <button class="btn btn-warning">Hours Revards - {{ $employee->revard }}</button>
                                    </th>
                            @endif
                        </tr>
                        <tr>
                            <th colspan="2">B Day</th>
                            <th colspan="2">{{ $employee->b_day }}</th>
                        </tr>
                        <tr>
                            <th colspan="2">Rank</th>
                            <th colspan="2">{{ $employee->rank }}</th>

                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


