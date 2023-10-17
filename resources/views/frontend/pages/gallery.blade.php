@extends('frontend.master')
@section('content')
    <section id="portfolio">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-lg-10 col-8 col-md-8">
                    <div class="port-head text-center">
                        <h2>আমাদের গ্যালারি</h2>
                        <p>স্কুল ফটো গ্যালারি আমাদের একাডেমিক যাত্রার সারমর্ম ক্যাপচার করে, স্মৃতি এবং অভিজ্ঞতার একটি
                            ভিজ্যুয়াল ট্যাপেস্ট্রি প্রদর্শন করে। প্রতিটি ফটোগ্রাফ হাসি, বন্ধুত্ব এবং বৃদ্ধির একটি প্রমাণ যা
                            স্কুলে আমাদের সময়কে সংজ্ঞায়িত করে। প্রথম দিনের স্নায়ু থেকে কৃতিত্বের গর্বিত মুহূর্ত পর্যন্ত,
                            গ্যালারি আমাদের শিক্ষামূলক অ্যাডভেঞ্চারের বৈচিত্র্যময় এবং প্রাণবন্ত মুহূর্তগুলিকে ধারণ করে।</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-3">
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
