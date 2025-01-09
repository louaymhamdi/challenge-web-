<!-- project_create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Project</title>
</head>
<body>
    <h1>Create a New Project</h1>
    <form method="POST" action="index.php?controller=project&action=create">
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" required>
        </div>
        <br>
        <div>
            <label>Description:</label><br>
            <textarea name="description" rows="5" cols="40" required></textarea>
        </div>
        <br>
        <div>
            <label>Budget:</label><br>
            <input type="number" name="budget" step="0.01" min="0">
        </div>
        <br>
        <div>
            <label>Deadline (YYYY-MM-DD):</label><br>
            <input type="date" name="deadline">
        </div>
        <br>
        <button type="submit">Create Project</button>
    </form>
</body>
</html>
