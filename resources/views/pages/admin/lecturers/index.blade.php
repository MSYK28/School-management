@extends('layouts.adminLayout')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('lecturers') }}">
                        <h3 class="card-title">Lecturers</h3>
                    </a>
                    <div class="float-right mb-2">
                        <a href="{{ url('/lecturers/create') }}" class="btn btn-md btn-primary">Create Lecturer Account</a>
                    </div>
                    <p>All the currently registered lecturers</p>
                    <hr>
                </div>
                <div class="card-body">
                    <!--Table-->
                    <table class="table w-auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Code</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($lecturers as $lecturer)
                            <tr class="table-info">
                                <td>{{ $lecturer->id }}</td>
                                <td>{{ $lecturer->name }}</td>
                                <td>{{ $lecturer->course }}</td>
                                <td>{{ $lecturer->code }}</td>
                                <td>
                                    @if ( $lecturer->status == 'active')
                                    <span class="badge badge-primary">Active</span>
                                    @else
                                    <span class="badge badge-danger">Suspended</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('lecturers/' . $lecturer->id) }}" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{ url('lecturers/' . $lecturer->id . '/edit') }}"
                                        class="btn btn-sm btn-success ml-3 mr-3">Edit</a>
                                    <form action="{{ url('lecturers/'.$lecturer->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--Table body-->


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
