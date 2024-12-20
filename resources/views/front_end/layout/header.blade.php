  <!-- header section -->
  <header class="header">
        <div class="container">
            <div class="header_wrappr">
                <div class="headere_logo">
                    <a href="{{ route('home') }}" class="header_logoLnk"> </a>
                </div>
                <div class="header_navbar">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="{{ route('home') }}" class="header_link {{ route::is('home') ? 'active' :'' }}  ">Homepage</a>
                        </li>
                        <li class="header_item">
                            <a href="{{ route('play-guide') }}" class="header_link {{ route::is('play-guide') ? 'active' :'' }}">Playing Guide</a>
                        </li>
                        <li class="header_item">
                            <a href="{{ route('about.us') }}" class="header_link {{ route::is('about.us') ? 'active' :'' }}">About us</a>
                        </li>
                        <li class="header_item">
                            <a href="{{ route('contact.us') }}" class="header_link {{ route::is('contact.us') ? 'active' :'' }}">Contact-us </a>
                        </li>
                        <li class="close_menu">
                            <div class="close_menuIcon"></div>
                        </li>
                    </ul>
                    @if(!Auth::check())
                    <div class="header_right">
                        <a href="{{ route('login') }}" class="btn header_login">Login</a>
                        <a href="{{ route('register') }}" class="btn header_singUp">SingUp</a>
                    </div>
                    @endif
                    @if(Auth::check())
                     <div class="profile">
                        <div class="avatar">
                            <div class="avatar-content">
                                <a href="#">
                                    <div class="profile-image">
                                      <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/images/user-img.png') }}" alt="dp">
                                    </div>
                                    <span>{{ ucfirst(Auth::user()->first_name.' '.Auth::user()->last_name) }}</span>
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                                    </path>
                                </svg>
                            </div>
                            <div class="dropdown">
                                <ul>
                                    <li>
                                        <a href="{{route('profile.profile')}}">
                                            <div class="profile-dropdown-options profile-image-dropdown"></div>
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile.matches')}}">
                                            <div class="profile-dropdown-options profile-image-stadium"></div>
                                          My Matches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}">
                                            <div class="profile-dropdown-options profile-image-logout"></div>
                                           Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="humburger">
                    <div class="humburger_icon"></div>
                </div>
            </div>
        </div>
    </header>
