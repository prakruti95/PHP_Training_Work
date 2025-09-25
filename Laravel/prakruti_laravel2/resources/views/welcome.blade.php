<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Bootstrap Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="mb-4">Bootstrap Color Cards</h1>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card text-bg-primary mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-secondary mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-success mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-danger mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-warning mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-info mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-light mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-bg-dark mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 mb-3 text-muted">
        &copy; {{ date('Y') }} My Laravel App
    </footer>

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
