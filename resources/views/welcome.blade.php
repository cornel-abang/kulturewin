@include('layouts.header', ['pageTitle'=>'Welcome'])

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-area">
                    <div class="hero-intro">
                        <div class="hero-play-text">
                            <div class="p-text">
                                <div class="f-head">
                                    <p>Connecting African</p>
                                </div>
                                <p>Brands and Talent to</p>
                                <div class="s-head">
                                    <p>the World</p>
                                    <div class="p-box"></div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-play-vid">
                            <div>
                                <a rel="nofollow" href="#"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-about">
                        {{-- <div class="about-body"> --}}
                            <div class="header">
                                <span class="bar"></span> <p class="about-h"> ABOUT US</p>
                            </div>
                            <p class="text">
                                KultureWin is a cultural catalyst. We are a passionate collective of dreamers, doers, and music enthusiasts.
                                We deliver global-standard opportunities for talented individuals, brands, and enterprises looking to expand 
                                their reach in the African market and beyond.
                            </p>
                            <div class="hero-nums-area">
                                <div class="hero-num">
                                    <span>7+</span>
                                    <div class="hero-num-text-area">
                                        <span>Years</span>
                                        <span>Experience</span>
                                    </div>
                                </div>
                                <div class="hero-num">
                                    <span>35+</span>
                                    <div class="hero-num-text-area">
                                        <span>Events</span>
                                        <span>Handled</span>
                                    </div>
                                </div>
                                {{-- <div class="hero-num">
                                    <span>20</span>
                                    <div class="hero-num-text-area">
                                        <span>Artist</span>
                                        <span>Agencies</span>
                                    </div>
                                </div> --}}
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="client-area">
                <div class="intro-txt">Here are people we have worked with</div>
                <div class="client-list">
                    <img src="{{ asset('assets/images/icons/client1.png')}}">
                    <img src="{{ asset('assets/images/icons/client2.png')}}">
                    <img src="{{ asset('assets/images/icons/client3.png')}}">
                    <img src="{{ asset('assets/images/icons/client1.png')}}">
                    {{-- <img src="{{ asset('assets/images/icons/sharelocks.png')}}"> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="">
        <div class="expertise-area">
            <h3>Our Area of Expertise</h3>
            <p>Our expertise extends far beyond the stage. 
                We're a team of passionate experts dedicated to pushing boundaries and exceeding expectations. 
                We possess diverse skills and knowledge that allow us to deliver truly memorable experiences.
            </p>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="">
        <div class="faq-container">
            <a href="{{ route('services') }}">
                <div class="faq-item">
                    <div class="faq-question">Concerts</div>
                    <div class="icon-container">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>
            {{-- <div class="faq-answer">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div> --}}
            <a href="{{ route('book.artist') }}">
                <div class="faq-item">
                    <div class="faq-question">Artist Booking</div>
                    <div class="icon-container">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>
            {{-- <div class="faq-answer">
                <p>To fill the blank elements on the page.</p>
            </div> --}}
            <a href="{{ route('services') }}">
                <div class="faq-item">
                    <div class="faq-question">Talent Management</div>
                    <div class="icon-container">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>
            {{-- <div class="faq-answer">
                <p>There are many variations of passages of Lorem Ipsum available, but i use lipsum.com.</p>
            </div> --}}
            <a href="{{ route('services') }}">
                <div class="faq-item">
                    <div class="faq-question">Marketing</div>
                    <div class="icon-container">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>
            {{-- <div class="faq-answer">
                <p>There are many variations of passages of Lorem Ipsum available, but i use lipsum.com.</p>
            </div> --}}
            <a href="{{ route('services') }}">
                <div class="faq-item">
                    <div class="faq-question">Event Management</div>
                    <div class="icon-container">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>
            {{-- <div class="faq-answer">
                <p>There are many variations of passages of Lorem Ipsum available, but i use lipsum.com.</p>
            </div> --}}
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <section class="section" id="">
        <div class="experience-area">
            <h3>Creators of Iconic Experience</h3>              
            <p>We believe in the power of culture to connect, inspire, and transform. That is why we champion diverse voices, 
                curate impactful shows, and foster meaningful connections between artists, audiences, and communities.
            </p>
        </div>
    </section>

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="">
        <div class="help-txt-area">
            <h3>How we help</h3>
            <p>Our services to you.</p>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="">
        <div class="help-menu-area">
            <div class="help-menu">
                <div class="help-img help-img-1"></div>
                <div class="help-info">
                    <div class="title">Our Story</div>
                    <a href="{{ route('about') }}">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="help-menu">
                <div class="help-img help-img-2"></div>
                <div class="help-info">
                    <div class="title">Services</div>
                    <a href="{{ route('services') }}">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="help-menu">
                <div class="help-img help-img-4"></div>
                <div class="help-info">
                    <div class="title">Portfolio</div>
                    <a href="{{ route('portfolio') }}">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="help-menu">
                <div class="help-img help-img-3"></div>
                <div class="help-info">
                    <div class="title">Artists</div>
                    <a href="{{ route('book.artist')}}">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    {{-- <section class="section" id="">
        <div class="blog-area" data-postcount="0" data-postconstcount="null">
            <h3>Blog</h3>
            <div class="blog-txt-ara">
                <p>Our blog covers the most fascinating topics in the industry</p>
                <div class="dir-arrow">
                    <a href="#"><i class="fas fa-long-arrow-left first-arrow hide-elem"></i></a>
                     1/10 
                    <a href="#"><i class="fas fa-long-arrow-right sec-arrow"></i></a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ***** Menu Area Starts ***** -->
    {{-- <section class="section" id="">
        <div class="blog-menu-area">
            <div class="blog-menu">
                <div class="blog-img blog-img-1"></div>
                <div class="blog-info">
                    <div class="title">
                        <div>Our Story</div>
                        <p>Blog covers the most fascinating topics...</p>
                    </div>
                    <a href="#">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="blog-menu">
                <div class="blog-img blog-img-2"></div>
                <div class="blog-info">
                    <div class="title">
                        <div>Social Media</div>
                        <p>Blog covers the most fascinating topics...</p>
                    </div>
                    <a href="#">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="blog-menu">
                <div class="blog-img blog-img-3"></div>
                <div class="blog-info">
                    <div class="title">
                        <div>The vibes</div>
                        <p>Blog covers the most fascinating topics...</p>
                    </div>
                    <a href="#">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="blog-menu">
                <div class="blog-img blog-img-4"></div>
                <div class="blog-info">
                    <div class="title">
                        <div>Our Story</div>
                        <p>Blog covers the most fascinating topics...</p>
                    </div>
                    <a href="#">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="blog-menu">
                <div class="blog-img blog-img-1"></div>
                <div class="blog-info">
                    <div class="title">
                        <div>Our Story</div>
                        <p>Blog covers the most fascinating topics...</p>
                    </div>
                    <a href="#">
                        <div class="arrow">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Upcoming Events Starts ***** -->
    @include('layouts.events')
    <style>
        .client-area {
            overflow: hidden;
        }

        .client-list {
            display: flex;
            animation: slide 10s infinite; /* Adjust the duration as needed */
        }
        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        .client-list img {
            flex: 0 0 auto;
            width: 100px; /* Adjust the width as needed */
            /* height: auto; */
            margin-right: 10px; /* Adjust the space between images */
        }
    </style>
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')