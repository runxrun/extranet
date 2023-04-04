
<?php 
$array_roomx = array(
	array(
		'room'=>'Standard',
		'meal'=>'Room and Breakfast',
		'currency'=>'THB',
		'allotment'=>'12',
		'cutoffday'=>'0',
		'minstay'=>'0',
		'period'=>array(
			array(
				'fromdate'=>'01 Mar 2023',
				'todate'=>'31 Sep 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3500,
					),
					array(
						'days'=>array('Fr','Sa'),
						'sgl'=>1600,
						'twndbl'=>1600,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3600,
					),
				),
			),
			array(
				'fromdate'=>'01 Oct 2023',
				'todate'=>'15 Dec 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3500,
					),
					array(
						'days'=>array('Fr','Sa'),
						'sgl'=>1600,
						'twndbl'=>1600,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3600,
					),
				),
			),
			array(
				'fromdate'=>'16 Dec 2023',
				'todate'=>'29 Feb 2024',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th'),
						'sgl'=>1550,
						'twndbl'=>1550,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3500,
					),
					array(
						'days'=>array('Fr','Sa'),
						'sgl'=>1550,
						'twndbl'=>1650,
						'xbedad'=>500,
						'xbedch'=>500,
						'quad'=>3650,
					),
				),
			),
		),
	),
	array(
		'room'=>'Standard',
		'meal'=>'Room Only',
		'currency'=>'THB',
		'allotment'=>'8',
		'cutoffday'=>'0',
		'minstay'=>'0',
		'period'=>array(
			array(
				'fromdate'=>'01 Mar 2023',
				'todate'=>'31 Sep 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
			),
			array(
				'fromdate'=>'01 Oct 2023',
				'todate'=>'15 Dec 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
			),
			array(
				'fromdate'=>'16 Dec 2023',
				'todate'=>'29 Feb 2024',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
			),
		),
	),
	array(
		'room'=>'Deluxe',
		'meal'=>'Bed and Breakfast',
		'currency'=>'THB',
		'allotment'=>'10',
		'cutoffday'=>'0',
		'minstay'=>'0',
		'period'=>array(
			array(
				'fromdate'=>'01 Mar 2023',
				'todate'=>'31 Sep 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
			),
			array(
				'fromdate'=>'01 Oct 2023',
				'todate'=>'15 Dec 2023',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
			),
			array(
				'fromdate'=>'16 Dec 2023',
				'todate'=>'29 Feb 2024',
				'dayflag'=>array(
					array(
						'days'=>array('Su','Mo','Tu','We','Th','Fr','Sa'),
						'sgl'=>1500,
						'twndbl'=>1500,
						'xbedad'=>500,
						'xbedch'=>500,
					),
				),
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
		<div class="border-bottom border-primary border-2 bg-white">
			<div class="row">
				<div class="col-12 col-lg-4 col-xl-3">
					<div class="py-3 px-3 fs-7 fw-bold text-primary">
						<?php echo $value['room'].' - '.$value['meal']; ?>
					</div>							
				</div>
				<div class="col-12 col-lg-8 col-xl-9">
					<div class="d-flex justify-content-between px-3">
						<div class="row">
							<div class="col-auto">
								<div class="row g-2 py-3 align-items-center">
									<div class="col-auto fs-7 fw-bold text-dark">Allotment</div>
									<div class="col-auto fs-7">
										<div class="bg-primary fs-9 text-white py-1 px-2 rounded-1">
											<?php echo $value['allotment']; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<div class="row g-2 py-3 align-items-center">
									<div class="col-auto fs-7 fw-bold text-dark">Cut off day</div>
									<div class="col-auto fs-7">
										<div class="bg-primary fs-9 text-white py-1 px-2 rounded-1">
											<?php echo $value['cutoffday']; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<div class="row g-2 py-3 align-items-center">
									<div class="col-auto fs-7 fw-bold text-dark">Minimum stay</div>
									<div class="col-auto fs-7">
										<div class="bg-primary fs-9 text-white py-1 px-2 rounded-1">
											<?php echo $value['minstay']; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="">
							<div class="row g-2 py-3 align-items-center">
								<div class="col-auto fs-7 fw-bold text-dark">Currency</div>
								<div class="col-auto fs-7">
									<div class="bg-primary fs-9 text-white py-1 px-2 rounded-1">
										THB
									</div>
								</div>
							</div>									 
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div>
			<?php
			foreach ($value['period'] as $key2 => $value2)
			{ 
				foreach ($value2['dayflag'] as $key3 => $value3)
				{
				?>
				<div class="p-3 border-top">
					<div class="row">
						<div class="pb-3 col-12 col-lg-4 col-xl-3">
							<div class="pb-0 fs-9 text-secondary">Period</div>
							<div class="pb-2 fs-7 fw-bold text-dark">
								<?php echo $value2['fromdate']; ?>
								<span class="px-2">-</span>
								<?php echo $value2['todate']; ?>
							</div>
							<div class="row g-2 text-uppercase fs-9 text-secondary">
								<div class="col-auto">
									<div class="pe-1 opacity-50"><i class="fas fa-calendar-day"></i></div>
								</div>
								<?php 
								foreach ($value3['days'] as $key4 => $value4) {
									echo '<div class="col-auto fw-bold text-primary">'.$value4.'</div>';
								}
								?>
							</div>
						</div>
						<div class="col-12 col-lg-8 col-xl-9">
							<div class="row g-2">
								<div class="col-6 col-md-4 col-lg-2">
									<div class="fs-9 text-secondary">Single</div>
									<div class="fs-7 fw-bold text-dark"><?php echo number_format($value3['sgl'], 2); ?></div>
								</div>
								<div class="col-6 col-md-4 col-lg-2">
									<div class="fs-9 text-secondary">Twin/Double</div>
									<div class="fs-7 fw-bold text-dark"><?php echo number_format($value3['twndbl'], 2); ?></div>
								</div>
								<div class="col-6 col-md-4 col-lg-2">
									<div class="fs-9 text-secondary">XBed (Ad)</div>
									<div class="fs-7 fw-bold text-dark"><?php echo number_format($value3['xbedad'], 2); ?></div>
								</div>
								<div class="col-6 col-md-4 col-lg-2">
									<div class="fs-9 text-secondary">XBed (Ch)</div>
									<div class="fs-7 fw-bold text-dark"><?php echo number_format($value3['xbedch'], 2); ?></div>
								</div>
								<div class="col-6 col-md-4 col-lg-2">
									<div class="fs-9 text-secondary">Quad</div>
									<div class="fs-7 fw-bold text-dark"><?php echo number_format($value3['quad'], 2); ?></div>
								</div>
							</div>
							<div class="pt-3">
								<div class="py-1 px-3 bg-light fs-8 fw-bold text-dark">
									Cancellation Policy
								</div>	
								<div class="pt-2 fs-7 text-secondary">
									- Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.
									<br>- Cancellations up to 5 days in advance, with a 50% charge of the room price
									<br>- Cancellations must be made 2 days prior to arrival or the room price will not be refunded.
								</div>	
								<div class="py-2">
									<div class="row">
										<div class="col-auto">
											<button class="btn p-0 text-primary fs-7 border-0">Add / Edit</button>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<?php
				}
			}
			?>
		</div>
	</div>
	<?php
	}
	?>