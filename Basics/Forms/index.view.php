<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Contract Form</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" class="name" id="name" name="name" placeholder="Name:" value="<?php if(!$sent && isset($name)) echo $name ?>">
            <input type="text" class="email" id="email" name="email" placeholder="Email:" value="<?php if(!$sent && isset($email)) echo $email ?>">
            <textarea name="Message" class="message" id="message" placeholder="Message:"><?php if(!$sent && isset($message)) echo $message ?></textarea>
            <?php if(!empty($errors)): ?>
                <div class="alert error">
                    <?php echo $errors ?>
                </div>
            <?php elseif($sent): ?>
                <div class="alert success">
                    <p>Email Successfully Sent</p>
                </div>
            <?php endif ?>
            <input type="submit" class="btn btn=primary" name="submit" value="Send Message">
        </form>
    </div>
</body>
</html>