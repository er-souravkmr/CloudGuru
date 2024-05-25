@extends('layouts.main')
@section('main')
<section class="banner-new ">
    <div class="banner-body">
        <div class="container">
            <div class="banner-text">
                <div class="upper-head ">
                    <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600">Course</h2>
                    <nav aria-label="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class='bx bxs-home'></i></a></li>
                              <li class="breadcrumb-item">Cousre</li>
                              <li class="breadcrumb-item active text-primary" aria-current="page">Main</li>
                            </ol>
                          </nav>
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
                <h4 style="font-weight:700">Course <span class="text-primary"> Name 1 </span> <span class="line"></span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et delectus expedita atque itaque ex doloremque tenetur animi labore, veritatis at quia accusantium deserunt consectetur qui ipsum ipsam obcaecati hic soluta!</p>

                <ul class="adv-ul">
                    <li>Lorem ipsum dolor sit amet, consecte</li>
                    <li>uia accusantium deserunt consec</li>
                    <li> adipisicing elit. Et delectus expe</li>
                    <li>itaque ex doloremque </li>
                </ul>

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
                    <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                </div>
            </div>
            <div class="col-md-12">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde mollitia soluta voluptates delectus, neque iste quos ab culpa minima quod nobis, doloremque quisquam, praesentium voluptatem voluptatum dolores inventore id.</p>
            </div>
        </div>
    </div>
</section>

<section id="placement_partner" class="py-5">
    <div class="container">
        <h5 style="font-weight:700">Our<span class="line"></span></h5>
        <h3 style="font-weight:700"> Placement <span class="text-primary"> Partner</h3>
        <div class="placement_carousel owl-carousel owl-theme pt-4">
            <div class="item"><img
                    src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?t=st=1715493539~exp=1715497139~hmac=7e5ed2fe3cffe121cb12b05a92fe589d45644ddb1c4c1ba4f0efc2f6cfd06b12&w=900"
                    alt=""> 
            </div>
            <div class="item"><img
                    src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?t=st=1715493539~exp=1715497139~hmac=7e5ed2fe3cffe121cb12b05a92fe589d45644ddb1c4c1ba4f0efc2f6cfd06b12&w=900"
                    alt=""> 
            </div>
            <div class="item"><img
                    src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?t=st=1715493539~exp=1715497139~hmac=7e5ed2fe3cffe121cb12b05a92fe589d45644ddb1c4c1ba4f0efc2f6cfd06b12&w=900"
                    alt=""> 
            </div>
            <div class="item"><img
                    src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?t=st=1715493539~exp=1715497139~hmac=7e5ed2fe3cffe121cb12b05a92fe589d45644ddb1c4c1ba4f0efc2f6cfd06b12&w=900"
                    alt=""> 
            </div>
            <div class="item"><img
                    src="https://img.freepik.com/free-photo/office-skyscrapers-business-district_107420-95733.jpg?t=st=1715493539~exp=1715497139~hmac=7e5ed2fe3cffe121cb12b05a92fe589d45644ddb1c4c1ba4f0efc2f6cfd06b12&w=900"
                    alt=""> 
            </div>

            
        </div>
    </div>
</section>



@endsection