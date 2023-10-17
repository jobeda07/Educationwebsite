@extends('backend.master')
@section('content')
    <style>
        /* input[type=number] {
                                                                                                                                            -moz-appearance: textfield;
                                                                                                                                        } */
        input[type=number] {
            appearance: textfield;
            /* Additional styles if needed */
        }
    </style>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card p-5">
                @if (!isset($item))
                    <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for=""> Name <span style="color:red;">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Name Bangla <span style="color:red;">*</span></label>
                            <input type="text" name="name_bn" value="{{ old('name_bn') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter name Bangla" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image <span style="color:red;">*</span></label>
                            <input type="file" name="image" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Email <span style="color:red;">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter department name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number <span style="color:red;">*</span></label>
                            <input type="text" name="number" value="{{ old('number') }}" id="numericInput"
                                class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                        </div>
                        <div class="form-group">
                            <label for="">Teacher Department <span style="color:red;">*</span></label>
                            <select class="form-control" id="" name="department_id" required>
                                <option>Select one</option>
                                @foreach ($department as $item)
                                    <option value="{{ $item->id }}">{{ $item->departname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Position <span style="color:red;">*</span></label>
                            <input type="text" name="position" value="{{ old('position') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter department name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address <span style="color:red;">*</span></label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter department name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @else
                    <form action="{{ route('teacher.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf()
                        <div class="form-group">
                            <label for=""> Name <span style="color:red;">*</span></label>
                            <input type="text" name="name" value="{{ $item->name }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Name Bangla<span style="color:red;">*</span></label>
                            <input type="text" name="name_bn" value="{{ $item->name_bn }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter Name Bangla" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                            <img src="{{ asset($item->image) }}" class="mt-2" alt="" width="150">
                        </div>
                        <div class="form-group">
                            <label for=""> Email <span style="color:red;">*</span></label>
                            <input type="email" name="email" value="{{ $item->email }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter department name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number <span style="color:red;">*</span></label>
                            <input type="text" name="number" value="{{ $item->number }}" id="numericInput"
                                class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                        </div>
                        <div class="form-group">
                            <label for="">Teacher Department <span style="color:red;">*</span></label>
                            <select class="form-control" id="" name="department_id" required>
                                <option>Select one</option>
                                @foreach ($department as $item)
                                    <option value="{{ $item->id }}">{{ $item->departname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Position <span style="color:red;">*</span></label>
                            <input type="text" name="position" value="{{ $item->position }}" class="form-control"
                                id="" aria-describedby="" placeholder="Enter Position" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address <span style="color:red;">*</span></label>
                            <input type="text" name="address"value="{{ $item->address }}"
                                value="{{ $item->address }}" class="form-control" id="" aria-describedby=""
                                placeholder="Enter Address" required>
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
