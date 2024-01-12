<aside class="menu-sidebar">
    <div class="bd-navbar-toggle">
        <button class="navbar-toggler p-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#bdSidebar" aria-controls="bdSidebar" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi"
                 fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>

            <span class="d-none fs-6 pe-1">Browse</span>
        </button>
    </div>

    <div class="siderbarmenu-brand">
        <a href="{{ route('home') }}" class="navbar-brand sidebar-logo">
            <p class="mb-0">Gomeal<span class="text-yellow-1">.</span></p>
<<<<<<< Updated upstream
            <div class="text-start" style="padding-left: 140px;padding-right: 96px;margin-top: -15px;">
                <img src="{{ Auth::user()->restaurantDetails->restaurant_logo }}" style="max-width: 100%;">
=======
<!-- {{--            <img src="{{ Auth::user()->restaurantDetails->restaurant_logo }}">--}} -->
            <div class="text-start" style="padding-left: 140px;padding-right: 90px;">
                <img src="{{ asset('images/logo_dummy.png') }}" style="max-width: 100%;">
>>>>>>> Stashed changes
            </div>
        </a>
    </div>

    <div class="offcanvas-lg offcanvas-start position-relative" tabindex="-1" id="bdSidebar"
         aria-labelledby="bdSidebarOffcanvasLabel">
        <div class="offcanvas-body py-4">
            <nav class="">
                <div
                    class="menu-sidebar-content d-flex flex-column align-items-center align-items-sm-start">
                    <div class="navbar-collapse menunavbar-collapse w-100 d-block"
                         id="navbarSupportedContent">
                        <ul class="nav nav-pills side-bar-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ activeMenu('menu') }} align-middle">
                                    <img class="svg" src="{{ asset('images/menu-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">Menu</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('orders') }}" class="nav-link {{ activeMenu('orders') }} align-middle">
                                    <img class="svg" src="{{ asset('images/order-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">Food Order</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('settings') }}" class="nav-link {{ activeMenu('settings') }} align-middle">
                                    <img class="svg" src="{{ asset('images/settings-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('payments') }}" class="nav-link {{ activeMenu('payments') }} align-middle">
                                    <img class="svg" src="{{ asset('images/finance-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">My Finance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('coupons.index') }}" class="nav-link {{ activeMenu('coupons') }} align-middle">
                                    <img class="svg" src="{{ asset('images/coupons-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">Coupons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('chat') }}" class="nav-link {{ activeMenu('chat') }} align-middle">
                                    <img class="svg" src="{{ asset('images/user-chat-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">User Chat</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="offcanvas-footer">
            <div class="sidebar-bottom">
                <div class="dropdown dropdown-center">
                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(App::isLocale('en'))
                      <img src="{{ asset('images/english-flag.svg') }}" class="img-fluid" alt="country-flag" width="28" height="28" />
                      <span class="">English</span>
                    @else
                      <img src="{{ asset('images/dutch-flag.svg') }}" class="img-fluid" alt="country-flag" width="28" height="28" />
                      <span class="">Dutch</span>
                    @endif
                  </button>
                  <ul class="multi-language-div dropdown-menu">
                      <li>
                        <a class="dropdown-item {{ (App::isLocale('en')) ? 'active': '' }}" href="{{ route('app.setLocal', 'en') }}">
                          <img src="{{ asset('images/english-flag.svg') }}" class="img-fluid" width="28" height="28" alt="country-flag" />English
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item {{ (App::isLocale('nl')) ? 'active': '' }}" href="{{ route('app.setLocal', 'nl') }}">
                          <img src="{{ asset('images/dutch-flag.svg') }}" class="img-fluid" width="28" height="28" alt="country-flag" />Dutch
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
