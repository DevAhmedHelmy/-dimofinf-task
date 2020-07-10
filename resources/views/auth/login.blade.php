<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

 {{-- Custom fonts for this template--}}
 <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 {{-- Custom styles for this template--}}
 <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="my-5 border-0 shadow-lg card o-hidden">
          <div class="p-0 card-body">

            <div class="row">

              <div class="col-lg-8 offset-2">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="mb-4 text-gray-900 h4">Welcome Back!</h1>
                  </div>


                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      @error('email')
                            <strong class="text-xs italic text-red-500">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password"  id="exampleInputPassword" placeholder="Password">
                      @error('password')
                            <strong class="text-xs italic text-red-500">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" ame="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>

                  </form>
                  <hr>
                  @if (Route::has('password.request'))
                  <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">
                        {{ __('general.Forgot_Your_Password') }}
                    </a>
                  </div>
                    @endif


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  {{-- Bootstrap core JavaScript--}}
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  {{-- Core plugin JavaScript--}}
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  {{-- Custom scripts for all pages--}}
  <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>



