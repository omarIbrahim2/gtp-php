<footer>
			<div class="footer-wrapper white-section bg-black">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-12">
							<div class="footer-header text-white">
								<h3>Welcome To :</h3>
								<h3 class="company-name">Global Travel Bureau:</h3>
								<h3>Where Every Trip Tells a Story.</h3>
							</div>
							<p class="company-word">
								Lorem, ipsum dolor sit amet consectetur adipisicing elit.
								Tenetur voluptate quisquam nulla eum sit error? Sapiente optio
								voluptas architecto aut vero perspiciatis eaque adipisci! Id!
							</p>
						</div>
						<div class="col-md-4 col-12">
							<div class="footer-nav-wrapper">
								<ul class="footer-nav">
									<li><a href="<?php echo url('/')  ?>" aria-label="home">HOME</a></li>
									<li><a href="<?php echo url('/about') ?>" aria-label="about us">About Us</a></li>
									<li><a href="<?php echo url('/services') ?>" aria-label="services">Services</a></li>
									<li><a href="<?php  echo url('/terms-conditions') ?>" aria-label="T&C">T&C</a></li>
									<li><a href="<?php  echo url('/contact-us') ?>" aria-label="contact us">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<form action="">
								<input
									type="email"
									class="form-control"
									id="homeEmail"
									placeholder="Enter Your email"
									aria-describedby="emailHelp"
									pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$"
									title="enter valid email 'name@example.com'"
								/>
								<textarea
									class="form-control"
									id="homeMassage"
									rows="3"
									placeholder="Enter Your massage"
								></textarea>
								<button type="submit" class="btn">submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>