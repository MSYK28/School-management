@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Update Course</h4>
                <p class="card-category">Enter details to update course</p>
                <a href="/courses" class="btn btn-sm btn-danger float-right">Cancel</a>
            </div>
            <div class="card-body">
                <form role="form" method="post" action="{{ url('courses/'.$course->id)}}" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="admin">Admin</label>
                            <input type="text" name="admin" id="admin" class="form-control" placeholder="Admin"
                                value="{{$course->admin}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status" aria-label="Default select example">
                                <option value="active" selected>active</option>
                                <option value="suspended">suspended</option>
                            </select>
                            {{-- <input type="text" name="title" id="title" 
                                    class="form-control" placeholder="Title"
                                    value="{{$course->status}}"> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit
                                user</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
