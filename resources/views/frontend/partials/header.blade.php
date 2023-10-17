 <section id="header">
     <div class="container">
         <div class="row pt-1 pb-1">
             <div class="col-lg-2 col-md-4 col-sm-4 col-3">
                 <div class="item-one">
                     <img src="{{ asset('frontend/schl-img/clg_logo.png') }}" alt="">
                 </div>
             </div>
             <div class="col-lg-8 col-md-4 col-sm-4 col-9">
                 <div class="item-3">
                     <h2>BIRSHRESHTHA NOOR MOHAMMAD PUBLIC </h2>
                     <h2> COLLEGE (BNMPC)</h2>
                     <h6>EIIN - 108161 | School Code - 1217
                     </h6>
                     <h5> <i class="fa-solid fa-phone-volume"></i> +88-02-41070712 | <i
                             class="fa-duotone fa-envelope-open-text"></i> birsesto@gmail.com</h5>
                 </div>
             </div>
             <div class="col-lg-2 col-md-4 col-sm-4 ">
                 <div class="item-44">
                     <img src="{{ asset('frontend/schl-img/seikh_mujib_logo.png') }}"
                         alt=""class="img-fluid w-100">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section>
     <div class="container">
         <div class="row">
             <div class="col-lg-2 col-sm-4 col-md-4 col-4">
                 <div class="note-one">
                     <h6><i class="fa-solid fa-bell-on" style="color: #d91747;"></i> Notice:</h6>
                 </div>
             </div>
             <div class="col-lg-10 col-sm-8 col-md-8 col-8">
                 <div class="note">
                     <marquee behavior="scroll" direction="left" style="color: red;">Notre Dame College, Dhaka</marquee>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- nav start -->
 <nav class="navbar navbar-expand-lg menu-bg">
     <div class="container">

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon">
                 <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
             </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav m-auto mb-lg-0">
                 <li class="nav-item" class="dropdown">
                     <a class="nav-link active" aria-current="page" href="{{ route('home') }}">হোম
                     </a>
                 </li>
                 <li class="nav-item">
                     <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             সম্পর্কে
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                             <li><a class="dropdown-item" href="{{ route('history.page') }}">ইতিহাস</a></li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">প্রশাসন
                     </a>
                 </li>
                 <li class="nav-item">
                     <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             একাডেমিক
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                             <li><a class="dropdown-item" href="{{ route('teacher.page') }}">সকল শিক্ষক</a></li>
                             <li><a class="dropdown-item" href="{{ route('principle.page') }}">প্রিন্সিপাল বার্তা</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             ভর্তি
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                             <li><a class="dropdown-item" href="admission.html">ভর্তি ফরম</a></li>
                             <li><a class="dropdown-item" href="admisson-info.html">ভর্তি তথ্য</a></li>
                             <li><a class="dropdown-item" href="admission-fee.html">ভর্তি ফি</a></li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             গ্যালারি
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                             <li><a class="dropdown-item" href="{{ route('gallery.page') }}">ফটো</a></li>

                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('notice.page') }}">
                         নোটিশ
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('contact.page') }}">
                         যোগাযোগ
                     </a>
                 </li>

                 <li class="nav-item">
                     <h4><i class="fa-solid fa-magnifying-glass"></i></h4>
                 </li>

         </div>
     </div>
 </nav>
 <!-- nav end -->
