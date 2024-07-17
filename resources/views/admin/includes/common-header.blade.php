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
                                src="{{ asset('public/admin-assets/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
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
                    <li class="{{ Request::is('admin/course*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{ route('course') }}">

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
                    <li class="{{ Request::is('admin/subcourse*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{ route('subcourse') }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-center"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="6" x2="20" y2="6" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                                <line x1="6" y1="18" x2="18" y2="18" />
                            </svg>

                            <span class="menu-title text-truncate">Sub Courses</span></a>
                    </li>

                    <li class="{{ Request::is('admin/enquire*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{route('enquire')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#625F6E" viewBox="0 0 512 512"><path d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"/></svg>

                            <span class="menu-title text-truncate">Enquire</span></a>
                    </li>

                    <li class="{{ Request::is('admin/trainer*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{route('trainer')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#625F6E" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <span class="menu-title text-truncate">Trainer</span></a>
                    </li>

                    <li class="{{ Request::is('admin/certificate*') ? 'active' : '' }} nav-item"><a
                            class="d-flex align-items-center" href="{{ route('certificate') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#625F6E" viewBox="0 0 512 512"><path d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.4-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"/></svg>
                            <span class="menu-title text-truncate">Certificates</span></a>
                    </li>

                    
                    <li class="{{ Request::is('admin/gallery*') ? 'active' : '' }} nav-item"><a
                        class="d-flex align-items-center" href="{{route('gallery')}}">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="#625F6E" viewBox="0 0 512 512"><path d="M220.6 121.2L271.1 96 448 96l0 96-114.8 0c-21.9-15.1-48.5-24-77.2-24s-55.2 8.9-77.2 24L64 192l0-64 128 0c9.9 0 19.7-2.3 28.6-6.8zM0 128L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L271.1 32c-9.9 0-19.7 2.3-28.6 6.8L192 64l-32 0 0-16c0-8.8-7.2-16-16-16L80 32c-8.8 0-16 7.2-16 16l0 16C28.7 64 0 92.7 0 128zM168 304a88 88 0 1 1 176 0 88 88 0 1 1 -176 0z"/></svg>
                        <span class="menu-title text-truncate">Gallery</span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>


</div>
