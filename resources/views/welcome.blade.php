<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>qtaaruf</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="taaruf online" />
        <meta name="keywords" content="taaruf online, qtaaruf, taaruf" />
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <meta name="google-site-verification" content="efEBCe6GneopyaxXRzzmGWYMrG9F6lE45Nl1Szommv0" />

        <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ asset('/css/icomoon.css') }}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <!-- Modernizr JS -->
        <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="icon" href="{{ asset('/images/icon.png') }}">
    </head>
    
            <!-- HOME -->
            @yield('konten')

            <div id="fh5co-testimonial" style="background-image: url( {{ asset('/images/foto_bawah.jpg') }});">
                <div class="container">         
                    <div class="animate-box">
                        <div class="testimony">
                            <blockquote>
                                <h5><b>Jika Jodoh adalah bagian dari rizqi</b></h5>
                                <p style="color: #fff" class="text-justify">&ldquo;Janganlah kalian merasa bahwa rizqi kalian datangnya terlambat, karena sesungguhnya tidaklah seseorang hamba meninggal, hingga telah datang kepadanya rizqi terakhir yang di tetapkan untuknya. Maka tempuhlah jalan yang baik dalam mencari rizqi, yaitu dengan yang halal dan meninggalkan yang haram.&rdquo;</p>
                            </blockquote>
                            <p class="author"><cite><b></b>Sabda Rasulullah, diriwayatkan Imam Ibnu Majah</cite></p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
        
        <div id="fh5co-started">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading-subscribe">
                            <h2>Subscribe</h2>
                            <h3>Dapatkan e-book dan tips-tips menarik tentang membangun keluarga sakinah.</h3>
                            
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2">
                            <form method="POST" action="subscribe/input.php" class="form-inline">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                    
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" id="subscribe" name="subscribe" required>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 col-sm-4 fh5co-widget text-left">
                        <h3>Hubungi Kami</h3>
                        <p>Spazio Forward Factory Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>admin@qtaaruf.com<br>+62857 2977 2893</p>
                        <!-- <h3>Hubungi Kami</h3>
                        <p>qtaaruf<br>Gedung Spazio Forward Factory Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>qtaaruf.indonesia@gmail.com<br>+62857 2977 2893</p> -->
                    </div>
                    
                        <!--<div class="col-md-4 col-sm-4 fh5co-widget text-center">
                        <h3>Supported by</h3>
                        <img src="assets/images/1000sd.jpg" style="width: 20%; height: 20%; margin-left: 2.5%; margin-right: 2.5%">
                        <img src="assets/images/iqf.jpg" style="width: 20%; height: 20%; margin-left: 2.5%; margin-right: 2.5%">
                         <h3>Hubungi Kami</h3>
                        <p>qtaaruf<br>Gedung Spazio Forward Factory Lt. 7<br>Jl. Mayjen Yonosuwoyo Kav.3, Surabaya<br>qtaaruf.indonesia@gmail.com<br>+62857 2977 2893</p> 
                    </div>-->
                    <!-- <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Meetups</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Handbook</a></li>
                            <li><a href="#">Held Desk</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Find Designers</a></li>
                            <li><a href="#">Find Developers</a></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <p>
                            <small class="block">&copy; 2017 qtaaruf</small> 
                            
                        </p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="https://www.facebook.com/Qtaaruf/"><i class="icon-facebook"></i></a></li>
                                <li><a href="http://instagram.com/_u/qtaaruf"><i class="icon-instagram"></i></a></li>
                                <li><a href="https://www.twitter.com/qtaaruf"><i class="icon-twitter"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>

                <!-- <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2017 qtaaruf</small> 
                            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a></small>
                        </p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <!-- <li><a href="#"><i class="icon-mail"></i></a></li>
                                <li><a href="https://www.facebook.com/Qtaaruf/"><i class="icon-facebook"></i></a></li>
                                <li><a href="http://instagram.com/_u/qtaaruf"><i class="icon-instagram"></i></a></li>
                                <li><a href="https://www.twitter.com/qtaaruf"><i class="icon-twitter"></i></a></li>
                                <!-- <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div> -->
            </div>
        </footer>
        
        <!-- jQuery -->
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <!-- jQuery Easing -->
        <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
        <!-- countTo -->
        <script src="{{ asset('/js/jquery.countTo.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/js/magnific-popup-options.js') }}"></script>
        <!-- Main -->
        <script src="{{ asset('/js/main.js') }}"></script>
        <!-- <script src="{{ url('js/gallery.js') }}"></script> -->

    </body>
</html>
