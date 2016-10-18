@extends('base')

@section('content')

<div class="container">
<br>
<h4>Sign Up to Volunteer!</h4>
<br>
<div class="row">
  <form class="col s12" action="{{ action('ApplicantsController@applyView') }}">
    <div class="row">
      <div class="input-field col s6">
        <input id="name" type="text" class="validate">
        <label for="name">Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="state" type="text" class="validate">
        <label for="state">State</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="city" type="text" class="validate">
        <label for="city">City</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="age" type="text" class="validate">
        <label for="age">Age</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="gender" type="text" class="validate">
        <label for="gender">Gender</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="occupation" type="text" class="validate">
        <label for="occupation">Occupation</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="reason" type="text" class="validate">
        <label for="reason">Why do you want to volunteer?</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="contact" type="text" class="validate">
        <label for="contact">Contact number</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
  </form>
</div>
</div>

@endsection
