<div class="bg-white border-bottom rounded-1 p-4">
	<div class="row justify-content-between">
		<div class="pb-2 pb-sm-0 col-auto">
			<div class="d-flex">
				<span class="fs-6 fw-bold text-primary pe-2">
					<i class="fas fa-info-circle"></i>
				</span>
				<span class="fs-6 fw-bold text-primary">
					Cancellation policy
				</span>
			</div>
		</div>
		<div class="col-auto">
			<button
				class="btn btn-success rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/cancellation-policy/?page=add-cancellation','_self');">
				<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
				<span class="pe-2">Add</span>
			</button>
		</div>
	</div>
</div>

<?php include_once('includes/cancellation-filter.php'); ?>

<div class="pb-4">
	<div class="tab-content" id="pills-tabContent">
	    <div
	    	class="tab-pane fade show active"
	    	id="pills-v1"
	    	role="tabpanel"
	    	aria-labelledby="pills-v1-tab">
	    	<div class="pb-4">
				<?php include_once('lists-cancellation-v1.php'); ?>
			</div>
	    </div>
	    <div
	    	class="tab-pane fade"
	    	id="pills-v2"
	    	role="tabpanel"
	    	aria-labelledby="pills-v2-tab">
	    	<div class="pb-4">
				<?php include_once('lists-cancellation-v2.php'); ?>
			</div>
	    </div>
	    <div
	    	class="tab-pane fade"
	    	id="pills-v3"
	    	role="tabpanel"
	    	aria-labelledby="pills-v3-tab">
	    	<div class="pb-4">
				<?php include_once('lists-cancellation-v3.php'); ?>
			</div>
	    </div>
	</div>
</div>
