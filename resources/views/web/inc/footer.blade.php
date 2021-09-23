<!-- ======= Footer ======= -->

@php
    foreach($footer as $data){
        if($data->name == 'footer'){
            $footerData = $data;
        }
    }
@endphp
<footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html" class="logo mr-auto"><img src="{{url('public/assets/web/img/logo.png')}}" alt="" style="padding-bottom: 15px; width:180px
                "></a>

            <p>
                {{$footerData->address}} <br><br>
              <strong>Phone:</strong> {{$footerData->phone}}<br>
              <strong>Email:</strong> {{$footerData->email}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                @foreach ($service as $data )
                    <li><i class="bx bx-chevron-right"></i> <a href="#">{{$data->title}}</a></li>
                @endforeach

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>{{$footerData->description}}</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Technow</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Technow Pakistan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('public/assets/web/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('public/assets/web/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public/assets/web/js/main.js')}}"></script>
  {{-- owl carrousal --}}
  <script src="{{url('public/assets/web/js/owl.carousel.min.js')}}"></script>



</body>

</html>
