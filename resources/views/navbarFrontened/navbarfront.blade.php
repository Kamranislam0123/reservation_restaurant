<!DOCTYPE html>
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
                        <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                           
                   
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
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                    
                        <li class="scroll-to-section"><a href="">
                            @auth
                            <a href="{{url('/showcart',Auth::user()->id)}}">
                            {{-- cart[{{$count}}] --}}
                            </a>
                            @endauth

                            @guest
                                cart[0]
                            @endguest
                           
                        </a></li>
                        <li>
                            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
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
                   
                </nav>
            </div>
        </div>
    </div>
</header>

