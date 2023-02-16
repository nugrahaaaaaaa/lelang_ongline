<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Service</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src=" {{ asset('assets/images/search-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('assets/images/user-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Pelelangan<br> dan <br>Tawar-menawar</h1>
                           <p class="banner_text">Tempat pelelangan terbaik di Dunia yang pernah ada, hanya ada di lelang massal </p>
                           <div class="btn_main">
                              <div class="contact_bt"><a href="/login">Log-in</a>
                           </div>
                         
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{ asset ('assets/images/img-1.png')}}"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_2"><img src="{{ asset('assets/images/img-2.png')}}"></div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised </p>
                     <div class="readmore_bt"><a href="#">baca lebih</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!--  design section start -->
      <div class="design_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="design_taital">Our Work Furniture</h1>
                     <p class="design_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteratio</p>
                     <div class="design_section_2">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 01</p>
                                 <div class="image_3" href="#"><img src="{{asset('assets/images/img-3.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 02</p>
                                 <div class="image_4" href="#"><img src="{{asset('assets/images/img-4.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Table</p>
                                 <div class="image_4" href="#"><img src="{{asset('assets/images/img-5.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="design_taital">Our Work Furniture</h1>
                     <p class="design_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteratio</p>
                     <div class="design_section_2">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 01</p>
                                 <div class="image_3" href="#"><img src="{{asset('assets/images/img-3.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Chair 02</p>
                                 <div class="image_4" href="#"><img src="{{asset('assets/images/img-4.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="box_main">
                                 <p class="chair_text">Table</p>
                                 <div class="image_4" href="#"><img src="{{asset('assets/images/img-5.png')}}"></div>
                                 <p class="chair_text">Price $100</p>
                                 <div class="buy_bt"><a href="#">Buy Now</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
         <div class="container">
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
      <div class="footer_section">
         <div class="container">
            <div class="footer_location_text">
               <ul>
                  <li><img src="{{asset('assets/images/map-icon.png')}}"><span class="padding_left_10"><a href="#">Loram Ipusm hosting web</a></span></li>
                  <li><img src="{{asset('assets/images/call-icon.png')}}"><span class="padding_left_10"><a href="#">Call : +7586656566</a></span></li>
                  <li><img src="{{asset('assets/images/mail-icon.png')}}"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></li>
               </ul>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="design.html">Our Designe</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Repair</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur  adipiscinaliqua  Loreadipiscing </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Social Media</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn active" href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <h1 class="useful_text">Our Repair center</h1>
                  <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>