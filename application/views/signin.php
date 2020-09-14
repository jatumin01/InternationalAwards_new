<!DOCTYPE html>
<html>
<head>
	<title>Login | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body>
	<div class="container-fluid project_list project_detail">
		<div class="row">
			<div class="col p-0">
				<div class="banner"></div>
			</div>
		</div>
		<div class="row sign_in">
			<div class="w_1024">
				<div class="col-5 mx-auto text-center">
					<div class="row">
						<div class="col"><h3>WELCOME</h3></div>
					</div>
					<div class="row mt-3">
						<div class="col text-left">
							<label for="">Username</label>
							<input type="text" class="form-control" id="username">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col text-left">
							<label for="">Password</label>
							<input type="Password" class="form-control" id="password">
						</div>
					</div>
					<div class="row mt-5">
						<div class="col">
							<div class="btn_blue btn_login">LOGIN</div>
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
		<?php include '_footer.php'?>
	</div>
</body>
</html>
<script>
	var base_url = '<?=base_url()?>';
	$('.btn_login').click(function(event) {
		if($('#username').val() != '' && $('#password').val()!=''){
			$.post(base_url+'user/check_login', {
				user: $('#username').val(),
				pass: $('#password').val()
			}, function(data, textStatus, xhr) {
				if(data!=0){
					swal({
						title :"Login success !",
						icon: "success",
						button: false,
						timer : 2000
					}).then((value) => {
						window.location.href = base_url+'home/dashboard';
					});
				}else{
					swal({
						title :"Login fail !",
						icon: "error",
						button: false,
						timer : 2000
					})
				}
				
			});
		}else{
			swal({
				title :"Please fill this out !",
				icon: "warning",
				button: false,
				timer : 2000
			})
		}
	});
</script>