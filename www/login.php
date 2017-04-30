<!DOCTYPE html>
	<html>
		<head>
			<title>User support zone</title>
			<meta name="viewport" content="initial-scale=1.0,width=device-width"/>
			<style type="text/css">
				@import url("lib/bootstrap/css/bootstrap.min.css");
				@import url("css/style1.css");
				body{
					background:#009688;
					color:white;
				}
				
				.input-group-addon{
					background:#ffffff;
					color:#0f6947;
				}
				
				#login-zone{
					margin-top:3cm;
					text-align:center;
				}
			</style>
		</head>
		
		<body>
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<form method="post" action="controller/login.php">
						<div class="col-md-4" id="login-zone">
							<h3>Login</h3>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-user"></span>
								<input name="u" id="username" type="text" class="form-control" placeholder="User name"/>
							</div>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-lock"></span>
								<input name="p" id="password" type="password" class="form-control" placeholder="Password"/>
							</div>
							<button type="submit" id="btn-login" class="form-control" style="background:#ffffff;color:#0f6947;">
								<span class="glyphicon glyphicon-log-in"></span> Login
							</button>
							<br/>
							<br/>
							<br/>
							<p>Having trouble with login?<br/>Write to <b>webmaster@kuukha.com</b></p>
						</div>
					</form>
					<div class="col-md-4"></div>
				</div>
			</div>
			<script type="text/javascript" src="lib/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="lib/jquery-ui.js"></script>
			<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
		</body>
	</html>