<?php
include "../globals.php";
$page = 'login';
include "includes/header.php"; 
?>
    <!-- Login Section Starts -->
    <section class="govbh-section" aria-labelledby="login-form-page-title">
        <div class="container">
            <div class="govbh-login-form">
                <!-- Alert Message Starts -->
                <div role="alert" class="govbh-alert govbh-alert--failure mb-4">
                    <div class="govbh-alert__icon"><i class="ph-fill ph-x-circle" aria-hidden="true"></i></div>
                    <div class="govbh-alert__content">
                        <div class="abstract">بيانات الدخول غير صحيحة</div>
                        <p>راجع بيانات الدخول الخاصة بك لتسجيل الدخول إلى البوابة</p>
                    </div>
                    <button type="button" class="govbh-alert__close" data-bs-dismiss="alert" data-bs-target=".govbh-alert--failure" aria-label="Close error message"><i class="ph ph-x" aria-hidden="true"></i></button>
                </div>
                <!-- Alert Message Ends -->
                <!-- Form Starts -->
                <div class="govbh-content-box bg--light-brand">
                    <h1 id="login-form-page-title" class="govbh-login-form__title text--brand mb-2">تسجيل الدخول</h1><!-- id comes from section aria-labelledby -->
                    <p class="mb-4">قم بتسجيل الدخول باستخدام بيانات الدخول الخاصة بك أدناه</p>                
                    <form action="javascript:void(0);" method="post" id="loginform">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="govbh-form-control form-group row g-0 govbh-form-control--invalid">
                                    <div class="col-12">
                                        <label for="input-001">اسم المستخدم<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="input-001" placeholder="اسم المستخدم" aria-label="Enter your username" aria-describedby="firstname-error" aria-invalid="true">
                                        <div id="firstname-error" class="govbh-form-control__validation-message"><i class="ph ph-warning"></i> الرجاء إدخال اسم مستخدم صالح.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row form-group govbh-form-control govbh-form-control--icon-right govbh-form-control--icon-clickable g-0">
                                    <div class="col-12">
                                        <label for="input-126">كلمة المرور<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control password" id="input-126" placeholder="كلمة المرور" aria-label="Enter your password">
                                        <button type="button" tabindex="0" class="form-floating__ico togglePassword" aria-label="Toggle password visibility"><i class="ph ph-eye" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="govbh-btn govbh-btn--primary govbh-btn--full-width">تسجيل الدخول</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="mb-0 mt-2"><b>نسيت كلمة المرور؟</b> <a href="#">إعادة تعيين كلمة المرور</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Form Ends -->

            </div>
        </div>
    </section>
    <!-- Login Section Ends -->

<?php 
include "includes/footer.php";
?>