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
			<div class="d-flex flex-nowrap">
				<?php
				$page_get = $_GET['page'];
				$info_array = array(
					array('menu_name'=>'Information', 'menu_link'=>'information'),
					array('menu_name'=>'Description', 'menu_link'=>'description'),
					array('menu_name'=>'Room Category', 'menu_link'=>'room-category'),
					array('menu_name'=>'Facilities', 'menu_link'=>'facilities'),
					array('menu_name'=>'Images', 'menu_link'=>'images'),
					array('menu_name'=>'Contact List', 'menu_link'=>'contact-list'),
					array('menu_name'=>'Meal Type List', 'menu_link'=>'meal-type-list'),
					array('menu_name'=>'Rack Rate Price', 'menu_link'=>'rack-rate-price'),
				);
				foreach ($info_array as $key => $value)
				{

					if($value['menu_link'] == $page_get)
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
								onclick="window.open('<?php echo '/profile/hotel-profile.php?page='.$value['menu_link']; ?>', '_self');">
								<span class="d-block fs-9 text-truncate <?php echo $text_active; ?>">
									<?php echo $value['menu_name']; ?>
								</span>
							</button>
						</div>
					</div>
				<?php
				}
				?>
			</div>	
		</div>
		<?php
		switch(strtoupper($page_get))
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
