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
                            <a href="#" class="custom-font-style-text custom-text-grey">Assessments /</a>
                            <span class="custom-font-style-text custom-text-primary">Demo-LR Shayan</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 p-5">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <span class="custom-font-style-headings custom-text-primary">Steps</span>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <?php include './includes/progress-bar.php' ?>
                                        </div>
                                    </div>

                                    <div class="row mt-35">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="custom-bg-light-pale custom-border-radius-15 custom-border-color-pale h-100 p-5">
                                                <span class="custom-font-style-subheadings custom-text-primary d-block mb-1">Step 3: Indicator & Metrics</span>
                                                <!-- <span class="steps-default-text steps-small-text d-block my-5">View Instructions</span> -->
                                                <span data-toggle="collapse" data-target="#demo" class="custom-font-style-subtext custom-text-primary d-block my-5 custom-cursor-pointer">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    <p class="custom-font-style-subtext custom-text-primary">
                                                        Select applicable and optional indicators. Then, select applicable and optional metrics that provide the measurement of the indicators. Optionally, create custom indicators and metrics.

                                                        LandScale guidance provides directions for determining which indicators are required and which are optional. This step may be revisited after data screening and evaluation in step 4 if certain metrics and indicators have been determined to be data deficient and, therefore, deferred to a later assessment when data may become available.

                                                        You may assign indicators and metrics tasks to team members below as overall leads for these tasks but to assign leads to specific areas of the framework you must first navigate to the appropriate pillar and goal on the following screens.
                                                    </p>
                                                </div>
                                                <span class="custom-bg-primary p-2 custom-border-radius-4 d-inline-block mt-1">
                                                    <span class="custom-font-style-small custom-text-light-pale">Pillars Completed</span>
                                                    <span class="custom-font-style-small custom-bg-warning custom-text-primary p-1 custom-border-radius-4">2/4</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom-padding-0 pl-0 pr-0">
                                            <div class="card-wrapper h-100 p-5">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale custom-border-radius-15 text-center h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-reference-library icn-3x"></i>
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Reference Library
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-image-gallery icn-3x"></i>
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Image Galary
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-help icn-3x"></i>
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Need Help
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-5-res" style="margin-top: 20px;">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-phone-book icn-3x"></i>

                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Current Plan
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-team icn-3x"></i>
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Our Team
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-hand-shake icn-3x"></i>
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Partners
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-15">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="custom-bg-light-pale p-10">
                                                <span class="custom-font-style-subheadings custom-text-primary d-block mb-1">Progress report</span>
                                                <p class="custom-font-style-subtext custom-text-primary d-block my-5">You are encouraged to submit your indicators & metrics once the 4 pillars are completed. Select the completed pillars and send them for approval.</p>
                                                <table class="table table-vertical-center steps-table-radius custom-step-table-radius steps-custom-margin-top border-custom">
                                                    <thead class="steps-table-header-color">
                                                        <tr>
                                                            <th class="custom-font-style-subheadings custom-text-primary" scope="col">Pillars</th>
                                                            <th class="custom-font-style-subheadings custom-text-primary" scope="col">Indicators & Metrics</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white">
                                                        <tr>
                                                            <td>Ecosystems</td>
                                                            <td><span class="custom-bg-light-pale custom-font-style-xs custom-text-primary p-1">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Human Well-Being</td>
                                                            <td><span class="custom-bg-light-blue custom-font-style-xs custom-text-primary p-1">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Governance</td>
                                                            <td><span class="custom-bg-light-yellow custom-font-style-xs custom-text-primary p-1">Under review</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom-display-none">
                                            <table class="table table-vertical-center steps-task steps-table-radius custom-step-table-radius border-custom">
                                                <thead class="steps-table-header-color">
                                                    <tr>
                                                        <th class="custom-font-style-subheadings custom-text-primary" scope="col">Tasks</th>
                                                        <th class="custom-font-style-subheadings custom-text-primary w-200px">Assigned To</th>
                                                        <th class="custom-font-style-subheadings custom-text-primary" scope="col">Tasks Type</th>
                                                        <th class="custom-font-style-subheadings custom-text-primary" scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    <tr>
                                                        <td><a href="./add_indicator.php">Add Indicators</a></td>
                                                        <td>
                                                            <div class="steps-image-container">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="accordian-unit-image-1" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="accordian-unit-image-2" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="accordian-unit-image-3" alt="">
                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="custom-bg-cyan custom-font-style-xs text-light p-1">Required</span></td>
                                                        <td><span class="custom-bg-light-pale custom-font-style-xs custom-text-primary p-1">Completed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="./add_metrices.php">Add Metrics</a></td>
                                                        <td>
                                                            <div class="steps-image-container">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="accordian-unit-image-1" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="accordian-unit-image-2" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="accordian-unit-image-3" alt="">
                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="custom-bg-cyan custom-font-style-xs text-light p-1">Required</span></td>
                                                        <td><span class="custom-bg-light-pale custom-font-style-xs custom-text-primary p-1">Completed</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row steps-custom-margin-top custom-lg-display-block">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="custom-bg-light-pale custom-border-color-pale custom-border-radius-15 my-2 py-2 text-center custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1"><a href="./add_indicator.php">Add Indicators</a></span>
                                                <div class="d-flex justify-content-center">
                                                    <div class="steps-image-container" style="margin-right: 100px;">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="accordian-unit-image-1" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="accordian-unit-image-2" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="accordian-unit-image-3" alt="">
                                                        <span class="step-unit-counter d-inline-block">6+</span>
                                                        <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center flex-column align-items-center">
                                                    <span class="custom-bg-cyan text-light px-3 py-2 custom-font-style-xs p-1 w-25 custom-border-radius-4 mt-2">Required</span>
                                                    <span class="custom-bg-light-yellow custom-text-primary custom-font-style-xs custom-border-radius-4 px-3 py-2 p-1 w-25 mt-2">Completed</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 steps-custom-margin-top">
                                            <div class="custom-bg-light-pale custom-border-color-pale custom-border-radius-15 my-2 py-2 text-center custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1"><a href="./add_metrices.php">Add Metrics</a></span>
                                                <div class="d-flex justify-content-center">
                                                    <div class="steps-image-container" style="margin-right: 100px;">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="accordian-unit-image-1" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="accordian-unit-image-2" alt="">
                                                        <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="accordian-unit-image-3" alt="">
                                                        <span class="step-unit-counter d-inline-block">6+</span>
                                                        <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center flex-column align-items-center">
                                                    <span class="custom-bg-cyan text-light px-3 py-2 custom-font-style-xs p-1 w-25 custom-border-radius-4 mt-2">Required</span>
                                                    <span class="custom-bg-light-yellow custom-text-primary custom-font-style-xs custom-border-radius-4 px-3 py-2 p-1 w-25 mt-2">Completed</span>
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
    <div class="btn-help-center-wrapper custom-cursor-pointer">
        <div class="btn-dropdown btn-lg mr-1 d-flex align-items-center" id="kt_quick_cart_toggle">
            <span class="btn-help-icon">
                <i class="icn-question icn-3x mt-2 mx-2"></i>
            </span>
            <span class="btn-help-toggle custom-font-style-sub-text p-6 bg-light d-none">
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
    </script>
</body>
<!--end::Body-->

</html>