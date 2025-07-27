<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">User List</h1>
    
    <a href="/MVC_CRUD2/public/index.php?action=create" class="btn btn-primary mb-3">Add User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)) : ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['phone']) ?></td>
                <td>
                    <a href="/MVC_CRUD2/public/index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/MVC_CRUD2/public/index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="5">No users found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
