<?php 
$set_data_a = array(
	array(
		'form_name'=>'roomCategoryName',
		'title'=>'Room category name',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select room category'),
			array('data'=>'1 BED'),
			array('data'=>'2 BED'),
			array('data'=>'Studio'),
		),
		'column'=>'col-12 col-md-6 col-lg-6',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_b = array(
	array(
		'form_name'=>'singlePrice',
		'title'=>'Single price',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'0.00',
		'column'=>'col-6 col-md-3 col-lg-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'doubleTwinPrice',
		'title'=>'Double/Twin price',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'0.00',
		'column'=>'col-6 col-md-3 col-lg-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'ExtraBedPrice',
		'title'=>'Extra bed price',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'0.00',
		'column'=>'col-6 col-md-3 col-lg-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'QuadPrice',
		'title'=>'Quad price',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'0.00',
		'column'=>'col-6 col-md-3 col-lg-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'UnitPrice',
		'title'=>'Unit price',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'0.00',
		'column'=>'col-6 col-md-3 col-lg-2',
		'readonly'=>'',
		'disabled'=>'',
	),
);


?>