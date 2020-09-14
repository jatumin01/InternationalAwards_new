<!DOCTYPE html>
<html>
<head>
	<title>SCORING | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body style="height: 100%;">
	<div class="container-fluid p-0 sub_head submission_head">
		<div class="row m-0">
			<div class="col p-0">
				<div class="banner">
					<?php include '_menu.php'?>
				</div>
			</div>
		</div>
		<div class="scoring_project">
			<div class="w_1024">
				<div class="row box_main mt-5 mb-5" id="my_project">
					<div class="col-12 mx-auto p-2 mt-3 mb-5" style="border: 1px solid #333;">
						<div class="row">
							<div class="col-4 project_image">
								<img id="img_project" src="<?=base_url()?>../image/obj/project_img.png" alt="">
								<div class="btn_preview">
									<button onclick="preview_img('preview')">CLICK TO PREVIEW</button>
								</div>
							</div>
							<div class="col">
								<div class="row mt-3">
									<div class="col text-left h5"><b>Personal Contact</b></div>
								</div>
								<div class="row">
									<div class="col-3">Title :</div><div class="col-9">Mr. Tomson Parker</div>
									<div class="col-3">Email :</div><div class="col-9">Tomtoms@gmail.com</div>
									<div class="col-3">Coordinator :</div><div class="col-9">Name</div>
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
								<div class="col-12 mt-2">Type : <label id="project_type">Innovation Lead</label></div>
								<div class="col-12 mx-auto mt-3">
									<div class="line"></div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-left h5"><b>Files & Documents</b></div>
								<div class="col-3">VDO :</div><div class="col-9"><a target="_blank" href="https://youtu.be/plWvkCAGEWQ">https://youtu.be/plWvkCAGEWQ</a></div>
								<div class="col-3">Patent :</div><div class="col-9">Not applied yet</div>
							</div>
							<div class="row mt-4 mb-3">
								<div class="col d-flex justify-content-between">
									<button class="btn m-0 btn_green" onclick="preview_img('giving_score')">GIVING SCORE</button>
									<button class="btn m-0 btn_green" onclick="preview_img('inbox')">INBOX</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg_black preview" style="display: none;">
			<div class="box_preview">
				<div class="box_image_slid">
					<img src="<?=base_url()?>../image/obj/deparment.png" alt="">
				</div>
				<div class="box_image_slid">
					<img src="<?=base_url()?>../image/obj/project_img.png" alt="">
				</div>
				<div class="box_image_slid">
					<img src="<?=base_url()?>../image/obj/project_img.png" alt="">
				</div>
			</div>
			<div class="close_preview" data-type="preview">
				<img src="<?=base_url()?>../image/icon/close.png" alt="">
			</div>
		</div>
		<div class="bg_black giving_score" style="display: none;">
			<div class="survey">
				<div class="row mt-3">
					<div class="col-11 mx-auto text-left h3"><h2><b>Scoring: Automatic plants</b></h2></div>
					<div class="col-11 mx-auto">
						<div class="line mt-1" style="border-bottom: 2px solid #ccc;"></div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-11 mx-auto">
						<div class="row">
							<div class="col-6">
								<label class="font-weight-bold" for="">1. Score of creativity?</label>
								<select class="form-control input_data">
									<option selected>Select answer</option>
									<option>...</option>
								</select>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-6">
								<label class="font-weight-bold" for="">2. Score of innovation?</label>
								<select class="form-control input_data">
									<option selected>Select answer</option>
									<option>...</option>
								</select>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<label class="font-weight-bold" for="">3. Give some feedbacks</label>
								<textarea class="form-control input_data" style="height: 200px;"></textarea>
							</div>
						</div>
						<div class="row mt-5 mb-5">
							<div class="col-3 mx-auto">
								<div class="btn_green btn_complete">SAVE</div>
							</div>
						</div>
					</div>
				</div>
				<div class="close_" data-type="giving_score">
					<img src="<?=base_url()?>../image/icon/close_black.png" alt="">
				</div>
			</div>
		</div>
		<div class="bg_black inbox" style="display: none;">
			<div class="survey">
				<div class="row mt-3">
					<div class="col-11 mx-auto text-left h3"><h2><b>Inbox</b></h2></div>
					<div class="col-11 mx-auto">
						<div class="line mt-1" style="border-bottom: 2px solid #ccc;"></div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-11 mx-auto">
						<div class="row mt-3">
							<div class="col-12">
								<label class="font-weight-bold" for="">Inbox :</label>
								<textarea class="form-control input_data" style="height: 200px;"></textarea>
							</div>
						</div>
						<div class="row mt-5 mb-5">
							<div class="col-3 mx-auto">
								<div class="btn_green btn_complete">SEND</div>
							</div>
						</div>
					</div>
				</div>
				<div class="close_" data-type="inbox">
					<img src="<?=base_url()?>../image/icon/close_black.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<?php include '_footer.php'?>
</body>

<script>
	var base_url = '<?=base_url()?>';
	$(document).ready(function() {
		$('.box_preview').slick({
			dots: true,
			infinite: true
		});
	});
	
	function preview_img(type) {
		$('.'+type).fadeIn('fast');
	}
	$('.close_preview').click(function(event) {
		$('.bg_black').fadeOut('fast');
	});
	$('.close_').click(function(event) {
		var type = $(this).data('type');
		$('.'+type).fadeOut('fast');
	});
</script>
</html>