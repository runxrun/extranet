<div 
    id="mainmenu"
    tabindex="-1"
    class="offcanvas offcanvas-end"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Extranet</h5>
        <button
            type="button"
            class="btn-close text-reset shadow-none"
            data-bs-dismiss="offcanvas"
            aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">        
        <?php 
        $menu = array(
            array(
                "icon"=>"fas fa-tachometer-alt",
                "name"=>"Dashboard",
                "link"=>"/dashboard/"
            ),
            array(
                "icon"=>"fas fa-h-square",
                "name"=>"Hotel Profile",
                "submenu"=> array(
                    array(
                        "name"=>"Information",
                        "link"=>"/profile/hotel-profile.php?page=information"
                    ),
                    array(
                        "name"=>"Description",
                        "link"=>"/profile/hotel-profile.php?page=description",
                    ),
                    array(
                        "name"=>"Room Category",
                        "link"=>"/profile/hotel-profile.php?page=room-category",
                    ),
                    array(
                        "name"=>"Facilities",
                        "link"=>"/profile/hotel-profile.php?page=facilities",
                    ),
                    array(
                        "name"=>"Images",
                        "link"=>"/profile/hotel-profile.php?page=images",
                    ),
                    array(
                        "name"=>"Contact List",
                        "link"=>"/profile/hotel-profile.php?page=contact-list",
                    ),
                    array(
                        "name"=>"Meal type list",
                        "link"=>"/profile/hotel-profile.php?page=meal-type-list",
                    ),
                    array(
                        "name"=>"Rack rate price",
                        "link"=>"/profile/hotel-profile.php?page=rack-rate-price",
                    ),
                ),
            ),
            array(
                "icon"=>"fas fa-calendar-alt",
                "name"=>"Dynamic Rate",
                "submenu"=> array(
                    array(
                        "name"=>"Dynamic Rate",
                        "link"=>"/dynamic-rate/"
                    ),
                    array(
                        "name"=>"Promotion",
                        "link"=>"/promotion/"
                    ),
                    array(
                        "name"=>"Enhancement",
                        "link"=>"/enhancement/"
                    ),
                ),
            ),
            array(
                "icon"=>"fas fa-book",
                "name"=>"Manual",
                "link"=>"javascript: void(0);"
            ),
        );
        foreach ($menu as $key => $value)
        {
            if(!empty($value["link"]))
            {
            ?>
                <div>
                    <a href="<?php echo $value["link"]; ?>" class="btn p-0 w-100 border-0 shadow-none text-start d-flex">
                        <div class="pe-2 fs-6 text-secondary opacity-50">
                            <i class="<?php echo $value['icon']; ?>"></i>
                        </div>
                        <div class="ps-1 fs-6 text-secondary">
                            <?php echo $value['name']; ?>
                        </div>
                    </a>
                </div>
            <?php
            }
            else
            {
            ?>
                <div>
                    <button 
                        class="btn p-0 w-100 border-0 shadow-none text-start"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                        data-bs-target="<?php echo "#collapse_".$key; ?>"
                        aria-controls="<?php echo "collapse_".$key; ?>">
                        <div class="d-flex">
                            <div class="pe-2 fs-6 text-secondary opacity-50">
                                <i class="<?php echo $value['icon']; ?>"></i>
                            </div>
                            <div class="ps-1 fs-6 text-secondary">
                                <?php echo $value['name']; ?>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="collapse" id="<?php echo "collapse_".$key; ?>">

                    <?php 
                    foreach ($value["submenu"] as $key2 => $item)
                    {
                    ?>   
                    <div class="fs-6 py-2">
                        <a href="<?php echo $item["link"]; ?>" class="">
                            <?php echo $item["name"]; ?>
                        </a>
                    </div>
                    <?php   
                    }
                    ?>
                </div>
            <?php   
            }   
        }
        ?>







    </div>
</div>