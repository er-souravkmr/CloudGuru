@extends('layouts.main')
@section('main')
    <section class="banner-new mb-5">
        <div class="banner-body">
            <div class="container">
                <div class="banner-text">
                    <div class="upper-head ">
                        <h2 class="about-head mt-3" data-aos="fade-up" data-aos-duration="600">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="{{route('home')}}"><i class='bx bxs-home'></i></a></li>
                              <li class="breadcrumb-item active text-primary" aria-current="page">About us</li>
                            </ol>
                          </nav>
                          
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="main_about" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="abt-text">
                        <h5>About Us<span class="line"></span></h5>
                        <h1 style="font-weight: 700">Welcome to <span class="text-primary">Cloud Guru</span></h1>

                        <p style="  text-align: justify; text-justify: inter-word;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis velit dolorem tempore quasi
                            porro facere rerum. Enim, laboriosam at. Magni placeat consectetur vitae repellat
                            distinctio, officia temporibus? Aliquam, atque natus.
                            Nisi explicabo optio suscipit perferendis laboriosam totam, accusamus dolorum cupiditate
                            dicta esse rem beatae vitae tenetur voluptatum exercitationem, blanditiis, recusandae ullam
                            possimus molestias iste. Velit nesciunt assumenda quaerat ipsa. Eos.
                            Doloribus modi similique voluptatem quae provident perspiciatis optio. Quisquam modi
                            ducimus, tempore, vel quidem praesentium quam veritatis earum ea incidunt aperiam saepe?
                            Voluptates natus, earum dignissimos placeat repellendus et aliquid?
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="abt-img">
                        <img src="https://img.freepik.com/free-vector/seminar-concept-illustration_114360-7480.jpg?t=st=1715486005~exp=1715489605~hmac=cde8481645b58e20e104d7c8abe1388e765abdeb89f9e5bfd698418afb53acc4&w=900"
                            alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <h1 style="font-weight: 700">Heading</h1>
                    <p style="  text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis molestias tempora illo
                        consequuntur quis sapiente nesciunt quaerat, laboriosam ratione a molestiae dignissimos ex porro
                        sit, nobis labore autem, culpa ipsa!</p>
                    <p style="  text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio provident possimus officiis facilis
                        sapiente ab non eius, cupiditate, enim quos, iure repellendus molestiae ducimus vitae? Vitae amet
                        exercitationem repudiandae quidem.</p>
                </div>
            </div>

            <div class="advantage py-5">
                <div class="row">


                    <div class="col-md-6">

                        <h5 style="font-weight:700">Advantage of <span class="text-primary"> Learning at CG</span> <span
                                class="line"></span></h5>
                        <ul class="adv-ul">

                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="abt-img">
                            <img src="https://img.freepik.com/free-vector/organic-flat-people-business-training-illustration_23-2148901755.jpg?t=st=1715487747~exp=1715491347~hmac=5ffa24e5447443e20d78be06b661a22a9177f997235d37efbaadc73f43c14cc4&w=900"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="placement_partner" class="pb-5">
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
