<div class="bg-white rounded-1 border-bottom p-3">
    <div class="m-auto py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="row gx-3 align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                            Room category
                        </div>
                    </div>
                    <div class="pb-3 col-12 col-md-8">
                        <div class="pt-1">
                            <div class="position-relative">
                                <input type="text" id="myInput" name="myInput" class="form-control rounded-0 shadow-none fs-7 fw-bold text-dark" value="Standard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-3 align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                            Period
                        </div>
                    </div>
                    <div class="pb-3 col-12 col-md-8">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="pt-1">
                                    <div class="input-group">
                                        <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                        <span class="input-group-text rounded-0">
                                            <i class="fas fa-calendar-day"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-1">
                                    <div class="input-group">
                                        <input type="text" value="<?php echo date('d M Y');?>" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                        <span class="input-group-text rounded-0">
                                            <i class="fas fa-calendar-day"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-3">
                    <div class="col-12 col-md-4">
                        <div class="pb-3 fs-8 text-secondary text-truncate text-md-end">
                            Day flag
                        </div>
                    </div>
                    <div class="pb-3 col-12 col-md-8">
                        <div class="row gy-1 gx-2">
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
                    </div>
                </div>
                <div class="row gx-3 align-items-center">
                    <div class="col-6 col-md-12">
                        <div class="row gx-3 align-items-center">
                            <div class="col-12 col-md-4">
                                <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                                    Allotment
                                </div>
                            </div>
                            <div class="pb-3 col-12 col-md-8">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="row gx-3 align-items-center">
                            <div class="col-12 col-md-4">
                                <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                                    Cut off date
                                </div>
                            </div>
                            <div class="pb-3 col-12 col-md-8">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="row gx-3 align-items-center">
                            <div class="col-12 col-md-4">
                                <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                                    Min stay
                                </div>
                            </div>
                            <div class="pb-3 col-12 col-md-8">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <input type="number" value="0" class="form-control rounded-0 shadow-none fs-7 text-dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-3 align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                            Meal type
                        </div>
                    </div>
                    <div class="pb-3 col-12 col-md-8">
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
                    </div>
                </div>
                <div class="row gx-3 align-items-center d-none">
                    <div class="col-12 col-md-4">
                        <div class="pb-md-3 fs-8 text-secondary text-truncate text-md-end">
                            Rate status
                        </div>
                    </div>
                    <div class="pb-3 col-12 col-md-4">
                        <div class="pt-1">
                            <div class="position-relative">
                                <select class="form-select rounded-0 shadow-none fs-7 fw-bold text-dark">
                                    <option value="0" selected>Available</option>
                                    <option value="3">On request</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-3 align-items-center">
                    <div class="col-12 col-md-4">
                        &nbsp;
                    </div>
                    <div class="pb-3 col-12 col-md-8">
                        <div class="row g-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>