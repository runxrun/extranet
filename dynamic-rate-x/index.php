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
					<?php include_once('includes/dynamic-filter.php'); ?>
				</div>
				<div class="pb-3 col-12 col-md-auto">
					<?php include_once('includes/dynamic-action.php'); ?>
				</div>
			</div>	
		</div>
		<div class="pb-4">
			<div class="border bg-white pb-4">
				<div class="p-4">
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="text-secondary text-center pb-2">
						Click the button below to generate rate.
					</div>
					<div class="pb-3 d-flex justify-content-center">
						<button 
							class="btn btn-primary fs-7 rounded-0 px-4" 
							onclick="window.open('/dynamic-rate-x/generate-rate.php');">
							Generate rate
						</button>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>
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
