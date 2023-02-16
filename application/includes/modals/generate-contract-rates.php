
<div
	class="modal fade"
	id="generateContractRateModal"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Generate</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="row gx-3">
					<div class="pb-3 col-12 col-lg-4">
						<div class="pb-1 fs-8 text-secondary">
							Tariff Sets
						</div>
						<div>
							<select class="form-select rounded-0 fs-7">
								<option value="">Select</option>
								<option value="" selected>Master Hotel 2023-2024</option>
							</select>
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-4">
						<div class="pb-1 fs-8 text-secondary">
							Market
						</div>
						<div>
							<select class="form-select rounded-0 fs-7">
								<option value="">Select</option>
								<option value="" selected>All Market</option>
								<option value="">Asian Market</option>
								<option value="">Europe Market</option>
							</select>
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-4">
						<div class="row">
							<div class="col-6 col-lg-12 col-xl-6">
								<div class="pb-1 fs-8 text-secondary">
									Rate code
								</div>
								<div>
									<input type="text" class="form-control rounded-0 fs-7" value="">
								</div>
							</div>
						</div>
					</div>					
					<div class="col-12">
						<div class="row gx-3">
							<div class="pb-3 col-12 col-lg-4">
								<div class="form-check pe-lg-3">
									<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom0" autocomplete="off" checked="">
									<label class="form-check-label fs-8 text-dark fw-bold" for="btncheckroom0">
										Select all room
									</label>
								</div>
								<div class="border-top mt-2 pt-2">
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom1" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom1">
											Standard
										</label>
									</div>
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom2" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom2">
											Deluxe
										</label>
									</div>
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom3" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom3">
											Family suite
										</label>
									</div>
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom4" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom4">
											Villa suite
										</label>
									</div>
								</div>
							</div>
							<div class="pb-3 col-12 col-lg-4">
								<div class="form-check pe-lg-3">
									<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom0" autocomplete="off" checked="">
									<label class="form-check-label fs-8 text-dark fw-bold" for="btncheckroom0">
										Select all status
									</label>
								</div>
								<div class="border-top mt-2 pt-2">
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom1" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom1">
											Available
										</label>
									</div>
									<div class="form-check pe-lg-3">
										<input type="checkbox" class="form-check-input rounded-0" id="btncheckroom1" autocomplete="off" checked="">
										<label class="form-check-label fs-8 text-secondary" for="btncheckroom1">
											On request
										</label>
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
					class="btn btn-secondary rounded-0 fs-7"
					data-bs-dismiss="modal">
					Close
				</button>
				<button
					type="button"
					class="btn btn-primary rounded-0 fs-7"
					data-bs-target="#generateContractRateModal2"
					data-bs-toggle="modal"
					data-bs-dismiss="modal">
					Continue
				</button>
			</div>			
		</div>
	</div>
</div>


<div
	class="modal fade"
	id="generateContractRateModal2"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Generate</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<?php
				for ($i=0; $i < 2; $i++) 
				{ 
				?>

					<?php 
					if ($i>0)
					{
						echo '<div class="pb-3"><hr class="m-0"></div>';
					}
					?>
					<div class="row gx-3">
						<div class="col-12 col-lg-10 col-xl-11">
							<div class="row gx-3">
								<div class="pb-3 col-6 col-lg-3 order-1">
									<div class="pb-1 fs-8 text-secondary">
										From date
									</div>	
									<div class="input-group">
										<input
											type="text"
											class="form-control rounded-0 fs-7"
											value="01 Feb 2023">
										<span class="input-group-text rounded-0">
											<i class="fas fa-calendar-day"></i>
										</span>
									</div>
								</div>
								<div class="pb-3 col-6 col-lg-3 order-2">
									<div class="pb-1 fs-8 text-secondary">
										To date
									</div>	
									<div class="input-group">
										<input
											type="text"
											class="form-control rounded-0 fs-7"
											value="31 Jan 2024">
										<span class="input-group-text rounded-0">
											<i class="fas fa-calendar-day"></i>
										</span>
									</div>
								</div>
								<div class="pb-3 col-6 col-lg-2 order-4 order-lg-3">
									<div class="pb-1 fs-8 text-secondary">
										Min stay
									</div>	
									<div class="input-group">
										<input
											type="number"
											class="form-control rounded-0 fs-7"
											value="0"
											min="0">
									</div>
								</div>
								<div class="pb-3 col-12 col-lg-4 order-3 order-lg-4">
									<div class="pb-1 fs-8 text-secondary">
										Season (Optional)
									</div>	
									<div class="input-group">
										<input
											type="text"
											class="form-control rounded-0 fs-7"
											placeholder="Season name">
									</div>
								</div>
								<div class="pt-2 pb-3 col-12 order-5">
									<div class="row gy-1 gx-2">
										<div class="col-12 col-lg-auto">
											<div class="fs-8 fw-bold text-dark pe-3">
												Day flag
											</div>
										</div>
										<?php 
										for($day=1;$day<=7;$day++) 
										{
											switch ($day) {
												case '1': $day_title = 'Sun'; break;
												case '2': $day_title = 'Mon'; break;
												case '3': $day_title = 'Tue'; break;
												case '4': $day_title = 'Wed'; break;
												case '5': $day_title = 'Thu'; break;
												case '6': $day_title = 'Fri'; break;
												case '7': $day_title = 'Sat'; break;
											}
										?>
										<div class="col-3 col-lg-auto">
											<div class="form-check pe-lg-3">
												<input
													type="checkbox"
													class="form-check-input rounded-0"
													id="<?php echo 'chkDay'.$day; ?>"
													autocomplete="off"
													checked>
												<label 
													class="form-check-label fs-8 text-secondary" 
													for="<?php echo 'chkDay'.$day; ?>">
													<?php echo $day_title; ?>
												</label>
											</div>
										</div>							
										<?php
										}
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2 col-xl-1">
							<?php
							if ($i>0)
							{ 
							?>
							<div class="d-flex justify-content-end">
								<div class="col-auto">
									<button class="btn btn-danger rounded-circle fs-9">
										<i class="fas fa-times"></i>
									</button>
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
			<div class="modal-footer">
				<div class="d-flex justify-content-between w-100">
					<div class="col-auto">
						<button class="btn btn-success rounded-0 fs-7">
							Add more
						</button>
					</div>
					<div class="col-auto">
						<button
							type="button"
							class="btn btn-secondary rounded-0 fs-7"
							data-bs-target="#generateContractRateModal"
							data-bs-toggle="modal" 
							data-bs-dismiss="modal">
							Back
						</button>
						<button
							type="button"
							class="btn btn-primary rounded-0 fs-7"
							data-bs-target="#generateContractRateModal3"
							data-bs-toggle="modal" 
							data-bs-dismiss="modal">
							Continue
						</button>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<div
	class="modal fade"
	id="generateContractRateModal3"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Generate</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<?php
				for ($i=0; $i < 2; $i++) 
				{ 
				?>

					<?php 
					if ($i>0)
					{
						echo '<div class="pb-3"><hr class="m-0"></div>';
					}
					?>


					<div class="row gx-3">
						<div class="col-12 col-lg-10 col-xl-11">
							<div class="row gx-3">
								<div class="pb-3 col-12 col-lg-6 col-xl-5">
									<div class="pb-1 fs-8 text-secondary">
										Meal type
									</div>	
									<div>
										<select class="form-select rounded-0 fs-7">
											<option value="">Select</option>
											<option value="" selected>Room Only</option>
											<option value="">American Breakfast</option>
											<option value="">Asian Breakfast</option>
											<option value="">Indian Breakfast</option>
										</select>
									</div>
								</div>
								<div class="pb-3 col-6 col-lg-3">
									<div class="pb-1 fs-8 text-secondary">
										Adult's meal
									</div>	
									<div class="pb-1">
										<input type="number" class="form-control rounded-0 fs-7" min="0" placeholder="0.00">
									</div>
									<div class="fs-9 text-success">
										Apply to bonus night
									</div>
								</div>
								<div class="pb-3 col-6 col-lg-3">
									<div class="pb-1 fs-8 text-secondary">
										Child's meal
									</div>	
									<div class="pb-1">
										<input type="number" class="form-control rounded-0 fs-7" min="0" placeholder="0.00">
									</div>
									<div class="fs-9 text-success">
										Apply to bonus night
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2 col-xl-1">
							<?php
							if ($i>0)
							{ 
							?>
							<div class="d-flex justify-content-end">
								<div class="col-auto">
									<button class="btn btn-danger rounded-circle fs-9">
										<small><i class="fas fa-times"></i></small>
									</button>
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
			<div class="modal-footer">
				<div class="d-flex justify-content-between w-100">
					<div class="col-auto">
						<button class="btn btn-success rounded-0 fs-7">
							Add more
						</button>
					</div>
					<div class="col-auto">
						<button
							type="button"
							class="btn btn-secondary rounded-0 fs-7"
							data-bs-target="#generateContractRateModal"
							data-bs-toggle="modal" 
							data-bs-dismiss="modal">
							Back
						</button>
						<button
							type="button"
							class="btn btn-primary rounded-0 fs-7"
							data-bs-dismiss="modal">
							Generate
						</button>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>