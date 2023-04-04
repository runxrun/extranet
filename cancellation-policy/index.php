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

		<div class="pt-4">
			<div class="row justify-content-between">
				<div class="col-auto">
					<div class="row g-2">
						<div class="col-auto">
							<div class="dropdown">
								<button type="button" class="btn dropdown-toggle border bg-white rounded-0 fs-9" id="btnRoomCategories" data-bs-toggle="dropdown" aria-expanded="false">
									Season
								</button>
								<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="btnRatesAvailability">
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Low season
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											High season
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Peak season
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="dropdown">
								<button type="button" class="btn dropdown-toggle border bg-white rounded-0 fs-9" id="btnRoomCategories" data-bs-toggle="dropdown" aria-expanded="false">
									Charge type
								</button>
								<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="btnRatesAvailability">
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Percent
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Amount
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Night/Room
										</a>
									</li>
								</ul>
							</div>
						</div>	
						<div class="col-auto">
							<div class="">
								<button type="button" class="btn text-info border-0 rounded-0 fs-9" id="btnReset">
									Reset filter
								</button>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-auto">
					<div class="row g-2">
						<div class="col-auto">
							<button class="btn btn-success rounded-0 fs-9" onclick="window.open('/dynamic-rate/', '_self');">
								Add
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>


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
								<div class="fs-7 text-dark px-1 fw-bold text-center">
									Cancel day(s) 
								</div>
							</th>
							<th colspan="3">
								<div class="fs-7 text-dark px-1 fw-bold">
									Charge type
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
							<td class="p-0 bg-white">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="">High season</option>
									<option value="">Low season</option>
									<option value="">Peak season</option>
								</select>
							</td>
							<td class="p-0" style="width: 200px;">
								<input 
									type="number" 
									class="form-control w-100 fs-7 rounded-0 border-0 shadow-none text-center" 
									value="1">
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="">Amount</option>
									<option value="">Precent</option>
									<option value="">Full charge</option>
									<option value="">Night/Room</option>
								</select>
							</td>
							<td class="p-0" style="width: 150px;">
								<input 
									type="number" 
									class="form-control w-100 fs-7 rounded-0 border-0 shadow-none text-center" 
									value="0">
							</td>
							<td class="p-0 text-center" style="width: 80px;">
								<div class="pt-2 fs-9 text-secondary">
									-
								</div>
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="" selected>No</option>
									<option value="">Yes</option>
								</select>
							</td>
							<td class="p-0">
								<button class="btn btn-success w-100 h-100 rounded-0 fs-7">
									Save
								</button>
							</td>
							<td class="p-0">
								<button class="btn btn-secondary w-100 h-100 rounded-0 fs-7">
									<i class="fas fa-times"></i>
								</button>
							</td>
						</tr>
						<tr>
							<td colspan="8" class="bg-light">
							</td>
						</tr>
						<?php 
						$cxlarray = array(
							array(
								'season'=>'Low season',
								'cxlday'=>14,
								'chargerate'=>80,
								'chargetype'=>'Amount',
								'chargetypetxt'=>'THB',
							),
							array(
								'season'=>'Low season',
								'cxlday'=>7,
								'chargerate'=>50,
								'chargetype'=>'Percent',
								'chargetypetxt'=>'%',
							),
							array(
								'season'=>'Low season',
								'cxlday'=>2,
								'chargerate'=>100,
								'chargetype'=>'Percent',
								'chargetypetxt'=>'%',
							),
							array(
								'season'=>'High season',
								'cxlday'=>14,
								'chargerate'=>50,
								'chargetype'=>'Percent',
								'chargetypetxt'=>'%',
							),
							array(
								'season'=>'High season',
								'cxlday'=>5,
								'chargerate'=>100,
								'chargetype'=>'Full charge',
								'chargetypetxt'=>'%',
							),
						);
						foreach ($cxlarray as $key => $value)
						{
							$ss_selected = $value['season'];
							$sslow = '';
							$sshigh = '';
							$sspeak = '';
							switch ($ss_selected) {
								case 'Low season': $sslow = 'selected'; break;
								case 'High season': $sshigh = 'selected'; break;
								case 'Peak season': $sspeak = 'selected'; break;
							}

							$type_selected = $value['chargetype'];
							$typeamount = '';
							$typepercent = '';
							$typefull = '';
							$typeroomnight = '';
							switch ($type_selected) {
								case 'Amount': $typeamount = 'selected'; break;
								case 'Percent': $typepercent = 'selected'; break;
								case 'Full charge': $typefull = 'selected'; break;
								case 'Night/Room': $typeroomnight = 'selected'; break;
							}
						?>
						<tr>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="" <?php echo $sshigh; ?>>High season</option>
									<option value="" <?php echo $sslow; ?>>Low season</option>
									<option value="" <?php echo $sspeak; ?>>Peak season</option>
								</select>
							</td>
							<td class="p-0" style="width: 200px;">
								<input 
									type="number" 
									class="form-control w-100 fs-7 rounded-0 border-0 shadow-none text-center" 
									value="<?php echo $value['cxlday']; ?>">
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="">Select</option>
									<option value="" <?php echo $typeamount; ?>>Amount</option>
									<option value="" <?php echo $typepercent; ?>>Precent</option>
									<option value="" <?php echo $typefull; ?>>Full charge</option>
									<option value="">Night/Room</option>
								</select>
							</td>
							<td class="p-0" style="width: 150px;">
								<input 
									type="number" 
									class="form-control w-100 fs-7 rounded-0 border-0 shadow-none text-center" 
									value="<?php echo $value['chargerate']; ?>">
							</td>
							<td class="p-0 text-center" style="width: 80px;">
								<div class="pt-2 fs-9 text-secondary">
									<?php echo $value['chargetypetxt']; ?>
								</div>
							</td>
							<td class="p-0">
								<select class="form-select w-100 fs-7 rounded-0 border-0 shadow-none">
									<option value="" selected>No</option>
									<option value="">Yes</option>
								</select>
							</td>
							<td class="p-0">
								<button class="btn btn-primary w-100 h-100 rounded-0 fs-7">
									Update
								</button>
							</td>
							<td class="p-0">
								<button class="btn btn-danger w-100 h-100 rounded-0 fs-7">
									<i class="fas fa-trash"></i>
								</button>
							</td>
						</tr>
						<?php 
						} 
						?>
						
					</tbody>
				</table>
			</div>


			<div class="pb-4">
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
