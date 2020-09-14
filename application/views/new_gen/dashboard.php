<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | InternationalAwards</title>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="height: 100%;">
	<?php include '_menu.php'?>
	<div class="container-fluid">
		<div class="row box_main" id="no_project" hidden>
			<div class="col">
				<div class="row">
					<div class="col text-center h3">Your invention is not found</div>
				</div>
				<div class="row mt-3">
					<div class="col text-center">
						<img src="<?=base_url()?>../image/obj/robot_newgen.png" alt="">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-3 mx-auto">
						<a href="<?=base_url()?>home_newgen/submission"><div class="btn_submit_invention btn_green">SUBMIT YOUR INVENTION</div></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row box_main mt-5" id="my_project" >
			<div class="col-8 mx-auto text-left h3">Your projects (1)</div>
			<div class="col-8 mx-auto">
				<div class="line"></div>
			</div>
			<div class="col-8 mx-auto p-2 mt-3" style="border: 1px solid #333;">
				<div class="row">
					<div class="col-4 project_image">
						<img id="img_project" src="<?=base_url()?>../image/obj/project_img.png" alt="">
					</div>
					<div class="col">
						<div class="row mt-3">
							<div class="col text-left h5">Project Details</div>
						</div>
						<div class="row">
							<div class="col-12">Name: <label id="project_name">Pet Robota 101</label></div>
							<div class="col-12" id="project_detail"><p>Lorem Ipsum is simply dummy text of the printing and 
								typesetting industry. Lorem Ipsum has been the industry’s 
								standard dummy text ever since the 1500s, when an 
								unknown printer took a galley of type and scrambled it to 
							make a type specimen book.</p>
							</div>
							<div class="col-12">Type : <label id="project_type">Innovation Lead</label></div>
							<div class="col-12 mx-auto mt-3">
								<div class="line"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col text-left h5">Files & Documents</div>
							<div class="col-12">VDO : <label id="project_link_vdo">https://youtu.be/plWvkCAGEWQ</label></div>
							<div class="col-12 mx-auto mt-3">
								<div class="line"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col text-left h5">Personal Contact</div>
						</div>
						<div class="row">
							<div class="col-12">1. <label id="name">Name Surname</label></div>
							<div class="col-12">2. <label id="name">Name Surname</label></div>
							<div class="col-12">3. <label id="name">Name Surname</label></div>
						</div>
						<div class="row">
							<div class="col text-right">
								<button class="btn btn_green">EDIT</button>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>