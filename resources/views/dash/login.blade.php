<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KultureWin | Login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dash/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/dash/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/dash/images/favicon.png')}}" />
</head>

<body>
    <style>
        .brand-logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 70px !important;
        }

        .auth form .auth-form-btn {
          background: #F57141 !important;
          border: none;
          font-weight: bold
        }
    </style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('assets/dash/images/logo.png')}}" alt="logo">
              </div>
              <h4>Hey,</h4>
              <h6 class="fw-light">Sign in to continue...</h6>
              <form class="pt-3" action="" method="POST">
                {{ csrf_field() }}

                @if (\Session::has('auth'))
                    <div class="alert alert-warning">Invalid credentials</div>
                @endif
                
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Work email...@kulturewin.com" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <small class="invalid-feedback" role="alert">
                           {{ $errors->first('email') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Account password" name="password" value="{{old('password')}}">
                    @if ($errors->has('password'))
                        <small class="invalid-feedback" role="alert">
                           {{ $errors->first('password') }}
                        </small>
                    @endif
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    href="#">SIGN IN</button>
                </div>
                <div class="my-4 d-flex justify-content-between align-items-center">
                  {{-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> --}}
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=".{{asset('assets/dash/vendors/js/vendor.bundle.base.js')}}"></script>
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
</body>

</html>