@extends('layout.client.client')
@section('main-content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>CONTACT US</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Contact us </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Contact Area Start -->
    <div class="contact-us ptb-95">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area Start -->
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Form</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum
                            available.</p>
                    </div>
                    <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="con_name" placeholder="Full Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-style mb-20">
                                    <input name="con_email" placeholder="Email Address" type="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style mb-20">
                                    <input name="con_subject" placeholder="Subject" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-style">
                                    <textarea name="con_message" placeholder="Message"></textarea>
                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <!-- Contact Form Area End -->
                <!-- Contact Address Strat -->
                <div class="col-lg-6">
                    <div class="small-title mb-30">
                        <h2>Contact Address</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority Lorem Ipsum
                            available.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information mb-30">
                                <h4>Our Address</h4>
                                <p>Your address goes here</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:01234567890">0123456789</a>
                                    <a href="tel:01234567891">0123456789</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-information contact-mrg mb-30">
                                <h4>Web Address</h4>
                                <p>
                                    <a href="mailto:info@example.com">demo@example.com</a>
                                    <a href="#">demo@example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Address Strat -->
                <!-- Google Map Start -->
                <div class="col-md-12">
                    <div id="store-location">
                        <div class="contact-map pt-80">
                            <div class="map-area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224905.8379164026!2d-63.27089988050263!3d-2.8569688249815943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1635401091721!5m2!1sen!2sbd"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google Map Start -->
            </div>
        </div>
    </div>
    <!-- Contact Area Start -->
@endsection
