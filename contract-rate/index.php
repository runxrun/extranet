<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>

<div class="bg-light">
	<div class="container">
		<div class="pt-4">
			<div class="row justify-content-between">
				<div class="pb-4 col-12 col-md-auto">
					<?php include_once('includes/contract-filter.php'); ?>
				</div>
				<div class="pb-3 col-12 col-md-auto">
					<?php include_once('includes/contract-action.php'); ?>
				</div>
			</div>	
		</div>
		<div class="pb-5">







					<style>
						.rn-overflow-h {
							overflow-y: hidden;
							overflow-x: auto;
						}
						.rn-min-width {
							min-width: 934px;
						}
						.rn-ctable {
							width: 100%;
						}
						.rn-c-tr {
							display: flex;
							flex-wrap: wrap;
							width: 100%;
							transition: all 0.3s;
						}
						.rn-c-tr:hover {
							background-color: rgba(200, 200, 200, 0.1);
						}
						.rn-c-th {
							padding: 0.5rem 0.75rem;
						}
						.rn-c-td {
							padding: 0rem;
						}
						.rn-bd-start {
							border-left: 1px solid #dee2e6;	
						}
						.rn-bd-top {
							border-top: 1px solid #dee2e6;	
						}

						.rn-ctable .meal{ width: 16%;}
						.rn-ctable .period{ width: 15%;}
						.rn-ctable .dayflag{ width: 17%;}
						.rn-ctable .minstay{ width: 7%;}
						.rn-ctable .sgl{ width: 9%;}
						.rn-ctable .twndbl{ width: 9%;}
						.rn-ctable .quad{ width: 9%;}
						.rn-ctable .xbedad{ width: 9%;}
						.rn-ctable .xbedch{ width: 9%;}
						.rn-ctable .unit{ width: 15%;}
						.rn-ctable .maxad{ width: 15%;}
						.rn-ctable .maxch{ width: 15%;}

						.rn-ctable input {
							border-radius: 0px;
							border: 1px solid #ffffff;
							background-color: #ffffff;
							font-size: 0.90rem;
							width: 100%;
							padding: 0.5550rem 0.50rem;
							color: #212529;
							outline: none;
							transition: all 0.3s;
							height: 100%;
						}
						.rn-ctable input:focus {
							border: 1px solid #86b7fe;
						}
						.rn-ctable input:disabled {
							color: #65689D;
							cursor: default;
							border: 1px solid #f7f7f7;
							background-color: #f7f7f7;
						}



					</style>





<?php 
	include_once('includes/contract-array.php');
?>






<div class="rn-overflow-h">
	<div class="rn-min-width">


		<?php 
		foreach ($contractrate as $key => $value) {
			foreach ($value['tariffset'] as $key2 => $value2) {
				foreach ($value2['market'] as $key3 => $value3) {
				?>


				<!-- LOOP -->
				<div class="border bg-white mb-3">
					<div class="bg-light">
						<button
							class="btn bg-light border-0 rounded-0 w-100 p-2"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#<?php echo 'tariff_'.$key; ?>"
							aria-expanded="false"
							aria-controls="<?php echo 'tariff_'.$key; ?>">
							<div class="d-flex fs-7 fw-bold text-dark">
								<div class="px-1"><i class="fas fa-file-alt"></i></div>
								<div class="px-2"><?php echo $value2['tariffname']; ?></div>
								<div class="ps-3 pe-1"><i class="fas fa-map-marker"></i></div>
								<div class="px-1"><?php echo $value3['marketname'] ?></div>
							</div>
						</button>
					</div>



					<?php 
					foreach ($value3['roomcategory'] as $key4 => $value4) {
						foreach ($value4['ratestatus'] as $key5 => $value5) {
	 					?>

						<div class="collapse show" id="<?php echo 'tariff_'.$key; ?>">
							<button
								class="btn border-0 shadow-none rounded-0 p-0 bg-white w-100"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#<?php echo 'roomcatg_'.$key4.'_'.$key5; ?>"
								aria-expanded="false"
								aria-controls="<?php echo 'roomcatg_'.$key4.'_'.$key5; ?>">
								<div class="d-flex fs-7 p-2 border-top">
									<div class="text-dark px-1">
										<i class="fas fa-bed"></i>
									</div>
									<div class="text-dark px-1 fw-bold">
										<?php echo $value4['roomcatgname']; ?>
										-
										<?php echo $value5['status']; ?>
									</div>
								</div>
							</button>
							<div class="collapse show" id="<?php echo 'roomcatg_'.$key4.'_'.$key5; ?>">

								<div class=" show d-flex fs-7 border-top">


									<div class="rn-ctable">
										<div class="rn-c-tr fs-9 text-secondary">
											<div class="rn-c-th meal">
												Meal name
											</div>
											<div class="rn-c-th rn-bd-start period">
												Period
											</div>
											<div class="rn-c-th rn-bd-start dayflag">
												Day flag
											</div>
											<div class="rn-c-th rn-bd-start minstay text-center text-truncate">
												Min stay
											</div>
											<div class="rn-c-th rn-bd-start sgl text-center text-truncate">
												Single
											</div>
											<div class="rn-c-th rn-bd-start twndbl text-center text-truncate">
												Twin/Double
											</div>
											<div class="rn-c-th rn-bd-start quad text-center text-truncate">
												Quad
											</div>
											<div class="rn-c-th rn-bd-start xbedad text-center text-truncate">
												Extra bed adult
											</div>
											<div class="rn-c-th rn-bd-start xbedch text-center text-truncate">
												Extra bed child
											</div>
											<?php if($minstay == 'Y') { ?>
												<div class="rn-c-th rn-bd-start xbedch unit text-center text-truncate">
													Unit
												</div>
												<div class="rn-c-th rn-bd-start xbedch maxad text-center text-truncate">
													Max adult
												</div>
												<div class="rn-c-th rn-bd-start xbedch maxch text-center text-truncate">
													Max child
												</div>
											<?php } ?>
										</div>
										<?php
										foreach ($value5['mealtype'] as $key6 => $value6) {
											foreach ($value6['minstay'] as $key7 => $value7) {
												foreach ($value7['period'] as $key8 => $value8) {
													foreach ($value8['dayflag'] as $key9 => $value9) {
													?>
													<div class="rn-c-tr fs-9 text-secondary rn-bd-top">
														<div class="rn-c-td meal">
															<div class="px-2 py-2">
																<?php echo $value6['mealname']; ?>
															</div>
														</div>
														<div class="rn-c-td rn-bd-start period">

															<div class="px-2 py-2">
																<span class="text-nowrap"><?php echo $value8['fromdate']; ?></span> to
																<span class="text-nowrap"><?php echo $value8['todate']; ?></span>
															</div>

														</div>
														<div class="rn-c-td rn-bd-start dayflag">
															<div class="px-2">
																<div class="row g-2 py-2">
																<?php
																foreach ($value9['dayflagactive'] as $keyDay => $day)
																{
																	//print_r($day);
																	
																	$dayflagname = '';
																	switch ($day) {
																		case '1': $day = 'Sun'; break;
																		case '2': $day = 'Mon'; break;
																		case '3': $day = 'Tue'; break;
																		case '4': $day = 'Wed'; break;
																		case '5': $day = 'Thu'; break;
																		case '6': $day = 'Fri'; break;
																		case '7': $day = 'Sat'; break;
																	}
																	$dayflagname .= $day;
																	echo '<div class="col-auto"><small>'.strtoupper($dayflagname).'</small></div>';
																}	
																?>
																</div>
															</div>
														</div>
														<div class="rn-c-td rn-bd-start minstay text-truncate">
															<input type="text" value="<?php echo $value7['minstayrate']; ?>" class="text-center" disabled>
														</div>
														<div class="rn-c-td rn-bd-start sgl text-truncate">
															<input type="text" value="<?php echo number_format($value9['sgl'],0); ?>" class="text-end">
														</div>
														<div class="rn-c-td rn-bd-start twndbl text-truncate">
															<input type="text" value="<?php echo number_format($value9['twndbl'],0); ?>" class="text-end">
														</div>
														<div class="rn-c-td rn-bd-start quad text-truncate">
															<input type="text" value="<?php echo number_format($value9['quad'],0); ?>" class="text-end">
														</div>
														<div class="rn-c-td rn-bd-start xbedad text-truncate">
															<input type="text" value="<?php echo number_format($value9['xbedad'],0); ?>" class="text-end">
														</div>
														<div class="rn-c-td rn-bd-start xbedch text-truncate">
															<input type="text" value="<?php echo number_format($value9['xbedch'],0); ?>" class="text-end">
														</div>
													</div>
													<?php
													}
												}
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>

						<?php
						}
					}
					?>

				</div>
				<!-- LOOPEND -->
				<?php
				}
			}
		}
		?>

	</div>
</div>






<!-- 

				<div class="d-flex fs-7 fw-bold text-dark">
					<div class="px-1"><i class="fas fa-file-alt"></i></div>
					<div class="px-1">Master Hotel 2023-2024</div>
				</div>


				<div class="d-flex fs-7 fw-bold text-dark">
					<div class="px-1"><i class="fas fa-map-marker"></i></div>
					<div class="px-1">All market</div>
				</div>


				<div class="d-flex fs-7 p-2">
					<div class="text-dark px-1">
						<i class="fas fa-bed"></i>
					</div>
					<div class="text-dark px-1 fw-bold">
						Standard - Available
					</div>
				</div>
			

 -->

			<br>
			<br>
			<br>
			<br>

			<?php 

			include_once('includes/contract-array-2.php');

			foreach ($contractrate as $key => $value) {
				foreach ($value['tariffset'] as $key2 => $value2) {
					foreach ($value2['market'] as $key3 => $value3) {
						?>

						<div class="bg-white border mb-3 d-none">
							<div class="bg-light border-bottom p-2">
								<div class="row">
									<div class="col-auto">
										<div class="d-flex fs-7 fw-bold text-dark">
											<div class="px-1"><i class="fas fa-file-alt"></i></div>
											<div class="px-1"><?php echo $value2['tariffname']; ?></div>
										</div>
									</div>
									<div class="col-auto">
										<div class="d-flex fs-7 fw-bold text-dark">
											<div class="px-1"><i class="fas fa-map-marker"></i></div>
											<div class="px-1"><?php echo $value3['marketname'] ?></div>
										</div>
									</div>
								</div>
							</div>


							<?php 
							foreach ($value3['roomcategory'] as $key4 => $value4) {
								foreach ($value4['ratestatus'] as $key5 => $value5) {
									?>
									<div class="d-flex fs-7 p-2 border-bottom">
										<div class="text-dark px-1">
											<i class="fas fa-bed"></i>
										</div>
										<div class="text-dark px-1 fw-bold">
											<?php echo $value4['roomcatgname'].' - '.$value5['status']; ?>
										</div>
									</div>
									<?php

									foreach ($value5['mealtype'] as $key6 => $value6) {
										foreach ($value6['period'] as $key7 => $value7) {
											?>
											<div class="border-bottom fs-7">
											<div class="row">
												<div class="col-2">
													Meal name
												</div>
												<div class="col-2">
													Period
												</div>
												<div class="col-2">
													Day flag
												</div>
												<div class="col-6">

													<div class="row g-0">
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																Min stay
															</div>
														</div>
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																SGL
															</div>
														</div>
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																Twin / Double
															</div>
														</div>
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																Quad
															</div>
														</div>
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																xBed adult
															</div>
														</div>
														<div class="col-2">
															<div class="fs-7 text-nowrap text-truncate">
																xBed child
															</div>
														</div>
													</div>

												</div>
											</div>
											<?php
											foreach ($value7['dayflag'] as $key8 => $value8) {
												?>


												<div class="row">
													<div class="col-2">
														<?php echo $value6['mealname'];?>
													</div>
													<div class="col-2">
														<?php echo $value7['fromdate'];?>
														to
														<?php echo $value7['todate'];?>
													</div>
													<div class="col-2">
														<?php
														foreach ($value8['dayflagactive'] as $keyDay => $day)
														{
															$dayflagname = '';
															switch ($day) {
																case '1': $day = 'Sun'; break;
																case '2': $day = 'Mon'; break;
																case '3': $day = 'Tue'; break;
																case '4': $day = 'Wed'; break;
																case '5': $day = 'Thu'; break;
																case '6': $day = 'Fri'; break;
																case '7': $day = 'Sat'; break;
															}
															$dayflagname .= $day;
															echo '<span class="pe-2">'.strtoupper($dayflagname).'</span>';
														}	
														?>
													</div>
													<div class="col-6">


														<?php
														foreach ($value8['minstay'] as $key9 => $value9) {
														?>
														<div class="row g-0">
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['rateminstay']; ?>"
																	disabled>
															</div>
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['sgl']; ?>">
															</div>
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['twndbl']; ?>">
															</div>
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['quad']; ?>">
															</div>
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['xbedad']; ?>">
															</div>
															<div class="col-2">
																<input
																	type="text"
																	class="form-control rounded-0 fs-7 text-center shadow-none"
																	value="<?php echo $value9['xbedch']; ?>">
															</div>
														</div>


						
														<?php
														}
														?>
													</div>
												</div>
											<?php
											}
											?>
											</div>
										<?php
										}
									}
								}
							}
						?>
					</div>
					<?php
					}
				}
			}

			/*
			'market' => array (
						array(
							'market_name'=>'All market',
						),
					),
					*/
			?>

	


			<?php 
			//include_once('includes/contract-empty.php');
			?>
		</div>
	</div>
</div>
<?php 
include_once('../application/includes/footer.php'); 
include_once('../application/includes/modals.php');
include_once('../application/includes/modals/generate-contract-rates.php');
?>
</body>
</html>
