<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link --> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">VoyageVista</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->

<!-- home section starts -->

<section class="home">
 
    <div class="swiper home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(../TravelAgency_project/images/pool.jpg)" no-repeat>
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background: url(../TravelAgency_project/images/desert.jpg)" no-repeat>
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background: url(../TravelAgency_project/images/icey.jpg)" no-repeat>
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- services section starts --> 

<section class="services">

    <h1 class="heading-title">our services</h1>

    <div class="box-container">

    <div class="box">
        <img src="../TravelAgency_project/images/adventure (1).png" alt=" ">
        <h3>adventure</h3>
    </div>

    <div class="box">
        <img src="../TravelAgency_project/images/tour-guide (1).png" alt=" ">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src="../TravelAgency_project/images/trekking (1).png" alt=" ">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src="../TravelAgency_project/images/bonfire (1).png" alt=" ">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src="../TravelAgency_project/images/direction-sign (2).png" alt=" ">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src="../TravelAgency_project/images/camping (1).png" alt=" ">
        <h3>camping</h3>
    </div>

    </div>
</section>

<!-- services section ends -->

<!-- home about section starts --> 

<section class="home-about">

    <div class="image">
        <img src="../TravelAgency_project/images/about-us (1).jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>At VoyageVista, we're not just in the business of booking trips; we're passionate explorers and wanderlust enthusiasts. Our mission is simple: to turn your travel dreams into reality. With a dedication to exceptional service, personalized itineraries, and a touch of adventure, we're here to make your journey unforgettable. Let's embark on this incredible adventure together, one destination at a time.</p>
        <p> Your dream vacation starts here.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>



<!-- home about section ends -->

<!-- home packages sections starts -->

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="../TravelAgency_project/images/london (1).jpg" alt="">
        </div>
        <div class="content">
            <h3>London</h3>
            <p>Discover the charm of London with our package. Explore historic landmarks, world-class museums, and vibrant neighborhoods. Package includes flights, accommodation, and sightseeing tours.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../TravelAgency_project/images/Usa (1).jpg" alt="">
        </div>
        <div class="content">
            <h3>United States of America</h3>
            <p>Experience the diversity of the USA with our package. Visit major cities, national parks, and iconic attractions. Package includes flights, accommodation, and city tours.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../TravelAgency_project/images/dubai (1).jpg" alt="">
        </div>
        <div class="content">
            <h3>Dubai</h3>
            <p>Explore the glitzy city of Dubai with our package. Enjoy luxury shopping, iconic landmarks, and desert adventures. Package includes flights, accommodation, and thrilling activities.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

</div>

<div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>

<!-- home packages sections starts -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>
"Half-price travel packages - your gateway to adventure at half the cost. Book now for incredible savings!"</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>



<!-- home offer section ends -->



<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 99-999-990</a>
            <a href="#"><i class="fas fa-phone"></i> +91 99-999-990</a>
            <a href="#"><i class="fas fa-envelope"></i> Vaishnavi007@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Ahmedabad, India - 380361</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-f"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-f"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin-f"></i> LinkedIn</a>
        </div>
    </div>
    <div class="credit">Created by <span>Sahil R & Vaishnavi</span> | All rights reserved!</div>
</section>
<!-- footer section ends -->


 








<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 

<!-- custom js file link -->
<script src="../TravelAgency_project/javascript.js"></script>
</body>
</html>
