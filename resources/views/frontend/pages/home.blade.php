@extends('frontend.master')
@section('content')
    <!-- home start -->
    <section id="sec-about">
        <i class="next1"><i class="fa-solid fa-chevron-left"></i></i>
        <i class="prev1"><i class="fa-solid fa-chevron-right"></i></i>
        <div class="about-main">
            <div class="about-top"
                style="background: url({{ asset('frontend/schl-img/thumb1S.jpg') }}) no-repeat center /cover;">
            </div>
            <div class="about-top"
                style="background: url({{ asset('frontend/schl-img/thumb1.jpg') }})no-repeat center /cover;">
            </div>
            <div class="about-top"
                style="background: url({{ asset('frontend/schl-img/thumb2.jpg') }}) no-repeat center /cover;">
            </div>
            <div class="about-top"
                style="background: url({{ asset('frontend/schl-img/thumb3jpg.jpg') }}) no-repeat center /cover;">
            </div>

            <div class="about-top"
                style="background: url({{ asset('frontend/schl-img/thumbm.jpg') }}) no-repeat center /cover;">
            </div>
        </div>
    </section>
    <!-- home end -->
    <!-- more about start -->
    <section id="moreAbout">
        <div class="container">
            <div class="row justify-content-center text-center mt-5 mb-5">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="pic-about">
                        <img src="{{ $principle->image }}" width="240px" height="165px" alt="">
                        <h3>{{ $principle->name_bn }}</h3>
                        <h4>অধ্যক্ষ</h4>
                        <?php
                        $description = strip_tags($principle->description);
                        $words = explode(' ', $description);
                        $limitedDescription = implode(' ', array_slice($words, 0, 20));
                        ?>

                        <p>{!! $limitedDescription !!}</p>
                        <div class="btn-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pic-details">
                        <img src="./frontend/schl-img/government-of-bangladesh.png" alt="">
                        <h3 class="text-center">Notre Dome College</h3>
                        <p>বাংলার রাজনৈতিক ইতিহাস পর্যবেক্ষণে দেখা যায়, নারায়ণগঞ্জ বৌদ্ধ-হিন্দু-পাঠান-মোঘলের পদস্পর্শে নগর
                            সভ্যতাই পদার্পণ করেছে। ইংরেজ কর্মচারি ‘ ভিখন লাল ঠাকুর’ মনিবদের প্রতি অগাধ বিশ্বাসের উপঢৌকন
                            হিসেবে এই এলাকার কিছু অংশের ভোগসত্ব লাভ করেছিলেন। ধর্মপরায়ন এই মনীষী লক্ষ্মী নারায়ণয়ের আখরা
                            নামের মন্দিরে নারায়াণ বিগ্রহ প্রতিস্থাপন করেছিলেন। এই আখড়া ও মন্দিরকেঘিরে একটি ‘গঞ্জ’ তৈরি
                            হয়েছিল।</p>
                        <p>কালের বিবর্তনে গঞ্জের প্রভাবে একসময় জায়গাটির নামকরণ হয় ‘নারায়ণগঞ্জ’। পাট এবং পৃথিবী বিখ্যাত মসলিন
                            কাপড়ের বদৌলতে বিদেশিদের আনাগোনায় নারায়ণগঞ্জ দিনরাত কর্মচঞ্চল থাকত। শীতলক্ষ্যা নদীর তীরে ধীরে
                            ধীরে গড়ে ওঠা নারায়ণগঞ্জ শহর প্রথম থেকেই ধন-সম্পদে পূর্ণ ছিল। সম্পদের মোহে এই শহরের সবাই যখন
                            ব্যবসা-বাণিজ্যে মশগুল, তখন একান্ত-মনে বিদ্যার আলো বিস্তারের চিন্তায় ব্যস্ত বাবু খগেন্দ্রনাথ
                            চক্রবর্তী। বিস্তারিত…</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="pic-about">
                        <img src="{{ $principle->image }}" width="240px" height="165px" alt="">
                        <h3>{{ $principle->name_bn }}</h3>
                        <h4>অধ্যক্ষ</h4>
                        <?php
                        $description = strip_tags($principle->description);
                        $words = explode(' ', $description);
                        $limitedDescription = implode(' ', array_slice($words, 0, 20));
                        ?>

                        <p>{!! $limitedDescription !!}</p>
                        <div class="btn-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- more about end -->

    <!-- notice start -->
    <section id="board">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-lg-7 ">
                    <h2 style="padding-bottom: 20px;" class="board">আরো সম্পর্কে জানুন.</h2>
                    <div class="faq">
                        <div class="question"style="background-color: rgb(3, 41, 86);">
                            <h5>প্রশ্ন 1</h5>
                            <button class="toggle"> <i class="fas fa-angle-down"></i></button>
                        </div>
                        <div class="answer">
                            <p>মিনিমাম নেসসিউন্ট অপটিও লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?মিনিমাম নেসসিউন্ট অপটিও
                                লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?মিনিমাম নেসসিউন্ট অপটিও লাউড্যান্টিয়াম ডেবিটিস
                                ল্যাবরিওসাম ফেসরে?
                            </p>
                        </div>
                        <div class="question" style="background-color: rgb(3, 41, 86);">
                            <h5>প্রশ্ন 2</h5>
                            <button class="toggle"> <i class="fas fa-angle-down"></i></button>
                        </div>
                        <div class="answer">
                            <p>মিনিমাম নেসসিউন্ট অপটিও লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?মিনিমাম নেসসিউন্ট অপটিও
                                লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?মিনিমাম নেসসিউন্ট অপটিও লাউড্যান্টিয়াম ডেবিটিস
                                ল্যাবরিওসাম ফেসরে?

                            </p>
                        </div>
                        <div class="question" style="background-color: rgb(3, 41, 86);">
                            <h5>প্রশ্ন 3</h5>
                            <button class="toggle"> <i class="fas fa-angle-down"></i></button>
                        </div>
                        <div class="answer">
                            <p>মিনিমাম নেসসিউন্ট অপটিও লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?মিনিমাম নেসসিউন্ট অপটিও
                                লাউড্যান্টিয়াম ডেবিটিস ল্যাবরিওসাম ফেসরে?</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="notice-board">
                        <h1>নোটিশ বোর্ড</h1>
                        <div class="b-notice">
                            <marquee behavior="scroll" direction="up">
                                @foreach ($notice as $item)
                                    <h3 style="color: #032956; font-size: 21px; font-weight: 700;">{{ $item->title }}</h3>
                                    "Published on:{{ $item->created_at->format('F j, Y') }}" <br> "Click here to "<a
                                        href="{{ asset($item->notice_pdf) }}" download style="color: red;">Download</a>
                                    <br><br>
                                @endforeach
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- notice end -->
    <!-- new event start -->
    <section id="event">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5 event-slide">

                <div class="col-lg-3  col-md-3 col-12">
                    <div class="event-one">
                        <h2>আমাদের সম্পাদিত কাজ</h2>
                        <p> ১ . পরিকল্পিতভাবে শ্রেণীপাঠদানের জন্য একাদশ ও দ্বাদশ শ্রেণীর বিষয়ভিত্তিক বার্ষিক পাঠ পরিকল্পনা
                            প্রণয়ন করা হয়েছে এবং পুস্তক আকারে শিক্ষার্থীদের মধ্যে বিতরণ করা হয়েছে।</p>
                        <p>২. কলেজের সকল বিভাগে ব্রডব্যান্ড ইন্টারনেট সংযোগ প্রদান করা হয়েছে।</p>
                        <p>৩. সমস্ত কলেজ ক্যাম্পাসে ওয়াইফাই নেটওয়ার্ক স্থাপন করা হয়েছে।</p>
                        <div class="btn-one">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-3 col-12">
                    <div class="event-one">
                        <h2>আমাদের ভব্যিষৎ পরিকল্পনা</h2>
                        <p> ১ . বার্ষিক পাঠ পরিকল্পনা অনুসারে মাল্টিমিডিয়া কনটেন্ট এর মাধ্যমে সকল শ্রেণীর পাঠদান নিশ্চির করা
                        </p>
                        <p>২. যথাসময়ে কলেজের অভ্যন্তরীণ পরীক্ষা গ্রহণ ও রেজাল্টকার্ড এর মাধ্যমে ফলাফল প্রদান।</p>
                        <p>৩. অভিভাবক সমাবেশ এর আয়োজন করা।</p>
                        <p>৪.জঙ্গিবাদ বিরোধী সমাবেশ ও আলোচনা সভার আয়োজন করা।</p>
                        <div class="btn-one">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6 col-12">
                    <h2 class="lg-6">NEWS & EVENTS</h2>
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @foreach ($news as $item)
                                <div class="item">
                                    <div class="cardx">
                                        <div class="card-bodyx">
                                            <img src="{{ asset($item->image) }}" class="img-fluid w-100" alt="">
                                            <a href="{{ route('singlenewsview.page', $item->title) }}">
                                                <h1> {{ $item->title }}</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- new event end -->

    <!-- news start -->
    {{-- <section id="news">
        <div class="container">
            <div class="row justify-content-center text-center pb-5">
                <div class="col-lg-7">
                    <div class="news-head">
                        <h1>ক্যাম্পাস সংবাদ
                        </h1>
                        <h4> এক্সপ্লোরে সবসময় কিছু উত্তেজনাপূর্ণ ঘটছে।</h4>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img.jpg" alt="" class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Achievements</h5>
                            <a href="news.html">BUET secured 185th position in the 2022 QS World University Rankings by
                                Subject</a>
                            <p>Area</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img1.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Alumni</h5>
                            <h6>Seven Teachers of BUET received the Research Excellence Award of BUET's Forum</h6>
                            <p>86</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img2.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Development</h5>
                            <h6>BUET is admitting new intake in the Nanomaterials and Ceramic Engineering (NCE)</h6>
                            <p>Department for the first time</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-2">
                    <div class="news">
                        <img src="./schl-img/img3.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Grants</h5>
                            <h6>বুয়েট এর শিক্ষকদের সময় উপযোগী এবং চতুর্থ শিল্প বিপ্লব মোকাবিলায় সহায়ক ১০টি </h6>
                            <p>গবেষণা প্রস্তাবনার রাইজের মাধ্যমে ফান্ড প্রদান</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img8.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Achievements</h5>
                            <h6>A Journal Paper from BUET received Elsevier Smart Health Journal Best Paper</h6>
                            <p>Award 2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img5.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Collaboration</h5>
                            <h6>ASCE-EWRI and IWFM, BUET successfully organized the 11th IPWE conference</h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img6.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>National</h5>
                            <h6>জাতীয় পরিবেশ পদক ২০২০ পেয়েছে বুয়েট</h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-2 pb-3">
                    <div class="news">
                        <img src="./schl-img/img7.jpg" alt=""class="img-fluid w-100">
                        <div class="news-overlay">
                            <h5>Others</h5>
                            <h6>বুয়েটে শুদ্ধাচার বিষয়ক র‌্যালি অনুষ্ঠিত</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- news end -->

    <!--mockup start  -->
    <section id="counter">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center text-center">
                <div class="text pb-5">
                    <h2 class="bord">স্কুলের নাম, ঢাকা
                    </h2>
                    <h6> এক বিস্ময়কর প্রশান্তি আমার সমস্ত আত্মাকে দখল করে নিয়েছে, বসন্তের এই মিষ্টি সকালের মতো যা আমি আমার
                        মতো আমার সমস্ত হৃদয় দিয়ে উপভোগ করি।</h6>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="counter-item">
                                <h4 class="counter">93
                                </h4>
                                <p>শিক্ষক</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="counter-item">
                                <h4 class="counter">75</h4>
                                <p>বছর </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="counter-item">
                                <h4 class="counter">6580</h4>
                                <p> ছাত্ররা </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="counter-item">
                                <h4 class="counter">6</h4>
                                <p>বিল্ডিং</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mock-img">
                        <img src="{{ asset('frontend/schl-img/mock.jpg') }}" alt=""class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--mockup end  -->
@endsection()
