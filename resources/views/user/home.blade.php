@extends('app')

@section('content')
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{URL::asset('assets/js/userView.js')}}"></script>
<div class="container">

	<div class="row">
	 <br><br>
	   <div id="googleMap" style="width:500px;height:500px;display: inline-block;left:80px" ></div>
	    <div id="info" style="display: inline-block;position:absolute;width:400px;right:10px;">
	        <h4 style="color:#4db6ac;text-shadow: 2px 2px black;"> Relief Management
	        </h4>
	        <h6 id="he">Click on the STATE for which you would like to view relief information about. </h6>
	        <p> Our Aim is to spread the relief supplies as uniformly as possible to <br>
	        <ul> <li> 1. Ensure that all those who need the most have been provided with </li>
	        <li> 2. Prevent wastage of supplies </li>
	        </ul>
	        Help those in need! :) <br>
	        Help in the best way possible :D <br>
	        Spread the love ^_^ <br>
	      </p>
	    </div>
	</div>
	</div>

@endsection
