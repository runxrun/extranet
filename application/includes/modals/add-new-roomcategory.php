
<div
	class="modal fade"
	id="AddNewRoomCategory"
	data-bs-backdrop="static"
	data-bs-keyboard="false"
	tabindex="-1" 
	aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title fw-bold fs-6">Room Category</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-0">

				<div class="border-bottom py-3 px-3">
					<div class="row g-2">
						<div class="col-4">
							<input type="text" class="form-control rounded-0 fs-7" placeholder="Room category name">
						</div>
						<div class="col-auto">
							<button class="btn btn-primary rounded-0 fs-7">
								Search
							</button>
						</div>
						<div class="col-auto">
							<button class="btn btn-success rounded-0 fs-7" disabled>
								Create room
							</button>
						</div>
					</div>
				</div>

				<div class="row g-0">
					<div class="col-12 col-lg-6">
						<div class="border-bottom bg-light fs-9 fw-bold text-dark py-2 px-3">
							Room category activated
						</div>
						<div class="" style="overflow-x: hidden; overflow-y: auto; max-height: 269px;">
							<?php 
							$roomactive = array(
								array('roomname'=>'Standard',),
								array('roomname'=>'Deluxe',),
								array('roomname'=>'Family Suite',),
								array('roomname'=>'Villa Suite',),
							);

							foreach ($roomactive as $key => $value) {
							?>
							<div class="d-flex justify-content-between fs-7 border-bottom">
								<div class="w-100 py-2 px-3 text-secondary">
									<?php echo $value['roomname']; ?>
								</div>
								<div class="">
									<button class="btn btn-danger w-100 rounded-0 fs-9 py-2 px-3">
										<i class="fas fa-trash"></i>
									</button>
								</div>
							</div>
							<?php
							}
							?>


						</div>
					</div>
					<div class="col-12 col-lg-6 border-start">
						<div class="border-bottom bg-light fs-9 fw-bold text-dark py-2 px-3">
							Room category lists							
						</div>




						<div class="" style="overflow-x: hidden; overflow-y: auto; height: 100%; max-height: 269px;">

							<?php 
							$roomlists = array(
								array('roomname'=>'1 Bed Executive',),
								array('roomname'=>'1 Bed Suite',),
								array('roomname'=>'1 BED TEST ROOM',),
								array('roomname'=>'1 BED WITH SOFA BED SMOKING',),
								array('roomname'=>'1 BEDROOM',),
								array('roomname'=>'1 Bedroom (Executive Suite)',),
								array('roomname'=>'1 Bedroom (Junior Suite)',),
								array('roomname'=>'1 BEDROOM CLASSIC',),
								array('roomname'=>'1 BEDROOM DELUXE',),
								array('roomname'=>'2 BED ROOM SUITE',),
								array('roomname'=>'2 BEDROOM',),
								array('roomname'=>'2 Bedroom (Grand Suite) (Song)',),
								array('roomname'=>'2 BEDROOM (MAX 6 PAX)',),
								array('roomname'=>'2 Bedroom (Royal Suite) (Song)',),
								array('roomname'=>'2 BEDROOM APARTMENT',),
								array('roomname'=>'2 BEDROOM DELUXE',),
								array('roomname'=>'2 BEDROOM DELUXE PREMIUM SUITE',),
								array('roomname'=>'2 BEDROOM DELUXE SUITE',),
								array('roomname'=>'2 BEDROOM EXECUTIVE',),
								array('roomname'=>'3 BED',),
								array('roomname'=>'3 Bed rooms',),
								array('roomname'=>'3 BEDROOM',),
								array('roomname'=>'3 BEDROOM EXECUTIVE',),
								array('roomname'=>'3 BEDROOM VILLA',),
								array('roomname'=>'3 Bedroom 3 Bathroom views apartment',),
								array('roomname'=>'3 BEDROOM DELUXE',),
								array('roomname'=>'Bed in dormitory STANDARD',),
								array('roomname'=>'BED IN DORMITORY WITH SHARED BATHROOM',),
								array('roomname'=>'BED ROOM DELUXE VIEW',),	
								array('roomname'=>'DELUXE',),
								array('roomname'=>'DELEUX SEA VIEW',),
								array('roomname'=>'DELEXE RIVER VIEW',),
								array('roomname'=>'DELEXUE',),
								array('roomname'=>'DELOS',),
								array('roomname'=>'DELTA SUITE',),
								array('roomname'=>'DELUXE POOL VIEW',),
								array('roomname'=>'DELUEX',),
								array('roomname'=>'DELUEX ROOM',),
								array('roomname'=>'DELUSE ROOM',),
								array('roomname'=>'FAMILY 1 BEDROOM',),
								array('roomname'=>'Family 2 Bedroom',),
								array('roomname'=>'Family 3 Pax (Mus01)',),
								array('roomname'=>'FAMILY AND FRIENDS 4',),
								array('roomname'=>'FAMILY AND FRIENDS 6',),
								array('roomname'=>'FAMILY AND FRIENDS 8',),
								array('roomname'=>'STANADARD DOUBLE',),
								array('roomname'=>'STANADARD TWIN',),
								array('roomname'=>'STANARD ROOM',),
								array('roomname'=>'STANARD VILLA',),
								array('roomname'=>'STANDAD MOUNTAIN VIEW',),
								array('roomname'=>'STANDAND',),
								array('roomname'=>'STANDAR ROOM',),
								array('roomname'=>'STANDARD CONTINENTAL BREAKFAST',),
								array('roomname'=>'STANDARD SPCL',),
								array('roomname'=>'STANDARD DOUBLE DELUXE ROOM',),
								array('roomname'=>'STANDARD QUEEN',),
								array('roomname'=>'SUIT',),
								array('roomname'=>'SUIT ROOM',),
								array('roomname'=>'SUITE',),
								array('roomname'=>'Suite SPCL',),
								array('roomname'=>'SUITE 1 KING BED (ARTIST)',),
								array('roomname'=>'SUITE 2 DOUBLE BEDS (STATE ROOM)',),
								array('roomname'=>'SUITE (1 KING BED)',),
							);

							foreach ($roomlists as $key => $value)
							{
							?>

							<div class="d-flex justify-content-between fs-7 border-bottom">
								<div class="w-100 py-2 px-3 text-secondary">
									<?php echo $value['roomname']; ?>
								</div>
								<div class="">
									<button class="btn btn-success w-100 h-100 rounded-0 fs-9 py-2 px-3">
										Select
									</button>
								</div>
							</div>

							<?php
							}
							?>
						</div>




					</div>
				</div>


			</div>
			<div class="modal-footer">
				<button
					type="button"
					class="btn btn-secondary rounded-0 fs-7"
					data-bs-dismiss="modal">
					Close
				</button>
				<button
					type="button"
					class="btn btn-primary rounded-0 fs-7"
					data-bs-dismiss="modal">
					Save changes
				</button>
			</div>
		</div>
	</div>
</div>