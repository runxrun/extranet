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
?>
<div 
    id="mainmenu"
    tabindex="-1"
    class="offcanvas offcanvas-end"
    aria-labelledby="offcanvasRightLabel">
    <div class="border-top border-3 border-primary shadow-sm mb-2">
        <div class="border-bottom border-1 p-3">
            <div class="d-flex justify-content-between align-items-start">
                <div class="w-100">
                    <div class="d-flex">
                        <div class="pe-1 fs-6 text-dark">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="ps-1 fs-6 fw-bold text-dark">
                            Sonahouse Hotel
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <button
                        type="button"
                        class="btn border-0 p-0 text-secondary fs-6"
                        data-bs-dismiss="offcanvas">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="p-3">
                <div class="d-flex">
                    <div>
                        <div class="fs-7 fw-bold text-white">Erik Ten Hag</div>
                        <div class="fs-7 text-white-50">13 July 2022 13:51:18 GMT+7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-body p-0">
        <div class="row gy-1 gx-0">
            <?php         
            foreach ($menu as $key => $value)
            {
                if(!empty($value["link"]))
                {
                ?>
                <div class="col-12">
                    <button
                        onclick="window.open('<?php echo $value["link"]; ?>', '_self');"
                        class="btn border-0 rounded-0 shadow-none w-100 text-start py-2 px-3 rn-sidemenu-hover">
                        <div class="row g-0 align-items-center">
                            <div class="col-1">
                                <div class="fs-6 text-secondary opacity-50">
                                    <i class="<?php echo $value['icon']; ?>"></i>
                                </div>
                            </div>
                            <div class="col-11">
                                <div class="fs-6 text-secondary">
                                    <?php echo $value['name']; ?>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <?php
                }
                else
                {
                ?>
                <div class="col-12">
                    <button
                        class="btn border-0 rounded-0 shadow-none w-100 text-start py-2 px-3 rn-sidemenu-hover"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                        data-bs-target="<?php echo "#collapse_".$key; ?>"
                        aria-controls="<?php echo "collapse_".$key; ?>">
                        <div class="row g-0 align-items-center">
                            <div class="col-1">
                                <div class="fs-6 text-secondary opacity-50">
                                    <i class="<?php echo $value['icon']; ?>"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="fs-6 text-secondary">
                                    <?php echo $value['name']; ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="text-end fs-7 text-secondary">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </button>
                    <div class="collapse" id="<?php echo "collapse_".$key; ?>">
                        <div class="px-3">
                            <?php 
                            foreach ($value["submenu"] as $key2 => $item)
                            {
                            ?>
                            <div class="row align-items-center g-0">
                                <div class="col-1">
                                    <div class="fs-7 text-secondary text-center">
                                        -
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a
                                        href="<?php echo $item["link"]; ?>"
                                        class="d-block py-1 fs-7 text-decoration-none rn-side-submenu-hover">
                                        <?php echo $item["name"]; ?>
                                    </a>
                                </div>
                            </div>
                            <?php   
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php   
                }   
            }
            ?>
        </div>
        <div class="py-4">
            <div class="border-top py-2">
                <button
                    onclick="window.open('/', '_self');"
                    class="btn border-0 rounded-0 shadow-none w-100 text-start py-2 px-3 rn-sidemenu-hover">
                    <div class="row g-0 align-items-center">
                        <div class="col-1">
                            <div class="fs-6 text-secondary opacity-50">
                                <i class="fas fa-power-off"></i>
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="fs-6 text-secondary">
                                Logout
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
