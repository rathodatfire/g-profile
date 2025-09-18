<!-- resources/views/home.blade.php -->

@extends('layouts.full-page')
@section('title', 'Login to UCD-Project ')
@section('content')
  
@if (session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function () {
            let alert = document.getElementById('success-alert');
            if (alert) alert.style.display = 'none';
        }, 3000); // 3 seconds
    </script>
@endif
<body data-pc-preset="preset-5" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
 <div class="auth-main">
    <div class="auth-wrapper v1">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <div class="text-center">
              <a href="#"><img src="{{ asset('images/logo-vmc.png') }}" alt="img"></a>
            </div>
            <div class="saprator my-3">
              <span>OR</span>
            </div>
            <h4 class="text-center f-w-500 mb-3">Sign up with your work email.</h4>
			
			<form name ='frmUserAdd' id ='frmUserAdd' action="{{ url('storeUser') }}" method="POST">
			@csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group mb-3">
				 <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group mb-3">
					<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                </div>
              </div>
            </div>
			  <div class="row">
              <div class="col-sm-6">
                <div class="form-group mb-3">
				 <input type="text" name="surname" class="form-control" id="surname" placeholder="Surname">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group mb-3">
					<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                </div>
              </div>
            </div>
			
            <div class="form-group mb-3">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group mb-3">
              <input name="txtPassword" id="txtPassword" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group mb-3">
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password">
            </div>
            
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
			
            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Already have an Account?</h6>
              <a href="{{url('/')}}" class="link-primary">Login Here</a>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    </div>
  </div>
@endsection
