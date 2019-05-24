<!doctype html>
<html lang="zxx">

<!-- Mirrored from www.inventheme.com/themeforest/axoma/axoma/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 19:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Axoma">
  <meta name="keywords" content="Axoma">
  <meta name="apple-mobile-web-app-capable" content="yes">

    {{--asjdhauisdhuiasdh--}}

  <!--
  ========================================================================
  EXCLUSIVE ON themeforest.net
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Template Name   : Axoma
  Author          : PXdraft
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Copyright (c) 2018 - Axoma
  ========================================================================
  -->
  <title>CloudHawkIT</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Plugin CSS -->
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/et-line/style.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">
  <!-- End -->
  

  <!-- Theme css -->
  <link href="static/css/style.css" rel="stylesheet">
  <link href="static/css/color/default.css" rel="stylesheet" id="color_theme">
  <!-- End -->

</head>

<!-- ========== Body Starts ========== -->
<!-- Body Start -->
<body data-spy="scroll" data-target="#navbar" data-offset="98">

  <!-- Loading -->
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <!-- / -->

  <!-- Header -->
  <header>
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img class="light-logo" src="static/img/logo-light.svg" title="" alt="">
          <img class="dark-logo" src="static/img/logo.svg" title="" alt="">
        </a>
        <!-- / -->

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- / -->

        <!-- Top Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
          <ul class="navbar-nav ml-auto align-items-center">
            <li class="m-dropdown m-dropdown-multilevel">
              <a class="nav-link" href="#home">Home</a>
              <i class="fa fa-angle-down m-dropdown-toggle"></i>
              <ul class="m-dropdown-menu">
                  <li><a href="index.html">Home Option 1</a></li>
                  <li><a href="index-2.html">Home Option 2</a></li>
                  <li><a href="index-3.html">Home Option 3</a></li>
                  <li><a href="index-4.html">Home Option 4</a></li>
                  <li><a href="index-5.html">Home Option 5</a></li>
                  <li><a href="index-6.html">Home Option 6</a></li>
                  <li><a href="index-7.html">Home Option 7</a></li>
                  <li><a href="index-8.html">Home Option 8</a></li>
              </ul>
            </li>

            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link" href="#feature">Features</a></li>
            <li><a class="nav-link" href="#price">Price</a></li>
            <li><a class="nav-link" href="#blog">Blog</a></li>
            <li class="m-dropdown m-dropdown-multilevel">
              <a class="nav-link" href="#">Pages</a>
              <i class="fa fa-angle-down m-dropdown-toggle"></i>
              <ul class="m-dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="features.html">Features</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="price.html">Price</a></li>
                  <li><a href="faq.html">FAQ's</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog List</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="#contatus">Contact</a></li>
            <li><a class="nav-link-btn btn btn-white m-25px-l md-m-0px-l" href="#">Sign In</a></li>
          </ul>
        </div>
        <!-- / -->
        
      </div><!-- Container -->
      
    </nav> <!-- Navbar -->
  </header>
  <!-- Header End -->
  
  
  
  <!-- Main -->
  <main>



    <!-- 
    =============================
      Home Banner
    =============================
    -->
   
    <section id="home" class="round-box home-banner-06 theme-bg">
      <div class="round">
        <div class="r1"></div>
        <div class="r2"></div>
        <div class="r3"></div>
      </div>

      <div class="round r-bottom">
        <div class="r1"></div>
        <div class="r2"></div>
        <div class="r3"></div>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center p-100px-t">
          <div class="col-lg-10 m-50px-tb text-center">
            <h1 class="white-color">Axoma Manage Everything in One Place</h1>
            <p class="white-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="subscribe-block">
              <form class="form-group" method="POST" action="{{action('EmailController@subscription')}}">
                {{ csrf_field() }}
                <input class="form-control" type="email" placeholder="Your email" name="email">
                <span class="input-focus-effect theme-bg"></span>
                <button class="btn-theme btn" type="SUBMIT" >Get Updates</button>
              </form>
              <span class="input-focus-effect theme-bg">@include('incl.message')</span>
            </div>
          </div> <!-- col -->
          <div class="col-lg-12">
            <img src="static/img/feature-13.png" title="" alt="">
          </div>
        </div> <!-- row -->
      </div>
    </section>
    <!-- / -->
    <!-- Modal -->

    
    <!-- 
    =============================
      About us
    =============================
    -->
    <section id="about" class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 md-m-30px-b">
            <img src="static/img/feature-11.svg" title="" alt="">
          </div> <!-- col -->
          <div class="col-md-6">
            <div class="sub-title m-45px-b">
              <h3 class="font-alt dark-color">Create Awesome Landing Page With Axoma</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
              <div class="col-md-6 md-m-30px-b">
                <div class="feature-box-05">
                  <div class="icon theme-after">
                    <i class="ti-check-box yellow-bg"></i>
                  </div>
                  <div class="feature-content">
                    <h5 class="dark-color">Instant Setup</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="link-btn theme-color" href="#">Learn More</a>
                  </div>
                </div>
              </div> <!-- col -->

              <div class="col-md-6">
                <div class="feature-box-05">
                  <div class="icon theme-after">
                    <i class="ti-rocket pink-bg"></i>
                  </div>
                  <div class="feature-content">
                    <h5 class="dark-color">Fast Loading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="link-btn theme-color" href="#">Learn More</a>
                  </div>
                </div>
              </div> <!-- col -->
            </div> <!-- row -->


          </div> <!-- col -->
        </div> <!-- row -->
        
      </div> <!-- conainer -->
    </section>
    <!-- / -->
    
    <!-- 
    =============================
      Features
    =============================
    -->
    <section id="feature" class="section shapes-section gray-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
              <div class="sub-title m-20px-b">
                <h2 class="font-alt theme-after dark-color">Create Awesome Landing Page With Us</h2>
                <p class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <div class="btn-bar m-30px-t">
                <a class="btn-theme btn" href="#">Learn More</a>
              </div>
          </div>
          <div class="col-md-6 md-m-45px-t">
            <div class="full-width">
              <img src="static/img/feature-12.png" title="" alt="">
            </div>
          </div>
        </div> <!-- row -->
      </div>
    </section>

    <section class="section shapes-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-first order-last md-m-30px-t">
            <div class="full-width float-right text-center text-md-right">
              <img src="static/img/feature-14.png" title="" alt="">
            </div>
          </div>

          <div class="col-md-6">
              <div class="sub-title m-20px-b">
                <h2 class="font-alt theme-after dark-color">Create Awesome Landing Page With Us</h2>
                <p class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <div class="btn-bar m-30px-t">
                <a class="btn-theme btn" href="#">Learn More</a>
              </div>
          </div>
          
        </div> <!-- row -->
      </div>
    </section>

    <!-- 
    =============================
      Fun Facts      
    =============================
    -->
    <section class="section gray-bg counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 m-15px-tb">
            <div class="sub-title m-15px-b">             
              <h3 class="font-alt dark-color">A focused Axoma with a specialized skill set</h3>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="btn-bar m-30px-t">
                <a class="btn btn-theme" href="#">Learn More</a>
              </div>
            </div>
          </div> <!-- col -->
          <div class="col-lg-7">
            <div class="row">
              <div class="col-sm-6 m-15px-tb">
                <div class="counter-data-01 box-shadow">
                  <i class="theme-color ti-face-smile"></i>
                  <div class="count dark-color font-alt" data-to="380" data-speed="380">380</div>
                  <h6 class="dark-color">Happy Clients</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
              </div> <!-- col -->

              <div class="col-sm-6 m-15px-tb">
                <div class="counter-data-01 box-shadow">
                  <i class="theme-color ti-headphone"></i>
                  <div class="count dark-color font-alt" data-to="250" data-speed="250">250</div>
                  <h6 class="dark-color">Telephonic Talk</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
              </div> <!-- col -->

              <div class="col-sm-6 m-15px-tb">
                <div class="counter-data-01 box-shadow">
                  <i class="theme-color ti-camera"></i>
                  <div class="count dark-color font-alt" data-to="690" data-speed="690">690</div>
                  <h6 class="dark-color">Photo Capture</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
              </div> <!-- col -->

              <div class="col-sm-6 m-15px-tb">
                <div class="counter-data-01 box-shadow">
                  <i class="theme-color ti-thumb-up"></i>
                  <div class="count dark-color font-alt" data-to="190" data-speed="190">190</div>
                  <h6 class="dark-color">Projects</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
              </div> <!-- col -->
            </div> <!-- row -->

          </div> <!-- col -->

        </div> <!-- row -->
      </div> <!-- container -->
    </section>

    <!-- 
    =============================
      Our Team
    =============================
    -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center m-45px-b sm-m-25px-b">
          <div class="col-lg-6 col-md-10">
            <div class="sub-title text-center">
              <h2 class="font-alt theme-after dark-color">Our Best Team</h2>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 m-15px-tb">
            <div class="our-team">
              <div class="team-avtar">
                <img src="static/img/team-1.jpg" title="" alt="">
                <ul class="social-icons">
                  <li><a class="theme-bg" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="team-info">
                <h6 class="font-alt dark-color">Will Byers</h6>
                <label>Chief Executive Officer</label>
              </div>
            </div>
          </div> <!-- col -->

          <div class="col-md-6 col-lg-3 m-15px-tb">
            <div class="our-team">
              <div class="team-avtar">
                <img src="static/img/team-2.jpg" title="" alt="">
                <ul class="social-icons">
                  <li><a class="theme-bg" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="team-info">
                <h6 class="font-alt dark-color">Will Byers</h6>
                <label>Chief Executive Officer</label>
              </div>
            </div>
          </div> <!-- col -->

          <div class="col-md-6 col-lg-3 m-15px-tb">
            <div class="our-team">
              <div class="team-avtar">
                <img src="static/img/team-4.jpg" title="" alt="">
                <ul class="social-icons">
                  <li><a class="theme-bg" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="team-info">
                <h6 class="font-alt dark-color">Will Byers</h6>
                <label>Chief Executive Officer</label>
              </div>
            </div>
          </div> <!-- col -->

          <div class="col-md-6 col-lg-3 m-15px-tb">
            <div class="our-team">
              <div class="team-avtar">
                <img src="static/img/team-3.jpg" title="" alt="">
                <ul class="social-icons">
                  <li><a class="theme-bg" href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a class="theme-bg" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="team-info">
                <h6 class="font-alt dark-color">Will Byers</h6>
                <label>Chief Executive Officer</label>
              </div>
            </div>
          </div> <!-- col -->

        </div>


      </div> <!-- container -->
    </section>

    <!-- 
    =============================
      Pricing
    =============================
    -->
    <section id="price" class="section gray-bg">
      <div class="container">
        <div class="row justify-content-center m-45px-b sm-m-25px-b">
          <div class="col-lg-6 col-md-10">
            <div class="sub-title text-center">
              <h2 class="font-alt theme-after dark-color">Our Price</h2>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 m-15px-tb">
              <div class="price-table-01">
                <div class="price-header">
                  <h4 class="price-title font-alt dark-color">Starter</h4>
                  <p>For Personal User</p>
                  <div class="price-value theme-color"><span>$</span>10.00<span class="mo">/Month</span></div>
                </div>
                <div class="price-body">
                  <ul>
                    <li>Unlimited bug report</li>
                    <li>Unlimited members</li>
                    <li>1 year data retention</li>
                    <li>Slack integration</li>
                  </ul>
                </div>
                <div class="price-footer">
                  <a href="#" class="btn btn-theme">Sign Up</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 m-15px-tb">
              <div class="price-table-01 theme-bg active">
                <div class="price-header">
                  <h4 class="price-title font-alt white-color">Starter</h4>
                  <p class="white-color-light">For Personal User</p>
                  <div class="price-value white-color"><span>$</span>10.00<span class="mo">/Month</span></div>
                </div>
                <div class="price-body">
                  <ul class="white-color-light">
                    <li>Unlimited bug report</li>
                    <li>Unlimited members</li>
                    <li>1 year data retention</li>
                    <li>Slack integration</li>
                  </ul>
                </div>
                <div class="price-footer">
                  <a href="#" class="btn btn-t-white">Sign Up</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 m-15px-tb">
              <div class="price-table-01">
                <div class="price-header">
                  <h4 class="price-title font-alt dark-color">Starter</h4>
                  <p>For Personal User</p>
                  <div class="price-value theme-color"><span>$</span>10.00<span class="mo">/Month</span></div>
                </div>
                <div class="price-body">
                  <ul>
                    <li>Unlimited bug report</li>
                    <li>Unlimited members</li>
                    <li>1 year data retention</li>
                    <li>Slack integration</li>
                  </ul>
                </div>
                <div class="price-footer">
                  <a href="#" class="btn btn-theme">Sign Up</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 m-15px-tb">
              <div class="price-table-01">
                <div class="price-header">
                  <h4 class="price-title font-alt dark-color">Starter</h4>
                  <p>For Personal User</p>
                  <div class="price-value theme-color"><span>$</span>10.00<span class="mo">/Month</span></div>
                </div>
                <div class="price-body">
                  <ul>
                    <li>Unlimited bug report</li>
                    <li>Unlimited members</li>
                    <li>1 year data retention</li>
                    <li>Slack integration</li>
                  </ul>
                </div>
                <div class="price-footer">
                  <a href="#" class="btn btn-theme">Sign Up</a>
                </div>
              </div>
            </div>
        </div>

      </div>
    </section>

    <!-- 
    =============================
      Clients
    =============================
    -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center m-45px-b sm-m-25px-b">
          <div class="col-lg-6 col-md-10">
            <div class="sub-title text-center">
              <h2 class="font-alt theme-after dark-color">Our Clients</h2>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="owl-carousel" data-items="3" data-nav-dots="ture" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="30" data-nav-arrow="false">
              <div class="testimonial theme-after">
                <div class="testimonial-info">
                  <div class="avtar"><img src="static/img/round1.jpg" title="" alt=""></div>
                  <div class="name">
                    <span class="font-alt dark-color">Morgan Cruz</span>
                    <label>UX Designer</label>
                  </div>
                </div>

                <div class="testimonial-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </div> <!-- testimonial -->
              <div class="testimonial theme-after">
                <div class="testimonial-info">
                  <div class="avtar"><img src="static/img/round1.jpg" title="" alt=""></div>
                  <div class="name">
                    <span class="font-alt dark-color">Morgan Cruz</span>
                    <label>UX Designer</label>
                  </div>
                </div>

                <div class="testimonial-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </div> <!-- testimonial -->
              <div class="testimonial theme-after">
                <div class="testimonial-info">
                  <div class="avtar"><img src="static/img/round1.jpg" title="" alt=""></div>
                  <div class="name">
                    <span class="font-alt dark-color">Morgan Cruz</span>
                    <label>UX Designer</label>
                  </div>
                </div>

                <div class="testimonial-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </div> <!-- testimonial -->
              <div class="testimonial theme-after">
                <div class="testimonial-info">
                  <div class="avtar"><img src="static/img/round1.jpg" title="" alt=""></div>
                  <div class="name">
                    <span class="font-alt dark-color">Morgan Cruz</span>
                    <label>UX Designer</label>
                  </div>
                </div>

                <div class="testimonial-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </div> <!-- testimonial -->
              <div class="testimonial theme-after">
                <div class="testimonial-info">
                  <div class="avtar"><img src="static/img/round1.jpg" title="" alt=""></div>
                  <div class="name">
                    <span class="font-alt dark-color">Morgan Cruz</span>
                    <label>UX Designer</label>
                  </div>
                </div>

                <div class="testimonial-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </div> <!-- testimonial -->
            </div>
          </div>
        </div> <!-- row -->

      </div>
    </section>

    <!-- 
    =============================
      Our Blog
    =============================
    -->
    <section id="blog" class="section gray-bg">
      <div class="container">
        <div class="row justify-content-center m-45px-b sm-m-25px-b">
          <div class="col-lg-6 col-md-10">
            <div class="sub-title text-center">
              <h2 class="font-alt theme-after dark-color">Latest Blog</h2>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4 m-15px-tb">
              <div class="blog-item">
                <div class="blog-img">
                  <a href="#">
                    <img src="static/img/blog-img1.jpg" title="" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="post-meta"> OCT 15, 2018 </div><!-- /post-meta -->
                  <h4><a class="dark-color" href="#">See Our most successful complited project.</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="btn-bar">
                    <a class="btn btn-theme" href="#">Read More</a>
                  </div>
                </div><!-- /blog-content -->
              </div>
          </div>

          <div class="col-md-4 m-15px-tb">
              <div class="blog-item">
                <div class="blog-img">
                  <a href="#">
                    <img src="static/img/blog-img3.jpg" title="" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="post-meta"> OCT 15, 2018 </div><!-- /post-meta -->
                  <h4><a class="dark-color" href="#">See Our most successful complited project.</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="btn-bar">
                    <a class="btn btn-theme" href="#">Read More</a>
                  </div>
                </div><!-- /blog-content -->
              </div>
          </div>

          <div class="col-md-4 m-15px-tb">
              <div class="blog-item">
                <div class="blog-img">
                  <a href="#">
                    <img src="static/img/blog-img2.jpg" title="" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="post-meta"> OCT 15, 2018 </div><!-- /post-meta -->
                  <h4><a class="dark-color" href="#">See Our most successful complited project.</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="btn-bar">
                    <a class="btn btn-theme" href="#">Read More</a>
                  </div>
                </div><!-- /blog-content -->
              </div>
          </div>
        </div>

      </div>
    </section>

    <!-- 
    =============================
      Contact Us
    =============================
    -->
    <section id="contatus" class="section">
      <div class="container">
        <div class="row justify-content-center m-45px-b sm-m-25px-b">
          <div class="col-lg-6 col-md-10">
            <div class="sub-title text-center">
              <h2 class="font-alt theme-after dark-color">Get In Touch</h2>
              <p class="m-0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8 md-m-30px-b">
            <div class="contact-form">
                <h4 class="dark-color font-alt m-30px-b">Say Something</h4>
                <form class="contactform" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input id="name" name="name" type="text" placeholder="Name" class="validate form-control" required>
                          <span class="input-focus-effect theme-bg"></span>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <input id="email" type="email" placeholder="Email" name="email" class="validate form-control" required>
                          <span class="input-focus-effect theme-bg"></span>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                          <textarea id="message" placeholder="Your Comment" name="message" class="form-control" required></textarea>
                          <span class="input-focus-effect theme-bg"></span>
                        </div>
                       </div>
                        <div class="col-md-12">
                          <div class="send">
                             <button class="btn btn-theme" type="submit" name="send"> send message</button>
                          </div>
                          <span class="output_message"></span>
                        </div>
                      </div>
                </form>
            </div>
          </div> <!-- col -->
          <div class="col-lg-4">
            <div class="contact-info">
                <i class="theme-color ti-location-pin"></i>
                <h6 class="dark-color font-alt">Our Address</h6>
                <p>123 Stree New York City , United States Of America 750065.</p>
            </div>
            <div class="contact-info">
              <i class="theme-color ti-mobile"></i>
              <h6 class="dark-color font-alt">Our Phone</h6>
              <p>Office: +004 44444 44444<br/>
                Office: +004 44444 44444<br/></p>
            </div>
            <div class="contact-info">
                <i class="theme-color ti-email"></i>
                <h6 class="dark-color font-alt">Our Email</h6>
                <p>info@domainname.com<br/>contact@domainname.com</p>
            </div>
          </div>
        </div>

        
      </div> <!-- container -->
    </section>

  </main>
  <!-- / -->

  <!-- Footer -->
  <footer class="footer footer-dark">
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4 sm-m-15px-tb md-m-30px-b">
            <h4 class="font-alt">About Us</h4>
            <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="google" href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div> <!-- col -->

          <div class="col-6 col-md-4 col-lg-2 sm-m-15px-tb">
            <h4 class="font-alt">Product</h4>
            <ul class="fot-link">
              <li><a href="#">Features</a></li>
              <li><a href="#">Carrers</a></li>
              <li><a href="#">Awards</a></li>
              <li><a href="#">Users Program</a></li>
              <li><a href="#">Locations</a></li>
            </ul>
          </div> <!-- col -->

          <div class="col-6 col-md-4 col-lg-2 sm-m-15px-tb">
            <h4 class="font-alt">Company</h4>
            <ul class="fot-link">
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
          </div>

          <div class="col-md-4 col-lg-4 sm-m-15px-tb">
            <h4 class="font-alt">Subscribe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="subscribe-box m-20px-t">
              <input placeholder="Enter Email Id" class="form-control" type="text" name="demo">
              <button class="btn btn-theme"><i class="ti-arrow-right"></i></button>
            </div>
          </div> <!-- col -->

        </div>
        
        <div class="footer-copy">
          <div class="row">
            <div class="col-12">
              <p>All © Copyright by . All Rights Reserved.</p>
            </div><!-- col -->
          </div> <!-- row -->
        </div> <!-- footer-copy -->

      </div> <!-- container -->   
    </section>
  </footer>
  <!-- / -->
  

  <!-- Jquery -->
  <script src="static/js/jquery-3.2.1.min.js"></script>
  <script src="static/js/jquery-migrate-3.0.0.min.js"></script>
  <!-- End -->

  <!-- Plugin JS -->
  <script src="static/plugin/appear/jquery.appear.js"></script><!--appear-->
  <script src="static/plugin/bootstrap/js/popper.min.js"></script><!--popper-->
  <script src="static/plugin/bootstrap/js/bootstrap.js"></script><!--bootstrap-->
  <!-- End -->

  <!-- Custom -->
  
  <script src="static/js/jquery.parallax-scroll.js"></script>
  <script src="static/js/custom.js"></script>
  <!-- End -->

</body>
<!-- ========== End of Body ========== -->

<!-- Mirrored from www.inventheme.com/themeforest/axoma/axoma/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 19:51:41 GMT -->
</html>
