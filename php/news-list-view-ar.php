<?php
include "../globals.php";
$page = 'news-list-view';
include "includes/header.php";
?>

<!-- Breadcrumb Starts -->
<section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
    <div class="container">
        <div class="row g-2 align-items-center">
            <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                <ul class="govbh-breadcrumb__group">
                    <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i
                                class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                    <li><a href="#" aria-label="Go to media">المركز الإعلامي</a></li>
                    <li class="govbh-breadcrumb__item-last" aria-current="page">الأخبار</li>
                </ul>
            </nav>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <h1>الأخبار</h1>
            </div>
            <div
                class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
                    <div class="govbh-sharethis__title">شارك هذه الصفحة:</div>
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

<!-- News Section Starts -->
<section class="govbh-section" aria-labelledby="news-section-title">
    <h2 id="news-section-title" class="visually-hidden">الأخبار</h2>
    <div class="container">
        <!-- Search Container Starts -->
        <form action="#" autocomplete="on" class="govbh-search-card bg--grey mb-lg-5 mb-md-4 mb-4">
            <div class="govbh-search-card__title govbh-fs-h5 text--brand">بحث عن الأخبار</div>
            <div class="govbh-search-card__head">
                <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                    <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                    <input type="search" class="form-control" id="floatingInput" aria-label="أدخل كلمة البحث" placeholder="">
                    <label for="floatingInput">أدخل كلمة البحث </label>
                </div>
                <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">بحث <i
                        class="ph ph-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="row g-2 m-0">
                <div class="col-12">
                    <div class="govbh-advanced-search">
                        <button type="button" class="govbh-advanced-search__head govbh-toggler m-0"
                            data-target-on="#advancesearch" aria-expanded="false">
                            <i class="ph-fill ph-caret-down" aria-hidden="true"></i> <span>إظهار</span> البحث المتقدم
                        </button>
                        <div class="govbh-advanced-search__body" id="advancesearch" style="display:none;">
                            <fieldset>
                                <legend class="visually-hidden">Advanced Search Field</legend>
                                <div class="row g-4">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="فئة البحث"
                                                data-placeholder="اختر السنة" data-columns="1" data-select-all="yes"
                                                data-select-all-text="حدد الكل" data-unselect-all-text="إلغاء تحديد الكل"
                                                data-selected-option-text=" selected" multiple id="select-002">
                                                <option value="1">2025</option>
                                                <option value="2">2024</option>
                                                <option value="3">2023</option>
                                                <option value="4">2022</option>
                                                <option value="5">2021</option>
                                                <option value="6">2020</option>
                                                <option value="7">2019</option>
                                            </select>
                                            <label for="select-002">الفرز بحسب العام</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="فئة البحث"
                                                data-placeholder="اختر الفئة" data-columns="1" data-select-all="yes"
                                                data-select-all-text="حدد الكل" data-unselect-all-text="إلغاء تحديد الكل"
                                                data-selected-option-text="selected" multiple id="select-003">
                                                <option value="1">قيمة 1</option>
                                                <option value="2">قيمة 1</option>
                                                <option value="3">قيمة 3</option>
                                                <option value="4">قيمة 4</option>
                                                <option value="5">قيمة 5</option>
                                                <option value="6">قيمة 6</option>
                                                <option value="7">قيمة 7</option>
                                            </select>
                                            <label for="select-003">اختر الفئة</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="govbh-btn govbh-btn--primary"
                                            aria-label="Click here to search">بحث <i class="ph ph-arrow-right"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Search Container Ends -->

        <!-- Featured News Starts -->
        <a href="news-detail-page.html" class="govbh-newscard" aria-labelledby="featured-news-title">
            <div class="govbh-newscard__image">
                <picture>
                    <source media="(min-width: 1200px)" srcset="../images/banner-009.webp">
                    <source media="(min-width: 992px)" srcset="../images/banner-009.webp">
                    <source media="(min-width: 768px)" srcset="../images/banner-009.webp">
                    <img src="../images/banner-009.webp" width="634" height="358"
                        alt="Latest News: Lorem ipsum dolor sit amet, consectetur adipiscing elit" loading="lazy">
                </picture>
            </div>
            <div class="govbh-newscard__content">
                <div class="govbh-newscard__content-head">
                    <div class="govbh-newscard__date"><span>أحدث الأخبار</span> 26 يناير 2025</div>
                    <h2 id="featured-news-title" class="govbh-newscard__title">خلال حضور معاليه حفل تدشين الهوية الجديدة لإحدى البنوك".. معالي الوزير: مملكة البحرين تولي اهتمامًا كبيرًا بمواصلة تطوير القطاع المالي والمصرفي</h2>
                    <div class="govbh-newscard__paragraph">أكد معالي الوزير أن مملكة البحرين تولي اهتمامًا كبيرًا بمواصلة تطوير القطاع المالي والمصرفي عبر تهيئة كافة السبل وتوفير المقومات التي تعزّز من كفاءة أدائه ليواصل إسهاماته في دعم النمو الاقتصادي بما يواكب متطلبات التنمية والاستدامة تعزيزًا لمكانة المملكة كمركزٍ مالي عالمي، مشيرًا معاليه إلى أهمية الاستمرار في توظيف الإبداع والابتكار في مسارات التطوير لفتح آفاقٍ جديدة على صعيد الخدمات المالية والمصرفية </div>
                </div>
                <div class="govbh-newscard__content-foot">
                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">اقرأ الخبر <i
                            class="ph ph-arrow-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </a>
        <!-- Featured News Ends -->

        <!-- Title and Sort by Starts -->
        <div class="row align-items-center g-3 mt-4 mb-4">
            <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-4 col-sm-12 col-12">
                <h2 class="m-0">كل الأخبار</h2>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12">
                <div class="d-flex justify-content-end gap-2">
                    <!-- View Toggle Starts -->
                    <div class="govbh-view-toggle d-md-flex d-sm-none d-none" role="group"
                        aria-label="Switch the display of cards">
                        <a href="news.html" class="govbh-view-toggle__list" data-view="grid"
                            aria-label="عرض شبكي" data-tooltip="tooltip" title="عرض شبكي" role="button"><i
                                class="ph ph-squares-four" aria-hidden="true"></i></a>
                        <a href="news-list-view.html" class="govbh-view-toggle__list govbh-view-toggle--active"
                            data-view="list" aria-label="عرض قائم" data-tooltip="tooltip"
                            title="عرض قائم" aria-pressed="true" role="button"><i class="ph ph-list-bullets" aria-hidden="true"></i></a>
                    </div>
                    <!-- View Toggle Ends -->
                    <div class="visually-hidden" id="sort-options">خيار الفرز</div>
                    <div class="govbh-form-control form-floating govbh-form-control--select"
                        aria-labelledby="sort-options">
                        <select class="form-select select2" id="select-001" name="select-001">
                            <option value="0">اختر خيار الفرز</option>
                            <option value="1">الاسم تصاعديًا</option>
                            <option value="2">الاسم تنازليًا</option>
                        </select>
                        <label for="select-001">الترتيب حسب</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title and Sort by Ends -->
        <!-- List Starts -->
        <div class="govbh-newscard-list">
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-008.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-008.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-008.webp">
                        <img src="../images/banner-008.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">في إطار الزيارة الرسمية لسمو ولي العهد رئيس مجلس الوزراء لأمريكا وبحضور الوزير رئيس مجلس إدارة احدى الشركات الحكومية.. التوقيع على اتفاقية لتزويد شركة الطيران بـ 18طائرة بوينج</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير، رئيس مجلس إدارة احدى الشركات، أن العلاقات الثنائية التي تربط مملكة البحرين والولايات المتحدة الأمريكية الصديقة، والتي تمتد لأكثر من 130 عامًا، تستند إلى أسس راسخة من العمل المشترك 
</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-026.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-026.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-026.webp">
                        <img src="../images/banner-026.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur2" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">معالي الوزير يلتقي سفير جمهورية كوريا لدى مملكة البحرين بمناسبة انتهاء فترة عمله</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير، على ما يجمع مملكة البحرين وجمهورية كوريا الصديقة من علاقات تعاون متميزة في كافة المجالات، مشيراً معاليه إلى أهمية مواصلة تعزيز مسارات العمل والتنسيق المشترك بين البلدين الصديقين.</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-027.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-027.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-027.webp">
                        <img src="../images/banner-027.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur3" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">معالي الوزير يلتقي سفير جمهورية بنغلاديش الشعبية لدى مملكة البحرين</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير على أهمية مواصلة تعزيز العلاقات الثنائية بين مملكة البحرين وجمهورية بنغلاديش الشعبية الصديقة. جاء ذلك لدى لقاء معالي الوزير، سعادة سفير جمهورية بنغلاديش الشعبية لدى مملكة البحرين، وذلك بمناسبة تعيينه سفيراً لبلاده لدى المملكة.</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-028.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-028.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-028.webp">
                        <img src="../images/banner-028.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur4" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">وكيل الوزارة يترأس وفد مملكة البحرين في الاجتماع السنوي العاشر للبنك للاستثمار في البنية التحتية</h3>
                        <div class="govbh-newscard__paragraph">ترأس سعادة الوكيل، بحضور سعادة سفير مملكة البحرين لدى جمهورية الصين الشعبية، وفد مملكة البحرين المشارك في الاجتماع السنوي العاشر للبنك للاستثمار في البنية التحتية، والذي عقد في العاصمة الصينية بكين تحت عنوان "الربط من أجل التنمية والتعاون من أجل الازدهار.</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-029.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-029.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-029.webp">
                        <img src="../images/banner-029.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur5" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">في إطار مشاركة وفد مملكة البحرين في منتدى سانت بطرسبرغ الاقتصادي الدولي 2025.. معالي الوزير يلتقي الوزير الروسي</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير على متانة العلاقات الثنائية التي تجمع مملكة البحرين وروسيا الاتحادية وما تشهده من تقدم ونمو، لافتاً معاليه إلى أهمية مواصلة تطوير مسارات التعاون والتنسيق الثنائي بين البلدين بما يلبي الأهداف والتطلعات المنشودة</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-022.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-022.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-022.webp">
                        <img src="../images/banner-022.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur6" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">في إطار الزيارة الرسمية لسمو ولي العهد رئيس مجلس الوزراء إلى المملكة المتحدة.. معالي الوزير يلتقي عمدة الحي المالي لمدينة لندن</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير على ما يجمع مملكة البحرين والمملكة المتحدة الصديقة من علاقاتٍ تاريخيةٍ وثيقة وشراكة استراتيجية متميزة.</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-030.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-030.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-030.webp">
                        <img src="../images/banner-030.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur7" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title">معالي الوزير يستقبل سفير الولايات المتحدة الأمريكية لدى مملكة البحرين</h3>
                        <div class="govbh-newscard__paragraph">أكد معالي الوزير، على عمق العلاقات التاريخية والشراكة الاستراتيجية المتميزة التي تجمع مملكة البحرين والولايات المتحدة الأمريكية الصديقة، وما تشهده من تطور مستمر في مختلف المجالات، لا سيما في المجالين المالي والاقتصادي</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
            <a href="news-detail-page.html" class="govbh-newscard-listview">
                <div class="govbh-newscard__image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="../images/banner-031.webp">
                        <source media="(min-width: 992px)" srcset="../images/banner-031.webp">
                        <source media="(min-width: 768px)" srcset="../images/banner-031.webp">
                        <img src="../images/banner-031.webp" width="623" height="351"
                            alt="Lorem ipsum dolor sit amet consectetur7" loading="lazy">
                    </picture>
                </div>
                <div class="govbh-newscard__content">
                    <div class="govbh-newscard__content-head">
                        <div class="govbh-newscard__date"><i class="ph ph-calendar-check" aria-hidden="true"></i> 26
                            يناير 2025</div>
                        <h3 class="govbh-newscard__title"> معالي الوزير يترأس وفد مملكة البحرين في الاجتماع (123) للجنة التعاون المالي والاقتصادي بمجلس التعاون لدول الخليج العربية</h3>
                        <div class="govbh-newscard__paragraph">ترأس معالي الوزير وفد مملكة البحرين المشارك في الاجتماع (123) للجنة التعاون المالي والاقتصادي بمجلس التعاون لدول الخليج العربية، والمنعقد في دولة الكويت الشقيقة، بمشاركة أصحاب المعالي</div>
                    </div>
                    <div class="govbh-newscard__content-foot">
                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium text-decoration-none">اقرأ الخبر <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- List Ends -->
        <!-- Pagination Starts -->
        <div class="govbh-pagination">
            <nav aria-label="تصفح الصفحات">
                <ul>
                    <li class="govbh-pagination__prev"><a href="#" aria-label="First Page" rel="first"><i
                                class="ph ph-caret-double-left"></i> <span>الأولى</span></a></li>
                    <li class="govbh-pagination__prev"><a href="#" aria-label="Previous Page" rel="prev"><i
                                class="ph ph-caret-left"></i> <span>السابقة</span></a></li>
                    <li><a href="#" aria-label="Page 1">1</a></li>
                    <li><a href="#" aria-label="Page 2">2</a></li>
                    <li class="govbh-pagination__current" aria-current="page" title="Page 3">3</li>
                    <li class="govbh-pagination__truncate" title="Pages">...</li>
                    <li><a href="#" aria-label="Page 4">4</a></li>
                    <li class="govbh-pagination__next"><a href="#" aria-label="Next Page" rel="next"><span>التالية</span> <i
                                class="ph ph-caret-right"></i></a></li>
                    <li class="govbh-pagination__next"><a href="#" aria-label="Last Page" rel="last"><span>الأخيرة</span> <i
                                class="ph ph-caret-double-right"></i></a></li>
                </ul>
            </nav>
            <div class="govbh-pagination__info">عرض 2 إلى 10 من 100 سجل</div>
        </div>
        <!-- Pagination Ends -->

        <div class="hr mb-3"></div><!-- Horizontal Line -->
        <!-- Share & Last updated content Starts -->
        <div class="row g-2">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="govbh-sharethis" role="region" aria-label="Share this page on Social Media" tabindex="0">
                    <div class="govbh-sharethis__title">شارك هذه الصفحة:</div>
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
            <div
                class="col-md-6 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-last-updated" role="region" tabindex="0" aria-labelledby="last-updated-date">
                    <p id="last-updated-date" class="govbh-text--medium m-0">شارك هذه الصفحة: <b>29 يونيو 2025</b></p>
                </div>
            </div>
        </div>
        <!-- Share & Last updated content Ends -->
    </div>
</section>
<!-- News Section Ends -->

<!-- Related pages Section Starts -->
<section class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
    <div class="container">
        <!-- Carousel Starts -->
        <div class="govbh-carousel" data-carousel="custom" data-slidesperview-xxxs="1" data-slidesperview-xxs="1"
            data-slidesperview-xs="2" data-slidesperview-md="2" data-slidesperview-lg="3" data-slidesperview-xl="3">
            <div class="row align-items-center mb-3">
                <div class="col-md-6 col-sm-8 col-9">
                    <h2 id="related-page-title" class="m-0">الصفحات ذات الصلة</h2>
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
                        <article role="region" aria-labelledby="related-title-1"
                            class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 id="related-title-1" class="govbh-card__title"><a href="#"
                                            aria-label="Click here to open - Message from the President">رسالة من
                                            الرئيس</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <article role="region" aria-labelledby="related-title-2"
                            class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 id="related-title-2" class="govbh-card__title"><a href="#"
                                            aria-label="Click here to open - History">تاريخ</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <article role="region" aria-labelledby="related-title-3"
                            class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 id="related-title-3" class="govbh-card__title"><a href="#"
                                            aria-label="Click here to open - Executive Profiles">الملفات التنفيذية</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <article role="region" aria-labelledby="related-title-4"
                            class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 id="related-title-4" class="govbh-card__title"><a href="#"
                                            aria-label="Click here to open - Ministry Overview">نظرة عامة على
                                            الوزارة</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">عرض المزيد <i
                                            class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i>
                                </div>
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