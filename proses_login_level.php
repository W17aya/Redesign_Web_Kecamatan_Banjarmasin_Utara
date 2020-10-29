<?php
	include('koneksi.php');
	session_start();

	if(isset($_POST['login'])){

	 $username = htmlspecialchars($_POST['username']);
	 $password = htmlspecialchars($_POST['password']);

	 
	 $cek = mysqli_query($conn,"SELECT * FROM tb_pengguna WHERE tb_pengguna.username = '$username' AND tb_pengguna.password = '$password'");

		 if (mysqli_num_rows($cek)==1) {

			$c = mysqli_fetch_array($cek);

			$_SESSION['id_pengguna'] = $c['id_pengguna'];
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;

			$level = strtoupper($c['level']);

			if($level=="ADMIN"){
				echo '<script language="javascript">alert("Anda Login Sebagai Admin!"); document.location="admin/dashboard/index.php";</script>';
			}
			elseif ($level=="MASYARAKAT") {
				echo '<script language="javascript">alert("Anda Login Sebagai Masyarakat!"); document.location="masyarakat/dashboard/index.php";</script>';
			} 
			elseif ($level=="PIMPINAN") {
				echo '<script language="javascript">alert("Anda Login Sebagai Pimpinan!"); document.location="pimpinan/dashboard/index.php";</script>';
			}
			else {
				echo '<script language="javascript">alert("Username dan Password Anda Salah 2!"); document.location="index.php";</script>';
			}
		} else {
			echo '<script language="javascript">alert("Username dan Password Anda Salah!"); document.location="index.php";</script>';
		}
	}
?>