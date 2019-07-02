<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142829222-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142829222-1');
</script>

  <meta charset="utf-8">
  <title>DevPlus - Web Design in Nigeria - @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="DevPlus is a digital solution provider company. We offers services such as Enterprise Database management systems, Web Designs, Mobile Application Developemt, digital marketing amongst others" name="DevPlus - Programming - eCommerce - Laravel - PHP - Codeigniter - Digital-Marketing - Enterprise-Database-System">
  <meta name="google-site-verification" content="OKrEmkcUQvQELassB9wiTUPQToJx4iz-Ig5MVL89W5E" />
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
