@extends('crud.layout')
@section('title_name')
Add Products
@endsection
@section('content')
<section id="crud-app" class="conatiner w-75 mx-auto mt-5 p-5">
   <div class="w-50 mx-auto bg-white p-5">
    <h1>Edit Products here  </h1>
    <form method="post">
        @csrf 
    
        <div class="form-group mt-3">
        <label class="text-success">Edit Product Name * </label>    
        <input type="text" name="name" value="{{$editdata->name}}" placeholder="Name *" required  class="form-control"/>
        </div>

        <div class="form-group mt-3">
        <label class="text-success">Edit Weight * </label> 
            <input type="text" name="weight" value="{{$editdata->weight}}" placeholder="Weight *" required  class="form-control"/>
        </div>

        <div class="form-group mt-3">
        <label class="text-success">Edit Product Price * </label> 
            <input type="text" name="price" placeholder="Price *" value="{{$editdata->price}}" required  class="form-control"/>
        </div>

        <div class="form-group mt-3">
            <input type="submit"  required  class="btn btn-success text-white fs-5" value="Update Products"/>
        </div>


  </form>

</div>

</section>    

@endsection