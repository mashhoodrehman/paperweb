<html>
<head>
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/fonts/line-icons.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/slicknav.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/color-switcher.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/main.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet"/>
</head>
<body>

<header id="header-wrap">

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-5 col-xs-12">

          <ul class="list-inline">
            <li><i class="lni-phone"></i> +0123 456 789</li>
            <li><i class="lni-envelope"></i> support@gmail.com</li>
          </ul>

        </div>
        <div class="col-lg-5 col-md-7 col-xs-12">
          <div class="roof-social float-right">
            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
            <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
            <a class="google" href="#"><i class="lni-google-plus"></i></a>
          </div>
          <div class="header-top-right float-right">
            <a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
            <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
          aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="lni-menu"></span>
          <span class="lni-menu"></span>
          <span class="lni-menu"></span>
        </button>
        <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto w-100 justify-content-center">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Home
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item active" href="index.html">Home 1</a>
              <a class="dropdown-item" href="index-2.html">Home 2</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.html">
              Categories
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Listings
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
              <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
              <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about.html">About Us</a>
              <a class="dropdown-item" href="services.html">Services</a>
              <a class="dropdown-item" href="ads-details.html">Ads Details</a>
              <a class="dropdown-item" href="post-ads.html">Ads Post</a>
              <a class="dropdown-item" href="pricing.html">Packages</a>
              <a class="dropdown-item" href="testimonial.html">Testimonial</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
              <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
              <a class="dropdown-item" href="single-post.html">Blog Details</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">
              Contact
            </a>
          </li>
        </ul>
        <div class="post-btn">
          <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
        </div>
      </div>
    </div>

    <ul class="mobile-menu">
      <li>
        <a class="active" href="#">
          Home
        </a>
        <ul class="dropdown">
          <li><a class="active" href="index.html">Home 1</a></li>
          <li><a href="index-2.html">Home 2</a></li>
        </ul>
      </li>
      <li>
        <a href="category.html">Categories</a>
      </li>
      <li>
        <a href="#">
          Listings
        </a>
        <ul class="dropdown">
          <li><a href="adlistinggrid.html">Ad Grid</a></li>
          <li><a href="adlistinglist.html">Ad Listing</a></li>
          <li><a href="ads-details.html">Listing Detail</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Pages</a>
        <ul class="dropdown">
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="ads-details.html">Ads Details</a></li>
          <li><a href="post-ads.html">Ads Post</a></li>
          <li><a href="pricing.html">Packages</a></li>
          <li><a href="testimonial.html">Testimonial</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="404.html">404</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Blog</a>
        <ul class="dropdown">
          <li><a href="blog.html">Blog - Right Sidebar</a></li>
          <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
          <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
          <li><a href="single-post.html">Blog Details</a></li>
        </ul>
      </li>
      <li>
        <a href="contact.html">Contact Us</a>
      </li>
    </ul>

  </nav>


  <div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xs-12 text-center">
          <div class="contents">
            <h1 class="head-title">Welcome to The Largest <span class="year">Marketplace</span></h1>
            <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and
              more</p>
            <div class="search-bar">
              <div class="search-inner">
                <form class="search-form" action="{{url('search')}}" method="GET">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="What are you looking for?">
                  </div>
                  <div class="form-group inputwithicon">
                    <div class="select">
                      <select name="city">
                        <option value="none">Select City</option>
                        @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <i class="lni-target"></i>
                  </div>
                  <div class="form-group inputwithicon">
                    <div class="select">
                      <select name="category">
                        <option value="none">Select Catagory</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <i class="lni-menu"></i>
                  </div>
                  <button class="btn btn-common" type="submit"><i class="lni-search"></i> Search Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>

@yield('content')

<footer>

  <section class="footer-Content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
          <div class="widget">
            <div class="footer-logo">
              <img src="assets/img/logo.png" alt="">
            </div>
            <div class="textwidget">
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
            </div>
            <ul class="mt-3 footer-social">
              <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
              <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
              <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
              <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title">Quick Link</h3>
            <ul class="menu">
              <li><a href="#">- About Us</a></li>
              <li><a href="#">- Blog</a></li>
              <li><a href="#">- Events</a></li>
              <li><a href="#">- Shop</a></li>
              <li><a href="#">- FAQ's</a></li>
              <li><a href="#">- About Us</a></li>
              <li><a href="#">- Blog</a></li>
              <li><a href="#">- Events</a></li>
              <li><a href="#">- Shop</a></li>
              <li><a href="#">- FAQ's</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title">Contact Info</h3>
            <ul class="contact-footer">
              <li>
                <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
              </li>
              <li>
                <strong><i class="lni-envelope"></i></strong><span>contact@mail.com <br> support@mail.com</span>
              </li>
              <li>
                <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45
                    <br>Fr 45</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-info text-center">
            <p>Designed and Developed by <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>


<a href="#" class="back-to-top">
  <i class="lni-chevron-up"></i>
</a>

<div id="preloader">

  <div class="loader" id="loader-1"></div>
</div>
</body>
<script src="{{asset('assets/js/jquery-min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/color-switcher.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.min.js')}}"></script>
<script src="{{asset('assets/js/summernote.js')}}"></script>
</html>