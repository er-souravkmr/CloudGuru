<div>

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">

            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name font-weight-bolder">{{ Auth::guard('admin')->user()->name }}</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="{{ asset('admin-assets/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                        {{-- BD MANAGER --}}
                        @if (Auth::guard('admin')->user()->is_admin == 0 || Auth::guard('admin')->user()->is_admin == 1)
                            <a class="dropdown-item" href="#"><i class="mr-50"
                                    data-feather="phone"></i> Contact</a>
                        @endif

                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="mr-50" data-feather="power"></i>
                                Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><span
                            class="brand-logo">
                        </span>
                        <h2 class="brand-text">Dash Board</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}  nav-item"><a
                        class="d-flex align-items-center" href="{{ route('dashboard') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="13" r="2" />
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                            <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                        </svg>
                        </i><span class="menu-title text-truncate">Dashboard</span></a>
                </li>

                @if (Auth::guard('admin')->user())
                    <li class="{{ Request::is('admin/contact*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-center"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="6" x2="20" y2="6" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                                <line x1="6" y1="18" x2="18" y2="18" />
                            </svg>

                            <span class="menu-title text-truncate">Courses</span></a>
                    </li>

                    <li class="{{ Request::is('admin/contact*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{route('enquire')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-columns"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="6" x2="9.5" y2="6" />
                                <line x1="4" y1="10" x2="9.5" y2="10" />
                                <line x1="4" y1="14" x2="9.5" y2="14" />
                                <line x1="4" y1="18" x2="9.5" y2="18" />
                                <line x1="14.5" y1="6" x2="20" y2="6" />
                                <line x1="14.5" y1="10" x2="20" y2="10" />
                                <line x1="14.5" y1="14" x2="20" y2="14" />
                                <line x1="14.5" y1="18" x2="20" y2="18" />
                            </svg>

                            <span class="menu-title text-truncate">Enquire</span></a>
                    </li>
{{-- 
                    <li class="{{ Request::is('admin/contact*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="15" y1="8" x2="15.01" y2="8" />
                                <rect x="4" y="4" width="16" height="16" rx="3" />
                                <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                            </svg>

                            <span class="menu-title text-truncate">Gallery</span></a>
                    </li> --}}

                    {{-- <li class="{{ Request::is('admin/contact*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{ route('blogs') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-device-desktop-analytics" width="44"
                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="4" width="18" height="12" rx="1" />
                                <path d="M7 20h10" />
                                <path d="M9 16v4" />
                                <path d="M15 16v4" />
                                <path d="M9 12v-4" />
                                <path d="M12 12v-1" />
                                <path d="M15 12v-2" />
                                <path d="M12 12v-1" />
                            </svg>
                            <span class="menu-title text-truncate">Blogs</span></a>
                    </li> --}}
                @endif
            </ul>
        </div>
    </div>


</div>
