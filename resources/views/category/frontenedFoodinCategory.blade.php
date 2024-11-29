@extends('navbarFrontened.navbarfront')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klassy Cafe - Restaurant HTML Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('website/assets/css/templatemo-klassy-cafe.css')}}">


    <link rel="stylesheet" href="{{asset('website/assets/css/lightbox.css')}}">
</head> --}}
<body>
    @if ($foods)
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of this category with quality taste </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            @foreach ($foods as $item)
            <div class="col-lg-4">
                <div class="card">
                <form action="{{url('/addcart',$item['food_data']->id)}}" method="POST">
                    @csrf
                <div class="item">
                    <div style="background-image: url('/foodimage/{{$item['food_data']->image}}')" class='card card1'>
                        <div class="price"><h6>{{$item['food_data']->price}}</h6></div>
                        <div class='info'>
                        <h1 class='title'>{{$item['food_data']->title}}</h1>
                        <p class='description'>{{$item['food_data']->description}}</p>
                        <div class="main-text-button">
                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                        </div>
                        </div>
                    </div>

                    {{-- <input type="number" name='quantity' min="0" style="width:80px"> --}}
                    {{-- <input type="submit" value="add cart"> --}}
                    <a href="{{url('/fooddetails',$item['food_data']->id)}}" class="btn btn-danger">view food details</a>
                </div>
            </form>
        </div>
    </div>
    @endforeach
        </div>
    </div>
        {{-- <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($foods as $item)
                    <form action="{{url('/addcart',$item['food_data']->id)}}" method="POST">
                        @csrf
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{$item['food_data']->image}}')" class='card card1'>
                            <div class="price"><h6>{{$item['food_data']->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$item['food_data']->title}}</h1>
                              <p class='description'>{{$item['food_data']->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
    
                        <input type="number" name='quantity' min="0" style="width:80px">
                        <input type="submit" value="add cart">
                    </div>
                </form>
                    @endforeach
                  
                </div>
            </div>
        </div> --}}
    </section>
@else
    <p>No foods available.</p>
@endif
</body>
</html>
   