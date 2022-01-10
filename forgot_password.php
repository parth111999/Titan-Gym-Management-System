<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    
    <title>Titan Gym | Login</title>
    <link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>	
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background-image: url("./images/forg.jpg");
		}
		.user_card {
			height: 350px;
			width: 300px;
			margin-top: auto;
			margin-bottom: auto;
			background: white;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: black;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			width:100%;
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
		#bb{
			
		}
		</style>
</head>

<body>
<body>
	<div class="container h-100 ">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./images/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="change_s_pwd.php" style="width: 260px;" method="POST" id="bb">
						<div class="input-group mb-4">
							<div class="input-group-append">
								<span class="btn btn-danger"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="login_id" placeholder="Your Login ID" data-rule-required="true" data-rule-minlength="6"/>
						</div>
						<div class="input-group mb-4">
							<div class="input-group-append">
								<span class="btn btn-danger"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="login_key"  class="form-control" placeholder="Your secert key" data-rule-required="true" data-rule-minlength="6">
						</div>
						<div class="input-group mb-4">
							<div class="input-group-append">
								<span class="btn btn-danger"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pwfield" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="New Password">
						</div>
						<div class="input-group mb-4">
							<div class="input-group-append">
								<span class="btn btn-danger"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="confirmfield" id="confirmfield" class="form-control" data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm New Password">
						</div>
							<div class="d-flex justify-content-center mt-6 login_container">
				 	<button type="submit" name="sub" class="btn btn-success col md-6">Reset</button>
				   </div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>    	


