

<?php
$roomtype = array(
	array(
		'mealtype' => 'Room Only',
	),
	array(
		'mealtype' => 'Room and Breakfast',
	),
);
foreach ($roomtype as $key => $value) 
{
?>
	<div class="rn-table-row">
		<div class="rn-table-rate-name">
			<div class="d-flex justify-content-between align-items-center h-100 fs-9 py-2 p-2">
				<div class="text-secondary px-2">
					<?php echo $value['mealtype'] ?>
				</div>
				<!-- 
					<div class="px-2">
						<div class="dropdown">
							<button class="btn p-0 text-secondary border-0 shadow-none fs-9" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-ellipsis-h"></i>
							</button>
							<ul class="dropdown-menu rounded-0 fs-9" aria-labelledby="dropdownMenuButton1" style="">
								<li>
									<a class="dropdown-item" href="javascript:void(0)" onclick="">
										Select all
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="javascript:void(0)" onclick="">
										Diselect
									</a>
								</li>
							</ul>
						</div>
					</div>
				-->
			</div>
		</div>
		<div class="rn-table-rate-status ">
			<div class="h-100 rn-table-border-start">
				<button class="btn btn-outline-light shadow-none py-0 px-2 text-start w-100 h-100 rounded-0 fs-9">
					<span class="text-dark fw-bold">
						CTA
					</span>
				</button>
			</div>
		</div>
		<?php 
		for($action_detail=1;$action_detail<=14;$action_detail++)
		{
		?>
		<div class="rn-table-rate-action">
			<div class="h-100 rn-table-border-start">
				<label class="btn btn-outline-light d-flex h-100 w-100 justify-content-center align-items-center">
					<input
						type="checkbox"
						class="form-check-input	rounded-0 m-0 p-0"
						id="btncheck1"
						autocomplete="off">
				</label>
			</div>
		</div>
		<?php
		} 
		?>
	</div>
	<div class="rn-table-row">
		<div class="rn-table-rate-name">
			<div class="d-flex justify-content-between align-items-center h-100 fs-9 py-2 p-2">
				<div class="text-secondary px-2">
					<?php echo $value['mealtype'] ?>
				</div>
			</div>
		</div>
		<div class="rn-table-rate-status ">
			<div class="h-100 rn-table-border-start">
				<button class="btn btn-outline-light shadow-none py-0 px-2 text-start w-100 h-100 rounded-0 fs-9">
					<span class="text-dark fw-bold">
						CTD
					</span>
				</button>
			</div>
		</div>
		<?php 
		for($action_detail=1;$action_detail<=14;$action_detail++)
		{
		?>
		<div class="rn-table-rate-action">
			<div class="h-100 rn-table-border-start">
				<label class="btn btn-outline-light d-flex h-100 w-100 justify-content-center align-items-center">
					<input
						type="checkbox"
						class="form-check-input	rounded-0 m-0 p-0"
						id="btncheck1"
						autocomplete="off">
				</label>
			</div>
		</div>
		<?php
		} 
		?>
	</div>
	<?php
}
?>

