<!-- resources/views/home.blade.php -->

@extends('layouts.full-page')

@section('title', 'Login to UCD-Project ')

@section('content')
    
<!-- [Body] Start -->

<body data-pc-preset="preset-5" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v1">
      <div class="auth-form">
		<h3>Welcome to UCD-Project Login</h3>
        <div class="card my-5">
          <div class="card-body">
            <form name ='frmUserLogin' id ='frmUserLogin' action="{{ url('login') }}" method="POST">
			      @csrf
            <h4 class="text-center f-w-500 mb-3">Login with your email</h4>
            <div class="form-group mb-3">
              <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="Email Address">
            </div>
            <div class="form-group mb-3">
              <input type="password"  name="password" id="password" class="form-control" id="floatingInput1" placeholder="Password">
            </div>
            <div class="d-flex mt-1 justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
              </div>
              <!--<h6 class="text-secondary f-w-400 mb-0">Forgot Password?</h6> -->
            </div>
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
              <a href="{{url('/')}}/register" class="link-primary">Create Account</a>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  
</div>
@endsection
