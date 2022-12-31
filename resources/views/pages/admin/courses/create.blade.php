@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Create New Course</h4>
                <a href="{{ url('/courses') }}" class="btn btn-sm btn-danger float-right">Back</a>
                <p class="card-category">Enter details to create a new course</p>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/courses')}}" accept-charset="UTF-8">
                    @csrf

                    <div class="row col-md-12">
                        <div class="form-group col-md-4">
                            <label for="code">Code</label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="Code">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="admin">Course Admin</label>
                            <input type="text" name="admin" id="admin" class="form-control" placeholder="Course Admin">
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form-group col-md-4">
                            <label for="hours">Hours</label>
                            <input type="number" name="hours" id="hours" class="form-control" placeholder="Hours">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="marks">Marks</label>
                            <input type="number" name="marks" id="marks" class="form-control" placeholder="Marks">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-md btn-primary">Create Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection