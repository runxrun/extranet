

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
											<?php 
											if ($value4['roomunit']=="N") {
											?>
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
											<?php 
											}
											else
											{
											?>
												<div class="rn-c-th rn-bd-start xbedch unit text-center text-truncate">
													Unit
												</div>
												<div class="rn-c-th rn-bd-start xbedch maxad text-center text-truncate">
													Max adult
												</div>
												<div class="rn-c-th rn-bd-start xbedch maxch text-center text-truncate">
													Max child
												</div>
											<?php 
											} 
											?>
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
															<input
																type="text"
																value="<?php echo $value7['minstayrate']; ?>"
																class="text-center"
																disabled>
														</div>
														<?php 
														if ($value4['roomunit']=="N") {
														?>
														<div class="rn-c-td rn-bd-start sgl text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['sgl'],0); ?>"
																class="text-primary text-end">
														</div>
														<div class="rn-c-td rn-bd-start twndbl text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['twndbl'],0); ?>"
																class="text-primary text-end">
														</div>
														<div class="rn-c-td rn-bd-start quad text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['quad'],0); ?>"
																class="text-primary text-end">
														</div>
														<div class="rn-c-td rn-bd-start xbedad text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['xbedad'],0); ?>"
																class="text-primary text-end">
														</div>
														<div class="rn-c-td rn-bd-start xbedch text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['xbedch'],0); ?>"
																class="text-primary text-end">
														</div>														
														<?php
														}
														else
														{
														?>
														<div class="rn-c-td rn-bd-start unit text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['unitrate'],0); ?>"
																class="text-primary text-end">
														</div>	
														<div class="rn-c-td rn-bd-start maxad text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['maxadult'],0); ?>"
																class="text-primary text-end">
														</div>	
														<div class="rn-c-td rn-bd-start maxch text-truncate">
															<input
																type="text"
																value="<?php echo number_format($value9['maxchild'],0); ?>"
																class="text-primary text-end">
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





























