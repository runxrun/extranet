
<!-- Modal Logout -->
<div 
	class="modal fade"
	id="roomaddremoveModal"
	tabindex="-1"
	data-bs-backdrop="static"
	data-bs-keyboard="false">
	<div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Room Add / Remove</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				


				<div class="row">
					<div class="pb-3 col-6">

						<div class="fs-8 text-secondary">
							Room category
						</div>
						<div class="row g-2">
							<div class="col-9">
								<input
									type="text"
									class="form-control rounded-1">
							</div>
							<div class="col-3">
								<button class="btn btn-primary rounded-1 fs-7 w-100">
									Search
								</button>
							</div>
						</div>
					</div>
					<div class="pb-3 col-6">
						&nbsp;
					</div>
				</div>
				

				<div class="row">
					<div class="pb-3 col-6">
						<div class="pb-2">
							<div class="bg-light py-2 px-3 fs-8 fw-bold">
								Room category
							</div>
						</div>
						<?php 
						for($i=1;$i<=20;$i++) 
						{
						?>
						<div class="fs-7">
							One Bedroom
						</div>
						<?php
						}
						?>
					</div>
					<div class="pb-3 col-6">
						<div class="pb-2">
							<div class="bg-light py-2 px-3 fs-8 fw-bold">
								Room category (Selected)
							</div>
						</div>
						<?php 
						for($i=1;$i<=3;$i++) 
						{
						?>
						<div class="fs-7">
							Two Bedroom
						</div>
						<?php
						}
						?>
					</div>
				</div>






			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary rounded-1 fs-8" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary rounded-1 fs-8 px-4">Save</button>
			</div>

		</div>
	</div>
</div>



