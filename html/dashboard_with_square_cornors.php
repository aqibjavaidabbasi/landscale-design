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
                            <a href="#" class="custom-font-style-text custom-text-grey">Explore Landscapes /</a>
                            <span class="custom-font-style-text custom-text-primary">Assessments</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card w-100 card w-100 h-100 p-8">
                                    <div class="custom-font-style-headings custom-text-primary">Demo-LR Shayan</div>
                                    <p class="custom-font-style-sub-text custom-text-primary my-5">This is your landscape dashboard. From here you can access your profile, the steps to conduct or update an assessment, the people involved in your assessment, and guidance.</p>
                                    <div class="custom-font-style-subheadings custom-text-primary my-5">
                                        Showcase Your Landscape
                                    </div>
                                    <p class="custom-font-style-sub-text custom-text-primary">Create, manage, and publish your landscape profile.</p>
                                    <a href="#" class="custom-bg-warning d-flex justify-content-center align-items-center mt-2 custom-w-35 custom-border-radius-3 px-5 py-2">
                                        <i class="icn-person"></i>
                                        <span class="custom-font-style-small font-weight-bold ml-3">
                                            Landscape Profile
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card w-100 h-100 d-flex justify-content-center mt-5-res">
                                    <div class="card-wrapper p-5">
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
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card w-100 p-8">
                                    <div class="custom-font-style-subheadings custom-text-primary">Steps</div>
                                    <div class="row p-8">
                                        <div class="col-12 col-sm-6 col-md mb-2 h-150px">
                                            <div class="p-5 custom-bg-light-pale custom-border-color-pale custom-border-radius-15 text-center h-100">
                                                <div class="mb-3 mt-3">
                                                    <i class="icn-file icn-3x"></i>
                                                </div>
                                                <span class="py-5">
                                                    Preparation
                                                </span>
                                                <div class="child-bottom">
                                                    <div class="d-flex justify-content-center my-4">
                                                        <div class="progress-line"></div>
                                                    </div>
                                                    <div>
                                                        <span class="custom-bg-warning custom-text-primary custom-border-radius-4 step-counter px-2 py-1">
                                                            6/6
                                                        </span>
                                                        <span class="custom-bg-primary custom-text-light-pale custom-font-style-sub-text custom-btrr-4 custom-bbrr-4 pr-4 pl-2 py-1">TASKS</span>
                                                    </div>
                                                </div>

                                                <div class="step-number custom-font-style-text-bolder">
                                                    1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md mb-2 h-150px">
                                            <div class="p-5 custom-bg-light-pale custom-border-color-pale custom-border-radius-15 text-center h-100">
                                                <div class="mb-3 mt-3">
                                                    <i class="icn-marker icn-3x"></i>
                                                </div>
                                                <span class="py-5">
                                                    Boundary
                                                </span>
                                                <div class="child-bottom">
                                                    <div class="d-flex justify-content-center my-4">
                                                        <div class="progress-line"></div>
                                                    </div>
                                                    <div>
                                                        <span class="custom-bg-warning custom-text-primary custom-border-radius-4 step-counter px-2 py-1">
                                                            6/6
                                                        </span>
                                                        <span class="custom-bg-primary custom-text-light-pale custom-font-style-sub-text custom-btrr-4 custom-bbrr-4 pr-4 pl-2 py-1">TASKS</span>
                                                    </div>

                                                </div>

                                                <div class="step-number custom-font-style-text-bolder">
                                                    2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md mb-2 h-150px">
                                            <div class="p-5 custom-bg-light-pale custom-border-color-pale custom-border-radius-15 text-center h-100">
                                                <div class="mb-3 mt-3">
                                                    <i class="icn-circut icn-3x"></i>
                                                </div>
                                                <a href="./indicator_metrices.php" class="py-5">
                                                    Indicator & Metrics
                                                </a>
                                                <div class="child-bottom">
                                                    <div class="d-flex justify-content-center my-4">
                                                        <div class="progress-line"></div>
                                                    </div>
                                                    <div>
                                                        <span class="custom-bg-warning custom-text-primary custom-border-radius-4 step-counter px-2 py-1">
                                                            6/6
                                                        </span>
                                                        <span class="custom-bg-primary custom-text-light-pale custom-font-style-sub-text custom-btrr-4 custom-bbrr-4 pr-4 pl-2 py-1">TASKS</span>
                                                    </div>
                                                </div>

                                                <div class="step-number custom-font-style-text-bolder">
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md mb-2 h-150px">
                                            <div class="p-5 custom-bg-light-pale custom-border-color-pale custom-border-radius-15 text-center h-100">
                                                <div class="mb-3 mt-3">
                                                    <i class="icn-chart icn-3x"></i>
                                                </div>
                                                <a href="./datatask_results.php" class="py-5">
                                                    Data & Results
                                                </a>
                                                <div class="child-bottom">
                                                    <div class="d-flex justify-content-center my-4">
                                                        <div class="progress-line"></div>
                                                    </div>
                                                    <div>
                                                        <span class="custom-bg-warning custom-text-primary custom-border-radius-4 step-counter px-2 py-1">
                                                            6/6
                                                        </span>
                                                        <span class="custom-bg-primary custom-text-light-pale custom-font-style-sub-text custom-btrr-4 custom-bbrr-4 pr-4 pl-2 py-1">TASKS</span>
                                                    </div>
                                                </div>

                                                <div class="step-number custom-font-style-text-bolder">
                                                    4
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md mb-2 h-150px">
                                            <div class="p-5 custom-bg-dark-grey custom-border-color-pale custom-border-radius-15 text-center h-100 locked-background">
                                                <div class="mb-3 mt-3">
                                                    <i class="icn-notepad icn-3x"></i>
                                                </div>
                                                <span class="py-5 custom-text-light-grey">
                                                    Report & Publish
                                                </span>
                                                <div class="child-bottom">
                                                    <div class="d-flex justify-content-center my-4">
                                                        <div class="progress-line progress-line-locked"></div>
                                                    </div>
                                                    <div>
                                                        <span class="custom-bg-dusty-grey custom-border-radius-4 step-counter px-2 py-1">
                                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.11447 13.9984C4.67472 13.9984 3.2353 14.0008 1.79555 13.9973C0.899112 13.9953 0.164208 13.3884 0.0306823 12.5453C0.0122413 12.4282 0.00916786 12.3073 0.00882637 12.1881C0.00746037 10.4929 0.0296578 8.797 0.000288908 7.10249C-0.017469 6.07219 0.785394 5.20922 1.8577 5.25396C2.19271 5.26796 2.52943 5.24542 2.86444 5.26079C3.03723 5.26864 3.06797 5.20922 3.06558 5.05111C3.05636 4.40841 3.05123 3.76537 3.06387 3.12267C3.0888 1.82942 3.67071 0.872537 4.83454 0.293698C6.36104 -0.465453 8.33524 0.309748 8.95608 1.8984C9.11556 2.30615 9.19376 2.72619 9.1924 3.16331C9.19069 3.80601 9.19615 4.44905 9.18864 5.09175C9.18693 5.2304 9.23065 5.26216 9.36144 5.25942C9.73094 5.25123 10.1011 5.25396 10.471 5.25703C11.4914 5.26557 12.2392 6.00355 12.243 7.02463C12.2495 8.75978 12.2485 10.4949 12.243 12.2301C12.2399 13.2419 11.4835 13.9939 10.4676 13.9977C9.01653 14.0025 7.5655 13.9984 6.11447 13.9984ZM6.11789 13.1228C7.54638 13.1228 8.97486 13.1088 10.403 13.1293C11.0297 13.1381 11.392 12.6734 11.3872 12.1382C11.3729 10.4601 11.3821 8.78164 11.3817 7.10317C11.3817 6.47994 11.0225 6.12 10.3948 6.11966C7.54945 6.11863 4.70409 6.11863 1.85872 6.11966C1.23071 6.12 0.872134 6.47755 0.871451 7.10249C0.870427 8.79222 0.870427 10.482 0.87111 12.172C0.871451 12.7574 1.23378 13.1221 1.81569 13.1224C3.24965 13.1228 4.68394 13.1224 6.11789 13.1228ZM6.10867 5.25601C6.79098 5.25601 7.4733 5.25225 8.15561 5.25942C8.2864 5.26079 8.31509 5.22357 8.31406 5.0979C8.30792 4.41012 8.31338 3.722 8.31065 3.03422C8.30587 1.83898 7.33192 0.88005 6.12711 0.88005C4.92299 0.88005 3.9463 1.84103 3.94152 3.03388C3.93879 3.72166 3.94425 4.40978 3.93811 5.09755C3.93708 5.2222 3.9644 5.26113 4.09588 5.25977C4.76658 5.25225 5.43762 5.25601 6.10867 5.25601Z" fill="#C3C8BD" />
                                                                <path d="M5.68513 11.115C5.68513 10.933 5.67933 10.751 5.68752 10.5696C5.6923 10.4661 5.66362 10.4105 5.56356 10.363C4.96798 10.0803 4.67532 9.40033 4.87783 8.78973C5.09161 8.14498 5.73055 7.77411 6.39886 7.90696C6.91384 8.00906 7.34823 8.46291 7.41858 8.97277C7.49951 9.55673 7.22461 10.1134 6.71987 10.3473C6.59249 10.4064 6.56312 10.4754 6.56586 10.6031C6.57405 10.9552 6.56176 11.3079 6.572 11.66C6.5761 11.7939 6.53136 11.8229 6.40842 11.8161C6.22709 11.8058 6.04405 11.8048 5.86305 11.8164C5.72611 11.8253 5.66942 11.7925 5.68138 11.6429C5.69606 11.4684 5.68513 11.2912 5.68513 11.115ZM6.12908 9.62913C6.3712 9.62811 6.57439 9.4215 6.56961 9.18143C6.56483 8.94306 6.3531 8.73919 6.1161 8.74465C5.88627 8.75011 5.68513 8.95536 5.68411 9.18587C5.6824 9.42662 5.8873 9.63016 6.12908 9.62913Z" fill="#C3C8BD" />
                                                            </svg>

                                                        </span>
                                                        <span class="custom-bg-grey custom-text-light-grey custom-btrr-4 custom-bbrr-4 pr-4 pl-2 py-1">Locked</span>
                                                    </div>
                                                </div>

                                                <div class="step-number custom-font-style-text-bolder">
                                                    5
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
        <div class="btn-dropdown btn-lg mr-1 d-flex" id="kt_quick_cart_toggle">
            <span class="btn-help-icon">
                <img src="../assets/media/help.png" alt="">
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
    <!-- <script src="../assets/js/scripts.bundle.js"></script> -->
    <script src="../assets/js/updated.bundle.js"></script>
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