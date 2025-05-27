
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content ="noindex, nofollow">
<title>Abhinandan Bank</title>

<link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" type="text/css">
<!-- <link href="{{ asset('assets/front/css/bootstrap-icons.css') }}" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('assets/front/css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/front/css/odometer.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/front/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<header>
<div class="cpl-topbar" >
<!-- <img src="{{ asset('assets/front/images/footer/topbar.svg') }}"> -->
<div class="container">
<div class="topbar-wrapper">
<div class="topbar-align">
<ul>
<li style="color:white"><i class="bi bi-telephone" ></i > 0721 2563440, 8380049941</li>
</ul>
</div>
<div class="topbar-align justify-content-end">
<ul class="d-flex">
<li class="nav-item dropdown">
  <a class="nav-link dropdown" href="#" data-bs-toggle="dropdown">Download <i data-feather="chevron-down"></i></a>
  <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Download <span class="caret"></span></a> -->
  <ul class="dropdown-menu">
    <li><a href="{{url('assets/front/images/pdf/Abhinandan_Ahwal_2024-FINAL.pdf')}}" style="color: black;" download>Annual Report FY 2023-24</a></li>
    <li><a href="{{url('assets/front/images/pdf/AGM_2022-2023.pdf')}}" style="color: black;" download>Annual Report FY 2022-23</a></li>
    <li><a href="{{url('assets/front/images/pdf/AGM 2021-2022.pdf')}}" style="color: black;" download>Annual Report FY 2021-22</a></li>
    <li><a href="{{url('assets/front/images/pdf/Downloads-Annual Report.pdf')}}" style="color: black;" download>Annual Report FY 2020-21</a></li>
</ul>
</li>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/service_charges')}}">Service Charges</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/atm')}}">ATM</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">POS</a></li>
</ul></li>
<li><a href="{{ URL::to('/details/deaf') }}" target="_blank">DEAF A/C List</a></li>
<li><a href="{{ URL::to('/contactus')}}">Enquiry</a></li>
<li><a href="{{ URL::to('/complaint_form')}}">Complaint</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
<div class="container flex-lg-row flex-nowrap align-items-center">
<div class="navbar-brand">
<a href="{{ URL::to('/')}}">
<img src="{{ asset('assets/front/images/header/logo_n.png')}}" alt /> <span>Abhinandan Urban <br>Co-Op. Bank Ltd.</span>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
<div class="offcanvas-header">
<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="{{ URL::to('/')}}">Home</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About <i data-feather="chevron-down"></i></a>
<ul class="dropdown-menu">
<!-- <li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/board-of-directors')}}">Board of Directors</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/board-of-management')}}">Board of Management</a></li> -->
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/achievements')}}">Achievements</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/history')}}">History</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/financial-strength')}}">Financial Strength</a></li>
<!--<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/financial_postition')}}">Financial Position</a></li>-->
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ URL::to('/details/branch-details')}}">Branch Details</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Photo Gallery <i data-feather="chevron-down"></i></a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/awards_memento')}}">Awards Memento</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/awards')}}">Awards</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/visitors')}}">Visitors</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/social-work')}}">Social Work</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ URL::to('/details/sanchar-saathi')}}">Customer Awareness</a>
</li>
<!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Interest Rate <i data-feather="chevron-down"></i></a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/loan')}}">Loan</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/deposit')}}">Diposit</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/sma_rule')}}">SMA Value</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services <i data-feather="chevron-down"></i></a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/service_charges')}}">Service Charges</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/atm')}}">ATM</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">POS</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">E-Com</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/mobile_banking')}}">Mobile Banking</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/neft')}}">NEFT</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/rtgs')}}">RTGS</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/imps')}}">IMPS</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/adhar_based_payment')}}">Aadhar Base Payment</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">CTS Clearing</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/nach')}}">NACH</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">ECS</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/bbps')}}">BBPS</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/pan_card_services')}}">Pan Card Services</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">Franking</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/fastag')}}">Fastag</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">Digital 7/12 & 8A</a>
<li class="nav-item"><a class="dropdown-item" href="#">PMJJ/PMJS</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ URL::to('/details/locker')}}">Locker</a></li>
<li class="nav-item"><a class="dropdown-item" href="#">Every Transaction Alert Facility</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">DICGC <i data-feather="chevron-down"></i></a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="dropdown-item" href="{{ asset('public/logo.png')}}">DICGC Logo</a></li>
<li class="nav-item"><a class="dropdown-item" href="{{ asset('public/qr.png')}}">DICGC QR Code</a></li>
</ul>
</li> -->
</ul>


</div>

</div>
</div>

</nav>

</header>