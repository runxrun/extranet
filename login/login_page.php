<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Extranet</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/application/scss/customize.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body
	class="bg-login">
	<div
		class="position-fixed w-100 h-100 start-0 flex-0 overflow-auto"
		style="
			background-image: url('/application/images/bg-home.png');
			background-position: center bottom;
			background-repeat: no-repeat;
			background-size: 100%;
		">
		<div class="d-flex justify-content-center h-100">
			<div class="container m-auto py-4">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5 px-4">
						<div class="pb-4">
							<div class="rn-title fs-1 fw-bold text-white text-center">
								Extranet
							</div>
							<div class="fs-7 text-white-50 text-center">
								Online distribution management that is easily manageable
							</div>
						</div>
						<div class="row g-2 pt-2 pb-4">
							<div class="col-4">
								<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
								<label class="btn btn-outline-light w-100 fs-8 rounded-1" for="btnradio1">Hotel</label>
							</div>
							<div class="col-4">
								<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
								<label class="btn btn-outline-light w-100 fs-8 rounded-1" for="btnradio2">Supplier</label>
							</div>
							<div class="col-4">
								<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
								<label class="btn btn-outline-light w-100 fs-8 rounded-1" for="btnradio3">Master</label>
							</div>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">
								<i class="fas fa-qrcode"></i>
							</span>
							<input
								type="text"
								class="form-control border border-white shadow-none"
								placeholder="Login ID">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">
								<i class="fas fa-user"></i>
							</span>
							<input
								type="text"
								class="form-control border border-white shadow-none"
								placeholder="Username">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">
								<i class="fas fa-key"></i>
							</span>
							<input
								type="password"
								class="form-control border border-white shadow-none"
								placeholder="Password">
						</div>

						<div class="pt-2">
							<button
								class="btn btn-warning py-3 w-100 fs-7 fw-bold"
								onclick="window.open('/dashboard/', '_self');">
								Login
							</button>
						</div>
						<div class="py-4">
							<button
								class="btn border-0 shadow-none p-0 text-white-50 fs-8"
								data-bs-toggle="modal"
								data-bs-target="#modalForgotPassword">
								Forgot password?
							</button>
						</div>

						<div class="row g-2 justify-content-center">
							<div class="col-6 col-lg-3">
								<button class="btn btn-outline-light w-100">
									<span class="d-block fs-4">
										<i class="fas fa-bed"></i>
									</span>
									<span class="d-block fs-7">
										Hotel
									</span>
								</button>
							</div>
							<div class="col-6 col-lg-3">
								<button class="btn btn-outline-light w-100">
									<span class="d-block fs-4">
										<i class="fas fa-running"></i>
									</span>
									<span class="d-block fs-7">
										Activity
									</span>
								</button>
							</div>
							<div class="col-6 col-lg-3">
								<button class="btn btn-outline-light w-100">
									<span class="d-block fs-4">
										<i class="fas fa-ticket-alt"></i>
									</span>
									<span class="d-block fs-7">
										Ticket
									</span>
								</button>
							</div>
							<div class="col-6 col-lg-3">
								<button class="btn btn-outline-light w-100">
									<span class="d-block fs-4">
										<i class="fas fa-car-side"></i>
									</span>
									<span class="d-block fs-7">
										Car rental
									</span>
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div 
		class="modal fade"
		id="modalForgotPassword"
		data-bs-backdrop="static"
		data-bs-keyboard="false"
		tabindex="-1"
		aria-labelledby="staticBackdropLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
			<div class="modal-content">
				<div class="modal-header">
					<div
						class="fs-7 fw-bold text-dark"
						id="staticBackdropLabel">
						Retrieve Password
					</div>
					<div>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close">								
						</button>
					</div>
				</div>
				<div class="modal-body">
					<div class="pb-2">
						<span class="fs-8 text-secondary">
							Enter your Hotel ID and Username and we'll send you
							a link to reset your password via email.
						</span>
					</div>
					<div class="pb-2">
						<div class="row g-3">
							<div class="pb-2 col-12 col-lg-6">
								<div class="fs-8 text-dark fw-bold">
									Hotel ID
								</div>
								<div class="pt-1">
									<input type="text" class="form-control rounded-1 fs-7">
								</div>
							</div>
							<div class="pb-2 col-12 col-lg-6">
								<div class="fs-8 text-dark fw-bold">
									Username
								</div>
								<div class="pt-1">
									<input type="text" class="form-control rounded-1 fs-7">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn fs-8 rounded-1 btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn fs-8 rounded-1 btn-primary px-4">Submit</button>
				</div>
			</div>
		</div>
	</div>


</body>
</html>


<?php
/*
<header>
	<div class="bg-header">
		<div class="container">
			<div class="row justify-content-between">
				<div class="py-3 col-auto">
					<div class="rn-title fs-3 fw-bold text-white">
						Extranet
					</div>	
				</div>
			</div>
		</div>
	</div>
</header>
<div class="bg-white border-bottom">
	<div class="container">
		<div class="d-flex align-items-center py-2 fs-8 text-secondary">
			<i class="fas fa-lock"></i>
			<span class="ps-2">Login</span>
		</div>
	</div>
</div>
<div class="bg-light">
	<div class="container">
		
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>

	</div>
</div>
<footer>
	<div class="container py-3">
		<div class="row justify-content-between fs-8">
			<div class="col-12 col-sm-auto text-white-50">
				<span class="text-uppercase text-nowrap">Copyright © 2022.</span>
				<span class="text-uppercase">Extranet - </span>
				<span class="text-uppercase text-nowrap">All Rights Reserved.</span>
			</div>
			<div class="col-12 col-sm-auto text-white-50">
				<span class="text-uppercase">Powered by 11-Infotech System.</span>
			</div>
		</div>
	</div>
</footer>
*/
?>	
