        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{route('accueil')}}">
                                <img src="{{asset(get_setting('logo'))}}" class="black-logo" alt="AmeenTech" style="max-height: 40px;">
                                <img src="{{asset(get_setting('logo'))}}" class="white-logo" alt="AmeenTech" style="max-height: 40px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('accueil')}}">
                            <img src="{{asset(get_setting('logo'))}}" class="black-logo" alt="AmeenTech">
                            <img src="{{asset(get_setting('logo'))}}" class="white-logo" alt="AmeenTech">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{route('accueil')}}" class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}">
                                        Accueil
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('apropos')}}" class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}">
                                        A Propos
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                                        Services
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('realisation')}}" class="nav-link {{ request()->routeIs('realisation') ? 'active' : '' }}">
                                        R&eacute;alisations
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('publication')}}" class="nav-link {{ request()->routeIs('publication') ? 'active' : '' }}">
                                        Publications
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        Contact
                                    </a>
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
                                    <a href="#" class="default-btn" data-bs-toggle="modal" data-bs-target="#project-modal">J'ai un Projet! <i class="ri-message-line"></i></a>
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
                                                <input type="search" id="search_text" name="query" class="search-input form-control" placeholder="Rechercher...">
                                                <button class="search-button" type="submit" value="Send">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="#" class="default-btn" data-bs-toggle="modal" data-bs-target="#project-modal">J'ai un Projet! <i class="ri-message-line"></i></a>
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
                            <a href="{{route('accueil')}}">
                                <img src="{{asset(get_setting('logo'))}}" class="black-logo" alt="AmeenTech">
                                <img src="{{asset(get_setting('logo'))}}" class="white-logo" alt="AmeenTech">
                            </a>
                        </div>

                        <div class="sidebar-content">
                            <h3>A Propos de Nous</h3>
                            <p>{{get_setting('background_footer')}}</p>

                            <div class="sidebar-btn">
                                <a href="{{route('contact')}}" class="default-btn">Parlons Maintenant <i class="ri-message-line"></i></a>
                            </div>
                        </div>

                        <div class="sidebar-contact-info">
                            <h3>Coordonn&eacute;es</h3>

                            <ul class="info-list">
                                <li><i class="ri-phone-fill"></i> <a href="tel:{{get_setting('telephone1')}}">{{get_setting('telephone1')}}</a></li>
                                <li><i class="ri-mail-line"></i> <a href="mailto:{{get_setting('email_1')}}">{{get_setting('email_1')}}</a></li>
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
