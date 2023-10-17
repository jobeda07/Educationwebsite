@extends('frontend.master')
@section('content')
    {{-- <section id="history">
        <div class="container">
            <div class="row justify-content-center text-center pt-5 pb-5">
                <h2>Brief History of XYZ College</h2>
                <div class="col-lg-6 pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->first_history }}
                        </h6>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->first_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6  pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->second_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6  pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->second_history }}</h6>
                    </div>
                </div>
                <div class="col-lg-6  pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->third_history }}</h6>
                    </div>
                </div>
                <div class="col-lg-6  pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->third_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="history">
        <div class="container">
            <div class="row justify-content-center text-center pt-5 pb-5">
                <h2> কলেজের সংক্ষিপ্ত ইতিহাস</h2>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->first_history }}</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->first_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->second_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->second_history }}</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5 text-start">
                    <div class="history-text">
                        <h6>{{ $data->third_history }}</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5 pb-5">
                    <div class="hist-img">
                        <img class="img-fluid" src="{{ asset($data->third_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
