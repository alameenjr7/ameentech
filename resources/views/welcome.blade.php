@extends('frontend.layouts.master')

@section('title')
    <title>{{get_setting('title')}} - Cr&eacute;ation site Web, Applications, Logiciels</title>
@endsection

@section('content')

<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <div class="tag wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
                        <img src="{{asset(get_setting('logo'))}}" alt="image">
                        AmeenTech - Entreprise Informatique
                    </div>

                    <h6 style="margin-top: 25px;">Votre</h6>
                    <h1 class="wow fadeInLeft" style="margin-top: 4px;" data-wow-delay="00ms" data-wow-duration="1000ms"> </h1>
                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Assurer le meilleur retour sur investissement pour votre entreprise avec AmeenTECH. Nous transformons vos id&eacute;es en solutions digitales performantes.</p>

                    <div class="banner-btn">
                        <a href="{{route('apropos')}}" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">D&eacute;couvrir Plus <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
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
</div>
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
</div>
@endif
<!-- End Partner Area -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB5T3ZK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Start Features Area -->
@if (count($categories)>0)
<div class="features-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Nos Domaines d'Expertise</h2>
            <p>D&eacute;couvrez nos diff&eacute;rents domaines de comp&eacute;tences pour accompagner vos projets digitaux.</p>
        </div>

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
                        <a href="#" class="default-btn">Voir Plus <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
            <h2>Services que nous Offrons</h2>
            <p>Des solutions technologiques sur mesure pour propulser votre entreprise vers le succ&egrave;s digital.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($services as $servie)
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon">
                        <i class="{{$service->icon}}"></i>
                    </div>
                    <h3>
                        <a href="#">{{$service->title}}</a>
                    </h3>
                    <p>{!! html_entity_decode($service->description) !!}</p>
                    <a href="#" class="services-btn">Voir Plus <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            @endforeach
        </div>
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
            <h2>Nos R&eacute;alisations R&eacute;centes</h2>
            <p>D&eacute;couvrez nos projets r&eacute;cents et les solutions d&eacute;velopp&eacute;es pour nos clients.</p>
        </div>

        <div class="row">
            @foreach ($realisations as $realisation)
            <div class="col-lg-6">
                <div class="single-cases">
                    <div class="cases-image">
                        <a href="#">
                            <img src="{{asset($realisation->photo)}}" alt="image">
                        </a>
                    </div>

                    <div class="cases-content">
                        @if ($realisation->condition == 'terminer')
                            <div class="tag-1">Termin&eacute;</div>
                        @else
                            <div class="tag-1">En Cours</div>
                        @endif
                        @php
                            $lang = App\Models\Language::where('id',$realisation->language_id)->get()->first();
                        @endphp
                        <div class="tag-2">{{$lang->title}}</div>

                        <h3>
                            <a href="#">{{$realisation->title}}</a>
                        </h3>
                        <p>{!! html_entity_decode($realisation->contenu) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="cases-view-all-btn">
                <a href="{{route('realisation')}}" class="default-btn">Voir toutes les R&eacute;alisations <i class="ri-briefcase-line"></i></a>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Cases Area -->

<!-- Start Clients Area -->
@include('frontend.layouts._client')
<!-- End Clients Area -->

<!-- Start Blog Area -->
@if (count($bestPub)>0)
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Nos Derni&egrave;res Publications</h2>
            <p>Restez inform&eacute; avec nos derniers articles, tutoriels et actualit&eacute;s tech.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($bestPub as $pub)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('publications.detail',$pub->slug)}}"><img src="{{asset($pub->photo)}}" alt="image"></a>
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
                            <a href="{{route('publications.detail',$pub->slug)}}">{{$pub->title}}</a>
                        </h3>
                        <a href="{{route('publications.detail',$pub->slug)}}" class="blog-btn">Lire l'article <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
                    <a href="{{route('contact')}}" class="overview-btn-one">Commencer un Projet</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Overview Area -->
@endsection

@section('scripts')
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
    var textAnim = document.querySelector('h1');
    var typewriter = new Typewriter(textAnim,{
        deleteSpeed: 20
    });

    typewriter
    .changeDelay(20)
    .typeString('Partenaire pour la cr\u00e9ation:')
    .pauseFor(300)
    .pause(1000)
    .typeString('<span style="color: #10b981;"> Site Web</span> !')
    .pauseFor(1000)
    .deleteChars(10)
    .typeString('<span style="color: #3b82f6;"> Application web</span> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: #06b6d4;"> mobile</span>!')
    .pauseFor(1000)
    .deleteChars(21)
    .typeString('<span style="color: #8b5cf6;"> Logiciel</span> !')
    .pauseFor(1000)
    .deleteChars(10)
    .typeString('<span style="color: #a855f7;"> Base de Donn\u00e9es</span> !')
    .pauseFor(1000)
    .deleteChars(17)
    .typeString('<span style="color: #ef4444;"> Logo</span> !')
    .pauseFor(1000)
    .deleteChars(6)
    .typeString('<span style="color: #f59e0b;"> Application m\u00e9tier</span> !')
    .pauseFor(1000)
    .start()
</script>
@endsection
