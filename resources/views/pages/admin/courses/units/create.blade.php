@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Create New Unit</h4>
                <p class="card-category">Enter details to create a new unit</p>
                <a href="{{ url('/units') }}" class="btn btn-sm btn-danger float-right">Back</a>
                
                @if (session('status'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('/units')}}" accept-charset="UTF-8">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="lecturer">Lecturer</label>
                            {{-- <textarea name="lecturer" class="form-control" id="" cols="30" rows="10" placeholder="lecturer"></textarea> --}}
                            <input type="lecturer" name="lecturer" id="lecturer" class="form-control" placeholder="Lecturer">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="course_name">Course Name</label>
                            <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Course Name">
                        </div>

                        <hr>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-md btn-primary">Create Unit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
