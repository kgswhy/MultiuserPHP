<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="./style/style.css">
 
    <title>Niagahoster Tutorial</title>
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
    <div class="container">
        <form action="./Controller/LoginValidation.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" name="username"  placeholder="Username .." required="required">
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password .." required="required">
            </div>
            <div class="input-group">
                <input type="submit" class="btn" value="Login">
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="../Login/Controller/Register.php">Register</a></p>
        </form>
    </div>
</body>
</html>

