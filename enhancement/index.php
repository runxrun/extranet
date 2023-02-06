<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php 
$enhancement_page =  strtoupper($_GET["page"]);
include_once('../application/includes/header.php'); 
?>
<?php include_once('../application/includes/mainmenu.php'); ?>


<div class="bg-light">
	<div class="container">
		<div class="py-4">
			<?php
				//include('includes/enhancement-title.php'); 
				switch($enhancement_page)
				{
					case "ADD-ENHANCEMENT" : 
					case "EDIT-ENHANCEMENT" : include('add-enhancement.php'); break;
					default : include('list-enhancement.php'); break;
					//default : include('empty.php'); break;
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