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
									<div class="row">
										<div class="col-12">
											<div class="pb-2 form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="selected_all" checked>
								                <label class="form-check-label fw-bold text-dark" for="selected_all">Select all</label>
								            </div>
										</div>
										<?php
										$dayflag = array(
											array('id' => 'dayflag_mon','day' => 'Monday',),
											array('id' => 'dayflag_tue','day' => 'Tueday',),
											array('id' => 'dayflag_wed','day' => 'Wednesday',),
											array('id' => 'dayflag_thu','day' => 'Thursday',),
											array('id' => 'dayflag_fri','day' => 'Friday',),
											array('id' => 'dayflag_sat','day' => 'Saturday',),
											array('id' => 'dayflag_sun','day' => 'Sunday',),
										);
										foreach ($dayflag as $key => $value) {
										?>
										<div class="col-12">
								            <div class="form-check fs-7 text-secondary">
								                <input class="form-check-input rounded-0" type="checkbox" id="<?php echo $value['id']; ?>" checked>
								                <label class="form-check-label" for="<?php echo $value['id']; ?>"><?php echo $value['day']; ?></label>
								            </div>
										</div>
										<?php
										}
										?>
									</div>
						    	</div>
						        <div class="col-12 col-lg-4">
									<div class="pb-2 form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="selected_all_roomtype" checked>
						                <label class="form-check-label fw-bold text-dark" for="selected_all_roomtype">Select all</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="sgtwdb" checked>
						                <label class="form-check-label" for="sgtwdb">Single / Twin / Double</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="quad" checked>
						                <label class="form-check-label" for="quad">Quad</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="extrabed" checked>
						                <label class="form-check-label" for="extrabed">Extra bed</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="extrabedchild" checked>
						                <label class="form-check-label" for="extrabedchild">Extra bed - child</label>
						            </div>
						        </div>
						        <div class="col-12 col-lg-4">
									<div class="pb-2 form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="selected_all_meal" checked>
						                <label class="form-check-label fw-bold text-dark" for="selected_all_meal">Select all</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="bfad" checked>
						                <label class="form-check-label" for="bfad">Breakfast adult</label>
						            </div>
						            <div class="form-check fs-7 text-secondary">
						                <input class="form-check-input rounded-0" type="checkbox" id="bfch" checked>
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