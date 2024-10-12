<header class="header">
  <?php include BASE_PATH . "/views/includes/navbar.php" ?>
</header>


<section class="contact">
			<div class="contact-wrapper">
				<div class="intro-title intro-title-bg">
					<div class="section-title text-center">
						<h3 class="yellow-border-bottom">Contact Us</h3>
					</div>
				</div>
				<div class="contact-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12">
								<form action="<?php echo url('/send')   ?>" method="POST"  class="mb-5">
							     
							
								   <?php echo error('email') ?>
								   <input
										type="email"
										class="form-control"
										id="contactMail"
										name="email"
										placeholder="Email"
                                        title="enter valid email 'name@example.com'"
									/>
									<?php echo error('name') ?>
									<input
										type="text"
										class="form-control"
										id="contactName"
										name="name"
										placeholder="Full Name"
                                        title="enter valid name 'john smith'"
									/>
									<?php echo error('phone')  ?>
									<input
										type="text"
										class="form-control"
										id="contactPhone"
										placeholder="+201002596951"
										name="phone"
                                        title="enter valid Phone number with the country key '+201002596951'"
									/>
									<?php echo error('message') ?>
									<textarea
										class="form-control"
										id="contactMassage"
										rows="3"
										name="message"
										placeholder="massage"
									></textarea>
									<div class="form-control form-control-btn">
										<button type="submit" class="btn">submit</button>
									</div>
								</form>
							</div>
							<div class="col-md-6 col-12">
								<div class="map-container">
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25280141577!2d-73.81487750344512!3d40.69763123286593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z2YbZitmI2YrZiNix2YPYjCDYp9mE2YjZhNin2YrYp9iqINin2YTZhdiq2K3Yr9ip!5e0!3m2!1sar!2seg!4v1726966091548!5m2!1sar!2seg"
										style="border: 0"
										allowfullscreen=""
										loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"
									></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>






<?php include BASE_PATH . "/views/includes/footer.php" ?> 