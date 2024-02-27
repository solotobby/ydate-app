@extends('layouts.master')
@section('title', 'YDate | Dashboard')

@section('content')

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
  

@endsection