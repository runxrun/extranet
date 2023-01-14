<?php
	include_once ('contactdetail-array.php');
?>
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="pt-4 px-4">
			<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
				<i class="fas fa-exclamation-circle"></i>
				<span class="px-2">
					Update user
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
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Contact user
			</span>
		</div>
		<div class="py-4 px-4">
			<div class="row">
				<?php 
				foreach ($set_data_c as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
		</div>
	</div>

	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Account
			</span>
		</div>
		<div class="py-4 px-4">
			<div class="row">
				<?php 
				foreach ($set_data_d as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
			<div class="row">
				<?php 
				foreach ($set_data_e as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
			<div class="row">
				<div class="pb-3 col-12 col-lg-12 col-xl-6">
					<div class="pb-0 fs-8">
						<span class="text-secondary">Remark</span>			
					</div>
					<div>
						<textarea rows="5" class="form-control rounded-0 w-100 fs-7 p-3"></textarea>
					</div>
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
				onclick="window.open('http://localhost:8530/profile/hotel-profile.php?page=contact-list','_self');">
				<span><i class="fas fa-undo"></i></span>
				<span class="px-2">Back</span>
			</button>			
		</div>
		<div class="col-auto">
			
			<div class="row g-2 justify-content-end">
				<div class="col-auto">
					<button
						class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
						onclick="window.open('http://localhost:8530/profile/hotel-profile.php?page=contact-list','_self');">
						<span class="px-2">Cancel</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						onclick="window.open('http://localhost:8530/profile/hotel-profile.php?page=contact-detail','_self');">
						<span class="px-4">Save</span>
					</button>
				</div>
			</div>	
		</div>
	</div>

</div>
