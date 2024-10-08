@extends('backend.master')
@section('content')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    @endpush
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-5">
                @if (!isset($item))
                    <form action="{{ route('principle.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for=""> Name</label>
                            <input type="text" name="name" class="form-control" id=""
                                aria-describedby="emailHelp" placeholder="Enter Principle name" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Name Bangla</label>
                            <input type="text" name="name_bn" class="form-control" id=""
                                aria-describedby="emailHelp" placeholder="Enter Principle Name in Bangla" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Designation</label>
                            <input type="text" name="designation" class="form-control" id=""
                                aria-describedby="emailHelp" placeholder="Enter designation" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class=" summernote" required cols="80" rows="50"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('principle.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf()
                        <div class="form-group">
                            <label for=""> Name</label>
                            <input type="text" value="{{ $item->name }}" name="name" class="form-control"
                                id="" aria-describedby="emailHelp" placeholder="Enter Principle name" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Name Bangla</label>
                            <input type="text" value="{{ $item->name_bn }}" name="name_bn" class="form-control"
                                id="" aria-describedby="emailHelp" placeholder="Enter Principle name" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Designation</label>
                            <input type="text" name="designation" value="{{ $item->name_bn }}" class="form-control"
                                id="" aria-describedby="emailHelp" placeholder="Enter designation" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                            <img src="{{ $item->image }}" alt="" width="70" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class=" summernote" required cols="80" rows="50">{!! $item->description !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush()
