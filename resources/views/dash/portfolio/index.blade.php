@include('layouts.dash.header', ['pageTitle' => 'All portfolio'])
      <!-- partial:../../partials/_sidebar.html -->
      @include('layouts.dash.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">KultureWin - Portfolio </h4>
                  <p class="card-description">
                    Portfolio found: <code>{{ $portfolio->count() }}</code>
                  </p>
                  @if (\Session::has('portfolio_created'))
                    <div class="alert alert-success">Portfolio successfully added</div>
                  @endif
                  @if (\Session::has('event_updated'))
                    <div class="alert alert-success">Event successfully updated</div>
                  @endif
                  @if (\Session::has('event_deleted'))
                    <div class="alert alert-danger">Event successfully deleted</div>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Portfolio
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            YouTube link
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($portfolio as $port)
                        <tr>
                            <td class="py-1">
                              <img src="{{ $port->fe_image }}" alt="image" />
                            </td>
                            <td>
                              {{ $port->title }}
                            </td>
                            <td>
                                <a href="{{ $port->youtube_link }}" target="_blank" data-toggle="tooltip" data-placement="top" title="Click here to watch the video on YouTube">
                                    {{ $port->youtube_link }}
                                </a>
                            </td>
                            <td>
                              <a href="{{ route('portfolio.edit', $port->id) }}" class="action-btn"><li class="fa fa-edit"></li></a> | 
                              <a href="{{ route('portfolio.delete', $port->id) }}" class="action-btn del-event-btn"><li class="fa fa-trash"></li></a>
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
  </script>
</body>

</html>