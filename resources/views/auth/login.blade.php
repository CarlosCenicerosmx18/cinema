<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>



       <body class="body">


        <style>
           
        </style>



        
           
           <div class="login">
            @if(session('status'))
            <div class="alert alert-success">
                <p>Tu password a sido restaurada de forma correcta!</p>
            </div>
        @endif
               <div class="logo-form">
                   Cinema
               </div>
               <script>
                 gsap.to('.logo-form',{
                     duration: 2,
                     y: 62,
                     ease:'bounce',
                     backgroundColor: 'black',

                 });
                
           </script>
           
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
    
                    <x-input id="email" class="form-login" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
    
                    <x-input id="password" class="form-login"
                                    type="password"
                                    name="password"
                                    placeholder="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
               
    
                <div class="flex items-center justify-end mt-4 a">
                    <a  class="underline text-sm text-gray-600 hover:text-gray-900 p-2" href="{{ route('register') }}">Register a new account</a>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-button class="button-login">
                        {{ __('Login') }}
                    </x-button>
                    <div class="aviso">
                        <a href="#">Terminos y condiciones</a>
                        <a href="#">&copy; Spiders.link</a>
                    </div>
                </div>
            </form>
           </div>
       </body>
  
