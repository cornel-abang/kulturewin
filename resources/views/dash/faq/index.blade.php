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
                  <h4 class="card-title">KultureWin - FAQs </h4>
                  <p class="card-description">
                    FAQs artists found: <code>{{ $faqs->count() }}</code>
                  </p>
                  @if (\Session::has('faq_created'))
                    <div class="alert alert-success">FAQ successfully added</div>
                  @endif
                  @if (\Session::has('faq_edited'))
                    <div class="alert alert-success">FAQ successfully edited</div>
                  @endif
                  @if (\Session::has('faq_deleted'))
                    <div class="alert alert-danger">FAQ deleted</div>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Question
                          </th>
                          <th>
                            Answer
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($faqs as $faq)
                        
                        <tr>
                            <td>
                              {{ $faq->question }}
                            </td>
                            <td>
                                {{ \Illuminate\Support\Str::limit($faq->answer, 50, $end='...') }}
                            </td>
                            <td class="action-area">
                              <a href="#" class="booking-action-btn action-btn" data-view-answer="{{  $faq->answer }}" data-view-question="{{  $faq->question }}">
                                <li class="fa fa-eye"></li>
                              </a> | 
                              <a href="{{ route('faq.edit', $faq->id) }}" class="action-btn"><li class="fa fa-edit"></li></a> | 
                              <a href="{{ route('faq.delete', $faq->id) }}" class="action-btn del-faq-btn"><li class="fa fa-trash"></li></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">FAQ Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h4>FAQ Question: </h4> 
                    <p id="f-question"></p><br/><br/>

                    <h4>FAQ Answer: </h4> 
                    <p id="f-answer"></p><br/><br/>
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
   .action-area {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
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
      let question = $(this).data('view-question');
      let answer = $(this).data('view-answer');

      $('#f-question').text(question)
      $('#f-answer').text(answer)

      $('#exampleModal').modal('show');
    });

    $(".close").click(function(){
      $('#exampleModal').modal('hide');
    });

    $(".del-faq-btn").click(function(e){
        e.preventDefault();

        let location = $(this).attr('href');

        if (confirm('Are you sure?')) {
            window.location.href = location;
        }
    });

  </script>
</body>

</html>