@extends('navbarFrontened.navbarfront')
<body>
    <div class="py-3 py-md-5 ">
        <div class="container">
            <h4>My cart</h4>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">
                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Food</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Total</h4>
                                </div>
                                
                            </div>
                        </div>

                        @forelse ($cart as $cartItem)
                        @if ($cartItem->food)
                        
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a href="">
                                        <label class="product-name">
                                            {{-- <img src="{{asset($cartItem->product->productImages[0]->image)}}" style="width: 50px; height: 50px" alt=""> --}}
                                            {{$cartItem->food->title}}
                                           
                                        </label>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
