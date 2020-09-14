<!DOCTYPE html>
<html>
<head>
	<title>InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body>
	<?php include '_menu.php'?>
	<div class="container-fluid project_list project_detail">
		<div class="row sign_in">
			<div class="w_1024">
				<div class="col-5 mx-auto text-center">
					<div class="row">
						<div class="col"><h3>WELCOME</h3></div>
					</div>
					<div class="row mt-3">
						<div class="col text-left">
							<label for="">Username</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col text-left">
							<label for="">Password</label>
							<input type="Password" class="form-control">
						</div>
					</div>
					<div class="row mt-5">
						<div class="col">
							<div class="btn_blue">LOGIN</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col">
							<h6>Do not have an account? <a href="">Contact to your national cooperation</a></h6>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
			<div class="row">
			<?php include '_footer.php'?>
		</div>
</body>
</html>