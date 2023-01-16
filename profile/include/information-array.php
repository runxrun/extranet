<?php 
$set_data_a = array(
	array(
		'form_name'=>'hotelName',
		'title'=>'Hotel name',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'Sonahouse Hotel',
		'column'=>'col-12 col-lg-6',
		'readonly'=>'',
		'disabled'=>'Y',
	),
	array(
		'form_name'=>'hotelChain',
		'title'=>'Hotel chain',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'No chain'),
			array('data'=>'Accor'),
			array('data'=>'Amari'),
			array('data'=>'Best Western'),
			array('data'=>'Blue Tree'),
			array('data'=>'Hilton'),
		),
		'column'=>'col-12 col-lg-6',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'hotelStyle',
		'title'=>'Hotel style',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select style'),
			array('data'=>'Airport Hotel'),
			array('data'=>'Beach Resort'),
			array('data'=>'Boutique'),
			array('data'=>'Classic'),
			array('data'=>'Golf course'),
			array('data'=>'Home stay'),
			array('data'=>'Hotel and Residence'),
			array('data'=>'Hostel'),
			array('data'=>'Resort'),
			array('data'=>'Riverside'),
			array('data'=>'Villa'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Currency',
		'title'=>'Currency',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select currency'),
			array('data'=>'USD - US Dollar'),
			array('data'=>'JPY - Japanese Yen'),
			array('data'=>'WON - Korean Won'),
			array('data'=>'THB - Thai Baht'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'hotelCode',
		'title'=>'Hotel code',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'NNT000057',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'Y',
	),
	array(
		'form_name'=>'xmlCode',
		'title'=>'Web Service XML code',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'WSASTHNNT000057',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'Y',
	),
	array(
		'form_name'=>'totalRoom',
		'title'=>'Total rooms',
		'mandatory'=>'Y',
		'input_type'=>'number',
		'input_value'=>'1',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'starRating',
		'title'=>'Star rating',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'★'),
			array('data'=>'★★'),
			array('data'=>'★★★'),
			array('data'=>'★★★★'),
			array('data'=>'★★★★★'),
			array('data'=>'★☆ (1.5)'),
			array('data'=>'★★☆ (2.5)'),
			array('data'=>'★★★☆ (3.5)'),
			array('data'=>'★★★★☆ (4.5)'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'hotel_hashtag',
		'title'=>'Sha Plus',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Not specify'),
			array('data'=>'SHA'),
			array('data'=>'SHA Plus'),
			array('data'=>'SHA Extra Plus'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_b = array(
	array(
		'form_name'=>'email',
		'title'=>'Email',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'sonahouse@gmail.com',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'telNo',
		'title'=>'Telephone number',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'054 771 254',		
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'webSite',
		'title'=>'Website',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'https://www.facebook.com/SonahouseHotel/',	
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_c = array(
	array(
		'form_name'=>'commissionType',
		'title'=>'Commission type',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'Amount'),
			array('data'=>'Percent'),
			array('data'=>'None'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'commissionValue',
		'title'=>'Commission value',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'0',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'commissionSpecial',
		'title'=>'Special',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'Amount'),
			array('data'=>'Percent'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),

);

$set_data_d = array(
	array(
		'form_name'=>'Country',
		'title'=>'Country',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Thailand'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'Y',
	),
	array(
		'form_name'=>'City',
		'title'=>'City',
		'mandatory'=>'Y',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Nan'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'Y',
	),
	array(
		'form_name'=>'locationName',
		'title'=>'Location',
		'mandatory'=>'',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'typeLocation',
		'title'=>'Type of location',
		'mandatory'=>'',
		'input_type'=>'select',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'Airport'),
			array('data'=>'City'),
			array('data'=>'Mountain'),
			array('data'=>'Riverside'),
			array('data'=>'Rice field'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'stateName',
		'title'=>'State',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'zipCode',
		'title'=>'Zip code / Postal code',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'55000',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Address1',
		'title'=>'Address 1',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'25/1 Moo 3, Bansuanhom, T. Phasing, A. Muang',
		'column'=>'col-12 col-lg-6',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Address2',
		'title'=>'Address 2',
		'mandatory'=>'',
		'input_type'=>'text',
		'input_value'=>'',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Latitude',
		'title'=>'Latitude',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'18.782065',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'Longitude',
		'title'=>'Longitude',
		'mandatory'=>'Y',
		'input_type'=>'text',
		'input_value'=>'100.766505',
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);

$set_data_e = array(
	array(
		'form_name'=>'minimumChildage',
		'title'=>'Minimum child age',
		'input_type'=>'number',
		'input_value'=>'3',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'Amount'),
			array('data'=>'Percent'),
			array('data'=>'None'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
	array(
		'form_name'=>'maximumChildage',
		'title'=>'Maximum child age',
		'input_type'=>'number',
		'input_value'=>'10',
		'selection'=>array(
			array('data'=>'Select'),
			array('data'=>'Amount'),
			array('data'=>'Percent'),
			array('data'=>'None'),
		),
		'column'=>'col-12 col-md-6 col-lg-3',
		'readonly'=>'',
		'disabled'=>'',
	),
);
?>
