<?php
  require('_engine/connection.php');
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PJ Booysen Electrical (PTY) Ltd.</title>

  <!-- css -->
	
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">
	
  <!-- =======================================================
     Project Name: PJ Booysen
    Company URL: https://pjbooysen.co.za
    Author: Lance Tshikota
    Author URL: https://lancewebs.co.za
  ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <section id="intro" class="home-slide text-light">

    <!-- Carousel -->
    

  </section>
  <!-- /Section: intro -->


  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="site-logo">
              <a href="index.php" class="brand"><img src="img/LOGO-1.png"/>  </a>
            </div>
          </div>


          <div class="col-md-6">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#works">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- /.Navbar-collapse -->

          </div>
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <!-- /Navigation -->
           <?php
		   $id = $_GET['id'];
            $sql = "SELECT * FROM projects WHERE id = $id"; 
            
          $result = $db->query($sql);
      
              if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           echo '<section id="works" class="home-section color-dark text-center bg-white" style="padding-bottom:20px;">
	  <br><br>
    <div class="contentHolder">
      <br><br>
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
             <center><h2 class="h-bold"><u>'.$row["project_name"].'</h2></u></center>
              
              <center><p>Below here is the projects information.</p></center>
          </div>
		<div class="container" style="padding-bottom:60px;">
		<div class="row">
        
        <div class="autoplay">
		
		
		<div class="col-md-6">
            
              <div class="img-sec">
                <img src="img/works/'.$row["image"].'" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>'.$row["project_name"].'</h3>
                <p class="marb-20">
                  '.$row["description"].'<br>
                '.$row["cost"].' , '.$row["date_completed"].'</p>
                
              </div>
            
          </div>';        }
      }
      else
      {
        echo '<div class="section-heading text-center">
              
              
              <p>No projects Added yet.</p>
            </div>';
      }
          ?>
          
</div>
      </div>

    </div>
		
	  </div>
    <br><br>
    </div>
  </section>
  <!-- /Section: works -->

  <footer>
  <div style="margin-top:-20px;">
            <a href="#intro" class="totop"><i class="fa fa-angle-up fa-3x"></i></a>
            <p>&copy; <img src="img/logo_inuse.png" width="180"> - All Rights Reserved
              </p>
              <ul><li><a href="login.php">Admin Login</a></li></ul>
              </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
