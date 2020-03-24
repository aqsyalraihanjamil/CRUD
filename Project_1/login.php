<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="indexstyle.css">

  </head>
  <body>
    <form class="box" action="proses_login.php" method="post" >
      <h1>Login</h1>
      <input type="text" name="username" value="" class="input" placeholder="Username">
      <input type="password" name="password" placeholder="Password" value="" class="input">
      <input type="submit" name="login" value="Login" class="submit" >
      <br><br>br
      <a href="register.php" class="submit" align="center">Daftar ?</a>
    </form>
  </body>
</html>
