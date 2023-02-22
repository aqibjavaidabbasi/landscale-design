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
                                <div class="card w-100 p-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-12 text-center">
                                                <div class="wizard wizard-3 mb-160-res" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true" style="position: relative;">
                                                    <div class="wizard-nav responsive-mobile step-nav-width">
                                                        <div class="wizard-steps metrices-step custom-steps-title px-8 py-8 px-lg-15 py-lg-3 margin-align responsive-nav-progress">
                                                            <!--begin::Wizard Step 1 Nav-->
                                                            <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="done">
                                                                <div class="wizard-label metrices-label">
                                                                    <div class="label-wrapper text-center">
                                                                        <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title">
                                                                            Preparation
                                                                        </h3>
                                                                        <span class="steps-tags-text step-pending-tag p-1">Pending Review</span>
                                                                    </div>
                                                                    <div class="wizard-bar-1" id="step1" style="--bg-color:#074A37;"></div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 1 Nav-->

                                                            <!--begin::Wizard Step 2 Nav-->
                                                            <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="done">
                                                                <div class="wizard-label">
                                                                    <div class="label-wrapper text-center">
                                                                        <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title">
                                                                            Boundary
                                                                        </h3>
                                                                        <span class="steps-tags-text step-pending-tag p-1">Pending Review</span>
                                                                    </div>
                                                                    <div class="wizard-bar-2" id="step2" style="--border-clr:#074A37; --bg-color:#074A37;"></div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 2 Nav-->

                                                            <!--begin::Wizard Step 3 Nav-->
                                                            <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="done">
                                                                <div class="wizard-label">
                                                                    <div class="label-wrapper text-center">
                                                                        <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title">
                                                                            Indicator &amp; Metrics
                                                                        </h3>
                                                                        <span class="steps-tags-text steps-success-tag p-1">Completed</span>
                                                                    </div>
                                                                    <div class="wizard-bar-3" id="step3" style="--border-clr:#074A37; --bg-color:#074A37;"></div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 3 Nav-->

                                                            <!--begin::Wizard Step 4 Nav-->
                                                            <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="current">
                                                                <div class="wizard-label">
                                                                    <div class="label-wrapper text-center">
                                                                        <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title">
                                                                            Data &amp; Results
                                                                        </h3>
                                                                        <span class="steps-tags-text step-pending-tag p-1">Pending Review</span>
                                                                    </div>
                                                                    <div class="wizard-bar-4" id="step4" style="--border-clr:#074A37;"></div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 4 Nav-->

                                                            <!--begin::Wizard Step 5 Nav-->
                                                            <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="current">
                                                                <div class="wizard-label">
                                                                    <div class="label-wrapper text-center">
                                                                        <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title custom-text-light-grey">
                                                                            Report &amp; Publish
                                                                        </h3>
                                                                        <span class="steps-tags-text step-pending-tag p-1 custom-text-light-grey">Pending Review</span>
                                                                    </div>
                                                                    <div class="wizard-bar-5" id="step5" style="--border-clr:#074A37;"></div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 5 Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-17">
                                            <span class="custom-font-style-headings custom-text-primary">Step 3: Indicator & Metrics</span>
                                        </div>
                                    </div>

                                    <div class="row mt-7 mb-7">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="custom-bg-light-pale custom-border-radius-15 custom-border-color-pale h-100 p-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <span class="custom-font-style-subheadings custom-text-primary d-inline-block mr-2">Indicator selection</span>
                                                        <span class="custom-bg-primary custom-font-style-xs custom-text-light-pale custom-border-radius-4 p-1">Approved</span>
                                                    </div>
                                                    <a href="./add_metrices.php" class="custom-bg-warning custom-border-radius-35 custom-text-primary custom-font-style-small p-2">Select Metrics</a>
                                                </div>
                                                <!-- <span class="steps-default-text steps-small-text d-block my-5">View Instructions</span> -->
                                                <span data-toggle="collapse" data-target="#demo" class="custom-font-style-subtext custom-text-primary d-block my-5 custom-cursor-pointer">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    <p class="custom-font-style-subtext custom-text-primary">
                                                        Below you will find the indicators of Ecosystems pillar of the LandScale framework. The Applicability indicates whether the indicator is required to meet the full LandScale requirements or is optional (see guidance for a complete description and explanation of each indicator). Action is required for each indicator. For Landscape-dependent indicators you must determine applicability to your landscape (see guidance). For Core indicators these are required in all landscapes but you may defer these due to data deficiency (as determined in Step 4) or for other reasons that you document. Optional indicators should be marked as included or excluded. Actions to defer, include, or not include are done using the toggle in the Select column below.
                                                    </p>
                                                </div>
                                                <span class="custom-font-style-text custom-text-primary d-inline-block">
                                                    Notice
                                                </span>
                                                <p class="custom-font-style-subtext custom-text-primary">
                                                    the LandScale team
                                                    are validating your step. Please wait
                                                </p>
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

                                    <!-- <div class="row mt-7">
                                        <div class="col-md-12 pl-0 pl-sm-4 pb-sm-4">
                                            <div class="d-flex justify-content-between">
                                                <a class="custom-bg-primary custom-border-radius-35 px-5 py-2 align-items-center" data-toggle="modal" data-target="#myModal">
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

                                    <div class="row custom-border-color-pale custom-border-radius-15 m-sm-0">
                                        <div class="col-md-3 col-sm-12 col-xs-12 pr-0 mt-7 max-w-20-percent" id="inner-side-nav">
                                            <!-- <div class="custom-font-style-subheadings custom-text-primary p-5">
                                                Custom Pillars
                                            </div> -->
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link indicator-tab-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                    <!-- <span class="indicator-nav-icon active">
                                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="demo-svg" d="M6.36488 4.86279C6.44434 4.57274 6.53449 4.28732 6.64281 4.00797C7.2532 2.43158 8.36458 1.35405 9.91353 0.707319C11.1653 0.184946 12.4769 -0.00176901 13.8231 1.26142e-05C14.0986 0.00036894 14.327 0.188153 14.3309 0.446489C14.3459 1.4442 14.328 2.43977 14.0619 3.41254C13.6047 5.08371 12.5104 6.14093 10.8966 6.69466C10.1633 6.94623 9.40256 7.06025 8.63289 7.12368C8.18891 7.16038 7.7435 7.17321 7.29845 7.17249C7.20189 7.17249 7.16732 7.19245 7.16732 7.29756C7.17053 8.93025 7.17053 10.5626 7.16732 12.1953C7.16697 12.2982 7.19904 12.3221 7.29774 12.3243C8.7601 12.3531 10.2082 12.5224 11.6449 12.7896C12.4253 12.9346 13.1974 13.1167 13.9553 13.3537C14.2073 13.4324 14.3359 13.6092 14.3355 13.85C14.3352 14.0834 14.2094 14.2595 13.9892 14.335C13.8723 14.3749 13.7572 14.3653 13.6403 14.33C12.1944 13.8932 10.7138 13.6302 9.21442 13.4741C7.83686 13.3305 6.45503 13.2792 5.07248 13.4029C3.74588 13.5212 2.45135 13.8044 1.1782 14.191C1.00823 14.2427 0.837554 14.2933 0.665805 14.3393C0.377893 14.4166 0.113143 14.2776 0.0261999 14.0079C-0.0621689 13.7328 0.0782235 13.4492 0.368629 13.3597C1.46718 13.0212 2.57571 12.7226 3.7131 12.5398C4.47564 12.4173 5.24174 12.3396 6.0139 12.325C6.11616 12.3232 6.14218 12.2904 6.14182 12.1917C6.13861 11.0757 6.13719 9.95967 6.14324 8.84331C6.14396 8.71218 6.08017 8.7218 5.99252 8.71966C5.12522 8.69721 4.26113 8.63984 3.4202 8.40609C2.05334 8.02661 1.02284 7.24162 0.462699 5.90789C0.207926 5.30107 0.0953271 4.66004 0.0443725 4.0069C0.00767098 3.53298 0.000900791 3.05836 0.0051767 2.58337C0.00802731 2.26731 0.21042 2.04354 0.521136 2.04604C1.90297 2.05708 3.23384 2.28798 4.45212 2.98602C5.21466 3.42288 5.82362 4.01723 6.27758 4.76979C6.29753 4.80257 6.30466 4.84711 6.36488 4.86279ZM7.80586 6.15447C7.80586 6.14521 7.80586 6.13594 7.80586 6.12668C7.91846 6.12668 8.03141 6.13274 8.14366 6.12561C8.99064 6.07359 9.83228 5.98272 10.6386 5.69659C11.8291 5.27435 12.6661 4.49934 13.0374 3.26752C13.2445 2.58017 13.2904 1.87179 13.3122 1.15985C13.3168 1.0077 13.2259 1.03799 13.1393 1.04298C12.4752 1.08075 11.8202 1.17803 11.1781 1.35583C9.45529 1.83295 8.15648 2.79325 7.53897 4.53675C7.37399 5.00283 7.27957 5.4828 7.20759 5.96954C7.18621 6.11421 7.22149 6.17407 7.37934 6.15768C7.52009 6.14271 7.66369 6.15447 7.80586 6.15447ZM5.59201 7.69273C5.72812 7.69273 5.86495 7.68632 6.00071 7.69487C6.1012 7.70128 6.11901 7.66422 6.11011 7.57265C6.07162 7.18247 5.99929 6.79942 5.88348 6.42492C5.63014 5.60537 5.23533 4.87312 4.56436 4.31583C3.57841 3.49664 2.40503 3.19661 1.15967 3.09684C1.05171 3.08829 1.03175 3.12392 1.03425 3.22298C1.04636 3.74535 1.07879 4.26488 1.18568 4.77798C1.47502 6.16659 2.31737 7.03317 3.67604 7.40981C4.30282 7.58369 4.94528 7.64498 5.59201 7.69273Z" fill="#EBF2E4" />
                                                        </svg>
                                                    </span> -->
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Main_icon/Icons_Tier_1_Ecosystems_Pale_Green.png" class="deactive d-none" style="width: 30px;" alt="">
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Main_icon/Icons_Tier_1_Ecosystems_Dark_Green.png" class="active" style="width: 30px;" alt="">
                                                    <span class="inner-nav-text ml-2">
                                                        Ecosystems
                                                    </span>
                                                </a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                    <!-- <span class="indicator-nav-icon">
                                                        <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.69615 7.49961C2.54229 5.96412 2.38041 3.05502 4.01734 1.30414C5.62613 -0.416163 8.32679 -0.440481 9.96199 1.26663C11.643 3.02167 11.5951 5.78313 9.38496 7.48607C9.44889 7.54443 9.53261 7.54512 9.60591 7.56527C10.629 7.84319 11.5708 8.2823 12.3771 8.98057C13.43 9.89213 14.013 11.0278 13.9998 12.442C13.9953 12.9398 14.0008 13.4377 13.9987 13.9355C13.9939 15.1128 13.1077 16.0039 11.9331 16.0046C8.65057 16.0067 5.36837 16.0063 2.08582 16.0046C0.953651 16.0039 0.0809907 15.1997 0.0229755 14.0637C-0.0110694 13.3942 -0.00585845 12.7199 0.0292286 12.0505C0.0921074 10.8617 0.638215 9.89769 1.50358 9.10459C2.34984 8.3292 3.35798 7.85882 4.45714 7.56562C4.52801 7.54651 4.59888 7.52636 4.69615 7.49961ZM6.9921 15.0009C8.63598 15.0009 10.2795 15.0023 11.9234 15.0003C12.5699 14.9996 12.9906 14.5796 12.9937 13.9362C12.9965 13.4154 12.9892 12.8947 12.9955 12.3739C13.0062 11.5117 12.6769 10.7881 12.1054 10.1624C11.4739 9.4704 10.6849 9.02191 9.81226 8.71446C8.39454 8.21456 6.93721 8.13396 5.46494 8.38131C4.26781 8.58245 3.15649 9.00523 2.22999 9.823C1.43514 10.5244 0.985959 11.3877 1.00854 12.4702C1.01827 12.9329 1.00993 13.396 1.01028 13.8591C1.01097 14.5896 1.41951 15.0009 2.14765 15.0013C3.76235 15.0013 5.37705 15.0009 6.9921 15.0009ZM6.998 7.19703C8.68044 7.20676 10.0912 5.81544 10.1037 4.13404C10.1162 2.4311 8.73325 1.01059 7.05289 1.00017C5.32043 0.989403 3.93119 2.35155 3.91521 4.07602C3.89923 5.81127 5.25789 7.18661 6.998 7.19703Z" class="demo-svg" fill="#074A37" />
                                                        </svg>
                                                    </span> -->
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Main_icon/Icons_Tier_1_Human_Wellbeing_Pale_Green.png" style="width: 30px;" alt="">
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Main_icon/Icons_Tier_1_Human_Wellbeing_Dark_Green.png" class="d-none" style="width: 30px;" alt="">
                                                    <span class="inner-nav-text ml-2">
                                                        Human Well-being
                                                    </span>
                                                </a>
                                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                    <!-- <span class="indicator-nav-icon">
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="demo-svg" d="M10.4269 9.30188L10.427 9.30186C10.8834 8.85159 11.3363 8.39791 11.7893 7.94405C12.0713 7.66151 12.3534 7.3789 12.6365 7.09699C13.0625 6.67276 13.2872 6.16635 13.3003 5.55441C13.2928 4.98657 13.0998 4.4828 12.6934 4.07411L12.6934 4.07406C12.5073 3.88648 12.3214 3.69879 12.1354 3.5111C11.1814 2.54808 10.2277 1.58536 9.25713 0.639984C8.43935 -0.1565 7.12909 -0.14186 6.31931 0.661574L6.3193 0.66158C4.44051 2.52501 2.56797 4.3946 0.706207 6.27492L0.670677 6.23975L0.706205 6.27493C-0.194685 7.18471 -0.159771 8.48806 0.756267 9.38989L0.756276 9.3899C0.998085 9.62809 1.2378 9.86873 1.47734 10.1092L10.4269 9.30188ZM10.4269 9.30188C10.3975 9.33099 10.3719 9.35866 10.3532 9.38608C10.3343 9.41383 10.3205 9.44406 10.3182 9.47801C10.3137 9.54642 10.3571 9.60635 10.4206 9.6694L10.4207 9.66947M10.4269 9.30188L10.4207 9.66947M10.4207 9.66947C11.1357 10.3762 11.8465 11.0868 12.5574 11.7977C12.9282 12.1685 13.2991 12.5393 13.6707 12.9097L13.6707 12.9097M10.4207 9.66947L13.6707 12.9097M13.6707 12.9097C13.8424 13.0807 13.9759 13.2434 13.9454 13.4764C13.9168 13.6942 13.8069 13.854 13.5944 13.9299L13.5943 13.9299M13.6707 12.9097L13.5943 13.9299M13.5943 13.9299C13.4786 13.9713 13.3729 13.977 13.2761 13.953C13.179 13.9291 13.0875 13.8744 13.0022 13.7897C12.6146 13.4047 12.2286 13.0181 11.8425 12.6313C11.6736 12.4621 11.5046 12.2928 11.3354 12.1236C11.1682 11.9563 11.0007 11.7895 10.8333 11.6226C10.4297 11.2204 10.0263 10.8185 9.62702 10.4122L9.62699 10.4121L13.5943 13.9299ZM7.0994 12.6402L7.09941 12.6402C7.44888 12.2877 7.79921 11.9375 8.14945 11.5875C8.53957 11.1976 8.92957 10.8078 9.31814 10.415C9.31815 10.4149 9.31815 10.4149 9.31816 10.4149L9.35371 10.4501L7.0994 12.6402ZM7.0994 12.6402C6.64756 13.0963 6.11016 13.3298 5.46914 13.3056C4.91438 13.2842 4.43847 13.0717 4.04512 12.6797L4.00983 12.7151M7.0994 12.6402L4.00983 12.7151M11.8969 4.83294L11.8969 4.83296C12.1006 5.03725 12.205 5.28349 12.2001 5.58381C12.2068 5.87432 12.0838 6.1227 11.8786 6.32726C11.3719 6.83278 10.8644 7.33778 10.3569 7.84275C9.94175 8.25583 9.52663 8.66889 9.11202 9.0822L9.07672 9.04678L9.11202 9.0822C8.90716 9.28637 8.70405 9.49127 8.50853 9.7026L8.50849 9.70264C8.46477 9.74978 8.41724 9.79171 8.35835 9.7954C8.29774 9.7992 8.24496 9.76186 8.19297 9.70974L8.19293 9.70969C6.68758 8.19646 5.17809 6.68653 3.66528 5.18033C3.66528 5.18032 3.66527 5.18032 3.66527 5.18031L11.8969 4.83294ZM11.8969 4.83294C11.5528 4.48829 11.2089 4.14332 10.865 3.79833C10.1198 3.05079 9.37441 2.30311 8.62677 1.55818C8.35221 1.28462 8.0754 1.14214 7.79254 1.14341C7.50978 1.14468 7.23344 1.28955 6.95964 1.56319L6.95963 1.5632M11.8969 4.83294L6.95963 1.5632M6.95963 1.5632C6.56814 1.95461 6.17711 2.34634 5.78611 2.73804M6.95963 1.5632L5.78611 2.73804M6.31314 11.8946L6.31311 11.8947C5.87006 12.3246 5.21196 12.3134 4.77768 11.8788C4.30841 11.4093 3.83924 10.9397 3.37005 10.47C2.74387 9.84318 2.11765 9.21633 1.49115 8.58972C1.49114 8.58971 1.49113 8.5897 1.49112 8.5897M6.31314 11.8946L1.52648 8.55434L1.49112 8.5897M6.31314 11.8946C6.50374 11.7095 6.69116 11.5213 6.87813 11.3332L6.91285 11.2982C7.08829 11.1217 7.26348 10.9454 7.44109 10.7715C7.48187 10.7316 7.51906 10.6877 7.52048 10.634C7.52192 10.579 7.48572 10.5336 7.4415 10.4913C7.22523 10.2844 7.01432 10.0722 6.8029 9.85937C6.72788 9.78386 6.6528 9.7083 6.5774 9.63288C6.36015 9.41549 6.14288 9.19812 5.92563 8.98076C4.91069 7.96533 3.8959 6.95006 2.88308 5.93282L2.88307 5.93281M6.31314 11.8946L2.88307 5.93281M1.49112 8.5897C1.27998 8.37883 1.15325 8.12865 1.15271 7.82131L1.49112 8.5897ZM2.88307 5.93281C2.86425 5.91391 2.84525 5.8956 2.82602 5.88126M2.88307 5.93281L2.82602 5.88126M4.00983 12.7151L4.04512 12.6797C3.53423 12.1706 3.02485 11.66 2.51542 11.1495M4.00983 12.7151L2.51542 11.1495M2.51542 11.1495C2.26071 10.8942 2.00599 10.6389 1.75106 10.3838L2.51542 11.1495ZM5.78611 2.73804C5.08241 3.44301 4.3788 4.14789 3.67273 4.85061L5.78611 2.73804ZM2.82602 5.88126C2.80669 5.86683 2.78401 5.85398 2.75738 5.84949M2.82602 5.88126L2.75738 5.84949M2.75738 5.84949C2.70005 5.8398 2.65062 5.8719 2.60312 5.92084L2.75738 5.84949Z" fill="#074A37" stroke="#EBF2E4" stroke-width="0.1" />
                                                        </svg>
                                                    </span> -->
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Governance/Main_icon/Icons_Tier_1_Governance_Pale_Green.png" style="width: 30px;" alt="">
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Governance/Main_icon/Icons_Tier_1_Governance_Dark_Green.png" class="d-none" style="width: 30px;" alt="">
                                                    <span class="inner-nav-text ml-2">
                                                        Governance
                                                    </span>
                                                </a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    <!-- <span class="indicator-nav-icon">
                                                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="demo-svg" d="M15.4362 9.98746C15.4346 12.3709 13.6879 14.3807 11.2908 14.7462C11.1364 14.7697 11.0856 14.8139 11.0918 14.9717C11.105 15.2876 11.0992 15.6044 11.0938 15.9208C11.0922 16.0282 11.119 16.0695 11.2359 16.093C12.7174 16.3941 14.1625 16.8249 15.5857 17.3324C15.81 17.4122 15.8765 17.5171 15.8125 17.6922C15.7191 17.9478 15.5655 18.0403 15.3491 17.9631C13.9267 17.453 12.4803 17.0243 10.998 16.729C9.37446 16.4056 7.73646 16.2173 6.07863 16.3449C4.76237 16.4465 3.48203 16.7043 2.29958 17.3291C2.00717 17.4836 1.73128 17.6629 1.47976 17.8789C1.2939 18.0387 1.11011 18.0391 0.970513 17.8875C0.829676 17.7343 0.853218 17.5249 1.03949 17.3638C1.70113 16.7926 2.47635 16.4341 3.29948 16.1665C3.82896 15.9943 4.36794 15.8601 4.92014 15.7853C5.03124 15.7704 5.08039 15.7349 5.07997 15.6061C5.07378 14.4505 5.07626 13.2944 5.07708 12.1388C5.07708 12.0521 5.08121 11.9823 4.96268 11.9629C3.78188 11.7704 2.93273 11.0799 2.30991 10.1072C0.814808 7.7733 0.841241 4.54273 3.06902 2.253C3.608 1.69915 4.2205 1.25227 4.98498 1.05857C5.64745 0.890476 6.24095 1.10359 6.78447 1.45093C8.1313 2.31123 8.96558 3.5544 9.40296 5.0751C9.44963 5.237 9.48928 5.27872 9.67266 5.24031C12.1891 4.71496 14.7391 6.37774 15.3119 8.90537C15.3929 9.2618 15.4395 9.62153 15.4362 9.98746ZM5.76846 9.43981C5.78994 9.45385 5.81142 9.46748 5.83289 9.48152C5.87171 9.42576 5.90393 9.36298 5.95101 9.31549C6.30414 8.95865 6.6585 8.60222 7.01658 8.25033C7.15866 8.11073 7.34534 8.10908 7.47833 8.23133C7.62206 8.36308 7.63279 8.551 7.50435 8.71084C7.47874 8.74305 7.449 8.77197 7.41968 8.80129C7.02608 9.19571 6.63413 9.59179 6.23723 9.98333C5.75607 10.4583 5.75814 10.4562 5.76516 11.1348C5.76681 11.2769 5.7982 11.3074 5.94069 11.2744C6.72169 11.0935 7.32221 10.6462 7.80006 10.023C8.98706 8.47542 9.40544 5.90402 8.16682 3.84846C7.69846 3.07117 7.11901 2.40457 6.31694 1.95026C5.72055 1.61242 5.13077 1.60292 4.53852 1.95109C4.4142 2.02419 4.28617 2.09399 4.17217 2.18114C1.66024 4.1004 1.37526 7.42183 2.9001 9.78963C3.36845 10.5165 4.00945 11.0394 4.87842 11.2385C5.02339 11.2719 5.0841 11.2604 5.0808 11.0848C5.07006 10.514 5.05024 9.9412 5.08493 9.37207C5.11301 8.91445 5.02917 8.54109 4.63268 8.26851C4.5158 8.18797 4.427 8.06654 4.32499 7.96412C3.89794 7.535 3.4684 7.10877 3.04548 6.67552C2.87738 6.50371 2.87656 6.30753 3.02359 6.1671C3.17186 6.02503 3.35565 6.04031 3.53325 6.21171C3.6175 6.29307 3.69928 6.3765 3.78188 6.45952C4.2015 6.8812 4.62153 7.3033 5.07667 7.76091C5.07667 7.64321 5.07667 7.57712 5.07667 7.51063C5.07667 6.69865 5.07667 5.88667 5.07667 5.07469C5.07667 4.99209 5.07708 4.91114 5.10517 4.8306C5.16051 4.67035 5.27822 4.60427 5.43723 4.60881C5.58839 4.61294 5.6966 4.68109 5.74368 4.83597C5.77053 4.92435 5.76805 5.01233 5.76846 5.10154C5.76929 5.55172 5.76888 6.0019 5.76888 6.49297C5.84074 6.4273 5.8808 6.39302 5.91797 6.35626C6.29257 5.98166 6.66593 5.60582 7.04136 5.23205C7.13305 5.14077 7.23837 5.08336 7.37549 5.12714C7.51343 5.17134 7.59645 5.26757 7.62495 5.40386C7.65716 5.55709 7.56547 5.66282 7.46552 5.76277C6.93976 6.2877 6.41524 6.81388 5.88989 7.33964C5.82752 7.40201 5.76557 7.4557 5.7664 7.56267C5.77135 8.18879 5.76846 8.81409 5.76846 9.43981ZM11.0604 11.8092C11.0798 11.8237 11.0992 11.8377 11.1186 11.8522C11.3346 11.6246 11.5473 11.3942 11.7674 11.1703C12.1433 10.7879 12.5212 10.4071 12.9032 10.0304C13.111 9.82556 13.4203 9.90155 13.4889 10.17C13.5298 10.3307 13.4443 10.4451 13.3381 10.5512C12.7884 11.1005 12.2391 11.6502 11.6906 12.2008C11.487 12.4052 11.2231 12.5812 11.1 12.8269C10.9724 13.0813 11.0682 13.4064 11.0624 13.7004C11.0554 14.0717 11.0608 14.0717 11.4193 13.9961C14.2942 13.3903 15.6469 10.125 14.0262 7.66799C13.0759 6.2274 11.4482 5.54965 9.6615 5.88048C9.59501 5.89287 9.52769 5.88337 9.54049 5.99447C9.62475 6.72013 9.54132 7.43629 9.36579 8.13882C9.0011 9.59799 8.29692 10.8263 6.93604 11.5858C6.83981 11.6395 6.83114 11.6783 6.88194 11.7725C7.60182 13.1115 8.70414 13.8826 10.2253 14.0424C10.3479 14.0552 10.3822 14.0222 10.3793 13.904C10.3731 13.6426 10.3636 13.3803 10.3818 13.1201C10.3967 12.9079 10.3198 12.7633 10.1695 12.6192C9.74245 12.2103 9.3282 11.7878 8.91313 11.3665C8.74545 11.1963 8.74338 11.0051 8.89248 10.8577C9.03497 10.7168 9.21421 10.7247 9.38355 10.8853C9.51323 11.0084 9.64003 11.1348 9.7631 11.2645C9.94937 11.4611 10.1311 11.6618 10.3149 11.8609C10.336 11.846 10.3566 11.8307 10.3777 11.8159C10.3777 11.7423 10.3777 11.6688 10.3777 11.5953C10.3777 10.6049 10.3777 9.61451 10.3781 8.62369C10.3781 8.54811 10.3764 8.47171 10.3851 8.39695C10.4074 8.21192 10.516 8.11734 10.7019 8.11115C10.9369 8.10371 11.06 8.2367 11.0604 8.50888C11.0612 9.60914 11.0604 10.7094 11.0604 11.8092ZM5.76846 13.814C5.76846 14.3637 5.77301 14.9139 5.76516 15.4636C5.76309 15.604 5.78953 15.6507 5.94317 15.6395C6.7188 15.5846 7.49402 15.592 8.26966 15.6589C8.92758 15.7155 9.57932 15.8076 10.2277 15.9274C10.3525 15.9505 10.3822 15.9191 10.3793 15.7993C10.3727 15.5247 10.3698 15.2492 10.3801 14.975C10.3855 14.8383 10.3355 14.7961 10.2067 14.7924C10.077 14.7883 9.94648 14.7685 9.81845 14.7437C8.18912 14.4273 6.98726 13.5348 6.23888 12.0529C6.12861 11.8344 6.00347 11.9868 5.88534 11.9794C5.74822 11.9707 5.76846 12.0777 5.76846 12.1653C5.76888 12.7146 5.76846 13.2643 5.76846 13.814Z" fill="#074A37" stroke="#074A37" stroke-width="0.1" />
                                                        </svg>

                                                    </span> -->
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Production/Main_icon/Icons_Tier_1_Production_Pale_Green.png" style="width: 30px;" alt="">
                                                    <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Production/Main_icon/Icons_Tier_1_Production_Dark_Green.png" class="d-none" style="width: 30px;" alt="">
                                                    <span class="inner-nav-text ml-2">
                                                        Production
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-center mt-5 mb-5">
                                                <a class="custom-bg-primary custom-border-radius-50 text-center p-2 d-flex align-items-center custom-cursor-pointer" data-toggle="modal" data-target="#myModal">
                                                    <i class="icn-circle-plus"></i>
                                                    <span class="custom-font-style-small text-light ml-1" id="piller-create">Create Custom Pillar</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 custom-bg-light-pale custom-btrr-15 custom-bbrr-15 max-w-80-percent custom-btlr-15-res custom-bblr-15-res" id="inner-side-main">
                                            <div class="d-flex justify-content-between mt-5 mr-5">
                                                <button class="ml-5 bg-transparent border-0 custom-border-radius-15  p-2" onclick="toggleAside()">
                                                    <i class="icn-menu icn-2x mt-3"></i>
                                                </button>
                                                <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 d-flex align-items-center custom-cursor-pointer">
                                                    <i class="icn-circle-plus"></i>
                                                    <span class="custom-font-style-small text-light pl-1">Add Custom Goal</span>
                                                </a>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="accordion m-5" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-up"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.1.1 Effective conservation and protection of natural ecosystems</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
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
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
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
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.1.4 Ecosystem restoration</td>
                                                                                <td><span class="custom-bg-cyan text-light custom-font-style-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.2.1 Threats to species</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.2 Biodiversity habitat conversion</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.3 Biodiversity habitat degradation</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.2.1 Threats to species</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.2 Biodiversity habitat conversion</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1.2.3 Biodiversity habitat degradation</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                    <div class="accordion m-5" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>2.1.1 Household income & assets</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
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
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
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
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.1.3 Education</td>
                                                                                <td><span class="custom-bg-cyan text-light custom-font-style-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>2.2.1 Child labor</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.2.2 Women’s rights</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2.2.3 Indigenous peoples’ and other marginalized groups’ right</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                    <div class="accordion m-5" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>3.1.1 Land tenure</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
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
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
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
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.1.3 Resource tenure</td>
                                                                                <td><span class="custom-bg-cyan text-light custom-font-style-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>3.2.1 Land-use plan adoption & enforcement</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.2.2 Coordination of government agencies in land-use policy</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3.2.3 Stakeholder participation and inclusion in land-use policy</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                    <div class="accordion m-5" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>4.1.1 Agricultural, agroforestry & tree plantation productivity</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
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
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
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
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4.1.3 Adoption of sustainable land management practices</td>
                                                                                <td><span class="custom-bg-cyan text-light custom-font-style-xs p-1">Optional</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
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
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative d-flex align-items-center h-100">
                                                                                Completed
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Indicator</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Applicability</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Select</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>4.2.1 User-defined indicator(s)</td>
                                                                                <td><span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Core</span></td>
                                                                                <td>
                                                                                    <div class="button b2 button-10" id="button-10">
                                                                                        <input type="checkbox" class="switch-checkbox" />
                                                                                        <div class="knobs">
                                                                                            <span>Defferred</span>
                                                                                        </div>
                                                                                        <div class="layer"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-2 py-1 w-85px d-flex align-items-center">
                                                                                        <i class="icn-edit"></i>
                                                                                        <span class="custom-font-style-xs custom-text-primary pl-1">Not Applicable</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <a class="custom-bg-primary custom-border-radius-35 px-5 py-3 w-160px d-flex align-items-center custom-cursor-pointer">
                                                                                        <i class="icn-circle-plus"></i>
                                                                                        <span class="custom-font-style-small text-light pl-1">Add Custom Indicator</span>
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

        $('.nav-link').on('click', function() {
            let prevActiveLink = $(this).siblings(".active");
            let dNoneImg = prevActiveLink.find('img.d-none');
            let visibleImg = dNoneImg.siblings('img');
            let currentLinkDnoneImg = $(this).find('img.d-none');
            let currentLinkVisibleImg = currentLinkDnoneImg.siblings('img');
            if (!$(this).hasClass('active')) {
                dNoneImg.toggleClass('d-none');
                visibleImg.toggleClass('d-none');
                currentLinkDnoneImg.toggleClass('d-none');
                currentLinkVisibleImg.toggleClass('d-none');
            }
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