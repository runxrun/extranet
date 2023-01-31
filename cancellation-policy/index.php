<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php 
$promo_page =  strtoupper($_GET["page"]);
include_once('../application/includes/header.php');
include_once('../application/includes/mainmenu.php'); 
?>
<div class="bg-light">
	<div class="container">
		<div class="py-4">

			<div class="bg-white border-bottom rounded-1 p-4">
				<div class="row justify-content-between">
					<div class="pb-2 pb-sm-0 col-auto">
						<div class="d-flex">
							<span class="fs-6 fw-bold text-primary pe-2">
								<i class="fas fa-info-circle"></i>
							</span>
							<span class="fs-6 fw-bold text-primary">
								Cancellation policy
							</span>
						</div>
					</div>
					<div class="col-auto">
						<button
							class="btn btn-success rounded-0 py-2 fs-8 text-white"
							onclick="window.open('/cancellation-policy/?page=add-enhancement','_self');">
							<span class="pe-2"><i class="fas fa-plus-circle"></i></span>
							<span class="pe-2">Add</span>
						</button>
					</div>
				</div>
			</div>


			<div class="row g-2 mt-3">
				<div class="col-auto">
					<button class="btn btn-primary rounded-0 fs-7 w-100">Version #1</button>
				</div>
				<div class="col-auto">
					<button class="btn btn-outline-primary rounded-0 fs-7 w-100">Version #2</button>
				</div>
			</div>


			<div class="pb-4">
				<div class="bg-light border mt-3">
					<div class="row py-2 px-2">
						<div class="col-auto col-md-4 col-xl-3">
							<span class="fs-7 text-dark px-1">
								<i class="fas fa-bed"></i>
							</span>
							<span class="fs-7 text-dark px-1 fw-bold">
								All room
							</span>
						</div>
						<div class="col-auto col-md-8 col-xl-9">
							<span class="fs-7 text-dark px-1">
								<i class="fas fa-utensils"></i>
							</span>
							<span class="fs-7 text-dark px-1 fw-bold">
								All meal type
							</span>
						</div>
					</div>
					<div class="border-top bg-white">
						<div class="row">
							<div class="col-8 col-md-4 col-xl-3 order-1 order-md-1">
								<div class="d-flex py-2 px-3">
									<div class="fs-8 text-secondary text-nowrap">
										01 Apr 2023
										<span class="px-1">to</span>
										31 Dec 2023
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-7 order-3 order-md-2">
								<div class="py-2 px-2">
									<div class="d-flex pb-1">
										<div class="pe-2 fs-8 text-secondary">
											1.
										</div>
										<div class="fs-8 text-secondary">
											Cancellations up to 8 days in advance, with a 50% charge of the room price
										</div>
									</div>
									<div class="d-flex pb-1">
										<div class="pe-2 fs-8 text-secondary">
											2.
										</div>
										<div class="fs-8 text-secondary">
											Cancellations must be made 1 day prior to arrival or the room price will not be refunded.
										</div>
									</div>
								</div>
							</div>
							<div class="col-4 col-md-2 col-xl-2 order-2 order-md-3">
								<div class="row g-0 justify-content-end">
									<div class="col-auto">
										<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
											<span class="fs-8">
												<i class="fas fa-search"></i>
											</span>
										</button>
									</div>
									<div class="col-auto">
										<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
											<span class="fs-8">
												<i class="fas fa-trash"></i>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="border-top bg-white">
						<div class="row">
							<div class="col-8 col-md-4 col-xl-3 order-1 order-md-1">
								<div class="d-flex py-2 px-3">
									<div class="fs-8 text-secondary text-nowrap">
										01 Apr 2023
										<span class="px-1">to</span>
										31 Dec 2023
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-7 order-3 order-md-2">
								<div class="py-2 px-2">
									<div class="d-flex pb-1">
										<div class="pe-2 fs-8 text-secondary">
											1.
										</div>
										<div class="fs-8 text-secondary">
											Cancellations up to 7 days in advance, with a 50% charge of the room price
										</div>
									</div>
									<div class="d-flex pb-1">
										<div class="pe-2 fs-8 text-secondary">
											2.
										</div>
										<div class="fs-8 text-secondary">
											Cancellations must be made 2 day prior to arrival or the room price will not be refunded.
										</div>
									</div>
								</div>
							</div>
							<div class="col-4 col-md-2 col-xl-2 order-2 order-md-3">
								<div class="row g-0 justify-content-end">
									<div class="col-auto">
										<button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
											<span class="fs-8">
												<i class="fas fa-search"></i>
											</span>
										</button>
									</div>
									<div class="col-auto">
										<button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
											<span class="fs-8">
												<i class="fas fa-trash"></i>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>





			<div class="pb-4">
				<?php
				for($i=0;$i<1;$i++)
				{
				?>
				<div class="bg-light border mt-3">
					<div class="py-2 px-2">
						<div class="fs-7">
							<span class="text-dark px-1">
								<i class="fas fa-bed"></i>
							</span>
							<span class="text-dark px-1 fw-bold">
								All Rooms
							</span>
						</div>
					</div>

					<style>
						.rn-xt {
							display: flex;
						}

						.rn-x1,.rn-x2,.rn-x3,.rn-x4,.rn-x5{
							border-right: 1px solid #d7d7d7;
						}
						.rn-x1 {
							width: 20%;
						}
						.rn-x2 {
							width: 15%;
						}
						.rn-x3 {
							width: 10%;
						}
						.rn-x4 {
							width: 20%;
						}
						.rn-x5 {
							width: 20%;
							border-right: 0px;
						}
					</style>



					<div class="border-top bg-white">
						<div class="rn-xt">
							<div class="rn-x1">
								<div class="p-2 fs-8 fw-bold text-dark">
									Meal type
								</div>
							</div>
							<div class="rn-x2">
								<div class="p-2 fs-8 fw-bold text-dark">
									Date range
								</div>
							</div>
							<div class="rn-x2">
								<div class="p-2 fs-8 fw-bold text-dark">
									Date range
								</div>
							</div>
							<div class="rn-x3">
								<div class="p-2 fs-8 fw-bold text-dark">
									Cancel date
								</div>
							</div>
							<div class="rn-x4">
								<div class="p-2 fs-8 fw-bold text-dark">
									Charge rate
								</div>
							</div>
							<div class="rn-x5">
								<div class="p-2 fs-8 fw-bold text-dark">
									Charge type
								</div>
							</div>
						</div>
					</div>

					<?php
					for($j=0;$j<1;$j++)
					{
					?>
					<div class="border-top bg-white">

						<div class="rn-xt">
							<div class="rn-x1">
								<div class="p-2 fs-8 text-secondary">
									All room type
								</div>
							</div>
							<div class="rn-x2">
								<div class="p-2 fs-8 text-secondary">
									01 Jan 2023
								</div>
							</div>
							<div class="rn-x2">
								<div class="p-2 fs-8 text-secondary">
									31 Dec 2023
								</div>
							</div>
							<div class="rn-x3">
								<div class="p-2 fs-8 text-secondary">
									3 days
								</div>
							</div>
							<div class="rn-x4">
								<div class="p-2 fs-8 text-secondary">
									20
								</div>
							</div>
							<div class="rn-x5">
								<div class="p-2 fs-8 text-secondary">
									Percent
								</div>
							</div>
						</div>



						<div class="row g-0 d-none">

							<div class="">
							
							<div class="col-12 p-2">
								<?php
								for($k=0;$k<=0;$k++)
								{
								?>
								<div class="fs-7 text-secondary">
									<div class="row g-0">
										<div class="col-auto">
											<div class="px-2 fs-7 text-secondary">
												TEST
											</div>
										</div>
										<!--  
											Room only / 01 Jan 2023 - 28 Feb 2023 allows cancellations up to 3 days in advance, with a 50% charge of the room price.
										<div class="col-auto">
											The cancellation policy for <b>Standard</b> (Room Only) bookings between 01 Jan 2023 and 28 Feb 2023 allows cancellations up to 3 days in advance, with a 50% charge of the room price.
										</div>
										-->
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
					<?php
					} 
					?>
					</div>
				</div>
				<?php
				} 
				?>
			</div>


		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-rates.php');
?>
</body>
</html>
