@extends('backend.master')
@section('content')
    <div class="card shadow mb-4 p-5">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Notice</h1>
                <a class="d-none d-sm-inline-block btn btn-primary shadow-sm" data-toggle="modal" data-target="#pdfModal"><i
                        class="fas fa-download fa-sm text-white-50"></i> Notice Add</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Publish date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }} </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->created_at->Format('F j,Y') }} </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModal{{ $item->id }}"><i class="bi bi-trash-fill"></i></a>
                                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: black">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Notice
                                                        Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Are you sure to delete this Notice? </h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">No</button>
                                                    <form action="{{ route('notice.destroy', $item->id) }}" method="POST">
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




    {{-- pdf modal --}}
    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: black">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Notice
                        Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for="">Notice Title</label>
                            <input type="text" name="title" class="form-control" id="" accept=".pdf"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Notice Pdf</label>
                            <input type="file" name="notice_pdf" class="form-control" id="" accept=".pdf"
                                required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">back</button>
                    <button type="submit" class="btn btn-primary">Sent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
