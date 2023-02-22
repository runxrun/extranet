


<div class="border-bottom">
	<div class="row g-0">
		<div class="col-3">
			<div class="p-3">
				<div class="dropdown">
					<button
						type="button"
						id="btnCXL"
						class="btn btn-outline-none p-0 border-0"
						data-bs-toggle="dropdown"
						aria-expanded="false">
						<div class="d-flex">
							<div class="pe-2 fs-7 text-dark">
								<i class="fas fa-tags"></i>
							</div>
							<div class="pe-2 fs-7 text-dark fw-bold">
								Promotion
							</div>
							<div class="ps-2 fs-7 text-dark">
								<i class="fas fa-ellipsis-h"></i>
							</div>
						</div>
					</button>
					<ul class="dropdown-menu rounded-0 w-100 mt-2">
						<li>
							<a
								class="dropdown-item d-flex"
								href="javascript: void(0);"
								data-bs-toggle="modal"
								data-bs-target="#modalPromotionAddEdit">
								<span class="pe-2 fs-7"><i class="fas fa-plus"></i></span>
								<span class="ps-1 fs-7">Create promotion</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-9">


			<?php 
			$promolists = array(
				array(
					'promoclass' => 'text-primary',
					'promotype' => 'Advance Purchase (by Period)',
					'market' => 'All market',
					'roomcatg' => 'All rooms',
					'mealtype' => 'All meal type',
					'rateperiod' => '14 Jan 2023 to 31 May 2023',
					'bookperiod' => '01 July 2023 to 31 Oct 2023',
					'minstay' => 2,
					'dayflag' => array('Mon','Tue','Wed','Thu','Fri',),
					'ratecode' => 'EB10',
					'discounttype' => 'Percent',
					'discountrate' => 10,
					'cancelpromo' => array(
						array('policy'=>'Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.'),
						array('policy'=>'Cancellations up to 5 days in advance, with a 50% charge of the room price.'),
						array('policy'=>'Cancellations must be made 2 days prior to arrival or the room price will not be refunded.'),
					),
				),
				array(
					'promoclass' => 'text-primary',
					'promotype' => 'Advance Purchase (by Period)',
					'market' => 'All market',
					'roomcatg' => 'All rooms',
					'mealtype' => 'All meal type',
					'rateperiod' => '14 Jan 2023 to 31 May 2023',
					'bookperiod' => '01 July 2023 to 31 Oct 2023',
					'minstay' => 2,
					'dayflag' => array('Sat','Sun',),
					'ratecode' => 'EB08',
					'discounttype' => 'Percent',
					'discountrate' => 8,
					'cancelpromo' => array(
						array('policy'=>'Cancellation made prior to 10 days will result in no charges for the cancellation fee on the booking.'),
						array('policy'=>'Cancellations up to 7 days in advance, with a 50% charge of the room price.'),
						array('policy'=>'Cancellations must be made 3 days prior to arrival or the room price will not be refunded.'),
					),
				),
				array(
					'promoclass' => 'text-success',
					'promotype' => 'Long Stay / Pay Less',
					'market' => 'All market',
					'roomcatg' => 'All rooms',
					'mealtype' => 'All meal type',
					'rateperiod' => '14 Jan 2023 to 31 May 2023',
					'bookperiod' => '01 July 2023 to 31 Oct 2023',
					'minstay' => 2,
					'dayflag' => array('Mon','Tue','Wed','Thu','Fri','Sat','Sun',),
					'ratecode' => 'EB08',
					'discounttype' => 'Percent',
					'discountrate' => 8,
					'cancelpromo' => array(
						array('policy'=>'Cancellation made prior to 10 days will result in no charges for the cancellation fee on the booking.'),
						array('policy'=>'Cancellations up to 7 days in advance, with a 50% charge of the room price.'),
						array('policy'=>'Cancellations must be made 3 days prior to arrival or the room price will not be refunded.'),
					),
				),
			);
			?>

			<div class="pt-3 pb-2 px-2">
				<?php
				foreach ($promolists as $key => $value)
				{
				?>
				<div class="pb-2">
					<div class="row g-0 justify-content-between">
						<div class="col-10">
							<button 
								type="button" 
								class="btn d-flex fs-7 <?php echo $value['promoclass'] ?> fw-bold text-uppercase p-0 border-0" 
								data-bs-toggle="collapse"
								data-bs-target="#<?php echo 'collapseExample'.$key_name.$key; ?>" 
								aria-controls="<?php echo 'collapseExample'.$key_name.$key; ?>"
								aria-expanded="false">
								<div class="pe-2"><?php echo $value['promotype']; ?></div>
								<div class="pe-2">- <?php echo $value['market']; ?></div>
								<div class="pe-2">- <?php echo $value['roomcatg']; ?></div>
								<div class="pe-2">- <?php echo $value['mealtype']; ?></div>
							</button>
						</div>
						<div class="col-auto">
							<div class="pe-3">
								<div class="d-flex gx-4">
									<div class="pe-3">
										<button 
											class="btn border-0 fs-7 text-primary p-0 w-100 rn-hover-underline"
											data-bs-toggle="modal"
											data-bs-target="#modalPromotionAddEdit2">
											Edit
										</button>
									</div>
									<div class="ps-3">
										<button
											class="btn border-0 fs-7 text-danger p-0 w-100 rn-hover-underline" 
											data-bs-toggle="modal" 
											data-bs-target="#deleteModalPromotion">
											Delete
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse" id="<?php echo 'collapseExample'.$key_name.$key; ?>">
						<div class="pt-2 fs-7 text-secondary">
							<div class="row">
								<div class="pb-1 col-2 text-dark fw-bold">Rate period</div>
								<div class="pb-1 col-10"><?php echo $value['rateperiod']; ?></div>
								<div class="pb-1 col-2 text-dark fw-bold">Book period</div>
								<div class="pb-1 col-10"><?php echo $value['bookperiod']; ?></div>
								<div class="pb-1 col-2 text-dark fw-bold">Minimum stay</div>
								<div class="pb-1 col-10"><?php echo $value['minstay']; ?> Nights</div>
								<div class="pb-1 col-2 text-dark fw-bold">Day flag</div>
								<div class="pb-1 col-10">
									<div class="row gx-2">
										<?php 
										foreach ($value['dayflag'] as $key2 => $dayflag)
										{
											if($key2!=0){echo '<div class="col-auto">/</div>';}
										?>
										<div class="col-auto"><?php echo $dayflag; ?></div>
										<?php	
										}
										?>
									</div>
								</div>
								<div class="pb-1 col-2 text-dark fw-bold">Rate Code</div>
								<div class="pb-1 col-10"><?php echo $value['ratecode']; ?></div>		
								<div class="pb-1 col-2 text-dark fw-bold">Discount</div>
								<div class="pb-1 col-10"><?php echo $value['discountrate'].' '.$value['discounttype']; ?></div>
							</div>
						</div>
						<div class="pt-3 fs-7 text-secondary">
							<div class="row">
								<div class="col-2 text-dark fw-bold">
									Cancellation policy
								</div>
								<div class="col-10">
									<?php 
									foreach ($value['cancelpromo'] as $key2 => $cancelpromo)
									{
									?>
									<div class="pb-1">
										<?php echo $cancelpromo['policy']; ?>
									</div>
									<?php	
									}
									?>
									
									<div class="pt-2 pb-4">
										<div class="row gx-4">
											<div class="col-auto">
												<button
													class="btn border-0 fs-7 text-success p-0 w-100 rn-hover-underline"
													data-bs-toggle="modal" 
													data-bs-target="#modalStepEditCancellation2">
													Create
												</button>
											</div>
											<div class="col-auto">
												<button
													class="btn border-0 fs-7 text-primary p-0 w-100 rn-hover-underline"
													data-bs-toggle="modal" 
													data-bs-target="#modalStepEditCancellation">
													Edit
												</button>
											</div>
											<div class="col-auto">
												<button
													class="btn border-0 fs-7 text-danger p-0 w-100 rn-hover-underline"
													data-bs-toggle="modal" 
													data-bs-target="#modalStepDeleteCancellation">
													Delete
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php	
				}
				?>
				<div class="pb-3 d-none">
					<div class="fs-7 text-dark fw-bold">
						<div class="pe-2">This room does not contain any promotions or discounts.</div>
					</div>
					<div class="pt-1 fs-7 text-secondary">
						<button 
							class="btn btn-outline-success fs-8 rounded-0"
							data-bs-toggle="modal"
							data-bs-target="#modalPromotionAddEdit">
							Create a new promotion
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>













<div class="modal fade" id="modalPromotionAddEdit" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Add / Update Promotions</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

				<div class="row mb-2">
					<div class="pb-2 col-12 col-lg-6">
						<div class="fs-8 text-secondary text-truncate">
							Market
						</div>
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7" disabled>
								<option value="">All market</option>
							</select>
						</div>
					</div>
					<div class="pb-2 col-12 col-lg-6">
						<div class="fs-8 text-secondary text-truncate">
							Room category
						</div>
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7">
								<option value="">All room category</option>
								<option value="">Standard</option>
								<option value="">Deluxe</option>
								<option value="">Family Suite</option>
							</select>
						</div>
					</div>
					<div class="pb-2 col-12 col-lg-6">
						<div class="fs-8 text-secondary text-truncate">
							Meal type
						</div>
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7">
								<option value="">All meal type</option>
								<option value="">ABF</option>
								<option value="">Asian Breakfast</option>
								<option value="">Bed & Breakfast</option>
								<option value="">Buffet Breakfast</option>
								<option value="">Room Only</option>
							</select>
						</div>
					</div>
				</div>
				<div class="alert alert-warning d-flex py-2" role="alert">
					<div class="pe-1 fs-7">
						<i class="fas fa-exclamation-circle"></i>
					</div>
					<div class="ps-1 fs-7">
				 		Choose the promotion that you wish to generate.
					</div>
				</div>
				<div>
					<div class="row gy-1 gx-4">
					<?php
					$promotype = array(
						array('name'=>'Advance Purchase Rate (by Period)', ),
						array('name'=>'Advance Purchase Rate (by Notice Day)', ),
						array('name'=>'Long Stay / Pay Less', ),
						array('name'=>'Bonus Night (Free Nights Earned)', ),
					);
					?>
					<?php 
					foreach ($promotype as $key => $value)
					{
						$checked = ($key==0 ? 'checked' : '');
					?>
						<div class="col-12 col-lg-6">
							<div class="form-check">
								<input
									type="radio"
									class="form-check-input"
									name="<?php echo 'rdoPromotion_'.$key_name; ?>"
									id="<?php echo 'rdoPromo_'.$key; ?>"
									<?php echo $checked; ?>>
								<label class="form-check-label fs-7 text-secondary" for="<?php echo 'rdoPromo_'.$key; ?>">
									<?php echo $value['name']; ?>
								</label>
							</div>
						</div>
					<?php 
					} 
					?>
					</div>
				</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">
                	Close
                </button>
                <button class="btn btn-primary fs-8 rounded-0 px-4" data-bs-target="#modalPromotionAddEdit2" data-bs-toggle="modal">
	                Continue
	            </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPromotionAddEdit2" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Add / Update Promotions</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

				<div class="alert alert-warning d-flex py-2" role="alert">
					<div class="pe-1 fs-7">
						<i class="fas fa-exclamation-circle"></i>
					</div>
					<div class="ps-1 fs-7">
				 		Advance Purchase Rate (by Period) Detail
					</div>
				</div>
            	

				<div class="row gx-3">
					<div class="pb-3 col-12 col-lg-3">
						<div class="pb-1 fs-8 text-secondary">
							Minimum stay
						</div>
						<div>
							<input type="number" class="form-control rounded-0 fs-7 text-center" value="0" min="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-9">
						<div class="row gx-3">
							<div class="pb-3 col-12 col-lg-4">
								<div class="pb-1 fs-8 text-secondary">
									Book from date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="01 Oct 2022">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
							<div class="pb-3 col-12 col-lg-4">
								<div class="pb-1 fs-8 text-secondary">
									Book to date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="30 Sep 2023">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="row gx-3">
							<div class="pb-3 col-12 col-lg-4">
								<div class="pb-1 fs-8 text-secondary">
									Rate from date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="01 Jan 2023">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
							<div class="pb-3 col-12 col-lg-4">
								<div class="pb-1 fs-8 text-secondary">
									Rate to date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="30 Sep 2023">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="border-top py-3">
					<div class="row g-3">
						<div class="col-12 col-lg-3">
							<div class="d-flex">
								<span class="fs-7 fw-bold text-dark pe-2">
									<i class="far fa-window-maximize"></i>
								</span>
								<span class="fs-7 fw-bold text-dark">
									Applicable for
								</span>
							</div>
						</div>
						<div class="col-12 col-lg-9">
							<div class="row g-3">
								<div class="col-12 col-lg-4">
									<div class="row">
										<div class="col-12">
											<div class="pb-2 form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="selected_all" checked="">
								                <label class="form-check-label fw-bold text-dark" for="selected_all">Select all</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_mon" checked="">
								                <label class="form-check-label" for="dayflag_mon">Monday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_tue" checked="">
								                <label class="form-check-label" for="dayflag_tue">Tueday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_wed" checked="">
								                <label class="form-check-label" for="dayflag_wed">Wednesday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_thu" checked="">
								                <label class="form-check-label" for="dayflag_thu">Thursday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_fri" checked="">
								                <label class="form-check-label" for="dayflag_fri">Friday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_sat" checked="">
								                <label class="form-check-label" for="dayflag_sat">Saturday</label>
								            </div>
										</div>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="dayflag_sun" checked="">
								                <label class="form-check-label" for="dayflag_sun">Sunday</label>
								            </div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="pb-2 form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="selected_all_roomtype" checked="">
								        <label class="form-check-label fw-bold text-dark" for="selected_all_roomtype">Select all</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="sgtwdb" checked="">
								        <label class="form-check-label" for="sgtwdb">Single / Twin / Double</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="quad" checked="">
								        <label class="form-check-label" for="quad">Quad</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="extrabed" checked="">
								        <label class="form-check-label" for="extrabed">Extra bed</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="extrabedchild" checked="">
								        <label class="form-check-label" for="extrabedchild">Extra bed - child</label>
								    </div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="pb-2 form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="selected_all_meal" checked disabled>
								        <label class="form-check-label fw-bold text-dark" for="selected_all_meal">Select all</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="bfad" checked disabled>
								        <label class="form-check-label" for="bfad">Breakfast adult</label>
								    </div>
								    <div class="form-check fs-7 text-secondary">
								        <input class="form-check-input rounded-0" type="checkbox" id="bfch" checked disabled>
								        <label class="form-check-label" for="bfch">Breakfast child</label>
								    </div>
								</div>
							</div>
							<div class="mt-3 row g-3">
						        <div class="col-12 col-lg-4">
									<div class="pb-1 fs-8 text-secondary">
										Promotion code
									</div>
									<div>
										<input type="text" class="form-control rounded-0 fs-7 text-center" value="">
									</div>
						        </div>
						        <div class="col-12 col-lg-4">
									<div class="pb-1 fs-8 text-secondary">
										Discount
									</div>
									<div>
										<select class="form-select rounded-0 fs-7">
											<option>Please select</option>
											<option>Amount</option>
											<option selected="">Percent</option>
										</select>
									</div>
						        </div>
						        <div class="col-12 col-lg-4">
									<div class="pb-1 fs-8 text-secondary">
										Discount Rate
									</div>
									<div>
										<input type="number" class="form-control rounded-0 fs-7 text-center" value="10">
									</div>
						        </div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
                <button
                	type="button"
                	class="btn btn-secondary fs-8 rounded-0"
                	data-bs-target="#modalPromotionAddEdit"
                	data-bs-toggle="modal">
					Back                		
                </button>
                <button
                	type="button"
                	class="btn btn-primary fs-8 rounded-0 px-4"
                	data-bs-dismiss="modal">
            		Save changes
            	</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="deleteModalPromotion" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Delete Promotion</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fs-6 text-secondary">
                    Would you like to proceed with delete this promotion?
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>



















<div class="modal fade" id="modalStepDeleteCancellation" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-6 fw-bold text-dark">Select cancellation policy</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        		<?php 
        		$select_cxl = array(
					array('desc' => 'Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.'),
					array('desc' => 'Cancellations up to 5 days in advance, with a 50% charge of the room price.'),
					array('desc' => 'Cancellations must be made 2 days prior to arrival or the room price will not be refunded.'),
        		);
        		foreach ($select_cxl as $key => $value)
        		{
        			$checked = ($key==0 ? 'checked' : '');
        		?>
	            	<div class="d-flex">
	            		<div class="">
							<div class="form-check fs-7">
								<input
									type="radio"
									name="select_cxl"
									id="<?php echo 'chk'.$key; ?>"
									<?php echo $checked; ?>
									class="form-check-input">
								<label class="form-check-label text-secondary" for="<?php echo 'chk'.$key;?>">
									<?php echo $value['desc']; ?>
								</label>
							</div>
	            		</div>
	            	</div>
        		<?php
        		}
        		?>
            </div>
            <div class="modal-footer">
		        <button 
			        type="button"
			        class="btn btn-secondary rounded-0 fs-7"
			        data-bs-dismiss="modal">
				    Close
				</button>
		        <button
		        	type="button"
		        	class="btn btn-danger rounded-0 fs-7"
		        	data-bs-target="#modalStepDeleteCancellation2"
		        	data-bs-toggle="modal">
	        		Delete Cancellation
	        	</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modalStepDeleteCancellation2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-6 fw-bold text-dark">Delete cancellation policy</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="text-secondary">
	            	Would you like to proceed with delete this promotion?
	            	<br>
	            	<br>
            	</div>
			</div>
            <div class="modal-footer">
		        <button 
			        type="button"
			        class="btn btn-secondary rounded-0 fs-7"
		        	data-bs-target="#modalStepDeleteCancellation"
		        	data-bs-toggle="modal">
				    Back
				</button>
		        <button
		        	type="button"
		        	class="btn btn-danger rounded-0 fs-7"
			        data-bs-dismiss="modal">
	        		Delete
	        	</button>
            </div>
        </div>
    </div>
</div>








<div class="modal fade" id="modalStepEditCancellation" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-6 fw-bold text-dark">Select cancellation policy</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        		<?php 
        		$select_cxl = array(
					array('desc' => 'Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.'),
					array('desc' => 'Cancellations up to 5 days in advance, with a 50% charge of the room price.'),
					array('desc' => 'Cancellations must be made 2 days prior to arrival or the room price will not be refunded.'),
        		);
        		foreach ($select_cxl as $key => $value)
        		{
        			$checked = ($key==0 ? 'checked' : '');
        		?>
	            	<div class="d-flex">
	            		<div class="">
							<div class="form-check fs-7">
								<input
									type="radio"
									name="select_cxl"
									id="<?php echo 'chk'.$key; ?>"
									<?php echo $checked; ?>
									class="form-check-input">
								<label class="form-check-label text-secondary" for="<?php echo 'chk'.$key;?>">
									<?php echo $value['desc']; ?>
								</label>
							</div>
	            		</div>
	            	</div>
        		<?php
        		}
        		?>
            </div>
            <div class="modal-footer">
		        <button 
			        type="button"
			        class="btn btn-secondary rounded-0 fs-7"
			        data-bs-dismiss="modal">
				    Close
				</button>
		        <button
		        	type="button"
		        	class="btn btn-primary rounded-0 fs-7"
		        	data-bs-target="#modalStepEditCancellation2"
		        	data-bs-toggle="modal">
	        		Edit Cancellation
	        	</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modalStepEditCancellation2" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-6 fw-bold text-dark">Add/Edit cancellation policy</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


				<div class="row g-3">
					<div class="col-12 col-lg-6">
						<div class="fs-7 text-secondary">
							Promotion
						</div>	
						<div class="pt-1">
							<input type="text" class="form-control rounded-0 fs-7" value="Advance Purchase (by Period)" disabled>
						</div>	
					</div>
					<div class="col-12 col-lg-6">
						<div class="fs-7 text-secondary">
							Room category
						</div>	
						<div class="pt-1">
							<input type="text" class="form-control rounded-0 fs-7" value="All rooms" disabled>
						</div>	
					</div>
					<div class="col-12 col-lg-6">
						<div class="fs-7 text-secondary">
							Meal type
						</div>	
						<div class="pt-1">
							<input type="text" class="form-control rounded-0 fs-7" value="All meal type" disabled>
						</div>	
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							From date
						</div>	
						<div class="pt-1">
							<div class="input-group">
								<input type="text" class="form-control rounded-0 fs-7" value="01 Jan 2023">
								<span class="input-group-text rounded-0">
									<i class="fas fa-calendar-day"></i>
								</span>
							</div>
						</div>	
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							To date
						</div>	
						<div class="pt-1">
							<div class="input-group">
								<input type="text" class="form-control rounded-0 fs-7" value="31 Dec 2023">
								<span class="input-group-text rounded-0">
									<i class="fas fa-calendar-day"></i>
								</span>
							</div>
						</div>	
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							Charge type
						</div>	
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7">
								<option value="">Select</option>
								<option value="">Amount</option>
								<option value="">Precent</option>
								<option value="">Full charge</option>
								<option value="">Night/Room</option>
							</select>
						</div>	
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							Charge rate
						</div>	
						<div class="pt-1">
							<input type="number" class="form-control rounded-0 fs-7" value="0" min="0">
						</div>	
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							Cancel day(s) Only number
						</div>	
						<div class="pt-1">
							<input type="number" class="form-control rounded-0 fs-7" value="0" min="0">
						</div>	
					</div>
				</div>

				<div class="py-4">
					<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
						<i class="fas fa-exclamation-circle"></i>
						<span class="px-2">
							If the box is check (No show - Non Refundable) sentence will be automatically added on 
							for any concerned hotel on this cancellation policy.
						</span>
					</div>
				</div>


				<div class="row">
					<div class="col-auto">
						<div class="form-check">
							<input type="checkbox" id="no_show" class="form-check-input rounded-0" value="No show - Non Refundable">
							<label class="form-check-label fs-7 text-secondary" for="no_show">
								No show - Non Refundable
							</label>
						</div>
					</div>
					<div class="col-auto">
						<div class="form-check">
							<input type="checkbox" id="non_refundable" class="form-check-input rounded-0" value="Non - Refundable">
							<label class="form-check-label fs-7 text-secondary" for="non_refundable">
								Non - Refundable
							</label>
						</div>
					</div>
				</div>



            </div>
            <div class="modal-footer">
                <button
                	type="button"
                	class="btn btn-secondary fs-8 rounded-0"
                	data-bs-target="#modalStepEditCancellation"
                	data-bs-toggle="modal">
					Back                		
                </button>
		        <button
		        	type="button"
		        	class="btn btn-primary rounded-0 fs-7"
		        	data-bs-target="#modalStepEditCancellation2"
		        	data-bs-toggle="modal">
	        		Save changes
	        	</button>
            </div>
        </div>
    </div>
</div>














<!-- 
<div class="border-bottom d-none">
	<div class="row g-0">
		<div class="col-3">
			<div class="p-3">
				<div class="dropdown">
					<button
						type="button"
						id="btnCXL"
						class="btn btn-outline-none p-0 border-0"
						data-bs-toggle="dropdown"
						aria-expanded="false">
						<div class="d-flex">
							<div class="pe-2 fs-7 text-dark">
								<i class="fas fa-tags"></i>
							</div>
							<div class="pe-2 fs-7 text-dark fw-bold">
								Promotion
							</div>
							<div class="ps-2 fs-7 text-dark">
								<i class="fas fa-ellipsis-h"></i>
							</div>
						</div>
					</button>
					<ul class="dropdown-menu rounded-0 w-100 mt-2">
						<li>
							<a
								class="dropdown-item d-flex"
								href="javascript: void(0);"
								data-bs-toggle="modal"
								data-bs-target="#modalPromotionAddEdit">
								<span class="pe-2 fs-7"><i class="fas fa-plus"></i></span>
								<span class="ps-1 fs-7">Create promotion</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-9">
			<div class="pt-3 pb-2 px-2">
				

				<div class="pb-3">
					<div class="d-flex fs-7 text-primary fw-bold">
						<div class="pe-2">Advance Purchase (by Period)</div>
						<div class="pe-2">- All rooms</div>
						<div class="pe-2">- All meal type</div>
					</div>
					<div class="pt-2 fs-7 text-secondary">
						<div class="row">
							<div class="col-2 text-dark fw-bold">Rate period</div>
							<div class="col-10">14 Jan 2023 to 31 May 2023</div>
							<div class="col-2 text-dark fw-bold">Book period</div>
							<div class="col-10">01 Apr 2023 to 31 Oct 2023</div>
							<div class="col-2 text-dark fw-bold">Minimum stay</div>
							<div class="col-10">2 Nights</div>
							<div class="col-2 text-dark fw-bold">Day flag</div>
							<div class="col-10">
								<div class="row gx-2">
									<div class="col-auto">Mon</div>
									<div class="col-auto">/</div>
									<div class="col-auto">Tue</div>
									<div class="col-auto">/</div>
									<div class="col-auto">Wed</div>
									<div class="col-auto">/</div>
									<div class="col-auto">Thu</div>
									<div class="col-auto">/</div>
									<div class="col-auto">Fri</div>
								</div>
							</div>
							<div class="col-2 text-dark fw-bold">Rate Code</div>
							<div class="col-10">EB10</div>		
							<div class="col-2 text-dark fw-bold">Discount</div>
							<div class="col-10">Pecent</div>		
							<div class="col-2 text-dark fw-bold">Discount Rate</div>
							<div class="col-10">10%</div>
						</div>
					</div>
				</div>
				<div class="pb-3">
					<div class="d-flex fs-7 text-primary fw-bold">
						<div class="pe-2">Advance Purchase (by Period)</div>
						<div class="pe-2">- All rooms</div>
						<div class="pe-2">- All meal type</div>
					</div>
					<div class="pt-2 fs-7 text-secondary">
						<div class="row">
							<div class="col-2 text-dark fw-bold">Rate period</div>
							<div class="col-10">14 Jan 2023 to 31 May 2023</div>
							<div class="col-2 text-dark fw-bold">Book period</div>
							<div class="col-10">01 Apr 2023 to 31 Oct 2023</div>
							<div class="col-2 text-dark fw-bold">Minimum stay</div>
							<div class="col-10">2 Nights</div>
							<div class="col-2 text-dark fw-bold">Day flag</div>
							<div class="col-10">
								<div class="row gx-2">
									<div class="col-auto">Sat</div>
									<div class="col-auto">/</div>
									<div class="col-auto">Sun</div>
								</div>
							</div>
							<div class="col-2 text-dark fw-bold">Rate Code</div>
							<div class="col-10">EB5</div>		
							<div class="col-2 text-dark fw-bold">Discount</div>
							<div class="col-10">Pecent</div>		
							<div class="col-2 text-dark fw-bold">Discount Rate</div>
							<div class="col-10">5%</div>
						</div>
					</div>
				</div>

				<div class="pb-3">
					<div class="d-flex fs-7 text-success fw-bold">
						<div class="pe-2">Long stay / Pay less</div>
						<div class="pe-2">- All rooms</div>
						<div class="pe-2">- All meal type</div>
					</div>
					<div class="pt-2 fs-7 text-secondary">
						<div class="row">
							<div class="col-2 text-dark fw-bold">Rate period</div>
							<div class="col-10">14 Jan 2023 to 31 May 2023</div>
							<div class="col-2 text-dark fw-bold">Book period</div>
							<div class="col-10">01 Apr 2023 to 31 Oct 2023</div>
							<div class="col-2 text-dark fw-bold">Minimum stay</div>
							<div class="col-10">5 Nights</div>
							<div class="col-2 text-dark fw-bold">Promotion code</div>
							<div class="col-10">LN10</div>		
							<div class="col-2 text-dark fw-bold">Discount</div>
							<div class="col-10">Pecent</div>		
							<div class="col-2 text-dark fw-bold">Discount Rate</div>
							<div class="col-10">5%</div>
						</div>
					</div>
				</div>


				<div class="pb-2">
					<div class="d-flex fs-7 text-success fw-bold">
						<div class="pe-2">
							Long stay / Pay less
						</div>
						<div class="pe-2">
							- All rooms
						</div>
						<div class="pe-2">
							- All meal type
						</div>
					</div>
					<div class="pt-2 fs-7 text-secondary">
						<div>Rate period : 14 Jan 2023 to 31 May 2023</div>
						<div>Book period : 01 Apr 2023 to 31 Oct 2023</div>
					</div>
					<div class="pt-2 fs-7 text-secondary">
						<div>Rate Code : LT15</div>
						<div>Discount : Pecent</div>
						<div>Discount Rate : 15%</div>
					</div>
				</div>



			</div>
		</div>
	</div>
</div>

 -->