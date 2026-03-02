@extends('frontend.layouts.master')

@section('title')
    <title>A Propos - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>A Propos</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
                </li>
                <li>A Propos</li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-1.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-2.png')}}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Features Area -->
@if (count($abouts)>0)
<div class="features-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Ce Qui Nous D&eacute;finit</h2>
            <p>D&eacute;couvrez les valeurs et les comp&eacute;tences qui font d'AmeenTech votre partenaire digital id&eacute;al.</p>
        </div>

        <div class="row justify-content-center">
            @foreach ($abouts as $about)
            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <a href="#"><img src="{{asset($about->photo)}}" alt="image"></a>
                    <h3>
                        <a href="#">{{$about->title}}</a>
                    </h3>
                    <p>{{$about->description}}</p>

                    <div class="features-btn">
                        <a href="#" class="default-btn">Lire Plus <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- End Features Area -->

<!-- Start About Area -->
@include('frontend.layouts._experience')
<!-- End About Area -->

<!-- Start Fun Facts Area -->
<div class="fun-facts-area ptb-100">
    <div class="container">
        <div class="fun-facts-box">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="ri-user-line"></i>
                        </div>
                        @php
                            $reas = App\Models\Realisation::count();
                            $rea_act = App\Models\Realisation::where('status','active')->count();
                            $rea_win = App\Models\Realisation::where('condition','future')->count();
                        @endphp
                        <h3>
                            <span class="odometer" data-count="{{$reas}}">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Total R&eacute;alisations</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="ri-briefcase-line"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="{{$rea_act}}">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>R&eacute;alisations r&eacute;solues</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="ri-trophy-line"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="{{$rea_win}}">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>R&eacute;compenses</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="ri-flag-line"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="2">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Pays</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Facts Area -->

<!-- Start Support Area -->
@include('frontend.layouts._support')
<!-- End Support Area -->

<!-- Start Questions Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="contact-form">
            <div class="section-title">
                <h3>Posez vos Questions</h3>
                <p>Si vous avez des questions sur le D&eacute;veloppement, n'h&eacute;sitez pas &agrave; les poser.</p>
            </div>
            <form action="{{route('submit.question')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="full_name" required value="{{old('full_name')}}" id="full_name" class="form-control" placeholder="Nom Complet *">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" required value="{{old('email')}}" id="email" class="form-control" placeholder="Email *">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="question" class="form-control" id="message" cols="30" rows="5" required placeholder="Votre Question ?">{{old('question')}}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Envoyer <i class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Questions Area -->

<!-- Start Clients Area -->
@include('frontend.layouts._client')
<!-- End Clients Area -->

<!-- Start FAQ Area -->
@if (count($questions)>0)
<div class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Questions Fr&eacute;quemment Pos&eacute;es</h2>
            <p>Voici une liste de r&eacute;ponses aux questions les plus pos&eacute;es.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="faq-image">
                    <img src="{{asset('frontend/assets/images/faq/faq-1.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="faq-accordion">
                    @foreach ($questions as $question)
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <i class="ri-add-line"></i>
                                {{$question->question}}
                            </div>

                            <div class="accordion-content">
                                <p>{{$question->response}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End FAQ Area -->

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
