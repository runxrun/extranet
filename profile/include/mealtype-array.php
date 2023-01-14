<?php 
$set_data_a = array(
	array(
		'form_name'=>'mealTypeName',
		'title'=>'Meal type name',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'mealTypeName',
		'title'=>'Meal type code',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-6 col-md-4 col-xl-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'mealTypeActive',
		'title'=>'Activate',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Not activate'),
			array('data'=>'Activated'),
		),
		'column'=>'col-6 col-md-4 col-xl-2',
		'readonly'=>'',
		'disabled'=>'',
	),
);

?>
