@extends('backend.master')
@section('content')
    <style>
    </style>
    <div class="row p-5">
        <div class="col-8">
            <div class="container p-5">
                <h1>Images</h1>

                @if ($images->count() > 0)
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset($image->gimage) }}" alt="{{ $image->gimage }}" class="img-fluid">
                                <form method="post" action="{{ route('gallery.destroy', $image->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-box "
                                        style="border:none;margin-top:-25px;position:absolute"><i
                                            class="bi bi-trash-fill"></i></button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No images available.</p>
                @endif
            </div>
        </div>
        <div class="col-4">
            <div class="card p-5">
                <h4>Add Image</h4>
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="form-group">
                        <label for="">Gallery Image</label>
                        <input type="file" name="gimage[]" class="form-control" id="" multiple required>
                        @error('gimage')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
