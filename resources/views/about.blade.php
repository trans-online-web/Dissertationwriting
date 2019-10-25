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
							<h1>About</h1>
							<h6>
								<a href="/">Home</a>
								<i class="fas fa-angle-right"></i>
								<a href="#!">About</a>
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

	<!-- About company start-->
	<section id="about-story">
		<div class="about-story-cover">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2 col-sm-12 col-12">
						<div class="about-story-img">
							<img src="img/about/ab-m.png" alt="img">
						</div>
					</div>
				</div>
				<div class="about-story-heading text-center">
					<h2>Our Story</h2>
					<p>We have great story to tell you</p>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-12">
						<div class="about-story-info">
							<p>
								Ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volup tas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequ
								eporro quisquam est qui dolorem ipsum quia dolor sit amet.
							</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12">
						<div class="about-story-info">
							<p>
								Ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volup tas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Nequ
								eporro quisquam est qui dolorem ipsum quia dolor sit amet.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About company  end-->

	<!-- Mission vision are start -->
	<section id="mission">
		<!-- main container start -->
		<div class="container-fluid">
			<!-- row 1  start -->
			<div class="row">
				<div class="col-md-6">
					<!-- left side text start-->
					<div class="mission-text">
						<h2>We are here with our individual mission of giving the bes</h2>
						<p>sed quia non numquam eius modi tempora ut labore et dolore magnam aliquam quaerat voluptatem. ut enim ad minima veniam,quis nistrum exercitationem ullam corporis suscipris laboriosam, nisi ut ut aliquidex. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auto odit aut fugit,sed quia consequuntur magni dolores.</p>
						<!-- button start -->
						<div class="sub-btn d-flex">
							<div class="play-btn mission">
								<a href="#!" class="btn">Learn More</a>
							</div>
						</div><!-- button end -->
					</div><!-- left side text end-->
				</div>
				<div class="col-md-6">
					<!-- right side img start -->
					<div class="mission-img">
						<img src="img/mission.png" alt="img" class="img img-responsive m-1">
					</div><!-- right side img end -->
				</div>
			</div> <!-- row 1 end -->
			<!-- row 2 start -->
			<div class="row">
				<div class="col-md-6">
					<!-- left img start -->
					<div class="vision-img">
						<img src="img/vision.png" alt="icon">
					</div><!-- left img end -->
				</div>
				<div class="col-md-6">
					<!-- right side text start -->
					<div class="vision-text ">
						<h2>We are here for you</h2>
						<p>When you get involved with the right company, everything just seems right. Make a “need help with my dissertation” order by clicking on the “Order” icon on our website and follow the instructions given. You will have all the time to do your other activities as you wait for a quality paper that meets all your requirements to be delivered to you.  It is not easy when you are not used to it. Let those who major in the field make your work easier as they enjoy doing the work. </p>
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