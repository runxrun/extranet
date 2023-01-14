
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
						'image_name' => 'https://scontent.fbkk2-4.fna.fbcdn.net/v/t1.18169-9/12742417_1126103127453498_2767390639830139645_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=a261OWy20ooAX_KUKV3&tn=cPQsJ6pJ67QpmDui&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-9UAXbXXE2f6ZYunu_xW4lYLe7sQjApLqjtiKJVL3IVg&oe=631440DF'),
						array(
						'image_name' => 'https://scontent.fbkk2-8.fna.fbcdn.net/v/t31.18172-8/1082503_589194634477686_116047770_o.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=vMMYsXEUJM8AX931C0E&tn=cPQsJ6pJ67QpmDui&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_enriBmeGOHLqAcbAonNWfDqwjeFoqcQOfrqIn9ZkMQg&oe=6313CDF0'),
						array(
						'image_name' => 'https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.18169-9/11693836_1006847986045680_2892449812172601849_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=e3f864&_nc_ohc=zUSESrXvn4YAX-4DIV-&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT_3qiEzXQegUyW3mksMQNz8ZdXCk5u9_e1NdqKsCQTCgA&oe=6310A270'),
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
						'image_name' => 'https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.18169-9/10292509_885453774851769_769151097434564800_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=OcNA1f4PCVwAX9KxIrv&_nc_ht=scontent.fbkk12-4.fna&oh=00_AT_vzu4GgXOaEGW_-BeebnaeKm_-72M8I5Ob8FEZ5lXisA&oe=63151835'),
						array(
						'image_name' => 'https://scontent.fbkk9-2.fna.fbcdn.net/v/t1.18169-9/12391450_1090893060974505_922261004242550345_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=8PfRLbKlYVcAX8UDKia&_nc_ht=scontent.fbkk9-2.fna&oh=00_AT9lYz2eE4TzutVdBNPIqs4EKPYFZ_uE6ru6eSa5X54vng&oe=6317082F'),
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
						'image_name' => 'https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/46714324_2233087766755023_5659972503271899136_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=PmuDOqbFfukAX8B9UKY&_nc_oc=AQlqDsEH9CINLZTXoeKIo2toFmw9TpszAp8HHl7E4q9FVqQwyoncGMrMY44xI2_XPHc&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8Qz9hoz7f_68i8dURFzOHqgL_NmnhQjCzhMhA5cl0B0w&oe=6313063E'),
						array(
						'image_name' => 'https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/46721359_2233087843421682_1609898508708478976_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=tSTafV-hNZQAX8V5CfU&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-Sbctalt4Qm7MaDUBR0vPPFWtdpf9tSDKzJgoFGh02Nw&oe=6311D890'),
						array(
						'image_name' => 'https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.6435-9/47065001_2233087876755012_4499118005090779136_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=60IT22SibhsAX-fUyuJ&tn=cPQsJ6pJ67QpmDui&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT8ey3KQEgMa65ISANPC7IBpn5KEks4SN8AY2UbfCGJpQA&oe=63140AAE'),
						array(
						'image_name' => 'https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.6435-9/46779879_2233087886755011_489236791224696832_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=rO-b97dSvaQAX_Pvkpd&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8s8lM8fgk4pz6RXsp1mpbE-HC3vsFRRGTFchvBaDxjHA&oe=631371DC'),
						array(
						'image_name' => 'https://scontent.fbkk2-4.fna.fbcdn.net/v/t1.6435-9/46821430_2233087800088353_9131645485465993216_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=OZYNElnNzqcAX8O-0YJ&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-v_ei0xy5ewls6dOc0M-KNzFS1uqLeuUHkjRHp4ajXLQ&oe=631226B8'),
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
						'image_name' => 'https://scontent.fbkk12-1.fna.fbcdn.net/v/t1.18169-9/12341356_1082210311842780_865123544961858125_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=phX9YvfZeSkAX9Rr0R-&_nc_ht=scontent.fbkk12-1.fna&oh=00_AT_LfMtpuEevqxQTPiwlQw3siVDZujHauTxFQmKj1DI5ww&oe=63146A03'),
						array(
						'image_name' => 'https://scontent.fbkk12-1.fna.fbcdn.net/v/t1.18169-9/535043_1092188627511615_7845722763385590227_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=9267fe&_nc_ohc=mkVBpslmbOwAX89lwQM&_nc_ht=scontent.fbkk12-1.fna&oh=00_AT8ILVsX709GMkPKK9_xWahxv9AmOaIE-p0TggyQVEkH2Q&oe=6317D06F'),
						array(
						'image_name' => 'https://scontent.fbkk13-1.fna.fbcdn.net/v/t1.18169-9/12376177_1088682771195534_3801467797357888493_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=9267fe&_nc_ohc=X23RH6llp88AX-Grh4F&_nc_ht=scontent.fbkk13-1.fna&oh=00_AT8tIgT9lcAHyVsJNSZiMqmyhrXfXmnI5ArvIFV5vlI5kw&oe=63167047'),
						array(
						'image_name' => 'https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.18169-9/1208867_592244160839400_1736505746_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cdbe9c&_nc_ohc=gwo9YAf3sdsAX_oa6sP&_nc_ht=scontent.fbkk12-4.fna&oh=00_AT_0FBduL1SYZOLqXoRw8atByfnQLKh-d2mOLRGDwKR5yw&oe=6317C121'),
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

