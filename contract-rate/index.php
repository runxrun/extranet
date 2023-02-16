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
		<div class="pt-4">
			<div class="row justify-content-between">
				<div class="pb-4 col-12 col-md-auto">
					<?php include_once('includes/contract-filter.php'); ?>
				</div>
				<div class="pb-3 col-12 col-md-auto">
					<?php include_once('includes/contract-action.php'); ?>
				</div>
			</div>	
		</div>
		<div class="pb-5">
			<div class="border bg-white pb-4">
				<div class="p-4">
					<br>
					<br>
					<br>
					<div class="text-secondary text-center pb-2">
						We do not have a contract rate.
					</div>
					<div class="pb-3 d-flex justify-content-center">
						<button
							class="btn btn-primary fs-7 rounded-0 px-4"
							data-bs-toggle="modal"
							data-bs-target="#generateContractRateModal">
							Create rate
						</button>
					</div>
					<br>
					<br>
					<br>
				</div>
			</div>
			<?php //include_once('includes/filters.php'); ?>


		</div>
	</div>

	<?php //include_once('includes/preset-roomcategories.php'); ?>




</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-contract-rates.php');
?>
</body>
</html>
