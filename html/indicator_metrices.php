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
                        <div class="breadcrumb-nav">
                            <a href="#">Assessments /</a>
                            <span>Demo-LR Shayan</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 p-5">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <span class="steps-default-text steps-heading">Steps</span>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true" style="position: relative;">
                                                <div class="wizard-nav responsive-mobile step-nav-width">
                                                    <div class="wizard-steps metrices-step custom-steps-title px-8 py-8 px-lg-15 py-lg-3 margin-align responsive-nav-progress">
                                                        <!--begin::Wizard Step 1 Nav-->
                                                        <div class="wizard-step custom-width-steps custom-metrices-step" data-wizard-type="step" data-wizard-state="done">
                                                            <div class="wizard-label metrices-label">
                                                                <div class="label-wrapper text-center">
                                                                    <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title" id="step1-title">
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
                                                                    <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title" id="step1-title">
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
                                                                    <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title" id="step1-title">
                                                                        Indicator & Metrics
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
                                                                    <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title" id="step1-title">
                                                                        Data & Results
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
                                                                    <h3 class="wizard-title wizard-nav-title-step wizard-nav-title-responsive step-title" id="step1-title">
                                                                        Report & Publish
                                                                    </h3>
                                                                    <span class="steps-tags-text step-pending-tag p-1">Pending Review</span>
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

                                    <div class="row steps-custom-margin-top-70">
                                        <div class="col-md-6">
                                            <div class="step-card steps-custom-height custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1">Step 3: Indicator & Metrics</span>
                                                <!-- <span class="steps-default-text steps-small-text d-block my-5">View Instructions</span> -->
                                                <span data-toggle="collapse" data-target="#demo" class="steps-default-text steps-small-text d-block my-5">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    Lorem ipsum dolor text Lorem ipsum dolor text Lorem ipsum dolor text Lorem ipsum dolor text Lorem ipsum dolor text Lorem ipsum dolor text
                                                </div>
                                                <span class="frt-dark-clr p-2 step-radius d-inline-block mt-1">
                                                    <span>Pillars Completed</span>
                                                    <span class="bg-warning p-1 step-radius">2/4</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 custom-padding-0 pl-0 pr-0">
                                            <div class="p-4 steps-custom-height">
                                                <div class="row">
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/Reference library.png" alt="">
                                                            </div>
                                                            <span class="mb-2">
                                                                Reference Library
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
                                                            <div class="mb-3 mt-2">
                                                                <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13.7948 26.6709C10.1852 26.6709 6.57484 26.6709 2.96531 26.6709C2.59005 26.6709 2.21567 26.6692 1.84735 26.5721C0.770985 26.2879 0.00661236 25.3476 0.00574572 24.2331C-0.00118736 18.4873 -0.00292063 12.7415 0.00661236 6.99571C0.00834563 5.66975 1.06044 4.61419 2.39506 4.56999C3.13083 4.54573 3.86834 4.55179 4.60412 4.56653C4.86237 4.57173 4.96377 4.51193 4.95077 4.23374C4.92824 3.75882 4.94124 3.28131 4.94557 2.80466C4.95944 1.08178 5.94827 0.0894865 7.66681 0.0886199C12.5754 0.0860199 17.4849 0.0868866 22.3944 0.0868866C24.7049 0.0868866 27.0153 0.0860199 29.3249 0.0877532C31.1024 0.0886199 32.0669 1.04019 32.0678 2.80986C32.0713 8.28093 32.0721 13.7529 32.0695 19.2239C32.0687 20.8255 31.0582 21.8464 29.4575 21.8767C28.9956 21.8854 28.5302 21.9114 28.0726 21.8689C27.6514 21.8299 27.5708 21.998 27.5925 22.3716C27.622 22.8898 27.6003 23.4107 27.6003 23.9306C27.6003 25.6084 26.5551 26.6692 24.8843 26.6701C21.1872 26.6735 17.491 26.6709 13.7948 26.6709ZM1.56049 19.8661C3.2643 18.2724 4.88837 16.7549 6.50985 15.2348C7.03676 14.7417 7.40681 14.7348 7.9346 15.2218C8.91043 16.1214 9.89926 17.0088 10.856 17.9292C11.1351 18.1978 11.2876 18.1666 11.5502 17.9223C13.6535 15.9671 15.7698 14.0267 17.8827 12.0811C18.4538 11.5551 18.836 11.5594 19.3577 12.1028C21.4671 14.2988 23.5748 16.4966 25.6868 18.6901C25.7864 18.7941 25.8653 18.944 26.056 18.9665C26.056 15.0572 26.0568 11.1755 26.0551 7.2947C26.0551 6.43933 25.7344 6.12474 24.8765 6.12474C17.4849 6.12474 10.0934 6.12474 2.70185 6.12474C1.87161 6.12474 1.56049 6.43933 1.56049 7.2791C1.55962 11.3202 1.56049 15.3622 1.56049 19.4033C1.56049 19.5273 1.56049 19.6512 1.56049 19.8661ZM13.7887 25.0997C17.4693 25.0997 21.1508 25.0997 24.8314 25.0997C25.711 25.0997 26.0239 24.8007 26.0438 23.9098C26.0603 23.1888 26.0395 22.466 26.0611 21.745C26.0698 21.4443 25.9667 21.2345 25.7622 21.0222C23.4456 18.626 21.1326 16.2254 18.8334 13.8118C18.6089 13.5761 18.5006 13.6185 18.2952 13.8083C16.412 15.5546 14.5262 17.2974 12.6248 19.0237C12.3579 19.2655 12.4212 19.3747 12.6474 19.5732C13.2549 20.1062 13.8468 20.6565 14.4352 21.2103C14.8096 21.5621 14.827 22.0015 14.5028 22.3568C14.203 22.6853 13.7809 22.687 13.3866 22.3603C13.3199 22.3048 13.2566 22.2459 13.1925 22.187C11.3015 20.4485 9.40701 18.7152 7.52468 16.9672C7.30282 16.761 7.19362 16.728 6.95183 16.9577C5.41442 18.4197 3.87874 19.8834 2.29366 21.2917C1.73815 21.7848 1.43396 22.284 1.55269 23.0293C1.59516 23.2971 1.55962 23.577 1.55962 23.8509C1.55962 24.7955 1.85688 25.098 2.78851 25.0989C6.45612 25.1006 10.1229 25.0997 13.7887 25.0997ZM18.5015 1.65723C15.8149 1.65723 13.1292 1.65723 10.4426 1.65723C9.46074 1.65723 8.47884 1.64943 7.49695 1.65983C6.84524 1.66676 6.51071 2.00995 6.50378 2.65213C6.49945 3.12878 6.53411 3.60803 6.49338 4.08121C6.45872 4.49546 6.61384 4.56999 6.99516 4.56913C12.9455 4.55786 18.8949 4.56046 24.8453 4.56306C25.0897 4.56306 25.3401 4.56046 25.5767 4.61072C26.8706 4.88372 27.5968 5.86995 27.5977 7.34149C27.5994 11.5143 27.5994 15.6872 27.5951 19.86C27.5951 20.1478 27.5882 20.3618 27.9929 20.3228C28.4219 20.2821 28.8587 20.3124 29.292 20.3142C30.2132 20.3185 30.5087 20.0256 30.5087 19.1017C30.5087 13.687 30.5087 8.27226 30.5087 2.85752C30.5087 1.92589 30.2357 1.65636 29.2902 1.65636C25.6937 1.65636 22.098 1.65723 18.5015 1.65723Z" fill="#074A37" />
                                                                    <path d="M11.3777 13.3647C9.9746 13.3681 8.8471 12.2675 8.85404 10.9C8.86097 9.51421 9.9746 8.39192 11.3482 8.38759C12.6776 8.38325 13.8259 9.52721 13.8389 10.8705C13.8519 12.2164 12.7227 13.3612 11.3777 13.3647ZM11.2988 11.7943C11.8257 11.8221 12.246 11.4416 12.2764 10.9104C12.3041 10.4216 11.876 9.97266 11.3603 9.95186C10.8811 9.9328 10.433 10.3462 10.4096 10.8289C10.3845 11.3636 10.7546 11.7657 11.2988 11.7943Z" fill="#074A37" />
                                                                </svg>

                                                            </div>
                                                            <span class="mb-2">
                                                                Image Galary
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/need_help.png" alt="">

                                                            </div>
                                                            <span class="mb-2">
                                                                Need Help
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row custom-margin-top-20">
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
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
                                                            <span class="mb-2">
                                                                Current Plan
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
                                                            <div class="mb-3 mt-2">
                                                                <img src="../assets/media/Community_of_practice.png" alt="">
                                                            </div>
                                                            <span class="mb-2">
                                                                Our Team
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 responsive-margin-card">
                                                        <div class="custom-padding-1 cards-tabs text-center h-100">
                                                            <div class="mb-3 mt-2">
                                                                <svg width="31" height="31" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18.0579 32.9353C17.3123 33.876 16.5433 34.1803 15.6259 33.9001C15.2162 33.7751 14.9052 33.5077 14.6107 33.2125C12.0424 30.6359 9.47257 28.0616 6.90578 25.4835C6.78302 25.36 6.68586 25.2101 6.54426 25.0308C6.29949 25.4827 6.18952 25.8774 6.05245 26.2607C5.83252 26.8776 5.52147 27.038 4.90312 26.858C3.54516 26.4641 2.18645 26.0747 0.827738 25.6838C0.168718 25.4948 -0.106187 25.1461 0.036914 24.6761C0.173237 24.228 0.581453 24.0916 1.22541 24.2792C2.2949 24.5895 3.36741 24.8885 4.43088 25.2169C4.74043 25.3125 4.8745 25.2733 4.98973 24.945C5.85512 22.4791 6.74235 20.0208 7.6228 17.5602C7.95118 16.6421 8.26675 15.7187 8.61698 14.8089C8.73296 14.5084 8.67723 14.4074 8.37295 14.3238C7.23868 14.0135 6.11119 13.6806 4.98371 13.3462C4.59658 13.2317 4.36837 12.9116 4.40076 12.575C4.44444 12.1223 4.87374 11.8105 5.32188 11.9378C6.8139 12.3611 8.30441 12.7904 9.79116 13.2332C10.3681 13.405 10.5323 13.7695 10.3334 14.3329C10.2333 14.6161 10.1467 14.9045 10.0254 15.1787C9.92899 15.3963 10.002 15.4551 10.2084 15.4829C10.991 15.5876 11.7742 15.6916 12.5545 15.8174C13.1556 15.9145 13.7807 15.9032 14.3463 16.1774C14.4465 16.2256 14.5143 16.1578 14.5873 16.1179C16.2586 15.1998 18.0195 15.0182 19.8135 15.6253C20.755 15.9439 21.6535 15.9913 22.5965 15.7413C22.9708 15.6419 23.3572 15.5756 23.7413 15.5259C23.9816 15.495 24.0019 15.4054 23.9213 15.2065C23.8 14.9053 23.6946 14.598 23.5876 14.2914C23.4227 13.8215 23.5575 13.4569 24.0087 13.2792C25.4977 12.6925 26.9912 12.1163 28.4893 11.5499C28.9509 11.3752 29.3351 11.5507 29.4766 11.9498C29.625 12.3679 29.4315 12.7414 28.9637 12.9237C27.8091 13.3718 26.656 13.8222 25.4962 14.2568C25.2597 14.3457 25.2002 14.4247 25.2936 14.6823C26.531 18.104 27.7579 21.5301 28.975 24.9593C29.0745 25.2387 29.1799 25.25 29.4284 25.1498C30.507 24.7153 31.5946 24.3025 32.6791 23.8822C32.7959 23.8371 32.9126 23.7881 33.0331 23.7572C33.4052 23.6616 33.7576 23.8371 33.897 24.1782C34.0416 24.5322 33.9022 24.9322 33.5392 25.0956C33.1062 25.2899 32.658 25.4511 32.2152 25.6221C31.1524 26.0318 30.0897 26.44 29.0263 26.8467C28.5126 27.0433 28.1887 26.9205 27.9673 26.4159C27.8845 26.2276 27.828 26.199 27.6502 26.3112C27.0575 26.6863 26.4565 27.0478 25.8532 27.4056C25.7063 27.4929 25.6626 27.5705 25.698 27.7573C25.93 28.9797 25.3305 29.9151 24.1375 30.2179C23.9755 30.2593 23.9017 30.3256 23.8565 30.5018C23.5583 31.6632 22.7162 32.2318 21.5067 32.1068C21.3764 32.0933 21.2852 32.0865 21.1948 32.2251C20.3596 33.4896 19.3481 33.7148 18.0579 32.9353ZM12.9808 17.3403C11.8586 17.1813 10.771 17.0367 9.68722 16.8688C9.41383 16.8266 9.37843 16.9848 9.3129 17.1685C8.58911 19.1945 7.86833 21.2221 7.12797 23.2421C7.03985 23.4823 7.07223 23.6096 7.24847 23.7851C9.74597 26.2735 12.2352 28.771 14.7267 31.2655C15.0904 31.6293 15.4497 31.9976 15.824 32.3501C16.0839 32.5949 16.3994 32.5873 16.6314 32.3614C16.8566 32.1415 16.8754 31.8063 16.6668 31.5427C16.5734 31.4252 16.4619 31.322 16.3565 31.2151C15.5491 30.3896 14.7425 29.5649 13.9343 28.7409C13.8018 28.6054 13.6752 28.4675 13.6496 28.2687C13.6059 27.9207 13.7302 27.6503 14.0435 27.4884C14.3493 27.3302 14.6333 27.3995 14.8683 27.6345C15.4964 28.2657 16.1162 28.9059 16.7421 29.54C17.4561 30.2638 18.1686 30.9884 18.8894 31.7046C19.1688 31.9825 19.5123 31.9878 19.7601 31.7445C19.9996 31.5088 19.9905 31.1526 19.7345 30.8694C19.6674 30.7948 19.5921 30.7278 19.5213 30.657C18.3599 29.4941 17.197 28.3327 16.0379 27.1668C15.6327 26.7593 15.6003 26.3383 15.9347 26.0137C16.245 25.7124 16.6834 25.7591 17.063 26.1387C18.0474 27.1239 19.0295 28.1113 20.0131 29.0972C20.465 29.5498 20.9154 30.0047 21.3726 30.4529C21.6445 30.7195 22.009 30.7391 22.2485 30.5161C22.5129 30.2698 22.5001 29.9332 22.2109 29.6184C22.1604 29.5626 22.1054 29.5114 22.0519 29.4579C20.6962 28.0992 19.339 26.7413 17.9848 25.3803C17.554 24.9472 17.5104 24.5443 17.8417 24.2038C18.1664 23.871 18.5475 23.9071 18.982 24.3379C20.0417 25.3893 21.0939 26.449 22.1499 27.505C22.5227 27.8778 22.8872 28.2581 23.2713 28.6189C23.5289 28.8607 23.898 28.8531 24.1209 28.634C24.3401 28.4186 24.337 28.0533 24.1119 27.7829C24.0637 27.7249 24.0079 27.6744 23.9544 27.6217C21.8697 25.5543 19.7834 23.4891 17.7039 21.4164C17.5427 21.256 17.4207 21.2394 17.2181 21.3373C16.0906 21.8803 14.9549 22.406 13.8236 22.9415C13.6052 23.0447 13.3823 23.117 13.1405 23.1298C12.1666 23.1803 11.4188 22.7728 10.9646 21.9308C10.5089 21.0865 10.576 20.2249 11.1808 19.4634C11.7464 18.7487 12.358 18.0701 12.9808 17.3403ZM19.7864 21.3094C21.3816 22.9415 23.0032 24.597 24.6195 26.257C24.7648 26.4061 24.8552 26.3029 24.9712 26.2321C25.6558 25.8149 26.3344 25.3871 27.0326 24.9939C27.3083 24.8388 27.3452 24.6994 27.2382 24.4065C26.3548 21.9873 25.4864 19.5621 24.6255 17.1339C24.5449 16.9057 24.4485 16.853 24.2203 16.9012C23.4973 17.0525 22.7727 17.1972 22.0437 17.3162C21.5955 17.3892 21.1579 17.5722 20.6797 17.4013C20.1389 17.2084 19.5838 17.0458 19.025 16.9117C17.1428 16.4628 15.4904 16.9192 14.1264 18.284C13.49 18.9211 12.9341 19.6397 12.3534 20.3303C12.0665 20.6715 12.0733 21.0767 12.3391 21.3938C12.6027 21.7086 12.9349 21.7643 13.3506 21.5685C14.5617 20.9991 15.7705 20.423 16.9862 19.8641C18.1543 19.3271 19.3157 19.3587 20.4575 19.9552C21.1451 20.3145 21.832 20.6745 22.5197 21.0345C23.0085 21.2906 23.1734 21.6657 22.9753 22.0686C22.7712 22.4844 22.3472 22.5845 21.8463 22.3262C21.2792 22.034 20.7151 21.7357 20.151 21.4367C20.0094 21.3644 19.873 21.2786 19.7864 21.3094Z" fill="#074A37" />
                                                                    <path d="M23.6238 6.69352C23.6132 10.3908 20.6269 13.3636 16.9379 13.3492C13.2534 13.3349 10.2807 10.326 10.3085 6.63854C10.3364 2.94878 13.3039 -0.00664478 16.9748 0.000133707C20.6653 0.0069122 23.6343 2.99547 23.6238 6.69352ZM22.1679 6.6777C22.1701 3.80663 19.8579 1.46052 17.0155 1.45148C14.1135 1.44169 11.7719 3.76446 11.7652 6.65887C11.7584 9.54952 14.0781 11.9039 16.9372 11.9084C19.8338 11.913 22.1649 9.58191 22.1679 6.6777Z" fill="#074A37" />
                                                                    <path d="M16.1569 9.36721C15.8986 9.3785 15.7194 9.28511 15.5612 9.12544C14.9707 8.52893 14.3727 7.93996 13.7837 7.34119C13.4365 6.98871 13.4222 6.5933 13.7295 6.27923C14.0406 5.96064 14.4608 5.98022 14.8238 6.33722C15.1808 6.6882 15.5476 7.03239 15.882 7.40446C16.0703 7.61384 16.1735 7.5679 16.3467 7.39241C17.2603 6.463 18.183 5.54263 19.1079 4.62452C19.4136 4.321 19.7495 4.26677 20.0553 4.44527C20.502 4.70587 20.5584 5.21727 20.163 5.62096C19.3564 6.44417 18.5392 7.25759 17.7258 8.07402C17.3808 8.42048 17.0329 8.76392 16.6872 9.10887C16.532 9.26402 16.3595 9.38227 16.1569 9.36721Z" fill="#074A37" />
                                                                </svg>
                                                            </div>
                                                            <span class="mb-2">
                                                                Partners
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row steps-custom-margin-top">
                                        <div class="col-md-6">
                                            <div class="step-card custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1">Progress report</span>
                                                <p class="steps-default-text steps-p-text d-block my-5">You are encouraged to submit your indicators & metrics once the 4 pillars are completed. Select the completed pillars and send them for approval.</p>
                                                <table class="table steps-table-radius custom-step-table-radius steps-custom-margin-top border-custom">
                                                    <thead class="steps-table-header-color">
                                                        <tr>
                                                            <th class="steps-default-text steps-table-header-text" scope="col">Pillars</th>
                                                            <th class="steps-default-text steps-table-header-text" scope="col">Indicators & Metrics</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white">
                                                        <tr>
                                                            <td>Ecosystems</td>
                                                            <td><span class="steps-tags-text steps-success-tag p-1">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Human Well-Being</td>
                                                            <td><span class="steps-tags-text steps-success-tag p-1">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Governance</td>
                                                            <td><span class="steps-tags-text steps-success-tag p-1">Completed</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6 custom-display-none">
                                            <table class="table steps-task steps-table-radius custom-step-table-radius border-custom">
                                                <thead class="steps-table-header-color">
                                                    <tr>
                                                        <th class="steps-default-text steps-table-header-text" scope="col">Tasks</th>
                                                        <th class="steps-default-text steps-table-header-text step-table-custom-col-w" scope="col">Assigned To</th>
                                                        <th class="steps-default-text steps-table-header-text" scope="col">Tasks Type</th>
                                                        <th class="steps-default-text steps-table-header-text" scope="col">Status</th>
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
                                                        <td><span class="steps-tags-text step-required-tag p-1">Required</span></td>
                                                        <td><span class="steps-tags-text steps-success-tag p-1">Completed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="./add_indicator.php#v-pills-profile">Add Metrics</a></td>
                                                        <td>
                                                            <div class="steps-image-container">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Baboon.png" class="accordian-unit-image-1" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Frog.png" class="accordian-unit-image-2" alt="">
                                                                <img src="../assets/media/icons_and_Illustrations/Avatars/Avatars_Parrot.png" class="accordian-unit-image-3" alt="">
                                                                <span class="step-unit-counter d-inline-block">6+</span>
                                                                <img src="../assets/media/add_person.png" class="step-unit-image-4" alt="">
                                                            </div>
                                                        </td>
                                                        <td><span class="steps-tags-text step-required-tag p-1">Required</span></td>
                                                        <td><span class="steps-tags-text steps-success-tag p-1">Completed</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row steps-custom-margin-top custom-lg-display-block">
                                        <div class="col-md-6">
                                            <div class="step-card steps-custom-height text-center custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1">Add Indicators</span>
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
                                                    <span class="steps-tags-text step-required-tag p-1 w-25 mt-2">Required</span>
                                                    <span class="steps-tags-text steps-success-tag p-1 w-25 mt-2">Completed</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 steps-custom-margin-top">
                                            <div class="step-card steps-custom-height text-center custom-padding-40">
                                                <span class="steps-default-text steps-heading d-block mb-1">Add Metrics</span>
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
                                                    <span class="steps-tags-text step-required-tag p-1 w-25 mt-2">Required</span>
                                                    <span class="steps-tags-text steps-success-tag p-1 w-25 mt-2">Completed</span>
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
    <div class="btn-help-center-wrapper">
        <div class="btn-dropdown btn-lg mr-1 d-flex" id="kt_quick_cart_toggle">
            <span class="btn-help-icon"><img src="../assets/media/help.png" alt=""></span><span class="help-center-font-family btn-help-text">Help Center</span>
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
        })
    </script>
</body>
<!--end::Body-->

</html>