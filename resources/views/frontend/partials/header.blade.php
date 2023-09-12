    <section id="menu">
        <div class="container">
            <div class="row justify-content-center pt-1 pb-1">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="icon">
                                <i class="fa-duotone fa-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="box-1">
                                <h3>Mail us</h3>
                                <h5>
                                    xyzcollege@xyz.edu.bd
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-2 pt-4">
                        <marquee behavior="scroll" direction="left">XYZ College, Dhaka</marquee>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="box-3">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="box-4">
                                <h3> Call Us</h3>
                                <h5> +88-02-41070712</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1st menu end -->
    <!-- 2nd menu stRT -->
    <section id="header">
        <div class="container">
            <div class="row pt-1 pb-1">
                <div class="col-lg-3">
                    <div class="item-1">
                        <h5>Click here for admission </h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="item-2">
                                <img src="{{ asset('frontend/schl-img/75_years_logo.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="item-5">
                                <h5>75 Years</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-3">
                        <img src="{{ asset('frontend/schl-img/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-4">
                        <img src="{{ asset('frontend/schl-img/mujib_100.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 2nd menu end -->
    <!-- nav end -->
    <nav class="navbar navbar-expand-lg menu-bg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-lg-0">
                    <li class="nav-item" class="dropdown">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('history.page') }}">History</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('allnewsView.page') }}">News/Event
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Academic
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('teacher.page') }}">All Teacher</a></li>
                                <li><a class="dropdown-item" href="{{ route('principle.page') }}">Principal Message</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admission
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="admission.html">Admission From</a></li>
                                <li><a class="dropdown-item" href="admisson-info.html">Admisson Infromation</a></li>
                                <li><a class="dropdown-item" href="admission-fee.html">Admission Fees</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Gallery
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('gallery.page') }}">Photos</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('notice.page') }}">
                            Notice
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('contact.page') }}">
                            contact
                        </a>
                    </li>

                    <li class="nav-item">
                        <h4><i class="fa-solid fa-magnifying-glass"></i></h4>
                    </li>

            </div>
        </div>
    </nav>
