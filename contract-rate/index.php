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



			<?php 
			$contractrate = array(
				array(
					'tariffset' => array(
						array(
							'tariffname' => 'Master Hotel 2023-2024',
							'market' => array(
								array(
									'marketname' => 'All market',
									'roomcategory' => array(
										array(
											'roomcatgname' => 'Standard',
											'ratestatus' => array(
												array(
													'status' => 'Available',
													'period' => array(
														array(
															'fromdate' => '01 Apr 2023',
															'todate' => '31 Mar 2024',
															'dayflag' => array(
																array(
																	'dayflagactive'=> array('2','3','4','5','6',),
																	'minstay'=>array(
																		array(
																			'rateminstay'=>'0',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																		array(
																			'rateminstay'=>'2',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																	),
																),
																array(
																	'dayflagactive'=> array('1','7',),
																	'minstay'=>array(
																		array(
																			'rateminstay'=>'0',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																		array(
																			'rateminstay'=>'2',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																	),
																),
															),
														),
													),
												),
												array(
													'status' => 'On request',
													'period' => array(
														array(
															'fromdate' => '01 Apr 2023',
															'todate' => '31 Mar 2024',
															'dayflag' => array(
																array(
																	'dayflagactive'=> array('2','3','4','5','6',),
																	'minstay'=>array(
																		array(
																			'rateminstay'=>'0',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																		array(
																			'rateminstay'=>'2',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																	),
																),
																array(
																	'dayflagactive'=> array('1','7',),
																	'minstay'=>array(
																		array(
																			'rateminstay'=>'0',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																		array(
																			'rateminstay'=>'2',
																			'sgl'=>'0.00',
																			'twndbl'=>'0.00',
																			'quad'=>'0.00',
																			'xbedad'=>'0.00',
																			'xbedch'=>'0.00',
																		),
																	),
																),
															),
														),
													),
												),
		




											),
										),
									),
								),
							),
						),
					),					
				),
			);

			foreach ($contractrate as $key => $value) {
				foreach ($value['tariffset'] as $key2 => $value2) {
					foreach ($value2['market'] as $key3 => $value3) {


						echo '<br>'.$value2['tariffname'];
						echo '<br>'.$value3['marketname'];


						foreach ($value3['roomcategory'] as $key4 => $value4) {
							foreach ($value4['ratestatus'] as $key5 => $value5) {


								echo '<hr>'.$value4['roomcatgname'].' - '.$value5['status'];

								foreach ($value5['period'] as $key6 => $value6) {
									foreach ($value6['dayflag'] as $key7 => $value7) {

										echo '<br>'.$value6['fromdate'].' to '.$value6['todate'].'<br>';

										foreach ($value7['dayflagactive'] as $keyDay => $day)
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

									}
								}

							}
						}



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

			<br>
			<br>
			<br>
			<br>

			<?php 
			// foreach ($contractrate as $key => $value)
			// {
			// 	foreach ($value['market'] as $key => $value)
			// 	{
			// 		// code...
			// 	} 
			// } 
			?>
			<div class="bg-white border mb-3">
				<div class="bg-light border-bottom">
					<div class="p-2">
						<div class="row">
							<div class="col-auto">
								<div class="d-flex fs-7 fw-bold text-dark">
									<div class="px-1"><i class="fas fa-file-alt"></i></div>
									<div class="px-1">Master Hotel 2023-2024</div>
								</div>
							</div>
							<div class="col-auto">
								<div class="d-flex fs-7 fw-bold text-dark">
									<div class="px-1"><i class="fas fa-map-marker"></i></div>
									<div class="px-1">All Market</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="d-flex fs-7 p-2">
						<div class="text-dark px-1">
							<i class="fas fa-bed"></i>
						</div>
						<div class="text-dark px-1 fw-bold">
							Standard
						</div>
					</div>
				</div>				
			</div>


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
