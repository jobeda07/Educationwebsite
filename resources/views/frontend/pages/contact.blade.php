@extends('frontend.master')
@section('content')
    <section id="from">
        <div class="container">
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-lg-5 pt-5 pb-5">
                    <div class="from-text">
                        <h3>L O C A T I O N</h3>
                        <h5>Mirpur Cantonment,Dhaka-1216</h5>
                        <h6>Phone: +8809666790799</h6>
                        <h2 style="padding-bottom: 20px;">FOLLOW US</h2>
                        <div class="fol-icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-facebook-messenger"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <h6 style="padding-top: 20px;">Email: info@bup.edu.bd</h6>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-5">
                    <h2 style="color: rgb(8, 8, 8);">Contact From</h2>
                    <from>
                        <input style="height: 50px; width: 500px; margin: 10px 0;background-color: black;" type="text"
                            placeholder="Enter your name"> <br>
                        <input style="height: 50px; width: 500px; margin: 10px 0;background-color: black;" type="text"
                            placeholder="Enter your email address"> <br>
                        <label for="Sbject"></label>
                        <textarea id="Subject"name="Subject" placeholder="Write something..."
                            style="height: 150px; width: 500px; margin-left: -5px; margin-top: 10px; margin-bottom: 10px;background-color: black;"></textarea> <br>
                        <input style="border: 2px solid aqua; padding: 10px 20px; background-color: black; color: white;"
                            type="submit" value="Submit">
                    </from>
                </div>
            </div>
        </div>
    </section>
@endsection()
