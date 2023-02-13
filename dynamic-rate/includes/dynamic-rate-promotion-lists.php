


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

			<div class="pt-3 pb-2 px-2">
				<div class="pb-3">
					<div class="d-flex fs-7 text-primary fw-bold">
						<div class="pe-2">Advance Purchase (by Period)</div>
						<div class="pe-2">- All market</div>
						<div class="pe-2">- All rooms</div>
						<div class="pe-2">- All meal type</div>
					</div>					
					<div class="pt-2 fs-7 text-secondary">
						<div class="row">
							<div class="col-2 text-dark fw-bold">Rate period</div>
							<div class="col-10">14 Jan 2023 to 31 May 2023</div>
							<div class="col-2 text-dark fw-bold">Book period</div>
							<div class="col-10">01 July 2023 to 31 Oct 2023</div>
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


				<br>
				<br>
				<br>
				<br>


				<div class="pb-3">
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
						array('name'=>'Bonus Night (Free Nights Earned)', ),
						array('name'=>'Long Stay / Pay Less', ),
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