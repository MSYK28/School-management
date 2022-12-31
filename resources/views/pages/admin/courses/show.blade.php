@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Course Information</h4>
                <a href="/courses" class="btn btn-sm btn-danger float-right">Back</a>
                <p class="card-category">Expanded information about {{ $course->name }}</p>
                <hr>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ml-4">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Name</label>
                                <p>{{ $course->name }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="code">Code</label>
                                <p>{{$course->code}}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="code">Admin</label>
                                <p>{{$course->admin}}</p>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="form-group col-md-3 d-flex pr-3">
                                <button class="btn btn-md btn-warning">Suspend</button>
                                <a href="{{ url('courses/' . $course->id . '/edit') }}"
                                    class="btn btn-md btn-success ml-3 mr-3">Edit</a>
                                <form action="{{ url('courses/'.$course->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-md btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

            </div>

            <div class="card-body">
                <div class="card-header">
                    <h4 class="card-title">Course Units</h4>
                    <a href="{{ url('/units/create') }}" class="btn btn-sm btn-primary float-right">Create Unit</a>
                    <p class="card-category">Units offered in this course</p>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($units as $unit)
                        @if ($unit->course == $course->name)
                        <div class="col-md-3 mr-2">
                            <div class="card">
                                <img src="{{ asset('images/logo.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $unit->name }}</h4>
                                    <h5 class="card-text">{{ $unit->lecturer }} </h5>
                                    <div class="row d-flex p-2">
                                        <a href="{{ url('units/' . $unit->id) }}"
                                            class="btn btn-sm btn-info mr-3">Info</a>
                                        <a href="{{ url('units/' . $unit->id . '/edit') }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="card-header">
                    <h4 class="card-title">Enrolled Students</h4>
                    <p class="card-category">Students enrolled in the course</p>
                    <hr>
                </div>
                <div class="card-body">
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
                            @if ($course->name == $student->course)
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
                            @endif
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
