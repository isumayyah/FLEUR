<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css”>
    <style>
      body{
        font-family: cairo;
        color:rgb(1, 18, 18)

      }
      .fontcolor{
        color:rgb(245, 245, 252);
      }
      </style>
</head>
<body>
    <header>
      <nav class="navbar" style="background:#c797c7">
        <div class="container">
        <div class="d-flex">
          <h3 class="text-white">FLEUR</h3>
        </div>
        
        <div class="d-flex m-2">
          <img src="/img/flower.png"height="75">
        </div>

        <div class="d-flex">
          <div class="row ">
            <div class="col">
              <i class="fa fa-search me-2 text-white" aria-hidden="true"></i> &nbsp; 
              <i class="fa fa-cart-plus text-white" aria-hidden="true"></i>

          </div>
                  
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" 
                  aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
           </ul>


          </div>
        </div> 
      </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
     <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
     
      <a href="https://twitter.com/ilxl1l" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.instagram.com/i.sa108/" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/sumayyah-almalki-a40871250" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>FLEUR
          </h6>
          <p>
            Flowers is your go-to destination for ordering flowers and gifts for your loved ones on all occasions. 
            In Floward, we are always keen to prepare the most beautiful flower arrangements to spread happiness and love. 
            We made sure to provide gift ideas for all occasions
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Flowers</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Choclate</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Candles</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Taif</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            fleur@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +9665546789</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </footer>
</body>
</html>
