
<?php
$freepromo = array(
  array(
    'roomcatg'=>'All Room Categories',
    'promolist'=>array(
      array(
        'topic'=>'Cocktail Free',
        'freepromo'=>'Free Cocktail 1 set',
        'startdate'=>'14-May-2023',
        'enddate'=>'31-May-2023',
      ),
      array(
        'topic'=>'Free Massage for 1 Person',
        'freepromo'=>'Free Massage 1.30 Hrs.',
        'startdate'=>'14-May-2023',
        'enddate'=>'31-May-2023',
      ),
    ),
  ),
  array(
    'roomcatg'=>'2 BED',
    'promolist'=>array(
      array(
        'topic'=>'Cocktail Free',
        'freepromo'=>'Free Cocktail 2 set',
        'startdate'=>'14-May-2023',
        'enddate'=>'31-May-2023',
      ),
      array(
        'topic'=>'Free Massage for 2 Persons',
        'freepromo'=>'Free Massage 1.30 Hrs.',
        'startdate'=>'14-May-2023',
        'enddate'=>'31-May-2023',
      ),
    ),
  ),
  array(
    'roomcatg'=>'Studio',
    'promolist'=>array(
      array(
        'topic'=>'Cocktail Free & 10% Discount',
        'freepromo'=>'Free Cocktail 1 set & discount 20% (only food)',
        'startdate'=>'14-May-2023',
        'enddate'=>'31-May-2023',
      ),
    ),
  ),
);
?>
<div class="table-responsive">
  <table class="table table-bordered bg-white fs-7">
    <?php
    foreach($freepromo as $key => $value)
    {
    ?>
    <thead>
      <?php
      if($key>0)
      {
      ?>
      <tr>
        <th colspan="6" class="bg-light p-0" style="border: 0px; border-left: 1px solid #f2f3f4; border-right: 1px solid #f2f3f4;">
          <div style="background-color: #f2f3f4; height: 24px;"></div>
        </th>
      </tr>
      <?php
      }
      ?>
      <tr>
        <th class="bg-white p-0" colspan="9">
          <div class="d-flex fs-7 fw-bold text-dark border-top border-2 border-primary p-2">
            <div class="px-1"><i class="fas fa-bed"></i></div>
            <div class="px-1"><?php echo $value['roomcatg']; ?></div>
          </div>
        </th>
      </tr>
      <tr>
        <th scope="col" class="text-nowrap">Free Promotion</th>
        <th scope="col" class="text-nowrap">Topic</th>
        <th scope="col" class="text-nowrap">From Date</th>
        <th scope="col" class="text-nowrap">To Date</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($value['promolist'] as $key2 => $item)
      {
      ?>            
      <tr class="text-secondary">
        <td class="text-nowrap"><?php echo $item['topic']; ?></td>
        <td class="text-nowrap"><?php echo $item['freepromo']; ?></td>
        <td class="text-nowrap"><?php echo $item['startdate']; ?></td>
        <td class="text-nowrap"><?php echo $item['enddate']; ?></td>
        <td class="p-0">
          <button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
            onclick="window.open('/channel-manager-free-promotion/?page=add-promotion','_self');">
            <span class="fs-8">
              <i class="fas fa-search"></i>
            </span>
          </button>
        </td>
        <td class="p-0">
          <button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal"
            data-bs-target="#deleteModal">
            <span class="fs-8">
              <i class="fas fa-trash"></i>
            </span>
          </button>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
    <?php
    }
    ?>
  </table>
</div>



<div 
	class="modal fade"
	id="deleteModal"
	tabindex="-1"
	aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Delete promotion</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="fs-6 text-secondary">
            		Can you confirm that you wish to delete this promotion?
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>