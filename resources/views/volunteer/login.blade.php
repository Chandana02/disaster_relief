@extends('app')

@section('content')

<div class="container">

  <div class="row">
    <form class="col s12 push-s4" action="{{ action('VolunteerController@login') }}" method="post">
     {{csrf_field()}}
    <br>
    <p> {{ session('message') }} </p>
    <h4>Sign In!</h4>
    <br>
      <div class="row">
        <div class="input-field col s6">
          <input name="username" type="text" class="validate" required>
          <label for="username">User Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
    </form>
  </div>
</div>

<br>

@endsection
