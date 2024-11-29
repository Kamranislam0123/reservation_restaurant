@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-info">
                <div class="card-body">
                    <form action="{{url('/uploadChef')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                        <label for="">Name</label>
                        <input style="color: blue" type="text"  name="name" placeholder="chef's name" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Speciality</label>
                        <input style="color: blue" type="text"  name="speciality" placeholder="chef's name" required>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="image" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Save"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6  ">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Speciality</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chef as $data)
                                
                         
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->speciality}}</td>
                                <td>
                                    <img src="{{url('/chefimage',$data->image)}}" width="100px" alt="">
                                </td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
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