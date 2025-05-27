@include('header')

<section class="home-banner">
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="{{ asset('assets/front/images/slider/slide1.png')}}" class="d-block w-100" alt="slide1">
<div class="carousel-caption d-none d-md-block">
<h4>Welcome to</h4>
<h2 class="from-left">Abhinandan Urban Co. Op. Bank Ltd.</h2>
<button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button>
</div>
</div>
<div class="carousel-item">
<img src="{{ asset('assets/front/images/slider/slide1.png')}}" class="d-block w-100" alt="slide1">
<div class="carousel-caption d-none d-md-block">
<h4>Welcome to</h4>
<h2 class="from-left">Abhinandan Urban Co. Op. Bank Ltd.</h2>
<button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"><i data-feather="arrow-left"></i></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"><i data-feather="arrow-right"></i></span>
</button>
</div>
</section>
<section class="loan-section">
<div class="container">
<div class="swiper mySwiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-box">
<h3>Gold Loan</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/gold-loan.png')}}" alt="gold-loan">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
<div class="swiper-slide">
<div class="slide-box bg2">
<h3>Education</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/education.png')}}" alt="education">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
<div class="swiper-slide">
<div class="slide-box bg3">
<h3>Housing</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/housing.png')}}" alt="housing">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
<div class="swiper-slide">
<div class="slide-box bg4">
<h3>Traning</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/training.png')}}" alt="training">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
<div class="swiper-slide">
<div class="slide-box bg5">
<h3>Gold Loan</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/gold-loan.png')}}" alt="gold-loan">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
<div class="swiper-slide">
<div class="slide-box bg4">
<h3>Traning</h3>
<h4>Get Instant Loan</h4>
<img src="{{ asset('assets/front/images/home/training.png')}}" alt="training">
<a href="#"><span>Read More</span><i data-feather="arrow-right"></i></a>
</div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>
<section class="home-about">
<div class="container">
<div class="title">
<h5>About Us</h5>
<h2>Best Urban Co-operative Bank in Vidarbha,<br> Maharashtra and National level</h2>
</div>
<div class="row">
<div class="col-lg-5">
<div class="about-img">
<img src="{{ asset('assets/front/images/about/home-about.png')}}" alt="about-img">
</div>
</div>
<div class="col-lg-7">
<div class="content">
<h5>Our Bank Awarded as Best Urban Co-operative Bank on Vidarbha, Maharashtra and National level by Maharashtra Urban Co-op Banks Federation</h5>
<ul>
<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>
<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>
<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>
</ul>
</div>
</div>
</div>
<div class="counter-wrapper">
<ul>
<li class="counter-item">
<h2 class="counter-number"><span class="odometer" data-count="1029">00</span></h2>
<p>Total Customers</p>
</li>
<li class="counter-item">
<h2 class="counter-number"><span class="odometer" data-count="65">00</span></h2>
<p>Our Staff</p>
</li>
<li class="counter-item">
<h2 class="counter-number"><span class="odometer" data-count="5243">00</span></h2>
<p>Successful Works</p>
</li>
</ul>
</div>
</div>
</section>
<section class="home-teams">
<div class="container">
<div class="board-mgmt">
<div class="mgmt-title">
<div class="title w-50 text-start">
<h2>Board Of Management</h2>
<p>Experts in innovative financial solutions</p>
</div>
<div>
<a href="#" class="btn">Board Of Directors <img src="{{ asset('assets/front/images/bd/right-arr.png')}}" alt="right-arr"></a>
</div>
</div>
<div class="mgmt-card">
<div class="row g-4 justify-content-center">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/shivaji-img.png')}}" alt="Shivaji">
<h5>Mr. Shivaji G. Dethe</h5>
<p>Chief Executive Officer</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/hukum-img.png')}}" alt="Hukumachand">
<h5>Mr. Hukamchand P. Daga</h5>
<p>Member</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/vijay-img.png')}}" alt="Vijay">
<h5>Ad. Vijay S. Bothra</h5>
<p>Member</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/sudarshan-img.png')}}" alt="Sudarshan">
<h5>Mr.Sudarshan P. Gang</h5>
<p>President</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/shrenik-img.png')}}" alt="Shrenik">
<h5>Mr. Shrenik P. Bothra (C.A)</h5>
<p>Member</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="member text-center ">
<img src="{{ asset('assets/front/images/bd/bharat-img.png')}}" alt="Bharatprakash">
<h5>Mr. Bharatprakash R. Khajanchi</h5>
<p>Member</p>
<div class="socials d-flex justify-content-center">
<a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
<a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="home-services p-0">
<div class="home-service-bg"><img src="{{ asset('assets/front/images/footer/services-bg1.png')}}" class="img-fluid"></div>
<div class="container">
<div class="banking-services">
<div class="title pt-4 text-white">
<h2>Banking Plan & Services</h2>
</div>
<div class="services text-white text-center">
<ul class="d-flex flex-wrap justify-content-around">
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/mobile-banking.svg')}}" alt="Mobile Banking">
<p>Mobile Banking</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/atm.svg')}}" alt="ATM">
<p>ATM</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/ecom.svg')}}" alt="ECOM">
<p>ECOM</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/aadhar.svg')}}" alt="Aadhar Base Payment">
<p>Aadhar Base Payment</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/fastag.svg')}}" alt="Fast Tag">
<p>Fast Tag</p>
<i class="bi bi-arrow-right"></i>
</li>
</ul>
<ul class="d-flex flex-wrap justify-content-around mt-4">
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/neft.svg')}}" alt="NEFT">
<p>NEFT</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/rtgs.svg')}}" alt="RTGS">
<p>RTGS</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/imps.svg')}}" alt="IMPS">
<p>IMPS</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/nach.svg')}}" alt="NACH">
<p>NACH</p>
<i class="bi bi-arrow-right"></i>
</li>
<li class="plans pt-3 text-center d-flex flex-column align-items-center">
<img src="{{ asset('assets/front/images/footer/pancard.svg')}}" alt="Pan Card Services">
<p>Pan Card Services</p>
<i class="bi bi-arrow-right"></i>
</li>
</ul>
<a href="#" class="btn">View More Services<img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>
</div>
</div>
<div class="photo-gallery">
<div class="title pt-4 text-white">
<h2>Photo Gallery</h2>
<div class="title-desc d-flex justify-content-around">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<a href="#" class="btn">View All <img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>
</div>
<div class="gallery d-flex mt-5 flex-column text-dark">
<div class="gallery1 d-flex">
<div class="w-50 d-flex">
<div class="gallery-text g-arrow-left w-50">
<p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
</div>
<div class="w-50">
<img src="{{ asset('assets/front/images/footer/photo1.png')}}" alt="Photo 1">
</div>
</div>
<div class="w-50 d-flex">
<div class="gallery-text g-arrow-left w-50">
<p>It is a long established fact that a reader will be distracted by the readable content of a page .</p>
</div>
<div class="w-50">
<img src="{{ asset('assets/front/images/footer/photo2.png')}}" alt="Photo 2">
</div>
</div>
</div>
<div class="gallery2 d-flex">
<div class="w-50 d-flex">
<div class="w-50">
<img src="{{ asset('assets/front/images/footer/photo3.png')}}" alt="Photo 1">
</div>
<div class="gallery-text g-arrow-right w-50">
<p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
</div>
</div>
<div class="w-50 d-flex">
<div class="w-50">
<img src="{{ asset('assets/front/images/footer/photo4.png')}}" alt="Photo 2">
</div>
<div class="gallery-text g-arrow-right w-50">
<p>It is a long established fact that a reader will be distracted by the readable content of a page .</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="gallery-bg"><img src="./{{ asset('assets/front/images/footer/bg-serv-down.png')}}" class="img-fluid"></div>
</section>
<section class="newsevents">
<div class="container">
<div class="title text-center fw-medium">
<p>News & Events</p>
<h2>Latest News & Information</h2>
</div>
<div class="news">
<div class="row">
<div class="col-lg-6 col-md-6 news-left mt-5">
<img src="{{ asset('assets/front/images/footer/news-img.png')}}" alt="News img">
<ul class="d-flex mt-4">
<li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
<li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li>
</ul>
<p>MUCOB Federations Gives Best Bank 2012-13 Award to...</p>
</div>
<div class="col-lg-6 col-md-6 news-right mt-5">
<div class="news-right-cards">
<div class="news-card d-flex">
<div class="news-img">
<img src="{{ asset('assets/front/images/footer/news-img1.png')}}" alt="news img1">
</div>
<div class="news-info">
<ul class="d-flex mt-2">
<li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
<li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li>
</ul>
<p>MUCOB Federations Gives Best Bank 2012-13 Award to</p>
</div>
</div>
<div class="news-card d-flex">
<div class="news-img">
<img src="{{ asset('assets/front/images/footer/news-img1.png')}}" alt="news img1">
</div>
<div class="news-info">
<ul class="d-flex mt-2">
<li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
<li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li>
</ul>
<p>MUCOB Federations Gives Best Bank 2012-13 Award to</p>
</div>
</div>
<div class="news-card d-flex">
<div class="news-img">
<img src="{{ asset('assets/front/images/footer/news-img1.png')}}" alt="news img1">
</div>
<div class="news-info">
<ul class="d-flex mt-2">
<li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
<li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li>
</ul>
<p>MUCOB Federations Gives Best Bank 2012-13 Award to</p>
</div>
</div>
<div class="news-card d-flex">
<div class="news-img">
<img src="{{ asset('assets/front/images/footer/news-img1.png')}}" alt="news img1">
</div>
<div class="news-info">
<ul class="d-flex mt-2">
<li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
<li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li>
</ul>
<p>MUCOB Federations Gives Best Bank 2012-13 Award to</p>
</div>
</div>
</div>
<div>
<a href="#" class="btn">Know More <img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="feedback">
<div class="container">
<div class="feebdack-card d-flex justify-content-around align-items-center">
<div class="feedback-left d-flex">
<img src="{{ asset('assets/front/images/footer/feedback-icon.svg')}}" alt="email">
<p>We would love to hear your thoughts, concerns or problems with
anything so we can improve!</p>
</div>
<div class="feedback-right">
<a href="#" class="btn float-right">Feedback <img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>
</div>
</div>
</div>
</section>
 @include('footer')      