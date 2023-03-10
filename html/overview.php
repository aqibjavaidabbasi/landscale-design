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
            <!-- <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button> -->
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
            <?php include './includes/aside.php'; ?>
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
                            <a href="#" class="font-text text-secondary">Assessment /</a>
                            <span class="font-text text-primary">New Assessment</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100">
                                    <div class="row mt-9">
                                        <div class="col-md-12 text-center">
                                            <h4 class="font-heading text-primary">Assessment registration of New assessment</h4>
                                        </div>
                                    </div>

                                    <div class="row mt-10">
                                        <div class="col-md-12">
                                            <div class="form-progress-container">
                                                <div class="form-progress-bar">
                                                    <div class="step-indicators">
                                                        <div class="step-indicator active">
                                                            <span class="form-step-number active"></span>
                                                            <span class="form-step-text">
                                                                Overview
                                                            </span>
                                                        </div>
                                                        <div class="step-indicator">
                                                            <span class="form-step-number"></span>
                                                            <span class="form-step-text">
                                                                Objective
                                                            </span>
                                                        </div>
                                                        <div class="step-indicator">
                                                            <span class="form-step-number"></span>
                                                            <span class="form-step-text">
                                                                Boundary
                                                            </span>
                                                        </div>
                                                        <div class="step-indicator">
                                                            <span class="form-step-number"></span>
                                                            <span class="form-step-text">
                                                                Payment
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                                <div class="col-xl-12">
                                                    <!--begin: Wizard Form-->
                                                    <form class="form m-5">
                                                        <!--begin: Wizard Step 1-->
                                                        <div class="p-10 border-color-pale br-15">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="font-subheading text-primary">Overview</span>
                                                                <button class="c-btn-success c-btn-md d-flex align-items-center justify-content-center">
                                                                    <span class="d-inline-block mx-2 mt-1">
                                                                        <i class="icn-book icn-2x"></i>
                                                                    </span>
                                                                    <span class="mr-2">
                                                                        Open Guidelines
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="col-md-12">
                                                                    <div class="border-color-pale br-15 p-5">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="ml-1 p-5">
                                                                                    <label for="landscape_name" class="font-text text-primary d-inline">Landscape name*</label>
                                                                                    <input type="text" id="landscape_name" class="form-control bg-light-primary outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name">
                                                                                    <span class="font-small text-primary">This can either be the official name of the jurisdiction, catchment area, or region, or also the name of the initiative behind the assessment.</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                                                <div class="ml-1 p-5">
                                                                                    <label for="exampleFormControlSelect1" class="font-text text-primary d-inline">Country*</label>
                                                                                    <div class="select-wrapper mt-4 mb-2">
                                                                                        <select class="form-control bg-primary text-light" id="exampleFormControlSelect1">
                                                                                            <option>None Selected</option>
                                                                                            <option>Selected</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <span class="font-small text-primary">Country where the landscape is located.</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-5">
                                                                <div class="col-md-12">
                                                                    <div class="border-color-pale br-15 p-5">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="ml-1 px-5 d-flex justify-content-between align-items-center">
                                                                                    <div class="font-subheading text-primary">
                                                                                        <span>
                                                                                            Add Municipalities Of Your Landscape
                                                                                        </span>
                                                                                    </div>
                                                                                    <button class="c-btn-primary c-btn-sm d-flex align-items-center justify-content-center">
                                                                                        <span class="d-inline-block">
                                                                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M1.07324 8.44254C1.07775 4.32039 4.40376 1.0079 8.53324 1.00001C12.5889 0.992122 16 4.24883 16 8.47128C16 12.5901 12.6345 16.0186 8.31462 15.8868C4.11978 15.7583 1.07324 12.4278 1.07324 8.44254ZM8.52197 15.0557C12.1968 15.0591 15.1419 12.1787 15.1672 8.49551C15.192 4.83819 12.2244 1.87673 8.57437 1.85645C4.9441 1.8356 1.94207 4.78748 1.93193 8.44592C1.92235 11.9748 4.72605 15.0934 8.52197 15.0557Z" fill="white" stroke="white" stroke-width="0.2"></path>
                                                                                                <path d="M8.10782 10.8524C8.10782 10.2985 8.09599 9.74466 8.11345 9.19192C8.12078 8.95415 8.07232 8.87245 7.81145 8.87639C6.71386 8.8933 5.61514 8.88372 4.51699 8.88372C4.43247 8.88372 4.34739 8.88766 4.264 8.88034C3.99073 8.85611 3.84086 8.70004 3.8448 8.45099C3.84875 8.21548 3.99524 8.06616 4.2533 8.03968C4.33725 8.03123 4.42177 8.03461 4.50629 8.03461C5.61402 8.03461 6.72118 8.02898 7.82891 8.03912C8.04302 8.04081 8.11571 7.99517 8.11345 7.76528C8.10049 6.64854 8.10782 5.53179 8.10782 4.41561C8.10782 4.33109 8.105 4.24601 8.11514 4.16262C8.14557 3.91076 8.30502 3.76596 8.54392 3.77385C8.78846 3.7823 8.92087 3.91809 8.94904 4.15586C8.95975 4.24883 8.95749 4.34293 8.95749 4.43702C8.95806 5.54419 8.96369 6.65135 8.95299 7.75852C8.95073 7.97657 9.0037 8.0425 9.22964 8.04024C10.3368 8.02785 11.4445 8.03461 12.5523 8.03461C12.6368 8.03461 12.7219 8.03066 12.8053 8.03855C13.0785 8.06334 13.2261 8.21886 13.2216 8.47015C13.2171 8.70962 13.0757 8.85386 12.8126 8.87921C12.7286 8.8871 12.6435 8.88372 12.5596 8.88372C11.4614 8.88372 10.3633 8.89104 9.26513 8.87809C9.02623 8.87527 8.94735 8.92147 8.95073 9.18065C8.96707 10.325 8.95749 11.4699 8.95806 12.6148C8.95806 12.8549 8.9158 13.0718 8.63689 13.1343C8.32475 13.2048 8.11458 13.0177 8.11064 12.6537C8.10331 12.0537 8.10782 11.453 8.10782 10.8524Z" fill="white" stroke="white" stroke-width="0.2"></path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="ml-1">Add More</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                    <label for="landscape_municipality" class="font-text text-primary d-inline">Municipality*</label>
                                                                                    <input type="text" id="landscape_municipality" class="form-control bg-light-primary outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Municipality">
                                                                                    <span class="font-small text-primary">Sub-national jurisdiction(s) (i.e: State, Department, Municipality).</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                    <label for="landscape_org" class="font-text text-primary d-inline">What is the name of the lead organization?*</label>
                                                                                    <input type="text" id="landscape_org" class="form-control bg-light-primary outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name of Organization">
                                                                                    <span class="font-small text-primary">Name of organizations responsible for LandScale design and assessment</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                    <label class="font-text text-primary d-inline">Is this a partnership?*</label>
                                                                                    <div>
                                                                                        <div class="custom-control custom-radio mt-3">
                                                                                            <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
                                                                                            <label class="custom-control-label green" for="rd_1">Yes</label>

                                                                                        </div>
                                                                                        <div class="custom-control custom-radio my-2">
                                                                                            <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
                                                                                            <label class="custom-control-label red" for="rd_2">No</label>
                                                                                        </div>
                                                                                        <div class="font-small text-primary mt-4">Please indicate if at this time the assessment will be carried out by a single entity or multi-partner initiative.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                    <label for="landscape_colead_org" class="font-text text-primary d-inline">Please name any co-lead organizations*</label>
                                                                                    <input type="text" id="landscape_colead_org" class="form-control bg-light-primary outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name of Co-Lead Organization">
                                                                                    <div class="font-small text-primary mt-5">Name of the co-lead organization responsible for LandScale design and assessment</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="mt-10 d-flex justify-content-end align-items-center custom-margin">
                                                                        <!-- <div class="assesment-responsive">
                                                                            <button type="button" id="back-btn" class="btn-grey c-btn-sm d-flex align-items-center justify-content-center" data-wizard-type="action-prev">
                                                                                Back
                                                                            </button>
                                                                        </div> -->
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="./objectives.php" id="next-btn" class="c-btn-primary c-btn-sm d-flex align-items-center justify-content-center">Next</a>
                                                                            <button type="submit" id="save-btn" class="c-btn-success c-btn-sm d-flex align-items-center justify-content-center ml-1">
                                                                                Save
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end: Wizard Form-->
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
    <!-- <script src="../assets/js/scripts.bundle.js"></script> -->
    <script src="../assets/js/updated.bundle.js"></script>
    <script src="../assets/js/form-wizard.js"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
    <script src="../assets/js/pages/features/maps/google-maps.js"></script>
    <script src="../assets/plugins/custom/gmaps/gmaps.js"></script>
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


        function redirectLink(pagelink) {
            if ($(window).width() < 992) {
                // Prevent the default action of the link
                location.href = '#'

                // Toggle the dropdown on click
                $(this).siblings('.sub-menu').toggle();
            } else {
                console.log('dede');
                location.href = pagelink;
            }
        }
    </script>

</body>
<!--end::Body-->

</html>