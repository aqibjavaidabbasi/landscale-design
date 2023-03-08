<?php
$backgroundColor = 'background-color:#9ABF78;';
$iconBackgroundColor = 'background-color:#4c69a0 !important;';
$logoBorder = 'border: 2px solid #fff !important; padding: 5px;';
if ($_GET['v'] == 2) {
    $backgroundColor = 'background-color:#fff !important;';
}
if ($_GET['v'] == 3) {
    $backgroundColor = 'background-color:#F4F4EC !important;';
}
if ($_GET['v'] == 4) {
    $backgroundColor = 'background-color:#4C94A0 !important;';
}
if ($_GET['v'] == 5) {
    $backgroundColor = 'background-color:#fff !important;';
}
if ($_GET['v'] == 6) {
    $backgroundColor = 'background-color:#074A37 !important;';
    $iconBackgroundColor = 'background-color:#f4f3ec !important;';
    $logoBorder = 'border: none !important';
}
?>

<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto box-shadow-0" id="kt_aside" style="<?php echo $backgroundColor; ?>">
    <!--begin::Brand-->
    <div class="brand flex-column-auto primary-border-right primary-border-bottom" id="kt_brand">
        <!--begin::Logo-->
        <a href="../index.php" class="brand-logo">
            <img alt="Logo" id="menu_close_img" src="../assets/media/landscale_icon.svg" style="<?php echo $logoBorder; ?>">
            <img alt="Logo" id="menu_open_img" class="d-none" src="../../assets/media/logo/White/Landscale_Logo_White.png" width="220px" style="<?php echo $logoBorder; ?>">
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4 aside-menu-dropdown" data-menu-vertical="1" data-menu-dropdown="1" data-menu-scroll="0" data-menu-dropdown-timeout="500" style="<?php echo $backgroundColor; ?>">
            <!--begin::Menu Nav-->
            <div class="mob-resp">
                <div class="input-group custom-search-bar p-3">
                    <input type="text" class="form-control input-circle-left primary-bg-color outline-0 border-0" placeholder="search for anything">
                    <div class="input-group-append">
                        <span class="input-group-text input-circle-right primary-bg-color">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5517 0C9.74111 0.0465077 11.6163 0.864121 13.1088 2.51213C14.0713 3.57506 14.6741 4.82367 14.902 6.24304C15.2578 8.45837 14.7355 10.4493 13.3442 12.2095C13.2672 12.3068 13.28 12.354 13.363 12.4371C14.6834 13.751 16.0005 15.0685 17.3173 16.386C17.5942 16.6629 17.5995 17.0318 17.3339 17.3002C17.0599 17.5774 16.6896 17.5813 16.4059 17.2987C15.0867 15.9834 13.7695 14.6663 12.4549 13.3467C12.3747 13.2664 12.3313 13.2444 12.2302 13.3239C10.4302 14.7415 8.39274 15.2993 6.14297 14.8519C3.24245 14.2754 1.25966 12.5475 0.385246 9.7336C-0.535678 6.77096 0.210931 4.14416 2.44863 1.99522C3.85096 0.648268 5.58169 0.034082 7.5517 0ZM7.52294 1.2408C4.08101 1.24399 1.28948 4.03446 1.28274 7.47851C1.27635 10.9233 4.07888 13.724 7.53039 13.7219C10.9844 13.7198 13.7717 10.9258 13.766 7.4707C13.7607 4.02807 10.9645 1.2376 7.52294 1.2408Z" fill="#4C94A0"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" onclick="javascript:location.href='./index.php'" class="menu-link menu-toggle px-4 py-2 hover-menu text-center">
                        <span class="svg-icon-lg p-4 nav-icn rounded-circle bg-icon mr-5">
                            <i class="icn-assessment icn-2x"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text menu-text-opened">Assessments Dashboard</span>
                    </a>
                    <div class="menu-submenu bg-light-primary brt-50">
                        <i class="menu-arrow"></i>
                        <!-- menu-subnav py-0  brt-50 -->
                        <ul class="menu-subnav pt-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50 bg-primary h-58px" aria-haspopup="true">
                                <a href="./index.php" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Assessments Dashboard
                                </a>
                                <!-- <span class="menu-link p-5" style="height: auto!important;">
                                    <span class="menu-text m-1 text-light"><a href="./index.php" class="text-light">Assessments Dashboard</a></span>
                                </span> -->
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./admin_dashboard.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Admin Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./landscale_listing_dashboard.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Landscale Dashboard</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" onclick="javascript:location.href='./dashboard_with_square_cornors.php'" class="menu-link menu-toggle px-4 py-2 hover-menu text-center">
                        <span class="svg-icon-lg p-4 nav-icn rounded-circle bg-icon mr-5">

                            <i class="icn-stack icn-primary icn-2x"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text menu-text-opened">Assessments</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu bg-light-primary brt-50">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav pt-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50  bg-primary h-59px" aria-haspopup="true">
                                <a href="./dashboard_with_square_cornors.php" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Assessments
                                </a>
                                <!-- <span class="menu-link p-5" style="height: auto!important;">
                                    <span class="menu-text m-1 text-light"><a href="./dashboard_with_square_cornors.php" class="text-light">Assessments</a></span>
                                </span> -->
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./dashboard_with_square_cornors.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Assesment 01</span>
                                </a>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="./dashboard_with_square_cornors.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Assesment 04</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./dashboard_with_square_cornors.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Assesment 05</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" onclick="javascript:location.href='./favorite_asssesment.php'" class="menu-link menu-toggle px-4 py-2 hover-menu text-center">
                        <span class="svg-icon-lg nav-icn p-4 rounded-circle bg-icon mr-5">
                            <i class="icn-file-chart icn-2x"></i>
                        </span>
                        <span class="menu-text menu-text-opened">Explore Landscapes</span>
                    </a>
                    <div class="menu-submenu bg-light-primary brt-50">
                        <i class="menu-arrow"></i>

                        <ul class="menu-subnav pt-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50  bg-primary h-59px" aria-haspopup="true">
                                <a href="./favorite_asssesment.php" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Explore Landscapes
                                </a>
                                <!-- <span class="menu-link p-5" style="height: auto!important;">
                                    <span class="menu-text m-1 text-light"><a href="./favorite_asssesment.php" class="text-light">Explore Landscapes</a></span>
                                </span> -->
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./favorite_asssesment.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Landscapes</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./indicator_metrices.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Indicators & Metrices</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle px-4 py-2 hover-menu text-center" id="kt_quick_cart_toggle_link">
                        <span class="svg-icon-lg p-4 nav-icn rounded-circle bg-icon mr-5">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
                            <i class="icn-question icn-primary icn-2x"></i>


                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text menu-text-opened">Help Center</span>
                    </a>
                    <div class="menu-submenu bg-primary pb-0 mb-0 brt-50 brb-50">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav py-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50 bg-primary h-59px" aria-haspopup="true">
                                <a href="#" id="kt_quick_cart_toggle_span" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Help Center
                                </a>
                                <!-- <span class="menu-link p-5" style="height: auto!important;">
                                    <span class="menu-text m-1 text-light" id="kt_quick_cart_toggle_span"><a href="#" class="text-light">Help Center</a></span>
                                </span> -->
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" onclick="javascript:location.href='./html_theme.php'" class="menu-link menu-toggle px-4 py-2 hover-menu text-center">
                        <span class="svg-icon-lg p-4 nav-icn rounded-circle bg-icon mr-5">

                            <i class="icn-file icn-primary icn-2x"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text menu-text-opened">Documentation</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu bg-light-primary brt-50">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav pt-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50  bg-primary h-59px" aria-haspopup="true">
                                <a href="./html_theme.php" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Documentation
                                </a>
                                <!-- <span class="menu-link p-5" style="height: auto!important;">
                                    <span class="menu-text m-1 text-light"><a href="./html_theme.php" class="text-light">Documentation</a></span>
                                </span> -->
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="./icons.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./html_theme.php" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Components</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" onclick="javascript:location.href='./html_theme.php'" class="menu-link menu-toggle px-4 py-2 hover-menu text-center">
                        <span class="svg-icon-lg p-4 nav-icn rounded-circle bg-icon mr-5">

                            <i class="icn-file icn-primary icn-2x"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text menu-text-opened">Versions</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu bg-light-primary brt-50">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav pt-0  brt-50">
                            <li class="menu-item menu-item-parent brt-50 brb-50  bg-primary h-59px" aria-haspopup="true">
                                <a href="./updated_admin.php?v=1" class="menu-link p-5 text-light" style="height: auto!important;">
                                    Versions
                                </a>
                            </li>

                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=1" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 1</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=2" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 2</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=3" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 3</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=4" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 4</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=5" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 5</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="./updated_admin.php?v=6" class="menu-link">
                                    <i class="menu-bullet-dot mr-3">
                                        <span>
                                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.19995 1.42438L1.65276 1L5.39995 4.5L1.65276 8L1.19995 7.57781L4.49214 4.5L1.19995 1.42438Z" stroke="#3F544C" />
                                            </svg>

                                        </span>
                                    </i>
                                    <span class="menu-text">Version 6</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->