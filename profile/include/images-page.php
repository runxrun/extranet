
<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
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
						<span class="px-2 fw-bold">Genaral Image : </span>
						<span class="">Require at least 2 images</span>
					</div>
					<?php 
					$array_image = array(
						array(
						'image_name' => 'https://lh3.googleusercontent.com/p/AF1QipP0N_A0j31EeolaWtGtX7tjUj_qensD0r7FuRmT=w600-k'),
						array(
						'image_name' => 'https://secure-img.traveligo.com/images/hotels/id/553780/hotel_553780_1581924496_1568839097.JPG'),
						array(
						'image_name' => 'https://ak-d.tripcdn.com/images/fd/hotelintl/g1/M07/5D/8E/CghzfFSuKkmANBPCAAClIsGOS8c907_R_960_660_R5_D.jpg'),
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
						<span class="px-2 fw-bold">Overview Image : </span>
						<span class="">Require at least 1 image</span>
					</div>
					<?php 
					$array_image = array(
						array(
						'image_name' => 'https://lh3.googleusercontent.com/p/AF1QipOJA02wgl7erD2csRk6u91Pl9_QV1Qetz_W8ofz=w600-k'),
						array(
						'image_name' => 'https://ak-d.tripcdn.com/images/fd/hotelintl/g2/M0B/61/5D/CghzgVSuKeiAS_VlAACZ9HsuxHY489_R_960_660_R5_D.jpg'),
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
						<span class="px-2 fw-bold">Facilities Image : </span>
						<span class="">Require at least 1 image</span>
					</div>
					<?php 
					$array_image = array(
						array(
						'image_name' => 'https://ak-d.tripcdn.com/images/fd/hotelintl/g1/M05/5D/77/CghzflSuKeqAYPdPAAB1cguQrAs329_R_960_640_R5_D.jpg'),
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


</div>

