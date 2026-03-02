@extends('frontend.layouts.master')

@section('title')
    <title>Contactez-Nous - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contactez-Nous</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
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
</div>
<!-- End Page Banner Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="contact-form">
            <div class="section-title">
                <h3>Restez Connect&eacute; Avec Nous</h3>
                <p>Si vous souhaitez y contribuer ou avoir de plus amples informations, n'h&eacute;sitez pas &agrave; nous contacter.</p>
            </div>
            <form action="{{route('submit.contact')}}" method="POST">
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

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="telephone" value="{{old('telephone')}}" id="telephone" required class="form-control" placeholder="T&eacute;l&eacute;phone *">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="sujet" value="{{old('sujet')}}" id="sujet" class="form-control" required placeholder="Sujet *">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required placeholder="Votre message...">{{old('message')}}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Envoyer le Message <i class="ri-send-plane-line"></i></button>
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
                    <h3>Nos Coordonn&eacute;es</h3>
                    <p>{{get_setting('footer')}}</p>

                    <ul class="address-info">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{get_setting('telephone1')}}">{{get_setting('telephone1')}}</a>
                        </li>
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{get_setting('telephone2')}}">{{get_setting('telephone2')}}</a>
                        </li>
                        <li>
                            <i class="ri-global-line"></i>
                            <a href="mailto:{{get_setting('email_1')}}">{{get_setting('email_1')}}</a>
                        </li>
                        <li>
                            <i class="ri-map-pin-line"></i>
                            {{get_setting('adresse')}}, {{get_setting('lot')}}, {{get_setting('appartement')}}
                        </li>
                    </ul>

                    <ul class="address-social">
                        <li>
                            <a href="{{get_setting('facebook_url')}}" target="_blank">
                                <i class="ri-facebook-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{get_setting('twitter_url')}}" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{get_setting('linkedin_url')}}" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{get_setting('instagram_url')}}" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{get_setting('youtube_url')}}" target="_blank">
                                <i class="ri-youtube-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div id="map">
                    {!! html_entity_decode(get_setting('map_url')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info Area -->

@endsection
