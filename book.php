<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <!--custome css file -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!--  header section start -->

<section class="header">

<a href="home.php"  class="logo"> travel.</a>

<nav class="navbar">
    <a href="home.php"> home</a>
    <a href="about.php"> about</a>
    <a href="package.php">  package</a>
    <a href="book.php"> book</a>
</nav> 

<div id="menu-btn" class="fas fa-bars"></div>


</section>


<!--  header section ends -->

<div class="heading" style="background:url(image/ribblehead-viaduct-2443085__340.jpg)no-repeat">
<h1> booking here
</h1>

</div>
<!-- form starts here -->
<section class="booking">
  <h1 class="heading-title">book your trip</h1>
  <form action="book_form.php" method="post" class="book-form">
  <div class="flex">
    <div class="inputBox">
      <span>Name:</span>
      <input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
      <span>Email:</span>
      <input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputBox">
      <span>phone:</span>
      <input type="number" placeholder="enter your phone" name="phone">
    </div>
    <div class="inputBox">
      <span>Address:</span>
      <input type="text" placeholder="enter your address" name="address">
    </div>
    <div class="inputBox">
      <span>where to:</span>
      <input type="text" placeholder=" you want to visit" name="location">
    </div>
    <div class="inputBox">
      <span>how many :</span>
      <input type="text" placeholder="number of guests" name="guests">
    </div>
    <div class="inputBox">
      <span>arival:</span>
      <input type="date" placeholder="when" name="arival">
    </div>
    <div class="inputBox">
      <span>leaving:</span>
      <input type="date" placeholder="when"   name="leaving">
    </div>
  </div>
 
     <input type="submit" value="submit" class="btn" name="send">

  </form>
</section>
<!-- form starts here -->
<!-- footer section starts -->
<section class="footer">


<div class="box-container">
 
      <div class="box">
    <h2> quick link</h2> 
       <a href="home.php"><i class="fas fa-angle right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle right"></i>  about</a>
        <a href="package.php"> <i class="fas fa-angle right"></i>  package</a>
        <a href="book.php"><i class="fas fa-angle right"></i>  book</a>
    </div>
    <div class="box">
    <h2> Ask question</h2> 
       <a href="#"><i class="fas fa-angle right"></i> about us</a>
        <a href="#"><i class="fas fa-angle right"></i>  policy</a>
    </div>
    <div class="box">
    <h2> contact</h2> 
       <a href="#"><i class="fas fa-phone"></i>phone  8218160184</a>
       <a href="#"><i class="fas fa-envelope"></i>email  paramjeetmalik36@gmail.com</a>
       <a href="#"><i class="fas fa-map"></i>address- its ghaziabad mohannagar</a>
    </div>
    <div class="box">
    <h2> follow on</h2> 
       <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
       <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    </div>
   

</div>
<div class="credit">
      <h1>  CREATE BY <span> PARAMJEET MALIK</span></h1>
    </div>




</section>
<!-- fotter section ends -->

<!-- swipper js  link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- custome js file link -->
<script src="js/script.js"></script>
      

</body>
</html>