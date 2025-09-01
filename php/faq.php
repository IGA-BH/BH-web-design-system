<?php
include "../globals.php";
$page = 'faq';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home">
                            <a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i><span>Home</span></a>
                        </li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">Frequently Asked Questions</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>Frequently Asked Questions</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                    <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
                        <div class="govbh-sharethis__title">Share this page:</div>
                        <ul>
                            <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn" rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
    <li><a href="#" target="_blank" aria-label="Share this page on Facebook" rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>                        <li><a href="#" target="_blank" aria-label="Share this page on Whatsapp" rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="_blank" aria-label="Share this page on Twitter" rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="_blank" aria-label="Share this page on Telegram" rel="noopener noreferrer"><span class="icon-telegram" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" aria-label="Print this page"><i class="ph ph-printer" aria-hidden="true" role="presentation"></i></a></li>
                            <li><a href="#" aria-label="Copy this page's link"><i class="ph ph-copy" aria-hidden="true" role="presentation"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Ends -->

    <!-- FAQ Section Starts -->
    <section class="govbh-section" aria-labelledby="faq-page-title">
        <h2 id="faq-page-title" class="visually-hidden">Frequently Asked Questions</h2>
        <div class="container">
            <!-- Two Column Starts -->
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-lg-0 mt-md-4 mt-4">
                    <!-- Side Widget Starts -->
                    <aside class="govbh-side-widget govbh-side-widget--hide-list mb-4">
                        <button type="button" aria-expanded="false" aria-controls="asidecategories" data-aria-expanded-text="Close Side Navigation Menu" aria-label="Open Side Navigation Menu" data-target-on="#asidecategories" class="govbh-side-widget__title govbh-fs-h5 govbh-toggler d-lg-none d-md-flex d-flex mb-0">
                            Categories <i class="ph ph-caret-down" aria-hidden="true"></i>
                        </button>
                        <div class="govbh-side-widget__title govbh-fs-h5 d-lg-block d-md-none d-none">Categories</div>
                        <div id="asidecategories" class="govbh-side-widget__content">
                            <ul class="govbh-side-widget__list">
                                 <li class="govbh-side-widget__item active">
                                    <a href="javascript:void(0);">Category 1</a>
                                </li>
                                <li class="govbh-side-widget__item">
                                    <a href="javascript:void(0);">Category 2</a>
                                </li>
                                <li class="govbh-side-widget__item">
                                    <a href="javascript:void(0);">Category 3</a>
                                </li>
                                <li class="govbh-side-widget__item">
                                    <a href="javascript:void(0);">Category 4</a>
                                </li>
                                <li class="govbh-side-widget__item">
                                    <a href="javascript:void(0);">Category 5</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Side Widget Ends -->
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <!-- Search Container Starts -->
                    <form action="#" autocomplete="on" class="govbh-search-card bg--grey mb-lg-4 mb-md-4 mb-4">
                        <h2 class="govbh-search-card__title govbh-fs-h5 text--brand">Search Category 1</h2>
                        <div class="govbh-search-card__head">
                            <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                                <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                <input type="search" class="form-control" id="floatingInput" aria-label="Enter your keyword"  placeholder="">
                                <label for="floatingInput">Enter your keyword</label>
                            </div>
                            <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </form>
                    <!-- Search Container Ends -->
                    
                    <!-- Accordion Starts -->
                    <div class="govbh-accordion" id="faqaccordion">
                        <button type="button" aria-label="Swtich to Collapse all/Expand all" role="switch" aria-checked="false" class="govbh-accordion__expand mb-0">Expand All</button>
                        <div class="govbh-accordion__item">
                            <h3 id="flush-heading-001" class="govbh-accordion__item-head m-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-001" aria-expanded="false">
                                Is this the national website of the Kingdom of Bahrain?
                                </button>
                            </h3>
                            <div id="flush-001" aria-labelledby="flush-heading-001" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                <div class="govbh-accordion__item-content"> bahrain.bh is the National Portal of the Kingdom of Bahrain. It provides general information about the Kingdom, and is a gateway to access public eServices, and a platform to communicate with government entities through the available eParticipation tools.</div>
                            </div>
                        </div>
                        <div class="govbh-accordion__item">
                            <h3 id="flush-heading-002" class="govbh-accordion__item-head m-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-002" aria-expanded="false">
                                Some services have a lock icon, what does this mean? 
                                </button>
                            </h3>
                            <div id="flush-002" aria-labelledby="flush-heading-002" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                <div class="govbh-accordion__item-content"> 
                                    The lock icon means that this eService requires login with an eKey account in order to benefit from the service.
                                </div>
                            </div>
                        </div>
                        <div class="govbh-accordion__item">
                            <h3 id="flush-heading-003" class="govbh-accordion__item-head m-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-003" aria-expanded="false">
                                What is eKey? 
                                </button>
                            </h3>
                            <div id="flush-003" aria-labelledby="flush-heading-003" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                <div class="govbh-accordion__item-content">The eKey is a login account with your personal ID number (CPR) and password used to access some eServices.</div>
                            </div>
                        </div>
                        <div class="govbh-accordion__item">
                            <h3 id="flush-heading-004" class="govbh-accordion__item-head m-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-004" aria-expanded="false">
                                Why do some eServices need an eKey login?
                                </button>
                            </h3>
                            <div id="flush-004" aria-labelledby="flush-heading-004" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                <div class="govbh-accordion__item-content">The eKey login provides the authenticated user a single-sign-on experience on the portal. This means once the user enters their eKey credentials through the portal login (top right of the screen) all eServices that require eKey login will be unlocked. In addition, logging in with eKey in some eServices will give the user the ability to preview all the eService details & access them in one single transaction. For more details on eKey's basic level, please visit the <a href="https://www.ekey.bh" target="_blank" class="govbh-is-external" aria-label="Visit our eKey Bahrain - Open in a new window">eKey</a> website.</div>
                            </div>
                        </div>
                        <div class="govbh-accordion__item">
                            <h3 id="flush-heading-005" class="govbh-accordion__item-head m-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-005" aria-expanded="false">
                                How do I register for an eKey account? 
                                </button>
                            </h3>
                            <div id="flush-005" aria-labelledby="flush-heading-005" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                <div class="govbh-accordion__item-content">There are two levels for the eKey account. The basic level is used for most of the eServices and can be obtained easily; you can do so by registering for a Standard eKey . The Advanced level of eKey ensures a higher level of security and allows access to all eServices; it requires the verification of the user's Identity Card and fingerprint. To create an advanced eKey account, visit one of our eKey centres.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Ends -->

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
                            <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn" rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
<li><a href="#" target="_blank" aria-label="Share this page on Facebook" rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>                        <li><a href="#" target="_blank" aria-label="Share this page on Whatsapp" rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Twitter" rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on Telegram" rel="noopener noreferrer"><span class="icon-telegram" aria-hidden="true" role="presentation"></span></a></li>
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
    <!-- FAQ Section Ends -->

    <!-- Related pages Section Starts -->
    <section class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
        <div class="container">
            <!-- Carousel Starts -->
            <div class="govbh-carousel"
                data-carousel="custom" 
                data-slidesperview-xxxs="1" 
                data-slidesperview-xxs="1" 
                data-slidesperview-xs="2" 
                data-slidesperview-md="2" 
                data-slidesperview-lg="3" 
                data-slidesperview-xl="3">
                <div class="row align-items-center mb-3">
                    <div class="col-md-6 col-sm-8 col-9"><h2 id="related-page-title" class="m-0">Related Pages</h2></div>
                    <div class="col-md-6 col-sm-4 col-3">
                        <!-- Navigation -->
                        <div class="govbh-general__navigation justify-content-end">
                            <div class="govbh-carousel__nav-prev govbh-general__navigation-arrow"><i class="ph ph-arrow-left" aria-hidden="true"></i></div>
                            <div class="govbh-carousel__nav-next govbh-general__navigation-arrow"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related Pages Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="related-title-1" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-1" class="govbh-card__title"><a href="#" aria-label="Click here to open - Message from the President">Message from the President</a></h3>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="related-title-2" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-2" class="govbh-card__title"><a href="#" aria-label="Click here to open - History">History</a></h3>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="related-title-3" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-3" class="govbh-card__title"><a href="#" aria-label="Click here to open - Executive Profiles">Executive Profiles</a></h3>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="related-title-4" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-4" class="govbh-card__title"><a href="#" aria-label="Click here to open - Ministry Overview">Ministry Overview</a></h3>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
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