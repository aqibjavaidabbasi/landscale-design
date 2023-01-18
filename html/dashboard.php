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
    <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&amp;l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>
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
    <link rel="stylesheet" href="../assets/plugins/custom/datatables/datatables.bundle.css">

    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>(function (h, o, t, j, a, r) { h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) }; h._hjSettings = { hjid: 1070954, hjsv: 6 }; a = o.getElementsByTagName('head')[0]; r = o.createElement('script'); r.async = 1; r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv; a.appendChild(r); })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize page-loading body-bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card w-100 rounded p-5">
                                    <div class="row p-5">
                                        <div class="col-md-5">
                                            <div class="card w-100 rounded p-5 card-color">
                                                <div class="row mb-5 ml-5">
                                                    <div class="col-md-12 mt-5">
                                                        <h2 class="card_title mt-4">Welcome to the LandScale</h2>
                                                        <p class="pb-3">Select an assessment or create a new assessment
                                                        </p>
                                                        <a href="#"
                                                            class="btn-card d-flex justify-content-center my-5 align-items-center">
                                                            <span class="pr-2">
                                                                <svg width="21" height="19" viewBox="0 0 21 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.4413 18.9917C7.9664 18.9917 5.49153 18.9961 3.01755 18.9899C1.54313 18.9863 0.44931 18.1655 0.0909304 16.8254C0.0126737 16.5328 0.0206772 16.2384 0.0206772 15.9441C0.0162308 11.648 0.051802 7.35097 0.000223722 3.05486C-0.0193405 1.367 1.24611 -0.0345043 3.06291 0.00106694C4.48487 0.0295239 5.90772 0.0197418 7.32967 0.000177663C7.87658 -0.00693658 8.25364 0.199377 8.53999 0.660913C8.92949 1.28786 9.36257 1.88812 9.75652 2.5124C9.91481 2.76317 10.09 2.86188 10.3968 2.8601C12.901 2.84588 15.4052 2.84588 17.9094 2.85477C19.3465 2.8601 20.4395 3.69692 20.7934 5.01928C20.8716 5.31185 20.8636 5.6062 20.8636 5.90056C20.8672 9.2487 20.8263 12.5977 20.8832 15.945C20.9117 17.5821 19.6764 19.0254 17.8196 18.9997C15.3608 18.9668 12.901 18.9917 10.4413 18.9917ZM10.4582 17.0753C12.917 17.0753 15.375 17.0779 17.8339 17.0744C18.6547 17.0735 18.9775 16.7391 18.9775 15.9112C18.9784 12.6235 18.9775 9.33674 18.9775 6.04907C18.9775 5.03706 18.7062 4.76761 17.6853 4.76761C15.0344 4.76672 12.3835 4.76228 9.73251 4.77206C9.22829 4.77384 8.85835 4.60576 8.58534 4.16824C8.17983 3.51728 7.73163 2.89212 7.32078 2.24383C7.17138 2.00728 7.00865 1.91035 6.71785 1.9148C5.51821 1.93436 4.31857 1.92102 3.11893 1.92369C2.2003 1.92547 1.90684 2.22338 1.90684 3.15001C1.90684 7.38476 1.90684 11.6195 1.90684 15.8543C1.90684 16.7711 2.20742 17.0744 3.12693 17.0744C5.57068 17.077 8.01442 17.0753 10.4582 17.0753Z"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M12.4306 12.3443C12.1434 12.3718 11.6845 12.194 11.4702 12.411C11.2567 12.6253 11.4204 13.0833 11.407 13.4336C11.3972 13.6995 11.4195 13.9672 11.399 14.2322C11.3554 14.8058 10.9579 15.1918 10.4368 15.1891C9.91748 15.1864 9.51731 14.7969 9.48796 14.2198C9.46306 13.7324 9.46217 13.2425 9.48796 12.756C9.50397 12.443 9.44527 12.3078 9.08867 12.3354C8.60312 12.3727 8.11224 12.3505 7.62403 12.3434C7.07445 12.3354 6.65115 11.9272 6.6387 11.4079C6.62714 10.9152 7.02554 10.4866 7.55911 10.4626C8.0909 10.4385 8.62447 10.4412 9.15715 10.4554C9.40259 10.4626 9.49596 10.3976 9.48529 10.1389C9.46662 9.65153 9.47284 9.16243 9.48173 8.67422C9.49329 8.03215 9.8659 7.62131 10.4261 7.6133C11.006 7.6053 11.391 8.02148 11.4035 8.68578C11.4124 9.15887 11.4195 9.63286 11.3999 10.106C11.3884 10.3719 11.4586 10.4706 11.7405 10.4563C12.2278 10.4332 12.7169 10.4412 13.2052 10.4528C13.8312 10.4679 14.2661 10.8796 14.2447 11.4194C14.2234 11.9717 13.7903 12.3407 13.1607 12.3443C12.9384 12.3452 12.716 12.3443 12.4306 12.3443Z"
                                                                        fill="white" />
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
                                                    <button type="button"
                                                        class="btn btn-primary font-weight-bolder blt-10 blb-10">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                                            <svg width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15.1306 11.698C12.9454 11.698 10.7601 11.7043 8.5749 11.6955C7.31597 11.6906 6.33318 10.7352 6.31937 9.53206C6.30494 8.29649 7.28585 7.32061 8.57616 7.30816C9.74722 7.29695 10.9183 7.30504 12.0894 7.30504C15.2781 7.30504 18.4675 7.3038 21.6562 7.30567C22.8311 7.30629 23.7398 8.01624 23.9469 9.08429C24.2143 10.4625 23.1769 11.6887 21.7184 11.6955C19.5218 11.7049 17.3265 11.698 15.1306 11.698Z"
                                                                    fill="#EBF2E4" />
                                                                <path
                                                                    d="M15.1664 14.6226C17.3516 14.6226 19.5369 14.6163 21.7221 14.625C22.875 14.6294 23.763 15.3587 23.9507 16.423C24.1923 17.7931 23.1618 18.9888 21.714 18.995C19.6436 19.0043 17.5732 18.9981 15.5028 18.9981C13.2027 18.9981 10.902 19.0025 8.60189 18.9962C7.30907 18.9925 6.31561 18.0285 6.31812 16.8016C6.32063 15.6383 7.25008 14.6462 8.42178 14.6344C10.6698 14.6113 12.9178 14.6275 15.1658 14.6275C15.1664 14.6257 15.1664 14.6238 15.1664 14.6226Z"
                                                                    fill="#EBF2E4" />
                                                                <path
                                                                    d="M15.1507 4.37991C12.9655 4.37991 10.7803 4.38676 8.5944 4.37741C7.28024 4.37181 6.2987 3.40029 6.31878 2.15414C6.33887 0.946591 7.33609 0.00683502 8.61887 0.00558948C11.8603 0.00123011 15.1018 0.00434395 18.3433 0.00434395C19.4829 0.00434395 20.6226 -0.00686586 21.7623 0.00932608C22.6635 0.0224042 23.3551 0.425957 23.7555 1.23493C24.1566 2.04453 24.0593 2.8342 23.5108 3.54789C23.0551 4.14014 22.4257 4.38676 21.6763 4.38364C19.5005 4.3743 17.3259 4.37991 15.1507 4.37991Z"
                                                                    fill="#EBF2E4" />
                                                                <path
                                                                    d="M4.41968 9.49905C4.42031 10.6973 3.40174 11.703 2.19553 11.6962C0.994962 11.6893 0.000872015 10.696 0.000244433 9.50341C-0.000383149 8.29711 1.00877 7.29944 2.22189 7.30691C3.41743 7.31438 4.41905 8.3133 4.41968 9.49905Z"
                                                                    fill="#EBF2E4" />
                                                                <path
                                                                    d="M4.41969 16.7948C4.42597 17.9967 3.41744 18.9975 2.20244 18.9944C0.994347 18.9919 0.00716049 18.0141 0.000884669 16.8147C-0.00539115 15.6121 0.967989 14.6356 2.18299 14.625C3.41744 14.6145 4.41404 15.581 4.41969 16.7948Z"
                                                                    fill="#EBF2E4" />
                                                                <path
                                                                    d="M2.19861 4.37742C0.968551 4.3687 -0.00985005 3.38971 0.00081885 2.17905C0.0114877 0.970256 1.01938 -0.00935649 2.23438 0.00683545C3.44813 0.0230274 4.43783 1.02942 4.42025 2.23011C4.40205 3.42583 3.40922 4.38613 2.19861 4.37742Z"
                                                                    fill="#EBF2E4" />
                                                            </svg>

                                                            <!--end::Svg Icon--></span>
                                                    </button>
                                                    <!--end::Dropdown-->

                                                    <!--begin::Button-->

                                                    <button type="button"
                                                        class="btn btn-light-primary font-weight-bolder brt-10 brb-10"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" fdprocessedid="0a2vz7">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.277 12.2448C16.8331 12.2448 16.3891 12.2471 15.9452 12.2444C15.15 12.2394 14.5581 11.6455 14.5554 10.8484C14.5527 9.96667 14.5527 9.08534 14.5554 8.20363C14.5577 7.39764 15.1512 6.80571 15.961 6.803C16.8362 6.79991 17.7113 6.8003 18.5865 6.803C19.4052 6.80571 19.994 7.39687 19.9967 8.21947C19.9994 9.08805 19.9994 9.95701 19.9967 10.8256C19.9944 11.6582 19.4056 12.2424 18.5706 12.2448C18.139 12.2459 17.7078 12.2448 17.277 12.2448Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M7.7554 16.3234C7.7554 15.8794 7.75269 15.4355 7.75617 14.9915C7.76235 14.1964 8.3566 13.604 9.15331 13.6017C10.035 13.599 10.9164 13.599 11.7981 13.6017C12.6056 13.604 13.1952 14.196 13.1975 15.0074C13.2002 15.8825 13.1999 16.7577 13.1975 17.6328C13.1952 18.4519 12.6048 19.0408 11.7822 19.0435C10.9137 19.0462 10.0447 19.0462 9.17611 19.0435C8.34462 19.0412 7.75887 18.4516 7.75578 17.6174C7.75385 17.1858 7.7554 16.7546 7.7554 16.3234Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M13.1981 9.52698C13.1981 9.97093 13.2008 10.4149 13.1977 10.8592C13.1923 11.6447 12.6 12.2405 11.8164 12.244C10.922 12.2479 10.0275 12.2482 9.13303 12.244C8.36104 12.2401 7.76216 11.6443 7.75713 10.8727C7.75172 9.97827 7.75211 9.0838 7.75675 8.18933C7.76061 7.4046 8.35563 6.80803 9.13882 6.80378C10.0333 6.79914 10.9278 6.79876 11.8222 6.80378C12.5961 6.80842 13.1904 7.40421 13.1973 8.17581C13.2012 8.62594 13.1977 9.07646 13.1981 9.52698Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M14.5543 16.3199C14.5543 15.8759 14.552 15.432 14.5547 14.9881C14.5597 14.2022 15.152 13.6056 15.9352 13.6021C16.8297 13.5982 17.7241 13.5982 18.6186 13.6021C19.3917 13.6056 19.9898 14.1983 19.9953 14.9722C20.0014 15.8729 20.0018 16.7739 19.9953 17.6749C19.9895 18.4384 19.3952 19.0358 18.6344 19.0419C17.7272 19.0489 16.82 19.0493 15.9124 19.0419C15.1516 19.0354 14.5616 18.4342 14.555 17.6714C14.5516 17.2205 14.5547 16.7704 14.5543 16.3199Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M6.39852 16.3296C6.39852 16.7735 6.40045 17.2175 6.39813 17.6614C6.39388 18.4361 5.80543 19.0365 5.03267 19.0419C4.13202 19.0485 3.23098 19.0481 2.32995 19.0419C1.55796 19.0369 0.963328 18.4396 0.958305 17.6653C0.952509 16.7708 0.952895 15.8763 0.958305 14.9819C0.962941 14.1979 1.56144 13.6048 2.34579 13.6017C3.23369 13.5982 4.12159 13.5986 5.00987 13.6017C5.80658 13.6044 6.39504 14.1983 6.39852 14.9973C6.40006 15.4417 6.39852 15.8856 6.39852 16.3296Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M10.4658 5.44527C10.0219 5.44527 9.57794 5.4472 9.13399 5.44488C8.36162 5.44063 7.76157 4.84831 7.75693 4.07594C7.75114 3.17529 7.75075 2.27426 7.75693 1.37322C7.76196 0.610513 8.35659 0.0120119 9.11815 0.00582982C10.0254 -0.00151138 10.933 -0.00228414 11.8402 0.00582982C12.601 0.0127846 13.1925 0.613604 13.1968 1.37632C13.2018 2.27735 13.2022 3.178 13.1968 4.07903C13.1921 4.85102 12.5925 5.44063 11.8174 5.4445C11.3669 5.4472 10.9164 5.44527 10.4658 5.44527Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M6.39872 9.53046C6.39872 9.9744 6.40065 10.4184 6.39834 10.8623C6.39409 11.6463 5.80138 12.2401 5.01471 12.2436C4.12681 12.2471 3.23853 12.2471 2.35063 12.2436C1.55624 12.2405 0.9616 11.6459 0.958123 10.8492C0.953872 9.96745 0.954259 9.08612 0.958123 8.2044C0.9616 7.39726 1.55624 6.80533 2.36415 6.80262C3.2393 6.79953 4.11445 6.79992 4.9896 6.80262C5.81104 6.80533 6.3964 7.39494 6.39872 8.21793C6.39949 8.65531 6.39872 9.09307 6.39872 9.53046Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M17.2686 5.44528C16.8246 5.44528 16.3807 5.44721 15.9367 5.44489C15.1536 5.44103 14.5585 4.84678 14.5554 4.06127C14.552 3.17337 14.5524 2.28547 14.5554 1.39719C14.5581 0.602405 15.152 0.00854093 15.9503 0.00467715C16.832 0.00042698 17.7133 0.000813358 18.595 0.00467715C19.4026 0.00815456 19.9937 0.601246 19.9968 1.41032C20.0003 2.28547 19.9999 3.16062 19.9968 4.03577C19.9941 4.85837 19.4045 5.44296 18.5819 5.44489C18.1437 5.44605 17.706 5.44528 17.2686 5.44528Z"
                                                                    fill="#4C94A0" />
                                                                <path
                                                                    d="M3.67131 5.44504C3.22736 5.44504 2.78341 5.44697 2.33946 5.44466C1.56632 5.44041 0.965112 4.85118 0.95893 4.07881C0.951975 3.17816 0.952361 2.27712 0.95893 1.37647C0.964725 0.603717 1.56168 0.0102394 2.33676 0.00521651C3.23122 -0.000579169 4.12569 -0.000579169 5.02016 0.00521651C5.80567 0.0102394 6.39605 0.607581 6.39837 1.39309C6.40107 2.28099 6.40107 3.16889 6.39837 4.05717C6.39605 4.85388 5.80335 5.44234 5.00393 5.44543C4.55921 5.4462 4.11526 5.44504 3.67131 5.44504Z"
                                                                    fill="#4C94A0" />
                                                            </svg>

                                                            <!--end::Svg Icon--></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>

                                            <div>
                                                <!--begin: Datatable-->
                                                <div id="kt_datatable_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row my-5">
                                                        <div class="col-sm-12 col-md-9">
                                                            <div class="dataTables_length" id="kt_datatable_length">
                                                                <label class="entries-label">Show <select
                                                                        name="kt_datatable_length"
                                                                        aria-controls="kt_datatable"
                                                                        class="custom-select custom-select-sm form-control form-control-sm bg-table-entries"
                                                                        fdprocessedid="9kdh4">
                                                                        <option value="10">10</option>
                                                                        <option value="25">25</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-3">
                                                            <div id="kt_datatable_filter" class="dataTables_filter">
                                                                <div
                                                                    class="input-group custom-search-bar table-searchbar">
                                                                    <input type="text"
                                                                        class="form-control input-circle-left primary-bg-color outline-0 border-0 w-50"
                                                                        placeholder="search for anything"
                                                                        fdprocessedid="4cnwu">
                                                                    <div class="input-group-append">
                                                                        <span
                                                                            class="input-group-text input-circle-right primary-bg-color">
                                                                            <svg width="18" height="18"
                                                                                viewBox="0 0 18 18" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5517 0C9.74111 0.0465077 11.6163 0.864121 13.1088 2.51213C14.0713 3.57506 14.6741 4.82367 14.902 6.24304C15.2578 8.45837 14.7355 10.4493 13.3442 12.2095C13.2672 12.3068 13.28 12.354 13.363 12.4371C14.6834 13.751 16.0005 15.0685 17.3173 16.386C17.5942 16.6629 17.5995 17.0318 17.3339 17.3002C17.0599 17.5774 16.6896 17.5813 16.4059 17.2987C15.0867 15.9834 13.7695 14.6663 12.4549 13.3467C12.3747 13.2664 12.3313 13.2444 12.2302 13.3239C10.4302 14.7415 8.39274 15.2993 6.14297 14.8519C3.24245 14.2754 1.25966 12.5475 0.385246 9.7336C-0.535678 6.77096 0.210931 4.14416 2.44863 1.99522C3.85096 0.648268 5.58169 0.034082 7.5517 0ZM7.52294 1.2408C4.08101 1.24399 1.28948 4.03446 1.28274 7.47851C1.27635 10.9233 4.07888 13.724 7.53039 13.7219C10.9844 13.7198 13.7717 10.9258 13.766 7.4707C13.7607 4.02807 10.9645 1.2376 7.52294 1.2408Z"
                                                                                    fill="#4C94A0" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 pr-1">
                                                            <div class="card odd rounded filter-card-borders">
                                                                <div class="filter-borders">
                                                                    <span
                                                                        class="filter-card-font d-inline-block p-5">Filters</span>
                                                                </div>
                                                                <div class="filter-borders">
                                                                    <div class="input-group custom-search-bar">
                                                                        <input type="text"
                                                                            class="form-control primary-bg-color outline-0 border-0 w-50"
                                                                            placeholder="Search" fdprocessedid="4cnwu">
                                                                        <div class="input-group-append">
                                                                            <span
                                                                                class="input-group-text border-radius-0 primary-bg-color">
                                                                                <svg width="18" height="18"
                                                                                    viewBox="0 0 18 18" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M7.5517 0C9.74111 0.0465077 11.6163 0.864121 13.1088 2.51213C14.0713 3.57506 14.6741 4.82367 14.902 6.24304C15.2578 8.45837 14.7355 10.4493 13.3442 12.2095C13.2672 12.3068 13.28 12.354 13.363 12.4371C14.6834 13.751 16.0005 15.0685 17.3173 16.386C17.5942 16.6629 17.5995 17.0318 17.3339 17.3002C17.0599 17.5774 16.6896 17.5813 16.4059 17.2987C15.0867 15.9834 13.7695 14.6663 12.4549 13.3467C12.3747 13.2664 12.3313 13.2444 12.2302 13.3239C10.4302 14.7415 8.39274 15.2993 6.14297 14.8519C3.24245 14.2754 1.25966 12.5475 0.385246 9.7336C-0.535678 6.77096 0.210931 4.14416 2.44863 1.99522C3.85096 0.648268 5.58169 0.034082 7.5517 0ZM7.52294 1.2408C4.08101 1.24399 1.28948 4.03446 1.28274 7.47851C1.27635 10.9233 4.07888 13.724 7.53039 13.7219C10.9844 13.7198 13.7717 10.9258 13.766 7.4707C13.7607 4.02807 10.9645 1.2376 7.52294 1.2408Z"
                                                                                        fill="#4C94A0"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-borders">
                                                                    <div class="p-5 btn-tags">
                                                                        <span
                                                                            class="filter-card-font d-block mb-5">Related
                                                                            Pillars:</span>
                                                                        <button
                                                                            class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                        <button
                                                                            class="btn bg-primary text-light my-4 font-btn border-radius-50">Human
                                                                            Well-being</button>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-borders">
                                                                    <div class="p-5 pb-0 btn-tags">
                                                                        <span
                                                                            class="filter-card-font d-inline-block mb-5">Related
                                                                            Indicators:</span>
                                                                        <div class="form-group">
                                                                            <div class="select-wrapper">
                                                                                <select
                                                                                    class="form-control bg-primary text-light"
                                                                                    id="exampleFormControlSelect1">
                                                                                    <option>None Selected</option>
                                                                                    <option>Selected</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="filter-card-font d-inline-block mb-5">Related
                                                                            Metrics:</span>
                                                                        <div class="form-group">
                                                                            <div class="select-wrapper">
                                                                                <select
                                                                                    class="form-control bg-primary text-light"
                                                                                    id="exampleFormControlSelect1">
                                                                                    <option>None Selected</option>
                                                                                    <option>Selected</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="p-5 btn-tags">
                                                                        <span
                                                                            class="filter-card-font d-block mb-5">Resource
                                                                            type:</span>
                                                                        <button
                                                                            class="btn bg-white-btn font-btn border-radius-50">Data
                                                                            Collection Tool</button>
                                                                        <button
                                                                            class="btn bg-primary text-light my-4 font-btn border-radius-50">Guidelines/Frameworks</button>
                                                                        <button
                                                                            class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                        <button
                                                                            class="btn bg-white-btn font-btn border-radius-50">Ecosystems</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 pl-1">

                                                            <div class="row">
                                                                <div class="col-sm-12 table-margin mob-style">
                                                                    <table
                                                                        class="table table-separate table-radius table-head-custom table-checkable dataTable no-footer dtr-inline filter-card-borders"
                                                                        id="kt_datatable" role="grid"
                                                                        aria-describedby="kt_datatable_info"
                                                                        style="width: 1151px;">
                                                                        <thead class="header-table">
                                                                            <tr role="row">
                                                                                <th class="sorting sorting_asc"
                                                                                    tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 56px;"
                                                                                    aria-sort="ascending"
                                                                                    aria-label="Record ID: activate to sort column descending">
                                                                                    Record ID</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 45px;"
                                                                                    aria-label="Order ID: activate to sort column ascending">
                                                                                    Order ID</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 65px;"
                                                                                    aria-label="Country: activate to sort column ascending">
                                                                                    Country</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 41px;"
                                                                                    aria-label="Ship City: activate to sort column ascending">
                                                                                    Ship City</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 62px;"
                                                                                    aria-label="Ship Address: activate to sort column ascending">
                                                                                    Ship Address</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="kt_datatable"
                                                                                    rowspan="1" colspan="1"
                                                                                    style="width: 69px;"
                                                                                    aria-label="Company Agent: activate to sort column ascending">
                                                                                    Company Agent</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="odd">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
                                                                                </td>
                                                                                <td>53499-0393</td>
                                                                                <td>Ukraine</td>
                                                                                <td>Kozel’shchyna</td>
                                                                                <td>02 Briar Crest Parkway</td>
                                                                                <td>Halley Bentham</td>
                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
                                                                                </td>
                                                                                <td>53499-0393</td>
                                                                                <td>Ukraine</td>
                                                                                <td>Kozel’shchyna</td>
                                                                                <td>02 Briar Crest Parkway</td>
                                                                                <td>Halley Bentham</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
                                                                                </td>
                                                                                <td>53499-0393</td>
                                                                                <td>Ukraine</td>
                                                                                <td>Kozel’shchyna</td>
                                                                                <td>02 Briar Crest Parkway</td>
                                                                                <td>Halley Bentham</td>
                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
                                                                                </td>
                                                                                <td>53499-0393</td>
                                                                                <td>Ukraine</td>
                                                                                <td>Kozel’shchyna</td>
                                                                                <td>02 Briar Crest Parkway</td>
                                                                                <td>Halley Bentham</td>
                                                                            </tr>
                                                                            <tr class="odd">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
                                                                                </td>
                                                                                <td>53499-0393</td>
                                                                                <td>Ukraine</td>
                                                                                <td>Kozel’shchyna</td>
                                                                                <td>02 Briar Crest Parkway</td>
                                                                                <td>Halley Bentham</td>
                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="dtr-control sorting_1"
                                                                                    tabindex="0">6
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
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">User Profile
                <small class="text-muted font-size-sm ml-2">12 messages</small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label"
                        style="background-image:url('/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg')">
                    </div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                    <div class="text-muted mt-1">Application Developer</div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                            </span>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="/metronic/demo1/custom/apps/user/profile-1/personal-information.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Profile</div>
                            <div class="text-muted">Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="/metronic/demo1/custom/apps/user/profile-3.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-warning">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13"
                                                rx="1.5" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8"
                                                rx="1.5" />
                                            <path
                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Messages</div>
                            <div class="text-muted">Inbox and tasks</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="/metronic/demo1/custom/apps/user/profile-2.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/Selected-file.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Activities</div>
                            <div class="text-muted">Logs and notifications</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="/metronic/demo1/custom/apps/userprofile-1/overview.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Tasks</div>
                            <div class="text-muted">latest tasks and projects</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
            </div>
            <!--end::Nav-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">Recent Notifications</h5>
                <!--end:Heading-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-warning mr-5">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                            purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-success mr-5">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                    <path
                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                            be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-danger mr-5">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                        fill="#000000" />
                                    <path
                                        d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                            would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5">
                    <span class="svg-icon svg-icon-info mr-5">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Attachment2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                    <path
                                        d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                        fill="#000000"
                                        transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                    <path
                                        d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                    <path
                                        d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                            best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->
    <!--begin::Quick Cart-->
    <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Shopping Cart</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                        <span class="text-muted">The best kitchen gadget in 2020</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/stock-600x400/img-1.jpg" title=""
                            alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#"
                            class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                        <span class="text-muted">Smart tool for cooking</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/stock-600x400/img-2.jpg" title=""
                            alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                        <span class="text-muted">Professional camera for edge cutting shots</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/stock-600x400/img-3.jpg" title=""
                            alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                        <span class="text-muted">Manufactoring unique objects</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/stock-600x400/img-4.jpg" title=""
                            alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                        <span class="text-muted">Perfect animation tool</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/stock-600x400/img-8.jpg" title=""
                            alt="" />
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                    <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-7">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                    <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
                </div>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Cart-->
    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New
                                    Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                    Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                <span class="symbol-label">
                                    <img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                    Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span
                                class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-warning mr-5">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                                    purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-success mr-5">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                            <path
                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                                    be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                            <span class="svg-icon svg-icon-danger mr-5">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                                    would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                            <span class="svg-icon svg-icon-info mr-5">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Attachment2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                            <path
                                                d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                                fill="#000000"
                                                transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                            <path
                                                d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                            <path
                                                d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                                fill="#000000" opacity="0.3"
                                                transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#"
                                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                                    best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-psd text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                                    <div class="text-muted">40% less alerts thar last week</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                                    <div class="text-muted">Most posted 12 time</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                                    <div class="text-muted">9 photodrapehrs, 7 designer</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-info icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                                    <div class="text-muted">Mostly PSD end AL concepts</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" name="quick_panel_notifications_2" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-danger">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-sm switch-primary">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Demo Panel-->
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Select A Demo</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo1.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo1/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo1/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo2.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo2/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo2/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo3.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo3/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo3/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo4.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo4/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo4/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo5.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo5/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo5/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo6.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo6/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo6/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo7.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo7/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo7/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo8.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo8/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo8/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo9.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo9/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo9/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo10.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo10/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo10/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo11.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo11/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo11/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo12.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo12/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo12/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo13.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../demo13/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                            target="_blank">Default</a>
                        <a href="../demo13/rtl/builder.html"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
                            target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo14.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo15.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo16.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo17.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo18.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo19.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo20.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo21.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo22.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo23.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo24.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo25.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo26.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo27.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo28.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo29.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="/metronic/theme/html/demo1/dist/assets/media/demos/demo30.png" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#"
                            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                            soon</a>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Demo Panel-->
    <!-- <script>var HOST_URL = "/metronic/theme/html/tools/preview";</script> -->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <!-- <script src="../assets/js/scripts.bundle.js"></script> -->
    <script src="../assets/js/updated.bundle.js"></script>
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        $(document).on('click', '#kt_aside_toggle', function () {
            var src = $('.brand-logo').find('img').attr('src');
            if (src.indexOf('landscale_icon.svg') != -1) {
                src = src.replace('landscale_icon.svg', 'landscale_logo.png');
            } else {
                src = src.replace('landscale_logo.png', 'landscale_icon.svg');
            }
            $('.brand-logo').find('img').attr('src', src);
        });
        $(document).on('mouseenter', '#kt_aside_menu .hover-menu', function () {
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
            colors:['#9ABF78', '#074A37', '#9FCEDF', '#FEC85C'],
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
                formatter: function (val, opt) {
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


    </script>
    <!-- <script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script> -->
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="/metronic/theme/html/demo1/dist/assets/js/pages/builder.js?v=7.2.9"></script> -->
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>