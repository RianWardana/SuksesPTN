<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Input ke PDMU</title>
	</head>

	<body style="background-color: #fff">
		
		<form method="post">
			<div class="container input">
				<legend>Input katalog</legend>
			
				<?php
					$error_input = $this->session->flashdata('error_input');
					if(isset($error_input)){
						echo $error_input;
					}
				?>
			
				<div class="row form-group">
					<div class="col-sm-2 text-right"><b>Pelajaran</b></div>
					<div class="col-sm-6">
						<select class="form-control" name="pelajaran">
							<?php
								foreach($pelajaran_result as $row){
									echo "<option value='{$row->id}'";
									echo ">{$row->pelajaran}</option>";
								}
							?>
						</select>
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2 text-right"><b>Judul</b></div>
					<div class="col-sm-6">
						<input class="form-control text-left" type="text" maxlength="64" name="judul" />
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2 text-right"><b>Link</b></div>
					<div class="col-sm-6">
						<input class="form-control text-left" type="text" maxlength="128" name="link" />
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class=" col-sm-offset-2 col-sm-6">
						<input class="form-control btn btn-primary" type="submit" name="input" value="Input"/>
					</div>
				</div>
				
				
			</div>
		</form>
	</body>
</html>