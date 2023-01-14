
<!-- Modal Logout -->
<div 
	class="modal fade"
	id="roompresetModal"
	tabindex="-1"
	data-bs-backdrop="static"
	data-bs-keyboard="false">
	<div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Room Preset</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Rate code
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-1"
								placeholder="Enter Rate code">
						</div>
					</div>
					<div class="pb-3 col-12 col-md-8">
						<div class="fs-8 text-secondary">
							Market
						</div>
						<div>
							<select class="form-select rounded-1" name="" id="">
								<option value="">Select</option>
							</select>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							From Date
						</div>
						<div class="input-group">
							<input
								type="text"
								class="form-control"
								placeholder="Select Date">
							<span class="input-group-text text-secondary">
								<i class="fas fa-calendar-day"></i>
							</span>
						</div>
					</div>
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							To Date
						</div>
						<div class="input-group">
							<input
								type="text"
								class="form-control"
								placeholder="Select Date">
							<span class="input-group-text text-secondary">
								<i class="fas fa-calendar-day"></i>
							</span>
						</div>
					</div>
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Rate status
						</div>
						<div>
							<input type="checkbox" id="chkAllotment" value="Allotment">
							<label for="chkAllotment">Allotment</label>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="pb-3 col-12">
						<div class="fs-8 text-secondary">
							Room category
						</div>
						<div>
							<select class="form-select rounded-1" name="" id="">
								<option value="">Studio Room</option>
								<option value="">Deluxe Suite</option>
								<option value="">One Bed</option>
								<option value="">Two Bedroom</option>
							</select>	
						</div>
					</div>
				</div>





				<div class="row">
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Season
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-1"
								placeholder="Enter Season name">
						</div>
					</div>
					<div class="pb-3 col-12 col-md-8">
						<div class="fs-8 text-secondary">
							Check In Day
						</div>
						<div>
							<input type="checkbox" id="chkSun" value="Allotment"><label for="chkSun">Sun</label>
							<input type="checkbox" id="chkMon" value="Allotment"><label for="chkMon">Mon</label>
							<input type="checkbox" id="chkTue" value="Allotment"><label for="chkTue">Tue</label>
							<input type="checkbox" id="chkWed" value="Allotment"><label for="chkWed">Wed</label>
							<input type="checkbox" id="chkThu" value="Allotment"><label for="chkThu">Thu</label>
							<input type="checkbox" id="chkFri" value="Allotment"><label for="chkFri">Fri</label>
							<input type="checkbox" id="chkSat" value="Allotment"><label for="chkSat">Sat</label>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Meal type 
						</div>
						<div>
							<select class="form-select rounded-1" name="" id="">
								<option value="">Select</option>
								<option value="">Room Only</option>
								<option value="">Breakfast</option>
								<option value="">American Breakfast</option>
							</select>	
						</div>
					</div>
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Adult's meal (Apply to Bonus night)
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-1"
								value="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-md-4">
						<div class="fs-8 text-secondary">
							Child's meal (Apply to Bonus night)
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-1"
								value="0">
						</div>
					</div>
				</div>
			</div>






			<div class="modal-footer">
				<button type="button" class="btn btn-secondary rounded-1 fs-8" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary rounded-1 fs-8 px-4">Save</button>
			</div>

		</div>
	</div>
</div>
