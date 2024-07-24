<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		center {
            text-align: center;
            padding: 10px;
            background-color: #ebb70e;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-sizing: border-box;
            left: 0;
        }
		@media (max-width: 480px) {
			center{
				margin-bottom:20px;
				height:20px;
				font-size:2px;
			}
		}

	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
	 <center style="font-size:x-large" >   &copy; 2024 Online Trekking System. All rights reserved.</center>
</body>
</html>