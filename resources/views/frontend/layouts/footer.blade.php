
<!-- Start Footer Area -->
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="{{route('acceuil')}}">
                            <img src="{{asset(get_setting('logo2'))}}" class="black-logo" alt="logo">
                            <img src="{{asset(get_setting('logo2'))}}" class="white-logo" alt="logo">
                        </a>
                    </div>
                    <p>{{get_setting('footer')}}</p>

                    <ul class="widget-info">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{get_setting('telephone1')}}">{{get_setting('telephone1')}}</a>
                        </li>

                        <li>
                            <i class="ri-global-line"></i>
                            <a href="mailto:{{get_setting('email_1')}}"><span class="__cf_email__" data-cfemail="cda5a8a1a1a2e3a0a88dbda1a2a9e3aea2a0">{{get_setting('email_1')}}</span></a>
                        </li>

                        <li>
                            <i class="ri-map-pin-line"></i>
                            {{get_setting('adresse')}}, {{get_setting('lot')}}, {{get_setting('appartement')}}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-3">
                <div class="single-footer-widget">
                    <h3>Lien Rapide</h3>

                    <ul class="footer-links-list">
                        <li><a href="{{route('acceuil')}}">Acceuil</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li><a href="{{route('contact')}}">Contacts</a></li>
                        <li><a href="{{route('publication')}}">Publications</a></li>
                        <li><a href="{{route('realisation')}}">Réalisations</a></li>
                        <li><a href="{{route('apropos')}}">A Propos</a></li>
                        {{-- <li><a href="privacy-policy.html">Privacy Policy</a></li> --}}
                    </ul>
                </div>
            </div>

            @php
                $lastPublication = App\Models\Publication::where(['status'=>'active','conditions'=>'publier'])
                ->orderBy('id','DESC')
                ->limit(2)
                ->get();
            @endphp
            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Posts Récents</h3>
                    @if (count($lastPublication)>0)                   
                        <aside class="widget-area" style="width: 80%;">
                            <div class="widget widget_plod_posts_thumb" >
                            @foreach ($lastPublication as $post)
                                <article class="item">
                                    <a href="{{route('publication.detail',$post->slug)}}" class="thumb">
                                        <span class="fullimage cover" role="img" style="width: 60%;">
                                            <img src="{{asset($post->photo)}}" alt="">
                                        </span>
                                    </a>

                                    <div class="info">
                                        <h5 class="title usmall">
                                            <a href="{{route('publications.detail',$post->slug)}}">{{$post->title}}</a>
                                        </h5>

                                        <span><i class="ri-time-line"></i> {{$post->getCreatedAt()}}</span>
                                    </div>
                                </article>
                            @endforeach
                            </div>
                        </aside>
                    @else
                        <p class="text-left">Pas de Pubs</p>
                    @endif
                </div>
            </div>

            {{-- <div class="col-lg-2 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Services</h3>

                    <ul class="footer-links-list">
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="services-details.html">Digital Marketing</a></li>
                        <li><a href="purchase-guide.html">Purchase Guide</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="services-details.html">Cloud Computing</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div> --}}

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>ABONNES-TOI !</h3>

                    <div class="widget-newsletter">
                        <div class="newsletter-content">
                            <p>{{get_setting('text_abonnement')}}</p>
                        </div>

                        <form class="newsletter-form" data-bs-toggle="validator" action="{{route('mail.contact')}}" method="POST">
                            @csrf
                            <input type="email" class="input-newsletter" placeholder="Entrer votre email" name="email" value="{{old('email')}}" required autocomplete="off">

                            <button type="submit"><i class="ri-send-plane-2-line"></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>

                    <ul class="widget-social">
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
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> AmeenTECH. Tous droits réservés par
                    <a href="https://ameenaltech.com/" target="_blank">{{get_setting('title')}}</a>
                </p>
            </div>
        </div>
    </div>

    <div class="footer-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/footer/shape-1.png')}}" alt="image">
    </div>
    <div class="footer-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/footer/shape-2.png')}}" alt="image">
    </div>
    <div class="footer-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/footer/shape-3.png')}}" alt="image">
    </div>
    <div class="footer-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/footer/shape-4.png')}}" alt="image">
    </div>
    <div class="footer-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/footer/shape-5.png')}}" alt="image">
    </div>
</footer>
<!-- End Footer Area -->
