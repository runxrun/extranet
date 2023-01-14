<?php 
$room_info = array(
	array(
		'prefix'=>'Mr.',
		'firstname'=>'Thitikorn',
		'lastname'=>'Sriruya',
		'department'=>'Sales',
		'position'=>'Manager',
		'email'=>'thitikorn@sonahouse.com',
		'username'=>'thitikorn',
		'activate'=>'<span class="text-success"><i class="fas fa-check-circle"></i></span>',
	),
	array(
		'prefix'=>'Mr.',
		'firstname'=>'Erik',
		'lastname'=>'Tenhag',
		'department'=>'Sales',
		'position'=>'',
		'email'=>'eriktenhag@sonahouse.com',
		'username'=>'erik.tenhag',
		'activate'=>'<span class="text-success"><i class="fas fa-check-circle"></i></span>',
	),
	array(
		'prefix'=>'Ms.',
		'firstname'=>'Pantiwa',
		'lastname'=>'Uttarapong',
		'department'=>'Sales',
		'position'=>'',
		'email'=>'pantiwa@sonahouse.com',
		'username'=>'pantiwa',
		'activate'=>'<span class="text-danger"><i class="fas fa-times-circle"></i></span>',
	),
);
?>

<div class="pt-4 px-1">
	<div class="bg-white border-bottom rounded-1 p-4">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-9 order-1 order-lg-0">
				<div class="row">
					<div class="pb-3 pb-lg-0 col-12 col-lg-6 col-xl-4">
						<div class="input-group">
							<span class="input-group-text fs-7 fw-bold text-dark rounded-0">
								Name
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
								<i class="fas fa-envelope"></i>
							</span>
							<input
								type="text"
								class="form-control fs-7 rounded-0"
								placeholder="Search by email">
						</div>
					</div>
				</div>
			</div>
			<div class="pb-3 pb-lg-0 col-auto order-0 order-lg-1">
				<button 
					class="btn btn-success rounded-0 py-2 fs-8 text-white"
					onclick="window.open('/profile/hotel-profile.php?page=contact-detail','_self');">
					<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
					<span class="pe-2">Add user</span>
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
					<th scope="col" class="text-nowrap">Name</th>
					<th scope="col" class="text-nowrap">Department</th>
					<th scope="col" class="text-nowrap">Position</th>
					<th scope="col" class="text-nowrap">Email</th>
					<th scope="col" class="text-nowrap">Username</th>
					<th scope="col" class="text-nowrap">Activate</th>
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
					<td>
						<?php echo $value['prefix']; ?>
						<?php echo $value['firstname']; ?>
						<?php echo $value['lastname']; ?>
					</td>
					<td><?php echo $value['department']; ?></td>
					<td><?php echo $value['position']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['username']; ?></td>
					<td><?php echo $value['activate']; ?></td>
					<td class="p-0">
						<button
							class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
							onclick="window.open('/profile/hotel-profile.php?page=contact-detail','_self');">
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

<!-- 
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="p-4">
			
		</div>
	</div>
</div>
 -->