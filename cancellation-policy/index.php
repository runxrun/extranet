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
			if(
				(strtoupper($_GET['page'])=="EDIT-CANCELLATION") ||
				(strtoupper($_GET['page'])=="ADD-CANCELLATION")
			)
			{
				$page_action = 'includes/add-edit-cancellation.php'; 
			}
			else
			{
				$page_action = 'includes/tab-version.php'; 
			}
			include_once($page_action);
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
