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
    <link rel="stylesheet" type="text/css" href="../css/label.css" />
    <script src="../js/modernizr.custom.63321.js"></script>
    <script src="../js/modernizr.custom.js"></script>
    <script type="text/javascript" src="../js/modernizr.custom.79639.js"></script> 
    <script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
    
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
                                   <!-- icon -->
    <!-- icon -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

     <!--phone menu-->
    <link rel="stylesheet" href="../css/rmm-css/responsivemobilemenu.css" type="text/css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../js/rmm-js/responsivemobilemenu.js"></script>

   
  
    </head>

  <body onload="initialize()" style="background-color: #F7BE81;">

       <!--อันนี้คือเมนูของโทรศัพท์กะแท็บเล็ตนะ
        เวลากดแล้วมันจะไปหน้าใหม่ เพื่อ search หา 
        หรือล็อกอินหรือ register หรือ promotion อะไรก็ตาม-->
     <!--navber-inner navbar-fixedtop phone tablet-->
       <div class="navbar navbar-default navbar-fixed-top hidden-desktop" style="text-align: center;margin-right: 0;">
        <div class="navbar-inner row">
          <li class="visible-tablet span3"><a class="span3" href="#"> <img src='https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10457184_710145499032313_6881632657306438370_n.jpg'></a></li>

          <div class="rmm span7" data-menu-style = "minimal">
            <ul>

                <li><a href="../m-ac-search/">Accommodation</a></li>
                <li><a href="../m-rest-search/">Restaurant</a></li>
                <li><a href="../promo">Promo</a></li>
                <li><a href="../m-signup-login/"><span class="glyphicon glyphicon-user"></span> Login/Signup</a></li>
            </ul>
        </div>
           

            
          </div> <!--navbar-inner-->
        </div> <!--navber-inner navbar-fixedtop phone tablet-->

        
        <div class="container" style="height: 30px;">
        </div>
        <!--navber-inner navbar-fixedtop hidden-phone-->




        <!--อันนี้คือเมนูของเดสก์ท็อป 
        พอกดแล้วจะมีกรอบเด้งลงมา เพื่อให้เซิร์ด ล็อกอิน หรือ ล็อกอิน อะไรก็แล้วแต่
        ยกเว้นห promotion จะไปหน้ารวม promotion เลย-->

        <!-- เวลาเซิร์ด สมมติว่าเซิร์ด buffet, meatlover ก็ให้ไอพวกตรงสุดขึ้นมาก่อน
        แล้วพวกไม่ค่อยตรงตามทีหลังได้เป่า -->
    
      <!--navber-inner navbar-fixedtop visible-tablet -->
       <div class="navbar navbar-default navbar-fixed-top visible-desktop" style="text-align: center;">
        <div class="navbar-inner">
           

              <a class="span3" href="#"> <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10457184_710145499032313_6881632657306438370_n.jpg"></a>

              <nav class="cbp-hsmenu-wrapper span9" id="cbp-hsmenu-wrapper">
                 <div class="cbp-hsinner">
                   <ul class="cbp-hsmenu">
                    <li>
                     <a href="#">Accommodation
                     </a>                     
                       <ul class="cbp-hssubmenu">
                        <!--ชนิดของที่พัก เข้าใจว่าต้องเอามาจาก DB นะ 
                        เวลาเพิ่มจะได้ไม่ต้องแก้หลายๆที่???
                        คืออ้างอิงตาม Tag งี้ง่ะ-->
                        <li><a href="#"><span>type</span></a></li>
                       <!-- สถานที่ของที่พัก ว่าอยู่แถวไหน 
                        ประมาณว่าที่ฮิตในประเทศนั้นๆหรืออะไรเงี้ยอะ-->
                        <li><a href="#"><span>place</span></a></li>
                        <li><a href="#"><span>
                        <!-- search bar: by name -->
                        <!--อันนี้สะกดผิดแล้วให้มันขึ้นอันใกล้เคียงมาได้ไหมง่ะ-->
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
                           <!-- อันนี้คือ ล็อกอินด้วยเฟสบุ๊ค 
                          แต่เค้าลองกดแล้ว มันไม่เข้า ไม่เข้าจาย T^T-->
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
           <div class="container box-main" style="position: relative;">
            <!--visible phone-->
            <div class="container visible-phone" style="height:30px; width:100%">
              </div>
                <!--visible phone-->
           <!--head-->

           <!-- ชื่แของที่พัก -->
           <div class="container">
            <div style="margin-left: 50px; margin-top: 20px;">
             <font color="#47A8E4" style="font-size: 50px; text-shadow: 4px 4px 10px #888888;">
            <span class="glyphicon glyphicon glyphicon-home"></span></font>
           <font color="#1C1C1C" style="font-size: 50px; text-shadow: 4px 4px 10px #888888;"> Acommodation's Name</font>
              
              <!--activity icon desktop-->
              <div class="container span3 pull-right activity-icon visible-desktop">
                <div class="container span1">
                   <!-- เก็บไว้เป็นที่พักที่ชอบ -->
                  <font color="#1C1C1C" style="font-size: 50px; text-shadow: 4px 4px 10px #888888;"> 
                    <span class="glyphicon glyphicon-star-empty"></span>
                  </font>
                  Fav Route!
                </div>
                
                 <div class="container span1">
                   <!-- แชร์ลงไทม์ไลน์ตัวเอง -->
                <font color="#1C1C1C" style="font-size: 50px; text-shadow: 4px 4px 10px #888888;"> 
                <span class="glyphicon glyphicon-share-alt"></span>
                </font>
                Share
                </div>
                
              </div> <!--activity icon desktop-->
            </div> <!--mergin-->
           </div><!--head-->

       
           <!--side-->

          




             <!--span8-->
            <div class="container info-box account-info"> 

              <div class="report-box"> <span class="glyphicon glyphicon-exclamation-sign"></span></div>
         
               <!-- รูปของที่พักในมือถือ-->
            <!-- rest picture phone-->
           <div class="container account-photo-container-phone visible-phone" style="margin-top:20px;">
           <table style="text-align: center;">
            <tr>
              <td>
            <div class="container">
              <img src="https://scontent-a-sin.xx.fbcdn.net/hphotos-xpa1/t1.0-9/10322436_707847979262065_8782610039792052259_n.jpg" class="account-photo-phone"></img>
            

              
            </div>
          </td>

             
              
                <td>
                  <font color="#1C1C1C" style="font-size: 30px; text-shadow: 4px 4px 10px #888888;"> 
                    <span class="glyphicon glyphicon-star-empty"></span>
                  </font>
                   Fav Route!
                
              
             
               
                   <font color="#1C1C1C" style="font-size: 30px; text-shadow: 4px 4px 10px #888888;"> 
                <span class="glyphicon glyphicon-share-alt"></span>
                </font>
                 Share
                </td>

              
              </tr>

            </table>
          </div>




            <!-- rest picture hidden phone-->
           <div class="container span2 account-photo-container hidden-phone" style="margin-top: 30px;margin-left: 5%;" style="position: relative;">
            <!-- รูปของที่พักใน desktop กับ แท็บเล็ต-->
            <div class="container span2">
              <img src="https://scontent-a-sin.xx.fbcdn.net/hphotos-xpa1/t1.0-9/10322436_707847979262065_8782610039792052259_n.jpg" class="account-photo"></img>
            </div>
            <!-- เอาไว้ report ว่าข้อมูลไม่ถูกหรืออะไรอย่างนี้ 
            แต่ไม่รุ้ว่าเราจะรับข้อมูลยังไงเป่า = = 
            หมาายถึงว่า รับมาแล้วจะให้ส่งเข้าเมลล์เรา หรือว่าส่งเข้าเมลล์ที่พัก-->
             <div class="report-box"><span class="glyphicon glyphicon-exclamation-sign"></span></div>

                <!-- rest fav phone-->
           <div class="container span3 hidden-desktop" style="margin-left: 20%; margin-top: 10px;">
            <table style="text-align: center;">
              <tr>
                <td style="padding-right: 10px;">
                  <font color="#1C1C1C" style="font-size: 20px; text-shadow: 4px 4px 10px #888888;"> 
                    <span class="glyphicon glyphicon-star-empty"></span>
                  </font>
                  <br>Fav Route!
                </td>
                <td>
                   <font color="#1C1C1C" style="font-size: 20px; text-shadow: 4px 4px 10px #888888;"> 
                <span class="glyphicon glyphicon-share-alt"></span>
                </font>
                <br>Share
                </td>

              </tr>

            </table>
          </div>

          </div> <!-- rest picture hidden phone-->

            <!-- อันนี้เป็น tag น้ะ -->

              <div class="container span8 tag-box pull-right" id="rest-tag">
               
                <ul class="labels"> 
                      <li class="buffet"><span>buffet</span></li>
                      <li class="quickmeal"><span>quickmeal</span></li>
                      <li class="seafood"><span>seafood</span></li>
                      <li class="hotpot"><span>hotpot</span></li>
                      <li class="lady"><span>lady</span></li>
                      <li class="vegeterian"><span>vegeterian</span></li>
                      <li class="meatlover"><span>meatlover</span></li>
                      
                    </ul>
                </div>

               <!-- ข้อมูลต่างๆของร้าน -->
                <div class="container span3" style="margin: 20px;margin-left: 8%;">
                <table>


                  <tr>
                    <td>
                    Price:
                    </td>
                    <td></td>
                   
                  </tr>

                  <tr>
                    <td>
                    Open Time:
                    </td>
                    <td></td>
                    </tr>
                  <tr>
                    <td>
                    Close Time:
                    </td>
                    <td></td>
                  </tr>
                 

                  <tr>
                    <td>
                    Tel:
                    </td>
                    <td></td>
                    
                  </tr>

                  <tr>
                    <td>
                    Email:
                    </td>
                    <td></td>
                  </tr>

                  <tr>
                    <td>
                    address:
                    </td>
                    <td></td>
                   
                  </tr>


                  <tr>
                    <td>
                    Rating! 
                    </td>
                    <td></td>
                   
                  </tr>
                </table>


         
            </div>

            <!-- แสดงตำแหน่งของร้าน คือจะให้ดี แสดงว่า จากเราไปถึงร้านนี้เดินทางยังไงด้วยได้เป่า แบบ show route อ่ะ -->

              <div class="container span4" style="margin-bottom: 20px;background: #888888;">

                  <div id="map-canvas" style="height:185px;">

              </div><!--google maps-->
              </div>
           

            

              </div>  <!--span8-->
          




            <!--middle-->
            <div class="container" style="margin-top: 50px;">


              <!--span3 desktop-->
               <div class="container ads-container span3 visible-desktop">
                <!-- โฆษณา ทั้งหลายทั้งปวง -->
                 
                  <!--Ads desktop-->
                   <div class="container ads-container span3">
                    <font></font>
                    <div class="big-ads-box">Ads 200x200</div>
                    <div class="ads-box">Ads 200x100</div>
                    <div class="ads-box">Ads 200x100</div>
                    <div class="ads-box">Ads 200x100</div>
                    <div class="ads-box">Ads 200x100</div>
                   </div> <!--Ads-->

               </div><!--span3-->






              <!--feeds side-->
              <div class="container feed-container span9"> 

                <!--filter desktop-->
                <div class="container feed-button-filter-container span9 visible-desktop">

                 <div class="btn-group">
                    
                         <button type="button" class="btn btn-warning span4">Popular Review</button>
                    
                 
                        <button type="button" class="btn btn-warning span4">Newest Review</button>
                  
  
                </div>

                </div>  <!--filter-->

                <!--update feed desktop-->
                <div class="container update-feed-container span9 visible-desktop">




                  <div class="row span9" style="margin: auto;">
                    <div class="input-group update-feed span9">
                  <input type="text" class="form-control span7" placeholder="Review this route!" style="height: 50px;">
                   <span class="input-group-btn"><button type="submit" class="btn btn-primary span2" style="height: 50px; margin: auto;">Route!</button></span>
                  </div>
              
              </div>
            </div>  <!--update feed desktop-->







               <!--update feed phone tablet-->
                <div class="container hidden-desktop">




                  <div class="row span12" style="margin: auto;">
                    <div class="input-group update-feed span12" style="margin-left: 20px; width: 95%;">
                  <input type="text" class="form-control span10" placeholder="Review this route!" style="height: 50px;">
                   <span class="input-group-btn"><button type="submit" class="btn btn-primary span2" style="height: 50px; margin: auto;">Route!</button></span>
                  </div>
              
                 </div>
                </div>  <!--update feed phone tablet-->

                <!--filter phone tablet-->

                 <div class="container feed-button-filter-container span12 hidden-desktop" style="width: 95%;">

                 <div class="btn-group span12" style="display: inline-flex;">
                    
                         <button type="button" class="btn btn-warning span6">Popular Review</button>
                    
                 
                        <button type="button" class="btn btn-warning span6">Newest Review</button>
                  
  
                </div>

                </div>

                    <!--filter phone tablet-->




                
                <!--feed desktop-->
        <div class="container span9 visible-desktop" style="margin-left: 40px;">
            <ul class="timeline">

          <li class="event">
            <input type="radio" name="tl-group" checked/>
            <label></label>
            <div class="thumb user-4"><span>19 Nov</span></div>
            <div class="content-perspective">
              
                <div class="content-inner">

                    <div class="feed-location-like-box">
                    <div class="feed-location-box"><span class="glyphicon glyphicon-map-marker"></span></div>
                    <div class="feed-like-box"><span class="glyphicon glyphicon-heart"></span> +16</div>

                  </div>
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

                 
                   <div class="feed-location-like-box">
                    <div class="feed-location-box"><span class="glyphicon glyphicon-map-marker"></span></div>
                    <div class="feed-like-box"><span class="glyphicon glyphicon-heart"></span> +16</div>

                  </div>
                  <h3>I ain't shooting this thing, I hate guns.</h3>
                  <p>Ha, didn't even stay for the wedding. Just took his million spacebucks and ran. And you will not call me 'you'. You will never address me as 'you'. You will call me 'your royal highness'. I really must go back. I shouldn't have run away. I realize now that love is one luxury a princess cannot afford. </p>
                </div>
              
            </div>
          </li>

        </ul>
        </div>
        <!--feed desktop-->


           <!--feed phone tablet-->
        <div class="container hidden-desktop">
            <ul class="timeline" style="margin-top: 30px;">

          <li class="event">
            <input type="radio" name="tl-group" checked/>
            <label></label>
            <div class="thumb user-4"><span>19 Nov</span></div>
            <div class="content-perspective">
              
                <div class="content-inner">
                   <div class="feed-location-like-box">
                    <div class="feed-location-box"><span class="glyphicon glyphicon-map-marker"></span></div>
                    <div class="feed-like-box"><span class="glyphicon glyphicon-heart"></span> +16</div>

                  </div>
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
                   <div class="feed-location-like-box">
                    <div class="feed-location-box"><span class="glyphicon glyphicon-map-marker"></span></div>
                    <div class="feed-like-box"><span class="glyphicon glyphicon-heart"></span> +16</div>

                  </div>
                  <h3>I ain't shooting this thing, I hate guns.</h3>
                  <p>Ha, didn't even stay for the wedding. Just took his million spacebucks and ran. And you will not call me 'you'. You will never address me as 'you'. You will call me 'your royal highness'. I really must go back. I shouldn't have run away. I realize now that love is one luxury a princess cannot afford. </p>
                </div>
              
            </div>
          </li>

        </ul>
        </div>
        <!--feed phone tablet-->

         
          
           </div> <!--feed side-->
  


            </div><!--middle-->


        
            </div> <!--boxmain-->

          


    


     
      </div> <!-- container -->

      


  
        
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
                $('#navigation a').stop().animate({'marginLeft':'0px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'20px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'0px'},200);
                    }
                );
            });
        </script>

        
        
        


    
      
  </body>
</html>
