@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsHCKStAA7Zqe04i0FWmkwY_qJdX7Q4JgpgRHmPQs5YkGizQEu_pNYWzz7sbmdvqkG1kk&usqp=CAU" />
 
        </div>
        <div class="col-md-8">
            <div class="card w-100">
                <div class="card-header  bg-dark text-white">{{ __('Welcome In Our Blogs') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Manage your blogs here -->
                  <table class="table table-responsive w-100">

                  <tr class="bg-dark text-white">
                    <th>#id</th>
                    <th>Title</th>
                    <th>Added Date</th>
                    <th>Descriptions</th>
                    <th>Action</th>
                  </tr>
                 <tr>
                  <td>1001</td>
                  <td>May be India attack on pakistan soon!</td>
                  <td>02/5/2025</td>
                  <td>Oh its not good may be dead ration increase and chanse to 3rd war</td>   
                  <td><a href=""><span class="bi bi-trash">Delete</span></td> 
                </tr>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
