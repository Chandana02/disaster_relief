<!DOCTYPE html>
<html>
    <head>
        <title>Disaster Relief</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
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
        <ul class="right">
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
          <i class="medium mdi-action-account-circle"></i>
          </a>
          </li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Profile</a></li>
          <li><a href="#!">Settings</a></li>
          <li class="divider"></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
        <div style="position:absolute;left:400px;top:-10px;"> <h3> Relief Management System </h3> </div>

        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
        </nav>
    </head>
    <body>
        @yield('content')
    </body>
    <footer class="page-footer teal lighten-2" style="height:150px;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12" style="position:absolute;height:100px;left:270px;">
          <h5 class="white-text" > DONATE NOW! </h5>
          Donate money to those who have lost everything <br>
          Spread some Love!
        </div>
        <div class="col l4 offset-l2 s12" style="position:absolute;height:100px;right:100px;">
          <h5 class="white-text"> Want to get in touch?</h5>
          Coolz. Ours be a coolio NGO. <br>
          <i class="mdi-communication-quick-contacts-mail"></i> at 902739817239879827 <br>
          Find us at www.facebook.com/blah
        </div>
      </div>
    </div>
  </footer>
</html>
