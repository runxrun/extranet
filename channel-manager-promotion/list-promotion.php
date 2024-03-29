<?php 
$listpromo = array(
	array(
		"roomcatg" => "Standard",
		"mealtype" => "All meal type",
		"promotion" => array(
			array(
				"class" => "text-primary",
				"type" => "Advance Purchase (by Period)",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "EB11",
				"discount" => "percent",
				"discountrate" => "10",
			),
		),
	),
	array(
		"roomcatg" => "Standard",
		"mealtype" => "All meal type",
		"promotion" => array(
			array(
				"class" => "text-primary",
				"type" => "Advance Purchase (by Notice Day)",
				"stay" => "01 Feb 2023 to 28 Feb 2023",
				"book" => "01 Feb 2023 to 28 Feb 2023",
				"ratecode" => "FEB11",
				"discount" => "percent",
				"discountrate" => "7",
			),
		),
	),
	array(
		"roomcatg" => "Deluxe",
		"mealtype" => "All meal type",
		"promotion" => array(
			array(
				"class" => "text-success",
				"type" => "Long stay / Pay less",
				"stay" => "12 Jan 2022 to 16 Jan 2023",
				"book" => "12 Jan 2022 to 16 Jan 2023",
				"ratecode" => "",
				"discount" => "amount",
				"discountrate" => "200",
			),
		),
	),
	array(
		"roomcatg" => "Family Suite",
		"mealtype" => "All meal type",
		"promotion" => array(
			array(
				"class" => "text-danger",
				"type" => "Bonus Night (Free Night Earned)",
				"stay" => "12 Jan 2022 to 16 Jan 2023",
				"book" => "12 Jan 2022 to 16 Jan 2023",
				"ratecode" => "",
				"discount" => "",
				"discountrate" => "",
				"count" => "2",
				"free" => "1",
			),
		),
	),
); 
?>

<div class="bg-white border-bottom rounded-1 p-4">
	<div class="row justify-content-between">
		<div class="pb-2 pb-sm-0 col-auto">
			<div class="d-flex">
				<span class="fs-6 fw-bold text-primary pe-2">
					<i class="fas fa-info-circle"></i>
				</span>
				<span class="fs-6 fw-bold text-primary">
					Promotion
				</span>
			</div>
		</div>
		<div class="col-auto">
			<button
				class="btn btn-success rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/promotion/?page=add-promotion','_self');">
				<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
				<span class="pe-2">Add promotion</span>
			</button>
		</div>
	</div>
</div>

<div class="mt-4 table-responsive">
	<table class="table bg-white fs-7">
		<?php 
		foreach ($listpromo as $key => $value)
		{
		?>		
		<thead class="table-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
			</tr>
		</thead>
  		<tbody>
			<?php 
			foreach ($value['promotion'] as $key2 => $item)
			{
			?>
			<tr>
				<td>#</td>
				<td>First</td>
				<td>Last</td>
				<td>Handle</td>
			</tr>
			<?php 
			}
			?>	
			<tr class="bg-light">
				<td><br></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
  		</tbody>
	<?php 
	}
	?>		
	</table>
</div>




<div class="bg-white border-bottom rounded-1 mt-3  d-none">
	<div class="pt-2 px-2">
		<div class="bg-light py-2 px-3 d-flex fs-7">
			<span class="fw-bold text-dark">Promotions</span>
		</div>
	</div>
	<div class="px-2">









		<?php 
		foreach ($listpromo as $key => $value)
		{
		?>		
		<div class="border-top py-3 px-2">
			<div class="row g-3">
				<div class="col-12 col-lg-3">
					<div class="fs-9 text-secondary text-uppercase text-truncate">
						Room Category
					</div>
					<div class="pt-1 fs-7 fw-bold text-dark">
						<?php echo $value['roomcatg']; ?>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="fs-9 text-secondary text-uppercase text-truncate">
						Meal Type
					</div>
					<div class="pt-1 fs-7 fw-bold text-dark">
						<?php echo $value['mealtype']; ?>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-xl-5">
					<div class="fs-9 text-secondary text-uppercase text-truncate">
						Promotion
					</div>
					<?php
					foreach ($value["promotion"] as $key2 => $item)
					{
					?>
					<div class="pt-1">
						<div class="fs-7 fw-bold <?php echo $item['class']; ?>">
							<?php echo $item['type']; ?>
						</div>
						<div class="pt-1 fs-7 text-secondary">
							<div>Stay : <?php echo $item['stay']; ?></div>
							<div>Book : <?php echo $item['book']; ?></div>
						</div>
						<div class="pt-1 fs-7 text-secondary">

							<?php
							if(!empty($item['ratecode']))
							{
								echo '<div>Rate Code : '.$item['ratecode'].'</div>';
							}

							if(!empty($item['discount']))
							{
								$distype = "";
								switch($item['discount'])
								{
									case "amount" : $distype = "THB ".$item['discountrate']; break;
									case "percent": $distype = $item['discountrate']."%"; break;
								}
								echo '<div>Discount : '.$distype.'</div>';
							}

							if(!empty($item['count']))
							{
								echo '<div>Count : '.$item['count'].'</div>';
								echo '<div>Free : '.$item['free'].'</div>';
							}
							?>
						</div>
					</div>
					<?php
					}
					?>
				</div>
				<div class="col-12 col-lg-2 col-xl-1">
					<div class="row g-2 justify-content-end">
						<div class="col-auto">
							<button 
								class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" 
								onclick="window.open('/channel-manager-promotion/?page=edit-promotion','_self');">
								<span class="fs-8">
									<i class="fas fa-search"></i>
								</span>
							</button>							
						</div>
						<div class="col-auto">
							<button
								class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0"
								data-bs-toggle="modal"
								data-bs-target="#deleteModal">
								<span class="fs-8">
									<i class="fas fa-trash"></i>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}
		?>
	</div>
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
            		Can you confirm that you wish to delete this promotion 
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>
