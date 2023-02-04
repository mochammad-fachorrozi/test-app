@extends('layouts.app')


@section('content')

<div class="preloader" style="display: none;">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner"></div>
</div>
</div>
</div>


<div class="navbar-area">

<div class="mobile-nav">
<a href="https://templates.hibootstrap.com/zinka/default/index.html" class="logo">
<img src="{{ asset('assets/img/logo1.png') }}" class="logo-one" alt="Logo">
<img src="{{ asset('assets/img/logo2.png') }}" class="logo-two" alt="Logo">
</a>
</div>

<div class="main-nav nav-bar-two">
<div class="container-fluid">
<nav class="container-max-2 navbar navbar-expand-md navbar-light ">
<a class="navbar-brand" href="https://templates.hibootstrap.com/zinka/default/index.html">
<img src="{{ asset('assets/img/logo2.png') }}" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
<ul class="navbar-nav m-auto">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link active">
Home
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index.html" class="nav-link">
SEO Agency
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html" class="nav-link active">
AI Startup
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-3.html" class="nav-link">
Machine Learning
</a>
</li>
</ul>
 </li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/about.html" class="nav-link">
About
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link">
Pages
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/team.html" class="nav-link">
Team
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/pricing.html" class="nav-link">
Pricing Table
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/faq.html" class="nav-link">
FAQ
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link">
Courses
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/courses.html" class="nav-link">
Courses
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/course-details.html" class="nav-link">
Course Details
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/testimonials.html" class="nav-link">
Testimonials
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link">
Case study
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/case-study.html" class="nav-link">
Case study
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/case-details.html" class="nav-link">
Case study Details
</a>
 </li>
</ul>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/404.html" class="nav-link">
404 page
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/sign-in.html" class="nav-link">
Sign In
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/sign-up.html" class="nav-link">
Sign Up
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/terms-condition.html" class="nav-link">
Terms &amp; Conditions
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/privacy-policy.html" class="nav-link">
Privacy Policy
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/coming-soon.html" class="nav-link">
Coming Soon
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link">
Services
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/services.html" class="nav-link">
Services
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="nav-link">
Service Details
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-link">
Blog
<i class="bx bx-plus"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/blog.html" class="nav-link">
Blog
</a>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/blog-details.html" class="nav-link">
Blog Details
</a>
</li>
 </ul>
</li>
<li class="nav-item">
<a href="https://templates.hibootstrap.com/zinka/default/contact.html" class="nav-link">
Contact
</a>
</li>
</ul>
<div class="side-nav d-in-line align-items-center">
<div class="side-item">
<div class="search-box">
<i class="flaticon-loupe"></i>
</div>
</div>
<div class="side-item">
<div class="user-btn">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<i class="flaticon-contact"></i>
</a>
</div>
</div>
<div class="side-item">
<div class="nav-add-btn">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-menu-btn">
Get started
<i class="bx bx-plus"></i>
</a>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
<div class="side-nav-responsive">
<div class="container">
<div class="dot-menu">
<div class="circle-inner">
<div class="circle circle-one"></div>
<div class="circle circle-two"></div>
<div class="circle circle-three"></div>
</div>
</div>
<div class="container">
<div class="side-nav-inner">
<div class="side-nav justify-content-center  align-items-center">
<div class="side-item">
<div class="search-box">
<i class="flaticon-loupe"></i>
</div>
</div>
<div class="side-item">
<div class="user-btn">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<i class="flaticon-contact"></i>
</a>
</div>
</div>
<div class="side-item">
<div class="nav-add-btn">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="nav-menu-btn border-radius">
Contact us
<i class="bx bx-plus"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="search-overlay">
<div class="d-table">
<div class="d-table-cell">
<div class="search-layer"></div>
<div class="search-layer"></div>
<div class="search-layer"></div>
<div class="search-close">
 <span class="search-close-line"></span>
<span class="search-close-line"></span>
</div>
<div class="search-form">
<form>
<input type="text" class="input-search" placeholder="Search here...">
<button type="submit"><i class="flaticon-loupe"></i></button>
</form>
</div>
</div>
</div>
</div>


<div class="banner-area-two">
<div class="container-fluid">
<div class="container-max-2">
<div class="row align-items-center">
<div class="col-lg-5">
<div class="banner-content-two">
<span>Best for You</span>
<h1>We’re <b>Digital</b> AI Startup Support</h1>
<p>Lorem ipsum dolor sit ametconsectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div class="banner-content-btn">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="learn-btn">
Learn More
<i class="bx bx-plus"></i>
</a>
<a href="https://www.youtube.com/watch?v=07d2dXHYb94" class="play-on-btn popup-btn">
Play Video
<i class="flaticon-forward"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="banner-img-2">
<img src="{{ asset('assets/img/home-two-img.png') }}" alt="Images">
</div>
</div>
</div>
</div>
</div>
<div class="banner-bottom-shape">
<div class="shape-one wow animate__animated animate__fadeInUp" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
<img src="{{ asset('assets/img/home-two-shape1.png') }}" alt="Images">
</div>
<div class="shape-two wow animate__animated animate__fadeInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
<img src="{{ asset('assets/img/home-two-shape2.png') }}" alt="Images">
</div>
<div class="shape-three wow animate__animated animate__fadeInUp" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
<img src="{{ asset('assets/img/home-two-shape3.png') }}" alt="Images">
</div>
<div class="banner-dots1">
<img src="{{ asset('assets/img/home-two-dots.png') }}" alt="Images">
</div>
<div class="banner-dots2">
<img src="{{ asset('assets/img/home-two-dots2.png') }}" alt="Images">
</div>
</div>
</div>


<div class="service-area-two">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Services</span>
<h2>Our Implementation Mission is to Serve You Best</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4 col-md-6">
<div class="service-item">
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Consumer Analytics</a></h3>
<div class="service-item-img">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html">
<img src="{{ asset('assets/img/service-icon7.png') }}" alt="Images">
</a>
<div class="img-circle"></div>
</div>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item">
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Marketing Analytics</a></h3>
<div class="service-item-img">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html">
<img src="{{ asset('assets/img/service-icon8.png') }}" alt="Images">
</a>
<div class="img-circle"></div>
</div>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
<div class="service-item">
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Sales Analytics</a></h3>
<div class="service-item-img">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html">
<img src="{{ asset('assets/img/service-icon9.png') }}" alt="Images">
</a>
<div class="img-circle"></div>
</div>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
</div>
</div>
<div class="service-two-shape">
<div class="shape-in1">
<img src="{{ asset('assets/img/shape9.png') }}" alt="Images">
</div>
<div class="shape-in2">
<img src="{{ asset('assets/img/shape10.png') }}" alt="Images">
</div>
<div class="shape-in3">
<img src="{{ asset('assets/img/shape11.png') }}" alt="Images">
</div>
<div class="shape-in4">
<img src="{{ asset('assets/img/shape7.png') }}" alt="Images">
</div>
<div class="shape-in5">
<img src="{{ asset('assets/img/shape12.png') }}" alt="Images">
</div>
</div>
</div>


<div class="about-area-two pb-70">
<div class="container-fluid">
<div class="container-max">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about-img-2">
<img src="{{ asset('assets/img/about-img2.png') }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about-content-two">
<div class="section-title">
 <span class="sp-before sp-after">About Us</span>
<h2>Grow Your Business With Our Agency</h2>
</div>
<h3>We have 30 yearsOur strategy includes consistently evolving, to ensure we’re producing exceptional SEO for business.</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna tetur adipisicing saliqua.</p>
<div class="row">
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>01</span>
<p>Retail Solutions</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>02</span>
<p>Data Management</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>03</span>
<p>Data Visualization</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>04</span>
<p>Business Geist</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>05</span>
<p>Data Analysis</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="about-list">
<i class="bx bx-check"></i>
<span>06</span>
<p>Data Warehousing</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="counter-area-two pt-100">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="counter-card">
<h3>10 Years</h3>
<p>GLORIOUS YEARS</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="counter-card">
<h3>100%</h3>
<p>SATISFACTION RATE</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="counter-card">
<h3>70+</h3>
<p>TEAM MEMBERS</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="counter-card">
<h3>25+</h3>
<p>SENIOR SCIENTIST</p>
</div>
</div>
</div>
</div>
<div class="counter-shape-top">
<img src="{{ asset('assets/img/counter-shape.png') }}" alt="Images">
</div>
</div>


<div class="service-another pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Services</span>
<h2>We Offer Professional Solutions For Your Business</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-research service-icon service-icon-bg1"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Customer Analytics</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-headphones service-icon service-icon-bg"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Customer Support</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-caution service-icon service-icon-bg2"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Risk Analytics</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-big-data service-icon service-icon-bg3"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Big Data Analytics</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
 <i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-money service-icon service-icon-bg4"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Business Analytics</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-another-card">
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html"><i class="flaticon-share service-icon service-icon-bg5"></i></a>
<h3><a href="https://templates.hibootstrap.com/zinka/default/service-details.html">Social Media Analytics</a></h3>
<p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>
<a href="https://templates.hibootstrap.com/zinka/default/service-details.html" class="learn-btn">
Learn more
<i class="bx bx-plus"></i>
</a>
</div>
</div>
</div>
</div>
<div class="service-another-shape">
<div class="shape-1">
<img src="{{ asset('assets/img/shape13.png') }}" alt="Images">
</div>
<div class="shape-2">
<img src="{{ asset('assets/img/shape11.png') }}" alt="Images">
</div>
<div class="shape-3">
<img src="{{ asset('assets/img/shape10.png') }}" alt="Images">
</div>
<div class="shape-4">
<img src="{{ asset('assets/img/shape9.png') }}" alt="Images">
</div>
<div class="shape-5">
<img src="{{ asset('assets/img/shape7.png') }}" alt="Images">
</div>
<div class="shape-6">
<img src="{{ asset('assets/img/shape12.png') }}" alt="Images">
</div>
</div>
</div>


<div class="work-area-two pt-100 pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Working Process</span>
<h2 class="h2-color2">Simple &amp; Clean Work Process</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4">
<div class="work-item-list">
<ul>
<li class="text-right">
<h3>Frame the Problem <span>1</span></h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
<li class="text-right">
<h3>Collect the Raw Data <span>2</span></h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
<li class="text-right">
<h3>Process the Data <span>3</span></h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
</ul>
</div> 
</div>
<div class="col-lg-4">
<div class="work-img-2">
<img src="{{ asset('assets/img/work-img.png') }}" alt="Images">
</div>
</div>
<div class="col-lg-4">
<div class="work-item-list-2">
<ul>
<li>
<h3><span>4</span>Explore the Data</h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
<li>
<h3><span>5</span>Perform Analysis</h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
<li>
<h3><span>6</span>Communicate Results</h3>
<p>Lorem ipsum dolor sit amet, aut odiut podit afugitsed quia consequuntur </p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="mission-area pt-100">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="mission-content">
<div class="section-title">
<span class="sp-before sp-after">Mission</span>
<h2 class="h2-color2">We Serve As Possible That You Expected</h2>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna tetur adipisicing saliqua.
</p>
<div class="row">
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
<i class="bx bx-check"></i>
<span>01</span>
<p>Retail Solutions</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
<i class="bx bx-check"></i>
<span>02</span>
<p>Expert Prepective</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
<i class="bx bx-check"></i>
<span>03</span>
<p>User Prespective</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
<i class="bx bx-check"></i>
<span>04</span>
<p>Global Experience</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
 <i class="bx bx-check"></i>
<span>05</span>
<p>Value for Results</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 pr-0">
<div class="mission-list">
<i class="bx bx-check"></i>
<span>06</span>
<p>Business Vision</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="mission-img">
<img src="{{ asset('assets/img/mission-img.png') }}" alt="Images">
</div>
</div>
</div>
</div>
<div class="mission-shape">
<div class="shape1">
<img src="{{ asset('assets/img/shape13.png') }}" alt="Images">
</div>
<div class="shape2">
<img src="{{ asset('assets/img/shape11.png') }}" alt="Images">
</div>
<div class="shape3">
<img src="{{ asset('assets/img/shape12.png') }}" alt="Images">
</div>
<div class="shape4">
<img src="{{ asset('assets/img/shape9.png') }}" alt="Images">
</div>
</div>
</div>


<div class="team-area-two pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Team</span>
<h2 class="h2-color2">Meet Our Data Scientist to Grow Your Business</h2>
</div>
<div class="team-slider-two owl-carousel owl-theme owl-loaded owl-drag">






<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2285px, 0px, 0px); transition: all 0.25s ease 0s; width: 4571px;"><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img9.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Hobler Jeain</a></h3>
<span>General Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated-2">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img10.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Julfiker Jeain</a></h3>
<span>CEO At Ostino</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card active">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img11.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Hobler Jeain</a></h3>
<span>General Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
 <a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated-2">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img12.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Julfiker Jeain</a></h3>
<span>CEO At Ostino</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item" style="width: 316.5px; margin-right: 10px;"><div class="team-card active">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img7.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Cristiono Kopper</a></h3>
<span>Web Developer</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img8.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Jermin Jekson</a></h3>
<span>Marketing Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item" style="width: 316.5px; margin-right: 10px;"><div class="team-card">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img9.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Hobler Jeain</a></h3>
<span>General Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item active" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated-2">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img10.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Julfiker Jeain</a></h3>
<span>CEO At Ostino</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item active" style="width: 316.5px; margin-right: 10px;"><div class="team-card active">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img11.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Hobler Jeain</a></h3>
<span>General Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
 <a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item active" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated-2">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img12.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Julfiker Jeain</a></h3>
<span>CEO At Ostino</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned active" style="width: 316.5px; margin-right: 10px;"><div class="team-card active">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img7.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Cristiono Kopper</a></h3>
<span>Web Developer</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img8.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Jermin Jekson</a></h3>
<span>Marketing Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img9.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Hobler Jeain</a></h3>
<span>General Manager</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="team-card team-rotated-2">
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">
<img src="{{ asset('assets/img/team-img10.jpg') }}" alt="Images">
</a>
<div class="content">
<h3><a href="https://templates.hibootstrap.com/zinka/default/team.html">Julfiker Jeain</a></h3>
<span>CEO At Ostino</span>
<ul class="social-link">
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-facebook"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-twitter"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
</li>
<li>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" target="_blank"><i class="bx bxl-youtube"></i></a>
</li>
</ul>
</div>
</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="bx bx-plus"></i></button><button type="button" role="presentation" class="owl-next"><i class="bx bx-plus"></i></button></div><div class="owl-dots disabled"></div></div>
</div>
<div class="team-two-shape">
<div class="shape1">
<img src="{{ asset('assets/img/shape13.png') }}" alt="Images">
</div>
<div class="shape2">
<img src="{{ asset('assets/img/shape11.png') }}" alt="Images">
</div>
<div class="shape3">
<img src="{{ asset('assets/img/shape10.png') }}" alt="Images">
</div>
<div class="shape4">
<img src="{{ asset('assets/img/shape9.png') }}" alt="Images">
</div>
<div class="shape5">
<img src="{{ asset('assets/img/shape12.png') }}" alt="Images">
</div>
<div class="shape6">
<img src="{{ asset('assets/img/shape7.png') }}" alt="Images">
</div>
<div class="shape7">
<img src="{{ asset('assets/img/shape14.png') }}" alt="Images">
</div>
</div>
</div>


<div class="testimonial-area ptb-100">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="testimonial-list">
<div class="list-img-1">
<img src="{{ asset('assets/img/testimonial1.png') }}" alt="Images">
</div>
<div class="list-img-2">
<img src="{{ asset('assets/img/testimonial2.png') }}" alt="Images">
</div>
<div class="list-img-3">
<img src="{{ asset('assets/img/testimonial3.png') }}" alt="Images">
</div>
<div class="list-img-4">
<img src="{{ asset('assets/img/testimonial4.png') }}" alt="Images">
</div>
<div class="list-img-5">
<img src="{{ asset('assets/img/testimonial5.png') }}" alt="Images">
</div>
</div>
</div>
<div class="col-lg-6">
<div class="testimonial-title">
<h2>Words From Customers</h2>
</div>
<div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">



<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-956px, 0px, 0px); transition: all 0.25s ease 0s; width: 3346px;"><div class="owl-item cloned" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img2.png') }}" alt="Images">
<div class="content-title">
<h3>Jermin Jekson</h3>
<span>Marketing Manager</span>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img3.png') }}" alt="Images">
<div class="content-title">
<h3>Julfiker Jeain</h3>
<span>CEO At Ostino</span>
</div>
</div>
</div></div><div class="owl-item active" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img1.png') }}" alt="Images">
<div class="content-title">
<h3>David McLean</h3>
<span>CEO &amp; Manager</span>
</div>
</div>
</div></div><div class="owl-item" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img2.png') }}" alt="Images">
<div class="content-title">
<h3>Jermin Jekson</h3>
<span>Marketing Manager</span>
</div>
</div>
</div></div><div class="owl-item" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img3.png') }}" alt="Images">
<div class="content-title">
<h3>Julfiker Jeain</h3>
<span>CEO At Ostino</span>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img1.png') }}" alt="Images">
<div class="content-title">
<h3>David McLean</h3>
<span>CEO &amp; Manager</span>
</div>
</div>
</div></div><div class="owl-item cloned" style="width: 448px; margin-right: 30px;"><div class="testimonial-item">
<p>
I chose Zinka because of their value And
incredible superior customer Service they
really awesome treated me like family
</p>
<div class="content">
<img src="{{ asset('assets/img/testimonial-img2.png') }}" alt="Images">
<div class="content-title">
<h3>Jermin Jekson</h3>
<span>Marketing Manager</span>
</div>
</div>
</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"><i class="bx bx-plus"></i></button></div><div class="owl-dots disabled"></div></div>
</div>
</div>
</div>
</div>


<div class="blog-area pt-100 pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Our Blogs</span>
<h2 class="h2-color2">Latest Valuable Insights</h2>
<p class="margin-auto">
Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do
eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim
</p>
</div>
<div class="row pt-45">
<div class="col-lg-4 col-md-6">
<div class="blog-card">
<a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">
<img src="{{ asset('assets/img/blog1.png') }}" alt="Images">
</a>
<div class="content">
<ul>
<li>
<i class="bx bx-time-five"></i>
09 April 2020
</li>
<li>
<i class="bx bx-purchase-tag-alt"></i>
 <a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">Marketing</a>
</li>
</ul>
<h3><a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">The Home of Technology is in Front of You</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="blog-card">
<a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">
<img src="{{ asset('assets/img/blog2.png') }}" alt="Images">
</a>
<div class="content">
<ul>
<li>
<i class="bx bx-time-five"></i>
10 July 2020
</li>
<li>
<i class="bx bx-purchase-tag-alt"></i>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">SEO</a>
</li>
</ul>
<h3><a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">SEO Best Practices Mobile Friendliness</a></h3>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
<div class="blog-card">
<a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">
<img src="{{ asset('assets/img/blog3.png') }}" alt="Images">
</a>
<div class="content">
<ul>
<li>
<i class="bx bx-time-five"></i>
19 June 2020
</li>
<li>
<i class="bx bx-purchase-tag-alt"></i>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#">SEO &amp; Marketing</a>
</li>
</ul>
<h3><a href="https://templates.hibootstrap.com/zinka/default/blog-details.html">15 SEO Practices Website Architecture</a></h3>
</div>
</div>
</div>
</div>
</div>
<div class="blog-shape">
<div class="shape1">
<img src="{{ asset('assets/img/shape1.png') }}" alt="Images">
</div>
<div class="shape2">
<img src="{{ asset('assets/img/shape5.png') }}" alt="Images">
</div>
<div class="shape3">
<img src="{{ asset('assets/img/shape4.png') }}" alt="Images">
</div>
<div class="shape4">
<img src="{{ asset('assets/img/shape6.png') }}" alt="Images">
</div>
</div>
</div>

<div class="brand-logo-area">
<div class="container-fluid">
<div class="container-max">
<div class="brand-logo-slider owl-carousel owl-theme owl-loaded owl-drag">


<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2054px, 0px, 0px); transition: all 0.25s ease 0s; width: 4110px;"><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo1.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style1.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo2.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style2.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
 <img src="{{ asset('assets/img/brand-logo3.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style3.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo4.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style4.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo5.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style5.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo6.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style6.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo1.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style1.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo2.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style2.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
 <img src="{{ asset('assets/img/brand-logo3.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style3.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo4.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style4.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo5.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style5.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo6.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style6.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo1.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style1.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo2.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style2.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned active" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
 <img src="{{ asset('assets/img/brand-logo3.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style3.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo4.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style4.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo5.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style5.png') }}" class="brand-logo2" alt="Images">
</div></div><div class="owl-item cloned" style="width: 178.333px; margin-right: 50px;"><div class="brand-logo-item">
<img src="{{ asset('assets/img/brand-logo6.png') }}" class="brand-logo1" alt="Images">
<img src="{{ asset('assets/img/brand-style6.png') }}" class="brand-logo2" alt="Images">
</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
</div>
</div>
</div>


<div class="data-table-area">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="data-table-content">
<h2>We Like to Start Your Project With Us</h2>
<a href="https://templates.hibootstrap.com/zinka/default/index-2.html?fbclid=IwAR3_ezhgqnpzAMxPw5DO2D1yDTikqT0UV6vCHVxA2qup-qipKMfa0v4Yt7w#" class="default-btn">Get started <i class="bx bx-plus"></i></a>
</div>
</div>
<div class="col-lg-6">
<div class="data-table-img">
<img src="{{ asset('assets/img/data-table-img.png') }}" alt="Images">
</div>
</div>
</div>
</div>
</div>


@endsection
