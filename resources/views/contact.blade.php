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
    <div class="contact-form-box">
        <div class="contact-header">Make Enquiry</div>
        @if (\Session::has('contact_made'))
            <div class="alert alert-success" role="alert">
                Thank you for reaching out!<br>
                We will get back to you within the next 24 hours.
            </div>
        @endif
        <div class="contact-form">
            <form method="POST" action="">
                {{ csrf_field() }}
                <div class="form-field">
                    <div class="input-area">
                        <span>Name</span>
                        <input name="name" type="text" id="name" placeholder="Your name" value="{{ old('name') }}" required="">
                        @if ($errors->has('name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('name') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Brand Name</span>
                        <input name="brand" type="text" id="brand" placeholder="Your company/brand name" value="{{ old('brand') }}" required="">
                        @if ($errors->has('brand'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('brand') }}
                            </small>
                        @endif
                    </div>
                </div>
                {{-- <div class="form-field">
                    <input name="brand" type="text" id="brand" placeholder="Your company name" required="">
                </div> --}}
                <div class="form-field">
                    <div class="input-area">
                        <span>Email</span>
                        <input name="email" type="email" id="email" placeholder="Email address" value="{{ old('email') }}" required="">
                        @if ($errors->has('email'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('email') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Phone</span>
                        <input name="phone" type="text" id="phone" placeholder="Phone number" value="{{ old('phone') }}" required="">
                        @if ($errors->has('phone'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('phone') }}
                            </small>
                        @endif
                    </div>
                </div>
                {{-- <div class="form-field">
                    <input name="phone" type="text" id="phone" placeholder="Phone number" required="">
                </div> --}}
                <div class="form-field">
                    <div class="input-txt-area">
                        <span>How can we help?</span>
                        <textarea name="message" rows="6" id="message" placeholder="How can we help?" required="">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('message') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="check-area">
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Event Mgt." id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Event Mgt.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Artist Booking" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Artist Booking
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Show Promotion" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Show Prom.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Marketing" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Marketing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Concerts" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Concerts
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="" name="reasons" type="checkbox" value="Talent Mgt." id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Talent Mgt.
                        </label>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" id="form-submit" class="contact-us-btn">CONTACT US</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section" id="">
    <div class="address-area">
        <div class="map">
            <div class="location-icon">
                <img src="{{ asset('assets/images/location.png')}}">
            </div>
        </div>
        <div class="map-info">
            <div class="txt-area">
                <div class="title">DROP BY OUR OFFICE</div><br/>
                <div class="address">12 Fola Osibo Street</div>
                <span class="app-txt">(by appointment ony)</span>
            </div>
        </div>
        <div class="info-txt">
            <div class="phone">
                <i class="fa-solid fa-phone"></i> <span>+234 (81) 0000 0000</span>
            </div>
            <div class="email">
                <i class="fa fa-envelope" aria-hidden="true"></i> <span> Info@kulturewin.com</span>
            </div>
            <div class="word">We'll respond within 24 hours.</div>
        </div>
    </div>
</section>

<style>
    .invalid-feedback {
        display: inline !important;
        font-size: 14px;
        color: red;
        margin-top: -10px;
        margin-bottom: 20px;
    }
    .alert-success {
        text-align: center;
    }
    .contact-form .form-field input, 
    .contact-form textarea, 
    .contact-form select {
        color: white!important;
    }
    .form-field .input-area span, 
    .form-field .input-txt-area span {
        font-size: 20px;
    }
</style>
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')