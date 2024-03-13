@include('layouts.header', ['pageTitle'=>'Artist booking form'])

@include('layouts.breadcrumb', ['pageTitle'=>'Booking form'])

<section class="section contact-form-area" id="" style="margin-bottom: 200px">
    <div class="contact-form-box">
        <div class="contact-header">Book artist below</div>
        <div class="contact-form">
            <form>
                <div class="form-field">
                    <div class="input-area">
                        <span>Name</span>
                        <input name="name" type="text" id="name" placeholder="Your name" required="">
                    </div>
                    <div class="input-area">
                        <span>Brand Name</span>
                        <input name="brand" type="text" id="brand" placeholder="Your company name" required="">
                    </div>
                </div>
                {{-- <div class="form-field">
                    <input name="brand" type="text" id="brand" placeholder="Your company name" required="">
                </div> --}}
                <div class="form-field">
                    <div class="input-area">
                        <span>Email</span>
                        <input name="email" type="email" id="email" placeholder="Email address" required="">
                    </div>
                    <div class="input-area">
                        <span>Phone</span>
                        <input name="phone" type="text" id="phone" placeholder="Phone number" required="">
                    </div>
                </div>
                {{-- <div class="form-field">
                    <input name="phone" type="text" id="phone" placeholder="Phone number" required="">
                </div> --}}
                <div class="form-field">
                    <div class="input-txt-area">
                        <span>How can we help?</span>
                        <textarea name="message" rows="6" id="message" placeholder="How can we help?" required=""></textarea>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" id="form-submit" class="contact-us-btn">CONTACT US</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('layouts.faqs')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')