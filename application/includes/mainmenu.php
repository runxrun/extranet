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
		$p_dynamic = "text-primary";
		$p_manual = "text-secondary";
		break;

	case 'PROFILE':
		$p_icon = "fas fa-h-square";
		$p_title = "Profile";
		$p_dashboard = "text-secondary";
		$p_profile = "text-primary";
		$p_dynamic = "text-secondary";
		$p_manual = "text-secondary";
		break;

	case 'DASHBOARD':
		$p_icon = "fas fa-tachometer-alt";
		$p_title = "Dashboard";
		$p_dashboard = "text-primary";
		$p_profile = "text-secondary";
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