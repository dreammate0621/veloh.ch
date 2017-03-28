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
        <div class="menu-top-section">
          <a class="menu-item" href="/veloboerse-datum">alle Velobörsen</a>
          <a class="menu-item" href="/veloboerse-zuerich">Velobörse Zürich</a>
          <a class="menu-item" href="/veloboerse-basel">Velobörse Basel</a>
          <a class="menu-item" href="/veloboerse-luzern">Velobörse Luzern</a>
          <a class="menu-item" href="/veloboerse-bern">Velobörse Bern</a>
          <a class="menu-item" href="/veloboerse-olten">Velobörse Olten</a>
          <a class="menu-item" href="/veloboerse-biel">Velobörse Biel</a>
          <a class="menu-item" href="/veloboerse-winterthur">Velobörse Winterthur</a>
        </div>
        <div class="menu-bottom-section">
          <a class="menu-item" href="/">home</a>
          <a class="menu-item" href="/veloboerse-datum">Velobörsen Daten</a>
          <a class="menu-item" href="/veloboerse-eintragen">Börse eintragen</a>
          <a class="menu-item" href="/fahrrad-kaufen-verkaufen">Velo verkaufen</a>
          <a class="menu-item" href="/fahrrad-kaufen-verkaufen">Velo Kauftipps</a>
          <a class="menu-item" href="/velo-recycling">Velo schenken</a>
          <a class="menu-item" href="/about-veloboersen-ch">About</a>
          <a class="menu-item" href="http://www.velomaerkte.ch">% Velo Outlet %</a>
        </div>
      </div>
      <!-- Main Content -->
      @yield('main_content')
    </div>

    <!-- Include Main JS Files -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script> -->

    <!-- Include Library Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    
    <!-- Include Angular MVC Strucuture -->
    <script src="{{asset('assets/jsmvc/app.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/jsmvc/controllers/sliderController.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/jsmvc/controllers/pageController.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/jsmvc/directives/slick.js')}}" type="text/javascript"></script>

    <!-- Include Additional JS Files -->
    @yield('additional_scripts')
  </body>
</html>