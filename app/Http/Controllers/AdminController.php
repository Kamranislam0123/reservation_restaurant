<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Chefs;
use App\Models\Customer;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\SendGridHandler;

class AdminController extends Controller
{
    public function index()
    {
        return view('lgreg');
    }
    public function dashboard()
    {
        return view('admin.admin');
    }
    public function users()
    {
        $data = User::all();
        return view('page.users',compact('data'));
    }
    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('/users');
    }
    public function foodmenu()
    {
        $data = Food::all();
       
        return view('page.foodmenu',compact('data'));
    }

    public function upload(Request $request)
    {
        $data = new Food();
         $image = $request->image;

         $imageName = time().'.'.$image->getClientOriginalExtension();

         $request->image->move('foodimage',$imageName);
         $data->image = $imageName;
         $data->title = $request->title;
         $data->price = $request->price;
         $data->description = $request->description;
         $data->save();

         return redirect()->back();

    }

    public function deletefood($food)
    {
        $data = Food::findOrFail($food);
        $data->delete();
        return redirect()->back();


    }
    public function editfood($food)
    {
        $data = Food::findOrFail($food);
        return view('page.editfoodmenu',compact('data'));
    }
   public function updatefood(Request $request,$food)
   {
    $data = Food::find($food);
    $image = $request->image;

         $imageName = time().'.'.$image->getClientOriginalExtension();

         $request->image->move('foodimage',$imageName);
         $data->image = $imageName;
         $data->title = $request->title;
         $data->price = $request->price;
         $data->description = $request->description;
         $data->update();

         return redirect('/foodmenu');

   }

   public function reservationCreate(Request $request)
   {
    $reserve = new Reservation();

    $reserve->name = $request->name;
    $reserve->email = $request->email;
    $reserve->phone = $request->phone;
    $reserve->guest = $request->guest;
    $reserve->date = $request->date;
    $reserve->time = $request->time;
    $reserve->message = $request->message;

    $reserve->save();

    return redirect()->back();

   }

   public function reservationview()
   {
    $res = Reservation::all();
    return view('reservation.adminReservation',compact('res'));
   }

   public function viewChef()
   {
    $chef = Chefs::all();
    // return response()->js
    return view('chefs.adminChef',compact('chef'));
    // return view('chefs.adminChef');
   }
   public function uploadChef(Request $request)
   {
    $chef = new Chefs();

    $image = $request->image;

         $imageName = time().'.'.$image->getClientOriginalExtension();

         $request->image->move('chefimage',$imageName);
         $chef->image = $imageName;
    $chef->name = $request->name;
    $chef->speciality = $request->speciality;
    $chef->save();
    return redirect()->back();

   }

   public function orderedCustomer()
   {
    $customer = Customer::all();
    return view('order.adminOrder',compact('customer'));
   }
//    public function orderidfoodid(Request $request,$foodId)
   public function orderidfoodid()
   {
    // $order = Order::where('order_id', $orderId)->first();
    // $order = Order::findOrFail($request->order_id)
    //                 ->food()->where('id',$foodId)->first();

    // $order = Order::with('food')->get();
    // $food = Food::with('order')->get();
    $order = Order::where('order_id','id')->get();
    $food = Food::where('food_id','id')->get();
    return view('order.admin_order_foodid',compact('order','food'));
   }

//    public function mailInvoice(int $dataId)
//    {
//     try{
//         $data = Order::findorFail($dataId);
//         Mail::to('ashfiislam56@gmail.com')->send(new MailNotify($data));
//         return redirect('showcart/Send'.$dataId)->with('message','email sent');

//     }catch(\Exception $e)
//     {
//         return redirect('showcart/Send'.$dataId)->with('message','semething went wrong');


//     }

//    }


}
