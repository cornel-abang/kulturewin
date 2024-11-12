<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Artist;
use App\Models\Contact;
use App\Mail\NewBooking;
use App\Mail\NewEnquiry;
use App\Models\Portfolio;
use App\Models\BookArtist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsrequest;
use App\Http\Requests\BookArtistRequest;
use App\Http\Requests\OnboardArtistRequest;
use App\Models\Payment;
use App\Models\Ticket;
use Unicodeveloper\Paystack\Facades\Paystack;

class FrontendController extends Controller
{
    public function showWelcomePage()
    {
        return view('welcome');
    }

    public function showAboutUsPage()
    {
        return view('about');
    }

    public function showOurServicesPage()
    {
        return view('services');
    }

    public function showContactUsPage()
    {
        return view('contact');
    }

    public function showPortfolioPage()
    {
        $portfolios = Portfolio::all();

        return view('portfolio', compact('portfolios'));
    }

    public function showBookArtistPage()
    {
        $artists = Artist::all();

        return view('book-artist', compact('artists'));
    }

    public function showBookArtistFormPage(int $id)
    {
        $artist = Artist::find($id);

        return view('book-artist-form', compact('artist'));
    }

    public function showArtistOnboardingFormPage()
    {
        return view('artist-onboarding');
    }

    public function submitArtistOnboardingForm(OnboardArtistRequest $request)
    {
        $data = $request->validated();
        $data['photo'] = $this->uploadImage($request->photo);
        
        Artist::create($data);

        session()->flash('artist_onboarded', true);

        return redirect()->back();
    }

    public function submitBookArtistForm(BookArtistRequest $request)
    {
        if ($this->artistIsBooked($request->artist_id, $request->book_date)) {
            return redirect()->back()
                ->withInput($request->validated())
                ->withErrors(['book_date' => 'Artist is already booked on this date']);
        }

        $booking = BookArtist::create($request->validated());

        $this->notifyAdminForNewBooking($booking);

        session()->flash('artist_booked', true);

        return redirect()->back();
    }

    public function artistIsBooked(int $id, string $date)
    {
        return Artist::find($id)->isBookedOn($date);

    }

    public function getEvent(int $id)
    {
        $event = Event::find($id);

        return response()->json(compact('event'));
    }

    public function submitContactForm(ContactUsrequest $request)
    {
        $contact = Contact::create($request->validated());

        $this->notifyAdminForNewEnquiry($contact);

        session()->flash('contact_made', true);

        return redirect()->back();
    }

    public function notifyAdminForNewEnquiry(Contact $contact)
    {
        Mail::to(config('app.contact_us_email'))
            ->cc(config('app.cc_emails'))
            ->send(new NewEnquiry($contact));
    }

    public function notifyAdminForNewBooking(BookArtist $booking)
    {
        Mail::to(config('app.artist_booking_email'))
            ->cc(config('app.cc_emails'))
            ->send(new NewBooking($booking));
    }

    public function redirectToGateway(Request $request)
    {
        $data = $request->all();
        $data['metadata'] = [
            'event_id' => $request->orderID,
            'qty' => $request->qty,
        ];
        $data['amount'] = $request->amount * 100; //convert to kobo for paystack

        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return redirect()->back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        } 
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $ticketPrice = ($paymentDetails['data']['amount']/$paymentDetails['data']['metadata']['qty']) / 100;
        if ($paymentDetails['status'] && $paymentDetails['data']['status']) {
            $ticket = Ticket::where(
                'price', $ticketPrice
            )->where('event_id', $paymentDetails['data']['metadata']['event_id'])
            ->first();
            $ticket->qty -= $paymentDetails['data']['metadata']['qty'];
            $ticket->sold_amount += $paymentDetails['data']['metadata']['qty'];
            $ticket->save();

            $this->savePayment($paymentDetails, $ticket->type);

            session()->flash('payment_made', true);
        }else{
            session()->flash('payment_not_made', true); // not used yet
        }

        return redirect('/');
    }

    public function savePayment(array $details, string $ticketType)
    {
        $data = [
            'event_id' => $details['data']['metadata']['event_id'],
            'ref' => $details['data']['reference'],
            'amount' => $details['data']['amount'],
            'email' => $details['data']['customer']['email'],
            'phone' => $details['data']['customer']['phone'],
            'ticket_type' => $ticketType,
        ];

        Payment::create($data);
        return true;
    }

    public function paymentsIndex()
    {
        $payments = Payment::all();
        return view('dash.payments', compact('payments'));
    }
}