
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
 --}}
 <html
 lang="en"
 class="light-style customizer-hide"
 dir="ltr"
 data-theme="theme-default"
 data-assets-path="storage/back/assets/"
 data-template="vertical-menu-template-free"
>
 <head>
   <meta charset="utf-8" />
   <meta
     name="viewport"
     content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
   />

   <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

   <meta name="description" content="" />

   <!-- Favicon -->
   <link rel="icon" type="image/x-icon" href="{{ asset('storage/back/assets/img/favicon/favicon.ico') }}" />

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
     href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
     rel="stylesheet"
   />

   <!-- Icons. Uncomment required icon fonts -->
   <link rel="stylesheet" href="{{ asset('storage/back/assets/vendor/fonts/boxicons.css') }}" />

   <!-- Core CSS -->
   <link rel="stylesheet" href="{{ asset('storage/back/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
   <link rel="stylesheet" href="{{ asset('storage/back/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
   <link rel="stylesheet" href="{{ asset('storage/back/assets/css/demo.css') }}" />

   <!-- Vendors CSS -->
   <link rel="stylesheet" href="{{ asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

   <!-- Page CSS -->
   <!-- Page -->
   <link rel="stylesheet" href="{{ asset('storage/back/assets/vendor/css/pages/page-auth.css') }}" />
   <!-- Helpers -->
   <script src="{{ asset('storage/back/assets/vendor/js/helpers.js') }}"></script>

   <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
   <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
   <script src="{{ asset('storage/back/assets/js/config.js') }}"></script>
 </head>

 <body>
   <!-- Content -->

   <div class="container-xxl">
     <div class="authentication-wrapper authentication-basic container-p-y">
       <div class="authentication-inner">
         <!-- Register -->
         <div class="card">
           <div class="card-body">
             <!-- Logo -->
             <div class="app-brand justify-content-center">
               <a  class="app-brand-link gap-2">
                 <span class="app-brand-logo demo">
                 </span>
                 <img src="{{ asset('storage/back/media/logo/Oxygen_Cylinder_Logo-removebg-preview.png') }}" style="width: 40%;margin-left:90px;" alt="" srcset="">
                 {{-- <span class="app-brand-text demo text-body fw-bolder">MEGHNA ENGINEERING <br> CYLINDER RE-TEST CENTER</span> --}}
               </a>
             </div>
             <!-- /Logo -->
             <h4 class="mb-2">Welcome to Meghna CNG Retesting Center!</h4>
             <p class="mb-4">Please sign-in to your account and start the adventure</p>

             <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                @csrf
               <div class="mb-3">
                 <label for="email" class="form-label">Email or Username</label>
                 <input
                   type="text"
                   class="form-control"
                   id="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                   
                   placeholder="Enter your email or username"
                   autofocus
                 />
               </div>
               <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                 <div class="input-group input-group-merge">
                    
                   <input
                     type="password"
                     id="password" name="password"
                     required autocomplete="current-password" 
                     class="form-control"
                     name="password"
                     placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                     aria-describedby="password"
                   />
                   <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                 </div>
                 <div class="d-flex justify-content-between">
                   
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
               </div>
               <div class="mb-3">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" id="remember-me" />
                   <label class="form-check-label" for="remember-me"> Remember Me </label>
                 </div>
               </div>
               <div class="mb-3">
                 <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
               </div>
             </form>

             <p class="text-center">
               <span>New on our platform?</span>
               <a href="{{ route('register') }}">
                 <span>Create an account</span>
               </a>
             </p>
           </div>
         </div>
         <!-- /Register -->
       </div>
     </div>
   </div>

   <!-- / Content -->


   <!-- Core JS -->
   <!-- build:js assets/vendor/js/core.js -->
   <script src="{{ asset('storage/back/assets/vendor/libs/jquery/jquery.js') }}"></script>
   <script src="{{ asset('storage/back/assets/vendor/libs/popper/popper.js') }}"></script>
   <script src="{{ asset('storage/back/assets/vendor/js/bootstrap.js') }}"></script>
   <script src="{{ asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

   <script src="{{ asset('storage/back/assets/vendor/js/menu.js') }}"></script>
   <!-- endbuild -->

   <!-- Vendors JS -->

   <!-- Main JS -->
   <script src="{{ asset('storage/back/assets/js/main.js') }}"></script>

   <!-- Page JS -->

 </body>
</html>