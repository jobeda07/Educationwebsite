@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-5">
                @if (!isset($item))
                    <form action="{{ route('history.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for="">First Image</label>
                            <input type="file" name="first_image" class="form-control" id="">
                            @error('first_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">First Description</label>
                            <div id="">
                                <textarea name="first_history" id="" cols="75" rows="10" placeholder="write your drescription here"
                                    required></textarea>
                                @error('first_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Second Image</label>
                            <input type="file" name="second_image" class="form-control" id="">
                            @error('second_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Second Description</label>
                            <div id="">
                                <textarea name="second_history" id="" cols="75" rows="10" placeholder="write your drescription here"
                                    required></textarea>
                                @error('second_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Third Image</label>
                            <input type="file" name="third_image" class="form-control" id="">
                            @error('third_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Third Description</label>
                            <div id="">
                                <textarea name="third_history" id="" cols="75" rows="10" placeholder="write your drescription here"
                                    required></textarea>
                                @error('third_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('history.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        @method('put')
                        <div class="form-group">
                            <label for="">First Image</label>
                            <input type="file" name="first_image" class="form-control" id="">
                            @error('first_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <img src="{{ asset($item->first_image) }}" alt="" class="mt-2" width="70">
                        </div>
                        <div class="form-group">
                            <label for="">First Description</label>
                            <div id="">
                                <textarea name="first_history" id="" value="{{ $item->first_history }}" cols="75" rows="10"
                                    placeholder="write your drescription here" required>{{ $item->first_history }}</textarea>
                                @error('first_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Second Image</label>
                            <input type="file" name="second_image" class="form-control" id="">
                            @error('second_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <img src="{{ asset($item->second_image) }}" alt="" class="mt-2" width="70">
                        </div>
                        <div class="form-group">
                            <label for="">Second Description</label>
                            <div id="">
                                <textarea name="second_history" id="" value="{{ $item->second_history }}" cols="75" rows="10"
                                    placeholder="write your drescription here" required>{{ $item->second_history }}</textarea>
                                @error('second_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Third Image</label>
                            <input type="file" name="third_image" class="form-control" id="">
                            @error('third_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <img src="{{ asset($item->third_image) }}" alt="" class="mt-2" width="70">
                        </div>
                        <div class="form-group">
                            <label for="">Third Description</label>
                            <div id="">
                                <textarea name="third_history" id="" value="{{ $item->third_history }}" cols="75" rows="10"
                                    placeholder="write your drescription here" required>{{ $item->third_history }}</textarea>
                                @error('third_history')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
