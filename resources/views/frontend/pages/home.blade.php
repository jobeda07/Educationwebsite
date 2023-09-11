@extends('frontend.master')
@section('content')
    <section id="sec-about">
        <i class="next1"><i class="fa-solid fa-chevron-left"></i></i>
        <i class="prev1"><i class="fa-solid fa-chevron-right"></i></i>
        <div class="about-main">
            <div class="about-top" style="background: url(./frontend/schl-img/thumb1S.jpg) no-repeat center /cover;">
            </div>
            <div class="about-top" style="background: url(./frontend/schl-img/thumb1.jpg)no-repeat center /cover;">
            </div>
            <div class="about-top" style="background: url(./frontend/schl-img/thumb2.jpg) no-repeat center /cover;">
            </div>
            <div class="about-top" style="background: url(./frontend/schl-img/thumb.jpg) no-repeat center /cover;">
            </div>
            <div class="about-top" style="background: url(./frontend/schl-img/thumb3jpg.jpg) no-repeat center /cover;">
            </div>

            <div class="about-top" style="background: url(./frontend/schl-img/thumbm.jpg) no-repeat center /cover;">
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- news start -->
    <section id="news">
        <div class="container">
            <div class="row justify-content-center text-center pb-5">
                <div class="col-lg-7">
                    <div class="news-head">
                        <h1>CAMPUS NEWS</h1>
                        <h4>There is always something exciting happening in Explore.</h4>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                @foreach ($news as $item)
                    <div class="col-lg-6 pt-2 pb-3">
                        <div class="news">
                            <img src="{{ asset($item->image) }}" alt="">
                            <div class="news-overlay">
                                <a href="{{ route('single.newspage', $item->title) }}">{{ $item->title }}</a>
                                <p>Area</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- news end -->
    <!--mockup start  -->
    <section id="counter">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center text-center">
                <div class="text pt-5 pb-5">
                    <h2>Notre Dame College, Dhaka</h2>
                    <h6>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart like mine.</h6>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 pb-4">
                            <div class="counter-item">
                                <h4 class="counter">93</h4>
                                <p>Teacher</p>
                            </div>
                        </div>
                        <div class="col-lg-6 pb-4">
                            <div class="counter-item">
                                <h4 class="counter">75</h4>
                                <p>Years</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="counter-item">
                                <h4 class="counter">6580</h4>
                                <p>Students</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="counter-item">
                                <h4 class="counter">6</h4>
                                <p>Building</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mock-img">
                        <img src="./schl-img/mock.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
