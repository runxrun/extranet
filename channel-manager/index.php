<!DOCTYPE html>
<html>
<head>
<?php include_once('../application/includes/headset.php'); ?>
</head>
<body class="bg-dark">
<?php include_once('../application/includes/header.php'); ?>
<?php include_once('../application/includes/mainmenu.php'); ?>
<div class="bg-light">
	<div class="container-xxl">
		<div class="py-4">
      <?php include_once('includes/channel-filter.php'); ?>
		</div>
		<div class="">

      <div class="bg-primary py-3 px-3 fs-7">
        <div class="d-flex align-items-center">
          <div class="pe-2 text-white"><i class="fas fa-chart-line"></i></div>
          <div class="pe-2 text-white">
            <div class="row gx-3">
              <div class="col-auto fw-bold">RateGain</div>
              <div class="col-auto text-white-50">|</div>
              <div class="col-auto fw-bold">Thai Baht</div>
              <div class="col-auto text-white-50">|</div>
              <div class="col-auto fw-bold">Rates including hotel commission</div>
            </div>
          </div>
        </div>
      </div>

    </div>
		<div class="">
      <div class="table-responsive">
        <table class="table table-bordered table-hover fs-8 bg-white border">
          <thead>
            <tr>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Rate Date </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Hotel Name </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Room Category </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Meal Name </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Currency </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">Single </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">1Adult 2Child </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">Double</th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">2Adult 1Child </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">2Adult 2Child </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">Triple </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">3Adult 1Child </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col" style="min-width: 100px;">Quad </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Available </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Allocation </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">RG_TimeStamp </th>
              <th class="bg-light p-3 fs-9 text-dark fw-bold text-nowrap" scope="col">Update Date </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $RateGain = array(
              array('date'=>'2023-05-01','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-02','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-03','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-04','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-05','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-06','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              array('date'=>'2023-05-07','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-08','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-09','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-10','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-11','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-12','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-13','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-14','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-15','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-16','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-17','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-18','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-19','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-20','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-21','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-22','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-23','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-24','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-25','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-26','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-27','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-28','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-29','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-30','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
              // array('date'=>'2023-05-31','hotelname'=>'Sonahouse Hotel','roomcatg'=>'1 BED','meal'=>'Room and Breakfast','currency'=>'THB','single'=>2500,'1adult2child'=>0,'double'=>2500,'2adult1child'=>0,'2adult2child'=>0,'triple'=>3050,'3adult1child'=>0,'quad'=>4700,'available'=>1,'allocation'=>10,'rg_timestamp'=>'2018-12-05T12:31:29','update_date'=>'2023-02-27 14:58:01',),
            );
            foreach($RateGain as $key => $value)
            {
            ?>
            <tr>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['date']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['hotelname']; ?></td>
              <th class="py-2 px-3 text-nowrap" scope="row"><?php echo $value['roomcatg']; ?></th>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['meal']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['currency']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['single'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['1adult2child'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['double'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['2adult1child'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['2adult2child'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['triple'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['3adult1child'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo number_format($value['quad'],2); ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['available']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['allocation']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['rg_timestamp']; ?></td>
              <td class="py-2 px-3 text-nowrap"><?php echo $value['update_date']; ?></td>
            </tr>
            <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<!-- 
      <div class="pt-2">
        <div class="bg-primary">
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn w-100 border-0 rounded-0 text-start py-2 px-3 fs-7 fw-bold text-white">
                1 Bedroom /
                Room and Breakfast </button>
            </div>
            <div>
              <button class="btn w-100 border-0 rounded-0 text-start py-2 px-3 fs-7 fw-bold text-white">
                <i class="fas fa-ellipsis-h"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->


  </div>
</div>
<?php include_once('../application/includes/footer.php'); ?>
</body>
</html>