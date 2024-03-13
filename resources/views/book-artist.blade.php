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
    <div class="artist-tile">
        <img src="{{ asset('assets/images/person1.png')}}">
        <div class="overlay">
            <div class="name">
                <h3>CHIKE MUNA</h3>
            </div>
            <div class="cta">
                <button>BOOK ARTIST</button>
            </div>
        </div>
    </div>
    <div class="artist-tile">
        <img src="{{ asset('assets/images/person2.png')}}">
        <div class="overlay">
            <div class="name">
                <h3>ADE KING</h3>
            </div>
            <div class="cta">
                <button>BOOK ARTIST</button>
            </div>
        </div>
    </div>
    <div class="artist-tile">
        <img src="{{ asset('assets/images/person3.png')}}">
        <div class="overlay">
            <div class="name">
                <h3>PAUL STYLES</h3>
            </div>
            <div class="cta">
                <button>BOOK ARTIST</button>
            </div>
        </div>
    </div>
</section>

<!-- ***** Menu Area Starts ***** -->
<section class="section faq-section-box" id="">
    <div class="faq-area">
        <h3>Any questions? Check out the FAQ</h3>
        <p>We're a team of passionate experts dedicated to pushing boundaries and exceeding expectations.</p>
        <img src="{{ asset('assets/images/arrow.png')}}">
    </div>
    <div class="faq-container2">
        <div class="faq-item">
            <div class="faq-question">How does this work?</div>
            <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="faq-answer">
            Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, 
                aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. 
                Sit amet, adipiscing elit.
                Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, 
                aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. 
                Sit amet, adipiscing elit.
        </div>
        <div class="faq-item">
            <div class="faq-question">What are the chances of getting a booking?</div>
            <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="faq-answer">
            Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, 
                aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. 
                Sit amet, adipiscing elit.
        </div>
        <div class="faq-item">
            <div class="faq-question">How do I make a reservation?</div>
            <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="faq-answer">
            Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, 
                aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. 
                Sit amet, adipiscing elit.
        </div>
        <div class="faq-item">
            <div class="faq-question">How do I get a budget?</div>
            <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="faq-answer">
            Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, 
                aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. 
                Sit amet, adipiscing elit.
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')