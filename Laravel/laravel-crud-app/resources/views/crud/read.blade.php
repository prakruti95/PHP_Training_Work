@extends('crud.layout')
@section('title_name')
Read Data
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
    
     
    <table class="w-100 table table-responsive" align="center">
      <tr>
      <th>Created At</th>
      <td>{{$data->created_at}}</td>
      </tr>
      <tr>
        <th>Photo </th>
        <td><img src="{{ asset('uploads/'.$data->photo)}}" alt="photo" width="300px" height="250px"/></td>
      </tr>
      <tr>
        <th>Name </th>
        <td>{{$data->name}}</td>
      </tr>
      <tr>
      <th>Weight </th>
        <td>{{$data->weight}}</td>
      </tr>
      <tr>
      <th>Price </th>
        <td>{{$data->price}}</td>
</tr>

<tr>
      <th>qty </th>
        <td>{{$data->qty}}</td>
      </tr>

      <tr>
      <th>descriptions </th>
        <td>{{$data->descriptions}}</td>
      </tr>

    </table>
   

</div>

</section>    

@endsection