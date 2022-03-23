@extends('frontend.layouts.master')

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Realisation</h2>

            <ul>
                <li>
                    <a href="{{route('acceuil')}}">Acceuil</a>
                </li>
                <li>Realisation</li>
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

<!-- Start Cases Area -->
<div class="cases-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-1.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">Branding</div>
                        <div class="tag-2">Development</div>

                        <h3>
                            <a href="case-study-details.html">Product Branding and Web Development</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets you apart from every other Tom, Dick, and Harry, Inc. Branding just like your personal identity makes you uniquely.</p>
                    </div>
                </div>

                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-2.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">Business</div>

                        <h3>
                            <a href="case-study-details.html">Brand Identity and Mockup</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets you apart from every other Tom.</p>
                    </div>
                </div>

                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-5.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">Branding</div>
                        <div class="tag-2">Development</div>

                        <h3>
                            <a href="case-study-details.html">Personal Portfolio Website Redesign</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets you apart from every other Tom, Dick, and Harry, Inc. Branding just like your personal identity makes you uniquely.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-3.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">App Design</div>

                        <h3>
                            <a href="case-study-details.html">Banking Mobile iOS App Design</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets you apart from every other Tom, Dick, and Harry, Inc. Branding just like your personal identity makes you uniquely.</p>
                    </div>
                </div>

                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-4.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">App Design</div>

                        <h3>
                            <a href="case-study-details.html">Plod Website Design and Development</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets.</p>
                    </div>
                </div>

                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset('frontend/assets/images/cases-study/cases-6.jpg')}}" alt="image">
                        </a>
                    </div>
                    
                    <div class="cases-content">
                        <div class="tag-1">App Design</div>

                        <h3>
                            <a href="case-study-details.html">Design and Development for Medical</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you, your brand identity is the special sauce of your business that sets you apart from every other Tom, Dick, and Harry, Inc. Branding just like your personal identity makes you uniquely.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="ri-arrow-left-line"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="cases-shape-1" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-1.png')}}" alt="image">
    </div>
    <div class="cases-shape-2" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-2.png')}}" alt="image">
    </div>
    <div class="cases-shape-3" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-3.png')}}" alt="image">
    </div>
    <div class="cases-shape-4" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-4.png')}}" alt="image">
    </div>
    <div class="cases-shape-5" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-5.png')}}" alt="image">
    </div>
    <div class="cases-shape-6" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-4.png')}}" alt="image">
    </div>
    <div class="cases-shape-7" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-5.png')}}" alt="image">
    </div>
</div>
<!-- End Cases Area -->

@endsection
