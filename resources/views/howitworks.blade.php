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
	                            <h1>How It Works</h1>
	                            <h6>
	                                <a href="/">Home</a>
	                                <i class="fas fa-angle-right"></i>
	                                <a href="#!">How It Works</a>
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
	    <div class="pb-5"></div>
	    <!--Banner Area End-->

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
	                    <h2>Create an account</h2>
	                    <p>Register on our website in a few clicks. Fill in the required infomation and sign up.</p>
	                    <!-- button start -->
	                    <div class="sub-btn d-flex ">
	                        <div class="play-btn vision">
	                            <a href="/register" class="btn">Register</a>
	                        </div>
	                    </div> <!-- button end -->
	                </div><!-- right side text end -->
	            </div>
	        </div><!-- row 2 end -->
	    </div> <!-- main container end -->
	</section>
	<!-- Mission vision are end -->

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
	                    <h2>Fill order form</h2>
	                    <p>Upload detailed instructions and any related materials. </p>
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
	                    <h2>Submit your payment</h2>
	                    <p>Add funds to your balance and use it to pay for orders after you are 100% satisfied.</p>
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
	                    <h2>Recieve your order</h2>
	                    <p>Review your finished order and leave feedback for your writer. Pay only when all requirements are met and you are 100% satisfied with the result.</p>
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
	<section class="service-vision text-centre" style="background-color: #85bdf5; line-height: 32px;">
		<div class="container p-4">
			<div class="row">
	        	<div class="col-md-12 text-center">
	        		<h2 class="p-2">Don't wait any longer!</h2>
	        		<h6>Submit you order now and get it done <br> by our proffesional writers</h6>
	        		<a href="#" class="btn btn-primary">Order Now</a>
	        	</div>
	        </div>
	    </div>
	</section>
	<!-- Mission vision are end -->
	@include('includes.footer')
@endsection