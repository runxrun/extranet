

<div class="bg-white rounded-1 border-bottom">
    <div class="p-4">
        <div class="pb-4">
            <div class="row gy-2 gx-4">
                <div class="col-12 col-lg-3">
                    <div class="fs-7 fw-bold text-dark">
                        Room category
                    </div>
                    <div class="fs-7 text-secondary">
                        If the room name is unavailable 
                    </div>
                    <div class="pb-2 pt-2 fs-7 text-secondary">
                        <button class="btn btn-outline-success rounded-0 shadow-none fs-9 py-1 px-3">
                            Add new
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <?php include('generate-rate/roomcategory.php'); ?>
                </div>
            </div>
        </div>
        <div class="py-4 border-top">
            <div class="row gy-2 gx-4">
                <div class="col-12 col-lg-3">
                    <div class="pb-3 fs-7 fw-bold text-dark">
                        Rates period
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <?php include('generate-rate/period.php'); ?>                
                </div>
            </div>
        </div>
        <div class="py-4 border-top">
            <div class="row gy-2 gx-4">
                <div class="col-12 col-lg-3">
                    <div class="pb-3 fs-7 fw-bold text-dark">
                        Set room & allotment
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <?php include('generate-rate/setroom-n-allotment.php'); ?>    
                </div>
            </div>
        </div>
        <div class="py-4 border-top">
            <div class="row gy-2 gx-4">
                <div class="col-12 col-lg-3">
                    <div class="fs-7 fw-bold text-dark">
                        Meal type
                    </div>
                    <div class="fs-7 text-secondary">
                        If the meal type is unavailable 
                    </div>
                    <div class="pb-2 pt-2 fs-7 text-secondary">
                        <button class="btn btn-outline-success rounded-0 shadow-none fs-9 py-1 px-3">
                            Add new
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <?php include('generate-rate/meal.php'); ?>    
                </div>
            </div>
        </div>
        <div class="py-4 border-top">
            <div class="row gy-2 gx-4">
                <div class="col-12 col-lg-3">
                    <div class="pb-3 fs-7 fw-bold text-dark">
                        Room price
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <?php include('generate-rate/prices.php'); ?>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="row g-2 justify-content-end">
        <div class="col-5 col-md-auto">
            <button class="btn btn-primary w-100 px-4 rounded-0 fs-7">
                Save
            </button>
        </div>
        <div class="col-7 col-md-auto">
            <button class="btn btn-success w-100 px-4 rounded-0 fs-7">
                Save and set preset
            </button>
        </div>
    </div>
</div>



<?php /*

*/ ?>


<!-- 
 -->


<!-- 
<div class="fs-8 text-secondary text-truncate">
    Room category
</div>
<div class="pt-1">
    <div class="position-relative">
        <input type="text" id="myInput" name="myInput" class="form-control rounded-0 shadow-none fs-7 fw-bold text-dark" value="Standard">
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Period
</div>
<div class="pt-1">
    <div class="input-group">
        <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
        <span class="input-group-text rounded-0">
            <i class="fas fa-calendar-day"></i>
        </span>
    </div>
</div>
<div class="pt-1">
    <div class="input-group">
        <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
        <span class="input-group-text rounded-0">
            <i class="fas fa-calendar-day"></i>
        </span>
    </div>
</div>

<div class="row">
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay1" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay1">Sun</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay2" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay2">Mon</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay3" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay3">Tue</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay4" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay4">Wed</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay5" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay5">Thu</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay6" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay6">Fri</label>
        </div>
    </div>
    <div class="col-3 col-lg-auto">
        <div class="form-check pe-lg-3">
            <input type="checkbox" class="form-check-input rounded-0" id="chkDay7" autocomplete="off" checked="">
            <label class="form-check-label fs-8 text-secondary" for="chkDay7">Sat</label>
        </div>
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Allotment
</div>
<div class="pt-1">
    <div class="input-group">
        <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Cut off date
</div>
<div class="pt-1">
    <div class="input-group">
        <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Min stay
</div>
<div class="pt-1">
    <div class="input-group">
        <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Meal type
</div>
<div class="pt-1">
    <div class="position-relative">
        <select class="form-select rounded-0 shadow-none fs-7 fw-bold text-dark">
            <option value="0" selected>Room Only</option>
            <option value="1">Bed & Breakfast</option>
            <option value="2">American Breakfast</option>
            <option value="3">Buffet</option>
        </select>
    </div>
</div>
<div class="fs-8 text-secondary text-truncate">
    Rate status
</div>
<div class="pt-1">
    <div class="position-relative">
        <select class="form-select rounded-0 shadow-none fs-7 fw-bold text-dark">
            <option value="0" selected>Available</option>
            <option value="3">On request</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-6 col-md-4">
        <div class="fs-8 text-secondary text-truncate">
            Single
        </div>
        <div class="pt-1">
            <input type="text" placeholder="0.00" class="form-control rounded-0 shadow-none fs-7 text-dark">
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="fs-8 text-secondary text-truncate">
            Twin/Double
        </div>
        <div class="pt-1">
            <input type="text" placeholder="0.00" class="form-control rounded-0 shadow-none fs-7 text-dark">
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="fs-8 text-secondary text-truncate">
            Extra bed (Adult)
        </div>
        <div class="pt-1">
            <input type="text" placeholder="0.00" class="form-control rounded-0 shadow-none fs-7 text-dark">
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="fs-8 text-secondary text-truncate">
            Extra bed (Child)
        </div>
        <div class="pt-1">
            <input type="text" placeholder="0.00" class="form-control rounded-0 shadow-none fs-7 text-dark">
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="fs-8 text-secondary text-truncate">
            Quad
        </div>
        <div class="pt-1">
            <input type="text" placeholder="0.00" class="form-control rounded-0 shadow-none fs-7 text-dark">
        </div>
    </div>


</div> -->