<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>reset Password</title>

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
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <div class="my-5 border-0 shadow-lg card o-hidden">
          <div class="p-0 card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-8 offset-2">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="mb-2 text-gray-900 h4">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and will send you a link to reset your password!</p>
                  </div>


                  <form class="user"  method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>






                    <div class="mb-0 form-group">

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Send Password Reset Link') }}
                            </button>

                    </div>
                  </form>
                  <hr>

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

