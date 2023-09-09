@extends('backend.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                @foreach ($data as $item)
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    @if ($data->count() < 0)
                        <a href="{{ route('history.create') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create</a>
                    @else
                        <a href="{{ route('history.edit', $item->id) }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Edit</a>
                    @endif
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-4"> <img src="{{ asset($item->first_image) }}" alt="" width="280"
                        height="140"></div>
                <div class="col-8">
                    <p class="mt-2">{{ $item->first_history }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4"><img src="{{ asset($item->second_image) }}" alt="" width="280"
                        height="140"></div>
                <div class="col-8">
                    <p class="mt-2">{{ $item->second_history }}</p>
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-4"><img src="{{ asset($item->third_image) }}" alt="" width="280" height="140">
                </div>
                <div class="col-8">
                    <p class="mt-2">{{ $item->third_history }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
