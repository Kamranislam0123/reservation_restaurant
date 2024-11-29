@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
         <div class="card-body">
             <form action="{{url('/update',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="mb-3">
                 <label for="">Name:</label>
                 <input type="text" name="name" value="{{$category->name}}" id="" placeholder="write a name" required>
                </div>
                
                
                <div class="mb-3">
                 <label for="">Description:</label>
                 <input type="text" name="description" value="{{$category->description}}" id="" placeholder="description" required>
 
                </div>
                <div class="mb-3">
                    <label for="">Slug:</label>
                    <input type="text" name="slug" id="" value="{{$category->slug}}" placeholder="write  slug" required>
                   </div>

                   <div class="mb-3">
                    <label for="">Status:</label>
                    <input type="checkbox" name="status" value="{{ $category->status == '1' ? 'checked' : ''}}">                   
                </div>
                <div>
                 <button type="submit">save</button>
                </div>
             </form>
         </div>
 
            
         
        </div>
        <br>
       
     </div>

     @endsection