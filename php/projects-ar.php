<?php
include "../globals.php";
$page = 'projects';
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
                    <li class="govbh-breadcrumb__item-last" aria-current="page">المشاريع</li>
                </ul>
            </nav>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <h1>المشاريع</h1>
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

<!-- Project Section Starts -->
<section class="govbh-section" aria-labelledby="projects-page-title">
    <div class="container">
        <div class="govbh-abstract">
            <p class="mb-0">في هذه الصفحة، نسلّط الضوء على أبرز المشاريع التي تنفذها الجهة لتحقيق رؤيتها وأهدافها الاستراتيجية. تعرف على المبادرات والمشاريع التي تُسهم في التنمية وتلبي احتياجات المجتمع.</p>
        </div>
        <!-- Search Container Starts -->
        <form action="#" autocomplete="on" class="govbh-search-card bg--grey mt-4 mb-lg-5 mb-md-4 mb-4">
            <div class="govbh-search-card__title govbh-fs-h5 text--brand">البحث عن مشروع</div>
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
                                <legend class="visually-hidden">حقول البحث المتقدم</legend>
                                <div class="row g-4">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="Search a Category"
                                                data-placeholder="Select Category" data-columns="1" data-select-all="yes"
                                                data-select-all-text="Select All" data-unselect-all-text="Unselect All"
                                                data-selected-option-text=" selected" multiple id="select-002">
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 1</option>
                                                <option value="3">Value 3</option>
                                                <option value="4">Value 4</option>
                                                <option value="5">Value 5</option>
                                                <option value="6">Value 6</option>
                                                <option value="7">Value 7</option>
                                            </select>
                                            <label for="select-002">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="Search a Category"
                                                data-placeholder="Select Category" data-columns="1" data-select-all="yes"
                                                data-select-all-text="Select All" data-unselect-all-text="Unselect All"
                                                data-selected-option-text="selected" multiple id="select-003">
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 1</option>
                                                <option value="3">Value 3</option>
                                                <option value="4">Value 4</option>
                                                <option value="5">Value 5</option>
                                                <option value="6">Value 6</option>
                                                <option value="7">Value 7</option>
                                            </select>
                                            <label for="select-003">Category</label>
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
        <div role="region" aria-label="جميع المشاريع">
            <!-- Title and Sort by Starts -->
            <div class="row align-items-center g-3 mb-4">
                <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                    <h2 id="projects-page-title" class="m-0">جميع المشاريع</h2><!-- id comes from section aria-labelledby -->
                </div>
                <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12" aria-labelledby="sort-options">
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
                    <article role="region" aria-labelledby="project-title-1" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-018.webp">
                                    <img src="../images/banner-018.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">1 مايو 2024<span class="govbh-card__status--completed">مكتمل </span></div>
                                <h3 id="project-title-1" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Completed Project: Develop New Power & Water Plant in Sitra">كورنيش البسيتين</a></h3>
                                <div class="govbh-card__paragraph">إنشاء ممشى كجزء من مشاريع البلديات، يشمل مسارات مشي ومساحات خضراء ومرافق خدمية، ويُعدّ وجهة ترفيهية وسياحية في منطقة المحرق .</div>
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
                    <article role="region" aria-labelledby="project-title-2" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-019.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-019.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-019.webp">
                                    <img src="../images/banner-019.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra One" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">23 فبراير 2023<span class="govbh-card__status--progress">في تقدم</span></div>
                                <h3 id="project-title-2" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Progress Project: Develop New Power & Water Plant in Sitra">واجهة جنوب سار</a></h3>
                                <div class="govbh-card__paragraph">إنشاء بلازا في جنوب سار بالمحافظة الشمالية، والتي تشمل اكشاك والمسطحات الخضراء، وأرضيات المشي ومواقف السيارات.​يستطيع الزوار التنزه و الجلوس وسط المسطحات الخضراء، في بأسلوب وطراز معماري وفني يراعي جمال العمارة الحديثة.</div>
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
                    <article role="region" aria-labelledby="project-title-3" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-020.webp">
                                    <img src="../images/banner-020.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra two" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">15 ديسمبر 2022<span class="govbh-card__status--completed">مكتمل</span></div>
                                <h3 id="project-title-3" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Completed Project: Develop New Power & Water Plant in Sitra">حديقة وممشى مدينة زايد</a></h3>
                                <div class="govbh-card__paragraph">يتكون المشروع من ممشى ترفيهي مطل على منطقة هورة عالي الزراعية يصل طوله 800 متر ، تبلغ  مساحة المشروع 11,800 متر مربع. يساهم في تجميل وزيادة الرقعة الخضراء تبلغ الساحات الخضراء حوالي 830 متر مربع وأحواض زراعية و العاب بالإضافة إلى أجهزة احماء رياضية ومسارات خاصة لذوي الهمم ومنصات مشاركة الدراجات الهوائية للاستثمار</div>
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
                    <article role="region" aria-labelledby="project-title-4" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-021.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-021.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-021.webp">
                                    <img src="../images/banner-021.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra 4" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">8 اغسطس 2023<span class="govbh-card__status--progress">في تقدم</span></div>
                                <h3 id="project-title-4" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Progress Project: Develop New Power & Water Plant in Sitra">تطوير عين الحنينية</a></h3>
                                <div class="govbh-card__paragraph">تعتبر عين الحنينية من أقدم العيون الموجودة في المملكة ومن منطلق حرص المحافظة على الحفاظ على تأهيل وتطوير العيون الأثرية. لإبراز العيون التاريخية وتحويلها إلى مشاريع خدمية تحافظ على تاريخها وهويتها الاجتماعية وتكون مقصدا للأهالي والزوار .يعد هذا المشروع واحد كم اهم المشاريع التنموية و الحضارية التي تبنتها المحافظة حيث انه هذا المشروع ،ووجه بالحفاظ علي الحديقة والعين وتحسين الوضع بها، بالتنسيق مع بلدية المنطقة الجنوبية​</div>
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
                    <article role="region" aria-labelledby="project-title-5" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-020.webp">
                                    <img src="../images/banner-020.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra 5" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">20 مارس 2020<span class="govbh-card__status--completed">مكتمل</span></div>
                                <h3 id="project-title-5" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Completed Project: Develop New Power & Water Plant in Sitra">حديقة المحرق الكبرى</a></h3>
                                <div class="govbh-card__paragraph">إنشاء حديقة المحرق الكبرى  والتي تقع على مساحة تبلغ حوالي 9 هكتار تحتوي على عدة مكونات ترفيهية متنوعة ، فقد خصصت منطقة لألعاب الاطفال ، إلى جانب توفير جلسات عائلية مظللة . كما يحيط بالحديقة ممشى بطول 1 كيلومتر يساهم في الربط بين كافة عناصر الحديقة . كذلك روعي تجهيز المنطقة الخضراء المفتوحة المتعددة الاستخدام إلى جانب تزويد الحديقة بأنواع متخلفة من الاشجار والاغطية النباتية والشجيرات . بالإضافة إلى توفير عدد 493 موقف للسيارات والمباني الخدمية.</div>
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
                    <article role="region" aria-labelledby="project-title-6" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-019.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-019.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-019.webp">
                                    <img src="../images/banner-019.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra 6" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">14 2022<span class="govbh-card__status--progress">في تقدم</span></div>
                                <h3 id="project-title-6" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Progress Project: Develop New Power & Water Plant in Sitra">ممشى مدينة حمد 1212</a></h3>
                                <div class="govbh-card__paragraph">يتكون المشروع من ممشى ترفيهي مطل على منطقة هورة عالي الزراعية يصل طوله 800 متر ، تبلغ  مساحة المشروع 11,800 متر مربع. يساهم في تجميل وزيادة الرقعة الخضراء تبلغ الساحات الخضراء حوالي 830 متر مربع وأحواض زراعية و العاب بالإضافة إلى أجهزة احماء رياضية ومسارات خاصة لذوي الهمم ومنصات مشاركة الدراجات الهوائية للاستثمار</div>
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
                    <article role="region" aria-labelledby="project-title-7" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-020.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-020.webp">
                                    <img src="../images/banner-020.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra 7" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">5 ابريل 2023<span class="govbh-card__status--hold">معلق</span></div>
                                <h3 id="project-title-7" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Onhold Project: Develop New Power & Water Plant in Sitra">ممشى سعود الفيصل</a></h3>
                                <div class="govbh-card__paragraph">تطويرممشى الأمير سعود الفيصل ليتضمن مضامير للمشى بطول 3 كلم و الجري و اول مسار الدرجات الهوائية بطول 2.5كلم و المساحات الخضراء 25000متر مربع ومنطقة للألعاب الرياضية و منطقة للألعاب مجانية و غير مجانية و مواقف سيارات و مرفأ للصيادين و تركيب مصابيح إنارة تعمل بالطاقة الشمسية و تم تركيب شجرة لتوليد الطاقة الكهربائية و كراسي تعمل بالطاقة الشمسية</div>
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
                    <article role="region" aria-labelledby="project-title-8" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-018.webp">
                                    <img src="../images/banner-018.webp" width="623" height="351"
                                        alt="Develop New Power & Water Plant in Sitra" loading="lazy">
                                </picture>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date mb-1">1 مايو 2024<span class="govbh-card__status--awarded">تم ترسية المشروع</span></div>
                                <h3 id="project-title-8" class="govbh-card__title"><a href="projects-detail.html"
                                        aria-label="Awarded Project: Develop New Power & Water Plant in Sitra">كورنيش البسيتين</a></h3>
                                <div class="govbh-card__paragraph">إنشاء ممشى كجزء من مشاريع البلديات، يشمل مسارات مشي ومساحات خضراء ومرافق خدمية، ويُعدّ وجهة ترفيهية وسياحية في منطقة المحرق .</div>
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
<!-- Project Section Ends -->

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