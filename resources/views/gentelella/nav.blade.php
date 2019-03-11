<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-cog"></i> <span>Makeit admin</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
                @auth
                <img src="{{ (Auth::user()->profile_image) ? Auth::user()->profile_image : '/images/user.png'}}" alt="..." class="img-circle profile_img">
                @else
                <img src="//colorlib.com/polygon/gentelella/images/img.jpg" alt="..." class="img-circle profile_img">
                @endauth
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>
                  @auth
                    {{ Auth::user()->name }}
                  @else
                    John Doe
                  @endauth
              </h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-users"></i> 지구회원관리</a></li>
                <li><a href="{{ route('admin.portfolio.index') }}"><i class="fa fa-calendar"></i> 포트폴리오관리</a></li>
                <li><a  href="{{route('admin.notice.index')}}"><i class="fa fa-bullhorn"></i> Q&A 및 공지사항</a></li>
                <li><a href="{{ route('admin.contact') }}"><i class="fa fa-file-audio-o"></i>Contact us</a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
