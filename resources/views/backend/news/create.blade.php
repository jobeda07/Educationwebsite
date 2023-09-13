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
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for=""> Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter News Title" required>
                            @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class=" summernote" required cols="80" rows="50"
                                placeholder="Write description here">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('news.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf()
                        <div class="form-group">
                            <label for=""> Name</label>
                            <input type="text" value="{{ $item->title }}" name="title" class="form-control"
                                id="" aria-describedby="emailHelp" placeholder="Enter News title here" required>
                            @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <img src="{{ $item->image }}" alt="" width="70" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class=" summernote" required cols="80" rows="50"
                                placeholder="write description here">{!! $item->description !!}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
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
