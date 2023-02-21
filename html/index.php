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
                            <a href="#" class="custom-font-style-text custom-text-grey">Main /</a>
                            <span class="custom-font-style-text custom-text-primary">Assessments</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 p-5">
                                    <div class="row p-5">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card w-100 h-100 p-5 custom-bg-grey">
                                                <div class="row mb-5 ml-5">
                                                    <div class="col-md-12 mt-5">
                                                        <h2 class="custom-font-family custom-font-style-headings custom-text-primary mt-4">Welcome to the LandScale</h2>
                                                        <p class="custom-font-family custom-font-style-sub-text custom-text-grey pb-3">Select an assessment or create a new assessment
                                                        </p>
                                                        <a href="./overview.php" class="custom-btn-grey d-flex justify-content-center w-75 my-5 align-items-center">
                                                            <i class="icn-add-folder icn-2x"></i>
                                                            <span class="text-light pl-2">
                                                                create a new assessment
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card w-100 h-100 p-5 custom-bg-pale mt-5-res">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="box-colors">
                                                            <ul>
                                                                <li>
                                                                    Overview (10 Assessments)
                                                                </li>
                                                                <li>
                                                                    Objectives (25 Assessments)
                                                                </li>
                                                                <li>
                                                                    Boundary (35 Assessments)
                                                                </li>
                                                                <li>
                                                                    Payment plan ( 30 Assessments)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div id="chart">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-5">
                                        <div class="col-md-12">
                                            <!-- <div class="d-flex justify-content-between py-5">
                                                <h3 class="custom-font-style-headings custom-text-primary">
                                                    Assessments
                                                </h3>

                                            </div> -->

                                            <div>
                                                <!--begin: Datatable-->
                                                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row my-5">
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <!-- <div class="dataTables_length" id="kt_datatable_length">
                                                                <label class="entries-label">Show
                                                                    <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm custom-bg-light-pale custom-border-radius-0">
                                                                        <option value="10">10</option>
                                                                        <option value="25">25</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> entries</label>
                                                            </div> -->
                                                            <h3 class="custom-font-style-subheadings custom-text-primary mt-4">
                                                                Assessments
                                                            </h3>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div id="kt_datatable_filter" class="dataTables_filter mr-5">
                                                                <div class="input-group custom-search-bar table-searchbar">
                                                                    <input type="text" class="form-control custom-btlr-50 custom-bblr-50 custom-bg-light-grey outline-0 border-0 w-50" placeholder="search for anything">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text custom-btrr-50 custom-bbrr-50 custom-bg-light-grey">
                                                                            <i class="icn-search"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="d-flex justify-content-end">
                                                                <!--begin::Dropdown-->
                                                                <button type="button" class="btn btn-light-primary font-weight-bolder custom-btlr-11 custom-bblr-11 tablinks active" onclick="openCity(event, 'table_view')">
                                                                    <i class="icn-list"></i>
                                                                </button>
                                                                <!--end::Dropdown-->

                                                                <!--begin::Button-->

                                                                <button type="button" class="btn btn-light-primary font-weight-bolder custom-btrr-11 custom-bbrr-11 tablinks" onclick="openCity(event, 'grid_view')">
                                                                    <i class="icn-grid"></i>
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 pr-1">
                                                            <div class="card card-custom card-border gutter-b card-shadowless" id="sub_menu_wizard">
                                                                <div class="custom-bg-light-pale custom-padding-15" style="position: -webkit-sticky;position: sticky; top: 0px;">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-md-6">
                                                                            <div class="d-flex align-items-center h-100">
                                                                                <span class="custom-font-family custom-text-primary custom-font-style-text p-1">Filters</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="text-align: right;"><a class="btn btn-secondary btn-sm btn-text-white btn-hover-primary" id="btn_clear_all" style="display:none">{!!trans('data_resources.label_clear_filter')!!}</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body pt-2 mt-5" id="filters_body">
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Country:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-country_map" class="form-control"> <!-- select input with unique countries of the assessment -->
                                                                        </select>
                                                                    </div>

                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Continent:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-continent_map" class="form-control"> <!-- select input with unique countries of the assessment -->
                                                                        </select>
                                                                    </div>
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Test Assessments:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <div id="test_filters_map">
                                                                            <div class="d-inline">
                                                                                <input type="checkbox" class="btn-check filter_test_map" value="{!!trans('general.filter_test_val')!!}" name="test_filter_map" id="test_map" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="test_map">Test</label>
                                                                            </div>

                                                                            <div class="d-inline">
                                                                                <input type="checkbox" class="btn-check filter_test_map" value="{!!trans('general.filter_test_val2')!!}" name="test_filter_map" id="official_map" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="official_map">Official</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Assigned tasks to:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-user_map" class="form-control"> <!-- select input with unique countries of the assessment -->
                                                                        </select>
                                                                    </div>
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Assessment contact:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-concat_user_map" class="form-control"> <!-- select input with unique countries of the assessment -->

                                                                        </select>

                                                                    </div>

                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Assessments:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-name_map" class="form-control"> <!-- select input with unique countries of the assessment -->
                                                                        </select>

                                                                    </div>
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Steps completed:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <div id="filter_steps_map">
                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="0" name="steps_map" id="step-map-0" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-0">Step 0 (in process)</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="9" name="steps_map" id="step-map-9" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-9">Plan change (pending)</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="1" name="steps_map" id="step-map-1" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-1">Step 1</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="2" name="steps_map" id="step-map-2" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-2">Step 2</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="3" name="steps_map" id="step-map-3" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-3">Step 3</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="4" name="steps_map" id="step-map-4" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-4">Step 4</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="5" name="steps_map" id="step-map-5" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-5">Step 5</label>
                                                                            </div>

                                                                            <div class="step-custom-filter d-inline">
                                                                                <input type="radio" class="btn-check filter_div_map" value="7" name="steps_map" id="step-map-7" autocomplete="off">
                                                                                <label class="mr-1 btn btn-outline-primary btn-sm custom-border-radius-0" for="step-map-7">Assessment Expired</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="demo-assessment mb-5"><!-- indicators filter -->
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-md-8"><label class="">Status:</label></div>
                                                                            <div class="col-md-4" style="text-align: right;"><i class="fas fa-filter"></i><span id="table-filter-indicators-total"></span></div>
                                                                        </div>
                                                                        <select id="table-filter-status_map" class="form-control"> <!-- select input with unique status of the assessment  -->
                                                                            <option value="">All</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 pl-1">
                                                            <div id="table_view" class="tabcontent">
                                                                <div class="row">
                                                                    <div class="col-sm-12 table-margin custom-responsive-overflow-scroll">
                                                                        <table class="table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline custom-border-radius-0" id="kt_datatable" role="grid" style="width: 1151px; margin-top: 0px !important;">
                                                                            <thead class="custom-bg-light-pale">
                                                                                <tr>
                                                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 56px;" aria-sort="ascending">
                                                                                        Record ID</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 45px;">
                                                                                        Order ID</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 65px;">
                                                                                        Country</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 41px;">
                                                                                        Ship City</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 62px;">
                                                                                        Ship Address</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 69px;">
                                                                                        Company Agent</th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="odd">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                                <tr class="even">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                                <tr class="odd">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                                <tr class="even">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                                <tr class="odd">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                                <tr class="even">
                                                                                    <td class="dtr-control sorting_1" tabindex="0">6
                                                                                    </td>
                                                                                    <td>53499-0393</td>
                                                                                    <td>Ukraine</td>
                                                                                    <td>Kozel’shchyna</td>
                                                                                    <td>02 Briar Crest Parkway</td>
                                                                                    <td>Halley Bentham</td>
                                                                                </tr>
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row"></div>
                                                            <div id="grid_view" class="tabcontent">
                                                                <div class="row ml-4">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card my-5-res">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card m-1">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row ml-4 my-5">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card my-5-res">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card m-1">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row ml-4">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card my-5-res">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="grid-card m-1">
                                                                            <img src="../assets/media/map_img1.png" class="w-100 p-1" alt="">
                                                                            <div class="p-4">
                                                                                <h6 class="custom-font-style-text custom-text-primary">Jacob Michael</h6>
                                                                                <span class="custom-font-style-small">Not Plan yet!</span>
                                                                            </div>
                                                                            <div class="d-flex px-4">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/world-grid.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Country: Florida</span>
                                                                            </div>
                                                                            <div class="d-flex px-4 mt-3">
                                                                                <span class="custom-sm-icon custom-bg-light-pale">
                                                                                    <img src="../assets/media/phone.png" class="custom-vertical-align-unset" alt="">
                                                                                </span>
                                                                                <span class="custom-font-style-small">Assessment Contact: +1 202 555 0156</span>
                                                                            </div>

                                                                            <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                                <span class="custom-font-style-small custom-bg-light-grey px-5 py-2">
                                                                                    2022-12-07
                                                                                </span>
                                                                                <span class="custom-bg-light-pale custom-font-style-small custom-bg-light-grey px-5 py-2">Completed</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-5">
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate">
                                                                            <ul class="pagination">
                                                                                <li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li>
                                                                                <li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                                <li class="paginate_button page-item"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                                                                <li class="paginate_button page-item"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">3</a></li>
                                                                                <li class="paginate_button page-item"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">4</a></li>
                                                                                <li class="paginate_button page-item"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">5</a></li>
                                                                                <li class="paginate_button page-item next disabled" id="kt_datatable_next"><a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="kt_datatable_info"
                                                                role="status" aria-live="polite">Showing 1 to 10 of 50
                                                                entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_full_numbers"
                                                                id="kt_datatable_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item first disabled"
                                                                        id="kt_datatable_first"><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="0"
                                                                            tabindex="0" class="page-link"><i
                                                                                class="ki ki-double-arrow-back"></i></a>
                                                                    </li>
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="kt_datatable_previous"><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="1"
                                                                            tabindex="0" class="page-link"><i
                                                                                class="ki ki-arrow-back"></i></a></li>
                                                                    <li class="paginate_button page-item active"><a
                                                                            href="#" aria-controls="kt_datatable"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">1</a></li>
                                                                    <li class="paginate_button page-item "><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="3"
                                                                            tabindex="0" class="page-link">2</a></li>
                                                                    <li class="paginate_button page-item "><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="4"
                                                                            tabindex="0" class="page-link">3</a></li>
                                                                    <li class="paginate_button page-item "><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="5"
                                                                            tabindex="0" class="page-link">4</a></li>
                                                                    <li class="paginate_button page-item "><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="6"
                                                                            tabindex="0" class="page-link">5</a></li>
                                                                    <li class="paginate_button page-item next"
                                                                        id="kt_datatable_next"><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="7"
                                                                            tabindex="0" class="page-link"><i
                                                                                class="ki ki-arrow-next"></i></a></li>
                                                                    <li class="paginate_button page-item last"
                                                                        id="kt_datatable_last"><a href="#"
                                                                            aria-controls="kt_datatable" data-dt-idx="8"
                                                                            tabindex="0" class="page-link"><i
                                                                                class="ki ki-double-arrow-next"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!--end: Datatable-->
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
    <!-- <script src="../assets/js/scripts.bundle.js"></script> -->
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
    </script>

    <script>
        var options = {
            series: [10, 25, 35, 30],
            chart: {
                type: 'donut',
            },
            colors: ['#9ABF78', '#074A37', '#9FCEDF', '#FEC85C'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    customScale: 0.9
                }
            },
            grid: {
                padding: {
                    top: -10,
                    bottom: -10,
                    right: -60
                }
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "50%"
                    }
                }
            },
            dataLabels: {
                enabled: true,
                textAnchor: 'start',
                style: {
                    fontSize: '12px',
                    fontWeight: 'bold',
                    fontColor: 'black',
                },
                background: {
                    enabled: true,
                    foreColor: 'grey',
                    borderRadius: 2,
                    padding: 4,
                    opacity: 0.7,
                    borderWidth: 1,
                    borderColor: '#c7dfe7ad',
                    color: 'black'
                },
                formatter: function(val, opt) {
                    return Math.round(val) + "%"
                },
                offsetX: 100,
                offsetY: 100,
                dropShadow: {
                    enabled: false
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: '100px',
                        height: '100px',
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
        // $(document).ready(function(){
        //     $('.apexcharts-datalabels').each(function(){
        //         let rectId = $(this)[0].children[0].id;
        //         let textId = $(this)[0].children[1].id;
        //         console.log(rectId);
        //         console.log(textId);
        //         if(rectId=='SvgjsRect1027'){
        //             console.log($(this)[0].children[0].setAttribute('x', 180));
        //             console.log($(this)[0].children[0].setAttribute('width', 40));
        //             console.log($(this)[0].children[0].setAttribute('height', 20));
        //         }
        //         if(textId=='SvgjsText1014'){
        //             console.log($(this)[0].children[1].setAttribute('x', 200));
        //             console.log($(this)[0].children[1].setAttribute('y', 54));
        //         }
        //         if(rectId=='SvgjsRect1028'){
        //             console.log($(this)[0].children[0].setAttribute('x', 180));
        //             console.log($(this)[0].children[0].setAttribute('width', 40));
        //             console.log($(this)[0].children[0].setAttribute('height', 20));
        //         }
        //         if(textId=='SvgjsText1018'){
        //             console.log($(this)[0].children[1].setAttribute('x', 200));
        //             console.log($(this)[0].children[1].setAttribute('y', 160));
        //         }
        //         if(rectId=='SvgjsRect1029'){
        //             console.log($(this)[0].children[0].setAttribute('x', 25));
        //             console.log($(this)[0].children[0].setAttribute('y', 162));
        //             console.log($(this)[0].children[0].setAttribute('width', 40));
        //             console.log($(this)[0].children[0].setAttribute('height', 20));
        //         }
        //         if(textId=='SvgjsText1022'){
        //             console.log($(this)[0].children[1].setAttribute('x', 47));
        //             console.log($(this)[0].children[1].setAttribute('y', 176));
        //         }
        //         if(rectId=='SvgjsRect1029'){
        //             // console.log($(this)[0].children[0].setAttribute('x', 25));
        //             // console.log($(this)[0].children[0].setAttribute('y', 162));
        //             // console.log($(this)[0].children[0].setAttribute('width', 40));
        //             // console.log($(this)[0].children[0].setAttribute('height', 20));
        //         }
        //         if(textId=='SvgjsText1022'){
        //             // console.log($(this)[0].children[1].setAttribute('x', 47));
        //             // console.log($(this)[0].children[1].setAttribute('y', 176));
        //         }
        //     })
        // });
        $(document).ready(function() {
            var tabcontent = document.getElementsByClassName("tabcontent");
            tabcontent[0].style.display = "block";

            $('#kt_datatable').dataTable({
                "lengthChange": false,
                "searching": false,
                "pagingType": "simple_numbers",
                "pageLength": 5,
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

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <!-- <script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script> -->
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="/metronic/theme/html/demo1/dist/assets/js/pages/builder.js?v=7.2.9"></script> -->
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>