<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>
<div class="bg-light">
	<div class="container">
		<div class="py-4">
			<div class="bg-white border-bottom rounded-1">
				<div class="p-4">
					<div class="row justify-content-between">
						<div class="pb-2 pb-sm-0 col-auto">
							<div class="d-flex">
								<span class="fs-6 fw-bold text-primary pe-2">
									<i class="fas fa-info-circle"></i>
								</span>
								<span class="fs-6 fw-bold text-primary">
									Mapping (Channel Manager)
								</span>
							</div>
						</div>
						<div class="col-auto">
							<button class="btn btn-success rounded-0 py-2 fs-8 text-white">
								<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
								<span class="pe-2">Add room category</span>
							</button>
						</div>
					</div>
				</div>
				<div class="border-top p-4">
					<div class="row g-3">
						<div class="col-12 col-lg-4">
							<div class="pb-1 fs-8 text-secondary">
								Channel management
							</div>
							<div>
								<select class="form-select fs-7 rounded-0">
									<option value="">Select Channel</option>
									<option value="">BookandLink</option>
									<option value="" selected="">RateGain</option>
									<option value="">FASTBOOKING AvaiPro</option>
									<option value="">Siteminder</option>
									<option value="">STAAH</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-auto">
							<div class="pb-1 fs-8 text-secondary d-none d-sm-block">
								&nbsp;
							</div>
							<div>
								<button class="btn btn-primary rounded-0 fs-8 w-100">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="py-3">
				<div class="bg-primary fs-7">
					<div class="d-flex align-items-center p-3">
						<div class="pe-2 text-white"><i class="fas fa-chart-line"></i></div>
						<div class="pe-2 fw-bold text-white">
							<div class="row gx-3">
								<div class="col-auto">RateGain</div>
								<div class="col-auto">|</div>
								<div class="col-auto">THB (Lacal rate: 1.000000)</div>
							</div>
						</div>
					</div>
				</div>
					<div class="bg-white border p-4">
						<div class="row g-3">
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<div class="pb-1 fs-8 text-secondary">
									Room Category
								</div>
								<div>
									<select class="form-select fs-7 rounded-0">
										<option value="">All rooms</option>
										<option value="">1 BED</option>
										<option value="" selected>2 BED</option>
										<option value="">Studio</option>
										<option value="">Villa Suite</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<div class="pb-1 fs-8 text-secondary">
									Meal type
								</div>
								<div>
									<select class="form-select fs-7 rounded-0">
										<option value="">All mealtype</option>
										<option value="" selected="">Room and Breakfast</option>
										<option value="">Room Only</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-2">
								<div class="pb-1 fs-8 text-secondary">
									Commission
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-8" value="20">
									<span class="input-group-text rounded-0 fs-8">%</span>
								</div>
							</div>
							<div class="col-12 col-sm-auto">
								<div class="pb-1 fs-8 text-secondary d-none d-sm-block">
									&nbsp;
								</div>
								<div>
									<button class="btn btn-success rounded-0 fs-8 w-100">
										Import
									</button>
								</div>
							</div>
						</div>
					</div>
			</div>
			<?php 
			$mapping = array(
				array(
					'wscode_hotel'=>'WSMA01010001',
					'wscode_roomcatg'=>'WSMA05110035',
					'roomcatg'=>'1 BED',
					'meal'=>'Room and Breakfast',
					'commission'=>'12%',
					'currency'=>'THB',
					'keycode'=>'#11389-61',
				),
				array(
					'wscode_hotel'=>'WSMA01010001',
					'wscode_roomcatg'=>'WSMA05110035',
					'roomcatg'=>'1 BED',
					'meal'=>'Room Only',
					'commission'=>'10%',
					'currency'=>'THB',
					'keycode'=>'#11389-62',
				),
			);
			?>
			<div class="table-responsive fs-8 border-top border-2 border-primary">
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="bg-white text-dark">
							<th scope="col" class="text-nowrap">WsCode Hotel</th>
							<th scope="col" class="text-nowrap">WSCode Room Category</th>
							<th scope="col" class="text-nowrap">Room Category</th>
							<th scope="col" class="text-nowrap">Meal</th>
							<th scope="col" class="text-nowrap">Commission</th>
							<th scope="col" class="text-nowrap">Currency</th>
							<th scope="col" class="text-nowrap">&nbsp;</th>
							<!-- <th>&nbsp;</th> -->
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
									
						<?php 
						foreach($mapping as $key => $value)
						{
						?>
						<tr class="bg-white text-secondary">
							<td scope="row" class="text-nowrap"><?php echo $value['wscode_hotel']; ?></td>
							<td class="text-nowrap"><?php echo $value['wscode_roomcatg']; ?></td>
							<td class="text-nowrap"><?php echo $value['roomcatg']; ?></td>
							<td class="text-nowrap"><?php echo $value['meal']; ?></td>
							<td class="text-nowrap"><?php echo $value['commission']; ?></td>
							<td class="text-nowrap"><?php echo $value['currency']; ?></td>
							<td class="text-nowrap"><?php echo $value['keycode']; ?></td>
							<!-- 
							<td class="p-0">
								<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
									onclick="window.open('/enhancement/?page=edit-enhancement','_self');">
									<span class="fs-8">
										<i class="fas fa-search"></i>
									</span>
								</button>
							</td>
							-->
							<td class="p-0">
								<button class="btn btn-outline-success w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal"
									data-bs-target="#deleteModal" title="Get Update Rate">
									<span class="fs-8">
										<i class="fas fa-download"></i>
									</span>
								</button>
							</td>
						</tr>
						<?php 
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
?>
</body>
</html>
