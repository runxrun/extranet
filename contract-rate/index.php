<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>

<div class="bg-light">
	<div class="container-xxl">
		<div class="pt-4">
			<div class="row justify-content-between">
				<div class="pb-4 col-12 col-md-auto">
					<?php include_once('includes/contract-filter.php'); ?>
				</div>
				<div class="pb-3 col-12 col-md-auto">
					<?php include_once('includes/contract-action.php'); ?>
				</div>
			</div>	
		</div>
		<div class="pt-3 pb-4">


			<div class="row justify-content-between align-items-end">
				<div class="col-auto">
					<div class="row g-2">
						<div class="col-12 col-md-auto">
							<div class="dropdown">
								<button 
									type="button" 
									class="btn dropdown-toggle border bg-white rounded-0 fs-9 w-100 text-start" 
									id="btnMealTypes" 
									data-bs-toggle="dropdown" 
									aria-expanded="false">
									Monthly
								</button>
								<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="btnMealTypes">
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Monthly
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0)" onclick="">
											Date range
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md-auto">
							<div class="dropdown">
								<button 
									type="button" 
									class="btn dropdown-toggle border bg-white rounded-0 fs-9 w-100 text-start" 
									id="btnMealTypes" 
									data-bs-toggle="dropdown" 
									aria-expanded="false">
									May
								</button>
								<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="btnMealTypes">
									<li>
										<a class="dropdown-item" href="javascript:void(0)">January</a>
										<a class="dropdown-item" href="javascript:void(0)">February</a>
										<a class="dropdown-item" href="javascript:void(0)">March</a>
										<a class="dropdown-item" href="javascript:void(0)">April</a>
										<a class="dropdown-item" href="javascript:void(0)">May</a>
										<a class="dropdown-item" href="javascript:void(0)">June</a>
										<a class="dropdown-item" href="javascript:void(0)">July</a>
										<a class="dropdown-item" href="javascript:void(0)">August</a>
										<a class="dropdown-item" href="javascript:void(0)">September</a>
										<a class="dropdown-item" href="javascript:void(0)">October</a>
										<a class="dropdown-item" href="javascript:void(0)">November</a>
										<a class="dropdown-item" href="javascript:void(0)">December</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="d-flex flex-wrap align-items-center" title="Rate update">
						<div class="pe-2 fs-7 text-success"><i class="fas fa-check-circle"></i></div>
						<div class="pe-2 fs-7 fw-bold text-success">This rate approve since</div>
						<div class="pe-2 fs-7 text-secondary">01 January 2023 / 15:24:35</div>
					</div>
				</div>
			</div>

				


			<!-- 
				<div class="row g-3">
					<div class="col-12 col-md-auto">
						<select class="form-select rounded-0 fs-7">
							<option value="">Date range</option>
						</select>
					</div>
					<div class="col-12 col-md-auto">
						<div class="input-group mb-3">
							<input type="text" class="form-control rounded-0 fs-7" placeholder="1-May-2023">
							<span class="input-group-text rounded-0 fs-7"><i class="fas fa-calendar-day"></i></span>
						</div>
					</div>
					<div class="col-12 col-md-auto">
						<div class="input-group mb-3">
							<input type="text" class="form-control rounded-0 fs-7" placeholder="31-May-2023">
							<span class="input-group-text rounded-0 fs-7"><i class="fas fa-calendar-day"></i></span>
						</div>
					</div>
				</div>
	 		-->


		</div>
		<div class="pb-5">
			<?php 
			// include_once('includes/contract-array.php');
			// include_once('includes/contract-lists.php');
			// include_once('includes/contract-tools.php');

			$roomarray = array(

				array(
					'market'=>'All Market',
					'room'=>array(
						array(
							'roomcatg'=>'1 Bedroom',
							'mealtype'=>array(
								array(
									'mealtypename'=>'Bed and Breakfast',
								),
								//array('mealtypename'=>'Room Only'),
							),
						),
					),
				),
				// array(
				// 	'market'=>'Asian Market',
				// ),
			);

			foreach($roomarray as $key => $value)
			{
			?>
			


				<div class="bg-white mb-3">
					<div class="border py-2 px-3 fs-7 fw-bold text-dark">
						<div class="d-flex align-items-center">
							<div class="pe-2"><i class="fas fa-poll"></i></div>
							<div class="pe-2"><?php echo $value['market']; ?> / THB</div>
						</div>
					</div>
					<?php
					foreach($value['room'] as $key2 => $value2)
					{
						foreach($value2['mealtype'] as $key3 => $value3)
						{
					?>
					<div class="bg-primary">
						<div class="py-2 px-3 fs-7 fw-bold text-white">
							<?php echo $value2['roomcatg']; ?> / 
							<?php echo $value3['mealtypename']; ?></div>
					</div>
					<div class="border-bottom border-end border-1">
						<div class="row g-0 fs-9 bg-light">
							<div class="col-season"><div class="py-2 px-2 text-secondary text-center">Season</div></div>
							<div class="col-date"><div class="py-2 px-2 text-secondary text-center">Date</div></div>
							<div class="col-minstay"><div class="py-2 px-2 text-secondary text-center">Min Stay</div></div>
							<div class="col-sgl"><div class="py-2 px-2 text-secondary text-center">Single</div></div>
							<div class="col-twndbl"><div class="py-2 px-2 text-secondary text-center"><div>Twin /</div><div>Double</div></div></div>
							<div class="col-quad"><div class="py-2 px-2 text-secondary text-center">Quad</div></div>
							<div class="col-xbedad"><div class="py-2 px-2 text-secondary text-center"><div>Extra Bed</div><div>Adult</div></div></div>
							<div class="col-xbedch"><div class="py-2 px-2 text-secondary text-center"><div>Extra Bed</div><div>Child (3-12)</div></div></div>
							<div class="col-chrange1"><div class="py-2 px-2 text-secondary text-center"><div>Child price</div><div>(3-12)</div></div></div>
							<div class="col-sharebed"><div class="py-2 px-2 text-secondary text-center"><div>Child sharing</div><div>pay breakfast</div></div></div>
							<div class="col-allotment"><div class="py-2 px-2 text-secondary text-center"><div>Allotment</div></div></div>
							<div class="col-cutoff"><div class="py-2 px-2 text-secondary text-center"><div>Cut-off</div></div></div>
						</div>
						<?php
						for($i=1;$i<=31;$i++)
						{
							switch($i)
							{
								case 6 :
								case 7 :
								case 13 :
								case 14 :
								case 20 :
								case 21 :
								case 27 :
								case 28 : $c_weekend = 'rn-weekend'; break;
								default : $c_weekend = ''; break;
							}


							$seasonname = ($i>15 ? 'High Season' : 'Low Season' );

						?>
						<div class="row g-0 fs-9 border-top">
							<div class="col-season <?php	echo $c_weekend; ?>"><div class="py-2 px-1 text-secondary text-center"><?php echo $seasonname; ?></div></div>
							<div class="col-date <?php	echo $c_weekend; ?>"><div class="py-2 px-1 text-secondary text-center"><?php echo $i; ?>-May-2023</div></div>
							<div class="col-minstay"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="0"></div></div>
							<div class="col-sgl"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="2,500.00"></div></div>
							<div class="col-twndbl"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="2,500.00"></div></div>
							<div class="col-quad"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="4,700.00"></div></div>
							<div class="col-xbedad"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="550.00"></div></div>
							<div class="col-xbedch"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="300.00"></div></div>
							<div class="col-chrange1"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="100.00"></div></div>
							<div class="col-sharebed"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="600.00"></div></div>
							<div class="col-allotment"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="1"></div></div>
							<div class="col-cutoff"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="45"></div></div>
						</div>
						<?php
						}
						?>					
					</div>
					<?php
					}
					}
					?>
				</div>
			<?php
			}
			?>
			<div class="pt-4">
				<div class="row g-3 justify-content-between">
					<div class="col-auto">
						<div class="d-flex align-items-center">
							<div class="pe-2 fs-7 text-danger"><i class="fas fa-times-circle"></i></div>
							<div class="pe-2 fs-7 fw-bold text-danger">This rate is not approve</div>
						</div>
					</div>
					<div class="col-12 col-md-3">
						<div class="pb-2 text-end">
							<button class="btn w-100 btn-success fs-7 rounded-0" disabled>
								Approve rate
							</button>
						</div>
						<div class="pb-3 text-center text-md-end fs-8 text-secondary">
							Only Administrator
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-contract-rates.php');
include_once('../application/includes/modals/add-new-roomcategory.php');
include_once('../application/includes/modals/autofill-contract-rates.php');
?>
</body>
</html>


<style>

.col-meal,
.col-season,
.col-date,
.col-minstay,
.col-sgl,
.col-twndbl,
.col-quad,
.col-xbedad,
.col-xbedch,
.col-chrange1,
.col-chrange2,
.col-focad,
.col-focch,
.col-sharebed,
.col-allotment,
.col-cutoff
 {
	display: flex; 
	align-items: center; 
	justify-content: center; 
	min-height: 100%; 
	border-left: 1px solid #d7d7d7;
}


.col-meal {width: 10%;}
.col-season {width: 12%;}
.col-date {width: 10.5%;}
.col-minstay {width: 6%;}
.col-sgl {width: 8.5%;}
.col-twndbl {width: 8.5%;}
.col-quad {width: 8.5%;}
.col-xbedad {width: 8.5%;}
.col-xbedch {width: 8.5%;}
.col-chrange1 {width: 8.5%;}
.col-chrange2 {width: 8.5%;}
.col-focad {width: 8.5%;}
.col-focch {width: 8.5%; }
.col-sharebed {width: 8.5%;}
.col-allotment {width: 6%;}
.col-cutoff {width: 6%;}

</style>


