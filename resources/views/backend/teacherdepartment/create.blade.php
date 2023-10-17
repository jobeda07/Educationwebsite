@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-5">
                @if (!isset($item))
                    <form action="{{ route('teacherdepartment.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for="">Department Name</label>
                            <input type="text" name="departname" class="form-control" id=""
                                aria-describedby="emailHelp" placeholder="Enter department name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Department Name</label>
                            <input type="text" name="departname_bn" class="form-control" id=""
                                aria-describedby="emailHelp" placeholder="Enter department name in Bangla" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image (if you want to show in website)</label>
                            <input type="file" name="departimage" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('teacherdepartment.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf()
                        <div class="form-group">
                            <label for="">Department Name</label>
                            <input type="text" name="departname" value="{{ $item->departname }}" class="form-control"
                                id="" aria-describedby="emailHelp" placeholder="Enter department name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Department Name Bangla</label>
                            <input type="text" name="departname_bn" value="{{ $item->departname_bn }}"
                                class="form-control" id="" aria-describedby="emailHelp"
                                placeholder="Enter department name in bangla" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image (if you want to show in website)</label>
                            <input type="file" name="departimage" class="form-control" id="">
                            <img src="{{ asset($item->departimage) }}" width="60" alt=""class="mt-2">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
