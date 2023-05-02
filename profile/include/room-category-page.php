<?php 
$room_info = array(
	array(
		'room_name'=>'1 BED',
		'room_image'=>'0',
		'room_sqm'=>'24',
		'room_pax'=>'2',
	),
	array(
		'room_name'=>'2 BED',
		'room_image'=>'0',
		'room_sqm'=>'24',
		'room_pax'=>'2',
	),
	array(
		'room_name'=>'Studio',
		'room_image'=>'0',
		'room_sqm'=>'32',
		'room_pax'=>'4',
	),
	array(
		'room_name'=>'Villa Suite',
		'room_image'=>'0',
		'room_sqm'=>'32',
		'room_pax'=>'4',
	),
);
?>
<div class="pt-4 px-1">
	<div class="bg-white border-bottom rounded-1 p-4">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-9 order-1 order-lg-0">
				<div class="row">
					<div class="pb-3 pb-lg-0 col-12 col-lg-6">
						<div class="input-group">
							<span class="input-group-text fs-7 fw-bold text-dark rounded-0">
								<i class="fas fa-bed"></i>
							</span>
							<input
								type="text"
								class="form-control fs-7 rounded-0"
								placeholder="Search by room category name">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="px-1 py-4" style="min-height: 400px;">
	<div class="table-responsive fs-8 border-top border-2 border-primary">
		
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-white text-dark">
					<th scope="col" class="text-center text-dark">#</th>
					<th scope="col" class="text-nowrap">Room category name</th>
					<th scope="col" class="text-nowrap">Total images of room</th>
					<th scope="col" class="text-nowrap">Room dimension (sq.m.) *</th>
					<th scope="col" class="text-nowrap">Maximum Pax/Room</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($room_info as $key => $value) 
				{
				?>
				<tr class="bg-white text-secondary">
					<th scope="row" class="text-center text-dark"><?php echo $key+1; ?></th>
					<td><?php echo $value['room_name']; ?></td>
					<td><?php echo $value['room_image']; ?></td>
					<td><?php echo $value['room_sqm']; ?></td>
					<td><?php echo $value['room_pax']; ?></td>
					<td class="p-0">
						<button
							class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
							onclick="window.open('/profile/hotel-profile.php?page=room-category-detail','_self');">
							<span class="fs-8">
								<i class="fas fa-search"></i>
							</span>
						</button>
					</td>
				</tr>		
				<?php
				}
				?>
			</tbody>
		</table>

	</div>
</div>

<!-- 
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="p-4">
			
		</div>
	</div>
</div>
 -->