@extends('layouts.main')

@section('main')
    <!-- ........................BAnner....................... -->

    <!-- <section id="banner">

                                        <div class="container-fluid">
                                            <div class="row">
                                                <img src="" alt="">
                                            </div>
                                        </div>

                                    </section> -->

    <!-- ....................Home Section...................... -->


    <section id="home" class=" banner">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-12">
                    <div class="home-text">
                        <p>Welcome to</p>
                        <h2> CLOUD GURU</h2>
                        <div class="hat-icon"><img src="{{ asset('public/assets/img/hat-icon.png') }}" alt=""
                                class="w-100">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 col-12">
                    <div class="form-body mt-4 d-none d-lg-block">

                        <h4 class="text-center mb-4"> Enquire Now <img
                                src="https://cdn-icons-png.flaticon.com/128/841/841364.png" width="20px" height="20px"
                                alt=""> </h4>

                        <form action="{{ asset('/enquire') }}" method="POST">
                            @csrf
                            <div class="mb-3"><input type="text" class="form-control" id="name" placeholder="Name"
                                    name="name">
                            </div>
                            <div class="mb-3"> <input type="text" class="form-control" id="number"
                                    placeholder="Mobile No" name="phone"></div>
                            <div class="mb-3"><input type="email" class="form-control" id="email"
                                    placeholder="Email ID" name="email"></div>
                            <select class="form-select" aria-label="Default select example" name="course">
                                <option selected>Select Course</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->course }}">{{ $item->course }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="eq-btn mt-4 ">Submit</button>

                        </form>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Home Section End -->

    <!-- New Section -->

    <section id="new" class="pt-5 pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/presentation.png') }}" alt="">
                        <p>Trainer Records</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/student.png') }}" alt="">
                        <p>Trained Student</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/trophy.png') }}" alt="">
                        <p>Success Ratio</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/book.png') }}" alt="">
                        <p>Cloud Training</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/location.png') }}" alt="">
                        <p>Job-Assistance</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 col-6">
                    <div class="box">
                        <img src="{{ asset('public/assets/img/offline.png') }}" alt="">
                        <p>Offline Learning</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="main_about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="abt-text">
                        <h5>About Us<span class="line"></h5>
                        <h4>Welcome to <span class="text-primary">Cloud Guru</span></h4>

                        <p style="  text-align: justify; text-justify: inter-word;"> Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Omnis velit dolorem tempore quasi
                            porro facere rerum. Enim, laboriosam at. Magni placeat consectetur vitae repellat
                            distinctio, officia temporibus? Aliquam, atque natus.
                        </p>
                        <p style="  text-align: justify; text-justify: inter-word;">
                            Nisi explicabo optio suscipit perferendis laboriosam totam, accusamus dolorum cupiditate
                            dicta esse rem beatae vitae tenetur voluptatum exercitationem, blanditiis, recusandae ullam
                            possimus molestias iste. Velit nesciunt assumenda quaerat ipsa. Eos.
                            Doloribus modi similique voluptatem quae provident perspiciatis optio. Quisquam modi

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="abt-img">
                        <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="course" class="py-5 ">
        <div class="container">
            <h3 class="h3m"><span class="text-white">Popular</span> <span class="text-primary">Course</span> <span
                    class="line"></span></h3>
            <div class="row g-4">

                <div class="course-slider owl-carousel owl-theme ">

                    @foreach ($data as $item)
                        <div class="card ">
                            <img src="{{ asset('public/uploads/subcourse') }}/{{ $item->image }}"
                                class="card-img-top" alt="" height="200px">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->course }}</h5>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

            </div>
        </div>
    </section>

    <section id="trainers" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="abt-text">
                        <h5>Meet<span class="line"></h5>
                        <h4>Our <span class="text-primary">Trainers</span></h5>

                            <p style="  text-align: justify; text-justify: inter-word;"> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Omnis velit dolorem tempore quasi
                                porro facere rerum. Enim, laboriosam at. Magni placeat consectetur vitae repellat
                                distinctio, officia temporibus? Aliquam, atque natus.
                                Nisi explicabo optio suscipit perferendis laboriosam totam, accusamus dolorum cupiditate
                                dicta esse rem beatae vitae tenetur voluptatum exercitationem, blanditiis, recusandae ullam
                                possimus molestias iste. Velit nesciunt assumenda quaerat ipsa. Eos.
                                Doloribus modi similique voluptatem quae provident perspiciatis optio. Quisquam modi
                                ducimus, tempore, vel quidem praesentium quam veritatis earum ea incidunt aperiam saepe?
                                Voluptates natus, earum dignissimos placeat repellendus et aliquid?
                            </p>
                            <br>
                            <br>
                            <div class="bt">Know More</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-4">
                        @foreach ($trainer as $item)
                            <div class="col-md-6">
                                <div class="trainer-img position-relative">
                                    <img src="{{ asset('public/uploads/trainer') }}/{{ $item->image}}"
                                        alt="" width="100%" height="250px">
                                    <div class="trainer-tct position-absolute">
                                        <div class="name">{{ $item->name}}</div>
                                        <p>{{ $item->designation}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="students" class=" py-5">
        <div class="container">
            <h3 class="h3m"><span class="text-white">Our</span> <span class="text-primary">Students</span> <span
                    class="line"></span></h3>
            <div class="row">
                <div class="student owl-carousel owl-theme ">

                    @for ($i = 0; $i < 6; $i++)
                        <div class="card item">
                            <img src="https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="..." height="300px">
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </section>
@endsection
