@extends('frontend.layouts.master')

@section('content')


<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact</h2>

            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-1.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-2.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-3.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-4.png')}}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="contact-form">
            <h3>Get in Touch</h3>

            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Send Message <i class="ri-arrow-right-line"></i><span></span></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Contact Info Area -->
<div class="contact-info-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="contact-address">
                    <h3>Contact Address:</h3>
                    <p>The IT industry offers a sea of options, from platforms, programming languages, methodologies, technologies, tools, and more.</p>

                    <ul class="address-info">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:3128959800">(312) 895-9800</a>
                        </li>

                        <li>
                            <i class="ri-global-line"></i>
                            <a href="/cdn-cgi/l/email-protection#274f424b4b48094a4267574b48430944484a"><span class="__cf_email__" data-cfemail="0c64696060632261694c7c606368226f6361">[email&#160;protected]</span></a>
                        </li>

                        <li>
                            <i class="ri-map-pin-line"></i>
                            121 St, Melbourne VIC 3000, Australia
                        </li>
                    </ul>

                    <ul class="address-social">
                        <li>
                            <a href="#" target="_blank">
                                <i class="ri-facebook-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="ri-messenger-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.39976297436!2d-17.47428784997567!3d14.746493577388456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d5c47f3ea81%3A0x4a37c0a94ce6e6c4!2sOuest%20Foire%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1647731172122!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info Area -->

@endsection
