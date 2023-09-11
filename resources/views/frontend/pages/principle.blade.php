@extends('frontend.master')
@section('content')
    <section id="principal">
        <div class="container">
            <div class="row justify-content-center text-center pt-5 pb-5">
                <div class="div pb-5 pt-5">
                    <h2>WELCOME TO XYZ College, Dhaka</h2>
                </div>
                <div class="col-lg-4 pt-3">
                    <div class="principal-img">
                        <img src="{{ $data->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 pb-5 text-start">
                    <div class="pricipal-text">
                        <h1>
                            PRINCIPAL MESSAGE</h1>
                        <h5>
                            {!! $data->description !!}
                        </h5>
                        <h4>{{ $data->name }}</h4>
                        <h6>Principal</h6>
                        <h6>XYZ, Dhaka</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
