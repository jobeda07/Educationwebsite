@extends('backend.master')
@section('content')
    <style>
    </style>
    <div class="row p-5">
        <div class="col-lg-8 col-12">
            <div class="container p-5">
                <h1>Class</h1>

                @if ($classes->count() > 0)
                    <div class="row">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $key => $class)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td>{{ $class->name }}</td>
                                        <td>
                                            <a href="{{ route('class.edit', $class->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a href="{{ route('class.destroy', $class->id) }}" class="btn btn-danger btn-sm"
                                                data-toggle="modal" data-target="#deleteModal{{ $class->id }}"><i
                                                    class="bi bi-trash-fill"></i></a>
                                            <div class="modal fade" id="deleteModal{{ $class->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: black">
                                                            <h5 class="modal-title text-white" id="exampleModalLabel">
                                                                class
                                                                Delete</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Are you sure to delete this class ?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">No</button>
                                                            <form action="{{ route('class.destroy', $class->id) }}"
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
                @else
                    <p>No Class Add.</p>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card p-5">
                @if (!isset($item))
                    <h4>Add Class</h4>
                    <form action="{{ route('class.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for="">Class Name </label>
                            <input type="text" name="name" class="form-control" id="" required>
                            @error('name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <h4>Edit Class</h4>
                    <form action="{{ route('class.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Class Name </label>
                            <input type="text" name="name" value="{{ $item->name }}" class="form-control"
                                id="" required>
                            @error('name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
