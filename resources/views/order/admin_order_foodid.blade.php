@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-white">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>food_id</th>
                                <th>order_id</th>
                                <th>quantity</th>
                                <th>price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->food->id}}</td>
                                <td>{{$item->order->id}}</td>
                                <td>{{$item->order->quantity}}</td>
                                <td>{{$item->food->price}}</td>
                                
                               
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
            </div>
        </div>
    </div>
</div>
@endsection