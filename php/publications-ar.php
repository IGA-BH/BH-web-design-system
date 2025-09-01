<?php
include "../globals.php";
$page = 'publications';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">المنشورات</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>المنشورات</h1>
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

    <!-- Publications Section Starts -->
    <section class="govbh-section" aria-labelledby="publications-page-title">
        <div class="container">
            <!-- Search Container Starts -->
            <form action="#" autocomplete="on" class="govbh-search-card bg--grey mb-lg-5 mb-md-4 mb-4">
                <div class="govbh-search-card__title govbh-fs-h5 text--brand">البحث عن منشور</div>
                <div class="govbh-search-card__head">
                    <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                        <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                        <input type="search" class="form-control" id="floatingInput" aria-label="أدخل كلمة البحث" placeholder="">
                        <label for="floatingInput">أدخل كلمة البحث </label>
                    </div>
                    <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">بحث <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                </div>
                 <div class="row g-2 m-0">
                    <div class="col-12">
                        <div class="govbh-advanced-search">
                            <button type="button" class="govbh-advanced-search__head govbh-toggler m-0" data-target-on="#advancesearch" aria-expanded="false">
                                <i class="ph-fill ph-caret-down" aria-hidden="true"></i> <span>إظهار</span> البحث المتقدم
                            </button>
                            <div class="govbh-advanced-search__body" id="advancesearch" style="display:none;">
                                <fieldset>
                                    <legend class="visually-hidden">Advanced Search Field</legend>
                                    <div class="row g-4">
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                <select class="with-search" 
                                                data-placeholder-search="فئة البحث" 
                                                data-placeholder="اختر الفئة" 
                                                data-columns="1" 
                                                data-select-all="yes" 
                                                data-select-all-text="حدد الكل" 
                                                data-unselect-all-text="إلغاء تحديد الكل"
                                                data-selected-option-text=" selected" 
                                                multiple id="select-002">
                                                    <option value="1">قيمة 1</option>
                                                    <option value="2">قيمة 1</option>
                                                    <option value="3">قيمة 3</option>
                                                    <option value="4">قيمة 4</option>
                                                    <option value="5">قيمة 5</option>
                                                    <option value="6">قيمة 6</option>
                                                    <option value="7">قيمة 7</option>
                                                </select>
                                                <label for="select-002">البحث عن طريق</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                <select class="with-search" 
                                                data-placeholder-search="فئة البحث" 
                                                data-placeholder="اختر الفئة" 
                                                data-columns="1" 
                                                data-select-all="yes"
                                                data-select-all-text="حدد الكل" 
                                                data-unselect-all-text="إلغاء تحديد الكل"
                                                data-selected-option-text="selected" 
                                                multiple id="select-003">
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
                                            <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">بحث <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
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
            <div role="region" aria-label="جميع المنشورات">
                <!-- Title and Sort by Starts -->
                <div class="row align-items-center g-3 mb-4">
                    <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                        <h2 id="publications-page-title" class="m-0">جميع المنشورات</h2><!-- id comes from section aria-labelledby -->
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
                <!-- List Grid Starts -->
                <div class="row g-4 mb-md-5 mb-sm-4 mb-4">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-1" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-1" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                    <div><i class="ph ph-globe" aria-hidden="true"></i> باللغة الإنجليزية فقط</div>
                                </div>
                                <div class="govbh-card__paragraph">وثيقة تحدد الإطار العام لاستخدام تقنيات الذكاء الاصطناعي في الجهات الحكومية، بما يعزز الكفاءة والابتكار ويضمن الاستخدام المسؤول والأخلاقي.</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-2" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-2" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                </div>
                                <div class="govbh-card__paragraph">مرجع موحد يهدف إلى رفع جودة تجربة المتعاملين مع الجهات الحكومية، من خلال معايير وإجراءات واضحة لتقديم خدمات متميزة للمواطنين والمقيمين.</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-3" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-3" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                </div>
                                <div class="govbh-card__paragraph">يوضح هذا الدليل الخطوات الرسمية لتسجيل وإصدار شهادات الميلاد والوفيات في المملكة، لضمان دقة البيانات وسهولة الوصول إلى الخدمات.</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-4" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-4" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                    <div><i class="ph ph-globe" aria-hidden="true"></i> باللغة الإنجليزية فقط</div>
                                </div>
                                <div class="govbh-card__paragraph">تسليط الضوء على دور السياحة كمحرك اقتصادي حيوي في المملكة، من خلال تحليل مساهمتها في الناتج المحلي وخلق فرص العمل.</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-5" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-5" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                </div>
                                <div class="govbh-card__paragraph">فعالية افتراضية جمعت نخبة من الخبراء الإقليميين لتبادل المعرفة حول التحول الرقمي، والتحديات والفرص في مجال الحكومة الإلكترونية.</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <article role="region" aria-labelledby="report-title-6" class="govbh-card govbh-card--card-file govbh-card--with-image">
                            <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Data Acquisition and Processing 4" width="304" height="394" loading="lazy"></div>
                            <div class="govbh-card__head">
                                <h3 id="report-title-6" class="govbh-card__title">
                                    <a href="../images/samplepdf.pdf" class="cbbox-publication" data-cb-gallery="cbbox-publication" data-cb-type="pdf" aria-label="معاينة: نموذج إثبات الملكية، PDF، ١٣ ميجابايت، ٨ صفحات" title="السياسة العامة لاستخدام الذكاء الاصطناعي">السياسة العامة لاستخدام الذكاء الاصطناعي</a>    
                                </h3>
                                <div class="govbh-card__date govbh-card__date--year">
                                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                    <div><i class="ph ph-calendar-check" aria-hidden="true"></i> 2024</div>
                                </div>
                                <div class="govbh-card__paragraph">التقاط صور عالية الدقة لسطح الأرض باستخدام الطائرات بدون طيار أو الأقمار الصناعية</div>
                                <div class="govbh-card__foot">
                                    <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1 pe-none">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                                    <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1" aria-label="تحميل: نموذج إثبات الملكية، ملف PDF، 13 ميجابايت، 8 صفحات">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- List Grid Ends -->
            </div>

            <!-- Pagination Starts -->
            <div class="govbh-pagination">
                <nav aria-label="تصفح الصفحات">
                    <ul>
                        <li class="govbh-pagination__prev"><a href="#" aria-label="First Page" rel="first"><i class="ph ph-caret-double-left"></i> <span>الأولى</span></a></li>
                        <li class="govbh-pagination__prev"><a href="#" aria-label="Previous Page" rel="prev"><i class="ph ph-caret-left"></i> <span>السابقة</span></a></li>
                        <li><a href="#" aria-label="Page 1">1</a></li>
                        <li><a href="#" aria-label="Page 2">2</a></li>
                        <li class="govbh-pagination__current" aria-current="page" title="Page 3">3</li>
                        <li class="govbh-pagination__truncate" title="Pages">...</li>
                        <li><a href="#" aria-label="Page 4">4</a></li>
                        <li class="govbh-pagination__next"><a href="#" aria-label="Next Page" rel="next"><span>التالية</span> <i class="ph ph-caret-right"></i></a></li>
                        <li class="govbh-pagination__next"><a href="#" aria-label="Last Page" rel="last"><span>الأخيرة</span> <i class="ph ph-caret-double-right"></i></a></li>
                    </ul>
                </nav>
                <div class="govbh-pagination__info">عرض 2 إلى 10 من 100 سجل</div>               
            </div>
            <!-- Pagination Ends -->
            <!-- Publication Ends -->

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
        </div>
    </section>
    <!-- Publications Section Ends -->

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
                    <div class="col-md-6 col-sm-8 col-9"><h2 id="related-page-title" class="m-0">الصفحات ذات الصلة</h2></div>
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
                                        <h3 id="related-title-1" class="govbh-card__title"><a href="#" aria-label="Click here to open - Message from the President">رسالة من الرئيس</a></h3>
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
                            <article role="region" aria-labelledby="related-title-2" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-2" class="govbh-card__title"><a href="#" aria-label="Click here to open - History">تاريخ</a></h3>
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
                            <article role="region" aria-labelledby="related-title-3" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-3" class="govbh-card__title"><a href="#" aria-label="Click here to open - Executive Profiles">الملفات التنفيذية</a></h3>
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
                            <article role="region" aria-labelledby="related-title-4" class="govbh-card govbh-card--icon-without-circle">
                                <div class="govbh-card__head">
                                    <div class="govbh-card__head-content">
                                        <h3 id="related-title-4" class="govbh-card__title"><a href="#" aria-label="Click here to open - Ministry Overview">نظرة عامة على الوزارة</a></h3>
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
            </div>
        </div>
    </section>
    <!-- Related pages Section Ends -->


<?php 
include "includes/footer.php";
?>