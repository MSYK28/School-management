@extends('layouts.adminLayout')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('courses') }}">
                        <h3 class="card-title">Courses</h3>
                    </a>
                    <div class="float-right mb-2">
                        <a href="{{ url('/courses/create') }}" class="btn btn-md btn-primary">Create Course</a>
                    </div>
                    <p>All the currently registered courses</p>
                    <hr>
                </div>
                <div class="card-body">
                    <!--Table-->
                    <table class="table w-auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course Admin</th>
                                <th>Code</th>
                                <th>Hours</th>
                                <th>Marks</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($courses as $course)
                            <tr class="table-info">
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->admin }}</td>
                                <td>{{ $course->code }}</td>
                                <td>{{ $course->hours }}</td>
                                <td>{{ $course->marks }}</td>
                                <td>
                                    @if ( $course->status == 'active')
                                    <span class="badge badge-primary">Active</span>
                                    @else
                                    <span class="badge badge-danger">Suspended</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('courses/' . $course->id) }}" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{ url('courses/' . $course->id . '/edit') }}"
                                        class="btn btn-sm btn-success ml-3 mr-3">Edit</a>
                                    <form action="{{ url('courses/'.$course->id) }}" method="post">
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
