@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsHCKStAA7Zqe04i0FWmkwY_qJdX7Q4JgpgRHmPQs5YkGizQEu_pNYWzz7sbmdvqkG1kk&usqp=CAU" />
 
        </div>
        <div class="col-md-8">
            <div class="card w-75">
                <div class="card-header  bg-dark text-white">{{ __('Welcome In Our Blogs') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- add your blogs here -->
                     <form method="post">
                      @csrf 
                      <div class="form-group mt-3">
                        <input type="text" name="title" placeholder="Enter blogs title" class="form-control" />
                      </div>
                      
                      <div class="form-group mt-3">
                        <input type="date" name="date" placeholder="Added Date" class="form-control" />
                      </div>
                      
                      <div class="form-group mt-3">
                        <textarea name="desc" placeholder="Enter blogs Descriptions" class="form-control"></textarea>
                      </div>

                      
                      <div class="form-group mt-3">
                        <input type="submit" name="addblogs" value="AddBlogs" class="btn btn-md btn-dark text-white"  />
                      </div>
                     <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
