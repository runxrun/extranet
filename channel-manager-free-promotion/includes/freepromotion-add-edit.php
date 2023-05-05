<div>
  <div class="border-bottom bg-white rounded-2 p-4">

    <!-- 
    <button class="btn btn-success rounded-0 py-2 fs-8 text-white">
      <span class="pe-2"><i class="fas fa-plus-circle"></i></span>
      <span class="pe-2">Add room category</span>
    </button> 
    -->


    <div class="pb-3">
      <div class="d-flex">
        <span class="fs-6 fw-bold text-primary pe-2">
          <i class="fas fa-info-circle"></i>
        </span>
        <span class="fs-6 fw-bold text-primary">
          Free Promotion Offer
        </span>
      </div>
    </div>
 

    <div class="pb-3" id="lyPromoNotActive">
      <div class="alert alert-warning d-flex py-2" role="alert">
        <div class="pe-1 fs-7">
          <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="ps-1 fs-7">
          This promotion is not activate
        </div>
      </div>
    </div>
    <div class="pb-3" id="lyPromoActive" style="display: none;">
      <div class="alert alert-success d-flex py-2" role="alert">
        <div class="pe-1 fs-7">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="ps-1 fs-7">
          This promotion is activated
        </div>
      </div>
    </div>

    <div class="row gx-3">
      <div class="pb-3 col-12 col-lg-4">
        <div class="form-check pe-lg-3">
          <input type="checkbox" class="form-check-input rounded-0" id="btncheckroom0">
          <label class="form-check-label fs-8 text-dark fw-bold" for="btncheckroom0">
            Select all room
          </label>
        </div>
        <div class="border-top mt-2 pt-2">
          <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="btncheckroom1">
            <label class="form-check-label fs-8 text-secondary" for="btncheckroom1">
              1 BED
            </label>
          </div>
          <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="btncheckroom2">
            <label class="form-check-label fs-8 text-secondary" for="btncheckroom2">
              2 BED
            </label>
          </div>
          <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="btncheckroom3">
            <label class="form-check-label fs-8 text-secondary" for="btncheckroom3">
              Studio
            </label>
          </div>
          <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="btncheckroom4">
            <label class="form-check-label fs-8 text-secondary" for="btncheckroom4">
              Villa Suite
            </label>
          </div>
        </div>
      </div>
      <div class="pb-3 col-12 col-lg-8">
        <div class="row g-3">
          <div class="col-12 col-lg-4">
            <div class="pb-1 fs-8 text-secondary">
              From date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-7" value="14-May-2023">
              <span class="input-group-text rounded-0">
                <i class="fas fa-calendar-day"></i>
              </span>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="pb-1 fs-8 text-secondary">
              To date
            </div>
            <div class="input-group">
              <input type="text" class="form-control rounded-0 fs-7" value="31-May-2023">
              <span class="input-group-text rounded-0">
                <i class="fas fa-calendar-day"></i>
              </span>
            </div>
          </div>
          <div class="col-12">
            <div class="pb-1 fs-8 text-secondary">
              &nbsp;
            </div>
            <div class="form-check fs-7 text-secondary">
              <input class="form-check-input" type="checkbox" value="" id="chkApprovePromotion" onchange="ApprovePromotion();">
              <label class="form-check-label" for="chkApprovePromotion">
                Approve promotion
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>






    <div>
      <div class="pt-4 pb-3">
        <div class="row g-2">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="position-relative">
              <button class="btn border w-100 rounded-0 d-flex p-0" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="py-2 px-3 w-100 fs-8 fw-bold text-dark">
                  ภาษาไทย
                </div>
                <div class="py-2 px-3 bg-light border-start">
                  <i class="fas fa-language"></i>
                </div>
              </button>
              <ul class="dropdown-menu rounded-0 w-100 fs-7" style="">
                <li><a class="dropdown-item" href="javascript:void(0);">English</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Bahasa Indonesia</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">ภาษาไทย</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">日本語</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">简体中文</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-3">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="pb-1 fs-8 fw-bold text-dark">
              Hotel Free Promotion Set
            </div>
            <div>
              <select class="form-select rounded-0 fs-7">
                <option value="">Select</option>
                <option value="" selected>จองห้องกับเรามีบริการนวดฟรี 1 ห้อง / 1 ท่าน</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="pb-1 fs-8 fw-bold text-dark">
              Topic
            </div>
            <div>
              <input type="text" class="form-control rounded-0 fs-7" value="จองห้องกับเรามีบริการนวดฟรี 1 ห้อง / 1 ท่าน">
            </div>
          </div>
        </div>
      </div>
      <div class="pt-3">
        <div class="pb-1 fs-8 text-secondary">
          Short Information
        </div>
        <div class="bg-light border-top border-start border-end p-2">
          <div class="row g-2">
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-undo"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-redo"></i></span>
                </button>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-bold"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-italic"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-underline"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-strikethrough"></i></span>
                </button>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-list-ul"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-list-ol"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <textarea class="form-control rounded-0 w-100 fs-7 p-3"
            rows="8">โรงแรมโซน่าเฮาส์ 1 ห้องพักท่านสามารถนวดกับเราได้ฟรี 1 ท่าน</textarea>
        </div>
      </div>
      <div class="pt-3">
        <div class="pb-1 fs-8 text-secondary">
          Conditions
        </div>
        <div class="bg-light border-top border-start border-end p-2">
          <div class="row g-2">
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-undo"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-redo"></i></span>
                </button>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-bold"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-italic"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-underline"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-strikethrough"></i></span>
                </button>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex">
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-list-ul"></i></span>
                </button>
                <button class="btn bg-white border w-100 rounded-0 py-1 px-3">
                  <span class="fs-9 text-dark"><i class="fas fa-list-ol"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <textarea class="form-control rounded-0 w-100 fs-7 p-3" rows="8"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function ApprovePromotion (){
    var checkApprove = document.getElementById("chkApprovePromotion").checked;
    if(checkApprove)
    {
      document.getElementById("lyPromoNotActive").style.display="none";
      document.getElementById("lyPromoActive").style.display="";
    }
    else{
      document.getElementById("lyPromoNotActive").style.display="";
      document.getElementById("lyPromoActive").style.display="none";
    }
  }
</script>



<div class="py-4">
  <div class="row justify-content-between">
    <div class="col-auto">
      <button class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
        onclick="window.open('/channel-manager-free-promotion/','_self');">
        <span><i class="fas fa-undo"></i></span>
        <span class="px-2">Back</span>
      </button>
    </div>
    <div class="col-auto">
      <div class="row g-2 justify-content-end">
        <div class="col-auto">
          <button class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
            onclick="window.open('/channel-manager-free-promotion/','_self');">
            <span class="px-2">Cancel</span>
          </button>
        </div>
        <div class="col-auto">
          <button class="btn btn-success rounded-0 py-2 fs-8 text-white"
            onclick="window.open('/channel-manager-free-promotion/','_self');">
            <span class="px-4">Save</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>