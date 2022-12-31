@extends('layouts.app', ['activePage' => 'user_management', 'title' => 'Admit Student', 'navName' => 'User Management', 'activeButton' => 'laravel'])

@section('content')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Admit Student</h4>
                <p class="card-category">Change status details to admit student</p>
                <a href="/applications" class="btn btn-sm btn-danger float-right">Back</a>
            </div>
            <div class="card-body">
                <hr>
                <form role="form" method="post" action="{{ url('applications/'.$applications->id)}}" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" 
                                    class="form-control" placeholder="Status"
                                    value="{{$applications->status}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Admit Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
