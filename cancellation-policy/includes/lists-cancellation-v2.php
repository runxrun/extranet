

<?php

$cxllists = array(
    array(
        'roomcategory'=>'Standard',
        'cancelpolicy'=>array(
            array(
                'mealtype'=>'Room only',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>14,
                'chargerate'=>'30%',
                'chargetype'=>'Percent',
                'currency'=>'THB',
            ),
            array(
                'mealtype'=>'Room only',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>7,
                'chargerate'=>'50%',
                'chargetype'=>'Percent',
                'currency'=>'THB',
            ),
            array(
                'mealtype'=>'Room and Breakfast',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>14,
                'chargerate'=>'50%',
                'chargetype'=>'Percent',
                'currency'=>'THB',
            ),
            array(
                'mealtype'=>'Room and Breakfast',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>7,
                'chargerate'=>'1',
                'chargetype'=>'Night/Room',
                'currency'=>'THB',
            ),
        ),
    ),

    array(
        'roomcategory'=>'Deluxe',
        'cancelpolicy'=>array(
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>14,
                'chargerate'=>'50%',
                'chargetype'=>'Percent',
                'currency'=>'THB',
            ),
        ),
    ),

    array(
        'roomcategory'=>'Family Suite',
        'cancelpolicy'=>array(
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>14,
                'chargerate'=>'50%',
                'chargetype'=>'Percent',
                'currency'=>'THB',
            ),
        ),
    ),


    array(
        'roomcategory'=>'All Rooms',
        'cancelpolicy'=>array(
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>14,
                'chargerate'=>'-',
                'chargetype'=>'Free cancellation',
            ),
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>9,
                'chargerate'=>'30 THB',
                'chargetype'=>'Amount',
            ),
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>5,
                'chargerate'=>'50%',
                'chargetype'=>'Percent',
            ),
            array(
                'mealtype'=>'All room type',
                'fromdate'=>'01 Jan 2023',
                'todate'=>'31 Dec 2023',
                'cancelday'=>2,
                'chargerate'=>'100%',
                'chargetype'=>'Full charge',
            ),
        ),
    ),
);
?>

<div class="table-responsive">
    <table class="table table-bordered table-hover bg-white fs-7">
        <?php
        foreach ($cxllists as $key => $value)
        {
            ?>
            <thead>
                <tr>
                    <th colspan="8" class="p-0">
                        <div class="d-flex bg-light p-2">
                            <div class="fs-7 text-dark px-1">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div class="fs-7 text-dark px-1 fw-bold">
                                <?php echo $value["roomcategory"]; ?>
                            </div>
                        </div>
                    </th>
                </tr>   
                <tr>
                    <th scope="col" class="text-nowrap">Meal type</th>
                    <th scope="col" class="text-nowrap">From date</th>
                    <th scope="col" class="text-nowrap">To date</th>
                    <th scope="col" class="text-nowrap">Cancel day</th>
                    <th scope="col" class="text-nowrap">Charge rate</th>
                    <th scope="col" class="text-nowrap">Charge type</th>
                    <th scope="col" class="text-nowrap" colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($value['cancelpolicy'] as $key2 => $item) 
                {
                    ?>
                    <tr>
                        <td class="text-nowrap text-secondary" scope="row"><?php echo $item['mealtype']; ?></td>
                        <td class="text-nowrap text-secondary"><?php echo $item['fromdate']; ?></td>
                        <td class="text-nowrap text-secondary"><?php echo $item['todate']; ?></td>
                        <td class="text-nowrap text-secondary"><?php echo $item['cancelday']; ?> days</td>
                        <td class="text-nowrap text-secondary"><?php echo $item['chargerate']; ?></td>
                        <td class="text-nowrap text-secondary"><?php echo $item['chargetype']; ?></td>
                        <td class="text-nowrap text-secondary p-0">
                            <button class="btn btn-outline-primary w-100 h-100 border-0 shadow-none rounded-0" onclick="window.open('/promotion/?page=edit-promotion','_self');">
                                <span class="fs-8">
                                    <i class="fas fa-search"></i>
                                </span>
                            </button>
                        </td>
                        <td class="text-nowrap text-secondary p-0">
                            <button class="btn btn-outline-danger w-100 h-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <span class="fs-8">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </button>
                        </td>
                    </tr>
                    <?php 
                    }
                    if (($key+1)!=count($cxllists))
                    {
                    echo '
                        <tr>
                            <th colspan="8" class="bg-light p-0" style="border: 0px; border-left: 1px solid #f2f3f4; border-right: 1px solid #f2f3f4;">
                                <div style="background-color: #f2f3f4; height: 24px;"></div>
                            </th>
                        </tr>
                    ';
                } 
                ?>
            </tbody>  
            <?php
        }
        ?>
    </table>
</div>  

