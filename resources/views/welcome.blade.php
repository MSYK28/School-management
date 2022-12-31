@extends('layouts/app', ['activePage' => 'welcome', 'title' => 'School Management System'])

@section('content')
    <div class="full-page section-image" data-color="black" data-image="{{asset('light-bootstrap/img/full-screen-image-2.jpg')}}">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <h3 class="text-white">Welcome to</h3>
                        <h1 class="text-orange">Orange High School</h1>
                        <h3 class="text-white">Where education resides</h3>
                        <div class="hero-button justify-content-center">
                            <a href="{{ route('applications.create') }}" class="ml-5 btn btn-md btn-danger">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush