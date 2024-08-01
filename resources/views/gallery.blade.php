@extends('layouts.main')
@section('main')
    <section class="banner-new mb-5">
        <div class="banner-body">
            <div class="container">
                <div class="banner-text">
                    <div class="upper-head ">
                        <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600"> Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="{{route('home')}}"><i class='bx bxs-home'></i></a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="trainers-main" class="pb-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($data as $item)
                    <div class="col-md-3">
                        <div class="trainer-img ">
                            <img src="{{asset("public/uploads/gallery")}}/{{$item->image}}"
                                alt="" width="100%" height="250px">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
