<?php 
$listpromo = array(
	array(
		"roomcatg" => "Standard",
		"promotion" => array(
			array(
				"mealtype" => "All meal type",
				"class" => "text-primary",
				"type" => "Advance Purchase (by Period)",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "EB10",
				"discount" => "Percent",
				"discountrate" => "10%",
			),
			array(
				"mealtype" => "All meal type",
				"class" => "text-success",
				"type" => "Long stay / Pay less",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "LN12",
				"discount" => "Percent",
				"discountrate" => "12%",
			),
			array(
				"mealtype" => "Room Only",
				"class" => "text-success",
				"type" => "Long stay / Pay less",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "LN15",
				"discount" => "Percent",
				"discountrate" => "15%",
			),
		),
	),
	array(
		"roomcatg" => "Deluxe",
		"promotion" => array(
			array(
				"mealtype" => "All meal type",
				"class" => "text-primary",
				"type" => "Advance Purchase (by Period)",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "EB10",
				"discount" => "Percent",
				"discountrate" => "10%",
			),
		),
	),
	array(
		"roomcatg" => "Studio",
		"promotion" => array(
			array(
				"mealtype" => "All meal type",
				"class" => "text-danger",
				"type" => "Bonus Night (Free Night Earned)",
				"stay" => "14 Jan 2023 to 31 Jan 2023",
				"book" => "14 Jan 2023 to 31 Jan 2023",
				"ratecode" => "",
				"discount" => "Count 2",
				"discountrate" => "Free 1",
			),
		),
	),
); 
?>

<?php
include_once('includes/promotion-title.php');
include_once('includes/promotion-filter.php');
?>

<div class="table-responsive">
	<table class="table table-bordered bg-white fs-7">
		<?php 
		foreach ($listpromo as $key => $value)
		{
		?>
			<thead>
				<tr>
					<th class="bg-light" colspan="9">
						<div class="d-flex fs-7 fw-bold text-dark">
							<div class="px-1"><i class="fas fa-bed"></i></div>
							<div class="px-1"><?php echo $value['roomcatg']; ?></div>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col" class="text-nowrap">Meal type</th>
					<th scope="col" class="text-nowrap">Promotion</th>
					<th scope="col" class="text-nowrap">Stay</th>
					<th scope="col" class="text-nowrap">Book</th>
					<th scope="col" class="text-nowrap">Rate Code</th>
					<th scope="col" class="text-nowrap">Discount</th>
					<th scope="col" class="text-nowrap">Discount Rate</th>
					<th scope="col" colspan="2"></th>
				</tr>
			</thead>
	  		<tbody>
				<?php 
				foreach ($value['promotion'] as $key2 => $item)
				{
					?>
					<tr class="text-secondary">
						<td>
							<div class="text-nowrap">
								<?php echo $item['mealtype']; ?>
							</div>
						</td>
						<td>
							<div class="fw-bold text-nowrap <?php echo $item['class']; ?>">
								<?php echo $item['type']; ?>
							</div>						
						</td>
						<td>
							<div class="text-nowrap">
								<?php echo $item['stay']; ?>
							</div>
						</td>
						<td>
							<div class="text-nowrap">
								<?php echo $item['book']; ?>
							</div>
						</td>
						<td>
							<div class="text-nowrap">
								<?php echo $item['ratecode']; ?>
							</div>
						</td>
						<td>
							<div class="text-nowrap">
								<?php echo $item['discount']; ?>
							</div>
						</td>
						<td>
							<div class="text-nowrap">
								<?php echo $item['discountrate']; ?>
							</div>
						</td>
						<td class="p-0">
							<button
								class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
								onclick="window.open('/promotion/?page=edit-promotion','_self');">
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
			<?php 				
			if($key != (count($listpromo)-1))
				{
					echo '
						<th
							colspan="9"
							class="bg-light p-0"
							style="border: 0px; border-left: 1px solid #f2f3f4; border-right: 1px solid #f2f3f4;">
							<div style="background-color: #f2f3f4; height: 24px;"></div>
						</th>
					';
				}
		}
		?>		
	</table>
</div>




<div class="bg-white border-bottom rounded-1 mt-3 d-none">
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
								onclick="window.open('/promotion/?page=edit-promotion','_self');">
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

<!-- 
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
-->

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
