<?php
	include_once ('roomcategory-array.php');
?>
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="pt-4 px-4">
			<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
				<i class="fas fa-exclamation-circle"></i>
				<span class="px-2">
					Room category will be displayed here only if rates have been added.
				</span>
			</div>
		</div>
		<div class="p-4">
			<div class="row">		
				<?php 
				foreach ($set_data_a as $key => $value)
				{
					include('input-element.php');
				}
				?>
			</div>


			<?php 
				$room_fac = array(
					array('fac_name'=>'1 King Bed', 'fac_check'=>'Y'),
					array('fac_name'=>'2 Single Beds', 'fac_check'=>''),
					array('fac_name'=>'Queen Bed', 'fac_check'=>''),
					array('fac_name'=>'Smoking', 'fac_check'=>''),
					array('fac_name'=>'Non-smoking', 'fac_check'=>'Y'),
					array('fac_name'=>'No Window', 'fac_check'=>''),
					array('fac_name'=>'With Balcony', 'fac_check'=>''),
					array('fac_name'=>'Wi-Fi', 'fac_check'=>'Y'),
				);

			?>

			<div class="row">
				<div class="col-auto pt-3">					
					<div class="fs-8 fw-bold text-dark">
						Highlight of room facilities
					</div>
				</div>
				<div class="col-auto pt-3">
					<div class="row">
						<?php
						foreach ($room_fac as $key => $value)
						{
							$facId = 'room_fac_'.$key;
							if($value['fac_check']=="Y")
							{
								$fac_checked = 'checked'; 
							}
							else
							{
								$fac_checked = ''; 
							}
						?>
						<div class="col-auto">
							<div class="form-check fs-8 text-secondary">
								<input
									type="checkbox"
									id="<?php echo $facId; ?>"
									class="form-check-input"
									<?php echo $fac_checked; ?>
									value="<?php echo $value['fac_name']; ?>">
								<label class="form-check-label" for="<?php echo $facId; ?>">
									<?php echo $value['fac_name']; ?>
								</label>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>


		</div>
	</div>



	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Room category decription
			</span>
		</div>
		<div class="p-4">
			<div class="pb-3">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="position-relative">
							<button class="btn border w-100 rounded-0 d-flex p-0" data-bs-toggle="dropdown" aria-expanded="false">
								<div class="py-2 px-3 w-100 fs-8 fw-bold text-dark">
									ภาษาไทย
								</div>
								<div class="py-2 px-3 bg-light border-start">
									<i class="fas fa-language"></i>
								</div>
							</button>
							<ul class="dropdown-menu rounded-0 w-100 fs-7">
								<li><a class="dropdown-item" href="javascript:void(0);">English</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">Bahasa Indonesia</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">ภาษาไทย</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">日本語</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">简体中文</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8">
						<div class="input-group mb-3">
							<span class="input-group-text rounded-0 py-2 fs-7 fw-bold text-dark">
								Room Category
							</span>
							<input
								type="text"
								class="form-control fs-6 rounded-0 py-2 text-dark"
								value="ห้องเตียงเดี่ยว">
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="bg-light border-top border-start border-end p-2">
					<div class="row g-2">
						<div class="col-auto">
							<div class="d-flex">
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-undo"></i></span>
								</button>
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-redo"></i></span>
								</button>
							</div>
						</div>
						<div class="col-auto">
							<div class="d-flex">
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-bold"></i></span>
								</button>
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-italic"></i></span>
								</button>
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-underline"></i></span>
								</button>
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-strikethrough"></i></span>
								</button>
							</div>
						</div>
						<div class="col-auto">
							<div class="d-flex">
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-list-ul"></i></span>
								</button>
								<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
									<span class="fs-9 text-dark"><i class="fas fa-list-ol"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div>
					<textarea class="form-control rounded-0 w-100 fs-7 p-3" cols="30" rows="10">Sona House Hotel room service with water heater, air conditioner, cable TV, free wifi, coffee and parking</textarea>
				</div>
			</div>
		</div>

		<div class="p-4">
			<div class="row">
				<div class="pb-3 pb-md-0 col-12 col-md-3">
					<div class="h-100">
						<button class="btn bg-light w-100 h-100 rounded-0 border-0 py-4">
							<div class="fs-1 text-secondary">
								<i class="fas fa-image"></i>
							</div>
							<div class="fs-8 text-secondary">
								Upload image
							</div>
						</button>
					</div>
				</div>
				<div class="col-12 col-md-9">					
					<div class="alert alert-warning py-2 fs-8 rounded-1">
						<span><i class="fas fa-images"></i></span>
						<span class="px-2 fw-bold">Room Image : </span>
						<span class="">Require at least 1 image</span>
					</div>
					<?php 
					$array_image = array(
						array(
						'image_name' => 'https://d23e6w66rgwdf8.cloudfront.net/images/hotels/id/553780/hotel_553780_1581924496_975682311.JPG'),
						array(
						'image_name' => 'https://lh3.googleusercontent.com/p/AF1QipN2KqbnTQ-LVYVn0CWnd0rfx6Ht4WlcJF1SvxbQ=w600-k'),
						array(
						'image_name' => 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_360,q_auto,w_360/itemimages/87/49/8749882.jpeg'),
						array(
						'image_name' => 'https://thailandtourismdirectory.go.th/assets/upload/2020/08/03/2020080306b21e2035fe3b2f1c1561b86ca39df0112239.jpg'),
						array(
						'image_name' => 'https://d23e6w66rgwdf8.cloudfront.net/images/hotels/id/553780/hotel_553780_1581924496_1426886593.JPG'),
					);
					?>
					<div class="row g-2">

						<?php 
						foreach ($array_image as $key => $value)
						{
						?>
						<div class="col-4 col-md-3 col-xl-2">
							<div
								class="d-flex overflow-hidden rounded-1 w-100"
								style="
									background-image: url(<?php echo $value['image_name']; ?>);
									background-repeat: no-repeat;
									background-position: center;
									background-size: cover;
								">
								<img src="/application/images/image-ratio-4-3.gif" class="w-100">
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="bg-white border-bottom rounded-1 mt-3">
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Room category facilities
			</span>
		</div>
		<div class="p-4">

			<?php  
				$room_facilities = array(
					array('fac_name'=>'220 Volt', 'fac_check'=>'Y'),
					array('fac_name'=>'24 Hrs. Room Service', 'fac_check'=>''),
					array('fac_name'=>'Air-condition', 'fac_check'=>'Y'),
					array('fac_name'=>'Alarm Clock', 'fac_check'=>''),
					array('fac_name'=>'Babycot', 'fac_check'=>''),
					array('fac_name'=>'Balcony', 'fac_check'=>''),
					array('fac_name'=>'Bath Robe', 'fac_check'=>''),
					array('fac_name'=>'Bathtub', 'fac_check'=>''),
					array('fac_name'=>'CD Player', 'fac_check'=>''),
					array('fac_name'=>'DVD / VCD', 'fac_check'=>''),
					array('fac_name'=>'Electric Kettle', 'fac_check'=>'Y'),
					array('fac_name'=>'Fridge', 'fac_check'=>'Y'),
					array('fac_name'=>'Fruit Basket', 'fac_check'=>''),
					array('fac_name'=>'Hairdryer', 'fac_check'=>'Y'),
					array('fac_name'=>'Heater', 'fac_check'=>''),
					array('fac_name'=>'IDD Phone', 'fac_check'=>''),
					array('fac_name'=>'In-Room Movie', 'fac_check'=>''),
					array('fac_name'=>'Kitchen', 'fac_check'=>''),
					array('fac_name'=>'Make up mirror', 'fac_check'=>''),
					array('fac_name'=>'Microwave', 'fac_check'=>''),
					array('fac_name'=>'Minibar', 'fac_check'=>''),
					array('fac_name'=>'Non Smoking Room', 'fac_check'=>'Y'),
					array('fac_name'=>'Plug Adaptor', 'fac_check'=>''),
					array('fac_name'=>'Radio', 'fac_check'=>''),
					array('fac_name'=>'Room Service', 'fac_check'=>''),
					array('fac_name'=>'Shower', 'fac_check'=>'Y'),
					array('fac_name'=>'Slippers', 'fac_check'=>''),
					array('fac_name'=>'Tea / Coffee', 'fac_check'=>'Y'),
					array('fac_name'=>'Telephone', 'fac_check'=>'Y'),
					array('fac_name'=>'Toaster', 'fac_check'=>''),
					array('fac_name'=>'Toiletries', 'fac_check'=>'Y'),
					array('fac_name'=>'TV', 'fac_check'=>'Y'),
					array('fac_name'=>'VDO', 'fac_check'=>''),
					array('fac_name'=>'Washing Machine', 'fac_check'=>''),
					array('fac_name'=>'Water', 'fac_check'=>'Y'),
					array('fac_name'=>'Wifi', 'fac_check'=>'Y'),
					array('fac_name'=>'Wired Internet', 'fac_check'=>''),
					array('fac_name'=>'Workdesk', 'fac_check'=>''),
				);
			?>
			<div class="row">
				<?php
				foreach ($room_facilities as $key => $value)
				{
					$facId = 'room_fac_'.$key;
					if($value['fac_check']=="Y")
					{
						$fac_checked = 'checked'; 
					}
					else
					{
						$fac_checked = ''; 
					}
				?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="form-check fs-8 text-secondary">
						<input
							type="checkbox"
							id="<?php echo $facId; ?>"
							class="form-check-input"
							<?php echo $fac_checked; ?>
							value="<?php echo $value['fac_name']; ?>">
						<label class="form-check-label" for="<?php echo $facId; ?>">
							<?php echo $value['fac_name']; ?>
						</label>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>



<div class="pb-4">
	<div class="row justify-content-between">
		<div class="col-auto">
			<button
				class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/profile/hotel-profile.php?page=room-category','_self');">
				<span><i class="fas fa-undo"></i></span>
				<span class="px-2">Back</span>
			</button>			
		</div>
		<div class="col-auto">
			
			<div class="row g-2 justify-content-end">
				<div class="col-auto">
					<button
						class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/profile/hotel-profile.php?page=room-category','_self');">
						<span class="px-2">Cancel</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/profile/hotel-profile.php?page=room-category-detail','_self');">
						<span class="px-4">Save</span>
					</button>
				</div>
			</div>	
		</div>
	</div>
</div>












		<!-- 
		<div class="d-flex pt-4 px-4">
			<span class="fs-6 fw-bold text-primary pe-2">
				<i class="fas fa-info-circle"></i>
			</span>
			<span class="fs-6 fw-bold text-primary">
				Room category
			</span>
		</div>
		-->