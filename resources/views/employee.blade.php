@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="table-responsive">
                    <form id="limit-form" action="{{ route('employee.index') }}" method="get">
                        <div class="input-group mb-3">
                            <select title=""  name="limit" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose limit</option>
                                <option value="10" {{ old('limit') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ old('limit') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ old('limit') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ old('limit') == 100 ? 'selected' : '' }}>100</option>
                            </select>
                        </div>
                    </form>
                    <table class="table" id="datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>Department</th>
                            <th>Payment Type</th>
                            <th>Revards</th>
                            <th>B Day</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $key => $employee)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}</td>
                                <td>{{ $employee['department']->name }} <a href="{{ route('department.show', $employee['department']) }}" class="btn btn-primary btn-sm">Info</a></td>
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
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

