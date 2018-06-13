<?php
	include("includes/major.php");
	$err = "";
	
	if(isset($_POST['loginbtn']))
	{
		if(trim($_POST['useremail']) == "")
			$err .= "Username Required!<br>";
		
		if(trim($_POST['userpassword']) == "")
			$err .= "Password Required!<br>";
		
		if(trim($_POST['useremail']) != "" && trim($_POST['userpassword']) != "")
		{
			$userdata = DB::queryFirstRow("SELECT user_id, name FROM tbl_users WHERE username=%s AND password=%s LIMIT 1", trim($_POST['useremail']), md5(trim($_POST['userpassword'])));
			
			if(DB::count() == 1)
			{
				$_SESSION["authenticateduserid"] =  $userdata['user_id'];
				$_SESSION["authenticateduserdisplayname"] =  $userdata['name'];
				
?>
				<script>
					location.href="dashboard.php";
				</script>
<?php				
			}
			else
			{
				$err .= "Invalid Credentials!<br>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Login | Agrineti</title>

		<!-- Bootstrap -->
		<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="vendors/animate.css/animate.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="build/css/custom.min.css" rel="stylesheet">
		<!-- Favicons -->
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	</head>

	<body class="login">
		<div>
			<div class="login_wrapper">
				<div class="animate form login_form">
					<section class="login_content">
						<?php
							if($err != "")
							{
						?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span>
							</button>
							<?php echo $err; ?>
						</div>
						<?php						
							}
						?>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<h2>Agri-Neti Login Form</h2>
							<div>
								<input type="text" name="useremail" class="form-control" value="<?php echo isset($_POST['useremail']) ? $_POST['useremail'] : ""; ?>" placeholder="Username" />
							</div>
							<div>
								<input type="password" name="userpassword" value="<?php echo isset($_POST['userpassword']) ? $_POST['userpassword'] : ""; ?>" class="form-control" placeholder="Password" />
							</div>
							<div>
								<button type="submit" name="loginbtn" class="btn btn-default submit">Log In</button>
							</div>

							<div class="clearfix"></div>

							<div class="separator">
								<div class="clearfix"></div>
								<br />

								<div>
									<img src="images/AGRILOGO.PNG" alt="Agrineti" height="42" width="42">
									<p>&copy;<?php echo date('Y'); ?> All Rights Reserved.</p>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.min.js"></script>
	</body>
</html>