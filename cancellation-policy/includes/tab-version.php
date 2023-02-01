
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
<div class="tab-content" id="pills-tabContent">
    <div
    	class="tab-pane fade show active"
    	id="pills-v1"
    	role="tabpanel"
    	aria-labelledby="pills-v1-tab">
    	<div class="py-4">
			<?php include_once('lists-cancellation-v2.php'); ?>
		</div>
    </div>
    <div
    	class="tab-pane fade"
    	id="pills-v2"
    	role="tabpanel"
    	aria-labelledby="pills-v2-tab">
    	<div class="py-4">
			<?php include_once('lists-cancellation-v1.php'); ?>
		</div>
    </div>
    <div
    	class="tab-pane fade"
    	id="pills-v3"
    	role="tabpanel"
    	aria-labelledby="pills-v3-tab">
    	<div class="py-4">
			<?php include_once('lists-cancellation-v3.php'); ?>
		</div>
    </div>
</div>
