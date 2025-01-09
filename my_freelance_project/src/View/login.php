<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Alpine.js (CDN) -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
<?php require __DIR__ . '/partials/navbar.php'; ?>
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form x-data method="POST">
        <div>
            <label>Username</label>
            <input type="text" name="username" x-model="username" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" x-model="password" required>
        </div>
        <button>Login</button>
    </form>
</body>
</html>
