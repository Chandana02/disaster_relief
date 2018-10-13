@extends('app')

@section('content')

<div class="container">

  <div class="row">
    <form class="col s12 push-s4" action="{{ action('AdminController@returnVolunteers') }}" method="post">
     {{csrf_field()}}
    <br>
    <p> {{ session('message') }} </p>
    <h4>Enter City!</h4>
    <br>
      <div class="row">
        <div class="input-field col s6">
          <input name="city" type="text" class="validate" required>
          <label for="city">City</label>
        </div>
      </div>
 
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
    </form>
  </div>
</div>

<br>

@endsection
