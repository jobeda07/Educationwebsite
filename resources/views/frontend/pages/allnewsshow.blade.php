@extends('frontend.master')
@section('content')
    <!-- news start -->
    <section id="news">
        <div class="container">
            <div class="row justify-content-center text-center pb-5 pt-4">
                <div class="col-lg-7">
                    <div class="news-head pt-5">
                        <h1>CAMPUS NEWS</h1>
                        <h4>There is always something exciting happening in Explore.</h4>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                @foreach ($allnewsView as $item)
                    <div class="col-lg-6 pt-2 pb-3">
                        <div class="news">
                            <img src="{{ asset($item->image) }}" alt="">
                            <div class="news-overlay">
                                <a href="{{ route('singlenewsview.page', $item->title) }}">{{ $item->title }}</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection()
