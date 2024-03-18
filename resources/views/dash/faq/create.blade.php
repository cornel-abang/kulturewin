@include('layouts.dash.header', ['pageTitle' => 'Create FAQ'])
      <!-- partial:../../partials/_sidebar.html -->
      @include('layouts.dash.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="grid-margin stretch-card form-area">
              <div class="card">
                <div class="card-body row">
                  <h4 class="card-title">FAQ creation</h4>
                  <p class="card-description">
                    Enter FAQ details below..
                  </p>
                  <form class="forms-sample" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">FAQ Question<span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Type question here.." name="question" value="{{old('question')}}">
                        @if ($errors->has('question'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('question') }}
                            </small>
                        @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">FAQ Answer</label>
                      <textarea class="form-control form-txt-area" name="answer" placeholder="Type answer here..">{{old('answer')}}</textarea>
                      @if ($errors->has('answer'))
                            <small class="invalid-feedback" role="alert">
                            {{ $errors->first('answer') }}
                            </small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Create</button>
                    {{-- <button class="btn btn-light">Cancel</button> --}}
                  </form>
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
    .form-area {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .stretch-card > .card {
        width: 40% !important;
        min-width: 40% !important;
    }
    .form-txt-area {
        height: 100px !important;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-group label span {
        color: #F57141;
    }
    .btn-primary {
        background: #F57141 !important;
        border: none;
        font-weight: bold
    }
  </style>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/dash/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/dash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/dash/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  <script src="{{asset('assets/dash/vendors/select2/select2.min.js')}}"></script>
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
  <script src="{{asset('assets/dash/js/file-upload.js')}}"></script>
  <script src="{{asset('assets/dash/js/typeahead.js')}}"></script>
  <script src="{{asset('assets/dash/js/select2.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>