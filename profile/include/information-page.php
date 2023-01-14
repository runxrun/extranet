<?php
	include_once ('information-array.php');
?>
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">


		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				General Information
			</span>
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
		</div>
	</div>
	<div class="bg-white border-bottom rounded-1 mt-3">


		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-map-marker-alt"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Location
			</span>
		</div>

		<div class="p-4">		
			<div class="row">
				<?php
				foreach ($set_data_d as $key => $value)
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
				<i class="fas fa-envelope"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Contact Information
			</span>
		</div>
		<div class="p-4">		
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
	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-coins"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Commission
			</span>
		</div>
		<div class="p-4">
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
				<i class="fas fa-child"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Child extra bed (years)
			</span>
		</div>
		<div class="p-4">		
			<div class="row">
				<?php
				foreach ($set_data_e as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>
		</div>
	</div>
</div>


<!-- SAVE ///////////

<div class="pb-4">
	<div class="row g-2 justify-content-end">
		<div class="col-2">
			<button class="btn btn-success w-100 rounded-0 fs-9" onclick="window.open('/profile/hotel-profile.php?page=information', '_self');">
				Save
			</button>
		</div>
	</div>
</div>

-->