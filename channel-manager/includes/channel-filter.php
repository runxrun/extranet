<div class="bg-white border-bottom rounded-1 p-4">
  <div class="row g-3">
    <div class="col-12 col-lg-4 col-xl-3">
      <div class="pb-1 fs-8 text-secondary">
        Channel management
      </div>
      <div>
        <select class="form-select fs-7 rounded-0">
          <option value="">Select Channel</option>
          <option value="">BookandLink</option>
          <option value="" selected>RateGain</option>
          <option value="">FASTBOOKING AvaiPro</option>
          <option value="">Siteminder</option>
          <option value="">STAAH</option>
        </select>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
      <div class="pb-1 fs-8 text-secondary">
        Room Category
      </div>
      <div>
        <select class="form-select fs-7 rounded-0">
          <option value="">All rooms</option>
          <option value="" selected>1 BED</option>
          <option value="">2 BED</option>
          <option value="">Studio</option>
          <option value="">Villa Suite</option>
        </select>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
      <div class="pb-1 fs-8 text-secondary">
        Meal type
      </div>
      <div>
        <select class="form-select fs-7 rounded-0">
          <option value="">All mealtype</option>
          <option value="" selected>Room and Breakfast</option>
          <option value="">Room Only</option>
        </select>
      </div>
    </div>
  </div>
  <div class="pt-2">
    <div class="row g-3">
      <div class="col-12 col-sm-3 col-md-4 col-xl-3">
        <div class="pb-1 fs-8 text-secondary">
          Optional
        </div>
        <div>
          <select id="cboDateOption" class="form-select fs-7 rounded-0" onchange="cboDateOption();">
            <option value="0">Montly</option>
            <option value="1" selected>Date ranges</option>
          </select>
        </div>
      </div>
      <div class="col-12 col-md-4 col-xl-3" id="lyMonthly" style="display: none;">
        <div class="pb-1 fs-8 text-secondary">
          Select month
        </div>
        <div>
          <select class="form-select fs-7 rounded-0">
            <option value="">January</option>
            <option value="">February</option>
            <option value="">March</option>
            <option value="">April</option>
            <option value="" selected>May</option>
            <option value="">June</option>
            <option value="">July</option>
            <option value="">August</option>
            <option value="">September</option>
            <option value="">October</option>
            <option value="">November</option>
            <option value="">December</option>
          </select>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-xl-2" id="lyYear" style="display: none;">
        <div class="pb-1 fs-8 text-secondary">
          Year
        </div>
        <div>
          <select class="form-select fs-7 rounded-0">
            <option value="">2022</option>
            <option value="" selected>2023</option>
            <option value="">2024</option>
            <option value="">2025</option>
          </select>
        </div>
      </div>
      <div class="col-6 col-sm-3 col-lg-3 col-xl-3" id="lyFromDate">
        <div class="pb-1 fs-8 text-secondary">
          From date
        </div>
        <div class="input-group">
          <input type="text" class="form-control rounded-0 fs-8" placeholder="1-May-2023">
          <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
        </div>
      </div>
      <div class="col-6 col-sm-3 col-lg-3 col-xl-3" id="lyToDate">
        <div class="pb-1 fs-8 text-secondary">
          To date
        </div>
        <div class="input-group">
          <input type="text" class="form-control rounded-0 fs-8" placeholder="7-May-2023">
          <span class="input-group-text rounded-0 fs-8"><i class="fas fa-calendar-day"></i></span>
        </div>
      </div>
      <div class="col-12 col-sm-auto">
        <div class="pb-1 fs-8 text-secondary d-none d-sm-block">
          &nbsp;
        </div>
        <div>
          <button class="btn btn-primary rounded-0 fs-8 w-100" onclick="submitSearch();">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function cboDateOption(){
    var cboDateOptional = document.getElementById("cboDateOption").value;
    if(cboDateOptional=="0")
    {
      document.getElementById("lyMonthly").style.display="";
      document.getElementById("lyYear").style.display="";
      document.getElementById("lyFromDate").style.display="none";
      document.getElementById("lyToDate").style.display="none";
    }
    else
    {
      document.getElementById("lyMonthly").style.display="none";
      document.getElementById("lyYear").style.display="none";
      document.getElementById("lyFromDate").style.display="";
      document.getElementById("lyToDate").style.display="";
    }
  }
  function submitSearch(){
    window.open('/channel-manager/?search=1', '_self');
  }
</script>
