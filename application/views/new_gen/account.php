<!DOCTYPE html>
<html>
<head>
	<title>ACCOUNT | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body style="height: 100%;">
	<div class="container-fluid sub_head p-0 submission_head">
		<div class="row">
			<div class="col p-0">
				<div class="banner">
					<?php include '_menu.php'?>
				</div>
			</div>
		</div>
		<div class="submission">
			<div class="w_1024">
				<div class="row mt-5">
					<div class="col-12 mx-auto text-left h3"><b>Account</b></div>
					<div class="col-12 mx-auto">
						<div class="line"></div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 mx-auto">
						<div class="row">
							<div class="col-5 h5"><b>Username</b></div>
							<div class="col">
								<div class="form-row">
									UK200100001
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-12">
								<div class="line"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Password</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-10 mt-2">
										<input type="password" class="form-control input_data" placeholder="Current password*">
									</div>
									<div class="col-10 mt-2">
										<input type="password" class="form-control input_data" placeholder="New password">
									</div>
									<div class="col-10 mt-2">
										<input type="password" class="form-control input_data" placeholder="Re-new password">
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row mb-5">
							<div class="col-5 h5"></div>
							<div class="col">
								<div class="form-row">
									<div class="btn_submit_invention btn_green btn_blue">SAVE</div>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include '_footer.php'?>
	</div>
</body>

<script>
	var base_url = '<?=base_url()?>';
</script>
</html>