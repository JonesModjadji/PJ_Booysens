<?php
include('_engine/check.php');
  $message = "";

  if (isset($_POST['submit'])) {
    
    $welcomePage = $_POST['welcome'];
    $about = $_POST['about'];
    
    $status = $welcomePage;
   $sql = "UPDATE web_content SET welcome='$status', about_us='$about' WHERE id=1";
    
            $result = $db->query($sql);
            if (mysqli_query($db,$sql)) {
              $message = "Successfully updated";
            }
            else
            {
              $message = "Sorry we could not update data now, please try again later";
            }
    


  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PJB | Uploads</title>

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
                <li><a href="uploads.php">Project Uploads</a></li>
                <li class="active"><a href="content_update.php">Web Update</a></li>
                
				  <li><a href="_engine/logout.php">Logout</a></li>
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

	<section id="home" class="home-section color-dark bg-white" >
    <div class="contentHolder" style="width: 85%; margin-left: 7.5%;">
      <br><br>
    <div class="container marginbot-50" >
      <div class="row">
        <div class="col-lg-10 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Web Site Content Update.</h2>
              <div class="divider-header"></div>
              <p style="color: green;"> <?php echo $message; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">


      <div class="row" >
        <?php
            $welcomePage = " ";
            $aboutUs = " ";

            $sql = "SELECT * FROM web_content WHERE id='1'"; 
            $result = $db->query($sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  if ($result->num_rows > 0) {

                  $welcomePage = $row['welcome'];
                  $aboutUs = $row['about_us'];
                  
              
            }
          ?>
        
        <form action="" method="post" enctype="multipart/form-data">
        <div  class="col-md-6">
          
         
          
           
           <div class="form-group">
            <label for="comment">Welcome Page:</label>
              <textarea class="form-control"  rows="10" cols="2" id="welcome" name="welcome" required="required"><?php echo $welcomePage;?></textarea>
           </div> 
        </div>
        <div  class="col-md-6" >
         <div class="form-group">
            <label for="comment">About Page:</label>
              <textarea class="form-control" rows="10" cols="2" id="aboutpage" name="about" required="required"><?php echo $aboutUs;?></textarea>
           </div> 
       



         

        </div>

        <div  class="col-md-12" >
            
            <input type="submit" name="submit" value="Update Site Content">
          <div class="form-group">
            
          
          </div>
           </div>
        </form>

      </div>
    </div>
    <br><br>
</div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#intro" class="totop"><i class="fa fa-angle-up fa-3x"></i></a>
            <p>&copy; <img src="img/logo_inuse.png" width="180"> - All Rights Reserved</p>
            
          </div>
        </div>
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
