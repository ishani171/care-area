<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="{{ asset('assets/bs4/css/bootstrap.min.css') }}">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" 
	integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" 
	crossorigin="anonymous"></script>
	@yield('styles')

	<style>
		h1,h2,h3,h4,h5,h6{
			font-family: Nunito;
		}
		p,span{
			font-family: Quicksand;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 px-0 bg-blue-500 text-white">
				<div class="p-3">
					<div>
						<h3 align="center">Care Area Admin</h3>
					</div>
				</div>
				<div>
					<div class="mt-4">
						<div class="d-flex justify-center align-middle p-3 shadow-sm bg-blue-200 mb-3 text-black">
							<a href="/admin/doctors"><h5 class=" text-xl">Doctors</h5></a>
						</div>
						<div class="d-flex justify-center align-middle p-3 shadow-sm bg-blue-200 mb-3 text-black">
							<a href="/admin/receptions"><h5 class=" text-xl">Receptions</h5></a>
						</div>
						<div class="d-flex justify-center align-middle p-3 shadow-sm bg-blue-200 mb-3 text-black">
							<a href="/admin/specialities"><h5 class=" text-xl">Specialities</h5></a>
						</div>
						<div class="d-flex justify-center align-middle p-3 shadow-sm bg-blue-200 mb-3 text-black">
							<a href="{{ route('admin.jobs') }}"><h5 class=" text-xl">Jobs</h5></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-10 col-lg-10 px-0 pb-4" style="min-height: 100vh;">
				<div>
					@yield('content')
				</div>
			</div>
			<div class="col-12 tw-px-0 bg-dark">
				<div class="tw-bg-[#222] p-2">
					<p class="text-center tw-text-white">Footer</p>
				</div>
			</div>
		</div>
	</div>
</body>
@yield('script')
</html>