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
                                <th>Name</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $cus)
                                
                            
                            <tr>
                                <td>{{$cus->name}}</td>
                                <td>{{$cus->address}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
            </div>
        </div>
    </div>
</div>
@endsection