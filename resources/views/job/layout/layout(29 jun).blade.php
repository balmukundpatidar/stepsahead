<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>
    Steps Ahead Care &amp; Support | Plymouth &#8211; providing support to
    those with an acquired brain injury, challenging behaviour, mental health
    and learning disabilities
  </title>
     <meta name="keywords" content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-description')">
    <meta name="author" content="">
	<link rel="icon" href="{{url('/')}}/jobs/img/logo-icon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{url('/')}}/jobs/css/global.css" />
</head>

<body>
  <!-- Loader -->
  <div class="loader">
    <div class="LoaderBalls">
      <div class="LoaderBalls__item"></div>
      <div class="LoaderBalls__item"></div>
      <div class="LoaderBalls__item"></div>
    </div>
  </div>
  <!-- Header -->

  <!-- header -->
  <header>
    <div class="container">
      <div class="h-wrapper d-flex align-items-center">
        <div class="logo">
          <a href="{{url('/')}}">
            <img src="{{url('/')}}/jobs/img/logo.png" alt="Step Ahead" />
          </a>
        </div>
        <div class="navigation ml-auto">
          <ul class="d-flex align-items-center nav">
            <li>
              <a href="{{url('/about')}}">About</a>
            </li>
            <li>
              <a href="{{url('/packages')}}">Packages</a>
            </li>
            <li>
              <a href="{{url('/agency')}}">Agency</a>
            </li>
            <li>
              <a href="{{url('/training')}}">Training</a>
            </li>
            <li>
              <a href="{{url('/vacancies')}}">Vacancies</a>
            </li>
            <li>
              <a href="{{url('/contactus')}}" class="custom-btn btn-filled">Contact Us</a>
            </li>
          </ul>
        </div>
        <div id="nav-icon" class="">
          <span></span> <span></span> <span></span>
        </div>
        <div class="overlay-close"></div>
      </div>
    </div>
  </header>
@yield('content') 
  <!--[footer] -->
  <footer class="footer">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-lg-3 col-sm-7">
          <div class="ftr-links">
            <img src="{{url('/')}}/jobs/img/footer-logo.png" alt="icon" />
            <h2><span>Call Us:</span><a href="tel: 01752 547257"> 01752 547257</a></h2>
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-5">
          <div class="quick-links pl-5">
            <h1>Links</h1>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Packages </a></li>
              <li><a href="#">Agency</a></li>
              <li><a href="#">Training </a></li>
              <li><a href="#">Vacancies</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-7">
          <div class="quick-links">
            <h1>Recent Tweets</h1>
            <div class="tweets">
              <i class="fa fa-twitter"></i>
              <h3>Duck Watch Feature: Gabe Pierce</h3>
              <a href="#">https://t.co/HPZEMB4mQ2</a>
              <a href="#">https://t.co/aLRYnzCE4B</a>
            </div>
            <div class="tweets">
              <i class="fa fa-twitter"></i>
              <h3>✋High fives all around!</h3>
              <a href="#">https://t.co/HPZEMB4mQ2</a>
            </div>
            <div class="tweets">
              <i class="fa fa-twitter"></i>
              <h3>Life in London Feature: Lawless Capture</h3>
              <a href="#">https://t.co/HPZEMB4mQ2</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-5">
          <div class="quick-links">
            <h1>Contact Us</h1>
            <p>
                Steps Ahead Care & Support Ltd
                City Business Park,
                Somerset Place,
                Stoke,
                Plymouth,
                PL3 4BB
            
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-down wow fadeIn">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="steps">
              StepsAhead © 2020. Development by
              <a href="http://codeadigital.co.uk/">Codea Digital Ltd</a>
            </p>
          </div>
          <div class="col-md-6">
            <p class="text-right">
              <a href="/privacy-policy">Privacy Policy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--[footer] -->
  <script src="{{url('/')}}/jobs/js/jquery.min.js"></script>
  <script src="{{url('/')}}/jobs/js/popper.min.js"></script>
  <script src="{{url('/')}}/jobs/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/jobs/js/wow.min.js"></script>
  <script src="{{url('/')}}/jobs/js/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/jobs/js/TweenLite.min.js"></script>
  <script src="{{url('/')}}/jobs/js/EasePack.min.js"></script>
  <script src="{{url('/')}}/jobs/js/polyfill.js"></script>
  <script src="{{url('/')}}/jobs/js/particle.js"></script>
  <script src="{{url('/')}}/jobs/js/lettering.js"></script>
  <script src="{{url('/')}}/jobs/js/lightgallery-all.min.js"></script>
  <script src="{{url('/')}}/jobs/js/isotope.min.js"></script>
  <script src="{{url('/')}}/jobs/js/imagesloaded.pkgd.js"></script>
  <script src="{{url('/')}}/jobs/js/custom.js"></script>
</body>
</html>