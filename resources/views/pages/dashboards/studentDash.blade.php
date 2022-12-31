@extends('layouts.stdLayout')

@section('stds')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <h4>STUDENT DASHBOARD</h4>
                    </div>
                    <h4 class="card-title">Course</h4>
                    <p class="card-category">Find detailed information about your course here</p>
                    <hr>
                    <div class="details row">
                        <div class="col-md-3">
                            <label for="name">STD NAME</label>
                            <p class="strong uppercase">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="col-md-3">
                            <label for="name">COURSE</label>
                            @foreach ( $courses as $course )
                            @if ( Auth::user()->course == $course->name)
                            <p class="strong uppercase">
                                {{ $course->name }}
                            </p>

                        </div>

                        <div class="col-md-3">
                            <label for="name">ATTENDANCE</label>
                            <p class="strong uppercase">{{ Auth::user()->hours/$course->hours*100 }}</p>
                        </div>

                        <div class="col-md-3">
                            <label for="name">MARKS</label>
                            <p class="strong uppercase">{{ Auth::user()->marks/$course->marks*100 }}</p>
                        </div>
                        @endif
                        @endforeach

                        <hr>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                    <p>UNITS</p>
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
                                        {{-- <a href="{{ url('units/' . $unit->id . '/edit') }}"
                                            class="btn btn-sm btn-warning">Work</a> --}}
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
@endsection
