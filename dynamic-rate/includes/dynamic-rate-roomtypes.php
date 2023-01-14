

<?php
$roomtype = array(
	array(
		'mealtype' => 'Room Only',
		'type' => array(
			array('typeofroom'=>'Single', 'typeofrate'=>'2500'),
			array('typeofroom'=>'Twin/Double', 'typeofrate'=>'2700'),
			//array('typeofroom'=>'Quad', 'typeofrate'=>'3200'),
			array('typeofroom'=>'Extra bed for adult', 'typeofrate'=>'500'),
			array('typeofroom'=>'Extra bed for child', 'typeofrate'=>'500'),
		),
	),
	array(
		'mealtype' => 'Room and Breakfast',
		'type' => array(
			array('typeofroom'=>'Single', 'typeofrate'=>'2700'),
			array('typeofroom'=>'Twin/Double', 'typeofrate'=>'2900'),
			//array('typeofroom'=>'Quad', 'typeofrate'=>'-'),
			array('typeofroom'=>'Extra bed for adult', 'typeofrate'=>'500'),
			array('typeofroom'=>'Extra bed for child', 'typeofrate'=>'500'),
		),
	),
);
foreach ($roomtype as $key => $value) 
{
?>

	<div class="rn-table-row">
		<div class="rn-table-rate-name">
			<div class="d-flex justify-content-between align-items-center h-100 fs-9 py-2 p-2">
				<div class="d-flex">
					<span class="text-dark fw-bold px-2">								
						<?php echo $value['mealtype'] ?>
					</span>
				</div>

			</div>
		</div>
		<div class="rn-table-rate-status ">
			<div class="h-100 rn-table-border-start">
				<!-- 
				<button class="btn btn-outline-light shadow-none py-0 px-2 text-start w-100 h-100 rounded-0 fs-9">
					<span class="text-dark fw-bold">
						&nbsp;
					</span>
				</button>
				-->
			</div>
		</div>
		<?php for($action_detail=1;$action_detail<=14;$action_detail++)
		{
		?>
		<div class="rn-table-rate-action">
			<div class="h-100 rn-table-border-start">
				<!-- 
				<input
					type="text"
					class="form-control py-0 px-1 border-0 shadow-none rounded-0 w-100 h-100 fs-9 text-dark fw-bold text-center rn-rate-input rn-cursor-pointer"
					value="">
				-->
			</div>
		</div>				
		<?php
		} 
		?>
	</div>
	<?php
	foreach ($value['type'] as $key2 => $value2) 
	{
	?>
	<div class="rn-table-row rn-table-roomtype">
		<div class="rn-table-rate-name">

			<div class="d-flex justify-content-between align-items-center h-100 fs-9 py-2 p-2">


				<div class="text-secondary px-2">								
					<?php echo $value2['typeofroom'] ?>
				</div>
				<div class="px-2">
					<div class="dropdown">
						<button
							class="btn p-0 text-secondary border-0 shadow-none fs-9"
							type="button"
							id="dropdownMenuButton1"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</button>
						<ul
							class="dropdown-menu rounded-0 fs-9"
							aria-labelledby="dropdownMenuButton1">
							<li>
								<a
									class="dropdown-item"
									href="javascript:void(0)"
									onclick="">
									Select all
								</a>
							</li>
							<li>
								<a
									class="dropdown-item"
									href="javascript:void(0)"
									onclick="">
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
					<span class="text-dark fw-bold">
						Rates
					</span>
				</button>
			</div>
		</div>


		<?php 
		
			for(
				$action_detail=1;
				$action_detail<=14;
				$action_detail++)
			{

				$metrix = $key_name.''.$key.''.$key2.''.$action_detail;

				if(
					($metrix=='0008') ||
					($metrix=='0018') ||
					($metrix=='0028') ||
					($metrix=='0038') ||
					($metrix=='0048') ||
					($metrix=='0009') ||
					($metrix=='0019') ||
					($metrix=='0029') ||
					($metrix=='0039') ||
					($metrix=='0049') ||
					($metrix=='0108') ||
					($metrix=='0118') ||
					($metrix=='0128') ||
					($metrix=='0138') ||
					($metrix=='0148') ||
					($metrix=='0109') ||
					($metrix=='0119') ||
					($metrix=='0129') ||
					($metrix=='0139') ||
					($metrix=='0149')
				)
				{
				?>
					<div class="rn-table-rate-action">
						<div class="h-100 rn-table-border-start rn-blackout">
							<div class="d-flex h-100 align-items-center justify-content-center text-white fs-9">
								<i class="fas fa-times"></i>
							</div>
						</div>
					</div>
				<?php
				}
				else
				{
					if(
						($action_detail==3) ||
						($action_detail==4) ||
						($action_detail==10) ||
						($action_detail==11)
					)
					{
						$dayflag = 'rn-day-flag';
					}
					else
					{
						$dayflag = '';	
					}
				?>
				<div class="rn-table-rate-action">
					<div class="h-100 rn-table-border-start">
						<input
							type="text"
							class="form-control py-0 px-1 border-0 shadow-none rounded-0 w-100 h-100 fs-9 text-secondary text-center rn-rate-input rn-cursor-pointer <?php echo $dayflag; ?>"
							value="<?php echo $value2['typeofrate']; ?> ">
					</div>
				</div>
				<?php
				} 
			}
		?>
	</div>
	<?php
	} 
}
?>

