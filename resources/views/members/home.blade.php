@extends('layouts.master')
@section('title', 'YDate | Dashboard')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

    <style>
      .notification {
          position: fixed;
          top: 20px;
          right: 20px;
          background-color: brown;
          color: white;
          padding: 15px;
          border-radius: 10px;
          display: none;
      }
      
      .show {
          display: block;
      }
      </style>

@endsection

@section('content')

 <!-- Hero -->
 <div class="rounded border overflow-hidden push">
  <div class="bg-image pt-9" style="background-image: url('{{asset('assets/media/photos/photo19@2x.jpg')}}');"></div>
  <div class="px-4 py-3 bg-body-extra-light d-flex flex-column flex-md-row align-items-center">
    <a class="d-block img-link mt-n5" href="#">
      <img class="img-avatar img-avatar128 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar13.jpg')}}" alt="">
    </a>
    <div class="ms-3 flex-grow-1 text-center text-md-start my-3 my-md-0">
      <h1 class="fs-4 fw-bold mb-1">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h1>
      <h2 class="fs-sm fw-medium text-muted mb-0">
        <a href="javascript:void(0)" class="text-muted">4,5k Likes</a> &bull; <a href="javascript:void(0)" class="text-muted">100 Following</a>
      </h2>
    </div>
    <div class="space-x-1">
      <a href="" class="btn btn-sm btn-alt-secondary space-x-1">
        <i class="fa fa-pencil-alt opacity-50"></i>
        <span>Edit Profile</span>
      </a>
    </div>
  </div>
</div>
<!-- END Hero -->



<!-- Page Content -->
<div class="content">
    <div class="row">
      <div class="col-md-8">
        <!-- Post Update -->
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <form action="#" method="POST" onsubmit="return false;">
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

        <!-- Update #3 -->
        @foreach ($tls as $tl)
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <div>
              {{-- <a class="img-link" href="javascript:void(0)">
                <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar5.jpg')}}" alt="">
              </a> --}}
              <a class="fw-semibold" href="javascript:void(0)">{{ $tl['user']['fname'] }}</a>
              <span class="fs-sm text-muted"> - {{ $tl['age'] }} years</span>
            </div>
            {{-- <div class="block-options">
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
            </div> --}}
          </div>
          <div class="block-content">
            {{-- <p>
              Our city escape continues..
            </p> --}}
            <div class="row g-sm js-gallery img-fluid-100">
              <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
              <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
              <div class="col-12">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo11.jpg">
                  <img class="img-fluid" src="{{asset('assets/media/photos/photo11.jpg')}}" alt="">
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
              {{-- <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                </a>
              </li> --}}
            </ul>
          </div>
          {{-- <div class="block-content block-content-full bg-body-light">
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
          </div> --}}
        </div>
        @endforeach
      
        <!-- END Update #3 -->

        
        <!-- END Timeline -->
      </div>
      <div class="col-md-4">
        <!-- Group Suggestions -->
        <div class="block block-rounded">
          <div class="block-content block-content-full">
            <div class="row g-sm mb-2">
              <div class="col-6">
                <img class="img-fluid" src="{{asset('assets/media/photos/photo12.jpg')}}" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="{{asset('assets/media/photos/photo13.jpg')}}" alt="">
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
                <img class="img-fluid" src="{{asset('assets/media/photos/photo22.jpg')}}" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="{{asset('assets/media/photos/photo23.jpg')}}" alt="">
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
                <img class="img-fluid" src="{{asset('assets/media/photos/photo9.jpg')}}" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="{{asset('assets/media/photos/photo6.jpg')}}" alt="">
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
              <div class="col-md-2">
                <div class="p-3 text-end text-md-start">
                  {{-- <a class="fw-semibold text-white" href="#" data-bs-dismiss="modal" aria-label="Close">
                    Skip Intro
                  </a> --}}
                </div>
              </div>
              <div class="col-md-10">
                <div class="bg-body-extra-light shadow-lg">

                  <div id="errorNotification" class="notification"></div>

                  <form action="{{ url('member/complete/onboarding') }}" method="POST" onsubmit="return submitButton()">
                    @csrf
                    <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                      <div class="p-5">
                        <i class="fa fa-award fa-3x text-muted my-4"></i> 
                        <h3 class="fs-2 fw-light mb-2">Welcome to YDate!</h3>
                       <p class="text-muted">
                          Setup your account in two minutes, meet and interract with amazing people.
                        </p>
                        <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                          Continue <i class="fa fa-arrow-right ms-1"></i>
                        </button>
                      </div>
                      <div class="p-5">
                        
                        
                        <h2 class="content-heading">I am a</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                <div class="col-md-6">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Man" id="gender-male" name="gender">
                                    <label class="form-check-label" for="gender-male">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Man</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Woman" id="gender-female" name="gender">
                                    <label class="form-check-label" for="gender-female">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Woman</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <h2 class="content-heading pt-0">Interested in</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                <div class="col-md-6">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Male" id="gender-3" name="gender_interest">
                                    <label class="form-check-label" for="gender-3">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Man</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Female" id="gender-4" name="gender_interest">
                                    <label class="form-check-label" for="gender-4">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Woman</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Both" id="gender-5" name="gender_interest">
                                    <label class="form-check-label" for="gender-5">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Both</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <h2 class="content-heading pt-0">I am looking for</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                <div class="col-md-6 mb-2">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Casual Relationship" id="gender-6" name="relationship_interest">
                                    <label class="form-check-label" for="gender-6">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Casual Relationship</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Serious Relationship" id="gender-7" name="relationship_interest">
                                    <label class="form-check-label" for="gender-7">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Serious Relationship</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Study Mate" id="gender-8" name="relationship_interest">
                                    <label class="form-check-label" for="gender-8">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Study Mate</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <div class="form-check form-block">
                                    <input class="form-check-input" type="radio" value="Platonic Relationship" id="gender-9" name="relationship_interest">
                                    <label class="form-check-label" for="gender-9">
                                      <span class="d-flex align-items-center">
                                        <span class="ms-2">
                                          <span class="fw-bold">Platonic Relationship</span>
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                          Continue <i class="fa fa-arrow-right ms-1"></i>
                        </button>
                      </div>

                      <div class="slick-slide p-5">
                        
                        <h2 class="content-heading">Whats your educational Background</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                  @foreach (educationalBackground() as $education)
                                      <div class="col-md-6">
                                        <div class="form-check form-block">
                                          <input class="form-check-input" type="radio" value="{{ $education->name }}" id="educationBackground-{{$education->id}}" name="educational_background">
                                          <label class="form-check-label" for="educationBackground-{{$education->id}}">
                                            <span class="d-flex align-items-center">
                                              <span class="ms-2">
                                                <span class="fw-bold">{{ $education->name }}</span>
                                              </span>
                                            </span>
                                          </label>
                                        </div>
                                      </div>
                                  @endforeach

                              </div>
                            </div>
                        </div>

                        <h2 class="content-heading">Professional Background</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                  
                                @foreach (professionalBackground() as $profession)
                                      <div class="col-md-6">
                                        <div class="form-check form-block">
                                          <input class="form-check-input" type="radio" value="{{ $profession->name }}" id="professionBackground-{{$profession->id}}" name="professional_background">
                                          <label class="form-check-label" for="professionBackground-{{$profession->id}}">
                                            <span class="d-flex align-items-center">
                                              <span class="ms-2">
                                                <span class="fw-bold">{{ $profession->name }}</span>
                                              </span>
                                            </span>
                                          </label>
                                        </div>
                                      </div>
                                  @endforeach
                                  
                              </div>
                            </div>
                        </div>


                        <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 3);">
                          Continue <i class="fa fa-arrow-right ms-1"></i>
                        </button>
                      </div>

                      <div class="slick-slide p-5">
                        
                        <h2 class="content-heading">Whats your Ethnicity</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                  
                                @foreach (ethnicity() as $ethnic)
                                      <div class="col-md-6">
                                        <div class="form-check form-block">
                                          <input class="form-check-input" type="radio" value="{{ $ethnic->name }}" id="ethnicBackground-{{$ethnic->id}}" name="ethnicity">
                                          <label class="form-check-label" for="ethnicBackground-{{$ethnic->id}}">
                                            <span class="d-flex align-items-center">
                                              <span class="ms-2">
                                                <span class="fw-bold">{{ $ethnic->name }}</span>
                                              </span>
                                            </span>
                                          </label>
                                        </div>
                                      </div>
                                  @endforeach
                                  
                              </div>
                            </div>
                        </div>

                        <h2 class="content-heading">Marital Status</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                  
                                @foreach (maritalStatus() as $marital)
                                      <div class="col-md-6">
                                        <div class="form-check form-block">
                                          <input class="form-check-input" type="radio" value="{{ $marital->name }}" id="maritalBackground-{{$marital->id}}" name="marital_status">
                                          <label class="form-check-label" for="maritalBackground-{{$marital->id}}">
                                            <span class="d-flex align-items-center">
                                              <span class="ms-2">
                                                <span class="fw-bold">{{ $marital->name }}</span>
                                              </span>
                                            </span>
                                          </label>
                                        </div>
                                      </div>
                                @endforeach
                                  
                              </div>
                            </div>
                        </div>


                          <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 4);">
                            Continue <i class="fa fa-arrow-right ms-1"></i>
                          </button>
                      </div>

                      <div class="slick-slide p-5">
                       
                        <h2 class="content-heading">Whats your Belief</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                              <div class="row items-push">
                                  
                                @foreach (belief() as $belief)
                                      <div class="col-md-6 mb-2">
                                        <div class="form-check form-block">
                                          <input class="form-check-input" type="radio" value="{{ $belief->name }}" id="beliefBackground-{{$belief->id}}" name="belief">
                                          <label class="form-check-label" for="beliefBackground-{{$belief->id}}">
                                            <span class="d-flex align-items-center">
                                              <span class="ms-2">
                                                <span class="fw-bold">{{ $belief->name }}</span>
                                              </span>
                                            </span>
                                          </label>
                                        </div>
                                      </div>
                                @endforeach
                                  
                              </div>
                            </div>
                        </div>
                        
                        <h2 class="content-heading">Whats your Birth Date</h2>
                        <div class="row push mb-2">
                          <div class="col-lg-12">
                             <div class="row">
                                <div class="col-lg-6">
                                  <div class="input-group input-group-lg">
                                    <select name="month" id="month" class="form-control">
                                    <option value="">Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <span class="input-group-text">
                                      <i class="fa fa-table"></i>
                                    </span>
                                  </div>

                                </div>

                                <div class="col-lg-6">
                                  <div class="input-group input-group-lg">
                                    <select name="year" id="year" class="form-control">
                                    <option value="">Select Year</option>
                                        @foreach (last18Years() as $i8)
                                            <option>{{ $i8 }}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text">
                                      <i class="fa fa-table"></i>
                                    </span>
                                  </div>

                                </div>
                             </div>
                               
                             
                                
                              
                            </div>
                        </div>

                        <div id="genderError" class="error"></div>

                          <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 5);">
                            Continue <i class="fa fa-arrow-right ms-1"></i>
                          </button>
                      </div>

                      <div class="slick-slide p-5">
                        <i class="fa fa-user-check fa-3x text-muted my-4"></i>
                        <h3 class="fs-2 fw-light">Let us know your name</h3>
                          {{-- <form class="mb-3">
                            <div class="mb-4">
                              <input type="text" class="form-control form-control-alt" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                            </div>
                            <div class="mb-4">
                              <input type="text" class="form-control form-control-alt" id="onboard-last-name" name="onboard-last-name" placeholder="Enter your last name..">
                            </div>
                          </form> --}}
                          {{-- <button type="button" class="btn btn-primary mb-4" data-bs-dismiss="modal" aria-label="Close">
                            Get Started <i class="fa fa-check opacity-50 ms-1"></i>
                          </button> --}}
                          <button type="submit"  class="btn btn-primary mb-4">
                            Get Started <i class="fa fa-check opacity-50 ms-1"></i>
                          </button>
                      </div>

                    </div>
                  </form>

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

<script>
  function submitButton() {
      // var name = document.getElementById('name').value;
      var gender = document.querySelector('input[name="gender"]:checked');
      var gender_interest = document.querySelector('input[name="gender_interest"]:checked');
      var relationship_interest = document.querySelector('input[name="relationship_interest"]:checked');
      var educational_background = document.querySelector('input[name="educational_background"]:checked');
      var professional_background = document.querySelector('input[name="professional_background"]:checked');
      var ethnicity = document.querySelector('input[name="ethnicity"]:checked');
      var marital_status = document.querySelector('input[name="marital_status"]:checked');
      var belief = document.querySelector('input[name="belief"]:checked');
      var month = document.getElementById('month').value.trim();
      var year = document.getElementById('year').value.trim();
      
     
      
      if (!gender) {
          displayErrorNotification('Please Select Gender');
          return false;
       }
       if (!gender_interest) {
          displayErrorNotification('Please Select Gender you are interested in');
          return false;
       }
       if (!relationship_interest) {
          displayErrorNotification('Please Select Relationship you are interested in');
          return false;
       }
       if (!educational_background) {
          displayErrorNotification('Please Select Educational Background');
          return false;
       }
       if (!professional_background) {
          displayErrorNotification('Please Select Professional Background');
          return false;
       }
       if (!ethnicity) {
          displayErrorNotification('Please Select your ethnic Background');
          return false;
       }
       if (!marital_status) {
          displayErrorNotification('Please Select your Marital Status');
          return false;
       }
       if (!belief) {
          displayErrorNotification('Please Select your religious belief');
          return false;
       }

       if (month === '') {
          displayErrorNotification('Please Select your month of birth');
          return false;
       }
       if (year === '') {
          displayErrorNotification('Please Select your year of birth');
          return false;
       }

       return true;
      
  }

 
    function displayErrorNotification(errorMessage) {
        var notification = document.getElementById('errorNotification');
        notification.innerText = errorMessage;
        notification.classList.add('show');
        setTimeout(function(){
            notification.classList.remove('show');
        }, 4000); // Remove the notification after 3 seconds
    }

  
  </script>


@endsection