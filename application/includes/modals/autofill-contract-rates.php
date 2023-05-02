
<div
	class="modal fade"
	id="autoFillContractRateModal"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">		
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Overlap contract rates data in form</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="alert alert-warning fs-8 py-2 px-3" role="alert">
					<div class="d-flex">
						<div class="pe-2"><i class="fas fa-exclamation-circle"></i></div>
						<div class="pe-2">Please make sure your actions are correct</div>
						<!-- <div class="pe-2">Please ensure that your actions do not overlap with the previous ones.</div> -->
					</div>  
				</div>


				<div class="pb-3">
					<div class="row g-3">
						<div class="col-12 col-lg-6">
							<div class="fs-8 text-secondary">
								Room category
							</div>
							<div class="pt-1">
								<select class="form-select rounded-0 fs-7">
									<option value="">1 Bedroom</option>
									<option value="">2 Bedroom</option>
									<option value="">Studio</option>
									<option value="">Villa Suite</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="fs-8 text-secondary">
								Meal type
							</div>
							<div class="pt-1">
								<select class="form-select rounded-0 fs-7">
									<option value="">Room Only</option>
									<option value="" selected>Bed and Breakfast</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- 
					<div class="pt-3 pb-2">
						<div class="bg-light py-2 px-3 border-bottom">
							<div class="fs-7 fw-bold text-dark">
								Select period
							</div>
						</div>
					</div>
				<div class="d-flex align-items-center py-3">
					<div class="pe-2 fs-6 text-dark">
						<i class="fas fa-calendar-day"></i>
					</div>
					<div class="pe-2 fs-6 fw-bold text-dark">
						Select period
					</div>
				</div>
				-->
				
				<div class="pb-3">
						<div class="row g-3">
							<div class="col-3">
								<div class="pb-1 fs-8 text-secondary">
									From date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="14 May 2023">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
							<div class="col-3">
								<div class="pb-1 fs-8 text-secondary">
									To date
								</div>
								<div class="input-group">
									<input type="text" class="form-control rounded-0 fs-7" value="23 May 2023">
									<span class="input-group-text rounded-0">
										<i class="fas fa-calendar-day"></i>
									</span>
								</div>
							</div>
							<div class="col-2">
								<div class="fs-8 text-secondary">
									Min Stay
								</div>
								<div class="pt-1">
									<input type="number" class="form-control rounded-0 fs-7" value="">
								</div>
							</div>
							<div class="col-2">
								<div class="fs-8 text-secondary">
									Allotment
								</div>
								<div class="pt-1">
									<input type="number" class="form-control rounded-0 fs-7" value="">
								</div>
							</div>
							<div class="col-2">
								<div class="fs-8 text-secondary">
									Cut-off
								</div>
								<div class="pt-1">
									<input type="number" class="form-control rounded-0 fs-7" value="">
								</div>
							</div>
						</div>
				</div>
				<!-- 
				<div class="pt-3 pb-2">
					<div class="bg-light py-2 px-3 border-bottom">
						<div class="fs-7 fw-bold text-dark">
							Auto-fill
						</div>
					</div>
				</div>
				-->
				<div class="d-flex align-items-center py-3">
					<div class="pe-2 fs-6 text-dark">
						<i class="fas fa-calendar-day"></i>
					</div>
					<div class="pe-2 fs-6 fw-bold text-dark">
						Standard rate
					</div>
				</div>
				<div class="pb-3">
					<div class="row g-3">
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Single
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Twin / Double
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Quad
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Extra Bed Adult
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Extra Bed Child
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
								Child Price
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
							</div>
						</div>
						<div class="col-4 col-lg-3">
							<div class="fs-8 text-secondary">
							Child sharing pay breakfast
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7">
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
					data-bs-dismiss="modal">
					Update rate
				</button>
			</div>
		</div>
	</div>
</div>
