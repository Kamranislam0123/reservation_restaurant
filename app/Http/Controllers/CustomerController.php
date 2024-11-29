<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function order()
    {
        return view('order.order');
    }

  public function  orderConfirm(Request $request)
  {
    // dd($request);
    $customer = new Customer();
    // dd($customer);
    $customer->name = $request->name;
    $customer->address = $request->address;
    $customer->save();

    return redirect()->back()->with('message','order confirmed');

  }
}
