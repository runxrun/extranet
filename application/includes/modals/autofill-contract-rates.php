
<div
	class="modal fade"
	id="autoFillContractRateModal"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">		
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Auto-fill contract rates data in form</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="alert alert-warning fs-8 py-2 px-3" role="alert">
					<div class="d-flex">
						<div class="pe-2"><i class="fas fa-exclamation-circle"></i></div>
						<div class="pe-2">Please ensure that your actions do not overlap with the previous ones.</div>
					</div>  
				</div>


				<div class="pb-3">
					<div class="row g-3">
						<div class="col-12 col-lg-4">
							<div class="fs-8 text-secondary">
								Room category
							</div>
							<div class="pt-1">
								<select class="form-select rounded-0 fs-7">
									<option value="">All room category</option>
									<option value="">Standard</option>
									<option value="">Deluxe</option>
									<option value="">Family Suite</option>
									<option value="">Villa Suite</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="fs-8 text-secondary">
								Status
							</div>
							<div class="pt-1">
								<select class="form-select rounded-0 fs-7">
									<option value="">All status</option>
									<option value="">Available</option>
									<option value="">On request</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="fs-8 text-secondary">
								Meal type
							</div>
							<div class="pt-1">
								<select class="form-select rounded-0 fs-7">
									<option value="">All meal type</option>
									<option value="">Room Only</option>
									<option value="">Bed & Breakfast</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="pb-2">
					<div class="border-bottom">
						<div class="pb-1 fs-7 fw-bold text-dark">
							Auto-fill
						</div>
					</div>
				</div>
				<div class="pb-3">
					<div class="row g-3">
						<div class="col-4 col-lg-2">
							<div class="fs-8 text-secondary">
								Single
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7" value="0.00">
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="fs-8 text-secondary">
								Twin / Double
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7" value="0.00">
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="fs-8 text-secondary">
								Quad
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7" value="0.00">
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="fs-8 text-secondary">
								Extra bed adult
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7" value="0.00">
							</div>
						</div>
						<div class="col-4 col-lg-2">
							<div class="fs-8 text-secondary">
								Extra bed child
							</div>
							<div class="pt-1">
								<input type="text" class="form-control rounded-0 fs-7" value="0.00">
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
					Auto fill data
				</button>
			</div>
		</div>
	</div>
</div>
