

<?php
$roomtype = array(
	array('setallot' => 'Apply all room type',),
	array('setallot' => 'Single',),
	array('setallot' => 'Twin / Double',),
	array('setallot' => 'Triple',),
	array('setallot' => 'Quad',),
);
foreach ($roomtype as $key => $value) 
{
?>

	<div class="rn-table-row">
		<div class="rn-table-rate-name">
			<div class="d-flex justify-content-between align-items-center h-100 fs-9 py-2 p-2">
				<div class="text-secondary px-2">
					<?php echo $value['setallot'] ?>
				</div>
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
			</div>
		</div>
		<div class="rn-table-rate-status ">
			<div class="h-100 rn-table-border-start">
				<button class="btn btn-outline-light shadow-none py-0 px-2 text-start w-100 h-100 rounded-0 fs-9">
					<?php
					$allotment_text = "";
					if ($key==0) {
						$allotment_text = "Activated";
					}  
					?>
					<span class="text-success">
						<?php echo $allotment_text; ?>
					</span>
				</button>
			</div>
		</div>
		<?php 
		for($action_detail=1;$action_detail<=14;$action_detail++)
		{
			$allotment = 0;
			if ($key==0) {
				$allotment = 10;
			}
		?>
		<div class="rn-table-rate-action">
			<div class="h-100 rn-table-border-start">
				<input
					type="text"
					class="form-control py-0 px-1 border-0 shadow-none rounded-0 w-100 h-100 fs-9 text-secondary text-center rn-rate-input rn-cursor-pointer"
					value="<?php echo $allotment; ?>">
			</div>
		</div>
		<?php
		} 
		?>
	</div>
	<?php
}
?>
