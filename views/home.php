       
<header class="header">
		<?php include BASE_PATH . "/views/includes/navbar.php" ?>
			<div class="main-intro-wrraper">
				<div class="main-intro">
					<div>
						<img
							srcset="
								./assets/photos/home/intro/intro.webp    1024w,
								./assets/photos/home/intro/introMop.webp  567w
							"
							sizes="(min-width: 768px) 1024px, 567px"
							src="<?php echo self::asset('assets/photos/home/intro/intro.webp') ?>"
							alt="tower and desk"
						/>
					</div>
					<div class="intro-center"><h1>Welcome To GTB</h1></div>
					<div class="intro-left"><h2>Where Every Trip Tells a Story.</h2></div>
				</div>
			</div>
        </header> 
		<section class="white-section slider">
			<div class="section-title">
				<div class="container">
					<h3 class="yellow-border-bottom">
						Finish your work from anywhere in the world
					</h3>
				</div>
			</div>
			<div class="section-slider mt-5">
				<div
					id="carouselExampleIndicators"
					class="carousel slide"
					data-bs-ride="carousel"
				>
					<div class="carousel-indicators">
						<button
							type="button"
							data-bs-target="#carouselExampleIndicators"
							data-bs-slide-to="0"
							class="active"
							aria-current="true"
							aria-label="Slide 1"
						></button>
						<button
							type="button"
							data-bs-target="#carouselExampleIndicators"
							data-bs-slide-to="1"
							aria-label="Slide 2"
						></button>
						<button
							type="button"
							data-bs-target="#carouselExampleIndicators"
							data-bs-slide-to="2"
							aria-label="Slide 3"
						></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img
								src="<?php echo self::asset("assets/photos/home/slider/1.webp") ?>"
								class="d-block w-100"
								alt="slider image 1"
							/>
						</div>
						<div class="carousel-item">
							<img
								src="<?php echo self::asset("assets/photos/home/slider/2.webp")  ?>"
								class="d-block w-100"
								alt="slider image 2"
							/>
						</div>
						<div class="carousel-item">
							<img
								src="<?php echo self::asset('assets/photos/home/slider/3.webp') ?>"
								class="d-block w-100"
								alt="slider image 3"
							/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="white-section">
			<div class="what-we-offer">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-6">
							<div>
								<img
									src="<?php echo self::asset("assets/photos/home/whoWeAre/meeting.webp") ?>"
									alt="some people in meeting table"
								/>
							</div>
						</div>
						<div class="col-md-7 col-lg-6">
							<div class="who-content">
								<h3>What We Offer:</h3>
								<h3>Your Gateway To The World</h3>
								<p>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Similique maiores perspiciatis, et excepturi inventore
									repudiandae libero, dignissimos quo enim unde id nulla facilis
									ipsa fugit assumenda voluptate nesciunt nemo, expedita beatae
									commodi voluptates iure consectetur? Expedita culpa
									perspiciatis deleniti neque error dolores aliquam ducimus.
									Saepe eligendi accusantium soluta nesciunt, repellendus ipsam,
									beatae quis eos ut molestiae minus non praesentium?
									Asperiores?
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section features">
			<div class="features-wrraper">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<div class="features-content">
							<h3 class="features-title">Features</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
								necessitatibus id aspernatur iste eveniet. Mollitia, totam iure
								aut unde nobis facilis deserunt nesciunt architecto quas
								reprehenderit, in ullam delectus ipsam.Lorem ipsum dolor sit
								amet consectetur adipisicing elit. Ut necessitatibus id
								aspernatur iste eveniet. Mollitia, totam iure aut unde nobis
								facilis deserunt nesciunt architecto quas reprehenderit, in
								ullam delectus ipsam.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-12">
						<div class="feature-points-wrapper">
							<div class="features-points">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="#f1"
											data-bs-toggle="tab"
											data-bs-target="#f1"
											type="button"
											role="tab"
											aria-controls="f1"
											aria-selected="true"
											aria-label="stars"
										>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												fill="currentColor"
												class="bi bi-stars"
												viewBox="0 0 16 16"
											>
												<path
													d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"
												/>
											</svg>
										</a>
										<div
											class="feature-details tab-pane fade show"
											id="f1"
											role="tabpanel"
											aria-labelledby="f1"
											tabindex="0"
										>
											<h4>Customer Service</h4>
											<span>
												<img
													src="<?php echo self::asset("assets/photos/home/features/Arrow.svg")  ?>"
													alt="arrow"
												/>
											</span>
											<p>
												Lorem ipsum, dolor sit amet consectetur adipisicing
												elit. Architecto, voluptas.
											</p>
										</div>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="#f2"
											data-bs-toggle="tab"
											data-bs-target="#f2"
											type="button"
											role="tab"
											aria-controls="f2"
											aria-selected="false"
											aria-label="house"
										>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												fill="currentColor"
												class="bi bi-house-fill"
												viewBox="0 0 16 16"
											>
												<path
													d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"
												/>
												<path
													d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"
												/>
											</svg>
										</a>
										<div
											class="feature-details tab-pane fade"
											id="f2"
											role="tabpanel"
											aria-labelledby="f2"
											tabindex="0"
										>
											<h4>Customer Service</h4>
											<span>
												<img
													src="<?php echo self::asset("assets/photos/home/features/Arrow.svg")  ?>"
													alt="arrow"
												/>
											</span>
											<p>
												Lorem ipsum, dolor sit amet consectetur adipisicing
												elit. Architecto, voluptas.
											</p>
										</div>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="#f3"
											data-bs-toggle="tab"
											data-bs-target="#f3"
											type="button"
											role="tab"
											aria-controls="f3"
											aria-selected="false"
											aria-label="lightbulb"
										>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												fill="currentColor"
												class="bi bi-lightbulb-fill"
												viewBox="0 0 16 16"
											>
												<path
													d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5"
												/>
											</svg>
										</a>
										<div
											class="feature-details tab-pane fade"
											id="f3"
											role="tabpanel"
											aria-labelledby="f3"
											tabindex="0"
										>
											<h4>Customer Service</h4>
											<span>
												<img
													src="<?php echo self::asset('assets/photos/home/features/Arrow.svg') ?>"
													alt="arrow"
												/>
											</span>
											<p>
												Lorem ipsum, dolor sit amet consectetur adipisicing
												elit. Architecto, voluptas.
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include BASE_PATH . "/views/includes/footer.php" ?>