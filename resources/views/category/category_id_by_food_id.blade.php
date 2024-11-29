@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
         <div class="card-body">
             <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control text-white">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{$category->name}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Food</label>
                            <select name="food_id" class="form-control text-white">
                                @foreach ($foods as $food)
                                    <option value="{{ $food->id}}">{{$food->title}}</option>

                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Name:</label>
                            <input type="text" name="name" id="" placeholder="write a name" required>
                           </div> --}}
                 <button type="submit">save</button>
                </div>
             </form>
         </div>
 
            
    </div>
        </div>
        <br>
       
     </div>

     <div class="div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>Category_id</th>
                                        <th>Food_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   

                                    @foreach ($categoryByFood as $item)
                                    <tr>
                                      
                                        <td>{{$item['category']}}</td>
                                        <td>{{$item['food']}}</td>
                                      
                                        
                                       
                                        <td>
                                            {{-- <a href="{{url('/delete',$item->id)}}" class="btn btn-danger">Delete</a> --}}
                                            {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                                          
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
    </div>
    </div>
@endsection