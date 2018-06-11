@extends('templates.admins.master')


@section('content')
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      {{--  <div class="x_title">  --}}
        <h2>{{$scholarships->name}}</h2>
        <div class="clearfix"></div>
        <small>Posted by Admin on {{$scholarships->getDate()}}</small>
      {{--  </div>  --}}
      <br><br>

      <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <img src="{{$scholarships->getImage()}}" alt="" style="width:200px;height:250px;">    
        </div>
    </div>

    <br><br>

      <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Deskripsi</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Komentar</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

              <!-- start Deskripsi -->

           
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
              
              <!-- end recent activity -->

            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

              <!-- start user projects -->
              
              <!-- end user projects -->

            </div>
            
          </div>
        </div>

      

      
      </div>
    </div>
  </div>

 



@endsection