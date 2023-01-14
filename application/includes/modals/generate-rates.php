
<div
	class="modal fade"
	id="generateModal"
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
							Market
						</div>
						<div>
							<select class="form-select rounded-0 fs-7">
								<option value="">All Market</option>
							</select>
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Rate code
						</div>
						<div>
							<input type="text" class="form-control rounded-0 fs-7">
						</div>
					</div>


					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							From date
						</div>	
						<div class="input-group">
							<input
								type="text"
								class="form-control rounded-0 fs-7"
								value="14 Jul 2022">
							<span class="input-group-text rounded-0">
								<i class="fas fa-calendar-day"></i>
							</span>
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							To date
						</div>	
						<div class="input-group">
							<input
								type="text"
								class="form-control rounded-0 fs-7"
								value="30 Sep 2023">
							<span class="input-group-text rounded-0">
								<i class="fas fa-calendar-day"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="row gx-3">
					<div class="pb-3 col-12 col-lg-6">
						<div class="pb-1 fs-8 text-secondary">
							Room Category
						</div>
						<div>
							<select class="form-select rounded-0 fs-7">
								<option value="" selected>Select room</option>
								<option value="">Standard</option>
								<option value="">Deluxe</option>
								<option value="">Family Suite</option>
							</select>
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-4">
						<div class="pb-1 fs-8 text-secondary">
							Meal Type
						</div>
						<div>
							<select class="form-select rounded-0 fs-7">
								<option value="">ABF</option>
								<option value="">Buffet</option>
								<option value="">Chinese Breakfast</option>
								<option value="">Room and Breakfast</option>
								<option value="" selected>Room Only</option>
							</select>
						</div>
					</div>
				</div>
				<div class="py-3">
					<div class="row g-2">
						<div class="col-1">
							<div class="fs-8 fw-bold text-dark px-2">
								Day flag
							</div>
						</div>
						<?php 
						$set_day_flag = array(
							array('id'=>'btncheck1','text'=>'Sun'),
							array('id'=>'btncheck2','text'=>'Mon'),
							array('id'=>'btncheck3','text'=>'Tue'),
							array('id'=>'btncheck4','text'=>'Wed'),
							array('id'=>'btncheck5','text'=>'Thu'),
							array('id'=>'btncheck6','text'=>'Fri'),
							array('id'=>'btncheck7','text'=>'Sat'),
						);
						foreach ($set_day_flag as $key => $value) 
						{
						?>
						<div class="col-1">
							<div class="form-check">
								<input 
									type="checkbox"
									class="form-check-input rounded-0"
									id="<?php echo $value['id'] ?>"
									autocomplete="off"
									checked>
								<label
									class="form-check-label fs-8 text-secondary"
									for="<?php echo $value['id'] ?>">
									<?php echo $value['text'] ?>									
								</label>
							</div>
						</div>
						<?php
						} 
						?>
					</div>
				</div>
				<div class="row gx-3">
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Single
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-0 fs-7 text-center"
								value="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Twin/Double
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-0 fs-7 text-center"
								value="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Quad
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-0 fs-7 text-center"
								value="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Extra bed for adult
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-0 fs-7 text-center"
								value="0">
						</div>
					</div>
					<div class="pb-3 col-12 col-lg-2">
						<div class="pb-1 fs-8 text-secondary">
							Extra bed for child
						</div>
						<div>
							<input
								type="text"
								class="form-control rounded-0 fs-7 text-center"
								value="0">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button
					type="button"
					class="btn btn-secondary rounded-1 fs-7"
					data-bs-dismiss="modal">
					Close
				</button>
				<button
					type="button"
					class="btn btn-primary rounded-1 fs-7"
					data-bs-dismiss="modal">
					Save changes
				</button>
			</div>
		</div>
	</div>
</div>
