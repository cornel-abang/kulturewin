@component('mail::message')
# KultureWin Site - New Artist Booking

Hey admin<br>

A new booking has been made on the KultureWin website.<br> Find details below: <br>

<strong>Booking by:</strong> {{ $booking->book_name }}<br>
<strong>Phone:</strong> {{ $booking->book_phone }}<br>
<strong>Email:</strong> {{ $booking->book_email }}<br>
<strong>Booking date:</strong> {{ \Carbon\Carbon::parse($booking->book_date)->toFormattedDateString() }}<br>
<strong>Message:</strong> 
{!! 
    $booking->message ?: '<i>no message</i>'
!!}
<br>
<strong>Booked artist:</strong> {{ $booking->artist->stage_name }}<br/><br/>

<p>Login to the backend dashbaord for more info</p>
@component('mail::button', ['url' => route('login')])
    See backend ->
@endcomponent

Cheers,<br>
{{ config('app.name') }} Buddy <span style='font-size:20px;'>&#128522;</span><br>
@endcomponent