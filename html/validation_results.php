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
                            <a href="./datatask_results.php" class="font-text text-secondary">Step 4 /</a>
                            <span class="font-text text-lake">Result Validation</span>
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
                                            <span class="font-heading text-primary">Step 4: Data Tasks & Results</span>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="bg-info h-100 p-5">
                                                <span class="font-subheading text-primary d-block mb-1">Overall progress</span>
                                                <div class="row mt-5">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="bg-primary p-2 br-4 d-inline-block mt-1 w-100 text-center">
                                                            <span class="font-small text-light-primary">Applicable metrics</span>
                                                            <span class="font-small bg-success text-primary p-1 br-4">26</span>
                                                        </span>
                                                        <!-- <div class="bg-primary p-4 w-100 text-light-primary">
                                                            <div class="d-flex flex-column">
                                                                <span class="font-heading">26</span>
                                                                <span class="font-small-text">Applicable metrics</span>
                                                            </div>

                                                        </div> -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="bg-primary p-2 br-4 d-inline-block mt-1 w-100 text-center">
                                                            <span class="font-small text-light-primary">Metrics in validation</span>
                                                            <span class="font-small bg-success text-primary p-1 br-4">16</span>
                                                        </span>
                                                        <!-- <div class="bg-light-yellow p-4 w-100 text-primary">
                                                            <div class="d-flex flex-column">
                                                                <span class="font-heading">9</span>
                                                                <span class="font-small-text">Metrics in validation</span>
                                                            </div>

                                                        </div> -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <span class="bg-primary p-2 br-4 d-inline-block mt-1 w-100 text-center">
                                                            <span class="font-small text-light-primary">Metrics Published</span>
                                                            <span class="font-small bg-success text-primary p-1 br-4">10</span>
                                                        </span>
                                                        <!-- <div class="bg-secondary p-4 text-light w-100">
                                                            <div class="d-flex flex-column">
                                                                <span class="font-heading">0</span>
                                                                <span class="font-small-text">Metrics Published</span>
                                                            </div>

                                                        </div> -->
                                                    </div>

                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                            <thead>
                                                                <tr>
                                                                    <th class="font-subheading text-primary" scope="col">Pillars</th>
                                                                    <th class="font-subheading text-primary" scope="col">Metrics</th>
                                                                    <th class="font-subheading text-primary" scope="col">Metrics in validation</th>
                                                                    <th class="font-subheading text-primary" scope="col">Pending to submit</th>
                                                                    <th class="font-subheading text-primary" scope="col">Submit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white">
                                                                <tr>
                                                                    <td>Ecosystems</td>
                                                                    <td>6</td>
                                                                    <td>6</td>
                                                                    <td>6</td>
                                                                    <td>
                                                                        <label class="container-chkbox">
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Human Well-Being</td>
                                                                    <td>3</td>
                                                                    <td>3</td>
                                                                    <td>3</td>
                                                                    <td>
                                                                        <label class="container-chkbox">
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Governance</td>
                                                                    <td>4</td>
                                                                    <td>4</td>
                                                                    <td>4</td>
                                                                    <td>
                                                                        <label class="container-chkbox">
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Production</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>
                                                                        <label class="container-chkbox">
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="d-flex justify-content-end mt-7">
                                                            <button class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                                Submit for Approval
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom-padding-0 pl-0 pr-0">
                                            <div class="card-wrapper bg-info h-100 p-5">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-white br-15 text-center h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-reference-library icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Reference Library
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-image-gallery icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Image Galary
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
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
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-phone-book icn-3x"></i>

                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Current Plan
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-team icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Our Team
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-hand-shake icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                Partners
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-5-res" style="margin-top: 20px;">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-hand-shake icn-3x"></i>

                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                <a href="./metric_result.php" class="text-primary p-2">Metrics Result</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-white text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-reference-library icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                <a href="./validation_results.php" class="text-primary p-2">Result validation</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row mt-7">
                                        <div class="col-md-12">
                                            <div class="border-color-pale br-15 p-10">
                                                <span class="font-subheading text-primary d-block mb-1">Progress report</span>
                                                <p class="custom-font-style-subtext text-primary d-block my-5">Metrics are considered complete when the result value, result year, methods, and limitations are provided.</p>
                                                <table class="table table-vertical-center table-dark-pale ">
                                                    <thead>
                                                        <tr>
                                                            <th class="font-subheading text-primary" scope="col">Pillars</th>
                                                            <th class="font-subheading text-primary" scope="col">Metrics</th>
                                                            <th class="font-subheading text-primary" scope="col">Metrics in validation</th>
                                                            <th class="font-subheading text-primary" scope="col">Pending to submit</th>
                                                            <th class="font-subheading text-primary" scope="col">Submit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white">
                                                        <tr>
                                                            <td>Ecosystems</td>
                                                            <td>6</td>
                                                            <td>6</td>
                                                            <td>6</td>
                                                            <td>
                                                                <label class="container-chkbox">
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Human Well-Being</td>
                                                            <td>3</td>
                                                            <td>3</td>
                                                            <td>3</td>
                                                            <td>
                                                                <label class="container-chkbox">
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Governance</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                            <td>4</td>
                                                            <td>
                                                                <label class="container-chkbox">
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Production</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>
                                                                <label class="container-chkbox">
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="d-flex justify-content-end mt-10">
                                                    <button class="bg-success text-primary border-0 br-35 px-4 py-2">
                                                        Submit for Approval
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row mt-7 mx-1 border-color-pale br-15">
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
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 bg-info text-primary btrr-15 bbrr-15 max-w-80-percent btlr-15-res bblr-15-res" id="inner-side-main">
                                            <button class="ml-5 bg-transparent border-0 br-15 mt-5 p-2" onclick="toggleAside()">
                                                <span class="svg-icon-2x">
                                                    <svg width="20" height="20" viewBox="0 0 35 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.58338 11.7313C0.674149 11.6539 -0.0142253 11.013 0.000223303 10.176C0.00847967 9.6971 0.243786 9.19139 0.620483 8.8921C1.24074 8.40085 2.20158 8.60519 2.93433 8.60519C3.9509 8.60519 4.96746 8.60622 5.98403 8.60726C9.96979 8.60726 13.9555 8.60829 17.9413 8.60726C21.1293 8.60622 24.3163 8.60622 27.5042 8.60519C29.0977 8.60519 30.6922 8.60416 32.2857 8.60416C33.0123 8.60416 33.7234 8.47309 34.3354 8.92409C34.7884 9.25848 35 9.67336 35 10.2286C34.902 11.0656 34.2869 11.6508 33.485 11.7313C33.4457 11.7323 33.4065 11.7323 33.3673 11.7333C29.7747 11.7302 26.1812 11.724 22.5886 11.724C15.6264 11.7251 8.66425 11.7302 1.70207 11.7333C1.66182 11.7333 1.6226 11.7323 1.58338 11.7313Z" fill="#4C94A0"></path>
                                                        <path d="M5.61455 3.17457C4.80337 3.06827 4.41016 2.67506 4.2409 1.79782C4.2409 1.65953 4.23987 1.52227 4.23987 1.38397C4.40706 0.54492 4.84774 0.13107 5.71879 0C5.87256 0.00722432 6.02634 0.021673 6.18011 0.021673C15.1249 0.022705 24.0686 0.022705 33.0133 0.021673C33.1671 0.021673 33.3209 0.00825637 33.4746 0.00103205C34.3385 0.124878 34.7719 0.528408 34.9711 1.3912C34.9711 1.52433 34.9701 1.65747 34.9701 1.7906C34.8318 2.57805 34.3147 2.98674 33.5789 3.17457C31.8275 3.17148 30.0771 3.16529 28.3258 3.16529C20.7567 3.16838 13.1856 3.17148 5.61455 3.17457Z" fill="#4C94A0"></path>
                                                        <path d="M23.9428 20.2746C20.8487 20.2746 17.7546 20.2539 14.6606 20.288C13.8143 20.2973 13.2972 19.675 13.1465 18.838C13.0175 18.1186 13.7647 17.3508 14.3045 17.1908C14.545 17.1196 14.8092 17.1031 15.062 17.1031C21.0778 17.099 27.0947 17.099 33.1104 17.1C34.385 17.1 35.0951 17.8699 34.9217 19.0495C34.8267 19.6966 34.2189 20.256 33.5315 20.2684C32.3808 20.2901 31.228 20.2808 30.0773 20.2818C28.0317 20.2828 25.9862 20.2818 23.9407 20.2818C23.9428 20.2797 23.9428 20.2777 23.9428 20.2746Z" fill="#4C94A0"></path>
                                                        <path d="M33.3663 11.7333C33.4056 11.7323 33.4448 11.7323 33.484 11.7313C33.4458 11.8025 33.4066 11.8035 33.3663 11.7333Z" fill="#B5B5B5"></path>
                                                        <path d="M1.58337 11.7313C1.62259 11.7323 1.66181 11.7323 1.70103 11.7333C1.65975 11.8045 1.62053 11.8025 1.58337 11.7313Z" fill="#B5B5B5"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample-0">
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingOne-0">
                                                                <div class="btn btn-block text-left indicator-accordian-responsive card-accordian" role="region" data-toggle="collapse" data-target="#collapseOne-0" aria-expanded="true" aria-controls="collapseOne-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pl-0">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <span>
                                                                                    1.1 Conserve and restore natural ecosystems
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="collapseOne-0" class="collapse show" aria-labelledby="headingOne-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span class="text-primary">1.1.1 Effective conservation and protection of natural ecosystems</span>

                                                                    </div>
                                                                    <div class="collapse" id="collapseOneA">
                                                                        <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                            <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="font-text" scope="col">Metrics</th>
                                                                                        <th class="font-text" scope="col">First Review</th>
                                                                                        <th class="font-text w-125px" scope="col">Local Review</th>
                                                                                        <th class="font-text" scope="col">Second Review</th>
                                                                                        <th class="font-text" scope="col">Publication status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type</td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseOneB">
                                                                        <span class="text-primary">1.1.2 Natural ecosystem conversion</span>

                                                                    </div>
                                                                    <div class="collapse border-bottom-secondary" id="collapseOneB">
                                                                        <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                            <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="font-text" scope="col">Metrics</th>
                                                                                        <th class="font-text" scope="col">First Review</th>
                                                                                        <th class="font-text w-125px" scope="col">Local Review</th>
                                                                                        <th class="font-text" scope="col">Second Review</th>
                                                                                        <th class="font-text" scope="col">Publication status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type</td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                    <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="font-text" scope="col">Metrics</th>
                                                                                <th class="font-text" scope="col">First Review</th>
                                                                                <th class="font-text w-125px" scope="col">Local Review</th>
                                                                                <th class="font-text" scope="col">Second Review</th>
                                                                                <th class="font-text" scope="col">Publication status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white">
                                                                            <tr>
                                                                                <td>1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type</td>
                                                                                <td>
                                                                                    <a class="dot_validation" href="#">
                                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                    <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="dot_validation" href="#">
                                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                    <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="dot_validation" href="#">
                                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                    <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="dot_validation" href="#">
                                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                    <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card">
                                                            <div class="card-header bg-white indicator-accordian-card-header" id="headingTwo-0">
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo-0" aria-expanded="false" aria-controls="collapseTwo-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-two icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 pl-0">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <span>
                                                                                    1.2 Protect and restore biodiversity
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo-0" class="collapse" aria-labelledby="headingTwo-0">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseTwoA">
                                                                        <span class="text-primary">1.2.1 Threats to species</span>

                                                                    </div>
                                                                    <div class="collapse" id="collapseTwoA">
                                                                        <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                            <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="font-text" scope="col">Metrics</th>
                                                                                        <th class="font-text" scope="col">First Review</th>
                                                                                        <th class="font-text w-125px" scope="col">Local Review</th>
                                                                                        <th class="font-text" scope="col">Second Review</th>
                                                                                        <th class="font-text" scope="col">Publication status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>1.1.2.1 Total area (ha) & percentage (%) of area of natural ecosystems in the landscape that has been recently converted</td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseTwoB">
                                                                        <span class="text-primary">1.2.2 Biodiversity habitat conversion</span>

                                                                    </div>
                                                                    <div class="collapse border-bottom-secondary" id="collapseTwoB">
                                                                        <div class="mx-5 border-color-pale mb-5 indicator-responsive-collapse">
                                                                            <table class="table table-vertical-center c-table-dark text-light-primary text-primary ">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="font-text" scope="col">Metrics</th>
                                                                                        <th class="font-text" scope="col">First Review</th>
                                                                                        <th class="font-text w-125px" scope="col">Local Review</th>
                                                                                        <th class="font-text" scope="col">Second Review</th>
                                                                                        <th class="font-text" scope="col">Publication status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="bg-white">
                                                                                    <tr>
                                                                                        <td>1.1.2.1 Total area (ha) & percentage (%) of area of natural ecosystems in the landscape that has been recently converted</td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a class="dot_validation" href="#">
                                                                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                                            <circle id="circle_1_2049" cx="12" cy="12" r="8" style="fill: rgb(244, 243, 236);"></circle>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </span>
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
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="d-flex flex-column justify-content-center align-items-center p-5" style="height: 20rem;">
                                                        <h6 class="text-primary">Pillar not ready yet</h6>
                                                        <p class="text-primary">
                                                            You may not enter metric result for this pillar untill the pillar is completed and validated in step 3
                                                            and you have a suitable dataset associated
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="d-flex flex-column justify-content-center align-items-center p-5" style="height: 20rem;">
                                                        <h6 class="text-primary">Pillar not ready yet</h6>
                                                        <p class="text-primary">
                                                            You may not enter metric result for this pillar untill the pillar is completed and validated in step 3
                                                            and you have a suitable dataset associated
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="d-flex flex-column justify-content-center align-items-center p-5" style="height: 20rem;">
                                                        <h6 class="text-primary">Pillar not ready yet</h6>
                                                        <p class="text-primary">
                                                            You may not enter metric result for this pillar untill the pillar is completed and validated in step 3
                                                            and you have a suitable dataset associated
                                                        </p>
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

        function toggleAside() {
            if ($('#inner-side-nav').hasClass('max-w-5-percent')) {
                $('#inner-side-nav').removeClass('max-w-5-percent');
                $('#inner-side-nav').addClass('max-w-20-percent');
                $('#inner-side-nav').find('.inner-nav-text').toggle('d-none')
                $('#inner-side-main').removeClass('max-w-95-percent');
                $('#inner-side-main').addClass('max-w-80-percent');
            } else {
                $('#inner-side-nav').addClass('max-w-5-percent')
                $('#inner-side-nav').removeClass('max-w-20-percent')
                $('#inner-side-nav').find('.inner-nav-text').toggle('d-none')
                $('#inner-side-main').addClass('max-w-95-percent');
                $('#inner-side-main').removeClass('max-w-80-percent');
            }
            // if ($('#inner-side-nav').hasClass('d-none')) {
            //     $('#inner-side-nav').removeClass('d-none');
            //     $('#inner-side-main').addClass('col-md-9');
            //     $('#inner-side-main').removeClass('btlr-15 bblr-15');
            // } else {
            //     $('#inner-side-nav').addClass('d-none')
            //     $('#inner-side-main').removeClass('col-md-9');
            //     $('#inner-side-main').addClass('btlr-15 bblr-15');
            // }
        }
    </script>
</body>
<!--end::Body-->

</html>