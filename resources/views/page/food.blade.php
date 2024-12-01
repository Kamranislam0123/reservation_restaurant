{{-- @extends('website.home') --}}
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $item)
                <form action="{{url('/addcart',$item->id)}}" method="POST">
                    @csrf
                <div class="item" style="padding-top: 10px;">
                    <div style="background-image: url('/foodimage/{{$item->image}}')" class='card card1'>
                        <div class="price"><h6>{{$item->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$item->title}}</h1>
                          <p class='description'>{{$item->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>

                    <!-- Add padding around input and button -->
                    <div style="padding: 5px;">
                        <input type="number" name='quantity' min="0" style="width:80px; padding: 5px; margin-right: 10px;">
                        <input type="submit" value="Add to Cart" class="btn btn-primary" style="padding: 10px 10px;">
                    </div>
                </div>
            </form>
                @endforeach
                
            </div>
        </div>
    </div>
</section>


