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
		<div class="scoring">
			<div class="w_1024">
				<div class="row mt-5">
					<div class="col-12 mx-auto text-left h3"><b>SCORING</b></div>
					<div class="col-12 mx-auto">
						<div class="line"></div>
					</div>
				</div>
				<div class="row bar_select">
					<div class="col">
						<select name="" id="country" class="form-control">
							<option value="">Select Country</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="col">
						<select name="" id="department" class="form-control">
							<option value="">Select Department</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="col">
						<select name="" id="category" class="form-control">
							<option value="">Select Category</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="col">
						<select name="" id="status" class="form-control">
							<option value="">Select Status</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="col-2 d-flex justify-content-center">
						<button class="btn" onclick="search_project()">SHOW</button>
					</div>
				</div>
				<div class="row mt-5 mb-5">
					<div class="col">
						<table id="table_list_project">
							<thead>
								<tr>
									<th>Status</th>
									<th>ID</th>
									<th>Project Name</th>
									<th>Group</th>
									<th>Country</th>
									<th>Department</th>
									<th>Inbox</th>
									<th>Score</th>
								</tr>
							</thead>
							<tbody>
								<tr class="list_project" data-project="1">
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr class="list_project" data-project="1">
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
								</tr>
							</tbody>
						</table>
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
		var table_= $('#table_list_project').DataTable({
			"pageLength": 10,
			"autoWidth": false,
			"searching": true,
			"ajax": {
				url: base_url+'home/test_ajax',
				type: 'POST',
				data: {
					type : 'value1'
				}
			},
			"columns": [
				{ "data": "status" },
				{ "data": "id" },
				{ "data": "project_name" },
				{ "data": "group" },
				{ "data": "country" },
				{ "data": "department" },
				{ "data": "inbox" },
				{ "data": "score" }
			]
		});
	});
	
	function search_project() {
		var country = $('#country').val();
		var department = $('#department').val();
		var category = $('#category').val();
		var status = $('#status').val();
		table_.columns( 0 ).search(status).draw();
		table_.columns( 4 ).search(country).draw();
		table_.columns( 5 ).search(department).draw();
		table_.columns( 0 ).search(status).draw();
	}
</script>
</html>
<script>
	$('.list_project').click(function(event) {
		var project_num = $(this).data('project');
		console.log(project_num);
	});
</script>