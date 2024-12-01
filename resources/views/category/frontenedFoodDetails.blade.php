@extends('navbarFrontened.navbarfront')
<body>
    <section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>food details</h6>
                    <h2>Our selection of this category with quality taste </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($foods as $food)
                
            <div class="col-md-6">
                {{-- <img src="{{asset($food->image)}}" alt=""> --}}
                <div style="background-image: url('/foodimage/{{$food->image}}')" class='card card1'></div>

            </div>
           
                
            <div class="col-md-6">
                <h4 class="text-primary">Name of food: {{$food->title}}</h4>
                <h4 class="text-primary">Price of food: ${{$food->price}}</h4>
                <h4 class="text-primary">Description of food: {{$food->description}}</h4>
                <div class="mt-3">
                    <form action="{{url('/addcart',$food->id)}}" method="POST">
                        @csrf

                        <input type="number" name='quantity' min="0" style="width:80px">
                        <input type="submit" value="add cart" class="btn btn-primary">
                        <a href="{{url('/showcart',Auth::user()->id)}}" class="btn btn-warning">view</a>
                    </form>
                {{-- <form action="{{url('/addcart',$item->id)}}" method="POST"> --}}

                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
</body>