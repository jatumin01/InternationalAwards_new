<!DOCTYPE html>
<html>
<head>
	<title>Sign in | InternationalAwards</title>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="height: 100%;background-image: url('<?=base_url()?>../image/bg_new_gen.png');">
	<?php include '_menu.php'?>
	<div class="row box_main">
		<div class="col">
			<div class="row">
				<div class="col-12 font-weight-bold h4 text-center">WELCOME</div>
				<div class="col">
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="username">Username</label>
							<input type="text" class="form-control input_singin" id="username">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="password">Password</label>
							<input type="password" class="form-control input_singin" id="password">
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-3 mx-auto text-center text_register">
							Do not have an account? <a href="<?=base_url()?>home_newgen/register"> Register now</a>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-3 mx-auto mt-3">
							<a href="<?=base_url()?>home_newgen/dashboard"><div class="btn_signin">SIGN IN</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>