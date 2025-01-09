<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reply to Message</title>
</head>
<body>
    <h1>Reply to a Message</h1>

    <?php
    
    ?>

    <form method="POST" action="index.php?controller=message&action=replySubmit">
        <input type="hidden" name="project_id" value="<?= htmlspecialchars($parentMessage['project_id']) ?>">
        
        <input type="hidden" name="parent_id" value="<?= htmlspecialchars($parentMessage['message_id']) ?>">

        <div>
            <label>Reply Content:</label><br>
            <textarea name="message_content" rows="5" cols="40" required></textarea>
        </div>
        <br>
        <button type="submit">Send Reply</button>
    </form>

    <p>
        <a href="index.php?controller=message&action=viewMessages&project_id=<?= htmlspecialchars($parentMessage['project_id']) ?>">
            Cancel / Go Back
        </a>
    </p>
</body>
</html>
