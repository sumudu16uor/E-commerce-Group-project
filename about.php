 
<?php
session_start(); 
// include("login/customer/includes/header.php");
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="about.css">
         
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
          <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travel9</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp;Travel9</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/project/index.php"><i class=""></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/campign.php#"><i class="fas fa-th-list mr-2"></i>Campign</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/project/hiking.php"><i class="fas fa-th-list mr-2"></i>Hiking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/project/swimming.php"><i class="fas fa-th-list mr-2"></i>Swimming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/diving.php"><i class="fas fa-th-list mr-2"></i>Diving</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/other.php"><i class="fas fa-th-list mr-2"></i>Other</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/project/about.php"><i class="fas fa-th-list mr-2"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/contact/contact.php"><i class="fas fa-th-list mr-2"></i>Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/login/customer/dashboard.php"><i class="fas fa-th-list mr-2"></i> <?php echo $_SESSION['f_name'];  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/login/login.php"><i class="fas fa-money-check-alt mr-2"></i>Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
     
        	 
        
        <section>
            <div class = "image">
                <!-- image here -->
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>Travelnine established in 2021. This is an e commerce web site that is sells camping, hiking, 
and diving items to customer. We provide our item’s details in our web site and customer can 
check our items and they can contact us and buy that items. There are many varieties of items we 
have. And also, they can deliver our items. We deliver our items 1 days to 7 days. And another 
important thing is we have some categorized items in our store. We categorized our items for 
children, men and women. We have categorized the items so that customers can easily chose the 
items they want, and we also have wide range of modern styles. </p>

                <ul class = "links">
                    <li><a href = "team.php" target="_self">TravelNine Team</a></li>

                    <div class = "vertical-line"></div>

                    <li><a href = "service.php" target="_self">service and location</a></li>

                    <div class = "vertical-line"></div>
                    
                    <li><a href = "#" target="_self">contact</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-github"></i>
                    </li>
                    <li>
                        <i class = "fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </section>

        <section class="footer spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="footer_about">
            <div class="footer_logo">
              <a href="index.html">Travel9<span>.</span></a>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
            <div class="footer_social">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="footer_widget">
            <h6>Quick Links</h6>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Blogs</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="footer_widget">
            <h6>Accounts</h6>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Order Tracking</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Wishlist</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-3">
          <div class="footer_widget">
            <h6>Support</h6>
            <ul>
              <li><a href="#">Frequently Asked Questions</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Report a Payment Issue</a></li>
              <li><a href="#">24/7 Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer_bottom text-center py-4">
    <p class="mb-0">
      Copyright Reserved 
      <a href="http://localhost/project/team.php">TravelNine Team</a>
    </p>
  </div>

        
    </body>
</html>