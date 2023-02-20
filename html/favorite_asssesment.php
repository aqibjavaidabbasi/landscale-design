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
                            <div class="col-md-12">
                                <div class="card w-100 p-10">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <span class="custom-font-style-subheadings custom-text-primary d-inline-block mb-5">Find assessments by location</span>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="0" name="steps" id="step-0" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-0">Ghana</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="9" name="steps" id="step-9" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-9">Pakistan</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="1" name="steps" id="step-1" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-1">Thiland</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="2" name="steps" id="step-2" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-2">India</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="3" name="steps" id="step-3" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-3">Mali</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="4" name="steps" id="step-4" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-4">Peru</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="5" name="steps" id="step-5" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-5">Colombia</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="7" name="steps" id="step-7" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-7">America</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="8" name="steps" id="step-8" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-8">Turkey</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="8" name="steps" id="step-10" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-10">Dubai</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="12" name="steps" id="step-12" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-12">Mexico</label>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <input type="radio" class="btn-check filter_div" value="13" name="steps" id="step-13" autocomplete="off">
                                                    <label class="btn-outline-primary custom-bg-light-pale custom-font-style-subtext custom-text-grey custom-border-radius-15 px-5 py-2 d-inline-block text-center w-100 custom-cursor-pointer" for="step-13">Kenya</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <img src="../assets/media/favourite-map-img.png" class="custom-border-radius-35" style="width: 100%; height: 320px;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card w-100 p-10">
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between align-items-center w-100 responsive-block">
                                                <span class="custom-font-style-subheadings custom-text-primary d-inline-block">Featured assessments</span>
                                                <div class="pr-5">
                                                    <button type="button" class="custom-bg-light-pale custom-text-grey custom-border-radius-35 custom-font-style-subtext border-0 w-176px h-40px mr-5">Profile Not Available</button>
                                                    <button type="button" class="custom-bg-primary custom-text-light-pale custom-border-radius-35 custom-font-style-subtext border-0 w-176px h-40px">Profile Available</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">Alicante River Canyon</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Colombia</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span> XYZ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="responsive-margin-grid col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">San José Northern</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Costa Rica</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span> IUCN</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">Lamas Landscape</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Peru</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span>Rainforest Alliance </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center w-100">
                                        <div class="mt-10">
                                            <a href="#" class="single-paginate-item custom-border-color-pale custom-btlr-50 custom-bblr-50 custom-bg-light-pale p-4 m-0">
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.71777 8.01932C8.27768 10.6813 10.8415 13.3474 13.3923 16C13.9112 15.4644 14.4478 14.9098 14.9996 14.3401C12.984 12.2474 10.9642 10.1502 8.89984 8.00719C9.20487 7.70567 9.49564 7.42976 9.77431 7.14127C11.4662 5.38696 13.1534 3.6277 14.8475 1.87564C14.9913 1.7269 15.003 1.64287 14.8475 1.48694C14.361 0.999382 13.8935 0.491603 13.4265 0C10.8445 2.68629 8.28114 5.35281 5.71777 8.01932Z" fill="#4C94A0" />
                                                    <path d="M7.65165 15.9681C8.14678 15.4522 8.67778 14.8986 9.23253 14.3203C7.23256 12.2469 5.20753 10.1479 3.1717 8.03773C5.21703 5.91494 7.23688 3.81867 9.23988 1.73991C8.68253 1.16024 8.1511 0.607521 7.63566 0.0714312C5.10211 2.70874 2.5409 5.37481 0 8.01931C2.53528 10.6535 5.10254 13.3204 7.65165 15.9681Z" fill="#4C94A0" />
                                                </svg>
                                            </a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4 m-0">1</a>
                                            <a href="#" class="custom-border-color-pale p-4 custom-bg-primary custom-text-light-pale" style="margin: -3px !important;">2</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4 m-0">3</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4" style="margin: -3px !important;">4</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale p-4 m-0 custom-btrr-50 custom-bbrr-50">
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.28223 8.01932C6.72232 10.6813 4.15852 13.3474 1.60768 16C1.08878 15.4644 0.552174 14.9098 0.000442505 14.3401C2.01597 12.2474 4.03581 10.1502 6.10016 8.00719C5.79513 7.70567 5.50436 7.42976 5.22569 7.14127C3.53377 5.38696 1.8466 3.6277 0.152525 1.87564C0.00865078 1.7269 -0.00301456 1.64287 0.152525 1.48694C0.639015 0.999382 1.1065 0.491603 1.57355 0C4.15549 2.68629 6.71886 5.35281 9.28223 8.01932Z" fill="#4C94A0" />
                                                    <path d="M7.34835 15.9681C6.85322 15.4522 6.32222 14.8986 5.76747 14.3203C7.76744 12.2469 9.79247 10.1479 11.8283 8.03773C9.78297 5.91494 7.76312 3.81867 5.76012 1.73991C6.31747 1.16024 6.8489 0.607521 7.36434 0.0714312C9.89789 2.70874 12.4591 5.37481 15 8.01931C12.4647 10.6535 9.89746 13.3204 7.34835 15.9681Z" fill="#4C94A0" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card w-100 p-10">
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between align-items-center w-100 responsive-block">
                                                <span class="custom-font-style-subheadings custom-text-primary d-inline-block">Assessments in progress</span>
                                                <div class="pr-5">
                                                    <button type="button" class="custom-bg-light-pale custom-text-grey custom-border-radius-35 custom-font-style-subtext border-0 w-176px h-40px mr-5">Profile Not Available</button>
                                                    <button type="button" class="custom-bg-primary custom-text-light-pale custom-border-radius-35 custom-font-style-subtext border-0 w-176px h-40px">Profile Available</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">Alicante River Canyon</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Colombia</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span> XYZ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="responsive-margin-grid col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">San José Northern</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Costa Rica</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span> IUCN</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="custom-border-color-pale custom-border-radius-15 h-350px">
                                                <img src="../assets/media/map_img1.png" class="p-3 custom-border-radius-15" style="width: 100%; height: 70%;" alt="">
                                                <div class="mt-3 px-6">
                                                    <div class="custom-font-style-text custom-text-primary">Lamas Landscape</div>
                                                    <div class="custom-font-style-small custom-text-primary mt-2 my-1"><span class="font-weight-bold">Country: </span>Peru</div>
                                                    <div class="custom-font-style-small custom-text-primary"><span class="font-weight-bold">Organization: </span>Rainforest Alliance </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center w-100">
                                        <div class="mt-10">
                                            <a href="#" class="single-paginate-item custom-border-color-pale custom-btlr-50 custom-bblr-50 custom-bg-light-pale p-4 m-0">
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.71777 8.01932C8.27768 10.6813 10.8415 13.3474 13.3923 16C13.9112 15.4644 14.4478 14.9098 14.9996 14.3401C12.984 12.2474 10.9642 10.1502 8.89984 8.00719C9.20487 7.70567 9.49564 7.42976 9.77431 7.14127C11.4662 5.38696 13.1534 3.6277 14.8475 1.87564C14.9913 1.7269 15.003 1.64287 14.8475 1.48694C14.361 0.999382 13.8935 0.491603 13.4265 0C10.8445 2.68629 8.28114 5.35281 5.71777 8.01932Z" fill="#4C94A0" />
                                                    <path d="M7.65165 15.9681C8.14678 15.4522 8.67778 14.8986 9.23253 14.3203C7.23256 12.2469 5.20753 10.1479 3.1717 8.03773C5.21703 5.91494 7.23688 3.81867 9.23988 1.73991C8.68253 1.16024 8.1511 0.607521 7.63566 0.0714312C5.10211 2.70874 2.5409 5.37481 0 8.01931C2.53528 10.6535 5.10254 13.3204 7.65165 15.9681Z" fill="#4C94A0" />
                                                </svg>
                                            </a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4 m-0">1</a>
                                            <a href="#" class="custom-border-color-pale p-4 custom-bg-primary custom-text-light-pale" style="margin: -3px !important;">2</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4 m-0">3</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale custom-text-light-grey p-4" style="margin: -3px !important;">4</a>
                                            <a href="#" class="custom-border-color-pale custom-bg-light-pale p-4 m-0 custom-btrr-50 custom-bbrr-50">
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.28223 8.01932C6.72232 10.6813 4.15852 13.3474 1.60768 16C1.08878 15.4644 0.552174 14.9098 0.000442505 14.3401C2.01597 12.2474 4.03581 10.1502 6.10016 8.00719C5.79513 7.70567 5.50436 7.42976 5.22569 7.14127C3.53377 5.38696 1.8466 3.6277 0.152525 1.87564C0.00865078 1.7269 -0.00301456 1.64287 0.152525 1.48694C0.639015 0.999382 1.1065 0.491603 1.57355 0C4.15549 2.68629 6.71886 5.35281 9.28223 8.01932Z" fill="#4C94A0" />
                                                    <path d="M7.34835 15.9681C6.85322 15.4522 6.32222 14.8986 5.76747 14.3203C7.76744 12.2469 9.79247 10.1479 11.8283 8.03773C9.78297 5.91494 7.76312 3.81867 5.76012 1.73991C6.31747 1.16024 6.8489 0.607521 7.36434 0.0714312C9.89789 2.70874 12.4591 5.37481 15 8.01931C12.4647 10.6535 9.89746 13.3204 7.34835 15.9681Z" fill="#4C94A0" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card w-100 p-5">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div style="padding: 50px;">
                                            <div class="d-flex justify-content-center">
                                                <img src="../assets/media/heart_icon.png" alt="" class="mb-5">
                                            </div>
                                            <div class="custom-font-style-subheadings custom-text-primary mb-3 mt-5 text-center">You don’t have any favorite Assessments</div>
                                            <div class="custom-font-style-subtext custom-text-primary">Like any profile you see? Save them here to your favorite assessments</div>
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="custom-bg-primary custom-text-light-pale px-5 py-3 custom-border-radius-35 custom-font-style-subtext d-inline-block mt-5">Start Exploring</a>
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
        $('.filter_div').on('change', function() {
            /*function to apply filter by countries on assessment table*/
            console.log('jj')
            if ($('.filter_div').siblings('label').hasClass('active')) {
                $('.filter_div').siblings('label').removeClass('active')
            }
            $(this).prop("checked", true);
            $(this).siblings('label').addClass("active");
            // filterColumn( 9,this.value);
        });
    </script>

</body>
<!--end::Body-->

</html>