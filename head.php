<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GetRoute :: GoodPlace :: BestPlan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/getroute-custom.css" rel="stylesheet">
    <link href="assets/css/index-location.css" rel="stylesheet">

    <!-- load css and js-->
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/ads-style.css" />
    <link rel="stylesheet" type="text/css" href="css/side-menu-style.css" />
    <link rel="stylesheet" type="text/css" href="css/feed-style.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
    <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    
    <!--google maps-->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd2MlIWoL19k4cPGTt7xDxQcWn9kpS_gc">
    </script>
    <script src="js/googlemaps-main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <!--facebook login-->
    <script src="js/facebook-login.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">

    <!--phone menu-->
    <link rel="stylesheet" href="css/rmm-css/responsivemobilemenu.css" type="text/css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="js/rmm-js/responsivemobilemenu.js"></script>

     <!-- icon -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  

  </head>

  <body onload="initialize()" style="background-color: #F7BE95;">

        <!--navber-inner navbar-fixedtop phone-->
       <div class="navbar navbar-default navbar-fixed-top hidden-desktop" style="text-align: center;">
        <div class="navbar-inner row">
          <li class="visible-tablet span3"><a class="span3" href="#"> <img src='https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10457184_710145499032313_6881632657306438370_n.jpg'></a></li>

          <div class="rmm span7" data-menu-style = "minimal">
            <ul>

                <li><a href='#about-me'>Acommodations</a></li>
                <li><a href='#gallery'>Restaurant</a></li>
                <li><a href='#blog'>Promo</a></li>
                <li><a href='#links'><span class="glyphicon glyphicon-user"></span> Login/Signup</a></li>
            </ul>
        </div>
           

            
          </div> <!--navbar-inner-->
        </div> <!--navber-inner navbar-fixedtop phone-->

        
        <div class="container" style="height: 30px;">
        </div>
        <!--navber-inner navbar-fixedtop hidden-phone-->




    
      <!--navber-inner navbar-fixedtop visible-tablet -->
       <div class="navbar navbar-default navbar-fixed-top visible-desktop" style="text-align: center;">
        <div class="navbar-inner">
           

              <a class="span3" href="#"> <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10457184_710145499032313_6881632657306438370_n.jpg"></a>

              <nav class="cbp-hsmenu-wrapper span9" id="cbp-hsmenu-wrapper">
                 <div class="cbp-hsinner">
                   <ul class="cbp-hsmenu">
                    <li>
                     <a href="#">Acommodations
                     </a>
                       <ul class="cbp-hssubmenu">
                        <li><a href="#"><span>type</span></a></li>
                        <li><a href="#"><span>place</span></a></li>
                        <li><a href="#"><span>
                        <!-- search bar: by name -->
                        <input id="acc-search" type="text" placeholder="search by name" maxlength="100" style="height: 100%; width: 100%" autoconplete="off">
                        <button id="acc-search-btn" class="btn btn-success" style="width: 100%; height: 100%;" type="submit">Find Awesome<br>Acommodations!</button>
                        </span>
                            </a>
                        </li>
                 
                        </ul>
                    </li>
                    <li>
                      <a href="#">Restaurant
                      </a>
                        <ul class="cbp-hssubmenu cbp-hssub-rows">
                          <li><a href="#"><span>type</span></a></li>
                          <li><a href="#"><span>place</span></a></li>
                          <li><a href="#"><span>
                          <input id="hotel-search" type="text" placeholder="search by name" maxlength="100" style="height: 100%; width: 100%" autoconplete="off">
                           <button id="rest-search-btn" class="btn btn-success" style="width: 100%; height: 100%;" type="submit">Find Awesome<br>Restaurants!</button>
   
                            </span>
                              </a>
                             
                          </li>
                    </li>
                 
                        </ul>


                    </li>
                     <li>
                       <a href="#">Promo!
                       </a>
                         
                     </li>

                     <li> 
                       <a><div class="navber-right" id="login-signup" style="text-align: center;">

                   <button type="button" class="btn btn-warning" data-toggle="popover" data-content="Notification 1<hr />Notification 2">Signup / Login</button>
  
                 </div> <!--login/signup-->

                       </a>

                       <ul class="cbp-hssubmenu cbp-hssub-rows">
                          <li style="width: 60%;"><a><span>
                            Register GetRoute Account!
                            <br>
                            <br>

                           <form id="gr-register">

                           <input id="gr-firstname" class="textfield" style="height: 100%; width: 100%;" type="text" placeholder="Firstname ...">
                           <input id="gr-lastname" class="textfield" style="height: 100%; width: 100%;" type="text" placeholder="Lastname ...">
                           <input id="gr-email" class="textfield" style="height: 100%; width: 100%;" type="text" placeholder="Enter e-mail ...">
                           <input id="gr-re-email" class="textfield" type="text" placeholder="Re-enter e-mail ..." style="height: 100%; width: 100%;">
                           <input id="gr-password" class="textfield" style="height: 100%; width: 100%;" type="text" placeholder="Password ...">
                            <div class="btn-group" style="height: 100%; width: 100%;" data-toggle="buttons">
                              <label>
                               <input type="radio" name="options" id="female">Female
                            
                              <input type="radio" name="options" id="male">Male
                            </label>
                              
                            </div>
                              <br>
                             
                           
                            </form>

                             <button id="register-btn" class="btn btn-primary" style="width: 87%;" type="submit">Register</button>

                          </span></a></li>
                         
                          <li style="text-align: center;"><a href="#"><span>
                            
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="true" data-auto-logout-link="false">
                              
                              </div>
                              

                              <div id="status">



                            </div>
                            <div id="fb-root"></div>


                            <hr>

                          

                            <form id="gr-login">
                                <input id="gr-id" class="textfield" style="height: 100%;width: 100%;" type="text" placeholder="GetRoute ID/Email ...">
                                <input id="gr-pass" class="textfield" style="height: 100%;width: 100%;" type="text" placeholder="Password ...">
                            
                              
                                <button id="login-btn" class="btn btn-primary" style="width: 100%;" type="submit">Login</button>
                              
                            </form>
                            

                          </span>
                            


                          </a>
                          </li>
                    </li>
                 
                        </ul>
                         
                     </li>




            
                  </ul>
                </div>  <!--cbp-inner-->
               </nav>  <!--- top menu -->
                 




            
          </div> <!--navbar-inner-->
        </div> <!--navber-inner navbar-fixedtop hidden-phone-->
     


   
    <div class="container">
      <div class="container box-main">
         <!--Ads only destop-->
        <div class="ia-container visible-desktop">
        
          <figure>
            <img src="images/ads-sample.png"></img>
            <input type="radio" name="radio-set" checked="checked"/>
            <figcaption><span>True Colors</span></figcaption>
            
            <figure>
              <img src="images/ads-sample.png"></img>
              <input type="radio" name="radio-set" />
              <figcaption><span>Honest Light</span></figcaption>
              
              <figure>
                <img src="images/ads-sample.png"></img>
                <input type="radio" name="radio-set" />
                <figcaption><span>Silent Serenity</span></figcaption>
                
                <figure>
                  <img src="images/ads-sample.png"></img>
                  <input type="radio" name="radio-set" />
                  <figcaption><span>Warm Welcome</span></figcaption>
                  
                  <figure>
                    <img src="images/ads-sample.png"></img>
                    <input type="radio" name="radio-set" />
                    <figcaption><span>Sensible Magic</span></figcaption>
                    
                    <figure>
                      <img src="images/ads-sample.png"></img>
                      <input type="radio" name="radio-set" />
                      <figcaption><span>Lovely Midnight</span></figcaption>
                
                      <figure>
                        <img src="images/ads-sample.png"></img>
                        <input type="radio" name="radio-set" />
                        <figcaption><span>Illuminated Darkness</span></figcaption>                      

                        <figure>
                          <img src="images/ads-sample.png"></img>
                          <input id="ia-selector-last" type="radio" name="radio-set" />
                          <figcaption><span>Happy Child</span></figcaption>
                        </figure>
                        
                      </figure>
                
                    </figure> 
                      
                  </figure> 
                    
                </figure>
                  
              </figure>
              
            </figure>
            
          </figure>
          
        </div><!-- ia-container -->
          <!--Ads only destop-->


        <!--current loc-->
      <div class="container">

       <div class="location-box-phone" style="padding">

          <div id="map-canvas" style="height:300px; width:100%" />
        

       </div><!--google maps-->



      </div> <!--current loc-->
  

         <!--side menu phone-->
        <div class="container visible-phone" style="text-align: center; padding-bottom: 5%;">
          <div class="btn-group btn-group-sm" data-toggle="buttons">
            <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> All Route Review
          </label>
          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Acommodations Review 
          </label>
          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Restaurant Review 
          </label>

          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Promotion Review
          </label>

          </div>
        </div>

        <!--side menu tablet-->
        <div class="container visible-tablet" style="text-align: center; padding-bottom: 5%;">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> All Route Review
          </label>
          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Acommodations Review 
          </label>
          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Restaurant Review 
          </label>

          <label class="btn btn-warning">
            <input type="checkbox" id="nobox"> Promotion Review
          </label>

          </div>
        </div>

        <!--side menu destop-->
        <div class="container span2 visible-desktop">
           <ul id="navigation">
              <li><a href="" title="">All Route Review</a></li>
              <li><a href="" title="">Acommodations Review </a></li>
              <li><a href="" title="">Restaurant Review </a></li>        
              <li><a href="" title="">Promotion Review</a></li>
            
        </ul>

        <div class="container" style="padding-top: 20px;"> 
          <div class="fb-like-box" data-href="https://www.facebook.com/AimeTinyProgrammer" data-width="170" data-height="300" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>

        </div>

        </div>  <!--side menu-->

        <!--feed desktop-->
        <div class="container span9 visible-desktop">
            <ul class="timeline">

          <li class="event">
            <input type="radio" name="tl-group" checked/>
            <label></label>
            <div class="thumb user-4"><span>19 Nov</span></div>
            <div class="content-perspective">
              
                <div class="content-inner">
                  <h3>I find your lack of faith disturbing</h3>
                  <p>Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. The plans you refer to will soon be back in our hands. A tremor in the Force. The last time I felt it was in the presence of my old master. Escape is not his plan. I must face him. Alone.</p>
                </div>
              
            </div>
          </li>

          <li class="event">
            <input type="radio" name="tl-group"/>
            <label></label>
            <div class="thumb user-6"><span>18 Nov</span></div>
            <div class="content-perspective">
             
                <div class="content-inner">
                  <h3>I ain't shooting this thing, I hate guns.</h3>
                  <p>Ha, didn't even stay for the wedding. Just took his million spacebucks and ran. And you will not call me 'you'. You will never address me as 'you'. You will call me 'your royal highness'. I really must go back. I shouldn't have run away. I realize now that love is one luxury a princess cannot afford. </p>
                </div>
              
            </div>
          </li>

        </ul>
        </div>
        <!--feed desktop-->

        


      </div> <!--current loc desktop-->

         <!--feed phone tablet-->
        <div class="container hidden-desktop">
            <ul class="timeline">

          <li class="event">
            <input type="radio" name="tl-group" checked/>
            <label></label>
            <div class="thumb user-4"><span>19 Nov</span></div>
            <div class="content-perspective">
              
                <div class="content-inner">
                  <h3>I find your lack of faith disturbing</h3>
                  <p>Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. The plans you refer to will soon be back in our hands. A tremor in the Force. The last time I felt it was in the presence of my old master. Escape is not his plan. I must face him. Alone.</p>
                </div>
              
            </div>
          </li>

          <li class="event">
            <input type="radio" name="tl-group"/>
            <label></label>
            <div class="thumb user-6"><span>18 Nov</span></div>
            <div class="content-perspective">
             
                <div class="content-inner">
                  <h3>I ain't shooting this thing, I hate guns.</h3>
                  <p>Ha, didn't even stay for the wedding. Just took his million spacebucks and ran. And you will not call me 'you'. You will never address me as 'you'. You will call me 'your royal highness'. I really must go back. I shouldn't have run away. I realize now that love is one luxury a princess cannot afford. </p>
                </div>
              
            </div>
          </li>

        </ul>
        </div>
        <!--feed desktop-->

      
      </div> <!--box main-->
      
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

   <!-- search bar script-->
   <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>


    <!--menu bar script-->
    <script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script>
      var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>

      <!--side menu-->
      <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'2%'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'5%'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'2%'},200);
                    }
                );
            });
        </script>

      <!--phone menu-->
        
        


    
      
  </body>
</html>
