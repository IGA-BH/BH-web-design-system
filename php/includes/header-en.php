<!doctype html>
<html lang="<?php if (is_arabic_page()) echo 'ar-BH'; else echo 'en-US'; ?>"<?php if (is_arabic_page()) echo ' dir="rtl"'; ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=5.0">
    <title><?php echo $pages[$page]['title'] ?> | <?php echo $site_title ?></title>
    <meta name="author" content="Bahrain Government Guidlines Design System">
    <meta name="copyright" content="Bahrain Government Guidlines Design System">
    <meta name="keywords" content="Bahrain Government Guidlines Design System">
    <meta name="description" content="Bahrain Government Guidlines Design System">
    <!-- Social Media Meta Start -->
    <meta property="og:description" content="Bahrain Government Guidlines Design System">
    <meta property="og:image" content="http://boxondemo.net/2025/BHGOV/html_v1/images/og-image.png">
    <meta property="og:site_name" content="Bahrain Government Guidlines Design System">
    <meta property="og:title" content="Bahrain Government Guidlines Design System">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://boxondemo.net/2025/BHGOVTEMP/html_v1/php/index.php">
    <!-- Logo Icon Starts -->
    <link rel="apple-touch-icon" sizes="57x57" href="../images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icons/favicon-16x16.png">
    <link rel="manifest" href="../images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Public Sans Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php if($page == 'index'||$page =='index-02'||$page =='index-03'||$page =='index-04'||$page =='map'||$page =='contact-us' || $page == 'contact-us-2' || $page == 'events-detail-page'){?>
        <!-- Leaflet Map -->
        <link rel="stylesheet" href="../css/leaflet.min.css">
	<?php } else {?>
		<!-- MultiSelect -->
        <link rel="stylesheet" href="../css/jquery.multiselect.css" media="all">
        <!-- Daterange Picker -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
        <!-- File Upload Dropzone -->
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css">
	<?php } ?>
    <!-- Colorbox -->
    <link rel="stylesheet" href="../css/colorbox.css">
    <?php
    if($page == 'table'||$page == 'statistics'|| $page == 'general-template'){
    ?>
        <!-- DataTable -->
         <link rel="stylesheet" href="../css/datatables.min.css">
    <?php } ?>
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.min.css" media="all">
</head>
<body>

<?php
if ($page !== '404') { ?>
	<!-- Cookie Card Starts -->
	<div class="cookie-card bg--secondary" role="alert">
		<div class="container cookie-card__container">
			<div class="cookie-card__content">
				<p>This site uses cookies to deliver our services, to understand how you use our site, and to improve your experience. By using our site, you acknowledge that you have read and understood our <a href="cookies-policy.html">Cookies Policy</a>.</p>
			</div>
			<div class="cookie-card__buttons">
				<a href="#" class="govbh-btn govbh-btn--outline" role="button" aria-label="Decline cookies">Decline</a>
				<a href="#" class="govbh-btn govbh-btn--primary" role="button" aria-label="Accept and continue cookies">Accept & Continue <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<!-- Cookie Card Ends -->
<?php } ?>

<!-- Skip to main content Starts -->
<div id="govbh-skiplink" class="govbh-skiplink">
    <a href="#govbh-main">Skip to main content</a>
</div>
<!-- Skip to main content Ends -->

<!-- Preload Section Starts -->
<div class="preloadcss"></div>
<!-- Preload Section Ends -->

<!-- Header Starts -->
<header id="govbh-header" class="govbh-header" aria-label="Header">
    <!-- Masthead Starts -->
    <div class="govbh-masthead">
        <div class="govbh-masthead-head bg--secondary">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-nowrap gap-1 align-items-start">
                        <img loading="lazy" src="../images/bahrain-flag.svg" alt="Flag - Kingdom of Barhain" width="66" height="70">
                        <p><span>Official government website of the Kingdom of Bahrain</span><button type="button" data-target-on="#details-masthead-body" class="privacyhead govbh-toggler" aria-expanded="false" aria-controls="details-masthead-body" aria-label="Official government website of the Kingdom of Bahrain - How to identify?">How to identify?<i class="ph ph-caret-down" aria-hidden="true"></i></button></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Masthead Body Starts -->
        <div class="govbh-masthead-body bg--secondary" id="details-masthead-body">
            <div class="container">
                <div class="row gap-md-0 gap-sm-4 gap-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="govbh-masthead-body__content">
                            <div class="govbh-masthead-body__title"><i class="ph-fill ph-house" aria-hidden="true"></i>Official government websites in Bahrain end with .gov.bh</div>
                            <p>All links to official websites of government entities in the Kingdom of Bahrain end with <code>.gov.bh</code>&nbsp;&nbsp;<a href="https://www.bahrain.bh/wps/portal/en/BNP/GSX-UI-AllEntities" aria-label="Trusted Government Websites page - open in a new window" target="_blank" rel="noopener noreferrer" class="govbh-is-external">Trusted Government Websites</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="govbh-masthead-body__content">
                            <div class="govbh-masthead-body__title"><i class="ph-fill ph-lock-simple" aria-hidden="true"></i>Bahraini government websites use the HTTPS protocol to ensure encrypted and secure communication</div>
                            <p>All official websites of government entities in the Kingdom of Bahrain use HTTPS to protect users' data and ensure secure access.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Masthead Ends -->
    <!-- Header with Logo Starts -->
    <div class="govbh-head">
        <div class="container">
            <div class="govbh-head__headrow">
                <!-- Logo -->
                <div class="govbh-head__logo">
                    <!-- <a href="#"><img loading="lazy" src="../images/silver-logo.svg" alt="Silver Jublie Logo"></a> -->
                    <a href="index.html">
                        <img loading="lazy" src="../images/gov-bh-logo.svg" alt="Bahrain Government Guidlines Design System Logo" width="265" height="70" class="govbh-logo-light">
                        <img loading="lazy" src="../images/bahrain-government-design-system-white-logo.svg" alt="Bahrain Government Guidlines Design System Logo white" width="265" height="70" class="govbh-logo-dark">
                    </a>
                </div>
                <!-- Secondary Menu -->
                <div class="govbh-head__secondary-menu">
                    <div class="govbh-head__secondary-menu-list d-xl-block d-lg-none d-none">
                        <ul><!-- Secondary Menu ul -->
                            <li>
                                <a href="index.html">Link1</a>
                            </li>
                            <li>
                                <a href="index-02.html">Link2</a>
                            </li>
                            <li>
                                <a href="index-03.html" class="govbh-is-external" target="_blank" aria-label="Link3 - open in a new window">Link3</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Login -->
                    <a href="login.html" class="govbh-btn govbh-btn--outline govbh-btn--left-icon govbh-btn--medium d-lg-inline-flex d-md-none d-none" role="button" aria-label="Click here to log in to the portal."><i class="ph ph-lock-key" aria-hidden="true"></i>Login</a>
                    <!-- Language Switcher -->
                    <a class="govbh-head__lang-switcher" href="../html-ar/<?php echo $page ?>.html" lang="ar-BH" data-tooltip="tooltip" title="Click here to switch to the Arabic version of this page." aria-label="Click here to switch to the Arabic version of this page.">العربية <i class="ph ph-globe" aria-hidden="true"></i></a>
                    <!-- Dark Mode -->
                    <a href="#" class="govbh-head__darkmode d-md-flex d-sm-none d-none" data-tooltip="tooltip" title="Click here to switch between light and dark mode" role="button" aria-label="Click here to switch between light and dark mode"><i class="ph ph-moon dark--moon" aria-hidden="true"></i><i class="ph ph-sun-dim dark--sun" aria-hidden="true"></i></a>
                    <!-- Text Resize -->
                    <div class="govbh-head__textsize">
                        <a href="#" class="govbh-head__textsize-btn" data-tooltip="tooltip" title="Click here to resize text size." role="button" aria-label="Click here to resize text size."><span class="icon-resize"></span></a>
                        <div class="govbh-head__textsize-body">
                            <ul>
                                <li class="govbh-head__textsize-small"><button type="button" aria-label="Text resize small"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                                <li class="govbh-head__textsize-medium active"><button type="button" aria-label="Text resize medium"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                                <li class="govbh-head__textsize-large"><button type="button" aria-label="Text resize large"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                            </ul>
                            <div class="govbh-head__textsize-title">Text Resize ( <button type="button" class="textsizereset">Reset</button> )</div>
                            <button type="button" class="govbh-head__textsize-close" aria-label="Text resize close button"><i class="ph ph-x" aria-hidden="true"></i></button>

                        </div>
                    </div>
                    <!-- Search -->
                    <a href="#" id="searchbtn" class="govbh-head__search-switcher" data-tooltip="tooltip" title="Click here to search." role="button" aria-label="Click here to search."><i class="ph ph-magnifying-glass icon--active" aria-hidden="true"></i><i class="ph ph-x icon--close" aria-hidden="true"></i></a>
                    <!-- Burger menu -->
					<a href="#" id="govbhhamburger" class="govbh-hamburger d-xl-none d-lg-flex d-flex" role="button" aria-label="Click here to open the menu.">
                        <i class="ph ph-list icon--active" aria-hidden="true"></i><i class="ph ph-x icon--close" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header with Logo Ends -->
    <!-- Accessibility Section Starts -->
	<div id="govbh-accessibility" class="govbh-accessibility" style="display: none;">
		<div class="container">
            <div class="govbh-accessibility__wrapper">
			    <div class="govbh-abstract m-0">Accessibility details goes here..</div>
            </div>
		</div>
	</div>
	<!-- Accessibility Section Ends -->
    <!-- Search Section Starts -->
	<div class="govbh-search">
		<div class="container">
			<form action="search-result.html" autocomplete="on">
                <label for="txtSearch" class="visually-hidden">Search</label>
				<input id="txtSearch" type="search" value="" name="searchQuery" placeholder="Enter keyword..." aria-label="Start typing to find what you're looking for.">
				<button type="button" onclick="window.location='search-result.html'" aria-label="Click here to start your search."><i class="ph ph-magnifying-glass" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<!-- Search Section Ends -->
    <!-- Menu Starts -->
    <div class="govbh-menu">
        <div class="container">
            <div class="govbh-menu__top">
                <!-- Logo -->
                <div class="govbh-menu__logo d-xl-none d-lg-block d-block">
                    <a href="index.html">
                        <img loading="lazy" src="../images/gov-bh-logo.svg" alt="Bahrain Government Guidlines Design System Logo" width="265" height="70" class="govbh-logo-light">
                        <img loading="lazy" src="../images/bahrain-government-design-system-white-logo.svg" alt="Bahrain Government Guidlines Design System Logo White" width="265" height="70" class="govbh-logo-dark">
                    </a>
                </div>
                <!-- Close Button -->
                <a href="#" id="govbhhamburgerclose" class="govbh-menu__close d-xl-none d-lg-flex d-flex" role="button" aria-label="Click here to close the menu.">
                    <i class="ph ph-x" aria-hidden="true"></i>
                </a>
                <div class="govbh-menu__switchers d-xl-none d-lg-flex d-flex">
                    <div class="govbh-menu__switchers-col">
                        <!-- Dark Mode -->
                        <a href="#" class="govbh-head__darkmode" data-tooltip="tooltip" title="Click here to switch between light and dark mode" role="button" aria-label="Click here to switch between light and dark mode"><i class="ph ph-moon dark--moon" aria-hidden="true"></i><i class="ph ph-sun-dim dark--sun" aria-hidden="true"></i></a>
                        <!-- Text Resize -->
                        <div class="govbh-head__textsize">
                            <a href="#" id="textsize" class="govbh-head__textsize-btn" data-tooltip="tooltip" title="Click here to resize text size." role="button" aria-label="Click here to resize text size."><span class="icon-resize"></span></a>
                            <div class="govbh-head__textsize-body">
                                <ul>
                                    <li class="govbh-head__textsize-small"><button type="button" aria-label="Text resize small"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                                    <li class="govbh-head__textsize-medium active"><button type="button" aria-label="Text resize medium"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                                    <li class="govbh-head__textsize-large"><button type="button" aria-label="Text resize large"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                                </ul>
                                <div class="govbh-head__textsize-title">Text Resize ( <button type="button" class="textsizereset">Reset</button> )</div>
                                <button type="button" class="govbh-head__textsize-close" aria-label="Text resize close button"><i class="ph ph-x" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="govbh-menu__switchers-col">
                        <a href="login.html" class="govbh-btn govbh-btn--outline govbh-btn--left-icon govbh-btn--small d-xl-none d-lg-inline-flex d-inline-flex" role="button" aria-label="Click here to log in to the portal."><i class="ph ph-lock-key" aria-hidden="true"></i>Login</a><!-- Login -->
                        <!-- Mobile Language Switcher -->
                        <a class="govbh-head__lang-switcher" href="../html-ar/<?php echo $page ?>.html" lang="ar-BH" aria-label="Click here to switch to the Arabic version of this page.">العربية <i class="ph ph-globe" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- Main Navigation -->
            <nav id="main-nav" class="govbh-menu__navmenu" aria-label="Main navigation">
                <div class="govbh-menu__navmenu-home">
                    <a href="index.html" aria-label="Home"><i class="ph ph-house" aria-hidden="true"></i></a>
                </div>
                <ul id="main-menu" class="sm">
                    <li>
                        <a href="javascript:void(0);" role="button" aria-label="Open dropdown for Nav Item 1">Nav Item 1</a>
                        <ul>
                            <li><a href="javascript:void(0);" role="button" aria-label="Open dropdown for Submenu First Level">Submenu First Level</a>
                                <ul>
                                    <li><a href="#">Submenu Second Level</a></li>
                                    <li><a href="#">Submenu Second Level</a></li>
                                    <li><a href="#">Submenu Second Level</a></li>
                                    <li><a href="#">Submenu Second Level</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" role="button" aria-label="Open dropdown for Nav Item 2">Nav Item 2</a>
                        <!-- Mega Menu Starts -->
                        <ul class="govbh-menu__megamenu-container">
                            <li>
                                <div class="row g-xl-5 g-md-4 g-3">
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="govbh-menu__megamenu-title">Megamenu Title 1</div>
                                        <ol>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                        </ol>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="govbh-menu__megamenu-title">Megamenu Title 2</div>
                                        <ol>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                        </ol>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="govbh-menu__megamenu-title">Megamenu Title 3</div>
                                        <ol>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                        </ol>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="govbh-menu__megamenu-title">Megamenu Title 4</div>
                                        <ol>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Mega Menu Ends -->
                    </li>
                    <li>
                        <a href="javascript:void(0);" role="button" aria-label="Open dropdown for Nav Item 3">Nav Item 3</a>
                         <!-- Mega Menu Starts -->
                         <ul class="govbh-menu__megamenu-container">
                            <li>
                                <div class="row g-xl-5 g-md-4 g-3">
                                    <div class="col-xl-4 col-lg-12 col-sm-12 col-12 d-xl-block d-lg-none d-none">
                                        <div class="govbh-menu__megamenu-img">
                                            <img loading="lazy" src="../images/img-001.webp" alt="Mega Menu layout" width="556" height="360">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-sm-12 col-12">
                                        <ol class="govbh-menu__megamenu--two-col">
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                            <li><a href="#">Megamenu Item</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Mega Menu Ends -->
                    </li>
                    <li>
                        <a href="javascript:void(0);" role="button" aria-label="Open dropdown for Nav Item 4">Nav Item 4</a>
                        <ul>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                            <li><a href="#">Submenu First Level</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Nav Item 5</a>
                    </li>
                    <li>
                        <a href="#">Nav Item 6</a>
                    </li>
                </ul>
            </nav>
            <!-- Secondary Menu Mobile -->
            <div class="govbh-menu__secondary-menu-list d-xl-none d-lg-block d-block">
                <ul><!-- Secondary Menu ul -->
                    <li>
                        <a href="#">Link1</a>
                    </li>
                    <li>
                        <a href="#">Link2</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Link3</a>
                    </li>
                </ul>
                                
            </div>
        </div>
    </div>
    <!-- Menu Ends -->
    <!-- Menu Close Overlay -->
    <div class="govbh-menuclose"></div>
</header>
<!-- Header Ends -->

<!-- VERTICAL FLOATING ICONS STARTS -->
<div class="govbh-floatinglist-vertical">
    <ul id="myList" class="open">
        <li class="govbh-accessibility-widget">
            <button type="button" class="govbh-floatinglist__btn govbh-accessibility-widget__btn" aria-label="Accessibility Menu" data-tooltip="tooltip" data-tooltip-position="left" title="Accessibility">
                <span class="icon-accessibility" aria-hidden="true"></span>
            </button>
            <!-- Pop Widget Starts -->
            <div class="govbh-accessibility-widget__pop">
                <div class="govbh-accessibility-widget__pop-title pb-2">Accessibility Tools</div>
                <div class="govbh-accessibility-widget__items">
                    <!-- Dark Mode widget -->
                    <div class="govbh-accessibility-widget__items-list">
                        <!-- Dark Mode -->
                        <div class="govbh-head__textsize-title">Dark Mode</div>
                        <div class="govbh-accessibility-widget__toggle">
                            <div class="form-toggle__switch-label">Off</div>
                            <a href="#" class="govbh-head__darkmode d-flex" data-tooltip="tooltip" title="Click here to switch between light and dark mode" role="button" aria-label="Click here to switch between light and dark mode"><i class="ph ph-moon dark--moon" aria-hidden="true"></i><i class="ph ph-sun-dim dark--sun" aria-hidden="true"></i></a>
                            <div class="form-toggle__switch-label">On</div>
                        </div>
                    </div>
                    <div class="hr mt-3 mb-3"></div>
                    <!-- Play Speaker widget -->
                    <div class="govbh-accessibility-widget__items-list">
                        <div class="govbh-head__textsize-title">Screen Reader</div>
                        <a href="#" data-tooltip="tooltip" title="Click here to Play/Pause speaker" role="button" aria-label="Click here to switch between light and dark mode" class="govbh-accessibility-widget__toggle-play">
                            <div class="toggle-play-icon">
                                <i class="ph-fill ph-play" aria-hidden="true"></i>
                                <i class="ph-fill ph-pause" aria-hidden="true"></i>
                            </div>
                            <div class="govbh-accessibility-widget__toggle-play-text">Play Speaker</div>
                        </a>
                    </div>
                    <div class="hr mt-3 mb-2"></div>
                    <!-- Text Resize widget -->
                    <div class="govbh-accessibility-widget__items-list govbh-head__textsize-body">
                        <ul>
                            <li class="govbh-head__textsize-small"><button type="button" aria-label="Text resize small"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                            <li class="govbh-head__textsize-medium active"><button type="button" aria-label="Text resize medium"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                            <li class="govbh-head__textsize-large"><button type="button" aria-label="Text resize large"><i class="ph ph-text-aa" aria-hidden="true"></i></button></li>
                        </ul>
                        <div class="govbh-head__textsize-title">Text Resize ( <button type="button" class="textsizereset">Reset</button> )</div>
                    </div>
                </div>
                <button type="button" class="govbh-accessibility-widget__pop-close" aria-label="Feedback close button"><i class="ph ph-x" aria-hidden="true"></i></button>
            </div>
            <!-- Pop Widget Ends -->
        </li>
        <li class="govbh-floatinglist__smiley">
            <button type="button" class="govbh-floatinglist__smiley-btn govbh-floatinglist__btn" aria-label="Submit Your feedback" data-tooltip="tooltip" data-tooltip-position="left" title="Your Feedback">
                <span class="icon-smiley" aria-hidden="true"></span>
            </button>
            <div class="govbh-floatinglist__pop">
                <div class="govbh-floatinglist__pop-title">Your Feedback</div>
                <div class="govbh-floatinglist__items">
                    <!-- Smily feedback -->
                    <a href="javascript:void(0);" role="button" aria-label="Thank you for your feedback" class="govbh-floatinglist__item" data-bs-toggle="modal" data-bs-target="#smilyfeedback"><i class="ph ph-smiley text--success" aria-hidden="true"></i></a>
                    <!-- Smily Meh feedback -->
                    <a href="javascript:void(0);" role="button" aria-label="Enter your feedback" class="govbh-floatinglist__item" data-bs-toggle="modal" data-bs-target="#smilymehfeedback"><i class="ph ph-smiley-meh text--tertiary" aria-hidden="true"></i></a>
                    <!-- Sad feedback -->
                    <a href="javascript:void(0);" role="button" aria-label="Enter your feedback" class="govbh-floatinglist__item" data-bs-toggle="modal" data-bs-target="#sadfeedback"><i class="ph ph-smiley-sad text--accent" aria-hidden="true"></i></a>
                </div>
                <button type="button" class="govbh-floatinglist__pop-close" aria-label="Feedback close button"><i class="ph ph-x" aria-hidden="true"></i></button>
            </div>
        </li>
        <li>
            <a href="https://services.bahrain.bh/wps/portal/tawasul/en/!ut/p/z1/hY_BCoJAEIafxqszrVRbt9VIEEOpQNtLaGyroK6sW75-UhEYSXOb-b9vhgEOKfAmu5cyM6VqsmroT3xxptT3ZoSSAHchRRbHlK1iz0GyhOQfwIcYJ4rh4PMn8tkQHTcMGQsisg3nBCPyBr5Nd09cB9GfAEZHAuCyUvnrH9bkDpXAtbgKLbR908O4MKbt1hZa2Pe9LZWSlbAvqrbwl1KozkA6JuEgGmjrFMu4Tqih7AEMXdlA/dz/d5/L3dJdyEvUUd3QndNQSEvNE5sRS9aNl84OEdDMTI4MkowTUw4MEFQUDhBOVBDMzAyNw!!/" target="_blank" data-tooltip="tooltip" data-tooltip-position="left" title="Tawasul - The National Suggestions & Complaints System" aria-label="Tawasul - The National Suggestions & Complaints System - Open in a new window">
                <span><img src="../images/utilities/tawasul-icon.svg" alt="Tawasul - The National Suggestions & Complaints System" loading="lazy"></span>
            </a>
        </li>
        <li>
            <a href="tel:80008001" aria-label="Call Government Services Contact Center" data-tooltip="tooltip" data-tooltip-position="left" title="Government Services Contact Center">
                <span class="icon-call" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <button type="button" class="govbh-floatinglist__btn" aria-label="Chat with our Expert" data-tooltip="tooltip" data-tooltip-position="left" title="Chat with our Expert">
                <span class="icon-chattext" aria-hidden="true"></span>
            </button>
        </li>
    </ul>
    <button type="button" aria-label="Close the floating menu" class="govbh-floatinglist-vertical__backarrow"><i class="ph ph-caret-up" aria-hidden="true"></i></button>
</div>
<!-- VERTICAL FLOATING ICONS ENDS -->
    
<!-- Main Section Starts -->
<main id="govbh-main" aria-label="Main content">
