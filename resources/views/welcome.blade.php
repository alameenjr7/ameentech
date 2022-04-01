@extends('frontend.layouts.master')

@section('title')
    <title>{{get_setting('title')}} - Création site Web, Applications, Logiciels</title>
@endsection

@section('content')

<!-- Start Main Banner Area -->

{{-- @if (count($banners)>0) --}}
<div class="main-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="main-banner-content">
                    <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <img src="{{asset(get_setting('logo'))}}" alt="image">
                        # AmeenTech Meilleure Entreprise Informatique.
                    </div>
                    
                    <h6 style="margin-top: 25px;">Votre</h6>
                    <h1 class="wow fadeInLeft" style="margin-top: 4px;" data-wow-delay="00ms" data-wow-duration="1000ms"> 
                        {{-- @foreach ($banners as $banner)
                            <span class="wow fadeInLeft" id="#slider1" data-wow-delay="00ms" data-wow-duration="1000ms">{{$banner->title}}</span>
                        @endforeach --}}
                    </h1>
                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Assurer le meilleur retour sur investissement pour votre entreprise avec AmeenTECH.</p>

                    <div class="banner-btn">
                        <a href="{{route('apropos')}}" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">Voir Plus <i class="ri-arrow-right-line"></i><span></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="main-banner-animation-image">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img1.png')}}" class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img2.png')}}" class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img3.png')}}" class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img4.png')}}" class="wow fadeInDown" data-wow-delay="900ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img5.png')}}" class="wow fadeInUp" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img6.png')}}" class="wow fadeInDown" data-wow-delay="700ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img7.png')}}" class="wow fadeInDown" data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img8.png')}}" class="wow fadeInDown" data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img9.png')}}" class="wow fadeInDown" data-wow-delay="1000ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img10.png')}}" class="wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img11.png')}}" class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img12.png')}}" class="wow fadeInLeft" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img13.png')}}" class="wow fadeInLeft" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img14.png')}}" class="wow fadeInLeft" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/img15.png')}}" class="wow fadeInLeft" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('frontend/assets/images/main-banner/banner-one/main-pic.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner-shape-1">
        <img src="{{asset('frontend/assets/images/main-banner/banner-one/shape-1.png')}}" alt="image">
    </div>
    <div class="main-banner-shape-2">
        <img src="{{asset('frontend/assets/images/main-banner/banner-one/shape-2.png')}}" alt="image">
    </div>
    <div class="main-banner-shape-3">
        <img src="{{asset('frontend/assets/images/main-banner/banner-one/shape-3.png')}}" alt="image">
    </div>
    <div class="main-banner-shape-4">
        <img src="{{asset('frontend/assets/images/main-banner/banner-one/shape-4.png')}}" alt="image">
    </div>
</div>
{{-- @endif --}}
<!-- End Main Banner Area -->

<!-- Start Partner Area -->
@if (count($languages)>0)
<div class="partner-area">
    <div class="container">
        <div class="partner-box">
            <div class="partner-slides owl-carousel owl-theme">
                @foreach ($languages as $language)
                    <div class="single-partner">
                        <a href="{{$language->url}}"><img src="{{asset($language->photo)}}" alt="image"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="partner-shape-1" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/partner/shape-1.png')}}" alt="image">
    </div>
    <div class="partner-shape-2" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/partner/shape-2.png')}}" alt="image">
    </div>
</div>
@endif
<!-- End Partner Area -->

<!-- Start Features Area -->
@if (count($categories)>0)
<div class="features-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $categorie)
            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <a href="#"><img src="{{asset($categorie->photo)}}" alt="image"></a>
                    <h3>
                        <a href="#">{{$categorie->title}}</a>
                    </h3>
                    <p>{{$categorie->description}}</p>

                    <div class="features-btn">
                        <a href="#" class="default-btn">Voir Plus <i class="ri-arrow-right-line"></i><span></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="features-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/features/shape-1.png')}}" alt="image">
    </div>
    <div class="features-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/features/shape-2.png')}}" alt="image">
    </div>
    <div class="features-shape-3">
        <img src="{{asset('frontend/assets/images/features/shape-3.png')}}" alt="image">
    </div>
    <div class="features-shape-4">
        <img src="{{asset('frontend/assets/images/features/shape-4.png')}}" alt="image">
    </div>
</div>
@endif
<!-- End Features Area -->

<!-- Start Experiences Area -->
@include('frontend.layouts._experience')
<!-- End Experiences Area -->

<!-- Start Services Area -->
@if(count($services)>0)
<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Services que nous Offrons!</h2>
            <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scelerisque amet odio velit auctor nam elit nulla eget sodales dui pulvina</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($services as $servie)
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon">
                        <i class="{{$service->icon}}"></i>
                    </div>
                    <h3>
                        <a href="services-details.html">{{$service->title}}</a>
                    </h3>
                    <p>{!! html_entity_decode($service->description) !!}</p>
                    <a href="services-details.html" class="services-btn">Voir Plus <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="services-shape-1" data-speed="0.02" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-1.png')}}" alt="image">
    </div>
    <div class="services-shape-2" data-speed="0.02" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-2.png')}}" alt="image">
    </div>
    <div class="services-shape-3" data-speed="0.02" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-3.png')}}" alt="image">
    </div>
    <div class="services-shape-4" data-speed="0.02" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-4.png')}}" alt="image">
    </div>
</div>
@endif
<!-- End Services Area -->

<!-- Start Support Area -->
@include('frontend.layouts._support')
<!-- End Support Area -->

<!-- Start Cases Area -->
@if(count($realisations)>0)
<div class="cases-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Realizations / Recent Cases</h2>
            <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scelerisque amet odio velit auctor nam elit nulla eget sodales dui pulvina</p>
        </div>

        <div class="row">
            @foreach ($realisations as $realisation)
            <div class="col-lg-6">
                <div class="single-cases">
                    <div class="cases-image">
                        <a href="case-study-details.html">
                            <img src="{{asset($realisation->photo)}}" alt="image">
                        </a>
                    </div>

                    <div class="cases-content">
                        @if ($realisation->condition == 'terminer')
                            <div class="tag-1">Terminer</div>
                        @else
                            <div class="tag-1">En Cours</div>
                        @endif
                        @php
                            $lang = App\Models\Language::where('id',$realisation->language_id)->get()->first();
                        @endphp
                        <div class="tag-2">{{$lang->title}}</div>

                        <h3>
                            <a href="case-study-details.html">{{$realisation->title}}</a>
                        </h3>
                        <p>{!! html_entity_decode($realisation->contenu) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="cases-view-all-btn">
                <a href="{{route('realisation')}}" class="default-btn">Voir toutes les Réalisations <i class="ri-briefcase-line"></i><span></span></a>
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
@endif
<!-- End Cases Area -->

<!-- Start Clients Area -->
@include('frontend.layouts._client')
<!-- End Clients Area -->

<!-- Start Plans Area -->
{{-- <div class="plans-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Choose Your Best Plans</h2>
            <p>Pay by monthly or yearly, you can cancel it anytime whatever you want</p>
        </div>

        <div class="plans-switcher">
            <div class="switcher-box">
                <label class="toggler toggler--is-active" id="filt-monthly">Bill Monthly</label>
                <div class="toggle">
                    <input type="checkbox" id="switcher" class="check">
                    <b class="b switch"></b>
                </div>
                <label class="toggler" id="filt-yearly">Bill Yearly</label>
            </div>
        </div>

        <div id="monthly" class="wrapper-full">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table">
                        <div class="plans-header">
                            <h3>Individual</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$49 <span>/Month</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 10 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 10 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table active-box">
                        <div class="plans-header">
                            <h3>Small Team</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$69 <span>/Month</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 15 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 15 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>

                        <div class="popular-tag">
                            <span>Most Popular</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table">
                        <div class="plans-header">
                            <h3>Business</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$79 <span>/Month</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 20 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 20 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="yearly" class="wrapper-full hide">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table">
                        <div class="plans-header">
                            <h3>Individual</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$249 <span>/Yearly</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 10 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 10 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table active-box">
                        <div class="plans-header">
                            <h3>Small Team</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$269 <span>/Yearly</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 15 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 15 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>

                        <div class="popular-tag">
                            <span>Most Popular</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-plans-table">
                        <div class="plans-header">
                            <h3>Business</h3>
                            <p>Powerful & Awesome Elements</p>
                        </div>

                        <div class="price">$279 <span>/Yearly</span></div>

                        <div class="plans-btn">
                            <a href="#" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                        <ul class="plans-features-list">
                            <li><i class="ri-check-line"></i> Up to 20 Website</li>
                            <li><i class="ri-check-line"></i> Lifetime Free Support</li>
                            <li><i class="ri-check-line"></i> 20 GB Dedicated Hosting Free</li>
                            <li><i class="ri-check-line"></i> 24/7 Hours Support</li>
                            <li><i class="ri-check-line"></i> SEO Optimized</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all-plans-btn">
            <a href="pricing.html" class="plans-btn-one">See All Pricing Plan</a>
        </div>
    </div>

    <div class="plans-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/plans/shape-1.png')}}" alt="image">
    </div>
    <div class="plans-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/plans/shape-2.png')}}" alt="image">
    </div>
    <div class="plans-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/plans/shape-3.png')}}" alt="image">
    </div>
</div> --}}
<!-- End Plans Area -->
<hr style="color: transparent;">
<!-- Start Blog Area -->
@if (count($bestPub)>0)
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Popular Blog Post</h2>
            <p>We are try to Update with Latest Article and Blog Post Best Strategic Planning</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($bestPub as $pub)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="{{asset($pub->photo)}}" alt="image"></a>
                    </div>

                    <div class="blog-content">
                        <ul class="entry-meta">
                            @php
                                $lang = App\Models\Language::where('id',$pub->language_id)->get()->first();
                            @endphp
                            <li class="tag">{{$lang->title}}</li>
                            <li>
                                <i class="ri-time-line"></i>
                                {{$pub->getCreatedAt()}}
                            </li>
                            <li>
                                @php
                                    $comment = App\Models\PublicationReview::where('publication_id',$pub->id)->count()
                                @endphp
                                <i class="ri-message-2-line"></i>
                                ({{$comment}}) Commentaire(s)
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">{{$pub->title}}</a>
                        </h3>
                        <a href="blog-details.html" class="blog-btn">Voir Plus <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="blog-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-1.png')}}" alt="image">
    </div>
    <div class="blog-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-2.png')}}" alt="image">
    </div>
</div>
@endif
<!-- End Blog Area -->
<!-- Start Overview Area -->
<div class="overview-area pb-100">
    <div class="container">
        <div class="overview-box">
            <div class="overview-content">
                <h3>Faisons quelque chose d'incroyable ensemble</h3>

                <div class="overview-btn">
                    <a href="{{route('contact')}}" class="overview-btn-one">Commencer</a>
                    <img src="{{asset('frontend/assets/images/overview/bar.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="overview-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-1.png')}}" alt="image">
    </div>
    <div class="overview-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-2.png')}}" alt="image">
    </div>
    <div class="overview-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-3.png')}}" alt="image">
    </div>
    <div class="overview-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-4.png')}}" alt="image">
    </div>
    <div class="overview-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-5.png')}}" alt="image">
    </div>
</div>
<!-- End Overview Area -->
@endsection

@section('scripts')
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
    
    var textAnim = document.querySelector('h1');

    var typewriter = new Typewriter(textAnim,{
        // loop: true,
        deleteSpeed: 20
    });

    typewriter
    .changeDelay(20)
    .typeString('Partenaire pour la création:')
    .pauseFor(300)
    .pause(1000)
    .typeString('<span style="color: #27ae60;"> Site Web</span> !')
    .pauseFor(1000)
    .deleteChars(10)
    .typeString('<span style="color: midnightblue;"> Application web</span> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: midnightblue;"> mobile</span>!')
    .pauseFor(1000)
    .deleteChars(21)
    .typeString('<span style="color: #ea30ff;"> Logiciel</span> !')
    .pauseFor(1000)
    .deleteChars(10)
    .typeString('<span style="color: #ff6910;"> Application métier</span> !')
    .pauseFor(1000)
    .deleteChars(20)
    .typeString('<span style="color: #ea30ff;"> Base de Données</span> !')
    .pauseFor(1000)
    // .deleteChars(17)
    .start()
</script>

@endsection
