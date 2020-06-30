<?php echo $this->session->flashdata("pesan") ?>

<!doctype html>
<html lang="en">
 
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url()?>assets/front/images/icon.ico">
	<title>Halaman Login</title>
	<link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css"rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/signin.css" rel="stylesheet">
 </head>

<body class="text-center" background="<?php echo base_url()?>/assets/front/images/logo1.png">

	<form class="form-signin"method="post" action="<?php echo base_url()?>index.php/login/ceklogin">
		<img class="mb-4" src="<?php echo base_url()?>assets/front/images/Marvel.png" alt="" width="300" height="300">
		<h1 class="h3 mb-3 font-weightsmall" style="color: lightsalmon">Hallo Admin Marvel</h1>
		
		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label><br>
		<input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
		
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		
		</div>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<p class="mt-5 mb-3 text-muted">&copy; AvengersEndGame.com - 2019</p>
	
	</form>

</body>
</html>