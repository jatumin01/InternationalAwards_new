<!DOCTYPE html>
<html>
<head>
	<title>SUBMISSION | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body style="height: 100%;">
	<div class="container-fluid sub_head p-0 submission_head">
		<div class="row m-0">
			<div class="col p-0">
				<div class="banner">
					<?php include '_menu.php'?>
				</div>
			</div>
		</div>
		<div class="submission">
			<div class="w_1024">
				<div class="row mt-5">
					<div class="col-12 mx-auto text-left h3"><b>Contest Submission</b></div>
					<div class="col-12 mx-auto">
						<div class="line"></div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 mx-auto">
						<div class="row">
							<div class="col-5 h5"><b>Country</b></div>
							<div class="col">
								<div class="form-row">
									United Kingdom
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Department</b></div>
							<div class="col">
								<div class="form-row">
									Association of British Inventors And Innovators
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-12">
								<div class="line"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Personal Contact</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="Firstname*">
									</div>
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="Surname*">
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>Select Title*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="Position*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="Phone Number*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="Email Address*">
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" maxlength="150" style="height: 150px;" class="form-control input_data" data-input_name="address" placeholder="Address*"></textarea>
										<div class="text-right count_character"><span class="count_address">0</span>/150 Characters</div>
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Inventors</b>
								<p style="font-size: 0.9rem;">Maximum 10 person</p>
								<p style="font-size: 0.8rem; color: red;">Please give an in-depth check on this issue <br>
									because the names will be printed on the <br>
									official exhibition catalogue and certificate <br>
								in case this invention got the award</p>
							</div>
							<div class="col">
								<div class="box_add_inventors">
									<div class="form-row">
										<div class="col-5">
											<input type="text" class="form-control input_data firstname_" placeholder="Firstname*">
										</div>
										<div class="col-5 box_surname">
											<input type="text" class="form-control input_data surname_" placeholder="Surname*">
										</div>
									</div>
								</div>
								
								<div class="row mt-3">
									<div class="col">
										<button class="btn_blue btn_addmore">+ add more</button>
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Invention Information</b></div>s
							<div class="col">
								<div class="form-row">
									<div class="col-10">
										<input type="text" class="form-control input_data" placeholder="Name of Invention*" data-input_name="name_invention" maxlength="90">
										<div class="text-right count_character"><span class="count_name_invention">0</span>/90 Characters</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 150px;" class="form-control input_data" data-input_name="description_invention" maxlength="400" placeholder="Description of the invention*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 Characters</div>
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>Select Invention and Innovation Categories*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>Select Competition Categories*</option>
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
							<div class="col-5 h5"><b>Files & Documents</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-8">
										<input type="hidden" id="poster_path">
										<input type="file" class="form-control input_data d-none" id="poster" accept="image/png,image/jpeg" onchange="uploadFile('poster','image')">
										<div class="custom-file">
											<label class="form-control" id="poster_name" for="poster">*Poster (.JPG or .PNG)*</label>
										</div>
										<label class="note">File size must not exceed 3MB, in portrait paper </label>
									</div>
									<div class="col-2">
										<label for="poster"><div class="btn_blue">BROWSE</div></label>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="*Paste your VDO link (YouTube)*">
										<label class="note">Please upload on video platforms and provide the URL link and also set video to public</label>
									</div>
									<div class="col-8 mt-2">
										<input type="hidden" id="image_path">
										<input type="file" class="form-control input_data d-none" id="image" accept="image/png,image/jpeg" onchange="uploadFile('image','image')" >
										<div class="custom-file">
											<label class="form-control" id="image_name" for="image">*Image (.JPG or .PNG)* </label>
										</div>
										<label class="note">File size must not exceed 3MB</label>
									</div>
									<div class="col-2 mt-2">
										<label for="image"><div class="btn_blue">BROWSE</div></label>
									</div>
									<div class="col-8 mt-2">
										<input type="hidden" id="o_image_1_path">
										<input type="file" class="form-control input_data d-none" id="o_image_1" accept="image/png,image/jpeg" onchange="uploadFile('o_image_1','image')">
										<div class="custom-file">
											<label class="form-control" id="o_image_1_name" for="o_image_1">*Optional : Image (.JPG or .PNG) </label>
										</div>
										<label class="note">File size must not exceed 3MB</label>
									</div>
									<div class="col-2 mt-2">
										<label for="o_image_1"><div class="btn_blue">BROWSE</div></label>
									</div>
									<div class="col-8 mt-2">
										<input type="hidden" id="o_image_2_path">
										<input type="file" class="form-control input_data d-none" id="o_image_2" accept="image/png,image/jpeg" onchange="uploadFile('o_image_2','image')">
										<div class="custom-file">
											<label class="form-control" id="o_image_2_name" for="o_image_2">*Optional : Image (.JPG or .PNG) </label>
										</div>
										<label class="note">File size must not exceed 3MB</label>
									</div>
									<div class="col-2 mt-2">
										<label for="o_image_2"><div class="btn_blue">BROWSE</div></label>
									</div>
									<div class="col-8 mt-2">
										<input type="hidden" id="documents_path">
										<input type="file" class="form-control input_data d-none" id="documents" accept="application/pdf" onchange="uploadFile('documents','file')">
										<div class="custom-file">
											<label class="form-control" id="documents_name" for="documents">*Optional : Other (.PDF)  </label>
										</div>
										<label class="note">File size must not exceed 3MB</label>
									</div>
									<div class="col-2 mt-2">
										<label for="documents"><div class="btn_blue">BROWSE</div></label>
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>Patent Application*</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-8 mt-2">
										<div class="form-check">
											<input class="form-check-input checkbox_" type="radio" name="patent_app" value="granted" id="granted">
											<label class="form-check-label ml-2" for="granted">
												Granted (Please provide a proof)
											</label>
										</div>
									</div>
									<div class="col-8 mt-2 file_granted">
										<input type="hidden" id="patent_documents_path">
										<input type="file" class="form-control input_data d-none" id="patent_documents" accept="application/pdf" onchange="uploadFile('patent_documents','file')">
										<div class="custom-file">
											<label class="form-control" id="patent_documents_name" for="patent_documents">*Patent Documents (.PDF)  </label>
										</div>
										<label class="note">File size must not exceed 3MB</label>
									</div>
									<div class="col-2 mt-2 file_granted">
										<label for="patent_documents"><div class="btn_blue">BROWSE</div></label>
									</div>
									<div class="col-8 mt-2">
										<div class="form-check">
											<input class="form-check-input checkbox_" type="radio" name="patent_app" value="patent" id="patent">
											<label class="form-check-label ml-2" for="patent">
												Patent pending
											</label>
										</div>
									</div>
									<div class="col-8 mt-2">
										<div class="form-check">
											<input class="form-check-input checkbox_" type="radio" name="patent_app" value="not_applied" id="not_applied">
											<label class="form-check-label ml-2" for="not_applied">
												Not applied yet
											</label>
										</div>
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row mb-5">
							<div class="col-5 h5"></div>
							<div class="col">
								<div class="form-row">
									<div class="btn_submit_invention btn_green btn_blue">SAVE</div>
								</div>
								<div class="row mt-2">
									<div class="col ">
										<div class="note_save">
											After you sent this form, you will able to edit the information of your submission 
											until 4.00pm(By the time in Thailand) 30 October 2020.
										</div>

									</div>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg_black" style="display: none;">
			<div class="survey">
				<div class="row mt-5">
					<div class="col-11 mx-auto text-left h3">Satisfaction survey</div>
					<div class="col-11 mx-auto">Please finish this survey to complete your submission
						<div class="line mt-1"></div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-11 mx-auto">
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
		

		<?php include '_footer.php'?>
	</div>
</body>

<script>
	var base_url = '<?=base_url()?>';
	$(document).ready(function() {
		$('.btn_submit_invention').click(function(event) {
			$('.bg_black').fadeIn('200');
		});
		$('.btn_complete').click(function(event) {
			var finish_ = true;
			if(finish_){
				//window.location.href = base_url+'home/finish';
			}
		});
		$('.file_granted').hide();
	});
	var num_inventors = 1;
	$('.btn_addmore').click(function(event) {
		if(num_inventors<10){
			num_inventors++;
			$('.box_add_inventors').append('<div class="form-row inventors_'+num_inventors+'"><div class="col-5 mt-2"><input type="text" class="form-control input_data firstname_" placeholder="Firstname*"></div><div class="col-5 mt-2 box_surname"><input type="text" class="form-control input_data surname_" placeholder="Surname*"><div class="close_addmore" onclick="remove_inventors('+num_inventors+')"><img src="<?=base_url()?>../image/icon/close_O.png" alt=""></div></div></div>');
		}
	});

	$('.input_data').keyup(function(event) {
		var num = $(this).val().length;
		var ch_name = $(this).data('input_name');
		$('.count_'+ch_name).html(num);
	});
	$("input[name='patent_app']").change(function(event) {
		if($(this).val() == 'granted'){
			$('.file_granted').fadeIn('fast');
		}else{
			$('.file_granted').fadeOut('fast');
		}
	});
	function remove_inventors(num) {
		num_inventors--;
		$('.inventors_'+num).remove();
	}
	function check_inventors() {
		var full_name = [];
		$('.firstname_').each(function(index, el) {
			full_name.push($(this).val());
		});
		$('.surname_').each(function(index, el) {
			full_name[index]+= ' '+$(this).val();
		});
		console.log(full_name);
	}
</script>
</html>