<?php 
$set_data_a = array(
	array(
		'form_name'=>'Prefix',
		'title'=>'Prefix',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Mr.'),
			array('data'=>'Ms.'),
			array('data'=>'Mrs.'),
		),
		'column'=>'col-6 col-md-4 col-lg-3 col-xl-2',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'firstName',
		'title'=>'First name',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'Thitikorn',
		'column'=>'col-12 col-lg-4',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'lastName',
		'title'=>'Last name',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'Sriruya',
		'column'=>'col-12 col-lg-4',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_b = array(
	array(
		'form_name'=>'Department',
		'title'=>'Department',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'Sales',
		'column'=>'col-12 col-md-6 col-lg-6',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Position',
		'title'=>'Position',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'Manager',
		'column'=>'col-12 col-md-6 col-lg-5 col-xl-4',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_c = array(
	array(
		'form_name'=>'telephoneNumber',
		'title'=>'Telephone number',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'mobileNumber',
		'title'=>'Mobile number',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'facsimileNumber',
		'title'=>'Facsimile number',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'mobileNumber',
		'title'=>'Email address',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'thitikorn@sonahouse.com',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_d = array(
	array(
		'form_name'=>'userName',
		'title'=>'Username',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'thitikorn',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'userActivate',
		'title'=>'User Activate',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Activate'),
			array('data'=>'Not activate'),
		),
		'column'=>'col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_e = array(
	array(
		'form_name'=>'password',
		'title'=>'Password',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'passwordConfirm',
		'title'=>'Confirm password ',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;',
		'column'=>'col-12 col-md-6 col-xl-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);
?>