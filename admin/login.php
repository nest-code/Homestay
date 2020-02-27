<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/sweetalert.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
          <a href="../user/index.php?utama.php"><img src="../assets/img/admin.png" class="img-responsive" alt="admin"></a>
            <form action="cek_login.php" class="inner-login" method="post" onsubmit="return validasi()">

                <div class="form-group">
                    <input type="text" class="form-control"  id="username" placeholder="Username" name="username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>

                <input type="submit" name="login" class="btn btn-block btn-primary" value="LOGIN" />

            </form>
          </div>
        </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/sweetalert.min.js"></script>

    <script type="text/javascript">
	   function validasi() {
    		var username = document.getElementById("username").value;
    		var password = document.getElementById("password").value;
    		if (username !="" && password!="") {
    			return true;
    		}else{
    			swal("Kosong!","Username dan password harus diisi!", "error");
    			return false;
    		}
	}
</script>
  </body>
</html>
