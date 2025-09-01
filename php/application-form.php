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
                    <li class="govbh-breadcrumb__item-home">
                        <a href="index.html" aria-label="Go to home"><i class="ph ph-house"
                                aria-hidden="true"></i><span>Home</span></a>
                    </li>
                    <li class="govbh-breadcrumb__item-last" aria-current="page">Application Form</li>
                </ul>
            </nav>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <h1>Application Form</h1>
            </div>
            <div
                class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
                    <div class="govbh-sharethis__title">Share this page:</div>
                    <ul>
                        <li><a href="#" target="_blank" aria-label="Share this page on Facebook"
                                rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>
                        <li><a href="#" target="_blank" aria-label="Share this page on LinkedIn"
                                rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
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

<!-- Application Form Section Starts -->
<section class="govbh-section" aria-labelledby="application-form-page-title">
    <div class="container">
        <div class="govbh-content-block pb-4">
            <h2 id="application-form-page-title" class="govbh-fs-h6">Licensing Application Form to Establish Early Childhood Education Institution
                (Nursery)</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat quis dolor non ultricies.
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tempor fringilla fringilla.
                Vestibulum nec malesuada nisl, ac gravida dolor. Vivamus efficitur facilisis mauris, vitae sagittis nibh
                semper in.</p>
        </div>

        <!-- Steps Head Starts - update the "done" in govbh-steps__item once the form is filled and moved to next tab-->
        <ul class="govbh-steps govbh-no-li mb-5 d-md-flex d-sm-none d-none" role="tablist">
            <li class="govbh-steps__item" role="presentation">
                <div class="govbh-steps__item-progress"></div>
                <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg"
                        alt="Step 1 - Personal Information"></a>
                <div class="govbh-steps__item-content">
                    <span>Step 1</span>
                    <div class="govbh-steps__item-content-title">Personal Information</div>
                </div>
            </li>
            <li class="govbh-steps__item active" role="presentation" aria-disabled="true">
                <div class="govbh-steps__item-progress"></div>
                <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg"
                        alt="Step 2 - Property Details"></a>
                <div class="govbh-steps__item-content">
                    <span>Step 2</span>
                    <div class="govbh-steps__item-content-title">Property Details</div>
                </div>
            </li>
            <li class="govbh-steps__item" role="presentation" aria-disabled="true">
                <div class="govbh-steps__item-progress"></div>
                <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg"
                        alt="Step 3 - Documents Upload"></a>
                <div class="govbh-steps__item-content">
                    <span>Step 3</span>
                    <div class="govbh-steps__item-content-title">Documents Upload</div>
                </div>
            </li>
            <li class="govbh-steps__item" role="presentation" aria-disabled="true">
                <div class="govbh-steps__item-progress"></div>
                <a href="#" class="govbh-steps__item-cricle"><img src="../images/utilities/steps-notes.svg"
                        alt="Step 4 - Review & Submit"></a>
                <div class="govbh-steps__item-content">
                    <span>Step 4</span>
                    <div class="govbh-steps__item-content-title">Review & Submit</div>
                </div>
            </li>
        </ul>
        <!-- Steps Head Ends -->
        <!-- Alert Message Starts -->
        <div role="alert" class="govbh-alert govbh-alert--failure mb-4">
            <div class="govbh-alert__icon"><i class="ph-fill ph-x-circle" aria-hidden="true"></i></div>
            <div class="govbh-alert__content">
                <div class="abstract">There are errors in your form</div>
                <p>Review your form and then proceed to the next step.</p>
            </div>
            <button type="button" class="govbh-alert__close" data-bs-dismiss="alert"
                data-bs-target=".govbh-alert--failure" aria-label="Close error message"><i class="ph ph-x"
                    aria-hidden="true"></i></button>
        </div>
        
        <!-- Alert Message Ends -->
        <!-- Form Tabs Starts -->
        <div class="govbh-steps-form-tabs">
            <div class="govbh-steps-form-tabs__item">
                <form action="javascript:void(0);" method="post" id="basicdetails">
                    <h3 class="text--brand">Personal Information</h3>
                    <div class="govbh-content-box bg--grey">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="govbh-form-control form-group row g-0 govbh-form-control--invalid">
                                    <div class="col-12">
                                        <label for="input-001">Your Name<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="input-001"
                                            placeholder="Enter your full name" aria-label="Enter your full name"
                                            aria-describedby="firstname-error" aria-invalid="true">
                                        <div id="firstname-error" class="govbh-form-control__validation-message"><i
                                                class="ph ph-warning"></i> Please enter a full name.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="govbh-form-control form-group row g-0">
                                    <div class="col-12">
                                        <label for="input-002">Email Address<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" id="input-002"
                                            placeholder="Email Address" aria-label="Enter your email address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="govbh-form-control form-group row g-0">
                                    <div class="col-12">
                                        <label for="input-003">Phone Number<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="tel" class="form-control" id="input-003" placeholder="Phone Number"
                                            aria-label="Enter your phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div
                                    class="row form-group govbh-form-control govbh-form-control--icon-right govbh-form-control--datefield g-0">
                                    <div class="col-12">
                                        <label for="singledaterange">Date of Birth<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating__ico"><i class="ph ph-calendar-blank"></i></div>
                                        <input type="text" class="form-control datepicker-control" id="singledaterange"
                                            name="singledaterange" placeholder="Date of Birth"
                                            aria-label="Enter your date of birth">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12 align-items-end d-flex">
                                <div class="row govbh-form-control form-toggle g-0">
                                    <div class="col-12">
                                        <div class="formlabel">Do you have a driving
                                            license?<span>*</span></div>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <label class="form-toggle__switch" for="toggle-switch1"><!-- to update the component -->
                                            <input type="checkbox" id="toggle-switch1"
                                                class="form-toggle__switch-check toggle-switch"
                                                aria-label="Do you have a driving license?" aria-label-one="No"  aria-label-two="Yes" aria-labelledby="switchstate" role="switch">
                                            <span id="switchstate" class="visually-hidden" aria-live="polite" role="alert"></span>
                                            <span class="form-toggle__switch-label">No</span>
                                            <span class="form-toggle__switch-slider"></span>
                                            <span class="form-toggle__switch-label">Yes</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-form-control form-group row g-0">
                                    <div class="col-12">
                                        <label for="comments002" id="tellsomethingyourself">Tell something about yourself<span>*</span></label><!-- to update the component -->
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control form-textarea" name="comments002" id="comments002"
                                            placeholder="Enter your comments" aria-label="Enter your comments"
                                            maxlength="300" aria-labelledby="tellsomethingyourself charecterlimit-info"></textarea>
                                        <div id="charecterlimit-info" class="form-floating__character-limit text-end"
                                            aria-live="polite" role="alert"><span
                                                class="textarea-character-limit"></span> characters remaining</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text--brand mt-3">Educational Background</h3>
                    <div class="govbh-content-box bg--grey">
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="row form-group govbh-form-control g-0">
                                    <div class="col-12">
                                        <label for="educationalbackground">Highest Educational Background
                                            <span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="govbh-form-control--select">
                                            <select class="form-select select2" id="educationalbackground"
                                                name="educationalbackground">
                                                <option value="0">Select Educational Background</option>
                                                <option value="0">High School Diploma</option>
                                                <option value="1">Associate Degree</option>
                                                <option value="2">Bachelors Degree</option>
                                                <option value="3">Master Degree</option>
                                                <option value="4">Doctorate (Ph.D.)</option>
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
                                        <label for="educationalspecialization">Educational Specialization
                                            <span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="govbh-form-control--select">
                                            <select class="form-select select2" id="educationalspecialization"
                                                name="educationalspecialization">
                                                <option value="0">Select Educational Specialization</option>
                                                <option value="0">Computer Science</option>
                                                <option value="1">Business Administration</option>
                                                <option value="2">Psychology</option>
                                                <option value="3">Mechanical Engineering</option>
                                                <option value="4">Biological Sciences</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="govbh-form-control form-group row g-0">
                                    <div class="col-12">
                                        <label for="schoolname">School Name<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="schoolname"
                                            placeholder="Enter your school name" aria-label="Enter your school name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-form-control form-group">
                                    <label for="files">Upload Certificates or Diploma <span>*</span></label>
                                    <!-- File Upload Starts -->
                                    <div class="form-group__file">
                                        <div class="form-group__file-input govbh-btn govbh-btn--primary">
                                            Choose file
                                            <input type="file" id="files" name="files" multiple="multiple"
                                                aria-label="Upload Certificates or Diploma"
                                                aria-describedby="file-help file-error" aria-required="true"
                                                accept=".pdf,.doc,.docx" class="form-group__file--upload govbh-upload">
                                        </div><br>
                                        <div class="form-group__file-required" id="file-help">
                                            <div>Max File Count: <span>2</span></div>
                                            <div>Max upload filesize: <span>5MB</span></div>
                                            <div>Allowed File Types: <span>.pdf | .doc | .docx</span></div>
                                        </div>
                                        <div id="selectedFiles" class="form-group__file-selected"></div>
                                    </div>
                                    <!-- Error message container -->
                                    <div id="file-error" class="govbh-form-control__validation-message"
                                        aria-live="assertive"> </div>
                                    <!-- File Upload Ends -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-form-control form-group row g-0">
                                    <div class="col-12">
                                        <label for="comments003" id="tellsomethingyourself1">Tell something about yourself<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control form-textarea" name="comments003" id="comments003"
                                            placeholder="Enter your comments" aria-label="Enter your comments"
                                            maxlength="300" aria-labelledby="tellsomethingyourself1 charecterlimit-info1"></textarea>
                                        <div id="charecterlimit-info1" class="form-floating__character-limit text-end"
                                            aria-live="polite" role="alert"><span
                                                class="textarea-character-limit"></span> characters remaining</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text--brand mt-3">Other Information</h3>
                    <div class="govbh-content-box bg--grey">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="govbh-form-control form-check">
                                    <div class="formlabel">What are your fields of interests? <span>*</span></div>
                                    <fieldset class="form-check__group bg--primary form-check__group--padding">
                                        <legend class="visually-hidden"></legend>
                                        <div class="form-check__item">
                                            <input type="checkbox" id="fieldsofinterest1" value="1">
                                            <label for="fieldsofinterest1">Information Technology</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="checkbox" id="fieldsofinterest2" value="2" checked>
                                            <label for="fieldsofinterest2">Real Estate</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="checkbox" id="fieldsofinterest3" value="3">
                                            <label for="fieldsofinterest3">Management</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="checkbox" id="fieldsofinterest4" value="4">
                                            <label for="fieldsofinterest4">Business Administration</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="checkbox" id="fieldsofinterest5" value="5">
                                            <label for="fieldsofinterest5">Social Media</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="govbh-form-control form-check">
                                    <div class="formlabel">How did you hear about us? <span>*</span></div>
                                    <fieldset class="form-check__group bg--primary form-check__group--padding">
                                        <legend class="visually-hidden"></legend>
                                        <div class="form-check__item">
                                            <input type="radio" id="radio1" name="options" value="1">
                                            <label for="radio1">A Friend</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radio2" name="options" value="2" checked>
                                            <label for="radio2">Google</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radio3" name="options" value="3">
                                            <label for="radio3">Social Media</label>
                                        </div>
                                        <div class="form-check__item">
                                            <input type="radio" id="radio4" name="options" value="4">
                                            <label for="radio4">Online Campaign</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Captcha Starts -->
                    <div class="row g-3">
                        <div class="col-12 pt-4">
                            <p class="govbh-text--extra-small">This form is protected by an invisible captcha. <a
                                    href="#" target="_blank">Privacy Policy</a> | <a href="#" target="_blank">Terms of
                                    Use</a></p>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="govbh-form-control form-check">
                                <div class="formlabel">I Agree <span>*</span></div>
                                <div class="form-check__group bg--primary">
                                    <div class="form-check__item">
                                        <input type="checkbox" id="termsofuse1" name="termsofuse1" value="1">
                                        <label for="termsofuse1">I agree that the information entered has been reviewed and verified to be accurate. If the information is found to be incorrect, the order will be canceled.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pb-2">
                            <div class="hr mt-3 mb-3"></div><!-- Horizontal Line -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-6">
                            <button type="reset" class="govbh-btn govbh-btn--outline"><i class="ph ph-arrow-left"
                                    aria-hidden="true"></i> Previous</button>
                        </div>
                        <div class="col-md-8 col-sm-6 col-6 d-flex flex-wrap justify-content-end gap-3">
                            <button type="reset" class="govbh-btn govbh-btn--outline"><i
                                    class="ph ph-arrow-u-up-left"></i> Start Over</button>
                            <button type="button" class="govbh-btn govbh-btn--primary">Submit Form <i
                                    class="ph ph-arrow-right" aria-hidden="true"></i></button>
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
                    <div class="govbh-sharethis__title">Share this page:</div>
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
                    <p id="last-updated-date" class="govbh-text--medium m-0">Content last updated: <b>29 May 2025</b></p>
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