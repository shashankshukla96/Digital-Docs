<?php
    session_start();
    session_destroy();
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>D-DOCS</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
</head>
<style type="text/css">
  
  .bttn{
    border-radius: 100px;
  }
  a .bttn{
  	border-radius: 100px;	
  }
</style>

<body class="blue-gradient">
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="index.html">Digital Docs </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#about">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container" >
      <div class="row">

        <div class="col-md-9 col-lg-8 col-xl-8">
          	<section class="form-elegant">
            	
            	<div class="row">

  	            <div class="col-md-12 col-lg-12 col-xl-12">

  	              <!--Form without header-->
  	              <div class="card ">

  	                <div class="card-body mx-7">

  	                  <!--Header-->
                      <form action="" method="POST">
    	                  <div class="text-center">
    	                    <h3 class="dark-grey-text mb-5"><strong>Log-in</strong></h3>
    	                  </div>

    	                  <!--Body-->
    	                  <div class="md-form form-lg">
    	                    <input type="text" id="Form-email" name="email" class="form-control form-control-lg">
    	                    <label for="Form-email">Your email</label>
    	                  </div>

    	                  <div class="md-form form-lg">
    	                    <input type="password" name="pass" id="Form-pass" class="form-control form-control-lg">
    	                    <label for="Form-pass">Your password</label>
    	                  </div>

    	                  <br><br>

    	                  <div class="text-center mb-3">
    	                    <button type="button submit" name="submit-btn" class="bttn btn blue-gradient btn-block btn-rounded z-depth-1a">Log in</button>
    	                  </div>
	                   </form>
	                  <br>
	                  <div class="text-center mb-3">
	                    <a href='register.php'><button type="button" class="bttn btn-danger btn red-gradient btn-block z-depth-1a">Register</button></a>
	                  </div>

	                </div>
	              </div>            
	            </div>          
          	
          	</div>
          	
        </section>
      </div>
      <hr>
      <div class="col-md-9 col-lg-4 col-xl-4">
          <section class="form-elegant">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 col-lg-12 col-xl-12">

              <!--Form without header-->
              <div class="card">

                <div class="card-body mx-7">

                  <!--Header-->
                  <form method="POST" action="">
                    <div class="text-center">
                      <h3 class="dark-grey-text mb-5"><strong>Search Person</strong></h3>
                    </div>

                    <!--Body-->
                    <div class="md-form form-lg">
                      <input type="text" id="Form-email-search" name="email-search" class="form-control form-control-lg">
                      <label for="Form-email-search">Your email</label>
                    </div>

                    <div class="md-form form-lg">
                      <input type="password" id="Form-pass-search" name="pass-search" class="form-control form-control-lg">
                      <label for="Form-pass-search">Your password</label>
                    </div>

                    <div class="md-form form-lg">
                      <input type="text" id="Form-contact" name="contact-search" class="form-control form-control-lg">
                      <label for="Form-contact">Search Contact</label>
                    </div>

                    <br><br>

                    <div class="text-center mb-3">
                      <button type="button submit" name="search-btn" class="bttn btn blue-gradient btn-block btn-rounded z-depth-1a">Search</button>
                    </div>

                  </form>
                </div>
              </div>            
            </div>          
          </div>
        </section>
      </div>
    </div>
  </div>
    <!-- Footer -->
  <footer class="page-footer font-small teal pt-4">
    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row" id="about">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <u><h5 class=" text-uppercase font-weight-bold">About</h5></u>
          <p class="text-uppercase font-weight-bold yellow-text">Welcome to world's first online document wallet, a place where you can store and access your
          documents and information, with the best security measures.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 documb-md-0 mb-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold"><u>Features</u></h5>
          <p class="text-uppercase font-weight-bold yellow-text">
          1. Online document wallet.<br>
          2. Online telephone directory.<br>
          3. Online address directory.
          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    

  </footer>
  <!-- Footer -->
  <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#">Shashank Techs.</a>
    </div>
    <!-- Copyright -->
  </footer>
    <!-- Footer -->
   
  <!--Modals-->

      <div class="modal fade" id="login-wrong" tabindex="-1" role="dialog" aria-labelledby="log-in-credential-wrong" aria-hidden="true">

                      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


          <div class="modal-content">
            <div class="modal-header">
              <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
              <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6 class="text-uppercase font-weight-bold text-black">
                Please check your log-in credentials and try again!!
              </h6>                        
            </div>
            <!-- <div class="modal-footer">
              <button type="button" id="btn-accept" data-dismiss='modal' class="btn btn-primary">Accept</button>
             --></div>
          </div>
        </div>


        <div class="modal fade" id="search-info" tabindex="-1" role="dialog" aria-labelledby="search-info-modal" aria-hidden="true">

                      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


          <div class="modal-content">
            <div class="modal-header">
              <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
              <button type="button"  class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="text-uppercase  text-black">Name:&nbsp <span id="name" class="font-weight-bold">No contact Found</span></p>
              <p class="text-uppercase  text-black">Mobile:&nbsp <span id="mobile" class="font-weight-bold">No contact Found</span></p>
              <p class="text-uppercase  text-black">Address:&nbsp <span id="address" class="font-weight-bold">No contact Found</span></p>

                           
            </div>
            <div class="modal-footer">
              <button type="button" id="" data-dismiss='modal' class="close-btn btn btn-primary">Close</button>
            </div>
          </div>
        </div>



      </div>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/js/mdb.min.js"></script>

    <script>
    new WOW().init();

    $(".close-btn").click(function(){
      
      location.href = 'db.php';
    });


    </script>

</body>

</html>
<?php 
  if(isset($_POST['search-btn']))
  {
    $db = "digital_docs";
    $user = "root";
    $passw = "";    

    $con = mysqli_connect("localhost", $user, $passw, $db) or die("Error");


    $sql = "select * from users where Email='".$_POST['email-search']."' and Password = '".$_POST['pass-search']."'";    
    $res = mysqli_query($con, $sql);

    if($res->num_rows > 0){
      $sql1 = $sql = "select * from users where Mobile='".$_POST['contact-search']."'";
      $res1 = mysqli_query($con, $sql1);

      if($res1->num_rows > 0)
      {

        
        //echo "<script>alert('Contact Not Founds.');</script>";
        while($row = $res1->fetch_assoc()) 
        {
          $info = "Name: ".$row['Name']."<br>Contact: ".$row['Mobile']."<br>Address: ".$row['Address'];

          echo "<script>
              $('#search-info').modal('show');
              $('#name').text('".$row['Name']."');
              $('#mobile').text('".$row['Mobile']."');
              $('#address').text('".$row['Address']."');</script>";
        }
      }
      else
      {
        echo "<script>$('#search-info').modal('show');</script>";   
      }
    }
    else
    {
      echo "<script>$('#login-wrong').modal('show');</script>";
    }

  }

  if(isset($_POST['submit-btn']))
  {

    $db = "digital_docs";
    $user = "root";
    $passw = "";    

    $con = mysqli_connect("localhost", $user, $passw, $db) or die("Error");

    $sql = "select * from users where Email='".$_POST['email']."' and Password = '".$_POST['pass']."'";    
    $res = mysqli_query($con, $sql);

    if($res->num_rows > 0){
      
      session_start();
      $_SESSION['email'] = $_POST['email'];
      echo "<script type='text/javascript'>location.href = 'login.php';</script>";
    }
    else
    {
      echo "<script>$('#login-wrong').modal('show');</script>";
    }
  }
?>