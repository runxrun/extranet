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
				// foreach ($set_data_e as $key => $value)
				// {
				// 	include('input-element.php');
				// }
				?>
				<div class="pb-3 col-12 col-lg-6">
					<div class="row">
						<div class="col-6 col-lg-5">
							<div class="fs-7 fw-bold text-dark">
								Child Price (Range #1)
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="0" disabled>
									<span class="input-group-text rounded-0 fs-7">Min</span>
								</div>
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="2" disabled>
									<span class="input-group-text rounded-0 fs-7">Max</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-5">
							<div class="fs-7 fw-bold text-dark">
								Child Price (Range #2)
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="3">
									<span class="input-group-text rounded-0 fs-7">Min</span>
								</div>
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="12">
									<span class="input-group-text rounded-0 fs-7">Max</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pb-3 col-12 col-lg-6">
					<div class="row">
						<div class="col-6 col-lg-5">
							<div class="fs-7 fw-bold text-dark">
								Extra Bed Child (Range #1)
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="0" disabled>
									<span class="input-group-text rounded-0 fs-7">Min</span>
								</div>
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="2" disabled>
									<span class="input-group-text rounded-0 fs-7">Max</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-5">
							<div class="fs-7 fw-bold text-dark">
								Extra Bed Child (Range #2)
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="3">
									<span class="input-group-text rounded-0 fs-7">Min</span>
								</div>
							</div>
							<div class="pt-2">
								<div class="input-group">
									<input type="number" class="form-control fs-7 rounded-0" value="12">
									<span class="input-group-text rounded-0 fs-7">Max</span>
								</div>
							</div>
						</div>
					</div>
				</div>
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