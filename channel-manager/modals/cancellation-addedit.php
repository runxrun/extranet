
<!-- Modal -->
<div class="modal fade" id="addeditCancelModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="fs-6 fw-bold text-dark">Add/Edit cancellation</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-12 col-lg-6">
            <div class="pb-1 fs-8 text-secondary">
              Season name
            </div>
            <div>
              <select name="" id="" class="form-select rounded-0 fs-7">
                <option value="">Select season</option>
                <option value="">Peak season</option>
                <option value="">High season</option>
                <option value="">Low season</option>
              </select>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              From date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-8" placeholder="1-May-2023">
              <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              To date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-8" placeholder="31-Oct-2023">
              <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Cancel Day
            </div>
            <div>
              <input type="number" class="form-control rounded-0 fs-8" value="14">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Charge type
            </div>
            <div>
              <select id="cboChargeType" class="form-select rounded-0 fs-7" onchange="ChargeType();">
                <option value="0">Select</option>
                <option value="1">Amount</option>
                <option value="2" selected>Percent</option>
                <option value="3">Room/Night</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="pb-1 fs-8 text-secondary">
              Charge rate
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control rounded-0 fs-8" id="chargeTypeVal" placeholder="0" value="20">
              <span class="input-group-text rounded-0 fs-8" id="chargeTypeText">%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary fs-8 rounded-0 px-4">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
function ChargeType(){
  var chkChargeType = document.getElementById('cboChargeType').value;
  var textInner = '';
  switch(chkChargeType){
    case '1' : textInner = 'THB'; break;
    case '2' : textInner = '%'; break;
    case '3' : textInner = 'Night'; break;
    default : textInner = '&nbsp;';
  }
  
  document.getElementById('chargeTypeVal').value="0";
  document.getElementById('chargeTypeText').innerHTML=textInner;
}
</script>