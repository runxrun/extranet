<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>
<div class="bg-light">
	<div class="container">

		<div class="py-4">

			<div class="row gx-3">
				<div class="pb-3 col-12">
					<div class="bg-white border-bottom rounded-1 h-100 p-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="d-flex fs-9">
									<span class="px-1 text-primary">
										<i class="fas fa-user"></i>
									</span>
									<span class="px-2 text-primary fw-bold">
										Erik Ten Hag
									</span>
									<span class="px-2 text-secondary">
										traineronline@11infotech.com
									</span>
								</div>
							</div>
							<div class="col-auto">
								<button 
									class="btn btn-link text-info fs-9 text-decoration-none shadow-none">
									Change password
								</button>
							</div>
						</div>
					</div>
				</div>				
			</div>

			<div class="row gx-3">				
				<div class="pb-3 col-12 col-lg-8">
					<div class="row gx-3">
						<div class="pb-3 col-6 col-md-6 col-lg-4">
							<div class="bg-white border-bottom rounded-1 h-100 p-3">
								<div class="fs-9 text-secondary">
									Booking today
								</div>
								<div class="fs-3 fw-bold text-primary">
									<?php echo rand(4,8); ?>
								</div>
							</div>
						</div>
						<div class="pb-3 col-6 col-md-6 col-lg-4">
							<div class="bg-white border-bottom rounded-1 h-100 p-3">
								<div class="fs-9 text-secondary">
									Total nights
								</div>
								<div class="fs-3 fw-bold text-primary">
									<?php echo rand(8,14); ?>
								</div>
							</div>
						</div>
						<div class="pb-3 col-12 col-lg-4">
							<div class="bg-white border-bottom rounded-1 h-100 p-3">
								<div class="fs-9 text-secondary">
									Total revenue
								</div>
								<div class="fs-3 fw-bold text-primary">
									<?php 
									$revenue = rand(4000,29900);
									?>
									฿<?php echo number_format($revenue); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row gx-3">
						<div class="col-12">
							<?php include_once('includes/arrival-by-month.php'); ?>
						</div>
					</div>
				</div>
				<div class="pb-3 col-12 col-lg-4">
					<?php include_once('includes/profile.php'); ?>
				</div>
			</div>
			<div class="row gx-3">
				<div class="col-12">
					<?php include_once('includes/statistic-chart.php'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
?>
</body>
</html>
