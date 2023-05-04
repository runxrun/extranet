<?php
$cancellation = array(
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-May-2023',
    'todate'=>'31-Oct-2023',
    'cancelday'=>'14',
    'chargetype'=>'Percent',
    'chargedate'=>'20%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-May-2023',
    'todate'=>'31-Oct-2023',
    'cancelday'=>'7',
    'chargetype'=>'Percent',
    'chargedate'=>'50%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-May-2023',
    'todate'=>'31-Oct-2023',
    'cancelday'=>'2',
    'chargetype'=>'Percent',
    'chargedate'=>'100%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Nov-2023',
    'todate'=>'31-Mar-2024',
    'cancelday'=>'14',
    'chargetype'=>'Percent',
    'chargedate'=>'30%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Nov-2023',
    'todate'=>'31-Mar-2024',
    'cancelday'=>'7',
    'chargetype'=>'Percent',
    'chargedate'=>'50%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Nov-2023',
    'todate'=>'31-Mar-2024',
    'cancelday'=>'2',
    'chargetype'=>'Percent',
    'chargedate'=>'100%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Apr-2024',
    'todate'=>'30-Apr-2024',
    'cancelday'=>'14',
    'chargetype'=>'Percent',
    'chargedate'=>'20%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Apr-2024',
    'todate'=>'30-Apr-2024',
    'cancelday'=>'7',
    'chargetype'=>'Percent',
    'chargedate'=>'50%',
  ),
  array(
    'roomcategory'=>'1 BED',
    'fromdate'=>'1-Apr-2024',
    'todate'=>'30-Apr-2024',
    'cancelday'=>'2',
    'chargetype'=>'Percent',
    'chargedate'=>'100%',
  ),
);
?>

<div class="px-1 py-4" style="min-height: 400px;">
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
                <option value="">All rooms</option>
                <option value="" selected="">1 BED</option>
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
          data-bs-target="#addCancelModal">
          <span class="pe-2"><i class="fas fa-plus-circle"></i></span>
          <span class="pe-2">Add cancellation</span>
        </button>
      </div>
    </div>
  </div>

  <div class="table-responsive fs-8 border-top border-2 border-primary">
    <table class="table table-bordered table-hover">
      <thead>
        <tr class="bg-white text-dark">
          <th scope="col" class="text-center text-dark">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal"
              data-bs-target="#addCancelModal">
          </th>
          <th scope="col" class="text-nowrap">Room category</th>
          <th scope="col" class="text-nowrap">From date</th>
          <th scope="col" class="text-nowrap">To date</th>
          <th scope="col" class="text-nowrap">Cancel day</th>
          <th scope="col" class="text-nowrap">Charge type</th>
          <th scope="col" class="text-nowrap">Charge Rate</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($cancellation as $key => $value)
        {
        ?>
        <tr class="bg-white text-secondary">
          <th scope="row" class="text-center text-dark">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          </th>
          <td class="text-nowrap">
            <?php echo $value['roomcategory']; ?>
          </td>
          <td class="text-nowrap">
            <?php echo $value['fromdate']; ?>
          </td>
          <td class="text-nowrap">
            <?php echo $value['todate']; ?>
          </td>
          <td class="text-nowrap">
            <?php echo $value['cancelday']; ?>
          </td>
          <td class="text-nowrap">
            <?php echo $value['chargetype']; ?>
          </td>
          <td class="text-nowrap">
            <?php echo $value['chargedate']; ?>
          </td>
          <td class="p-0">
            <button class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal"
              data-bs-target="#addCancelModal">
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
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteCancelModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="fs-6 fw-bold text-dark">Delete cancellation</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="fs-7 fw-bold text-dark">
          1 BED
        </div>
        <div class="fs-7 text-secondary">
          1-May-2023 to 31-Oct-2023
        </div>
        <div class="fs-7 text-secondary">
          Cancel 14 day will be Charge 20%
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addCancelModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="fs-6 fw-bold text-dark">Add cancellation</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="row g-3">
          <div class="col-12 col-lg-6">
            <div class="pb-1 fs-8 text-secondary">
              Room category
            </div>
            <div>
              <select class="form-select fs-7 rounded-0">
                <option value="">All rooms</option>
                <option value="" selected="">1 BED</option>
                <option value="">2 BED</option>
                <option value="">Studio</option>
                <option value="">Villa Suite</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              From date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-8" placeholder="1-May-2023">
              <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              To date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-8" placeholder="31-Oct-2023">
              <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Cancel day
            </div>
            <div>
              <input type="number" class="form-control rounded-0 fs-8" value="14">
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Charge type
            </div>
            <div>
              <select class="form-select fs-7 rounded-0">
                <option value="">Amount</option>
                <option value="" selected>Percent</option>
                <option value="">Room night</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Charge Rate
            </div>
            <div>
              <div class="input-group">
                <input type="text" class="form-control rounded-0 fs-8" value="20">
                <span class="input-group-text rounded-0 fs-8">%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success fs-8 rounded-0 px-4">Save</button>
      </div>
    </div>
  </div>
</div>