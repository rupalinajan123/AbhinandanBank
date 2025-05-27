<!-- board of directors page css End -->    
    <footer class="footer-area">
        <div class="container">
        <!-- sign-up area start -->
        <div class="sign-up-area">
            <div class="row">
                <div class="col-md-10">
                    <div class="media align-items-center">
                        <div class="media-left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="media-body">
                            <h5>We would love to hear your thoughts, concerns or problems with anything so we can improve!</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <form class="d-md-inline-flex">
                        <button type="button" onclick="window.location='{{ URL::to('/contactus')}}'">Feedback</button>
                    </form>
                </div>
            </div>
        </div>
<!-- footer area start -->

                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="widget widget-contact">
                                    <h4 class="widget-title">Contact Us.</h4>

                                    <ul class="widget-list">
                                        <li>Head Office : Prabhat Chowk, Amravati - 444601</li>
                                        <li>Phone : 2563440</li>
                                        <li>Fax : 2563440</li>
                                        <li>Email : headoffice@abhinandanbank.net</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="widget widget-links ml-0">
                                    <h4 class="widget-title">Useful Links</h4>
                                    <ul class="widget-list">
                                        <li><a href="{{url('details/branch-details')}}">Branch Details</a></li>
                                        <!-- <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Sitemap</a></li> -->
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="widget widget-about">
                                    <h4 class="widget-title">Quick Links</h4>
                                    <ul class="widget-list">
                                        <li><a href="{{url('details/loan')}}">Loan</a></li>
                                        <!-- <li><a href="#">Tender</a></li> -->
                                        <!-- <li><a href="#">Exam Application Form</a></li> -->
                                        <li><a href="{{url('details/achievements')}}">Achievements</a></li>
                                        <!-- <li><a href="#">Feedback</a></li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="widget widget-about">
                                    <h4 class="widget-title">Reports</h4>
                                    <ul class="widget-list">
                                        <li><a href="{{url('annual-report-20-21')}}">Annual Report FY 2020-2021</a></li>
                                        <li><a href="{{url('annual-report-21-22')}}">Annual Report FY 2021-2022</a></li>
                                        <li><a href="{{url('annual-report-24')}}">Annual Report FY 2024</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="text-lg-left text-center">
                                @ {{date('Y')}}, Abhinandan Bank All rights reserved
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="copy-right text-lg-right text-center">
                                Powered By: <a href="https://www.esds.co.in/" target="blank"> ESDS Software Solution Ltd.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer area end -->

            <!-- back to top area start -->
            <div class="back-to-top">
                <span class="back-top"><i class="fa fa-angle-double-up"></i></span>
            </div>
            <!-- back to top area end -->


    <!-- all plugins here -->
    
    <script src="{{ asset('assets/front/js/vendor.js')}}"></script>
    <!-- main js 
    <script src="{{ asset('assets/front/js/jquery.nice-select.min.js')}}"></script> -->
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/front/js/counter.js')}}"></script>
    <script src="{{ asset('assets/front/js/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('assets/front/js/main.js')}}"></script>
    <script src="{{ asset('assets/front/js/ticker.js?v=1.2')}}"></script>
    <script src="{{ asset('assets/front/js/jquery.modern-ticker.min.js')}}"></script>
    
    <script>
    $(document).ready(function(){
       $("#imageModal").modal('show');
   });
    </script>
</body>

</html>