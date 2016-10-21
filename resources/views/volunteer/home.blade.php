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
<script src="{{URL::asset('assets/js/volunteerView.js')}}"></script>
<div class="container">
<div class="row">
	<div class="col s12 push-s1">
	  <div class="row">
	    <div class="input-field col s6">
	      <input name="item" id="item" type="text" class="validate" required>
	      <label for="item">Item</label>
	    </div>
	    <div class="input-field col s6">
	      <input name="quantity" id="quantity" type="number" class="validate" required>
	      <label for="quantity">Quantity</label>
	    </div>
	  </div>
	    <button class="btn waves-effect waves-light" type="submit" name="action" id="add"><i class="mdi-content-add"></i>
	    </button>
	    <button class="btn waves-effect waves-light" type="button" name="button" id="refresh"><i class="mdi-notification-sync"></i>
	    </button>
	</div>
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
            <td><button class="btn waves-effect waves-light delete" req="{{$requirements[$i]['requirement']}}">Delete</button></td>
            <td><button class="btn waves-effect waves-light modify" req="{{$requirements[$i]['requirement']}}">Modify</button></td>
          </tr>
        @endfor
        </tbody>
      </table>
</div>
</div>
</div>

@endsection

