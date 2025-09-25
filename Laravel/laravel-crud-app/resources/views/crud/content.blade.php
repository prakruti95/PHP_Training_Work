@extends('crud.layout')
@section('title_name')
Home Page
@endsection
@section('content')
<section id="crud-app" class="conatiner w-75 mx-auto mt-5 p-5">
   <div class="w-100 bg-white p-5">
    <h1>Product List  <a href="/add-products"><button type="button" class="btn btn-success text-white btn-sm float-end">Create New</button></a></h1>
    @if(Session('success'))
    <div class="alert alert-success">
        <span class="text-center w-50 mx-auto"> {{session('success')}} </span>
    </div>
    @endif

    @if(Session('updsuccess'))
    <div class="alert alert-success">
        <span class="text-center w-50 mx-auto"> {{session('updsuccess')}} </span>
    </div>
    @endif

    @if(Session('delsuccess'))
    <div class="alert alert-danger">
        <span class="text-center w-50 mx-auto"> {{session('delsuccess')}} </span>
    </div>
    @endif
    <table class="w-100 table table-responsive" align="center">
      <tr>
        <th>Created_at</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Weight</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Descriptions</th>
        <th>Action</th>
      </tr>
     @foreach($data as $row)
      <tr>
        <td>{{$row->created_at}}</td>
        <td><img src="{{ asset('uploads/'.$row->photo)}}" alt="photo" width="85px" height="85px" /> </td>
        <td>{{$row->name}}</td>
        <td>{{$row->weight}}</td>
        <td>{{$row->price}}</td>
        <td>{{$row->qty}}</td>
        <td>{{$row->descriptions}}</td>
        <td>
          <div style="min-width:180px">
          <a href='{{URL("/edit-data/".$row->id)}}'><button type="button" class="btn btn-success text-white btn-sm">Edit</button></a>
            <a href='{{URL("/read-data/".$row->id)}}'><button type="button" class="btn btn-info text-white btn-sm ms-2">Read</button></a>
            <a href='{{URL("/".$row->id)}}'><button type="button" class="btn btn-danger text-white btn-sm ms-2">Delete</button></a>
        
            </div>
          </td>
      </tr>
@endforeach
    </table>
   </div>

</section>    

@endsection