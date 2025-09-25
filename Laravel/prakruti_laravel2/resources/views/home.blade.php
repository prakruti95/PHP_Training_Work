<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Static Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        nav {
            margin-bottom: 20px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <h1>Welcome to Our Static Home Page</h1>
        <p>This is a simple static page using Laravel's Blade templating engine.</p>
        <p>You can customize this page by editing the <code>home.blade.php</code> file.</p>
    </div>

    <footer>
        &copy; {{ date('Y') }} My Static Laravel Site
    </footer>

</body>
</html>
