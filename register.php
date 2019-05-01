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
    <title>D-DOCS-Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"> -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
      #profile{
        height: 200px;
        width: 200px;
      }
      #bbttnn{
       
      }
    </style>
</head>

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
  <form action="sign-up.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <!-- Card -->
          <div class="card card-sm testimonial-card">
          
            <!-- Background color -->
            <div class="card-up indigo lighten-1"></div>

            <!-- Avatar -->
            <div class="avatar mx-auto white">
            
              <input type="file" hidden="hidden" name="image" id="proPic">          
              <button class="btn white" id="bbttnn">
                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" id="profile" alt="Profile Pic">
              </button>
            </div>
            <div class="card-body">
            
            <h4 class="card-title">Fill the complete form to register.</h4>
              <hr>
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="text" id="Form-pass1-name" required="required" class="form-control form-control-sm" name="name" value="">
                    <label for="Form-pass1">Name</label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="number" id="Form-pass1-age" required="required" class="form-control form-control-sm" name="age" value="">
                    <label for="Form-pass1">Age</label>
                  </div>
                </div>
              </div>


              <!-- ROW 2 -->

              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="email" id="Form-pass1-email" required="required" class="form-control  form-control-sm" name="email" value="">
                    <label for="Form-pass1">E-mail</label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="number" id="Form-pass1-mobile" name="mobile" required="required" class="form-control form-control-sm" value="">
                    <label for="Form-pass1">Mobile</label>
                  </div>
                </div>
              </div>


              <!-- ROW 3 -->
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="password" id="Form-pass1-pass" required="required" class="form-control form-control-sm" name="pass" value="">
                    <label for="Form-pass1">Password</label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="password" id="Form-pass1-pass-confirm" required="required" name="pass-confirm" class="form-control form-control-sm" value="">
                    <label for="Form-pass1">Confirm password</label>
                  </div>
                </div>
              </div>

              <!-- ROW 4 -->
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="text" id="Form-pass1-father" required="required" class="form-control form-control-sm" name="father" value="">
                    <label for="Form-pass1">Father's name</label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="text" id="Form-pass1-mother" name="mother" required="required" class="form-control form-control-sm" value="">
                    <label for="Form-pass1">Mother's name</label>
                  </div>
                </div>
              </div>

              <!-- ROW 5 -->
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="md-form form-sm">
                    <input type="text" id="Form-pass1-date" name="date" required="required" class="datepicker form-control form-control-sm" value="">
                    <label for="Form-pass1">Date of birth</label>
                  </div>
              </div>
            </div>
            <!--Row 6-->
            <div class="row">
              <div class="col-lg-12 col-md-13 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-address" name="address" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1">Full Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-city" name="city" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1">City</label>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-state" name="state" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1">State</label>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-pin" name="pin" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1">Pin-code</label>
                </div>
              </div>
            </div>   

            <hr class="seperator">
            <br>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <label><b><u>Highest Qualification</u></b></label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">
                <select class="browser-default custom-select" name="qual">
                  <option selected="selected" value="No education">No education</option>
                  <option value="High-school">High-school</option>
                  <option value="Intermediate">Intermediate</option>
                  <option value="Graduation">Graduation</option>
                  <option value="Post Graduation">Post Graduation</option>
                  <option value="Doctorate">Doctorate</option>
                </select>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <label><b><u>Work</u></b></label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8" >
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" value="Public" id="public" name="work">
                  <label class="custom-control-label" for="public">Public Sector</label>
                </div>
                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="private" value="Private" name="work">
                  <label class="custom-control-label" for="private">Private Sector</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-dept" name="dept" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-dept">Department of work</label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-title" name="title" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-title">Job title</label>
                </div>
              </div>
            </div>


            <hr class="seperator">
            
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                  <!--Dropdown primary-->
                <div class="dropdown">

                  <!--Trigger-->
                  <button style="width: 100%;" class="btn btn-primary btn-md dropdown-toggle" type="button" id="thumbDropdown" data-toggle="dropdown" aria-haspopup="true" value="123" aria-expanded="false">Thumb</button>
                  <input type="text" hidden id="thumb-text" name="thumb-type" value="123">  


                  <!--Menu-->
                  <div class="dropdown-menu dropdown-primary">
                    <button class="dropdown-item thumb-drop" value="Left">Left Thumb</button>
                    <button class="dropdown-item thumb-drop" value="Right">Right Thumb</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="thumb">View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="thumb-file-trigger" value="Select File" name="thumb-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="thumb-file-trigger">Upload Thumb Impression</label>
                  <input type="file" name="thumb" id="thumb-file-input" hidden="hidden">
                </div>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-md btn-primary" id="pan-btn" style="width: 100%;">Browse</button>
              </div>


              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="pan">View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="pan-file-trigger" value="Pan Card File" name="pan-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="pan-file-trigger">Upload Pan Card</label>
                  <input type="file" name="pan" id="pan-file-input" hidden="hidden">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-md btn-primary" id="adhar-btn" style="width: 100%;">Browse</button>
              </div>


              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="adhar">View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="adhar-file-trigger" value="Adhar Card File" name="adhar-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="adhar-file-trigger">Upload Adhar Card</label>
                  <input type="file" name="adhar" id="adhar-file-input" hidden="hidden">
                </div>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-md btn-primary" id="dl-btn" style="width: 100%;">Browse</button>
              </div>


              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="dl" >View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="dl-file-trigger" value="Driver's Licence" name="dl-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="dl-file-trigger">Upload Driver's Licence</label>
                  <input type="file" name="dl" id="dl-file-input" hidden="hidden">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-md btn-primary" id="passport-btn" style="width: 100%;">Browse</button>
              </div>


              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="passport">View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="passport-file-trigger" value="Passport" name="passport-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="passport-file-trigger">Upload Passport front page</label>
                  <input type="file" name="passport" id="passport-file-input" hidden="hidden">
                </div>
              </div>

              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-md btn-primary" id="bank-btn" style="width: 100%;">Browse</button>
              </div>


              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <button type="button" class="view-btn btn btn-md btn-primary" value="bank">View</button>
              </div>

              <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <div class="md-form form-sm">
                  <input type="text" id="bank-file-trigger" value="Bank deatails" name="bank-file" required="required" disabled="disabled" class="form-control form-control-sm">
                  <label for="bank-file-trigger">Bank Passbook Page or Online Passbook Page</label>
                  <input type="file" name="bank" id="bank-file-input" hidden="hidden">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-bank-name" name="bank-name" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-bank-name">Name of the Bank</label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-bank-branch" name="bank-branch" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-title">Branch of Bank</label>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-account" name="account" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-account">Account Number</label>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="md-form form-sm">
                  <input type="text" id="Form-pass1-code" name="bank-code" required="required" class="form-control form-control-sm">
                  <label for="Form-pass1-code">IFSC Code</label>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div hidden="hidden"></div>
              </div>

              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">


                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cond-btn" name="condition" unchecked data-toggle="modal">
                  <label class="custom-control-label" for="cond-btn">Please read full terms and conditions, before submitting your details.</label>
                
                  <div class="modal fade" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                      <div class="modal-dialog modal-dialog-centered" role="document">


                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <p class="text-info"><b>1. I accept that all the information provided above is correct.<br>
                                  2. I declare that if any discrepency found in these details is solely my responsibility.<br>
                                  3. I will not use this site as a method for stealing information of other people.<br>
                                  4. I shall not use the search engine in the website to stalk or anyone.<br>
                                  5. If I am found guilty of doing so, I only shall be responsible for this.<br>
                                  6. Digital Docs can change these rules and regulations, a prior mail will be sent to all the users.<br>
                                  7. "Hacking and cyber crimes are punishable acts", I understand this, and I will never do so.
                                </b></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" id="btn-accept" class="btn btn-primary">Accept</button>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
            </div>

            <br>
             <!-- ROW Last -->
            
              <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <button type="Submit" name="submit-btn" id="sub-btn" disabled="disabled" class="btn blue-gradient btn-block btn-primary" value="Submit" style="width: 100%;">Submit</button>
                </div>
                <div class="col-lg-3 col-md-3"></div>
              </div>
            
          </div>
          <!-- Card -->
        </div>
      </div>
    </div>
   </div>
 </form>
 <footer class="page-footer font-small teal pt-4" >
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
   


 <div class="modal fade" id="thumb-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Thumb Impression</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="pan-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Pan Card</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="adhar-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Adhar Card</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="dl-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Driving Licence</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="passport-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Passport</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="bank-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-uppercase" id="view-modal-title">Bank Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="view-image" alt="No Imgae Saved" class="img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="image-wrong" tabindex="-1" role="dialog" aria-labelledby="log-in-credential-wrong" aria-hidden="true">

                      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


          <div class="modal-content">
            <div class="modal-header">
              <<h5 class="modal-title text-uppercase" id="">ALERT</h5>
              <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6 class="text-uppercase font-weight-bold text-danger">
                Only jpeg, jpg, png are allowed.<br> Please upload image of size less than 10MB.
              </h6>                        
            </div>
            <!-- <div class="modal-footer">
              <button type="button" id="btn-accept" data-dismiss='modal' class="btn btn-primary">Accept</button>
             --></div>
          </div>
        </div>


<!--   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>-->
  
   
   <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/js/mdb.min.js"></script>\
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <!-- <script type="text/javascript" src="js/extra.js"></script> -->
    <script type="text/javascript">
      new WOW().init();
      function readURL(input, out) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            out.attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      function checkSize(input)
      {
        var size = parseFloat(input.files[0].size/1024).toFixed(2);

        if(size > 12000)
        {
          alert(size);
          return false;
        }

        return true;
      }

      function checkIMG(input){
        
        var accept = ["jpeg", "jpg", "png"];
        var arr = input.split('.');

        var ext = arr[arr.length-1];

        for(var i = 0 ; i < accept.length ; i++)
        {
          if(ext.toLowerCase() == accept[i])
          {
            return true;
          }
        }

        return false;

      }


  
      $("#bbttnn").click(function(){
        $("#proPic").click();
      });

      $("#proPic").change(function(){
        if(this.value && checkIMG(this.value) && checkSize(this)){
          readURL(this, $("#profile"));
        }
        else
        {
          
          $("#image-wrong").modal('show');
        }
      }); 

    //date picker instantiator
    $(function(){
      $(".datepicker").datepicker();
    });

    //thumb file control
    $(".thumb-drop").click(function(){
      $("#thumbDropdown").text(this.value);
      $("#thumb-text").attr("value",this.value);
      $("#thumb-file-input").click();
    });
    $("#thumb-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#thumb-view-modal #view-image"));
        $("#thumb-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });

    //pan file control
    $("#pan-btn").click(function(){
      $("#pan-file-input").click();
    });

    $("#pan-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#pan-view-modal #view-image"));
        $("#pan-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });


    //adhar file control
    $("#adhar-btn").click(function(){
      $("#adhar-file-input").click();
    });

    $("#adhar-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#adhar-view-modal #view-image"));
        $("#adhar-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });

    //Driving Licence File Controls
    $("#dl-btn").click(function(){
      $("#dl-file-input").click();
    });

    $("#dl-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#dl-view-modal #view-image"));
        $("#dl-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });

    //Passposrt File Control
    $("#passport-btn").click(function(){
      $("#passport-file-input").click();
    });

    $("#passport-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#passport-view-modal #view-image"));
        $("#passport-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });


    //Bank Account File Controls
    $("#bank-btn").click(function(){
      $("#bank-file-input").click();
    });

    $("#bank-file-input").change(function(){
      if(this.value && checkIMG(this.value)  && checkSize(this)){
        readURL(this, $("#bank-view-modal #view-image"));
        $("#bank-file-trigger").attr("value", this.value);
      }
      else
      {
        this.value = '';
        $("#image-wrong").modal('show');
      }
    });


    $("#cond-btn").click(function(){
      if($(this).prop("checked") == true)
      {
        $("#modalCookie1").modal('show');
      }
      else if($(this).prop("checked") == false)
      {
        $("#sub-btn").attr("disabled","disabled");
        $("#sub-btn").removeClass("btn-success");
        $("#sub-btn").addClass('blue-gradient'); 
      }
    });

    
    $(".view-btn").click(function(){
       var name = "#"+this.value+"-view-modal";

       $(name).modal('show');
    });
   
    function validate(){
      var x = $("#Form-pass1-pass").val();
      var y = $("#Form-pass1-pass-confirm").val(); 
      if(x && y && x == y)
        return true;
      return false;
    }

    $("#btn-accept").click(function(){
      $("#modalCookie1").modal('hide');
      if(validate())
      {
        $("#sub-btn").removeAttr("disabled");
        $("#sub-btn").removeClass("blue-gradient");
        $("#sub-btn").addClass("btn-success");
      }
      else
      {
        alert("Check Passwords, they do not match. Then accept terms and conditions.");
        $("#cond-btn").click();
      }
    });      


    </script>
</body>
</html>