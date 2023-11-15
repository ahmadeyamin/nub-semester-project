
<!doctype html>
<html lang="en">
	
<!-- Mirrored from shreethemes.in/towntor/layouts/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 15:17:41 GMT -->
<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Towntor - Real Estate Bootstrap 5 Landing Template</title>
	    <meta name="description" content="Real Estate Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, Real Estate, buy, sell, Rent" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in/" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="{{asset('css/bootstrap.min.css')}}"  type="text/css" rel="stylesheet" />
        <!-- Slider -->               
        <link href="{{asset('css/tiny-slider.css')}}"  rel="stylesheet" />
        <!-- Tobii -->
        <link href="{{asset('css/tobii.min.css')}}"  rel="stylesheet" type="text/css" />
        <!-- Choice css -->               
        <link href="{{asset('css/choices.min.css')}}"  rel="stylesheet" />
	    <!--Material Icon -->
        <link href="{{asset('css/materialdesignicons.min.css')}}"  rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="{{asset('css/style.min.css')}}"  rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <a class="logo" href="index.html">
                    <span class="logo-light-mode">
                        <img src="images/logo-icon.png" class="l-dark" alt="" height="60" >
                        <img src="images/logo-icon-white.png" class="l-light" height="60" alt="">
                    </span>
                    <img src="images/logo-icon-white.png" class="logo-dark-mode"  height="60" alt="">
                </a>

                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                  
                    <li class="list-inline-item ps-1 mb-0">
                        <a href="auth-login.html" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="user" class="icons"></i></a>
                    </li>
                </ul>
        
                <div id="navigation">
                    <ul class="navigation-menu nav-left nav-light">
                       
                        
                        <li><a href="buy.html" class="sub-menu-item">Find rent</a></li>
                        
                        <li><a href="sell.html" class="sub-menu-item">Rent house</a></li>
        
                
        
                        <li><a href="contactus.html" class="sub-menu-item">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <section class="bg-building-pic d-table w-100" style="background: url('images/building.png') bottom no-repeat;"></section>
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-60 footer-border">
                            <div class="row">
                                <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                    <a href="#" class="logo-footer">
                                        <img src="images/logo-icon-white.png" height="70" alt="">
                                    </a>
                                    <p class="mt-4">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                      
                                        <li class="list-inline-item"><a href="#" target="_blank" class="rounded-3"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                       
                                        <li class="list-inline-item"><a href="mailto:ahmadeyamin@gmail.com" class="rounded-3"><i data-feather="mail" class="fea icon-sm align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                                
                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Company</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> About us</a></li>
                                     
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->
                                
                          
                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Contact Details</h5>

                                    <div class="d-flex mt-4">
                                        <i data-feather="map-pin" class="fea icon-sm text-primary mt-1 me-3"></i>
                                       NUB, Dhaka
                                    </div>
        
                                    <div class="d-flex mt-4">
                                        <i data-feather="mail" class="fea icon-sm text-primary mt-1 me-3"></i>
                                        <a href="mailto:contact@example.com" class="text-foot">contact@example.com</a>
                                    </div>
                                    
                                    <div class="d-flex mt-4">
                                        <i data-feather="phone" class="fea icon-sm text-primary mt-1 me-3"></i>
                                        <a href="tel:+152534-468-854" class="text-foot">+152 534-468-854</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="footer-py-30 footer-bar">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> NUB. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Team Zx</a>.</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
	    <script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
        <!-- Tiny slider -->
        <script src="{{asset('js/tiny-slider.js')}}" ></script>
        <!-- Tobii -->
        <script src="{{asset('js/tobii.min.js')}}" ></script>
        <!-- Choice js -->
        <script src="{{asset('js/choices.min.js')}}" ></script>
        <!-- Icons -->
        <script src="{{asset('js/feather.min.js')}}" ></script>
	    <!-- Custom -->
	    <script src="{{asset('js/plugins.init.js')}}" ></script>
	    <script src="{{asset('js/app.js')}}" ></script>
    </body>

<!-- Mirrored from shreethemes.in/towntor/layouts/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 15:17:57 GMT -->
</html>