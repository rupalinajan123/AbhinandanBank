@include('header')
@php
  $url = URL::to("/");
  $menuname = str_replace("#url#", $url, "#url#");
@endphp
<span class="mt-label">
  <marquee behavior="scroll" direction="left"><b><a
        href="https://phpsupportsquad.esdsdev.com/abhinandanbank_dev/details/deposit">ABHINANDAN DEPOSIT SPECIAL SCHEME FOR 125
        DAYS @8.25%</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a
        href="{{ $menuname }}/annual-report-24"> Annual General Meeting on Dt 30.06.2024 , For Report Detail please
        visit to Download Option.</a></b></marquee>
</span>
<div class="ticker1 modern-ticker mt-round">
  <div class="mt-body">
    <div class="mt-news">
      <ul>

        @foreach ($advertisement as $advertisement)
      <!--<li><a onclick="getapi({{$advertisement->id}});" href="{{ route('advertisement.download', $advertisement->id) }}">{{$advertisement->eng_title}}</a></li>-->

      <li>

        <a onclick="getapi({{$advertisement->id}});" style="cursor: pointer;"
        onmouseover="this.style.backgroundColor='transparent'; this.style.fontWeight='normal';">{{$advertisement->eng_title}}</a>

      </li>
    @endforeach
        <!--<li>-->
        <!--      <a href="https://www.abhinandanbank.com/public/pdfs/abhinandan_doc_2791.pdf" target="_blank" rel="noopener">Current Recruitment for Chartered Accountant</a>-->
        <!--</li>-->
      </ul>
    </div>
    <div class="mt-controls">
      <div class="mt-prev"></div>
      <div class="mt-play mt-pause"></div>
      <div class="mt-next"></div>
    </div>
  </div>
</div> <!-- Start Home banner -->
<section class="home-banner">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/front/images/slider/banner.jpg')}}" class="d-block w-100" alt="slide1">
        <div class="carousel-caption d-none d-md-block">
          <h4>Welcome to</h4>
          <h2 class="from-left">Abhinandan Urban Co-Op. Bank Ltd.</h2>
          <!-- <button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/front/images/slider/banner1-1.jpg')}}" class="d-block w-100" alt="slide1">
        <div class="carousel-caption d-none d-md-block">
          <h4>Welcome to</h4>
          <h2 class="from-left">Abhinandan Urban Co-Op. Bank Ltd.</h2>
          <!-- <button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/front/images/slider/banner2-1.jpg')}}" class="d-block w-100" alt="slide1">
        <div class="carousel-caption d-none d-md-block">
          <h4>Welcome to</h4>
          <h2 class="from-left">Abhinandan Urban Co-Op. Bank Ltd.</h2>
          <!-- <button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/front/images/slider/banner3.jpg')}}" class="d-block w-100" alt="slide1">
        <div class="carousel-caption d-none d-md-block">
          <h4>Welcome to</h4>
          <h2 class="from-left">Abhinandan Urban Co-Op. Bank Ltd.</h2>
          <!-- <button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/front/images/slider/banner4.JPG')}}" class="d-block w-100" alt="slide1">
        <div class="carousel-caption d-none d-md-block">
          <h4>Welcome to</h4>
          <h2 class="from-left">Abhinandan Urban Co-Op. Bank Ltd.</h2>
          <!-- <button type="button" class="btn btn-outline-light">Know More <i data-feather="arrow-right"></i></button> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i data-feather="arrow-left"></i></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i data-feather="arrow-right"></i></span>
    </button>
  </div>
</section>

<section class="loan-section">
  <div class="container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box">
            <h3>Gold Loan</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/gold-loan.png')}}" alt="gold-loan">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box bg2">
            <h3>Education</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/education.png')}}" alt="education">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box bg3">
            <h3>Housing</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/housing.png')}}" alt="housing">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box bg4">
            <h3>Other</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/training.png')}}" alt="training">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box bg5">
            <h3>Gold Loan</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/gold-loan.png')}}" alt="gold-loan">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide" data-url="{{ URL::to('/details/loan') }}">
          <div class="slide-box bg4">
            <h3>Other</h3>
            <h4>Get Instant Loan</h4>
            <img src="{{ asset('assets/front/images/home/training.png')}}" alt="training">
            <a href="{{ URL::to('/details/loan')}}"><span>Read More</span><i data-feather="arrow-right"></i></a>
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
      <!--<h5>About Us1</h5>-->
      <h2>Best Urban Co-operative Bank in Vidarbha,<br> Maharashtra and National level</h2>
    </div>

    <div class="row">
      <div class="col-lg-5">
        <div class="about-img">
          <img src="{{ asset('assets/front/images/about/home-about1.png')}}" alt="about-img" class="curved-img">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="content">
          <!--<h5>Our Bank Awarded as Best Urban Co-operative Bank on Vidarbha, Maharashtra and National level by Maharashtra Urban Co-op Banks Federation</h5>-->
          <h5>Our Bank Awarded as Best Urban Co-operative Bank on Vidarbha, Maharashtra and National level by
            Maharashtra Urban Co-op Banks Federation</h5>
          <ul>
            <!--<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>-->
            <!--<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>-->
            <!--<li>Awarded Best Bank- First Prize for Best Performing Co-op Bank for the year 2006-2007 by Indian Achievers Forum</li>-->
            <li>Awarded with <span style="color: blue;"><b>“Sahakar Nishth” by Government of Maharashtra</b></span>.
              ----Bank is awarded with “sahakar Nishth” in 2016 by Hon'ble governor of Maharashtra Shri Vidyasagarji Rao
              on behalf of Government of Maharashtra</li>
            <li>Awarded with <span style="color: blue;"><b>“Sahakar Bhushan” by Government of
                  Maharashtra</b></span>.----Bank awarded with “Sahakar Bhushan” in 2018 by Hon'ble Cabinet Minister for
              Co-Operation, Relief and Rehabilitation, Maharashtra State Shri Subhashravaji Deshmukh on behalf of
              Government of Maharashtra </li>
            <li>Awarded with “Best Bank” by The Maharashtra Urban Co-Op Bank Federation ----Bank awarded with Best Bank
              in 2024 by Hon'ble Union Minister of State for Civil Aviation Shri Murlidharji Mohol on behalf The
              Maharashtra Urban Co-Op Bank federation. </li>
          </ul>
        </div>
      </div>
    </div>


  </div>
</section>
<div class="counter-wrapper">
  <ul>
    <li class="counter-item">
      <h2 class="counter-number"><span class="odometer" data-count="65000">00</span></h2>
      <p>Total Customers</p>
    </li>
    <li class="counter-item">
      <h2 class="counter-number"><span class="odometer" data-count="82">00</span></h2>
      <p>Our Staff</p>
    </li>
    <li class="counter-item">
      <h2 class="counter-number">
        <!-- <span class="odometer" id="counter" ></span> Placeholder for counter -->
        <span class="expression">10 + 1</span> <!-- Display 9 + 1 visually -->
      </h2>
      <p>Branche's</p>
    </li>
  </ul>
</div>



<section class="home-teams">
  <div class="container">
    <div class="board-mgmt">
      <div class="mgmt-title">
        <div class="title w-50 text-start">
          <h2>Board Of Directors</h2>
          <p>Experts in innovative financial solutions</p>
        </div>
        <div>
          <a href="{{ URL::to('/details/board-of-management')}}" class="btn btn-primary"> Board Of Management<img
              src="{{ asset('assets/front/images/bd/right-arr.png')}}" alt="right-arr" class="ms-1"></a>
        </div>
      </div>
      <div class="mgmt-card">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/hukum-img.png')}}" alt="Hukamchand">
              <h5>Mr. Hukamchand P. Daga</h5>
              <p>Founder &amp; Director</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/vijay-img.png')}}" alt="Hukumachand">
              <h5>Adv. Vijay S. Bothra</h5>
              <p>Chairman</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/Photo-3.png')}}" alt="Surendra">
              <h5>Dr. Surendra S. Bardiya</h5>
              <p>Vice Chairman</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/sudarshan-img.png')}}" alt="Sudarshan">
              <h5>Mr.Sudarshan P. Gang</h5>
              <p>Director</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/Photo-5.png')}}" alt="Rajendra">
              <h5>Mr. Rajendra C. Shinghai (Jain)</h5>
              <p>Director</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/Photo-7.png')}}" alt="Kawarilal">
              <h5>Mr. Kawarilal N. Ostawal</h5>
              <!-- <p>Member</p> -->
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/Photo-8.png')}}" alt="Rajendra">
              <h5>Mr. Rajendra H. Bhansali</h5>
              <p>Director</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="member text-center ">
              <img src="{{ asset('assets/front/images/bd/Photo-9.png')}}" alt="Kishor">
              <h5>Mr. Kishor H. Bokriya</h5>
              <p>Director</p>
              <!-- <div class="socials d-flex justify-content-center">
                  <a href="#"><img src="{{ asset('assets/front/images/bd/twitter.png')}}" alt="twitter"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/linkedin.png')}}" alt="linkedin"></a>
                  <a href="#"><img src="{{ asset('assets/front/images/bd/facebook.png')}}" alt="facebook"></a>
                </div> -->
            </div>
          </div>
        </div>
        <!-- Centered Button -->
        <div class="text-center mt-4">
          <a href="{{ URL::to('/details/board-of-directors')}}" class="btn btn-primary">View All Directors <img
              src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="home-services p-0">
  <div class="home-service-bg"><img src="{{ asset('assets/front/images/footer/services-bg1.png')}}" class="img-fluid">
  </div>
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
            <!-- <i class="bi bi-arrow-right"></i> -->
            <a href="{{ url('/details/mobile_banking') }}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/atm.svg')}}" alt="ATM">
            <p>ATM</p>
            <a href="{{ url('/details/atm') }}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/ecom.svg')}}" alt="ECOM">
            <p>ECOM</p>
            <a href="{{ url('/details/ecom') }}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/aadhar.svg')}}" alt="Aadhar Base Payment">
            <p>Aadhar Base Payment</p>
            <a href="{{ URL::to('/details/adhar_based_payment')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/fastag.svg')}}" alt="Fast Tag">
            <p>Fast Tag</p>
            <a href="{{ URL::to('/details/fastag')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

        </ul>

        <ul class="d-flex flex-wrap justify-content-around mt-4">

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/neft.svg')}}" alt="NEFT">
            <p>NEFT</p>
            <a href="{{ URL::to('/details/neft')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/rtgs.svg')}}" alt="RTGS">
            <p>RTGS</p>
            <a href="{{ URL::to('/details/rtgs')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/imps.svg')}}" alt="IMPS">
            <p>IMPS</p>
            <a href="{{ URL::to('/details/imps')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/nach.svg')}}" alt="NACH">
            <p>NACH</p>
            <a href="{{ URL::to('/details/nach')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

          <li class="plans pt-3 text-center d-flex flex-column align-items-center">
            <img src="{{ asset('assets/front/images/footer/pancard.svg')}}" alt="Pan Card Services">
            <p>Pan Card Services</p>
            <a href="{{ URL::to('/details/pan_card_services')}}">
              <i class="bi bi-arrow-right"></i>
            </a>
          </li>

        </ul>

        <a href="{{ URL::to('/details/services')}}" class="btn">View More Services<img
            src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr"></a>

      </div>

    </div>


    <div class="photo-gallery">

      <div class="title pt-4 text-white">

        <h2>Photo Gallery</h2>

        <div class="title-desc d-flex justify-content-around">

          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->

          <a href="{{ URL::to('/details/awards')}}" class="btn">View All <img
              src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr" class="ms-1"></a>

        </div>


        <div class="gallery d-flex mt-5 flex-column text-dark">


          <div class="gallery1 d-flex">

            <div class="w-50 d-flex">

              <div class="gallery-text g-arrow-left w-50">
                <p>Awarded with “Sahakar Nishth” by Government of Maharashtra in 2016.</p>
              </div>

              <div class="w-50">
                <img src="{{ asset('assets/front/images/photo/awards/photo1.jpg')}}" alt="Photo 1">
              </div>

            </div>

            <div class="w-50 d-flex">

              <div class="gallery-text g-arrow-left w-50">
                <p>Awarded with “Sahakar Bhushan” by Government of Maharashtra in 2018.</p>
              </div>

              <div class="w-50">
                <!-- <img src="{{ asset('assets/front/images/footer/photo2.png')}}" alt="Photo 2"> -->
                <img src="{{ asset('assets/front/images/photo/awards/photo3.jpg')}}" alt="Photo 3">

              </div>

            </div>

          </div>


          <div class="gallery2 d-flex">

            <div class="w-50 d-flex">

              <div class="w-50">
                <img src="{{ asset('assets/front/images/photo/awards/photo2.jpg')}}" alt="Photo 3">
              </div>

              <div class="gallery-text g-arrow-right w-50">
                <p>Awarded with “Best Bank” in deposit Rs. 250 Cr to Rs. 300 Cr category by Banco Blue Ribbon in 2023.
                </p>
              </div>

            </div>

            <div class="w-50 d-flex">

              <div class="w-50">
                <img src="{{ asset('assets/front/images/photo/awards/photo4.jpg')}}" alt="Photo 4">
              </div>

              <div class="gallery-text g-arrow-right w-50">
                <p>Awarded with “Best Bank” by The Maharashtra Urban Co-Op Bank Federation in 2024.</p>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>


  </div>
  <div class="gallery-bg"><img src="{{ asset('assets/front/images/footer/bg-serv-down.png')}}" class="img-fluid"></div>

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

          <img id="news-image" class="news-img" src="{{ asset('assets/front/images/news/3.jpg')}}" alt="News img">

          <ul class="d-flex mt-4" id="news-meta">
            <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> <span id="news-date">June 28, 2024</span></li> -->
            <!-- <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> <span id="news-comments">34 Comments</span></li> -->
          </ul>

          <p id="news-description">Hon. Chairman Adv. Vijayaji Bothara awarded with “Best Chairman” in “Rashtriya Urban
            Co-Operative Bank Summit & Awards 2024” jointly organisd by NAFCUB & MSME.</p>

        </div>

        <div class="col-lg-6 col-md-6 news-right mt-5">

          <div class="news-right-cards">

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/5.jpg', 'June 28, 2024', 'Abhinandan urban co- op bank ltd Amravati is awarded with “Best Customer Centric IT Implementation of the year” on dated 20 sept 2024.')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/5.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Abhinandan urban co- op bank ltd Amravati is awarded with “Best Customer
                  Centric IT Implementation of the year” on dated 20 sept 2024.</p>
              </div>
            </div>

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/1.jpg', 'June 28, 2024', 'Shri. Shivaji G. Dethe is awarded with “Best CEO” by Bharat Urban Co-Op Banking Summit on dated 22 May 2024.')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/1.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Shri. Shivaji G. Dethe is awarded with “Best CEO” by Bharat Urban Co-Op Banking
                  Summit on dated 22 May 2024.</p>
              </div>
            </div>

            <!-- Repeat for other news cards -->
            <div class="news-card d-flex"
              onclick="displayNews('news2', 'assets/front/images/news/2.jpg', 'June 28, 2024', 'Department of GST, Amravati and Abhinandan Urban Co-op Bank Ltd Amravati jointly organised seminar on Budget-2024 on dated 02 Aug 2024. The bank honored with orator Shri Chandrashekhar Ji Tilak.')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/2.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Department of GST, Amravati and Abhinandan Urban Co-op Bank Ltd Amravati
                  jointly organised seminar on Budget-2024 on dated 02 Aug 2024. The bank honored with orator Shri
                  Chandrashekhar Ji Tilak.</p>
              </div>
            </div>

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/4.jpg', 'June 28, 2024', 'Visit of Shri Sachin Kalantre, Amravati munciple commissinor , to the bank.')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/4.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Visit of Shri Sachin Kalantre, Amravati munciple commissinor , to the
                  bank.Visit of Shri Sachin Kalantre, Amravati munciple commissinor , to the bank.</p>
              </div>
            </div>

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/6.jpg', 'FY 2023-24', 'Abhinandan urban co- op bank ltd Amravati is awarded with Vidharbha Urban Nagpur Best bank award for the FY 2023-24.')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/6.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Abhinandan urban co- op bank ltd Amravati is awarded with Vidharbha Urban
                  Nagpur Best bank award for the FY 2023-24.</p>
              </div>
            </div>

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/7.jpg', 'FY 2023-24', 'Abhinandan urban co- op bank ltd Amravati is awarded with banco blue ribbon award 2024 best bank award for the FY 2023-24')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/7.jpg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">Abhinandan urban co- op bank ltd Amravati is awarded with banco blue ribbon
                  award 2024 best bank award for the FY 2023-24</p>
              </div>
            </div>

            <div class="news-card d-flex"
              onclick="displayNews('news1', 'assets/front/images/news/camp branch.jpeg', 'FY 2023-24', 'The Bank  new 10 Branch inaugurated on 30/04/2025 in our own premises of Abhinandan Heights  @ first Floor, Camp Road, Amravati in the esteem presence of  Hon`ble MP Shri Balwant Wankhade')">
              <div class="news-img">
                <img src="{{ asset('assets/front/images/news/camp branch.jpeg')}}" alt="news img1">
              </div>

              <div class="news-info">
                <ul class="d-flex mt-2">
                  <!-- <li><img src="{{ asset('assets/front/images/footer/calendar.svg')}}" alt="calendar icon"> June 28, 2024</li>
                                    <li><img src="{{ asset('assets/front/images/footer/comments.svg')}}" alt="comments icon"> 34 Comments </li> -->
                </ul>

                <p class="text-truncate">The Bank  new 10 Branch inaugurated on 30/04/2025 in our own premises of "Abhinandan Heights"  @ first Floor, Camp Road, Amravati in the esteem presence of  Hon'ble MP Shri Balwant Wankhade, Hon'ble MP Dr.  Anil Bonde, Hon"ble EX MP Smt. Navneet Rana, Hon'ble Ex Minister Dr. Sunil Deshmukh, Bank Chairman Adv. Vijay Bothra, Bank Board of Management Chairman Shri Sudarshan Gang, Vice Chairman Dr. Surendra Bardiya, and CEO Shri Shivaji Dethe."</p>
              </div>
            </div>



          </div>

          <div>
            <!-- <a href="#" class="btn">Know More <img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr" class="ms-1"></a> -->
          </div>

        </div>

      </div>

    </div>

  </div>
  <!-- <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('assets/front/images/abhi-pop-img.png') }}" alt="RBI_Notification_pop_up">
            </div>
        </div>
    </div>
</div> -->
</section>
<script>
  function displayNews(id, image, date, description) {
    document.getElementById("news-image").src = image;
    // document.getElementById("news-date").innerText = date;
    // document.getElementById("news-comments").innerText = "34 Comments"; // Update as needed
    document.getElementById("news-description").innerText = description;
  }
</script>
<!-- <style>
.news-left .news-img {
    width: 100%; /* Makes the image responsive */
    height: auto; /* Maintains the aspect ratio */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    transition: transform 0.3s; /* Smooth scaling on hover */
}

.news-left .news-img:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
}

.news-card .news-img img {
    width: 100%; /* Responsive image */
    height: auto; /* Maintains aspect ratio */
    border-radius: 5px; /* Slightly rounded corners for news cards */
}

.news-card {
    margin-bottom: 20px; /* Spacing between news cards */
    transition: box-shadow 0.3s; /* Smooth shadow transition */
}

.news-card:hover {
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
}

.news-info {
    padding-left: 15px; /* Space between image and text */
}

/* Additional styles for buttons and links if needed */
.btn {
    background-color: #007bff; /* Change to your desired button color */
    color: white; /* Button text color */
    padding: 10px 15px; /* Padding for button */
    border-radius: 5px; /* Rounded corners */
    text-decoration: none; /* Remove underline */
    display: inline-flex; /* Center content in the button */
    align-items: center; /* Center vertically */
}

.btn img {
    margin-left: 5px; /* Space between text and image */
}

.btn:hover {
    background-color: #0056b3; /* Darker color on hover */
}
</style> -->

@include('footer')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.swiper-slide');
    slides.forEach(slide => {
      slide.addEventListener('click', function () {
        const url = this.getAttribute('data-url');
        window.location.href = url;
      });
    });
  });
</script>