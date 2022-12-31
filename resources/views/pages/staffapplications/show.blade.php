@extends('layouts.app', ['activePage' => 'applicants_management', 'title' => 'School Management', 'navName' => 'applicants Management', 'activeButton' => 'laravel'])

@section('content')

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Applicant Information</h4>
                <p class="card-category">Expanded information about {{ $applicant->name }}</p>
                <a href="/staffapplicants" class="btn btn-sm btn-danger float-right">Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-applicants">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray"
                                            src="{{ asset('light-bootstrap/img/faces/face-3.jpg') }}" alt="...">
                                        <h5 class="title">{{ __('Mike Andrew') }}</h5>
                                    </a>
                                    <p class="description">
                                        {{ __('michael24') }}
                                    </p>
                                </div>
                                <p class="description text-center">
                                    {{ __(' "Lamborghini Mercy') }}
                                    <br> {{ __('Your chick she so thirsty') }}
                                    <br> {{ __('I am in that two seat Lambo') }}
                                </p>
                            </div>
                            <hr>
                            <div class="button-container mr-auto ml-auto">
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-google-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Name</label>
                                <p>{{ $applicants->name }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="name">Email</label>
                                <p>{{$applicants->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="role">Role</label>
                                <p>{{ $applicants->role }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="department">Department</label>
                                <p>{{ $applicants->department }}</p>
                            </div>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="role">Course</label>
                                <p>{{ $applicants->role }}</p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="department">HOD</label>
                                <p>{{ $applicants->department }}</p>
                            </div>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3 d-flex pr-3">
                                <a href="{{ url('/admin/messages/create') }}" class="btn btn-md btn-primary mr-3">Message</a>
                                <button class="btn btn-md btn-danger">Suspend</button>
                                <a href="{{ url('/applicants' . $applicants->id . '/edit') }}" class="btn btn-md btn-success ml-3">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
