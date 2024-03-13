@include('layouts.header', ['pageTitle'=>'Our services'])

@include('layouts.breadcrumb', ['pageTitle'=>'Our services'])

<section class="section" id="">
    <div class="services-story story">
        <h3>Our Services</h3>              
        <p>Are you a visionary artist longing to share your unique voice with the world? An innovative brand 
            seeking to connect with your target audience and establish deeper engagement? 
            Or a show organizer seeking to make a lasting impact? 
            Our services are designed to propel your career, 
            amplify your voice, and connect you 
            with the right people.
        </p>
    </div>
</section>

<section class="section services-img-area" id="">
    <div class="services-img"></div>
</section>

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')