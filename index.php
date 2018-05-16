<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
  <head>
    <title>GraveYard.co</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.5/js/jquery.min.js"></script>
<script src="bootstrap-3.3.5/js/carousel.js"></script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    height:70%;
      width: 70%;
      margin: auto;
  }
  </style>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
     <!-- Custom Theme files -->
     <!-- animated-css -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <!-- animated-css -->
      <!-- start-smoth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
     <!-- start-smoth-scrolling-->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
       <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--start-top-nav-script-->
    <script>
      $(function() {
        var pull    = $('#pull');
          menu    = $('nav ul');
          menuHeight  = menu.height();
        $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
        });
        $(window).resize(function(){
              var w = $(window).width();
              if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
              }
          });
      });
    </script>
    <!--//End-top-nav-script-->
  

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript" src="js/mapmarker.jquery.js"></script>

<script type="text/javascript">
  // Use below link if you want to get latitude & longitude
  // http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php
  
  $(document).ready(function(){
  
    //set up markers 
    var myMarkers = {"markers": [
        {"latitude": "-8.112866311735861", "longitude":"113.71328125", "icon": "images/tombs.png", "baloon_text": 'Lokasi <strong>Grave Yard Cemetery</strong>'},
      ]
    };
    
    //set up map options
    $("#map").mapmarker({
      zoom  : 5,
      center  : 'Indonesia',
      markers : myMarkers
    });

  });
</script>

  </head>
  <body>
    <div class="bg">
    <!-- start-header-->
      <div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
          <div class="top-header"> <div class="page-header">
<h1>GraveYard.Co</h1></div>
            <div class="container">
            
            <!--start-top-nav-->
             <nav class="top-nav">
            
              <ul class="top-nav">
                <li><a href="#home" class="scroll">Home</a></li>
                <li ><a href="#services" class="scroll">Services</a></li>
                <li><a dir="http://localhost/grave/"  class="scroll">Login</a></li>
                <li><a href="#team" class="scroll">Maps</a></li>
                <li><a href="#contact" class="scroll">Contact</a></li>
              </ul>
              <a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <!-- //End-header-->
      <!-- banner -->
      <div class="banner wow fadeIn" data-wow-delay="0.5s">
        <div class="container">
          
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="backH.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Anonymous</h3>
          <p>Dead Is Not The End Of A Journey</p>
        </div>
      </div>

      <div class="item">
        <img src="mkm.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Anonymous</h3>
          <p>Happen Only Once In A Life Time</p>
        </div>
      </div>
    
      <div class="item">
        <img src="url.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Final Arrangements Network</h3>
          <p>The First Place to Look For The Last Thing On Your Mind</p>
        </div>
      </div>
      
       <div class="item">
        <img src="oo.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Anonymous</h3>
          <p>The Tributes and The Prayers Always There</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



</div>

        </div>
      </div>
    </div>

      <!-- banner -->
      <!-- services -->
      <div id="services" class="services">
        <div class="container">
          <div class="service-head text-center">
            <h2>Our Services</h2>
            <span> </span>
          </div>
          <!-- services-grids -->
          <div class="services-grids text-center">
            <div class="col-md-4">
              <div class="service-grid wow bounceIn" data-wow-delay="0.4s">
                <span class="service-icon1"> </span>
                <h3><a href="#">Perfect Arrangement</a></h3>
                <p>We help you arrange the perfect tribute for your loved ones.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-grid wow bounceIn" data-wow-delay="0.4s">
                <span class="service-icon1"> </span>
                <h3><a href="#">Maintetanced Tombs</a></h3>
                <p>We clean every tombs regulary so that you can visit them any time.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-grid wow bounceIn" data-wow-delay="0.4s">
                <span class="service-icon1"> </span>
                <h3><a href="#">E-Maping</a></h3>
                <p>Your friends or relatves can find them with the e-map.</p>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <!-- services-grids -->
        </div>
      </div>
      <!-- services -->
      <div class="clearfix"> </div>
      <!-- Other Expertise -->
      <div id="port" class="expertise">
        <div class="expertice-grids">
          <div class="col-md-8 expertice-left-grid wow fadeInLeft" data-wow-delay="0.4s">
            <div class="expertise-head">
              <h3> Login </h3>
               
            </div>
            <div class="expertise-left-inner-grids">
              <div class="e-left-inner-grid">
                <div class="e-left-inner-grid-left">
                  <span class="e-icon3"> </span>
                </div>
                <div class="e-left-inner-grid-right">
                  <h4>Family ID Benefit 1</h4>
                  <p> Let you see the list of the tombs of your relatives </p>
                </div>
              </div>
              <div class="e-left-inner-grid">
                <div class="e-left-inner-grid-left">
                  <span class="e-icon3"> </span>
                </div>
                <div class="e-left-inner-grid-right">
                  <h4>Family ID Benefit 2</h4>
                  <p>Easy way to order the land slot</p>
                </div>
              </div>
              <div class="e-left-inner-grid">
                <div class="e-left-inner-grid-left">
                  <span class="e-icon3"> </span>
                </div>
                <div class="e-left-inner-grid-right">
                  <h4>Family ID Benefit 3</h4>
                  <p>Discount and other extra services to help your family</p>
                </div>
              </div>
              
              
          </div>
          
          </div>
          <div class="col-md-4 expertice-right-grid wow fadeInRight" data-wow-delay="0.4s">
            
          </div>
          <div class="clearfix"> </div> 
        </div>
      </div>
      <!-- Other Expertise -->
      <!-- portfolio -->
    
          <!-- portfolio-works -->
          
          <!-- portfolio-works -->
        </div>
      </div>
      <!-- portfolio -->
      <!-- about -->
      <!--start-about-->
    <div class="about">
      <div class="wrap"> 
        <div class="about-head">
          <h1>Maps</h1>
          <span> </span>
        </div>
        <!--start-about-time-line-->
      
        <!--//End-about-time-line-->
      <!-- about -->
    </div>
      <!-- team -->
      <div id="team" class="team-members">
          <div class="wrap"> 
            <div class="tm-head">
              
              <h3>&nbsp;</h3>
              <p>&nbsp;</p>
            </div>
            <div class=""portfolio-work-grid-pic"">
              <div  data-wow-delay="0.4s">
             <div id="map" style="width: 1400px; height: 800px; border:2px solid red;"></div>
 </div>
              
              <div class="clearfix"> </div>
            </div>
            <p class="team-info">Together let's make the most unforgetable tribute for them who leave</p>
          </div>
        </div>
      <!-- team -->
      <!-- contact -->
      <div id="contact" class="contact">
        <div class="container">
        <div class="contact-grids">
          <div class="col-md-6">
            <div class="contact-left wow fadeInRight" data-wow-delay="0.4s">
              <h3>Contact Us</h3>
              <label>Don't be affraid, drop us an email and say hello! We are a really nice bunch of people :)</label>
              <div class="contact-left-grids">
                <div class="col-md-6">
                  <div class="contact-left-grid">
                    <p><span class="c-mobi"> </span>(416) 555-0000</p>
                    <p><span class="c-twitter"> </span><a href="#">@graveYard.Co</a></p>
                    <p><span class="c-pluse"> </span><a href="#">plus.com/GraveY</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-right-grid">
                    <p><span class="c-msg"> </span><a href="mailto:hello@dreams.com">hello@GraveYard.com</a></p>
                    <p><span class="c-face"> </span><a href="#">facebook.com/GraveY</a></p>
                    <p><span class="c-pin"> </span><a href="#">pinterest.com/dreams</a></p>
                  </div>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <!-- copy-right -->
        <div class="copy-right text-center">
          <p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
          <script type="text/javascript">
                  $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>
                  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!-- copy-right -->
      </div>
      </div>
      <!-- contact -->
    </div>
    <script>
$(".corausel").corausel({
interval:500
})

</script>
  </body>
</html>

