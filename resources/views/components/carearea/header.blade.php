<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
				  <a class="navbar-brand f-nav-brand fs-3" href="/">CareArea</a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
					  <li class="nav-item ms-2">
						<a class="nav-link active" aria-current="page" href="/home" title="Home"><i class="fa-solid fa-house fs-4"></i></a>
					  </li>
					  <li class="nav-item ms-2">
							<div class="dropdown">
								<a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fa-solid fa-user-doctor fs-4"></i>
								</a>
								<ul class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton1">
									<h6 class="text-center f-h border-bottom pb-2">Popular Services</h6>
									<li><a class="dropdown-item f-p" href="/doctors/2">General Medicine</a></li>
									<li><a class="dropdown-item f-p" href="/doctors/15">General surgery</a></li>
									<li><a class="dropdown-item f-p" href="/doctors/16">Child psychiatry</a></li>
								</ul>
							</div>
					  </li>
					  <li class="nav-item ms-2">
						<a class="nav-link" href="{{ route('jobs.index') }}" title="Jobs"><i class="fa-solid fa-briefcase fs-4"></i></a>
					  </li>
					  <li class="nav-item ms-2">
						<a class="nav-link" href="{{ route('feedbacks.index') }}" title="Feedbacks"><i class="fa-solid fa-comments fs-4"></i></a>
					  </li>
					  <li class="nav-item ms-2">
						<a class="nav-link" href="/about" title="About"><i class="fa-solid fa-circle-question fs-4"></i></a>
					  </li>
					  @auth
					  <li class="nav-item ms-2">
						<a class="nav-link" href="/profile" title="Profile"><i class="fa-solid fa-user fs-4"></i></a>
					</li>
					  @endauth
					  @guest
					  <li class="nav-item ms-2">
						<a class="nav-link" href="/login" title="Login"><i class="fa-solid fa-lock fs-4"></i></a>
					  </li>
					  @endguest
					</ul>
				  </div>
				</div>
			  </nav>
		</div>
	</div>
</div>