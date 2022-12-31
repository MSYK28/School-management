@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Student Information</h4>
                <a href="/students" class="btn btn-sm btn-danger float-right">Back</a>
                <p class="card-category">Expanded information about {{ $students->name }}</p>
                <hr>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ml-4">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="id">ID</label>
                                <p>{{ $students->id }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="name">Name</label>
                                <p>{{ $students->name }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="code">Code</label>
                                <p>{{$students->course}}</p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="">Performance</label>
                                <p>{{ $students->marks }}</p>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Attendance</label>
                                <p>{{ $students->hours }}</p>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Status</label>
                                <p class="">{{ $students->status }}</p>
                            </div>
                        </div>
                       
                        <div class="row ">
                            <div class="form-group col-md-3 d-flex pr-3">
                                <button class="btn btn-md btn-warning">Suspend</button>
                                <a href="{{ url('students/' . $students->id . '/edit') }}"
                                    class="btn btn-md btn-success ml-3 mr-3">Edit</a>
                                <form action="{{ url('students/'.$students->id) }}" method="post">
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

            {{-- <div class="card-body">
                <div class="card-header">
                    <h4 class="card-title">Course Units</h4>
                    <a href="{{ url('/units/create') }}" class="btn btn-sm btn-primary float-right">Create Unit</a>
                    <p class="card-category">Units offered in this course</p>
                    <hr>
                </div>
                <div class="card-body">

                </div>
            </div>

            <div class="card-body">
                <div class="card-header">
                    <h4 class="card-title">Enrolled Students</h4>
                    <p class="card-category">Students enrolled in the course</p>
                    <hr>
                </div>
                <div class="card-body">
                    
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
