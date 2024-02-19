@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

@endsection
@section('content')

<!-- Page Content -->
<div class="content">
    <div class="row">
      <div class="col-md-8">
        <!-- Post Update -->
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <form action="db_social.html" method="POST" onsubmit="return false;">
              <div class="input-group">
                <input type="text" class="form-control form-control-alt" placeholder="What’s happening?">
                <button type="submit" class="btn btn-primary border-0">
                  <i class="fa fa-pencil-alt opacity-50 me-1"></i> Post
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Post Update -->

        <!-- Timeline -->
        <!-- Update #1 -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <div>
              <a class="img-link" href="javascript:void(0)">
                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar6.jpg" alt="">
              </a>
              <a class="fw-semibold" href="javascript:void(0)">Betty Kelley</a>
              <span class="fs-sm text-muted">3 hrs ago</span>
            </div>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <p>
              How to get started your HTML page:
            </p>
            <pre><code class="html">&lt;!doctype html&gt;
                  &lt;html&gt;
                      &lt;head&gt;
                          &lt;meta charset=&quot;utf-8&quot;&gt;

                          &lt;title&gt;Title&lt;/title&gt;
                      &lt;/head&gt;
                      &lt;body&gt;
                          &lt;!-- Your content --&gt;
                      &lt;/body&gt;
                  &lt;/html&gt;</code></pre>
            <hr>
            <ul class="nav nav-pills fs-sm push">
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                </a>
              </li>
            </ul>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <p class="fs-sm">
              <i class="fa fa-thumbs-up text-info"></i>
              <i class="fa fa-heart text-danger"></i>
              <i class="far fa-smile text-warning me-1"></i>
              <a class="fw-semibold" href="javascript:void(0)">Scott Young</a>,
              <a class="fw-semibold" href="javascript:void(0)">Danielle Jones</a>,
              <a class="fw-semibold" href="javascript:void(0)">and 150 others</a>
            </p>
            <form action="db_social.html" method="POST" onsubmit="return false;">
              <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
            </form>
            <div class="pt-3 fs-sm">
              <div class="d-flex">
                <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                  <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar6.jpg" alt="">
                </a>
                <div class="flex-grow-1">
                  <p class="mb-1">
                    <a class="fw-semibold" href="javascript:void(0)">Amanda Powell</a>
                    Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                  </p>
                  <p>
                    <a href="javascript:void(0)" class="me-1">Like</a>
                    <a href="javascript:void(0)">Comment</a>
                  </p>
                  <div class="d-flex">
                    <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                      <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar11.jpg" alt="">
                    </a>
                    <div class="flex-grow-1">
                      <p class="mb-1">
                        <a class="fw-semibold" href="javascript:void(0)">Justin Hunt</a>
                        Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </p>
                      <p>
                        <a href="javascript:void(0)" class="me-1">Like</a>
                        <a href="javascript:void(0)">Comment</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Update #1 -->

        <!-- Update #2 -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <div>
              <a class="img-link" href="javascript:void(0)">
                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar11.jpg" alt="">
              </a>
              <a class="fw-semibold" href="javascript:void(0)">Henry Harrison</a>
              <span class="fs-sm text-muted">5 hrs ago</span>
            </div>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
            <hr>
            <ul class="nav nav-pills fs-sm push">
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                </a>
              </li>
            </ul>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <p class="fs-sm">
              <i class="fa fa-heart text-danger"></i>
              <a class="fw-semibold" href="javascript:void(0)">Jack Estrada</a>,
              <a class="fw-semibold" href="javascript:void(0)">Lisa Jenkins</a>,
              <a class="fw-semibold" href="javascript:void(0)">and 36 others</a>
            </p>
            <form action="db_social.html" method="POST" onsubmit="return false;">
              <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
            </form>
          </div>
        </div>
        <!-- END Update #2 -->

        <!-- Update #3 -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <div>
              <a class="img-link" href="javascript:void(0)">
                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar5.jpg" alt="">
              </a>
              <a class="fw-semibold" href="javascript:void(0)">Melissa Rice</a>
              <span class="fs-sm text-muted">8 hrs ago</span>
            </div>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <p>
              Our city escape continues..
            </p>
            <div class="row g-sm js-gallery img-fluid-100">
              <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
              <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
              <div class="col-4">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo11@2x.jpg">
                  <img class="img-fluid" src="assets/media/photos/photo11.jpg" alt="">
                </a>
              </div>
              <div class="col-4">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo12@2x.jpg">
                  <img class="img-fluid" src="assets/media/photos/photo12.jpg" alt="">
                </a>
              </div>
              <div class="col-4">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo13@2x.jpg">
                  <img class="img-fluid" src="assets/media/photos/photo13.jpg" alt="">
                </a>
              </div>
            </div>
            <hr>
            <ul class="nav nav-pills fs-sm push">
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                </a>
              </li>
            </ul>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <p class="fs-sm">
              <i class="fa fa-thumbs-up text-info"></i>
              <i class="fa fa-heart text-danger"></i>
              <i class="far fa-smile text-warning me-1"></i>
              <a class="fw-semibold" href="javascript:void(0)">Sara Fields</a>,
              <a class="fw-semibold" href="javascript:void(0)">Wayne Garcia</a>,
              <a class="fw-semibold" href="javascript:void(0)">and 43 others</a>
            </p>
            <form action="db_social.html" method="POST" onsubmit="return false;">
              <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
            </form>
          </div>
        </div>
        <!-- END Update #3 -->

        <!-- Update #4 -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <div>
              <a class="img-link" href="javascript:void(0)">
                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar6.jpg" alt="">
              </a>
              <a class="fw-semibold" href="javascript:void(0)">Andrea Gardner</a>
              <span class="fs-sm text-muted">15 hrs ago</span>
            </div>
            <div class="block-options">
              <div class="dropdown">
                <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
            <hr>
            <ul class="nav nav-pills fs-sm push">
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                </a>
              </li>
            </ul>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <p class="fs-sm">
              <i class="fa fa-thumbs-up text-info"></i>
              <a class="fw-semibold" href="javascript:void(0)">Lori Grant</a>,
              <a class="fw-semibold" href="javascript:void(0)">Brian Cruz</a>,
              <a class="fw-semibold" href="javascript:void(0)">and 5 others</a>
            </p>
            <form action="db_social.html" method="POST" onsubmit="return false;">
              <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
            </form>
          </div>
        </div>
        <!-- END Update #4 -->
        <!-- END Timeline -->
      </div>
      <div class="col-md-4">
        <!-- Group Suggestions -->
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <div class="row g-sm mb-2">
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo12.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo13.jpg" alt="">
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a class="fw-semibold" href="javascript:void(0)">Travel Photos</a>
                <div class="fs-sm text-muted">65k Members</div>
              </div>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-plus-circle"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <div class="row g-sm mb-2">
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo23.jpg" alt="">
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a class="fw-semibold" href="javascript:void(0)">Coding Frenzy</a>
                <div class="fs-sm text-muted">109k Members</div>
              </div>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-plus-circle"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <div class="row g-sm mb-2">
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo9.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/media/photos/photo6.jpg" alt="">
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a class="fw-semibold" href="javascript:void(0)">Nature Lovers</a>
                <div class="fs-sm text-muted">32k Members</div>
              </div>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-plus-circle"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- END Group Suggestions -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
   
  
  
  @if(!hasUpdatedInfo())  
    <!-- Onboarding Modal -->
      <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" data-bs-backdrop="static"  aria-labelledby="modal-onboarding" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content rounded overflow-hidden bg-image bg-image-bottom border-0" style="background-image: url('{{asset('assets/media/photos/photo23.jpg')}}');">
            <div class="row">
              <div class="col-md-4">
                <div class="p-3 text-end text-md-start">
                  <a class="fw-semibold text-white" href="#" data-bs-dismiss="modal" aria-label="Close">
                    Skip Intro
                  </a>
                </div>
              </div>
              <div class="col-md-8">
                <div class="bg-body-extra-light shadow-lg">
                  <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                    <div class="p-5">
                      <i class="fa fa-award fa-3x text-muted my-4"></i>
                      <h3 class="fs-2 fw-light mb-2">Welcome to your app!</h3>
                      <p class="text-muted">
                        This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                      </p>
                      <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                        More Info <i class="fa fa-arrow-right ms-1"></i>
                      </button>
                    </div>
                    <div class="slick-slide p-5">
                      <h3 class="fs-2 fw-light mb-2">Invoices</h3>
                      <p class="text-muted">
                        They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                      </p>
                      <h3 class="fs-2 fw-light mb-2">Backup</h3>
                      <p class="text-muted">
                        Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                      </p>
                      <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                        Complete Profile <i class="fa fa-arrow-right ms-1"></i>
                      </button>
                    </div>
                    <div class="slick-slide p-5">
                      <i class="fa fa-user-check fa-3x text-muted my-4"></i>
                      <h3 class="fs-2 fw-light">Let us know your name</h3>
                      <form class="mb-3">
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-alt" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                        </div>
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-alt" id="onboard-last-name" name="onboard-last-name" placeholder="Enter your last name..">
                        </div>
                      </form>
                      <button type="button" class="btn btn-primary mb-4" data-bs-dismiss="modal" aria-label="Close">
                        Get Started <i class="fa fa-check opacity-50 ms-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END Onboarding Modal -->
  @endif


@endsection

@section('scripts')
 <!-- Page JS Plugins -->
 <script src="{{asset('assets/js/plugins/slick-carousel/slick.min.js')}}"></script>
<script src="{{asset('assets/js/pages/be_comp_onboarding.min.js')}}"></script>
@endsection