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
            <input type="text" class="name" id="name" name="name" placeholder="Name:" value="">
            <input type="text" class="email" id="email" name="email" placeholder="Email:" value="">
            <textarea name="Message" class="message" id="message" placeholder="Message:"></textarea>
            <div class="alert error"></div>
            <div class="alert success"></div>
            <input type="submit" class="btn btn=primary" name="submit" value="Send Message">
        </form>
    </div>
</body>
</html>