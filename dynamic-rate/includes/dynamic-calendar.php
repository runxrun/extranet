<?php 
$date_calr = array(
	array ('day' => 'Thu','date' => '14','month' => 'Jul',),
	array ('day' => 'Fri','date' => '15','month' => 'Jul',),
	array ('day' => 'Sat','date' => '16','month' => 'Jul', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Sun','date' => '17','month' => 'Jul', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Mon','date' => '18','month' => 'Jul',),
	array ('day' => 'Tue','date' => '19','month' => 'Jul',),
	array ('day' => 'Wed','date' => '20','month' => 'Jul',),
	array ('day' => 'Thu','date' => '21','month' => 'Jul',),
	array ('day' => 'Fri','date' => '22','month' => 'Jul',),
	array ('day' => 'Sat','date' => '23','month' => 'Jul', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Sun','date' => '24','month' => 'Jul', 'dayflag' => 'rn-day-flag',),
	array ('day' => 'Mon','date' => '25','month' => 'Jul',),
	array ('day' => 'Tue','date' => '26','month' => 'Jul',),
	array ('day' => 'Wed','date' => '27','month' => 'Jul',),
);
?>
<div class="pb-4">
	<div class="rn-table-dates">
		<div class="rn-table-row">
			<div class="rn-table-rate-dateoption">
				<div class="row justify-content-between align-items-center h-100">
					<div class="col-4">
						<?php
						/*
						<div class="p-1">
							<button class="btn btn-outline-secondary rounded-0 border-0">
								<div>
									<i class="fas fa-calendar-day"></i>
								</div>
								<div class="fs-9">
									<small>Select date</small>
								</div>
							</button>
						</div>
						*/
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
									<i class="far fa-check-square"></i>
								</div>
								<div class="fs-9">
									<small>All rooms</small>
								</div>
							</button>
						</div>
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
									14 Jul 2022
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
