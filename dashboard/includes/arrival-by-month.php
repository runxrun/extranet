<div class="bg-white border-bottom rounded-1 p-3">
	<div class="pb-3">
		<div class="d-flex">
			<span class="fs-6 text-secondary pe-3 opacity-75">
				<i class="fas fa-chart-line"></i>
			</span>
			<span class="fs-6 text-dark fw-bold">
				Arrival by month
			</span>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-borderless table-hover fs-9">
			<thead class="bg-light border-bottom border-1 border-secodary">
				<tr>
					<th scope="col"><span class="text-nowrap">#</span></th>
					<th scope="col"><span class="text-nowrap">Year</span></th>
					<th scope="col"><span class="text-nowrap">Month</span></th>
					<th scope="col"><span class="text-nowrap">Booking</span></th>
					<th scope="col"><span class="text-nowrap">Room nights</span></th>
					<th scope="col"><span class="text-nowrap">Revenue / THB</span></th>
					<th scope="col"><span class="text-nowrap">&nbsp;</span></th>
				</tr>
			</thead>
			<?php 
			$arr_month = array(
				array(
					'year'=>'2022',
					'month'=>'December',
					'booking'=>'3',
					'night'=>'8',
					'revenue'=>'12,500.00',
					'compare'=>'fas fa-angle-up',
					'compare_class'=>'text-success',
				),
				array(
					'year'=>'2022',
					'month'=>'November',
					'booking'=>'5',
					'night'=>'7',
					'revenue'=>'8,450.00',
					'compare'=>'fas fa-angle-up',
					'compare_class'=>'text-success',
				),
				array(
					'year'=>'2022',
					'month'=>'October',
					'booking'=>'3',
					'night'=>'6',
					'revenue'=>'6,770.00',
					'compare'=>'fas fa-angle-down',
					'compare_class'=>'text-danger',
				),
				array(
					'year'=>'2022',
					'month'=>'September',
					'booking'=>'3',
					'night'=>'6',
					'revenue'=>'9,800.00',
					'compare'=>'fas fa-angle-up',
					'compare_class'=>'text-success',
				),
				array(
					'year'=>'2022',
					'month'=>'Auguest',
					'booking'=>'2',
					'night'=>'3',
					'revenue'=>'4,000.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
				array(
					'year'=>'2022',
					'month'=>'July',
					'booking'=>'3',
					'night'=>'3',
					'revenue'=>'3,200.00',
					'compare'=>'fas fa-angle-down',
					'compare_class'=>'text-danger',
				),
				array(
					'year'=>'2022',
					'month'=>'June',
					'booking'=>'2',
					'night'=>'4',
					'revenue'=>'4,900.00',
					'compare'=>'fas fa-angle-up',
					'compare_class'=>'text-success',
				),
				array(
					'year'=>'2022',
					'month'=>'May',
					'booking'=>'0',
					'night'=>'0',
					'revenue'=>'0.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
				array(
					'year'=>'2022',
					'month'=>'April',
					'booking'=>'0',
					'night'=>'0',
					'revenue'=>'0.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
				array(
					'year'=>'2022',
					'month'=>'March',
					'booking'=>'0',
					'night'=>'0',
					'revenue'=>'0.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
				array(
					'year'=>'2022',
					'month'=>'Febuary',
					'booking'=>'0',
					'night'=>'0',
					'revenue'=>'0.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
				array(
					'year'=>'2022',
					'month'=>'January',
					'booking'=>'0',
					'night'=>'0',
					'revenue'=>'0.00',
					'compare'=>'fas fa-ellipsis-h',
					'compare_class'=>'text-secondary',
				),
			);
			?>
			<tbody class="table-group-divider">
				<?php 
				foreach ($arr_month as $key => $value)
				{
				?>
				<tr>
					<th scope="row">
						<span class="text-secondary">
							<?php echo $key+1; ?>
						</span>
					</th>
					<td>
						<span class="text-secondary">
							<?php echo $value['year']; ?>
						</span>
					</td>
					<td>
						<span class="text-secondary">
							<?php echo $value['month']; ?>
						</span>
					</td>
					<td>
						<span class="text-secondary">
							<?php echo $value['booking']; ?>
						</span>
					</td>
					<td>
						<span class="text-secondary">
							<?php echo $value['night']; ?>
						</span>
					</td>
					<td>
						<span class="fw-bold <?php echo $value['compare_class']; ?>">
							<?php echo $value['revenue']; ?>
						</span>
					</td>
					<td class="text-center">
						<span class="<?php echo $value['compare_class']; ?>">
							<i class="<?php echo $value['compare']; ?>"></i>
						</span>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>