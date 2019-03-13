@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
    <!--==========================
      About Us Section
    ============================-->
  

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>DevPlus is a digital solution provider company. We offers services such as Enterprise Database management systems, Web Designs, Mobile Application Developemt, digital marketing amongst others</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              We are a full-service digital agency on a mission to help businesses succeed. We like to think of ourselves as a one-stop-agency for everything digital with services including Web Design & Development, E-Commerce, SEO, Digital Marketing, E-mail Marketing, Social Media, and much more. Feel free to contact us about services you are interested in.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Payment gateway Integration</a></h4>
              <p class="description">We provide payment gateway for your ecommerce website for seamless payment and accountability</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Workforce for Hire</a></h4>
              <p class="description">We hire out our professional Team for assist your business growth increase four-fold</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Web Analytics</a></h4>
              <p class="description">We provide web/data anayltic for our customers/client on how the web/mobile app is faring on the web</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>KYC Client/Customer System</h4>
            <p>
              Our KYC process are seamless. with our KYC app we help our clients and customers to keep track of the day-to-day transaction with their customers/clients including records of past-present transactions. 
            </p>
            <p> We also integrate Trouble-ticketing system which enable our clients to keep track of raising problems if it was solved, and how it was solved.
            </p>
            
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Build Your Communication System</h4>
            <p>
             We can also help you build your communications systems, ranging from VoIP, SMS, Web2SMS, Auto-respondant, Bulk Mail Services. E.t.c 
            </p>
            <p>
              Give us a try today 
            </p>
            <button class="btn btn-primary" type="submit" title="Send Message">Send Message</button>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section class="parallax" style="background-image: url({{ url('img/intro-carousel/2.jpg') }});" id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <strong><h3 style="color: black">Our Services</h3>
          <p style="color: black">We offer digital services spanning across web, mobile, database, graphics and server infrastucture </p></strong>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Web Design & Development</a></h4>
              <p class="description">We help businesses unleash their full potentials through modern and functional designs that make their competitors jealous.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-cart-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">eCommerce</a></h4>
              <p class="description">We help online businesses thrive through robust eCommerce strategy, design, development, marketing and management services.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Digital Marketing</a></h4>
              <p class="description">We help businesses find, attract and convert their target audience through an effective and time-tested digital marketing methodology.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Web Maintenance Service</a></h4>
              <p class="description">We help businesses free up their resources and focus on what’s truly important to them by managing and growing their entire online presence.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Mobile App Dev (iOS/Android)</a></h4>
              <p class="description">We help businesses free up their resources and focus on what’s truly important to them by managing and growing their entire online presence.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Enterprise Database Solutions</a></h4>
              <p class="description">We help large cooperate willing to setup database solutions to manage the workflow, payroll, user system etc</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->


  

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($portfolios as $portfolio)
                <li data-filter=".filter-{{$portfolio->app_type}}">{{$portfolio->app_description}}</li>
              @endforeach
            </ul>
          </div>
        </div>


        <div class="row portfolio-container">
          @foreach ($portfolios as $portfolio)
           
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->app_type}}">
            <div class="portfolio-wrap">
              {{-- <img src="{{imageSiteGrabber($portfolio->link)}}" class="thumbnail img-fluid" alt=""> --}}
              <div class="portfolio-info">
                <h4><a href="#">{{ $portfolio->app_name }}</a></h4>
                <p>{{ $portfolio->app_type }}</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          @endforeach

          
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
    
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Our CLients</h3>
          <p>We've had the pleasure to work work with some great brands in different sectors.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          {{-- <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div> --}}
          
      
       

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section class="parallax" id="contact" {{-- style="background-image: url({{ url('img/intro-carousel/1.jpg') }});" --}}>
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe> --}}
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>KM 80, Lagos Ibadan Expr Way</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@devplus.com.ng</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+234 810 603 3044</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="{{ route('send') }}" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input required type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input required type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input required type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea required class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->


@endsection