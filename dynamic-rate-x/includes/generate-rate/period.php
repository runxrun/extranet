<div class="pb-2">
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="fs-8 text-secondary text-truncate">
                From date
            </div>
            <div class="dropdown">
                <div class="pt-1 input-group" id="rnCalendarFromDate" data-bs-toggle="dropdown" aria-expanded="false">
                    <input 
                        type="text" 
                        id="txtFromDate"
                        value="<?php echo date('d M Y');?>" 
                        class="form-control rounded-0 shadow-none fs-7 text-dark">
                    <span class="input-group-text rounded-0">
                        <i class="fas fa-calendar-day"></i>
                    </span>
                </div>

                <div class="mt-1 dropdown-menu border-0 rounded-0 p-0 rn-calendar" aria-labelledby="rnCalendarFromDate">
                    <?php include('../application/components/calendar/calendar.component.php'); ?>
                </div>
            </div>
            
        </div>
        <div class="col-6 col-lg-3">
            <div class="fs-8 text-secondary text-truncate">
                To date
            </div>
            <div class="dropdown">
                <div class="pt-1 input-group" id="rnCalendarToDate" data-bs-toggle="dropdown" aria-expanded="false">
                    <input 
                        type="text"
                        id="txtToDate"
                        value="<?php echo date('d M Y', strtotime('-1 day', strtotime('1 year')));?>" 
                        class="form-control rounded-0 shadow-none fs-7 text-dark">
                    <span class="input-group-text rounded-0">
                        <i class="fas fa-calendar-day"></i>
                    </span>
                </div>
                <div class="mt-1 dropdown-menu border-0 rounded-0 p-0 rn-calendar" aria-labelledby="rnCalendarToDate">
                    <?php include('../application/components/calendar/calendar.component.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-3 pb-2">
    <div class="pb-2">
        <div class="fs-8 fw-bold text-dark">
            Application days (Days flag)
        </div>
    </div>
    <div class="row">
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkSun" class="form-check-input rounded-0" id="chkDay1" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay1">Sun</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkMon" class="form-check-input rounded-0" id="chkDay2" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay2">Mon</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkTue" class="form-check-input rounded-0" id="chkDay3" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay3">Tue</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkWed" class="form-check-input rounded-0" id="chkDay4" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay4">Wed</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkThu" class="form-check-input rounded-0" id="chkDay5" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay5">Thu</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkFri" class="form-check-input rounded-0" id="chkDay6" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay6">Fri</label>
            </div>
        </div>
        <div class="col-3 col-lg-auto">
            <div class="form-check">
                <input type="checkbox" id="chkSat" class="form-check-input rounded-0" id="chkDay7" autocomplete="off" checked>
                <label class="form-check-label fs-8 text-secondary" for="chkDay7">Sat</label>
            </div>
        </div>
    </div>
</div>