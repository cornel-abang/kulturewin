@include('layouts.header', ['pageTitle'=>'Artist booking form'])

@include('layouts.breadcrumb', ['pageTitle'=>'Booking form'])

<section class="section contact-form-area" id="" style="margin-bottom: 200px">
    <div class="contact-form-box">
        <div class="contact-header">
            Book artist <strong>•{{ $artist->stage_name }}•</strong> below
        </div>
        @if (\Session::has('artist_booked'))
            <div class="alert alert-success" role="alert">
                Great! Artist successfully booked
            </div>
        @endif
        <div class="contact-form">
            <form action="" method="POST">
                {{ csrf_field() }}
                
                <div class="form-field">
                    <div class="input-area">
                        <span>Your name</span>
                        <input name="book_name" type="text" id="name" value="{{ old('book_name') }}" required>
                        <input name="artist_id" type="hidden" value="{{ $artist->id }}">
                        @if ($errors->has('book_name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('book_name') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Your email</span>
                        <input name="book_email" type="text" id="name" value="{{ old('book_email') }}" required>
                        @if ($errors->has('book_email'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('book_email') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Your phone number</span>
                        <input name="book_phone" type="phone" id="brand" value="{{ old('book_phone') }}" required>
                        @if ($errors->has('book_phone'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('book_phone') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Book date</span>
                        <input name="book_date" type="date" id="brand" value="{{ old('book_date') }}" class="date-field" required>
                        @if ($errors->has('book_date'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('book_date') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-txt-area">
                        <span>Booking message</span>
                        <textarea name="message" rows="6" id="message" placeholder="Any messsage?">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('message') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" id="form-submit" class="contact-us-btn">Book {{ $artist->stage_name }}</button>
                </div>
            </form>
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
    .date-field {
        color: white!important;
    }
    .date-field::-webkit-calendar-picker-indicator { 
        background: transparent;
        border: 1px solid white;
        border-radius: 5px
     }
</style>

@include('layouts.faqs')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')