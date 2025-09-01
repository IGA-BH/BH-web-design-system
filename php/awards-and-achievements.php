<?php
include "../globals.php";
$page = 'awards-and-achievements';
include "includes/header.php";
?>

<!-- Breadcrumb Starts -->
<section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
    <div class="container">
        <div class="row g-2 align-items-center">
            <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                <ul class="govbh-breadcrumb__group">
                    <li class="govbh-breadcrumb__item-home">
                        <a href="index.html" aria-label="Go to home"><i class="ph ph-house"
                                aria-hidden="true"></i><span>Home</span></a>
                    </li>
                    <li class="govbh-breadcrumb__item-last" aria-current="page">Awards and Achievements</li>
                </ul>
            </nav>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <h1>Awards and Achievements</h1>
            </div>
            <div
                class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
                    <div class="govbh-sharethis__title">Share this page:</div>
                    <ul>
                        <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn"
                                rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Facebook"
                                rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Whatsapp"
                                rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Twitter"
                                rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Telegram"
                                rel="noopener noreferrer"><span class="icon-telegram" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" aria-label="Print this page"><i class="ph ph-printer" aria-hidden="true" role="presentation"></i></a></li>
                        <li><a href="#" aria-label="Copy this page's link"><i class="ph ph-copy" aria-hidden="true" role="presentation"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<!-- Awards Section Starts -->
<section class="govbh-section" aria-labelledby="awards-page-title">
    <h2 id="awards-page-title" class="visually-hidden">Awards and Achievements</h2>
    <div class="container">
        <!-- Two Column Starts -->
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-lg-0 mt-md-4 mt-4">
                <!-- Side Widget Starts -->
                <aside class="govbh-side-widget govbh-side-widget--hide-list mb-4">
                    <button type="button" aria-expanded="false" aria-controls="asidecategories"
                        data-aria-expanded-text="Close Side Navigation Menu" aria-label="Open Side Navigation Menu"
                        data-target-on="#asidecategories"
                        class="govbh-side-widget__title govbh-fs-h5 govbh-toggler d-lg-none d-md-flex d-flex mb-0">
                        Categories <i class="ph ph-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="govbh-side-widget__title govbh-fs-h5 d-lg-block d-md-none d-none"
                        id="side-widget-title">Categories</div>
                    <div id="asidecategories" class="govbh-side-widget__content">
                        <ul class="govbh-side-widget__list" aria-labelledby="side-widget-title">
                            <li class="govbh-side-widget__item active">
                                <a href="javascript:void(0);">All (25)</a>
                            </li>
                            <li class="govbh-side-widget__item">
                                <a href="javascript:void(0);">Local Awards (10)</a>
                            </li>
                            <li class="govbh-side-widget__item">
                                <a href="javascript:void(0);">GCC Awards (5)</a>
                            </li>
                            <li class="govbh-side-widget__item">
                                <a href="javascript:void(0);">Arab Awards (3)</a>
                            </li>
                            <li class="govbh-side-widget__item">
                                <a href="javascript:void(0);">International Awards (7)</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- Side Widget Ends -->
            </div>
            <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <!-- Search Container Starts -->
                <form action="#" autocomplete="on" aria-labelledby="search-label">

                    <div class="govbh-search-card bg--grey mb-lg-5 mb-md-4 mb-4">
                        <div class="govbh-search-card__title govbh-fs-h5 text--brand" id="search-label">Search Form
                        </div>
                        <div class="govbh-search-card__head">
                            <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                                <div class="form-floating__ico"><i class="ph ph-magnifying-glass"
                                        aria-hidden="true"></i></div>
                                <input type="search" class="form-control" id="floatingInput"
                                    aria-label="Enter your keyword" placeholder="">
                                <label for="floatingInput">Enter your keyword</label>
                            </div>
                            <button type="button" class="govbh-btn govbh-btn--primary"
                                aria-label="Click here to search">Search <i class="ph ph-arrow-right"
                                    aria-hidden="true"></i></button>
                        </div>
                        <div class="row g-2 m-0">
                            <div class="col-12">
                                <div class="govbh-advanced-search">
                                    <button type="button" class="govbh-advanced-search__head govbh-toggler m-0"
                                        data-target-on="#advancesearch" aria-expanded="false">
                                        <i class="ph-fill ph-caret-down" aria-hidden="true"></i> <span>Show</span>
                                        Advanced Search
                                    </button>
                                    <div class="govbh-advanced-search__body" id="advancesearch" style="display:none;">
                                        <fieldset>
                                            <legend class="visually-hidden">Advanced Search Field</legend>
                                            <div class="row g-4">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div
                                                        class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                        <select class="with-search" data-placeholder-search="Search Type"
                                                            data-placeholder="Select Category" data-columns="1"
                                                            data-select-all="yes" data-select-all-text="Select All"
                                                            data-unselect-all-text="Unselect All"
                                                            data-selected-option-text="selected" multiple id="select-003">
                                                            <option value="1">Awards</option>
                                                            <option value="2">Value 1</option>
                                                            <option value="3">Value 3</option>
                                                            <option value="4">Value 4</option>
                                                            <option value="5">Value 5</option>
                                                            <option value="6">Value 6</option>
                                                            <option value="7">Value 7</option>
                                                        </select>
                                                        <label for="select-003">Type</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div
                                                        class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                        <select class="with-search" data-placeholder-search="Search a Year"
                                                            data-placeholder="Select Year" data-columns="1"
                                                            data-select-all="yes" data-select-all-text="Select All"
                                                            data-unselect-all-text="Unselect All"
                                                            data-selected-option-text="selected" multiple id="select-002">
                                                            <option value="1">2025</option>
                                                            <option value="2">2024</option>
                                                            <option value="3">2023</option>
                                                            <option value="4">2022</option>
                                                            <option value="5">2021</option>
                                                            <option value="6">2020</option>
                                                            <option value="7">2019</option>
                                                        </select>
                                                        <label for="select-002">Year</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="govbh-btn govbh-btn--primary"
                                                        aria-label="Click here to search">Search <i
                                                            class="ph ph-arrow-right" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- Search Container Ends -->

                <!-- List Grid Starts -->
                <div role="region" aria-label="All Awards">
                    <!-- Title and Sort by Starts -->
                    <div class="row align-items-center g-3 mt-4 mb-4">
                        <div class="col-xxl-8 col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12 mt-md-3 mt-sm-0 mt-0">
                            <h2 class="m-0" id="list-heading">All Awards</h2>
                        </div>
                        <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12" aria-labelledby="sort-options">
                            <div class="d-flex justify-content-end gap-2">
                                <div class="visually-hidden" id="sort-options">Sort Option</div>
                                <div class="govbh-form-control form-floating govbh-form-control--select"
                                    aria-labelledby="sort-options">
                                    <select class="form-select select2" id="select-001" name="select-001">
                                        <option value="">Select Sort Option</option>
                                        <option value="1">Name Ascending</option>
                                        <option value="2">Name Descending</option>
                                    </select>
                                    <label for="select-001">Sort by</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Title and Sort by Ends -->
                    <!-- List Starts -->
                    <div class="govbh-newscard-list govbh-popup-wrapper__item" aria-labelledby="list-heading">
                        <a href="#" aria-labelledby="awards-and-achievements-01" class="govbh-newscard-listview govbh-popup-wrapper__items">
                            <div class="govbh-newscard__image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-033.webp">
                                    <!--1600*750 Default image-->
                                    <source media="(min-width: 992px)" srcset="../images/banner-033.webp"><!--1199*500-->
                                    <source media="(min-width: 768px)" srcset="../images/banner-033.webp"> <!--991*413-->
                                    <img loading="lazy" src="../images/banner-033.webp"
                                        alt="Bahrain Smart Cities Awards 2020" width="582" height="328"><!--767*320-->
                                </picture>
                            </div>
                            <div class="govbh-newscard__content">
                                <div class="govbh-newscard__content-head">
                                    <div class="govbh-newscard__date govbh-newscard__date--dotseparation">12 May, 2025 <span
                                            aria-disabled="true">.</span> Awards</div>
                                    <h3 id="awards-and-achievements-01" class="govbh-newscard__title">Bahrain Smart Cities Awards 2020</h3>
                                    <div class="govbh-newscard__paragraph">Advancements in Food Security and Agri-Tech
                                        Category “Botanical Atlas project”</div>
                                </div>
                                <div class="govbh-newscard__content-foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </a>
                        <a href="#" aria-labelledby="awards-and-achievements-02" class="govbh-newscard-listview govbh-popup-wrapper__items">
                            <div class="govbh-newscard__image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-033.webp">
                                    <!--1600*750 Default image-->
                                    <source media="(min-width: 992px)" srcset="../images/banner-033.webp"><!--1199*500-->
                                    <source media="(min-width: 768px)" srcset="../images/banner-033.webp"> <!--991*413-->
                                    <img loading="lazy" src="../images/banner-033.webp"
                                        alt="Government Service Centers Evaluation Award 2021" width="582"
                                        height="328"><!--767*320-->
                                </picture>
                            </div>
                            <div class="govbh-newscard__content">
                                <div class="govbh-newscard__content-head">
                                    <div class="govbh-newscard__date govbh-newscard__date--dotseparation">12 May, 2025 <span
                                            aria-disabled="true">.</span> Recognition</div>
                                    <h3 id="awards-and-achievements-02" class="govbh-newscard__title">Government Service Centers Evaluation Award 2021</h3>
                                    <div class="govbh-newscard__paragraph">Gold Category Ranked - Isa Town, ID Card Center
                                        Branch</div>
                                </div>
                                <div class="govbh-newscard__content-foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </a>
                        <a href="#" aria-labelledby="awards-and-achievements-03" class="govbh-newscard-listview govbh-popup-wrapper__items">
                            <div class="govbh-newscard__image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-033.webp">
                                    <!--1600*750 Default image-->
                                    <source media="(min-width: 992px)" srcset="../images/banner-033.webp"><!--1199*500-->
                                    <source media="(min-width: 768px)" srcset="../images/banner-033.webp"> <!--991*413-->
                                    <img loading="lazy" src="../images/banner-033.webp"
                                        alt="Bahrain Digital Content Award 2023" width="582" height="328"><!--767*320-->
                                </picture>
                            </div>
                            <div class="govbh-newscard__content">
                                <div class="govbh-newscard__content-head">
                                    <div class="govbh-newscard__date govbh-newscard__date--dotseparation">12 May, 2025 <span
                                            aria-disabled="true">.</span> Awards</div>
                                    <h3 id="awards-and-achievements-03" class="govbh-newscard__title">Bahrain Digital Content Award 2023</h3>
                                    <div class="govbh-newscard__paragraph">Government & Citizen Engagement category “Tawasul
                                        App”, ‘Business & Commerce’ category “Al Tajer App” and ‘Health & Wellbeing’
                                        category “Sehati App”</div>
                                </div>
                                <div class="govbh-newscard__content-foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </a>
                        <a href="#" aria-labelledby="awards-and-achievements-04" class="govbh-newscard-listview govbh-popup-wrapper__items">
                            <div class="govbh-newscard__image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-033.webp">
                                    <!--1600*750 Default image-->
                                    <source media="(min-width: 992px)" srcset="../images/banner-033.webp"><!--1199*500-->
                                    <source media="(min-width: 768px)" srcset="../images/banner-033.webp"> <!--991*413-->
                                    <img loading="lazy" src="../images/banner-033.webp"
                                        alt="Customer Service Excellence Award 2021" width="582" height="328"><!--767*320-->
                                </picture>
                            </div>
                            <div class="govbh-newscard__content">
                                <div class="govbh-newscard__content-head">
                                    <div class="govbh-newscard__date govbh-newscard__date--dotseparation">12 May, 2025 <span
                                            aria-disabled="true">.</span> Awards</div>
                                    <h3 id="awards-and-achievements-04" class="govbh-newscard__title">Customer Service Excellence Award 2021</h3>
                                    <div class="govbh-newscard__paragraph">The National Suggestion & Complaint system
                                        "Tawasul"</div>
                                </div>
                                <div class="govbh-newscard__content-foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </a>
                        <a href="#" aria-labelledby="awards-and-achievements-05" class="govbh-newscard-listview govbh-popup-wrapper__items">
                            <div class="govbh-newscard__image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-033.webp">
                                    <!--1600*750 Default image-->
                                    <source media="(min-width: 992px)" srcset="../images/banner-033.webp"><!--1199*500-->
                                    <source media="(min-width: 768px)" srcset="../images/banner-033.webp"> <!--991*413-->
                                    <img loading="lazy" src="../images/banner-033.webp"
                                        alt="Bahrain Smart Cities Awards 2021" width="582" height="328"><!--767*320-->
                                </picture>
                            </div>
                            <div class="govbh-newscard__content">
                                <div class="govbh-newscard__content-head">
                                    <div class="govbh-newscard__date govbh-newscard__date--dotseparation">12 May, 2025 <span
                                            aria-disabled="true">.</span> Recognition</div>
                                    <h3 id="awards-and-achievements-05" class="govbh-newscard__title">Bahrain Smart Cities Awards 2021</h3>
                                    <div class="govbh-newscard__paragraph">Innovation Award during COVID-19 Pandemic
                                        "BeAware Bahrain app"</div>
                                </div>
                                <div class="govbh-newscard__content-foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- List Ends -->

                    <!-- Popup Slider Section Starts -->
                    <div id="awardspopup" class="govbh-popup-model-slider" role="dialog" aria-hidden="true" aria-modal="true" aria-labelledby="awardspopup" tabindex="-1">
                        <div class="govbh-popup-model-slider__overlay"></div>
                        <div class="govbh-popup-model-slider__container">
                            <div class="govbh-popup-model-slider__head">
                                <button class="govbh-popup-model-slider__close" aria-label="Model Pop Close"><i class="ph ph-x"></i></button>
                            </div>
                            <div class="govbh-popup-model-slider__body">
                                <div class="govbh-popup-model-slider-swiper" aria-roledescription="carousel" role="region" aria-label="Executive Profile Slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="row govbh-popup-model-slider__content">
                                                <div class="col-12">
                                                    <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                                                        <div class="govbh-image-block" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                                            <img src="../images/banner-033.webp" alt="Bahrain Smart Cities Awards 2020" width="954" height="717" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                                        <h3 class="text--brand mb-2">Bahrain Smart Cities Awards 2020</h3>
                                                        <div class="govbh-popup-model-slider__content-date mb-3">12 May, 2025 <span aria-disabled="true">.</span> Awards</div>
                                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</strong></p>
                                                        <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="row govbh-popup-model-slider__content">
                                                <div class="col-12">
                                                    <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                                                        <div class="govbh-image-block" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                                            <img src="../images/banner-033.webp" alt="Government Service Centers Evaluation Award 2021" width="954" height="717" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                                        <h3 class="text--brand mb-2">Government Service Centers Evaluation Award 2021</h3>
                                                        <div class="govbh-popup-model-slider__content-date mb-3">12 May, 2025 <span aria-disabled="true">.</span> Recognition</div>
                                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</strong></p>
                                                        <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="row govbh-popup-model-slider__content">
                                                <div class="col-12">
                                                    <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                                                        <div class="govbh-image-block" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                                            <img src="../images/banner-033.webp" alt="Bahrain Digital Content Award 2023" width="954" height="717" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                                        <h3 class="text--brand mb-2">Bahrain Digital Content Award 2023</h3>
                                                        <div class="govbh-popup-model-slider__content-date mb-3">12 May, 2025 <span aria-disabled="true">.</span> Awards</div>
                                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</strong></p>
                                                        <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="row govbh-popup-model-slider__content">
                                                <div class="col-12">
                                                    <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                                                        <div class="govbh-image-block" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                                            <img src="../images/banner-033.webp" alt="Customer Service Excellence Award 2021" width="954" height="717" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                                        <h3 class="text--brand mb-2">Customer Service Excellence Award 2021</h3>
                                                        <div class="govbh-popup-model-slider__content-date mb-3">12 May, 2025 <span aria-disabled="true">.</span> Awards</div>
                                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</strong></p>
                                                        <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="row govbh-popup-model-slider__content">
                                                <div class="col-12">
                                                    <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                                                        <div class="govbh-image-block" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                                            <img src="../images/banner-033.webp" alt="Bahrain Smart Cities Awards 2021" width="954" height="717" loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                                        <h3 class="text--brand mb-2">Bahrain Smart Cities Awards 2021</h3>
                                                        <div class="govbh-popup-model-slider__content-date mb-3">12 May, 2025 <span aria-disabled="true">.</span> Recognition</div>
                                                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</strong></p>
                                                        <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="govbh-popup-model-slider__foot">
                                <button type="button" class="govbh-btn govbh-btn--outline" aria-label="Model Pop Close">Close</button>
                            </div>
                            <!-- Navigation -->
                            <div class="govbh-popup-model-slider-prev"><i class="ph ph-caret-left"></i> Prev</div>
                            <div class="govbh-popup-model-slider-next">Next <i class="ph ph-caret-right"></i></div>
                        </div>
                    </div>
                    <!-- Popup Slider Section Ends -->
                </div>
                <!-- List Grid Ends -->
                
                <!-- Pagination Starts -->
                <div class="govbh-pagination">
                    <nav aria-label="Browse pages">
                        <ul>
                            <li class="govbh-pagination__prev"><a href="#" aria-label="First Page" rel="first"><i
                                        class="ph ph-caret-double-left"></i> <span>First</span></a></li>
                            <li class="govbh-pagination__prev"><a href="#" aria-label="Previous Page" rel="prev"><i
                                        class="ph ph-caret-left"></i> <span>Prev</span></a></li>
                            <li><a href="#" aria-label="Page 1">1</a></li>
                            <li><a href="#" aria-label="Page 2">2</a></li>
                            <li class="govbh-pagination__current" aria-current="page" title="Page 3">3</li>
                            <li class="govbh-pagination__truncate" title="Pages">...</li>
                            <li><a href="#" aria-label="Page 4">4</a></li>
                            <li class="govbh-pagination__next"><a href="#" aria-label="Next Page"
                                    rel="next"><span>Next</span> <i class="ph ph-caret-right"></i></a></li>
                            <li class="govbh-pagination__next"><a href="#" aria-label="Last Page"
                                    rel="last"><span>Last</span> <i class="ph ph-caret-double-right"></i></a></li>
                        </ul>
                    </nav>
                    <div class="govbh-pagination__info">Showing 2 to 10 of 100 records</div>
                </div>
                <!-- Pagination Ends -->
                 
            </div>
        </div>
        <!-- Two Column Ends -->

        <div class="hr mb-3"></div><!-- Horizontal Line -->
        <!-- Share & Last updated content Starts -->
        <div class="row g-2">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="govbh-sharethis" role="region" aria-label="Share this page on Social Media" tabindex="0">
                    <div class="govbh-sharethis__title">Share this page:</div>
                    <ul>
                        <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn"
                                rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Facebook"
                                rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Whatsapp"
                                rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Twitter"
                                rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Telegram"
                                rel="noopener noreferrer"><span class="icon-telegram" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" aria-label="Print this page"><i class="ph ph-printer" aria-hidden="true" role="presentation"></i></a></li>
                        <li><a href="#" aria-label="Copy this page's link"><i class="ph ph-copy" aria-hidden="true" role="presentation"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-last-updated" role="region" tabindex="0" aria-labelledby="last-updated-date">
                    <p id="last-updated-date" class="govbh-text--medium m-0">Content last updated: <b>29 May 2025</b></p>
                </div>
            </div>
        </div>
        <!-- Share & Last updated content Ends -->
    </div>
</section>
<!-- Awards Section Ends -->

<!-- Related pages Section Starts -->
<section class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
    <div class="container">
        <!-- Carousel Starts -->
        <div class="govbh-carousel" data-carousel="custom" data-slidesperview-xxxs="1" data-slidesperview-xxs="1"
            data-slidesperview-xs="2" data-slidesperview-md="2" data-slidesperview-lg="3" data-slidesperview-xl="3">
            <div class="row align-items-center mb-3">
                <div class="col-md-6 col-sm-8 col-9">
                    <h2 id="related-page-title" class="m-0">Related Pages</h2>
                </div>
                <div class="col-md-6 col-sm-4 col-3">
                    <!-- Navigation -->
                    <div class="govbh-general__navigation justify-content-end">
                        <div class="govbh-carousel__nav-prev govbh-general__navigation-arrow"><i
                                class="ph ph-arrow-left" aria-hidden="true"></i></div>
                        <div class="govbh-carousel__nav-next govbh-general__navigation-arrow"><i
                                class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
            <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related Pages Slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" tabindex="0" role="group">
                        <div class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 class="govbh-card__title"><a href="#">Ministry Overview</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot">
                                <div class="govbh-card__foot-button">
                                    <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <div class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 class="govbh-card__title"><a href="#">History</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot">
                                <div class="govbh-card__foot-button">
                                    <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <div class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 class="govbh-card__title"><a href="#">Message from the President</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot">
                                <div class="govbh-card__foot-button">
                                    <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <div class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 class="govbh-card__title"><a href="#">Executive Profiles</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot">
                                <div class="govbh-card__foot-button">
                                    <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related pages Section Ends -->


<?php
include "includes/footer.php";
?>