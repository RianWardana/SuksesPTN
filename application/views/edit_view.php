<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Edit PDMU</title>
	</head>

	
	
	<body style='background-color: #fff;'>
		<form method="post">
		
			<div class="container edit">
				<div class="col-sm-10">
					<legend>Edit Pusat Dokumentasi Materi Ujian</legend>
				</div>
				
				<div class="form-group">
					<div class="col-sm-2">
						<button type="submit" class="btn btn-primary form-control" name="save_all" value="save_all">Simpan</button>
					</div>
				</div>
				
				<div class="col-sm-12">
				<?php
					$info_save = $this->session->flashdata('info_save');
					if(isset($info_save)){
						echo $info_save;
					}
				?>
				</div>
				
			</div>
		
		
		
			<div class="table-responsive">
				<table class="table table-fixed-header" style="text-align:center; margin-top:20px;">
					<thead class="header">
						<tr>
							<th>ID</th>
							<th>Pelajaran</th>
							<th>Urutan</th>
							<th>Judul</th>
							<th>Link</th>
						</tr>
					</thead>
					
					<tbody>
					<?php
						foreach($pelajaran_result as $pelajaran){
							
							echo "
								<tr style='background-color:#eee;'>
									<th colspan='5'>
										<input
											name='nama_pelajaran_{$pelajaran->id}' 
											size='30' 
											maxlength='32' 
											value='{$pelajaran->pelajaran}'
											style='background-color: transparent; border: transparent;'
										>
									</th>
								</tr>
							";
							
							foreach($link_result[$pelajaran->id] as $link){echo "
								<tr>
									<td><input class='disabled' readonly='readonly' size='1' maxlength='2' value='{$link->id}'></td>
									
									<td>
										<input 
											name='pelajaran_{$link->id}' 
											size='1' 
											maxlength='2' 
											value='{$link->pelajaran}'
										>
									</td>
									
									<td>
										<input 
											name='urutan_{$link->id}' 
											size='1' 
											maxlength='2' 
											value='{$link->sorting}'
										>
									</td>
									
									<td>
										<input 
											name='judul_{$link->id}'
											class='text-left' 
											size='50' 
											maxlength='64' 
											value='{$link->name}'
										>
									</td>
									
									<td>
										<input 
											name='link_{$link->id}'
											class='text-left' 
											size='50' 
											maxlength='128' 
											value='{$link->link}'
										>
									</td>
								</tr>
							";}
							
							echo 	"<tr>
										<td colspan='5'>
											<a href='"; echo base_url("upload/{$pelajaran->id}"); echo "' class='btn btn-default btn-sm' style='padding-left: 65px; padding-right: 65px;'>
												Upload
											</a>
										</td>
									</tr>";
									
							echo "<tr><td style='padding: 1em;' colspan='5'></td></tr>";
							
						}
					?>
					</tbody>
				</table>
			</div>
			
			
		</form>
		
		<script>
			$(document).ready(function(){
				if ($(window).width() > 510) {
					$('.table-fixed-header').fixedHeader();
				}
			});
		</script>
		
	</body>
</html>