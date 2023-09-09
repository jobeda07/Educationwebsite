@extends('backend.master')
@section('content')
    <div class="card shadow mb-4 p-5">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{ route('teacher.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Create</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset($item->image) }}" width="60" alt=""></td>
                                {{-- <td>{{ $item->dname }}</td> --}}
                                <td>{{ App\Models\TeacherDepartment::find($item->department_id)?->departname }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ route('teacher.edit', $item->id) }}" class="btn btn-primary btn-sm"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('teacher.destroy', $item->id) }}" class="btn btn-danger btn-sm"
                                        data-toggle="modal" data-target="#deleteModal{{ $item->id }}"><i
                                            class="bi bi-trash-fill"></i></a>
                                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: black">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Teacher
                                                        Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Are you sure to delete this teacher ?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">No</button>
                                                    <form action="{{ route('teacher.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf

                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
