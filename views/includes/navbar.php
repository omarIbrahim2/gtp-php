
	   <div class="navbar-wrapper">
				<nav class="navbar navbar-expand-md bg-trans">
					<div class="container">
						<a class="navbar-brand" href="<?php echo url('/') ?>" aria-label="home">
							<img src="<?php echo self::asset("assets/photos/logo/gpt.svg")?>" alt="gpt logo" />
						</a>
						<button
							class="navbar-toggler"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto mb-2 mb-lg-0">
								<li class=" nav-item">
									<a
										class="target-nav nav-link active"
										aria-current="page"
										href="<?php echo url('/')  ?>"
										aria-label="home"
										>Home</a
									>
								</li>
								<li class=" nav-item">
									<a class="target-nav nav-link" href="<?php echo url('/about') ?>" aria-label="about us"
										>About us</a
									>
								</li>
								<li class=" nav-item">
									<a class="target-nav nav-link" href="<?php echo url("/services")?>" aria-label="services"
										>Services</a
									>
								</li>
								<li class=" nav-item">
									<a
										class="target-nav nav-link"
										href="<?php echo url('/terms-conditions') ?>"
										aria-label="t&C"
										>Terms & Conditions</a
									>
								</li>
							</ul>
							<div class="contact-button-container">
								<div
									class=" nav-item btn btn-outline-warning btn-outline-custom"
								>
									<a
										class="nav-link"
										href="<?php  echo url('/contact-us') ?>"
										aria-label="contact us"
										>Contact us</a
									>
								</div>
							</div>
						</div>
					</div>
				</nav>
		</div>