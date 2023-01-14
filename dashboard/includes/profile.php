<div class="bg-white border-bottom rounded-1 h-100 p-3">
	<div class="d-flex">
		<div
			class="bg-secondary overflow-hidden rounded-1"
			style="
				background-image: url('https://train.travflex.com/ImageData/Hotel/sonahouse_hotel-logo.jpg');
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				width: 100px;
				height: 100px;
			">
			<img src="/application/images/image-ratio-1-1.gif" class="w-100">
		</div>
		<div style="width: calc(100% - 100px);">
			<div class="px-3">
				<div class="pb-1 fs-6 text-dark fw-bold">
					Sonahouse Hotel
				</div>
				<div class="pb-1 fs-9 text-secondary">
					<span>25/1 Moo 3, Bansuanhom, T. Phasing, A. Muang, ,</span>
					<span>Nan</span>
					<span>Thailand</span>
				</div>
				<div class="pt-2">
					<button class="btn btn-link p-0 fs-9 text-info">
						Change image
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-4">
		<div class="border-top border-2 border-primary">
			<?php 
			$hotel_info = array(
				array(
					'info_name'=>'Information',
					'info_status'=>'Complate',
					'info_class'=>'fw-bold text-success',
				),
				array(
					'info_name'=>'Description',
					'info_status'=>'Complate',
					'info_class'=>'fw-bold text-success',
				),
				array(
					'info_name'=>'Room Category',
					'info_status'=>'Not complete',
					'info_class'=>'fw-bold text-danger',
					'info_record'=>'3',
					'info_checklist'=> array(
						array(
							'roomchk_title'=>'Room Dimension',
							'roomchk_checklist'=>'N',
						),
						array(
							'roomchk_title'=>'Maximum Pax/Rooms',
							'roomchk_checklist'=>'N',
						),
						array(
							'roomchk_title'=>'Total Rooms',
							'roomchk_checklist'=>'N',
						),
						array(
							'roomchk_title'=>'Room Description',
							'roomchk_checklist'=>'N',
						),
						array(
							'roomchk_title'=>'Room Images',
							'roomchk_checklist'=>'N',
						),
						array(
							'roomchk_title'=>'Room Facilities',
							'roomchk_checklist'=>'N',
						),
					),
				),
				array(
					'info_name'=>'Facilities',
					'info_status'=>'Not complete',
					'info_class'=>'fw-bold text-danger',
				),
				array(
					'info_name'=>'Images',
					'info_record'=>'0',
					'info_status'=>'Not complete',
					'info_class'=>'fw-bold text-danger',
				),
				array(
					'info_name'=>'Contact list',
					'info_record'=>'1',
					'info_status'=>'Not complete',
					'info_class'=>'fw-bold text-danger',

				),
				array(
					'info_name'=>'Rack Rate',
					'info_record'=>'0',
					'info_status'=>'Not complete',
					'info_class'=>'fw-bold text-danger',
				),
			);
			?>
		</div>
		<?php 
		foreach ($hotel_info as $key => $value) 
		{
		?>
		<div class="py-2 d-flex justify-content-between border-bottom">
			<div>
				<div class="d-flex fs-9 fw-bold text-dark">
					<span class="pe-2">
						<?php echo $value['info_name']; ?>
					</span>
					<?php 
					if($value['info_record']!=""){
					?>
					<span class="bg-info text-white rounded-pill px-2">
						<?php echo $value['info_record']; ?>
					</span>
					<?php
					}
					?>
				</div>
				<div class="pt-2">
					<?php 
					foreach ($value['info_checklist'] as $key2 => $value2)
					{
						if($value2['roomchk_checklist']=='N')
						{
						?>
						<div class="fs-9 text-secondary">
							<span class="pe-2">-</span>
							<span><?php echo $value2['roomchk_title']; ?></span>
						</div>
						<?php
						}	
					}
					?>
				</div>
			</div>
			<div>
				<a 
					href="javascript:void(0)"
					class="fs-9 text-decoration-none <?php echo $value['info_class']; ?>">
					<?php echo $value['info_status']; ?>
				</a>
			</div>
		</div>
		<?php
		}
		?>
		<div class="py-2">
			<div class="fs-9 text-secondary">
				Amet consectetur adipisicing elit.
			</div>
		</div>
	</div>
</div>