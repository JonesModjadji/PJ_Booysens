<?php
include('_engine/check.php');
  $message = "";
 
  if (isset($_POST['submit'])) {
    
    $name = $_POST['projectname'];
    $description = $_POST['description'];
    $price = $_POST['cost'];
    $year = $_POST['year'];
   

    $target_dir = "img/works/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        $message ="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        $message= "File is not an image.";
        $uploadOk = 0;
      }

  // Check if file already exists
  if (file_exists($target_file)) {
    $message= "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $message= "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $message= "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // Check connection

        if($db === false){

          die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        $fileName =  basename( $_FILES["fileToUpload"]["name"]);
      $date = date('m/d/Y h:i:s', time());

        // Attempt insert query execution

        $sql = "INSERT INTO projects (project_name, description, cost, date_completed, image) VALUES ('$name', '$description', '$price', '$year', '$fileName')";

        if(mysqli_query($db, $sql)){

          $message= "Project inserted successfully.";

        } else{

          $message= "ERROR: Could not able to execute $sql. " . mysqli_error($db);

        }



        // Close connection


      $message= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      $message= "Sorry, there was an error uploading your file.";
    }
  }


  }
  
   if (isset($_POST['submit2'])) {
    
    $name = $_POST['projectname'];
    $description = $_POST['description'];
    $price = $_POST['cost'];
    $year = $_POST['year'];
   

    $target_dir = "img/works/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        $message ="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        $message= "File is not an image.";
        $uploadOk = 0;
      }

  // Check if file already exists
  if (file_exists($target_file)) {
    $message= "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $message= "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $message= "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // Check connection

        if($db === false){

          die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        $fileName =  basename( $_FILES["fileToUpload"]["name"]);
      $date = date('m/d/Y h:i:s', time());

        // Attempt insert query execution

         $sql = "UPDATE projects SET image = '$fileName' WHERE project_name ='$name'";


        if(mysqli_query($db, $sql)){

          $message= "Project inserted successfully.";

        } else{

          $message= "ERROR: Could not able to execute $sql. " . mysqli_error($db);

        }



        // Close connection


      $message= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      $message= "Sorry, there was an error uploading your file.";
    }
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
                <li class="active"><a href="uploads.php">Project Uploads</a></li>
                <li ><a href="content_update.php">Web Update</a></li>
                
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
              <h2 class="h-bold">Projects Uploads.</h2>
              <div class="divider-header"></div>
              <p style="color: green;"> <?php echo $message; ?></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">


      <div class="row" >

        
        <form action="" method="post" enctype="multipart/form-data">
        <div  class="col-md-4">
          <div class="form-group">
             
             <input type="text" name="projectname" id="projectname" placeholder="Project Name" required="required">
         </div>
         
          
           
           <div class="form-group">
            <label for="comment">Project Description:</label>
              <textarea class="form-control" rows="3" cols="2" id="comment" name="description" required></textarea>
           </div> 
        </div>
        <div  class="col-md-4" >
          <div class="form-group">
            
          <input type="text" id="cost" name="cost" placeholder="Project cost" required="required">
        </div>
        <div class="form-group">
            
          <input type="text" id="year" name="year" placeholder="Project year"  required="required">
          </div>



         

        </div>

        <div  class="col-md-4" >
               <div class="form-group">
            <label for="image">Upload project Image:</label>
          <input type="file" name="fileToUpload" id="fileToUpload" required="required">
          </div>

          <div class="form-group">
            
          <input type="submit" name="submit" value="Add Project">
          <input type="submit" name="submit2" value="Update Project">
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
