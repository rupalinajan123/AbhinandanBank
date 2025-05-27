<?php
// Database connection settings
$host = 'localhost'; // e.g., 'localhost'
$db   = 'phpsupportsquade_abhinandanbank_dev'; // e.g., 'my_database'
$user = 'phpsupportsquade_abhinandan_dev'; // e.g., 'root'
$pass = 'ASKKlbI~aySS'; // e.g., ''

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

// Get visitor IP address
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Log the IP address
$logQuery = "INSERT INTO visitor_log (ip_address) VALUES (:ip_address)";
$logStmt = $pdo->prepare($logQuery);
$logStmt->execute(['ip_address' => $ipAddress]);

// Query to get the current count
$countQuery = "SELECT count FROM visitor_count WHERE id = 1";
$countStmt = $pdo->query($countQuery);
$row = $countStmt->fetch(PDO::FETCH_ASSOC);

// Increment the count by 1
$visitorCount = $row['count'] + 1;

// Update the count in the database
$updateQuery = "UPDATE visitor_count SET count = :count WHERE id = 1";
$updateStmt = $pdo->prepare($updateQuery);
$updateStmt->execute(['count' => $visitorCount]);
?>

<section class="feedback">
    <div class="container">
        <div class="feebdack-card d-flex justify-content-around align-items-center">
            <div class="feedback-left d-flex">
                <img src="{{ asset('assets/front/images/footer/feedback-icon.svg')}}" alt="email">
                <p>We would love to hear your thoughts, concerns or problems with
                    anything so we can improve!</p>
            </div>
            <div class="feedback-right">
                <a href="{{ URL::to('/complaint_form')}}" class="btn float-right">Feedback 
                    <img src="{{ asset('assets/front/images/footer/right-arr.png')}}" alt="right-arr" class="ms-1">
                </a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-main pb-4 pt-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-left">
                        <h4>Head Office Contact Info</h4>
                        <ul class="ps-0 contact-info">
                            <li class="contact1 d-flex align-items-start">
                                <img src="{{ asset('assets/front/images/footer/location.svg')}}" alt="location">
                                <div class="ps-3">
                                    <p>Corporate Office</p>
                                    <p class="m-0">Prabhat Chowk, Amravati - 444601</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/front/images/footer/phone.svg')}}" alt="phone" class="pe-3"></i>0721-2563450
                            </li>
                            <!--<li>-->
                            <!--    <img src="{{ asset('assets/front/images/footer/fax.svg')}}" alt="fax" class="pe-3"></i>155333-->
                            <!--</li>-->
                            <li>
                                <img src="{{ asset('assets/front/images/footer/email.svg')}}" alt="email" class="pe-3"></i><span class="__cf_email__" data-cfemail="2a424f4b4e454c4c43494f6a4b484243444b444e4b44484b444104444f5e">[email&#160;protected]</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-mid ps-3">
                        <h4>Quick Links</h4>
                        <div class="quick-links d-flex justify-content-start">
                            <ul>
                                <!--<li><a href="{{url('details/branch-details')}}"><i data-feather="chevron-right"></i>Branch Details</a></li>-->
                                <!--<li><a href="{{url('details/history')}}"><i data-feather="chevron-right"></i>About Us</a></li>-->
                                <li><a href="#"><i data-feather="chevron-right"></i>Privacy Policy</a></li>
                                <li><a href="javascript:void()"><i data-feather="chevron-right"></i>Awareness</a></li>
                                <li><a href="{{url('complaint_form')}}"><i data-feather="chevron-right"></i>Feedback</a></li>
                                <li><a href="https://www.npci.org.in/register-a-complaint" target="_blank"><i data-feather="chevron-right"></i>NPCI Other Complaint</a></li>
                                <li><a href="https://www.npci.org.in/what-we-do/upi/dispute-redressal-mechanism" target="_blank"><i data-feather="chevron-right" ></i>NPCI UPI Dispute redressal</a></li>
                                <!--<li><a href="{{url('details/awards')}}"><i data-feather="chevron-right"></i>Photo Gallery</a></li>-->
                            </ul>
                            <ul>
                                <li><a href="{{url('details/loan')}}"><i data-feather="chevron-right"></i>Loan</a></li>
                                <li><a href="{{url('details/deposit')}}"><i data-feather="chevron-right"></i>Deposit</a></li>
                                <li><a href="{{url('details/service_charges')}}"><i data-feather="chevron-right"></i>Service Charges</a></li>
                                <li><a href="{{url('details/sma_rule')}}"><i data-feather="chevron-right"></i>SMA Rule</a></li>
                                <li><a href="{{url('details/achievements')}}"><i data-feather="chevron-right"></i>Achievements</a></li>
                             </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-right ps-5">
                        <!--<h4>Reports</h4>-->
                        <div class="reports d-flex justify-content-start">
                            <ul>
                                <!--<li><a href="{{url('annual-report-20-21')}}"><i data-feather="chevron-right"></i>Annual Reports FY 2020-2021</a></li>-->
                                <!--<li><a href="{{url('annual-report-21-22')}}"><i data-feather="chevron-right"></i>Annual Reports FY 2021-2022</a></li>-->
                                <!--<li><a href="{{url('annual-report-24')}}"><i data-feather="chevron-right"></i>Annual Reports FY 2024</a></li>-->
                                <li class="qrcode"><a href="https://www.dicgc.org.in" target="_blank">
                               <img src="{{ asset('public/logo.png')}}" style="width:22%; margin-right:10px; border:2px solid #fff;">
                                </a>
                                <a href="https://phpsupportsquad.esdsdev.com/abhinandanbank_dev/public/qr.png" target="_blank"> <!-- Add the hyperlink here -->
        <img src="{{ asset('public/qr1.png') }}" style="width:20%">
    </a>
                                <!-- <img src="{{ asset('public/qr1.png')}}" style="width:20%"> -->
                            
                            </li>
                            </ul>
                            
                            <!-- <img src="{{ asset('public/download.png')}}" style="width:22%; margin-right:10px; border:2px solid #fff;"> -->

                        </div>
                        <a href="https://play.google.com/store/apps/details?id=app.imps.abhinandan_urban&hl=en_IN&pli=1" target="_blank"> <!-- Add the hyperlink here -->
        <img src="{{ asset('public/download.png') }}" style="width:50%">
    </a>

    <a href="assets/front/images/pdf/Souvenir_Converted_Final-1.pdf" Download> <!-- Add the hyperlink here -->
        <img src="{{ asset('assets/uploads/arth_sarita.jpg') }}" style="width:50%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-down position-relative">
        <div class="footer-btn">
            <a href="#top"><img src="{{ asset('assets/front/images/footer/footer-up.png')}}" alt="footer-up"></a>
        </div>
        <div class="container bottom-text d-flex justify-content-between align-items-baseline py-3">
            <p>© 2024 Farmer's Unified Portal, All rights reserved.</p>
            <!-- Display visitor count dynamically -->
            <span>Visitor No: <?= htmlspecialchars($visitorCount) ?></span>
            <p>Powered By: <a href="https://www.esds.co.in/" target="_blank">ESDS Software Solution Ltd.</a></p>
        </div>
    </div>
</footer>



<!-- Scripts -->
<script src="{{ asset('assets/front/js/jquery-3.7.0.min.js')}}" type="text/javascript"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/front/js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/jquery.appear.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/swiper-bundle.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/odometer.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/jquery.fancybox.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer type="93f903a454d7877424973500-text/javascript"></script>
<script src="{{ asset('assets/front/js/custom.js')}}" type="text/javascript"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="93f903a454d7877424973500-|49" defer></script>
 <!-- <script type="text/javascript">
        document.addEventListener("contextmenu", function(event) {
            event.preventDefault();
            alert("Right-click is disabled on this page.");
        });
    </script> -->
<!-- <script>
    $(document).ready(function(){
       $("#imageModal").modal('show');
   });
    </script> -->
</body>
</html>
