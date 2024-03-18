@include('layouts.dash.header', ['pageTitle' => 'All events'])
      <!-- partial:../../partials/_sidebar.html -->
      @include('layouts.dash.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KultureWin - Onboarded Artists </h4>
                  <p class="card-description">
                    Artists found: <code>{{ $artists->count() }}</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="artists-table">
                      <thead>
                        <tr>
                          <th>
                            Artist
                          </th>
                          <th>
                            Fullname
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($artists as $artist)
                        <tr>
                            <td class="py-1">
                              <img src="{{ $artist->photo }}" alt="{{ $artist->stage_name }}"/>
                            </td>
                            <td>
                              {{ $artist->full_name }}
                            </td>
                            <td>
                                {{ $artist->email }}
                            </td>
                            <td>
                                {{ $artist->phone }}
                            </td>
                            <td>
                              <a href="#" class="action-btn" data-toggle="modal" data-target="#exampleModal" data-view-url="{{ route('artist.fetch', $artist->id)}}"><li class="fa fa-eye"></li></a> 
                              {{-- <a href="{{ route('event.delete', $artist->id) }}" class="action-btn del-event-btn"><li class="fa fa-trash"></li></a> --}}
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
                    <th scope="row">First Name</th>
                    <td id="f_name">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">last Name</th>
                    <td id="l_name">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Middle Name</th>
                    <td id="m_name">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Stage Name</th>
                    <td id="s_name">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td id="a-email">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Phone</th>
                    <td id="a-phone">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Date of Birth</th>
                    <td id="a-dob">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Street address</th>
                    <td id="a-street">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">City</th>
                    <td id="a-city">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">State</th>
                    <td id="a-state">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Country</th>
                    <td id="a-country">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Post/Zip Cide</th>
                    <td id="a-zip">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Label/Management Association</th>
                    <td id="a-label">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Label (If yes)</th>
                    <td id="a-if-yes">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">PRO Affiliations</th>
                    <td id="a-pro">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">~Website</th>
                    <td id="a-website">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">YouTube</th>
                    <td id="a-youtube">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Instagram</th>
                    <td id="a-instagram">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Facebook</th>
                    <td id="a-facebook">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Twitter</th>
                    <td id="a-twitter">Mark</td>
                  </tr>
                  <tr>
                    <th scope="row">Top 5 songs</th>
                    <td id="a-songs">Mark</td>
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
  {{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script> --}}
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
    // $('#artists-table').DataTable();

    $(".del-event-btn").click(function(e){
        e.preventDefault();

        let location = $(this).attr('href');

        if (confirm('Are you sure?')) {
            window.location.href = location;
        }
    });

    $(".action-btn").click(function(){
      let url = $(this).data('view-url');

      $.ajax({
        url: url,
        type: 'GET',
        headers: {
          'Accept': 'application/json' // Specify the desired Accept header value
        },
      success: function(response) {
        fillModalWith(response.artist)
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

    function fillModalWith(artistInfo)
    {
      $('#f_name').text(artistInfo.first_name)
      $('#m_name').text(artistInfo.middle_name)
      $('#l_name').text(artistInfo.last_name)
      $('#s_name').text(artistInfo.stage_name)
      $('#a-email').text(artistInfo.email)
      $('#a-phone').text(artistInfo.phone)
      $('#a-dob').text(artistInfo.dob)
      $('#a-street').text(artistInfo.street)
      $('#a-city').text(artistInfo.city)
      $('#a-state').text(artistInfo.state)
      $('#a-country').text(artistInfo.country)
      $('#a-zip').text(artistInfo.zip_code)
      $('#a-label').text(artistInfo.with_label)
      $('#a-if-yes').text(artistInfo.label_name)
      $('#a-pro').text(artistInfo.pro_affil)
      $('#a-website').text(artistInfo.website)
      $('#a-youtube').text(artistInfo.youtube)
      $('#a-instagram').text(artistInfo.instagram)
      $('#a-facebook').text(artistInfo.facebook)
      $('#a-twitter').text(artistInfo.twitter)
      $('#a-songs').text(artistInfo.songs_url)
      $('#exampleModalLabel').text(artistInfo.full_name)
      $('#profilePhoto').attr('src', artistInfo.photo);
    }
  </script>
</body>

</html>