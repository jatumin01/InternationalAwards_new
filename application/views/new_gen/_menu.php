
<div class="container-fluid header">
	<div class="row">
		<div class="col">
			<div class="logo">
				<a href="<?=base_url()?>home_newgen"><img src="<?=base_url()?>../image/icon/logo_newgen.png" alt="Logo"></a>
			</div>
		</div>
		<div class="col text-right menu_bar">
			<?php if(isset($btn_sign)){ ?>
				<a href="<?=base_url()?>home_newgen/register"><div class="menu_text font-weight-bold">REGISTER
					<div class="line"></div>
				</div></a>
				<a href="<?=base_url()?>home_newgen/sign_in"><div class="btn_signin">SIGN IN</div></a>
			<?php } ?>

			<?php if(isset($login_true)){ ?>
				<div class="menu_text dashboard active">DASHBOARD
					<div class="line"></div>
				</div>
				<!-- <div class="menu_text inbox">INBOX
					<div class="line"></div>
				</div> -->
				<a href="<?=base_url()?>home_newgen/sign_in"><div class="btn_signin">SIGN OUT</div></a>

			<?php } ?>
		</div>
	</div>
</div>