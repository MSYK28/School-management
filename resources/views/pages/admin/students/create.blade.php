@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Create New Student</h4>
                <a href="{{ url('/students') }}" class="btn btn-sm btn-danger float-right">Back</a>
                <p class="card-category">Enter details to create a new student account</p>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/students')}}" accept-charset="UTF-8">
                    @csrf

                    <div class="row col-md-12">
                        
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="course">Course </label>
                            <input type="text" name="course" id="course" class="form-control" placeholder="Course">
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="form-group col-md-4">
                            <label for="hours">Attendance</label>
                            <input type="number" name="hours" id="hours" class="form-control" placeholder="Hours">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="marks">Marks</label>
                            <input type="number" name="marks" id="marks" class="form-control" placeholder="Marks">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Default(12345678)">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-md btn-primary">Create Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection