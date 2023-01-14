<?php
	include_once ('rackrateprice-array.php');
?>
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="pt-4 px-4">
			<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
				<i class="fas fa-exclamation-circle"></i>
				<span class="px-2">
					Update rack rate price
				</span>
			</div>
		</div>
		<div class="p-4">
			<div class="row">		
				<?php 
				foreach ($set_data_a as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
			<div class="row">		
				<?php 
				foreach ($set_data_b as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
		</div>
	</div>
</div>
<div class="pb-4">
	<div class="row justify-content-between">
		<div class="col-auto">
			<button
				class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/profile/hotel-profile.php?page=rack-rate-price','_self');">
				<span><i class="fas fa-undo"></i></span>
				<span class="px-2">Back</span>
			</button>			
		</div>
		<div class="col-auto">
			
			<div class="row g-2 justify-content-end">
				<div class="col-auto">
					<button
						class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/profile/hotel-profile.php?page=rack-rate-price','_self');">
						<span class="px-2">Cancel</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/profile/hotel-profile.php?page=rack-rate-price-detail','_self');">
						<span class="px-4">Save</span>
					</button>
				</div>
			</div>	
		</div>
	</div>
</div>
