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


		<?php 
		switch($_GET['page']){
			case "0": $datapage = 'includes/room-rate/no-rate.php'; break;
			case "1": $datapage = 'includes/room-rate/room-a.php'; break;
			case "2": $datapage = 'includes/room-rate/room-b.php'; break;
			default : $datapage = 'includes/room-rate/room-b.php'; break;
		}

		//include_once('includes/room-rate/no-rate.php'); 
		//include_once('includes/room-rate/room-a.php'); 
		include_once($datapage); 
		?>


	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-rates.php');
?>
</body>
</html>
