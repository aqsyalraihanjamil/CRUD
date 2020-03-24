
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="indexstyle.css">
    <style media="screen">
    html{
      background-image: linear-gradient(to bottom left, magenta, navy, blue, skyblue);
      position: relative;
      height: 100%;
    }
    </style>
  </head>
  <body>

      <form action="" method="post" class="box">
        <br><br><br><br>
        <h1>Register</h1>
        <input type="text" name="username" placeholder="Username" value="" class="input">
        <input type="password" name="password" placeholder="Password" value="" class="input">
        <input type="submit" name="simpan" value="Daftar" class="submit"><br>
        <br><br>
        <br>
      </form>
  </body>
</html>

<?php
  include 'connect.php';
  if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $Password = @$_POST['password'];
    $pass = md5($Password);

    $query = mysqli_query($koneksi, "INSERT INTO t_anggota (username, password)
    VALUES ('$username', '$pass')");

      if($query){
          echo "<div class='form'>
          <h3>Berhasil Register</h3>
          <br/><a href='login.php'>Login</a>
          </div>";
      }else{
          echo "input gagal";
      }
  }
?>
