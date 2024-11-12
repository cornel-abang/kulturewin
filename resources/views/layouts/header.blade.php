<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Kulturewin | {{ $pageTitle }}</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset('assets/dash/images/favicon.png')}}" />

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row nav-content">
                <div class="col-9">
                    <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo logo-white" style="color: #e8e1e1;">
                            <img src="{{ asset('assets/images/logo.png') }}" height="70" width="100" style="margin-left: 20px">
                        </a>
                        <a href="/" class="logo logo-black" style="color: #e8e1e1;">
                            <img src="{{ asset('assets/images/logo-black.png') }}" height="70" width="100" style="margin-left: 20px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="margin-left: 60px">
                            <li class="scroll-to-section"><a href="{{ route("home") }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route("about") }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Our Story</a></li>
                            <li class="scroll-to-section"><a href="{{ route("services") }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">What We Do</a></li>
                            <li class="scroll-to-section"><a href="{{ route("portfolio") }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
                            {{-- <li class="scroll-to-section"><a href="{{ route("artist.onboarding") }}">Onboarding</a></li> --}}
                            <li class="scroll-to-section"><a href="{{ route("book.artist") }}" class="{{ request()->routeIs('book.artist') ? 'active' : '' }}">Artist Booking</a></li> 
                            <li class="scroll-to-section"><a href="{{ route("contact") }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li> 
                            <li class="scroll-to-section hide-nav-item" id="events-link"><a href="#" class="">Upcoming Events/Tickets</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
                <div class="col-3">
                    <button class="event-btn pull-right">Upcoming Events/Ticket</button>
                </div>
            </div>
        </div>
    </header>
    <style>
        li.hide-nav-item {
            display: none;
        }
    </style>
    <!-- ***** Header Area End ***** -->