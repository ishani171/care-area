<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CARE AREA | HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
	integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	@yield('styles')

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap');

		h1,h2,h3,h4,h5,h6{
			font-family: Nunito;
		}
		p,span{
			font-family: Quicksand;
		}
		.swiper{
			height: 520px;
			width: 100%;
		}
		.sw{
			width: 100%;
			height: 100%;
			background-size:cover;
			background-position-y:950px;
			background-position-x: center;
		}
		.sw-content h2{
			font-family: Noticia Text;
			font-size: 60px;
			text-shadow: 2px 2px 4px #fff;
		}
	</style>
</head>
<body>
    <x-carearea.inner-header />
	<section>
		<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="sw" style="background-image: url('/assets/images/swiper1.jpg')">
					<div class="h-100 w-100 sw-content d-flex justify-content-center align-items-center p-4">
						<div>
							<h2 align="center">Experience excellence in healthcare with us.</h2>
							<h4 align="center">We're committed to providing personalized care for every patient.</h4>	
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="sw" style="background-image: url('/assets/images/swiper2.jpg')">
					<div class="h-100 w-100 sw-content d-flex justify-content-center align-items-center p-4">
						<h2 align="center">Advanced technology and compassionate care.</h2>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="sw" style="background-image: url('/assets/images/swiper3.jpg')">
					<div class="h-100 w-100 sw-content d-flex justify-content-center align-items-center p-4">
						<h2 align="center">From emergency care to rehabilitation, <br>We've got you covered.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		</div>
	</section>
    @yield('content')
	<section class="mt-5">
		<x-carearea.footer />
	</section>
</body>
<script>
	const swiper = new Swiper('.swiper', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	autoplay: {
		delay: 3000,
	},
	scrollbar:false,
	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
    	el: '.swiper-pagination',
    	type: 'bullets',
  	},
	});
</script>
</html>