
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from thewebmax.com/industro/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 17:53:55 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>@yield('title','Calera Alsabe')</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/fontawesome/css/font-awesome.min.css') }}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/bootstrap-select.min.css') }}">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/loader.min.css') }}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/style.css') }}">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/flaticon.min.css') }}"> 
    
    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/lc_lightbox.css') }}" />     
    
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('industro/css/skin/skin-9.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/css/switcher.css') }}">  
     
 
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('industro/plugins/revolution/revolution/css/navigation.css') }}">
        
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet"> 

    @yield('styles')

</head>

<body>

	<div class="page-wraper">
     

                	
        <!-- HEADER START -->
        @include('landing.partials.header')
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
           @yield('content')                       
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        @include('landing.partials.footer')
        <!-- FOOTER END -->

        <!-- Get In Touch -->                            
        <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url(images/background/bg-7.jpg)"> 
            <div class="contact-nav">
                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                 <div class="contact-nav-form">
                    <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat" style="background-image:url(images/background/bg-map2.png);">
                    	<div class="row">
                        	<div class="col-lg-4 col-md-4">
                            	<div class="contact-nav-media-section">
                                	<div class="contact-nav-media">
                                    	<img src="images/self-pic.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <form class="cons-contact-form" method="post" action="https://thewebmax.com/industro/form-handler2.php">
                                    <div class="m-b30">
                                        <!-- TITLE START -->
                                         <h2 class="m-b30">Get In Touch</h2>
                                        <!-- TITLE END --> 
                                            <div class="row">
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                       <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                     </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                         <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                     </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                     </div>
                                                </div>
                                                
                                               <div class="col-md-12">
                                                    <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                                                </div>
                                                
                                            </div>
                                    </div>
                                </form>
                                <div class="contact-nav-inner text-black">
                                    <!-- TITLE START -->
                                    <h2 class="m-b30">Contact Info</h2>
                                    <!-- TITLE END -->
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Phone number</h4>
                                                        <p>(456) 789 10 12</p>
                                                        <p>(456) 789 10 15</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Email address</h4>
                                                        <p>demo@gmail.com</p>
                                                        <p>indusinfo@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper left icon-shake-outer">
                                                    <div class="icon-content">
                                                        <h4 class="m-t0">Address info</h4>
                                                        <p>1363-1385 Sunset Blvd Los Angeles</p>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                                        
                 </div>
            </div> 
        </div>     
        
        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


 
 	</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
    
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('industro/js/jquery-2.2.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('industro/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('industro/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('industro/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('industro/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('industro/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('industro/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('industro/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('industro/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('industro/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('industro/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
<script  src="{{ asset('industro/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('industro/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('industro/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('industro/js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('industro/js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('industro/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('industro/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="{{ asset('industro/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('industro/js/rev-script-7.js') }}"></script>
@yield('scripts')

</body>


<!-- Mirrored from thewebmax.com/industro/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 17:54:11 GMT -->
</html>
