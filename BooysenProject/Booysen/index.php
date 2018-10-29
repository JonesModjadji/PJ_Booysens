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

	<section id="home" class="home-section color-dark bg-white">
    <div class="contentHolder">
      <br><br>
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <center><h2 class="h-bold"><u>WELCOME TO P.J BOOYSEN ONLINE.</u></h2></center>
              
              <center><p> PJ Booysen Electrical (PTY) Ltd</p></center>
    </div>
 <div style="display:block; padding-left:40px; padding-right:20px;" >
          <?php

            $sql = "SELECT welcome FROM web_content WHERE id='1'"; 
            $result = $db->query($sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  if ($result->num_rows > 0) {

                  $content= explode("*", $row['welcome']);
					  
					  
						  echo $content[0];
					  echo "<ul>";
					  for($x=1; $x<count($content); $x++)
					  {
						   echo "<li>".$content[$x]."</li>";
					  }
					  echo "<ul>";
					  
              
            }
          ?>

          
          

        </div>
   
    <br><br>
</div>
  </section>
  <!-- /Section: about -->
	
  <!-- Section: about -->
  <section id="about" class="home-section color-dark bg-white">
	  <br><br>
    <div class="contentHolder" >
      <br><br>
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold"><u>About Us</u></h2>
              
              <p>PJ Booysen was established in 2013. </p>
            </div>
          </div>
        <div style="display:block; padding-left:40px; padding-right:20px;" >
          
          <?php

            $sql = "SELECT about_us FROM web_content WHERE id='1'"; 
            $result = $db->query($sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  if ($result->num_rows > 0) {

                  
                  $content= explode("*", $row['about_us']);
					  
					  
						  echo $content[0];
					  echo "<ul>";
					  for($x=1; $x<count($content); $x++)
					  {
						   echo "<li>".$content[$x]."</li>";
					  }
					  echo "<ul>";
					  
					  
              
            }
          ?>

        </div>
    
    <br><br>
    </div>
  </section>
  <!-- /Section: about -->


  


  <!-- Section: works -->
  <section id="works" class="home-section color-dark text-center bg-white" style="padding-bottom:20px;">
	  <br><br>
    <div class="contentHolder">
      <br><br>
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
             <center><h2 class="h-bold"><u>Completed Projects</h2></u></center>
              
              <center><p>Below are all successfully completed projects.</p></center>
          </div>
		<div class="container" style="padding-bottom:60px;">
		<div class="row">
        
        <div class="autoplay">
          <?php

            $sql = "SELECT * FROM projects WHERE date_completed<'2018'"; 
            $result = $db->query($sql);
      
              if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
			  $id = $row['id'];
			  
           echo '
              <div class="fig-caption">
                <h3><a href="info.php?id='.$id.'">'.$row["project_name"].'</a></h3></div>
          ';
        }
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
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold"><u>Current Projects</h2></u>
              
              <p>Below are all our current projects.</p>
            </div>
          </div>
		<div class="container" style="padding-bottom:60px;" >
        
        <div class="autoplay">
          <?php
 
            $sql = "SELECT * FROM projects WHERE date_completed>='2018'"; 
            $result = $db->query($sql);
      
              if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
			  $id = $row['id'];
           echo '
            
              <div class="fig-caption">
                <h3><a href="info.php?id='.$id.'">'.$row["project_name"].'</a></h3>
              
            
          </div>';
        }
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
    <br><br>
    </div>
  </section>
  <!-- /Section: works -->

  <!-- Section: contact -->
  <section id="contact" class="home-section color-dark bg-white">
	  <br><br>
    <div class="contentHolder">
      <br><br>
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold"><u>Contact us</h2></u>
              
              <p>We will be in touch.</p>
            </div>
          </div>
    <div class="container">
<div id="map" class="col-md-8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.0863771108684!2d28.225519315019824!3d-25.701563983664112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebfdf3e4840e48d%3A0xf1dd2f53d77a6b4c!2s933+Louis+Trichardt+St%2C+Rietfontein%2C+Pretoria%2C+0084!5e0!3m2!1sen!2sza!4v1527686269100" width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div style="margin-right:15vw; ">
<?php

            $sql = "SELECT * FROM contacts WHERE id='1'"; 
            $result = $db->query($sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  if ($result->num_rows > 0) {

                  
                  echo "<p><h2>Contact Details:</h2> <br>
          PJ Booysen Electrical Projects<br><br>
          Address:  ".$row['address']."<br><br>

          Tel:  ".$row['tel']."<br><br>
          Email  ".$row['email']."<br><br>
             </p>";
              
            }
          ?>
          </div>
    </div>
    <br><br>
    </div>

  </section>
  <!-- /Section: contact -->


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
