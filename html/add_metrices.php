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

                                    <div class="row mt-7">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="custom-bg-light-pale custom-border-radius-15 custom-border-color-pale h-100 p-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="custom-font-style-headings custom-text-primary d-block mb-1">Select Metrics tasks</span>
                                                    <a href="./add_indicator.php" class="custom-bg-warning custom-border-radius-35 custom-text-primary custom-font-style-small p-2">Select Indicator</a>
                                                </div>
                                                <!-- <span class="steps-default-text steps-small-text d-block my-5">View Instructions</span> -->
                                                <span data-toggle="collapse" data-target="#demo" class="custom-font-style-text custom-text-primary d-block my-5 custom-cursor-pointer">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    Below you may select the metrics applicable to your assessment. You may also Modify a metric to propose an alternative and set Targets and Milestones for any metric. Setting user-defined or creating custom metrics is also supported below. Please read the Step 4 guidelines before engaging in the several functions provided in this interface.
                                                </div>
                                                <span class="custom-bg-primary p-2 custom-border-radius-4 d-inline-block mt-1">
                                                    <span class="custom-text-light-pale">Approved</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom-padding-0 pl-0 pr-0">
                                            <div class="card-wrapper h-100 p-5">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale custom-border-radius-15 text-center h-100 custom-cursor-pointer">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/Reference_library.png" alt="">
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Reference Library
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="mb-3 mt-2">
                                                                <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13.7948 26.6709C10.1852 26.6709 6.57484 26.6709 2.96531 26.6709C2.59005 26.6709 2.21567 26.6692 1.84735 26.5721C0.770985 26.2879 0.00661236 25.3476 0.00574572 24.2331C-0.00118736 18.4873 -0.00292063 12.7415 0.00661236 6.99571C0.00834563 5.66975 1.06044 4.61419 2.39506 4.56999C3.13083 4.54573 3.86834 4.55179 4.60412 4.56653C4.86237 4.57173 4.96377 4.51193 4.95077 4.23374C4.92824 3.75882 4.94124 3.28131 4.94557 2.80466C4.95944 1.08178 5.94827 0.0894865 7.66681 0.0886199C12.5754 0.0860199 17.4849 0.0868866 22.3944 0.0868866C24.7049 0.0868866 27.0153 0.0860199 29.3249 0.0877532C31.1024 0.0886199 32.0669 1.04019 32.0678 2.80986C32.0713 8.28093 32.0721 13.7529 32.0695 19.2239C32.0687 20.8255 31.0582 21.8464 29.4575 21.8767C28.9956 21.8854 28.5302 21.9114 28.0726 21.8689C27.6514 21.8299 27.5708 21.998 27.5925 22.3716C27.622 22.8898 27.6003 23.4107 27.6003 23.9306C27.6003 25.6084 26.5551 26.6692 24.8843 26.6701C21.1872 26.6735 17.491 26.6709 13.7948 26.6709ZM1.56049 19.8661C3.2643 18.2724 4.88837 16.7549 6.50985 15.2348C7.03676 14.7417 7.40681 14.7348 7.9346 15.2218C8.91043 16.1214 9.89926 17.0088 10.856 17.9292C11.1351 18.1978 11.2876 18.1666 11.5502 17.9223C13.6535 15.9671 15.7698 14.0267 17.8827 12.0811C18.4538 11.5551 18.836 11.5594 19.3577 12.1028C21.4671 14.2988 23.5748 16.4966 25.6868 18.6901C25.7864 18.7941 25.8653 18.944 26.056 18.9665C26.056 15.0572 26.0568 11.1755 26.0551 7.2947C26.0551 6.43933 25.7344 6.12474 24.8765 6.12474C17.4849 6.12474 10.0934 6.12474 2.70185 6.12474C1.87161 6.12474 1.56049 6.43933 1.56049 7.2791C1.55962 11.3202 1.56049 15.3622 1.56049 19.4033C1.56049 19.5273 1.56049 19.6512 1.56049 19.8661ZM13.7887 25.0997C17.4693 25.0997 21.1508 25.0997 24.8314 25.0997C25.711 25.0997 26.0239 24.8007 26.0438 23.9098C26.0603 23.1888 26.0395 22.466 26.0611 21.745C26.0698 21.4443 25.9667 21.2345 25.7622 21.0222C23.4456 18.626 21.1326 16.2254 18.8334 13.8118C18.6089 13.5761 18.5006 13.6185 18.2952 13.8083C16.412 15.5546 14.5262 17.2974 12.6248 19.0237C12.3579 19.2655 12.4212 19.3747 12.6474 19.5732C13.2549 20.1062 13.8468 20.6565 14.4352 21.2103C14.8096 21.5621 14.827 22.0015 14.5028 22.3568C14.203 22.6853 13.7809 22.687 13.3866 22.3603C13.3199 22.3048 13.2566 22.2459 13.1925 22.187C11.3015 20.4485 9.40701 18.7152 7.52468 16.9672C7.30282 16.761 7.19362 16.728 6.95183 16.9577C5.41442 18.4197 3.87874 19.8834 2.29366 21.2917C1.73815 21.7848 1.43396 22.284 1.55269 23.0293C1.59516 23.2971 1.55962 23.577 1.55962 23.8509C1.55962 24.7955 1.85688 25.098 2.78851 25.0989C6.45612 25.1006 10.1229 25.0997 13.7887 25.0997ZM18.5015 1.65723C15.8149 1.65723 13.1292 1.65723 10.4426 1.65723C9.46074 1.65723 8.47884 1.64943 7.49695 1.65983C6.84524 1.66676 6.51071 2.00995 6.50378 2.65213C6.49945 3.12878 6.53411 3.60803 6.49338 4.08121C6.45872 4.49546 6.61384 4.56999 6.99516 4.56913C12.9455 4.55786 18.8949 4.56046 24.8453 4.56306C25.0897 4.56306 25.3401 4.56046 25.5767 4.61072C26.8706 4.88372 27.5968 5.86995 27.5977 7.34149C27.5994 11.5143 27.5994 15.6872 27.5951 19.86C27.5951 20.1478 27.5882 20.3618 27.9929 20.3228C28.4219 20.2821 28.8587 20.3124 29.292 20.3142C30.2132 20.3185 30.5087 20.0256 30.5087 19.1017C30.5087 13.687 30.5087 8.27226 30.5087 2.85752C30.5087 1.92589 30.2357 1.65636 29.2902 1.65636C25.6937 1.65636 22.098 1.65723 18.5015 1.65723Z" fill="#074A37" />
                                                                    <path d="M11.3777 13.3647C9.9746 13.3681 8.8471 12.2675 8.85404 10.9C8.86097 9.51421 9.9746 8.39192 11.3482 8.38759C12.6776 8.38325 13.8259 9.52721 13.8389 10.8705C13.8519 12.2164 12.7227 13.3612 11.3777 13.3647ZM11.2988 11.7943C11.8257 11.8221 12.246 11.4416 12.2764 10.9104C12.3041 10.4216 11.876 9.97266 11.3603 9.95186C10.8811 9.9328 10.433 10.3462 10.4096 10.8289C10.3845 11.3636 10.7546 11.7657 11.2988 11.7943Z" fill="#074A37" />
                                                                </svg>

                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Image Galary
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/need_help.png" alt="">

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
                                                            <div class="mb-3 mt-2">
                                                                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 11.6781C0 8.15427 0 4.63049 0 1.10671C0 0.571011 0.214975 0.346296 0.752065 0.346296C4.47412 0.344209 8.19549 0.344209 11.9168 0.346296C12.4066 0.346296 12.6773 0.590491 12.6766 1.00931C12.6759 1.42813 12.4032 1.66884 11.9141 1.66884C8.50577 1.67024 5.09679 1.67371 1.68849 1.66258C1.39282 1.66189 1.30168 1.71824 1.30237 2.03618C1.3142 7.36812 1.31281 12.7001 1.30516 18.032C1.30446 18.2964 1.36081 18.3771 1.64118 18.3764C4.8178 18.3652 7.99443 18.3701 11.171 18.3694C11.8438 18.3694 12.488 18.4919 13.0648 18.8508C13.3104 19.0039 13.3417 18.9246 13.3403 18.6839C13.334 17.4552 13.3375 16.2266 13.3375 14.998C13.3375 11.2773 13.3347 7.55665 13.3389 3.83599C13.3403 2.26924 14.1654 1.03088 15.5227 0.525789C15.9311 0.373429 16.3548 0.32612 16.7861 0.32612C20.2758 0.325424 23.7655 0.324033 27.2552 0.325424C27.8027 0.325424 28.0316 0.560575 28.0316 1.11575C28.033 4.56996 28.033 8.02417 28.0316 11.4784C28.0316 11.98 27.7749 12.2791 27.361 12.2757C26.9491 12.2715 26.7084 11.9779 26.7084 11.4638C26.707 8.32263 26.7021 5.18149 26.7146 2.04035C26.716 1.71685 26.6284 1.64102 26.3132 1.64241C23.1714 1.65423 20.0295 1.6765 16.8877 1.63754C15.5345 1.62084 14.6475 2.66023 14.6545 3.87773C14.6858 9.65005 14.6684 15.4224 14.6684 21.1947C14.6684 21.5425 14.6712 21.8897 14.6677 22.2376C14.6614 22.808 14.4291 23.0446 13.8655 23.0446C9.49508 23.0467 5.12392 23.0474 0.753456 23.046C0.214279 23.0446 0 22.822 0 22.2842C0 18.7493 0 15.2137 0 11.6781ZM7.30845 21.7186C9.19592 21.7186 11.0841 21.7102 12.9715 21.7262C13.3104 21.729 13.3549 21.6114 13.3055 21.3206C13.1476 20.3946 12.3551 19.7135 11.3262 19.7093C8.07165 19.6961 4.81711 19.7059 1.56326 19.701C1.36707 19.701 1.30168 19.7553 1.30724 19.9549C1.31977 20.4294 1.32672 20.9053 1.30516 21.3791C1.29263 21.6483 1.36638 21.7283 1.64536 21.7262C3.53282 21.7123 5.42029 21.7186 7.30845 21.7186Z" fill="#074A37" />
                                                                    <path d="M23.9889 12.3513C28.3976 12.3409 31.9944 15.9322 32 20.3506C32.0056 24.7705 28.422 28.3729 24.0146 28.3778C19.6052 28.3833 16.0084 24.7914 16 20.3757C15.9917 15.9628 19.5767 12.3618 23.9889 12.3513ZM24.0063 13.6836C20.28 13.6975 17.3156 16.694 17.333 20.4286C17.3504 24.0671 20.3524 27.0489 23.9979 27.0476C27.6956 27.0455 30.6837 24.0386 30.6705 20.3332C30.6573 16.6641 27.6567 13.6704 24.0063 13.6836Z" fill="#074A37" />
                                                                    <path d="M7.06694 12.3391C6.08181 12.3391 5.09738 12.3446 4.11225 12.337C3.57655 12.3328 3.26418 11.9432 3.40888 11.475C3.50767 11.155 3.75187 11.0151 4.07051 11.0144C6.05189 11.011 8.03328 11.0089 10.0147 11.0179C10.4314 11.02 10.7104 11.3157 10.702 11.6907C10.6937 12.0671 10.4161 12.3314 9.98684 12.3349C9.01354 12.3433 8.04024 12.3377 7.06694 12.3377C7.06694 12.3377 7.06694 12.3384 7.06694 12.3391Z" fill="#074A37" />
                                                                    <path d="M7.05519 5.65747C8.01666 5.65747 8.97883 5.6526 9.94031 5.65956C10.3988 5.66304 10.7063 5.94828 10.7014 6.33997C10.6965 6.71843 10.4064 6.97654 9.95561 7.00089C9.87491 7.00507 9.79351 7.00228 9.71211 7.00228C8.47235 7.00228 7.23259 7.00228 5.99214 7.00228C5.37783 7.00228 4.76351 7.00854 4.1499 7.00089C3.71925 6.99533 3.45905 6.8054 3.39435 6.47563C3.30321 6.01229 3.61002 5.66373 4.13529 5.65956C5.10859 5.65191 6.08189 5.65747 7.05519 5.65747Z" fill="#074A37" />
                                                                    <path d="M21.0084 7.00357C20.0698 7.00357 19.132 7.00566 18.1935 7.00288C17.7469 7.00148 17.4644 6.81364 17.392 6.48457C17.294 6.03723 17.6168 5.66363 18.1267 5.65876C18.9609 5.65041 19.795 5.65667 20.6292 5.65667C21.7416 5.65667 22.8541 5.6518 23.9658 5.66015C24.4 5.66363 24.6963 5.95026 24.697 6.33221C24.6977 6.70442 24.4264 6.96461 23.9978 6.99801C23.9053 7.00496 23.8128 7.00218 23.7202 7.00218C22.8158 7.00288 21.9121 7.00288 21.0084 7.00357Z" fill="#074A37" />
                                                                    <path d="M7.04129 13.6844C7.99164 13.6844 8.94198 13.683 9.89162 13.6851C10.3939 13.6858 10.6973 13.9342 10.7021 14.3412C10.7077 14.7454 10.3995 15.0118 9.90137 15.0125C7.98955 15.016 6.07773 15.0153 4.16522 15.0125C3.65874 15.0118 3.37281 14.7565 3.37976 14.3335C3.38672 13.9251 3.66709 13.6872 4.15548 13.6858C5.11765 13.683 6.07912 13.6844 7.04129 13.6844Z" fill="#074A37" />
                                                                    <path d="M7.02668 8.34425C7.98885 8.34425 8.95032 8.34355 9.91249 8.34494C10.3891 8.34564 10.6917 8.59471 10.7014 8.98709C10.7112 9.39338 10.3988 9.67097 9.91667 9.67167C7.99302 9.67445 6.06938 9.67445 4.14574 9.67306C3.67335 9.67236 3.38393 9.41565 3.38185 9.00935C3.37976 8.59958 3.66431 8.34703 4.14156 8.34564C5.10304 8.34216 6.06451 8.34425 7.02668 8.34425Z" fill="#074A37" />
                                                                    <path d="M21.0447 9.6722C20.0832 9.6722 19.121 9.67359 18.1595 9.6715C17.6656 9.67011 17.3727 9.40922 17.381 8.98762C17.3887 8.58411 17.6767 8.34408 18.1616 8.34408C20.0734 8.34339 21.9853 8.34339 23.8971 8.34478C24.3987 8.34478 24.6999 8.59593 24.6985 9.0071C24.6971 9.41618 24.3924 9.67081 23.895 9.6722C22.9446 9.67429 21.995 9.67289 21.0447 9.6722Z" fill="#074A37" />
                                                                    <path d="M24.6728 20.5889C24.6728 21.2839 24.6929 21.9796 24.6644 22.6732C24.6512 22.9968 24.7625 23.0823 25.0547 23.042C25.1681 23.0267 25.2871 23.0336 25.4012 23.0482C25.7615 23.0935 26.0238 23.3954 26.0064 23.7349C25.989 24.0709 25.7289 24.3499 25.3747 24.3548C24.4599 24.368 23.5443 24.368 22.6301 24.3548C22.2732 24.3499 22.0172 24.0737 21.9984 23.7349C21.9804 23.3947 22.2412 23.0962 22.603 23.0461C22.6371 23.0413 22.6726 23.0413 22.7067 23.0399C23.3328 23.0079 23.3328 23.0079 23.3328 22.3602C23.3321 21.3528 23.3238 20.3454 23.337 19.338C23.3405 19.0945 23.2758 19.0082 23.0295 19.0305C22.859 19.0458 22.6802 19.034 22.5133 18.9971C22.2002 18.9282 21.9762 18.6409 21.9998 18.3417C22.0249 18.0217 22.1919 17.7768 22.5161 17.7274C23.0545 17.6453 23.6021 17.646 24.1398 17.7246C24.4988 17.7768 24.6665 18.0419 24.6707 18.4698C24.6776 19.1766 24.6728 19.8827 24.6728 20.5889Z" fill="#074A37" />
                                                                    <path d="M24.663 16.3642C24.6582 16.7239 24.3493 17.0258 23.9924 17.0203C23.6355 17.0147 23.3356 16.7044 23.3419 16.3461C23.3475 15.9809 23.6459 15.6907 24.0105 15.6956C24.3736 15.7005 24.6686 16.0024 24.663 16.3642Z" fill="#074A37" />
                                                                </svg>

                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Current Plan
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/Community_of_practice.png" alt="">
                                                            </div>
                                                            <span class="custom-font-style-sub-text mb-2">
                                                                Our Team
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 custom-bg-light-pale text-center custom-border-radius-15 h-100 custom-cursor-pointer">
                                                            <div class="mb-3 mt-2">
                                                                <svg width="31" height="31" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18.0579 32.9353C17.3123 33.876 16.5433 34.1803 15.6259 33.9001C15.2162 33.7751 14.9052 33.5077 14.6107 33.2125C12.0424 30.6359 9.47257 28.0616 6.90578 25.4835C6.78302 25.36 6.68586 25.2101 6.54426 25.0308C6.29949 25.4827 6.18952 25.8774 6.05245 26.2607C5.83252 26.8776 5.52147 27.038 4.90312 26.858C3.54516 26.4641 2.18645 26.0747 0.827738 25.6838C0.168718 25.4948 -0.106187 25.1461 0.036914 24.6761C0.173237 24.228 0.581453 24.0916 1.22541 24.2792C2.2949 24.5895 3.36741 24.8885 4.43088 25.2169C4.74043 25.3125 4.8745 25.2733 4.98973 24.945C5.85512 22.4791 6.74235 20.0208 7.6228 17.5602C7.95118 16.6421 8.26675 15.7187 8.61698 14.8089C8.73296 14.5084 8.67723 14.4074 8.37295 14.3238C7.23868 14.0135 6.11119 13.6806 4.98371 13.3462C4.59658 13.2317 4.36837 12.9116 4.40076 12.575C4.44444 12.1223 4.87374 11.8105 5.32188 11.9378C6.8139 12.3611 8.30441 12.7904 9.79116 13.2332C10.3681 13.405 10.5323 13.7695 10.3334 14.3329C10.2333 14.6161 10.1467 14.9045 10.0254 15.1787C9.92899 15.3963 10.002 15.4551 10.2084 15.4829C10.991 15.5876 11.7742 15.6916 12.5545 15.8174C13.1556 15.9145 13.7807 15.9032 14.3463 16.1774C14.4465 16.2256 14.5143 16.1578 14.5873 16.1179C16.2586 15.1998 18.0195 15.0182 19.8135 15.6253C20.755 15.9439 21.6535 15.9913 22.5965 15.7413C22.9708 15.6419 23.3572 15.5756 23.7413 15.5259C23.9816 15.495 24.0019 15.4054 23.9213 15.2065C23.8 14.9053 23.6946 14.598 23.5876 14.2914C23.4227 13.8215 23.5575 13.4569 24.0087 13.2792C25.4977 12.6925 26.9912 12.1163 28.4893 11.5499C28.9509 11.3752 29.3351 11.5507 29.4766 11.9498C29.625 12.3679 29.4315 12.7414 28.9637 12.9237C27.8091 13.3718 26.656 13.8222 25.4962 14.2568C25.2597 14.3457 25.2002 14.4247 25.2936 14.6823C26.531 18.104 27.7579 21.5301 28.975 24.9593C29.0745 25.2387 29.1799 25.25 29.4284 25.1498C30.507 24.7153 31.5946 24.3025 32.6791 23.8822C32.7959 23.8371 32.9126 23.7881 33.0331 23.7572C33.4052 23.6616 33.7576 23.8371 33.897 24.1782C34.0416 24.5322 33.9022 24.9322 33.5392 25.0956C33.1062 25.2899 32.658 25.4511 32.2152 25.6221C31.1524 26.0318 30.0897 26.44 29.0263 26.8467C28.5126 27.0433 28.1887 26.9205 27.9673 26.4159C27.8845 26.2276 27.828 26.199 27.6502 26.3112C27.0575 26.6863 26.4565 27.0478 25.8532 27.4056C25.7063 27.4929 25.6626 27.5705 25.698 27.7573C25.93 28.9797 25.3305 29.9151 24.1375 30.2179C23.9755 30.2593 23.9017 30.3256 23.8565 30.5018C23.5583 31.6632 22.7162 32.2318 21.5067 32.1068C21.3764 32.0933 21.2852 32.0865 21.1948 32.2251C20.3596 33.4896 19.3481 33.7148 18.0579 32.9353ZM12.9808 17.3403C11.8586 17.1813 10.771 17.0367 9.68722 16.8688C9.41383 16.8266 9.37843 16.9848 9.3129 17.1685C8.58911 19.1945 7.86833 21.2221 7.12797 23.2421C7.03985 23.4823 7.07223 23.6096 7.24847 23.7851C9.74597 26.2735 12.2352 28.771 14.7267 31.2655C15.0904 31.6293 15.4497 31.9976 15.824 32.3501C16.0839 32.5949 16.3994 32.5873 16.6314 32.3614C16.8566 32.1415 16.8754 31.8063 16.6668 31.5427C16.5734 31.4252 16.4619 31.322 16.3565 31.2151C15.5491 30.3896 14.7425 29.5649 13.9343 28.7409C13.8018 28.6054 13.6752 28.4675 13.6496 28.2687C13.6059 27.9207 13.7302 27.6503 14.0435 27.4884C14.3493 27.3302 14.6333 27.3995 14.8683 27.6345C15.4964 28.2657 16.1162 28.9059 16.7421 29.54C17.4561 30.2638 18.1686 30.9884 18.8894 31.7046C19.1688 31.9825 19.5123 31.9878 19.7601 31.7445C19.9996 31.5088 19.9905 31.1526 19.7345 30.8694C19.6674 30.7948 19.5921 30.7278 19.5213 30.657C18.3599 29.4941 17.197 28.3327 16.0379 27.1668C15.6327 26.7593 15.6003 26.3383 15.9347 26.0137C16.245 25.7124 16.6834 25.7591 17.063 26.1387C18.0474 27.1239 19.0295 28.1113 20.0131 29.0972C20.465 29.5498 20.9154 30.0047 21.3726 30.4529C21.6445 30.7195 22.009 30.7391 22.2485 30.5161C22.5129 30.2698 22.5001 29.9332 22.2109 29.6184C22.1604 29.5626 22.1054 29.5114 22.0519 29.4579C20.6962 28.0992 19.339 26.7413 17.9848 25.3803C17.554 24.9472 17.5104 24.5443 17.8417 24.2038C18.1664 23.871 18.5475 23.9071 18.982 24.3379C20.0417 25.3893 21.0939 26.449 22.1499 27.505C22.5227 27.8778 22.8872 28.2581 23.2713 28.6189C23.5289 28.8607 23.898 28.8531 24.1209 28.634C24.3401 28.4186 24.337 28.0533 24.1119 27.7829C24.0637 27.7249 24.0079 27.6744 23.9544 27.6217C21.8697 25.5543 19.7834 23.4891 17.7039 21.4164C17.5427 21.256 17.4207 21.2394 17.2181 21.3373C16.0906 21.8803 14.9549 22.406 13.8236 22.9415C13.6052 23.0447 13.3823 23.117 13.1405 23.1298C12.1666 23.1803 11.4188 22.7728 10.9646 21.9308C10.5089 21.0865 10.576 20.2249 11.1808 19.4634C11.7464 18.7487 12.358 18.0701 12.9808 17.3403ZM19.7864 21.3094C21.3816 22.9415 23.0032 24.597 24.6195 26.257C24.7648 26.4061 24.8552 26.3029 24.9712 26.2321C25.6558 25.8149 26.3344 25.3871 27.0326 24.9939C27.3083 24.8388 27.3452 24.6994 27.2382 24.4065C26.3548 21.9873 25.4864 19.5621 24.6255 17.1339C24.5449 16.9057 24.4485 16.853 24.2203 16.9012C23.4973 17.0525 22.7727 17.1972 22.0437 17.3162C21.5955 17.3892 21.1579 17.5722 20.6797 17.4013C20.1389 17.2084 19.5838 17.0458 19.025 16.9117C17.1428 16.4628 15.4904 16.9192 14.1264 18.284C13.49 18.9211 12.9341 19.6397 12.3534 20.3303C12.0665 20.6715 12.0733 21.0767 12.3391 21.3938C12.6027 21.7086 12.9349 21.7643 13.3506 21.5685C14.5617 20.9991 15.7705 20.423 16.9862 19.8641C18.1543 19.3271 19.3157 19.3587 20.4575 19.9552C21.1451 20.3145 21.832 20.6745 22.5197 21.0345C23.0085 21.2906 23.1734 21.6657 22.9753 22.0686C22.7712 22.4844 22.3472 22.5845 21.8463 22.3262C21.2792 22.034 20.7151 21.7357 20.151 21.4367C20.0094 21.3644 19.873 21.2786 19.7864 21.3094Z" fill="#074A37" />
                                                                    <path d="M23.6238 6.69352C23.6132 10.3908 20.6269 13.3636 16.9379 13.3492C13.2534 13.3349 10.2807 10.326 10.3085 6.63854C10.3364 2.94878 13.3039 -0.00664478 16.9748 0.000133707C20.6653 0.0069122 23.6343 2.99547 23.6238 6.69352ZM22.1679 6.6777C22.1701 3.80663 19.8579 1.46052 17.0155 1.45148C14.1135 1.44169 11.7719 3.76446 11.7652 6.65887C11.7584 9.54952 14.0781 11.9039 16.9372 11.9084C19.8338 11.913 22.1649 9.58191 22.1679 6.6777Z" fill="#074A37" />
                                                                    <path d="M16.1569 9.36721C15.8986 9.3785 15.7194 9.28511 15.5612 9.12544C14.9707 8.52893 14.3727 7.93996 13.7837 7.34119C13.4365 6.98871 13.4222 6.5933 13.7295 6.27923C14.0406 5.96064 14.4608 5.98022 14.8238 6.33722C15.1808 6.6882 15.5476 7.03239 15.882 7.40446C16.0703 7.61384 16.1735 7.5679 16.3467 7.39241C17.2603 6.463 18.183 5.54263 19.1079 4.62452C19.4136 4.321 19.7495 4.26677 20.0553 4.44527C20.502 4.70587 20.5584 5.21727 20.163 5.62096C19.3564 6.44417 18.5392 7.25759 17.7258 8.07402C17.3808 8.42048 17.0329 8.76392 16.6872 9.10887C16.532 9.26402 16.3595 9.38227 16.1569 9.36721Z" fill="#074A37" />
                                                                </svg>
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
                                    <div class="row custom-border-color-pale custom-border-radius-15 mx-0 mt-5">
                                        <div class="col-md-3 col-sm-12 col-xs-12 pr-0 mt-7">
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
                                                    <span class="ml-2">
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
                                                    <span class="ml-2">
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
                                                    <span class="ml-2">
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
                                                    <span class="ml-2">
                                                        Production
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-xs-12 custom-bg-light-pale custom-btrr-15 custom-bbrr-15">

                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <!-- <div class="mt-5 px-5">
                                                        <div class="select-wrapper">
                                                            <select name="indicator_filter" class="form-control custom-bg-primary text-light custom-select-arrow">
                                                                <option value="1">1.1 Conserve and restore natural ecosystems</option>
                                                                <option value="1">1.2 Protect and restore biodiversity</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <div class="accordion m-5" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Sub icons/Icons_Tier 2_Ecosystems_B_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span class="custom-text-primary">1.1.1 Effective conservation and protection of natural ecosystems</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text custom-text-primary" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.1.2 Percentage (%) of the total area of designated protected areas with effective management disaggregated by IUCN category
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.1.3 Total area (ha) & percentage (%) of the landscape that is effectively conserved in other ways disaggregated by natural ecosystem type
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneB">
                                                                        <span class="custom-text-primary">1.1.2 Natural ecosystem conversion</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneB">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.2.1 Total area (ha) & percentage (%) of area of natural ecosystems in the landscape that has been recently converted
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.2.2 Natural ecosystem conversion rate (average area [ha] & percentage [%] conversion per yr)
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.2.3 User-defined metric for ecosystem category (e.g., forest ecosystem types) of area (ha) & percentage (%) of area in the landscape that has been recently converted
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.1.2.4 User-defined metric for ecosystem category (e.g., forest ecosystem types) of conversion rate (average area [ha] & percentage [%] conversion per yr)
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Ecosystems/Sub icons/Icons_Tier 2_Ecosystems_A_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center custom-cursor-pointer" data-toggle="collapse" data-target="#collapseTwoA">
                                                                        <span class="custom-text-primary">1.2.1 Threats to species</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseTwoA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.2.1.1 Changes in threats to threatened species
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            1.2.1.2 Changes in threats to populations of indicator species or other species identified as important in the landscape
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
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
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                                    <div class="accordion m-5" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Sub icons/Icons_Tier 2_Human Wellbeing_A_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-up"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show custom-cursor-pointer custom-text-primary" aria-labelledby="headingOne-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span>2.1.1 Household income & assets</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.1.1.1 Percentage (%) of female and male population living below the local poverty line (or, if this is not specified, earning <$1.90 /day) </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.1.1.2 Percentage (%) of households owning or lacking context-appropriate asset(s). Examples include radio, TV, telephone, computer, animal cart, bicycle, motorbike, refrigerator, car, or truck
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneB">
                                                                        <span>2.1.2 Health & nutrition</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneB">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.1.2.1 Percentage (%) of girls and boys that are undernourished (required)
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.1.2.2 Percentage (%) of female and male population without access to health services
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.1.2.3 Mortality rate of girls and boys under 18 years (averaged over the past five years)
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Human_Wellbeing/Sub icons/Icons_Tier 2_Human Wellbeing_B_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                            <div id="collapseTwo-0" class="collapse custom-text-primary custom-cursor-pointer" aria-labelledby="headingTwo-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwoA">
                                                                        <span>2.2.1 Child labor</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseTwoA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            2.2.1 Changes in species
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
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
                                                    <!-- <div class="accordion m-5" id="accordionExample-1">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span>
                                                                                2.1.1 Household income & assets
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative">Completed</span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class=" p-1"><img src="../assets/media/Vector_arrow_down.png" alt=""></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="container-chkbox">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    2.1.1.1 Percentage (%) of female and male population living below the local poverty line (or, if this is not specified, earning <$1.90 /day) </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                        <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                        <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="container-chkbox">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    2.1.1.2 Percentage (%) of households owning or lacking context-appropriate asset(s). Examples include radio, TV, telephone, computer, animal cart, bicycle, motorbike, refrigerator, car, or truck
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                        <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                        <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
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
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <span>
                                                                                2.1.2 Health & nutrition
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                            <div class="steps-image-container indicator-image-container-responsive mr-5">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="step-unit-image-1" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="step-unit-image-2" alt="">
                                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="step-unit-image-3" alt="">
                                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                            <span class="steps-tags-text steps-success-tag p-1 custom-position-relative">Completed</span>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <span class=" p-1"><img src="../assets/media/Vector_arrow_down.png" alt=""></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="mx-5 custom-border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center indicator-table">
                                                                        <thead class="steps-table-header-color">
                                                                            <tr>
                                                                                <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="container-chkbox">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    2.1.2.1 Percentage (%) of girls and boys that are undernourished (required)
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                        <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                        <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="container-chkbox">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    2.1.2.2 Percentage (%) of female and male population without access to health services
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                        <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                        <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div> -->
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="accordion m-5" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Governance/Sub icons/Icons_Tier 2_Governance_A_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                                            <span class="d-flex align-items-center h-100 p-1"><i class="fas fa-chevron-up"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse custom-text-primary custom-cursor-pointer show" aria-labelledby="headingOne-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span>3.1.1 Land tenure</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.1.1.1 Percentage (%) of the landscape with formalized land tenure rights
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.1.1.2 User-defined metric(s) for gender dimension of land tenure rights
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneB">
                                                                        <span>3.1.2 Land conflicts</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneB">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.1.2.1 Number of unresolved land and resource conflicts or grievances, and the area of land (ha) subject to such conflicts
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.1.2.2 Number of women and men, young and adult (e.g., environmental and human rights defenders) subject to violence or receiving threats of violence as a result of conflicts over land & resources
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Governance/Sub icons/Icons_Tier 2_Governance_B_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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
                                                            <div id="collapseTwo-0" class="collapse custom-text-primary custom-cursor-pointer" aria-labelledby="headingTwo-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwoA">
                                                                        <span>3.2.1 Land-use plan adoption & enforcement</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseTwoA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.2.1.1 Quality and status of land-use and/or zoning plans (based on Sustainable Landscapes Rating Tool [SLRT] indicators 1.1.1, 1.1.2 and 1.1.3)
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            3.2.1.2 Percentage (%) of landscape covered by land-use or zoning plans that are formally adopted and enforceable
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
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
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="accordion m-5" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <img src="../assets/media/icons_and_Illustrations/Icons/PNGs/Production/Sub icons/Icons_Tier 2_Production_A_Pale Green.png" style="width: 30px;" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
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

                                                            <div id="collapseOne-0" class="collapse show custom-text-primary custom-cursor-pointer" aria-labelledby="headingOne-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span>4.1.1 Agricultural, agroforestry & tree plantation productivity</span>
                                                                        <span class="d-flex align-items-center h-100 pr-20"><i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse custom-border-bottom-pale" id="collapseOneA">
                                                                        <div class="mx-10 mt-5">
                                                                            <table class="table table-vertical-center indicator-table">
                                                                                <thead class="steps-table-header-color">
                                                                                    <tr>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Include</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Metric</th>
                                                                                        <th class="custom-font-style-sub-text w-125px" scope="col">Target</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Milestone</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Type</th>
                                                                                        <th class="custom-font-style-sub-text" scope="col">Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            4.1.1.1 Average crop productivity (yield/ha) disaggregated by crop
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            4.1.1.2 Average productivity of pasture-raised animals (livestock units/ha or meat or dairy production/ha) disaggregated by animal type
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <label class="container-chkbox">
                                                                                                <input type="checkbox" checked="checked">
                                                                                                <span class="checkmark"></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            4.1.1.3 Average forest plantation productivity (timber volume/ha) disaggregated by plantation type
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" class="custom-bg-warning custom-border-radius-35 px-3 py-2 align-items-center">
                                                                                                <span><img src="../assets/media/dark_edit.png" style="width: 10%;" alt=""></span>
                                                                                                <span class="custom-font-style-xs custom-text-primary">Add/Edit</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Required</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="custom-bg-primary custom-text-light-pale custom-font-style-xs custom-border-radius-3 p-1">Modify</span>
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

    <script src="../assets/js/updated.bundle.js"></script>
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
    </script>
</body>
<!--end::Body-->

</html>