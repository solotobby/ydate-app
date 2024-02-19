
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
              <!-- Logo -->
              <a class="btn btn-alt-secondary me-2" href="index.html">
                <i class="fa fa-campground"></i>
              </a>
              <!-- END Logo -->
  
              <!-- Open Search Section -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i>
              </button>
              <!-- END Open Search Section -->
  
              <!-- Search form in larger screens -->
              <form class="d-none d-lg-inline-block" action="be_pages_generic_search.html" method="POST">
                <input type="text" class="form-control form-control-sm border-0 rounded-pill px-3" placeholder="Search.." id="page-header-search-input-full" name="page-header-search-input-full">
              </form>
              <!-- END Search form in larger screens -->
            </div>
            <!-- END Left Section -->
  
            <!-- Right Section -->
            <div>
              
  
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle opacity-50 me-1"></i>
                    <span class="d-none d-sm-inline-block">User</span>
                    <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                      User Options
                    </div>
                    <div class="p-2">
                      <a class="dropdown-item" href="be_pages_generic_profile.html">
                        <i class="far fa-fw fa-user me-1"></i> Profile
                      </a>
                      <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                        <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                      </a>
                      <a class="dropdown-item" href="be_pages_generic_invoice.html">
                        <i class="far fa-fw fa-file-alt me-1"></i> Invoices
                      </a>
                      <div role="separator" class="dropdown-divider"></div>
    
                      <!-- Toggle Side Overlay -->
                      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                      <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="far fa-fw fa-building me-1"></i> Settings
                      </a>
                      <!-- END Side Overlay -->
    
                      <div role="separator" class="dropdown-divider"></div>
                      {{-- <a class="dropdown-item" href="op_auth_signin.html">
                        <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                      </a> --}}
  
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i>  {{ __('Logout') }}
                      </a>
  
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
  
                    </div>
                  </div>
                </div>
                <!-- END User Dropdown -->
    
  
              <!-- Notifications Dropdown -->
              <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0" aria-labelledby="page-header-notifications-dropdown">
                  <div class="bg-primary-darker rounded-top fw-semibold text-white text-center p-3">
                    Notifications
                  </div>
                  <ul class="nav-items my-2">
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-fw fa-user-plus text-primary"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">John Doe send you a friend request!</div>
                          <div class="text-muted">6 min ago</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-fw fa-user-plus text-primary"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">Elisa Doe send you a friend request!</div>
                          <div class="text-muted">10 min ago</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-check-circle text-success"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">Backup completed successfully!</div>
                          <div class="text-muted">2 hours ago</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-fw fa-user-plus text-primary"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">George Smith send you a friend request!</div>
                          <div class="text-muted">3 hours ago</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-exclamation-circle text-warning"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">You are running out of space. Please consider upgrading your plan.</div>
                          <div class="text-muted">1 day ago</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                          <i class="fa fa-envelope-open text-info"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                          <div class="fw-semibold">You have a new message!</div>
                          <div class="text-muted">2 days ago</div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="p-2 border-top">
                    <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                      <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                    </a>
                  </div>
                </div>
              </div>
              <!-- END Notifications Dropdown -->
  
              <!-- Toggle Side Overlay -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              {{-- <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-fw fa-comment-alt"></i>
              </button> --}}
              <!-- END Toggle Side Overlay -->
  
              <!-- Toggle Sidebar -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
              </button>
              <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
          </div>
          <!-- END Header Content -->
  
          <!-- Header Search -->
          <div id="page-header-search" class="overlay-header bg-primary">
            <div class="content-header">
              <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                  <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-fw fa-times-circle"></i>
                  </button>
                  <input type="text" class="form-control border-0" placeholder="Search your network.." id="page-header-search-input" name="page-header-search-input">
                </div>
              </form>
            </div>
          </div>
          <!-- END Header Search -->
  
          <!-- Header Loader -->
          <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
          <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
          <!-- END Head -->