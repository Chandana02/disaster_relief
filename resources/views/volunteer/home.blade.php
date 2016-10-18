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
  <li><a href="#!">Settings</a></li>
  <li class="divider"></li>
  <li><a href="../logout">Logout</a></li>
</ul>

@endsection

@section('content')

<div class="container">
<div class="row">
	<form class="col s12 push-s1" id="login" method="POST" action="{{action('VolunteerController@updateRequirements')}}">
	{{csrf_field()}}
	  <div class="row">
	    <div class="input-field col s6">
	      <input name="item" type="text" class="validate" required>
	      <label for="item">Item</label>
	    </div>
	    <div class="input-field col s6">
	      <input name="quantity" type="number" class="validate" required>
	      <label for="quantity">Quantity</label>
	    </div>
	  </div>
	    <button class="btn waves-effect waves-light" type="submit" name="action"><i class="mdi-content-add"></i>
	    </button>
	    <button class="btn waves-effect waves-light" type="button" name="button" id="button"><i class="mdi-notification-sync"></i>
	    </button>
	</form>
</div>




<div class="row">
<div class="col s12 push-s1">
      <table>
        <thead>
          <tr>
              <th data-field="name">Item Required</th>
              <th data-field="quantity">Quantity</th>


          </tr>
        </thead>

        <tbody>
        @for($i = 0; $i < sizeof($requirements); $i++)
          <tr>
            <td>{{$requirements[$i]['requirement']}}</td>
            <td>{{$requirements[$i]['quantity']}}</td>
          </tr>
        @endfor
        </tbody>
      </table>
</div>
</div>
</div>

@endsection

