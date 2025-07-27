<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit User</h2>
    <form action="index.php?action=update&id=<?= $user['id'] ?>" method="post">
        <input type="text" name="name" class="form-control mb-2" value="<?= htmlspecialchars($user['name']) ?>" required>
        <input type="email" name="email" class="form-control mb-2" value="<?= htmlspecialchars($user['email']) ?>" required>
        <input type="text" name="phone" class="form-control mb-2" value="<?= htmlspecialchars($user['phone']) ?>" required>
        <button class="btn btn-primary">Update</button>
    </form>
</body>
</html>