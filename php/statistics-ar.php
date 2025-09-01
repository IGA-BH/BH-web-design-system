<?php
include "../globals.php";
$page = 'statistics';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">إحصائيات</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>إحصائيات</h1>
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

    <!-- Statistics Section Starts -->
    <section class="govbh-section" aria-labelledby="statistics-page-title">
        <div class="container">
            <!-- Title and Sort by Starts -->
            <div class="row align-items-center g-3 mb-4">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <h2 id="statistics-page-title" class="m-0">إحصائيات الوزارة</h2>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <form action="#" autocomplete="on" class="row d-flex justify-content-lg-end justify-content-md-start justify-content-start g-md-2 g-sm-3 g-3" role="group" aria-labelledby="filter-label">
                        <h3 id="filter-label" class="visually-hidden">تصفية إحصائيات الوزارة</h3>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="govbh-form-control form-floating govbh-form-control--select">
                                <select class="form-select select-toggler" id="select-001" name="select-001" data-target-on="#enabledataofbirth" data-matched-value="5">
                                    <option value="1">آخر 7 أيام</option>
                                    <option value="2">آخر 15 يومًا</option>
                                    <option value="3">الشهر الماضي</option>
                                    <option value="4">السنة الماضية</option>
                                    <option value="5">تاريخ مخصص</option>
                                </select>
                                <label for="select-001">تصفية حسب الفترة</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="enabledataofbirth" style="display: none;">
                            <div class="govbh-form-control form-floating govbh-form-control--icon-right govbh-form-control--datefield">
                                <div class="form-floating__ico"><i class="ph ph-calendar-blank"></i></div>
                                <input type="text" class="form-control daterangepicker-control" id="singledaterange" name="singledaterange" placeholder="Select Date Range" aria-label="Input field">
                                <label for="singledaterange">تاريخ مخصص<span>*</span></label>         
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex gap-2">
                            <button type="button" class="govbh-btn govbh-btn--primary govbh-btn--full-width" aria-label="Click here to apply filter">تطبيق</button>
                            <button type="reset" class="govbh-btn govbh-btn--outline govbh-btn--full-width text-nowrap" aria-label="Reset filters">إعادة ضبط</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Title and Sort by Ends -->

             <!-- row starts -->
            <div class="row gy-5">
                <div class="col-12">
                    <!-- Table Layout Starts -->
                    <div class="govbh-content-box govbh-border-grey" role="region" aria-labelledby="statistics-heading-1" tabindex="0">
                        <h3 id="statistics-heading-1" class="text--brand mb-0">الإحصائيات في تخطيط الجدول</h3>
                        <!-- Data Table Starts -->
                        <div class="govbh-datatable"
                        data-target-table-id="#refOffersTable1"
                        data-show-filter-fields="true"
                        data-show-length-change="true"
                        data-show-ordering="true"
                        data-show-info="true"
                        data-responsive="false"
                        data-show-paging="true"
                        data-columns-to-hide=""
                        data-search-placeholder-text="البحث..."
                        data-pagination-info-text="عرض _START_ ل _END_ ل _TOTAL_ المدخلات"
                        data-filter-show-menu-text="عرض _MENU_ المدخلات"
                        >   
                            <!-- .dt-filters starts -->
                            <div class="dt-filters">
                                <!-- .dt-filter-item starts -->
                                <span
                                    class="dt-filter-item" 
                                    data-column="3"
                                    data-label="تصفية حسب الجنسية"
                                    data-default-val="جميع الجنسيات"
                                    >
                                </span>
                                <!-- .dt-filter-item ends -->
                            </div>
                            <!-- .dt-filters ends -->
                            <!-- table starts -->
                            <table class="govbh-datatable__table table" id="refOffersTable1" tabindex="0">
                                <caption class="visually-hidden">الإحصائيات في تخطيط الجدول</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">اسم</th>
                                        <th scope="col">عمر</th>
                                        <th scope="col">يوم الميلاد</th>
                                        <th scope="col">جنسية</th>
                                        <th scope="col">رخصة القيادة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>بدر سلطان جمعة</b></a>
                                        </td>
                                        <td>18</td>
                                        <td>12/12/1981</td>
                                        <td>بحريني</td>
                                        <td>
                                            <div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div>
                                        </td>                          
                                    </tr>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>محمد علي</b></a>
                                        </td>
                                        <td>19</td>
                                        <td>12/12/1965</td>
                                        <td>سعودي</td>
                                        <td>
                                            <div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div>
                                        </td>                          
                                    </tr>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>حسن سلطان جمعة</b></a>
                                        </td>
                                        <td>22</td>
                                        <td>12/12/1945</td>
                                        <td>Qatar</td>
                                        <td>
                                            <div class="govbh-datatable__table--failure"><i class="ph-bold ph-x-circle"></i> لا</div>
                                        </td>                          
                                    </tr>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>محمد علي</b></a>
                                        </td>
                                        <td>22</td>
                                        <td>12/12/1945</td>
                                        <td>سعودي</td>
                                        <td>
                                            <div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div>
                                        </td>                          
                                    </tr>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>بدر سلطان جمعة</b></a>
                                        </td>
                                        <td>18</td>
                                        <td>12/12/1981</td>
                                        <td>بحريني</td>
                                        <td>
                                            <div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div>
                                        </td>                          
                                    </tr>
                                    <tr>
                                        <td class="govbh-datatable__table--bold">
                                            <a href="#"><b>محمد علي</b></a>
                                        </td>
                                        <td>19</td>
                                        <td>12/12/1965</td>
                                        <td>سعودي</td>
                                        <td>
                                        <div class="govbh-datatable__table--failure"><i class="ph-bold ph-x-circle"></i> لا</div>
                                        </td>                          
                                    </tr>
                                </tbody>
                            </table>
                            <!-- table ends -->
                        </div>
                        <!-- Data Table Ends -->
                    </div>
                    <!-- Table Layout Ends -->
                </div>
                <div class="col-12">
                    <!-- Statistics in Figures Starts -->
                    <div class="govbh-content-box bg--light-brand" role="region" aria-labelledby="statistics-heading-2" tabindex="0">
                        <h3 id="statistics-heading-2" class="text--brand">إحصائيات بالأرقام</h3>
                        <div class="row g-md-2 g-sm-4 g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/infographic.svg" alt="Statistics in Figures" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="123456" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">المعاملات <a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/pictograph.svg" alt="Statistics in Figures 1" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="98" data-status="yes" aria-hidden="true">98</div><div class="opendata-count-sign">%</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">نسبه النمو <a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/pictograph1.svg" alt="Statistics in Figures 2" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="3456" data-status="yes" aria-hidden="true">0</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">المشاريع <a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-md-flex d-sm-none d-none">
                                <div class="hr"></div><!-- Horizontal Line -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/pictograph2.svg" alt="Statistics in Figures 3" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="456123" data-status="yes" aria-hidden="true">0</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">عدد زوار الموقع <a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/pictograph3.svg" alt="Statistics in Figures 4" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="56300" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">BHD</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">إلايرادات <a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__icon"><img src="../images/utilities/pictograph4.svg" alt="Statistics in Figures 5" width="64" height="64"></div>
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="99" data-status="yes" aria-hidden="true">0</div><div class="opendata-count-sign">%</div>
                                        </div>
                                        <div class="govbh-statistic__content-title">الأثر الاجتماعي	<a href="#" role="button" data-tooltip="tooltip" title="إجمالي المعاملات" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics in Figures Ends -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- Statistics Progress Starts -->
                    <div class="govbh-content-box govbh-border-grey h-100" role="region" aria-labelledby="statistics-heading-3" tabindex="0">
                        <h3 id="statistics-heading-3" class="text--brand">إحصائيات في أشرطة التقدم</h3>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="govbh-progress govbh-progress--brand" role="progressbar" aria-label="Statistics in Progress Bars 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="govbh-progress__head">نسبة التبرعات المحققة <span>50%</span></div>
                                    <div class="govbh-progress__container">
                                        <div class="govbh-progress__bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-progress govbh-progress--brand" role="progressbar" aria-label="Statistics in Progress Bars 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <div class="govbh-progress__head">نسبة إكمال المشروع <span>85%</span></div>
                                    <div class="govbh-progress__container">
                                        <div class="govbh-progress__bar" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-progress govbh-progress--brand" role="progressbar" aria-label="Statistics in Progress Bars 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <div class="govbh-progress__head">معدل التطوع السنوي <span>80%</span></div>
                                    <div class="govbh-progress__container">
                                        <div class="govbh-progress__bar" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-progress govbh-progress--brand" role="progressbar" aria-label="Statistics in Progress Bars 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                    <div class="govbh-progress__head">رضا المستفيدين <span>78%</span></div>
                                    <div class="govbh-progress__container">
                                        <div class="govbh-progress__bar" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-progress govbh-progress--brand" role="progressbar" aria-label="Statistics in Progress Bars 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="govbh-progress__head">نسبة الإنجاز السنوي <span>75%</span></div>
                                    <div class="govbh-progress__container">
                                        <div class="govbh-progress__bar" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics Progress Ends -->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- Figures without Icon Starts -->
                    <div class="govbh-content-box govbh-border-grey bg--grey h-100" role="region" aria-labelledby="statistics-heading-4" tabindex="0">
                        <h3 id="statistics-heading-4" class="text--brand">إحصائيات بالارقام بدون أيقونة</h3>
                        <div class="row g-3">
                            <div class="col-sm-6 col-12">
                                 <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="1234" data-status="yes" aria-hidden="true">0</div>
                                            <div class="opendata-count-sign">BHD</div>
                                            <span class="visually-hidden">1234 BHD</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">المعاملات <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="98" data-status="yes" aria-hidden="true">0</div>
                                            <div class="opendata-count-sign">%</div>
                                            <span class="visually-hidden">98%</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">نسبه النمو <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="hr mt-2 mb-2"></div><!-- Horizontal Line -->
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="6123" data-status="yes" aria-hidden="true">0</div>
                                            <span class="visually-hidden">6123</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">المشاريع <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="5630" data-status="yes" aria-hidden="true">0</div>
                                            <div class="opendata-count-sign">BHD</div>
                                            <span class="visually-hidden">5630 BHD</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">عدد زوار الموقع <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="hr mt-2 mb-2"></div><!-- Horizontal Line -->
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--danger"><i class="ph-bold ph-arrow-down" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="1254" data-status="yes" aria-hidden="true">0</div>
                                            <span class="visually-hidden">1254</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">إلايرادات <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="govbh-statistic govbh-statistic--vertical">
                                    <div class="govbh-statistic__content">
                                        <div class="govbh-badge govbh-badge--medium govbh-badge--success"><i class="ph-bold ph-arrow-up" aria-hidden="true"></i> 1.9%</div>
                                        <div class="govbh-statistic__content-counter govbh-odometer" dir="ltr" aria-live="polite">
                                            <div class="odometer" data-format="" data-count="98" data-status="yes" aria-hidden="true">0</div>
                                            <div class="opendata-count-sign">%</div>
                                            <span class="visually-hidden">98%</span>
                                        </div>
                                        <div class="govbh-statistic__content-title">الأثر الاجتماعي <a href="#" role="button" data-tooltip="tooltip" title="تواصل معنا" aria-label="1234 BHD - Total Transactions"><i class="ph-bold ph-info" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Figures without Icon Ends -->
                </div>
                <div class="col-12">
                    <!-- Download Button Starts -->
                    <div class="govbh-content-box bg--light-brand">
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <div class="govbh-dropdown">
                                <button class="govbh-btn govbh-btn--primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Click here to download statistics options">
                                    تنزيل الإحصائيات
                                </button>
                                <ul class="govbh-dropdown__menu dropdown-menu govbh--box-shadow" style="width: 100%;">
                                    <li><a class="govbh-dropdown__menu-item" href="../images/samplepdf.pdf" target="_blank" aria-label="Download: Statistics, PDF, 34KB, 2 pages - Open in a new window"><i class="ph ph-file-pdf" aria-hidden="true"></i> PDF (34 كيلوبايت، صفحتان)</a></li>
                                    <li><a class="govbh-dropdown__menu-item" href="#" target="_blank" aria-label="Download: Statistics, Excel, 28KB, 1 pages - Open in a new window"><i class="ph ph-file-xls" aria-hidden="true"></i>  Excel (28 كيلوبايت، 1 صفحة)</a></li>
                                </ul>
                            </div>
                            <a href="https://www.data.gov.bh/pages/homepage/" target="_blank" rel="noopener noreferrer" aria-label="Statistics of Bahrain open data portal - Opens in a new window" class="govbh-btn govbh-btn--withoutline">بوابة البحرين للبيانات المفتوحة  <i class="ph ph-arrow-square-out" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Download Button Ends -->
                </div>
                <div class="col-12">
                    <div class="hr mt-1 mb-3"></div><!-- Horizontal Line -->
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
            </div>
        </div>
    </section>
    <!-- Statistics Section Ends -->

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