<!DOCTYPE html>
<html>
    <head>
        <title>Disaster Relief</title>
        <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
          <script src="{{URL::asset('assets/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>

          <nav class="teal lighten-2">
          <ul id="slide-out" class="side-nav fixed teal lighten-2">
          <li><a href="volunteer/volunteer_login.php" class="white-text"><i class="mdi-navigation-menu"></i>  </a></li>
          <li><a class="white-text" href="#!"><i class="small mdi-content-report"></i>  Warnings</a></li>
          <li><a class="white-text" href="../weather.php"><i class="small mdi-content-sort"></i>  News</a></li>
          <li><a class="white-text" href="#!"><i class="small mdi-communication-forum"></i>  Discussions</a></li>
          <li><a class="white-text" href="#!"><i class="small mdi-communication-invert-colors-on"></i>  Stay Safe</a></li>
          <li><a class="white-text" href="#!"><i class="small mdi-action-settings-remote"></i>  HospiConnect</a></li>
          </ul>
        @yield('dropdown')
        <div style="position:absolute;left:400px;top:-10px;"> <h3> Relief Management System </h3> </div>

        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
        </nav>
    </head>
    <body>
        @yield('content')
    </body>
   
</html>
