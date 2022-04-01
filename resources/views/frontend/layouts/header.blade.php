        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset(get_setting('favicon'))}}" class="black-logo" alt="logo">
                            <img src="{{asset(get_setting('favicon'))}}" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset(get_setting('favicon'))}}" class="black-logo" alt="logo">
                            <img src="{{asset(get_setting('favicon'))}}" class="white-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('acceuil')}}" class="nav-link active">
                                        Acceuil
                                        <i class="ri-add-line"></i>
                                    </a>
{{-- 
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Home Demo - 1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Demo - 2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-4.html" class="nav-link">Home Demo - 4</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-5.html" class="nav-link">Home Demo - 5</a>
                                        </li>
                                    </ul> --}}
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('apropos')}}" class="nav-link">
                                        A Propos
                                        <i class="ri-add-line"></i>
                                    </a>

                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about-1.html" class="nav-link">About One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="about-2.html" class="nav-link">About Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="features-1.html" class="nav-link">Features One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="features-2.html" class="nav-link">Features Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Testimonials</a>
                                        </li>
                                    </ul> --}}
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link">
                                        Services
                                        <i class="ri-add-line"></i>
                                    </a>

                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services-1.html" class="nav-link">Services One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="services-2.html" class="nav-link">Services Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="services-3.html" class="nav-link">Services Three</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="services-details.html" class="nav-link">Services Details</a>
                                        </li>
                                    </ul> --}}
                                </li>

                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="ri-add-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team-member.html" class="nav-link">Team Member</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">Gallery</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Events
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="events.html" class="nav-link">Events</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="events-details.html" class="nav-link">Events Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Courses
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="courses-grid.html" class="nav-link">Courses Grid</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="courses-right-sidebar.html" class="nav-link">Courses Right Sidebar</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="courses-details.html" class="nav-link">Courses Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Shop
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="products-grid.html" class="nav-link">Products Grid</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="cart.html" class="nav-link">Cart</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="products-details.html" class="nav-link">Products Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="profile-authentication.html" class="nav-link">Profile Authentication</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="membership-levels.html" class="nav-link">Membership Levels</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="purchase-guide.html" class="nav-link">Purchase Guide</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="nav-item">
                                    <a href="{{route('realisation')}}" class="nav-link">
                                        Réalisations
                                        <i class="ri-add-line"></i>
                                    </a>

                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="case-study-1.html" class="nav-link">Case Study One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="case-study-2.html" class="nav-link">Case Study Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="case-study-details.html" class="nav-link">Case Study Details</a>
                                        </li>
                                    </ul> --}}
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('publication')}}" class="nav-link">
                                        Publication
                                        <i class="ri-add-line"></i>
                                    </a>

                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Blog</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-standard.html" class="nav-link">Blog Standard</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul> --}}
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <i class="search-btn ri-search-line"></i>
                                    <i class="close-btn ri-close-line"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form" action="{{route('search')}}" method="GET">
                                                <input id="search_text" class="search-input form-control" name="query" placeholder="Rechercher..." type="search">

                                                <button class="search-button" type="submit" value="Send">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="#" class="default-btn" data-bs-toggle="modal" data-bs-target="#project-modal">J'ai un Projet! <i class="ri-message-line"></i><span></span></a>
                                </div>

                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <i class="search-btn ri-search-line"></i>
                                    <i class="close-btn ri-close-line"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form" action="{{route('search')}}" method="GET">
                                                <input  type="search" id="search_text" name="query" class="search-input form-control" placeholder="Rechercher...">

                                                <button class="search-button" type="submit" value="Send">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="{{route('contact')}}" class="default-btn">Parlons Maintenant! <i class="ri-message-line"></i><span></span></a>
                                </div>

                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

       
        <!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

            <div class="modal-body">
                <div class="title">
                    <a href="{{route('acceuil')}}">
                        <img src="{{asset(get_setting('favicon'))}}" class="black-logo" alt="logo">
                        <img src="{{asset(get_setting('favicon'))}}" class="white-logo" alt="logo">
                    </a>
                </div>

                <div class="sidebar-content">
                    <h3>A Propos de Nous!</h3>
                    <p>{{get_setting('background_footer')}}</p>

                    <div class="sidebar-btn">
                        <a href="{{route('contact')}}" class="default-btn">Parlons Maintenant! <i class="ri-message-line"></i><span></span></a>
                    </div>
                </div>

                <div class="sidebar-contact-info">
                    <h3>Coordonnées</h3>

                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:+11234567890">{{get_setting('telephone1')}}</a></li>

                        <li><i class="ri-mail-line"></i> <a href="mailto:{{get_setting('email_1')}}"><span class="__cf_email__" data-cfemail="c0a8a5acacaf80b0acafa4eea3afad">{{get_setting('email_1')}}</span></a></li>

                        <li><i class="ri-map-pin-line"></i> {{get_setting('adresse')}}, {{get_setting('lot')}}, <br>{{get_setting('appartement')}}</li>
                    </ul>
                </div>

                <ul class="sidebar-social-list">
                    <li><a href="{{get_setting('facebook_url')}}" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="{{get_setting('twitter_url')}}" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="{{get_setting('linkedin_url')}}" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="{{get_setting('instagram_url')}}" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                    <li><a href="{{get_setting('youtube_url')}}" target="_blank"><i class="ri-youtube-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('_modal')
<!-- End Sidebar Modal -->
