<?php if(isset($first_page)){ ?>
	<div class="logo_bar">
		<img src="<?=base_url()?>../image/obj/logo_main.png" alt="">
	</div>
<?php } ?>
<?php if(!isset($login_true)){ ?>
	<div class="bar_menu">
		<div class="btn_project">PROJECT
			<div class="line"></div>
		</div>
		<a href="<?=base_url()?>home/sign_in"><div class="btn_blue btn_signin">SIGN IN</div></a>
	</div>
<?php }else if(isset($director)){ ?>
	<div class="bar_menu">
		<div class="btn_project">SCORING
			<div class="line"></div>
		</div>
		<div class="btn_project">INBOX
			<div class="line"></div>
		</div>
		<a href="<?=base_url()?>home/account"><div class="btn_project">ACCOUNT
			<div class="line"></div>
		</div></a>
		<div class="btn_blue btn_signin">SIGN OUT</div>
	</div>
<?php }else{ ?>
	<div class="bar_menu">
		<div class="btn_project">SUBMISSION
			<div class="line"></div>
		</div>
		<div class="btn_project">INBOX
			<div class="line"></div>
		</div>
		<a href="<?=base_url()?>home/account"><div class="btn_project">ACCOUNT
			<div class="line"></div>
		</div></a>
		<div class="btn_blue btn_signin">SIGN OUT</div>
	</div>
	<?php } ?>