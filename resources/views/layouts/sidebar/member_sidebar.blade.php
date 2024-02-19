
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="db_social.html">
                  <i class="nav-main-link-icon fa fa-user-circle"></i>
                  <span class="nav-main-link-name">My Profile</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-bell"></i>
                  <span class="nav-main-link-name">Notifications</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-info">6</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-envelope-open"></i>
                  <span class="nav-main-link-name">Messages</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-info">1</span>
                </a>
              </li>
              <li class="nav-main-heading">Home</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-newspaper"></i>
                  <span class="nav-main-link-name">News Feed</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-gem"></i>
                  <span class="nav-main-link-name">Marketplace</span>
                </a>
              </li>
              <li class="nav-main-heading">Explore</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-calendar-alt"></i>
                  <span class="nav-main-link-name">Events</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-users"></i>
                  <span class="nav-main-link-name">Groups</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-file-alt"></i>
                  <span class="nav-main-link-name">Pages</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-danger">32</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-clock"></i>
                  <span class="nav-main-link-name">On This Day</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-newspaper"></i>
                  <span class="nav-main-link-name">Pages Feed</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-images"></i>
                  <span class="nav-main-link-name">Photos</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-warning">14</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-gamepad"></i>
                  <span class="nav-main-link-name">Games</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-success">25</span>
                </a>
              </li>
              <li class="nav-main-heading">Dashboards</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>

                {{-- <a class="nav-main-link" href="be_pages_dashboard_all.html">
                  <i class="nav-main-link-icon fa fa-arrow-left"></i>
                  <span class="nav-main-link-name">Go Back</span>
                </a> --}}
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->