<?php
  include 'connect.php';

 $username = ($_POST['username']);
 $password = (md5($_POST['password']));

$q = mysqli_query($koneksi,"SELECT * from t_anggota where username='$username' and password='$password'");
$r = mysqli_fetch_array ($q);
$q2 = mysqli_query($koneksi,"SELECT * from t_petugas where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q2);
if ($q ->num_rows > 0) {
    $_SESSION['user_id'] = $r['id_anggota'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['id_level'] = 'User';
    header('location:operator/media.php');
}
elseif ($q2 ->num_rows > 0) {
    $_SESSION['user_id'] = $row['id_petugas'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id_level'] = 'Administrator';
    header('location:operator/media.php');
}else {
    echo "Login Gagal";
}
  ?>
