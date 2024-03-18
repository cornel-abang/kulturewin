<section class="section" id="">
    <div class="event-txt-area">
        <h3>Upcoming Events</h3>
        <p>Explore our calendar and secure tickets to upcoming events in your city.</p>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="">
    <div class="event-menu-area">
        @foreach ($events as $event)
        <div class="event-menu" data-bg-img="{{ $event->event_img }}">
            {{-- <div class="event-img event-img-1"></div> --}}
            <div class="event-info">
                {{-- <div class="title">Our Story</div> --}}
                {{-- <a href="{{ route('ticket.get', $event->id) }}"> --}}
                <a href="#">
                    <div class="event-cta-tx">
                        GET YOUR TIKCET
                    </div>
                </a>
            </div>
        </div>  
        @endforeach
    </div>
</section>