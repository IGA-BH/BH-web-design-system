<?php
include "../globals.php";
$page = 'general-template';
include "includes/header.php"; 
?>

    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">برنامج الحكومة</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>نموذج عام</h1>
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

    <!-- Content Banner Section Starts -->
    <section class="govbh-section" aria-labelledby="general-page-title">
        <div class="container">
            <h2 class="text--brand" id="general-page-title">برنامج الحكومة</h2>
            <!-- Slider Starts -->
            <div class="govbh-carousel-block mb-3 mt-3">
                <div class="govbh-carousel"
                    data-carousel="custom" 
                    data-slidesperview-xxxs="1" 
                    data-slidesperview-xxs="1" 
                    data-slidesperview-xs="1" 
                    data-slidesperview-md="1" 
                    data-slidesperview-lg="1" 
                    data-slidesperview-xl="1">
                    <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="General Template Slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" tabindex="0" role="group">
                                <div class="govbh-image-block">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-032.webp"><!--1600*750 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-032.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-032.webp"> <!--991*413-->
                                        <img src="../images/banner-032.webp" width="1293" height="727" alt="About the Ministry1" loading="lazy"><!--767*320-->
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide" tabindex="0" role="group">
                                <div class="govbh-image-block">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-032.webp"><!--1600*750 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-032.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-032.webp"> <!--991*413-->
                                        <img src="../images/banner-032.webp" width="1293" height="727" alt="About the Ministry1" loading="lazy"><!--767*320-->
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide" tabindex="0" role="group">
                                <div class="govbh-image-block">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-032.webp"><!--1600*750 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-032.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-032.webp"> <!--991*413-->
                                        <img src="../images/banner-032.webp" width="1293" height="727" alt="About the Ministry1" loading="lazy"><!--767*320-->
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide" tabindex="0" role="group">
                                <div class="govbh-image-block">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="../images/banner-032.webp"><!--1600*750 Default image-->
                                        <source media="(min-width: 992px)" srcset="../images/banner-032.webp"><!--1199*500-->
                                        <source media="(min-width: 768px)" srcset="../images/banner-032.webp"> <!--991*413-->
                                        <img src="../images/banner-032.webp" width="1293" height="727" alt="About the Ministry1" loading="lazy"><!--767*320-->
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination -->
                        <div class="govbh-carousel__nav-pagination govbh-theme__pagination d-flex justify-content-center" role="group" tabindex="0" aria-label="Slider Controls"></div>
                    </div>
                </div>
            </div>
            <!-- Slider Ends -->
            <!-- Content Starts -->
            <div class="govbh-content-block pt-lg-2 pt-md-0 pt-0">
                <div class="govbh-abstract">
                    <p>تتولى الوزارة مسؤولية رسم السياسات لمملكة البحرين ورسمها بما يتفق مع رؤية الحكومة الموقرة. إذ تقوم الوزارة بالتعاون والتنسيق مع الوزارات والجهات الحكومية لتحسين عملها. وتحرص الوزارة على تعزيز سبل التعاون المشترك مع الدول الشقيقة والصديقة في نفس المجال. وذلك من خلال التوقيع على الاتفاقيات التي من شأنها توفير الإطار القانوني لهذه العلاقات.</p>
                </div>
                <p>تحرص الوزارة على تعزيز سبل التعاون المشترك مع الدول الشقيقة والصديقة في المجالات المالية والاقتصادية، وذلك من خلال التوقيع على عدد من الاتفاقيات الثنائية ومتعددة الأطراف التي من شأنها توفير الإطار القانوني لهذه العلاقات. وتشمل هذه الاتفاقيات، على سبيل المثال لا الحصر، اتفاقيات تشجيع وحماية الإستثمار، واتفاقيات تجنب الازدواج الضريبي، واتفاقيات التجارة الحرة، ومذكرات التفاهم الخاصة بالتعاون المالي والاقتصادي.</p>
                
                <!-- Image with right section starts -->
                <div class="row g-lg-4 g-md-3 g-3">
                    <div class="col-12">
                        <div class="col-lg-6 col-md-12 float-md-start me-lg-5 me-md-0 me-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                            <div class="govbh-image-block">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-035.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-035.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-035.webp">
                                    <img src="../images/banner-035.webp" width="954" height="537" alt="Strategic Goals" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <h3 class="text--brand">برنامج الحكومة </h3>
                        <div class="govbh-abstract">
                            <p>ترتكز منهجية العمل الحكومي على ترسيخ مبادئ الاستدامة، والتنافسية، والعدالة، لتنفيذ جميع برامج التطوير وفق أعلى المعايير، فضلاً عن تعزيز مكانة مملكة البحرين في الريادة والابتكار، ومواصلة العمل بروح الفريق الواحد (فريق البحرين) تحت شعار (حب التحدي وعشق الإنجاز).</p>
                        </div>
                        <p>ركز برنامج الحكومة على تحقيق أربع أولويات ينبثق منهـــا عدد من الاهداف التي تسعى حكومة مملكة البحرين لتنفيذهـا نحـو مزيدٍ من الخير والنماء والازدهار للوطن والمواطن، وتبني البرامج والسياسات التي تهدف إلى رفع دخل المواطنين والارتقاء بالمستوى المعيشي لهـم بما يحافظ على مكتسباتهم المعيشية</p>
                    </div>
                </div>
                <!-- Image with right section ends -->

                <blockquote class="govbh-blockquote pb-3" role="region" aria-label="Quote from the Chief Executive Officer">
                    <div class="govbh-blockquote__icon"><i class="ph-fill ph-quotes" aria-hidden="true"></i></div>
                    <div class="govbh-blockquote__content">الرؤية الاقتصادية الشاملة لمملكة البحرين تعتبر نبراساً وتوجهاً واضحاً نحو التنمية الاقتصادية المستدامة للمملكة والمتمثلة في بناء حياة أفضل لكل مواطن.</div>
                    <div class="govbh-blockquote__title">بدر سلطان جمعة</div>
                    <div class="govbh-blockquote__designation">الرئيس التنفيذي</div>
                </blockquote>

                <p>شكّلت الرؤى والتوجيهات الرشيدة نبراساً تهتدي به جميع المبادرات والممارسات المتعلقة بالعمل الحكومي، وتجلّت ثمارها من خلال ما حققته البحرين من نمو مطّرد وانفتاحٍ على كافة الأصعدة، لا سيّما في ظل الالتزام الراسخ بتعزيز المكانة المملكة. وتسعى الوزارة بكل جدٍ لتعزيز سبل التعاون مع البلدان الشقيقة والصديقة من خلال إبرام الاتفاقيات ووضع الأُطر القانونية اللازمة التي تنظّم هذه العلاقات.</p>

                <!-- Image with right section starts -->
                <div class="row g-lg-4 g-md-3 g-3">
                    <div class="col-12">
                        <div class="col-lg-6 col-md-12 float-md-end ms-lg-5 ms-md-0 ms-0 mb-lg-4 mb-md-3 mb-3 z-1 position-relative">
                            <div class="govbh-image-block">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 992px)" srcset="../images/banner-018.webp">
                                    <source media="(min-width: 768px)" srcset="../images/banner-018.webp">
                                    <img src="../images/banner-018.webp" width="954" height="537" alt="Strategic Goals" loading="lazy">
                                </picture>
                            </div>
                        </div>
                            <h3 class="text--brand">برنامج الحكومة </h3>
                            <div class="govbh-abstract">
                                <p>ستركز خطة عمل الحكومة على إنجازات المملكة وشعبها في ظل التوازن المالي بين النفقات والإيرادات، والنمو الاقتصادي الإيجابي المستمر، واستقرار الوضع النقدي، والتنمية الشاملة والمستدامة. وقد وُضعت خطة عمل الحكومة بما يتماشى مع التوجيهات والسياسات والمبادرات الرئيسية المنشودة خلال السنوات المقبلة.</p>
                            </div>
                            <p>وذلك للحفاظ على الأمن والاستقرار، وتوفير الخدمات الضرورية للمواطن. ويتحقق ذلك من خلال الحفاظ على المكتسبات الحالية، وتجنب أي أعباء مستقبلية على المواطن، وتحسين ظروفه المعيشية بما يعزز التنمية التي يقودها المواطن. تطلع البحرين إلى تحقيق الأهداف العامة التالية من خلال خطة عمل الحكومة:</p>
                            <ul class="pb-3">
                                <li>تعزيز التنمية الشاملة والمستدامة لتحقيق التوازن المالي والحفاظ على نمو اقتصادي إيجابي.</li>
                                <li>دعم القطاع الخاص ليصبح المحرك الأهم في التنمية، بما يوفر فرصًا نوعية للمواطنين والمستثمرين.</li>
                                <li>إرساء قواعد الاستخدام الأمثل للموارد وضمان استدامتها للأجيال القادمة.</li>
                                <li>استدامة التنمية الاجتماعية والاقتصادية من خلال اعتماد تشريعات ومبادرات تدعم استقرار الأسرة وتحقيق المساواة بين الجنسين.</li>
                            </ul>
                    </div>
                </div>
                <!-- Image with right section ends -->

                <h3 class="text--brand">اعضاء البرنامج</h3>
                <!--Table Starts -->
                <div class="govbh-datatable table-responsive">  
                    <table class="table">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>العمر</th>
                                <th>تاريخ الميلاد</th>
                                <th>الجنسية</th>
                                <th>رخصة القيادة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>بدر سلطان جمعة</b></a>
                                </td>
                                <td>18</td>
                                <td>12/12/1981</td>
                                <td>Bahraini</td>
                                <td><div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div></td>                          
                            </tr>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>محمد علي</b></a>
                                </td>
                                <td>19</td>
                                <td>12/12/1965</td>
                                <td>Saudi</td>
                                <td><div class="govbh-datatable__table--failure"><i class="ph-bold ph-x-circle"></i> لا</div></td>                          
                            </tr>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>حسن سلطان جمعة</b></a>
                                </td>
                                <td>22</td>
                                <td>12/12/1945</td>
                                <td>Qatar</td>
                                <td><div class="govbh-datatable__table--failure"><i class="ph-bold ph-x-circle"></i> لا</div></td>                          
                            </tr>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>محمد علي</b></a>
                                </td>
                                <td>22</td>
                                <td>12/12/1945</td>
                                <td>Saudi</td>
                                <td><div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div></td>                          
                            </tr>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>حسن سلطان جمعة</b></a>
                                </td>
                                <td>18</td>
                                <td>12/12/1981</td>
                                <td>Bahraini</td>
                                <td><div class="govbh-datatable__table--success"><i class="ph-bold ph-check"></i> نعم</div></td>                          
                            </tr>
                            <tr>
                                <td class="govbh-datatable__table--bold">
                                    <a href="#"><b>محمد علي</b></a>
                                </td>
                                <td>19</td>
                                <td>12/12/1965</td>
                                <td>Saudi</td>
                                <td><div class="govbh-datatable__table--failure"><i class="ph-bold ph-x-circle"></i> لا</div></td>                          
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Table Ends -->

                <h3 class="text--brand">اهداف البرنامج</h3>
                <ol class="ps-2 pb-3">
                    <li>خلق المزيد من الفرص النوعية للمواطنين في مختلف المجالات.</li>
                    <li>ترسيخ الأمن المجتمعي بما يدعم جهود التنمية والازدهار.</li>
                    <li>تطوير برامج الدعم المالي والاقتصادي لتوجيه الدعم لمستحقيه بكفاءة أكبر، وذلك بما يلبي احتياجات المواطنين الأساسية ويوفر لهم حقهم الكامل في الحياة الكريمة وبما يحافظ على مكتسبات المواطنين.</li>
                    <li>دعم مساعي التنمية الشاملة بالتحول إلى اقتصاد مبني على أنشطة ذات قيمة مضافة عالية.</li>
                    <li>مواصلة السعي لتحقيق أهداف برنامج التوازن المالي حتى نهاية عام 2024 مع تبني السياسات التي تهدف لرفع دخل المواطنين بما يحافظ على مكتسباتهم.</li>
                    <li>البناء على قواعد الشراكة مع القطاع الخاص وتعزيزها بما يسهم في تحقيق أبعاد التنمية الشاملة، ويضمن خلق فرص واعدة للمواطنين.</li>
                    <li>الحفاظ على الموارد والثروات الطبيعية والعمل على تنميتها واستثمارها بحصافة، ودعم الجهود الدولية لمواجهة التغيرات المناخية.</li>
                    <li>مواصلة العمل على تطوير الأداء والارتقاء بجودة الخدمة الحكومية وتعزيز استدامتها لصالح المواطنين.</li>
                    <li>تعزيز تقدم المرأة البحرينية وزيادة إسهاماتها في الحياة العامة والاقتصاد الوطني.</li>
                </ol>

                <a href="../images/samplepdf.pdf" class="govbh-btn govbh-btn--primary" aria-label="Download: Resolution on Regulating the Work of Energy Efficiency Specialised Companies, PDF, 13 MB, 8 pages">تحميل <i class="ph ph-download-simple" aria-hidden="true"></i></a>
                <div class="govbh-date-content govbh-date-content--small mt-2 d-flex flex-wrap">
                    <div><i class="ph ph-file-pdf" aria-hidden="true"></i> 13 ميجابايت، 8 صفحات</div>
                </div>
            </div>
            <!-- Content Ends -->

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
    <!-- Content Banner Section Ends -->

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