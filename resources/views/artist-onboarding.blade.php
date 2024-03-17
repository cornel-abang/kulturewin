@include('layouts.header', ['pageTitle'=>'Artist booking form'])

@include('layouts.breadcrumb', ['pageTitle'=>'Onboarding'])

<section class="section contact-form-area" id="" style="margin-bottom: 200px">
    <div class="contact-form-box" style="height: 2000px">
        <div class="contact-header">Please fill in all your details below..</div>
        @if (\Session::has('artist_onboarded'))
            <div class="alert alert-success" role="alert">
                Congrats! Your details have been sent for the onboarding process.
            </div>
        @endif
        <div class="contact-form">
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-field">
                    <div class="input-area">
                        <span>First Name <i>•</i></span>
                        <input name="first_name" type="text" id="name" placeholder="Your first name"  value="{{old('first_name')}}" required="">
                        @if ($errors->has('first_name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('first_name') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Middle Name <i>•</i></span>
                        <input name="middle_name" type="text" id="brand" placeholder="Your middle name" value="{{old('middle_name')}}" required="">
                        @if ($errors->has('middle_name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('middle_name') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Last Name <i>•</i></span>
                        <input name="last_name" type="text" id="name" placeholder="Your last name" value="{{ old('last_name') }}" required="">
                        @if ($errors->has('last_name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('last_name') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Stage Name <i>•</i></span>
                        <input name="stage_name" type="text" id="brand" placeholder="Your stage name" value="{{ old('stage_name') }}" required="">
                        @if ($errors->has('stage_name'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('stage_name') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Email <i>•</i></span>
                        <input name="email" type="email" id="email" placeholder="Email address" value="{{ old('email') }}" required="">
                        @if ($errors->has('email'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('email') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Phone <i>•</i></span>
                        <input name="phone" type="text" id="phone" placeholder="Phone number" value="{{ old('phone') }}" required="">
                        @if ($errors->has('phone'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('phone') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Date of Birth <i>•</i></span>
                        <input name="dob" type="date" id="name" value="{{ old('dob') }}" required="">
                        @if ($errors->has('dob'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('dob') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Street Address <i>•</i></span>
                        <input name="street" type="text" id="brand" placeholder="Your street address" value="{{ old('street') }}" required="">
                        @if ($errors->has('street'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('street') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>City <i>•</i></span>
                        <input name="city" type="text" id="name" placeholder="Your city" value="{{ old('city') }}" required="">
                        @if ($errors->has('city'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('city') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>State <i>•</i></span>
                        <input name="state" type="text" id="brand" placeholder="Your state" value="{{ old('state') }}" required="">
                        @if ($errors->has('state'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('state') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Post/Zip Code <i>•</i></span>
                        <input name="zip_code" type="text" id="name" placeholder="Your zip/post code" value="{{ old('zip_code') }}" required="">
                        @if ($errors->has('zip_code'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('zip_code') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Country <i>•</i></span>
                        <input name="country" type="text" id="brand" placeholder="Your country" value="{{ old('country') }}" required="">
                        @if ($errors->has('country'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('country') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>PRO Affiliations <i>•</i></span>
                        <select name="pro_affil" required="">
                            <option value="">--Choose--</option>
                            <option value="N/A">N/A</option>
                            <option value="ASCAP">ASCAP</option>
                            <option value="BMI">BMI</option>
                            <option value="SESAC">SESAC</option>
                            <option value="PRS">PRS</option>
                            <option value="COSON">COSON</option>
                        </select>
                        @if ($errors->has('pro_affil'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('pro_affil') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Website URL</span>
                        <input name="website" type="text" id="brand" placeholder="Website URL" value="{{ old('website') }}">
                        @if ($errors->has('website'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('website') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>YouTube URL</span>
                        <input name="youtube" type="text" id="name" placeholder="YouTube URL" value="{{ old('youtube') }}">
                        @if ($errors->has('youtube'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('youtube') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Facebook URL</span>
                        <input name="facebook" type="text" id="brand" placeholder="Facebook URL" value="{{ old('facebook') }}">
                        @if ($errors->has('facebook'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('facebook') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area">
                        <span>Instagram URL</span>
                        <input name="instagram" type="text" id="name" placeholder="Instagram URL" value="{{ old('instagram') }}">
                        @if ($errors->has('instagram'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('instagram') }}
                            </small>
                        @endif
                    </div>
                    <div class="input-area">
                        <span>Twitter URL</span>
                        <input name="twitter" type="text" id="brand" placeholder="Twitter URL" value="{{ old('twitter') }}">
                        @if ($errors->has('twitter'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('twitter') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-area" style="width: 1000px">
                        <span>Photo ID <i>•</i><br/><small>( Intenational Passport or any legal identification (Max. 10MB) )</small></span>
                        <input name="photo" type="file">
                        @if ($errors->has('photo'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('photo') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="check-area" style="width: 1200px; margin-bottom: 20px">
                    {{-- <div class="input-area">
                        <span style="color: white;">Photo ID</span>
                        <input name="photo" type="file">
                    </div> --}}
                    <div class="form-check" style="width: 1200px">
                        <span style="color: white;">Are you associated with any Label or Management? <i>•</i></span>
                        <input class="assoc-btn" name="with_label" type="radio" value="true">
                        <label class="form-check-label" for="flexCheckDefault">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="assoc-btn" name="with_label" type="radio" value="false" id="">
                        <label class="form-check-label" for="flexCheckChecked">
                            No
                        </label>
                    </div>
                </div>
                <div class="form-field hidden-field" id="artist-label-field">
                    <div class="input-txt-area">
                        {{-- <span>Please specify here</span> --}}
                        <div class="form-field">
                            <div class="input-area" style="width: 1000px">
                                <span>Please specify here <i>•</i></span>
                                <input name="label_name" type="text" placeholder="The name of the label you're associated with">
                            </div>
                        </div>
                        {{-- <input name="songs_url" type="text" id="brand" placeholder="The name of the label you're associated with"> --}}
                        {{-- <textarea name="songs_url" rows="3" id="message" placeholder="Ex.: https://www.youtube/watch?v=dkgtMAj3sGM" required=""></textarea> --}}
                    </div>
                </div>
                <div class="form-field">
                    <div class="input-txt-area">
                        <span>List of Songs <br><small>( List all top 5 songs with Spotify, Apple Music or YouTube links. E.g. Song Title - https://www.youtube/watch?v=dkgtMAj3sGM )</small></span>
                        <textarea name="songs_url" rows="5" id="message" placeholder="Ex.: https://www.youtube/watch?v=dkgtMAj3sGM">{{old('songs_url')}}</textarea>
                        @if ($errors->has('songs_url'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('songs_url') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" id="form-submit" class="contact-us-btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
    span i {
        color: red;
    }
    .hidden-field {
        display: none !important;
    }

    .form-field{
        -webkit-transition: all ease-in-out 0.2s;
	    -o-transition: all ease-in-out 0.2s;
	    transition: all ease-in-out 0.2s;
	    -moz-transition: all ease-in-out 0.2s;
    }
    .invalid-feedback {
        display: inline !important;
        font-size: 12px;
        color: red;
        margin-top: -10px;
        margin-bottom: 20px;
    }
</style>

@include('layouts.faqs')
    
<!-- ***** Footer Start ***** -->
@include('layouts.footer')