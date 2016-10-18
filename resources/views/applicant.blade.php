@extends('app')

@section('content')

<div class="container">

<div class="row">
  <form class="col s12 push-s4" action="{{ action('ApplicantsController@applyView') }}" method="post">
   {{csrf_field()}}
   <br>
   
<h4>Sign Up to Volunteer!</h4>
<br>
    <div class="row">
      <div class="input-field col s6">
        <input id="name" name="name" type="text" class="validate">
        <label for="name">Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="state" name="state" type="text" class="validate">
        <label for="state">State</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="city" name="city" type="text" class="validate">
        <label for="city">City</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="age" name="age" type="text" class="validate">
        <label for="age">Age</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="gender" name="gender" type="text" class="validate">
        <label for="gender">Gender</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="occupation" name="occupation" type="text" class="validate">
        <label for="occupation">Occupation</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="reason" name="reason" type="text" class="validate">
        <label for="reason">Why do you want to volunteer?</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="contact" name="contact" type="text" class="validate">
        <label for="contact">Contact number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="email" type="email" name="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
  </form>
</div>
</div>

@endsection
