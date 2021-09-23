@include('web.inc.header')

@php
foreach($allContent as $data){
    if ($data->name == "about-section") {
        $aboutSection = $data;
    }
    if($data->name == "why-us"){
        $why = $data;
    }
    if($data->name == "drop1"){
        $drop1 = $data;
    }
    if($data->name == "drop2"){
        $drop2 = $data;
    }
    if($data->name == "drop3"){
        $drop3 = $data;
    }
    if($data->name == "service-section"){
        $servicesection = $data;
    }
    if($data->name == "team"){
        $team1 = $data;
    }
    if($data->name == "pricing"){
        $pricing = $data;
    }
}
@endphp
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    {{-- <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{url('public/assets/web/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div> --}}

    <!--================Slider Area =================-->

        <div class="home-demo">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                                <div>
                                    <div class="font-big">
                                        <h1><span class="text-warning"> Technow</span> Pakistan</h1>
                                        <p class="text-white">Choose A Powerful <br>Design For Your Startup</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                                <div>
                                    <div>
                                        <img src="{{url('public/assets/web/img/hero-img.png')}}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item purple">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                                <div>
                                    <div class="font-big">
                                        <h1><span class="text-warning"> Technow</span> Pakistan</h1>
                                        <p class="text-white">Choose A Powerful <br>Design For Your Startup</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200" >
                                <div>
                                    <div>
                                        <img src="{{url('public/assets/web/img/hero-img.png')}}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                                <div>
                                    <div class="font-big">
                                        <h1><span class="text-warning"> Technow</span> Pakistan</h1>
                                        <p class="animated-bounceInUp text-white">Choose A Powerful <br>Design For Your Startup</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                                <div>
                                    <div>
                                        <img src="{{url('public/assets/web/img/hero-img.png')}}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--================End Slider Area =================-->

  </section><!-- End Hero -->

  <!-- ======= Cliens Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">

      <div class="row" data-aos="zoom-in">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-1.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-2.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-3.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-4.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-5.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{url('public/assets/web/img/clients/client-6.png')}}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$aboutSection->title}}</h2>
      </div>

      <div class="row content">
        <div class="col-lg-12">
          @php
              echo $aboutSection->description
          @endphp
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->


   <!-- ======= Why Us Section ======= -->
   <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content">
            <h3>{{$why->title}}</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>

          <div class="accordion-list">
            <ul>
              <li>
                <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> {{$drop1->title}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                  <p>
                   {{$drop1->description}}
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> {{$drop2->title}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                  <p>
                    {{$drop2->description}}
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> {{$drop3->title}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                  <p>
                    {{$drop3->description}}
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$servicesection->title}}</h2>
        <p>{{$servicesection->description}}</p>
      </div>

      <div class="row">
             @foreach ($service as $data)
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                    <div class="icon"><i class="@php
                        echo $data->icon;
                    @endphp"></i></div>
                    <h4><a href="">{{$data->title}}</a></h4>
                    <p>{{$data->description}}</p>
                    </div>
                </div>
             @endforeach




        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$pricing->title}}</h2>
        <p>{{$pricing->description}}</p>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>Free Plan</h3>
            <h4><sup>$</sup>0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3>Business Plan</h3>
            <h4><sup>$</sup>29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Developer Plan</h3>
            <h4><sup>$</sup>49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

   <!-- ======= Team Section ======= -->
   {{-- <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$team1->title}}</h2>
        <p>{{$team1->description}}</p>
      </div>

      <div class="row">
        @foreach ($team as $data)
        <div class="col-lg-6">
            <div class="member d-flex align-items-start row m-0" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-sm-4">
                    <div class="pic"><img src="{{url('storage/app')}}/{{$data->img}}" class="img-fluid" alt=""></div>
                </div>
                <div class="col-sm-8">
                    <div class="member-info">
                        <h4>{{$data->name}}</h4>
                        <span>{{$data->designation}}</span>
                        <p>{{$data->detail}}</p>
                        <div class="social">
                          <a href=""><i class="ri-twitter-fill"></i></a>
                          <a href=""><i class="ri-facebook-fill"></i></a>
                          <a href=""><i class="ri-instagram-fill"></i></a>
                          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                      </div>
                </div>
            </div>
          </div>
        @endforeach




      </div>

    </div>
  </section><!-- End Team Section --> --}}


  <section id="team">
    <div class="container">
        <div class="section-header text-center">
            <h2>{{$team1->title}}</h2>
            <p>{{$team1->description}}</p>
        </div>
        <div class="row">
            @foreach ($team as $data)
                <div class="col-lg-3 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="member"> <img src="{{url('storage/app')}}/{{$data->img}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{$data->name}}</h4> <span>{{$data->designation}}</span>
                                {{-- <div class="social"> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('web.inc.footer')
<script>
    $(function() {
  // Owl Carousel muzamil techonow page
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 6000,
    animateIn: "fadeInLeftBig",
  });
});
</script>

<style>


.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative
}

.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%
}

.fadeInUp {
    animation-name: fadeInUp
}

#team .member {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    border-radius: 50%;
    overflow: hidden
}

#team .member .member-info {
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 28px;
    right: 0;
    transition: all 0.2s
}

#team .member .member-info-content {
    margin-top: 50px;
    transition: margin 0.2s
}

#team .member:hover .member-info {
    background: rgba(0, 62, 128, 0.7);
    opacity: 1;
    transition: 0.4s;
    height: 200px;
    width: 200px;
    border-radius: 50%
}

.member img {
    height: 200px;
    width: 200px;
    border-radius: 50%
}

#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff
}

#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: #fff
}

#team .member .social a {
    transition: none;
    color: #fff
}
</style>
