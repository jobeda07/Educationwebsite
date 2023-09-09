@extends('frontend.master')
@section('content')
    <section id="portfolio">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-lg-6 col-4">
                    <div class="port-head text-center">
                        <h2>Our Portfolio</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet doloribus esse obcaecati quibusdam
                            nihil corrupti, accusamus illum eius s elige eaque nihil iusto veniam earum distinctio?</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-3 mb-4">
                        <div class="main">
                            <div class="port-item1">

                                <img src="{{ asset($item->gimage) }}"class="w-100" alt="">
                                <div class="overlay">
                                    <a href="{{ asset($item->gimage) }}" target="_blank" data-lightbox="image-1"
                                        data-title="gallery"> <i><i class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3">
                        <div class="main">
                            <div class="port-item2">
                                <img src="./schl-img/book2.jpg"class="w-100 alt="">
                                <div class="overlay2">
                                    <a href="./schl-img/book2.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="main">
                            <div class="port-item1 mt-3">
                                <img src="./schl-img/book3.jpg"class="w-100 alt="">
                                <div class="overlay">
                                    <a href="./schl-img/book3.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main">
                            <div class="port-item1 ">
                                <img src="./schl-img/book4.jpg"class="w-100 alt="">
                                <div class="overlay">
                                    <a href="./schl-img/book4.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="main">
                            <div class="port-item2 mt-3">
                                <img src="./schl-img/book5.jpg" class="w-100 alt="">
                                <div class="overlay2">
                                    <a href="./schl-img/book5.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main">
                            <div class="port-item2">
                                <img src="./schl-img/book8.jpg"class="w-100 alt="">
                                <div class="overlay2">
                                    <a href="./schl-img/book8.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="main">
                            <div class="port-item1 mt-3">
                                <img src="./schl-img/book7.jpg"class="w-100 alt="">
                                <div class="overlay">
                                    <a href="./schl-img/book7.jpg" data-lightbox="image-1" data-title="gallery"> <i><i
                                                class="fa-solid fa-clone fa-2xl"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>

        </div>
        </div>
    </section>
@endsection()
