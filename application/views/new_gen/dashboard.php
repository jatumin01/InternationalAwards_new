<!DOCTYPE html>
<html>
<head>
	<title>SUBMISSION | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body style="height: 100%;">
	<?php include '_menu.php'?>
	<div class="container-fluid your_project">
		<div class="row">
			<div class="col p-0">
			</div>
		</div>
		<div class="w_1024">
			<div class="row box_main" id="no_project" hidden>
				<div class="col">
					<div class="row">
						<div class="col text-center h3"><b>Your invention is not found</b></div>
					</div>
					<div class="row mt-3">
						<div class="col text-center">
							<img src="<?=base_url()?>../image/obj/robot.png" alt="">
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-3 mx-auto">
							<a href="<?=base_url()?>home/submission"><div class="btn_submit_invention btn_green">SUBMIT YOUR INVENTION</div></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row box_main mt-5 mb-5" id="my_project">
				<div class="col-12 mx-auto text-left h3"><b>ผลงานของฉัน</b></div>
				<div class="col-12 mx-auto">
					<div class="line"></div>
				</div>
				<div class="col-12 text-right pt-3 pb-0">
						<span>แก้ไขครั้งล่าสุดเมื่อ 19 พฤศจิกายน 2563 16:34น.</span>
				</div>
				<div class="col-12 mx-auto p-2 mt-0 mb-5" style="border: 1px solid #333;">
					<div class="row">
						<div class="col-4 project_image">
							<img id="img_project" src="<?=base_url()?>../image/obj/project_img.png" alt="">
						</div>
						<div class="col">
							<div class="row mt-3">
								<div class="col text-left h5"><b>ข้อมูลส่วนตัว</b></div>
							</div>
							<div class="row">
								<div class="col-3">ชื่อ - นามสกุล</div><div class="col-9">Mr. Tomson Parker</div>
								<div class="col-3">อีเมล</div><div class="col-9">Tomtoms@gmail.com</div>
								<div class="col-12 mx-auto mt-3">
									<div class="line"></div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col text-left h5"><b>ผลงาน</b></div>
							</div>
							<div class="row">
								<div class="col-3">รหัสผลงาน</div><div class="col-9">1102235365212</div>
								<div class="col-3">ชื่อผลงาน</div><div class="col-9">Pet Robota 101</div>
								<div class="col-3">กลุ่ม</div><div class="col-9">Modern Agriculture/ Horticulture/ Forestry and 
								Gardening</div>
								<div class="col-12 mt-2" id="project_detail"><p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียง
									พิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 
									16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำ
								หนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ</p>
							</div>
							<div class="col-12">Type : <label id="project_type">Innovation Lead</label></div>
							<div class="col-12 mx-auto mt-3">
								<div class="line"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 text-left h5"><b>เอกสารและรูปภาพ</b></div>
							<div class="col-3">VDO :</div><div class="col-9">https://youtu.be/plWvkCAGEWQ</div>
							<div class="col-3">รูปภาพ</div><div class="col-9">2 รูป</div>
						</div>
						<div class="row mt-4">
							<div class="col text-left">
								<button class="btn btn_green">EDIT</button>
								<text style="font-size: 0.9rem;opacity: 0.8;">Last modified: 5 September 2020 09:40</text>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '_footer.php'?>
</body>
</html>