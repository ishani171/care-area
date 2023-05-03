<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Care Area | Welcome</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="{{ asset('assets/bs4/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
	integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Scripts -->
</head> 
<body>
	<div class="banner-wrap p-3">
		<x-carearea.header />
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="container-fluid">
						<div class="h-100 w-100">
							<div class="content-wrap mt-4 shadow-sm rounded">
								<div class="p-3">
									<h2 class="f-title title">Welcome to<br> <span class="cr">Care Area </span>,</h2>
									<h3 class="lh-base f-h fs-3 text-wrap">
										 where world-class healthcare and passion for prevention
										 meet in a magnificent atmosphere with truly outstanding service.
									</h3>
									<button class="border-0 f-p mt-3 px-3 see-more py-1 shadow-sm bg-light">See More</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-4">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget1.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">Healthcare</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget2.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">blood donating</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget3.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">Medical Counseling</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget4.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">Online appoinments</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget5.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">Qualified doctors</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
				<div class="p-3 shadow f-card">
					<div class="featured pt-4 pb-5">
						<div class="png d-flex justify-content-center">
							<img src="/assets/images/widget6.png" alt="">
						</div>
						<div class="heading pt-4">
							<h5 align="center">medicine orders</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">
				<div class="content-banner-1">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							
						</div>
						<div class="col-xl-6 col-lg-6">
							<h5>Heladiwa Hospital has all the modern services and necessary to provide compherasive healthcare with since 2007
								The medical laboratory functions around the clock.
								All the medical tests are carried out using state of the art equipment ensuring accuracy and reliability
								The pharmacies are well stocked with all the drugs of the best quality
							</h5>
						</div>
					</div>
					
				</div>
				<div class="content-banner-2">

				</div>
				<div class="content-banner-3">

				</div>
				<div class="content-banner-4">

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">
				<x-carearea.footer />
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('assets/bs4/js/bootstrap.bundle.min.js') }}"></script>
</html>