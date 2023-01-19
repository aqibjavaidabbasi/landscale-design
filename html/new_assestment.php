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
    <meta charset="utf-8" />
    <title>Landscale</title>
    <meta name="description" content="Layout options builder" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link rel="stylesheet" href="../assets/plugins/global/plugins.bundle.css">
    <link rel="stylesheet" href="../assets/plugins/custom/prismjs/prismjs.bundle.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.bundle.css"> -->
    <link rel="stylesheet" href="../assets/css/updated.bundle.css">
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
            <img alt="Logo" src="../assets/media/landscale_logo.png" />
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 rounded custom-padding-30">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4 class="assesment-heading assesment-heading-responsive">Assessment registration of New assessment</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--begin: Wizard-->
                                            <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                                                <!--begin: Wizard Nav-->
                                                <div class="wizard-nav">
                                                    <div class="wizard-steps px-8 py-8 px-lg-15 w-75 py-lg-3 margin-align">
                                                        <!--begin::Wizard Step 1 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                            <div class="wizard-label">
                                                                <h3 class="wizard-title">
                                                                    Overview
                                                                </h3>
                                                                <div class="wizard-bar"></div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 1 Nav-->

                                                        <!--begin::Wizard Step 2 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-label">
                                                                <h3 class="wizard-title">
                                                                    Objectives
                                                                </h3>
                                                                <div class="wizard-bar"></div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 2 Nav-->

                                                        <!--begin::Wizard Step 3 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-label">
                                                                <h3 class="wizard-title">
                                                                    Select Services
                                                                </h3>
                                                                <div class="wizard-bar"></div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 3 Nav-->

                                                        <!--begin::Wizard Step 4 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-label">
                                                                <h3 class="wizard-title">
                                                                    Delivery Address
                                                                </h3>
                                                                <div class="wizard-bar"></div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 4 Nav-->
                                                    </div>
                                                </div>
                                                <!--end: Wizard Nav-->

                                                <!--begin: Wizard Body-->
                                                <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10 assesment-custom-padding-0">
                                                    <div class="col-xl-12">
                                                        <!--begin: Wizard Form-->
                                                        <form class="form assesment-border m-5 custom-padding-40" id="kt_form">
                                                            <!--begin: Wizard Step 1-->
                                                            <div class="pb-5" data-wizard-type="step-content">
                                                                <div class="tab" style="display: block;">
                                                                    <div class="d-flex justify-content-between align-items-center overview-responsive">
                                                                        <span class="assesments-card-header overview-span-responsive">Overview</span>
                                                                        <button class="assesment-card-btn p-2" fdprocessedid="thqp8w">
                                                                            <span class="ml-2">
                                                                                <svg width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M27.9994 10.5537C27.9994 13.2391 27.9988 15.925 28 18.6104C28 18.9246 27.9883 19.237 27.8938 19.5387C27.6438 20.3366 26.9698 20.7845 25.9983 20.7857C23.5916 20.7889 21.185 20.7851 18.7783 20.7876C17.9043 20.7883 17.0303 20.8008 16.1563 20.8014C15.9371 20.8014 15.7273 20.8441 15.5199 20.8999C14.9637 21.0486 14.7582 21.2976 14.6934 21.8847C14.6502 22.2793 14.373 22.5703 14.0286 22.5829C13.6743 22.5954 13.3274 22.3433 13.3126 21.9468C13.2799 21.0542 12.6731 20.8855 11.9966 20.8108C11.6806 20.7763 11.3596 20.7807 11.0411 20.7801C8.0586 20.7782 5.07607 20.7751 2.09292 20.7814C1.44666 20.7826 0.875705 20.6339 0.429436 20.1227C0.0924191 19.7369 0.00291836 19.2759 0.00291836 18.7854C0.00106662 13.2999 -0.00201962 7.81319 0.00415285 2.32709C0.00538734 1.16288 0.792994 0.417053 1.98922 0.417053C4.01502 0.417053 6.04144 0.423326 8.06725 0.42709C9.0857 0.428971 10.1035 0.420817 11.122 0.434617C12.2003 0.449044 13.1768 0.726297 13.8792 1.63646C13.9731 1.75815 14.0292 1.72616 14.1138 1.62768C14.873 0.746997 15.8594 0.428971 16.9797 0.430853C19.9832 0.434617 22.9861 0.430853 25.9896 0.432735C27.2729 0.433362 27.9981 1.16915 27.9988 2.46634C28 5.16172 27.9994 7.85772 27.9994 10.5537ZM26.639 10.5826C26.639 7.8458 26.639 5.10903 26.6383 2.37225C26.6383 1.95951 26.5075 1.81524 26.1149 1.81524C22.9892 1.81335 19.8641 1.80708 16.7383 1.819C15.4995 1.82402 14.6854 2.68526 14.6847 3.94482C14.6835 9.06333 14.6841 14.1819 14.6841 19.3004C14.6841 19.3631 14.6885 19.4258 14.6841 19.4886C14.673 19.6447 14.7193 19.6899 14.8786 19.6328C15.4575 19.4239 16.0643 19.3819 16.6698 19.3807C19.7955 19.3725 22.9207 19.3744 26.0464 19.3725C26.5254 19.3725 26.6383 19.2565 26.6383 18.7628C26.6383 16.0354 26.6383 13.3087 26.639 10.5826ZM1.37814 10.5832C1.37814 13.3206 1.37753 16.058 1.37876 18.7954C1.37876 19.2671 1.4874 19.3913 1.92749 19.3913C4.83719 19.3907 7.74751 19.3819 10.6572 19.3869C11.4467 19.3882 12.2448 19.3625 13.0083 19.6178C13.2614 19.7024 13.2922 19.6309 13.291 19.3938C13.283 17.576 13.2873 15.7582 13.2867 13.9404C13.2848 10.5449 13.2904 7.14953 13.2756 3.75413C13.2713 2.76931 12.6503 2.04419 11.7096 1.8604C11.4899 1.81775 11.2596 1.81649 11.0344 1.81586C8.02157 1.81335 5.00879 1.81398 1.99539 1.81398C1.48616 1.81398 1.37876 1.9225 1.37876 2.43372C1.37814 5.15043 1.37814 7.86713 1.37814 10.5832Z" fill="#074A37"></path>
                                                                                    <path d="M20.6234 6.53231C19.5433 6.53231 18.4637 6.53419 17.3835 6.53105C16.9169 6.5298 16.6021 6.24627 16.5953 5.83541C16.5891 5.45277 16.9366 5.14918 17.3977 5.14855C19.5371 5.14604 21.6765 5.14604 23.8152 5.14855C24.2813 5.14918 24.5775 5.40197 24.6072 5.80718C24.6374 6.22369 24.3337 6.52791 23.8628 6.53042C22.7832 6.53607 21.703 6.53231 20.6234 6.53231Z" fill="#074A37"></path>
                                                                                    <path d="M20.6227 9.95907C21.6819 9.95907 22.7417 9.9597 23.8009 9.95782C24.0009 9.95719 24.1929 9.97413 24.3497 10.1178C24.5558 10.3066 24.6583 10.5443 24.5891 10.8197C24.5132 11.122 24.2935 11.2876 23.9941 11.3366C23.8935 11.3529 23.7892 11.3447 23.6861 11.3447C21.6183 11.3453 19.5512 11.3453 17.4834 11.3453C17.4322 11.3453 17.3803 11.3466 17.3291 11.3447C16.9032 11.3284 16.5828 11.0141 16.5915 10.6215C16.5995 10.2664 16.918 9.96347 17.3204 9.96096C18.4216 9.95468 19.5222 9.95907 20.6227 9.95907Z" fill="#074A37"></path>
                                                                                    <path d="M19.4592 14.7665C20.1474 14.7665 20.835 14.764 21.5232 14.7671C22.0146 14.7696 22.3226 15.0488 22.3201 15.4784C22.3176 15.8655 22.0084 16.1484 21.5467 16.1502C20.1603 16.1571 18.774 16.1571 17.3883 16.1509C16.913 16.149 16.5846 15.8316 16.5988 15.4195C16.6118 15.045 16.942 14.7702 17.3957 14.7677C18.0833 14.764 18.7715 14.7665 19.4592 14.7665Z" fill="#074A37"></path>
                                                                                    <path d="M7.3845 6.5323C6.31481 6.5323 5.24574 6.53418 4.17605 6.53167C3.66683 6.53042 3.37363 6.27386 3.3687 5.83791C3.36438 5.42141 3.68287 5.14917 4.18717 5.14854C6.32592 5.14729 8.46468 5.14666 10.6034 5.14917C11.017 5.1498 11.2898 5.37311 11.3602 5.74445C11.417 6.04617 11.2522 6.33847 10.9547 6.47647C10.817 6.54045 10.6738 6.53167 10.5306 6.53167C9.48191 6.53293 8.4332 6.5323 7.3845 6.5323Z" fill="#074A37"></path>
                                                                                    <path d="M7.3896 14.7671C8.44879 14.7671 9.50799 14.7677 10.5672 14.7665C10.7659 14.7665 10.9591 14.7796 11.1141 14.9277C11.306 15.1108 11.4116 15.3304 11.3536 15.6007C11.2931 15.8824 11.1085 16.0499 10.8369 16.1201C10.7678 16.1377 10.695 16.1509 10.624 16.1509C8.45435 16.1527 6.28473 16.1559 4.1151 16.1502C3.72439 16.149 3.47811 15.9589 3.38737 15.6384C3.26022 15.188 3.58304 14.7759 4.08918 14.7696C4.89098 14.7596 5.6934 14.7665 6.49521 14.7665C6.79334 14.7671 7.09147 14.7671 7.3896 14.7671Z" fill="#074A37"></path>
                                                                                    <path d="M7.37467 9.95907C8.43386 9.95907 9.49306 9.95782 10.5516 9.9597C11.0393 9.96033 11.3633 10.2395 11.3707 10.6579C11.3781 11.0599 11.0386 11.3453 10.5442 11.346C8.40547 11.3466 6.26671 11.3472 4.12795 11.3447C3.7397 11.3441 3.46564 11.1446 3.3817 10.8166C3.30392 10.5142 3.44095 10.2037 3.71748 10.0469C3.86809 9.96158 4.03166 9.95907 4.19708 9.9597C5.25689 9.9597 6.31547 9.95907 7.37467 9.95907Z" fill="#074A37"></path>
                                                                                </svg>

                                                                            </span>
                                                                            <span class="mr-2">
                                                                                Open Guidelines
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <div class="col-md-12">
                                                                            <div class="assesment-border p-5">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="custom-search-bar ml-1 p-5">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Landscape name*</label>
                                                                                            <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name" fdprocessedid="4cnwu">
                                                                                            <span class="assesment-small-text assesment-small-text-responsive">This can either be the official name of the jurisdiction, catchment area, or region, or also the name of the initiative behind the assessment.</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">

                                                                                        <div class="custom-search-bar ml-1 p-5">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Country*</label>
                                                                                            <div class="select-wrapper mt-4 mb-2">
                                                                                                <select class="form-control bg-primary text-light" id="exampleFormControlSelect1" fdprocessedid="5f18sk">
                                                                                                    <option>None Selected</option>
                                                                                                    <option>Selected</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <span class="assesment-small-text  assesment-small-text-responsive">Country where the landscape is located.</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-5">
                                                                        <div class="col-md-12">
                                                                            <div class="assesment-border p-5">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="ml-1 px-5 d-flex justify-content-between align-items-center assesment-card-header-responsive">
                                                                                            <div class="custom-heading custom-heading-responsive">
                                                                                                <span>
                                                                                                    Add Municipalities Of Your Landscape
                                                                                                </span>
                                                                                            </div>
                                                                                            <button class="assesment-card-sec-btn" fdprocessedid="uwydlh">
                                                                                                <span class="d-inline-block pl-3 pt-2">
                                                                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path d="M1.07324 8.44254C1.07775 4.32039 4.40376 1.0079 8.53324 1.00001C12.5889 0.992122 16 4.24883 16 8.47128C16 12.5901 12.6345 16.0186 8.31462 15.8868C4.11978 15.7583 1.07324 12.4278 1.07324 8.44254ZM8.52197 15.0557C12.1968 15.0591 15.1419 12.1787 15.1672 8.49551C15.192 4.83819 12.2244 1.87673 8.57437 1.85645C4.9441 1.8356 1.94207 4.78748 1.93193 8.44592C1.92235 11.9748 4.72605 15.0934 8.52197 15.0557Z" fill="white" stroke="white" stroke-width="0.2"></path>
                                                                                                        <path d="M8.10782 10.8524C8.10782 10.2985 8.09599 9.74466 8.11345 9.19192C8.12078 8.95415 8.07232 8.87245 7.81145 8.87639C6.71386 8.8933 5.61514 8.88372 4.51699 8.88372C4.43247 8.88372 4.34739 8.88766 4.264 8.88034C3.99073 8.85611 3.84086 8.70004 3.8448 8.45099C3.84875 8.21548 3.99524 8.06616 4.2533 8.03968C4.33725 8.03123 4.42177 8.03461 4.50629 8.03461C5.61402 8.03461 6.72118 8.02898 7.82891 8.03912C8.04302 8.04081 8.11571 7.99517 8.11345 7.76528C8.10049 6.64854 8.10782 5.53179 8.10782 4.41561C8.10782 4.33109 8.105 4.24601 8.11514 4.16262C8.14557 3.91076 8.30502 3.76596 8.54392 3.77385C8.78846 3.7823 8.92087 3.91809 8.94904 4.15586C8.95975 4.24883 8.95749 4.34293 8.95749 4.43702C8.95806 5.54419 8.96369 6.65135 8.95299 7.75852C8.95073 7.97657 9.0037 8.0425 9.22964 8.04024C10.3368 8.02785 11.4445 8.03461 12.5523 8.03461C12.6368 8.03461 12.7219 8.03066 12.8053 8.03855C13.0785 8.06334 13.2261 8.21886 13.2216 8.47015C13.2171 8.70962 13.0757 8.85386 12.8126 8.87921C12.7286 8.8871 12.6435 8.88372 12.5596 8.88372C11.4614 8.88372 10.3633 8.89104 9.26513 8.87809C9.02623 8.87527 8.94735 8.92147 8.95073 9.18065C8.96707 10.325 8.95749 11.4699 8.95806 12.6148C8.95806 12.8549 8.9158 13.0718 8.63689 13.1343C8.32475 13.2048 8.11458 13.0177 8.11064 12.6537C8.10331 12.0537 8.10782 11.453 8.10782 10.8524Z" fill="white" stroke="white" stroke-width="0.2"></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <span class="d-inline-block pr-3 pb-2">Add More</span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6"></div>
                                                                                </div>
                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-6">
                                                                                        <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Municipality*</label>
                                                                                            <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Municipality" fdprocessedid="4cnwu">
                                                                                            <span class="assesment-small-text assesment-small-text-responsive">Sub-national jurisdiction(s) (i.e: State, Department, Municipality).</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">What is the name of the lead organization?*</label>
                                                                                            <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name of Organization" fdprocessedid="4cnwu">
                                                                                            <span class="assesment-small-text assesment-small-text-responsive">Name of organizations responsible for LandScale design and assessment</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-6">
                                                                                        <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Is this a partnership?*</label>
                                                                                            <div>
                                                                                                <div class="custom-control custom-radio mt-3">
                                                                                                    <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
                                                                                                    <label class="custom-control-label green" for="rd_1">Yes</label>

                                                                                                </div>
                                                                                                <div class="custom-control custom-radio my-2">
                                                                                                    <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
                                                                                                    <label class="custom-control-label red" for="rd_2">No</label>
                                                                                                </div>
                                                                                                <div class="assesment-small-text assesment-small-text-responsive mt-4">Please indicate if at this time the assessment will be carried out by a single entity or multi-partner initiative.</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="custom-search-bar ml-1 px-5 mt-3">
                                                                                            <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Please name any co-lead organizations*</label>
                                                                                            <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name of Co-Lead Organization" fdprocessedid="4cnwu">
                                                                                            <div class="assesment-small-text assesment-small-text-responsive mt-5">Name of the co-lead organization responsible for LandScale design and assessment</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- <div class="d-flex justify-content-between align-items-center custom-margin assesment-button-responsive">
                                                                        <div class="assesment-responsive">
                                                                            <button type="button" class="assesment-light-btn d-inline-block assesment-responsive-btn-back" data-wizard-type="action-prev">
                                                                                Back
                                                                            </button>
                                                                        </div>
                                                                        <div class="assesment-responsive-btn-block">
                                                                            <button type="button" class="assesment-dark-btn d-inline-block mr-2" data-wizard-type="action-next">Next</button>
                                                                            <button type="button" class="assesment-warning-btn d-inline-block" fdprocessedid="i7rzf">
                                                                                Save
                                                                            </button>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                            </div>

                                                            <!--end: Wizard Step 1-->

                                                            <!--begin: Wizard Step 2-->
                                                            <div class="pb-5" data-wizard-type="step-content">
                                                                <div class="tab" style="display: block;">
                                                                    <div class="d-flex justify-content-between align-items-center overview-responsive">
                                                                        <div class="assesments-card-header overview-span-responsive">
                                                                            <span>
                                                                                Objectives
                                                                            </span>
                                                                            <div class="assesment-small-text assesment-small-text-responsive pt-5 w-75 custom-responsive-width">
                                                                                Please enter up to three key objectives for conducting a LandScale assessment (you will be able to add more in Step 1)
                                                                            </div>
                                                                        </div>
                                                                        <button class="assesment-card-btn p-2 align-self-start" fdprocessedid="o0jh0q">
                                                                            <span class="ml-2">
                                                                                <svg width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M27.9994 10.5537C27.9994 13.2391 27.9988 15.925 28 18.6104C28 18.9246 27.9883 19.237 27.8938 19.5387C27.6438 20.3366 26.9698 20.7845 25.9983 20.7857C23.5916 20.7889 21.185 20.7851 18.7783 20.7876C17.9043 20.7883 17.0303 20.8008 16.1563 20.8014C15.9371 20.8014 15.7273 20.8441 15.5199 20.8999C14.9637 21.0486 14.7582 21.2976 14.6934 21.8847C14.6502 22.2793 14.373 22.5703 14.0286 22.5829C13.6743 22.5954 13.3274 22.3433 13.3126 21.9468C13.2799 21.0542 12.6731 20.8855 11.9966 20.8108C11.6806 20.7763 11.3596 20.7807 11.0411 20.7801C8.0586 20.7782 5.07607 20.7751 2.09292 20.7814C1.44666 20.7826 0.875705 20.6339 0.429436 20.1227C0.0924191 19.7369 0.00291836 19.2759 0.00291836 18.7854C0.00106662 13.2999 -0.00201962 7.81319 0.00415285 2.32709C0.00538734 1.16288 0.792994 0.417053 1.98922 0.417053C4.01502 0.417053 6.04144 0.423326 8.06725 0.42709C9.0857 0.428971 10.1035 0.420817 11.122 0.434617C12.2003 0.449044 13.1768 0.726297 13.8792 1.63646C13.9731 1.75815 14.0292 1.72616 14.1138 1.62768C14.873 0.746997 15.8594 0.428971 16.9797 0.430853C19.9832 0.434617 22.9861 0.430853 25.9896 0.432735C27.2729 0.433362 27.9981 1.16915 27.9988 2.46634C28 5.16172 27.9994 7.85772 27.9994 10.5537ZM26.639 10.5826C26.639 7.8458 26.639 5.10903 26.6383 2.37225C26.6383 1.95951 26.5075 1.81524 26.1149 1.81524C22.9892 1.81335 19.8641 1.80708 16.7383 1.819C15.4995 1.82402 14.6854 2.68526 14.6847 3.94482C14.6835 9.06333 14.6841 14.1819 14.6841 19.3004C14.6841 19.3631 14.6885 19.4258 14.6841 19.4886C14.673 19.6447 14.7193 19.6899 14.8786 19.6328C15.4575 19.4239 16.0643 19.3819 16.6698 19.3807C19.7955 19.3725 22.9207 19.3744 26.0464 19.3725C26.5254 19.3725 26.6383 19.2565 26.6383 18.7628C26.6383 16.0354 26.6383 13.3087 26.639 10.5826ZM1.37814 10.5832C1.37814 13.3206 1.37753 16.058 1.37876 18.7954C1.37876 19.2671 1.4874 19.3913 1.92749 19.3913C4.83719 19.3907 7.74751 19.3819 10.6572 19.3869C11.4467 19.3882 12.2448 19.3625 13.0083 19.6178C13.2614 19.7024 13.2922 19.6309 13.291 19.3938C13.283 17.576 13.2873 15.7582 13.2867 13.9404C13.2848 10.5449 13.2904 7.14953 13.2756 3.75413C13.2713 2.76931 12.6503 2.04419 11.7096 1.8604C11.4899 1.81775 11.2596 1.81649 11.0344 1.81586C8.02157 1.81335 5.00879 1.81398 1.99539 1.81398C1.48616 1.81398 1.37876 1.9225 1.37876 2.43372C1.37814 5.15043 1.37814 7.86713 1.37814 10.5832Z" fill="#074A37"></path>
                                                                                    <path d="M20.6234 6.53231C19.5433 6.53231 18.4637 6.53419 17.3835 6.53105C16.9169 6.5298 16.6021 6.24627 16.5953 5.83541C16.5891 5.45277 16.9366 5.14918 17.3977 5.14855C19.5371 5.14604 21.6765 5.14604 23.8152 5.14855C24.2813 5.14918 24.5775 5.40197 24.6072 5.80718C24.6374 6.22369 24.3337 6.52791 23.8628 6.53042C22.7832 6.53607 21.703 6.53231 20.6234 6.53231Z" fill="#074A37"></path>
                                                                                    <path d="M20.6227 9.95907C21.6819 9.95907 22.7417 9.9597 23.8009 9.95782C24.0009 9.95719 24.1929 9.97413 24.3497 10.1178C24.5558 10.3066 24.6583 10.5443 24.5891 10.8197C24.5132 11.122 24.2935 11.2876 23.9941 11.3366C23.8935 11.3529 23.7892 11.3447 23.6861 11.3447C21.6183 11.3453 19.5512 11.3453 17.4834 11.3453C17.4322 11.3453 17.3803 11.3466 17.3291 11.3447C16.9032 11.3284 16.5828 11.0141 16.5915 10.6215C16.5995 10.2664 16.918 9.96347 17.3204 9.96096C18.4216 9.95468 19.5222 9.95907 20.6227 9.95907Z" fill="#074A37"></path>
                                                                                    <path d="M19.4592 14.7665C20.1474 14.7665 20.835 14.764 21.5232 14.7671C22.0146 14.7696 22.3226 15.0488 22.3201 15.4784C22.3176 15.8655 22.0084 16.1484 21.5467 16.1502C20.1603 16.1571 18.774 16.1571 17.3883 16.1509C16.913 16.149 16.5846 15.8316 16.5988 15.4195C16.6118 15.045 16.942 14.7702 17.3957 14.7677C18.0833 14.764 18.7715 14.7665 19.4592 14.7665Z" fill="#074A37"></path>
                                                                                    <path d="M7.3845 6.5323C6.31481 6.5323 5.24574 6.53418 4.17605 6.53167C3.66683 6.53042 3.37363 6.27386 3.3687 5.83791C3.36438 5.42141 3.68287 5.14917 4.18717 5.14854C6.32592 5.14729 8.46468 5.14666 10.6034 5.14917C11.017 5.1498 11.2898 5.37311 11.3602 5.74445C11.417 6.04617 11.2522 6.33847 10.9547 6.47647C10.817 6.54045 10.6738 6.53167 10.5306 6.53167C9.48191 6.53293 8.4332 6.5323 7.3845 6.5323Z" fill="#074A37"></path>
                                                                                    <path d="M7.3896 14.7671C8.44879 14.7671 9.50799 14.7677 10.5672 14.7665C10.7659 14.7665 10.9591 14.7796 11.1141 14.9277C11.306 15.1108 11.4116 15.3304 11.3536 15.6007C11.2931 15.8824 11.1085 16.0499 10.8369 16.1201C10.7678 16.1377 10.695 16.1509 10.624 16.1509C8.45435 16.1527 6.28473 16.1559 4.1151 16.1502C3.72439 16.149 3.47811 15.9589 3.38737 15.6384C3.26022 15.188 3.58304 14.7759 4.08918 14.7696C4.89098 14.7596 5.6934 14.7665 6.49521 14.7665C6.79334 14.7671 7.09147 14.7671 7.3896 14.7671Z" fill="#074A37"></path>
                                                                                    <path d="M7.37467 9.95907C8.43386 9.95907 9.49306 9.95782 10.5516 9.9597C11.0393 9.96033 11.3633 10.2395 11.3707 10.6579C11.3781 11.0599 11.0386 11.3453 10.5442 11.346C8.40547 11.3466 6.26671 11.3472 4.12795 11.3447C3.7397 11.3441 3.46564 11.1446 3.3817 10.8166C3.30392 10.5142 3.44095 10.2037 3.71748 10.0469C3.86809 9.96158 4.03166 9.95907 4.19708 9.9597C5.25689 9.9597 6.31547 9.95907 7.37467 9.95907Z" fill="#074A37"></path>
                                                                                </svg>

                                                                            </span>
                                                                            <span class="mr-2">
                                                                                Open Guidelines
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <div class="col-md-12 mb-5">
                                                                            <div class="row mt-5">
                                                                                <div class="col-md-6">
                                                                                    <div class="custom-search-bar ml-1 p-5">
                                                                                        <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Objective 1*</label>
                                                                                        <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name" fdprocessedid="4cnwu">
                                                                                        <span class="assesment-small-text assesment-small-text-responsive">(0/500)</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">

                                                                                    <div class="custom-search-bar ml-1 p-5">
                                                                                        <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Objective 2</label>
                                                                                        <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name" fdprocessedid="4cnwu">
                                                                                        <span class="assesment-small-text assesment-small-text-responsive">(0/500)</span>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">

                                                                                    <div class="custom-search-bar ml-1 p-5">
                                                                                        <label for="" class="assesment-input-labels d-inline assesment-responsive-fontsize">Objective 3</label>
                                                                                        <input type="text" class="form-control primary-bg-color outline-0 border-0 w-100 mt-4 mb-2" placeholder="Enter Name" fdprocessedid="4cnwu">
                                                                                        <span class="assesment-small-text assesment-small-text-responsive">(0/500)</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--end: Wizard Step 2-->

                                                            <!--begin: Wizard Step 3-->
                                                            <div class="pb-5" data-wizard-type="step-content">
                                                                <div class="tab" style="display: block;">
                                                                    <div class="d-flex justify-content-between align-items-center overview-responsive">
                                                                        <div class="assesments-card-header overview-span-responsive">
                                                                            <span>
                                                                                Preliminary boundary
                                                                            </span>
                                                                        </div>
                                                                        <button class="assesment-card-btn p-2" fdprocessedid="o0jh0q">
                                                                            <span class="ml-2">
                                                                                <svg width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M27.9994 10.5537C27.9994 13.2391 27.9988 15.925 28 18.6104C28 18.9246 27.9883 19.237 27.8938 19.5387C27.6438 20.3366 26.9698 20.7845 25.9983 20.7857C23.5916 20.7889 21.185 20.7851 18.7783 20.7876C17.9043 20.7883 17.0303 20.8008 16.1563 20.8014C15.9371 20.8014 15.7273 20.8441 15.5199 20.8999C14.9637 21.0486 14.7582 21.2976 14.6934 21.8847C14.6502 22.2793 14.373 22.5703 14.0286 22.5829C13.6743 22.5954 13.3274 22.3433 13.3126 21.9468C13.2799 21.0542 12.6731 20.8855 11.9966 20.8108C11.6806 20.7763 11.3596 20.7807 11.0411 20.7801C8.0586 20.7782 5.07607 20.7751 2.09292 20.7814C1.44666 20.7826 0.875705 20.6339 0.429436 20.1227C0.0924191 19.7369 0.00291836 19.2759 0.00291836 18.7854C0.00106662 13.2999 -0.00201962 7.81319 0.00415285 2.32709C0.00538734 1.16288 0.792994 0.417053 1.98922 0.417053C4.01502 0.417053 6.04144 0.423326 8.06725 0.42709C9.0857 0.428971 10.1035 0.420817 11.122 0.434617C12.2003 0.449044 13.1768 0.726297 13.8792 1.63646C13.9731 1.75815 14.0292 1.72616 14.1138 1.62768C14.873 0.746997 15.8594 0.428971 16.9797 0.430853C19.9832 0.434617 22.9861 0.430853 25.9896 0.432735C27.2729 0.433362 27.9981 1.16915 27.9988 2.46634C28 5.16172 27.9994 7.85772 27.9994 10.5537ZM26.639 10.5826C26.639 7.8458 26.639 5.10903 26.6383 2.37225C26.6383 1.95951 26.5075 1.81524 26.1149 1.81524C22.9892 1.81335 19.8641 1.80708 16.7383 1.819C15.4995 1.82402 14.6854 2.68526 14.6847 3.94482C14.6835 9.06333 14.6841 14.1819 14.6841 19.3004C14.6841 19.3631 14.6885 19.4258 14.6841 19.4886C14.673 19.6447 14.7193 19.6899 14.8786 19.6328C15.4575 19.4239 16.0643 19.3819 16.6698 19.3807C19.7955 19.3725 22.9207 19.3744 26.0464 19.3725C26.5254 19.3725 26.6383 19.2565 26.6383 18.7628C26.6383 16.0354 26.6383 13.3087 26.639 10.5826ZM1.37814 10.5832C1.37814 13.3206 1.37753 16.058 1.37876 18.7954C1.37876 19.2671 1.4874 19.3913 1.92749 19.3913C4.83719 19.3907 7.74751 19.3819 10.6572 19.3869C11.4467 19.3882 12.2448 19.3625 13.0083 19.6178C13.2614 19.7024 13.2922 19.6309 13.291 19.3938C13.283 17.576 13.2873 15.7582 13.2867 13.9404C13.2848 10.5449 13.2904 7.14953 13.2756 3.75413C13.2713 2.76931 12.6503 2.04419 11.7096 1.8604C11.4899 1.81775 11.2596 1.81649 11.0344 1.81586C8.02157 1.81335 5.00879 1.81398 1.99539 1.81398C1.48616 1.81398 1.37876 1.9225 1.37876 2.43372C1.37814 5.15043 1.37814 7.86713 1.37814 10.5832Z" fill="#074A37"></path>
                                                                                    <path d="M20.6234 6.53231C19.5433 6.53231 18.4637 6.53419 17.3835 6.53105C16.9169 6.5298 16.6021 6.24627 16.5953 5.83541C16.5891 5.45277 16.9366 5.14918 17.3977 5.14855C19.5371 5.14604 21.6765 5.14604 23.8152 5.14855C24.2813 5.14918 24.5775 5.40197 24.6072 5.80718C24.6374 6.22369 24.3337 6.52791 23.8628 6.53042C22.7832 6.53607 21.703 6.53231 20.6234 6.53231Z" fill="#074A37"></path>
                                                                                    <path d="M20.6227 9.95907C21.6819 9.95907 22.7417 9.9597 23.8009 9.95782C24.0009 9.95719 24.1929 9.97413 24.3497 10.1178C24.5558 10.3066 24.6583 10.5443 24.5891 10.8197C24.5132 11.122 24.2935 11.2876 23.9941 11.3366C23.8935 11.3529 23.7892 11.3447 23.6861 11.3447C21.6183 11.3453 19.5512 11.3453 17.4834 11.3453C17.4322 11.3453 17.3803 11.3466 17.3291 11.3447C16.9032 11.3284 16.5828 11.0141 16.5915 10.6215C16.5995 10.2664 16.918 9.96347 17.3204 9.96096C18.4216 9.95468 19.5222 9.95907 20.6227 9.95907Z" fill="#074A37"></path>
                                                                                    <path d="M19.4592 14.7665C20.1474 14.7665 20.835 14.764 21.5232 14.7671C22.0146 14.7696 22.3226 15.0488 22.3201 15.4784C22.3176 15.8655 22.0084 16.1484 21.5467 16.1502C20.1603 16.1571 18.774 16.1571 17.3883 16.1509C16.913 16.149 16.5846 15.8316 16.5988 15.4195C16.6118 15.045 16.942 14.7702 17.3957 14.7677C18.0833 14.764 18.7715 14.7665 19.4592 14.7665Z" fill="#074A37"></path>
                                                                                    <path d="M7.3845 6.5323C6.31481 6.5323 5.24574 6.53418 4.17605 6.53167C3.66683 6.53042 3.37363 6.27386 3.3687 5.83791C3.36438 5.42141 3.68287 5.14917 4.18717 5.14854C6.32592 5.14729 8.46468 5.14666 10.6034 5.14917C11.017 5.1498 11.2898 5.37311 11.3602 5.74445C11.417 6.04617 11.2522 6.33847 10.9547 6.47647C10.817 6.54045 10.6738 6.53167 10.5306 6.53167C9.48191 6.53293 8.4332 6.5323 7.3845 6.5323Z" fill="#074A37"></path>
                                                                                    <path d="M7.3896 14.7671C8.44879 14.7671 9.50799 14.7677 10.5672 14.7665C10.7659 14.7665 10.9591 14.7796 11.1141 14.9277C11.306 15.1108 11.4116 15.3304 11.3536 15.6007C11.2931 15.8824 11.1085 16.0499 10.8369 16.1201C10.7678 16.1377 10.695 16.1509 10.624 16.1509C8.45435 16.1527 6.28473 16.1559 4.1151 16.1502C3.72439 16.149 3.47811 15.9589 3.38737 15.6384C3.26022 15.188 3.58304 14.7759 4.08918 14.7696C4.89098 14.7596 5.6934 14.7665 6.49521 14.7665C6.79334 14.7671 7.09147 14.7671 7.3896 14.7671Z" fill="#074A37"></path>
                                                                                    <path d="M7.37467 9.95907C8.43386 9.95907 9.49306 9.95782 10.5516 9.9597C11.0393 9.96033 11.3633 10.2395 11.3707 10.6579C11.3781 11.0599 11.0386 11.3453 10.5442 11.346C8.40547 11.3466 6.26671 11.3472 4.12795 11.3447C3.7397 11.3441 3.46564 11.1446 3.3817 10.8166C3.30392 10.5142 3.44095 10.2037 3.71748 10.0469C3.86809 9.96158 4.03166 9.95907 4.19708 9.9597C5.25689 9.9597 6.31547 9.95907 7.37467 9.95907Z" fill="#074A37"></path>
                                                                                </svg>

                                                                            </span>
                                                                            <span class="mr-2">
                                                                                Open Guidelines
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <div class="col-md-12 mb-5">
                                                                            <div class="row mt-5">
                                                                                <div class="col-md-12">
                                                                                    <div class="assesment-input-labels d-inline assesment-responsive-fontsize">
                                                                                        Upload or draw the boundary of your landscape
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col-md-12">
                                                                                    <p class="custom-p">
                                                                                        Submit an approximate boundary that provides a general indication of location and size. You will be able to upload or draw a more exact landscape boundary later on as part of Step 2. This boundary can only be composed of a single polygon without any holes
                                                                                    </p>
                                                                                    <p class="custom-p">
                                                                                        If drawing a polygon, use the right menu bar on the map window to draw the approximate boundary.
                                                                                    </p>
                                                                                    <p class="custom-p">
                                                                                        If a spatial file is available, please upload a zipped shapefile, JSON, or KML that defines the boundary of the landscape you are proposing. The file should contain only one polygon and it needs to be in WGS84.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex justify-content-center align-items-center map-btn-wrapper map-btn-responsive w-100">
                                                                                <button type="button" class="custom-map-btn d-flex align-items-center mr-2 responsive-map-margin-right">
                                                                                    <span>
                                                                                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M5.8495 17.1L5.54316 16.7256C5.33893 16.4533 0.131104 10.3605 0.131104 6.7184C0.131104 3.55286 2.718 1 5.8495 1C8.981 1 11.5679 3.5869 11.5679 6.7184C11.5679 10.3605 6.36007 16.4873 6.15584 16.7256L5.8495 17.1ZM5.8495 1.78288C3.12645 1.78288 0.94802 3.99535 0.94802 6.68436C0.94802 9.54356 4.72624 14.411 5.8495 15.8066C6.97275 14.411 10.751 9.57759 10.751 6.68436C10.751 3.99535 8.57254 1.78288 5.8495 1.78288Z" fill="#074A37" stroke="#4C94A0" stroke-width="0.2" />
                                                                                            <path d="M5.84933 8.89679C4.658 8.89679 3.6709 7.90969 3.6709 6.71836C3.6709 5.52703 4.658 4.53992 5.84933 4.53992C7.04066 4.53992 8.02777 5.52703 8.02777 6.71836C8.02777 7.90969 7.04066 8.89679 5.84933 8.89679ZM5.84933 5.35684C5.10049 5.35684 4.48781 5.96952 4.48781 6.71836C4.48781 7.4672 5.10049 8.07988 5.84933 8.07988C6.59817 8.07988 7.21085 7.4672 7.21085 6.71836C7.21085 5.96952 6.59817 5.35684 5.84933 5.35684Z" fill="#074A37" stroke="#4C94A0" stroke-width="0.2" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <span class="d-linline-block w-0">Other landscapes
                                                                                        boundaries</span>
                                                                                </button>
                                                                                <button type="button" class="custom-map-btn-primary d-flex align-items-center ml-2 responsive-map-margin-top responsive-map-margin-left">
                                                                                    <span>
                                                                                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M5.8495 17.1L5.54316 16.7256C5.33893 16.4533 0.131104 10.3605 0.131104 6.7184C0.131104 3.55286 2.718 1 5.8495 1C8.981 1 11.5679 3.5869 11.5679 6.7184C11.5679 10.3605 6.36007 16.4873 6.15584 16.7256L5.8495 17.1ZM5.8495 1.78288C3.12645 1.78288 0.94802 3.99535 0.94802 6.68436C0.94802 9.54356 4.72624 14.411 5.8495 15.8066C6.97275 14.411 10.751 9.57759 10.751 6.68436C10.751 3.99535 8.57254 1.78288 5.8495 1.78288Z" fill="#074A37" stroke="#4C94A0" stroke-width="0.2" />
                                                                                            <path d="M5.84933 8.89679C4.658 8.89679 3.6709 7.90969 3.6709 6.71836C3.6709 5.52703 4.658 4.53992 5.84933 4.53992C7.04066 4.53992 8.02777 5.52703 8.02777 6.71836C8.02777 7.90969 7.04066 8.89679 5.84933 8.89679ZM5.84933 5.35684C5.10049 5.35684 4.48781 5.96952 4.48781 6.71836C4.48781 7.4672 5.10049 8.07988 5.84933 8.07988C6.59817 8.07988 7.21085 7.4672 7.21085 6.71836C7.21085 5.96952 6.59817 5.35684 5.84933 5.35684Z" fill="#074A37" stroke="#4C94A0" stroke-width="0.2" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <span class="d-linline-block pl-5">Your assessment</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end: Wizard Step 3-->

                                                            <!--begin: Wizard Step 4-->
                                                            <div class="pb-5" data-wizard-type="step-content">
                                                                <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                                                <div class="my-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Address Line 1</label>
                                                                        <input type="text" class="form-control" name="locaddress1" placeholder="Address Line 1" value="Address Line 1" />
                                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                                    </div>
                                                                    <!--end::Input-->

                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Address Line 2</label>
                                                                        <input type="text" class="form-control" name="locaddress2" placeholder="Address Line 2" value="Address Line 2" />
                                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <!--begin::Input-->
                                                                            <div class="form-group">
                                                                                <label>Postcode</label>
                                                                                <input type="text" class="form-control" name="locpostcode" placeholder="Postcode" value="3072" />
                                                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                            </div>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <!--begin::Input-->
                                                                            <div class="form-group">
                                                                                <label>City</label>
                                                                                <input type="text" class="form-control" name="loccity" placeholder="City" value="Preston" />
                                                                                <span class="form-text text-muted">Please enter your City.</span>
                                                                            </div>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <!--begin::Input-->
                                                                            <div class="form-group">
                                                                                <label>State</label>
                                                                                <input type="text" class="form-control" name="locstate" placeholder="State" value="VIC" />
                                                                                <span class="form-text text-muted">Please enter your State.</span>
                                                                            </div>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <!--begin::Select-->
                                                                            <div class="form-group">
                                                                                <label>Country</label>
                                                                                <select name="loccountry" class="form-control">
                                                                                    <option value="">Select</option>
                                                                                    <option value="AF">Afghanistan</option>
                                                                                    <option value="AX">Åland Islands</option>
                                                                                    <option value="AL">Albania</option>
                                                                                    <option value="DZ">Algeria</option>
                                                                                    <option value="AS">American Samoa</option>
                                                                                    <option value="AD">Andorra</option>
                                                                                    <option value="AO">Angola</option>
                                                                                    <option value="AI">Anguilla</option>
                                                                                    <option value="AQ">Antarctica</option>
                                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                                    <option value="AR">Argentina</option>
                                                                                    <option value="AM">Armenia</option>
                                                                                    <option value="AW">Aruba</option>
                                                                                    <option value="AU" selected>Australia</option>
                                                                                    <option value="AT">Austria</option>
                                                                                    <option value="AZ">Azerbaijan</option>
                                                                                    <option value="BS">Bahamas</option>
                                                                                    <option value="BH">Bahrain</option>
                                                                                    <option value="BD">Bangladesh</option>
                                                                                    <option value="BB">Barbados</option>
                                                                                    <option value="BY">Belarus</option>
                                                                                    <option value="BE">Belgium</option>
                                                                                    <option value="BZ">Belize</option>
                                                                                    <option value="BJ">Benin</option>
                                                                                    <option value="BM">Bermuda</option>
                                                                                    <option value="BT">Bhutan</option>
                                                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                                    <option value="BW">Botswana</option>
                                                                                    <option value="BV">Bouvet Island</option>
                                                                                    <option value="BR">Brazil</option>
                                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                                    <option value="BN">Brunei Darussalam</option>
                                                                                    <option value="BG">Bulgaria</option>
                                                                                    <option value="BF">Burkina Faso</option>
                                                                                    <option value="BI">Burundi</option>
                                                                                    <option value="KH">Cambodia</option>
                                                                                    <option value="CM">Cameroon</option>
                                                                                    <option value="CA">Canada</option>
                                                                                    <option value="CV">Cape Verde</option>
                                                                                    <option value="KY">Cayman Islands</option>
                                                                                    <option value="CF">Central African Republic</option>
                                                                                    <option value="TD">Chad</option>
                                                                                    <option value="CL">Chile</option>
                                                                                    <option value="CN">China</option>
                                                                                    <option value="CX">Christmas Island</option>
                                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                                    <option value="CO">Colombia</option>
                                                                                    <option value="KM">Comoros</option>
                                                                                    <option value="CG">Congo</option>
                                                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                                                    <option value="CK">Cook Islands</option>
                                                                                    <option value="CR">Costa Rica</option>
                                                                                    <option value="CI">Côte d'Ivoire</option>
                                                                                    <option value="HR">Croatia</option>
                                                                                    <option value="CU">Cuba</option>
                                                                                    <option value="CW">Curaçao</option>
                                                                                    <option value="CY">Cyprus</option>
                                                                                    <option value="CZ">Czech Republic</option>
                                                                                    <option value="DK">Denmark</option>
                                                                                    <option value="DJ">Djibouti</option>
                                                                                    <option value="DM">Dominica</option>
                                                                                    <option value="DO">Dominican Republic</option>
                                                                                    <option value="EC">Ecuador</option>
                                                                                    <option value="EG">Egypt</option>
                                                                                    <option value="SV">El Salvador</option>
                                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                                    <option value="ER">Eritrea</option>
                                                                                    <option value="EE">Estonia</option>
                                                                                    <option value="ET">Ethiopia</option>
                                                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                    <option value="FO">Faroe Islands</option>
                                                                                    <option value="FJ">Fiji</option>
                                                                                    <option value="FI">Finland</option>
                                                                                    <option value="FR">France</option>
                                                                                    <option value="GF">French Guiana</option>
                                                                                    <option value="PF">French Polynesia</option>
                                                                                    <option value="TF">French Southern Territories</option>
                                                                                    <option value="GA">Gabon</option>
                                                                                    <option value="GM">Gambia</option>
                                                                                    <option value="GE">Georgia</option>
                                                                                    <option value="DE">Germany</option>
                                                                                    <option value="GH">Ghana</option>
                                                                                    <option value="GI">Gibraltar</option>
                                                                                    <option value="GR">Greece</option>
                                                                                    <option value="GL">Greenland</option>
                                                                                    <option value="GD">Grenada</option>
                                                                                    <option value="GP">Guadeloupe</option>
                                                                                    <option value="GU">Guam</option>
                                                                                    <option value="GT">Guatemala</option>
                                                                                    <option value="GG">Guernsey</option>
                                                                                    <option value="GN">Guinea</option>
                                                                                    <option value="GW">Guinea-Bissau</option>
                                                                                    <option value="GY">Guyana</option>
                                                                                    <option value="HT">Haiti</option>
                                                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                                                    <option value="HN">Honduras</option>
                                                                                    <option value="HK">Hong Kong</option>
                                                                                    <option value="HU">Hungary</option>
                                                                                    <option value="IS">Iceland</option>
                                                                                    <option value="IN">India</option>
                                                                                    <option value="ID">Indonesia</option>
                                                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                                                    <option value="IQ">Iraq</option>
                                                                                    <option value="IE">Ireland</option>
                                                                                    <option value="IM">Isle of Man</option>
                                                                                    <option value="IL">Israel</option>
                                                                                    <option value="IT">Italy</option>
                                                                                    <option value="JM">Jamaica</option>
                                                                                    <option value="JP">Japan</option>
                                                                                    <option value="JE">Jersey</option>
                                                                                    <option value="JO">Jordan</option>
                                                                                    <option value="KZ">Kazakhstan</option>
                                                                                    <option value="KE">Kenya</option>
                                                                                    <option value="KI">Kiribati</option>
                                                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                                                    <option value="KR">Korea, Republic of</option>
                                                                                    <option value="KW">Kuwait</option>
                                                                                    <option value="KG">Kyrgyzstan</option>
                                                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                                                    <option value="LV">Latvia</option>
                                                                                    <option value="LB">Lebanon</option>
                                                                                    <option value="LS">Lesotho</option>
                                                                                    <option value="LR">Liberia</option>
                                                                                    <option value="LY">Libya</option>
                                                                                    <option value="LI">Liechtenstein</option>
                                                                                    <option value="LT">Lithuania</option>
                                                                                    <option value="LU">Luxembourg</option>
                                                                                    <option value="MO">Macao</option>
                                                                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                                    <option value="MG">Madagascar</option>
                                                                                    <option value="MW">Malawi</option>
                                                                                    <option value="MY">Malaysia</option>
                                                                                    <option value="MV">Maldives</option>
                                                                                    <option value="ML">Mali</option>
                                                                                    <option value="MT">Malta</option>
                                                                                    <option value="MH">Marshall Islands</option>
                                                                                    <option value="MQ">Martinique</option>
                                                                                    <option value="MR">Mauritania</option>
                                                                                    <option value="MU">Mauritius</option>
                                                                                    <option value="YT">Mayotte</option>
                                                                                    <option value="MX">Mexico</option>
                                                                                    <option value="FM">Micronesia, Federated States of</option>
                                                                                    <option value="MD">Moldova, Republic of</option>
                                                                                    <option value="MC">Monaco</option>
                                                                                    <option value="MN">Mongolia</option>
                                                                                    <option value="ME">Montenegro</option>
                                                                                    <option value="MS">Montserrat</option>
                                                                                    <option value="MA">Morocco</option>
                                                                                    <option value="MZ">Mozambique</option>
                                                                                    <option value="MM">Myanmar</option>
                                                                                    <option value="NA">Namibia</option>
                                                                                    <option value="NR">Nauru</option>
                                                                                    <option value="NP">Nepal</option>
                                                                                    <option value="NL">Netherlands</option>
                                                                                    <option value="NC">New Caledonia</option>
                                                                                    <option value="NZ">New Zealand</option>
                                                                                    <option value="NI">Nicaragua</option>
                                                                                    <option value="NE">Niger</option>
                                                                                    <option value="NG">Nigeria</option>
                                                                                    <option value="NU">Niue</option>
                                                                                    <option value="NF">Norfolk Island</option>
                                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                                    <option value="NO">Norway</option>
                                                                                    <option value="OM">Oman</option>
                                                                                    <option value="PK">Pakistan</option>
                                                                                    <option value="PW">Palau</option>
                                                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                                                    <option value="PA">Panama</option>
                                                                                    <option value="PG">Papua New Guinea</option>
                                                                                    <option value="PY">Paraguay</option>
                                                                                    <option value="PE">Peru</option>
                                                                                    <option value="PH">Philippines</option>
                                                                                    <option value="PN">Pitcairn</option>
                                                                                    <option value="PL">Poland</option>
                                                                                    <option value="PT">Portugal</option>
                                                                                    <option value="PR">Puerto Rico</option>
                                                                                    <option value="QA">Qatar</option>
                                                                                    <option value="RE">Réunion</option>
                                                                                    <option value="RO">Romania</option>
                                                                                    <option value="RU">Russian Federation</option>
                                                                                    <option value="RW">Rwanda</option>
                                                                                    <option value="BL">Saint Barthélemy</option>
                                                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                                    <option value="LC">Saint Lucia</option>
                                                                                    <option value="MF">Saint Martin (French part)</option>
                                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                                    <option value="WS">Samoa</option>
                                                                                    <option value="SM">San Marino</option>
                                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                                    <option value="SA">Saudi Arabia</option>
                                                                                    <option value="SN">Senegal</option>
                                                                                    <option value="RS">Serbia</option>
                                                                                    <option value="SC">Seychelles</option>
                                                                                    <option value="SL">Sierra Leone</option>
                                                                                    <option value="SG">Singapore</option>
                                                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                                                    <option value="SK">Slovakia</option>
                                                                                    <option value="SI">Slovenia</option>
                                                                                    <option value="SB">Solomon Islands</option>
                                                                                    <option value="SO">Somalia</option>
                                                                                    <option value="ZA">South Africa</option>
                                                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                                    <option value="SS">South Sudan</option>
                                                                                    <option value="ES">Spain</option>
                                                                                    <option value="LK">Sri Lanka</option>
                                                                                    <option value="SD">Sudan</option>
                                                                                    <option value="SR">Suriname</option>
                                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                    <option value="SZ">Swaziland</option>
                                                                                    <option value="SE">Sweden</option>
                                                                                    <option value="CH">Switzerland</option>
                                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                                    <option value="TW">Taiwan, Province of China</option>
                                                                                    <option value="TJ">Tajikistan</option>
                                                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                                                    <option value="TH">Thailand</option>
                                                                                    <option value="TL">Timor-Leste</option>
                                                                                    <option value="TG">Togo</option>
                                                                                    <option value="TK">Tokelau</option>
                                                                                    <option value="TO">Tonga</option>
                                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                                    <option value="TN">Tunisia</option>
                                                                                    <option value="TR">Turkey</option>
                                                                                    <option value="TM">Turkmenistan</option>
                                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                                    <option value="TV">Tuvalu</option>
                                                                                    <option value="UG">Uganda</option>
                                                                                    <option value="UA">Ukraine</option>
                                                                                    <option value="AE">United Arab Emirates</option>
                                                                                    <option value="GB">United Kingdom</option>
                                                                                    <option value="US">United States</option>
                                                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                                                    <option value="UY">Uruguay</option>
                                                                                    <option value="UZ">Uzbekistan</option>
                                                                                    <option value="VU">Vanuatu</option>
                                                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                                    <option value="VN">Viet Nam</option>
                                                                                    <option value="VG">Virgin Islands, British</option>
                                                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                                                    <option value="WF">Wallis and Futuna</option>
                                                                                    <option value="EH">Western Sahara</option>
                                                                                    <option value="YE">Yemen</option>
                                                                                    <option value="ZM">Zambia</option>
                                                                                    <option value="ZW">Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                            <!--end::Select-->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--end: Wizard Step 4-->

                                                            <!--begin: Wizard Actions-->
                                                            <!-- <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                                <div class="mr-2">
                                                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                                        Previous
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                                        Submit
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                                        Next
                                                                    </button>
                                                                </div>
                                                            </div> -->
                                                            <!--end: Wizard Actions-->
                                                            <div class="d-flex justify-content-between align-items-center custom-margin assesment-button-responsive">
                                                                <div class="assesment-responsive">
                                                                    <button type="button" class="assesment-light-btn d-inline-block assesment-responsive-btn-back" data-wizard-type="action-prev">
                                                                        Back
                                                                    </button>
                                                                </div>
                                                                <div class="assesment-responsive-btn-block">
                                                                    <button type="button" class="assesment-dark-btn d-inline-block mr-2" data-wizard-type="action-next">Next</button>
                                                                    <button type="button" class="assesment-warning-btn d-inline-block" fdprocessedid="i7rzf">
                                                                        Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!--end: Wizard Form-->
                                                    </div>
                                                </div>
                                                <!--end: Wizard Body-->
                                            </div>
                                            <!--end: Wizard-->

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
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <!-- <script>var HOST_URL = "/metronic/theme/html/tools/preview";</script> -->
    <!--begin::Global Config(global config for global JS scripts)-->
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
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        $(document).on('click', '#kt_aside_toggle', function() {
            var src = $('.brand-logo').find('img').attr('src');
            if (src.indexOf('landscale_icon.svg') != -1) {
                src = src.replace('landscale_icon.svg', 'landscale_logo.png');
            } else {
                src = src.replace('landscale_logo.png', 'landscale_icon.svg');
            }
            $('.brand-logo').find('img').attr('src', src);
        });
        $(document).on('mouseenter', '#kt_aside_menu .hover-menu', function() {
            if ($(this).find('.menu-text').css('display') != 'none') {
                $(this).parent().find('.menu-submenu').removeClass('brt-50');
                $(this).parent().find('.menu-subnav').removeClass('brt-50');
            } else {
                $(this).parent().find('.menu-submenu').addClass('brt-50');
                $(this).parent().find('.menu-subnav').addClass('brt-50');
            }
        })
    </script>

</body>
<!--end::Body-->

</html>