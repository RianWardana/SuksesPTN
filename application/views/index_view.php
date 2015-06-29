<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PDMU</title>
	</head>

	
	<body data-spy="scroll" data-target="#myScrollspy">
		<div class="container">
			
			<div class="jumbotron">
				<h1>PUSAT DOKUMENTASI MATERI UJIAN</h1>
				<div class="jumbotron_button">
					<div class="col-md-6 col-sm-6 text-right">
						<a href="<?php echo base_url("upload"); ?>"><button class="btn btn-lg btn-success">Halaman untuk upload</button></a>
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="<?php echo base_url("edit"); ?>"><button class="btn btn-lg btn-warning">Halaman untuk edit</button></a>
					</div>
				</div>
			</div>
			
			
			
			<div id="zip-alert">
				<div class="alert alert-info" role="alert">
					Materi-materi dibawah merupakan materi dalam file <em>.zip</em>. Jika perangkat <em id="os"></em> anda belum mendukung untuk membuka file 
					dengan format tersebut, harap download <a id="a" href="https://play.google.com/store/apps/details?id=com.rarlab.rar" target="_blank">
																program ini
															</a>.
				</div>
			</div>
			
			
			<script>
				if (/Android/i.test(navigator.userAgent)) {
					document.getElementById("os").innerHTML = "Android";
					document.getElementById("a").setAttribute("href", "https://play.google.com/store/apps/details?id=com.rarlab.rar");
				}
				
				else if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
					document.getElementById("os").innerHTML = "iOS";
					document.getElementById("a").setAttribute("href", "https://itunes.apple.com/us/app/zip-viewer-archiver-manager/id603570331");
				}
				
				else {
					document.getElementById("zip-alert").style.display = 'none';
				}
			</script>
			
			
			
			<div class="col-md-9">
			<?php
				foreach($pelajaran_result as $pelajaran){
					
					foreach($pelajaran_available_id as $pelajaran_available) {
					
						if ($pelajaran->id == $pelajaran_available->pelajaran) {
							
							echo "<div id='{$pelajaran->pelajaran}'>";
							echo "<legend id='{$pelajaran->id}'>{$pelajaran->pelajaran}</legend></br>";
							
							foreach($link_result[$pelajaran->id] as $link){echo "
								<div class='row'>
									<a class='col-md-12' target='' href='{$link->link}'>
										<div class='link-box'>
											<h4>{$link->name}</h4>
											<h4>{$link->caption}</h4>
										</div>
									</a>
								</div>
							";}
							
							echo "</div>";
						}
					}
				}
			?>
			</div>
			
			<div class="col-md-3" id="myScrollspy">
			
				<legend class="hidden-md">Informasi dan Bantuan</legend><legend class="hidden-lg hidden-sm hidden-xs">Informasi</legend></br>
				<a href="http://halo.suksesptn.com/"><button class="btn btn-info">HALO SKSPTN</button></a>
				
				<ul class="nav nav-tabs nav-stacked hidden-sm hidden-xs" data-spy="affix" data-offset-top="525">
					<?php
						foreach($pelajaran_result as $pelajaran) {
							foreach($pelajaran_available_id as $pelajaran_available) {
								if ($pelajaran->id == $pelajaran_available->pelajaran) {
									echo "<li><a href='#{$pelajaran->id}'>{$pelajaran->pelajaran}</a></li>";
								}
							}
						}
					?>
				</ul>
			</div>
		
		
		</div>
		
		
		<script>
			$('a[href^="#"]').on('click', function(event) {
				var target = $( $(this).attr('href') );
				if( target.length ) {
					//$(this).parent().attr('class', 'active');
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top - 0
					}, 500);
				}
			});
		</script>
		
	</body>
</html>