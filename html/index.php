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
    <meta charset="utf-8" />
    <meta name="description" content="Layout options builder" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
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
                            <a href="#">Main /</a>
                            <span>Assessments</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 p-5">
                                    <div class="row p-5">
                                        <div class="col-md-5">
                                            <div class="card w-100 rounded p-5 card-color">
                                                <div class="row mb-5 ml-5">
                                                    <div class="col-md-12 mt-5">
                                                        <h2 class="card_title mt-4">Welcome to the LandScale</h2>
                                                        <p class="pb-3">Select an assessment or create a new assessment
                                                        </p>
                                                        <a href="./new_assestment.php" class="btn-card d-flex justify-content-center my-5 align-items-center">
                                                            <span class="pr-2">
                                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.4413 18.9917C7.9664 18.9917 5.49153 18.9961 3.01755 18.9899C1.54313 18.9863 0.44931 18.1655 0.0909304 16.8254C0.0126737 16.5328 0.0206772 16.2384 0.0206772 15.9441C0.0162308 11.648 0.051802 7.35097 0.000223722 3.05486C-0.0193405 1.367 1.24611 -0.0345043 3.06291 0.00106694C4.48487 0.0295239 5.90772 0.0197418 7.32967 0.000177663C7.87658 -0.00693658 8.25364 0.199377 8.53999 0.660913C8.92949 1.28786 9.36257 1.88812 9.75652 2.5124C9.91481 2.76317 10.09 2.86188 10.3968 2.8601C12.901 2.84588 15.4052 2.84588 17.9094 2.85477C19.3465 2.8601 20.4395 3.69692 20.7934 5.01928C20.8716 5.31185 20.8636 5.6062 20.8636 5.90056C20.8672 9.2487 20.8263 12.5977 20.8832 15.945C20.9117 17.5821 19.6764 19.0254 17.8196 18.9997C15.3608 18.9668 12.901 18.9917 10.4413 18.9917ZM10.4582 17.0753C12.917 17.0753 15.375 17.0779 17.8339 17.0744C18.6547 17.0735 18.9775 16.7391 18.9775 15.9112C18.9784 12.6235 18.9775 9.33674 18.9775 6.04907C18.9775 5.03706 18.7062 4.76761 17.6853 4.76761C15.0344 4.76672 12.3835 4.76228 9.73251 4.77206C9.22829 4.77384 8.85835 4.60576 8.58534 4.16824C8.17983 3.51728 7.73163 2.89212 7.32078 2.24383C7.17138 2.00728 7.00865 1.91035 6.71785 1.9148C5.51821 1.93436 4.31857 1.92102 3.11893 1.92369C2.2003 1.92547 1.90684 2.22338 1.90684 3.15001C1.90684 7.38476 1.90684 11.6195 1.90684 15.8543C1.90684 16.7711 2.20742 17.0744 3.12693 17.0744C5.57068 17.077 8.01442 17.0753 10.4582 17.0753Z" fill="white" />
                                                                    <path d="M12.4306 12.3443C12.1434 12.3718 11.6845 12.194 11.4702 12.411C11.2567 12.6253 11.4204 13.0833 11.407 13.4336C11.3972 13.6995 11.4195 13.9672 11.399 14.2322C11.3554 14.8058 10.9579 15.1918 10.4368 15.1891C9.91748 15.1864 9.51731 14.7969 9.48796 14.2198C9.46306 13.7324 9.46217 13.2425 9.48796 12.756C9.50397 12.443 9.44527 12.3078 9.08867 12.3354C8.60312 12.3727 8.11224 12.3505 7.62403 12.3434C7.07445 12.3354 6.65115 11.9272 6.6387 11.4079C6.62714 10.9152 7.02554 10.4866 7.55911 10.4626C8.0909 10.4385 8.62447 10.4412 9.15715 10.4554C9.40259 10.4626 9.49596 10.3976 9.48529 10.1389C9.46662 9.65153 9.47284 9.16243 9.48173 8.67422C9.49329 8.03215 9.8659 7.62131 10.4261 7.6133C11.006 7.6053 11.391 8.02148 11.4035 8.68578C11.4124 9.15887 11.4195 9.63286 11.3999 10.106C11.3884 10.3719 11.4586 10.4706 11.7405 10.4563C12.2278 10.4332 12.7169 10.4412 13.2052 10.4528C13.8312 10.4679 14.2661 10.8796 14.2447 11.4194C14.2234 11.9717 13.7903 12.3407 13.1607 12.3443C12.9384 12.3452 12.716 12.3443 12.4306 12.3443Z" fill="white" />
                                                                </svg>

                                                            </span>
                                                            <span class="text-light">
                                                                create a new assessment
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card w-100 rounded p-5 card-bg-color">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="box-colors">
                                                            <ul>
                                                                <li>
                                                                    Overview (10 Assessments)
                                                                </li>
                                                                <li>
                                                                    Objectives (25 Assessments)
                                                                </li>
                                                                <li>
                                                                    Preliminary boundary (35 Assessments)
                                                                </li>
                                                                <li>
                                                                    Payment plan ( 30 Assessments)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="chart">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-5">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between py-5">
                                                <h3 class="">
                                                    Assessments
                                                </h3>
                                                <div class="d-flex">
                                                    <!--begin::Dropdown-->
                                                    <button type="button" class="btn btn-primary font-weight-bolder blt-10 blb-10 tablinks" onclick="openCity(event, 'table_view')">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                                            <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.1306 11.698C12.9454 11.698 10.7601 11.7043 8.5749 11.6955C7.31597 11.6906 6.33318 10.7352 6.31937 9.53206C6.30494 8.29649 7.28585 7.32061 8.57616 7.30816C9.74722 7.29695 10.9183 7.30504 12.0894 7.30504C15.2781 7.30504 18.4675 7.3038 21.6562 7.30567C22.8311 7.30629 23.7398 8.01624 23.9469 9.08429C24.2143 10.4625 23.1769 11.6887 21.7184 11.6955C19.5218 11.7049 17.3265 11.698 15.1306 11.698Z" fill="#EBF2E4" />
                                                                <path d="M15.1664 14.6226C17.3516 14.6226 19.5369 14.6163 21.7221 14.625C22.875 14.6294 23.763 15.3587 23.9507 16.423C24.1923 17.7931 23.1618 18.9888 21.714 18.995C19.6436 19.0043 17.5732 18.9981 15.5028 18.9981C13.2027 18.9981 10.902 19.0025 8.60189 18.9962C7.30907 18.9925 6.31561 18.0285 6.31812 16.8016C6.32063 15.6383 7.25008 14.6462 8.42178 14.6344C10.6698 14.6113 12.9178 14.6275 15.1658 14.6275C15.1664 14.6257 15.1664 14.6238 15.1664 14.6226Z" fill="#EBF2E4" />
                                                                <path d="M15.1507 4.37991C12.9655 4.37991 10.7803 4.38676 8.5944 4.37741C7.28024 4.37181 6.2987 3.40029 6.31878 2.15414C6.33887 0.946591 7.33609 0.00683502 8.61887 0.00558948C11.8603 0.00123011 15.1018 0.00434395 18.3433 0.00434395C19.4829 0.00434395 20.6226 -0.00686586 21.7623 0.00932608C22.6635 0.0224042 23.3551 0.425957 23.7555 1.23493C24.1566 2.04453 24.0593 2.8342 23.5108 3.54789C23.0551 4.14014 22.4257 4.38676 21.6763 4.38364C19.5005 4.3743 17.3259 4.37991 15.1507 4.37991Z" fill="#EBF2E4" />
                                                                <path d="M4.41968 9.49905C4.42031 10.6973 3.40174 11.703 2.19553 11.6962C0.994962 11.6893 0.000872015 10.696 0.000244433 9.50341C-0.000383149 8.29711 1.00877 7.29944 2.22189 7.30691C3.41743 7.31438 4.41905 8.3133 4.41968 9.49905Z" fill="#EBF2E4" />
                                                                <path d="M4.41969 16.7948C4.42597 17.9967 3.41744 18.9975 2.20244 18.9944C0.994347 18.9919 0.00716049 18.0141 0.000884669 16.8147C-0.00539115 15.6121 0.967989 14.6356 2.18299 14.625C3.41744 14.6145 4.41404 15.581 4.41969 16.7948Z" fill="#EBF2E4" />
                                                                <path d="M2.19861 4.37742C0.968551 4.3687 -0.00985005 3.38971 0.00081885 2.17905C0.0114877 0.970256 1.01938 -0.00935649 2.23438 0.00683545C3.44813 0.0230274 4.43783 1.02942 4.42025 2.23011C4.40205 3.42583 3.40922 4.38613 2.19861 4.37742Z" fill="#EBF2E4" />
                                                            </svg>

                                                            <!--end::Svg Icon--></span>
                                                    </button>
                                                    <!--end::Dropdown-->

                                                    <!--begin::Button-->

                                                    <button type="button" class="btn btn-light-primary font-weight-bolder brt-10 brb-10 tablinks" onclick="openCity(event, 'grid_view')" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" fdprocessedid="0a2vz7">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.277 12.2448C16.8331 12.2448 16.3891 12.2471 15.9452 12.2444C15.15 12.2394 14.5581 11.6455 14.5554 10.8484C14.5527 9.96667 14.5527 9.08534 14.5554 8.20363C14.5577 7.39764 15.1512 6.80571 15.961 6.803C16.8362 6.79991 17.7113 6.8003 18.5865 6.803C19.4052 6.80571 19.994 7.39687 19.9967 8.21947C19.9994 9.08805 19.9994 9.95701 19.9967 10.8256C19.9944 11.6582 19.4056 12.2424 18.5706 12.2448C18.139 12.2459 17.7078 12.2448 17.277 12.2448Z" fill="#4C94A0" />
                                                                <path d="M7.7554 16.3234C7.7554 15.8794 7.75269 15.4355 7.75617 14.9915C7.76235 14.1964 8.3566 13.604 9.15331 13.6017C10.035 13.599 10.9164 13.599 11.7981 13.6017C12.6056 13.604 13.1952 14.196 13.1975 15.0074C13.2002 15.8825 13.1999 16.7577 13.1975 17.6328C13.1952 18.4519 12.6048 19.0408 11.7822 19.0435C10.9137 19.0462 10.0447 19.0462 9.17611 19.0435C8.34462 19.0412 7.75887 18.4516 7.75578 17.6174C7.75385 17.1858 7.7554 16.7546 7.7554 16.3234Z" fill="#4C94A0" />
                                                                <path d="M13.1981 9.52698C13.1981 9.97093 13.2008 10.4149 13.1977 10.8592C13.1923 11.6447 12.6 12.2405 11.8164 12.244C10.922 12.2479 10.0275 12.2482 9.13303 12.244C8.36104 12.2401 7.76216 11.6443 7.75713 10.8727C7.75172 9.97827 7.75211 9.0838 7.75675 8.18933C7.76061 7.4046 8.35563 6.80803 9.13882 6.80378C10.0333 6.79914 10.9278 6.79876 11.8222 6.80378C12.5961 6.80842 13.1904 7.40421 13.1973 8.17581C13.2012 8.62594 13.1977 9.07646 13.1981 9.52698Z" fill="#4C94A0" />
                                                                <path d="M14.5543 16.3199C14.5543 15.8759 14.552 15.432 14.5547 14.9881C14.5597 14.2022 15.152 13.6056 15.9352 13.6021C16.8297 13.5982 17.7241 13.5982 18.6186 13.6021C19.3917 13.6056 19.9898 14.1983 19.9953 14.9722C20.0014 15.8729 20.0018 16.7739 19.9953 17.6749C19.9895 18.4384 19.3952 19.0358 18.6344 19.0419C17.7272 19.0489 16.82 19.0493 15.9124 19.0419C15.1516 19.0354 14.5616 18.4342 14.555 17.6714C14.5516 17.2205 14.5547 16.7704 14.5543 16.3199Z" fill="#4C94A0" />
                                                                <path d="M6.39852 16.3296C6.39852 16.7735 6.40045 17.2175 6.39813 17.6614C6.39388 18.4361 5.80543 19.0365 5.03267 19.0419C4.13202 19.0485 3.23098 19.0481 2.32995 19.0419C1.55796 19.0369 0.963328 18.4396 0.958305 17.6653C0.952509 16.7708 0.952895 15.8763 0.958305 14.9819C0.962941 14.1979 1.56144 13.6048 2.34579 13.6017C3.23369 13.5982 4.12159 13.5986 5.00987 13.6017C5.80658 13.6044 6.39504 14.1983 6.39852 14.9973C6.40006 15.4417 6.39852 15.8856 6.39852 16.3296Z" fill="#4C94A0" />
                                                                <path d="M10.4658 5.44527C10.0219 5.44527 9.57794 5.4472 9.13399 5.44488C8.36162 5.44063 7.76157 4.84831 7.75693 4.07594C7.75114 3.17529 7.75075 2.27426 7.75693 1.37322C7.76196 0.610513 8.35659 0.0120119 9.11815 0.00582982C10.0254 -0.00151138 10.933 -0.00228414 11.8402 0.00582982C12.601 0.0127846 13.1925 0.613604 13.1968 1.37632C13.2018 2.27735 13.2022 3.178 13.1968 4.07903C13.1921 4.85102 12.5925 5.44063 11.8174 5.4445C11.3669 5.4472 10.9164 5.44527 10.4658 5.44527Z" fill="#4C94A0" />
                                                                <path d="M6.39872 9.53046C6.39872 9.9744 6.40065 10.4184 6.39834 10.8623C6.39409 11.6463 5.80138 12.2401 5.01471 12.2436C4.12681 12.2471 3.23853 12.2471 2.35063 12.2436C1.55624 12.2405 0.9616 11.6459 0.958123 10.8492C0.953872 9.96745 0.954259 9.08612 0.958123 8.2044C0.9616 7.39726 1.55624 6.80533 2.36415 6.80262C3.2393 6.79953 4.11445 6.79992 4.9896 6.80262C5.81104 6.80533 6.3964 7.39494 6.39872 8.21793C6.39949 8.65531 6.39872 9.09307 6.39872 9.53046Z" fill="#4C94A0" />
                                                                <path d="M17.2686 5.44528C16.8246 5.44528 16.3807 5.44721 15.9367 5.44489C15.1536 5.44103 14.5585 4.84678 14.5554 4.06127C14.552 3.17337 14.5524 2.28547 14.5554 1.39719C14.5581 0.602405 15.152 0.00854093 15.9503 0.00467715C16.832 0.00042698 17.7133 0.000813358 18.595 0.00467715C19.4026 0.00815456 19.9937 0.601246 19.9968 1.41032C20.0003 2.28547 19.9999 3.16062 19.9968 4.03577C19.9941 4.85837 19.4045 5.44296 18.5819 5.44489C18.1437 5.44605 17.706 5.44528 17.2686 5.44528Z" fill="#4C94A0" />
                                                                <path d="M3.67131 5.44504C3.22736 5.44504 2.78341 5.44697 2.33946 5.44466C1.56632 5.44041 0.965112 4.85118 0.95893 4.07881C0.951975 3.17816 0.952361 2.27712 0.95893 1.37647C0.964725 0.603717 1.56168 0.0102394 2.33676 0.00521651C3.23122 -0.000579169 4.12569 -0.000579169 5.02016 0.00521651C5.80567 0.0102394 6.39605 0.607581 6.39837 1.39309C6.40107 2.28099 6.40107 3.16889 6.39837 4.05717C6.39605 4.85388 5.80335 5.44234 5.00393 5.44543C4.55921 5.4462 4.11526 5.44504 3.67131 5.44504Z" fill="#4C94A0" />
                                                            </svg>

                                                            <!--end::Svg Icon--></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>

                                            <div>
                                                <!--begin: Datatable-->
                                                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row my-5">
                                                        <div class="col-sm-12 col-md-9">
                                                            <div class="dataTables_length" id="kt_datatable_length">
                                                                <label class="entries-label">Show <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm form-control form-control-sm bg-table-entries" fdprocessedid="9kdh4">
                                                                        <option value="10">10</option>
                                                                        <option value="25">25</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-3">
                                                            <div id="kt_datatable_filter" class="dataTables_filter">
                                                                <div class="input-group custom-search-bar table-searchbar">
                                                                    <input type="text" class="form-control input-circle-left filter-bg-light outline-0 border-0 w-50" placeholder="search for anything" fdprocessedid="4cnwu">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text input-circle-right filter-bg-light">
                                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M7.5517 0C9.74111 0.0465077 11.6163 0.864121 13.1088 2.51213C14.0713 3.57506 14.6741 4.82367 14.902 6.24304C15.2578 8.45837 14.7355 10.4493 13.3442 12.2095C13.2672 12.3068 13.28 12.354 13.363 12.4371C14.6834 13.751 16.0005 15.0685 17.3173 16.386C17.5942 16.6629 17.5995 17.0318 17.3339 17.3002C17.0599 17.5774 16.6896 17.5813 16.4059 17.2987C15.0867 15.9834 13.7695 14.6663 12.4549 13.3467C12.3747 13.2664 12.3313 13.2444 12.2302 13.3239C10.4302 14.7415 8.39274 15.2993 6.14297 14.8519C3.24245 14.2754 1.25966 12.5475 0.385246 9.7336C-0.535678 6.77096 0.210931 4.14416 2.44863 1.99522C3.85096 0.648268 5.58169 0.034082 7.5517 0ZM7.52294 1.2408C4.08101 1.24399 1.28948 4.03446 1.28274 7.47851C1.27635 10.9233 4.07888 13.724 7.53039 13.7219C10.9844 13.7198 13.7717 10.9258 13.766 7.4707C13.7607 4.02807 10.9645 1.2376 7.52294 1.2408Z" fill="#4C94A0" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 pr-1">
                                                            <div class="card rounded filter-card-borders">
                                                                <div class="filter-bg-dark filter-borders">
                                                                    <span class="filter-card-font text-light d-inline-block p-5">Filters</span>
                                                                </div>
                                                                <!-- <div class="filter-borders">
                                                                    <div class="input-group custom-search-bar">
                                                                        <input type="text" class="form-control primary-bg-color outline-0 border-0 w-50" placeholder="Search" fdprocessedid="4cnwu">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text border-radius-0 primary-bg-color">
                                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M7.5517 0C9.74111 0.0465077 11.6163 0.864121 13.1088 2.51213C14.0713 3.57506 14.6741 4.82367 14.902 6.24304C15.2578 8.45837 14.7355 10.4493 13.3442 12.2095C13.2672 12.3068 13.28 12.354 13.363 12.4371C14.6834 13.751 16.0005 15.0685 17.3173 16.386C17.5942 16.6629 17.5995 17.0318 17.3339 17.3002C17.0599 17.5774 16.6896 17.5813 16.4059 17.2987C15.0867 15.9834 13.7695 14.6663 12.4549 13.3467C12.3747 13.2664 12.3313 13.2444 12.2302 13.3239C10.4302 14.7415 8.39274 15.2993 6.14297 14.8519C3.24245 14.2754 1.25966 12.5475 0.385246 9.7336C-0.535678 6.77096 0.210931 4.14416 2.44863 1.99522C3.85096 0.648268 5.58169 0.034082 7.5517 0ZM7.52294 1.2408C4.08101 1.24399 1.28948 4.03446 1.28274 7.47851C1.27635 10.9233 4.07888 13.724 7.53039 13.7219C10.9844 13.7198 13.7717 10.9258 13.766 7.4707C13.7607 4.02807 10.9645 1.2376 7.52294 1.2408Z" fill="#4C94A0"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="filter-borders filter-bg-light">
                                                                    <div class="p-5 btn-tags">
                                                                        <span class="filter-card-font d-block mb-5">Related
                                                                            Pillars:</span>
                                                                        <button class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                        <button class="btn bg-primary text-light my-4 font-btn border-radius-50">Human
                                                                            Well-being</button>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-borders filter-bg-light">
                                                                    <div class="p-5 pb-0 btn-tags">
                                                                        <span class="filter-card-font d-inline-block mb-5">Related
                                                                            Indicators:</span>
                                                                        <div class="form-group">
                                                                            <div class="select-wrapper">
                                                                                <select class="form-control bg-primary text-light" id="exampleFormControlSelect1">
                                                                                    <option>None Selected</option>
                                                                                    <option>Selected</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <span class="filter-card-font d-inline-block mb-5">Related
                                                                            Metrics:</span>
                                                                        <div class="form-group">
                                                                            <div class="select-wrapper">
                                                                                <select class="form-control bg-primary text-light" id="exampleFormControlSelect1">
                                                                                    <option>None Selected</option>
                                                                                    <option>Selected</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="p-5 btn-tags filter-bg-light">
                                                                        <span class="filter-card-font d-block mb-5">Resource
                                                                            type:</span>
                                                                        <button class="btn bg-white-btn font-btn border-radius-50">Data
                                                                            Collection Tool</button>
                                                                        <button class="btn bg-primary text-light my-4 font-btn border-radius-50">Guidelines/Frameworks</button>
                                                                        <button class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                        <button class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 pl-1">
                                                            <div id="table_view" class="tabcontent">
                                                                <div class="row">
                                                                    <div class="col-sm-12 table-margin mob-style">
                                                                        <table class="table table-separate table-radius table-head-custom table-checkable dataTable no-footer dtr-inline filter-card-borders" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1151px;">
                                                                            <thead class="header-table">
                                                                                <tr role="row">
                                                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 56px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">
                                                                                        Record ID</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 45px;" aria-label="Order ID: activate to sort column ascending">
                                                                                        Order ID</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 65px;" aria-label="Country: activate to sort column ascending">
                                                                                        Country</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 41px;" aria-label="Ship City: activate to sort column ascending">
                                                                                        Ship City</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 62px;" aria-label="Ship Address: activate to sort column ascending">
                                                                                        Ship Address</th>
                                                                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 69px;" aria-label="Company Agent: activate to sort column ascending">
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
                                                            <div id="grid_view" class="tabcontent">
                                                                <div class="row ml-4">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card mx-3 responsive-margin-grid">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ml-4 my-5">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card mx-3 responsive-margin-grid">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ml-4">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card mx-3 responsive-margin-grid">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 grid-card">
                                                                        <img src="../assets/media/map_img1.png" class="grid-card-img" alt="">
                                                                        <div class="p-4">
                                                                            <h6 class="grid-card-heading-text">Jacob Michael</h6>
                                                                            <span class="grid-card-sub-text">Not Plan yet!</span>
                                                                        </div>
                                                                        <div class="d-flex px-4">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/world-grid.png" alt="">
                                                                            </span>
                                                                            <span class="">Country: Florida</span>
                                                                        </div>
                                                                        <div class="d-flex px-4 mt-3">
                                                                            <span class="grid-card-icon">
                                                                                <img src="../assets/media/phone.png" alt="">
                                                                            </span>
                                                                            <span class="">Assessment Contact: +1 202 555 0156</span>
                                                                        </div>

                                                                        <div class="d-flex justify-content-between align-items-center my-5 px-4">
                                                                            <span class="grid-card-date-tag">
                                                                                2022-12-07
                                                                            </span>
                                                                            <span class="grid-card-status-tag">Completed</span>
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
    <!-- <script src="../assets/js/scripts.bundle.js"></script> -->
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