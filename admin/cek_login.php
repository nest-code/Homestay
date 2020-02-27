<?php
	  include_once '../koneksi/koneksi.php';
		$akun_username = $_POST['username'];
		$akun_password = $_POST['password'];

		var_dump();
		die();

		
		$hasil=null;
		$query="select * from admin where username='".$akun_username."' and password='".$akun_password."'";
		$login = mysqli_query($koneksi, $query);
		$hasil=mysqli_num_rows($login);
		// die(var_dump($hasil));
		if ($hasil > 0 ) {
			$data= mysqli_fetch_assoc($login);
      		$akun_nama=$data['nama'];
			$akun_username=$data['username'];
			$akun_password=$data['password'];
			//membuat session
			session_start();
			$_SESSION['username']=$akun_username;
     	$_SESSION['password']=$akun_password;

			// header('location:index.php?halaman=hal_monitoring');
		}else{
      	?>
				<script type="text/javascript">
				alert("username dan password tidak valid");
				// window.location="login.php";
				</script>
      	<?php
		}
?>
