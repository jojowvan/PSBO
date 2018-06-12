@extends('templates.admins.master')


@section('content')

    
   

  
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Profile</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                  <div id="crop-avatar">
                    <!-- Current avatar -->
                    <img class="img-responsive avatar-view" src="/storage/{{Auth::user()->avatar}}" alt="Avatar" title="Change the avatar" height="10">
                  </div>
                </div>
                <h3>{{Auth::user()->name}}</h3>

                <ul class="list-unstyled user_data">
                  <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                  </li>

                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                  </li>

                  <li class="m-top-xs">
                    <i class="fa fa-external-link user-profile-icon"></i>
                    <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                  </li>
                </ul>

                <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                <br />


              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">

                <!-- start of user-activity-graph -->
               
                <!-- end of user-activity-graph -->

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Edit Profile</a>
                    </li>
                    <li role="presentation" class="active"><a href="#tab_content2" id="password-tab" role="tab" data-toggle="tab" aria-expanded="true">Change Password</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                      <!-- start Edit Profile -->
                      
                      <!-- end Edit Profile -->

                    </div>
                  </div>
                  <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="password-tab">
  
                        <!-- start Edit Profile -->
                        
                        <!-- end Edit Profile -->
  
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


 



@endsection