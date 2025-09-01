<?php
include "../globals.php";
$page = 'success-stories';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">قصص النجاح</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>قصص النجاح</h1>
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

    <!-- Success Stories Section Starts -->
    <section class="govbh-section" aria-labelledby="success-page-title">
        <div class="container">
            <div class="govbh-abstract">
                <p class="mb-0">بناءً على تجاربكم وآرائكم تقوم حكومة مملكة البحرين بالاستجابة لكل ما يؤدي إلى رفع جودة الخدمات المقدمة للمواطنين والمقيمين وتحسين تجربة المستخدم عبر كافة القنوات. ستساعدك هذه القصص الملهمة على التعرف على التحديات والحلول التي تم مواجهتها ومعالجتها.</p>
            </div>
            <!-- Search Container Starts -->
            <form action="#" autocomplete="on" class="govbh-search-card bg--grey mt-4 mb-lg-5 mb-md-4 mb-4">
                <div class="govbh-search-card__title govbh-fs-h5 text--brand">ابحث عن قصة نجاح</div>
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
                                                <select class="with-search" data-placeholder-search="نوع البحث"
                                                    data-placeholder="اختر الفئة" data-columns="1" data-select-all="yes"
                                                    data-select-all-text="حدد الكل" data-unselect-all-text="إلغاء تحديد الكل"
                                                    data-selected-option-text="selected" multiple id="select-003">
                                                    <option value="1">الجوائز</option>
                                                    <option value="2">قيمة 1</option>
                                                    <option value="3">قيمة 3</option>
                                                    <option value="4">قيمة 4</option>
                                                    <option value="5">قيمة 5</option>
                                                    <option value="6">قيمة 6</option>
                                                    <option value="7">قيمة 7</option>
                                                </select>
                                                <label for="select-003">النوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div
                                                class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                <select class="with-search" data-placeholder-search="البحث عن سنة"
                                                    data-placeholder="اختر الفئة" data-columns="1" data-select-all="yes"
                                                    data-select-all-text="حدد الكل" data-unselect-all-text="إلغاء تحديد الكل"
                                                    data-selected-option-text="selected" multiple id="select-002">
                                                    <option value="1">12 مايو 2025</option>
                                                    <option value="2">2024</option>
                                                    <option value="3">2023</option>
                                                    <option value="4">2022</option>
                                                    <option value="5">2021</option>
                                                    <option value="6">2020</option>
                                                    <option value="7">2019</option>
                                                </select>
                                                <label for="select-002">تصفية حسب السنة</label>
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

            <!-- List Grid Starts -->
            <div role="region" aria-label="ابحث عن قصة نجاح">
                <!-- Title and Sort by Starts -->
                <div class="row align-items-center g-3 mb-4">
                    <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                        <h2 id="success-page-title" class="m-0">ابحث عن قصة نجاح</h2><!-- id comes from section aria-labelledby -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="d-flex justify-content-end gap-2">
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
                <div class="row g-4 mb-md-5 mb-sm-4 mb-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-1" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra" loading="lazy">
                                    <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-1" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">تطبيق "مواعيد" من فكرة إلى واقع</a></h3>
                                    <div class="govbh-card__paragraph">ضمن مساعي البحرين الحثيثة نحو التحول الرقمي الشامل، تم تدشين تطبيق "مواعيد" منصة موحدة لعرض وإدارة مواعيد مراكز الخدمة التابعة للجهات الحكومية في أي وقت</div>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-2" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra1" loading="lazy">
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-2" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">"تواصل” الحل الأمثل</a></h3>
                                    <div class="govbh-card__paragraph">دُشن نظام "تواصل" ليكون النقطة الفارقة في حل المشاكل والتحديات الإنسانية والاجتماعية العالقة لدى المواطنين، في وقت قياسي، وباستخدام سهل وميّسر للمستخدمين.</div>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-3" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra2" loading="lazy">
                                    <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-3" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">"التاجر"، تطبيق واحد لجميع الأعمال التجارية!</a></h3>
                                    <div class="govbh-card__paragraph">جاء هذا التطبيق استجابةً للكم الضخم من التعليقات والملاحظات التي تلقيناها بشأن الخطوات والإجراءات العديدة لعمليات التسجيل التجاري، إلى جانب المدفوعات الخاصة بالعملية، والتي تستهلك جميعها الكثير من الوقت والمجهود.</div>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-4" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra3" loading="lazy">
                                    <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-4" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">المرشد الآلي: خطط لبدء عملك التجاري بسهولة وفاعلية</a></h3>
                                    <div class="govbh-card__paragraph">لاحظت الوزارة وجود كم هائل من المعلومات المقدمة للمستخدمين في نظام السجلات والتراخيص التجارية "سجلات"، مما يجعل من الصعب على المستثمرين وأصحاب الأعمال استيعابها</div>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-5" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra4" loading="lazy">
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-5" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">أنتم طلبتم، ونحن استجبنا بتطبيق "مجتمع واعي"!</a></h3>
                                    <div class="govbh-card__paragraph">تم إطلاق تطبيق مجتمع واعي أثناء جائحة فيروس كورونا (كوفيد-19)، واستجابةً للعديد من المقترحات التي تم تلقيها عبر نظام "تواصل"</div>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <article role="region" aria-labelledby="stories-title-6" class="govbh-card govbh-card--with-image">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-image">
                                    <img src="../images/bader-sultan-jumma1.webp" width="623" height="351" alt="Develop New Power & Water Plant in Sitra5" loading="lazy">
                                </div>
                                <div class="govbh-card__head-content">
                                    <h3 id="stories-title-6" class="govbh-card__title"><a href="success-stories-detail.html" aria-label="Completed Project: Develop New Power & Water Plant in Sitra">خدمة الإجازات المرضية</a></h3>
                                    <div class="govbh-card__paragraph">تم تطبيق هذه الخدمة الإلكترونية استجابةً للاحتياجات والملاحظات التي تم رصدها، بهدف تقديم خدمة نوعية، بما يتوافق مع المتطلبات المختلفة، وتأتي هذه المبادرة لتحقيق توفير الجهد والوقت.</div>
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
            </div>

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
    <!-- Success Stories Section Ends -->

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
                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related pages Slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <article role="region" aria-labelledby="related-title-1"
                                class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-1" class="govbh-card__title"><a href="#"
                                                aria-label="Click here to open - Message from the President">الأنشطة الطلابية</a></h3>
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
                                                aria-label="Click here to open - History">البعثات والمنح الدراسية</a></h3>
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
                                                aria-label="Click here to open - Executive Profiles"> الدعم الحكومي</a>
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