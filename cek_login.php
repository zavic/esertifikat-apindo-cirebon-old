<?php
session_start();
include "config/koneksi.php";

@$pass = $_POST['password'];

//mysqli_escape_string fungsinya untuk mengamankan karakter aneh yang diinputkan user, seperti sql injection

@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi, "SELECT * from tbl_users
								 WHERE username='$username' and password = '$password' ");
$data = mysqli_fetch_array($login);
$_SESSION['login'] = false;
if($data)
{
	$_SESSION['id_user'] = $data['id_user'] ;
	$_SESSION['username'] = $data['username'];
	$_SESSION['lvl'] = $data['isAdmin'];
	$_SESSION['login'] = true;
	header('location:admin.php');
}
else
{
	echo "<script>
			alert('Maaf, Login GAGAL, pastikan username dan password anda Benar..!');
			document.location='index.php';
		  </script>";
}

?>