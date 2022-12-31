@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Update Student Profile</h4>
                <p class="card-category">Enter details to update profile</p>
                <a href="/students" class="btn btn-sm btn-danger float-right">Cancel</a>
            </div>
            <div class="card-body">
                <form role="form" method="post" action="{{ url('students/'.$students->id)}}" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="admin">Course</label>
                            <input type="text" name="admin" id="admin" class="form-control" placeholder="Admin"
                                value="{{$students->course}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status" aria-label="Default select example">
                                <option value="{{ $students->status }}" selected>{{ $students->status }}</option>
                                <option value="suspended">suspended</option>
                            </select>
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
