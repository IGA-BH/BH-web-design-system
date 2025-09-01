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
                        <div class="abstract">Invalid credentials</div>
                        <p>Review your credentials to login to the portal</p>
                    </div>
                    <button type="button" class="govbh-alert__close" data-bs-dismiss="alert" data-bs-target=".govbh-alert--failure" aria-label="Close error message"><i class="ph ph-x" aria-hidden="true"></i></button>
                </div>
                <!-- Alert Message Ends -->
                <!-- Form Starts -->
                <div class="govbh-content-box bg--light-brand">
                    <h1 id="login-form-page-title" class="govbh-login-form__title text--brand mb-2">Login</h1><!-- id comes from section aria-labelledby -->
                    <p class="mb-4">Login using your credentials below</p>                
                    <form action="javascript:void(0);" method="post" id="loginform">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="govbh-form-control form-group row g-0 govbh-form-control--invalid">
                                    <div class="col-12">
                                        <label for="input-001">Username<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="input-001" placeholder="Username" aria-label="Enter your username" aria-describedby="firstname-error" aria-invalid="true">
                                        <div id="firstname-error" class="govbh-form-control__validation-message"><i class="ph ph-warning"></i> Please enter a valid username.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row form-group govbh-form-control govbh-form-control--icon-right govbh-form-control--icon-clickable g-0">
                                    <div class="col-12">
                                        <label for="input-126">Password<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control password" id="input-126" placeholder="Your Password" aria-label="Enter your password">
                                        <button type="button" tabindex="0" class="form-floating__ico togglePassword" aria-label="Toggle password visibility"><i class="ph ph-eye" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="govbh-btn govbh-btn--primary govbh-btn--full-width">Submit</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="mb-0 mt-2"><b>Forgot your password?</b> <a href="#">Reset Password</a></p>
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