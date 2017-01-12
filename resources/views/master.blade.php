 

<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/rtl.css') }}">
<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/font.css') }}">
<link rel="stylesheet" href="{{ asset('/css/li-scroller.css') }}">
<link rel="stylesheet" href="{{ asset('/ss/slick.css') }}">
<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
 

 
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">
لطفا صبر کنید
  &nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="/images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="http://www.psseo.ir/images/psseo.gif" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>

    @yield('item')
 
 <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="index.html">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="/js/jquery.min.js"></script> 
<script src="/js/wow.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/slick.min.js"></script> 
<script src="/js/jquery.li-scroller.1.0.js"></script> 
<script src="/js/jquery.newsTicker.min.js"></script> 
<script src="/js/jquery.fancybox.pack.js"></script> 
<script src="/js/custom.js"></script>
</body>
</html>