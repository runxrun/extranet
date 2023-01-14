<?php 
$tab_desc = array(
	array("tab"=>"Hotel Description"),
	array("tab"=>"Short Description (Hotel)", "active"=>"Y"),
	array("tab"=>"Location Information"),
	array("tab"=>"Room Information"),
	array("tab"=>"Facility Information"),
	array("tab"=>"Spa Information"),
	array("tab"=>"Casino Information"),
	array("tab"=>"Golf Information"),
	array("tab"=>"Shop Information"),
	array("tab"=>"Remark"),
	array("tab"=>"Remark (Internal)"),
);
?>

<div class="pt-3 pb-4">
	<div class="bg-white border-bottom rounded-1">
		<div class="p-4">

			<div class="pb-4">
				<div class="alert alert-warning py-2 px-3 m-0 fs-8">
					<i class="fas fa-exclamation-circle"></i>
					<span class="px-2">
						For "Short Description" is maximum 255 characters allowed and
						"Short Description" and "Hotel Description" value is required.
					</span>
				</div>
			</div>

			<div class="row">
				<div class="pb-3 col-12 col-md-3">					
					<div class="d-none d-md-block">
						<?php
						foreach ($tab_desc as $key => $value)
						{
							if ($value['active']=="Y") 
							{
								$tab_act = 'text-primary fw-bold';
							}
							else
							{
								$tab_act = 'btn-outline-light text-secondary';
							}
						?>
						<div class="border-top border-light">
							<button class="btn w-100 rounded-0 text-start border-0 py-2 px-3 <?php echo $tab_act; ?>">
								<span class="fs-8">
									<?php echo $value['tab']; ?>
								</span>
							</button>
						</div>
						<?php
						}
						?>						
					</div>

					<div class="d-blok d-md-none">
						<div class="position-relative">
							<button 
								class="btn border w-100 rounded-0 d-flex p-0"
								data-bs-toggle="dropdown"
								aria-expanded="false">
								<div class="py-2 px-3 w-100 fs-8 fw-bold text-dark">
									Short Description
								</div>
								<div class="py-2 px-3 bg-light border-start">
									<i class="fas fa-angle-down"></i>
								</div>
							</button>
							<ul class="dropdown-menu rounded-0 w-100 fs-7">
								<?php
								foreach ($tab_desc as $key => $value)
								{
								?>
								<li>
									<a class="dropdown-item" href="javascript:void(0);"><?php echo $value['tab']; ?></a>
								</li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>

				</div>
				<div class="pb-3 col-12 col-md-9">
					<div class="pb-3">
						<div class="row g-2">
							<div class="col-12 col-md-6 col-lg-4">
								<div class="position-relative">
									<button
										class="btn border w-100 rounded-0 d-flex p-0"
										data-bs-toggle="dropdown"
										aria-expanded="false">
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
						</div>
					</div>
					<div>
						<?php 
						$short_info = 'โรงแรมโซน่าเฮาส์ บริการห้องพัก พร้อมเครื่องทำน้ำอุ่น แอร์ เคเบิ้ลทีวี ฟรี WIFI กาแฟ และที่จอดรถ';
						?>
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
							<textarea
								class="form-control rounded-0 w-100 fs-7 p-3"
								cols="30"
								rows="15"><?php 
								echo trim($short_info);
							?></textarea>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
		

<!-- 
<div class="row g-2">
	<div class="col-3">
		<button class="btn btn-outline-secondary bg-white rounded-0 w-100 shadow-none py-2 px-3">
			<span class="fs-9 fw-bold text-dark">English</span>
		</button>								
	</div>
	<div class="col-2">
		<button class="btn btn-primary rounded-0 w-100 py-2 px-2">
			<span class="fs-9">Change language</span>
		</button>								
	</div>
</div>
 -->