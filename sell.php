<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AutoExpress</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/sell-style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/logo.png">

  
  
  <!-- =======================================================
    Theme Name: Folio
    Theme URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- start section navbar -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
        <li><a href="index.php" class="smoothScroll">Home</a></li>
          <li><a href="buy.php" >Buy a car</a></li>
          <li><a href="sell.php" class="smoothScroll">Sell a car </a></li>
          <li><a href="newcars.php" class="smoothScroll">New cars </a></li>
          <li><a href="news.php" class="smoothScroll">News</a></li>
          <li><a href="#" class="smoothScroll" data-toggle="modal" data-target="#LoginModal"><i class="fas fa-user-circle" ></i></li>
          
         <!-- <li class="nav navbar-nav navbar-right" style="clear: both;">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </li> -->
        </ul>

      </div>
    </div>
  </nav>
  <!-- End section navbar -->


  <!-- start section header -->
  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1>Sell with the best price <span class=""></span></h1>
        <p>With AutoExpress</p>

        <ul class="list-unstyled list-social">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End section header -->


  <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/buy3.jpg" class="img-responsive" alt="buy">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            
            <form >
                <h1>Find what you are looking for </h1>
                <br>
                <div class="form-box">
                   <input type="text" class="search-mark" placeholder="Car Mark">
                   <br><br>
                   <input type="text" class="search-model" placeholder="Car Model">
                   <br><br>
                   <a> PRICE <input type="text" class="search-price-min" placeholder="Min Price"> <input type="text" class="search-price-max" placeholder="Max Price">
                   </a> <br><br>
                    <a> Kilo  <input type="text" class="search-kilo-min" placeholder="Min Kilo"> <input type="text" class="search-kilo-max" placeholder="Max Kilo">
                    </a> <br><br>
                    <center><button class="search-car" type="button">Search </button></center>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->

<!-- start sectoion contact -->
<div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>Ariana</span></li>
                <li><span>Ariana, Tunisia</span></li>
                <li><span>+216 22 22 22 22 </span></li>
                <li><span>AutoExpress@gmail.com</span></li>
              </ul>

            </div>
          </div>

          
          <div class="col-lg-6">
            <form action="./includes/insertcontact.php" method="post" >
              <div class="row">

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="form-control btn btn-defeault btn-send" id="submit" value="Send message" name="submit">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 




  <!-- start sectoion contact -->


  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights AutoExpress. All rights reserved.</p>

      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
        -->
        Designed by AutoExpress
      </div>

    </div>
  </div>
  <!-- End section footer -->

  <!-- Partie LOGIN -->
  <form  onSubmit="return Verif();" action="login.php" method="POST" name="login">
                <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="color: orange;">Login</h4>
                </div>
                <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="adrmail" />
                </div>
                <div class="input-group">           
                    <span class="input-group-addon"><i class="fa fa-lock" style="font-size:20px"></i></span>
                    <input type="Password" class="form-control" placeholder="Password" name="passe" />
                </div>   
                <p></p>  
                    <button class="btn-primary" style="background:#F6C064; " >SignIn</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
                </div>
                </div>
            </form>
        <!-- Partie LOGIN JS-->

        <script language="JavaScript">
            function Verif()
            {
            a = document.login.adrmail.value;
            b = document.login.passe.value;
            valide1 = false;
            if(a.length==0||b.length==0) alert("Veuillez remplire les deux champs.");
            else
            {
                for(var j=1;j<(a.length);j++){
                    if(a.charAt(j)=='@'){
                        if(j<(a.length-5)){
                            for(var k=j;k<(a.length-2);k++){
                                if(a.charAt(k)=='.') valide1=true;
                            }
                        }
                    }
                }
            if(valide1==false) alert("Veuillez saisir une adresse email valide.");
            }
            return valide1;   
            }
       
        </script>
    <!-- Partie LOGIN -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  
  

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
