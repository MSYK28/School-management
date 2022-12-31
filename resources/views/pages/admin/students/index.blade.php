@extends('layouts.adminLayout')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('courses') }}">
                        <h3 class="card-title">Students</h3>
                    </a>
                    <div class="float-right mb-2">
                        <a href="{{ url('/students/create') }}" class="btn btn-md btn-primary">Create Student Account</a>
                    </div>
                    <p>All the currently registered students</p>
                    <hr>
                </div>
                <div class="card-body">
                    <!--Table-->
                    <table class="table w-auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Code</th>
                                <th>Hours</th>
                                <th>Marks</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                            <tr class="table-info">
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->course }}</td>
                                <td>{{ $student->code }}</td>
                                <td>{{ $student->hours }}</td>
                                <td>{{ $student->marks }}</td>
                                <td>
                                    @if ( $student->status == 'active')
                                    <span class="badge badge-primary">Active</span>
                                    @else
                                    <span class="badge badge-danger">Suspended</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('students/' . $student->id) }}" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{ url('students/' . $student->id . '/edit') }}"
                                        class="btn btn-sm btn-success ml-3 mr-3">Edit</a>
                                    <form action="{{ url('students/'.$student->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--Table body-->


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
