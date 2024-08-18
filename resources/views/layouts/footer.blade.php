    <footer id="foot" class="bg-dark text-white ">
       <div class="container pb-3">
        <div class="row" style="justify-content: space-around;">
            <div class="col-md-4">
                <div class="foot-logo mb-4 p-2">
                    <img src="{{asset('public/assets/img/logo.jpg')}}" alt="" height="80px" width="150px">
                </div>

                <p class="text-white"><i class='bx bxs-phone-call' style="color: orangered;"></i> Call : +91  8700307203  </p>
                <p class="text-white"><i class='bx bx-envelope'  style="color: orangered;"></i>&nbsp
                    training@cloudguru.co.in</p>

            </div>
            <div class="col-md-2">
                <h5 class="my-3">Contact Us</h5>
                <div>
                    <h6  style="font-weight: 600"><i class='bx bx-current-location'></i> Location:</h6>
                    <p style="color: #b3b3b3">202, Jai Maa CGHS, Sector 65, Faridabad, HR - 121004</p>
                    <h6 class="pt-2" style="font-weight: 600"><i class='bx bxs-envelope'></i> Email:</h6>
                    <p ><a style="color: #b3b3b3" href="mailto:support@aarohitech.com"> support@aarohitech.com</a></p>
                    <h6 class="pt-2" style="font-weight: 600"> <i class='bx bxs-phone'></i>Call:</h6>
                    <p style="color: #b3b3b3"> +91 8700307203</p>
                </div>
           </div>
            <div class="col-md-2">

                <h5 class="my-3">Trending Course</h5>
                <ul>
                    {{-- {{dd(getCourse())}} --}}
                    @foreach (getCourse() as $item)
                        <li value="{{ $item->course }}">{{ $item->course }}</li>
                    @endforeach
                </ul>
                
            </div>
            <div class="col-md-2">

                <h5 class="my-3">Google Map</h5>
                <div>
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3512.5964614470718!2d77.3395982739877!3d28.310545875842028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb9f82f286b1%3A0xb3df276492c83b0f!2sJai%20Maa%20Society!5e0!3m2!1sen!2sin!4v1712480416562!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
            </div>
        
        </div>
       
       </div>

       <div class=" bg-dark" style="border-top: 1px solid rgb(104, 104, 104)">
         
         <p class="text-center py-3" style="color: orangered">© Cloud Guru Pvt Ltd</p>
        
     </div>
    </footer>

    @yield('footer_script')
    
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- <script src="{{url('assets/vendor/owl.carousel.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

				

     {{-- <script src="{{url('assets/js/bootstrap.min.js')}}"></script>  --}}
    <script src="{{asset('public/assets/js/custom.js')}}"></script>




</body>

</html>