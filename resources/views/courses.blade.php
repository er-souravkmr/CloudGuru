@extends('layouts.main')
@section('main')
<section class="banner-new ">
    <div class="banner-body">
        <div class="container">
            <div class="banner-text">
                <div class="upper-head ">
                    <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600">Course</h2>
         
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class='bx bxs-home'></i></a></li>
                              {{-- <li class="breadcrumb-item"></li> --}}
                              <li class="breadcrumb-item active text-primary" aria-current="page">{{ $subcourse->course}}</li>
                            </ol>
                          </nav>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section id="courses" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 style="font-weight:700">Course: <span class="text-primary">{{ $subcourse->course}} </span> <span class="line"></span></h4>
                <p style="  text-align: justify; text-justify: inter-word;">{{$subcourse->description}}</p>

                <hr>
                

                <div class="rating mb-3" >
                    <p>4.9 rating</p>
                    <i class='bx bxs-star' style="color: #fd4a1b;"></i>
                    <i class='bx bxs-star' style="color: #fd4a1b;"></i>
                    <i class='bx bxs-star' style="color: #fd4a1b;"></i>
                    <i class='bx bxs-star' style="color: #fd4a1b;"></i>
                    <i class='bx bxs-star' style="color: #fd4a1b;"></i>
                </div>

            </div>
            <div class="col-md-4">
                <div class="abt-img">
                    <img src="{{asset("public/uploads/subcourse")}}/{{$subcourse->image}}"
                        alt="">
                </div>
            </div>
            <div class="col-md-12">
                <p style="  text-align: justify; text-justify: inter-word;">{{$subcourse->subdesc}}</p>
            </div>
        </div>
    </div>
</section>

<section id="placement_partner" class="py-5">
    <div class="container">
        <h5 style="font-weight:700">Our<span class="line"></span></h5>
        <h3 style="font-weight:700"> Placement <span class="text-primary"> Partner</h3>
        <div class="placement_carousel owl-carousel owl-theme pt-4">
            @foreach ($company as $item)
                <div class="item"><img
                        src="{{asset("public/uploads/company")}}/{{$item->image}}"
                        alt="" height="250px"> 
                </div>
            @endforeach
        </div>
    </div>
</section>



@endsection