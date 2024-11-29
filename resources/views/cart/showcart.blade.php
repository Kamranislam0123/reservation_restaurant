{{-- <!DOCTYPE html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                            cart[{{$count}}]
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
</header> --}}
@extends('navbarFrontened.navbarfront')

    
    <div id="top">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
            
                
                    <table align="center" class="table table-bordered" bgcolor="yellow">
                        <thead>
                            <tr>
                                <th>Food name</th>
                                <th>price</th>
                                <th>quantity</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{url('/orderconfirm')}}" method="POST">
                                @csrf
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <input type="text" name="foodname[]" value="{{$item->id}}" hidden>
                                        {{$item->title}}
                                    </td>
                                    <td>
                                        <input type="text" name="quantity[]" value="{{$item->quantity}}" hidden>
                                        
                                        {{$item->quantity}}
                                    </td>
                                    <td>
                                        <input type="text" name="price[]" value="{{$item->price}}" hidden>

                                        {{($item->price)*($item->quantity)}}
                                    </td>
                                   
                                  
                                    {{-- <td>
                                        <a href="{{url('/remove'),$item->id}}" class="btn btn-danger">remove</a>
                                    </td> --}}
                                
                                   
                                </tr>
                            @endforeach

                            {{-- @foreach ($data2 as $item2)
                            <tr style="position: relative; top:-50px; left:360px;">
                            <td>
                                <a href="{{url('/remove'),$item2->id}}" class="btn btn-danger">remove</a>
                            </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    {{-- <a href="{{url('/order')}}" class="btn btn-primary">Order now</a> --}}
                <div aling="center" style="padding: 10px;">
                    <button class="btn btn-primary" type="button" id="order">Order now
                        </button> 

                </div>
                </div>
            </div>
           
        </div>
       
    </div>
    <br><br>
    <div id="appear" class="row" style="display: none">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <div style="padding: 10px">
                    <label for="">name</label>
                    <input type="text" name="name" placeholder=" name">

                </div>
                <div style="padding: 10px">
                    <label for="">Phone</label>
                    <input type="number" name="phone" placeholder="phone">

                </div>
                <div style="padding: 10px">
                    <label for="">address</label>
                    <input type="text" name="name" placeholder="address">

                </div>
                <div style="padding: 10px">
                    
                    <input class="btn btn-success" type="submit" value="Order Confirm">

                </div>
                {{-- <div>
                    <a href="{{url('showcart/Send')}}" class="btn btn-primary">Send mail</a>

                </div> --}}
            </div>
            </div>
        </div>
    </div>
</form>
   </div>
  
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $("#order").click(
        function()
        {
            $("#appear").show();
        }
    );

    </script>
