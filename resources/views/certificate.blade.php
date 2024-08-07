@extends('layouts.main')
@section('main')
    <section class="banner-new mb-5">
        <div class="banner-body">
            <div class="container">
                <div class="banner-text">
                    <div class="upper-head ">
                        <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600">{{Request::segment(1)=='placement'?'Placement':'Certificates'}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="{{route('home')}}"><i class='bx bxs-home'></i></a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">{{Request::segment(1)=='placement'?'Placement':'Certificates'}}</li>
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
                        <div class="trainer-img position-relative">
                            <img src="{{Request::segment(1)=='placement'?asset('public/uploads/company'):asset('public/uploads/certificate')}}/{{$item->image}}"
                                alt="" width="100%" height="250px">
                            <div class="trainer-tct position-absolute">
                                <div class="name">{{$item->name}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
