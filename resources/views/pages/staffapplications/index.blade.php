@extends('layouts.adminLayout')

@section('admin')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <a href="{{ URL::to('staffapplications') }}">
                        <h4 class="card-title">School Staff Applications</h4>
                    </a>
                    <p class="card-category">Here is a breakdown of all the Applications to the school</p>
                    {{-- <a class="btn btn-sm btn-primary" href="{{ url('/admin/applications/create') }}">Create a
                    Applicant</a> --}}
                </div>

                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Certificates</th>
                            <th>Action</th>
                        </thead>

                        @foreach ($applications as $application)
                        <tbody>
                            <td>{{ $application->id }}</td>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->number }}</td>
                            <td>{{ $application->address }}</td>
                            <td>{{ $application->cert }}</td>
                            <td>
                                <a href="{{ url('staffapplications/' . $application->id) }}" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{ url('staffapplications/' . $application->id . '/edit') }}" class="btn btn-sm btn-success">Admit</a>
                                    <form action="{{ url('staffapplications/'.$application->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                            </td>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
