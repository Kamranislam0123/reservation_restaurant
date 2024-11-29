@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
       <div class="card">
        <div class="card-body">
            <form action="{{url('/updatefood',$data->id)}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="mb-3">
                <label for="">Title:</label>
                <input type="text" name="title" id="" value="{{$data->title}}" placeholder="write a title" required>
               </div>
               <div class="mb-3">
                <label for="">Price:</label>
                <input type="num" name="price" id="" value="{{$data->price}}" placeholder="write a title" required>
               </div>
               <div class="mb-3">
                <label for="">Image:</label>
                <input type="file" name="image"  required>
                {{-- <img src="{{url('/foodimage').$data->food}}" alt=""> --}}
               </div>
               <div class="mb-3">
                <label for="">Description:</label>
                <input type="text" name="description" id="" value="{{$data->description}}" placeholder="description" required>

               </div>
               <div>
                <button type="submit">save</button>
               </div>
            </form>
        </div>

           
        
       </div>
       <br>
      
    </div>
    {{-- <div class="div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>price</th>
                                        <th>image</th>
                                        <th>description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>
                                            <img src="{{url('/foodimage',$item->image)}}" width="100px" height="100px" alt="">
                                        </td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <a href="{{url('/deletefood',$item->id)}}" class="btn btn-danger">Delete</a>
                                            <a href="{{url('/editfood',$item->id)}}" class="btn btn-primary">Edit</a>
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
    </div> --}}
</div>

@endsection