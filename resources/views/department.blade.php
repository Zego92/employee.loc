@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <form id="limit-form" action="{{ route('employee.index') }}" method="get">
                        @csrf
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Count of Employees</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $key => $department)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->email }}</td>
                                <td>{{ $department->employees->count() }}</td>
                                <td><a href="{{ route('department.show', $department->id) }}" class="btn btn-primary btn-sm">Info</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $departments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

