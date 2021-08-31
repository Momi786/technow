@php
    foreach ($allContent as $data) {
        if($data->name === 'service-section'){
        $servicesection = $data;
        }
    }
@endphp


@include('web.inc.header')



<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Our Services</h1>
          <h2>Services We're offering</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{url('assets/web/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

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
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">{{$data->title}}</a></h4>
                        <p>{{$data->description}}</p>
                        </div>
                    </div>
                 @endforeach




            </div>

          </div>

        </div>
      </section><!-- End Services Section -->



@include('web.inc.footer')
