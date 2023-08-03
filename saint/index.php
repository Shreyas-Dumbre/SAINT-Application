<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title> RMDSSOE Saint </title>
</head>
<body>
    <!--Header-->
    <?php
    include("header.php");
    ?>

    <!-- BANNER SECTION -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="promo-title">RMDSSOE SAINT</p>
            <p>SAINT is a first-of-its-kind community program that fosters a culture of competitiveness, learning, and growth and aims to create an environment that provides an opportunity for students to showcase their talent and skills. With the program, we aim to create a community that becomes self-sufficient in the future and stays for years on your campus.</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="Img/home2.png" alt="Homepage_image" class="img-fluid">
          </div>
        </div>
      </div>
      <img src="Img/wave1.png" alt="Wave" class="bottom-img">
    </section>

    <!-- SERVICES -->
    <section id="services">
      <div><h1 class="title text-center">WHAT WE DO?</h1></div>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4 services">
            <img src="Img/service1.png" alt="Service1" class="service-img">
            <h4>Provide platform</h4>
            <p>Provide a platform for students to showcase their skills and talent across domains</p>
          </div>
          <div class="col-md-4 services">
            <img src="Img/service2.png" alt="Service1" class="service-img">
            <h4>Facilitate & Collaborate</h4>
            <p>Facilitate and collaborate with entities on-campus and off-campus to create opportunities for students.</p>
          </div>
          <div class="col-md-4 services">
            <img src="Img/service3.png" alt="Service1" class="service-img">
            <h4>Build Club</h4>
            <p>Form a small student team in every college that catalyzes the elements of change and during the process, each member of the team brings out the leader in them at the forefront.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT US -->
    <section id="about-us">
      <div><h1 class="title text-center">WHY CHOOSE US?</h1></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 about-us">
            <p class="about-title"> Why we're Different</p>
            <ul>
              <li>Ignite the spirit of competitiveness amongst students</li>
              <li>Provide a platform for students to showcase their skills and talent across domains</li>
              <li>Facilitate and collaborate with entities on-campus and off-campus to create opportunities for students</li>
              <li>Form a small student team in every college that catalyzes the elements of change and during the process, each member of the team brings out the leader in them at the forefront</li>
              <li>Lead a team of dedicated, passionate and committed individuals that care about your college, students and the community in general</li>
              <li>Keep the spirit of competitiveness high by collaborating with, and supporting various other clubs on campus</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="Img/network.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- SOCIAL MEDIA -->

    <section id="social-media">
      <div><p class="title text-center">FIND US ON SOCIAL MEDIA</p></div>
      <div class="container">
        <div class="social-icons">
          <a href=""><img src="Img/instagram-icon.png" alt=""></a>
          <a href=""><img src="Img/linkedin-icon.png" alt=""></a>
          <a href=""><img src="Img/twitter-icon.png" alt=""></a>
          <a href=""><img src="Img/whatsapp-icon.png" alt=""></a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <section id="footer">
      <img src="Img/wave2.png" alt="" class="footer-img">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-box">
            <img src="Img/Saint_Logo-removebg-preview.PNG" alt="">
            
          </div>
          <div class="col-md-6 footer-box">
            <p><b>CONTACT US</b></p>
            <p><i class="fa fa-map-marker"></i>RMD SAINT</p>
            <p><i class="fa fa-phone"></i>+91..........</p>
            <p><i class="fa fa-envelope"></i>saintrmd24@gmail.com</p>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright's reserved to RMDSSOE SAINT</p>
      </div>
    </section>

    <!-- SMOOTH SCROLL -->
    <script src="smooth-scroll.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html>