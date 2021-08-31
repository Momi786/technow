@include('web.inc.header')

@php
foreach($allContent as $data){
if($data->name == 'team'){
$teamdata = $data;
}

}
@endphp

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>{{$teamdata->title}}</h1>
                <h2>{{$teamdata->description}}</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{url('assets/web/img/hero-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Current Team</h2>
        </div>

        <div class="row">
            @foreach ($team as $data)
            <div class="col-lg-6 col-md-5 col-sm-6 mb-5">
                <div class="member d-flex align-items-start row m-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-sm-4">
                        <div class="pic"><img src="{{url('storage/app')}}/{{$data->img}}" class="img-fluid" alt="">
                        </div>
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
</section><!-- End Team Section -->



@include('web.inc.footer')
