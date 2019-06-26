<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>DevPlus - @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="DevPlus is a digital solution provider company. We offers services such as Enterprise Database management systems, Web Designs, Mobile Application Developemt, digital marketing amongst others" name="DevPlus - Programming - eCommerce - Laravel - PHP - Codeigniter - Digital-Marketing - Enterprise-Database-System">
  {{-- <meta content="" name="description"> --}}

  @include('partials.styles')
 
</head>

<body>

  <!--Header -->
        @include('partials.nav')
  <!-- #header -->

  <main id="main">

    @yield('content')
    
  </main>

  <!--==========================
    Footer
  ============================-->
          @include('partials.footer')


  <!-- JavaScript Libraries -->
          @include('partials.scripts')


</body>
</html>
