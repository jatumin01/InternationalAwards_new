<!DOCTYPE html>
<html>
<head>
	<title>Register | InternationalAwards</title>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="background-position: bottom; height: 100%;background-image: url('<?=base_url()?>../image/bg_new_gen.png');">
	<?php include '_menu.php'?>
	<div class="row box_main m-5">
		<div class="col">
			<div class="row">
				<div class="col-12 font-weight-bold h4 text-center">JOIN NOW</div>
				<div class="col">
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="username">EMAIL</label>
							<input type="text" class="form-control input_singin" id="email">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="password">PASSWORD</label>
							<input type="password" class="form-control input_singin input_eng" id="password">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="password">VERIFIED PASSWORD</label>
							<input type="password" class="form-control input_singin input_eng" id="ver_password">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="password">FIRSTNAME</label>
							<input type="text" class="form-control input_singin input_eng" id="firstname">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="surname">SURNAME</label>
							<input type="text" class="form-control input_singin input_eng" id="surname">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="tel">TELEPHONE NUMBER</label>
							<input type="text" class="form-control input_singin input_eng" id="tel">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="institute_name">INSTITUTE NAME</label>
							<input type="text" class="form-control input_singin input_eng" id="institute_name">
						</div>
					</div>
					<div class="row">
						<div class="col-3 mx-auto mt-3 d-block">
							<label class="font-weight-bold" for="institute_level">INSTITUTE LEVEL</label>
							<select name="" id="institute_level" class="form-control input_singin">
								<option value="" selected>Select Institute Level</option>
							</select>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-3 mx-auto text-center text_register">
							Already have an account? <a href="<?=base_url()?>home_newgen/signin"> Sign in</a>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-3 mx-auto mt-3">
							<div class="btn_signin" onclick="register()">REGISTER</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
<script>
	$(".input_eng").keypress(function(event){
		var ew = event.which;
		if(ew == 32)
			return true;
		if(48 <= ew && ew <= 57)
			return true;
		if(65 <= ew && ew <= 90)
			return true;
		if(97 <= ew && ew <= 122)
			return true;
		return false;
	});
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	function register() {
		if(!isEmail($('#email').val())){
			$('#email').addClass('border_red');
		}
	}
</script>
</html>