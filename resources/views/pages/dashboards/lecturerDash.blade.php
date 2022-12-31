@extends('layouts.lecLayout')

@section('lecturers')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lecturer Dashboard</h4>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">LECTURER NAME</label>
                                    <p class="strong">{{ Auth::user()->name }}</p>
                                </div>
                                <div class="col-md-4">
                                    <label for="name">COURSE</label>
                                    <p class="strong">{{ Auth::user()->course }}</p>
                                </div>
                                <div class="col-md-4">
                                    <label for="name">DEPERTMENT</label>
                                    <p class="strong">{{ Auth::user()->status }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <hr>
                            <h5>UNITS</h5>
                            <p class="card-category">Units you teach</p>
                            <hr>
                            <div class="row">
                                @foreach ($courses as $course )
                                @foreach ($units as $unit)
                                @if ($unit->course == $course->name)
                                <div class="col-md-3 ">
                                    <div class="card">
                                        <img src="{{ asset('images/logo.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $unit->name }}</h4>
                                            <h5 class="card-text">{{ $unit->lecturer }} </h5>
                                            <div class="row d-flex p-2">
                                                <a href="{{ url('units/' . $unit->id) }}"
                                                    class="btn btn-sm btn-info mr-3">Info</a>
                                                <a href="{{ url('units/' . $unit->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">Create Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
