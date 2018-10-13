@extends('app')

@section('dropdown')

<ul class="right">
  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
  <i class="medium mdi-action-account-circle"></i>
  </a>
  </li>
</ul>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="../../admin/home">Applicants</a></li>
  <li><a href="#!">Settings</a></li>
  <li class="divider"></li>
  <li><a href="../../admin/logout">Logout</a></li>
</ul>

@endsection

@section('content')
<script src="{{URL::asset('assets/js/adminView.js')}}"></script>

<div class="row">
<div class="col s8 push-s3">
      <table>
        <thead>
          <tr>
              <th data-field="username">Username</th>
              <th data-field="area">Area</th>
          </tr>
        </thead>

        <tbody>
        @for($i = 0; $i < sizeof($volunteers); $i++)
          <tr>
            <td>{{$volunteers[$i]->username}}</td>
            <td>{{$volunteers[$i]->areaCode}}</td>
            <td><button class="modify" volId="{{$volunteers[$i]->id}}">Modify Area</button></td>
          </tr>
        @endfor
        </tbody>
      </table>
</div>
</div>
</div>

@endsection

