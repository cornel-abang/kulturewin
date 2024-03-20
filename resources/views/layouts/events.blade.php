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
                {{-- <a href="{{ route('event.get', $event->id) }}" class="book-ticket-btn" data-id="{{ $event->id }}"> --}}
                {{-- <span>The testx</span> --}}
                <a href="#" class="" data-id="{{ $event->id }}">
                    <div class="event-cta-tx">
                        GET TIKCET 
                    </div>
                </a>
            </div>
        </div>  
        @endforeach
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tickets for: <em id="event-title"></em></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="buy-ticket-form" action="{{ route('event.pay') }}" method="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                      <label for="exampleInputEmail1">Event</label>
                      <input type="text" class="form-control" id="event" value="" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Ticket price per unit<small>•</small></label>
                      <input type="text" class="form-control" id="unit-price" value="" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Your name<small>•</small></label>
                      <input type="text" name="name" class="form-control" id="your-name" value="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Your email<small>•</small></label>
                      <input type="email" name="email" class="form-control" id="your-email" value="" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Your phone<small>•</small></label>
                      <input type="text" name="phone" class="form-control" id="your-phone" value="" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Quantity<small>•</small></label>
                      <input type="number" name="qty" class="form-control" id="ticket-qty" value="" required>
                      <input type="hidden" name="event_id" class="form-control" id="event-id">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Total amount (&#8358)<small>•</small></label>
                      <input type="number" name="amount" class="form-control" id="ticket-amount" readonly>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary pay-event-btn">Pay</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>


  <style>
    .btn-primary {
      border: none;
      background: #F57141;
    }
    .form-group label {
      font-weight: bold;
    }
    .form-group label small {
      color: red;
    }
    .btn-primary:hover {
      border: none;
      background: #F57141;
    }
   .action-area {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
   }
  </style>