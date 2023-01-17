<div class="bg-white border-bottom rounded-1 mt-3">
	<div class="p-4">
		<div class="row">
			<div class="pb-3 col-12 col-md-6 col-lg-4">
				<div class="fs-8 text-secondary text-truncate">
					Room category name
				</div>
				<div class="pt-1">
					<select class="form-select rounded-0 fs-7">
						<option value="">Please select</option>
					</select>
				</div>
			</div>
			<div class="pb-3 col-12 col-md-6 col-lg-4">
				<div class="fs-8 text-secondary text-truncate">
					Market's name
				</div>
				<div class="pt-1">
					<select class="form-select rounded-0 fs-7">
						<option value="">Please select</option>
					</select>
				</div>
			</div>
			<div class="pb-3 col-12 col-md-6 col-lg-4">
				<div class="fs-8 text-secondary text-truncate">
					Meal type
				</div>
				<div class="pt-1">
					<select class="form-select rounded-0 fs-7">
						<option value="">Please select</option>
					</select>
				</div>
			</div>
		</div>


		<div>
			<div class="row gx-3">
				<div class="col-auto">
					<button
						class="btn btn-primary rounded-0 py-2 fs-8"
						data-bs-toggle="collapse"
						data-bs-target="#collapseSetPromotion"
						aria-controls="collapseSetPromotion"
						aria-expanded="false">
						<span class="px-4">Set promotion</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-outline-primary rounded-0 py-2 fs-8">
						<span class="px-4">Save as</span>
					</button>
				</div>				
			</div>
		</div>


	</div>
</div>



<div class="-collapse" id="collapseSetPromotion">
	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="p-4">

			<div class="alert alert-warning d-flex py-2" role="alert">
				<div class="pe-1 fs-7">
					<i class="fas fa-exclamation-circle"></i>
				</div>
				<div class="ps-1 fs-7">
			 		Select Promotions to Activate selected right to left box, 
			 		deactivate from left to right box.
				</div>
			</div>

			<div class="row align-items-center">
				<div class="pb-3 col-12 col-lg-5">
					<div class="border">
						<div class="d-flex bg-success py-2 px-3 fs-7">
							<div class="pe-1 text-white">
								<i class="fas fa-check-circle"></i>
							</div>
							<div class="ps-1 fw-bold text-white">
								Promotions is activated
							</div>
						</div>
						<div class="border-top rn-overflew-y h-300px">
							<div class="border-bottom">
								<div class="d-flex">
									<div class="py-2 px-3">
										<input type="checkbox">
									</div>
									<div class="py-2 px-3 border-start">
										<div class="fs-7 text-dark">
											Advance Purchase Rate (by Period)
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pb-3 col-12 col-lg-2">
					<div class="row justify-content-center">
						<div class="py-2 col-6 col-md-3 col-lg-12">
							<button class="btn btn-outline-primary py-2 w-100 rounded-0 d-flex fs-7">
								<div class="pe-1"><i class="fas fa-plus-circle"></i></div>
								<div class="ps-1 fw-bold">Add</div>
							</button>
						</div>
						<div class="py-2 col-6 col-md-3 col-lg-12">
							<button class="btn btn-outline-danger py-2 w-100 rounded-0 d-flex fs-7" disabled>
								<div class="pe-1"><i class="fas fa-minus-circle"></i></div>
								<div class="ps-1 fw-bold">Remove</div>
							</button>
						</div>
					</div>
				</div>
				<div class="pb-3 col-12 col-lg-5">					
					<div class="border">
						<div class="d-flex bg-light py-2 px-3 fs-7">
							<div class="pe-1 text-dark">
								<i class="fas fa-list"></i>
							</div>
							<div class="ps-1 fw-bold text-dark">
								Promotions list
							</div>
						</div>
						<div class="border-top rn-overflew-y h-300px">
							<?php 
							$promolist = array(
								array("name"=>"Bonus Night (Free Night(s) Earned)",),
								array("name"=>"Long Stay / Pay Less",),
								array("name"=>"Advance Purchase Rate (by Notice Day)",),
							);
							foreach ($promolist as $key => $value)
							{
							?>
							<div class="border-bottom">
								<div class="d-flex">
									<div class="py-2 px-3">
										<input type="checkbox">
									</div>
									<div class="py-2 px-3 border-start">
										<div class="fs-7 text-dark">
											<?php echo $value['name']; ?>
										</div>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="p-4">
			<div class="row justify-content-between">
				<div class="col-12 col-lg-9 order-1 order-lg-0">
					<div class="d-flex">
						<span class="fs-6 fw-bold text-primary pe-2">
							<i class="fas fa-info-circle"></i>
						</span>
						<span class="fs-6 fw-bold text-primary">
							Advance Purchase Rate (by Period)
						</span>
					</div>
				</div>
				<div class="pb-3 pb-lg-0 col-auto order-0 order-lg-1">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						data-bs-toggle="modal"
						data-bs-target="#addeditPromotion">
						<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
						<span class="pe-2">Add new</span>
					</button>
				</div>
			</div>		
		</div>
	</div>
	<div class="table-responsive fs-8 border-top border-2 border-primary">
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-white text-dark">
					<th scope="col" class="text-center text-dark">#</th>
					<th scope="col" class="text-nowrap">Min stay</th>
					<th scope="col" class="text-nowrap">Book from date</th>
					<th scope="col" class="text-nowrap">Book to date</th>
					<th scope="col" class="text-nowrap">Rate from date</th>
					<th scope="col" class="text-nowrap">Rate to date</th>
					<th scope="col" class="text-nowrap">Day flag</th>
					<th scope="col" class="text-nowrap">Rate code</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-white text-secondary">
					<th scope="row" class="text-center text-dark">1</th>
					<td>3</td>
					<td>01 Oct 2022</td>
					<td>30 Sep 2023</td>
					<td>01 Jan 2023</td>
					<td>30 Sep 2023</td>
					<td>1234567</td>
					<td>EB11</td>
					<td class="p-0">
						<button
							class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
							data-bs-toggle="modal"
							data-bs-target="#addeditPromotion">
							<span class="fs-8">
								<i class="fas fa-search"></i>
							</span>
						</button>
					</td>
					<td class="p-0">
						<button
							class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0"
							data-bs-toggle="modal"
							data-bs-target="#deleteModal">
							<span class="fs-8">
								<i class="fas fa-trash"></i>
							</span>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="py-4">	
		<div class="row justify-content-between">		
			<div class="col-auto">
				<button class="btn btn-secondary rounded-0 py-2 fs-8 text-white" onclick="window.open('/promotion/','_self');">
					<span><i class="fas fa-undo"></i></span>
					<span class="px-2">Back</span>
				</button>			
			</div>
			<div class="col-auto">
				
				<div class="row g-2 justify-content-end">
					<div class="col-auto">
						<button class="btn btn-secondary rounded-0 py-2 fs-8 text-white" onclick="window.open('/promotion/','_self');">
							<span class="px-2">Cancel</span>
						</button>
					</div>
					<div class="col-auto">
						<button class="btn btn-success rounded-0 py-2 fs-8 text-white" onclick="window.open('/promotion/?page=add-promotion','_self');">
							<span class="px-4">Save</span>
						</button>
					</div>
				</div>	
			</div>
		</div>
	</div>



	<div 
		class="modal fade"
		id="deleteModal"
		tabindex="-1"
		aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	            <div class="modal-header">
	                <div class="fs-6 fw-bold text-dark">Delete contact</div>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div>
	            <div class="modal-body">
	            	<div class="fs-6 text-secondary">
	            		Can you confirm that you wish to delete this promotion 
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
    <div 
    	class="modal fade"
    	id="addeditPromotion"
    	tabindex="-1"
    	aria-labelledby="exampleModalLabel"    	
 		data-bs-backdrop="static"
 		data-bs-keyboard="false"
 		aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                	<div class="modal-title fw-bold fs-6">
	                	Advance Purchase Rate (by Period) Detail
	                </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
					<div class="row gx-3">
						<div class="pb-3 col-12 col-lg-3">
							<div class="pb-1 fs-8 text-secondary">
								Min stay
							</div>
							<div>
								<input type="number" class="form-control rounded-0 fs-7 text-center" value="3">
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
					            <div class="d-flex ">
					                <span class="fs-6 fw-bold text-dark pe-2">
					                    <i class="far fa-window-maximize"></i>
					                </span>
					                <span class="fs-6 fw-bold text-dark">
					                    Applicable for
					                </span>
					            </div>
					        </div>
					        <div class="col-12 col-lg-9">
							    <div class="row g-3">
							        <div class="col-12 col-lg-4">
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="sgtwdb">
							                <label class="form-check-label" for="sgtwdb">Single / Twin / Double</label>
							            </div>
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="quad">
							                <label class="form-check-label" for="quad">Quad</label>
							            </div>
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="extrabed">
							                <label class="form-check-label" for="extrabed">Extra bed</label>
							            </div>
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="extrabedchild">
							                <label class="form-check-label" for="extrabedchild">Extra bed - child</label>
							            </div>
							        </div>
							        <div class="col-12 col-lg-4">
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="bfad">
							                <label class="form-check-label" for="bfad">Breakfast adult</label>
							            </div>
							            <div class="form-check fs-7 text-secondary">
							                <input class="form-check-input" type="checkbox" value="" id="bfch">
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
											<input type="text" class="form-control rounded-0 fs-7 text-center" value="EB11">
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
												<option selected>Percent</option>
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
					<button type="button" class="btn btn-secondary rounded-1 fs-7" data-bs-dismiss="modal">
						Close
					</button>
					<button type="button" class="btn btn-primary rounded-1 fs-7" data-bs-dismiss="modal">
						Save changes
					</button>
				</div>
            </div>
        </div>
    </div>



</div>
