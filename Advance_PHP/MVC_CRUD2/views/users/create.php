<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Add User</h2>
    <form action="index.php?action=store" method="post">
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
        <button class="btn btn-success">Save</button>
    </form>
</body>
</html>