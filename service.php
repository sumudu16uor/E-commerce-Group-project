
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="service.css">
        
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
          <a class="nav-link " href="http://localhost/project/campign.php#"><i class="fas fa-th-list mr-2"></i>Campign</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/hiking.php"><i class="fas fa-th-list mr-2"></i>Hiking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/swimming.php"><i class="fas fa-th-list mr-2"></i>Swimming</a>
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
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
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
                <h2> Services </h2>
                <span><!-- line here --></span>
                <br>
                
                <h4>provide Warranty assured for related products.</h4><br>
                <h4> Customize the orders in order to customer requirements.</h4><br>
                 <h4>Provide the home delivery service to customer. </h4><br>
                 <h4>provide the best equipment’s available to travelers at an affordable price. </h4><br>
                  <br>
                 <div>
                    <p>You can get the location here :<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.3667241592007!2d80.54708181375426!3d5.944093795694159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1392a02182fa7%3A0x50990e3c3e21cd12!2sMatara%20Bus%20Stand%2C%20Matara!5e0!3m2!1sen!2slk!4v1625385119739!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                </div>
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
       
    </body>
</html>