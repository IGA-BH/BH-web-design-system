<?php
include "../globals.php";
$page = 'withsearch';
include "includes/header.php"; 
?>


    
    <!-- Fullwidth Search Banner Starts -->
    <div class="govbh-searchslider">
        <!-- BG Image -->
        <div class="govbh-searchslider__img">
            <picture>
                <source media="(min-width: 1200px)" srcset="../images/banner-001.webp"><!--1920*800 Default image-->
                <source media="(min-width: 992px)" srcset="../images/banner-001.webp"><!--1199*500-->
                <source media="(min-width: 768px)" srcset="../images/banner-001.webp"> <!--991*413-->
                <img src="../images/banner-001.webp" alt="Search The Website"><!--767*320-->
            </picture>
        </div>
        <!-- Content Section Starts -->
        <div class="container">
            <div class="govbh-searchslider__content">
                <h2 class="text-center">البحث في الموقع</h2>
                <div class="row g-2 pb-4 pt-4">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                        <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                            <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Text">
                            <label for="floatingInput">أدخل كلمتك الرئيسية</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-md-3 col-sm-4 col-12">
                        <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">بحث <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
                <p>ربما تريد البحث في المواضيع التالية:</p>
                <ul>
                    <li><a href="#">الهوية وجوازات السفر والتأشيرات</a></li>
                    <li><a href="#">حركة المرور والمركبات والنقل</a></li>
                    <li><a href="#">الكهرباء والمياه والبنية التحتية</a></li>
                    <li><a href="#">التعليم والطلاب</a></li>
                    <li><a href="#">المحاكم والتشريعات</a></li>
                    <li><a href="#">الصحة والرعاية الطبية</a></li>
                    <li><a href="#">الزواج والولادة والوفاة</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fullwidth Search Banner Ends -->
 
    <!-- e-Services Section Starts -->
    <div class="govbh-section">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-md-8 col-sm-8 col-12"><h2 class="m-0">الخدمات الإلكترونية</h2></div>
                <div class="col-md-4 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline z-1">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12">
                    <div class="govbh-tabs">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab" role="tablist">
                                <button class="govbh-tabs__list active" id="id-tabs-001" data-bs-toggle="tab" data-bs-target="#tabs-001" type="button" role="tab" aria-controls="tabs-001" aria-selected="true">عنصر علامة التبويب 01</button>
                                <button class="govbh-tabs__list" id="id-tabs-002" data-bs-toggle="tab" data-bs-target="#tabs-002" type="button" role="tab" aria-controls="tabs-002" aria-selected="false">عنصر علامة التبويب 02</button>
                                <button class="govbh-tabs__list"  id="id-tabs-003" data-bs-toggle="tab" data-bs-target="#tabs-003" type="button" role="tab" aria-controls="tabs-003" aria-selected="false">عنصر علامة التبويب 03</button>
                                <button class="govbh-tabs__list"  id="id-tabs-004" data-bs-toggle="tab" data-bs-target="#tabs-004" type="button" role="tab" aria-controls="tabs-004" aria-selected="false">عنصر علامة التبويب 04</button>
                                <button class="govbh-tabs__list"  id="id-tabs-005" data-bs-toggle="tab" data-bs-target="#tabs-005" type="button" role="tab" aria-controls="tabs-005" aria-selected="false">عنصر علامة التبويب 05</button>
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
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Application for Property Registration">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">طلب تسجيل الملكية</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="خدمات المواعيد عبر الإنترنت">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">خدمات المواعيد عبر الإنترنت</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">خدمات المسح العقاري</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">تعديلات القانون</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
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
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="خدمات المواعيد عبر الإنترنت">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">خدمات المواعيد عبر الإنترنت</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">خدمات المسح العقاري</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-card">
                                                    <div class="govbh-card__head">
                                                        <div class="govbh-card__head-icon">
                                                            <img src="../images/card-icon.svg" alt="Law Amendments">
                                                        </div>
                                                        <div class="govbh-card__head-content">
                                                            <div class="govbh-card__title"><a href="#">تعديلات القانون</a></div>
                                                            <div class="govbh-card__paragraph">تتيح هذه الخدمة للمستخدمين الحصول على موعد في SLRB للخدمات العقارية.</div>
                                                        </div>
                                                    </div>
                                                    <div class="govbh-card__foot">
                                                        <div class="govbh-card__foot-button">
                                                            <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                            <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-003" role="tabpanel" aria-labelledby="id-tabs-003" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 03"</div>
                            <div class="tab-pane fade" id="tabs-004" role="tabpanel" aria-labelledby="id-tabs-004" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 04"</div>
                            <div class="tab-pane fade" id="tabs-005" role="tabpanel" aria-labelledby="id-tabs-005" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 05"</div>
                            </div>
                    </div>
                </div>
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center">
                    <a href="#" class="govbh-btn govbh-btn--outline">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>          
        </div>
    </div>    
    <!-- e-Services Section Ends -->

    <!-- Vision Mission Section Starts -->
    <div class="govbh-section govbh-section--img-overlay" style="background: url(../images/banner-010.webp) no-repeat fixed top center / cover;">
        <div class="container position-relative z-2">
            <div class="govbh-tabs">
                <div class="govbh-tabs__head">
                    <div class="govbh-tabs__head-tabs govbh-tabs__head-tabs--border-dark" id="nav-tab1" role="tablist">
                        <button class="govbh-tabs__list active" id="id-tabs-about" data-bs-toggle="tab" data-bs-target="#tabs-about" type="button" role="tab" aria-controls="tabs-about" aria-selected="true">عن</button>
                        <button class="govbh-tabs__list" id="id-tabs-vision" data-bs-toggle="tab" data-bs-target="#tabs-vision" type="button" role="tab" aria-controls="tabs-vision" aria-selected="false">رؤية</button>
                        <button class="govbh-tabs__list"  id="id-tabs-mission" data-bs-toggle="tab" data-bs-target="#tabs-mission" type="button" role="tab" aria-controls="tabs-mission" aria-selected="false">مهمة</button>
                    </div>
                </div>            
                <div class="govbh-tabs__content " id="nav-tabContent1">
                    <div class="tab-pane fade show active pt-3" id="tabs-about" role="tabpanel" aria-labelledby="id-tabs-about" tabindex="0">
                       <div class="row g-lg-4 g-md-3 g-3">
                            <div class="col-lg-6 col-md-12 col-12 order-lg-1 oder-md-2 order-2">
                                <div class="govbh-content-block pe-lg-4 pe-md-0 pe-0">
                                    <h3>اسم الوزارة</h3>
                                    <div class="govbh-abstract text--primary">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet arcu volutpat, dictum lorem sollicitudin, finibus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <p>Nunc sagittis ipsum eget magna sollicitudin, lobortis faucibus orci elementum. Donec at augue a mi rutrum pharetra sit amet sit amet felis. Sed sed faucibus magna. Nulla egestas metus lacus, in consectetur ipsum dignissim in.</p>
                                    <a href="#" class="govbh-btn govbh-btn--outline mt-2">اقرأ المزيد <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 order-lg-2 oder-md-1 order-1">
                                <a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="aboutvideo" data-caption="اسم الوزارة" class="govbh-image-block">
                                    <img src="../images/banner-006.webp" alt="Name of the Ministry">
                                    <div class="govbh-image-block__playicon"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                </a>
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-vision" role="tabpanel" aria-labelledby="id-tabs-vision" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 02"</div>
                    <div class="tab-pane fade" id="tabs-mission" role="tabpanel" aria-labelledby="id-tabs-mission" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 03"</div>
                 </div>
            </div>
        </div>
    </div>    
    <!-- Vision Mission Section Ends -->

    <!-- Statistics Section Starts -->
    <div class="govbh-section theme--dark bg--brand">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-md-8 col-sm-8 col-12"><h2 class="m-0">إحصائيات</h2></div>
                <div class="col-md-4 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline theme--dark z-1">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12">
                    <div class="govbh-tabs govbh-tabs--vertical theme--dark">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab2" role="tablist">
                                <button class="govbh-tabs__list active" id="id-tabs-3311" data-bs-toggle="tab" data-bs-target="#tabs-3311" type="button" role="tab" aria-controls="tabs-3311" aria-selected="true">عنصر علامة التبويب 01</button>
                                <button class="govbh-tabs__list" id="id-tabs-3321" data-bs-toggle="tab" data-bs-target="#tabs-3321" type="button" role="tab" aria-controls="tabs-3321" aria-selected="false">عنصر علامة التبويب 02</button>
                                <button class="govbh-tabs__list"  id="id-tabs-3331" data-bs-toggle="tab" data-bs-target="#tabs-3331" type="button" role="tab" aria-controls="tabs-3331" aria-selected="false">عنصر علامة التبويب 03</button>
                                <button class="govbh-tabs__list"  id="id-tabs-3341" data-bs-toggle="tab" data-bs-target="#tabs-3341" type="button" role="tab" aria-controls="tabs-3341" aria-selected="false">عنصر علامة التبويب 04</button>
                            </div>
                        </div>            
                        <div class="govbh-tabs__content " id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="tabs-3311" role="tabpanel" aria-labelledby="id-tabs-3311" tabindex="0">
                                <div class="govbh-carousel"
                                    data-carousel="custom" 
                                    data-slidesperview-xxxs="1" 
                                    data-slidesperview-xxs="1" 
                                    data-slidesperview-xs="2" 
                                    data-slidesperview-md="2" 
                                    data-slidesperview-lg="2" 
                                    data-slidesperview-xl="3">
                                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="إجمالي المعاملات"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">إجمالي المعاملات <span data-tooltip="tooltip" title="إجمالي المعاملات"><i class="ph-bold ph-info" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="إجمالي المعاملات"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="45678" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">إجمالي المعاملات <span data-tooltip="tooltip" title="إجمالي المعاملات"><i class="ph-bold ph-info" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="إجمالي المعاملات"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="89" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">إجمالي المعاملات <span data-tooltip="tooltip" title="إجمالي المعاملات"><i class="ph-bold ph-info" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" tabindex="0" role="group">
                                                <div class="govbh-statistic govbh-statistic--vertical theme--dark">
                                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic-white.svg" alt="إجمالي المعاملات"></div>
                                                    <div class="govbh-statistic__content">
                                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                                        </div>
                                                        <div class="govbh-statistic__content-title">إجمالي المعاملات <span data-tooltip="tooltip" title="إجمالي المعاملات"><i class="ph-bold ph-info" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3321" role="tabpanel" aria-labelledby="id-tabs-3321" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 02"</div>
                            <div class="tab-pane fade" id="tabs-3331" role="tabpanel" aria-labelledby="id-tabs-3331" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 03"</div>
                            <div class="tab-pane fade" id="tabs-3341" role="tabpanel" aria-labelledby="id-tabs-3341" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 04"</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center">
                    <a href="#" class="govbh-btn govbh-btn--outline theme--dark">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- Tabs Vertical Starts -->
        </div>
    </div>
    <!-- Statistics Section Starts -->

    <!-- Laws & Regulations Section Starts -->
    <div class="govbh-section">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-md-8 col-sm-8 col-12"><h2 class="m-0">القوانين واللوائح</h2></div>
                <div class="col-md-4 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline z-1">جميع الخدمات الإلكترونية <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12">
                    <div class="govbh-carousel"
                    data-carousel="custom" 
                    data-slidesperview-xxxs="1" 
                    data-slidesperview-xxs="1" 
                    data-slidesperview-xs="1" 
                    data-slidesperview-md="1" 
                    data-slidesperview-lg="2" 
                    data-slidesperview-xl="2">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--card-file govbh-card--with-image">
                                        <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Card Image"></div>
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__title"><a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF">اكتساب البيانات ومعالجتها</a></div>
                                            <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                            <div class="govbh-card__paragraph">التقاط صور عالية الدقة لسطح الأرض باستخدام الطائرات بدون طيار أو الأقمار الصناعية.</div>
                                            <div class="govbh-card__foot">
                                                <a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></a>
                                                <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--card-file govbh-card--with-image">
                                        <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Card Image"></div>
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__title"><a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF">اكتساب البيانات ومعالجتها</a></div>
                                            <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                            <div class="govbh-card__paragraph">التقاط صور عالية الدقة لسطح الأرض باستخدام الطائرات بدون طيار أو الأقمار الصناعية.</div>
                                            <div class="govbh-card__foot">
                                                <a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></a>
                                                <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--card-file govbh-card--with-image">
                                        <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Card Image"></div>
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__title"><a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF">اكتساب البيانات ومعالجتها</a></div>
                                            <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                            <div class="govbh-card__paragraph">التقاط صور عالية الدقة لسطح الأرض باستخدام الطائرات بدون طيار أو الأقمار الصناعية.</div>
                                            <div class="govbh-card__foot">
                                                <a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></a>
                                                <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--card-file govbh-card--with-image">
                                        <div class="govbh-card__image"><img src="../images/banner-003.webp" alt="Card Image"></div>
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__title"><a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF">اكتساب البيانات ومعالجتها</a></div>
                                            <div class="govbh-card__date"><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                                            <div class="govbh-card__paragraph">التقاط صور عالية الدقة لسطح الأرض باستخدام الطائرات بدون طيار أو الأقمار الصناعية.</div>
                                            <div class="govbh-card__foot">
                                                <a href="../images/samplepdf.pdf" data-fancybox="pdfpop" data-caption="اكتساب البيانات ومعالجتها" aria-label="Preview PDF" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">معاينة <i class="ph ph-magnifying-glass" aria-hidden="true"></i></a>
                                                <a href="../images/samplepdf.pdf" target="_blank" class="govbh-btn govbh-btn--withoutline govbh-btn--medium z-1">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center pt-4">
                    <a href="#" class="govbh-btn govbh-btn--outline">جميع الخدمات الإلكترونية <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Laws & Regulations Section Starts -->

    <!-- Image Section Starts -->
    <div class="govbh-section p-0 govbh-image-parallax-fullwidth" style="background: url(../images/banner-010.webp) no-repeat fixed top center / cover;">
    </div>
    <!-- Image Section Ends -->

    <!-- Success Stories Section Starts -->
    <div class="govbh-section">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="govbh-content-block pe-lg-4 pe-md-0 pe-0">
                        <h2>قصص النجاح في الوزارة</h2>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو </p>
                        <a href="#" class="govbh-btn govbh-btn--outline mt-2 d-md-inline-flex d-sm-none d-none">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="govbh-carousel"
                        data-carousel="custom" 
                        data-slidesperview-xxxs="1" 
                        data-slidesperview-xxs="1" 
                        data-slidesperview-xs="1" 
                        data-slidesperview-md="1" 
                        data-slidesperview-lg="2" 
                        data-slidesperview-xl="2">
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/bader-sultan-jumma.webp" alt="Bader Sultan Jumma"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-pop" data-caption="بدر سلطان جمعة" aria-label="Video Popup">بدر سلطان جمعة</a></div>
                                                <div class="govbh-card__paragraph">وتتعلق التعديلات في البحرين عمومًا بإصلاحات قوانين العمل والضمان الاجتماعي وحماية العمال. </div>
                                            </div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/bader-sultan-jumma.webp" alt="بدر سلطان جمعة"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-pop" data-caption="بدر سلطان جمعة" aria-label="Video Popup">بدر سلطان جمعة</a></div>
                                                <div class="govbh-card__paragraph">وتتعلق التعديلات في البحرين عمومًا بإصلاحات قوانين العمل والضمان الاجتماعي وحماية العمال. </div>
                                            </div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/bader-sultan-jumma.webp" alt="بدر سلطان جمعة"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-pop" data-caption="بدر سلطان جمعة" aria-label="Video Popup">بدر سلطان جمعة</a></div>
                                                <div class="govbh-card__paragraph">وتتعلق التعديلات في البحرين عمومًا بإصلاحات قوانين العمل والضمان الاجتماعي وحماية العمال. </div>
                                            </div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/bader-sultan-jumma.webp" alt="Bader Sultan Jumma"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-pop" data-caption="بدر سلطان جمعة" aria-label="Video Popup">بدر سلطان جمعة</a></div>
                                                <div class="govbh-card__paragraph">وتتعلق التعديلات في البحرين عمومًا بإصلاحات قوانين العمل والضمان الاجتماعي وحماية العمال. </div>
                                            </div>
                                        </div>
                                        <div class="govbh-card__foot">
                                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                </div>        
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center pt-4">
                    <a href="#" class="govbh-btn govbh-btn--outline">عرض الكل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>       
            </div>
        </div>
    </div>
    <!-- Success Stories Section Ends -->

    <!-- Interactive Map Section Starts -->
    <div class="govbh-section theme--dark bg--brand">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-12"><h2 class="m-0">خريطة تفاعلية</h2></div>
                <div class="col-12">
                    <div class="govbh-tabs theme--dark">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab3" role="tablist">
                                <button class="govbh-tabs__list active" id="id-tabs-mapall" data-bs-toggle="tab" data-bs-target="#tabs-mapall" type="button" role="tab" aria-controls="tabs-mapall" aria-selected="true">الجميع</button>
                                <button class="govbh-tabs__list" id="id-tabs-customerservice" data-bs-toggle="tab" data-bs-target="#tabs-customerservice" type="button" role="tab" aria-controls="tabs-customerservice" aria-selected="false">مراكز خدمة العملاء</button>
                                <button class="govbh-tabs__list"  id="id-tabs-kiosks" data-bs-toggle="tab" data-bs-target="#tabs-kiosks" type="button" role="tab" aria-controls="tabs-kiosks" aria-selected="false">أكشاك</button>
                            </div>
                        </div>    
                        <div class="govbh-tabs__content " id="nav-tabContent3">
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
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">الفرع الرئيسي</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="#" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.26927662392161" 
                                            data-longitude="50.62991595727385" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">فرع المحرق</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="#" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.240135395584993" 
                                            data-longitude="50.58725003619814" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">فرع المنطقة الدبلوماسية</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/@26.2416703,50.5856836,1013m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.22969978294552" 
                                            data-longitude="50.53755845449137" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">فرع مجمع البحرين</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Bahrain+Mall/@26.2295025,50.5349621,1013m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3e49a566ec0aa9cb:0x3cf64707d54a0098!8m2!3d26.2294977!4d50.537537!16s%2Fm%2F0n8_y5m?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.168649182870194" 
                                            data-longitude="50.5560941621812" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">فرع مدينة عيسى</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Isa+Town/@26.1677633,50.5403013,8112m/data=!3m1!1e3!4m6!3m5!1s0x3e49ae98a8a7b6e9:0x8b0df595d912f782!8m2!3d26.1679752!4d50.5564742!16zL20vMDRxbmJf?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="govbh-map__container-location" 
                                            data-latitude="26.233553723803944" 
                                            data-longitude="50.55372830794713" 
                                            data-map-marker="../images/utilities/map-pin.svg">
                                            <div class="govbh-map__callout">
                                                <div class="govbh-map__callout-title">فرع السيف</div>
                                                <div class="govbh-map__callout-address">
                                                    <p>مبنى 517، طريق 1010، المنامة 410، العاصمة
                                                    ص.ب. صندوق بريد: 332، محافظة، مملكة البحرين</p>
                                                </div>
                                                <div class="govbh-map__callout-direction">
                                                    <a href="https://www.google.com/maps/place/Seef+Mall/@26.232505,50.531569,1013m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3e49a56880f11dd7:0x4c52a655ea06114c!8m2!3d26.2325003!4d50.5364399!16s%2Fm%2F05zxd3p?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="ph ph-map-pin" aria-hidden="true"></i>الحصول على الاتجاهات</a>
                                                </div>
                                                <div class="govbh-map__callout-social">
                                                    <a href="tel:+97317204050" dir="ltr"><i class="ph ph-phone" aria-hidden="true"></i>+973 17204050</a>
                                                    <a href="mailto:info@slrb.gov.bh" dir="ltr"><i class="ph ph-envelope-simple" aria-hidden="true"></i>info@slrb.gov.bh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="govbh-map__wrapper">
                                        <div class="govbh-map__filter">
                                            <div class="govbh-map__filter-close" role="button"><i class="ph-bold ph-list"></i></div>
                                            <form class="govbh-map__filter-form">
                                                <div class="govbh-map__filter-input">
                                                    <input type="text" id="mapfilter" aria-label="Enter your keyword" placeholder="أدخل كلمتك الرئيسية">
                                                    <button type="button" aria-label="Map filter submit"><i class="ph-bold ph-magnifying-glass"></i></button>
                                                </div>
                                            </form>
                                            <ul>
                                                <li class="active">الفرع الرئيسي</li>
                                                <li>فرع المحرق</li>
                                                <li>فرع المنطقة الدبلوماسية</li>
                                                <li>فرع مجمع البحرين</li>
                                                <li>فرع مدينة عيسى</li>
                                                <li>فرع السيف</li>
                                            </ul>
                                        </div>
                                        <div id="govbh-map__render" class="govbh-map__output"></div>
                                    </div>
                                </div>
                                <!-- Map Container Ends -->
                            </div>
                            <div class="tab-pane fade" id="tabs-customerservice" role="tabpanel" aria-labelledby="id-tabs-customerservice" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 02"</div>
                            <div class="tab-pane fade" id="tabs-kiosks" role="tabpanel" aria-labelledby="id-tabs-kiosks" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 03"</div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Interactive Map Section Ends -->

    <!-- Knowledge Center Section Starts -->
    <div class="govbh-section">
        <div class="container">
            <h2>Knowledge Center</h2>
            <div class="govbh-tabs">
                <div class="govbh-tabs__head">
                    <div class="govbh-tabs__head-tabs" id="nav-tab4" role="tablist">
                        <button class="govbh-tabs__list active" id="id-tabs-faq" data-bs-toggle="tab" data-bs-target="#tabs-faq" type="button" role="tab" aria-controls="tabs-faq" aria-selected="true">الأسئلة الشائعة</button>
                        <button class="govbh-tabs__list" id="id-tabs-publications" data-bs-toggle="tab" data-bs-target="#tabs-publications" type="button" role="tab" aria-controls="tabs-publications" aria-selected="false">المنشورات</button>
                        <button class="govbh-tabs__list"  id="id-tabs-userguide" data-bs-toggle="tab" data-bs-target="#tabs-userguide" type="button" role="tab" aria-controls="tabs-userguide" aria-selected="false">دليل المستخدم</button>
                    </div>
                </div>            
                <div class="govbh-tabs__content pb-0" id="nav-tabContent4">
                    <div class="tab-pane fade show active" id="tabs-faq" role="tabpanel" aria-labelledby="id-tabs-faq" tabindex="0">
                        <!-- Accordion Starts -->
                        <div class="govbh-accordion" id="faqaccordion">
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-001" aria-expanded="false" >
                                    ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها? 
                                    </button>
                                </div>
                                <div id="flush-001" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                    <div class="govbh-accordion__item-content">ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-002" aria-expanded="false" >
                                    الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل
                                    </button>
                                </div>
                                <div id="flush-002" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                    <div class="govbh-accordion__item-content">يعتبر المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي والمسح الطبوغرافي والمسح الهيدروغرافي وتسجيل المعاملات العقارية وحماية الملكية العقارية في مملكة البحرين، بالإضافة إلى إدارة وصيانة وتجميع المعلومات المكانية الأساسية في هذه المناطق.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-003" aria-expanded="false" >
                                    هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                    </button>
                                </div>
                                <div id="flush-003" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                    <div class="govbh-accordion__item-content">يعتبر المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي والمسح الطبوغرافي والمسح الهيدروغرافي وتسجيل المعاملات العقارية وحماية الملكية العقارية في مملكة البحرين، بالإضافة إلى إدارة وصيانة وتجميع المعلومات المكانية الأساسية في هذه المناطق.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-004" aria-expanded="false" >
                                    هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على
                                    </button>
                                </div>
                                <div id="flush-004" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->
                    </div>
                    <div class="tab-pane fade" id="tabs-publications" role="tabpanel" aria-labelledby="id-tabs-publications" tabindex="0">
                        <!-- Accordion Starts -->
                        <div class="govbh-accordion" id="faqaccordion1">
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-008" aria-expanded="false" aria-controls="flush-008">
                                    الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل
                                    </button>
                                </div>
                                <div id="flush-008" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion1">
                                    <div class="govbh-accordion__item-content">يعتبر المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي والمسح الطبوغرافي والمسح الهيدروغرافي وتسجيل المعاملات العقارية وحماية الملكية العقارية في مملكة البحرين، بالإضافة إلى إدارة وصيانة وتجميع المعلومات المكانية الأساسية في هذه المناطق.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-009" aria-expanded="false" aria-controls="flush-009">
                                    هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                    </button>
                                </div>
                                <div id="flush-009" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion1">
                                    <div class="govbh-accordion__item-content">يعتبر المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي والمسح الطبوغرافي والمسح الهيدروغرافي وتسجيل المعاملات العقارية وحماية الملكية العقارية في مملكة البحرين، بالإضافة إلى إدارة وصيانة وتجميع المعلومات المكانية الأساسية في هذه المناطق.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-010" aria-expanded="false" aria-controls="flush-010">
                                    هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على
                                    </button>
                                </div>
                                <div id="flush-010" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion1">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->
                    </div>
                    <div class="tab-pane fade" id="tabs-userguide" role="tabpanel" aria-labelledby="id-tabs-userguide" tabindex="0">
                        <!-- Accordion Starts -->
                        <div class="govbh-accordion" id="faqaccordion2">
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-011" aria-expanded="false" aria-controls="flush-011">
                                    هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على
                                    </button>
                                </div>
                                <div id="flush-011" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion2">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-012" aria-expanded="false" aria-controls="flush-012">
                                    Quisque luctus ligula a aliquet tempor. Vestibulum suscipit dignissim lacinia?
                                    </button>
                                </div>
                                <div id="flush-012" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion2">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-013" aria-expanded="false" aria-controls="flush-013">
                                    Maecenas pretium eros nisl, in sodales massa hendrerit?
                                    </button>
                                </div>
                                <div id="flush-013" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion2">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                            <div class="govbh-accordion__item">
                                <div class="govbh-accordion__item-head">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-014" aria-expanded="false" aria-controls="flush-014">
                                    Ut augue nisi, condimentum nec dolor vel, dapibus dignissim nunc?
                                    </button>
                                </div>
                                <div id="flush-014" class="govbh-accordion__item-body collapse" data-bs-parent="#faqaccordion2">
                                    <div class="govbh-accordion__item-content">يعد المكتب الجهة الرسمية المختصة بتنظيم وتسجيل وتوثيق كافة السجلات والشهادات المتعلقة بالخدمات المكانية والعقارية المتمثلة في مسح الأراضي.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Knowledge Center Section Ends -->

    <!-- Events Section Starts -->
    <div class="govbh-section theme--dark bg--brand">
        <div class="container">
            <div class="row gy-md-3 gy-sm-2 gy-2">
                <div class="col-md-8 col-sm-8 col-12"><h2 class="m-0">Calendar of Events</h2></div>
                <div class="col-md-4 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline theme--dark z-1">All Events <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12">
                    <div class="govbh-tabs theme--dark">
                        <div class="govbh-tabs__head">
                            <div class="govbh-tabs__head-tabs" id="nav-tab5" role="tablist">
                                <button class="govbh-tabs__list active" id="id-tabs-ongoing" data-bs-toggle="tab" data-bs-target="#tabs-ongoing" type="button" role="tab" aria-controls="tabs-ongoing" aria-selected="true">Ongoing events</button>
                                <button class="govbh-tabs__list" id="id-tabs-upcoming" data-bs-toggle="tab" data-bs-target="#tabs-upcoming" type="button" role="tab" aria-controls="tabs-upcoming" aria-selected="false">Upcoming events</button>
                                <button class="govbh-tabs__list"  id="id-tabs-previous" data-bs-toggle="tab" data-bs-target="#tabs-previous" type="button" role="tab" aria-controls="tabs-previous" aria-selected="false">Previous events</button>
                            </div>
                        </div>    
                        <div class="govbh-tabs__content " id="nav-tabContent5">
                            <div class="tab-pane fade show active" id="tabs-ongoing" role="tabpanel" aria-label="id-tabs-ongoing" tabindex="0">
                                <div class="govbh-carousel"
                                data-carousel="custom" 
                                data-slidesperview-xxxs="1" 
                                data-slidesperview-xxs="1" 
                                data-slidesperview-xs="1" 
                                data-slidesperview-md="2" 
                                data-slidesperview-lg="3" 
                                data-slidesperview-xl="3">
                                <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-card govbh-card--with-image">
                                                <div class="govbh-card__head pb-sm-0 pb-2">
                                                    <div class="govbh-card__head-image">
                                                        <img src="../images/banner-006.webp" alt="Lorem ipsum dolor sit amet">
                                                    </div>
                                                    <div class="govbh-card__head-content">
                                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 05-06 May 2024, 8-9 PM</div>
                                                        <div class="govbh-card__title"><a href="#">Lorem ipsum dolor sit amet</a></div>
                                                    </div>
                                                </div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-card__foot-button">
                                                        <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-card govbh-card--with-image">
                                                <div class="govbh-card__head pb-sm-0 pb-2">
                                                    <div class="govbh-card__head-image">
                                                        <img src="../images/banner-007.webp" alt="Consectetur adipiscing elit">
                                                    </div>
                                                    <div class="govbh-card__head-content">
                                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 05-06 May 2024, 8-9 PM</div>
                                                        <div class="govbh-card__title"><a href="#">Consectetur adipiscing elit</a></div>
                                                    </div>
                                                </div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-card__foot-button">
                                                        <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-card govbh-card--with-image">
                                                <div class="govbh-card__head pb-sm-0 pb-2">
                                                    <div class="govbh-card__head-image">
                                                        <img src="../images/banner-008.webp" alt="Lorem ipsum dolor sit amet">
                                                    </div>
                                                    <div class="govbh-card__head-content">
                                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 05-06 May 2024, 8-9 PM</div>
                                                        <div class="govbh-card__title"><a href="#">Lorem ipsum dolor sit amet</a></div>
                                                    </div>
                                                </div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-card__foot-button">
                                                        <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" tabindex="0" role="group">
                                            <div class="govbh-card govbh-card--with-image">
                                                <div class="govbh-card__head pb-sm-0 pb-2">
                                                    <div class="govbh-card__head-image">
                                                        <img src="../images/card-img.png" alt="Consectetur adipiscing elit">
                                                    </div>
                                                    <div class="govbh-card__head-content">
                                                        <div class="govbh-card__date mb-2"><i class="ph ph-calendar-check" aria-hidden="true"></i> 05-06 May 2024, 8-9 PM</div>
                                                        <div class="govbh-card__title"><a href="#">Consectetur adipiscing elit</a></div>
                                                    </div>
                                                </div>
                                                <div class="govbh-card__foot">
                                                    <div class="govbh-card__foot-button">
                                                        <a href="#" class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">ابدأ الآن <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                        <a href="#" class="govbh-btn govbh-btn--withoutline govbh-btn--medium">تفاصيل <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pagination -->
                                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-upcoming" role="tabpanel" aria-labelledby="id-tabs-upcoming" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 02"</div>
                            <div class="tab-pane fade" id="tabs-previous" role="tabpanel" aria-labelledby="id-tabs-previous" tabindex="0">هذه هي منطقة المحتوى لعلامة التبويب "علامة التبويب العنصر 03"</div>
                        </div>  
                    </div>
                </div>
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center">
                    <a href="#" class="govbh-btn govbh-btn--outline theme--dark">All Events <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div> 
            </div>
        </div>
    </div>
    <!-- Events Section Ends -->

    <!-- Three Column Section Starts -->
    <div class="govbh-section govbh-section--padding-l bg--grey">
        <div class="govbh-carousel"
            data-carousel="custom" 
            data-slidesperview-xxxs="1" 
            data-slidesperview-xxs="1" 
            data-slidesperview-xs="2" 
            data-slidesperview-md="2" 
            data-slidesperview-lg="3" 
            data-slidesperview-xl="3">
            <div class="container">
                <div class="swiper govbh-carousel__slider" aria-roledescription="carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" tabindex="0" role="group">
                            <div class="govbh-card-horizontal">
                                <img src="../images/utilities/ekey.svg" alt="eKey">
                                <div class="govbh-card-horizontal__content">
                                    <a href="#">حساب eKey</a>
                                    <p>تسجيل دخولك الموحد والبسيط والآمن إلى جميع الخدمات الإلكترونية الحكومية</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <div class="govbh-card-horizontal">
                                <img src="../images/utilities/govbh-emblem.svg" alt="Emblem">
                                <div class="govbh-card-horizontal__content">
                                    <a href="#">البوابة الوطنية</a>
                                    <p>متجر شامل يسهل الوصول إلى جميع الخدمات الإلكترونية</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" tabindex="0" role="group">
                            <div class="govbh-card-horizontal">
                                <img src="../images/utilities/tawasul-icon.svg" alt="Tawasul Emblem">
                                <div class="govbh-card-horizontal__content">
                                    <a href="#">تواصل</a>
                                    <p>النظام الوطني للاقتراحات والشكاوى</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="govbh-carousel__nav-pagination govbh-theme__pagination govbh-align-center mt-3"></div>
                </div>
            </div>   
        </div> 
    </div>
    <!-- Three Column Section Ends -->

    <!-- Media Section Starts -->
    <div class="govbh-section">
        <div class="container">
            <!-- Polls Section Starts -->
            <div class="govbh-polls theme--dark bg--brand mb-md-5 mb-sm-4 mb-3">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="govbh-polls__icon">
                            <img src="../images/utilities/voting.svg" alt="Opinion Poll">
                        </div>
                        <div class="govbh-polls__title">
                            <h2>استطلاع رأي</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="govbh-polls__content">
                            <div class="govbh-abstract"><p>ما هو الجانب من الوزارة الذي تعتقد أنه يحتاج إلى المزيد من التحسين؟</p></div>
                            <form action="#">
                                <div class="govbh-form-control form-check theme--dark">      
                                    <div id="checklabel7" class="form-check__group form-check__group--horizontal">                        
                                        <div class="form-check__item">
                                            <input type="radio" id="radi1" name="options1" value="1">
                                            <label for="radi1">خدمة العملاء</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radi2" name="options1"  value="2">
                                            <label for="radi2">دعم التدريب</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radi3" name="options1"  value="3">
                                            <label for="radi3">البيئة والمسؤولية الاجتماعية</label>
                                        </div>                       
                                        <div class="form-check__item">
                                            <input type="radio" id="radi4" name="options1"  value="4">
                                            <label for="radi4">الموارد البشرية</label>
                                        </div>                       
                                    </div>
                                    <!-- <div class="govbh-form-control__validation-message"><i class="ph ph-warning"></i> Error Text</div> -->
                                </div>  
                                <div class="d-flex flex-wrap gap-3 pt-3">
                                    <button type="button" class="govbh-btn govbh-btn--primary theme--dark">يُقدِّم</button>
                                    <a href="#" class="govbh-btn govbh-btn--withoutline theme--dark">نتائج الاستطلاع السابق <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Polls Section Ends -->
            <!-- News Slider Section Starts -->
            <div class="row align-items-center gy-3">
                <div class="col-md-8 col-sm-8 col-12"><h2 class="m-0">مركز الاعلام</h2></div>
                <div class="col-md-4 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline z-1">كل الأخبار <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-12">
                    <div class="govbh-newscard__swiper swiper" aria-roledescription="carousel">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto" role="group">
                            <div class="govbh-newscard">
                                <div class="govbh-newscard__image">
                                    <div data-swiper-parallax-x="-80%">
                                        <img src="../images/banner-009.webp" alt="News Card Image">
                                    </div>
                                </div>
                                <div class="govbh-newscard__content">
                                    <div class="govbh-newscard__content-head">
                                        <div data-swiper-parallax-x="0%" data-swiper-parallax-opacity="0">
                                            <div class="govbh-newscard__date"><span>أحدث الأخبار</span> 26 يناير 2025</div>
                                        </div>
                                        <div data-swiper-parallax-x="-12%">
                                            <div class="govbh-newscard__title">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</div>
                                        </div>
                                        <div data-swiper-parallax-x="-14%">
                                            <div class="govbh-newscard__paragraph">ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-newscard__content-foot" data-swiper-parallax-x="-20%">
                                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">اقرأ الأخبار <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto" role="group">
                            <div class="govbh-newscard">
                                <div class="govbh-newscard__image">
                                    <div data-swiper-parallax-x="-80%">
                                        <img src="../images/banner-001.webp" alt="News Card Image">
                                    </div>
                                </div>
                                <div class="govbh-newscard__content">
                                    <div class="govbh-newscard__content-head">
                                        <div data-swiper-parallax-x="0%" data-swiper-parallax-opacity="0">
                                            <div class="govbh-newscard__date"><span>Latest News</span> 26 January 2025</div>
                                        </div>
                                        <div data-swiper-parallax-x="-12%">
                                            <div class="govbh-newscard__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                        <div data-swiper-parallax-x="-14%">
                                            <div class="govbh-newscard__paragraph">التقى معالي الدكتور محمد بن مبارك جمعة وزير التربية والتعليم رئيس مجلس أمناء مجلس التعليم العالي، على هامش أعمال الدورة، وفداً من جامعة ديبول برئاسة الدكتور روبرت مانويل رئيس الجامعة.</div>
                                        </div>
                                    </div>
                                    <div class="govbh-newscard__content-foot" data-swiper-parallax-x="-20%">
                                        <div class="govbh-btn govbh-btn--withoutline govbh-btn--medium">اقرأ الأخبار <i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                        </div>
                        <div class="govbh-newscard__swiper-pagination govbh-theme__pagination govbh-align-center mt-4" role="group" tabindex="0" aria-label="Slider Controls"></div>
                    </div>
                </div>
                <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center pt-4 mt-0">
                    <a href="#" class="govbh-btn govbh-btn--outline">كل الأخبار <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>           
            <!-- News Slider Section Ends -->
            <!-- Photos & Videos Section Starts -->
            <div class="row gy-md-3 gy-sm-2 gy-2 pt-5">
                <div class="col-md-6 col-sm-8 col-12"><h2 class="m-0">الصور والفيديوهات</h2></div>
                <div class="col-md-6 col-sm-4 col-12 d-md-flex d-sm-none d-none justify-content-end">
                    <a href="#" class="govbh-btn govbh-btn--outline z-1">جميع الصور والفيديوهات <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
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
                        <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/card-img.png" alt="Photo Caption 1"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">5 مايو 2024</div>
                                                <div class="govbh-card__title"><a href="../images/card-img.png" data-fancybox="gallery-01" data-caption="Photo Caption 1" aria-label="Photo Popup">تعليق الصورة 1</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/img-001.webp" alt="Video Caption 2"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">5 مايو 2024</div>
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-01" data-caption="Video Caption 2" aria-label="Video Popup">شرح الفيديو 2</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/banner-011.webp" alt="Photo Caption 3"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">5 مايو 2024</div>
                                                <div class="govbh-card__title"><a href="../images/banner-011.webp" data-fancybox="gallery-02" data-caption="Photo Caption 1" aria-label="Photo Popup">تعليق الصورة 3</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FancyBox Gallery -->
                                <div class="d-none">
                                    <a data-fancybox="gallery-02" aria-label="Photos" data-caption="Law Amendments" href="../images/banner-001.webp" data-thumb="../images/banner-001.webp"></a>
                                    <a data-fancybox="gallery-02" aria-label="Photos" data-caption="Law Amendments" href="../images/banner-002.webp" data-thumb="../images/banner-002.webp"></a>
                                </div>
                                </div>
                                <div class="swiper-slide" tabindex="0" role="group">
                                    <div class="govbh-card govbh-card--with-image">
                                        <div class="govbh-card__head">
                                            <div class="govbh-card__head-image">
                                                <img src="../images/banner-007.webp" alt="Video Caption 4"><!-- 400x200 -->
                                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="govbh-card__head-content">
                                                <div class="govbh-card__date">5 مايو 2024</div>
                                                <div class="govbh-card__title"><a href="https://www.youtube.com/watch?v=Qp0_6AcGmCg" data-fancybox="video-02" data-caption="Video Caption 4" aria-label="Video Popup">شرح الفيديو 4</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-12 d-md-none d-sm-flex d-flex justify-content-center pt-4">
                        <a href="#" class="govbh-btn govbh-btn--outline">جميع الصور والفيديوهات <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- Photos & Videos Section Ends -->
        </div>
    </div>
    <!-- Media Section Starts -->

    <!-- Usefull Links Section Starts -->
    <div class="govbh-section govbh-section--padding-m bg--grey govbh-usefullinks" data-carousel="usefullinks">
        <div class="container">
            <h2 class="pb-2">Useful Links</h2>
            <div class="swiper govbh-carousel__usefullinks">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/utilities/survey-and-land-registration-bureau.svg" alt="Survey & Land Registration Bureau">
                        </a>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/utilities/ewa.svg" alt="Electricity & Water Affairs">
                        </a>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/utilities/tawasul-dark.svg" alt="Tawasul">
                        </a>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/utilities/ministry-of-education.svg" alt="Ministry of Education">
                        </a>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/2030.svg" alt="Electricity & Water Affairs">
                        </a>
                    </div>
                    <div class="swiper-slide" tabindex="0" role="group">
                        <a href="#">
                            <img src="../images/utilities/tawasul-dark.svg" alt="Tawasul">
                        </a>
                    </div>
                </div>
                <div class="govbh-carousel__nav-pagination govbh-theme__pagination govbh-align-center mt-4"></div>
            </div>
        </div>    
    </div>
    <!-- Usefull Links Section Ends -->


<?php 
include "includes/footer.php";
?>