<?php
session_start();
$koneksi=new mysqli("localhost","root","","bonus_case");
?>

<html>
<head><title> LOGIN </title>
<link rel="stylesheet" type="text/css" href="stylelogin.css">

</head>
<body>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="konten">
	

       <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
	   <div class="artikel">

	   
	   <form role="form" method="post">
	   <div class="grup">
        <p><input type="text" name="user" value="" placeholder="User ID"></p>
		</div>
		<div class="grup">
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
		</div>
		 <div class="grup">
        <p class="submit">
		<input type="submit" name="login" value="Login"></p>
		</div>
      </form>
	  <?php
	  if (isset($_POST['login']))
	  {
	  	$ambil=$koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
		$yangcocok= $ambil->num_rows;
		if($yangcocok==1)
		{
			$_SESSION['admin']=$ambil->fetch_assoc();
			echo "<h2>Berhasil</h2>";
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		}
		else
		{
			echo "<h2>GAGAL</h2>";
			echo "<script>location='login.php'</script>";
		}
	  }?>
	  
        </div>
    </div>
</body>
</html>


</div></p>
</div>
</body>
</html>