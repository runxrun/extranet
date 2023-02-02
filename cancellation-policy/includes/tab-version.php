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

<div class="nav nav-pills" id="pills-tab" role="tablist">
    <div class="nav-item" role="presentation">
        <button
			id="pills-v1-tab"
			type="button"
			role="tab"
        	class="nav-link rounded-0 fs-7 w-100 active"
			data-bs-toggle="pill"
			data-bs-target="#pills-v1"
			aria-controls="pills-v1"
			aria-selected="true">
			Version #1
		</button>
    </div>
    <div class="nav-item" role="presentation">
        <button
			id="pills-v2-tab"
			type="button"
			role="tab"
        	class="nav-link rounded-0 fs-7 w-100" 
			data-bs-toggle="pill"
			data-bs-target="#pills-v2"
			aria-controls="pills-v2"
			aria-selected="false">
			Version #2
		</button>
    </div>
    <div class="nav-item" role="presentation">
        <button
			id="pills-v3-tab"
			type="button"
			role="tab"
        	class="nav-link rounded-0 fs-7 w-100" 
			data-bs-toggle="pill"
			data-bs-target="#pills-v3"
			aria-controls="pills-v3"
			aria-selected="false">
			Version #3
		</button>
    </div>
</div>







<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	        <div class="modal-header">
	            <div class="fs-6 fw-bold text-dark">Delete Cancellation</div>
	            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	        <div class="modal-body">
	        	<div class="fs-6 text-secondary">
	        		Can you confirm that you wish to delete this
	        		<span class="text-nowrap">cancellation policy?</span>
	        	</div>
	        </div>
	        <div class="modal-footer">
	            <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
	            <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
	        </div>
	    </div>
	</div>
</div>
