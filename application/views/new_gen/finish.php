<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | InternationalAwards</title>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="height: 100%;">
	<?php include '_menu.php'?>
	<div class="container-fluid">
		<div class="row box_main">
			<div class="col">
				<div class="row">
					<div class="col-12 text-center h3">Thank you for your submission</div>
					<div class="col-12 text-center">You will receive a confirmed email from us within 24 hours</div>
				</div>
				<div class="row mt-3">
					<div class="col text-center">
						<img src="<?=base_url()?>../image/obj/robot_newgen_finish.png" alt="">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-3 mx-auto">
						<a href="<?=base_url()?>home_newgen/submission"><div class="btn_green">SUBMIT NEW PROJECT</div></a>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-3 mx-auto">
						<a href="<?=base_url()?>home_newgen/Dashboard"><div class="btn_green bg_black">BACK TO DASHBOARD</div></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>