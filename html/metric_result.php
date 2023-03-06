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
                            <a href="./datatask_results.php" class="font-text text-secondary">Step 4 /</a>
                            <span class="font-text text-primary">Metrics Results</span>
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
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="font-heading text-primary">Step 4: Data Tasks & Results</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-7">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="bg-light-primary br-15 border-color-pale h-100 p-5">
                                                <div class="d-flex justify-content-between">
                                                    <span class="font-subheading text-primary d-block mb-1">Enter Metric Tasks</span>
                                                    <!-- <a class="bg-success br-35 text-center px-5 py-2 align-items-center cursor-pointer" data-toggle="modal" data-target="#myModal">
                                                        <span class="text-primary">View Instructions</span>
                                                    </a> -->
                                                </div>
                                                <span data-toggle="collapse" data-target="#demo" class="custom-font-style-subtext text-primary d-block mt-5 cursor-pointer">View Instructions <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    <p class="custom-font-style-subtext text-primary">
                                                        Below, you may begin with either specifying a data theme or a dataset. Data themes are descriptions of data requirements for measuring metrics and so are a logical starting point. datasets are specific datasets that fuflill the requirements of one or more data themes. Every metric will require at least one data theme and source, many require multiples of these.

                                                        If you already have known datasets and simply wish to begin inventorying them, you may select "Add dataset" which will prompt you for the level of the framework you wish to associate it to and provide basic information about it. The dataset will then remain in your inventory for you to later associate it with a data theme.

                                                        The main task is to define all data themes needed to measure the metrics. For example, measuring area and proportion of ecosystem types within protected areas requires an ecosystem map and a protected area map. Because those particular data themes are used in multiple metrics, you can choose which level of the framework to associate them to, in this case, they could be associated to all of pillar 1 or to goals 1.1. and 1.2 within that pillar. Finally you will associate the theme to each relevant metric which will automatically populate the selected dataset.
                                                    </p>
                                                </div>
                                                <div class="d-flex justify-content-end mb-2">
                                                    <a href="#" class="c-btn-primary c-btn-xs d-flex align-items-center justify-content-center">Download XLSX</a>
                                                    <a href="#" class="c-btn-primary c-btn-xs d-flex align-items-center justify-content-center ml-1">Result Trackers</a>
                                                </div>
                                                <table class="table table-vertical-center table-dark-pale border-light-primary">
                                                    <thead class="steps-table-header-color">
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
                                                <div class="d-flex justify-content-end mt-2">
                                                    <button class="c-btn-success c-btn-xs d-flex align-items-center justify-content-center">
                                                        Submit for Approval
                                                    </button>
                                                </div>
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header steps-table-header-color">
                                                                <h4 class="modal-title indicator-tab-link">Header</h4>
                                                                <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                body
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer p-2">
                                                                <button type="button" class="bg-primary px-3 py-2 br-35 text-light-primary border-0" data-dismiss="modal">Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <span data-toggle="collapse" data-target="#demo" class="font-text text-primary d-block my-5 cursor-pointer">Progress Report <img src="../assets/media/arrow_down.png" alt=""></span>

                                                <div id="demo" class="collapse mb-2">
                                                    <div class="d-flex justify-content-end mb-2">
                                                        <a href="#" class="bg-primary text-light-primary br-35 px-4 py-2">Download XLSX</a>
                                                        <a href="#" class="bg-primary text-light-primary br-35 px-4 py-2">Result Trackers</a>
                                                    </div>
                                                    <table class="table table-vertical-center steps-table-radius custom-step-table-radius steps-custom-margin-top border-custom">
                                                        <thead class="steps-table-header-color">
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
                                                    <div class="d-flex justify-content-end mt-2">
                                                        <button class="bg-success text-primary border-0 br-35 px-4 py-2">
                                                            Submit for Approval
                                                        </button>
                                                    </div>
                                                </div> -->
                                                <!-- <span class="bg-primary p-2 br-4 d-inline-block mt-1">
                                                    <span class="text-light-primary">Approved</span>
                                                </span> -->
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
                                                <div class="row my-5-res" style="margin-top: 20px;">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 responsive-margin-card">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-hand-shake icn-3x"></i>

                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                <a href="./metric_result.php" class="text-primary font-small p-2">Metrics Result</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-5-res">
                                                        <div class="p-5 bg-light-primary text-center br-15 h-100 cursor-pointer">
                                                            <div class="my-2">
                                                                <i class="icn-reference-library icn-3x"></i>
                                                            </div>
                                                            <span class="font-subtext mb-2">
                                                                <a href="./validation_results.php" class="text-primary font-small p-2">Result validation</a>
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
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="font-heading text-primary d-block mb-1">Progress report</span>
                                                    <div>
                                                        <a href="#" class="bg-primary text-light-primary br-35 px-4 py-2">Download XLSX</a>
                                                        <a href="#" class="bg-primary text-light-primary br-35 px-4 py-2">Result Trackers</a>
                                                    </div>
                                                </div>
                                                <p class="font-text text-primary d-block my-5">Metrics are considered complete when the result value, result year, methods, and limitations are provided.</p>
                                                <table class="table table-vertical-center steps-table-radius custom-step-table-radius steps-custom-margin-top border-custom">
                                                    <thead class="steps-table-header-color">
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
                                    <div class="row border-color-pale br-15 mx-0 mt-5">
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
                                        <div class="col-md-12 col-sm-12 col-xs-12 bg-light-primary btrr-15 bbrr-15 max-w-80-percent btlr-15-res bblr-15-res" id="inner-side-main">
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
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample">
                                                        <div class="bg-light d-none btlr-15 btrr-15" id="headingTwo-header">
                                                            <div class="btn btn-block text-left d-flex justify-content-between align-items-center indicator-accordian-responsive">
                                                                <span class="font-text">
                                                                    Indicator
                                                                </span>
                                                                <span class="p-1 font-text mr-35">Assigned To</span>
                                                            </div>
                                                        </div>
                                                        <div class="card indicator-accordian-card indicator-border-top-15">
                                                            <div class="card-header bg-white indicator-accordian-card-header indicator-border-bottom-15 accordian-header-click" id="headingTwo">
                                                                <div class="btn btn-block text-left collapsed indicator-accordian-responsive card-accordian" role="region" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <div class="row">
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 pr-0 max-w-6-percent">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <i class="icn-ecosystem-goal-one icn-4x"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pl-0">
                                                                            <div class="d-flex h-100 align-items-center">
                                                                                <span>
                                                                                    1.1 Conserve and restore natural ecosystems
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                            <div class="d-flex justify-content-center">
                                                                                <?php include './includes/assign-person.php' ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                                                            <div class="d-flex h-100 align-items-center">
                                                                                <span class=" p-1"> <i class="fas fa-chevron-down"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse indicator-responsive-collapse" aria-labelledby="headingTwo">
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseOneA">
                                                                        <span class="text-primary">1.1.1 Effective conservation and protection of natural ecosystems</span>
                                                                        <span class="pr-20"> <i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse" id="collapseOneA">
                                                                        <div class="mx-10 mt-5">
                                                                            <div class="border-color-pale mb-5">
                                                                                <div class="px-4">
                                                                                    <div class="row py-5 bg-light-primary">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                                    Required
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                            <span>
                                                                                                1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                                    Unsubmitted
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <div class="select-wrapper">
                                                                                                    <select name="indicator_filter" class="form-control bg-primary text-light">
                                                                                                        <option value="">Action</option>
                                                                                                        <option value="1">Remove result</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <span class="d-block font-subheading text-primary">Add results*</span>
                                                                                            <span class="d-block font-small text-primary">Variable Metric</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex">
                                                                                                <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center">
                                                                                                    <i class="icn-stack"></i>
                                                                                                    <span class="text-light pl-2">Add new category</span>
                                                                                                </button>
                                                                                                <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center ml-1">
                                                                                                    <i class="icn-globe"></i>
                                                                                                    <span class="text-light pl-2">Geographic Disaggregation</span>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="indicator-small-text">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="indicator-small-text">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                                        <span class="font-subheading text-primary">Add metadata</span>
                                                                                        <span class="font-small text-primary">Status:Not Started</span>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-md-6">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <label class="font-small text-primary">Result year*</label>
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100 ml-5" type="text">
                                                                                                    <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 margin-top-5">
                                                                                            <div class="h-100 d-flex align-items-center">
                                                                                                <span class="font-small text-primary">Publish metric:</span>
                                                                                                <div class="custom-control custom-radio mx-3">
                                                                                                    <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
                                                                                                    <label class="custom-control-label green" for="rd_1">Yes</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-radio mx-2">
                                                                                                    <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
                                                                                                    <label class="custom-control-label red" for="rd_2">No</label>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="row mb-5">
                                                                                        <div class="col-md-12">
                                                                                            <a href="#" class="c-btn-success c-btn-md">Method*</a>
                                                                                            <a href="#" class="c-btn-success c-btn-md">Limitations*</a>
                                                                                            <a href="#" class="c-btn-success c-btn-md">Synthesis statement*</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="pl-17 py-4 d-flex justify-content-between align-items-center card-accordian" data-toggle="collapse" data-target="#collapseOneB">
                                                                        <span class="text-primary">1.1.2 Natural ecosystem conversion</span>
                                                                        <span class="pr-20"> <i class="fas fa-chevron-down"></i></span>
                                                                    </div>
                                                                    <div class="collapse border-bottom-secondary" id="collapseOneB">
                                                                        <div class="mx-10 mt-5">
                                                                            <div class="border-color-pale mb-5">
                                                                                <div class="px-4">
                                                                                    <div class="row py-5 bg-light-primary">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                                    Required
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                            <span>
                                                                                                1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                                    Unsubmitted
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex align-items-center h-100">
                                                                                                <div class="select-wrapper">
                                                                                                    <select name="indicator_filter" class="form-control bg-primary text-light">
                                                                                                        <option value="">Action</option>
                                                                                                        <option value="1">Remove result</option>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <span class="d-block font-subheading text-primary">Add results*</span>
                                                                                            <span class="d-block font-small text-primary">Variable Metric</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="d-flex">
                                                                                                <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center">
                                                                                                    <i class="icn-stack"></i>
                                                                                                    <span class="text-light pl-2">Add new category</span>
                                                                                                </button>
                                                                                                <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center ml-1">
                                                                                                    <i class="icn-globe"></i>
                                                                                                    <span class="text-light pl-2">Geographic Disaggregation</span>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="indicator-small-text">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="indicator-small-text">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="border-color-pale br-15">
                                                                                                <div class="d-flex justify-content-between align-items-center p-5">
                                                                                                    <span class="font-text text-primary">General results</span>
                                                                                                    <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                                </div>
                                                                                                <div class="px-5">
                                                                                                    <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="px-5 my-5">
                                                                                                    <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                                    <div class="d-flex align-items-center">
                                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                                        <span class="font-subheading text-primary">Add metadata</span>
                                                                                        <span class="font-small text-primary">Status:Not Started</span>
                                                                                    </div>
                                                                                    <div class="row mt-5">
                                                                                        <div class="col-md-6">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <label class="font-small text-primary">Result year*</label>
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100 ml-5" type="text">
                                                                                                    <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6 margin-top-5">
                                                                                            <div class="h-100 d-flex align-items-center">
                                                                                                <span class="font-small text-primary">Publish metric:</span>
                                                                                                <div class="custom-control custom-radio mx-3">
                                                                                                    <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
                                                                                                    <label class="custom-control-label green" for="rd_1">Yes</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-radio mx-2">
                                                                                                    <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
                                                                                                    <label class="custom-control-label red" for="rd_2">No</label>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="p-5">
                                                                                    <div class="row mb-5">
                                                                                        <div class="col-md-12">
                                                                                            <a href="#" class="c-btn-success c-btn-md">Method*</a>
                                                                                            <a href="#" class="c-btn-success c-btn-md">Limitations*</a>
                                                                                            <a href="#" class="c-btn-success c-btn-md">Synthesis statement*</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="mx-5 border-color-pale mb-5">
                                                                    <div class="px-4">
                                                                        <div class="row py-5 bg-light-primary">
                                                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                <div class="d-flex align-items-center h-100">
                                                                                    <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                        Required
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <span>
                                                                                    1.1.1.1 Total area (ha) & percentage (%) of the landscape in designated protected areas disaggregated by natural ecosystem type
                                                                                </span>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                <div class="d-flex align-items-center h-100">
                                                                                    <span class="bg-secondary text-light br-4 font-xs p-2">
                                                                                        Unsubmitted
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                                                <div class="d-flex align-items-center h-100">
                                                                                    <div class="select-wrapper">
                                                                                        <select name="indicator_filter" class="form-control bg-primary text-light">
                                                                                            <option value="">Action</option>
                                                                                            <option value="1">Remove result</option>
                                                                                        </select>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <span class="d-block font-subheading text-primary">Add results*</span>
                                                                                <span class="d-block font-small text-primary">Variable Metric</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="d-flex">
                                                                                    <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center">
                                                                                        <i class="icn-stack"></i>
                                                                                        <span class="text-light pl-2">Add new category</span>
                                                                                    </button>
                                                                                    <button type="button" class="c-btn-primary c-btn-md d-flex align-items-center justify-content-center ml-1">
                                                                                        <i class="icn-globe"></i>
                                                                                        <span class="text-light pl-2">Geographic Disaggregation</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="border-color-pale br-15">
                                                                                    <div class="d-flex justify-content-between align-items-center p-5">
                                                                                        <span class="font-text text-primary">General results</span>
                                                                                        <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                    </div>
                                                                                    <div class="px-5">
                                                                                        <label class="indicator-small-text">Total percent converted (%)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="px-5 my-5">
                                                                                        <label class="indicator-small-text">Total area converted (ha)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="border-color-pale br-15">
                                                                                    <div class="d-flex justify-content-between align-items-center p-5">
                                                                                        <span class="font-text text-primary">General results</span>
                                                                                        <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                    </div>
                                                                                    <div class="px-5">
                                                                                        <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="px-5 my-5">
                                                                                        <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="border-color-pale br-15">
                                                                                    <div class="d-flex justify-content-between align-items-center p-5">
                                                                                        <span class="font-text text-primary">General results</span>
                                                                                        <a href="#"><img src="../assets/media/delete_bin.png" alt=""></a>
                                                                                    </div>
                                                                                    <div class="px-5">
                                                                                        <label class="font-small text-primary">Total percent converted (%)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="px-5 my-5">
                                                                                        <label class="font-small text-primary">Total area converted (ha)</label>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100" type="text">
                                                                                            <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <span class="font-subheading text-primary">Add metadata</span>
                                                                            <span class="font-small text-primary">Status:Not Started</span>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-md-6">
                                                                                <div class="d-flex align-items-center">
                                                                                    <label class="font-small text-primary">Result year*</label>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <input class="p-2 bg-light-primary custom-bordor-color-pale btlr-50 bblr-50 border-0 w-100 ml-5" type="text">
                                                                                        <span class="d-flex align-items-center p-3 bg-primary btrr-50 bbrr-50 border-color-pale"><i class="icn-edit icn-pale icn-13px"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 margin-top-5">
                                                                                <div class="h-100 d-flex align-items-center">
                                                                                    <span class="font-small text-primary">Publish metric:</span>
                                                                                    <div class="custom-control custom-radio mx-3">
                                                                                        <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
                                                                                        <label class="custom-control-label green" for="rd_1">Yes</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio mx-2">
                                                                                        <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
                                                                                        <label class="custom-control-label red" for="rd_2">No</label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-5">
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-12">
                                                                                <a href="#" class="bg-success text-primary border-0 br-35 px-3 py-2">Method*</a>
                                                                                <a href="#" class="bg-success text-primary border-0 br-35 px-3 py-2">Limitations*</a>
                                                                                <a href="#" class="bg-success text-primary border-0 br-35 px-3 py-2">Synthesis statement*</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
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

        }
    </script>
</body>
<!--end::Body-->

</html>