@include('layouts.header', ['pageTitle'=>'Book an Artist'])

@include('layouts.breadcrumb', ['pageTitle'=>'Book an artist'])

<section class="section" id="">
    <div class="artist-story story">
        <h3>Book Artist</h3>              
        <p>We offer a wide range of talent, from chart-topping stars and DJs to side-splitting comedians and captivating MCs. We also showcase rising local stars waiting to ignite the stage. 
            Our streamlined booking process ensures a smooth and stress-free experience, allowing you to focus on what matters most: creating a memorable event for your audience.
        </p>
    </div>
</section>

<section class="section artist-img-area" id="">
    <div class="artist-img"></div>
</section>

<section class="section artists-area" id="">
    @foreach ($artists as $artist)
    <div class="artist-tile">
        <img src="{{ $artist->photo }}">
        <div class="overlay">
            <div class="name">
                <h3>{{ $artist->stage_name }}</h3>
            </div>
            <div class="cta">
                <button onclick="window.location.href='{{ route('book.artist.form', $artist->id) }}'">BOOK ARTIST</button>
            </div>
        </div>
    </div>
    @endforeach
</section>

@include('layouts.faqs')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')