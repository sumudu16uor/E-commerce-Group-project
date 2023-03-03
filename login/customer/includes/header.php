
<!--
<header class="main header">
 <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            logo start
            <a href="index.html" class="logo"><b>Travelnine.xyz</b></a>
                
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li>Welcome <?php echo $_SESSION['f_name'];  ?> <a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      </header>
-->
  

  <!-- Navbar start-->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp;Travel9</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/project/index.php"><i class=""></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/campign.php#"><i class="fas fa-th-list mr-2"></i>Campign</a>
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
          <a class="nav-link" href="http://localhost/project/about.php"><i class="fas fa-th-list mr-2"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/contact/contact.php"><i class="fas fa-th-list mr-2"></i>Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/login/customer/dashboard.php"><i class="fas fa-th-list mr-2"></i>Welcome<br> <?php echo $_SESSION['f_name'];  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/login/login.php"><i class="fas fa-money-check-alt mr-2"></i>Logout</a>
        </li>

      </ul>
    </div>
  </nav>
 