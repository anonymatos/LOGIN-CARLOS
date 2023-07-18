<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require_once('librerias.php')?>
</head>
<body>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="main.js"></script>
      </head>
      <body>
        <div class="container">
          <h2>Update Profile</h2>
          <form action="update_profile.php" method="POST" onsubmit="return validateProfileForm()">
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="text" id="security_question" name="security_question" placeholder="Security Question" required>
            <input type="text" id="security_answer" name="security_answer" placeholder="Security Answer" required>
            <button type="submit">Update Profile</button>
          </form>
        </div>
      </body>
      </html>