<!DOCTYPE html>
<html>
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

    
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    </head>
    <body>

        
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="Img/Saint_Logo-removebg-preview.PNG" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Event1.php">Events</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>

        <!--contact-->
        <section class="contact">
            <div class="content">
                <h2> Contact Us </h2>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-map-marker" ></i></div>
                        <div class="text">
                            <h3> Address </h3>
                            <p>RMD Sinhgad School of Engineering, Warje, Pune</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-envelope"></i></div>
                        <div class="text">
                            <h3> Email </h3>
                            <p> saintrmd24@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-earphone"></i></div>
                        <div class="text">
                            <h3> Phone </h3>
                            <p>.........</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="process.php" method="post">
                        <h2> Send Message</h2>
                        <div class="inputBox">
                            <input type ="text" name ="fname" required="required">
                            <span> Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type ="text" name ="email" required="required">
                            <span> Email</span>
                        </div>
                        <div class="inputBox">
                            <input type ="tel" name ="mobile" required="required">
                            <span> Mobile</span>
                        </div>
                        <div class="inputBox">
                            <textarea name = "message" required="required"></textarea>
                            <span> Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type ="submit" name =" " value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>