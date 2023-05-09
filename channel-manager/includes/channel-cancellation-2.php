

<div class="py-4">
  <div class="bg-primary py-3 px-3 fs-7">
    <div class="d-flex align-items-center">
      <div class="pe-2 text-white"><i class="fas fa-exclamation-circle"></i></div>
      <div class="pe-2 text-white">
        <div class="row gx-3">
          <div class="col-auto fw-bold">Cancellation Policy</div>
        </div>
      </div>
    </div>
  </div>

  <div class="border-start border-end border-bottom bg-white p-4">
    <div class="row g-3 justify-content-between align-items-end">
      <div class="col-12 col-sm-8 col-lg-10 order-2 order-sm-1">
        <div class="row g-3">
          <div class="col-12 col-sm-10 col-md-6 col-lg-4">
            <div class="pb-1 fs-8 text-secondary">
              Room Category
            </div>
            <div>
              <select class="form-select fs-7 rounded-0">
                <option value="" selected>All rooms</option>
                <option value="">1 BED</option>
                <option value="">2 BED</option>
                <option value="">Studio</option>
                <option value="">Villa Suite</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-auto">
            <div class="pb-1 fs-8 text-secondary d-none d-sm-block">
              &nbsp;
            </div>
            <div>
              <button class="btn btn-primary rounded-0 fs-8 w-100">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-lg-2 order-1 order-sm-2">
        <button class="btn btn-success rounded-0 py-2 fs-8 text-white w-100" data-bs-toggle="modal"
          data-bs-target="#addeditCancelModal">
          <span class="pe-2"><i class="fas fa-plus-circle"></i></span>
          <span class="pe-2">Add cancellation</span>
        </button>
      </div>
    </div>
  </div>
</div>





<?php

$cm_cancel = array(
  array(
    'roomcatg' => '1 BED',
    'period'=> array(
      array(
        'fromdate'=>'1 Feb 2023',
        'todate'=>'15 May 2023',
        'season'=>'Low season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'16 May 2023',
        'todate'=>'31 Oct 2023',
        'season'=>'High season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'30%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'60%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'01 Nov 2023',
        'todate'=>'31 Jan 2024',
        'season'=>'Peak season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'35%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'70%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
    ),
  ),
  array(
    'roomcatg' => '2 BED',
    'period'=> array(
      array(
        'fromdate'=>'1 Feb 2023',
        'todate'=>'15 May 2023',
        'season'=>'Low season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'16 May 2023',
        'todate'=>'31 Oct 2023',
        'season'=>'High season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'01 Nov 2023',
        'todate'=>'31 Jan 2024',
        'season'=>'Peak season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
    ),
  ),
  array(
    'roomcatg' => 'Studio',
    'period'=> array(
      array(
        'fromdate'=>'1 Feb 2023',
        'todate'=>'15 May 2023',
        'season'=>'Low season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'16 May 2023',
        'todate'=>'31 Oct 2023',
        'season'=>'High season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'01 Nov 2023',
        'todate'=>'31 Jan 2024',
        'season'=>'Peak season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
    ),
  ),
  array(
    'roomcatg' => 'Villa Suite',
    'period'=> array(
      array(
        'fromdate'=>'1 Feb 2023',
        'todate'=>'15 May 2023',
        'season'=>'Low season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'16 May 2023',
        'todate'=>'31 Oct 2023',
        'season'=>'High season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
      array(
        'fromdate'=>'01 Nov 2023',
        'todate'=>'31 Jan 2024',
        'season'=>'Peak season',
        'cancellist'=>array(
          array(
            'cancelday'=>14,
            'chargetype'=>'Percent',
            'chargerate'=>'20%',
          ),
          array(
            'cancelday'=>7,
            'chargetype'=>'Percent',
            'chargerate'=>'50%',
          ),
          array(
            'cancelday'=>2,
            'chargetype'=>'Percent',
            'chargerate'=>'90%',
          ),
        ),
      ),
    ),
  ),
);

?>




<div class="pb-4">
  <div class="table-responsive">
    <table class="table table-bordered bg-white fs-7">
      <?php
      foreach($cm_cancel as $key => $value)
      {
      ?>
      <thead>
        <?php
        if($key>0)
        {
        ?>
        <tr>
          <td colspan="6" class="bg-light"></td>
        </tr>
        <?php
        }
        ?>
        <tr>
          <th class="bg-white p-0" colspan="6">
            <div class="d-flex fs-7 fw-bold text-dark border-top border-2 border-primary p-3">
              <div class="px-1"><i class="fas fa-bed"></i></div>
              <div class="px-1"><?php echo $value['roomcatg']; ?></div>
            </div>
          </th>
        </tr>
        <tr class="table-light">
          <th width="300">Period</th>
          <th>Cancel Day</th>
          <th>Charge Type</th>
          <th>Charge Rate</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($value['period'] as $key2 => $value2)
        {

          $chkRowspan = '';
          foreach($value2['cancellist'] as $key3 => $value3)
          {
          
            $chkRowspan = count($value2['cancellist']);
          ?>
          <tr>
            <?php
            if($key3==0)
            {
            ?>
            <td class="p-3" rowspan="<?php echo $chkRowspan; ?>">
              <div class="fs-7 fw-bold text-dark"><?php echo $value2['fromdate'].' to '.$value2['todate']; ?></div>
              <div class="fs-8 text-secondary"><?php echo  $value2['season']; ?></div>
            </td>
            <?php
            }
            ?>

            <td><div class="fs-7 text-secondary"><?php echo $value3['cancelday']; ?></div></td>
            <td><div class="fs-7 text-secondary"><?php echo $value3['chargetype'];; ?></div></td>
            <td><div class="fs-7 text-secondary"><?php echo $value3['chargerate'];; ?></div></td>
            <td class="p-0">
              <button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
                data-bs-toggle="modal"
                data-bs-target="#addeditCancelModal">
                <span class="fs-8">
                  <i class="fas fa-search"></i>
                </span>
              </button>
            </td>
            <td class="p-0">
              <button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal"
                data-bs-target="#deleteCancelModal">
                <span class="fs-8">
                  <i class="fas fa-trash"></i>
                </span>
              </button>
            </td>
          </tr>

          <?php
          }
        }
        ?>
      </tbody>
      <?php
      }
      ?>
    </table>
  </div>
</div>

<?php 
include('modals/cancellation-addedit.php');
include('modals/cancellation-delete.php');
?>
