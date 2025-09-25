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
                    <!-- add your blogs Home page -->
                     
                    <p>A blogging app is a mobile application designed to help users create, manage, and publish blog posts on their smartphones or tablets. These apps provide a user-friendly interface for writing, editing, and sharing content, often offering features like multimedia integration and social media integration</p>   

                </div>
            </div>

            <div class="card w-75 mt-5">
                <div class="card-header  bg-dark text-white">{{ __('Get Genuine contents in Blogs') }}</div>
                <div class="card-body">
                    <!-- add your blogs Home page -->
                     
                    <p>A blogging app is a mobile application designed to help users create, manage, and publish blog posts on their smartphones or tablets. These apps provide a user-friendly interface for writing, editing, and sharing content, often offering features like multimedia integration and social media integration</p>   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
