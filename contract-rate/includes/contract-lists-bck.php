

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