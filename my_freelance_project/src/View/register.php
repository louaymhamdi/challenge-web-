<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
    <h1>Register</h1>
    <form x-data method="POST">
        <div>
            <label>Username</label>
            <input type="text" name="username" x-model="username" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" x-model="password" required>
        </div>
        <div>
            <label>Role</label>
            <select name="role" x-model="role">
                <option value="recruiter">Recruiter</option>
                <option value="freelancer">Freelancer</option>
            </select>
        </div>
        <button>Sign Up</button>
    </form>
</body>
</html>
