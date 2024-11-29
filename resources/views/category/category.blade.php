@extends('admin.master')

@section('content')
<div class="container">
    
    <div class="row">
        
        <div class="col-md-12">
        <div class="card">
         <div class="card-body">
            @if($errors->any())
<h4 class="text-white">{{$errors->first()}}</h4>
@endif
             <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="mb-3">
                 <label for="">Name:</label>
                 <input type="text" name="name" id="" placeholder="write a name" required>
                </div>
                
                
                <div class="mb-3">
                 <label for="">Description:</label>
                 <input type="text" name="description" id="" placeholder="description" required>
 
                </div>
                <div class="mb-3">
                    <label for="">Slug:</label>
                    <input type="text" name="slug" id="" placeholder="write  slug" required>
                   </div>

                   <div class="mb-3">
                    <label for="">Status:</label>
                    <input type="checkbox" name="status" >                   
                </div>
                <div>
                 <button type="submit">save</button>
                </div>
             </form>
         </div>
 
            
         
        </div>
    </div>
        <br>
       
     </div>
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
                                        <th>title</th>
                                        <th>price</th>
                                        <th>description</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->slug}}</td>
                                        
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->status == '1' ? 'visible':'hidden'}}</td>
                                        <td>
                                            <a href="{{url('/delete',$item->id)}}" class="btn btn-danger">Delete</a>
                                            <a href="{{url('/edit',$item->id)}}" class="btn btn-primary">Edit</a>
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
    
@endsection