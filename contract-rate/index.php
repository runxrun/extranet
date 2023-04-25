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
			<?php 
			// include_once('includes/contract-array.php');
			// include_once('includes/contract-lists.php');
			// include_once('includes/contract-tools.php');
			?>
			<div class="bg-white">
				<div class="bg-primary">
					<div class="py-2 px-3 fs-7 fw-bold text-white">
						Standard Room / Room Only / THB
					</div>
				</div>



				<div class="border-bottom border-end border-1">
					<div class="row g-0 fs-9 bg-light">
						<div class="col-season"><div class="py-2 px-2 text-secondary text-center">Season</div></div>
						<div class="col-date"><div class="py-2 px-2 text-secondary text-center">Date</div></div>
						<div class="col-minstay"><div class="py-2 px-2 text-secondary text-center">Min Stay</div></div>
						<div class="col-sgl"><div class="py-2 px-2 text-secondary text-center">Single</div></div>
						<div class="col-twndbl"><div class="py-2 px-2 text-secondary text-center"><div>Twin /</div><div>Double</div></div></div>
						<div class="col-quad"><div class="py-2 px-2 text-secondary text-center">Quad</div></div>
						<div class="col-xbedad"><div class="py-2 px-2 text-secondary text-center"><div>Extra Bed</div><div>Adult</div></div></div>
						<div class="col-xbedch"><div class="py-2 px-2 text-secondary text-center"><div>Extra Bed</div><div>Child (3-12)</div></div></div>
						<div class="col-chrange1"><div class="py-2 px-2 text-secondary text-center"><div>Child price</div><div>(3-12)</div></div></div>
						<div class="col-sharebed"><div class="py-2 px-2 text-secondary text-center"><div>Child sharing</div><div>pay breakfast</div></div></div>
						<div class="col-allotment"><div class="py-2 px-2 text-secondary text-center"><div>Allotment</div></div></div>
						<div class="col-cutoff"><div class="py-2 px-2 text-secondary text-center"><div>Cut-off</div></div></div>
					</div>
					<?php
					for($i=1;$i<=30;$i++)
					{
					?>
					<div class="row g-0 fs-9 border-top">
						<div class="col-season"><div class="py-2 px-1 text-secondary text-center">Peak Season</div></div>
						<div class="col-date"><div class="py-2 px-1 text-secondary text-center"><?php echo $i; ?>-Apr-2023</div></div>
						<div class="col-minstay"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="0"></div></div>
						<div class="col-sgl"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="2,500.00"></div></div>
						<div class="col-twndbl"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="2,500.00"></div></div>
						<div class="col-quad"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="4,700.00"></div></div>
						<div class="col-xbedad"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="550.00"></div></div>
						<div class="col-xbedch"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="300.00"></div></div>
						<div class="col-chrange1"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="100.00"></div></div>
						<div class="col-sharebed"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="600.00"></div></div>
						<div class="col-allotment"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="1"></div></div>
						<div class="col-cutoff"><div class="p-0"><input type="text" class="form-control fs-9 rounded-0 border-0 text-center text-secondary" value="45"></div></div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-contract-rates.php');
include_once('../application/includes/modals/add-new-roomcategory.php');
include_once('../application/includes/modals/autofill-contract-rates.php');
?>
</body>
</html>


<style>

.col-meal,
.col-season,
.col-date,
.col-minstay,
.col-sgl,
.col-twndbl,
.col-quad,
.col-xbedad,
.col-xbedch,
.col-chrange1,
.col-chrange2,
.col-focad,
.col-focch,
.col-sharebed,
.col-allotment,
.col-cutoff
 {
	display: flex; 
	align-items: center; 
	justify-content: center; 
	min-height: 100%; 
	border-left: 1px solid #d7d7d7;
}


.col-meal {width: 10%;}
.col-season {width: 12%;}
.col-date {width: 10.5%;}
.col-minstay {width: 6%;}
.col-sgl {width: 8.5%;}
.col-twndbl {width: 8.5%;}
.col-quad {width: 8.5%;}
.col-xbedad {width: 8.5%;}
.col-xbedch {width: 8.5%;}
.col-chrange1 {width: 8.5%;}
.col-chrange2 {width: 8.5%;}
.col-focad {width: 8.5%;}
.col-focch {width: 8.5%; }
.col-sharebed {width: 8.5%;}
.col-allotment {width: 6%;}
.col-cutoff {width: 6%;}

</style>


