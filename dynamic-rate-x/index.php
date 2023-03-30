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


		<?php 
		$array_roomx = array(
			array(
				'room'=>'Standard',
				'meal'=>'Room and Breakfast',
				'currency'=>'THB',
				'period'=>array(
					array(
						'fromdate'=>'01 Mar 2023',
						'todate'=>'29 Feb 2024',
						'allotemnt'=>12,
						'cutoff'=>0,
						'minstay'=>0,
						'sgl'=>2500,
						'twndbl'=>2700,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3200,
					),
					array(
						'fromdate'=>'01 Mar 2023',
						'todate'=>'29 Feb 2024',
						'allotemnt'=>12,
						'cutoff'=>2,
						'minstay'=>2,
						'sgl'=>2000,
						'twndbl'=>2200,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3200,
					),
				),
			),
			array(
				'room'=>'Standard',
				'meal'=>'Room Only',
				'currency'=>'THB',
				'period'=>array(
					array(
						'fromdate'=>'01 Mar 2023',
						'todate'=>'29 Feb 2024',
						'allotemnt'=>8,
						'cutoff'=>0,
						'minstay'=>0,
						'sgl'=>2000,
						'twndbl'=>2200,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3200,
					),
				),
			),
		);
		?>
		<div class="pb-4" style="min-height: 520px;">
			<?php 
			foreach ($array_roomx as $key => $value) 
			{
			?>
			<div class="border bg-white mb-3">

				<div class="border-bottom border-primary border-2 bg-white py-3 px-3">
					<div class="fs-7 fw-bold text-primary">
						<?php echo $value['room'].' - '.$value['meal']; ?>
					</div>
				</div>


				<?php 
				foreach ($value['period'] as $key2 => $value2) 
				{
				?>
				<div class="border-top">
					<div class="row">
						<div class="col-9">
							<div class="p-3">
								<div class="row">
									<div class="col-3">
										<div class="fs-7 fw-bold text-dark">
											Rates period
										</div>
									</div>
									<div class="col-9">
										<div class="fs-7 text-secondary">
											<?php echo $value2['fromdate']; ?>
											<span class="px-2">-</span>
											<?php echo $value2['todate']; ?>
										</div>
									</div>
								</div>
								<div class="mt-3 row">
									<div class="col-3">
										<div class="fs-7 fw-bold text-dark">
											Application days (Days flag)
										</div>
									</div>
									<div class="col-9">
										<div class="row gx-2 fs-7 text-secondary">
											<div class="col-auto">MO</div>
											<div class="col-auto">TU</div>
											<div class="col-auto">WE</div>
											<div class="col-auto">TH</div>
											<div class="col-auto">FR</div>
											<div class="col-auto">SA</div>
											<div class="col-auto">SU</div>
										</div>
									</div>
								</div>

								<div class="mt-3 row">
									<div class="col-3">
										<div class="fs-7 fw-bold text-dark">
											Room & allotment
										</div>
									</div>
									<div class="col-9">
										<div class="fs-7 text-secondary">
											Allotment : 
											<?php echo $value2['allotemnt']; ?>
										</div>
										<div class="fs-7 text-secondary">
											Cut off day :											
											<?php echo $value2['cutoff']; ?>
										</div>
										<div class="fs-7 text-secondary">
											Minimum stay :
											<?php echo $value2['minstay']; ?>
										</div>
									</div>
								</div>

								<div class="mt-3 row">
									<div class="col-3">
										<div class="fs-7 fw-bold text-dark">
											Room price
										</div>
									</div>
									<div class="col-9">
										<div class="pb-2 border-bottom d-flex justify-content-between fs-7 text-secondary">
											<div>Single</div>
											<div><?php echo number_format($value2['sgl'], 2).' '.$value['currency']; ?></div>
										</div>
										<div class="py-2 border-bottom d-flex justify-content-between fs-7 text-secondary">
											<div>Twin / Double</div>
											<div><?php echo number_format($value2['twndbl'], 2).' '.$value['currency']; ?></div>
										</div>
										<div class="py-2 border-bottom d-flex justify-content-between fs-7 text-secondary">
											<div>Extra bed (Adult)</div>
											<div><?php echo number_format($value2['xbedad'], 2).' '.$value['currency']; ?></div>
										</div>
										<div class="py-2 border-bottom d-flex justify-content-between fs-7 text-secondary">
											<div>Extra bed (Child)</div>
											<div><?php echo number_format($value2['xbedch'], 2).' '.$value['currency']; ?></div>
										</div>
										<div class="py-2 d-flex justify-content-between fs-7 text-secondary">
											<div>Quad</div>
											<div><?php echo number_format($value2['quad'], 2).' '.$value['currency']; ?></div>
										</div>
									</div>
								</div>
							</div>							
						</div>
						<div class="col-3">
							<div class="p-3">
								<button class="btn btn-outline-primary p-1 w-50 rounded-0 fs-9">
									Modify
								</button>
							</div>
						</div>
					</div>
				</div>
				<?php 
				}
				?>

				<div class="border-top p-3">
					<div class="">
						<div class="pb-2">
							<div class="fs-7 fw-bold text-dark">
								Cancellation policy
							</div>
						</div>
						<div>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>



			<?php
			/*
			<div class="border bg-white pb-4">
				<div class="p-4">
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="text-secondary text-center pb-2">
						Click the button below to generate rate.
					</div>
					<div class="pb-3 d-flex justify-content-center">
						<button 
							class="btn btn-primary fs-7 rounded-0 px-4" 
							onclick="window.open('/dynamic-rate-x/generate-rate.php');">
							Generate rate
						</button>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>
			</div>
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
