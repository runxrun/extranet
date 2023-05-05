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
      <?php
      if(strtolower($_GET['page'])=="add-promotion")
      {
        include_once('includes/freepromotion-add-edit.php');
      }
      else
      {
        include_once('includes/freepromotion-title.php');
        include_once('includes/freepromotion-filter.php'); 
        include_once('includes/freepromotion-lists.php');
      }
      
      ?>

    </div>
  </div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
?>

</body>
</html>
