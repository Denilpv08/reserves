<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body>
    <!-- Navigation paths of the page -->
    <nav class="flex py-5 bg-indigo-100 text-black">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">My Application</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      <!-- show username, Show username, close and open session -->
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">
             <b>{{ auth()->user()->name }}</b>
             <img src="{{ asset('img/perfil.jpg') }}" alt="" class="rounded float-start" width="60px">
            </p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-semibold text-white
          py-2 px-4 rounded-md bg-black hover:text-black">Log Out</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-white py-3 px-4 rounded-md">Log In</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-black py-2 px-4 rounded-md hover:bg-white 
          hover:text-black">Register</a>
        </li>
      @endif
      </ul>

    </nav>
    
      @yield('content')
    
  </body>
</html>