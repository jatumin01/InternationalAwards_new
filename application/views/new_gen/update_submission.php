<!DOCTYPE html>
<html>
<head>
	<title>SUBMISSION | InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body style="height: 100%;">
	<?php include '_menu.php'?>
	<div class="container-fluid sub_head p-0 submission_head">
		<div class="submission">
			<div class="w_1024">
				<div class="row mt-5">
					<div class="col-12 mx-auto text-left h3"><b>ส่งผลงานเข้าประกวด</b></div>
					<div class="col-12 mx-auto">
						<div class="line"></div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 mx-auto">
						<div class="row">
							<div class="col-5 h5"><b>ข้อมูลส่วนตัว</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="ชื่อจริง*">
									</div>
									<div class="col-5">
										<input type="text" class="form-control input_data" placeholder="นามสกุล*">
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>คำนำหน้าชื่อ*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="หมายเลขโทรศัพท์*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="อีเมล*">
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>ข้อมูลผลงานสิ่งประดิษฐ์</b></div>
							<div class="col">
								<div class="form-row">
									<div class="col-10">
										<input type="text" class="form-control input_data" placeholder="ชื่อผลงานภาษาไทย*" data-input_name_th="name_invention" maxlength="90">
										<div class="text-right count_character"><span class="count_name_invention">0</span>/90 ตัวอักษร</div>
									</div>
									<div class="col-10">
										<input type="text" class="form-control input_data" placeholder="ชื่อผลงานภาษาอังกฤษ*" data-input_name_en="name_invention" maxlength="90">
										<div class="text-right count_character"><span class="count_name_invention">0</span>/90 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 150px;" class="form-control input_data" data-input_description="description_invention" maxlength="400" placeholder="ที่มาของแนวคิดในการประดิษฐ์*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="400" placeholder="วัตถุประสงค์ในการประดิษฐ์*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="400" placeholder="คุณสมบัติ จุดเด่น ของผลงานประดิษฐ์คิดค้น*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="400" placeholder="วัสดุและอุปกรณ์ที่ใช้ในการประดิษฐ์คิดค้น*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="400" placeholder="ประโยชน์และคุณค่าของผลงาน*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/400 ตัวอักษร</div>
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>ความโดดเด่นของผลงาน*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>สถานภาพทางสิทธิบัตรของสิ่งประดิษฐ์*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="งบประมาณในการประดิษฐ์(บาท)*" data-input_name_en="name_invention" maxlength="90">
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="800" placeholder="สรุปข้อมูลเกี่ยวกับผลงานประดิษฐ์คิดค้นโดยย่อ ความสำคัญ/ความโดดเด่น/การนำผลงานไปใช้ประโยชน์*"></textarea>
										<div class="row">
											<div class="col-10 remark">
												<span>**(โปรดระบุรายละเอียดให้ครบถ้วน โดยไม่เปิดเผยสาระสำคัญในการประดิษฐ์คิดค้น <br>เพื่อการเผยแพร่แพร่ประชาสัมพันธ์ต่อสาธารณชนผ่านสื่อช่องทางต่าง ๆ)</span>
											</div>
											<div class="col-2 text-right count_character">
												<span class="count_description_invention">0</span>/800 ตัวอักษร
											</div>
										</div>


									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5">
								<b>เอกสารและรูปภาพ<br></b>
								<b class="count_character mt-0">จำกัดขนาดต่อไฟล์ไม่เกิน 3 MB</b>

							</div>
							<div class="col">
								<div class="form-row">
									<div class="col-8">
										<input type="hidden" id="poster_path">
										<input type="file" class="form-control input_data d-none" id="poster" accept="image/png,image/jpeg" onchange="uploadFile('poster','image')">
										<div class="custom-file">
											<label class="form-control" id="poster_name" for="poster">รูปภาพโปสเตอร์* (.JPG หรือ .PNG)</label>
										</div>
									</div>
									<div class="col-2">
										<label for="poster"><div class="btn_blue">ค้นหา</div></label>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="*Youtube Link*">
										<label class="note">กรุณาอัปโหลดวีดีโอของคุณผ่าน Youtube และตั้งค่าความเป็นสาธารณะเพื่อให้กรรมการสามารถเข้าชมได้</label>
									</div>
									<div class="col-8 mt-2">
										<input type="hidden" id="image_path">
										<input type="file" class="form-control input_data d-none" id="image" accept="image/png,image/jpeg" onchange="uploadFile('image','image')" >
										<div class="custom-file">
											<label class="form-control" id="image_name" for="image"> รูปภาพผลงานสิ่งประดิษฐ์ * (.JPG หรือ .PNG)</label>
										</div>
									</div>
									<div class="col-2 mt-2">
										<label for="image"><div class="btn_blue">ค้นหา</div></label>
									</div>
									<btn class="col-3 btn btn_blue" >เพิ่มรูปภาพ</btn>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>รายชื่อสมาชิก</b>
								<div class="col-8 remark px-0">
									<span>รายชื่อทั้งหมดจะถูกพิมพ์อยู่บนใบประกาศนียบัตร<br>
										ในกรณีที่ผลงานของคุณได้รับรางวัล กรุณาพิจารณา<br>
									ความถูกต้องของรายชื่อทั้งหมด</span>
								</div>
							</div>
							<div class="col">
								<div class="form-row">
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>คำนำหน้าชื่อ</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="ชื่อจริง*">
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="นามสกุล*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="หมายเลขโทรศัพท์*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="อีเมล*">
									</div>
									<btn class="col-3 mt-2 btn btn_blue" >เพิ่มรายชื่อ</btn>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>อาจารย์ที่ปรึกษาหลัก</b>
								<div class="col-8 note px-0">
									<span>(ผู้รับผิดชอบดูแลโครงการทั้งหมด)</span>
								</div>
							</div>
							<div class="col">
								<div class="form-row">
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>คำนำหน้าชื่อ*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="ชื่อจริง*">
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="นามสกุล*">
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>ตำแหน่งทางวิชาการ*</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="หมายเลขโทรศัพท์*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="อีเมล*">
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row">
							<div class="col-5 h5"><b>อาจารย์ที่ปรึกษาร่วม (ถ้ามี)</b>
							</div>
							<div class="col">
								<div class="form-row">
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>คำนำหน้าชื่อ</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="ชื่อจริง">
									</div>
									<div class="col-4 mt-2">
										<input type="text" class="form-control input_data" placeholder="นามสกุล">
									</div>
									<div class="col-10 mt-2">
										<select class="form-control input_data">
											<option selected>ตำแหน่งทางวิชาการ</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="หมายเลขโทรศัพท์">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="อีเมล">
									</div>
									<btn class="col-3 mt-2 btn btn_blue" >เพิ่มรายชื่อ</btn>
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-5 h5"><b>สถาบันการศึกษาที่สังกัด</b>
							</div>
							<div class="col">
								<div class="form-row">
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="ชื่อสถาบันการศึกษา*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="หมายเลขโทรศัพท์*">
									</div>
									<div class="col-10 mt-2">
										<input type="text" class="form-control input_data" placeholder="โทรสาร">
									</div>
									<div class="col-10 mt-2">
										<textarea type="text" style="height: 100px;" class="form-control input_data" maxlength="200" placeholder="ที่อยู่*"></textarea>
										<div class="text-right count_character"><span class="count_description_invention">0</span>/200 ตัวอักษร</div>
									</div>
								</div>
							</div>			
						</div>
						<div class="col p-0 mt-4 mb-4 mx-auto">
							<div class="line"></div>
						</div>
						<div class="row mb-5">
							<div class="col-5"></div>
								<div class="col-4">
									<div class="btn_submit_invention btn_green btn_blue">บันทึก</div>
								</div>


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
	});
	var num_inventors = 1;
	$('.btn_addmore').click(function(event) {
		num_inventors++;
		$('.box_add_inventors').append('<div class="col-5 mt-2"><input type="text" class="form-control input_data" id="firstname_'+num_inventors+'" placeholder="Firstname*"></div><div class="col-5 mt-2"><input type="text" class="form-control input_data" id="surname_'+num_inventors+'" placeholder="Surname*"></div>');
	});

	$('.input_data').keyup(function(event) {
		var num = $(this).val().length;
		var ch_name = $(this).data('input_name');
		$('.count_'+ch_name).html(num);
	});
</script>
</html>