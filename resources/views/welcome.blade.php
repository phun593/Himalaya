<!DOCTYPE html>
<html lang="zxx">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- SITE TITLE -->
        <title>Laxmi - Responsive App Landing Page</title>          
        <!-- Latest Bootstrap min CSS -->
        <link rel="stylesheet" href="{{url('/')}}/bootstrap/css/bootstrap.min.css">  
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/fullpage.css">     
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">      
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{url('/')}}/fonts/font-awesome.min.css">
        <!--- owl carousel Css-->
        <link rel="stylesheet" href="{{url('/')}}/owlcarousel/css/owl.carousel.css">
        <link rel="stylesheet" href="{{url('/')}}/owlcarousel/css/owl.theme.css">         
        <!-- MAGNIFIC CSS -->
        <link rel="stylesheet" href="{{url('/')}}/css/magnific-popup.css">                
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{url('/')}}/css/style.css"> 
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body data-spy="scroll" data-offset="80">

        <!-- START PRELOADER -->
        <div class="preloader">
            <div class="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
        
        <!-- START NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top menu-top menu_dropdown">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="arrow-btn" href="#home">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index_ripple.html">Home Water Fade</a></li>
                                    <li><a href="index_particle.html">Home Particle</a></li>
                                    <li><a href="index_youtube.html">Home Youtube</a></li>
                                </ul>
                            </li>
                            <li><a class="page-scroll" href="#feature">SERVICES</a></li>                        
                            <li><a class="page-scroll" href="#screenshots">BENEFITS</a></li>                     
                            <li><a class="page-scroll" href="#team">ABOUT US</a></li>                       
                            <li><a class="page-scroll" href="#pricing">Pricing</a></li>                     
                            <li><a class="page-scroll" href="#download">TESTIMONIALS</a></li>                       
                            <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#projectModal">Contact</a></li>                            
                        </ul>
                    </nav>
                </div>          
            </div><!--- END CONTAINER -->
        </div> 
        <!-- END NAVBAR --> 
            
        <!-- Overlay Modal  -->
        <div  tabindex="0" class="modal fade" id="projectModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Get in touch</h4>
                    </div>
                    <div class="modal-body">
                        <div class="contact">
                            <form id="contact-form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="actions">
                                            <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->  
                
        <!-- START HOME -->
        <section data-stellar-background-ratio="0.3" id="home" class="home_bg" style="background-image: url(assets/img/bg/home-bg.jpg);  background-size:cover; background-position: center center;">
            <div class="container">
                <div class="row">                 
                  <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="hero-text">
                        <h2>Make business easy with Beautiful landing page Laxmi</h2>
                         <p>Best way to promote your app. With this amazing template</p>
                        <div class="home_btn">
                            <a href="#" class="app-btn wow bounceIn" data-wow-delay=".2s" ><i class="fa fa-apple"></i>App Store</a>
                            <a href="#" class="app-btn wow bounceIn" data-wow-delay=".4s" ><i class="fa fa-play"></i>Google Play</a>
                        </div>
                    </div> 
                  </div><!--- END COL -->
                  <div class="col-md-5 col-sm-12 col-xs-12 text-center">
                    <div class="hero-text-img">
                        <img src="assets/img/hand.png" class="img-responsive" alt="" />
                    </div>
                  </div><!--- END COL -->                     
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END  HOME -->  

        <!-- START ABOUT -->
        <section id="feature" class="about-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_about">
                            <i class="fa fa-check"></i>
                            <h4>Data in cloud</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                        </div>
                    </div><!-- END COL-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_about">
                            <i class="fa fa-diamond"></i>
                            <h4>Exclusive design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                        </div>
                    </div><!-- END COL-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_about">
                            <i class="fa fa-paper-plane-o"></i>
                            <h4>enjoy it</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                        </div>
                    </div><!-- END COL-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_about">
                            <i class="fa fa-phone"></i>
                            <h4>24/7 support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                        </div>
                    </div><!-- END COL-->
                </div><!-- END ROW-->
            </div><!-- END CONTAINER-->
        </section>
        <!-- END ABOUT -->
        
        <!-- START FEATURED ONE -->
        <section class="feature-one section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="single_feature_one">
                            <h3>Manage everything <br> <strong>in one place</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            <a class="single_feature_btn_light" href="#">Download Now</a>
                        </div>
                    </div><!-- END COL-->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="single_feature_img">
                            <img class="img-responsive wow bounceIn" data-wow-delay=".6s" src="assets/img/mockup3-phone.png" alt="">
                        </div>
                    </div><!-- END COL-->                   
                </div><!-- END ROW-->
            </div><!-- END CONTAINER-->
        </section>
        <!-- END FEATURED ONE -->
        
        <!-- START FEATURED TWO -->
        <section class="feature-two section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="single_feature_two_img">
                            <img class="img-responsive wow bounceIn" data-wow-delay=".6s" src="assets/img/app-mockup-2.png" alt="">
                        </div>
                    </div><!-- END COL-->                   
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="single_feature_two">
                            <h3>Additional effects <br> <strong>unique to app</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            <a class="single_feature_btn_light" href="#">Download Now</a>
                        </div>
                    </div><!-- END COL-->
                </div><!-- END ROW-->
            </div><!-- END CONTAINER-->
        </section>
        <!-- END FEATURED TWO -->

        <!-- START AMAZING FEATURES -->
        <section class="amazing_feature">
            <div class="container">
                <div class="section-title text-center wow zoomIn">
                    <h2>Amazing Features</h2>
                    <div class="line"></div>
                    <p>We've got a lot of amaing and cool features.</p>                     
                </div>              
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-heart-o"></i></div>
                            <h3>Made with Love</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>    
                        </div>
                    </div><!-- END COL-->                               
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-magic"></i></div>
                            <h3>Powerful</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>        
                        </div>
                    </div><!-- END COL-->                   
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-paper-plane-o"></i></div>
                            <h3>Send Messages</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>    
                        </div>
                    </div><!-- END COL-->                           
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-money"></i></div>
                            <h3>Save Money</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>    
                        </div>
                    </div><!-- END COL-->                   
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-cog"></i></div>
                            <h3>Customizable</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>    
                        </div>
                    </div><!-- END COL-->                   
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_feature">
                            <div class="feature_icon"><i class="fa fa-database"></i></div>
                            <h3>Data Report</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Cras.</p>    
                        </div>
                    </div><!-- END COL-->                       
                </div><!--- END ROW -->         
            </div><!--- END CONTAINER -->       
        </section>
        <!-- END AMAZING FEATURES -->
        
        <!-- START HOW IT WORKS -->
        <section class="template_how_it_work">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 no-padding">
                        <div class="single_how_work_img">
                          <img src="assets/img/how_it_work.jpg" class="img-responsive" alt="" />
                        </div>    
                    </div><!--- END COL -->
                    <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
                        <div class="single_how_work">
                            <h4>how it works</h4>
                            <span></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="our_video">
                                <a class="video-play" href="https://player.vimeo.com/video/116147791"><i class="fa fa-play"></i> watch video</a>
                            </div>                      
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END HOW IT WORKS  -->          

        <!-- START TEAM -->
        <section id="team" class="team_member section-padding">
            <div class="container">
                <div class="section-title text-center wow zoomIn">
                    <h2>Our team</h2>
                    <div class="line"></div>
                    <p>Meet our expert team member for an question.</p>
                </div>              
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="our-team">
                            <div class="team_img">
                                <img src="assets/img/team/team-1.jpg" alt="team-image">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title">Masrafee</h3>
                                <span class="post">web developer</span>
                            </div>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="our-team">
                            <div class="team_img">
                                <img src="assets/img/team/team-2.jpg" alt="team-image">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title">Nafiza kamal</h3>
                                <span class="post">web developer</span>
                            </div>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="our-team">
                            <div class="team_img">
                                <img src="assets/img/team/team-3.jpg" alt="team-image">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title">Syed Ekram</h3>
                                <span class="post">web developer</span>
                            </div>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="our-team">
                            <div class="team_img">
                                <img src="assets/img/team/team-4.jpg" alt="team-image">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title">Masum Billah</h3>
                                <span class="post">web developer</span>
                            </div>
                        </div>
                    </div><!--- END COL -->             
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->       
        </section>
        <!-- END TEAM -->
        
        <!-- START APP SCREENSHOT  -->
        <section id="screenshots" class="app-screenshot section-padding">
            <div class="container">
                <div class="section-title text-center wow zoomIn">
                    <h2>Screenshots</h2>
                    <div class="line"></div>
                    <p>Our awesome app screenshot gallery here.</p>
                </div>              
                <div class="row">               
                    <div class="col-md-12">
                        <div class="s-slider">
                          <div class="item"><img src="assets/img/screenshot/1.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/2.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/3.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/4.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/5.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/6.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/7.jpg" alt=""/></div>
                          <div class="item"><img src="assets/img/screenshot/1.jpg" alt=""/></div>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->         
            </div><!--- END CONTAINER -->   
        </section>
        <!-- END APP SCREENSHOT -->     

        <!-- START PRICING TABLE  -->
        <div id="pricing" class="pricing_table section-padding"  style="background-image: url(assets/img/bg/pricing-bg.jpg);  background-size:cover; background-position: center center;">  
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title-white">Pricing Plan</h2>
                    <div class="line"></div>
                    <p class="section-title-white">Take a look our faster pricing plan.</p>
                </div>          
                <div class="row text-center">
                    <div class="col-sm-4 col-md-4 no-padding">                 
                       <div class="plan  first">
                          <div class="head"><h3>Starter</h3></div> 
                          <div class="price">
                            <h3><span class="symbol">$</span>29</h3>
                            <h4>per month</h4>
                          </div>                          
                          <ul class="item-list">
                              <li>Free Access</li>
                              <li>1GB Storage</li>
                              <li>20GB Bandwith</li>
                              <li>5 Products</li>
                              <li>1 Users Accounts</li>
                              <li>24/7 Support</li>
                          </ul>
                         <a class="btn btn-default btn-price-bg" href="">Get Plan</a>
                       </div>                                       
                    </div><!--- END COL -->          
                    <div class="col-sm-4 col-md-4 no-padding">                    
                        <div class="plan recommended">
                            <div class="head"><h3>Professional</h3></div> 
                            <div class="price">
                              <h3><span class="symbol">$</span>59</h3>
                              <h4>per month</h4>
                            </div>                          
                            <ul class="item-list">
                              <li>Free Access</li>
                              <li>2GB Storage</li>
                              <li>40GB Bandwith</li>
                              <li>10 Products</li>
                              <li>2 Users Accounts</li>
                              <li>24/7 Support</li>
                            </ul>
                            <a class="btn btn-default btn-price-bg" href="">Get Plan</a>
                       </div>
                    </div><!--- END COL -->     
                    <div class="col-sm-4 col-md-4 no-padding">  
                        <div class="plan last">
                            <div class="head"><h3>Premium</h3></div>  
                            <div class="price">
                              <h3><span class="symbol">$</span>89</h3>
                              <h4>per month</h4>
                            </div>                          
                            <ul class="item-list">
                              <li>Free Access</li>
                              <li>3GB Storage</li>
                              <li>40GB Bandwith</li>
                              <li>15 Products</li>
                              <li>3 Users Accounts</li>
                              <li>24/7 Support</li>
                            </ul>
                            <a class="btn btn-default btn-price-bg" href="">Get Plan</a>
                        </div>
                    </div><!--- END COL -->     
                </div><!--END  ROW  -->
            </div><!-- END CONTAINER  -->
        </div>
        <!-- END PRICING TABLE  -->

        <!-- START TESTIMONIAL -->
        <section class="testimonial section-padding">
            <div class="container">
                <div class="section-title text-center wow zoomIn">
                    <h2>Testimonials</h2>
                    <div class="line"></div>
                    <p>Our customer awesome review.</p>
                </div>                 
                <div class="row">   
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="assets/img/testimonial/1.jpg" class="img-responsive" alt="">
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus est non fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                </p>
                                <div class="testimonial-content">
                                    <h4 class="title">Jennifer lopez</h4>
                                    <span class="post">Web Developer</span>
                                </div>
                            </div>           
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="assets/img/testimonial/2.jpg" class="img-responsive" alt="">
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus est non fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                </p>
                                <div class="testimonial-content">
                                    <h4 class="title">James Simmons</h4>
                                    <span class="post">Web Designer</span>
                                </div>
                            </div>   
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="assets/img/testimonial/3.jpg" class="img-responsive" alt="">
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus est non fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                </p>
                                <div class="testimonial-content">
                                    <h4 class="title">Catrina Kaif</h4>
                                    <span class="post">Web Designer</span>
                                </div>
                            </div>   
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="assets/img/testimonial/4.jpg" class="img-responsive" alt="">
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis tempus est non fermentum. Nulla ut placerat tellus. Donec faucibus mi eu felis bibendum, eget.
                                </p>
                                <div class="testimonial-content">
                                    <h4 class="title">Williamson</h4>
                                    <span class="post">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->   
        </section>
        <!-- END TESTIMONIAL -->
        
        <!-- START DOWNLOAD -->
        <section id="download" class="download section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                        <div class="download_icon">
                            <h2>Now Available</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#"><img src="assets/img/apple.png" alt="" /></a>
                            <a href="#"><img src="assets/img/android.png" alt="" /></a>
                        </div>
                    </div><!--- END COL -->             
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->       
        </section>
        <!-- END DOWNLOAD -->

        <!-- START FAQ -->
        <section class="template_faq section-padding">
            <div class="container">
                <div class="section-title text-center wow zoomIn">
                    <h2>Frequently Asked Questions</h2>
                    <div class="line"></div>
                    <p>Get your question today</p>
                </div>                  
                <div class="row">                   
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span>  Why you choose Laxmi? </p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span>  Why Laxmi Laxmi? </p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span> How to apply Laxmi jobs? </p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span> How experts Laxmi team member? </p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span> What is the refund policy? </p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="faq_desc">
                            <p class="question"><span>Q:</span> How Laxmi give customer support</p>
                            <p class="ans"><span>A:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.</p>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END FAQ -->        

        <!-- START PARTNER LOGO -->
        <footer class="partner-logo section-padding">
            <div class="container">         
                <div class="row text-center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="partner  wow fadeInRight">
                            <a href="#"><img src="assets/img/client/client1.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client2.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client3.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client4.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client5.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client1.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client2.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client3.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client4.png" alt="image"></a>
                            <a href="#"><img src="assets/img/client/client5.png" alt="image"></a>
                        </div>                  
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->   
        </footer>
        <!-- END PARTNER LOGO -->   
        
        <!-- START FOOTER -->
        <div class="footer">
            <div class="container">     
                <div class="row">                   
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <img src="assets/img/logo.png" alt="logo">
                            <div class="contact_social">
                                <ul>
                                    <li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="f_instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="f_youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>                          
                            <div class="copyright">
                                <p>&copy; 2019 All Rights Reserved.</p>
                            </div>
                        </div><!--- END FOOTER COPYRIGHT -->
                    </div><!--- END COL -->     
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <h4>Important links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Licenses</a></li>
                            </ul>
                        </div>
                    </div><!--- END COL --> 
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Get in touch</h4>
                            <ul>
                                <li><span>Address:</span> Orange, USA </li>
                                <li><span>Email:</span> example@yourmail.com </li>
                                <li><span>Phone:</span> +880 123 456 789 </li>
                                <li><span>Work Time:</span> Mon - Fri: 08.00 - 16.00</li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Subscribe Today</h4>
                            <div class="signup_form">                           
                                <!-- Replace the form action in the line below with your MailChimp embed action! -->
                                <form novalidate="" target="_blank" class="validate" name="mc-embedded-subscribe-form" method="post" action="http://site90.us11.list-manage.com/subscribe/post?u=599a2153f4b86cb2f92d4af3a&amp;id=26d7c26287">
                                    <input type="email" placeholder="Enter Email" id="mce-email" class="form-control" name="EMAIL">
                                    <span><button class="btn btn-detault btn-light-bg" name="subscribe" type="submit">Subscribe</button></span>
                                    <div id="mce-responses">
                                        <div style="display:none" id="mce-error-response" class="response"></div>
                                        <div style="display:none" id="mce-success-response" class="response"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--- END COL -->         
                </div><!--- END ROW -->                 
            </div><!--- END CONTAINER -->
        </div>
        <!-- END FOOTER -->     
     
        <!-- Latest jQuery -->
            <script src="{{url('/')}}/js/jquery-1.12.4.min.js"></script>
        <!-- Latest compiled and minified Bootstrap -->
            <script src="{{url('/')}}/bootstrap/js/bootstrap.min.js"></script>
        <!-- modernizer JS -->      
            <script src="{{url('/')}}/js/modernizr-2.8.3.min.js"></script>                                                        
        <!-- stellar js -->
            <script src="{{url('/')}}/js/jquery.stellar.min.js"></script>             
        <!-- owl-carousel min js  -->
            <script src="{{url('/')}}/owlcarousel/js/owl.carousel.min.js"></script>
        <!-- scrolltopcontrol js -->
            <script src="{{url('/')}}/js/scrolltopcontrol.js"></script>           
        <!-- form-contact js -->
            <script src="{{url('/')}}/js/form-contact.js"></script>       
        <!-- MAGNIFICANT JS -->
            <script src="{{url('/')}}/js/jquery.magnific-popup.min.js"></script>          
        <!-- scripts js -->
            <script src="{{url('/')}}/js/scripts.js"></script>
    </body>
</html>