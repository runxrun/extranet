<?php 
$room_info = array(
	array(
		'meal_name'=>'Room and Breakfast',
		'meal_code'=>'RBF',
		'meal_active'=>'<span class="text-success"><i class="fas fa-check-circle"></i></span>',
	),
	array(
		'meal_name'=>'Room Only',
		'meal_code'=>'RMO',
		'meal_active'=>'<span class="text-success"><i class="fas fa-check-circle"></i></span>',
	),
	array(
		'meal_name'=>'American Breakfast',
		'meal_code'=>'ABF',
	),
	array(
		'meal_name'=>'Asian Breakfast',
		'meal_code'=>'ABF',
	),
	array(
		'meal_name'=>'Buffet American Breakfast',
		'meal_code'=>'ABF',
	),
	array(
		'meal_name'=>'Buffet Breakfast',
		'meal_code'=>'BFB',
	),
	array(
		'meal_name'=>'Chinese Breakfast',
		'meal_code'=>'CNB',
	),
	array(
		'meal_name'=>'Japanese Breakfast',
		'meal_code'=>'JPB',
	),
	array(
		'meal_name'=>'Bed and Hot Buffet Breakfast',
		'meal_code'=>'BAHBBF',
	),
	array(
		'meal_name'=>'Breakfast Coupon',
		'meal_code'=>'BFCP',
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
								Meal type
							</span>
							<input
								type="text"
								class="form-control fs-7 rounded-0"
								placeholder="Search by name">
						</div>
					</div>
					<div class="pb-2 pb-lg-0 col-12 col-lg-6">
						<div class="input-group">
							<span class="input-group-text fs-7 fw-bold text-dark rounded-0">
								Code
							</span>
							<input
								type="text"
								class="form-control fs-7 rounded-0"
								placeholder="Search by code">
						</div>
					</div>
				</div>
			</div>
			<div class="pb-3 pb-lg-0 col-auto order-0 order-lg-1">
				<button 
					class="btn btn-success rounded-0 py-2 fs-8 text-white"
					onclick="window.open('/profile/hotel-profile.php?page=meal-type-detail','_self');">
					<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
					<span class="pe-2">Add meal</span>
				</button>
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
					<th scope="col" class="text-nowrap">Meal type name</th>
					<th scope="col" class="text-nowrap">Meal type code</th>
					<th scope="col" class="text-nowrap">Activate</th>
					<th>&nbsp;</th>
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
					<td><?php echo $value['meal_name']; ?></td>
					<td><?php echo $value['meal_code']; ?></td>
					<td><?php echo $value['meal_active']; ?></td>
					<td class="p-0">
						<button
							class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
							onclick="window.open('/profile/hotel-profile.php?page=meal-type-detail','_self');">
							<span class="fs-8">
								<i class="fas fa-search"></i>
							</span>
						</button>
					</td>
					<td class="p-0">
						<button
							class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0"
							data-bs-toggle="modal"
							data-bs-target="#deleteModal">
							<span class="fs-8">
								<i class="fas fa-trash"></i>
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

	<div class="d-flex justify-content-center py-4">
		<nav aria-label="...">
			<ul class="pagination">
				<li class="page-item disabled">
					<a class="page-link fs-8" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				</li>
				<li class="page-item active" aria-current="page">
					<a class="page-link fs-8" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link fs-8" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link fs-8" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link fs-8" href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>

</div>

<div 
	class="modal fade"
	id="deleteModal"
	tabindex="-1"
	aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Delete contact</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="fs-6 text-secondary">
            		Can you confirm that you wish to delete the meal type named 
            		<span class="text-nowrap">"Room and Breakfast"?</span>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>
