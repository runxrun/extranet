<div class="calendar-box">
    <div class="calendar-head">
        <div class="ico-prev">
            <button>
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>
        <div class="ico-next">
            <button>
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="month-st">
            March 2023
        </div>
        <div class="month-space">
            &nbsp;
        </div>
        <div class="month-nd">
            April 2023
        </div>
    </div>
    <div class="calendar-body">
        <div class="calendar-month-fx">
            <div class="calendar-month-st">

                <div class="week-th">
                    <?php 
                    $day = array('Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su');
                    ?>
                    <?php
                    foreach ($day as $key => $value)
                    {
                    ?>
                    <div class="calendar-day-th"> 
                        <?php echo $value; ?>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="week-tr">
                    <?php 


                        $current_date = date('d');
                        $current_month = date('m');
                        $current_spaceday = date('w', strtotime('-'.$current_date.'day'));
                        $next_month = date('m', strtotime('+1 month'));


                        switch($current_month)
                        {
                            case "01" : $total_date = 31; break;
                            case "02" : $total_date = 28; break;
                            case "03" : $total_date = 31; break;
                            case "04" : $total_date = 30; break;
                            case "05" : $total_date = 31; break;
                            case "06" : $total_date = 30; break;
                            case "07" : $total_date = 31; break;
                            case "08" : $total_date = 31; break;
                            case "09" : $total_date = 30; break;
                            case "10" : $total_date = 31; break;
                            case "11" : $total_date = 30; break;
                            case "12" : $total_date = 31; break;
                        }
                        switch($next_month)
                        {
                            case "01" : $total_next_date = 31; break;
                            case "02" : $total_next_date = 28; break;
                            case "03" : $total_next_date = 31; break;
                            case "04" : $total_next_date = 30; break;
                            case "05" : $total_next_date = 31; break;
                            case "06" : $total_next_date = 30; break;
                            case "07" : $total_next_date = 31; break;
                            case "08" : $total_next_date = 31; break;
                            case "09" : $total_next_date = 30; break;
                            case "10" : $total_next_date = 31; break;
                            case "11" : $total_next_date = 30; break;
                            case "12" : $total_next_date = 31; break;
                        }

                        //echo $current_spaceday;




                        $date_remain = $total_date - $current_date;

                        $next_month_spaceday = date('w d M y', strtotime('+'.($date_remain).'day'));
                        //echo $xxxx;

                    ?>

                    <?php
                    for ($i=0; $i < $current_spaceday; $i++)
                    { 
                    ?>
                        <div class="calendar-day disabled">
                           &nbsp;
                        </div>
                    <?php
                    }

                    $stepdate = 1;

                    $picked = 22;

                    while ($stepdate <= $total_date) 
                    {
                        $cls_disabled = '';
                        if($stepdate < $current_date)
                        {
                            $cls_disabled = 'disabled';
                        }

                        $cls_picked = '';
                        if($stepdate == $picked)
                        {
                            $cls_picked = 'picked';
                        }
                    ?>
                    <div class="calendar-day <?php echo $cls_disabled.' '.$cls_picked; ?>">
                        <span><?php echo $stepdate; ?></span>
                    </div>
                    <?php
                        $stepdate++;
                    }
                    ?>

                </div>
            </div>
            <div class="calendar-month-space">
                <div class="week-th">
                    <div class="calendar-day-th"> 
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="calendar-month-nd">
                <div class="week-th">
                    <?php 
                    $day = array('Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su');
                    ?>
                    <?php
                    foreach ($day as $key => $value)
                    {
                    ?>
                    <div class="calendar-day-th"> 
                        <?php echo $value; ?>
                    </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="week-tr">

                    <?php
                    for ($i=0; $i < $next_month_spaceday; $i++)
                    { 
                    ?>
                        <div class="calendar-day disabled">
                           &nbsp;
                        </div>

                    <?php } ?>

                    <?php

                    $stepdate = 1;
                    while ($stepdate <= $total_next_date) 
                    {
                    ?>
                    <div class="calendar-day">
                        <?php echo $stepdate; ?>
                    </div>
                    <?php
                        $stepdate++;
                    }
                    ?>
            </div>



            </div>
        </div>
    </div>
</div>