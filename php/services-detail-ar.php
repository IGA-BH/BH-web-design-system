<?php
include "../globals.php";
$page = 'services-detail';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                            <li><a href="#" aria-label="Go to خدمات">خدمات</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">طلب تسجيل الملكية</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>الخدمات تفاصيل</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                    <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
                        <div class="govbh-sharethis__title">شارك هذه الصفحة:</div>
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

    <section class="govbh-section" aria-labelledby="services-page-title">
        <div class="container">
            <!-- Two Column Starts -->
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-lg-0 mt-md-4 mt-4">
                    <!-- Side Widget Starts -->
                    <aside class="govbh-side-widget govbh-side-widget--hide-list mb-4">
                        <button type="button" aria-expanded="false" aria-controls="asidecategories" data-aria-expanded-text="Close Side Navigation Menu" aria-label="Open Side Navigation Menu" data-target-on="#asidecategories" class="govbh-side-widget__title govbh-fs-h5 govbh-toggler d-lg-none d-md-flex d-flex mb-0">
                            في هذه الصفحة <i class="ph ph-caret-down" aria-hidden="true"></i>
                        </button>
                        <div class="govbh-side-widget__title govbh-fs-h5 d-lg-block d-md-none d-none">في هذه الصفحة</div>
                        <div id="asidecategories" class="govbh-side-widget__content">
                            <ul class="govbh-content-block__list">
                                <li class="govbh-side-widget__item active"><a href="#overview">نظرة عامة</a></li>
                                <li class="govbh-side-widget__item"><a href="#required-documents">المستندات المطلوبة</a></li>
                                <li class="govbh-side-widget__item"><a href="#downloadable-files">الملفات القابلة للتنزيل</a></li>
                                <li class="govbh-side-widget__item"><a href="#duration">المدة</a></li>
                                <li class="govbh-side-widget__item"><a href="#fees">رسوم الخدمة</a></li>
                                <li class="govbh-side-widget__item"><a href="#steps">خطوات الخدمة</a></li>
                            </ul>
                        </div>
                        <!-- This card is duplicated in bottom of the section also -->
                        <div class="govbh-content-box bg--grey mt-4 d-lg-block d-md-none d-none">
                            <p class="govbh-text--extra-large"><b>لأي مشكلة في الخدمة، لا تتردد في التواصل معنا.</b></p>
                            <a href="#" class="govbh-btn govbh-btn--outline">اتصل بنا <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </aside>
                    <!-- Side Widget Ends -->
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="govbh-content-block">
                        <div id="overview">
                            <h2 id="services-page-title">طلب تسجيل الملكية</h2><!-- id comes from section aria-labelledby -->
                            <div class="govbh-carousel mb-3"
                                data-carousel="custom" 
                                data-slidesperview-xxxs="1" 
                                data-slidesperview-xxs="1" 
                                data-slidesperview-xs="1" 
                                data-slidesperview-md="1" 
                                data-slidesperview-lg="1" 
                                data-slidesperview-xl="1">
                                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Application for Property Registration Slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-image-block">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/banner-035.webp"><!--1600*750 Default image-->
                                                    <source media="(min-width: 992px)" srcset="../images/banner-035.webp"><!--1199*500-->
                                                    <source media="(min-width: 768px)" srcset="../images/banner-035.webp"> <!--991*413-->
                                                    <img src="../images/banner-035.webp" width="966" height="544" alt="Application for Property Registration1" loading="lazy"><!--767*320-->
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-image-block">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="../images/banner-034.webp"><!--1600*750 Default image-->
                                                    <source media="(min-width: 992px)" srcset="../images/banner-034.webp"><!--1199*500-->
                                                    <source media="(min-width: 768px)" srcset="../images/banner-034.webp"> <!--991*413-->
                                                    <img src="../images/banner-034.webp" width="966" height="544" alt="Application for Property Registration 2" loading="lazy"><!--767*320-->
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pagination -->
                                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                </div>
                            </div>

                            <div class="govbh-abstract">
                                <p>تتيح هذه الخدمة للمستخدم التقدم بطلب اصدار إفادة اثبات سكن.</p>
                            </div>

                            <div class="d-flex flex-wrap gap-3">
                                <a class="govbh-btn govbh-btn--outline govbh-btn--left-icon cbbox-01" data-cb-gallery="cbbox-01" data-cb-type="video" href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" title="Property Registration Service, YouTube video, 82 seconds, Arabic only" aria-label="شاهد فيديو توضيحي عن خدمة تسجيل الملكية"><i class="ph ph-video" aria-hidden="true"></i> شاهد الفيديو</a>
                                <a href="#" target="_blank" aria-label="Launch Service - Open in a new window" class="govbh-btn govbh-btn--primary">إطلاق الخدمة<i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="hr mb-3"></div><!-- Horizontal Line -->
                        
                        <div id="required-documents" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-files text--tertiary"></i> المستندات المطلوبة</h3>  
                            <ol class="govbh-content-with-list__item">
                                <li>
                                    <div class="govbh-content-block__orderdlist-details">
                                        <b>ما يثبت الهوية:</b> جواز السفر أو الهوية الوطنية لمالك العقار.
                                    </div>
                                </li>
                                <li>
                                    <div class="govbh-content-block__orderdlist-details">
                                        <b>إثبات الملكية:</b> سند الملكية أو اتفاقية الإيجار في الحكومة الالكترونية.
                                    </div>
                                </li>
                                <li>
                                    <div class="govbh-content-block__orderdlist-details">
                                        <b>الاستطلاعات السابقة:</b> أي تقارير استطلاعات موجودة إذا كانت قابلة للتطبيق.
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="hr mb-3"></div><!-- Horizontal Line -->
                        
                        <div id="downloadable-files" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-download-simple text--tertiary"></i> الملفات القابلة للتنزيل</h3>  
                            <div class="govbh-content-with-list__item">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="1" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="2">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Downloadable Files Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="servicedownload-title-1" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                                    <div class="govbh-card__head">
                                                        <h4 id="servicedownload-title-1" class="govbh-card__title"><a href="../images/samplepdf.pdf" target="_blank" aria-label="Download: استمارة التقديم لاتفاقية الايجار, PDF, 13 MB, 8 pages">استمارة التقديم لاتفاقية الايجار</a></h4>
                                                        <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                                        <div class="govbh-card__foot">
                                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium pe-none">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="servicedownload-title-2" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                                    <div class="govbh-card__head">
                                                        <h4 id="servicedownload-title-2" class="govbh-card__title"><a href="../images/samplepdf.pdf" target="_blank" aria-label="Download: تقرير الاستطلاع الجديد, PDF, 13 MB, 8 pages">تقرير الاستطلاع الجديد</a></h4>
                                                        <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                                        <div class="govbh-card__foot">
                                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium pe-none">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></div>
                                                        </div>
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

                        <div class="hr mb-3"></div><!-- Horizontal Line -->
                        
                        <div id="duration" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-clock text--tertiary"></i> المدة</h3>
                            <ul class="govbh-content-with-list__item">
                                <li><b>الاستشارة الأولية:</b> يوم إلى يومين عمل.</li>
                                <li><b>تنفيذ الاستبيان:</b> من 3 إلى 10 أيام عمل، حسب درجة التعقيد.</li>
                                <li><b>إعداد التقرير:</b> من 2 إلى 5 أيام عمل بعد الاستبيان.</li>
                                <li><b>المدة الإجمالية:</b> تتراوح عادةً من أسبوع إلى 3 أسابيع عمل.</li>
                            </ul>
                        </div>

                        <div class="hr mb-3"></div><!-- Horizontal Line -->
                        
                        <div id="fees" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-money-wavy text--tertiary"></i> رسوم الخدمة</h3>
                            <div class="govbh-content-with-list__item">
                                <p>تختلف الرسوم بناءً على نوع المسح (حدود، طبوغرافي، إلخ) ومساحة العقار. </p>
                                <ul>
                                    <li>مراجعة التقارير 5 د.ب</li>
                                    <li>قد تنطبق رسوم إضافية بناءًا على نوع الخدمة</li>
                                </ul>
                            </div>
                        </div>

                        <div class="hr mb-3"></div><!-- Horizontal Line -->
                        
                        <div id="steps" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-list-numbers text--tertiary"></i> خطوات الخدمة</h3>  
                            <div class="govbh-content-with-list__item">
                                <ol class="govbh-content-block__numberdlist">
                                    <li>
                                        <div class="govbh-content-block__numberdlist-item">
                                            <div class="govbh-content-block__numberdlist-title">تسجيل دخول باستخدام (E-key)</div> 
                                            <p>تسجيل الدخول باستخدام المفتاح الالكتروني الأساسي أو المتقدم</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="govbh-content-block__numberdlist-item">
                                            <div class="govbh-content-block__numberdlist-title">تعبئة بيانات الطلب والعنوان</div> 
                                            <p>تعبئة بيانات مقدم الطلب والعنوان و الاستطلاعات المراد مراجعتها</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="govbh-content-block__numberdlist-item">
                                            <div class="govbh-content-block__numberdlist-title">رفع المرفقات</div> 
                                            <p>رفع الاستطلاعات السابقة، ما يثبت الهوية و الملكية</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="govbh-content-block__numberdlist-item">
                                            <div class="govbh-content-block__numberdlist-title">تقديم الطلب</div> 
                                            <p>الإقرار على صحة المعلومات و تقديم الطلب</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="hr mb-3"></div><!-- Horizontal Line -->

                        <div class="d-flex flex-wrap gap-3 pt-3">
                            <a href="#"  target="_blank" aria-label="Launch Service - Open in a new window" class="govbh-btn govbh-btn--primary">إطلاق الخدمة<i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                        </div>

                        <!-- Contct Box Only in <967 screen Starts -->
                        <!-- This card is duplicated in top of the section also -->
                        <div class="govbh-content-box bg--grey mt-4 d-lg-none d-md-block d-block">
                            <p class="govbh-text--extra-large"><b>لأي مشكلة في الخدمة، لا تتردد في التواصل معنا.</b></p>
                            <a href="#" class="govbh-btn govbh-btn--outline">اتصل بنا <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                        </div>
                        <!-- Contct Box Only in <967 screen Ends -->

                    </div>
                </div>
            </div>
            <!-- Two Column Ends -->

            <div class="hr mb-3"></div><!-- Horizontal Line -->
            <!-- Share & Last updated content Starts -->
            <div class="row g-2">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="govbh-sharethis" role="region" aria-label="Share this page on Social Media" tabindex="0">
                        <div class="govbh-sharethis__title">شارك هذه الصفحة:</div>
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
                    <p id="last-updated-date" class="govbh-text--medium m-0">شارك هذه الصفحة: <b>29 يونيو 2025</b></p>
                </div>
                </div>
            </div>
            <!-- Share & Last updated content Ends -->

            <!-- Navigation Helper Starts -->
            <div class="govbh-nav-group mt-4" role="region" aria-label="Navigation Helper">
                <!-- Back to Listing Button -->
                <a href="services-ar.html" class="govbh-btn govbh-btn--withoutline govbh-btn--left-icon" aria-label="العودة إلى صفحة قائمة الخدمات"><i class="ph ph-arrow-elbow-left-up" aria-hidden="true"></i> العودة إلى قائمة الخدمات</a>
                <!-- Previous & Next Starts --> 
                <div class="govbh-prevnext-nav mt-4 govbh-content-box bg--light-brand">
                    <a href="#" class="govbh-prevnext-nav__item" aria-label="الخدمة السابقة: مشروع ممشى مدينة عيسى" rel="prev">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--left-icon"><i class="ph ph-arrow-left" aria-hidden="true"></i>السابق</div>
                        <div class="govbh-prevnext-nav__title govbh-fs-h6">مشروع ممشى مدينة عيسى</div>
                    </a>
                    <a href="#" class="govbh-prevnext-nav__item text-md-end text-sm-start text-start" aria-label=" الخدمة التالية: مشروع مناقصات تطوير الحدائق العامة" rel="next">
                        <div class="govbh-btn govbh-btn--withoutline">التالي<i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        <div class="govbh-prevnext-nav__title govbh-fs-h6">مشروع مناقصات تطوير الحدائق العامة</div>
                    </a>
                </div>
                <!-- Previous & Next Ends --> 
            </div>
            <!-- Navigation Helper Ends -->

        </div>
    </section>

    <!-- Related pages Section Starts -->
    <div class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
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
                    <div class="col-md-6 col-sm-8 col-9"><h2 id="related-page-title" class="m-0">الخدمات الإلكترونية ذات الصلة</h2></div>
                    <div class="col-md-6 col-sm-4 col-3">
                        <!-- Navigation -->
                        <div class="govbh-general__navigation justify-content-end">
                            <div class="govbh-carousel__nav-prev govbh-general__navigation-arrow"><i class="ph ph-arrow-left" aria-hidden="true"></i></div>
                            <div class="govbh-carousel__nav-next govbh-general__navigation-arrow"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related E-Services Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card" role="region" aria-labelledby="service-title-1">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                    <img loading="lazy" src="../images/icpng.webp" alt="Application for Property Registration" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="service-title-1" class="govbh-card__title"><a href="#" aria-label="Service: Property registration">خدمات المواعيد</a></h3>
                                        <div class="govbh-card__paragraph">تتيح هذه الخدمة للمواطنين الدفع إلكترونيا</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-card__foot-button">
                                        <a href="#" target="_blank" aria-label="Cadastral Survey Services - Open in a new window" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium" aria-label="Service: Property registration">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card" role="region" aria-labelledby="service-title-2">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                    <img loading="lazy" src="../images/icpng.webp" alt="Online Appointments Services" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="service-title-2" class="govbh-card__title"><a href="#" aria-label="Service: Property registration">خدمات التسجبل</a></h3>
                                        <div class="govbh-card__paragraph">تتيح هذه الخدمة للمواطنين مراجعة طلب الترخيص </div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-card__foot-button">
                                        <a href="#" target="_blank" aria-label="Cadastral Survey Services - Open in a new window" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium" aria-label="Service: Property registration">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article class="govbh-card" role="region" aria-labelledby="service-title-3">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-icon">
                                    <img loading="lazy" src="../images/icpng.webp" alt="Cadastral Survey Services" width="36" height="48">
                                    </div>
                                    <div class="govbh-card__head-content">
                                        <h3 id="service-title-3" class="govbh-card__title"><a href="#" aria-label="Service: Property registration">خدمات المسح</a></h3>
                                        <div class="govbh-card__paragraph">تتيح هذه الخدمة للمواطنين طلب الترخيص</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-card__foot-button">
                                        <a href="#" target="_blank" aria-label="Cadastral Survey Services - Open in a new window" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium" aria-label="Service: Property registration">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related pages Section Ends -->


<?php 
include "includes/footer.php";
?>