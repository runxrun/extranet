

<div id="roomPriceTab" role="tablist">
    <div class="row">
        <div class="col-auto">
            <div class="form-check">
                <input 
                    type="radio"
                    name="RadioRoomPrice" 
                    id="select-bedtype-tab"
                    class="form-check-input shadow-none active"
                    id="select-bedtype-tab"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#select-bedtype-tab-pane"
                    aria-controls="select-bedtype-tab-pane"
                    aria-selected="true"
                    checked>
                <label class="form-check-label fs-7 text-secondary" for="select-bedtype-tab">
                    Bed type
                </label>
            </div> 
        </div>
        <div class="col-auto">
            <div class="form-check">
                <input 
                    type="radio" 
                    id="add-unit-tab"
                    name="RadioRoomPrice" 
                    class="form-check-input shadow-none" 
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#add-unit-tab-pane"
                    aria-controls="add-unit-tab-pane"
                    aria-selected="false">
                <label class="form-check-label fs-7 text-secondary" for="add-unit-tab">
                    Unit
                </label>
            </div> 
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="select-bedtype-tab-pane" role="tabpanel" aria-labelledby="select-bedtype-tab" tabindex="0">
        <div class="pt-4">      
			<div class="pb-2">
			    <div class="row gy-2">
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Single
			            </div>
			            <div class="pt-1">
			            	<input type="text" id="txtSgl" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Twin/Double
			            </div>
			            <div class="pt-1">
			            	<input type="text" id="txtTwnDbl" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Extra bed (Adult)
			            </div>
			            <div class="pt-1">
			            	<input type="text" id="txtXbedAd" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Extra bed (Child)
			            </div>
			            <div class="pt-1">
			            	<input type="text" id="txtXbedCh" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Quad
			            </div>
			            <div class="pt-1">
			            	<input type="text" id="txtQuad" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			    </div>
			</div>
        </div>
    </div>
    <div class="tab-pane fade" id="add-unit-tab-pane" role="tabpanel" aria-labelledby="add-unit-tab" tabindex="0">
        <div class="pt-4">
			<div class="pb-2">
			    <div class="row gy-2">
			        <div class="col-12 col-lg-3">
			            <div class="fs-8 text-secondary text-truncate">
			                Unit price
			            </div>
			            <div class="pt-1">
			            	<input type="text" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0.00">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Maximum adults
			            </div>
			            <div class="pt-1">
			            	<input type="number" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0">
			            </div>
			        </div>
			        <div class="col-6 col-lg-2">
			            <div class="fs-8 text-secondary text-truncate">
			                Maximum chidren
			            </div>
			            <div class="pt-1">
			            	<input type="number" class="form-control rounded-0 shadow-none fs-7 text-secondary" placeholder="0">
			            </div>
			        </div>
		       	</div>
		    </div>
        </div>
    </div>
</div>



