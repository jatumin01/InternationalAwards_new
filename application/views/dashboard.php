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
				<div class="banner">
					<?php include '_menu.php'?>
				</div>
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
				<div class="col-12 mx-auto text-left h3"><b>Your Projects</b></div>
				<div class="col-12 mx-auto">
					<div class="line"></div>
				</div>
				<div class="col-12 mx-auto p-2 mt-3 mb-5" style="border: 1px solid #333;">
					<div class="row">
						<div class="col-4 project_image">
							<img id="img_project" src="<?=base_url()?>../image/obj/project_img.png" alt="">
						</div>
						<div class="col">
							<div class="row mt-3">
								<div class="col text-left h5"><b>Personal Contact</b></div>
							</div>
							<div class="row">
								<div class="col-3">Title :</div><div class="col-9">Mr. Tomson Parker</div>
								<div class="col-3">Email :</div><div class="col-9">Tomtoms@gmail.com</div>
								<div class="col-12 mx-auto mt-3">
									<div class="line"></div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col text-left h5"><b>Project Details</b></div>
							</div>
							<div class="row">
								<div class="col-3">Project ID :</div><div class="col-9">1102235365212</div>
								<div class="col-3">Name :</div><div class="col-9">Pet Robota 101</div>
								<div class="col-3">Group :</div><div class="col-9">Modern Agriculture/ Horticulture/ Forestry and 
								Gardening</div>
								<div class="col-12 mt-2" id="project_detail"><p>Lorem Ipsum is simply dummy text of the printing and 
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
							<div class="col-12 text-left h5"><b>Files & Documents</b></div>
							<div class="col-3">VDO :</div><div class="col-9">https://youtu.be/plWvkCAGEWQ</div>
							<div class="col-3">Patent :</div><div class="col-9">Not applied yet</div>
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