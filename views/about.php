
<header class="header">
<?php include BASE_PATH . "/views/includes/navbar.php" ?>
</header>

<section class="white-section who-we-are">
			<div class="who-we-are-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-6 order-lg-1 order-2">
							<div class="row">
								<div class="col-lg-6 col-12 order-lg-1 order-2">
									<div class="about-img about-img-first">
										<img
											src="<?php echo self::asset("assets/photos/about/1.webp") ?>"
											alt="about us img one"
										/>
									</div>
								</div>
								<div class="col-lg-6 col-12 order-lg-2 order-1">
									<div class="about-img about-img-second pt-5 mb-lg-0 mb-3">
										<div
											class="about-stats d-flex justify-content-between align-items-center mb-5 px-5"
										>
											<div class="state years-state">
												<h5>+5</h5>
												<p>Years of experience</p>
											</div>
											<div class="state customer-state">
												<h5>1.1K</h5>
												<p>Happy customers</p>
											</div>
										</div>
										<img
											src="<?php echo self::asset("assets/photos/about/2.webp") ?>"
											alt="about us img two"
										/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 order-lg-2 order-1">
							<div class="about-us-content">
								<h4>who we are &#129309;</h4>
								<h3>What Is Global Travel Bureau</h3>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Officia blanditiis ex delectus optio minus a iusto culpa
									perspiciatis magni iste repellat fugit ad sapiente tempore
									molestiae inventore rerum, repellendus cupiditate fuga nulla!
									Facere earum cum quis provident ea maxime nemo obcaecati rerum
									repudiandae dolore voluptates, officia, dolor odio expedita
									modi.
								</p>
								<div>
									<ul>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="testmonial white-section">
			<div class="container">
				<div class="section-title">
					<h3 class="yellow-border-bottom">Testimonials</h3>
				</div>
				<div class="testmonial-slider">
					<div
						id="carouselExampleIndicators"
						class="carousel slide"
						data-bs-ride="carousel"
					>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="testmonial-data text-center">
									<h4>Jairo Criollo</h4>
									<span
										>Co-founder & Director - Business Development at Noria
										Energy</span
									>
								</div>
								<p class="text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Asperiores, facere!
								</p>
								<div class="rate text-center">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testmonial-data text-center">
									<h4>Maria john</h4>
									<span>Co-founder & Director at VOIS Energy</span>
								</div>
								<p class="text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Asperiores, facere!
								</p>
								<div class="rate text-center">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testmonial-data text-center">
									<h4>Christan Roues</h4>
									<span>Senior Frontend Developer at Microsoft Energy</span>
								</div>
								<p class="text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Asperiores, facere!
								</p>
								<div class="rate text-center">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php include BASE_PATH . "/views/includes/footer.php" ?>