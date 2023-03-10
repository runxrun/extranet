





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
								<i class="fas fa-exclamation-circle"></i>
							</div>
							<div class="pe-2 fs-7 text-dark fw-bold">
								Cancellation policy
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
								data-bs-target="#modalCancelAddEdit">
								<span class="pe-2 fs-7"><i class="fas fa-plus"></i></span>
								<span class="ps-1 fs-7">Create cancellation</span>
							</a>
						</li>
					</ul>
				</div>
			</div>			
		</div>
		<div class="col-9">
			<div class="pt-3 pb-2 px-2">
				<?php 
				$cancel_array = array(
					array(
						'roomcat' => 'Standard',
						'mealtype' => 'Room only',
						'period' => '01 Jan 2023 to 31 Dec 2023',
						'cxl' => array(
							array('detail' => 'Cancellations must be made 5 days prior to arrival or the room price will not be refunded.',),
						),
					),
					array(
						'roomcat' => 'Deluxe',
						'mealtype' => 'Room only',
						'period' => '01 Apr 2023 to 31 Sep 2023',
						'cxl' => array(
							array('detail' => 'Cancellations must be made 5 days prior to arrival or the room price will not be refunded.',),
						),
					),
					array(
						'roomcat' => 'Deluxe',
						'mealtype' => 'Bed & Breakfast',
						'period' => '01 Apr 2023 to 31 Sep 2023',
						'cxl' => array(
							array('detail' => 'Cancellations must be made 5 days prior to arrival or the room price will not be refunded.',),
						),
					),
					array(
						'roomcat' => 'All rooms',
						'mealtype' => 'All meal type',
						'period' => '01 Jan 2023 to 31 Oct 2023',
						'cxl' => array(
							array('detail' => 'Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.',),
							array('detail' => 'Cancellations up to 5 days in advance, with a 50% charge of the room price',),
							array('detail' => 'Cancellations must be made 2 days prior to arrival or the room price will not be refunded.',),
						),
					),
					array(
						'roomcat' => 'All rooms',
						'mealtype' => 'All meal type',
						'period' => '01 Nov 2023 to 31 Dec 2023',
						'cxl' => array(
							array('detail' => 'Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.',),
							array('detail' => 'Cancellations up to 5 days in advance, with a 50% charge of the room price',),
							array('detail' => 'Cancellations must be made 2 days prior to arrival or the room price will not be refunded.',),
						),
					),
				);


				foreach ($cancel_array as $key => $value)
				{
					$d_none = '';

					if(($key_name==0) && ($key==1)){$d_none = 'd-none';}
					if(($key_name==0) && ($key==2)){$d_none = 'd-none';}
					if(($key_name==1) && ($key==0)){$d_none = 'd-none';}
					if(($key_name==2) && ($key==0)){$d_none = 'd-none';}
					if(($key_name==2) && ($key==1)){$d_none = 'd-none';}
					if(($key_name==2) && ($key==2)){$d_none = 'd-none';}
				?>
				<div class="pb-3 <?php echo $d_none; ?>">					
					<div class="d-flex flex-wrap pb-2">
						<div class="pe-2">
							<div class="fs-7 text-dark fw-bold">
								<?php echo $value["roomcat"]; ?>
							</div>
						</div>
						<div class="pe-2">
							<div class="fs-7 text-dark fw-bold">
								- <?php echo $value["mealtype"]; ?>
							</div>
						</div>
						<div class="pe-2">
							<div class="fs-7 text-dark fw-bold">
								- <?php echo $value["period"]; ?>
							</div>
						</div>
					</div>
					<div class="d-flex flex-wrap g-1">
						<?php
						foreach ($value['cxl'] as $key2 => $item) 
						{
						?>
						<div class="col-12">
							<div class="d-flex justify-content-between">
								<div class="">
									<div class="fs-7 text-secondary">
										- <?php echo $item['detail']; ?>
									</div>
								</div>
								<div class="pe-3">
									<div class="d-flex gx-4">
										<div class="pe-3">
											<button
												class="btn border-0 fs-7 text-primary p-0 w-100 rn-hover-underline" 
												data-bs-toggle="modal"
												data-bs-target="#modalCancelAddEdit">
												Edit
											</button>
										</div>
										<div class="ps-3">
											<button
												class="btn border-0 fs-7 text-danger p-0 w-100 rn-hover-underline"
												data-bs-toggle="modal"
												data-bs-target="#deleteModal">
												Delete
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
			</div>
		</div>
	</div>
</div>







<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Delete Cancellation</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fs-6 text-secondary">
                    Cancellation made prior to 7 days will result in no charges for the cancellation fee on the booking.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalCancelAddEdit" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Add / Update Cancellation Policy</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


				<div class="row g-3">
					<div class="col-12 col-lg-6">
						<div class="fs-7 text-secondary">
							Room category
						</div>	
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7 text-secondary">
								<option value="0">All room category</option>
								<option value="">Standard</option>
								<option value="">Deluxe</option>
								<option value="">Family suite</option>
							</select>
						</div>	
					</div>
					<div class="col-12 col-lg-4">
						<div class="fs-7 text-secondary">
							Meal type
						</div>	
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7 text-secondary">
								<option value="0">All meal type</option>
								<option value="">ABF</option>
								<option value="">Bed & Breakfast</option>
								<option value="">Asian Breakfast</option>
								<option value="">Japanese Breakfast</option>
								<option value="">Room Only</option>
							</select>
						</div>	
					</div>
					<div class="col-6 col-lg-3">
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
					<div class="col-6 col-lg-3">
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
				<div class="pb-4">
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

					<div class="pt-3">
						<div class="row g-3">
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
									<input type="text" class="form-control rounded-0 fs-7 text-center" value="0">
								</div>	
							</div>
							<div class="col-12 col-sm-6 col-lg-2">
								<div class="fs-7 text-secondary">
									Cancel day(s)
								</div>	
								<div class="pt-1">
									<input type="number" class="form-control rounded-0 fs-7" value="0">
								</div>	
							</div>
						</div>
					</div>
					<div class="pt-3">
						<div class="fs-7 text-secondary">
							Remark
						</div>	
						<div>
							<textarea class="form-control rounded-0 w-100 fs-7" cols="30" rows="5" placeholder="Remark"></textarea>
						</div>
					</div>

				</div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary fs-8 rounded-0 px-4"  data-bs-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>