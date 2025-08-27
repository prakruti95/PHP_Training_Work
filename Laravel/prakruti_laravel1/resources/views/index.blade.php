<!DOCTYPE html>
<html>
<head>
    <title>Laravel First Page</title>
</head>
<body>
    <h1>Welcome to Laravel View Example</h1>
    <ul>
        <li><a href="{{ url('/home') }}">Home Page</a></li>
        <li><a href="{{ url('/about') }}">About Page</a></li>
        <li><a href="{{ url('/contact') }}">Contact Page</a></li>
    </ul>
</body>
</html>
