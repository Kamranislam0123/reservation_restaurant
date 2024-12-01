<h1>hi</h1><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('website/assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('website/assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('website/assets/css/lightbox.css')}}">
</head>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('website/assets/images/klassy-logo.png')}}" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                           
                    <!-- 
                        <li class="submenu">
                            <a href="javascript:;">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down Page 1</a></li>
                                <li><a href="#">Drop Down Page 2</a></li>
                                <li><a href="#">Drop Down Page 3</a></li>
                            </ul>
                        </li>
                    -->
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li><a href="{{url('/dashboard')}}">dashboard</a></li> 
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="">
                            @auth
                            <a href="{{url('/showcart',Auth::user()->id)}}">
                            cart
                            </a>
                            @endauth

                            @guest
                                cart[0]
                            @endguest
                           
                        </a></li>
                        {{-- <li class="scroll-to-section"><a href="#reservation">Dashboard</a></li> --}}
                        <li>
                            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6  sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            </li>
            <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
                        </li>

                    </ul>        
                    {{-- <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> --}}
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<body>
    
    <div id="top">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
                @if (Session::has('message'))
                <div class="alert alert-success">
                  {{Session::get('message')}}
                </div>
              @endif
                <div class="card-body">
                <form action="{{url('/orderConfirm')}}" method="POST">
                    @csrf
                   <div class="mb-3">
                    <label for="">name:</label>
                    <input type="text" name="name">
                   </div>
                   <div class="mb-3">
                    <label for="">Adress:</label>
                    <input type="text" name="address">
                   </div>
                   <div class="mb-3">
                    <button href="" class="btn btn-primary">Order confirm</button>
                    </div>

                </form>
                
                   </div>
            </div>
           
        </div>
    </div>
   </div>
    </div>
</body>
</html>