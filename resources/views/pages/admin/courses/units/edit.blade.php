@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Update Unit</h4>
                <p class="card-category">Enter details to update unit</p>
                <a href="/units" class="btn btn-sm btn-danger float-right">Cancel</a>
            </div>
            <div class="card-body">
                <form role="form" method="post" action="{{ url('units/'.$unit->id)}}" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">name</label>
                            <input type="text" name="name" id="name" 
                                    class="form-control" placeholder="Name"
                                    value="{{$unit->name}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="lecturer">Lecturer</label>
                            <input type="text" name="lecturer" id="lecturer" 
                                    class="form-control" placeholder="Lecturer"
                                    value="{{ $unit->lecturer }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="course_name">Course Name</label>
                            <input type="text" name="course_name" id="course_name" 
                                    class="form-control" placeholder="Course Name"
                                    value="{{$unit->course_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Update Unit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
