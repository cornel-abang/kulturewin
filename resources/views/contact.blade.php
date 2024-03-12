@include('layouts.header', ['pageTitle'=>'Contact us'])

@include('layouts.breadcrumb', ['pageTitle'=>'Contact us'])

<section class="section" id="">
    <div class="contact-story story">
        <h3>Contact us</h3>              
        <p>At KultureWin, we believe in building genuine connections. Whether you're an artist, 
            fan, or potential partner, we'd love to hear from you.
        </p>
    </div>
</section>

<section class="section contact-form-area" id="">
    <div class="contact-form-box"></div>
</section>

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')