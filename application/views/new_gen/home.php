<!DOCTYPE html>
<html>
<head>
	<title>InternationalAwards</title>
	<script src="<?=base_url()?>../js/script_countdown.js"></script>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="height: 100%; background-image: url('<?=base_url()?>../image/bg_new_gen.png');">
	<?php include '_menu.php'?>
	<div class="row box_main_countdown">
		<div class="col">
			<div class="row">
				<div class="col">
					<div class="box_countdown p-0">
						<div class="row">
							<div class="col-3 box_cd_num" id="day"></div>
							<div class="col-3 box_cd_num" id="hours"></div>
							<div class="col-3 box_cd_num" id="mins"></div>
							<div class="col-3 box_cd_num" id="sec"></div>
						</div>
						<div class="row">
							<div class="col-3 box_cd_txt">DAY</div>
							<div class="col-3 box_cd_txt">HOURS</div>
							<div class="col-3 box_cd_txt">MINS</div>
							<div class="col-3 box_cd_txt">SECONDS</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 mx-auto text-center" style="font-size:2rem; font-weight: bold;">COMING SOON</div>
				<div class="col-12 mx-auto text-center" style="font-size:2rem; font-weight: bold;">I-New Gen Awards</div>
				<div class="col-12 mx-auto text-center" style="font-size:1.5rem; font-weight: lighter;">Please visit us after days</div>
			</div>
		</div>
	</div>
</body>
</html>