<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
		<link rel="icon" href="<?php echo base_url("favicon.ico")?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/normalize.css"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap.min.css"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/table-fixed-header.css"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/wardana.css"); ?>">
		
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	
	
	<body>
	
		<nav class="navbar navbar-inverse navbar-static-top navbar-default" role="navigation">
		
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>">PDMU</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
					<ul class="nav navbar-nav">
						<li><a href="http://halo.suksesptn.com/">HALO SKSPTN</a></li>
						<li><a href="<?php echo base_url("upload"); ?>">Upload Materi</a></li>
						<li><a href="<?php echo base_url("edit"); ?>">Kelola Entri</a></li>
					</ul>
					
					<a href="<?php echo base_url("login/logout"); ?>" <?php if($have_login == FALSE) echo "hidden='hidden'";?>>
						<button type="button" class="btn btn-warning navbar-btn navbar-right">Logout</button>
					</a>
					
				</div>
				
			</div>
			
        </nav>
	
	
		<script type="text/javascript" src="<?php echo base_url("assets/jquery-1.11.1.min.js");?>"></script>
		<!--<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>-->
		<script type="text/javascript" src="<?php echo base_url("assets/bootstrap.min.js");?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/table-fixed-header.js");?>"></script>
		
	</body>
</html>