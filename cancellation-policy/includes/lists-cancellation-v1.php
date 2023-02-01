<?php

$cxllists_v1 = array(
    array(
        'roomcategory'=>'Standard',
        'mealtype'=>'Room Only',
        'daterange'=>array(
        	array(
	        	'fromdate'=>'01 Apr 2023',
	        	'todate'=>'30 Apr 2023',
	        	'cancelpolicy'=>array(
	        		array(
		                'cancelday'=>14,
		                'chargerate'=>'0',
		                'chargetype'=>'Free',
	        		),
	        		array(
		                'cancelday'=>10,
		                'chargerate'=>'50',
		                'chargetype'=>'Percent',
	        		),
	        		array(
		                'cancelday'=>5,
		                'chargerate'=>'100',
		                'chargetype'=>'Full',
	        		),
	        	),
	        ),
        ),
    ),
    array(
        'roomcategory'=>'Standard',
        'mealtype'=>'Bed and Breakfast',
        'daterange'=>array(
        	array(
	        	'fromdate'=>'01 Apr 2023',
	        	'todate'=>'30 Apr 2023',
	        	'cancelpolicy'=>array(
	        		array(
		                'cancelday'=>7,
		                'chargerate'=>'0',
		                'chargetype'=>'Free',
	        		),
	        		array(
		                'cancelday'=>5,
		                'chargerate'=>'50',
		                'chargetype'=>'Percent',
	        		),
	        		array(
		                'cancelday'=>2,
		                'chargerate'=>'100',
		                'chargetype'=>'Full',
	        		),
	        	),
	        ),
        ),
    ),
    array(
        'roomcategory'=>'All Rooms',
        'mealtype'=>'All Meal',
        'daterange'=>array(
        	array(
	        	'fromdate'=>'01 Jan 2023',
	        	'todate'=>'31 Oct 2023',
	        	'cancelpolicy'=>array(
	        		array(
		                'cancelday'=>7,
		                'chargerate'=>'0',
		                'chargetype'=>'Free',
	        		),
	        		array(
		                'cancelday'=>5,
		                'chargerate'=>'50',
		                'chargetype'=>'Percent',
	        		),
	        		array(
		                'cancelday'=>2,
		                'chargerate'=>'100',
		                'chargetype'=>'Full',
	        		),
	        	),
	        ),
        	array(
	        	'fromdate'=>'01 Nov 2023',
	        	'todate'=>'31 Dec 2023',
	        	'cancelpolicy'=>array(
	        		array(
		                'cancelday'=>5,
		                'chargerate'=>'0',
		                'chargetype'=>'Free',
	        		),
	        		array(
		                'cancelday'=>3,
		                'chargerate'=>'50',
		                'chargetype'=>'Percent',
	        		),
	        		array(
		                'cancelday'=>1,
		                'chargerate'=>'100%',
		                'chargetype'=>'Full',
	        		),
	        	),
	        ),
        ),
    ),
);



foreach ($cxllists_v1 as $key => $value)
{
	?>
	<div class="pb-4">
		<div class="bg-light border">
			<div class="row py-2 px-2">
				<div class="col-auto col-md-4 col-xl-3">
					<span class="fs-7 text-dark px-1">
						<i class="fas fa-bed"></i>
					</span>
					<span class="fs-7 text-dark px-1 fw-bold">
						<?php echo $value['roomcategory']; ?>
					</span>
				</div>
				<div class="col-auto col-md-8 col-xl-9">
					<span class="fs-7 text-dark px-1">
						<i class="fas fa-utensils"></i>
					</span>
					<span class="fs-7 text-dark px-1 fw-bold">
						<?php echo $value['mealtype']; ?>
					</span>
				</div>
			</div>
			<?php
			foreach ($value['daterange'] as $key2 => $item)
			{
				?>
				<div class="border-top bg-white">
					<div class="row">
						<div class="col-8 col-md-4 col-xl-3 order-1 order-md-1">
							<div class="d-flex py-2 px-3">
								<div class="fs-8 text-secondary text-nowrap">
									<?php echo $item['fromdate']; ?>
									<span class="px-1">to</span>
									<?php echo $item['todate']; ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-7 order-3 order-md-2">
							<div class="py-2 px-2">
								<?php
								foreach ($item['cancelpolicy'] as $key3 => $detail)
								{
								?>
									<div class="d-flex pb-1">
										<div class="pe-2 fs-8 text-secondary">
											<?php echo $key3+1; ?>.
										</div>
										<div class="fs-8 text-secondary">
											<?php
											$template = '';
											$days = ($detail['cancelday']>1 ? 'days' : 'day');
											switch(strtolower($detail['chargetype']))
											{
												case "free" : $template = 'Cancellation made prior to <b class="text-dark">'.$detail['cancelday'].' '.$days.'</b> will result in no charges for the cancellation fee on the booking.'; break;
												case "percent" : $template = 'Cancellations up to <b class="text-dark">'.$detail['cancelday'].' '.$days.'</b> in advance, with a <b class="text-dark">'.$detail['chargerate'].'% charge</b> of the room price'; break;
												case "full" : $template = 'Cancellations must be made <b class="text-dark">'.$detail['cancelday'].' '.$days.'</b> prior to arrival or the room price will not be refunded.'; break;
											}
											echo $template;
											?>
										</div>
									</div>
								<?php	
								}
								?>
							</div>
						</div>
						<div class="col-4 col-md-2 col-xl-2 order-2 order-md-3">
							<div class="row g-0 justify-content-end">
								<div class="col-auto">
									<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
										<span class="fs-8">
											<i class="fas fa-search"></i>
										</span>
									</button>
								</div>
								<div class="col-auto">
									<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
										<span class="fs-8">
											<i class="fas fa-trash"></i>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<?php	
}
?>


<div class="pb-4 d-none">
	<div class="bg-light border">
		<div class="row py-2 px-2">
			<div class="col-auto col-md-4 col-xl-3">
				<span class="fs-7 text-dark px-1">
					<i class="fas fa-bed"></i>
				</span>
				<span class="fs-7 text-dark px-1 fw-bold">
					All room
				</span>
			</div>
			<div class="col-auto col-md-8 col-xl-9">
				<span class="fs-7 text-dark px-1">
					<i class="fas fa-utensils"></i>
				</span>
				<span class="fs-7 text-dark px-1 fw-bold">
					All meal type
				</span>
			</div>
		</div>
		<div class="border-top bg-white">
			<div class="row">
				<div class="col-8 col-md-4 col-xl-3 order-1 order-md-1">
					<div class="d-flex py-2 px-3">
						<div class="fs-8 text-secondary text-nowrap">
							01 Apr 2023
							<span class="px-1">to</span>
							31 Dec 2023
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-7 order-3 order-md-2">
					<div class="py-2 px-2">
						<div class="d-flex pb-1">
							<div class="pe-2 fs-8 text-secondary">
								1.
							</div>
							<div class="fs-8 text-secondary">
								Cancellations up to 8 days in advance, with a 50% charge of the room price
							</div>
						</div>
						<div class="d-flex pb-1">
							<div class="pe-2 fs-8 text-secondary">
								2.
							</div>
							<div class="fs-8 text-secondary">
								Cancellations must be made 1 day prior to arrival or the room price will not be refunded.
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 col-md-2 col-xl-2 order-2 order-md-3">
					<div class="row g-0 justify-content-end">
						<div class="col-auto">
							<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
								<span class="fs-8">
									<i class="fas fa-search"></i>
								</span>
							</button>
						</div>
						<div class="col-auto">
							<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
								<span class="fs-8">
									<i class="fas fa-trash"></i>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="border-top bg-white">
			<div class="row">
				<div class="col-8 col-md-4 col-xl-3 order-1 order-md-1">
					<div class="d-flex py-2 px-3">
						<div class="fs-8 text-secondary text-nowrap">
							01 Apr 2023
							<span class="px-1">to</span>
							31 Dec 2023
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-7 order-3 order-md-2">
					<div class="py-2 px-2">
						<div class="d-flex pb-1">
							<div class="pe-2 fs-8 text-secondary">
								1.
							</div>
							<div class="fs-8 text-secondary">
								Cancellations up to 7 days in advance, with a 50% charge of the room price
							</div>
						</div>
						<div class="d-flex pb-1">
							<div class="pe-2 fs-8 text-secondary">
								2.
							</div>
							<div class="fs-8 text-secondary">
								Cancellations must be made 2 day prior to arrival or the room price will not be refunded.
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 col-md-2 col-xl-2 order-2 order-md-3">
					<div class="row g-0 justify-content-end">
						<div class="col-auto">
							<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
								<span class="fs-8">
									<i class="fas fa-search"></i>
								</span>
							</button>
						</div>
						<div class="col-auto">
							<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
								<span class="fs-8">
									<i class="fas fa-trash"></i>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

