<!DOCTYPE html>
<html>
<head>
	<title>InternationalAwards</title>
	<?php $this->load->view('_config') ?>
</head>
<body>
	<div class="container-fluid project_list project_detail">
		<div class="row">
			<div class="col p-0">
				<div class="banner">
					<?php include '_menu.php'?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-7 mx-auto text-left mt-5">
				<h4><b>Agricultural technology : United Kingdom</b></h4>
				<div class="line"></div>
			</div>
		</div>
		<div class="row project_detail_data">
			<div class="col-7 mx-auto mt-5">
				<div class="row">
					<div class="col-4">
						<img src="<?=base_url()?>../image/obj/19397.png" alt="">
					</div>
					<div class="col-8">
						<p id="name">Mark Smitt</p>
						<div class="line mb-3"></div>
						<p id="country">The United Kingdom</p>
						<h3 id="project_name"><b>Name of Invention</b></h3>
						<p>Agricultural technology</p>
						<p id="project_detail">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
							the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of 
							type and scrambled it to make a type specimen book. It has survived not only five centuries, but also 
							the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
							with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
							desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col">
						<iframe style="overflow:hidden;height:60vh;width:100%" height="100%" width="100%" src="https://www.youtube.com/embed/6nM1lwBB9lY?autoplay=1controls=0&amp;start=35" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row mt-3 comment">
					<div class="col">
						<h4><b>Comments</b></h4>
						<input type="text" class="form-control" placeholder="Name-Surname">
						<textarea class="form-control mt-2" style="height: 100px;" placeholder="Leave your comment here.."></textarea>
						<input type="text" class="form-control mt-2" placeholder="Email Address">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col text-right d-flex justify-content-end">
						<text class="mt-1 mr-3">Your comment will appear after it has verified by admin</text>
						<div class="btn_blue">SEND</div>
					</div>
				</div>
				<div class="line mt-5"></div>
				<div class="row mt-1">
					<div class="col">
						<div class="img_comment">
							<img src="<?=base_url()?>../image/obj/comment.png" alt="">
						</div>
						<div class="txt_comment ml-2">
							1 Comments
						</div>
					</div>
				</div>
			</div>

		</div>
		<?php include '_footer.php'?>
	</div>
</body>
</html>