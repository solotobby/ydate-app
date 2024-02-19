<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/highlightjs/styles/atom-one-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/magnific-popup/magnific-popup.css')}}">

    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/xmodern.min.css')}}">
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-primary">
          <div class="content-header">
            <div class="fs-lg fw-light text-white">
              <i class="fa fa-users me-1"></i> People
            </div>

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <form class="push" action="db_social.html" method="POST" onsubmit="return false;">
            <div class="input-group">
              <input class="form-control" placeholder="Search People..">
              <span class="input-group-text">
                <i class="fa fa-fw fa-search"></i>
              </span>
            </div>
          </form>
          <div class="block pull-x">
            <!-- Online -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Online</span>
            </div>
            <div class="block-content">
              <ul class="nav-items">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Barbara Scott</div>
                      <div class="fs-sm text-muted">Photographer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Jack Greene</div>
                      <div class="fw-normal fs-sm text-muted">Web Designer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Andrea Gardner</div>
                      <div class="fw-normal fs-sm text-muted">Web Developer</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Online -->

            <!-- Busy -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Busy</span>
            </div>
            <div class="block-content">
              <ul class="nav-items">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Betty Kelley</div>
                      <div class="fw-normal fs-sm text-muted">UI Designer</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- END Busy -->

            <!-- Away -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Away</span>
            </div>
            <div class="block-content">
              <ul class="nav-items">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Ralph Murray</div>
                      <div class="fw-normal fs-sm text-muted">Copywriter</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Amanda Powell</div>
                      <div class="fw-normal fs-sm text-muted">Writer</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- END Away -->

            <!-- Offline -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Offline</span>
            </div>
            <div class="block-content">
              <ul class="nav-items">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Brian Cruz</div>
                      <div class="fw-normal fs-sm text-muted">Teacher</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Danielle Jones</div>
                      <div class="fw-normal fs-sm text-muted">Photographer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Barbara Scott</div>
                      <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold">Jose Parker</div>
                      <div class="fw-normal fs-sm text-muted">UX Specialist</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- END Offline -->

            <!-- Add People -->
            <div class="block-content justify-content-center border-top">
              <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Add People
              </a>
            </div>
            <!-- END Add People -->
          </div>
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
          <div class="content-header bg-primary">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{url('home')}}">
              Y<span class="opacity-75">D</span>
            </a>
            <!-- END Logo -->
          </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->

        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
          <div class="content-header justify-content-lg-center bg-primary">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{ url('home') }}">
              Y<span class="opacity-75">Date</span>
              {{-- <span class="fw-normal">Social</span> --}}
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-lg-none">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- User Info -->
          <div class="smini-hidden">
            <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
              <a class="img-link d-inline-block" href="javascript:void(0)">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar8.jpg')}}" alt="">
              </a>
              <div class="ms-3">
                <a class="fw-semibold text-dual" href="javascript:void(0)">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</a>
                <div class="fs-sm text-dual">{{auth()->user()->username}}</div>
              </div>
            </div>
          </div>
          <!-- END User Info -->

          @include('layouts.sidebar.member_sidebar')
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div>
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="badge bg-black-50 rounded-pill">6</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
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
                        <i class="fa fa-fw fa-check-circle text-success"></i>
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
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div>
            <!-- Open Search Section -->
            <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-fw fa-comment-alt"></i>
            </button> --}}
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-primary">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <input type="text" class="form-control border-0" placeholder="Search your network.." id="page-header-search-input" name="page-header-search-input">
                <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
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
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url('{{asset('assets/media/photos/photo18@2x.jpg')}}');">
          <div class="bg-black-50">
            <div class="content content-full content-top">
              <div class="py-4 text-center">
                {{-- <a class="img-link" href="javascript:void(0)"> --}}
                  <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar8.jpg')}}" alt="">
                {{-- </a> --}}
                <h1 class="h2 fw-bold my-2 text-white">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h1>
                <h2 class="h4 fw-normal text-white-75 mb-0">
                  <a class="text-primary-lighter" href="javascript:void(0)">{{ auth()->user()->username }}</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        @yield('content')

      </main>
      <!-- END Main Container -->

      <!-- Footer -->
     @include('layouts.footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>

    <!-- jQuery (required for Magnific Popup Plugin) -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
    <script>Dashmix.helpersOnLoad(['js-highlightjs', 'jq-magnific-popup']);</script>
  </body>
</html>
