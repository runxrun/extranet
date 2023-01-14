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
				include('includes/promotion-title.php'); 
				switch($promo_page)
				{
					case "ADD-PROMOTION" :
						include('add-promotion.php'); 
						break;
					default : 
						include('empty-promotion.php'); 
						break;
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