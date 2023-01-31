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
		<div class="pt-4">
			<div class="row justify-content-between">
				<div class="pb-4 col-12 col-md-auto">
					<?php include_once('includes/dynamic-filter.php'); ?>
				</div>
				<div class="pb-3 col-12 col-md-auto">
					<?php include_once('includes/dynamic-action.php'); ?>
				</div>
			</div>	
		</div>

		<div class="rn-container-scroll">
			<div class="rn-container-maxwidth pb-4">
				<?php 
				include_once('includes/dynamic-calendar.php'); 

				$roomcategory_array = array(
					array('roomcatg_name' => 'Standard'),
					array('roomcatg_name' => 'Deluxe'),
					array('roomcatg_name' => 'Family Suite'),
				);
				foreach ($roomcategory_array as $key_name => $value_name)
				{
				?>
					<div class="rn-table-rate">
						<div class="rn-table-row rn-table-th">
							<div class="rn-table-rate-name">
								<div class="d-flex justify-content-between align-items-center h-100 fs-7 py-2 p-2">
									<div class="">
										<span class="text-dark px-1">
											<i class="fas fa-bed"></i>
										</span>
										<span class="text-dark px-1 fw-bold">
											<?php echo $value_name['roomcatg_name']; ?>
										</span>
									</div>
									<div class="px-2">

										<div class="dropdown">
											<button 
												type="button"
												id="dropdownMenuButton1"
												class="btn p-0 text-secondary border-0 shadow-none fs-9"
												data-bs-toggle="dropdown"
												aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</button>
											<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="dropdownMenuButton1">	
												<li>
													<a 
														class="dropdown-item"
														href="javascript:void(0)" 
														onclick="window.open('/dynamic-rate/','_self');">
														Rates
													</a>
												</li>
												<li>
													<a 
														class="dropdown-item"
														href="javascript:void(0)" 
														onclick="window.open('/dynamic-rate/?rate_status=setallotment','_self');">
														Set allotment
													</a>
												</li>
												<li>
													<a 
														class="dropdown-item"
														href="javascript:void(0)" 
														onclick="window.open('/dynamic-rate/?rate_status=ctactd','_self');">
														CTA / CTD
													</a>
												</li>
												<li>
													<a 
														class="dropdown-item"
														href="javascript:void(0)" 
														onclick="window.open('/dynamic-rate/?rate_status=cutofday','_self');">
														Cut of day
													</a>
												</li>
												<?php
												/*
												<li>
													<a 
														class="dropdown-item"
														href="javascript:void(0)" 
														onclick="window.open('/dynamic-rate/?rate_status=blackout','_self');">
														Black out
													</a>
												</li>
												*/
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="rn-table-rate-status">
								<div class="d-flex align-items-center h-100 fs-9 py-2 p-2 rn-table-border-start">
									<span class="text-dark px-1 fw-bold">
										Allotment
									</span>
								</div>					
							</div>
							<?php for($action=1; $action<=14; $action++)
							{							
							?>
							<div class="rn-table-rate-action ">
								<div 
									class="d-flex align-items-center h-100 fs-9 py-2 p-2 rn-table-border-start"
									title="10 / 0 / 10">
									<span class="text-dark px-1 fw-bold w-100 text-center">
										10
									</span>
								</div>					
							</div>
							<?php
							} 
							?>
						</div>

						<?php 
						switch(strtoupper($_GET['rate_status']))
						{
							case "SETALLOTMENT" : include('includes/dynamic-setallotment.php'); break;
							case "CUTOFDAY" : include('includes/dynamic-cutofday.php'); break;
							case "CTACTD" : include('includes/dynamic-ctactd.php'); break;
							case "BLACKOUT" : include('includes/dynamic-blackout.php'); break;
							default : include('includes/dynamic-rate-roomtypes.php'); break;
						}
						?>

					</div>
				<?php
				}
				?>
				


			</div>
		</div>

	</div>

	<?php //include_once('includes/preset-roomcategories.php'); ?>




</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-rates.php');
?>
</body>
</html>
