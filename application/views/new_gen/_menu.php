<?php if(isset($first_page)){ ?>
	<!-- <div class="logo_bar">
		<img src="<?=base_url()?>../image/obj/logo_main.png" alt="">
	</div> -->
<?php } ?>
<?php if(!isset($login_true)){ ?>
	<div class="bar_menu">
		<div class="btn_project">หน้าแรก
			<div class="line"></div>
		</div>
		<div class="btn_project">เกี่ยวกับ
			<div class="line"></div>
		</div>
		<div class="btn_project">ติดต่อสอบถาม
			<div class="line"></div>
		</div>
	</div>
<?php }else{ ?>
	<div class="bar_menu">
		<div class="btn_project">ส่งผลงาน
			<div class="line"></div>
		</div>
		<div class="btn_project">บัญชี
			<div class="line"></div>
		</div>
		<div class="btn_project">ออกจากระบบ
			<div class="line"></div>
		</div>
		<!-- <div class="btn_blue btn_signin">ออกจากระบบ</div> -->
	</div>
	<?php } ?>