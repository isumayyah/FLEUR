@extends('layouts.app')
@section('title','FLEUR STORE')
@section('content')

<head>
  <title>FLEUR</title>
  <style>
      body{
        font-family: cairo;
        text-align: center     
      }
  </style>
</head>
<body>
  <h1 class="text-center" style="color:#6d957a">Welcome in FLEUR </h1>
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
          <a  href="{{ url('/phone') }}" class="text-sm text-gray-700 dark:text-gray-500 underline text-white>Home"></a>
      @else
          <a class="btn text-white "  style="background-color:#6d957a" href="{{ route('login') }}" >Log in</a>
          @if (Route::has('register'))
              <a class="btn text-white " style="background-color:#6d957a" href="{{ route('register') }}" >Register</a>
          @endif
      @endauth
  </div>
@endif  
@endsection
</body>
</html>
