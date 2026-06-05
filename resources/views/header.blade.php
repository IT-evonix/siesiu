<!DOCTYPE html>
<html lang="en">

<head>
    @php($canonicalUrl = url()->current())
    <title>Symbiosis Institute of Education</title>
    <meta name="title" content="Symbiosis Institute of Education">
    <meta name="keywords" content="Symbiosis Institute of Education">
    <meta name="description" content="Symbiosis Institute of Education">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>


<header class="page-header">
    <!-- {{-- TOP BAR --}} -->
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                    <div class="topstrip_links">
                        <a href="mailto:info_sie@siu.edu.in">info_sie@siu.edu.in</a>
                        <a href="tel:7391086788">7391086788</a>
                        <a href="https://www.siu.edu.in" target="_blank">SIU</a>
                        <a href="https://www.symbiosis.ac.in" target="_blank">Symbiosis Society</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="container nav-flex">
            <a href="<?= url('/'); ?>" class="logo">
                <img src="{{ asset('assets/images/logo.webp') }}">
            </a>
            <!-- <div class="menu-toggle">☰</div> -->
            <div class="menu-toggle open-btn">☰</div>
            <div class="menu-toggle close-btn">✖</div>
            <nav class="nav-menu">
                <ul>
                    <li><a class="homelink" href="{{url('/')}}">Home</a></li>
                    <li class="has-submenu">
                        <a href="#">
                            About us
                            <span class="submenu-arrow">▼</span>
                            <span class="submenu-toggle">+</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{url('/our-legacy')}}">Our Legacy</a></li>
                            <li><a git branch -ahref="{{url('/about-siu')}}">About SIU</a></li>
                            <li><a href="{{url('/about-sie')}}">About SIE</a></li>
                            <li class="has-submenu">
                                <a href="#">
                                    Leadership
                                    <span class="submenu-arrow">▶</span>
                                    <span class="submenu-toggle">+</span>
                                </a>
                                <ul class="submenu nested-submenu">
                                    <li><a href="{{url('/chancellor')}}">Chancellor</a></li>
                                    <li><a href="{{url('/pro-chancellor')}}">Pro-chancellor</a></li>
                                    <li><a href="{{url('/vice-chancellor')}}">Vice Chancellor</a></li>
                                    <li><a href="{{url('/dean-FacultyofEducation')}}">Dean – Faculty of Education </a></li>
                                    <li><a href="{{url('/director-SIE')}}">Director - SIE </a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/faculty-member')}}">Faculty members </a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">
                            Program
                            <span class="submenu-arrow">▼</span>
                            <span class="submenu-toggle">+</span>
                        </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">
                                    PGD Early Childhood Education
                                    <span class="submenu-arrow">▶</span>
                                    <span class="submenu-toggle">+</span>
                                </a>
                                <ul class="submenu nested-submenu">
                                    <li><a href="{{url('/')}}">About the program</a></li>
                                    <li><a href="{{url('/')}}">Program structure</a></li>
                                    <li><a href="{{url('/')}}">Orientation and Pedagogy</a></li>
                                    <li><a href="{{url('/')}}">Program Outcomes</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/')}}">Eligibility </a></li>
                            <li><a href="{{url('/')}}">Admission Process </a> </li>
                            <li><a href="{{url('/')}}">Fees Details </a></li>
                            <li><a href="{{url('/')}}">How to Apply </a></li>
                            <li><a href="{{url('/')}}">Academic Calendar</a> </li>
                            <li><a href="{{url('/')}}">International Students</a></li>
                            <li><a href="{{url('/')}}">Financial Scholarships</a></li>
                            <li><a href="{{url('/')}}">Education Loans</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/life-at-sie')}}">Life at SIE</a></li>
                    <li><a href="{{url('/events')}}">Events </a></li>
                    <li><a href="{{url('/contact-us')}}">Contact us </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>