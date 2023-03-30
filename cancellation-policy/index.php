<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php 
$promo_page =  strtoupper($_GET["page"]);
include_once('../application/includes/header.php');
include_once('../application/includes/mainmenu.php'); 
?>
<div class="bg-light">
	<div class="container">
		<div class="py-4" style="min-height: 520px;">


			<div class="table-responsive">				
				<table class="table table-bordered bg-white fs-7">
					<thead>
						<tr>
							<th>
								<div class="fs-7 text-dark px-1 fw-bold">
									Season
								</div>
							</th>
							<th>
								<div class="fs-7 text-dark px-1 fw-bold">
									Cancel day(s) 
								</div>
							</th>
							<th colspan="2">
								<div class="fs-7 text-dark px-1 fw-bold">
									Charge type
								</div>
							</th>
							<th>
								<div class="fs-7 text-dark px-1 fw-bold">
									No show
								</div>
							</th>
							<th>
								<div class="fs-7 text-dark px-1 fw-bold">
									Non - Refundable
								</div>
							</th>
							<th colspan="2">
								<div class="fs-7 text-dark px-1 fw-bold">
									&nbsp;
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="">High season</option>
									<option value="" selected>Low season</option>
									<option value="">Peak season</option>
								</select>
							</td>
							<td class="p-0">
								<input type="number" class="form-control w-100 fs-7 rounded-0 border-0 shadow-none" value="14">
							</td>
							<td class="p-0">
								<input type="number" class="form-control w-100 fs-7 rounded-0 border-0 shadow-none" value="50">
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="">Amount</option>
									<option value="" selected>Precent</option>
									<option value="">Full charge</option>
									<option value="">Night/Room</option>
								</select>
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Non refundable</option>
								</select>
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="" selected>No</option>
									<option value="">Yes</option>
								</select>
							</td>
							<td class="p-0">
								<button class="btn btn-primary w-100 h-100 rounded-0 fs-7">
									Save
								</button>
							</td>
							<td class="p-0">
								<button class="btn btn-danger w-100 h-100 rounded-0 fs-7">
									<i class="fas fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>


			<div class="pb-4">
				<button class="btn btn-success rounded-0 py-2 fs-8 text-white" onclick="window.open('/cancellation-policy/?page=edit-cancellation','_self');">
					<span class="px-4">Add</span>
				</button>
			</div>


			<?php
			/*
			if(
				(strtoupper($_GET['page'])=="EDIT-CANCELLATION") ||
				(strtoupper($_GET['page'])=="ADD-CANCELLATION")
			)
			{
				$page_action = 'includes/add-edit-cancellation.php'; 
			}
			else
			{
				$page_action = 'includes/tab-version.php'; 
			}
			include_once($page_action);
			*/
			?>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-rates.php');
?>
</body>
</html>
