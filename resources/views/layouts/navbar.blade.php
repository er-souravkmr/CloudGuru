<header>
    <!-- .....................Topbar..................... -->

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <span id="detail"><i class='bx bxs-phone-call'
                            style="color: orangered;"></i>&nbsp&nbspCall&nbsp/&nbsp<i class='bx bxl-whatsapp'
                            style="color: greenyellow;">&nbsp</i>WhatsApp :&nbsp+91&nbsp 8700307203 &nbsp&nbsp&nbsp
                        </i>&nbsp|&nbsp&nbsp&nbsp&nbsp<i class='bx bx-envelope' style="color: orangered;"></i>&nbsp
                        training@cloudguru.co.in</span>
                </div>
                <div class="col-md-3">
                    <div class="btn btn-outline-light f-r" id="enquire">Enquire Now </div>
                    <div class="btn btn-outline-light f-r" id="contact">Contact Us </div>


                </div>
            </div>
        </div>

    </div>

    <!-- ...................Desktop-Navbar....................... -->

    <nav id="sourav" class="navbar navbar-expand-lg bg-white ">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('public/assets/img/logo.jpg') }}"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-auto-close="outside" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu">

                            @foreach (getCoursesWithSubCourses() as $item)
                                <li class=" {{$item->subcourses->isNotEmpty() ?  "dropend" : "" }}">
                                    <a class="{{$item->subcourses->isNotEmpty() ?  "dropdown-item dropdown-toggle" : "dropdown-item" }}" id="navbarDropdown{{ $item->id }}"
                                        data-bs-toggle="dropdown" href="#">{{ $item->courses }}</a>
                                    @if ($item->subcourses->isNotEmpty())
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $item->id }}">
                                            @foreach ($item->subcourses as $subcourse)
                                                @if ($subcourse)
                                                    <!-- Check if $subcourse is not null -->
                                                    <li><a class="dropdown-item" href="#">{{ $subcourse->course }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Batches
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cloud Technologies</a></li>
                            <li><a class="dropdown-item" href="#">Cyber Security</a></li>
                            <li><a class="dropdown-item" href="#">Network & Firewall </a></li>
                            <li><a class="dropdown-item" href="#">Artificial Intelligence(AI)</a></li>
                            <li><a class="dropdown-item" href="#">Machine Learning (ML)</a></li>
                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                            <li><a class="dropdown-item" href="#">Website Devlopment</a></li>
                            <li><a class="dropdown-item" href="#">Microsoft Technologies</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trainers') }}">Trainers</a>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('certification') }}">
                            Certifications
                        </a>

                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="#">
                            Placement
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallerys') }}">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Payment</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

</header>
