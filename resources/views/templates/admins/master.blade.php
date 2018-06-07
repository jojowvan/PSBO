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
                <img src="{{ asset('assets/img/admin.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include('templates.adminPartials.sidebar')

          </div>
        </div>

            <!-- top navigation -->
            @include('templates.adminPartials.nav')

            <div class="right_col" role="main">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>@yield('title')</h3>
                </div>
                </div>
                @yield('content')
              </div>
            </div>

          @include('templates.adminPartials.footer')
        </div>
      </div>
        @include('templates.adminPartials.script')
        @yield('script')
  </body>
</html>
