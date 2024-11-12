@include('layouts.dash.header', ['pageTitle' => 'All Payments'])

<!-- partial:../../partials/_sidebar.html -->
@include('layouts.dash.sidebar')

<!-- main-panel start -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">KultureWin - Event Ticket Payments</h4>
                        <p class="card-description">
                            Total Payments: <code>{{ $payments->count() }}</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Reference</th>
                                        <th>Email</th>
                                        {{-- <th>Phone</th> --}}
                                        <th>Amount (₦)</th>
                                        <th>Ticket Type </th>
                                        <th>Date</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->event->title ?? 'N/A' }}</td>
                                        <td>{{ $payment->ref }}</td>
                                        <td>{{ $payment->email }}</td>
                                        {{-- <td>{{ $payment->phone }}</td> --}}
                                        <td>{{ number_format($payment->amount / 100, 2) }}</td> <!-- assuming amount is in kobo -->
                                        <td>{{ $payment->ticket_type }}</td>
                                        <td>{{ $payment->created_at->format('d-m-Y H:i') }}</td>
                                        {{-- <td>
                                            <a href="{{ route('payment.show', $payment->id) }}" class="action-btn">
                                                <li class="fa fa-eye"></li>
                                            </a> | 
                                            <a href="{{ route('payment.delete', $payment->id) }}" class="action-btn del-payment-btn">
                                                <li class="fa fa-trash"></li>
                                            </a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">KultureWin</span>
            <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
        </div>
    </footer>
</div>
<!-- main-panel ends -->

<!-- JavaScript and Plugins -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
<script src="{{ asset('assets/dash/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/dash/js/template.js') }}"></script>

<!-- Delete Confirmation Script -->
<script>
    $(".del-payment-btn").click(function(e){
        e.preventDefault();
        let location = $(this).attr('href');
        if (confirm('Are you sure you want to delete this payment?')) {
            window.location.href = location;
        }
    });
</script>