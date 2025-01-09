<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send an Offer</title>
</head>
<body>
<h1>Send Your Offer</h1>

<form method="POST" action="index.php?controller=message&action=send">
    <?php if (!empty($_GET['project_id'])): ?>
        <input type="hidden" name="project_id" value="<?= htmlspecialchars($_GET['project_id']) ?>">
    <?php endif; ?>
    
    <div>
        <label for="message_content">Message Content:</label><br>
        <textarea name="message_content" id="message_content" rows="5" cols="40" required></textarea>
    </div>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>
