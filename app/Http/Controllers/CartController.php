<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function  foodcart($id)
    {
        $cart = Food::where('id',$id)->get();

        return  view('foodCart.frontenedFoodCart',compact('cart'));
    }

    
    

    
}
