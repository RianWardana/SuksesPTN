<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PDMU</title>
	</head>

	<body style="background-color: #fff">
		
		<form method="post">
			<div class="container login">
				<legend style="margin-top: 0px; margin-bottom: 20px; padding-left: 10px; color: #666;">Login Administrator</legend>
			
				<?php
					$error_login = $this->session->flashdata('error_login');
					if(isset($error_login)){ echo $error_login; }
				?>
			
				<div class="form-group">
					<div class="col-sm-2 text-right" style="margin-top: 7px;"><b>NISN</b></div>
					<div class="col-sm-10">
						<input class="form-control text-left" type="text" name="username" style="width: 200px; margin-bottom: 20px;"/>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-2 text-right" style="margin-top: 7px;"><b>Password</b></div>
					<div class="col-sm-10">
						<input class="form-control text-left" type="password" name="password" style="width: 200px; margin-bottom: 20px;"/>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class=" col-sm-offset-2 col-sm-10">
						<input class="form-control btn btn-primary" type="submit" name="submit" style="text-align: center; width: 200px;" value="Login"/>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>