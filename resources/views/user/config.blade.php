
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="style/normalize.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<div class="container">
    <header class="header" id="header-user">
       
        <div class="top-nav">
            <div class="logo">
           <a href="{{route('login')}}"> <img src="{{asset('images/icons/cinema.png')}}" alt="Logo"></a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#">Series</a></li>
                <li><a href="#">Peliculas</a></li>
                <li><a href="#">Mi lista</a></li>
                @if(Auth::user()->role=="admin")
                    <li><a href="{{route('admin')}}">Admin</a></a></li>
                    @endif
                <li><input type="search" name="buscar" id="buscar" style="height:24px;"></li>
                <li><a href="{{route('logout')}}">cerrar sesion</a>
                 </a></li>
               
            </ul>
        </nav>
    </header>
</div>
<x-guest-layout>
  
    
    <x-auth-card>
    
        @if(Auth::user()->image)
        <x-slot name="logo" >
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
           
            <img  src="{{ route('user.avatar',['filename'=>Auth::user()->image])}}" alt="User"  style="max-width: 450px; max-height: 300px; object-fit: cover;">
        
        </x-slot>
        @else
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
            <img src=" {{asset('images/covers/user.png')}}" alt="User"  style="max-width: 450px; max-height: 300px; object-fit: cover;">
        </x-slot>
        @endif
        
       
       

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
        <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{Auth::user()->name}}" required autofocus />
            </div>

              <!-- subame -->
              <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{Auth::user()->surname}}" required autofocus />
            </div>

              <!-- nick -->
              <div>
                <x-label for="nick" :value="__('Nick')" />

                <x-input id="nick" class="block mt-1 w-full" type="text" name="nick" value="{{Auth::user()->nick}}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{Auth::user()->email}}" required />
            </div>
            {{-- {{var_dump(Auth::user())}} --}}
          
            <div class="mt-4">
                <x-label for="image_path" :value="__('Avatar')" />

                <x-input id="image_path" class="block mt-1 w-full" type="file" name="image_path" value=" "/>
            </div>
            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
           
        </form>
    </x-auth-card>
</x-guest-layout>
