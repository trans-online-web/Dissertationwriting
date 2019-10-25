@extends('layouts.app')

@section('title')
Here is a title!
@stop
@section('meta_tags')
<meta name="title" content="agvuirh uabvrioh aiobvrho aoibvrio">
<meta name="decsription" content="agvuirh uabvrioh aiobvrho aoibvrio">
<meta name="keywords" content="auefbv ailbvoea vidbvaiove eiodbvori eui">
@stop

@section('content')
	<!--Banner Area Start-->
    <section id="content-banner">
        <div class="content-cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-banner-area">
                            <h1>Our Services</h1>
                            <h6>
                                <a href="/">Home</a>
                                <i class="fas fa-angle-right"></i>
                                <a href="#!">Service</a>
                            </h6>
                        </div>
                    </div>
                    <!--col-md-6-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
    </section>
    <!--Banner Area End-->

    <!-- service item start-->
    <section id="service-item">
        <div class="service-covre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/als.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>Digital Marketing</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/seo.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>SEO Marketing</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/web.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>Web Development</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/wo.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>Web Development</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/ui.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>Web Development</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <img src="img/service/sof.png" alt="icon" class="about-1">
                                <div class="about-info">
                                    <h3>Web Development</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>It’s imperative that we balance creative, clever work while keeping client objectives front of mind. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service item  end-->

    <!-- Mission vision are start -->
    <section id="service-vision">
        <!-- main container start -->
        <div class="container-fluid">
            <!-- row 2 start -->
            <div class="row">
                <div class="col-md-6">
                    <!-- left img start -->
                    <div class="service-vision-img">
                        <img src="img/vision.png" alt="icon">
                    </div><!-- left img end -->
                </div>
                <div class="col-md-6">
                    <!-- right side text start -->
                    <div class="service-vision-text">
                        <h2>We don't leave any stone unturned</h2>
                        <p>sed quia non numquam eius modi tempora ut labore et dolore magnam aliquam quaerat voluptatem. ut enim ad minima veniam,quis nistrum exercitationem ullam corporis suscipris laboriosam, nisi ut ut aliquidex. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auto odit aut fugit,sed quia consequuntur magni dolores.</p>
                        <!-- button start -->
                        <div class="sub-btn d-flex ">
                            <div class="play-btn vision">
                                <a href="#!" class="btn">Learn More</a>
                            </div>
                        </div> <!-- button end -->
                    </div><!-- right side text end -->
                </div>
            </div><!-- row 2 end -->
        </div> <!-- main container end -->
    </section>

    <!-- Mission vision are end -->
    @include('includes.footer')
@endsection