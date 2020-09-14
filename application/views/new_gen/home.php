<!DOCTYPE html>
<html>
<head>
	<title>InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body>
	<?php include '_menu.php'?>
	<div class="container-fluid home_page">
		<div class="row">
			<div class="col p-0">
				<div class="banner">
					<div class="slides">
						<img src="<?=base_url()?>../image/obj/banner.png" alt="">
						<img src="<?=base_url()?>../image/obj/banner.png" alt="">
						<img src="<?=base_url()?>../image/obj/banner.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col p-0">
				<div class="text_banner pt-5">
					การประกวดสิ่งประดิษฐ์และนวัตกรรม<br>
					Thailand New Gen Inventors Award 2021
				</div>
			</div>

			
		</div>
		<div class="w_1024">
			<div class="row">
				<div class="col-4">
					<div class="poster">
						<img src="<?=base_url()?>../image/obj/poster.png" alt="">
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col p-0">
							<div class="video">
								<iframe style="overflow:hidden;height:40vh;width:100%" height="100%" width="100%" src="https://www.youtube.com/embed/6nM1lwBB9lY?autoplay=1controls=0&amp;start=35" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col btn_login">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include '_footer.php'?>
	</div>
</body>
</html>
<script>
	$('.slides').slick({
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows:false
	});
	$(document).ready(function() {
		
		$('.image_coun').each(function() {
			var screenImage = $(this);
			var theImage = new Image();
			theImage.src = screenImage.attr("src");
			$(theImage).one('load', function(event) {
				var imageWidth = theImage.width;
				var imageHeight = theImage.height;
				if(imageHeight>imageWidth){
					$(screenImage).css({
						width: 'auto',
						height: '100%'
					});
				}
			});
		});
	});
</script>