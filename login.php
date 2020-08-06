<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>login</h2>
    </div>
    <form class="" action="login.php" method="post">
      <!-- display validation errors here -->
      <?php include('errors.php'); ?>
          <div class="input-group">
                <label for="">Username</label>
                <input type="text" name="username" value="">
          </div>
          <div class="input-group">
                <label for="">Password</label>
                <input type="password" name="password" value="">
          </div>
          <div class="input-group">
                  <button type="submit" name="login" class="btn">Login</button>
          </div>
          <p>
            Not yet a member? <a href="register.php">Sign Up</a>
          </p>
    </form>
  </body>
</html>
