<!DOCTYPE html>
<html>
    <head>
        <title>Disaster Relief</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
        <script src="{{URL::asset('assets/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>

        <nav class="teal lighten-2">
            <div class="nav-wrapper">
                <a href="{{ action('ApplicantsController@applyView') }}" class="brand-logo">Disaster Relief</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ action('ApplicantsController@applyView') }}">Sign Up</a></li>
                <!-- <li></a href="badges.html">Components</a></li> -->
                <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
                </ul>
            </div>
        </nav>      
    </head>
    <body>
        @yield('content')
    </body>
</html>
