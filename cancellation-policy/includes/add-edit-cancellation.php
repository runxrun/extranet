<div class="pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="py-3 px-4 border-bottom">
			<div class="d-flex">
				<span class="fs-6 fw-bold text-primary pe-2">
					<i class="fas fa-info-circle"></i>
				</span>
				<span class="fs-6 fw-bold text-primary">
					Cancellation policy
				</span>
			</div>
		</div>
		<div class="p-4">
			<div class="row g-3">
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
			</div>
			<div class="pt-3">
				<div class="row g-3">
					<div class="col-12 col-sm-12 col-lg-6">
						<div class="fs-7 text-secondary">
							Room category
						</div>	
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7">
								<option value="">All Room Category</option>
								<option value="">Standard</option>
								<option value="">Deluxe</option>
								<option value="">Family Suite</option>
							</select>
						</div>	
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="fs-7 text-secondary">
							Meal type
						</div>	
						<div class="pt-1">
							<select class="form-select rounded-0 fs-7">
								<option value="">All meal type</option>
								<option value="">Bed and Breakfast</option>
								<option value="">Included American Breakfast</option>
								<option value="">ABF</option>
								<option value="">Room only</option>
							</select>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="px-4">
			<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
				<i class="fas fa-exclamation-circle"></i>
				<span class="px-2">
					If the box is check (No show - Non Refundable) sentence will be automatically added on 
					for any concerned hotel on this cancellation policy.
				</span>
			</div>
		</div>
		<div class="p-4">
			<div class="row">
				<div class="col-auto">
					<div class="form-check">
						<input
							type="checkbox"
							id="no_show"
							class="form-check-input rounded-0"
							value="No show - Non Refundable">
						<label
							class="form-check-label fs-7 text-secondary"
							for="no_show">
							No show - Non Refundable
						</label>
					</div>
				</div>
				<div class="col-auto">
					<div class="form-check">
						<input
							type="checkbox"
							id="non_refundable"
							class="form-check-input rounded-0"
							value="Non - Refundable">
						<label
							class="form-check-label fs-7 text-secondary"
							for="non_refundable">
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
							Cancel day(s) Only number
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
					<textarea
						class="form-control rounded-0 w-100 fs-7 p-3" cols="30" rows="5"
						placeholder="Enhancement remark"></textarea>
				</div>
			</div>

		</div>
	</div>
</div>






<div class="pb-4">
	<div class="row justify-content-between">
		<div class="col-auto">
			<button
				class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/cancellation-policy/','_self');">
				<span><i class="fas fa-undo"></i></span>
				<span class="px-2">Back</span>
			</button>			
		</div>
		<div class="col-auto">
			
			<div class="row g-2 justify-content-end">
				<div class="col-auto">
					<button
						class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/cancellation-policy/','_self');">
						<span class="px-2">Cancel</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/cancellation-policy/?page=edit-cancellation','_self');">
						<span class="px-4">Save</span>
					</button>
				</div>
			</div>	
		</div>
	</div>
</div>
