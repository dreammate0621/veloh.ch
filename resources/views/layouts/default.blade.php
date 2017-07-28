<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Velobörse Basel Zürich Bern Luzern Zug Winterthur Olten Aarau: Bikes gebraucht günstig kaufen und Fahrrad Occasion verkaufen auf den Velobörsen Schweiz</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

    <!-- Additional Styles -->
    @yield('additional_styles')

    <!-- Custom Style -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">

  </head>
  <body ng-app="veloApp">
    <div class="bg-overlay">
    </div>

    <!-- Main Content -->
    @yield('banner_content')

    <div class="main-wrapper">
      <div class="main-menu">
        <div class="toggle-menu"></div>
        <ul class="menu-container">
          <li class="menu-item menu-sub-container">
            <a class="menu-item-link mobile-visible link-green">Velobörse</a>
            <ul class="sub-menu">
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-datum">Alle<span class="mobile-hidden">&nbsp;Velobörsen</span></a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-zuerich"><span class="mobile-hidden">Velobörse&nbsp;</span>Zürich</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-basel"><span class="mobile-hidden">Velobörse&nbsp;</span>Basel</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue link-blue" href="/veloboerse-luzern"><span class="mobile-hidden">Velobörse&nbsp;</span>Luzern</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-bern"><span class="mobile-hidden">Velobörse&nbsp;</span>Bern</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-olten"><span class="mobile-hidden">Velobörse&nbsp;</span>Olten</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-biel"><span class="mobile-hidden">Velobörse&nbsp;</span>Biel</a></li>
              <li class="menu-item"><a class="menu-item-link link-blue" href="/veloboerse-winterthur"><span class="mobile-hidden">Velobörse </span>Winterthur</a></li>
            </ul>
          </li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/">Home</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/veloboerse-datum">Velobörsen Daten</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/veloboerse-eintragen">Börse eintragen</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/fahrrad-kaufen-verkaufen">Velo verkaufen</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/fahrrad-kaufen-verkaufen">Velo Kauftipps</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/velo-recycling">Velo schenken</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="/about-veloboersen-ch">About</a></li>
          <li class="menu-item"><a class="menu-item-link link-green" href="http://www.velomaerkte.ch">% Velo Outlet %</a></li>
        </ul>

        <!-- <ul class="menu-top-section">
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-datum">alle Velobörsen</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-zuerich">Velobörse Zürich</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-basel">Velobörse Basel</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-luzern">Velobörse Luzern</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-bern">Velobörse Bern</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-olten">Velobörse Olten</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-biel">Velobörse Biel</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-winterthur">Velobörse Winterthur</a></li>
        </ul>
        <ul class="menu-bottom-section">
          <li class="menu-item"><a class="menu-item-link" href="/">home</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-datum">Velobörsen Daten</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/veloboerse-eintragen">Börse eintragen</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/fahrrad-kaufen-verkaufen">Velo verkaufen</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/fahrrad-kaufen-verkaufen">Velo Kauftipps</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/velo-recycling">Velo schenken</a></li>
          <li class="menu-item"><a class="menu-item-link" href="/about-veloboersen-ch">About</a></li>
          <li class="menu-item"><a class="menu-item-link" href="http://www.velomaerkte.ch">% Velo Outlet %</a></li>
        </ul> -->
      </div>
      <!-- Main Content -->
      @yield('main_content')
    </div>

    <!-- Include Main JS Files -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- Include Library Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-touch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-slider/6.1.1/rzslider.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.min.js"></script>



    <!-- Include Angular MVC Strucuture -->
    <script src="{{asset('assets/jsmvc/app.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/jsmvc/controllers/sliderController.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/controllers/pageController.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/jsmvc/directives/slick.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/directives/select2.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/directives/range-picker.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/directives/angular-slider.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/directives/datetimepicker.js')}}" type="text/javascript"></script>

    <!-- Include Additional JS Files -->
    @yield('additional_scripts')

    <script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>
  </body>
</html>