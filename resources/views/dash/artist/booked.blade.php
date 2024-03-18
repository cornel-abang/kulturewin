@include('layouts.dash.header', ['pageTitle' => 'Booked artist'])
      <!-- partial:../../partials/_sidebar.html -->
      @include('layouts.dash.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KultureWin - Booked artists </h4>
                  <p class="card-description">
                    Booked artists found: <code>{{ $bookedArtists->count() }}</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Artist
                          </th>
                          <th>
                            Full name
                          </th>
                          <th>
                            Book date
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($bookedArtists as $booking)
                        
                        <tr>
                            <td class="py-1">
                              <img src="{{ $booking->artist->photo }}" alt="image" />
                            </td>
                            <td>
                              {{ $booking->artist->full_name }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($booking->book_date)->toFormattedDateString() }}
                                <span class="label label-info">{{ \Carbon\Carbon::parse($booking->book_date)->diffForHumans() }}</span>
                            </td>
                            <td>
                              <a href="#" class="booking-action-btn"  data-view-url="{{ route('booking.fetch', $booking->id)}}"><li class="fa fa-eye"></li></a> 
                            </td>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="profile-area">
                    <img src="" alt="image" id="profilePhoto" class="img-sm profile-pic">
                    <h5 class="modal-title" id="exampleModalLabel">MTitle</h5>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table table-bordered">
                    <tr>
                      <th scope="row">Booking Name</th>
                      <td id="b-name">Mark</td>
                    </tr>
                    <tr>
                      <th scope="row">Booking Email</th>
                      <td id="b-email">Mark</td>
                    </tr>
                    <tr>
                      <th scope="row">Booking Phone</th>
                      <td id="b-phone">Mark</td>
                    </tr>
                    <tr>
                      <th scope="row">Booking Artist</th>
                      <td id="b-artist">Mark</td>
                    </tr>
                    <tr>
                      <th scope="row">Booking Date</th>
                      <td id="b-date">Mark</td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">KultureWin</span>
    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
  </div>
  <style>
    .label-info {
        color: white;
        background: #F57141;
        border-radius: 10px;
        padding: 5px;
        font-size: 10px;
        font-weight: bold;
    }
    a.action-btn {
        color: black;
    }
    .label-info {
        color: white;
        background: #F57141;
        border-radius: 10px;
        padding: 5px;
        font-size: 10px;
        font-weight: bold;
    }
    a.action-btn {
        color: black;
    }
    .modal-content {
      width: 800px!important;
    }
    .profile-area {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      width: 320px;
    }
    .profile-area .profile-pic {
      border-radius: 20px!important;
      height: 100px;
      width: 100px;
    }
    .profile-area .modal-title {
      color: black;
      font-weight: bold;
      border-bottom: 1px solid #F57141;
    }
    .btn-primary {
      border: none;
      background: #F57141;
    }
    .btn-primary:hover {
      border: none;
      background: #F57141;
    }
  </style>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- jQuery -->
  <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/dash/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/dash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/dash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/dash/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/dash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/dash/js/template.js')}}"></script>
  <script src="{{asset('assets/dash/js/settings.js')}}"></script>
  <script src="{{asset('assets/dash/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script>

    $(".del-event-btn").click(function(e){
        e.preventDefault();

        let location = $(this).attr('href');

        if (confirm('Are you sure?')) {
            window.location.href = location;
        }
    });

    $(".booking-action-btn").click(function(){
      let url = $(this).data('view-url');

      $.ajax({
        url: url,
        type: 'GET',
        headers: {
          'Accept': 'application/json' // Specify the desired Accept header value
        },
      success: function(response) {
        fillModalWith(response.booking)
      },
      error: function(xhr, status, error) {
        console.log(xhr, status, error);
      }
    });
      // $.get(url, {}, function(response){ 
      //   console.log(response);
      // });

      $('#exampleModal').modal('show');
    });

    $(".close").click(function(){
      $('#exampleModal').modal('hide');
    });

    function fillModalWith(bookingInfo)
    {
        // console.log(bookingInfo);
        // return;
      $('#b-name').text(bookingInfo.book_name)
      $('#b-email').text(bookingInfo.book_email)
      $('#b-phone').text(bookingInfo.book_phone)
      $('#b-artist').text(bookingInfo.artist.stage_name)
      $('#b-date').text(bookingInfo.book_date)

      $('#exampleModalLabel').text(bookingInfo.artist.stage_name)
      $('#profilePhoto').attr('src', bookingInfo.artist.photo);
    }
  </script>
</body>

</html>