@extends('admin.master')

@section('content')


<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Order Status</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  {{-- <th>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      </label>
                    </div>
                  </th> --}}
                  <th>  Name </th>
                  <th> MAil </th>
                  <th> Action </th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                    
               
                <tr align="center">
                  
                  <td>{{$item->name}} </td>
                  <td> {{$item->email}} </td>
                  
                  <td>
                    <a href="{{url('/deleteUsers',$item->id)}}">Delete</a>
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