<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Zeitgeist '14, IIT Ropar Annual Cultural Fest" />
    <meta name="Description" property="og:description" content="Zeitgeist is the annual cultural fest of IIT Ropar being held over three days. It can never be more fun that Zeitgeist; after all it’s the spirit of the times." />
    <title>Zeitgeist 2014: Annual Cultural Fest, IIT Ropar</title>
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">     -->
    <!-- the marquee css file -->

    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript">
      $('<img/>').attr('src', 'images/tex.jpg').load(function() {
         $(this).remove(); // prevent memory leaks as @benweet suggested
         $('#loader-box').css({'background':'url(images/tex.jpg)',
          // '-moz-background-size':'cover',
          // '-webkit-background-size' :'cover',
          // 'background-size' : 'cover',
          'background-repeat' : 'repeat',
          'background-attachment' :'fixed',
          'text-align' : 'center'});
      });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-52347496-1', 'auto');
//      ga('send', 'pageview');

    </script>

    <!--<script type="text/javascript" src = "js/pace.js"></script>-->
    <script type="text/javascript" src = "js/angular.min.js"></script>
    <script type="text/javascript" src = "js/angular-route.js"></script>
    <script type="text/javascript" src = "js/angular-animate.min.js"></script>
    <script type="text/javascript" src = "js/angular-resource.min.js"></script>
    <script type="text/javascript" src = "js/script-angular.js"></script>
    <script type="text/javascript" src = "js/script.js"></script>
    <script type="text/javascript" src = "js/audio-analyser.js"></script>
  <?php
  ob_start();
  session_start();
  ?>
  </head>

  <body ng-app = "myapp" id ="body">
    <div id="loader-box">
    <div id="loader">
      <!-- <progress id="progress" max=49 value=0></progress> -->
      <div id="progress"><input id="progress" class="dial" value=0></div>
    </div>
  </div>
    <span id="maindisplay" ng-controller="loaderCtrl" ng-hide='webloader' class='fade' style='display:hidden !important'>
    <div id="visualisation">
      <div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div>
      <div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div>
      <div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div>
      <div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div>
      <div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div><div class="bars"></div>

    </div>
    <div id="wrap">
      <div class = "container">

        <div class = "row" id="top-row">
          
          <div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2" id ="logo-box">
            
            <a href = "#">
              <span id="logospan">
                <img src = "images/Z-white.png" id ="logo">
              <!-- <img src = "images/Z-color.png" id ="logoHover"> -->
              </span>
            </a>

          </div>

          <div class = "" id = "nav-bar">
            <ul>
              <li class = "list">
                <a href="#/events" class = "link" onClick="ga('send', 'event', 'Menu', 'Event-clicks');">
                  <img src = "images/Icons-Events.png" id = "events" class = "nav-image">
                  <!-- <img src = "images/Icon-Events-color.png" id = "eventsHover" class = "nav-image"> -->
                </a>
                <center><div class = "description">Events</div></center>
              </li>
              <li class = "list">
                <a href="#/sponsors" onClick="ga('send', 'event', 'Menu', 'Sponsors-clicks');">
                  <img src = 'images/Icons-Sponsors.png' id = "sponsors" class = "nav-image">
                  <!-- <img src = 'images/Icon-Sponsors-color.png' id = "sponsorsHover" class = "nav-image"> -->
                </a>
                <center><div class = "description">Sponsors</div></center>
              </li>
              <li class = "list">
                <a href="#/gallery" onClick="ga('send', 'event', 'Menu', 'Gallery-clicks');">
                  <img src = 'images/Icons-Gallery.png' id = "gallery" class = "nav-image">
                  <!-- <img src = 'images/Icon-Gallery-color.png' id = "galleryHover" class = "nav-image"> -->
                </a>
                <center><div class = "description">Gallery</div></center>
              </li>
              <li class = "list">
                <a href="#/contact" onClick="ga('send', 'event', 'Menu', 'Contact-clicks');">
                  <img src = 'images/Icons-Contact.png' id = "contact" class = "nav-image">
                  <!-- <img src = 'images/Icon-Contact-color.png' id = "contactHover" class = "nav-image"> -->
                  </a>
                <center><div class = "description">Contact</div></center>
              </li>
              
              <li class = "list">
                <a href="#/about" onClick="ga('send', 'event', 'Menu', 'Info-clicks');">
                  <img src = 'images/Icons-AboutUs.png' id = "info" class = "nav-image">
                  <!-- <img src = 'images/Icon-AboutUs-color.png' id = "infoHover" class = "nav-image"> -->
                </a>
                <center><div class = "description">About Us</div></center>
              </li>
            </ul>
              
          </div>
          <!-- checking if the user is looged in or not -->
            <div id='login-container'>
              <?php
            if(isset($_SESSION['email']))
            {?>
            <div id="login-name">Hi <italic><?php echo $_SESSION['name'];?></italic>!</div>
            <?php } ?>
              <?php
                if(!isset($_SESSION['email']))
                {
                ?>  
                      <div class = "list" id="login">
                        <a href="#/register" onClick="ga('send', 'event', 'Menu', 'Register-clicks');">
                          <img src = 'images/Icons-Register.png' id = "register" class = "nav-image">
                          <!-- <img src = 'images/Icon-Register-color.png' id = "registerHover" class = "nav-image"> -->
                        </a>
                        <center><div class = "description">Register/Login</div></center>
                      </div>
                      <?php
                }
                else
              {?>
                <div class = "list" id="login">
                  <a href="partials/logout.php" onClick="ga('send', 'event', 'Menu', 'Register-clicks');">
                    <img src = 'images/Icons-Logout.png' id = "login_img" class = "nav-image">
                    <!-- <img src = 'images/Icon-Logout-color.png' id = "registerHover" class = "nav-image"> -->
                  </a>
                  <center><div class = "description">Logout</div></center>
                </div>
              <?php
                }
              ?>
              </div>
        </div>

        <div ng-view class="fade">

        </div>
      </div>
    </div>
      <!--footer -->
      <div id="footer">      
        <div class="container">
        <ul id="footer-list">
          <li>
        <a href = "https://www.facebook.com/zeitgeist.iitrpr" id = "fb" target="_blank">
           <!-- <img src="images/Icon-F-color.png" id ="facebookHover" class = "social-image"> -->
          <img src="images/Icons-F.png" id ="facebook" class = "social-image">
        </a>
          </li>
          <li>
        <a href="https://www.youtube.com/user/ZeitgeistIITRopar" id = "twit" target="_blank">
          <img src="images/Icons-Y.png" id = "youtube" class = "social-image">
          <!-- <img src="images/Icon-Y-color.png" id = "youtubeHover" class = "social-image"> -->
        </a>
          </li>
        </ul>
      </div>
    </div>
    <div class='music-player'>
      <!-- <div id="title"></div> -->
      <audio id="audio-player" src="music/mix.ogg" preload="auto" controls="controls" loop></audio>
    </div>
    </span>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src = "js/scrollReveal.js"></script>
    <script type="text/javascript" src = "js/fox-angular-scrollReveal.js"></script>
    <script type="text/javascript" src = "js/loader.js"></script>
    <script type="text/javascript" src = "js/jquery.knob.min.js"></script>
    <script>
      $(".dial").knob({
      "width": 191,
      "max": 100,
      "thickness": 0.07,
      "fgColor": "#8bf3fc",
      "inputColor": "#8bf3fc",
      "fontWeight": 700,
      "readOnly": true,
      "bgColor" : 'rgba(0,0,0,0)',
    });
      $('.dial').css('font-size','60px');
    </script>
    <script>
      //for sequential appearance of images
      window.scrollReveal = new scrollReveal();

    </script>

  </body>
</html>