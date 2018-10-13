
@extends('app')

@section('dropdown')

<ul class="right">
  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
  <i class="medium mdi-action-account-circle"></i>
  </a>
  </li>
</ul>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li><a href="../admin/disaster">Disaster</a></li>
  <li class="divider"></li>
  <li><a href="../../admin/logout">Logout</a></li>
</ul>

@endsection

@section('content')
<script src="{{URL::asset('assets/js/adminView.js')}}"></script>
<div class="container">

<div class="row">
<div class="col s12 push-s1">
      <table>
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Name</th>
              <th data-field="state">State</th>
              <th data-field="city">City</th>
              <th data-field="age">Age</th>
              <th data-field="gender">Gender</th>
              <th data-field="occupation">Occupation</th>
              <th data-field="reason">Reason</th>





          </tr>
        </thead>

        <tbody>
        @for($i = 0; $i < sizeof($applicants); $i++)
          <tr>
            <td>{{$applicants[$i]['id']}}</td>
            <td>{{$applicants[$i]['name']}}</td>
            <td>{{$applicants[$i]['state']}}</td>
            <td>{{$applicants[$i]['city']}}</td>
            <td>{{$applicants[$i]['age']}}</td>
            <td>{{$applicants[$i]['gender']}}</td>
            <td>{{$applicants[$i]['occupation']}}</td>
            <td>{{$applicants[$i]['reason']}}</td>
            <td>
            <button class="btn waves-effect waves-light select" type="submit" appId="{{$applicants[$i]['id']}}" name="action"><i class="mdi-content-add"></i>
	    </button>
	    </td>
            <td><button class="btn waves-effect waves-light drop" type="button" appId="{{$applicants[$i]['id']}}" name="button" id="button"><i class="mdi-notification-sync"></i></td>

            
          </tr>
        @endfor
        </tbody>
      </table>
</div>
</div>
</div>

@endsection