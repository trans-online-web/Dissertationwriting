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
                                <div class="about-info">
                                    <h3>Dissertation Writing</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>We are a custom dissertation writing service. We can write your paper from the topic, proposal, introduction, to conclusion or any part of your dissatation paper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <div class="about-info">
                                    <h3>Dissertation Formatting</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>Formatting your dissertation is often the most frustrating part of the dissertation writing process. Lets help you in formatting your paper</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <div class="about-info">
                                    <h3>Editing</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>Our editing service will help you avoid mistakes & improve your dissertation paper. Our experienced editors will help you in getting rid of grammatical, typographical, and punctuation errors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <!-- <img src="img/service/wo.png" alt="icon" class="about-1"> -->
                                <div class="about-info">
                                    <h3>Dissertation Proposal</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>Are you finding it difficult to write an effective dissertation proposal? Let us help you. The proposal is often described as one of the most demanding yet important parts of a dissertation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <!-- <img src="img/service/ui.png" alt="icon" class="about-1"> -->
                                <div class="about-info">
                                    <h3>Coaching</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>Get a dissertation writing coach who will guide you in structuring the dissertation process. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="item-about service-author">
                            <div class="about-slider-item text-center card">
                                <div class="about-info">
                                    <h3>Proofreading</h3>
                                    <img src="img/about-bottom.png" alt="icon">
                                    <p>Our Dissertation writing experts will proofread your paper and you will recieve a revised document in which misspellings, grammar errors, and typos have been corrected</p>
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
                        <h2>Request professional writing help now</h2>
                        <p>Our professional writers’ commitment and talent is unmatched, and the paper you receive will be 100% authentic and carefully researched. Whether you are a high school, college, or university student, it doesn’t matter; we have the best team that can effectively correspond to all levels of writing.</p>
                        <!-- button start -->
                        <div class="sub-btn d-flex ">
                            <div class="play-btn vision">
                                <a href="#!" class="btn">Order Now</a>
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