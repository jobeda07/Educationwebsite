@extends('frontend.master')
@section('content')
    <section id="from">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-lg-5  col-md-12 col-12">
                    <div class="from-text">
                        <h3>L O C A T I O N</h3>
                        <h5>Mirpur Cantonment,Dhaka-1216</h5>
                        <h6>Phone: +8809666790799</h6>
                        <h2 style="padding-bottom: 20px;" class="follow">FOLLOW US</h2>
                        <div class="fol-icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-messenger"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <h6 style="padding-top: 20px;">Email: info@bup.edu.bd</h6>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-5 mt-5 col-md-12 col-12">
                    <h2 style="color: rgb(8, 8, 8);" class="h2">Contact From</h2>
                    <div class="column">
                        <form action="/action_page.php">
                            <label for="fname"> Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Email</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your email address..">
                            <label for="subject">Message</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection()
