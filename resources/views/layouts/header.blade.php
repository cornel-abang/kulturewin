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
                        <a href="/" class="logo" style="color: #e8e1e1;">Kulturewin
                            {{-- <img src="{{ asset('assets/images/logo.png') }}" align="Kulturewin"> --}}
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="margin-left: 60px">
                            <li class="scroll-to-section"><a href="{{ route("home") }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route("about") }}">Our Story</a></li>
                            <li class="scroll-to-section"><a href="{{ route("services") }}">What We Do</a></li>
                            <li class="scroll-to-section"><a href="{{ route("portfolio") }}">Portfolio</a></li>
                            {{-- <li class="scroll-to-section"><a href="/blog">Blogs</a></li>  --}}
                            <li class="scroll-to-section"><a href="{{ route("contact") }}">Contact</a></li> 
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
    <!-- ***** Header Area End ***** -->