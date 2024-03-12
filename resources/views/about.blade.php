@include('layouts.header')

@include('layouts.breadcrumb', ['pageTitle'=>'About us'])

<section class="section" id="">
    <div class="about-story story">
        <h3>Our Story</h3>              
        <p>KultureWin Entertainment is more than an entertainment company; we are experienced architects and passionate believers in your potential. 
            We are not just building careers, but a movement.Our mission, though unspoken, is to remove the limitations in the African entertainment 
            industry by acting as a springboard for your big and audacious dreams.
        </p>
    </div>
</section>

<section class="section about-img-area" id="">
    <div class="about-img"></div>
</section>

<div class="row">
    <div class="col-lg-6 pull-right">
        <section class="section about-us-box" id="">
            <div class="our-vision-area">
                <div class="vision-box"></div>
                <div class="vision-title">Our Vision</div>
                <div class="vision-txt">
                    We want to be Africa's foremost talent booking agency and entertainment consultancy 
                    known for delivering exceptional and world-class entertainment experiences.
                </div>
            </div>
            <div class="our-mission-area">
                <div class="mission-box"></div>
                <div class="mission-title">Our mission</div>
                <div class="mission-txt">
                    We want to be Africa's foremost talent booking agency and entertainment consultancy 
                    known for delivering exceptional and world-class entertainment experiences.
                </div>
            </div>
            <div class="our-prop-area">
                <div class="prop-box"></div>
                <div class="prop-title">Our Proposition</div>
                <div class="prop-txt">
                    KultureWin offers a comprehensive suite of services – artist management, bookings, event management, and concert production under one roof. <br/><br/>
                    But our true value lies in the synergy we create - our commitment to delivering unparalleled access to the top talent pool in Africa, 
                    ensuring seamless execution of your projects, and expanding your reach through our global network.
                </div>
            </div>
        </section>
    </div>
</div>

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')