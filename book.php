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

<div class="heading" style="background:url(../TravelAgency_project/images/booknow1.jpg) no-repeat">
    <h1>book now</h1>
</div> 


<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
        

        <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
        </div>

        <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
        </div>

        <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
        </div>

        <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location" required>
        </div>

        <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
        </div>

        <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" required>
        </div>

        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required>
        </div>
    </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>


<!-- booking section ends -->




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
