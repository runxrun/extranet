<?php 
$date_calr = array(
	array ('day' => 'Tue','date' => '14','month' => 'Feb',),
	array ('day' => 'Wed','date' => '15','month' => 'Feb',),
	array ('day' => 'Thu','date' => '16','month' => 'Feb',),
	array ('day' => 'Fri','date' => '17','month' => 'Feb',),
	array ('day' => 'Sat','date' => '18','month' => 'Feb', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Sun','date' => '19','month' => 'Feb', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Mon','date' => '20','month' => 'Feb',),
	array ('day' => 'Tue','date' => '21','month' => 'Feb',),
	array ('day' => 'Wed','date' => '22','month' => 'Feb',),
	array ('day' => 'Thu','date' => '23','month' => 'Feb',),
	array ('day' => 'Fri','date' => '24','month' => 'Feb',),
	array ('day' => 'Sat','date' => '25','month' => 'Feb', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Sun','date' => '26','month' => 'Feb', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Mon','date' => '27','month' => 'Feb',),
);
?>
<div class="pb-4">
	<div class="rn-table-dates">
		<div class="rn-table-row">
			<div class="rn-table-rate-dateoption">
				<div class="row g-0 justify-content-between align-items-center h-100">
					<div class="col-4">


						<?php 
						if (strtolower($_GET['rate_status'])=="cutoffdate")
						{
						?>
						<div class="p-1">
							<button
								class="btn btn-outline-secondary rounded-0 border-0"
								type="button">
								<div>
									<i class="fas fa-cut"></i>
								</div>
								<div class="fs-9">
									<small>Set Cut off</small>
								</div>
							</button>
						</div>
						<?php
						}
						?>

						<?php
						if (strtolower($_GET['rate_status'])=="setallotment")
						{
						?>
						<div class="p-1">
							<button
								class="btn btn-outline-secondary rounded-0 border-0"
								type="button">
								<div>
									<i class="fas fa-bed"></i>
								</div>
								<div class="fs-9">
									<small>Alloment all rooms</small>
								</div>
							</button>
						</div>
						<?php
						}
						?>

						<?php
						if (strtolower($_GET['rate_status'])=="ctactd")
						{
						?>
						<div class="p-1">
							<button
								class="btn btn-outline-secondary rounded-0 border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseSelectAll"
								aria-expanded="false"
								aria-controls="collapseSelectAll">
								<div>
									<!-- <i class="far fa-check-square"></i> -->
									<i class="far fa-window-close"></i>
								</div>
								<div class="fs-9">
									<small>Set all rooms</small>
								</div>
							</button>
						</div>
						<?php	
						}
						?>

						<?php
						if (empty($_GET['rate_status']))
						{
						?>
						<div class="p-1">
							<button
								class="btn btn-outline-secondary rounded-0 border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseSelectAll"
								aria-expanded="false"
								aria-controls="collapseSelectAll">
								<div>
									<!-- <i class="far fa-check-square"></i> -->
									<i class="far fa-times-circle"></i>
								</div>
								<div class="fs-9">
									<small>Block all rooms</small>
								</div>
							</button>
						</div>
						<?php	
						}
						?>



						<?php 
						if (strtolower($_GET['rate_status'])=="blackout")
						{
						?>
						<div class="p-1">
							<button
								class="btn btn-outline-secondary rounded-0 border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#collapseSelectAll"
								aria-expanded="false"
								aria-controls="collapseSelectAll">
								<div>
									<!-- <i class="far fa-check-square"></i> -->
									<i class="far fa-times-circle"></i>
								</div>
								<div class="fs-9">
									<small>Set black out</small>
								</div>
							</button>
						</div>
						<?php
						}
						?>





					</div>
					<div class="col-8">
						<div class="d-flex justify-content-center align-items-center h-100">
							<div class="px-0">
								<button 
									class="btn btn-outline-light border-0 shadow-none text-info fs-7"
									title="Previous 14 days">
									<i class="fas fa-angle-double-left"></i>
								</button>
							</div>
							<div class="px-0">
								<button 
									class="btn btn-outline-light border-0 shadow-none text-info fs-7"
									title="Previous 1 day">
									<i class="fas fa-angle-left"></i>
								</button>
							</div>
							<div class="px-2">
								<button class="btn rounded-0 border-0 fs-7 p-0 fw-bold text-dark fs-7">
									14 Feb 2023
								</button>
							</div>
							<div class="px-0">
								<button 
									class="btn btn-outline-light border-0 shadow-none text-info fs-7"
									title="Next 1 day">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
							<div class="px-0">
								<button 
									class="btn btn-outline-light border-0 shadow-none text-info fs-7"
									title="Next 14 days">
									<i class="fas fa-angle-double-right"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="collapse" id="collapseSelectAll">
							<div class="d-flex justify-content-end p-1">
								<div class="dropdown">
									<button
										class="btn p-0 px-2 text-secondary border-0 shadow-none fs-9"
										type="button"
										id="dropdownMenuButton1"
										data-bs-toggle="dropdown"
										aria-expanded="false">
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
				</div>
			</div>
			<?php 
			foreach ($date_calr as $key => $value)
			{
			?>
			<div class="rn-table-rate-action <?php echo $value['dayflag']; ?>">
				<div class="w-100 h-100 rn-table-border-start">
					<div class="rn-calr text-secondary py-1">
						<span class="day"><?php echo $value['day']; ?></span>
						<span class="date text-dark fw-bold"><?php echo $value['date']; ?></span>
						<span class="month"><?php echo $value['month']; ?></span>
					</div>
					<div class="collapse border-top" id="collapseSelectAll">
						<label class="btn btn-outline-light d-flex h-100 w-100 justify-content-center align-items-center">
							<input type="checkbox" class="form-check-input rounded-0 m-0 p-0" id="btncheck1" autocomplete="off">
						</label>
					</div>
				</div>
			</div>		
			<?php
			} 
			?>
		</div>
	</div>
</div>
