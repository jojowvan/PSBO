<!DOCTYPE html>
<html lang="en">

@include('templates.adminPartials.head')
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Info Beasiswa </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include('templates.adminPartials.sidebar')

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

            <!-- top navigation -->
            @include('templates.adminPartials.nav')

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                  <div class="row tile_count">

                    @yield('content')
                        
                </div>
                    <!-- /top tiles -->
            </div>
            <!-- /page content -->

          @include('templates.adminPartials.footer')

        @include('templates.adminPartials.script')

  </body>
</html>
