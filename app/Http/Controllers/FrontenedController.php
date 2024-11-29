<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Category_id_by_food;
use App\Models\Chefs;
use App\Models\Food;
use App\Models\Order;
use App\Models\Order_item_by_id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontenedController extends Controller
{
    public function home()
    {
        $data = Food::all();
        $chef = Chefs::all();
        $category = Category::all();

        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view('website.home', compact('data', 'chef', 'count','category'));
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            // dd($user_id);
            $foodid = $id;
            $quantity = $request->quantity;

            $checkfood = Cart::where('food_id', $foodid)->where('user_id', $user_id)->first();

            if ($checkfood) {
                $checkfood->quantity = $checkfood->quantity + $quantity;
                $checkfood->save();
            } else {
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->food_id = $foodid;
                $cart->quantity = $quantity;
                $cart->save();
            }

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = Cart::where('user_id', $id)->count();

        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        $data2 = Cart::select('*')->where('user_id', '=', $id)->get();
        return view('cart.showcart', compact('count', 'data', 'data2'));
    }

    public function remove($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderConfirm(Request $request)
    {
        $data2 = Cart::select('*')->where('user_id', Auth::id())->join('food', 'carts.food_id', '=', 'food.id')->get();

        $data = new Order();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        // $data->address = $request->address;
        $data->save();

        foreach ($data2 as $food) 
        {

            $quantity = $food->quantity ? $food->quantity : 0;
            $order = new Order_item_by_id();
            $order->food_id = $food->food_id;
            $order->total = $quantity * $food->price;
            $order->quantity = $quantity;
            $order->order_id = $data->id;
            $order->save();
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->back();
    }
    public function mailInvoice(int $dataId)
   {
    try{
        $data = Order::findorFail($dataId);
        Mail::to('ashfiislam56@gmail.com')->send(new MailNotify($data));
        return redirect('showcart/Send'.$dataId)->with('message','email sent');

    }catch(\Exception $e)
    {
        return redirect('showcart/Send'.$dataId)->with('message','semething went wrong');


    }

   }
//    public function category()
//    {
//     $category = Category::all();
//     return view('website.home',compact('category'));
//    }
public function foodinCategory($id)
    {
        // $count = Cart::where('user_id', $user_id)->count();
        $foods= Category_id_by_food::where('category_id',$id)->get()->map->format();
        // dd($foods);
        // $foods = Food::all();
        return view('category.frontenedFoodinCategory',compact('foods'));
        // return view('navbarFrontened.navbarfront',compact('foods'));
    }
    public function foodDetails($id)
    {
        $foods = Food::where('id',$id)->get();
        return view('category.frontenedFoodDetails',compact('foods'));
    }
}
