<?php
include "../globals.php";
$page = 'index-03';
include "includes/header.php"; 
?>

    <!-- Default Hero Banner Slider Starts -->
    <section class="govbh-heroslider theme--dark bg--brand p-0" role="banner" aria-labelledby="hero-banner-title">
        <h1 id="hero-banner-title" class="visually-hidden bg--brand">Bahrain Government Guidlines Design System</h1>
        <div class="swiper govbh-heroslider__swiper" aria-roledescription="carousel" role="group" aria-label="Hero Slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg--brand" tabindex="0" data-swiper-autoplay="25000">
                    <div class="container allow-extend">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-2">
                                <div class="govbh-heroslider__content">
                                    <div class="govbh-heroslider__title" data-swiper-parallax-x="-10%">
                                        A Legacy of Survey and Land Registration Excellence
                                    </div>
                                    <div data-swiper-parallax-x="-15%">
                                        <p>The Survey and Land Registration Bureau of Bahrain has been at the forefront of cadastral and hydrographic survey services.</p>
                                    </div>
                                    <div data-swiper-parallax-x="-20%" class="d-flex align-items-center gap-3 flex-wrap">
                                        <a href="news-detail-page.html" class="govbh-btn govbh-btn--outline theme--dark">Explore <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12 extend-column order-lg-2 order-md-1 order-1">
                                <div class="govbh-heroslider__img" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                    <!-- Youtube Video -->
                                    <!-- <div id="ytbg" class="govbh-heroslider__video" data-vbg-autoplay="true" data-vbg-mobile="true"
                                            data-vbg-play-button="true" data-vbg-loop="true" data-vbg-fade-in="true"
                                            data-vbg-start-at="0" data-vbg-end-at="50" playsinline="true"
                                            data-vbg-poster="../images/banner-001.webp"
                                            data-vbg="https://www.youtube.com/watch?v=Qp0_6AcGmCg">
                                    </div> -->
                                    <!-- Local Video -->
                                    <video loop muted id="myVideo" playsinline class="govbh-heroslider__video active" preload="none">
                                        <source src="../images/bahrain_gov-video.mp4" type="video/mp4">
                                        <track kind="captions" src="../images/your-captions.vtt" srclang="en" label="English">
                                        <track kind="descriptions" srclang="en" src="../images/your-audio-descriptions.vtt" label="English Audio Descriptions">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!--  Play/Pause button -->
                                    <button class="govbh-heroslider__playpause pause" aria-label="Click here to play video.">
                                        <i class="ph ph-pause icon--pause"></i><i class="ph ph-play icon--play"></i>
                                    </button>
                                    <!-- Poster img -->
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-016.webp"><!--1920*800 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-016.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-016.webp"><!--991*413-->
                                        <img src="../images/banner-017.webp" height="480" width="1600" alt="A Legacy of Survey and Land Registration Excellence"><!--767*320-->
                                    </picture>
                                </div>
                                <!-- Navigation -->
                                <div class="govbh-heroslider__navigation d-lg-none d-md-flex d-flex">
                                    <div class="govbh-heroslider__swiper-prev govbh-heroslider__navigation-arrows"><i class="ph ph-caret-left"></i></div>
                                    <div class="govbh-heroslider__swiper-next govbh-heroslider__navigation-arrows"><i class="ph ph-caret-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- Transcript Starts -->
                        <div class="govbh-image-block__transcript visually-hidden">
                            <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-1" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-1" role="button">Show Transcript</a>
                            <div id="video-transcript-1" style="display:none">
                            <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                [Cut to an architect pointing at a blueprint of the plant]                                            
                                Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                [Scene transitions to a team of engineers inspecting the construction site]                                            
                                Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                            </div>
                        </div>
                        <!-- Transcript Ends -->
                    </div>
                </div>
                <div class="swiper-slide bg--brand" tabindex="0">
                    <div class="container allow-extend">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-2">
                                <div class="govbh-heroslider__content">
                                    <div class="govbh-heroslider__title" data-swiper-parallax-x="-10%">
                                        Ambitious Initiatives for Sustainable Development
                                    </div>
                                    <div data-swiper-parallax-x="-15%">
                                        <p>The SLRB is committed to fostering sustainable economic development through strategic planning and initiatives.</p>
                                    </div>
                                    <div data-swiper-parallax-x="-20%" class="d-flex align-items-center gap-3 flex-wrap">
                                        <a href="projects-detail.html" class="govbh-btn govbh-btn--outline theme--dark">Explore <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                        <a class="govbh-btn govbh-btn--withoutline theme--dark cbbox-01" data-cb-gallery="cbbox-01" data-cb-type="video" href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" role="button" aria-label="Click here to play video." title="Ambitious Initiatives for Sustainable Development (YouTube video, 82 seconds, Arabic only)">Play Video <i class="ph ph-play"></i></a>
                                        <!-- Transcript Starts -->
                                        <div class="govbh-image-block__transcript visually-hidden">
                                            <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-12" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-12" role="button">Show Transcript</a>
                                            <div id="video-transcript-12" style="display:none">
                                            <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                                Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                                [Cut to an architect pointing at a blueprint of the plant]                                            
                                                Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                                [Scene transitions to a team of engineers inspecting the construction site]                                            
                                                Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                                            </div>
                                        </div>
                                        <!-- Transcript Ends -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12 extend-column order-lg-2 order-md-1 order-1">
                                <div class="govbh-heroslider__img" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="1.05">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-016.webp"><!--1920*800 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-016.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-016.webp"><!--991*413-->
                                        <img src="../images/banner-017.webp" height="480" width="1600" alt="Ambitious Initiatives for Sustainable Development" loading="lazy"><!--767*320-->
                                    </picture>
                                </div>
                                <!-- Navigation -->
                                <div class="govbh-heroslider__navigation d-lg-none d-md-flex d-flex">
                                    <div class="govbh-heroslider__swiper-prev govbh-heroslider__navigation-arrows"><i class="ph ph-caret-left"></i></div>
                                    <div class="govbh-heroslider__swiper-next govbh-heroslider__navigation-arrows"><i class="ph ph-caret-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- Pagination -->
    <div class="govbh-heroslider__swiper-pagination govbh-theme__pagination govbh-align-center mt-2" role="group" tabindex="0" aria-label="Slider Controls"></div>
    <!-- Default Hero Banner Slider Ends -->

    <!-- About Section Starts -->
    <section class="govbh-section bg-light-linear bg--primary govbh-bg-image-fixed" style="background:url(../images/banner-015.webp) no-repeat fixed top center / cover;" aria-labelledby="section-title-01">
        <div class="container position-relative z-2">
             <div class="row g-lg-4 g-md-3 g-3">
                <div class="col-12">
                    <div class="col-lg-5 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-0 mb-md-3 mb-3">
                        <div class="govbh-image-block" >
                            <picture>
                                <source media="(min-width: 1200px)" srcset="../images/banner-006.webp"><!--647*364 Default image-->
                                <source media="(min-width: 992px)" srcset="../images/banner-006.webp"><!--468*263-->
                                <source media="(min-width: 768px)" srcset="../images/banner-006.webp"> <!--516*392-->
                                <img loading="lazy" src="../images/banner-006.webp" width="954" height="954" alt="About the Ministry"><!--767*320-->
                            </picture>
                        </div>
					</div>
                    <div class="govbh-content-block">
                        <h2 id="section-title-01">About the Ministry</h2>
                        <div class="govbh-abstract text--primary">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris.</p>
                        </div>
                        <div class="d-lg-block d-md-none d-none"> 
                            <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                        </div>
                        <a href="about.html" class="govbh-btn govbh-btn--outline mt-2">Read More <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- About Section Ends -->
     
    <!-- e-Services Section Starts -->
    <section class="govbh-section"  aria-labelledby="section-title-02">
        <div class="container position-relative">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 id="section-title-02" class="m-0">E-Services</h2>
                </div>
                <div class="col-12">
                    <div class="govbh-tabs">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab" role="tablist">
                                <button type="button" class="govbh-tabs__list active" id="id-tabs-001" data-bs-toggle="tab" data-bs-target="#tabs-001" role="tab" aria-controls="tabs-001" aria-selected="true">Tab Item 01</button>
                                <button type="button" class="govbh-tabs__list" id="id-tabs-002" data-bs-toggle="tab" data-bs-target="#tabs-002" role="tab" aria-controls="tabs-002" aria-selected="false">Tab Item 02</button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-003" data-bs-toggle="tab" data-bs-target="#tabs-003" role="tab" aria-controls="tabs-003" aria-selected="false">Tab Item 03</button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-004" data-bs-toggle="tab" data-bs-target="#tabs-004" role="tab" aria-controls="tabs-004" aria-selected="false">Tab Item 04</button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-005" data-bs-toggle="tab" data-bs-target="#tabs-005" role="tab" aria-controls="tabs-005" aria-selected="false">Tab Item 05</button>
                            </div>
                        </div>            
                        <div class="govbh-tabs__content " id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tabs-001" role="tabpanel" aria-labelledby="id-tabs-001" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1.1" 
                                    data-slidesperview-xxs="1.4" 
                                    data-slidesperview-xs="1.4" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="3" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="E-Services Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-1" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Application for Property Registration" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-1" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Application for Property Registration">Application for Property Registration</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium" aria-hidden="true">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-2" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Online Appointments Services" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-2" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Online Appointments Services">Online Appointments Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-3" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-3" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Cadastral Survey Services">Cadastral Survey Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-4" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-4" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Law Amendments">Law Amendments</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-002" role="tabpanel" aria-labelledby="id-tabs-002" tabindex="0">
                                <div data-carousel="custom" 
                                    data-slidesperview-xxxs="1.1" 
                                    data-slidesperview-xxs="1.4" 
                                    data-slidesperview-xs="1.4" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="3" 
                                    data-slidesperview-xl="3" 
                                    class="govbh-carousel">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="E-Services Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-5" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Online Appointments Services" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-5" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Online Appointments Services">Online Appointments Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-6" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-6" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Cadastral Survey Services">Cadastral Survey Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-7" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-7" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Law Amendments">Law Amendments</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-003" role="tabpanel" aria-labelledby="id-tabs-003" tabindex="0">
                                 <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1.1" 
                                    data-slidesperview-xxs="1.4" 
                                    data-slidesperview-xs="1.4" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="3" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="E-Services Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-8" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Application for Property Registration" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-8" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Application for Property Registration">Application for Property Registration</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-9" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Online Appointments Services" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-9" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Online Appointments Services">Online Appointments Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-10" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-10" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Cadastral Survey Services">Cadastral Survey Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-11" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-11" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Law Amendments">Law Amendments</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-004" role="tabpanel" aria-labelledby="id-tabs-004" tabindex="0">
                                 <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1.1" 
                                    data-slidesperview-xxs="1.4" 
                                    data-slidesperview-xs="1.4" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="3" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="E-Services Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-12" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Application for Property Registration" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-12" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Application for Property Registration">Application for Property Registration</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-13" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Online Appointments Services" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-13" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Online Appointments Services">Online Appointments Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-14" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-14" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Cadastral Survey Services">Cadastral Survey Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-005" role="tabpanel" aria-labelledby="id-tabs-005" tabindex="0">
                                 <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1.1" 
                                    data-slidesperview-xxs="1.4" 
                                    data-slidesperview-xs="1.4" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="3" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="E-Services Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-15" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Application for Property Registration" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-15" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Application for Property Registration">Application for Property Registration</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-16" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Online Appointments Services" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-16" class="govbh-card__title"><a href="services-detail.html" aria-label="Detail: Online Appointments Services">Online Appointments Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-17" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-17" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Cadastral Survey Services">Cadastral Survey Services</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="services-title-18" class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments" width="48" height="48">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <h3 id="services-title-18" class="govbh-card__title"><a href="services-detail.html" aria-label="Details: Law Amendments">Law Amendments</a></h3>
                                                            <div class="govbh-card__paragraph">This Service allows the users to get appointment in SLRB for Cadastral Services.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" target="_blank" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1" aria-label="Launch - open in a new window">Launch <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                                            <a href="services-detail.html" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Details <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a href="services.html" class="govbh-btn govbh-btn--outline">View All E-Services <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12 govbh-btn-absolute">
                    <a href="https://services.bahrain.bh/wps/portal/ar/BSP/HomeeServicesPortal/" target="_blank" class="govbh-btn govbh-btn--withoutline" rel="noopener noreferrer" aria-label="Bahrain.BH - Opens in a new window">Bahrain.BH <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>          
        </div>
    </section>    
    <!-- e-Services Section Ends -->
     
    <!-- Statistics Section Starts -->
    <section class="govbh-section theme--dark bg--brand bg-brand-overlay govbh-bg-image-fixed" style="background:#012E5D url(../images/statistics-banner.webp) no-repeat fixed top center / cover;" aria-labelledby="section-title-03">
        <div class="container position-relative z-1">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 id="section-title-03" class="m-0">Statistics</h2>
                </div>
                <div class="col-12">
                    <div class="govbh-tabs govbh-tabs--vertical theme--dark">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab3" role="tablist">
                                <button type="button" class="govbh-tabs__list active" id="id-tabs-3311" data-bs-toggle="tab" data-bs-target="#tabs-3311" role="tab" aria-controls="tabs-3311" aria-selected="true">
                                    Tab Item 01
                                </button>
                                <button type="button" class="govbh-tabs__list" id="id-tabs-3321" data-bs-toggle="tab" data-bs-target="#tabs-3321" role="tab" aria-controls="tabs-3321" aria-selected="false">
                                    Tab Item 02
                                </button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-3331" data-bs-toggle="tab" data-bs-target="#tabs-3331" role="tab" aria-controls="tabs-3331" aria-selected="false">
                                    Tab Item 03
                                </button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-3341" data-bs-toggle="tab" data-bs-target="#tabs-3341" role="tab" aria-controls="tabs-3341" aria-selected="false">
                                    Tab Item 04
                                </button>
                            </div>
                        </div>            
                        <div class="govbh-tabs__content pb-0" id="nav-tabContent3">
                            <div class="tab-pane fade show active" id="tabs-3311" role="tabpanel" aria-labelledby="id-tabs-3311" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="2" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Statistics Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div>
                                                            <div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 1" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="45678" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">45678 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="45678 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 2" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="89" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                                            <span class="visually-hidden">89%</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="89% - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 3" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3321" role="tabpanel" aria-labelledby="id-tabs-3321" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="2" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Statistics Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 4" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="89" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                                            <span class="visually-hidden">89%</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="89% - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 5" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 6" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="45678" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">45678 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="45678 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 7" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3331" role="tabpanel" aria-labelledby="id-tabs-3331" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="2" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Statistics Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 8" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="45678" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">45678 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="45678 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 9" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 10" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="89" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                                            <span class="visually-hidden">89%</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="89% - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3341" role="tabpanel" aria-labelledby="id-tabs-3341" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="2" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Statistics Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 11" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="45678" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">45678 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="45678 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 12" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                            <span class="visually-hidden">123456 BHD</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="123456 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="Total Transactions 13" width="64" height="64"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="89" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                                            <span class="visually-hidden">89%</span>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">Total Transactions <a href="#" role="button" data-tooltip="tooltip" title="Total Transactions" aria-label="89% - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center pt-2 mt-4 gap-3">
                                <a href="statistics.html" class="govbh-btn govbh-btn--outline theme--dark" aria-label="Click here to view more statistics">View More Statistics <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 govbh-btn-absolute">
                    <a href="https://www.data.gov.bh/pages/homepage/" target="_blank" class="govbh-btn govbh-btn--withoutline theme--dark" rel="noopener noreferrer" aria-label="Statistics of Bahrain open data portal - Opens in a new window">Bahrain open data portal <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- Tabs Vertical Starts -->
        </div>
    </section>
    <!-- Statistics Section Ends -->

    <!-- We care about Section Starts -->
    <section class="govbh-section bg--darkmode-primary bg--grey" aria-labelledby="section-title-wecare">
        <div class="container">
            <h2 id="section-title-wecare">We Care About You</h2>
            <div class="govbh-carousel"
                data-carousel="custom" 
                data-slidesperview-xxxs="1" 
                data-slidesperview-xxs="1" 
                data-slidesperview-xs="1" 
                data-slidesperview-md="2" 
                data-slidesperview-lg="2" 
                data-slidesperview-xl="3">
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="We Care About You Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card govbh-card--no-lineclamb" role="region" aria-labelledby="wecare-card-1">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                        <img loading="lazy" src="../images/icpng.webp" alt="Law Amendments" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="wecare-card-1" class="govbh-card__title"><a href="we-care-about-you-detail.html" aria-label="Click here open: Education and Training">Education and Training</a></h3>
                                        <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultricies diam.</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read more <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card govbh-card--no-lineclamb" role="region" aria-labelledby="wecare-card-2">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                        <img loading="lazy" src="../images/icpng.webp" alt="Law Amendments 1" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="wecare-card-2" class="govbh-card__title"><a href="we-care-about-you-detail.html" aria-label="Click here open: Employment & Retirement">Employment & Retirement</a></h3>
                                        <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read more <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card govbh-card--no-lineclamb" role="region" aria-labelledby="wecare-card-3">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                        <img loading="lazy" src="../images/icpng.webp" alt="Law Amendments 2" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="wecare-card-3" class="govbh-card__title"><a href="we-care-about-you-detail.html" aria-label="Click here open: Family and Relationships">Family and Relationships</a></h3>
                                        <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultricies diam.</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read more <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card govbh-card--no-lineclamb" role="region" aria-labelledby="wecare-card-4">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                        <img loading="lazy" src="../images/icpng.webp" alt="Law Amendments 2" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="wecare-card-4" class="govbh-card__title"><a href="we-care-about-you-detail.html" aria-label="Click here open: Healthcare and Safety">Healthcare and Safety</a></h3>
                                        <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultricies diam.</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read more <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center pt-3">
                <a href="we-care-about-you.html" class="govbh-btn govbh-btn--outline" aria-label="View all we care about you topics">View All Topics <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- We care about Section Starts -->

    <!-- Laws & Regulations Section Starts -->
    <section class="govbh-section" aria-labelledby="section-title-04">
        <div class="container position-relative">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 id="section-title-04" class="m-0">Laws & Regulations</h2>
                </div>
                <div class="col-12">
                    <div class="govbh-carousel"
                    data-carousel="custom" 
                    data-slidesperview-xxxs="1" 
                    data-slidesperview-xxs="1" 
                    data-slidesperview-xs="1" 
                    data-slidesperview-md="2" 
                    data-slidesperview-lg="2" 
                    data-slidesperview-xl="2">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Laws & Regulations Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="legislation-title-1" class="govbh-card govbh-card--card-file">
                                        <div class="govbh-card__head">
                                            <h3 id="legislation-title-1" class="govbh-card__title"><a href="legislations-detail.html" aria-label="Legislation: Resolution on Regulating the Work of Energy Efficiency Specialised Companies">Resolution on Regulating the Work of Energy Efficiency Specialised Companies</a></h3>
                                            <div class="govbh-card__date govbh-card__date--year">
                                                <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 12 May, 2022</div>
                                                <div><i class="ph ph-globe" aria-hidden="true"></i> Arabic only</div>
                                            </div>
                                            <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar sem at urna dapibus.</div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read Full Article <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                            <div class="govbh-card-bg-icon"><img src="../images/utilities/laws-icon.svg" alt="Capturing high-resolution images of the land surface using drones or satellites."></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="legislation-title-2" class="govbh-card govbh-card--card-file">
                                        <div class="govbh-card__head">
                                            <h3 id="legislation-title-2" class="govbh-card__title"><a href="legislations-detail.html" aria-label="Legislation: Resolution on Adopting Thermal Insulation Regulations for Buildings and Facilities">Resolution on Adopting Thermal Insulation Regulations for Buildings and Facilities</a></h3>
                                            <div class="govbh-card__date govbh-card__date--year">
                                                <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 12 May, 2022</div>
                                            </div>
                                            <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar sem at urna dapibus.</div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read Full Article <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                            <div class="govbh-card-bg-icon"><img src="../images/utilities/laws-icon.svg" alt="Capturing high-resolution images of the land surface using drones or satellites."></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="legislation-title-3" class="govbh-card govbh-card--card-file">
                                        <div class="govbh-card__head">
                                            <h3 id="legislation-title-3" class="govbh-card__title"><a href="legislations-detail.html" aria-label="Legislation: Resolution on Electricity and Water Consumption Tariffs">Resolution on Electricity and Water Consumption Tariffs</a></h3>
                                            <div class="govbh-card__date govbh-card__date--year">
                                                <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 12 May, 2022</div>
                                            </div>
                                            <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar sem at urna dapibus.</div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read Full Article <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                            <div class="govbh-card-bg-icon"><img src="../images/utilities/laws-icon.svg" alt="Capturing high-resolution images of the land surface using drones or satellites."></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="legislation-title-4" class="govbh-card govbh-card--card-file">
                                        <div class="govbh-card__head">
                                            <h3 id="legislation-title-4" class="govbh-card__title"><a href="legislations-detail.html" aria-label="Legislation: Resolution on Adopting Regulations for Non-Directional Household Lighting">Resolution on Adopting Regulations for Non-Directional Household Lighting</a></h3>
                                            <div class="govbh-card__date govbh-card__date--year">
                                                <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 12 May, 2022</div>
                                                <div><i class="ph ph-globe" aria-hidden="true"></i> Arabic only</div>
                                            </div>
                                            <div class="govbh-card__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar sem at urna dapibus.</div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read Full Article <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                            <div class="govbh-card-bg-icon"><img src="../images/utilities/laws-icon.svg" alt="Capturing high-resolution images of the land surface using drones or satellites."></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center pt-3">
                    <a href="legislations.html" class="govbh-btn govbh-btn--outline">View All Laws & Regulations <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="govbh-btn-absolute">
                    <a href="https://www.lloc.gov.bh/en" target="_blank" class="govbh-btn govbh-btn--withoutline" rel="noopener noreferrer" aria-label="Bahrain laws and Legislations App - Opens in a new window">Bahrain Legislations <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Laws & Regulations Section Ends -->

    <!-- Sustainable Development Section Starts -->
    <section aria-label="Background Image: Sustainable Development" class="govbh-section govbh-parallax bg-dark-linear govbh-bg-image-fixed" style="background:#012E5D url(../images/banner-015.webp) no-repeat fixed top center / cover;">
        <div class="container">
            <div class="govbh-content-block theme--dark text-center">
                <h2>Sustainable Development</h2>
                <p>The Kingdom of Bahrain has made strides in the implementation of the 2030 Agenda for Sustainable Development and the Sustainable Development Goals (SDGs).</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="sustainable-development-goals.html" class="govbh-btn govbh-btn--outline theme--dark">More on SDGs <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    <a href="https://sdgs.gov.bh/" class="govbh-btn govbh-btn--withoutline theme--dark" target="_blank" rel="noopener noreferrer" aria-label="Bahrain Sustainable Development 2030 - Opens in a new window">Bahrain SDGs 2030 <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sustainable Development Section Ends -->

    <!-- Success Stories Section Starts -->
    <section class="govbh-section" aria-labelledby="section-title-05">
        <div class="container">
            <h2 id="section-title-05" class="d-lg-none d-md-block d-block mb-2">Success Stories</h2>
            <div class="govbh-carousel"
                data-carousel="custom" 
                data-slidesperview-xxxs="1" 
                data-slidesperview-xxs="1" 
                data-slidesperview-xs="1" 
                data-slidesperview-md="1" 
                data-slidesperview-lg="1" 
                data-slidesperview-xl="1">
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Success Stories Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <div class="row gy-md-3 gy-sm-2 gy-2">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-2">
                                    <div class="govbh-content-block pe-lg-4 pe-md-0 pe-0">
                                        <div class="d-lg-block d-md-none d-none govbh-fs-h2">Success Stories</div>
                                        <!-- Blockquote Starts -->
                                        <blockquote class="govbh-blockquote" role="region" aria-label="Quote from the President's message">
                                            <div class="govbh-blockquote__icon"><i class="ph-fill ph-quotes" aria-hidden="true"></i></div>
                                            <div class="govbh-blockquote__content">Quotes are used to display a quotation: either from a person or another outside source or to highlight a passage of the current document (a pull quote).</div>
                                            <div class="govbh-blockquote__title">Bader Sultan Jumma</div>
                                            <div class="govbh-blockquote__designation">Chief Executive Officer</div>
                                            <div class="d-flex flex-wrap gap-3 pt-4">
                                                <a  class="govbh-btn govbh-btn--outline govbh-btn--left-icon cbbox-sstory" data-cb-gallery="cbbox-sstory" data-cb-type="video" href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" title="Bader Sultan Jumma Success, YouTube video, 82 seconds, Arabic only" role="button" aria-label="Watch Video of Bader Sultan Jumma Success, YouTube video, 58 seconds, Arabic only"><i class="ph ph-video" aria-hidden="true"></i> Watch Video</a>
                                                <a href="success-stories-detail.html" class="govbh-btn govbh-btn--withoutline" aria-label="Read story of Bader Sultan Jumma Success">Read story <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </blockquote>
                                        <!-- Blockquote Ends -->
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-1">
                                    <div class="govbh-image-block bg--tertiary mb-3 h-auto">
                                        <img src="../images/bader-sultan-jumma1.webp" alt="Bader Sultan Jumma" width="954" height="717" loading="lazy">
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <div class="row gy-md-3 gy-sm-2 gy-2">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-2">
                                    <div class="govbh-content-block pe-lg-4 pe-md-0 pe-0">
                                        <div class="d-lg-block d-md-none d-none govbh-fs-h2">Success Stories</div>
                                        <!-- Blockquote Starts -->
                                        <blockquote class="govbh-blockquote" role="region" aria-label="Quote from the Chief Executive Officer">
                                            <div class="govbh-blockquote__icon"><i class="ph-fill ph-quotes" aria-hidden="true"></i></div>
                                            <div class="govbh-blockquote__content">Quotes are used to display a quotation: either from a person or another outside source or to highlight a passage of the current document (a pull quote).</div>
                                            <div class="govbh-blockquote__title">Bader Sultan Jumma</div>
                                            <div class="govbh-blockquote__designation">Chief Executive Officer</div>
                                            <div class="d-flex flex-wrap gap-3 pt-4">
                                                <a  class="govbh-btn govbh-btn--outline govbh-btn--left-icon cbbox-sstory" data-cb-gallery="cbbox-sstory" data-cb-type="video" href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" title="Bader Sultan Jumma Success, YouTube video, 82 seconds, Arabic only" role="button" aria-label="Watch Video of Bader Sultan Jumma Success, YouTube video, 58 seconds, Arabic only"><i class="ph ph-video" aria-hidden="true"></i> Watch Video</a>
                                                <a href="success-stories-detail.html" class="govbh-btn govbh-btn--withoutline" aria-label="Read story of Bader Sultan Jumma Success">Read story <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </blockquote>
                                        <!-- Blockquote Ends -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-1">
                                    <div class="govbh-image-block bg--tertiary mb-3 h-auto">
                                        <img src="../images/bader-sultan-jumma1.webp" alt="Bader Sultan Jumma 1" width="954" height="717" loading="lazy">
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                    <!-- Read more button -->
                    <div class="d-flex justify-content-center pt-4 mt-md-2 mt-sm-0 mt-0">
                        <a href="success-stories.html" class="govbh-btn govbh-btn--outline">Read More Success Stories <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    </div>  
                </div>
            </div>
        </div>
    </section>  
    <!-- Success Stories Section Ends -->
     
    <!-- Events Section Starts -->
    <section aria-labelledby="section-title-06" class="govbh-section theme--dark bg--brand bg-brand-overlay govbh-bg-image-fixed" style="background:url(../images/banner-010.webp) no-repeat fixed top center / cover;">
        <div class="container position-relative z-2">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2 id="section-title-06" class="m-0">Calendar of Events</h2>
                </div>
                <div class="col-12">
                    <div class="govbh-carousel"
                        data-carousel="custom" 
                        data-slidesperview-xxxs="1" 
                        data-slidesperview-xxs="1" 
                        data-slidesperview-xs="1" 
                        data-slidesperview-md="2" 
                        data-slidesperview-lg="3" 
                        data-slidesperview-xl="3">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Calendar of Events Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="events-card-1" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head pb-sm-0 pb-2">
                                            <div class="govbh-card__head-image">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/banner-007.webp">
                                                    <source media="(min-width: 992px)" srcset="../images/banner-007.webp">
                                                    <source media="(min-width: 768px)" srcset="../images/banner-007.webp">
                                                    <img src="../images/banner-007.webp" width="623" height="351" alt="eCommerce Conference for SMEs" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="govbh-card__head-content pb-2">
                                                <h3 id="events-card-1" class="govbh-card__title"><a href="events-detail-page.html" aria-label="Readmore: eCommerce Conference for SMEs">eCommerce Conference for SMEs</a></h3>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 20 - 23 May, 2025</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 10:00 AM - 2:00 PM</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> Exhibition World Bahrain</div>
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
                                    <article role="region" aria-labelledby="events-card-2" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head pb-sm-0 pb-2">
                                            <div class="govbh-card__head-image">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/banner-006.webp">
                                                    <source media="(min-width: 992px)" srcset="../images/banner-006.webp">
                                                    <source media="(min-width: 768px)" srcset="../images/banner-006.webp">
                                                    <img src="../images/banner-006.webp" width="623" height="351" alt="Bab Al-Bahrain Forum 2025" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="govbh-card__head-content pb-2">
                                                <h3 id="events-card-2" class="govbh-card__title"><a href="events-detail-page.html" aria-label="Readmore: Bab Al-Bahrain Forum 2025">Bab Al-Bahrain Forum 2025</a></h3>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 23 May, 2025</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 10:00 AM - 12:00 PM</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> Four Seasons Hotel, Bahrain Bay</div>
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
                                    <article role="region" aria-labelledby="events-card-3" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head pb-sm-0 pb-2">
                                            <div class="govbh-card__head-image">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/card-img.png">
                                                    <source media="(min-width: 992px)" srcset="../images/card-img.png">
                                                    <source media="(min-width: 768px)" srcset="../images/card-img.png">
                                                    <img src="../images/card-img.png" width="623" height="351" alt="Workshop Organizational Culture" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="govbh-card__head-content pb-2">
                                                <h3 id="events-card-3" class="govbh-card__title"><a href="events-detail-page.html" aria-label="Readmore: Workshop Organizational Culture">Workshop "Organizational Culture"</a></h3>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 25 May, 2024</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 8:00 AM - 2:00 PM</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> Al Majlis Hall, Bahrain Chamber</div>
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
                                    <article role="region" aria-labelledby="events-card-4" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head pb-sm-0 pb-2">
                                            <div class="govbh-card__head-image">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/banner-008.webp">
                                                    <source media="(min-width: 992px)" srcset="../images/banner-008.webp">
                                                    <source media="(min-width: 768px)" srcset="../images/banner-008.webp">
                                                    <img src="../images/banner-008.webp" width="623" height="351" alt="Lorem ipsum dolor sit amet" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <h3 id="events-card-4" class="govbh-card__title"><a href="events-detail-page.html" aria-label="Readmore: Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a></h3>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 25 May, 2024</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 8:00 AM - 2:00 PM</div>
                                                <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> Al Majlis Hall, Bahrain Chamber</div>
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
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-4 mt-2">
                        <a href="events.html" class="govbh-btn govbh-btn--outline theme--dark">View All Events <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    </div> 
                </div>                
                <div class="col-12 govbh-btn-absolute">
                    <a href="https://www.bahrain.com/en/bahrain-calendar" target="_blank" class="govbh-btn govbh-btn--withoutline theme--dark" rel="noopener noreferrer" aria-label="Bahrain Calendar - Opens in a new window">Bahrain Calendar <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Events Section Ends -->

    <!-- Knowledge Center Section Starts -->
    <section class="govbh-section" aria-labelledby="section-title-07">
        <div class="container">
            <h2 id="section-title-07">Knowledge Center</h2>
            <div class="govbh-tabs">
                <div class="govbh-tabs__head">
                    <div class="govbh-tabs__head-tabs" id="nav-tab5" role="tablist">
                        <button type="button" class="govbh-tabs__list active" id="id-tabs-faq" data-bs-toggle="tab" data-bs-target="#tabs-faq" role="tab" aria-controls="tabs-faq" aria-selected="true">Frequently Asked Questions</button>
                        <button type="button" class="govbh-tabs__list" id="id-tabs-publications" data-bs-toggle="tab" data-bs-target="#tabs-publications" role="tab" aria-controls="tabs-publications" aria-selected="false">Publications</button>
                        <button type="button" class="govbh-tabs__list"  id="id-tabs-userguide" data-bs-toggle="tab" data-bs-target="#tabs-userguide" role="tab" aria-controls="tabs-userguide" aria-selected="false">User Guide</button>
                    </div>
                </div>            
                <div class="govbh-tabs__content pb-0 mt-2" id="nav-tabContent5">
                    <div class="tab-pane fade show active" id="tabs-faq" role="tabpanel" aria-labelledby="id-tabs-faq" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="govbh-image-block mb-3 h-auto">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-012.webp">
                                        <source media="(min-width: 992px)" srcset="../images/banner-012.webp">
                                        <source media="(min-width: 768px)" srcset="../images/banner-012.webp">
                                        <img src="../images/banner-012.webp" width="636" height="477" alt="Frequently Asked Questions" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <!-- Accordion Starts -->
                                <div class="govbh-accordion" id="faqaccordion">
                                    <div class="govbh-accordion__item">
                                        <h3 id="flush-heading-001" class="govbh-accordion__item-head m-0">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-001" aria-expanded="false" >
                                            Is this the national website of the Kingdom of Bahrain?
                                            </button>
                                        </h3>
                                        <div id="flush-001" aria-labelledby="flush-heading-001" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                            <div class="govbh-accordion__item-content"> <a href="https://www.bahrain.bh" target="_blank" class="govbh-is-external">bahrain.bh</a> is the National Portal of the Kingdom of Bahrain. It provides general information about the Kingdom, and is a gateway to access public eServices, and a platform to communicate with government entities through the available eParticipation tools.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-accordion__item">
                                        <h3 id="flush-heading-002" class="govbh-accordion__item-head m-0">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-002" aria-expanded="false" >
                                            Some services have a lock icon, what does this mean? 
                                            </button>
                                        </h3>
                                        <div id="flush-002" aria-labelledby="flush-heading-002" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                            <div class="govbh-accordion__item-content"> The lock icon means that this eService requires login with an eKey account in order to benefit from the service.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-accordion__item">
                                        <h3 id="flush-heading-003" class="govbh-accordion__item-head m-0">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-003" aria-expanded="false" >
                                            What is eKey? 
                                            </button>
                                        </h3>
                                        <div id="flush-003" aria-labelledby="flush-heading-003" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                            <div class="govbh-accordion__item-content">The eKey is a login account with your personal ID number (CPR) and password used to access some eServices.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-accordion__item">
                                        <h3 id="flush-heading-004" class="govbh-accordion__item-head m-0">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-004" aria-expanded="false" >
                                            Why do some eServices need an eKey login?
                                            </button>
                                        </h3>
                                        <div id="flush-004" aria-labelledby="flush-heading-004" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                            <div class="govbh-accordion__item-content">The eKey login provides the authenticated user a single-sign-on experience on the portal. This means once the user enters their eKey credentials through the portal login (top right of the screen) all eServices that require eKey login will be unlocked. In addition, logging in with eKey in some eServices will give the user the ability to preview all the eService details & access them in one single transaction. For more details on eKey's basic level, please visit the <a href="https://www.ekey.bh" target="_blank" class="govbh-is-external">ekey</a> website.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-accordion__item">
                                        <h3 id="flush-heading-005" class="govbh-accordion__item-head m-0">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-005" aria-expanded="false" >
                                            How do I register for an eKey account? 
                                            </button>
                                        </h3>
                                        <div id="flush-005" aria-labelledby="flush-heading-005" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                            <div class="govbh-accordion__item-content">There are two levels for the eKey account. The basic level is used for most of the eServices and can be obtained easily; you can do so by registering for a Standard eKey . The Advanced level of eKey ensures a higher level of security and allows access to all eServices; it requires the verification of the user's Identity Card and fingerprint. To create an advanced eKey account, visit one of our eKey centres.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Ends -->
                                <div class="d-flex pt-3">
                                    <a href="faq.html" class="govbh-btn govbh-btn--outline">View All FAQ <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="tab-pane fade" id="tabs-publications" role="tabpanel" aria-labelledby="id-tabs-publications" tabindex="0">
                       <div class="govbh-carousel"
                            data-carousel="custom" 
                            data-slidesperview-xxxs="1" 
                            data-slidesperview-xxs="1" 
                            data-slidesperview-xs="1" 
                            data-slidesperview-md="1" 
                            data-slidesperview-lg="2" 
                            data-slidesperview-xl="2">
                            <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Publications Slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="laws-card1-1" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                                            <div class="govbh-card__head">
                                                <h3 id="laws-card1-1" class="govbh-card__title">
                                                    <a href="../images/samplepdf.pdf" class="cbbox-home-publication" data-cb-gallery="cbbox-home-publication" data-cb-type="pdf" title="Data Acquisition and Processing" aria-label="Preview: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Data Acquisition and Processing</a>
                                                </h3>
                                                <div class="govbh-card__date govbh-card__date--year">
                                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13MB, 8 pages</div>
                                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                    <div><i class="ph ph-globe" aria-hidden="true"></i> Arabic only</div>
                                                </div>
                                                <div class="govbh-card__paragraph">Capturing high-resolution images of the land surface using drones or satellites.</div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">Preview <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="Download: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Download <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="laws-card1-2" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                            <div class="govbh-card__image"><img src="../images/banner-004.webp" alt="Data Acquisition and Processing 5" width="304" height="394" loading="lazy"></div>
                                            <div class="govbh-card__head">
                                                <h3 id="laws-card1-2" class="govbh-card__title"><a href="../images/samplepdf.pdf"  class="cbbox-home-publication" data-cb-gallery="cbbox-home-publication" data-cb-type="pdf" title="Data Acquisition and Processing" aria-label="Preview: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Data Acquisition and Processing</a></h3>
                                                <div class="govbh-card__date govbh-card__date--year">
                                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13MB, 8 pages</div>
                                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                </div>
                                                <div class="govbh-card__paragraph">Capturing high-resolution images of the land surface using drones or satellites.</div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">Preview <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="Download: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Download <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="laws-card1-3" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                            <div class="govbh-card__image"><img src="../images/banner-014.webp" alt="Data Acquisition and Processing 6" width="304" height="394" loading="lazy"></div>
                                            <div class="govbh-card__head">
                                                <h3 id="laws-card1-3" class="govbh-card__title">
                                                    <a href="../images/samplepdf.pdf"  class="cbbox-home-publication" data-cb-gallery="cbbox-home-publication" data-cb-type="pdf" title="Data Acquisition and Processing" aria-label="Preview: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Data Acquisition and Processing</a>
                                                </h3>
                                                <div class="govbh-card__date govbh-card__date--year">
                                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13MB, 8 pages</div>
                                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                </div>
                                                <div class="govbh-card__paragraph">Capturing high-resolution images of the land surface using drones or satellites.</div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">Preview <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="Download: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Download <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="laws-card1-4" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 7" width="304" height="394" loading="lazy"></div>
                                            <div class="govbh-card__head">
                                                <h3 id="laws-card1-4" class="govbh-card__title"><a href="../images/samplepdf.pdf"  class="cbbox-home-publication" data-cb-gallery="cbbox-home-publication" data-cb-type="pdf" title="Data Acquisition and Processing" aria-label="Preview: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Data Acquisition and Processing</a></h3>
                                                <div class="govbh-card__date govbh-card__date--year">
                                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13MB, 8 pages</div>
                                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                    <div><i class="ph ph-globe" aria-hidden="true"></i> Arabic only</div>
                                                </div>
                                                <div class="govbh-card__paragraph">Capturing high-resolution images of the land surface using drones or satellites.</div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">Preview <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="Download: Data Acquisition and Processing, PDF, 13 MB, 8 pages">Download <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- Pagination -->
                                <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-4">
                            <a href="publications.html" class="govbh-btn govbh-btn--outline">View All Publications <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-userguide" role="tabpanel" aria-labelledby="id-tabs-userguide" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="govbh-image-block mb-3 h-auto">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-013.webp">
                                        <source media="(min-width: 992px)" srcset="../images/banner-013.webp">
                                        <source media="(min-width: 768px)" srcset="../images/banner-013.webp">
                                        <img src="../images/banner-013.webp" width="636" height="359" alt="User Guide" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="govbh-content-block">
                                    <div class="govbh-abstract text--dark">
                                        <p>Your comprehensive guide to everything you need to know about navigating and utilising the services of the National Portal.</p>
                                    </div>
                                    <ul class="govbh-content-block__list">
                                        <li><a href="#">Birth Certificate Application Management</a></li>
                                        <li><a href="#">Book a Driving Test Appointment</a></li>
                                        <li><a href="#">Electricity and Water Services</a></li>
                                        <li><a href="#">Good conduct Certificate General Information</a></li>
                                        <li><a href="#" target="_blank" class="govbh-is-external" rel="nofolow" aria-label="Amet, consectetur adipiscing elit in dignissim tincidunt - Opens in a new window">Good conduct Certificate Issuance Request</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex pt-3">
                                    <a href="#" class="govbh-btn govbh-btn--outline">View All Guides <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- Knowledge Center Section Ends -->
    
    <!-- Interactive Map Section Starts -->
    <section class="govbh-section theme--dark bg--brand" aria-labelledby="section-title-08">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-12"><h2 id="section-title-08" class="m-0">Our Locations</h2></div>
                <div class="col-12">
                    <div class="govbh-tabs theme--dark">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab4" role="tablist">
                                <button type="button" class="govbh-tabs__list active" id="id-tabs-mapall" data-bs-toggle="tab" data-bs-target="#tabs-mapall" role="tab" aria-controls="tabs-mapall" aria-selected="true">All</button>
                                <button type="button" class="govbh-tabs__list" id="id-tabs-customerservice" data-bs-toggle="tab" data-bs-target="#tabs-customerservice" role="tab" aria-controls="tabs-customerservice" aria-selected="false">Customer Service Centres</button>
                                <button type="button" class="govbh-tabs__list"  id="id-tabs-kiosks" data-bs-toggle="tab" data-bs-target="#tabs-kiosks" role="tab" aria-controls="tabs-kiosks" aria-selected="false">Kiosks</button>
                            </div>
                        </div>    
                        <div class="govbh-tabs__content " id="nav-tabContent4">
                            <div class="tab-pane fade show active" id="tabs-mapall" role="tabpanel" aria-labelledby="id-tabs-mapall" tabindex="0">
                                <!-- Map Container Starts -->
                                <div class="govbh-map">
                                    <div class="govbh-map__container" 
                                        data-map-type="leaflet" 
                                        data-scroll-wheel="false" 
                                        data-latitude-center="26.22969978294552" 
                                        data-longitude-center="50.53755845449137" 
                                        data-map-marker="../images/utilities/map-pin.svg" 
                                        data-zoom-level="12"                                         
                                        data-target-element="govbh-map__render">
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.158511" 
                                            data-longitude="50.471017" 
                                            data-map-marker-aria-label="View Main Branch's contact details" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Main Branch<span class="govbh-map__filter--open">Open</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <!-- <div class="govbh-map__callout-timing">
                                                    <i class="ph ph-clock" aria-hidden="true"></i> 
                                                    <div class="govbh-map__callout-timing-col">
                                                        <span>07:00 am - 02:00 pm (Sunday to Thursday)</span>
                                                        <span>07:00 am - 12:00 pm (Saturday)</span>
                                                    </div>
                                                </div> -->
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/@26.2416703,50.5856836,1013m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="0" aria-label="View our main baranch location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.26927662392161" 
                                            data-longitude="50.62991595727385" 
                                            data-map-marker-aria-label="View Muharraq Branch's contact details" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Muharraq Branch<span class="govbh-map__filter--open">Open</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/@26.2416703,50.5856836,1013m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="1" aria-label="View our Muharraq location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.240135395584993" 
                                            data-longitude="50.58725003619814" 
                                            data-map-marker-aria-label="View Diplomatic Area Branch's contact details"
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Diplomatic Area Branch<span class="govbh-map__filter--open">Open</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/@26.2416703,50.5856836,1013m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="2" aria-label="View our Diplomatic Area location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.22969978294552" 
                                            data-longitude="50.53755845449137" 
                                            data-map-marker-aria-label="View Bahrain Mall Branch's contact details"
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Bahrain Mall Branch<span class="govbh-map__filter--open">Open</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Bahrain+Mall/@26.2295025,50.5349621,1013m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3e49a566ec0aa9cb:0x3cf64707d54a0098!8m2!3d26.2294977!4d50.537537!16s%2Fm%2F0n8_y5m?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="3" aria-label="View our Bahrain Mall location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.168649182870194" 
                                            data-longitude="50.5560941621812" 
                                            data-map-marker-aria-label="View Isa Town Branch's contact details"
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Isa Town Branch<span class="govbh-map__filter--closed">Closed</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Isa+Town/@26.1677633,50.5403013,8112m/data=!3m1!1e3!4m6!3m5!1s0x3e49ae98a8a7b6e9:0x8b0df595d912f782!8m2!3d26.1679752!4d50.5564742!16zL20vMDRxbmJf?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="4" aria-label="View our Isa Town location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.233553723803944" 
                                            data-longitude="50.55372830794713" 
                                            data-map-marker-aria-label="View Seef Branch's contact details"
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">Seef Branch<span class="govbh-map__filter--closed">Closed</span></div>
                                                <div class="govbh-map__callout-address">
                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Seef+Mall/@26.232505,50.531569,1013m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3e49a56880f11dd7:0x4c52a655ea06114c!8m2!3d26.2325003!4d50.5364399!16s%2Fm%2F05zxd3p?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>Get Directions</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                                <a href="#" data-location-index="5" aria-label="View our Seef Branch location" class="govbh-btn govbh-btn--small govbh-btn--withoutline">Read More<i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="govbh-map__wrapper">
                                        <div class="govbh-map__filter">
                                            <div class="govbh-map__filter-close" role="button" aria-label="Click here to close list"><i class="ph-bold ph-list"></i></div>
                                            <form class="govbh-map__filter-form" aria-labelledby="search-map-title" action="#" autocomplete="on">
                                                <h3 id="search-map-title" class="visually-hidden">Search for a Location</h3>
                                                <div class="govbh-map__filter-input">
                                                    <input type="search" id="mapfilter" aria-label="Enter your keyword" placeholder="Enter your keyword">
                                                    <button type="button" aria-label="Click here to submit"><i class="ph-bold ph-magnifying-glass" aria-hidden="true"></i></button>
                                                </div>
                                            </form>
                                            <ul>
                                                <li class="active">
                                                    <button type="button" aria-labelledby="map-list-01">Main Branch<span class="govbh-map__filter--open"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-01" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Main Branch - Open</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                                <li>
                                                    <button type="button" aria-labelledby="map-list-02">Muharraq Branch<span class="govbh-map__filter--open"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-02" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Muharraq Branch - Open</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                                <li>
                                                    <button type="button" aria-labelledby="map-list-03">Diplomatic Area Branch<span class="govbh-map__filter--open"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-03" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Diplomatic Area Branch - Open</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                                <li>
                                                    <button type="button" aria-labelledby="map-list-04">Bahrain Mall Branch<span class="govbh-map__filter--open"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-04" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Bahrain Mall Branch - Open</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                                <li>
                                                    <button type="button" aria-labelledby="map-list-05">Isa Town Branch<span class="govbh-map__filter--closed"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-05" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Isa Town Branch - Closed</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                                <li>
                                                    <button type="button" aria-labelledby="map-list-06">Seef Branch<span class="govbh-map__filter--closed"></span></button>
                                                    <!-- Only for screen reader purpose starts -->
                                                    <div id="map-list-06" aria-live="polite" role="alert" class="visually-hidden">
                                                        <h3>Seef Branch - Closed</h3>
                                                        <address>
                                                            <dl>
                                                                <dt>Address</dt>
                                                                <dd>
                                                                    <p>Building 517, Road 1010, Manama 410, Capital Governorate, Kingdom of Bahrain</p>
                                                                </dd>
                                                                <dt>Phone</dt>
                                                                <dd><p dir="ltr">+973 17204050</p></dd>
                                                                <dt>Email</dt>
                                                                <dd><p>info@slrb.gov.bh</p></dd>
                                                            </dl>
                                                        </address>
                                                    </div>
                                                    <!-- Only for screen reader purpose ends -->
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="govbh-map__render" class="govbh-map__output">
                                            <ul class="govbh-map__output-timelist">
                                                <li class="govbh-map__filter--open">Open</li>
                                                <li class="govbh-map__filter--closed">Closed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Map Container Ends -->
                            </div>
                            <div class="tab-pane fade" id="tabs-customerservice" role="tabpanel" aria-labelledby="id-tabs-customerservice" tabindex="0">This is the content area for the tab "Tab Item 02"</div>
                            <div class="tab-pane fade" id="tabs-kiosks" role="tabpanel" aria-labelledby="id-tabs-kiosks" tabindex="0">This is the content area for the tab "Tab Item 03"</div>
                        </div>  
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Our Location Model Slider Section Starts -->
    <div id="ourlocation" class="govbh-popup-model-slider govbh-popup-model-slider--ourlocation" role="dialog" aria-hidden="true" aria-modal="true" aria-labelledby="ourlocation" tabindex="-1">
        <div class="govbh-popup-model-slider__overlay"></div>
        <div class="govbh-popup-model-slider__container govbh-popup-model-slider--leftcolfull">
            <div class="govbh-popup-model-slider__head">
                <button class="govbh-popup-model-slider__close" aria-label="Model Pop Close"><i class="ph ph-x"></i></button>
            </div>
            <div class="govbh-popup-model-slider__body">
                <div class="govbh-popup-model-slider-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0">
                            <div class="row govbh-popup-model-slider__content g-0">
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-3">
                                    <div class="govbh-popup-model-slider__content-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.7348146697627!2d50.604097175624545!3d26.208385002433356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49a8d76d4da767%3A0x97ff6ef2d424aee7!2sInformation%20%26%20eGovernment%20Authority&#39;s!5e0!3m2!1sen!2sbh!4v1753184795294!5m2!1sen!2sbh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                        <div class="govbh-popup-model-slider__title text--brand govbh-fs-h3">Main Branch<span class="govbh-map__filter--open">Open</span></div>
                                        <div class="govbh-text--large mt-3 mb-3">Building 517, Road 1010, Manama 410, P. O. Box: 332, Capital Governorate, Kingdom of Bahrain</div>
                                        <div class="govbh-popup-model-slider__timing">
                                            <i class="ph ph-clock" aria-hidden="true"></i> 
                                            <div class="govbh-popup-model-slider__timing-detail">
                                                <div class="govbh-popup-model-slider__timing-title">Office Timings</div>
                                                <ul class="govbh-content-block__list">
                                                    <li>Sunday - Wednesday: 9am - 5pm</li>
                                                    <li>Thursday: 10am - 4pm</li>
                                                    <li>Saturday: 8am -  12pm</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="govbh-popup-model-slider__social mt-1">
                                            <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                            <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204051</a>
                                            <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                        </div>
                                        <a href="https://www.google.com/maps/place/Information+%26+eGovernment+Authority's/@26.2089361,50.6032232,1014m/data=!3m1!1e3!4m10!1m2!2m1!1siGA+-+manama!3m6!1s0x3e49a8d76d4da767:0x97ff6ef2d424aee7!8m2!3d26.2088153!4d50.6055745!15sCgxpR0EgLSBtYW5hbWEiA4gBAZIBEWdvdmVybm1lbnRfb2ZmaWNlqgFVCg0vZy8xMWJ3MXoyODZ6CgkvbS8wZGpwOF8QASoHIgNpZ2EoADIeEAEiGkpeH4XcsmHX75RadPOIvk1lmUj6ETsSi_k9Mg4QAiIKaWdhIG1hbmFtYeABAA!16s%2Fg%2F11c5xg0qtj!5m1!1e2?entry=ttu&g_ep=EgoyMDI1MDcxNi4wIKXMDSoASAFQAw%3D%3D" class="govbh-btn govbh-btn--primary govbh-btn--medium" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window">Get Directions <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" tabindex="0">
                            <div class="row govbh-popup-model-slider__content g-0">
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-3">
                                    <div class="govbh-popup-model-slider__content-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.860116626992!2d50.623957476085856!3d26.26620298757366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49a8d742534af9%3A0x4c4c56b3c148d726!2siGA%20-%20Muharraq!5e0!3m2!1sen!2sbh!4v1753184830717!5m2!1sen!2sbh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="govbh-content-block" data-swiper-parallax-x="-5%" data-swiper-parallax-opacity="0">
                                        <div class="govbh-popup-model-slider__title text--brand govbh-fs-h3">Muharraq Branch<span class="govbh-map__filter--open">Open</span></div>
                                        <div class="govbh-text--large mt-3 mb-3">Building 517, Road 1010, Manama 410, P. O. Box: 332, Capital Governorate, Kingdom of Bahrain</div>
                                        <div class="govbh-popup-model-slider__timing">
                                            <i class="ph ph-clock" aria-hidden="true"></i> 
                                            <div class="govbh-popup-model-slider__timing-detail">
                                                <div class="govbh-popup-model-slider__timing-title">Office Timings</div>
                                                <ul class="govbh-content-block__list">
                                                    <li>Sunday - Wednesday: 9am - 5pm</li>
                                                    <li>Thursday: 10am - 4pm</li>
                                                    <li>Saturday: 8am -  12pm</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="govbh-popup-model-slider__social mt-1">
                                            <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                            <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204051</a>
                                            <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                        </div>
                                        <a href="https://www.google.com/maps/place/iGA+-+Muharraq/@26.266173,50.6263304,110m/data=!3m1!1e3!4m14!1m7!3m6!1s0x3e49a8d742534af9:0x4c4c56b3c148d726!2siGA+-+Muharraq!8m2!3d26.2661982!4d50.6265324!16s%2Fg%2F11ddwgk3x4!3m5!1s0x3e49a8d742534af9:0x4c4c56b3c148d726!8m2!3d26.2661982!4d50.6265324!16s%2Fg%2F11ddwgk3x4!5m1!1e2?entry=ttu&g_ep=EgoyMDI1MDcxNi4wIKXMDSoASAFQAw%3D%3D" class="govbh-btn govbh-btn--primary govbh-btn--medium" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window">Get Directions <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="govbh-popup-model-slider__foot">
                <button type="button" class="govbh-btn govbh-btn--outline govbh-btn--medium" aria-label="Model Pop Close">Close</button>
            </div>
            <!-- Navigation -->
            <div class="govbh-popup-model-slider-prev"><i class="ph ph-caret-left"></i> Prev</div>
            <div class="govbh-popup-model-slider-next">Next <i class="ph ph-caret-right"></i></div>
        </div>
    </div>
    <!-- Our Location Model Slider Section Ends -->
    <!-- Interactive Map Section Ends -->

    <!-- Engage with Us Section Starts -->
    <section class="govbh-section govbh-section--padding-l bg--grey" aria-labelledby="section-title-09">
        <div class="container">
            <h2 id="section-title-09">Engage with Us</h2>
            <p>We are here for you. Do not hesitate to communicate with us via the following channels:</p>
        </div>
        <div class="govbh-carousel pt-3"
            data-carousel="custom" 
            data-slidesperview-xxxs="1" 
            data-slidesperview-xxs="1" 
            data-slidesperview-xs="2" 
            data-slidesperview-md="2" 
            data-slidesperview-lg="3" 
            data-slidesperview-xl="3">
            <div class="container">
                <div class="swiper govbh-carousel__slider" aria-roledescription="carousel" role="group" aria-label="Engage with Us Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="engage-title-1" class="govbh-card-horizontal">
                                <img src="../images/utilities/live-chat.svg" alt="Live Chat" loading="lazy" width="78" height="79">
                                <div class="govbh-card-horizontal__content">
                                    <h3 id="engage-title-1" class="m-0"><a href="#">Live Chat</a></h3>
                                    <p>Your single, simple & secure sign-on to all government eServices</p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="engage-title-4" class="govbh-card-horizontal">
                                <img src="../images/utilities/email.svg" alt="Contact Us" loading="lazy" width="78" height="79">
                                <div class="govbh-card-horizontal__content">
                                    <h3 id="engage-title-4" class="m-0"><a href="contact-us.html">Contact Us</a></h3>
                                    <p>Send your questions, feedback or suggestions by email</p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="engage-title-2" class="govbh-card-horizontal">
                                <img src="../images/utilities/sharekna.svg" alt="Sharekna" loading="lazy" width="78" height="79">
                                <div class="govbh-card-horizontal__content">
                                    <h3 id="engage-title-2" class="m-0"><a href="https://services.bahrain.bh/wps/portal/sharekna/en/Home/Home/!ut/p/z1/hY5NC4JAEIZ_SwevzqRl1m0NMj9AKijbS2isq7Huim769xM6CUZze-d9nmGAQgpUZn3FM10pmYkx36nzSE5R4IcRLreJu0HnGJBkfz2gFa_g9g-gY40_huDo0xmEoHe2PBvRT6xZYHIjBMqFyr_vEpnbLgfasoK1rDXf7bgutW66nYEGDsNgcqW4YOZT1QbOKaXqNKRTEi5MQlOn-FqLPi7I4gNRRYn2/dz/d5/L3dHQSEvUUt3TS9nQSEh/" class="govbh-is-external" target="_blank" aria-label="Sharekna - Opens in a new window">Sharekna</a></h3>
                                    <p>National eParticipation Platform: Submit your ideas and suggestions</p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="engage-title-3" class="govbh-card-horizontal">
                                <img src="../images/utilities/tawasul-icon.svg" alt="Tawasul Emblem" loading="lazy" width="78" height="79">
                                <div class="govbh-card-horizontal__content">
                                    <h3 id="engage-title-3" class="m-0"><a href="https://services.bahrain.bh/wps/portal/tawasul/en/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8ziLSzcnQ2NLIy8DHx9LAwcAwIsHC0DnI0NjMz1wwkpiAJKG-AAjgZA_VFgJXAT_ENcHA0cHb38jdx8TI0M_I2gCtB1OgUZORkbGLjjUIBiSUFuhEGmp6MiANMfdc4!/dz/d5/L0lDUmlTV0EhL3dPa0FKRnRnLzROV3FpQSEhL2Vu/" class="govbh-is-external" target="_blank" aria-label="Tawasual - the National Suggestion & Complaint system - Opens in a new window">Tawasul</a></h3>
                                    <p>The National Suggestions & Complaints System</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination govbh-align-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                </div>
            </div>   
        </div> 
    </section>
    <!-- Engage with Us Section Ends -->

    <!-- Media Section Starts -->
    <section class="govbh-section" aria-labelledby="section-title-10">
        <h2 id="section-title-10" class="visually-hidden">Opinion Poll, Media Center, Photos & Videos, IGA Instagram, IGA Twitter and IGA Youtube</h2>
        <div class="container">
            <!-- Polls Section Starts -->
            <div class="govbh-polls theme--dark bg--brand mb-md-5 mb-sm-4 mb-3">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="govbh-polls__icon">
                            <img src="../images/utilities/voting.svg" alt="Opinion Poll" loading="lazy" width="220" height="221">
                        </div>
                        <div class="govbh-polls__title">
                            <h2>Opinion Poll</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="govbh-polls__content">
                            <h3 class="govbh-abstract">What aspect of the ministry do you think needs the most improvement?</h3>
                            <form action="#">
                                <div class="govbh-form-control form-check theme--dark">      
                                    <fieldset id="checklabel7" class="form-check__group form-check__group--horizontal d-lg-flex d-md-block d-block" aria-label="Poll Opinion">                        
                                        <legend></legend>
                                        <div class="form-check__item">
                                            <input type="radio" id="radi1" name="options1" value="1">
                                            <label for="radi1">Customer Service</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radi2" name="options1"  value="2">
                                            <label for="radi2">Training Support</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radi3" name="options1"  value="3">
                                            <label for="radi3">Environment and Social Responsibility</label>
                                        </div>                       
                                        <div class="form-check__item">
                                            <input type="radio" id="radi4" name="options1"  value="4">
                                            <label for="radi4">Human Resource</label>
                                        </div>                       
                                    </fieldset>
                                    <!-- <div class="govbh-form-control__validation-message"><i class="ph ph-warning"></i> Error Text</div> -->
                                </div>  
                                <div class="d-flex flex-wrap gap-3 pt-3">
                                    <button type="button" class="govbh-btn govbh-btn--secondary theme--dark" data-bs-target="#pollpopup" data-bs-toggle="modal">Submit</button>
                                    <a href="#" class="govbh-btn govbh-btn--withoutline theme--dark">Previous Poll Results <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Polls Section Ends -->
            <!-- News Slider Section Starts -->
            <div class="row align-items-center gy-3">
                <div class="col-12"><h2 class="m-0">Media Center</h2></div>
                <div class="col-12">
                    <div class="govbh-newscard__swiper swiper" aria-roledescription="carousel" role="group" aria-label="Media Center Slider">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto" role="group" tabindex="0">
                            <a href="news-detail-page.html" class="govbh-newscard">
                                <div class="govbh-newscard__image">
                                    <div data-swiper-parallax-x="-80%">
                                        <picture>
                                            <source media="(min-width: 1200px)" srcset="../images/banner-009.webp">
                                            <source media="(min-width: 992px)" srcset="../images/banner-009.webp">
                                            <source media="(min-width: 768px)" srcset="../images/banner-009.webp">
                                            <img src="../images/banner-009.webp" width="634" height="358" alt="Latest News: Lorem ipsum dolor sit amet, consectetur adipiscing elit" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="govbh-newscard__content">
                                    <div class="govbh-newscard__content-head">
                                        <div data-swiper-parallax-x="0%" data-swiper-parallax-opacity="0">
                                            <div class="govbh-newscard__date"><span>Latest News</span> 29 May 2025</div>
                                        </div>
                                        <div data-swiper-parallax-x="-12%">
                                            <h3 class="govbh-newscard__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        </div>
                                        <div data-swiper-parallax-x="-14%">
                                            <div class="govbh-newscard__paragraph">His Excellency Dr. Mohammed bin Mubarak Juma, Minister of Education and Chairman of the Board of Trustees of the Higher Education Council, met with a delegation from DePaul University, headed by Dr. Robert Manuel, University President, on the sidelines.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-newscard__content-foot" data-swiper-parallax-x="-20%">
                                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read News <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-auto" role="group" tabindex="0">
                            <a href="news-detail-page.html" class="govbh-newscard">
                                <div class="govbh-newscard__image">
                                    <div data-swiper-parallax-x="-80%">
                                        <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-001.webp">
                                        <source media="(min-width: 992px)" srcset="../images/banner-001.webp">
                                        <source media="(min-width: 768px)" srcset="../images/banner-001.webp">
                                        <img src="../images/banner-001.webp" width="634" height="358" alt="Latest News: Lorem ipsum dolor sit amet, consectetur adipiscing elit1" loading="lazy">
                                    </picture>
                                    </div>
                                </div>
                                <div class="govbh-newscard__content">
                                    <div class="govbh-newscard__content-head">
                                        <div data-swiper-parallax-x="0%" data-swiper-parallax-opacity="0">
                                            <div class="govbh-newscard__date"><span>Latest News</span> 29 May 2025</div>
                                        </div>
                                        <div data-swiper-parallax-x="-12%">
                                            <h3 class="govbh-newscard__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        </div>
                                        <div data-swiper-parallax-x="-14%">
                                            <div class="govbh-newscard__paragraph">His Excellency Dr. Mohammed bin Mubarak Juma, Minister of Education and Chairman of the Board of Trustees of the Higher Education Council, met with a delegation from DePaul University, headed by Dr. Robert Manuel, University President, on the sidelines.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-newscard__content-foot" data-swiper-parallax-x="-20%">
                                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">Read News <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>                     
                        </div>
                        <div class="govbh-newscard__swiper-pagination govbh-theme__pagination govbh-align-center mt-4" role="group" tabindex="0" aria-label="Slider Controls"></div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center pt-4 mt-0">
                    <a href="news.html" class="govbh-btn govbh-btn--outline">Read more news <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>           
            <!-- News Slider Section Ends -->
            <!-- Photos & Videos Section Starts -->
            <div class="row gy-md-3 gy-sm-2 gy-2 pt-5 align-items-center">
                <div class="col-12"><h2 class="m-0">Photos & Videos</h2></div>
                <div class="col-12">
                    <div class="govbh-carousel"
                        data-carousel="custom" 
                        data-slidesperview-xxxs="1" 
                        data-slidesperview-xxs="1" 
                        data-slidesperview-xs="1" 
                        data-slidesperview-md="2" 
                        data-slidesperview-lg="3" 
                        data-slidesperview-xl="3">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="group" aria-label="Photos & Videos Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="photosvideos-title-1" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/card-img.png" alt="Photo Caption 1" loading="lazy" width="416" height="234">
                                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">29 May, 2024</div>
                                                <h3 id="photosvideos-title-1" class="govbh-card__title"><a href="../images/card-img.png" class="cbbox-gallery-01" data-cb-gallery="cbbox-gallery-01" data-cb-type="photo" title="Photo Caption 1" aria-label="Images: Photo Popup">Photo Caption 1</a></h3>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="photosvideos-title-2" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/img-001.webp" alt="Video Caption 2" loading="lazy" width="416" height="234">
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">29 May, 2024</div>
                                                <h3 id="photosvideos-title-2" class="govbh-card__title"><a href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" class="cbbox-gallery-02" data-cb-gallery="cbbox-gallery-02" data-cb-type="video" title="Video Caption 1, YouTube video, 82 seconds, Arabic only" aria-label="Play video: Video Caption 1, YouTube video, 82 seconds, Arabic only">Video Caption 1</a></h3>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Transcript Starts -->
                                    <div class="govbh-image-block__transcript visually-hidden">
                                        <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-2" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-2" role="button">Show Transcript</a>
                                        <div id="video-transcript-2" style="display:none">
                                        <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                            Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                            [Cut to an architect pointing at a blueprint of the plant]                                            
                                            Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                            [Scene transitions to a team of engineers inspecting the construction site]                                            
                                            Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                                        </div>
                                    </div>
                                    <!-- Transcript Ends -->
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="photosvideos-title-3" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/banner-011.webp" alt="Photo Caption 3" loading="lazy" width="416" height="234">
                                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">28 May, 2024</div>
                                                <h3 id="photosvideos-title-3" class="govbh-card__title"><a href="../images/banner-011.webp" class="cbbox-gallery-03" data-cb-gallery="cbbox-gallery-03" data-cb-type="photo" title="Photo Caption 1, YouTube video, 82 seconds, Arabic only" aria-label="Images:  Photo Caption 2, YouTube video, 82 seconds, Arabic only">Photo Caption 2</a></h3>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- FancyBox Gallery -->
                                    <div class="d-none">
                                        <a class="cbbox-gallery-03" aria-label="Photos" title="Law Amendments" href="../images/banner-001.webp" data-thumb="../images/banner-001.webp"></a>
                                        <a class="cbbox-gallery-03" aria-label="Photos" title="Law Amendments" href="../images/banner-002.webp" data-thumb="../images/banner-002.webp"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <article role="region" aria-labelledby="photosvideos-title-4" class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/banner-007.webp" alt="Video Caption 4" loading="lazy" width="416" height="234">
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">28 May, 2024</div>
                                                <h3 id="photosvideos-title-4" class="govbh-card__title"><a href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" class="cbbox-gallery-04" data-cb-gallery="cbbox-gallery-04" data-cb-type="video" title="Video Caption 2, YouTube video, 82 seconds, Arabic only" aria-label="Play video: Video Caption 2, YouTube video, 82 seconds, Arabic only">Video Caption 2</a></h3>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Transcript Starts -->
                                    <div class="govbh-image-block__transcript visually-hidden">
                                        <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-3" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-3" role="button">Show Transcript</a>
                                        <div id="video-transcript-3" style="display:none">
                                        <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                            Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                            [Cut to an architect pointing at a blueprint of the plant]                                            
                                            Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                            [Scene transitions to a team of engineers inspecting the construction site]                                            
                                            Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                                        </div>
                                    </div>
                                    <!-- Transcript Ends -->
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex d-sm-flex d-flex justify-content-center pt-3">
                    <a href="photos-and-videos.html" class="govbh-btn govbh-btn--outline">View More Photos & Videos <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- Photos & Videos Section Ends -->
            <div class="hr hr--medium bg--grey height-4"></div>
            <!-- Twitter & Youtube row starts -->
            <div class="row gy-md-3 gy-sm-2 gy-md-2 gy-sm-3 gy-3">
                <div class="col-12">
                     <!-- Instagram Cards Starts -->
                    <div class="govbh-social-card p-0 mb-lg-3 mb-md-0 mb-0">
                        <div class="govbh-social-card__head mb-3">
                            <a href="https://www.instagram.com/igabahrain" class="govbh-social-card__head-title" target="_blank" rel="noopener noreferrer" aria-label="Follow iGABahrain Instagram - Opens in a new window">
                                <i class="ph ph-instagram-logo text--tertiary" aria-hidden="true"></i>iGABahrain
                            </a>
                            <div class="govbh-social-card__head-btn">
                                <a href="https://www.instagram.com/igabahrain" class="govbh-btn govbh-btn--withoutline" target="_blank" rel="noopener noreferrer" aria-label="Follow iGABahrain Instagram - Opens in a new window">Follow <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="govbh-social-card__body">
                            <img src="../images/instafeed.webp" alt="InstagramFeeds" loading="lazy" width="1944" height="295">
                        </div>
                    </div>
                    <!-- Instagram Cards Ends -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Twitter Cards Starts -->
                   <div class="govbh-social-card h-100 bg--secondary">
                        <div class="govbh-social-card__head">
                            <a href="https://twitter.com/iGABahrain" class="govbh-social-card__head-title" target="_blank" rel="noopener noreferrer" aria-label="Follow iGABahrain Twitter - Opens in a new window">
                                <i class="ph ph-x-logo text--tertiary" aria-hidden="true"></i>iGABahrain
                            </a>
                            <div class="govbh-social-card__head-btn">
                                <a href="https://twitter.com/iGABahrain" class="govbh-btn govbh-btn--withoutline" target="_blank" rel="noopener noreferrer" aria-label="Follow iGABahrain Twitter - Opens in a new window">Follow <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="govbh-social-card__head-border"></div>
                        <div class="govbh-social-card__body">
                            <img src="../images/xfeed.svg" alt="Twitter feed" loading="lazy" width="588" height="161" class="govbh-logo-light">
                            <img src="../images/xfeed-light.webp" alt="Twitter feed light" loading="lazy" width="588" height="161" class="govbh-logo-dark">
                        </div>
                    </div>
                    <!-- Twitter Cards Ends -->
                </div>                
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Youtube Cards Starts -->
                   <div class="govbh-social-card h-100 bg--secondary">
                        <div class="govbh-social-card__head">
                            <a href="https://www.youtube.com/c/iGABahrain" class="govbh-social-card__head-title" target="_blank" rel="noopener noreferrer" aria-label="Subscribe iGABahrain Youtube - Opens in a new window">
                                <span class="icon-youtube" aria-hidden="true"></span>iGABahrain
                            </a>
                            <div class="govbh-social-card__head-btn">
                                <a href="https://www.youtube.com/c/iGABahrain" class="govbh-btn govbh-btn--withoutline" target="_blank" rel="noopener noreferrer" aria-label="Subscribe iGABahrain Youtube - Opens in a new window">Subscribe <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="govbh-social-card__head-border"></div>
                        <div class="govbh-social-card__body">
                            <img src="../images/youtubefeed.webp" alt="Youtube feed" loading="lazy" width="588" height="164" class="govbh-logo-light">
                            <img src="../images/youtubefeed-light.webp" alt="Youtube feed light" loading="lazy" width="588" height="164" class="govbh-logo-dark">
                        </div>
                    </div>
                    <!-- Youtube Cards Ends -->
                </div>                
            </div>
             <!-- Twitter & Youtube row ends -->
        </div>
    </section>
    <!-- Media Section Starts -->

    <!-- Government App Section Starts -->
    <section class="govbh-section govbh-section--padding-l bg--grey" aria-labelledby="section-title-11">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-12"><h2 id="section-title-11" class="m-0">Government Apps</h2></div>
                <div class="col-12">
                    <div class="govbh-carousel pt-3"
                        data-carousel="custom" 
                        data-slidesperview-xxxs="1" 
                        data-slidesperview-xxs="1" 
                        data-slidesperview-xs="2" 
                        data-slidesperview-md="2" 
                        data-slidesperview-lg="3" 
                        data-slidesperview-xl="3">
                        <div class="container">
                            <div class="swiper govbh-carousel__slider" aria-roledescription="carousel" role="group" aria-label="Government Apps Slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="govapps-title-1" class="govbh-card-horizontal govbh-card-horizontal--border">
                                            <img src="../images/utilities/mygov.svg" alt="MyGov" loading="lazy" width="80" height="80">
                                            <div class="govbh-card-horizontal__content">
                                                <h3 id="govapps-title-1" class="m-0">
                                                    <a href="https://services.bahrain.bh/wps/portal/en/BSP/GSX-UI-AllApps/GSX-UI-AppDetails?appID=25" class="govbh-is-external" target="_blank" rel="noopener noreferrer" aria-label="MyGov - opens in a new window">MyGov</a>
                                                </h3>
                                                <p>A unified platform to access the services provided by various entities</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="govapps-title-2" class="govbh-card-horizontal govbh-card-horizontal--border">
                                            <img src="../images/utilities/ekey20.svg" alt="eKey" loading="lazy" width="80" height="80">
                                            <div class="govbh-card-horizontal__content">
                                                <h3 id="govapps-title-2" class="m-0">
                                                    <a href="https://services.bahrain.bh/wps/portal/en/BSP/GSX-UI-AllApps/GSX-UI-AppDetails?appID=24" class="govbh-is-external" target="_blank" rel="noopener noreferrer" aria-label="eKey 2.0 - opens in a new window">eKey 2.0</a>
                                                </h3>
                                                <p>A single sign-on experience enabled with a secure biometric verification with the highest levels of protection.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide" tabindex="0" role="group">
                                        <article role="region" aria-labelledby="govapps-title-3" class="govbh-card-horizontal govbh-card-horizontal--border">
                                            <img src="../images/utilities/Altajir-app.svg" alt="Government Directory" loading="lazy" width="80" height="80">
                                            <div class="govbh-card-horizontal__content">
                                                <h3 id="govapps-title-3" class="m-0">
                                                    <a href="https://services.bahrain.bh/wps/portal/en/BSP/GSX-UI-AllApps/GSX-UI-AppDetails?appID=21" class="govbh-is-external" target="_blank" aria-label="AlTajir - opens in a new window">AlTajir</a>
                                                </h3>
                                                <p>Offering eServices for business owners in the Kingdom of Bahrain</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="govbh-carousel__nav-pagination govbh-theme__pagination govbh-align-center mt-3" role="group" tabindex="0" aria-label="Slider Controls"></div>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-12 govbh-btn-absolute">
                    <a href="https://services.bahrain.bh/wps/portal/en/BSP/GSX-UI-AllApps" target="_blank" class="govbh-btn govbh-btn--withoutline" rel="noopener noreferrer" aria-label="View all Government Apps - Opens in a new window">View all Apps <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        
        
    </section>
    <!-- Government App Section Ends -->

<?php 
include "includes/footer.php";
?>