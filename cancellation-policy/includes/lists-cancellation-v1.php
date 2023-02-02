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


	<div class="mb-4 bg-white border">
		<div class="bg-light">
			<div class="row py-2 px-2">
				<div class="col-auto col-md-4 col-xl-3">
					<div class="d-flex fs-7 fw-bold text-dark">
						<div class="px-1"><i class="fas fa-bed"></i></div>
						<div class="px-1"><?php echo $value['roomcategory']; ?></div>
					</div>
				</div>
				<div class="col-auto col-md-8 col-xl-9">
					<div class="d-flex fs-7 fw-bold text-dark">
						<div class="px-1"><i class="fas fa-utensils"></i></div>
						<div class="px-1"><?php echo $value['mealtype']; ?></div>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($value['daterange'] as $key2 => $item)
			{
			?>
			<div class="border-top p-2 p-lg-0">

				<div class="row">
					<div class="col-12 col-lg-4 col-xl-3">
						<div class="pt-2 pb-2 pb-lg-0 px-2 fs-7 text-secondary">
							<?php echo $item['fromdate'] .' to '. $item['todate']; ?>
						</div>
						<div class="d-block d-lg-none">
							<hr class="my-1 mx-2 text-secondary">
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-8 pt-2 pb-1">
						<?php
						foreach ($item['cancelpolicy'] as $key3 => $detail)
						{
						?>
						<div class="d-flex pb-2 px-2">
							<div class="pe-2 fs-7 text-secondary">
								<?php echo $key3+1; ?>.
							</div>
							<div class="pe-0 fs-7 text-secondary">
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
						<div class="d-block d-lg-none">
							<hr class="my-1 mx-2 text-secondary">
						</div>
					</div>
					<div class="col-12 col-lg-2 col-xl-1 pt-lg-2">

						<div class="d-flex flex-nowrap justify-content-end px-2">
							<div>
								<button 
									class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" 
									onclick="">
									<span class="fs-8">
										<i class="fas fa-search"></i>
									</span>
								</button>
							</div>
							<div>
								<button 
									class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" 
									data-bs-toggle="modal" 
									data-bs-target="#deleteModal">
									<span class="fs-8">
										<i class="fas fa-trash"></i>
									</span>
								</button>
							</div>
						</div>

					</div>
				</div>


				<div class="row d-none">
					<div class="col-12 col-md-4 col-xl-3">
						<div class="row g-2">
							<div class="col-auto fs-7 text-secondary text-nowrap">
								<?php echo $item['fromdate']; ?>
							</div>
							<div class="col-auto fs-7 text-secondary text-nowrap">
								to
							</div>
							<div class="col-auto fs-7 text-secondary text-nowrap">
								<?php echo $item['todate']; ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-8 col-xl-9">

					</div>
				</div>
			</div>
			<?php
			}
		?>
	</div>
	<?php	
}
?>





<!-- <div class="d-flex flex-wrap flex-md-nowrap rn-tablehover">
							<div class="w-100">
								<div class="d-flex pb-2">
									<div class="fs-7 text-secondary px-2">
										<?php echo $key3+1; ?>.
									</div>
									<div class="fs-7 text-secondary">
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
							</div>
							<div>
								<div class="d-flex flex-nowrap">
									<div>
										<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
											<span class="fs-8">
												<i class="fas fa-search"></i>
											</span>
										</button>
									</div>
									<div>
										<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
											<span class="fs-8">
												<i class="fas fa-trash"></i>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>		
						 -->