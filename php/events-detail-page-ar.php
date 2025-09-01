<?php
include "../globals.php";
$page = 'events-detail-page';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li><a href="#" aria-label="Go to media">المركز الإعلامي</a></li>
                        <li><a href="#" aria-label="Go to events">الفعاليات</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">معرض الجواهر العربية</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>الفعاليات تفاصيل</h1>
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

    <!-- Events Section Starts -->
    <article class="govbh-section" role="region" aria-labelledby="events-section-title">
        <div class="container">
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
                                <li class="govbh-side-widget__item"><a href="#description">الوصف</a></li>
                                <li class="govbh-side-widget__item"><a href="#location-map">خريطة الموقع</a></li>
                                <li class="govbh-side-widget__item"><a href="#downloadable-documents">مستندات قابلة للتنزيل</a></li>
                                <li class="govbh-side-widget__item"><a href="#ticket-information">معلومات التذكرة</a></li>
                                <li class="govbh-side-widget__item"><a href="#eligibility-criteria">معايير الأهلية</a></li>
                            </ul>
                        </div>
                        <!-- This card is duplicated in bottom of the section also -->
                        <div class="govbh-content-box bg--grey mt-4 d-lg-block d-md-none d-none">
                            <p class="govbh-text--extra-large"><strong>لأي استفسار حول الفعالية يرجى التواصل من خلال التالي:</strong></p>
                            <p class="govbh-fs-h6">مركز البحرين العالمي للمعارض</p>
                            <div class="govbh-side-widget__social pb-3">
                                <a href="tel:+97317204050" aria-label="Call us at +973 17204050" dir="ltr"><i class="ph ph-phone text--tertiary" aria-hidden="true"></i>+973 17204050</a>
                                <a href="mailto:contact@exhibition.bh" aria-label="Email us at contact@exhibition.bh" dir="ltr"><i class="ph ph-envelope-simple text--tertiary" aria-hidden="true"></i>contact@exhibition.bh</a>
                            </div>
                            <a href="#" target="_blank" aria-label="Contact Exhibition World Bahrain - Open in a new window" class="govbh-btn govbh-btn--outline" rel="noopener noreferrer">تواصل معنا <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                        </div>
                    </aside>
                    <!-- Side Widget Ends -->
                </div>
                <div id="overview" class="col-xxl-9 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="d-flex flex-wrap gap-2 mb-2"><span class="govbh-badge govbh-badge--light">خارجي</span><span class="govbh-badge govbh-badge--light">مؤتمر</span></div>
                    <h2 id="events-section-title">معرض الجواهر العربية</h2><!-- id comes from section aria-labelledby -->
                    <div class="row">
                        <div class="col-12 d-flex flex-wrap gap-3">
                            <div class="govbh-date-content"><i class="ph ph-calendar-check" aria-hidden="true"></i> 20 مايو - 30 يونيو 2025</div>
                            <div class="govbh-date-content"><i class="ph ph-clock" aria-hidden="true"></i> 10 صباحًا - 10 مساءً</div>
                            <div class="govbh-date-content"><i class="ph ph-map-pin" aria-hidden="true"></i> مركز البحرين العالمي للمعارض</div>
                            <div class="govbh-date-content"><i class="ph ph-ticket" aria-hidden="true"></i> تبدأ اسعار التذاكر من 5 د.ب</div>
                        </div>
                    </div>
                    <!-- Slider Starts -->
                    <div class="govbh-carousel mb-4 mt-4"
                        data-carousel="custom" 
                        data-slidesperview-xxxs="1" 
                        data-slidesperview-xxs="1" 
                        data-slidesperview-xs="1" 
                        data-slidesperview-md="1" 
                        data-slidesperview-lg="1" 
                        data-slidesperview-xl="1">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Evetns Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-image-block govbh-image-block--with-overlay" >
                                        <picture>
                                            <source media="(min-width: 1200px)" srcset="../images/banner-034.webp"><!--647*364 Default image-->
                                            <source media="(min-width: 992px)" srcset="../images/banner-034.webp"><!--468*263-->
                                            <source media="(min-width: 768px)" srcset="../images/banner-034.webp"> <!--516*392-->
                                            <img loading="lazy" src="../images/banner-034.webp" width="1293" height="727" alt="eCommerce Conference for SMEs"><!--767*320-->
                                        </picture>
                                        <div class="govbh-image-block__playicon"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                        <div class="govbh-image-block__caption"><strong>معرض الجواهر العربية</strong> (فيديو يوتيوب، 82 ثانية)</div>
                                        <a class="govbh-image-block__playicon cbbox-01" data-cb-gallery="cbbox-01" data-cb-type="video" href="https://www.youtube.com/embed/Qp0_6AcGmCg?rel=0&amp;wmode=transparent&amp;autoplay=1" title="معرض الجواهر العربية, فيديو يوتيوب، 82 ثانية" aria-label="About the Ministry, YouTube video, 82 seconds, Arabic only" class="govbh-image-block__playicon" role="button"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></a>
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
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-image-block">
                                        <picture>
                                            <source media="(min-width: 1200px)" srcset="../images/banner-006.webp"><!--1600*750 Default image-->
                                            <source media="(min-width: 992px)" srcset="../images/banner-006.webp"><!--1199*500-->
                                            <source media="(min-width: 768px)" srcset="../images/banner-006.webp"> <!--991*413-->
                                            <img src="../images/banner-006.webp" width="1293" height="727" alt="eCommerce Conference for SMEs 1" loading="lazy" aria-hidden="true"><!--767*320-->
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                    <!-- Slider Ends -->
                    <!-- Content Ends -->
                    <div class="govbh-content-block pt-lg-2 pt-md-0 pt-0">
                        <div class="govbh-abstract">
                            <p>تحت رعاية صاحب السمو الملكي الأمير سلمان بن حمد آل خليفة، ولي العهد رئيس مجلس الوزراء، يعود من جديد معرض الجواهر العربية، المعرض الرائد للمجوهرات والساعات الفاخرة في الشرق الأوسط، ليبهر جمهوره في نوفمبر المقبل بمركز البحرين العالمي للمعارض. يُمثّل هذا الحدث الاستثنائي المُرتقب رحلة ساحرة في عالم الفخامة لعشاق المجوهرات والساعات الفاخرة وهواة جمعها.</p>
                        </div>

                        <!-- Alert Message Starts -->
                        <div role="alert" class="govbh-alert govbh-alert--info mb-4">
                            <div class="govbh-alert__icon"><i class="ph-fill ph-info" aria-hidden="true"></i></div>
                            <div class="govbh-alert__content">
                                <div class="abstract">تاريخ التسجيل</div>
                                <p>يبدأ التسجيل من 1 مايو 2025</p>
                            </div>
                        </div>
                        <div role="alert" class="govbh-alert govbh-alert--warning mb-4">
                            <div class="govbh-alert__icon"><i class="ph-fill ph-warning" aria-hidden="true"></i></div>
                            <div class="govbh-alert__content">
                                <div class="abstract">محجوز بالكامل</div>
                                <p>هذا الحدث لم يعد يقبل التسجيل/الحجز. الحجز او شراء التذاكر موقوف.</p>
                            </div>
                        </div>
                        <!-- Alert Message Ends -->

                        <div class="d-flex flex-wrap gap-3 govbh-no-li">
                            <a href="#" role="button" aria-disabled="true" target="_blank" aria-label="Buy Tickets - Open in a new window" tabindex="-1" class="govbh-btn govbh-btn--primary govbh-btn--disabled" rel="noopener noreferrer">شراء تذكرة<i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                            <div class="govbh-dropdown">
                                <button class="govbh-btn govbh-btn--outline dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Click here to Add to Calendar">
                                    أضف الى التقويم
                                </button>
                                <ul class="govbh-dropdown__menu dropdown-menu govbh--box-shadow" style="width: 100%;">
                                    <li><a class="govbh-dropdown__menu-item" href="#" aria-label="Outlook / iCalendar ">أوت لوك / آي كاليندار</a></li>
                                    <li><a class="govbh-dropdown__menu-item" href="#"  aria-label="Google Calendar">تقويم جوجل</a></li>
                                </ul>
                            </div>
                            <div class="govbh-date-content"><i class="ph ph-warning" aria-hidden="true"></i> هذه الفعالية انتهت</div>
                        </div>

                        <div class="hr mt-5 mb-3"></div><!-- Horizontal Line -->

                        <div id="description" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-files text--tertiary" aria-hidden="true"></i> الوصف</h3>  
                            <div class="govbh-content-with-list__item">
                                <p>شكّل معرض الجواهر العربية، على مدار 27 عاماً، منصّةً راقية لعرض أحدث مجموعات المجوهرات والساعات العالمية، وقد حققت نسخة العام الماضي نجاحاً باهراً، حيث ضمّ المعرض أكثر من 700 علامة تجارية محلية وإقليمية وعالمية تم عرض قطعها النفيسة في خمس قاعات عرض واسعة، كما استقبل أكثر من 51,000 زائر وما يقرب من 700 عارض، وهو ما يؤكد مكانته الرائدة على مستوى الشرق الأوسط.هنا، ستكتشفون قطعاً نادرة وفريدة ومثالية للمناسبات الخاصة أو الاستثمارات، وأحجاراً كريمة استثنائية، ومجموعات حصرية، وروائع فنية تُجسّد الفن والفخامة، مع استكشاف آخر الصيحات للارتقاء بمجموعتك الفاخرة.اكتشفوا جوهر العطور الفاخرة في معرض العطور العربيةواستكمالاً لعالم المجوهرات المُبهر، يُقام معرض العطور العربية بالتزامن مع معرض الجواهر العربية 2025.</p>
                                <p>يدعوكم هذا المعرض المتخصص لاستكشاف مجموعة رائعة من العطور الفاخرة والفريدة. اكتشفوا إبداعات أشهر صانعي العطور والعلامات التجارية الراقية، لتعيشوا تجربة استثنائية غامرة.الدخول مجاني، لكن التسجيل إلزامي. انضموا إلينا في معرض الجواهر العربية ومعرض العطور العربية 2025 لتجربة تسوّق فاخرة.</p>
                            </div>
                        </div>

                        <div class="hr mt-4 mb-3"></div><!-- Horizontal Line -->

                        <div id="location-map" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-map-pin text--tertiary" aria-hidden="true"></i> خريطة الموقع</h3>  
                            <div class="govbh-content-with-list__item">
                                <!-- Contact Map Section Starts -->
                                <div class="govbh-section p-0 pb-3">
                                    <div class="govbh-map">
                                        <div class="govbh-map__container" 
                                            data-map-type="leaflet" 
                                            data-scroll-wheel="false" 
                                            data-latitude-center="26.027280872416092" 
                                            data-longitude-center="50.49974985381585" 
                                            data-map-marker="../images/utilities/map-pin.svg" 
                                            data-zoom-level="12"                                         
                                            data-target-element="govbh-map__render">
                                            <!-- Location -->
                                            <div class="govbh-map__container-location" 
                                                data-latitude="26.027280872416092" 
                                                data-longitude="50.49974985381585"
                                                data-map-marker-aria-label="View exhibition world bahrain contact details" 
                                                data-map-marker="../images/utilities/map-pin.svg">
                                                <div class="govbh-map__callout">
                                                    <div class="govbh-map__callout-title">مركز البحرين العالمي للمعارض</div>
                                                    <div class="govbh-map__callout-address">
                                                        <p>مبنى 517، طريق 1010، المنامة 410، ص.ب. 332، محافظة العاصمة، مملكة البحرين</p>
                                                    </div>
                                                    <div class="govbh-map__callout-direction">
                                                        <a href="https://maps.app.goo.gl/1qKMUiewShf5fsBZ9" target="_blank" rel="noopener noreferrer" aria-label="Get directions - Open in a new window"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                    </div>
                                                    <div class="govbh-map__callout-social">
                                                        <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                        <a href="mailto:contact@exhibition.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>contact@exhibition.bh</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="govbh-map__wrapper">
                                            <div id="govbh-map__render" class="govbh-map__output"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Map Section Ends -->
                            </div>
                        </div>

                        <div class="hr mt-4 mb-3"></div><!-- Horizontal Line -->

                        <div id="downloadable-documents" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-download-simple text--tertiary"></i> مستندات الفعالية</h3>  
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
                                                    <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Promotional Brochure" width="304" height="394" loading="lazy"></div>
                                                    <div class="govbh-card__head">
                                                        <h4 id="servicedownload-title-1" class="govbh-card__title"><a href="../images/samplepdf.pdf" target="_blank" aria-label="Download: Promotional Brochure, PDF, 13 MB, 8 pages">كتيب ترويجي</a></h4>
                                                        <div class="govbh-card__date govbh-card__date--year">
                                                            <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                                            <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                        </div>
                                                        <div class="govbh-card__foot">
                                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium pe-none">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="servicedownload-title-2" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                                    <div class="govbh-card__head">
                                                        <h4 id="servicedownload-title-2" class="govbh-card__title"><a href="../images/samplepdf.pdf" target="_blank" aria-label="Download: Booking Form, PDF, 25 MB, 1 page">استمارة الحجز</a></h4>
                                                        <div class="govbh-card__date govbh-card__date--year">
                                                            <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                                            <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                        </div>
                                                        <div class="govbh-card__foot">
                                                            <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium pe-none">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <article role="region" aria-labelledby="servicedownload-title-3" class="govbh-card govbh-card--card-file govbh-card--with-image">
                                                    <div class="govbh-card__head">
                                                        <h4 id="servicedownload-title-3" class="govbh-card__title"><a href="../images/samplepdf.pdf" target="_blank" aria-label="Download: Passport or national ID of the property owner, PDF, 13 MB, 8 pages">جواز السفر أو الهوية الوطنية لمالك العقار</a></h4>
                                                        <div class="govbh-card__date govbh-card__date--year">
                                                            <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                                            <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                                        </div>
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

                        <div class="hr mt-4 mb-3"></div><!-- Horizontal Line -->

                        <div id="ticket-information" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-ticket text--tertiary" aria-hidden="true"></i> معلومات التذكرة</h3>  
                            <div class="govbh-content-with-list__item">
                                <p>فيما يلي خيارات التذاكر المتاحة للفعالية:</p>
                                <!--Table Starts -->
                                <div class="govbh-datatable table-responsive">  
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>نوع التذكرة</th>
                                                <th>السعر</th>
                                                <th>التوفر</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="govbh-datatable__table--bold">
                                                    <b>الدخول العادي</b>
                                                </td>
                                                <td>25 دب</td>
                                                <td>100 متوفر</td>
                                            </tr>
                                            <tr>
                                                <td class="govbh-datatable__table--bold">
                                                    <b>دخول كبار الشخصيات</b>
                                                </td>
                                                <td>50 دب</td>
                                                <td>50 متوفر</td>
                                            </tr>
                                            <tr>
                                                <td class="govbh-datatable__table--bold">
                                                    <b>خصم المجموعات (+5)</b>
                                                </td>
                                                <td>20 دب لكل تذكرة</td>
                                                <td>30 متوفر</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--Table Ends -->
                            </div>
                        </div>

                        <div class="hr mt-4 mb-3"></div><!-- Horizontal Line -->

                        <div id="eligibility-criteria" class="govbh-content-with-list">
                            <h3 class="d-flex gap-2 pt-3 align-items-center text--brand"><i class="ph ph-sign-in text--tertiary" aria-hidden="true"></i> معايير الأهلية</h3>  
                            <div class="govbh-content-with-list__item">
                                <p>للمشاركة في الفعاليات المقامة في مملكة البحرين، يجب على الزوار استيفاء بعض الشروط العامة التي تضمن تجربة آمنة ومنظمة لجميع الحضور.</p>
                                <ol>
                                    <li>أن يكون عمر المشارك 18 سنة فما فوق (ما لم يُذكر خلاف ذلك).</li>
                                    <li>إبراز بطاقة هوية سارية عند الدخول.</li>
                                    <li>الالتزام بالإرشادات والتعليمات الخاصة بالفعالية.</li>
                                    <li>التسجيل المسبق عبر الموقع الإلكتروني أو التطبيق (عند الحاجة).</li>
                                    <li>الالتزام بالزي المناسب حسب طبيعة الفعالية.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="hr mt-4 mb-4"></div><!-- Horizontal Line -->

                        <div class="d-flex flex-wrap gap-3">
                            <!-- Buy Ticket Button -->
                            <a href="#" role="button" target="_blank" aria-label="Buy Tickets - Open in a new window" tabindex="-1" class="govbh-btn govbh-btn--primary govbh-btn--disabled" rel="noopener noreferrer">شراء تذكرة<i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                        </div>

                        <!-- Contct Box Only in <967 screen Starts -->
                        <!-- This card is duplicated in top of the section also -->
                        <div class="govbh-content-box bg--grey mt-4 d-lg-none d-md-block d-block">
                            <p class="govbh-text--extra-large"><strong>لأي استفسار حول الفعالية يرجى التواصل من خلال التالي:</strong></p>
                            <p class="govbh-fs-h6">مركز البحرين العالمي للمعارض</p>
                            <div class="govbh-side-widget__social pb-3">
                                <a href="tel:+97317204050" aria-label="Call us at +973 17204050" dir="ltr"><i class="ph ph-phone text--tertiary" aria-hidden="true"></i>+973 17204050</a>
                                <a href="mailto:contact@exhibition.bh" aria-label="Email us at contact@exhibition.bh" dir="ltr"><i class="ph ph-envelope-simple text--tertiary" aria-hidden="true"></i>contact@exhibition.bh</a>
                            </div>
                            <a href="#" target="_blank" aria-label="Contact Exhibition World Bahrain - Open in a new window" class="govbh-btn govbh-btn--outline" rel="noopener noreferrer">تواصل معنا <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                        </div>
                        <!-- Contct Box Only in <967 screen Ends -->

                    </div>
                    <!-- Content Ends -->
                </div>
            </div>
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
                <a href="events-ar.html" class="govbh-btn govbh-btn--withoutline govbh-btn--left-icon" aria-label="العودة إلى صفحة قائمة الخدمات"><i class="ph ph-arrow-elbow-left-up" aria-hidden="true"></i> العودة إلى قائمة الخدمات</a>
                <!-- Previous & Next Starts --> 
                <div class="govbh-prevnext-nav mt-4 govbh-content-box bg--light-brand">
                    <a href="#" class="govbh-prevnext-nav__item" aria-label="الحدث السابق: مشروع ممشى مدينة عيسى" rel="prev">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--left-icon"><i class="ph ph-arrow-left" aria-hidden="true"></i>السابق</div>
                        <div class="govbh-prevnext-nav__title govbh-fs-h6">مشروع ممشى مدينة عيسى</div>
                    </a>
                    <a href="#" class="govbh-prevnext-nav__item text-md-end text-sm-start text-start" aria-label=" الحدث القادم: مشروع مناقصات تطوير الحدائق العامة" rel="next">
                        <div class="govbh-btn govbh-btn--withoutline">التالي<i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        <div class="govbh-prevnext-nav__title govbh-fs-h6">مشروع مناقصات تطوير الحدائق العامة</div>
                    </a>
                </div>
                <!-- Previous & Next Ends --> 
            </div>
            <!-- Navigation Helper Ends -->

        </div>
    </article>
    <!-- Events Section Ends -->

    <!-- Related pages Section Starts -->
    <section class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
        <div class="container">
            <!-- Carousel Starts -->
            <div class="govbh-carousel"
                data-carousel="custom" 
                data-slidesperview-xxxs="1" 
                data-slidesperview-xxs="1" 
                data-slidesperview-xs="1" 
                data-slidesperview-md="2" 
                data-slidesperview-lg="3" 
                data-slidesperview-xl="3">
                <div class="row align-items-center mb-3">
                    <div class="col-md-6 col-sm-8 col-9"><h2 id="related-page-title" class="m-0">الفعاليات ذات الصلة</h2></div>
                    <div class="col-md-6 col-sm-4 col-3">
                        <!-- Navigation -->
                        <div class="govbh-general__navigation justify-content-end">
                            <div class="govbh-carousel__nav-prev govbh-general__navigation-arrow"><i class="ph ph-arrow-left" aria-hidden="true"></i></div>
                            <div class="govbh-carousel__nav-next govbh-general__navigation-arrow"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related Events Slider">
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
                                        <h3 id="events-card-1" class="govbh-card__title"><a href="#" aria-label="عرض المزيد: eCommerce Conference for SMEs">مؤتمر التجارة الإلكترونية للمؤسسات الصغيرة والمتوسطة</a></h3>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 20 - 23 مايو 2025</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i>10:00 صباحًا - 12:00 مساءً</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> مركز البحرين العالمي للمعارض </div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
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
                                        <h3 id="events-card-2" class="govbh-card__title"><a href="#" aria-label="عرض المزيد: eCommerce Conference for SMEs">منتدى باب البحرين</a></h3>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 23 مايو 2025</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i>10:00 صباحًا - 12:00 مساءً</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> فندق الفورسيزونز، خليج البحرين</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
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
                                        <h3 id="events-card-3" class="govbh-card__title"><a href="#" aria-label="عرض المزيد: eCommerce Conference for SMEs">ورشة ’الثقافة المؤسسية’</a></h3>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 25 مايو 2024</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 8:00 صباحًا - 2:00 مساءً</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> قاعة المجلس، غرفة البحرين</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
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
                                        <h3 id="events-card-4" class="govbh-card__title"><a href="#" aria-label="عرض المزيد: eCommerce Conference for SMEs">منتدى باب البحرين</a></h3>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 25 مايو 2024</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-clock" aria-hidden="true"></i> 8:00 صباحًا - 2:00 مساءً</div>
                                        <div class="govbh-card__date mb-2"><i class="ph ph-map-pin" aria-hidden="true"></i> قاعة المجلس، غرفة البحرين</div>
                                    </div>
                                </div>
                                <div class="govbh-card__foot pe-none">
                                    <div class="govbh-card__foot-button">
                                        <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
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
    </section>
    <!-- Related pages Section Ends -->


<?php 
include "includes/footer.php";
?>