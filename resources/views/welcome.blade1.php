@include('header')

     <!-- Advertisement section start -->
          
    	<section class="section announcement">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section" data-aos="fade-up">
		  <!-- <h3 class="announceTitle"><i class="fa fa-bullhorn" aria-hidden="true"></i>Important Announcement</h3>-->
		  <span class="mt-label">RECRUITMENT ANNOUNCEMENT:</span>
			<div class="ticker1 modern-ticker mt-round">
                <div class="mt-body">
                    <div class="mt-news">
                        <ul>
                            
                            @foreach ($advertisement as $advertisement)
                            <!--<li><a onclick="getapi({{$advertisement->id}});" href="{{ route('advertisement.download', $advertisement->id) }}">{{$advertisement->eng_title}}</a></li>-->
            
                        <li>

                             <a onclick="getapi({{$advertisement->id}});" style="cursor: pointer;"onmouseover="this.style.backgroundColor='transparent'; this.style.fontWeight='normal';">{{$advertisement->eng_title}}</a>

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
            </div>
            
          </div>
        </div>	
    	</div>
    </section>
    
    <!-- Advertisement section end -->
    
    <div class="banner-area style-one">
        <div class="banner-slider owl-carousel">
            <div class="item bg1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-0 col-lg-6 offset-xl-1 offset-lg-1">
                            <div class="banner-inner-area">
                                <h5 class="subtitle">Welcome to Online Banking</h5>
                                <h2 class="title">Best Banking Services System In The World</h2>
                                <p class="brd-1">We are very fast to provide Banking services. Please check included multiple feature & Investment plan .</p>                                                                
                                <!-- <a class="btn btn-blue" href="#">Apply Loan</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-0 col-lg-6 offset-xl-1 offset-lg-1">
                            <div class="banner-inner-area">
                                <h5 class="subtitle">Welcome to Online Banking</h5>
                                <h2 class="title">Best Banking Services System In The World</h2>
                                <p class="brd-1">We are very fast to provide Banking services. Please check included multiple feature & Investment plan .</p>                                                                
                                <!-- <a class="btn btn-blue" href="#">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-0 col-lg-6 offset-xl-1 offset-lg-1">
                            <div class="banner-inner-area">
                                <h5 class="subtitle">Welcome to Online Banking</h5>
                                <h2 class="title">Best Banking Services System In The World</h2>
                                <p class="brd-1">We are very fast to provide Banking services. Please check included multiple feature & Investment plan .</p>                                                                
                                <!-- <a class="btn btn-blue" href="#">Register</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- money-option start -->
    <div class="money-option-area">
                <div class="container">
                    <h2 class="loan-title">Get Instant Loan On</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-work mt-0 text-center">
                                <div class="work-icon">
                                    <img class="" src="{{ asset('assets/front/images/icon/gold-loan.png')}}" alt="icon">
                                </div>
                                <h5><a href="#">Gold Loan</a></h5>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
                                <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-work mt-md-0 text-center">
                                <div class="work-icon">
                                    <img class="" src="{{ asset('assets/front/images/icon/car-loan.png')}}" alt="icon">
                                </div>
                                <h5><a href="#">Vehicle Loan</a></h5>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
                                <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-work text-center">
                                <div class="work-icon">
                                    <img class="" src="{{ asset('assets/front/images/icon/home-loan.png')}}" alt="icon">
                                </div>
                                <h5><a href="#">Housing Loan</a></h5>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
                                <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-work text-center">
                                <div class="work-icon">
                                    <img class="" src="{{ asset('assets/front/images/icon/personal-loan.png')}}" alt="icon">
                                </div>
                                <h5><a href="#">Personal Loan</a></h5>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur</p> -->
                                <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- money-option end -->

    <!--about-us-area start-->
    <div class="about-us-area pd-70">
        <div class="container">
            <div class="row">
                <!--video-area start-->
                <div class="col-lg-5 col-md-8 align-self-center">
                    <div class="about-us-video">
                        <img class="thumb" src="{{ asset('assets/front/images/video/1.png')}}" alt="img">
                        <a class="play-btn" href="https://www.youtube.com/embed/Un9M2YT5FKA?start=21" data-effect="mfp-zoom-in"><img src="{{ asset('assets/front/images/video/play-btn.png')}}" alt="img"></a>
                    </div>
                </div>
            
                <!--video-area end-->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-us-details">
                        <div class="section-title">
                            <h6 class="subtitle subtitle-thumb">About Us</h6>
                            <h2 class="title">Nothing is impossible. We can help you achieve your goals!</h2>
                            <p>Online banking can save you a lot of time and effort, you can undertake most transactions from the comforts of your home. However, it is crucial to use internet banking safely.</p>
                        </div>
                        <div class="media media-1">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/images/about/01.png')}}" alt="img">
                            </div>
                            <div class="media-body">
                                <p><!-- Nro eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus dolor sit. --></p>
                            </div>
                        </div>
                        <div class="media media-2">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/images/about/02.png')}}" alt="img">
                            </div>
                            <div class="media-body">
                                <p><!-- Easy pament process belief Lorem Ipsum is not simply random text. It has roots in a McClintock. --></p>
                            </div>
                        </div>
                        <a class="btn btn-blue" href="#">Learn More</a>
                        <!-- <a class="btn btn-info" href="{{ asset('uploads/form_pdf/Abhinandan_Bank_Ahwal_2020.pdf')}}" download>Details</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about-us-area end-->

    <!--service-area start-->
    <div class="service-area default-pd">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Best Services</h6>
                        <h2 class="title">Banking Plan & Services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/01.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">NEFT</a></h5>
                           <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p> 
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/02.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">RTGS</a></h5>
                            <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p>
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/03.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">IMPS</a></h5>
                            <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p> 
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/04.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">MINI ATM</a></h5>
                           <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p>
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/05.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Mobile Banking</a></h5>
                             <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p> 
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/service/06.png')}}" alt="img">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Others</a></h5>
                            <p><!-- Lorem ipsum dolor sit ametcteturs adipiscing elieiusi ncididunt ut labore et dol oremagna. --></p> 
                            <a class="angle-btn" href="#"><img src="{{ asset('assets/front/images/icon/angle-left-round.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--service-area end-->

    

    <!--fun-fact-area start-->
    <div class="fun-fact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">Why Choose Us</h6>
                        <h2 class="title">Create Your Amazing Benefits</h2>
                        <p><!-- Sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. --></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">12923</h1>
                        <h5>Customers</h5>
                        <p>Customer very satisfied with our work</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">65</h1>
                        <h5>Our Staff</h5>
                        <p>24/7 Hrs service staff</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-fact">
                        <h1 class="counter">5243</h1>
                        <h5>Successfully Works</h5>
                        <p>Customer very satisfied with our work</p>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <!-- <a class="btn" href="#">Register Now</a> -->
                </div>
            </div>
        </div>
    </div>
    <!--fun-fact-area end-->


    <!-- 
    <div class="work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">Best Services</h6>
                        <h2 class="title">How It Works</h2>
                        <p>Bankdipscing elitr, sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-0 text-center">
                        <div class="work-icon">
                            <img class="" src="assets/img/work/01.png" alt="icon">
                        </div>
                        <h5><a href="#">Know About</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="assets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work mt-md-0 text-center">
                        <div class="work-icon">
                            <img class="" src="assets/img/work/02.png" alt="icon">
                        </div>
                        <h5><a href="#">Create Account</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="assets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="assets/img/work/03.png" alt="icon">
                        </div>
                        <h5><a href="#">Start Invest</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="assets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work text-center">
                        <div class="work-icon">
                            <img class="" src="assets/img/work/04.png" alt="icon">
                        </div>
                        <h5><a href="#">Get Profit</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <a class="angle-btn" href="#"><img src="assets/img/icon/angle-left-round.png" alt="icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

   

    <!--envestor-area start-->
    <div class="envestor-area pd-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h6 class="subtitle subtitle-thumb">Events</h6>
                        <h2 class="title">Photo Gallery</h2>
                        <p><!-- Bankdipscing elitr, sed diam nonumy eirmod et accusam et justo duo dolores et ea rebum. tet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. --></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="envestor-slider owl-carousel">
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="{{ asset('assets/front/images/photo/thumb1.jpg')}}" alt="img">
                                <h6 class="name">महाराष्ट्र स्टेट को-ऑप बँक फ्रेडरेशन मुबई तर्फे पुरस्कार २०१७-१८</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="{{ asset('assets/front/images/photo/thumb2.jpg')}}" alt="img">
                                <h6 class="name">बँकींग फ्रंटीअसॆ तर्फे पुरस्कार २०१६-१७</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="{{ asset('assets/front/images/photo/thumb3.jpg')}}" alt="img">
                                <h6 class="name">महाराष्ट्र शासनाचा आर्थिक वर्ष २०१५-१६ करिता "सहकार निष्ठ" पुरस्कार दि. २६.०४.२०१७ रोजी सोलापूर येथे सन्मानित झाला</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-envestor text-center">
                                <img src="{{ asset('assets/front/images/photo/thumb4.jpg')}}" alt="img">
                                <h6 class="name">The Abhinandan Urban Coop. Bank Ltd. New Board Of Directors For 2015-2020.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--envestor-area end-->

    <!--blog-area start-->
    <div class="blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title section-title-2">
                        <h6 class="subtitle subtitle-thumb">News</h6>
                        <h2 class="title">Latest News and Information</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/news/news1.jpg')}}" alt="news">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>RK Sharma</li>
                                <li class="type"><img src="{{ asset('assets/front/images/blog/icon01.png')}}" alt="icon">Banking</li>
                            </ul>
                            <h6><a href="#">BANKING FRONTIERS MAGAZINE MAY 2016</a></h6>
                            <!-- <a class="btn btn-round" href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/news/news2.jpg')}}" alt="news">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>RK Sharma</li>
                                <li class="type"><img src="{{ asset('assets/front/images/blog/icon01.png')}}" alt="icon">Banking</li>
                            </ul>
                            <h6><a href="#">MUCOB Federations Best Bank 2012-13 Award</a></h6>
                            <!-- <a class="btn btn-round" href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/images/news/news3.jpg')}}" alt="news">
                            <div class="date">05-May-2020</div>
                        </div>
                        <div class="blog-details">
                            <ul class="post-meta">
                                <li><i class="fa fa-user-o"></i>RK Sharma</li>
                                <li class="type"><img src="{{ asset('assets/front/images/blog/icon01.png')}}" alt="icon">Banking</li>
                            </ul>
                            <h6><a href="#">Best Urban Co-Op Bank First Prize for 2013-14</a></h6>
                            <!-- <a class="btn btn-round" href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->

    <!-- partner area start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-slider owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/front/images/partner/slide1.jpg')}}" alt="slide1.jpg">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/front/images/partner/slide2.jpg')}}" alt="slide1.jpg">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/front/images/partner/yojana-slide.jpg')}}" alt="yojana-slide.jpg">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/front/images/partner/slide3.jpg')}}" alt="slide1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
    <script>
        function getapi(fileid){
            let data =fileid;
            fetch("https://www.abhinandanbank.com/advertisement/"+fileid+"/")
            .then(res=>res.json())
             .then(data=>{
                if(data && data.length){
                      for (let i = 0; i < data.length; i++) {
                          setTimeout(function(){
                               let filename= data[i];
                                console.log();
                      console.log(filename);
                        let url="https://www.abhinandanbank.com/users/"+filename;
                         var a = document.createElement("a");
                document.body.appendChild(a);
                a.href = url;
                 a.click();
                window.URL.revokeObjectURL(url);
                              
                          }, i*1000);
                         
                    }
                }
            })
            
            
            // .then(data=>{
            //     if(data && data.length){
            //         console.log(data);
            //         ["abhinandan_doc_16072023_121049.pdf","abhinandan_doc_16072023_164958.pdf'"].map(filename=>{
            //              fetch("https://demo.esdsdev.com/Abhinandan-Bank/users/"+filename).then(res => {
            //     var blob = new Blob([res.data]);
            //     var url = URL.createObjectURL(blob);
            //     var a = document.createElement("a");
            //     document.body.appendChild(a);
            //     a.href = url;
            //     a.download = filename;
            //     a.click();
            //     window.URL.revokeObjectURL(url);
            // });      
            //         })
                    
            //     }
            // })
            .catch(er=>console.log(er));
            console.log(data);
        }
    </script>
    <!-- partner area end -->

    <!-- sign-up area start -->
 @include('footer')      