<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{ asset('public/img/devplus.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          @if (\Route::current()->getName() == 'pages.home')  
            <li class="active"><a href="#intro">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
          @else
            <li class="active"><a href="{{ route('pages.home') }}">Home</a></li>
            <li><a href="{{ route('pages.home') }}#about">About Us</a></li>
            <li><a href="{{ route('pages.home') }}#services">Services</a></li>
            <li><a href="{{ route('pages.home') }}#portfolio">Portfolio</a></li>
            <li><a href="{{ route('pages.home') }}#contact">Contact Us</a></li>
          @endif

        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
{{--   <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>Digital solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro --> --}}

@if (\Route::current()->getName() == 'pages.home')  
    <section style="margin-top:80px" id="intro">

      <div class="intro-content">
        <h2>Make your <span> business ideas</span><br>happen!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
        </div>
      </div>

      <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url({{ asset('public/img/intro-carousel/1.jpg') }});"></div>
        <div class="item" style="background-image: url({{ asset('public/img/intro-carousel/2.jpg') }});">
          {{-- <h2>We provide<br><span>Digital solutions</span><br>for your business!</h2> --}}
        </div>
        <div class="item" style="background-image: url({{ asset('public/img/intro-carousel/3.jpg') }});"></div>
        <div class="item" style="background-image: url({{ asset('public/img/intro-carousel/4.jpg') }});"></div>
        <div class="item" style="background-image: url({{ asset('public/img/intro-carousel/5.jpg') }});"></div>
      </div>

    </section><!-- #intro -->
  
  @endif