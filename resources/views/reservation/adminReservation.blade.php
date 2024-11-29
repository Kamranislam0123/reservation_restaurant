@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered text-white">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>guest</th>
                                <th>date</th>
                                <th>time</th>
                                <th>massage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($res as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->guest}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->time}}</td>
                                <td>{{$item->message}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection