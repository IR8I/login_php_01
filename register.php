<?php
    include('server.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>Register</h2>
    </div>
    <form class="" action="register.php" method="post">
          <!-- display validation errors here -->
          <?php include('errors.php'); ?>
          <div class="input-group">
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
          </div>
          <div class="input-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="input-group">
                <label for="">Password</label>
                <input type="password" name="password_1" value="">
          </div>
          <div class="input-group">
                <label for="">Confirm Password</label>
                <input type="password" name="password_2" value="">
          </div>
          <div class="input-group">
                  <button type="submit" name="register" class="btn">Register</button>
          </div>
          <p>
            Already a member? <a href="login.php">Sign In</a>
          </p>
    </form>
  </body>
</html>
