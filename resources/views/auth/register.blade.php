
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- title and description-->
    <title>YDate - Register</title>
    <meta name="description" content="YDate">
   
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">  
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- custom style -->
    <style> 
        #header-nav nav a.uk-active         { color:rgb(59, 130, 246)}
        .dark #header-nav nav a.uk-active   { color:#fff !important}
    </style>
 
</head>
<body>

  <div class="sm:flex">
    
    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">

      <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <!-- logo image-->
        <a href="{{ url('/') }}"> <img src="{{ asset('assets/images/logo.png') }}" class="w-28 absolute top-10 left-10 dark:hidden" alt=""></a>
        <a href=" {{ url('/') }} "> <img src="{{ asset('assets/images/logo-light.png') }}" class="w-28 absolute top-10 left-10 hidden dark:!block" alt=""></a>

        <!-- logo icon optional -->
        <div class="hidden">
          <img class="w-12" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Socialite html template">
        </div>

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5"> Create your account </h2>
          <p class="text-sm text-gray-700 font-normal">If you have an account. <a href="{{ url('auth/login') }}" class="text-blue-700">Login here!</a></p>
        </div>
        
        @if ($errors->any())
        <div uk-alert>
            <div class="p-2 border bg-yellow-50 border-yellow-500/30 rounded-xl dark:bg-slate-700">
                <div class="flex items-center justify-between gap-6">
                    
                    <!-- icon -->
                    <div class="p-1 text-white bg-red-500 shadow rounded-xl shadow-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{-- <div class="text-base"> {{ $error }} </div> --}}
                                <small> {{ $error }} </small>
                            </li>
                        @endforeach
                    </ul>
                    <!-- text -->
                   
                    
                    <!-- icon close -->
                    <button type="button" class="flex p-1 text-gray-600 rounded-lg hover:bg-black/5 ml-auto uk-alert-close">
                        <ion-icon name="close" class="text-xl"></ion-icon>
                    </button>

                </div>
            </div>
        </div>
        {{-- <div class="bg-orange-100 border-l-4 border-orange-500 text-red-700 p-4" role="alert">
            <p class="font-bold">Attend to this error(s)</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div> --}}
        @endif

        <!-- form -->
        <form method="POST" action="{{ url('auth/register') }}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            @csrf
            <div class="grid grid-cols-2 gap-4 gap-y-7">
       
              <!-- first name -->
              <div>
                  <label for="email" class="">First name</label>
                  <div class="mt-2.5">
                      <input id="text" name="fname" type="text"  autofocus="" placeholder="First name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                  </div>
              </div>
  
              <!-- Last name -->
              <div>
                  <label for="email" class="">Last name</label>
                  <div class="mt-2.5">
                      <input id="text" name="lname" type="text" placeholder="Last name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                  </div>
              </div>
            
              <!-- email -->
              <div class="col-span-2">
                  <label for="email" class="">Email address</label>
                  <div class="mt-2.5">
                      <input id="email" name="email" type="email" placeholder="Email" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                  </div>
              </div>
  
              <!-- password -->
              <div>
                <label for="email" class="">Password</label>
                <div class="mt-2.5">
                    <input id="password" name="password" type="password" placeholder="password"  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
                </div>
              </div>
  
              <!-- Confirm Password -->
              <div>
                  <label for="email" class="">Confirm Password</label>
                  <div class="mt-2.5">
                      <input id="password" name="password_confirmation" type="password" placeholder="password"  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
                  </div>
              </div>
  
              {{-- <div class="col-span-2">
  
                <label class="inline-flex items-center" id="rememberme">
                  <input type="checkbox" id="accept-terms" class="!rounded-md accent-red-800" />
                  <span class="ml-2">you agree to our <a href="#" class="text-blue-700 hover:underline">terms of use </a> </span>
                </label>
                
              </div> --}}
  
  
              <!-- submit button -->
              <div class="col-span-2">
                <button type="submit" class="button bg-primary text-white w-full">Get Started</button>
              </div>
  
            </div>
  
            {{-- <div class="text-center flex items-center gap-6"> 
              <hr class="flex-1 border-slate-200 dark:border-slate-800"> 
              Or continue with  
              <hr class="flex-1 border-slate-200 dark:border-slate-800">
            </div>  --}}
  
            {{-- <!-- social login -->
            <div class="flex gap-2" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true">
              <a href="#" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"> <ion-icon name="logo-facebook" class="text-lg"></ion-icon> facebook  </a>
              <a href="#" class="button flex-1 flex items-center gap-2 bg-sky-600 text-white text-sm"> <ion-icon name="logo-twitter"></ion-icon> twitter  </a>
              <a href="#" class="button flex-1 flex items-center gap-2 bg-black text-white text-sm"> <ion-icon name="logo-github"></ion-icon> github  </a>
            </div> --}}
            
          </form>

      </div>

    </div>

    <!-- image slider -->
    <div class="flex-1 relative bg-primary max-md:hidden">

      <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
    
        <ul class="uk-slideshow-items w-full h-full"> 
            <li class="w-full">
                <img src="assets/images/post/img-3.jpg"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                    <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" > 
                        <img class="w-12" src="assets/images/logo-icon.png" alt="Socialite html template">
                        <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 600,0,0">  Connect With Friends </h4> 
                        <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> This phrase is more casual and playful. It suggests that you are keeping your friends updated on what’s happening in your life.</p>   
                    </div> 
                </div>
                <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
            </li>
            <li class="w-full">
              <img src="assets/images/post/img-2.jpg"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                  <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" > 
                      <img class="w-12" src="assets/images/logo-icon.png" alt="Socialite html template">
                      <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 800,0,0">  Connect With Friends </h4> 
                      <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> This phrase is more casual and playful. It suggests that you are keeping your friends updated on what’s happening in your life.</p>   
                  </div> 
              </div>
              <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
          </li>
        </ul>
 
        <!-- slide nav -->
        <div class="flex justify-center">
            <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"> </ul>
        </div>
      
        
    </div>
  

    </div>
  
  </div>
  
   
    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->

    <script src="{{ asset('assets/js/uikit.min.js')}} "></script>
    <script src="{{  asset('assets/js/script.js') }}"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <!-- Dark mode -->
      <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>

</body>
</html>
