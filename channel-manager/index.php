<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>
<div class="bg-light">
	<div class="container-xxl">
		<div class="py-4">
      <?php include_once('includes/channel-filter.php'); ?>
		</div>



    <?php 
    $getCM = $_GET['search'];
    if($getCM)
    {
      include_once('includes/channel-result.php'); 
    }
    else
    {
      include_once('includes/channel-empty.php'); 
    }

    include_once('includes/channel-cancellation.php'); 

    ?>





<!-- 
      <div class="pt-2">
        <div class="bg-primary">
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn w-100 border-0 rounded-0 text-start py-2 px-3 fs-7 fw-bold text-white">
                1 Bedroom /
                Room and Breakfast </button>
            </div>
            <div>
              <button class="btn w-100 border-0 rounded-0 text-start py-2 px-3 fs-7 fw-bold text-white">
                <i class="fas fa-ellipsis-h"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->


  </div>
</div>
<?php include_once('../application/includes/footer.php'); ?>
</body>
</html>