@include('layouts.header', ['pageTitle'=>'Our portfolio'])

@include('layouts.breadcrumb', ['pageTitle'=>'Our portfolio'])

<section class="section" id="">
    <div class="portfolio-story story">
        <h3>Portfolio</h3>              
        <p>We are the team with unwavering passion. We are storytellers. 
            We are experts who champion the power of culture and provide a stage for artists, brands, 
            and event organizers to thrive. Here is just a glimpse into the stories we've helped tell.
        </p>
    </div>
</section>

<section class="section portfolio-img-area" id="">
    <div class="portfolio-img"></div>
</section>

<section class="section portfolio-area" id="">
    <div class="portfolio-item" style="margin-top: 300px">
        <img src="{{ asset('assets/images/party.jpg')}}">
        <div class="portfolio-info">
            <div class="title">boo of the booless party</div>
            <div class="desc">
                Ut sit at orci cursus gravida pretium proin nulla id purus, placerat eget mauris eu ac volutpat facilisi eget morbi ullamcorper turpis 
                nisi aconsequat cursus malesuada leo ultrices nisl dictumst turpis tortor sem amet, 
                euismod aliquam, lacus laoreet dui facilisi morbi ullamcorper turpis nisi aconsequat cursus
            </div><br/>
            <div class="portfolio-btn">
                <button class="">VIEW MORE</button>
            </div>
        </div>
    </div>
</section>

<section class="section portfolio-area" id="">
    <div class="portfolio-item">
        <img src="{{ asset('assets/images/party2.jpg')}}">
        <div class="portfolio-info">
            <div class="title">A Night in Lagos</div>
            <div class="desc">
                Ut sit at orci cursus gravida pretium proin nulla id purus, placerat eget mauris eu ac volutpat facilisi eget morbi ullamcorper turpis 
                nisi aconsequat cursus malesuada leo ultrices nisl dictumst turpis tortor sem amet, 
                euismod aliquam, lacus laoreet dui facilisi morbi ullamcorper turpis nisi aconsequat cursus
            </div><br/>
            <div class="portfolio-btn">
                <button class="">VIEW MORE</button>
            </div>
        </div>
    </div>
</section>

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')