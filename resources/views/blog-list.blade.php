@include('layouts.header', ['pageTitle'=>'Our blog'])

@include('layouts.breadcrumb', ['pageTitle'=>'Our bllog'])

<section class="section" id="">
    <div class="portfolio-story story">
        <h3>Blog</h3>              
        <p>Our blog covers interesting topics shaping both the entertainment and corporate worlds. 
            From pop culture trends to business advancements - we explore topics that spark curiosity and inspire action.
        </p>
    </div>
</section>

<section class="section portfolio-img-area" id="">
    <div class="portfolio-img"></div>
</section>

<section class="section blog-section" id="">
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
</section>

<!-- ***** Upcoming Events Starts ***** -->
@include('layouts.events')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')