@extends('navbarFrontened.navbarfront')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div id="top" class="w-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/orderconfirm') }}" method="POST">
                                @csrf
                                <table align="center" class="table table-bordered" bgcolor="yellow">
                                    <thead>
                                        <tr>
                                            <th>Food Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <input type="text" name="foodname[]" value="{{ $item->id }}" hidden>
                                                    {{ $item->title }}
                                                </td>
                                                <td>
                                                    <input type="text" name="quantity[]" value="{{ $item->quantity }}" hidden>
                                                    {{ $item->quantity }}
                                                </td>
                                                <td>
                                                    <input type="text" name="price[]" value="{{ $item->price }}" hidden>
                                                    {{ $item->price * $item->quantity }}
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="text-center" style="padding: 10px;">
                                    <button class="btn btn-primary" type="button" id="order">Order Now</button>
                                </div>

                                <div id="appear" class="row justify-content-center" style="display: none">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div style="padding: 10px">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" placeholder="Name" class="form-control">
                                                </div>
                                                <div style="padding: 10px">
                                                    <label for="">Phone</label>
                                                    <input type="number" name="phone" placeholder="Phone" class="form-control">
                                                </div>
                                                <div style="padding: 10px">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" placeholder="Address" class="form-control">
                                                </div>
                                                <div style="padding: 10px">
                                                    <input class="btn btn-success" type="submit" value="Order Confirm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#order").click(function() {
        $("#appear").show();
    });
</script>
