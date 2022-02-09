<?php
session_start();
include '../koneksi/koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password' ");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
$data = mysqli_fetch_assoc($login);
	if($data['akses']=="Admin")
	{
		$_SESSION['username'] = $username;
		$_SESSION['akses'] = "Admin";
		header("location:../admin/admin.php");
	}
	else if($data['akses']=="Pegawai")
	{
		$_SESSION['username'] = $username;
		$_SESSION['akses'] = "Pegawai";
		header("location:../pegawai/pegawai.php");
	}
	else
	{
		echo "Login Gagal";
	}	
}else{
	header("location:../login.php?pesan=gagal");
}
 
?>
