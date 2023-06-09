<?php include_once './reservation.php'; ?>
  
<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <title>TRIPPER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0"><br>
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <div>
                        <img src="img/TripperLogoWithoutName.png" height="65px" width="55px" style="float:right;">
                        <h1 class="m-0 text-primary" style="display: inline-block !important;"><span class="text-dark" style="display: inline-block!important;">TRIP</span>PER</h1>
                      </div>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nnav-item nav-link">Home</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="book.html" class="nav-item nav-link">Book</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Book</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Book</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!--Book Start -->
    <div class="card border-0 form-container" >
        <div class="card-header bg-primary text-center p-44">
            <h1 class="text-white m-0">Book</h1>
        </div>
        <div class="card-body rounded-bottom bg-white p-5 form-container">
            <div><?php echo $status ?></div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
            <div class="mb-3 mb-md-0 form-container"><b><label for="name">Enter Your Name:</label></b>
                    <div class="name">
                        <input type="text" placeholder="Your name" name="name" value="<?php echo $name; ?>"/>
                    </div>
                    <div class="text-danger"><?php echo $errors['name'] ?></div>
                </div>
                <div class="form-container">
                    <b><label for="areas">Select Your favorite areas : </label></b><br>
                        <input type="checkbox" id="areas" value="Hufof" name="AreaID[]"><label for="Hufof">Hufof</label><br>
                        <input type="checkbox" id="areas" value="Almubariz" name="AreaID[]"><label for="Almubariz">Almubariz</label><br>
                        <input type="checkbox" id="areas" value="Aleuyun" name="AreaID[]"><label for="Aleuyun">Aleuyun</label><br> 
                        <input type="checkbox" id="areas" value="Altaraf" name="AreaID[]"><label for="Altaraf">Altaraf</label><br>
                        <input type="checkbox" id="areas" value="Jafr" name="AreaID[]"><label for="Jafr">Jafr</label><br>
                        <div class="text-danger"><?php echo $errors['AreaID'] ?></div>
                </div>
            
            
                <div class="mb-3 mb-md-0 form-container"><b><label for="date1">Select your Depart date & Return date :</label></b>
                    <div class="date" id="date1" data-target-input="nearest">
                        <input type="date" class="form-control p-4 datetimepicker-input" value="<?php echo $StartDate; ?>"
                            name="StartDate" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                    </div>
                    <div class="text-danger"><?php echo $errors['StartDate'] ?></div>
                </div>
            
                <div class="mb-3 mb-md-0 form-container">
                    <div class="date" id="date2" data-target-input="nearest">
                        <input type="date" class="form-control p-4 datetimepicker-input" value="<?php echo $EndData; ?>"
                            name="EndData" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                    </div>
                    <div class="text-danger"><?php echo $errors['EndData'] ?></div>
                </div>
            
            
                <div class="mb-3 mb-md-0 form-container">
                    <b><label for="areas">Select Your Preferences : </label></b><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Food"><label for="Food">Food</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Sport"><label for="Sport">Sport</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Entertainment"><label for="Entertainment">Entertainment</label><br> 
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Festival"><label for="Festival">Festival</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Familial"><label for="Familial">Familial</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Healthy"><label for="Healthy">Healthy</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Children"><label for="Children">Children</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Art"><label for="Art">Art</label><br>
                        <input type="checkbox" name="Preferences[]" id="Preferences" value="Cultural"><label for="Cultural">Cultural</label><br>
                        <div class="text-danger"><?php echo $errors['Preferences'] ?></div>
                </div>
                <div class="mb-3 mb-md-0 form-container">
                    <b><label for="areas">Select Your Budget : </label></b><br>
                        <input type="radio" id="Budget" name="Budget" value="200RS or lower"><label for="200 or lower">200RS OR Lower</label><br>
                        <input type="radio" id="Budget" name="Budget" value="800RS"><label for="800RS">800RS</label><br>
                        <input type="radio" id="Budget" name="Budget" value="1200RS"><label for="1200RS">1200RS</label><br> 
                        <input type="radio" id="Budget" name="BUdget" value="20000"><label for="20000">20000</label><br>
                        <div class="text-danger"><?php echo $errors['Budget'] ?></div>
                        <div class="text-center">
                            <input type="hidden" name="book" >
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendBookingButton" name="sendBookingButton">Book</button>
                        
                        </div>
                </div>
            </div>
            </form>
            </div>
              <!--Book End -->
             
  

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <div style="display: inline-table !important;">
                    <img src="img/TripperLogoWithoutName-removebg-preview.png" height="65px" width="55px" style="float:right;">
                    <h1 class="text-primary" style="display: inline-table !important;margin: left 5px;"><span class="text-white" style="display: inline-block;margin: left 5px;">TRIP</span>PER</h1>
                    </div>
                <p>Presenting a distinguished proposal that includes food, housing, and the most important places, at an affordable price, throughout the Kingdom</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>5943 Street, Alahsa, KSA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+966 592588075</p>
                <p><i class="fa fa-envelope mr-2"></i>Tripper@gmail.com</p>
                <div class="w-100">
                    
                </div>
            </div><div class="col-lg-3 col-md-6 mb-5">
                
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>