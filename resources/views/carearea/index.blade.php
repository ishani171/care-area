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
									<h2 class="f-title title">Welcome to<br> <span class="cr">Care pukki </span>,</h2>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">
				<div class="content-banner-1">

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


INSERT INTO `specialities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Accident and emergency medicine', NULL, NULL),
(2, 'Allergology', NULL, NULL),
(3, 'Anaesthetics', NULL, NULL),
(4, 'Biological hematology', NULL, NULL),
(5, 'Cardiology', NULL, NULL),
(6, 'Child psychiatry', NULL, NULL),
(7, 'Clinical biology', NULL, NULL),
(8, 'Clinical chemistry', NULL, NULL),
(9, 'Clinical neurophysiology', NULL, NULL),
(10, 'Clinical radiology', NULL, NULL),
(11, 'Dental, oral and maxillo-facial surgery', NULL, NULL),
(12, 'Dermato-venerology', NULL, NULL),
(13, 'Dermatology', NULL, NULL),
(14, 'Endocrinology', NULL, NULL),
(15, 'Gastro-enterologic surgery', NULL, NULL),
(16, 'Gastroenterology', NULL, NULL),
(17, 'General hematology', NULL, NULL),
(18, 'General Practice', NULL, NULL),
(19, 'General surgery', NULL, NULL),
(20, 'Geriatrics', NULL, NULL),
(21, 'Immunology', NULL, NULL),
(22, 'Infectious diseases', NULL, NULL),
(23, 'Internal medicine', NULL, NULL),
(24, 'Laboratory medicine', NULL, NULL),
(25, 'Maxillo-facial surgery', NULL, NULL),
(26, 'Microbiology', NULL, NULL),
(27, 'Nephrology', NULL, NULL),
(28, 'Neuro-psychiatry', NULL, NULL),
(29, 'Neurology', NULL, NULL),
(30, 'Neurosurgery', NULL, NULL),
(31, 'Nuclear medicine', NULL, NULL),
(32, 'Obstetrics and gynecology', NULL, NULL),
(33, 'Occupational medicine', NULL, NULL),
(34, 'Ophthalmology', NULL, NULL),
(35, 'Orthopaedics', NULL, NULL),
(36, 'Otorhinolaryngology', NULL, NULL),
(37, 'Paediatric surgery', NULL, NULL),
(38, 'Paediatrics', NULL, NULL),
(39, 'Pathology', NULL, NULL),
(40, 'Pharmacology', NULL, NULL),
(41, 'Physical medicine and rehabilitation', NULL, NULL),
(42, 'Plastic surgery', NULL, NULL),
(43, 'Podiatric Medicine', NULL, NULL),
(44, 'Podiatric Surgery', NULL, NULL),
(45, 'Psychiatry', NULL, NULL),
(46, 'Public health and Preventive Medicine', NULL, NULL),
(47, 'Radiology', NULL, NULL),
(48, 'Radiotherapy', NULL, NULL),
(49, 'Respiratory medicine', NULL, NULL),
(50, 'Rheumatology', NULL, NULL),
(51, 'Stomatology', NULL, NULL),
(52, 'Thoracic surgery', NULL, NULL),
(53, 'Tropical medicine', NULL, NULL),
(54, 'Urology', NULL, NULL),
(55, 'Vascular surgery', NULL, NULL),
(56, 'Venereology', NULL, NULL);