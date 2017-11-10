<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>LANDON - Free Bootstrap 3 Landing Page</title>

	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/main.css" rel="stylesheet">

	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="preloader"></div>

	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <a href="index.html#"><img src="images/logo-biere.png" alt="logo"></a>
			</div>

			<h1>Welcome at <strong>Ubeer</strong> <br>
			to <strong>launch</strong> your product.</h1>

			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Enter your email" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">REGISTER</button>
							</div>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div>

				<a href="index.html#explore" class="scrollto">
				<p>SCROLL DOWN TO EXPLORE</p>
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->


	<div class="container" id="explore">

		<div class="section-title">
			<h2>New Mobile App</h2>
			<h4>It offer a 24H beer delivery service anywhere in Belgium</h4>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center">
				<img src="images/logo-biere.png" alt="flat-mockup-template">
			</div>
		</section><! --/section -->

		<div class="section-title">
			<h2>More about your product</h2>
			<h4>Always detail some important features.</h4>
		</div>

		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="images/24h.jpg" alt="analytics-icon">
					<div class="caption">
						<h3>24/24</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="images/livraison.png" alt="analytics-icon">
					<div class="caption">
						<h3>Delivery</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="images/city.png" alt="analytics-icon">
					<div class="caption">
						<h3>Student Cities</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="images/belgium.svg" alt="analytics-icon">
					<div class="caption">
						<h3>Anywhere in Belgium</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->


		<div class="section-title">
			<h2>Our Partners</h2>
			<h4>We work with different partners</h4>
		</div>

		<section class="row clientlogo breath">
			<div class="col-md-12 text-center">
				<img src="images/logo_chimay.png" alt="client-logos">
				<img src="images/orval.jpg" alt="client-logos">
				<img src="images/leffe.jpeg" alt="client-logos">
				<img src="images/duvel.jpeg" alt="client-logos">

			</div>
		</section><! --/section -->

	</div><! --/container -->


		<div class="highlight testimonials">
			<div class="container">
				<div class="section-title">
					<h2>About us</h2>
				</div>

				<section class="row breath">
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock">
							<img src="images/johndoe.png" alt=".">
							<p><strong>John Doe</strong> <br>
								Founder of <a href="index.html#">Ubeer</a>
							</p>
						</div>
					</div><! --/col-md-6 -->

					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock">
							<img src="images/johndoe.png" alt=".">
							<p><strong>Richard Sommer</strong> <br>
								CEO of <a href="">Ubeer</a>
							</p>
						</div>
					</div><! --/col-md-6 -->
				</section><! --/section -->

			</div><! --/container -->
		</div><! --/highlight Testimonials -->


		<main class="footercta" role="main">
			<div class="container">
				<h1><strong>Ubeer</strong> <br>
					product <strong>launch</strong></h1>
					<div id="timer">
					  <span id="days"></span>days
					  <span id="hours"></span>hours
					  <span id="minutes"></span>minutes
					  <span id="seconds"></span>seconds
					</div>
				<div class="row">
					<div class="col-md-12 breath text-center">
						<a href="index.php#top" class="btn btn-success btn-lg gototop">REGISTER</a>
					</div>
				</div>
			</div><! --/container -->
		</main><! --/main -->

		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; <2017></2017> Ubeer.co. All Rights Reserved</p>
				</div>
			</section><! --/section -->
		</div><! --/container -->



<script src="js/timer.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>


<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });


</script>

</body>
</html>
