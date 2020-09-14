<!DOCTYPE html>
<html>
<head>
	<title>Submission | InternationalAwards</title>
	<?php $this->load->view('new_gen/_config') ?>
</head>
<body style="height: 100%;">
	<?php include '_menu.php'?>
	<div class="container-fluid sub_head">
		<div class="submission">
			<div class="row mt-5">
				<div class="col-8 mx-auto text-left h3">Contest Submission</div>
				<div class="col-8 mx-auto">
					<div class="line"></div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-8 mx-auto">
					<div class="row">
						<div class="col-5 h5">Project Information</div>
						<div class="col">
							<div class="form-row">
								<div class="col-10">
									<input type="text" class="form-control input_data" placeholder="Project Name">
								</div>
								<div class="col-10 mt-2">
									<textarea type="text" style="height: 150px;" class="form-control input_data" placeholder="Project Description"></textarea>
								</div>
								<div class="col-10 mt-2">
									<select class="form-control input_data">
										<option selected>Select Project’s Type</option>
										<option>...</option>
									</select>
								</div>
							</div>
						</div>			
					</div>
					<div class="col p-0 mt-4 mb-4 mx-auto">
						<div class="line"></div>
					</div>
					<div class="row">
						<div class="col-5 h5">Files & Documents</div>
						<div class="col">
							<div class="form-row">
								<div class="col-8">
									<input type="file" class="form-control input_data d-none" id="poster" accept="image/png,image/jpeg">
									<div class="custom-file">
										<label class="form-control" for="poster">*Poster (.JPG)</label>
									</div>
									<label class="note">File size must not exceed 3MB</label>
								</div>
								<div class="col-2">
									<label for="poster"><div class="btn_signin" style="font-size: 0.8rem;">BROWSE</div></label>
								</div>
								<!-- <div class="col-10 mt-2">
									<input type="text" class="form-control input_data" placeholder="*Paste your VDO link (YouTube)">
									<label class="note">www.youtube.com/xxx</label>
								</div> -->
								<div class="col-8 mt-2">
									<input type="file" class="form-control input_data d-none" id="documents" accept="application/pdf">
									<div class="custom-file">
										<label class="form-control" for="documents">*Optional : Documents (.PDF) </label>
									</div>
									<label class="note">File size must not exceed 3MB</label>
								</div>
								<div class="col-2 mt-2">
									<label for="documents"><div class="btn_signin" style="font-size: 0.8rem;">BROWSE</div></label>
								</div>
								<div class="col-8 mt-2">
									<input type="file" class="form-control input_data d-none" id="image" accept="image/png,image/jpeg">
									<div class="custom-file">
										<label class="form-control" for="image">*Optional : Image (.JPG) </label>
									</div>
									<label class="note">File size must not exceed 3MB</label>
								</div>
								<div class="col-2 mt-2">
									<label for="image"><div class="btn_signin" style="font-size: 0.8rem;">BROWSE</div></label>
								</div>
							</div>
						</div>			
					</div>
					<div class="col p-0 mt-4 mb-4 mx-auto">
						<div class="line"></div>
					</div>
					<div class="row">
						<div class="col-5 h5">Personal Contact</div>
						<div class="col">
							<div class="add_personal">
								<div class="form-row box_personal">
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="Firstname">
									</div>
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="Surname">
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>Select Title</option>
											<option>...</option>
										</select>
									</div>
									<div class="num_personal">1.</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="row">
						<div class="col-5">
						</div>
						<div class="col d-flex mt-3">
							<div class="btn_green btn_addmember">+ ADD MEMBER</div>
						</div>
					</div>
					<div class="col p-0 mt-4 mb-4 mx-auto">
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row mt-5 mb-5">
				<div class="col-8 mx-auto d-flex" style="justify-content: flex-end;">
					<div class="btn_submit_invention btn_green">NEXT</div>
				</div>
			</div>
		</div>
		<div class="survey" style="display: none;">
			<div class="row mt-5">
				<div class="col-7 mx-auto text-left h3">Satisfaction survey</div>
				<div class="col-7 mx-auto">Please finish this survey to complete your submission
					<div class="line mt-1"></div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-7 mx-auto">
					<div class="row">
						<div class="col-6">
							<label class="font-weight-bold" for="">1. It is a long established fact that a reader?</label>
							<select class="form-control input_data">
								<option selected>Select answer</option>
								<option>...</option>
							</select>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<label class="font-weight-bold" for="">2. It look like readable English?</label>
							<select class="form-control input_data">
								<option selected>Select answer</option>
								<option>...</option>
							</select>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<label class="font-weight-bold" for="">3. IThere are many variations of passages of Lorem?</label>
							<textarea class="form-control input_data" style="height: 200px;"></textarea>
						</div>
					</div>
					<div class="row mt-5 mb-5">
						<div class="col-3 mx-auto">
							<div class="btn_green btn_complete">COMPLETE</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	var base_url = '<?=base_url()?>';
	var num_person = 1;
	$(document).ready(function() {
		$('.btn_submit_invention').click(function(event) {
			$('.submission').fadeOut('200', function() {
				$('.survey').fadeIn('200');
			});
		});
		$('.btn_complete').click(function(event) {
			var finish_ = true;
			if(finish_){
				window.location.href = base_url+'home_newgen/finish';
			}
		});

		$('.btn_addmember').click(function(event) {
			num_person++;
			$('.add_personal').append('<div class="form-row box_personal mt-3"><div class="col-5"><input type="text" class="form-control input_data" placeholder="Firstname"></div><div class="col-5"><input type="text" class="form-control input_data" placeholder="Surname"></div><div class="col-10 mt-2"><select class="form-control input_data"><option selected>Select Title</option><option>...</option></select></div><div class="num_personal">'+num_person+'.</div></div>');
		});
	});
</script>
</html>