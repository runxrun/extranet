<?php 
$room_info = array(
	array(
		'room_name'=>'1 Bed',
		'currency'=>'THB',
		'single_price'=>'1,000.00',
		'double_twin_price'=>'1,200.00',
		'extra_bed_price'=>'500.00',
		'quad_price'=>'0.00',
		'unit_price'=>'0.00',
	),
	array(
		'room_name'=>'2 Bed',
		'currency'=>'THB',
		'single_price'=>'1,000.00',
		'double_twin_price'=>'1,200.00',
		'extra_bed_price'=>'500.00',
		'quad_price'=>'0.00',
		'unit_price'=>'0.00',
	),
	array(
		'room_name'=>'Studio',
		'currency'=>'THB',
		'single_price'=>'1,500.00',
		'double_twin_price'=>'1,500.00',
		'extra_bed_price'=>'500.00',
		'quad_price'=>'0.00',
		'unit_price'=>'0.00',
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
			<div class="pb-3 pb-lg-0 col-auto order-0 order-lg-1">
				<button 
					class="btn btn-success rounded-0 py-2 fs-8 text-white"
					onclick="window.open('/profile/hotel-profile.php?page=rack-rate-price-detail','_self');">
					<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
					<span class="pe-2">Add</span>
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
					<th scope="col" class="text-nowrap">Room category name</th>
					<th scope="col" class="text-nowrap">Currency</th>
					<th scope="col" class="text-nowrap">Single price</th>
					<th scope="col" class="text-nowrap">Double/Twin price</th>
					<th scope="col" class="text-nowrap">Extra bed price</th>
					<th scope="col" class="text-nowrap">Quad price</th>
					<th scope="col" class="text-nowrap">Unit price</th>
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
					<td><?php echo $value['room_name']; ?></td>
					<td><?php echo $value['currency']; ?></td>
					<td><?php echo $value['single_price']; ?></td>
					<td><?php echo $value['double_twin_price']; ?></td>
					<td><?php echo $value['extra_bed_price']; ?></td>
					<td><?php echo $value['quad_price']; ?></td>
					<td><?php echo $value['unit_price']; ?></td>
					<td class="p-0">
						<button
							class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
							onclick="window.open('/profile/hotel-profile.php?page=rack-rate-price-detail','_self');">
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
            		Can you confirm that you wish to delete?
            		<br>
            		<br>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>
