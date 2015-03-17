<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GetRoute :: GoodPlace :: BestPlan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/getroute-custom.css" rel="stylesheet">
    <link href="../assets/css/index-location.css" rel="stylesheet">

    <!-- load css and js-->
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" type="text/css" href="../css/ads-style.css" />
    <link rel="stylesheet" type="text/css" href="../css/side-menu-style.css" />
    <link rel="stylesheet" type="text/css" href="../css/feed-style.css" />
    <script src="../js/modernizr.custom.63321.js"></script>
    <script src="../js/modernizr.custom.js"></script>
    <script type="text/javascript" src="../js/modernizr.custom.79639.js"></script> 
    <script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
    
    <!--google maps-->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd2MlIWoL19k4cPGTt7xDxQcWn9kpS_gc">
    </script>
    <script src="../js/googlemaps-main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <!--facebook login-->
    <script src="../js/facebook-login.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <!--phone menu-->
    <link rel="stylesheet" href="../css/rmm-css/responsivemobilemenu.css" type="text/css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../js/rmm-js/responsivemobilemenu.js"></script>

     <!-- icon -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  

  </head>

  <body onload="initialize()" style="background-color: #F7BE95;">

        <!--navber-inner navbar-fixedtop phone tablet-->
       <div class="navbar navbar-default navbar-fixed-top hidden-desktop" style="text-align: center;">
        <div class="navbar-inner row">
          <li class="visible-tablet span3"><a class="span3" href="#"> <img src='https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10457184_710145499032313_6881632657306438370_n.jpg'></a></li>

          <div class="rmm span7" data-menu-style = "minimal">
            <ul>

                <li><a href="../m-ac-search/">Accommodation</a></li>
                <li><a href="#">Restaurant</a></li>
                <li><a href="../promo">Promo</a></li>
                <li><a href="../m-signup-login/"><span class="glyphicon glyphicon-user"></span> Login/Signup</a></li>
            </ul>
        </div>
           

            
          </div> <!--navbar-inner-->
        </div> <!--navber-inner navbar-fixedtop phone tablet-->

        
        <div class="container" style="height: 30px;">
        </div>
        <!--navber-inner navbar-fixedtop hidden-phone-->




     


   
    <div class="container">
      <div class="container box-main">
       

        <form class="search-form">
          Search for Restaurant
          <div class="search-type-form">
          Type:
          <div class="checkbox">
            <label>
             <input type="checkbox" value="">
             Option one is this and that&mdash;be sure to include why it's great
             </label>
            </div>
          </div>
           <div class="search-place-form">
            Place:
          <div class="checkbox">
            <label>
             <input type="checkbox" value="">
             Option one is this and that&mdash;be sure to include why it's great
             </label>
            </div>
          </div>

            <button class="btn btn-success" style="margin">Find out<br>Awesome Restaurant</button>
        </form>
      

      
      </div> <!--box main-->
      
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

   <!-- search bar script-->
   <script src="../js/classie.js"></script>
    <script src="../js/uisearch.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>


    <!--menu bar script-->
    <script src="../js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script>
      var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>

      <!--side menu-->
      <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'5%'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'13%'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'5%'},200);
                    }
                );
            });
        </script>

     
        
        


    
      
  </body>
</html>
