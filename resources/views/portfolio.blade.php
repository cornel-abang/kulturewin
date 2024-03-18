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

@foreach ($portfolios as $portfolio)
<section class="section portfolio-area" id="">
    <div class="portfolio-item" style="margin-top: 300px">
        <img src="{{ $portfolio->fe_image }}">
        <div class="portfolio-info">
            <div class="title">{{ $portfolio->title }}</div>
            <div class="desc">
                {{ $portfolio->description }}
            </div><br/>
            <div class="portfolio-btn" onclick="window.location.href='{{ $portfolio->youtube_link }}'">
                <button class="">VIEW MORE</button>
            </div>
        </div>
    </div>
</section>   
@endforeach

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')