<div class="bg-white border-bottom rounded-1 mt-3">
	<div class="p-2">
		<div class="bg-light py-2 px-3 d-flex fs-7">
			<span class="pe-2 text-dark"><i class="fas fa-briefcase"></i></span>
			<span class="fw-bold text-dark">Promotions</span>
		</div>
	</div>
	<div class="px-2">

		<?php 
		$listpromo = array(
			array(
				"roomcatg" => "1 BED",
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
				"roomcatg" => "1 BED",
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
				"roomcatg" => "Studio",
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
				"roomcatg" => "Studio",
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



		<?php 
		foreach ($listpromo as $key => $value)
		{
		?>		
		<div class="border-bottom pb-2 px-2 mb-2">
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
								onclick="window.open('/profile/hotel-profile.php?page=contact-detail','_self');">
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



<!-- 
<div class="border-bottom">
	<div class="row g-0">
		<div class="col-4">
			<div class="row g-0">		
				<div class="col-auto">
					<input type="checkbox">
				</div>
				<div class="col-auto">
					<div>
						Room Category
					</div>
					<div>
						Meal Type
					</div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="row g-0 h-100">
				<div class="border-start col-3">
					<div>
						<div>Advance Purchase</div>
						<div>(by Period)</div>
					</div>
				</div>
				<div class="border-start col-3">
					<div>
						<div>Advance Purchase</div>
						<div>(by Notice Day)</div>
					</div>
				</div>
				<div class="border-start col-3">
					<div>
						Long Stay / Pay Less
					</div>
				</div>
				<div class="border-start col-3">
					<div>
						<div>Bonus Night </div>
						<div>(Free Nights Earned)</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 -->






<!-- 
					<div>
						<div>Advance Purchase</div>
						<div>(by Notice Day)</div>
					</div>

					<div>
						<div>Long Stay / Pay Less</div>
					</div>

					<div>
						<div>Bonus Night </div>
						<div>(Free Nights Earned)</div>
					</div>
 -->





	<div class="p-4">
		<br>
	</div>
</div>