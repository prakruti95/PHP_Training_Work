<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<style>

</style>

<style>
body {
font-family: 'Nunito', sans-serif;
}
</style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
<div class="p-5 container mx-auto m-4">
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block fs-4">
@auth
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-1000 dark:text-gray-500 underline">Dashboard</a>
@else
<a href="{{ route('login') }}" class="text-sm text-gray-1000 dark:text-gray-500 underline fs-4">Log in</a>

@if (Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-1000 dark:text-gray-500 underline fs-4 ms-5">Register</a>
@endif
@endauth
</div>
@endif

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<h1>Our Blogs App</h1>
<p class=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsHCKStAA7Zqe04i0FWmkwY_qJdX7Q4JgpgRHmPQs5YkGizQEu_pNYWzz7sbmdvqkG1kk&usqp=CAU" /></p>


</div>
</div>
</body>
</html>
