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


			<?php 
			if(strtoupper($_GET['page'])=="EDIT-CANCELLATION")
			{
				include_once('includes/add-edit-cancellation.php');
			}
			else
			{
			?>
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
				<div class="py-4">
					<?php 
					include_once('includes/tab-version.php');
					?>
				</div>
			<?php
			}
			?>
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
