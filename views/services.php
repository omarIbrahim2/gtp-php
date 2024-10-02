
<header class="header">
<?php include BASE_PATH . "/views/includes/navbar.php" ?>

<section class="service-hero">
    <div class="service-hero-content">
        <h1>Where do you plan to go?</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, nobis. Fuga esse totam fugiat nemo eaque adipisci accusamus cumque modi! Non saepe quos earum, odit beatae recusandae nihil neque inventore?</p>
    </div>
</section>

</header>

<section class="services">
    <h2 class="yellow-border-bottom">Our main services include</h2>
    <p class="service-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
    
    <div class="service-cards">
        <div class="services-card">
            <div class="icon"><img src="<?php echo self::asset("assets/photos/services/car-rental-icon.svg") ?>" alt="Car Rental Icon"></div>
            <h3>Car Rental</h3>
            <p>Rent a car with or without a driver, choosing from a variety of vehicles to meet your transportation needs.</p>
        </div>

        <div class="services-card">
            <div class="icon"><img src="<?php echo self::asset("assets/photos/services/hotel-reservation-icon.")?>svg" alt="Hotel Reservation Icon"></div>
            <h3>Hotel Reservation</h3>
            <p>Choose from business-friendly hotels, conveniently located near conference centers and offering all the amenities you need for a comfortable stay.</p>
        </div>

        <div class="services-card">
            <div class="icon"><img src="<?php echo self::asset("assets/photos/services/meeting-room-icon.svg")?>" alt="Meeting Room Icon"></div>
            <h3>Meeting Room Booking</h3>
            <p>Fully equipped meeting rooms are available for your business meetings, seminars, and conferences, ensuring a professional environment for your event.</p>
        </div>

        <div class="services-card">
            <div class="icon"><img src="<?php echo self::asset("assets/photos/services/airline-ticket-icon.svg")?>" alt="Airline Ticket Booking Icon"></div>
            <h3>Airline Ticket Booking</h3>
            <p>We offer a range of airline options, helping you compare prices and book tickets that suit your schedule and budget.</p>
        </div>

        <div class="services-card">
            <div class="icon"><img src="<?php echo self::asset("assets/photos/services/tours-icon.svg")?>" alt="Organizing Tours Icon"></div>
            <h3>Organizing Tours</h3>
            <p>Explore the city or region where your event is held with short, expertly organized tours, tailored to fit your schedule.</p>
        </div>
    </div>
</section>

<?php include BASE_PATH . "/views/includes/footer.php" ?> 