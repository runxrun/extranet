<button class="btn btn-primary rounded-0 fs-9" data-bs-toggle="modal" data-bs-target="#exampleModal">
	<div class="d-flex">
		<div class="pe-2"><i class="fas fa-cog"></i></div>
		<div class="pe-0">Preset rates</div>
	</div>
</button>

<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fw-bold fs-6">Preset</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                

                <?php

                $preset_array = array(
                    array(
                        'roomcatg'=>'Standand',
                        'mealtype'=>'Room only',
                        'fromdate'=>'15 Mar 2023',
                        'todate'=>'31 Sep 2023',
                        'dayflag'=> array(
                            'sun'=>0,
                            'mon'=>1,
                            'tue'=>1,
                            'wed'=>1,
                            'thu'=>1,
                            'fri'=>1,
                            'sat'=>0,
                        ),
                        'allotment'=>'10',
                        'cutoffday'=>'0',
                        'minstay'=>'0',
                        'sgl'=>1500,
                        'twndbl'=>1500,
                        'xbedad'=>750,
                        'xbedch'=>500,
                        'quad'=>2800,
                    ),
                    array(
                        'roomcatg'=>'Standand',
                        'mealtype'=>'Room only',
                        'fromdate'=>'01 Oct 2023',
                        'todate'=>'31 Jan 2024',
                        'dayflag'=> array(
                            'sun'=>1,
                            'mon'=>1,
                            'tue'=>1,
                            'wed'=>1,
                            'thu'=>1,
                            'fri'=>1,
                            'sat'=>1,
                        ),
                        'allotment'=>'15',
                        'cutoffday'=>'0',
                        'minstay'=>'0',
                        'sgl'=>1700,
                        'twndbl'=>1700,
                        'xbedad'=>750,
                        'xbedch'=>500,
                        'quad'=>3000,
                    ),
                    array(
                        'roomcatg'=>'Standand',
                        'mealtype'=>'Room only',
                        'fromdate'=>'01 Feb 2023',
                        'todate'=>'31 Mar 2024',
                        'dayflag'=> array(
                            'sun'=>1,
                            'mon'=>1,
                            'tue'=>1,
                            'wed'=>1,
                            'thu'=>1,
                            'fri'=>1,
                            'sat'=>1,
                        ),
                        'allotment'=>'12',
                        'cutoffday'=>'0',
                        'minstay'=>'0',
                        'sgl'=>1700,
                        'twndbl'=>1700,
                        'xbedad'=>750,
                        'xbedch'=>500,
                        'quad'=>3000,
                    ),
                );




                foreach ($preset_array as $key => $value) 
                {
                    $bordertop = ''; 
                    if($key>0){ $bordertop = 'border-top';}
                ?>
                <div class="p-3 <?php echo $bordertop; ?>">
                    <div class="row g-2">
                        <div class="col-6 col-md-8">
                            <div>
                                <div class="fs-6 fw-bold text-dark">       
                                    <span class="d-block d-sm-inline text-nowrap">
                                        <?php echo $value['fromdate']; ?>
                                    </span>
                                    <span class="d-none d-sm-inline">
                                        -
                                    </span>
                                    <span class="d-block d-sm-inline text-nowrap">
                                        <?php echo $value['todate']; ?>                                        
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="fs-7 text-secondary">   
                                    <?php echo $value['roomcatg'].' - '.$value['mealtype']; ?>                           
                                </div>
                            </div>                    
                        </div>
                        <div class="col-3 col-md-2">
                            <button 
                                type="button" 
                                class="btn btn-outline-secondary w-100 rounded-0 fs-9 shadow-none" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseExample<?php echo $key;?>" 
                                aria-expanded="false" 
                                aria-controls="collapseExample<?php echo $key;?>">                                
                                <span class="d-block d-lg-none"><i class="fas fa-ellipsis-h"></i></span>
                                <span class="d-none d-lg-block">More detail</span>
                            </button>
                        </div>
                        <div class="col-3 col-md-2">
                            <button 
                                type="button" 
                                id="btnPresetAccept<?php echo $key;?>"
                                class="btn btn-outline-primary w-100 rounded-0 fs-9" 
                                data-bs-dismiss="modal">
                                <span class="d-block d-lg-none"><i class="fas fa-check"></i></span>
                                <span class="d-none d-lg-block">Accept</span>
                            </button>
                        </div>

                    </div>


                    <div class="collapse pt-2" id="collapseExample<?php echo $key;?>">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-10">
                                
                                <div class="row g-2 fs-9 fw-bold text-success">
                                    <?php
                                    foreach ($value['dayflag'] as $key2 => $item)  
                                    {
                                        $dayStatus = '';
                                        if($item=='0'){$dayStatus='opacity-25';}
                                    ?>
                                    <div class="col-auto <?php echo $dayStatus; ?>">
                                        <?php echo strtoupper($key2); ?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="pt-2">
                                    <div class="fs-7 text-secondary">
                                        - Alloment 
                                        (<?php echo $value['allotment']; ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Cut off day 
                                        (<?php echo $value['cutoffday']; ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Minimum stay 
                                        (<?php echo $value['minstay']; ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Single 
                                        (<?php echo number_format($value['sgl'],2); ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Twin/Double 
                                        (<?php echo number_format($value['twndbl'],2); ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                    - Extra bed/Adult 
                                        (<?php echo number_format($value['xbedad'],2); ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Extra bed/Child 
                                        (<?php echo number_format($value['xbedch'],2); ?>)
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="fs-7 text-secondary">
                                        - Quad 
                                        (<?php echo number_format($value['quad'],2); ?>)
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">                                
                                <div class="d-flex h-100 justify-content-end align-items-end">                                    
                                    <button class="btn border-0 shadow-none rounded-0 fs-9 text-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>                        
                    </div>   
                </div>
                <?php
                }
                ?>
                <div class="py-4 text-center d-none">
                    <div class="fs-2 text-dark">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="pt-2 fs-6 text-secondary">
                        You do not have any preset settings
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-0 fs-7" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>