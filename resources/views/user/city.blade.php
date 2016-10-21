@extends('app')

@section('content')

<div class="container">

<div class="row">
<div class="col s12 push-s1">
      <table>
        <thead>
          <tr>
              <th data-field="id">Area Name</th>
              <th data-field="name">Item Required</th>
              <th data-field="quantity">Quantity</th>
              <th data-field="name">Volunteer Name</th>
              <th data-field="contact">Contact</th>


          </tr>
        </thead>

        <tbody>
        @for($i = 0; $i < sizeof($data); $i++)
          <tr>
            <td>{{$data[$i]['areaName']}}</td>
            <td>{{$data[$i]['requirements']}}</td>
            <td>{{$data[$i]['quantity']}}</td>
            <td>{{$data[$i]['name']}}</td>
            <td>{{$data[$i]['contact']}}</td>
          </tr>
        @endfor
        </tbody>
      </table>
</div>
</div>
</div>

@endsection

