@extends('backend.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Bise Principle </h1>

                @foreach ($data as $key => $item)
                    @if ($data->count() < 0)
                        <a href="{{ route('biseprinciple.create') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Create</a> --}}
                    @else
                        <a href="{{ route('biseprinciple.edit', $item->id) }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Edit</a>
                    @endif
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Name Bn</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->name_bn }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" width="60" alt="">
                            </td>
                            <td>{!! $item->description !!}</td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>

    </div>
@endsection
