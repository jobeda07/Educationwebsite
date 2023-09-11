@extends('frontend.master')
@section('content')
    {{-- @push('css')
        <link rel="stylesheet" href="./frontend/cs/slick.css">
        <link rel="stylesheet" href="./frontend/cs/style.css">
    @endpush() --}}
    <!-- News Details start -->
    <section id="news-detail">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-lg-11">
                    <div class="details-news">
                        <h3>Home > BUET News > Achievements</h3>
                        <h2>{{ $singlenewspage->title }}</h2>
                        <p>Apr 6, 2022</p>
                        <img class="img-fluid" src="./schl-img/img.jpg" alt="">
                        <h6>{!! $singlenewspage->description !!}.</h6>
                        <h5><i class="fa-solid fa-paperclip"></i> Featured Link</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Details end -->
@endsection()
