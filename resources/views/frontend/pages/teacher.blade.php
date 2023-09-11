@extends('frontend.master')
@section('content')
    <section id="tem">
        <h1>Our teachers</h1>
    </section>
    <section id="teacher">
        <div class="container">
            <div class="row justify-content-center text-center">
                @foreach ($data as $item)
                    <div class="col-lg-2 pb-5">
                        <div class="teacher-main">
                            <img src="{{ asset($item->image) }}" alt="">
                            <h4>{{ $item->name }}</h4>
                            <h6>{{ $item->position }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection()
