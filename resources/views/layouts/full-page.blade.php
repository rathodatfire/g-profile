<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'UCD-Project App')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Hitesh Rathod">
	
	  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('public/assets/images/vfes-favicon.svg')}}" type="image/x-icon"> <!-- [Font] Family -->
<link rel="stylesheet" href="{{ asset('public/assets/fonts/inter/inter.css') }}" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{ asset('public/assets/fonts/tabler-icons.min.css') }}" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('public/assets/fonts/feather.css')}}" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('public/assets/fonts/fontawesome.css')}}" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{ asset('public/assets/fonts/material.css')}}" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}" id="main-style-link" >
<link rel="stylesheet" href="{{ asset('public/assets/css/style-preset.css')}}" >
  
</head>


    {{-- @include('partials.header-nav') Optional nav section --}}
    
    <div class="container">
        @yield('content')
    </div>

   {{--  @include('partials.footer') Optional footer --}}

<script src="{{ asset('public/assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('public/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('public/assets/js/pcoded.js') }}"></script>
<script src="{{ asset('public/assets/js/plugins/feather.min.js') }}"></script>
  
</html>
