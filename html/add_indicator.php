<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="Layout options builder">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!-- End Google Tag Manager -->
    <title>Landscale</title>
    <link rel="canonical" href="https://keenthemes.com/metronic">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link rel="stylesheet" href="../assets/plugins/global/plugins.bundle.css">
    <link rel="stylesheet" href="../assets/plugins/custom/prismjs/prismjs.bundle.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.bundle.css"> -->
    <link rel="stylesheet" href="../assets/css/updated.bundle.css">
    <link rel="stylesheet" href="../assets/css/icons.bundle.css">
    <link rel="stylesheet" href="../assets/css/form-wizard.css">
    <link rel="stylesheet" href="../assets/plugins/custom/datatables/datatables.bundle.css">

    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize page-loading body-bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="/metronic/demo1/index.html">
            <img alt="Logo" src="../assets/media/landscale_logo.png">
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <?php include './includes/aside.php'; ?>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <?php include './includes/topbar.php'; ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="container">
                        <div class="py-5">
                            <a href="#" class="font-text text-secondary">Assessments /</a>
                            <a href="./indicator_metrices.php" class="font-text text-secondary">Step 3 /</a>
                            <span class="font-text text-primary">Add Indicator</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 p-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-12 text-center">
                                                <?php include './includes/updated-progressbar.php' ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-25">
                                            <span class="font-heading text-primary">Step 3: Indicator & Metrics</span>
                                        </div>
                                    </div>

                                    <div class="row mt-7 mb-7">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="bg-light-primary br-15 border-color-pale h-100 p-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <span class="font-subheading text-primary d-inline-block mr-2">Indicator selection</span>
                                                        <span class="bg-primary font-xs text-light-primary br-4 p-1">Approved</span>
                                                    </div>
                                                    <a href="./add_metrices.php" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">Select Metrics</a>
                                                    <!-- <a href="./add_metrices.php" class="bg-success br-35 text-primary font-small p-2">Select Metrics</a> -->
                                                </div>
                                                <!-- <span class="steps-default-text steps-small-text d-block my-5">View Instructions</span> -->
                                                <span data-toggle="collapse" data-target="#demo" class="custom-font-style-subtext text-primary d-block my-5 cursor-pointer">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    <p class="custom-font-style-subtext text-primary">
                                                        Below you will find the indicators of Ecosystems pillar of the LandScale framework. The Applicability indicates whether the indicator is required to meet the full LandScale requirements or is optional (see guidance for a complete description and explanation of each indicator). Action is required for each indicator. For Landscape-dependent indicators you must determine applicability to your landscape (see guidance). For Core indicators these are required in all landscapes but you may defer these due to data deficiency (as determined in Step 4) or for other reasons that you document. Optional indicators should be marked as included or excluded. Actions to defer, include, or not include are done using the toggle in the Select column below.
                                                    </p>
                                                </div>
                                                <span class="font-text font-weight-bold text-primary d-inline-block">
                                                    Notice
                                                </span>
                                                <p class="font-subtext text-primary">
                                                    The LandScale team
                                                    are validating your step. Please wait
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom-padding-0 pl-0 pr-0">
                                            <div class="card-wrapper h-100 p-5">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-light-primary br-15 text-center h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-reference-library icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Reference Library
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-image-gallery icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Image Galary
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-help icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Need Help
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-5-res" style="margin-top: 20px;">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-phone-book icn-3x"></i>

                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Current Plan
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-team icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Our Team
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-hand-shake icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Partners
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row mt-7">
                                        <div class="col-md-12 pl-0 pl-sm-4 pb-sm-4">
                                            <div class="d-flex justify-content-between">
                                                <a class="bg-primary br-35 px-5 py-2 align-items-center" data-toggle="modal" data-target="#myModal">
                                                    <span><img src="../assets/media/circle_add_icon.png" alt=""></span>
                                                    <span class="text-light">Create Custom Pillar</span>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header steps-table-header-color">
                                                    <h4 class="modal-title indicator-tab-link">Modal Heading</h4>
                                                    <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    Modal body..
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer p-2">
                                                    <button type="button" class="btn indicator-btn-dark text-light" data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row border-color-pale br-15 m-sm-0">
                                        <div class="col-md-3 col-sm-12 col-xs-12 pr-0 mt-7 max-w-20-percent" id="inner-side-nav">
                                            <!-- <div class="font-subheading text-primary p-5">
                                                Custom Pillars
                                            </div> -->
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="main-menu nav-link indicator-tab-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icn-bg-dark">
                                                            <i class="icn-ecosystem-main icn-pale"></i>
                                                        </span>
                                                        <!-- <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Main_icon/Icons_Tier_1_Ecosystems_Pale_Green.png" class="deactive d-none" style="width: 30px;" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Main_icon/Icons_Tier_1_Ecosystems_Dark_Green.png" class="active" style="width: 30px;" alt=""> -->
                                                        <span class="inner-nav-text ml-5">
                                                            Ecosystems
                                                        </span>
                                                    </div>
                                                    <div class="sub-menu-hover brt-50 brb-50">
                                                        <span class="d-flex align-items-center h-100">
                                                            Ecosystems
                                                        </span>
                                                    </div>
                                                </a>
                                                <a class="main-menu nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Main_icon/Icons_Tier_1_Human_Wellbeing_Pale_Green.png" style="width: 30px;" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Main_icon/Icons_Tier_1_Human_Wellbeing_Dark_Green.png" class="d-none" style="width: 30px;" alt=""> -->

                                                        <span class="icn-bg-pale">
                                                            <i class="icn-wellbeing-main"></i>
                                                        </span>
                                                        <span class="inner-nav-text ml-5">
                                                            Human Well-being
                                                        </span>
                                                    </div>
                                                    <div class="sub-menu-hover brt-50 brb-50">
                                                        <span class="d-flex align-items-center h-100">
                                                            Human Well-being
                                                        </span>
                                                    </div>
                                                </a>
                                                <a class="main-menu nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icn-bg-pale">
                                                            <i class="icn-governance-main"></i>
                                                        </span>
                                                        <span class="inner-nav-text ml-5">
                                                            Governance
                                                        </span>
                                                    </div>
                                                    <div class="sub-menu-hover brt-50 brb-50">
                                                        <span class="d-flex align-items-center h-100">
                                                            Governance
                                                        </span>
                                                    </div>
                                                </a>
                                                <a class="main-menu nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icn-bg-pale">
                                                            <i class="icn-production-main"></i>
                                                        </span>
                                                        <span class="inner-nav-text ml-5">
                                                            Production
                                                        </span>
                                                    </div>
                                                    <div class="sub-menu-hover brt-50 brb-50">
                                                        <span class="d-flex align-items-center h-100">
                                                            Production
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-center mt-5 mb-5">
                                                <a class="c-btn-primary c-btn-md d-flex justify-content-center align-items-center cursor-pointer" data-toggle="modal" data-target="#myModal">
                                                    <i class="icn-circle-plus"></i>
                                                    <span class="text-light ml-1" id="piller-create">Create Custom Pillar</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 bg-light-primary btrr-15 bbrr-15 max-w-80-percent btlr-15-res bblr-15-res" id="inner-side-main">
                                            <div class="d-flex justify-content-between mt-5 mr-5">
                                                <button class="ml-5 bg-transparent border-0 br-15  p-2" onclick="toggleAside()">
                                                    <i class="icn-menu icn-2x mt-3"></i>
                                                </button>
                                                <a class="c-btn-primary c-btn-md d-flex justify-content-center align-items-center cursor-pointer">
                                                    <i class="icn-circle-plus"></i>
                                                    <span class="text-light pl-1">Add Custom Goal</span>
                                                </a>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left card-accordian" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                1.1 Conserve and restore natural ecosystems
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.1.1 Effective conservation and protection of natural ecosystems</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                    <!-- <div>
                                                                                        <span class="steps-tags-text deffered-tag p-2" style="margin-right: -4px;">Deffered</span>
                                                                                        <span class="steps-tags-text included-tag p-2">Included</span>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.1.2 Natural ecosystem conversion</td>
                                                                                <td>
                                                                                    <div class="d-flex flex-column">
                                                                                        <span class="text-center steps-dependent-tag p-1">Landscape Dependent</span>
                                                                                        <span class="text-center steps-not-applicable-tag p-1">Not Applicable</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.1.4 Ecosystem restoration</td>
                                                                                <td><span class="bg-secondary text-light font-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-two icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                1.2 Protect and restore biodiversity
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.2.1 Threats to species</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.2 Biodiversity habitat conversion</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.3 Biodiversity habitat degradation</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-3">
                                                                <div class="btn btn-block text-left collapsed card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-three icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                1.3 Maintain and enhance ecosystem services
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.2.1 Threats to species</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.2 Biodiversity habitat conversion</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.3 Biodiversity habitat degradation</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left card-accordian" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-wellbeing-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                2.1 Improve standard of living, especially for vulnerable and/or marginalized groups
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>2.1.1 Household income & assets</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                    <!-- <div>
                                                                                        <span class="steps-tags-text deffered-tag p-2" style="margin-right: -4px;">Deffered</span>
                                                                                        <span class="steps-tags-text included-tag p-2">Included</span>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.1.2 Health & nutrition</td>
                                                                                <td>
                                                                                    <div class="d-flex flex-column">
                                                                                        <span class="text-center steps-dependent-tag p-1">Landscape Dependent</span>
                                                                                        <span class="text-center steps-not-applicable-tag p-1">Not Applicable</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.1.3 Education</td>
                                                                                <td><span class="bg-secondary text-light font-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-wellbeing-goal-two icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                2.2 Respect, protect, and fulfill human rights
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>2.2.1 Child labor</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.2.2 Women’s rights</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.2.3 Indigenous peoples’ and other marginalized groups’ right</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left card-accordian" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-governance-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                3.1 Recognize and protect rights to land and resources, and reduce related conflicts
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>3.1.1 Land tenure</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                    <!-- <div>
                                                                                        <span class="steps-tags-text deffered-tag p-2" style="margin-right: -4px;">Deffered</span>
                                                                                        <span class="steps-tags-text included-tag p-2">Included</span>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.1.2 Land conflicts</td>
                                                                                <td>
                                                                                    <div class="d-flex flex-column">
                                                                                        <span class="text-center steps-dependent-tag p-1">Landscape Dependent</span>
                                                                                        <span class="text-center steps-not-applicable-tag p-1">Not Applicable</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.1.3 Resource tenure</td>
                                                                                <td><span class="bg-secondary text-light font-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-governance-goal-two icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                3.2 Promote transparency, participation, inclusion, and coordination in landscape policy, planning, and management
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>3.2.1 Land-use plan adoption & enforcement</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.2.2 Coordination of government agencies in land-use policy</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.2.3 Stakeholder participation and inclusion in land-use policy</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left card-accordian" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-production-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                4.1 Promote regenerative, agricultural, agroforestry, and tree production systems
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>4.1.1 Agricultural, agroforestry & tree plantation productivity</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                    <!-- <div>
                                                                                        <span class="steps-tags-text deffered-tag p-2" style="margin-right: -4px;">Deffered</span>
                                                                                        <span class="steps-tags-text included-tag p-2">Included</span>
                                                                                    </div> -->
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4.1.2 Input use efficiency in agricultural</td>
                                                                                <td>
                                                                                    <div class="d-flex flex-column">
                                                                                        <span class="text-center steps-dependent-tag p-1">Landscape Dependent</span>
                                                                                        <span class="text-center steps-not-applicable-tag p-1">Not Applicable</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4.1.3 Adoption of sustainable land management practices</td>
                                                                                <td><span class="bg-secondary text-light font-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-production-goal-two icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100">
                                                                                4.2 Promote sustainability of other natural resource-based production sectors
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                            <?php include './includes/assign-person.php' ?>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center table-dark-pale p-table-15">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Indicator</th>
                                                                                <th class="font-text" scope="col">Applicability</th>
                                                                                <th class="font-text w-125px" scope="col">Select</th>
                                                                                <th class="font-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>4.2.1 User-defined indicator(s)</td>
                                                                                <td><span class="bg-primary text-light-primary font-xs br-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 swt-btn" id="swt-btn">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="font-weight-bolder pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="c-btn-primary c-btn-md justify-content-center d-flex align-items-center cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="text-light pl-1">Add Custom Indicator</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
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
                        </div>

                    </div>
                    <!--end::Subheader-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin help center btn-->
    <div class="btn-help-center-wrapper cursor-pointer">
        <div class="btn-dropdown btn-lg mr-1 d-flex align-items-center" id="kt_quick_cart_toggle">
            <span class="btn-help-icon">
                <i class="icn-question icn-3x mt-2 mx-2"></i>
            </span>
            <span class="btn-help-toggle font-text p-6 bg-light d-none">
                Help Center
            </span>
        </div>
    </div>
    <!-- end help center btn -->
    <!-- begin help panel cart -->
    <?php include './includes/help-center.php'; ?>
    <!-- end help panel cart -->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/plugins/custom/prismjs/prismjs.bundle.js"></script>

    <script src="../assets/js/updated.bundle.js"></script>
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        // $(document).on('click', '#kt_aside_toggle', function() {
        //     var src = $('.brand-logo').find('img').attr('src');
        //     if (src.indexOf('landscale_icon.svg') != -1) {
        //         src = src.replace('landscale_icon.svg', 'landscale_logo.png');
        //     } else {
        //         src = src.replace('landscale_logo.png', 'landscale_icon.svg');
        //     }
        //     $('.brand-logo').find('img').attr('src', src);
        // });
        $(document).on('click', '#kt_aside_toggle', function() {
            if (!$('#kt_body').hasClass('aside-minimize')) {
                $('#menu_open_img').removeClass('d-none');
                $('#menu_close_img').addClass('d-none');
            } else {
                $('#menu_open_img').addClass('d-none');
                $('#menu_close_img').removeClass('d-none');
            }
        });
        $(document).on('mouseenter', '#kt_aside_menu .hover-menu', function() {
            if ($(this).find('.menu-text').css('display') != 'none') {
                $(this).parent().find('.menu-submenu').removeClass('brt-50');
                $(this).parent().find('.menu-subnav').removeClass('brt-50');
            } else {
                $(this).parent().find('.menu-submenu').addClass('brt-50');
                $(this).parent().find('.menu-subnav').addClass('brt-50');
            }
        });

        // active nav link
        $('.nav-link').on('click', function() {
            let prevActiveLink = $(this).siblings(".active");
            let darkBg = prevActiveLink.find('.icn-bg-dark');
            let currentLink = $(this).find('.icn-bg-pale');
            darkBg.addClass('icn-bg-pale')
            darkBg.removeClass('icn-bg-dark')
            darkBg.find('i').removeClass('icn-pale')
            currentLink.addClass('icn-bg-dark')
            currentLink.removeClass('icn-bg-pale')
            currentLink.find('i').addClass('icn-pale')
        });

        $(document).ready(function() {

            var strHash = document.location.hash;

            if (strHash !== "") {
                let prevInvisibleImg = $(".nav-pills").find('.nav-link.active').find('img.d-none');
                let prevVisibleImg = prevInvisibleImg.siblings('img');
                let currentInvisibleImg = $(strHash + '-tab').find('img.d-none');
                let currentVisibleImg = currentInvisibleImg.siblings('img');
                prevInvisibleImg.toggleClass('d-none');
                prevVisibleImg.toggleClass('d-none');
                currentInvisibleImg.toggleClass('d-none');
                currentVisibleImg.toggleClass('d-none');
                $(".nav-pills").find('.nav-link.active').removeClass('active')
                $(strHash + '-tab').addClass('active')
                $(".tab-content").find('.tab-pane.show.active').removeClass('show active')
                $(strHash).addClass('show active')
            }

            $('[data-toggle="collapse"]').click(function() {
                $(this).find('.fas').toggleClass('fa-chevron-down fa-chevron-up');
            });

        });

        $(".btn-help-center-wrapper").mouseenter(function() {
            $(".btn-help-center-wrapper").find('.btn-help-toggle').removeClass('d-none')
            $(".btn-help-center-wrapper").find('.btn-help-toggle').addClass('d-flex align-self-center')
        });

        $(".btn-help-center-wrapper").mouseleave(function() {
            $(".btn-help-center-wrapper").find('.btn-help-toggle').addClass('d-none')
            $(".btn-help-center-wrapper").find('.btn-help-toggle').removeClass('d-flex align-self-center')
        });

        $(".menu-submenu").mouseenter(function() {
            $(this).parent('.menu-item').find('.menu-toggle').addClass('side-icon-bg-dark');
        });

        $(".menu-submenu").mouseleave(function() {
            let element = $(this).parent('.menu-item').find('.menu-toggle');
            element.removeClass('side-icon-bg-dark');
        });

        $('.accordian-header-click').on('click', function() {

            let headerId = $(this).attr('id');
            if ($('#' + headerId + '-header').hasClass('d-none')) {
                $('#' + headerId + '-header').removeClass('d-none');
            } else {
                $('#' + headerId + '-header').addClass('d-none');
            }

            if ($(this).parent().hasClass('indicator-border-top-15')) {
                $(this).parent().removeClass('indicator-border-top-15');
            } else {
                $(this).parent().addClass('indicator-border-top-15');
            }
        })

        // side menu toggle
        function toggleAside() {
            if ($('#inner-side-nav').hasClass('max-w-5-percent')) {
                $('#inner-side-nav').removeClass('max-w-5-percent');
                $('#inner-side-nav').addClass('max-w-20-percent');
                $('#inner-side-nav').find('.inner-nav-text').toggle('d-none');
                $('#piller-create').removeClass('d-none');
                $('#inner-side-main').removeClass('max-w-95-percent');
                $('#inner-side-main').addClass('max-w-80-percent');
            } else {
                $('#inner-side-nav').addClass('max-w-5-percent');
                $('#inner-side-nav').removeClass('max-w-20-percent');
                $('#inner-side-nav').find('.inner-nav-text').toggle('d-none');
                $('#piller-create').addClass('d-none');
                console.log('dd');
                $('#inner-side-main').addClass('max-w-95-percent');
                $('#inner-side-main').removeClass('max-w-80-percent');
            }

        }
    </script>
</body>
<!--end::Body-->

</html>