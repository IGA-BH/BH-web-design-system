<?php
include "../globals.php";
$page = 'application-form';
include "includes/header.php"; 
?>
    <!-- Breadcrumb Starts -->
    <section class="govbh-section govbh-breadcrumb theme--dark bg--brand">
        <div class="container">
            <div class="row g-2 align-items-center">
                <nav class="col-12 mb-lg-4 mb-md-3 mb-3 pb-2" tabindex="0" aria-label="Breadcrumbs">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home"><a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i> الصفحة الرئيسية</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">نموذج الطلب</li>
                    </ul>
                </nav>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h1>نموذج الطلب</h1>
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

    <!-- Application Form Section Starts -->
    <section class="govbh-section" aria-labelledby="application-form-page-title">
        <div class="container">
            <div class="govbh-content-block pb-4">
                <h2 id="application-form-page-title" class="govbh-fs-h6">نموذج طلب ترخيص لإنشاء مؤسسة تعليم الطفولة المبكرة (روضة أطفال)</h2>
                <p>يُستخدم هذا النموذج لتقديم طلب رسمي إلى الجهات المختصة من أجل الحصول على ترخيص لإنشاء وتشغيل مؤسسة تعليمية تُعنى برعاية وتعليم الأطفال في مرحلة الطفولة المبكرة (روضة أطفال). يهدف النموذج إلى جمع كافة المعلومات الإدارية والفنية والقانونية المتعلقة بالمؤسسة المراد إنشاؤها، لضمان التزامها بالمعايير والشروط المطلوبة.</p>
            </div>
            <!-- Steps Head Starts - update the "done" in govbh-steps__item once the form is filled and moved to next tab-->
            <ul class="govbh-steps govbh-no-li mb-5 d-md-flex d-sm-none d-none" role="tablist">
                <li class="govbh-steps__item active" role="presentation">
                    <div class="govbh-steps__item-progress"></div>
                    <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg" alt="Step 1 - Personal Information"></a>
                    <div class="govbh-steps__item-content">
                        <span>الخطوة 1</span>
                        <div class="govbh-steps__item-content-title d-md-block d-sm-none d-none">معلومات مقدم الطلب</div><!-- used boostrap class name for hiding in mobile -->
                    </div>
                </li>
                <li class="govbh-steps__item" aria-disabled="true" role="presentation">
                    <div class="govbh-steps__item-progress"></div>
                    <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg" alt="Step 2 - Property Details"></a>
                    <div class="govbh-steps__item-content">
                        <span>الخطوة 2</span>
                        <div class="govbh-steps__item-content-title d-md-block d-sm-none d-none">معلومات العقار</div><!-- used boostrap class name for hiding in mobile -->
                    </div>
                </li>
                <li class="govbh-steps__item" aria-disabled="true" role="presentation">
                    <div class="govbh-steps__item-progress"></div>
                    <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg" alt="Step 3 - Documents Upload"></a>
                    <div class="govbh-steps__item-content">
                        <span>الخطوة 3</span>
                        <div class="govbh-steps__item-content-title d-md-block d-sm-none d-none">معلومات الموظفين</div><!-- used boostrap class name for hiding in mobile -->
                    </div>
                </li>
                <li class="govbh-steps__item" aria-disabled="true" role="presentation">
                    <div class="govbh-steps__item-progress"></div>
                    <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg" alt="Step 4 - Review & Submit"></a>
                    <div class="govbh-steps__item-content">
                        <span>الخطوة 4</span>
                        <div class="govbh-steps__item-content-title d-md-block d-sm-none d-none">تحميل المستندات</div><!-- used boostrap class name for hiding in mobile -->
                    </div>
                </li>
            </ul>
            <!-- Steps Head Ends -->
            <!-- Alert Message Starts -->
            <div role="alert" class="govbh-alert govbh-alert--failure mb-4">
                <div class="govbh-alert__icon"><i class="ph-fill ph-x-circle" aria-hidden="true"></i></div>
                <div class="govbh-alert__content">
                    <div class="abstract">هناك أخطاء في النموذج الخاص بك</div>
                    <p>قم بمراجعة النموذج الخاص بك ثم انتقل إلى الخطوة التالية.</p>
                </div>
                <button type="button" class="govbh-alert__close" data-bs-dismiss="alert" data-bs-target=".govbh-alert--failure" aria-label="Close error message"><i class="ph ph-x" aria-hidden="true"></i></button>
            </div>
            <!-- Alert Message Ends -->
            <!-- Form Tabs Starts -->
            <div class="govbh-steps-form-tabs">
                <div class="govbh-steps-form-tabs__item">
                    <form action="javascript:void(0);" method="post" id="basicdetails">
                        <h3 class="text--brand">معلومات شخصية</h3>
                        <div class="govbh-content-box bg--grey">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="govbh-form-control form-group row g-0 govbh-form-control--invalid">
                                        <div class="col-12">
                                            <label for="input-001">الاسم الكامل<span>*</span></label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="input-001" placeholder="أدخل اسمك الكامل" aria-label="Enter your full name" aria-describedby="firstname-error" aria-invalid="true">
                                            <div id="firstname-error" class="govbh-form-control__validation-message"><i class="ph ph-warning"></i> الرجاء إدخال الاسم الكامل.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="govbh-form-control form-group row g-0">
                                        <div class="col-12">
                                            <label for="input-002">عنوان البريد الإلكتروني <span>*</span></label>
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="input-002" placeholder="عنوان البريد الإلكتروني " aria-label="Enter your email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="govbh-form-control form-group row g-0">
                                        <div class="col-12">
                                            <label for="input-003">رقم الهاتف <span>*</span></label>
                                        </div>
                                        <div class="col-12">
                                            <input type="tel" class="form-control" id="input-003" placeholder="رقم الهاتف " aria-label="Enter your phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="row form-group govbh-form-control govbh-form-control--icon-right govbh-form-control--datefield g-0">
                                        <div class="col-12">
                                            <label for="singledaterange">تاريخ الميلاد<span>*</span></label>      
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating__ico"><i class="ph ph-calendar-blank"></i></div>
                                            <input type="text" class="form-control datepicker-control" id="singledaterange" name="singledaterange" placeholder="تاريخ الميلاد" aria-label="Enter your date of birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12 align-items-end d-flex">
                                    <div class="row govbh-form-control form-toggle g-0">
                                        <div class="col-12">
                                            <div class="formlabel">هل لديك رخصة قيادة؟<span>*</span></div>      
                                        </div>
                                        <div class="col-12 mt-1">
                                            <label class="form-toggle__switch" for="toggle-switch1"><!-- to update the component -->
                                                <input type="checkbox" id="toggle-switch1"
                                                    class="form-toggle__switch-check toggle-switch"
                                                    aria-label="هل لديك رخصة قيادة؟" aria-label-one="No"  aria-label-two="Yes" aria-labelledby="switchstate" role="switch">
                                                <span id="switchstate" class="visually-hidden" aria-live="polite" role="alert">هل لديك رخصة قيادة؟ نعم أم لا؟</span>
                                                <span class="form-toggle__switch-label">لا</span>
                                                <span class="form-toggle__switch-slider"></span>
                                                <span class="form-toggle__switch-label">نعم</span>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="govbh-form-control form-group row g-0">
                                        <div class="col-12">
                                            <label for="comments002" id="tellsomethingyourself">أخبرنا شيئا عن نفسك<span>*</span></label><!-- to update the component -->
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control form-textarea" name="comments002" id="comments002"
                                                placeholder="الرجاء إدخال تعليقاتك" aria-label="الرجاء إدخال تعليقاتك"
                                                maxlength="300" aria-labelledby="tellsomethingyourself charecterlimit-info"></textarea>
                                            <div id="charecterlimit-info" class="form-floating__character-limit text-end"
                                                aria-live="polite" role="alert"><span
                                                    class="textarea-character-limit"></span> الحروف المتبقية</div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>

                        <h3 class="text--brand mt-3">الخلفية التعليمية</h3>
                        <div class="govbh-content-box bg--grey">
                            <div class="row g-3">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="row form-group govbh-form-control g-0">
                                        <div class="col-12">
                                            <label for="educationalbackground">أعلى مستوى تعليمي <span>*</span></label> 
                                        </div>
                                        <div class="col-12">
                                            <div class="govbh-form-control--select">
                                                <select class="form-select select2" id="educationalbackground" name="educationalbackground">
                                                    <option value="0">حدد الخيار</option>
                                                    <option value="1">درجة البكالوريوس</option>
                                                    <option value="2">درجة الماجستير</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                   
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="row form-group govbh-form-control g-0">
                                        <div class="col-12">
                                            <label for="educationalspecialization">التخصص التربوي <span>*</span></label> 
                                        </div>
                                        <div class="col-12">
                                            <div class="govbh-form-control--select">
                                                <select class="form-select select2" id="educationalspecialization" name="educationalspecialization">
                                                    <option value="0">اختر خيارًا</option>
                                                    <option value="1">الخيار الأول</option>
                                                    <option value="2">الخيار الثاني</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="govbh-form-control form-group row g-0">
                                        <div class="col-12">
                                            <label for="schoolname">اسم المدرسة<span>*</span></label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="schoolname" placeholder="أدخل اسم مدرستك" aria-label="Enter your school name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="govbh-form-control form-group">
                                        <label for="files">تحميل الشهادات أو الدبلومات <span>*</span></label>
                                        <!-- File Upload Starts -->
                                        <div class="form-group__file"> 
                                            <div class="form-group__file-input govbh-btn govbh-btn--primary">                                 
                                                اختر الملف
                                               <input type="file" id="files" name="files" multiple="multiple" aria-label="Upload Certificates or Diploma" aria-describedby="file-help file-error" aria-required="true" accept=".pdf,.doc,.docx" class="form-group__file--upload govbh-upload">
                                            </div><br>
                                            <div class="form-group__file-required" id="file-help">
                                                <div>الحد الأقصى لعدد الملفات: <span>2</span></div>
                                                <div>الحد الأقصى لحجم الملف المرفوع: <span>5 ​​ميجابايت</span></div>
                                                <div>أنواع الملفات المسموح بها: <span>.pdf | .doc | .docx</span></div>
                                            </div>
                                            <div id="selectedFiles" class="form-group__file-selected"></div>
                                        </div>
                                        <!-- Error message container -->
                                        <div id="file-error" class="govbh-form-control__validation-message" aria-live="assertive"> </div>
                                        <!-- File Upload Ends -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="govbh-form-control form-group row g-0">
                                        <div class="col-12">
                                            <label for="comments003" id="tellsomethingyourself1">أخبرنا شيئا عن نفسك<span>*</span></label><!-- to update the component -->
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control form-textarea" name="comments003" id="comments003"
                                                placeholder="الرجاء إدخال تعليقاتك" aria-label="الرجاء إدخال تعليقاتك"
                                                maxlength="300" aria-labelledby="tellsomethingyourself1 charecterlimit-info1"></textarea>
                                            <div id="charecterlimit-info1" class="form-floating__character-limit text-end"
                                                aria-live="polite" role="alert"><span
                                                    class="textarea-character-limit"></span> الحروف المتبقية</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="text--brand mt-3">معلومات أخرى</h3>
                        <div class="govbh-content-box bg--grey">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="govbh-form-control form-check">      
                                        <div class="formlabel">ما هي مجالات اهتمامك؟ <span>*</span></div>                  
                                        <fieldset class="form-check__group bg--primary form-check__group--padding">      
                                            <legend class="visually-hidden"></legend>                  
                                            <div class="form-check__item">
                                                <input type="checkbox" id="fieldsofinterest1" name="fieldsofinterest-001" value="1">
                                                <label for="fieldsofinterest1">تكنولوجيا المعلومات</label>
                                            </div>
                                            <div class="form-check__item">
                                                <input type="checkbox" id="fieldsofinterest2" name="fieldsofinterest-002"  value="2" checked>
                                                <label for="fieldsofinterest2">العقارات</label>
                                            </div>
                                            <div class="form-check__item">
                                                <input type="checkbox" id="fieldsofinterest3" name="fieldsofinterest-003"  value="3">
                                                <label for="fieldsofinterest3">إدارة</label>
                                            </div>                        
                                            <div class="form-check__item">
                                                <input type="checkbox" id="fieldsofinterest4" name="fieldsofinterest-004"  value="4">
                                                <label for="fieldsofinterest4">إدارة الأعمال</label>
                                            </div>                        
                                            <div class="form-check__item">
                                                <input type="checkbox" id="fieldsofinterest5" name="fieldsofinterest-005"  value="5">
                                                <label for="fieldsofinterest5">وسائل التواصل الاجتماعي</label>
                                            </div>                        
                                        </fieldset>
                                    </div>     
                                </div>
                                <div class="col-12">
                                    <div class="govbh-form-control form-check">      
                                        <div class="formlabel" >كيف سمعت عنا؟ <span>*</span></div>                  
                                        <fieldset class="form-check__group bg--primary form-check__group--padding">  
                                            <legend class="visually-hidden"></legend>                      
                                            <div class="form-check__item">
                                                <input type="radio" id="radio1" name="options" value="1">
                                                <label for="radio1">صديق</label>
                                            </div>
                                            <div class="form-check__item">
                                                <input type="radio" id="radio2" name="options"  value="2" checked>
                                                <label for="radio2">جوجل</label>
                                            </div>
                                            <div class="form-check__item">
                                                <input type="radio" id="radio3" name="options"  value="3">
                                                <label for="radio3">وسائل التواصل الاجتماعي</label>
                                            </div>                         
                                            <div class="form-check__item">
                                                <input type="radio" id="radio4" name="options"  value="4">
                                                <label for="radio4">حملة عبر الإنترنت</label>
                                            </div>                         
                                        </fieldset>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <!-- Captcha Starts -->
                        <div class="row g-3">
                            <div class="col-12 pt-4">
                                <p class="govbh-text--extra-small">هذه الاستمارة محمية باختبار reCAPTCHA غير المرئي <a href="https://policies.google.com/privacy?hl=en" target="_blank" class="govbh-is-external">الخصوصية</a> | <a href="https://policies.google.com/terms?hl=en" target="_blank" class="govbh-is-external">الشروط والأحكام</a></p>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="govbh-form-control form-check">      
                                    <div class="formlabel" >الإقرار <span>*</span></div>                  
                                    <div class="form-check__group bg--primary">                        
                                        <div class="form-check__item">
                                            <input type="checkbox" id="termsofuse1" name="termsofuse1" value="1">
                                            <label for="termsofuse1">أقر بأن المعلومات المدخلة قد تم مراجعتها والتأكد من صحتها، حيث سيتم إلغاء الطلب في حال كانت المعلومات غير صحيحة</label>
                                        </div>                       
                                    </div>
                                </div>     
                            </div>
                            <div class="col-12 pb-2">
                                <div class="hr mt-3 mb-3"></div><!-- Horizontal Line -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <button type="reset" class="govbh-btn govbh-btn--outline"><i class="ph ph-arrow-left" aria-hidden="true"></i> رجوع</button>
                            </div>
                            <div class="col-md-8 col-sm-6 col-6 d-flex flex-wrap justify-content-end gap-3">
                                <button type="reset" class="govbh-btn govbh-btn--outline"><i class="ph ph-arrow-u-up-left"></i> ابدأ من جديد</button>
                                <button type="button" class="govbh-btn govbh-btn--primary">إرسال النموذج <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <!-- Captcha Ends -->
                        
                       
                        

                    </form>
                </div>
            </div>
            <!-- Form Tabs Ends -->

            <div class="hr mb-3"></div><!-- Horizontal Line -->
            <!-- Share & Last updated content Starts -->
            <div class="row g-2">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="govbh-sharethis" role="region" aria-label="Share this page on Social Media" tabindex="0">
                        <div class="govbh-sharethis__title">شارك هذه الصفحة:</div>
                        <ul>
                            <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn" rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="_blank" aria-label="Share this page on Facebook" rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>                        
                            <li><a href="#" target="_blank" aria-label="Share this page on Whatsapp" rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
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
    <!-- Application Form Section Ends -->

<?php 
include "includes/footer.php";
?>