@component('mail::message')
# KultureWin Site - New Enquiry

Hey admin<br>

A new enquiry has been made on the KultureWin website.<br> Find details below: <br>

<strong>Name:</strong> {{ $contact->name }}<br>
<strong>Brand/Company Name:</strong> {{ $contact->brand }}<br>
<strong>Email:</strong> {{ $contact->email }}<br>
<strong>Phone:</strong> {{ $contact->phone }}<br>
<strong>Reason:</strong> 
{!! 
    $contact->reasons ?: '<i>none picked</i>'
!!}
<br>
<strong>Message:</strong> <article>{{ $contact['message']}}</article><br/><br/>

Cheers,<br>
{{ config('app.name') }} Buddy <span style='font-size:20px;'>&#128522;</span><br>
@endcomponent