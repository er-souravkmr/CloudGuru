@extends('layouts.main')
@section('main')
    <section class="banner-new mb-5">
        <div class="banner-body">
            <div class="container">
                <div class="banner-text">
                    <div class="upper-head ">
                        <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600"> Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class='bx bxs-home'></i></a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact_us">
        <div class="container my-5">


            <div class="row">

                <!-- Google Map -->
                <div class="col-md-4">

                    <div class="info">
                        <div class="address">
                            <h5 style="font-weight: 600"><i class='bx bx-current-location'></i> Location:</h5>
                            <p>202, Jai Maa CGHS, Sector 65, Faridabad, HR - 121004</p>
                        </div>
                        <div class="email">
                            <h5 style="font-weight: 600"><i class='bx bxs-envelope'></i> Email:</h5>
                            <p><a href="mailto:support@aarohitech.com"> support@aarohitech.com</a></p>
                        </div>
                        <div class="phone">
                            <h5 style="font-weight: 600"> <i class='bx bxs-phone'></i>Call:</h5>
                            <p> +91 8700307203</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3512.5964614470718!2d77.3395982739877!3d28.310545875842028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb9f82f286b1%3A0xb3df276492c83b0f!2sJai%20Maa%20Society!5e0!3m2!1sen!2sin!4v1712480416562!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                </div>
                <!-- Contact Form -->
                <div class="col-md-8">
                    <div class="shadow-lg rounded py-5 px-5 bg-info">
                        <h2 class="text-center" style="font-weight: 600">Enquire Now</h2>
                        @if (session('success'))
                            <p style="color: green;">{{ session('success') }}</p>
                        @endif
                        <form action="{{route("contact.submit")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group mt-2">
                                <label for="message">Service You Want:</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
