<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Upload ke PDMU</title>
		
		<style>
			
			.btn-file {
				position: relative;
				overflow: hidden;
				padding-left: 30px;
				padding-right: 30px;
			}
			
			@media (max-width: 300px) {
				.btn-file { padding-left: 5px; padding-right: 5px;}
			}
			
			@media (max-width: 768px) and (min-width: 400px) {
				.btn-file { padding-left: 40px; padding-right: 40px;}
			}
			
			.btn-file input[type=file] {
				position: absolute;
				top: 0;
				right: 0;
				min-width: 100%;
				min-height: 100%;
				font-size: 100px;
				text-align: right;
				filter: alpha(opacity=0);
				opacity: 0;
				background: red;
				cursor: inherit;
				display: block;
			}

			input[readonly] {
			  background-color: white !important;
			  cursor: text !important;
			}
		</style>
	</head>

	<body style="background-color: #fff">
	<form method="post" enctype="multipart/form-data" action="<?php echo base_url("upload/start_upload"); ?>">
		<div class="container input">
		
		
			<legend>Upload Materi Ujian</legend>
			
			<?php
				$error_input = $this->session->flashdata('error_input');
				if(isset($error_input)){
					echo $error_input;
				}
			?>
				
				
			<!--<form method="post">-->
				<div class="row form-group">
					<div class="col-sm-2 text-right"><b>Pelajaran</b></div>
					<div class="col-sm-6">
						<select class="form-control" name="pelajaran">
							<?php
								foreach($pelajaran_result as $row){
									echo "<option value='{$row->id}'";
									echo $row->id == $referer ? "selected" : "";
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
			<!--</form>-->
			
			
			<div class="row pilih">
				<div class="col-sm-2 text-right" style="margin-top: 7px;"><b>File</b></div>
				
				<div class="col-sm-6">
					<!--<form method="post" enctype="multipart/form-data" action="<?php //echo base_url("upload/start_upload"); ?>">-->
						<div class="input-group" style="margin-bottom: 10px;">
							<span class="input-group-btn">
								<span class="btn btn-default btn-file">
									Input
									<input type="file" name="userfile" size="20" style="width: 500px;"/>
								</span>
							</span>
							<input type="text" class="form-control text-left" readonly />
						</div>
						
						<div class="alert alert-warning" role="alert" style="margin-top: 20px;">
							<p>Ukuran maksimum file adalah sebesar 10MB </br></p>
							<p>File yang dapat di-<em>upload</em> berformat .gif, .jpg, .png, .pdf, .doc, .docx, .zip, .rar </br></p>
							<p>File yang ingin di-<em>upload</em> mohon diberi nama sesuai dengan isinya</p>
						</div>
						
						<input class="btn btn-block btn-primary" type="submit" value="Upload" style="margin-top: 20px;"/>
					<!--</form>-->
				</div>
			</div>

			
		</div>
		
	</form>
		<script>
			$(document).on('change', '.btn-file :file', function() {
			  var input = $(this),
				  numFiles = input.get(0).files ? input.get(0).files.length : 1,
				  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			  input.trigger('fileselect', [numFiles, label]);
			});

			$(document).ready( function() {
				$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
					
					var input = $(this).parents('.pilih').find(':text'),
						log = numFiles > 1 ? numFiles + ' files selected' : label;
					
					if( input.length ) {
						input.val(log);
					} else {
						if( log ) alert(log);
					}
					
				});
			});
		</script>
	</body>
</html>