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

		<div class="pt-4 d-none d-lg-block">
			<?php 
				$getpage = $_GET['page'];
				$btnpage = array(
					array('menuname'=>'Infomation', 'menulink'=>'information',),
					array('menuname'=>'Description', 'menulink'=>'description',),
					array('menuname'=>'Room Category', 'menulink'=>'room-category',),
					array('menuname'=>'Facilities', 'menulink'=>'facilities',),
					array('menuname'=>'Images', 'menulink'=>'images',),
					array('menuname'=>'Contact List', 'menulink'=>'contact-list',),
					array('menuname'=>'Meal Type', 'menulink'=>'meal-type-list',),
					array('menuname'=>'Rack Rate Price', 'menulink'=>'rack-rate-price',),
				);
				switch($getpage)
				{
					case "information" : $idpage = 0; break;
					case "description" : $idpage = 1; break;
					case "room-category" : $idpage = 2; break;
					case "room-category-detail" : $idpage = 2; break;
					case "facilities" : $idpage = 3; break;
					case "images" : $idpage = 4; break;
					case "contact-list" : $idpage = 5; break;
					case "contact-detail" : $idpage = 5; break;
					case "meal-type-list" : $idpage = 6; break;
					case "meal-type-detail" : $idpage = 6; break;
					case "rack-rate-price" : $idpage = 7; break;
					case "rack-rate-price-detail" : $idpage = 7; break;
					default : $idpage = 99; break;
				}
			?>
			<div class="d-flex flex-nowrap">
				<?php
				foreach ($btnpage as $key => $value)
				{
					$btnlink = '/profile/hotel-profile.php?page='.$value["menulink"];

					if($key==$idpage)
					{
						$btn_active = 'border-primary border-2';
						$text_active = 'text-primary fw-bold';
					}
					else
					{
						$btn_active = '';
						$text_active = 'text-secondary';
					}
					?>
					<div class="pb-1 w-100 p-0">
						<div class="px-1">
							<button
								class="btn bg-white w-100 rounded-0 py-2 shadow-none border-0 border-bottom <?php echo $btn_active; ?>"
								onclick=" window.open('<?php echo $btnlink; ?>','_self');">					
								<div class="d-block fs-9 text-truncate <?php echo $text_active; ?>">
									<?php echo $value["menuname"] ?>								
								</div>
							</button>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>

		<?php
		switch(strtoupper($getpage))
		{
			case "INFORMATION" : $page_inc = 'information-page.php'; break;
			case "DESCRIPTION" : $page_inc = 'description-page.php'; break;
			case "ROOM-CATEGORY" : $page_inc = 'room-category-page.php'; break;
			case "ROOM-CATEGORY-DETAIL" : $page_inc = 'room-category-detail-page.php'; break;
			case "FACILITIES" : $page_inc = 'facilities-page.php'; break;
			case "IMAGES" : $page_inc = 'images-page.php'; break;
			case "CONTACT-LIST" : $page_inc = 'contact-list-page.php'; break;
			case "CONTACT-DETAIL" : $page_inc = 'contact-detail-page.php'; break;
			case "MEAL-TYPE-LIST" : $page_inc = 'meal-type-list-page.php'; break;
			case "MEAL-TYPE-DETAIL" : $page_inc = 'meal-type-detail-page.php'; break;
			case "RACK-RATE-PRICE" : $page_inc = 'rack-rate-price-page.php'; break;
			case "RACK-RATE-PRICE-DETAIL" : $page_inc = 'rack-rate-price-detail-page.php'; break;
			default : $page_inc = 'notfound-page.php'; break;
		}
		include_once('include/'.$page_inc);
		?>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
?>
</body>
</html>
