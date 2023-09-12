@extends('frontend.master')
@section('content')
    <!-- news start -->
    <section id="news-detail">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-lg-11">
                    <div class="details-news">
                        <h3>Home > XYZ News </h3>
                        <h2>{{ $singlenewsview->title }}</h2>
                        <p>{{ $singlenewsview->created_at->format('F j, Y') }}</p>
                        <img class="img-fluid mb-4" src="{{ asset($singlenewsview->image) }}" alt="">
                        <h6>{!! $singlenewsview->description !!}.</h6>
                        <h5><i class="fa-solid fa-paperclip"></i> Featured Link</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
