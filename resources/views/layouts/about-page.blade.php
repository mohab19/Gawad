<!DOCTYPE html>
<html lang="en">
<head>
  <title>about us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
     <!-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    
      
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
      <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
<!---    <link href="css/nav.css" rel="stylesheet">--->
    
   <link rel="stylesheet" href="css/about.css">
   
</head>
    
    <body>

        
      <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="images/logoblue1.png" width="100px"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">product</a></li>
          <li><a href="#about.">About Us</a></li>
          <li><a href="#services">contact us</a></li>
          <li class="menu-has-children"><a href="">search</a>
            <ul>
              <li><a href="#"><input type="text"></a></li>
             
            </ul>
          </li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
        
        
   @yield('content')
        <div class="row" id="sty_bottom">
    
        
        <div class="col-md-4"><h1 id="txt_format1">Do you have any question?</h1>
        <p>Gawad Gmbh & co.kg<br>postfach2560.58685 menden <br> Am vogelsang31-33<br>info@kludi.de<br>you can also reach us by phone!<br>
            +49(0)2373-904-0</p>
        
        </div>
        
         <div class="col-md-4 col_sty" >
             <h1 id="text">gawad online</h1>
             <P>if you have any question or feedback for us ,you can reach us through these networks:</P>
         <img src="images/Layer%208.png" width="20%">
             <p>we are looking forward to hearing from you.your Gawad team</p>
        </div>
         <div class="col-md-4">
             <h1 id="text-format">information</h1>
       <p>terms and conditions<br>contact<br>Retailers<br>About Gawad</p>
        </div>
    
    </div>
    
    <!----------------------------------------------------------------------------------->
    
    
    
      
 
    
    
    <script src="js/index_slider.js"></script>
     
    
    
      <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
     </body>