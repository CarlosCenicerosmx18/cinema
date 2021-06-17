<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

    <style>
    .login{
        top: -130px;
    }
    .login input{
        width: 90%;
    }
    .login a{
        margin-left: 10px;
    }
    .login .button-login{
        text-align: center;
        width: auto;
        margin-left: 50px;
    }
    </style>
<body class="body">
    <div class="login">
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

        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

              <!-- subame -->
              <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>

              <!-- nick -->
              <div>
                <x-label for="nick" :value="__('Nick')" />

                <x-input id="nick" class="block mt-1 w-full" type="text" name="nick" :value="old('nick')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
           
            <div class="flex items-center justify-end mt-4">
                <div class="g-recaptcha" data-sitekey="6Lc5KL8aAAAAAFFElWVrUOmUeO3VobZGf7LgxZe3"></div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="button-login">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        <script type="text/javascript">
            var onloadCallback = function() {
              alert("grecaptcha esta listo!");
            };
          </script>
          <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
          async defer>
      </script>
    </div>
</body>
