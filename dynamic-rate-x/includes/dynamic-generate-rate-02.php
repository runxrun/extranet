
<div class="bg-white rounded-1 border-bottom p-4">

    <div class="pb-3">
        <div class="row gy-2 gx-4">
            <div class="col-12 col-lg-3">
                <div class="fs-7 fw-bold text-dark">
                    Room category
                </div>
            </div>
            <div class="col-12 col-lg-9">







<div id="myTab" role="tablist">
    <div class="row">
        <div class="col-auto">
            <div class="form-check">
                <input 
                    type="radio"
                    name="RadioRoomCategory" 
                    id="select-room-tab"
                    class="form-check-input shadow-none active"
                    id="select-room-tab"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#select-room-tab-pane"
                    aria-controls="select-room-tab-pane"
                    aria-selected="true"
                    checked>
                <label class="form-check-label fs-7 fw-bold text-dark" for="select-room-tab">
                    Select room
                </label>
            </div> 
        </div>
        <div class="col-auto">

            <div class="form-check">
                <input 
                    type="radio" 
                    id="add-room-tab"
                    name="RadioRoomCategory" 
                    class="form-check-input shadow-none" 
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#add-room-tab-pane"
                    aria-controls="add-room-tab-pane"
                    aria-selected="false">
                <label class="form-check-label fs-7 fw-bold text-dark" for="add-room-tab">
                    Add new room
                </label>
            </div> 
        </div>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="select-room-tab-pane" role="tabpanel" aria-labelledby="select-room-tab" tabindex="0">
        <div class="py-4">
            <div class="">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="fs-8 text-secondary text-truncate">
                            Room category
                        </div>
                        <div class="pt-1 position-relative">
                            <select class="form-select rounded-0 shadow-none fs-7 text-secondary">
                                <option value="" selected disabled>Select room</option>
                                <option value="">Standard</option>
                                <option value="">Deluxe</option>
                                <option value="">Family Suite</option>
                                <option value="">Villa Suite</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="add-room-tab-pane" role="tabpanel" aria-labelledby="add-room-tab" tabindex="0">
        <div class="py-4">
            
            <div class="">
                <div class="row g-2">
                    <div class="col-12">
                        <div class="fs-8 text-secondary text-truncate">
                            Room category
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-9 col-lg-6">
                        <div class="position-relative">
                            <input type="text" id="myInput" name="myInput" class="form-control rounded-0 shadow-none fs-7 fw-bold text-dark" value="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="">
                            <button class="btn btn-success w-100 rounded-0 fs-7">Add room</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>










            </div>
        </div>        
    </div>


    <div class="py-3 border-top">
        <div class="row gy-2 gx-4">
            <div class="col-12 col-lg-3">
                <div class="fs-7 fw-bold text-dark">
                    Rates period
                </div>
            </div>
            <div class="col-12 col-lg-9">

                <div class="pb-2">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="fs-8 text-secondary text-truncate">
                                From date
                            </div>
                            <div class="pt-1 input-group">
                                <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                <span class="input-group-text rounded-0">
                                    <i class="fas fa-calendar-day"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="fs-8 text-secondary text-truncate">
                                To date
                            </div>
                            <div class="pt-1 input-group">
                                <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                <span class="input-group-text rounded-0">
                                    <i class="fas fa-calendar-day"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-3 pb-2">
                    <div class="pb-2">
                        <div class="fs-8 text-secondary">
                            Application days (Days flag)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay1" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay1">Sun</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay2" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay2">Mon</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay3" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay3">Tue</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay4" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay4">Wed</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay5" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay5">Thu</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay6" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay6">Fri</label>
                            </div>
                        </div>
                        <div class="col-3 col-lg-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input rounded-0" id="chkDay7" autocomplete="off" checked="">
                                <label class="form-check-label fs-8 text-secondary" for="chkDay7">Sat</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>


    <div class="py-3 border-top">
        <div class="row gy-2 gx-4">
            <div class="col-12 col-lg-3">
                <div class="fs-7 fw-bold text-dark">
                    Set room & allotment
                </div>
            </div>
            <div class="col-12 col-lg-9">
                TEST
            </div>
        </div>        
    </div>


</div>



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