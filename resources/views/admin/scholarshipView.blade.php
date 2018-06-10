@extends('templates.admins.master')


@section('content')
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{$scholarships->name}}</h2>
        <div class="clearfix"></div>
        <small>Posted by Admin on {{$scholarships->getDate()}}</small>
      </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <img src="{{$scholarships->getImage()}}" alt="" style="width:200px;height:250px;">    
            </div>
        </div>
        <br><br>
        <div class="col-md-9 col-md-offset-1">
          <b>Syarat:</b>
          <ul>
            <li>Program     : {{$requirements->program}} </li>
            <li>Fakultas    : {{$requirements->faculty}} </li>
            <li>Semester    : {{$requirements->semester}} </li>
            <li>IPK minimal : {{$requirements->gda}} </li>
          </ul>
        </div>
        <div class="col-md-9 col-md-offset-1">
          <br><br>
          {!! $scholarships->description !!}
        </div>

      
      </div>
    </div>
  </div>

 



@endsection