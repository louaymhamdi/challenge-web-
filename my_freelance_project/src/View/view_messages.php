<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Project Messages</title>
</head>
<body>
    <h1>Messages for "<?= htmlspecialchars($project['title'] ?? 'Unknown') ?>"</h1>

    <?php if (!empty($messages)): ?>
        <?php foreach ($messages as $msg): ?>
            <div style="border:1px solid #ccc; padding:8px; margin:8px 0;">
                <p><strong>From:</strong> <?= htmlspecialchars($msg['sender_name']) ?></p>
                <p><strong>Sent At:</strong> <?= htmlspecialchars($msg['sent_at']) ?></p>
                <p><?= nl2br(htmlspecialchars($msg['message_content'])) ?></p>
                <a href="index.php?controller=project&action=hireFreelancer
    &project_id=<?= $msg['project_id'] ?>
    &freelancer_id=<?= $msg['sender_id'] ?>">
    Hire this Freelancer
</a>


                <?php if (!empty($msg['parent_id'])): ?>
                    <p><em>(This is a reply to message #<?= htmlspecialchars($msg['parent_id']) ?>)</em></p>
                <?php else: ?>
                    <p><em>(This is a top-level message.)</em></p>
                <?php endif; ?>

                <a href="index.php?controller=message&action=replyForm&message_id=<?= $msg['message_id'] ?>">
                    Reply
                </a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No messages yet for this project.</p>
    <?php endif; ?>

    <p><a href="index.php?controller=project&action=myProjects">Back to My Projects</a></p>
</body>
</html>
