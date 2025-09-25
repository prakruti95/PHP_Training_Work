@extends('crud.layout')
@section('title_name')
Add Products
@endsection
@section('content')
<section id="crud-app" class="conatiner w-75 mx-auto mt-5 p-5">
   <div class="w-50 mx-auto bg-white p-5">
    <h1>Add Products here  </h1>
    <!-- pass a validation errors messages -->
    <!-- @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
    <form method="post" enctype="multipart/form-data">
        @csrf 

        <div class="form-group mt-3">
          <input type="file" name="photo" placeholder="Product photo *"   class="form-control @error('name') is-invalid @enderror"/>
          @error('photo')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>


        <div class="form-group mt-3">
            <input type="text" name="name" placeholder="Name *"   class="form-control @error('name') is-invalid @enderror"/>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mt-3">
            <input type="text" name="weight" placeholder="Weight *"   class="form-control  @error('weight') is-invalid @enderror"/>
            @error('weight')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mt-3">
            <input type="text" name="price" placeholder="Price *"   class="form-control @error('price') is-invalid @enderror"/>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>


        <div class="form-group mt-3">
          <input type="text" name="qty" placeholder="Qty *"   class="form-control @error('price') is-invalid @enderror"/>
          @error('qty')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group mt-3">
        <textarea name="descriptions" placeholder="Descriptions *"   class="form-control @error('price') is-invalid @enderror" ></textarea>
        @error('descriptions')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


        <div class="form-group mt-3">
            <input type="submit"  required  class="btn btn-success text-white fs-5" value="Add Products"/>
        </div>


  </form>

</div>

</section>    

@endsection