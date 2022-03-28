<div class="container-fluid">
    <nav class="navbar main-top-navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>

            <form class="search-bar d-flex">
                <i class="ri-search-line"></i>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>

            <div class="option-item for-mobile-devices d-block d-lg-none">
                <i class="search-btn ri-search-line"></i>
                <i class="close-btn ri-close-line"></i>
                
                <div class="search-overlay search-popup">
                    <div class='search-box'>
                        <form class="search-form">
                            <input class="search-input" name="search" placeholder="Search" type="text">

                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link ri-fullscreen-btn" id="fullscreen-button">
                        <i class="ri-fullscreen-line"></i>
                    </a>
                </li>

                <li class="nav-item dropdown apps-box">
                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-function-line"></i>
                    </button>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                            <span class="title d-inline-block">Web Apps</span>
                            {{-- <span class="edit-btn d-inline-block">Edit</span> --}}
                        </div>

                        <div class="dropdown-body" data-simplebar>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="https://myaccount.google.com/" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-account.png')}}" alt="image">
                                    <span class="d-block mb-0">Account</span>
                                </a>

                                <a href="https://www.google.com/" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-google.png')}}" alt="image">
                                    <span class="d-block mb-0">Search</span>
                                </a>

                                <a href="https://www.google.com/maps" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-map.png')}}" alt="image">
                                    <span class="d-block mb-0">Maps</span>
                                </a>

                                <a href="https://www.youtube.com/" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-youtube.png')}}" alt="image">
                                    <span class="d-block mb-0">YouTube</span>
                                </a>

                                <a href="https://mail.google.com/mail/u/0/#inbox" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-gmail.png')}}" alt="image">
                                    <span class="d-block mb-0">Gmail</span>
                                </a>

                                <a href="https://drive.google.com/" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-drive.png')}}" alt="image">
                                    <span class="d-block mb-0">Drive</span>
                                </a>

                                <a href="https://contacts.google.com/" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-contacts.png')}}" alt="image">
                                    <span class="d-block mb-0">Contact</span>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <img src="{{asset('backend/assets/images/apps/icon-github.png')}}" alt="image">
                                    <span class="d-block mb-0">Github</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-footer">
                            {{-- <a href="#" class="dropdown-item">View All</a> --}}
                        </div>
                    </div>
                </li>

                <li class="nav-item notification-box messenger-list dropdown">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="notification-btn">
                            <i class="ri-messenger-line"></i>
                            <span class="badge">5</span>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                            <span class="title d-inline-block">5 New Message</span>
                            <span class="mark-all-btn d-inline-block">Clear All</span>
                        </div>

                        <div class="dropdown-body" data-simplebar>
                            <a href="chat.html" class="dropdown-item d-flex">
                                <div class="icon">
                                    <img src="{{asset('backend/assets/images/avatar.png')}}" alt="Images">
                                </div>

                                <div class="content">
                                    <span class="d-block">Alex Dew</span>
                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                    <p class="sub-text mb-0">2 sec ago</p>
                                </div>
                            </a>

                            <a href="chat.html" class="dropdown-item d-flex">
                                <div class="icon">
                                    <img src="{{asset('backend/assets/images/avatar-2.png')}}" alt="Images">
                                </div>

                                <div class="content">
                                    <span class="d-block">Anne Kew</span>
                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                    <p class="sub-text mb-0">5 sec ago</p>
                                </div>
                            </a>

                            <a href="chat.html" class="dropdown-item d-flex">
                                <div class="icon">
                                    <img src="{{asset('backend/assets/images/avatar-2.png')}}" alt="Images">
                                </div>

                                <div class="content">
                                    <span class="d-block">Huhon Smith</span>
                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                    <p class="sub-text mb-0">3 min ago</p>
                                </div>
                            </a>

                            <a href="chat.html" class="dropdown-item d-flex">
                                <div class="icon">
                                    <img src="{{asset('backend/assets/images/avatar-3.png')}}" alt="Images">
                                </div>

                                <div class="content">
                                    <span class="d-block">Yelax Spin</span>
                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                    <p class="sub-text mb-0">7 min ago</p>
                                </div>
                            </a>

                            <a href="chat.html" class="dropdown-item d-flex">
                                <div class="icon">
                                    <img src="{{asset('backend/assets/images/avatar-4.png')}}" alt="Images">
                                </div>

                                <div class="content">
                                    <span class="d-block">Steven</span>
                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                    <p class="sub-text mb-0">1 sec ago</p>
                                </div>
                            </a>
                        </div>

                        <div class="dropdown-footer">
                            <a href="chat.html" class="dropdown-item">View All</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item notification-box dropdown">
                    <div class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="notification-btn">
                            <i class="ri-notification-2-line"></i>
                            <span class="badge">6</span>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                            <span class="title d-inline-block">6 New Notifications</span>
                            <span class="mark-all-btn d-inline-block">Mark all as read</span>
                        </div>

                        <div class="dropdown-body" data-simplebar>
                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-message-rounded-dots'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Just sent a new message!</span>
                                    <p class="sub-text mb-0">2 sec ago</p>
                                </div>
                            </a>

                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-user'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">New customer registered</span>
                                    <p class="sub-text mb-0">5 sec ago</p>
                                </div>
                            </a>

                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-layer'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Apps are ready for update</span>
                                    <p class="sub-text mb-0">3 min ago</p>
                                </div>
                            </a>

                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-hourglass'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Your item is shipped</span>
                                    <p class="sub-text mb-0">7 min ago</p>
                                </div>
                            </a>

                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-comment-dots'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Steven commented on your post</span>
                                    <p class="sub-text mb-0">1 sec ago</p>
                                </div>
                            </a>
                        </div>

                        <div class="dropdown-footer">
                            <a href="inbox.html" class="dropdown-item">View All</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown profile-nav-item">
                    <a class="nav-link dropdown-toggle avatar" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset(Auth::user()->photo)}}" alt="Images" style="border-radius: 20%; width:30%;height:80%;">
                        <h3>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h3>
                        <span>Super Admin</span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3" style="text-align: center;">
                                <img src="{{asset(Auth::user()->photo)}}" class="rounded-circle" alt="image" style="width:50%;">
                            </div>

                            <div class="info text-center">
                                <span class="name">{{Auth::user()->prenom}} {{Auth::user()->nom}}</span>
                                <p class="mb-3 email">
                                    <a href="mailto:{{Auth::user()->email}}"><span class="__cf_email__" data-cfemail="2c44494040436c4941494040455b4d585f4342024f4341">{{Auth::user()->email}}</span></a>
                                </p>
                            </div>
                        </div>

                        <div class="dropdown-body">
                            <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="profile.html" class="nav-link">
                                        <i class="ri-user-line"></i> 
                                        <span>Profil</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="inbox.html" class="nav-link">
                                        <i class="ri-mail-send-line"></i> 
                                        <span>My Inbox</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="edit-profile.html" class="nav-link">
                                        <i class="ri-edit-box-line"></i> 
                                        <span>Modifier Profil</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('parametre')}}" class="nav-link">
                                        <i class="ri-settings-5-line"></i> 
                                        <span>Parametre</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-footer">
                            <ul class="profile-nav">
                                <li class="nav-item">
                                    <a href="{{route('logout')}}" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="ri-login-circle-line"></i> 
                                        <span>Déconnexion</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!--
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ri-settings-5-line"></i>
                    </a>
                </li>
                -->
            </ul>
        </div>
    </nav>
</div>