<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Projects</title>
</head>
<body>
    <h1>My Projects</h1>

    <?php if (!empty($projects)): ?>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li>
                    <strong><?= htmlspecialchars($project['title']) ?></strong> 
                    (Status: <?= htmlspecialchars($project['status']) ?>)

                    <a href="index.php?controller=message&action=viewMessages&project_id=<?= $project['project_id'] ?>">
                        View Messages
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>You have not posted any projects yet.</p>
    <?php endif; ?>

    <p><a href="index.php">Back to Home</a></p>
</body>
</html>
