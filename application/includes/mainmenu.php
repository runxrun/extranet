<?php
$current_page_raw = explode('/', $_SERVER['REQUEST_URI']);
$current_page = $current_page_raw[1];

switch (strtoupper($current_page)) 
{
	case 'DYNAMIC-RATE':
		$p_icon = "fas fa-calendar-alt";
		$p_title = "Dynamic rate";
		$p_dashboard = "text-secondary";
		$p_profile = "text-secondary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-primary";
		$p_manual = "text-secondary";
		break;

	case 'CONTRACT-RATE':
		$p_icon = "fas fa-calendar-alt";
		$p_title = "Dynamic rate";
		$p_dashboard = "text-secondary";
		$p_profile = "text-secondary";
		$p_contract = "text-primary";
		$p_dynamic = "text-secondary";
		$p_manual = "text-secondary";
		break;

	case 'PROMOTION':
		$p_icon = "fas fa-calendar-alt";
		$p_title = "Promotion";
		$p_dashboard = "text-secondary";
		$p_profile = "text-secondary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-primary";
		$p_manual = "text-secondary";
		break;

	case 'ENHANCEMENT':
		$p_icon = "fas fa-calendar-alt";
		$p_title = "Enhancement";
		$p_dashboard = "text-secondary";
		$p_profile = "text-secondary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-primary";
		$p_manual = "text-secondary";
		break;

	case 'CANCELLATION-POLICY':
		$p_icon = "fas fa-calendar-alt";
		$p_title = "Enhancement";
		$p_dashboard = "text-secondary";
		$p_profile = "text-secondary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-primary";
		$p_manual = "text-secondary";
		break;

	case 'PROFILE':
		$p_icon = "fas fa-h-square";
		$p_title = "Profile";
		$p_dashboard = "text-secondary";
		$p_profile = "text-primary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-secondary";
		$p_manual = "text-secondary";
		break;

	case 'DASHBOARD':
		$p_icon = "fas fa-tachometer-alt";
		$p_title = "Dashboard";
		$p_dashboard = "text-primary";
		$p_profile = "text-secondary";
		$p_contract = "text-secondary";
		$p_dynamic = "text-secondary";
		$p_manual = "text-secondary";
		break;


	/*
	default:
		$p_icon = "fas fa-tachometer-alt";
		$p_title = "Dashboard";
		$p_dynamic = "text-secondary"
		$p_dashboard = "text-secondary"
		break;
	*/
}
?>

<div class="bg-white border-bottom shadow-sm">
	<div class="container-md py-2">
		<div class="fs-7 fw-bold d-block d-md-none">
			<span class="text-secondary pe-2">
				<i class="<?php echo $p_icon; ?>"></i>
			</span>
			<span class="text-dark">
				<?php echo $p_title; ?>
			</span>
		</div>
		<div class="d-none d-md-block">
			<div class="row justify-content-center">
				<div class="col-auto">
					<button 
						class="btn shadow-none border-0 <?php echo $p_dashboard; ?>"
						onclick="window.open('/dashboard/','_self');">
						<div class="fs-4">
							<i class="fas fa-tachometer-alt"></i>
						</div>
						<div class="fs-9">
							Dashboard
						</div>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn shadow-none border-0 <?php echo $p_profile; ?>"
						onclick="window.open('/profile/','_self');">
						<div class="fs-4">
							<i class="fas fa-h-square"></i>
						</div>
						<div class="fs-9">
							Hotel Profile
						</div>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn shadow-none border-0 <?php echo $p_contract; ?>"
						onclick="window.open('/contract-rate/','_self');">
						<div class="fs-4">
							<i class="fas fa-file-alt"></i>
						</div>
						<div class="fs-9">
							Contract Rates
						</div>
					</button>
				</div>
				<div class="col-auto">
					<div class="dropdown">
						<button
							type="button"
							id="btnDynamicRates"
							class="btn shadow-none border-0 <?php echo $p_dynamic; ?>"
							data-bs-toggle="dropdown"
							aria-expanded="false">
							<div class="fs-4">
								<i class="fas fa-calendar-alt"></i>
							</div>
							<div class="fs-9">
								Dynamic Rates
							</div>
						</button>
						<div
							class="dropdown-menu rounded-0 p-0 mt-1"
							aria-labelledby="btnDynamicRates">
							<div class="border-top border-primary border-3">
								<div>
									<a 
										href="javascript: void(0);" 
										class="dropdown-item py-2 fs-8 text-decoration-none"
										onclick="window.open('/dynamic-rate/','_self');">
										Dynamic Rates
									</a>
								</div>
								<div>
									<a
										href="javascript: void(0);"										
										class="dropdown-item py-2 fs-8 text-decoration-none"
										onclick="window.open('/promotion/','_self');">
										Promotion
									</a>
								</div>
								<div>
									<a
										href="javascript: void(0);"
										class="dropdown-item py-2 fs-8 text-decoration-none"
										onclick="window.open('/enhancement/','_self');">
										Enhancement
									</a>
								</div>
								<div>
									<a
										href="javascript: void(0);"
										class="dropdown-item py-2 fs-8 text-decoration-none"
										onclick="window.open('/cancellation-policy/','_self');">
										Cancellation Policy
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- 
					<div class="position-relative">
						<div>
							<button
								class="btn shadow-none border-0 <?php echo $p_dynamic; ?>"
								onclick="window.open('/dynamic-rate/','_self');">
								<div class="fs-4">
									<i class="fas fa-calendar-alt"></i>
								</div>
								<div class="fs-9">
									Dynamic Rates
								</div>
							</button>
						</div>
						<div class="position-absolute top-100 pt-2" style="width: 180px; left: calc(50% - 90px);">
							<div class="bg-white border-top border-primary border-2">
								<button class="btn w-100 fs-8">
									Promotion
								</button>
							</div>
						</div>
					</div>
					 -->
				</div>
				<div class="col-auto">
					<button class="btn shadow-none border-0 <?php echo $p_manual; ?>">
						<div class="fs-4">
							<i class="fas fa-book"></i>
						</div>
						<div class="fs-9">
							Manual
						</div>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>