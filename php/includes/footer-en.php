</main>
<!-- Main Section Ends -->
<?php if ($page == '404') { ?>
<?php } else { ?>
	<!-- User Rating Section Starts -->
	<div class="govbh-section govbh-user-rating bg--light-grey govbh-section--padding-m">
		<div class="container">
			<!-- User rating header section -->
			<div class="govbh-user-rating__head">
				<div class="govbh-user-rating__head-content">
					<div class="govbh-user-rating__head-content-title">Is this page useful to you?</div>
					<div class="govbh-user-rating__head-content-text">
						<p class="m-0">Share your feedback so we can improve your experience.</p>
					</div>
				</div>
				<div class="govbh-user-rating__head-button">
					<button type="button" class="govbh-btn govbh-btn--outline govbh-btn--medium govbh-btn--left-icon"
						aria-label="Is this page useful to you? - Yes" data-bs-toggle="modal" data-bs-target="#smilyfeedback"><i class="ph ph-thumbs-up" aria-hidden="true"></i>
						Yes</button>
					<button type="button"
						class="govbh-btn govbh-btn--outline govbh-btn--medium govbh-btn--left-icon govbh-toggler"
						data-target-on="#sharethoughts" aria-label="Is this page useful to you? - No" aria-controls="sharethoughts" aria-expanded="false"><i
							class="ph ph-thumbs-down" aria-hidden="true"></i>
						No</button><!-- The govbh-toggler and data-target-on attributes are used to target the visibility of the govbh-user-rating__body -->
				</div>
			</div>
			<!-- User rating body section -->
			<div class="govbh-user-rating__body" id="sharethoughts" style="display:none;">
				<div class="govbh-user-rating__body-title">Help us improve Kingdom of Bahrain's Government Websites</div>
				<div class="govbh-user-rating__body-content">
					<p>To help us improve Kingdom of Bahrain's Government Websites, we'd like to know more about your visit
						today.</p>
				</div>
				<form action="#">
					<div class="row gy-2">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="emailaddress">Email Address</label>
								</div>
								<div class="col-12">
									<input type="email" class="form-control" id="emailaddress" placeholder="Enter your email address"
										aria-label="Email Address">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="phone">Phone Number</label>
								</div>
								<div class="col-12">
									<input type="tel" class="form-control" id="phone" placeholder="Phone Number" value=""
										aria-label="Enter your phone number">
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="govbh-form-control form-check" aria-labelledby="id-checkbox-group-label" tabindex="0" role="group">
								<div class="form-label" id="id-checkbox-group-label">What problem did you face?<span>*</span></div>
								<fieldset class="form-check__group bg--grey form-check__group--padding">
									<legend class="visually-hidden"></legend>
									<div class="form-check__item">
										<input type="checkbox" id="option1" name="problemsyouface" value="1"
											aria-label="The information on the page is outdated">
										<label for="option1">The information on the page is outdated</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option2" name="problemsyouface" value="2" checked
											aria-label="This page  or eservice not functioning properly">
										<label for="option2">This page  or eservice not functioning properly</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option3" name="problemsyouface" value="3"
											aria-label="The process/instructions are unclear">
										<label for="option3">The process/instructions are unclear</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option4" name="problemsyouface" value="4"
											aria-label="I could not find what I was searching for">
										<label for="option4">I could not find what I was searching for</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option5" name="problemsyouface" value="5"
											aria-label="Other (please specify)">
										<label for="option5">Other (please specify)</label>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="comments001" id="footertellsomethingyourself">Comments</label>
								</div>
								<div class="col-12">
									<textarea class="form-control form-textarea" name="comments001" id="comments001"
										placeholder="Enter your comments" aria-label="Enter your comments"
										maxlength="300" aria-labelledby="footertellsomethingyourself charecterlimit-usefulpage"></textarea>
									<div id="charecterlimit-usefulpage" class="form-floating__character-limit text-end" aria-live="polite" role="alert">
										<span class="textarea-character-limit"></span> characters remaining</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="govbh-user-rating__body-recaptcha mb-4">
								<p class="govbh-text--extra-small">This form is protected by an invisible captcha. <a href="https://policies.google.com/privacy?hl=en" aria-label="View google privacy policy" rel="noopener noreferrer" target="_blank" class="govbh-is-external">Privacy Policy</a> | <a href="https://policies.google.com/terms?hl=en" target="_blank" aria-label="View google terms of use" rel="noopener noreferrer" class="govbh-is-external">Terms of Use</a></p>
							</div>
							<div class="d-flex flex-wrap gap-3">
								<button type="button" class="govbh-btn govbh-btn--primary">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- User Rating Section Ends -->
<?php } ?>
<footer class="govbh-footer theme--dark pb-0">
	<div class="container">
		<div class="row g-xl-4 g-md-3 g-3">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">Contact Us</div>
				<address class="govbh-footer__body" role="region" aria-labelledby="contact-footer-title">
					<dl>
						<dt><i class="ph ph-map-pin" aria-hidden="true"></i><span class="visually-hidden">Address</span></dt>
						<dd class="govbh-footer__paragraph" id="contact-footer-title">
							<p class="mb-1">Building 517, Road 1010, Manama 410, P. O. Box: 332, Capital Governorate, Kingdom of Bahrain</p>
							<a href="https://www.google.com/maps/place/Survey+and+Land+Registration+Bureau/data=!4m2!3m1!1s0x0:0x5b91813512d8543e?sa=X&ved=1t:2428&ictx=111" target="_blank" aria-label="Get directions to Survey and Land Registration Bureau – opens in a new window" class="govbh-footer__direction govbh-is-external" rel="noopener noreferrer">Get Directions</a>
						</dd>
						<dt><i class="ph ph-phone" aria-hidden="true"></i><span class="visually-hidden">Phone</span></dt>
						<dd><a href="tel:+97317204050" aria-label="Call us at +973 17204050" dir="ltr" class="govbh-footer__tel">+973 17204050</a></dd>
						<dt><i class="ph ph-envelope-simple" aria-hidden="true"></i><span class="visually-hidden">Email</span></dt>
						<dd><a href="mailto:info@slrb.gov.bh" aria-label="Email us at info@slrb.gov.bh" class="govbh-footer__tel">info@slrb.gov.bh</a></dd>
					</dl>
				</address>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">Quick Links</div>
				<div class="govbh-footer__body">
					<ul class="govbh-footer__link">
						<li><a href="#" target="_blank" class="govbh-is-external" rel="noopener noreferrer"
								aria-label="Quick Link 1 - opens in a new window">Quick Link 1</a></li>
						<li><a href="#">Quick Link 2</a></li>
						<li><a href="#">Quick Link 3</a></li>
						<li><a href="#">Quick Link 4</a></li>
						<li><a href="#">Quick Link 5</a></li>
						<li><a href="#">Quick Link 6</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">Related Ministries</div>
				<div class="govbh-footer__body">
					<ul class="govbh-footer__link">
						<li><a href="#">Ministry Link 1</a></li>
						<li><a href="#">Ministry Link 2</a></li>
						<li><a href="#" target="_blank" class="govbh-is-external" rel="noopener noreferrer"
								aria-label="Ministry Link 3 - opens in a new window">Ministry Link 3</a></li>
						<li><a href="#">Ministry Link 4</a></li>
						<li><a href="#">Ministry Link 5</a></li>
						<li><a href="#">Ministry Link 6</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">Subscribe Newsletter</div>
				<div class="govbh-footer__body">
					<form class="govbh-footer__newsletter">
						<div class="govbh-footer__newsletter-input newsletter-input-is-invalid">
							<!-- newsletter-input-is-success, newsletter-input-is-invalid -->
							<input type="email" name="email" value="" id="enteremail" aria-label="Enter your email" placeholder="Enter your email" aria-invalid="true" aria-describedby="newsletteremail-error">
							<button type="button" aria-label="Subscribe to Newsletter"><i class="ph ph-arrow-right"
									aria-hidden="true"></i></button>
						</div>
						<p>By subscribing, I agree to the <a href="#">Privacy Policy</a></p>
						<div id="newsletteremail-error" class="govbh-footer__newsletter--validation-message"><i class="ph ph-warning"></i> Invalid email format.</div>
					</form>
				</div>
				<!-- Social WIdget Starts -->
				<div class="govbh-footer__solcial-widget mt-2">
					<div class="govbh-fs-h5">Follow us</div>
					<ul>
						<li><a href="#" target="_blank" aria-label="Follow us on Facebook"
								rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true"></span></a>
						</li>
						<li><a href="#" target="_blank" aria-label="Follow us on Instagram"
								rel="noopener noreferrer"><span class="icon-instagram" aria-hidden="true"></span></a>
						</li>
						<li><a href="#" target="_blank" aria-label="Follow us on LinkedIn"
								rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true"></span></a>
						</li>
						<li><a href="#" target="_blank" aria-label="Follow us on Twitter"
								rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true"></span></a></li>
						<li><a href="#" target="_blank" aria-label="Follow us on Youtube"
								rel="noopener noreferrer"><span class="icon-youtubeicon" aria-hidden="true"></span></a></li>
					</ul>
				</div>
				<!-- Social WIdget Ends -->
			</div>
			<div class="col-12">
				<div class="hr m-0"></div>
			</div>
			<div class="col-12">
				<div class="govbh-footer__logos">
					<div class="govbh-footer__logos-col">
						<a href="index.html" target="_blank" rel="noopener noreferrer"><img loading="lazy"
								src="../images/bahrain-government-design-system-white-logo.svg" alt="Gov bahrain Logo"
								width="272" height="70"></a>
					</div>
					<div class="hr m-0 d-lg-none d-md-block d-block"></div>
					<div class="govbh-footer__logos-col-services">
						<a href="https://services.bahrain.bh/wps/portal/tawasul/en/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8ziLSzcnQ2NLIy8DHx9LAwcAwIsHC0DnI0NjMz1wwkpiAJKG-AAjgZA_VFgJXAT_ENcHA0cHb38jdx8TI0M_I2gCtB1OgUZORkbGLjjUIBiSUFuhEGmp6MiANMfdc4!/dz/d5/L0lDUmlTV0EhL3dPa0FKRnRnLzROV3FpQSEhL2Vu/"
							target="_blank" rel="noopener noreferrer"
							aria-label="Tawasul - the National Suggestion & Complaint system - Open in a new window">
							<img loading="lazy" src="../images/tawasul.svg"
								alt="Tawasul - the National Suggestion & Complaint system" width="146" height="50">
						</a>
						<a href="https://www.bahrain.bh/" target="_blank" rel="noopener noreferrer"
							aria-label="Bahrain's National Portal - Open in a new window">
							<img loading="lazy" src="../images/bahrainbh.svg" alt="Bahrain's National Portal"
								width="180" height="26">
						</a>
						<a href="https://www.bahrain.bh/wps/portal/en/BNP/BahrainAtAGlance/Bahrain2030" target="_blank"
							rel="noopener noreferrer" aria-label="Bahrain Economic Vision 2030 - Open in a new window">
							<img loading="lazy" src="../images/2030.svg" alt="Bahrain Economic Vision 2030" width="67"
								height="60">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="govbh-footer__menu">
		<div class="container">
			<div class="govbh-footer__menu-col">
				<div class="govbh-footer__lastupdate">
					<p><i class="ph ph-clock" aria-hidden="true"></i> Site Last Updated: 29 May 2025</p>
				</div>
				<ul>
					<li><a href="terms-of-use.html">Terms of Use</a></li>
					<li><a href="privacy-policy.html">Privacy Policy</a></li>
					<li><a href="accessibility.html">Accessibility</a></li>
					<li><a href="eparticipation.html">eParticipation</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
				</ul>
			</div>
			<div class="govbh-footer__copyrights">
				<p>©
					<script>var d = new Date(); document.write(d.getFullYear());</script> [Name of the Ministry], All
					rights reserved.
				</p>
			</div>
		</div>
	</div>

	<!-- SCROLL TO TOP STARTS -->
	<button type="button" aria-label="Back to Top" class="govbh-scrollToTopBtn"><span
			class="icon-arrowup"></span></button>
	<!-- SCROLL TO TOP ENDS -->

	<!-- Poll Poup Model -->
	<div class="govbh-modal modal fade" id="pollpopup" tabindex="-1"
		aria-labelledby="pollpopup" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-body model-body__center">
					<div class="model-body__icon"><i class="ph ph-smiley" aria-hidden="true"></i></div>
					<div class="model-body__title">Thank You!</div>
					<div class="model-body__text">Thank you for participating in our online poll</div>
					<div class="d-flex flex-wrap gap-3 justify-content-center mt-4 mb-4">
						<button type="button" class="govbh-btn govbh-btn--outline m-0" data-bs-dismiss="modal">Close</button>
						<button type="button" class="govbh-btn govbh-btn--primary m-0">View Poll Results <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Smily Model -->
	<div class="govbh-modal modal fade" id="smilyfeedback" tabindex="-1"
		aria-labelledby="smilyfeedback" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-body model-body__center">
					<div class="model-body__icon"><i class="ph ph-smiley" aria-hidden="true"></i></div>
					<div class="model-body__title">Thank You!</div>
					<div class="model-body__text">We are glad that you are satisfied with our services.</div>
					<button type="button" class="govbh-btn govbh-btn--primary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Smily Meh Model -->
	<div class="govbh-modal modal fade" id="smilymehfeedback" tabindex="-1"
		aria-labelledby="smilymehfeedback" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-body model-body__center">
					<div class="model-body__icon"><i class="ph ph-smiley-meh text--tertiary" aria-hidden="true"></i>
					</div>
					<div class="model-body__title">Thank you for participating</div>
					<div class="model-body__subtitle">Would you like to share your feedback?</div>
					<div class="col-12 pt-3">
						<div class="d-flex flex-wrap gap-3 justify-content-center">
							<button type="button" class="govbh-btn govbh-btn--outline mt-0" data-bs-dismiss="modal">No</button>
							<button type="button" class="govbh-btn govbh-btn--primary mt-0 govbh-open-user-rating" data-bs-dismiss="modal">Yes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sad Model -->
	<div class="govbh-modal modal fade" id="sadfeedback" tabindex="-1"
		aria-labelledby="sadfeedback" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-body model-body__center">
					<div class="model-body__icon"><i class="ph ph-smiley-sad text--accent" aria-hidden="true"></i></div>
					<div class="model-body__title">Sorry about your feedback</div>
					<div class="model-body__subtitle">Would you like to share your feedback?</div>
					<div class="col-12 pt-3">
						<div class="d-flex flex-wrap gap-3 justify-content-center">
							<button type="button" class="govbh-btn govbh-btn--outline mt-0" data-bs-dismiss="modal">No</button>
							<button type="button" class="govbh-btn govbh-btn--primary mt-0  govbh-open-user-rating" data-bs-dismiss="modal">Yes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- Script Starts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
	integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
	crossorigin="anonymous"></script>
<!-- Icons -->
<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2"></script>
<!-- Swiper Slider -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Accessibility Widget -->
<!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->
<!-- Internation Telephone -->
<script src="../js/intlTelInput.min.js"></script>
<?php if ($page == 'index' || $page == 'index-02' || $page == 'index-03' || $page == 'index-04') { ?>
<?php } else { ?>
	<!-- Daterange Picker -->
	<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<!-- Select2 Dropdown -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- MultiSelect Select Dropdown -->
	<script src="../js/jquery.multiselect.js"></script>
	<!-- File Upload Dropzone -->
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<?php } ?>
<!-- Colorbox -->
<script src="../js/jquery.colorbox.js"></script>
<!-- Sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.0/dist/sweetalert2.all.min.js"></script>
<?php
if ($page == 'table' || $page == 'statistics'|| $page == 'general-template') {
	?>
	<!-- DataTable -->
	<script src="../js/datatables.min.js"></script>
	<script src="../js/govbh-datatable.js"></script>
<?php } ?>

<!-- Header Sticky -->
<script src="../js/govbh-menu-sticky.js"></script>
<!-- Text Localization -->
<script src="../js/govbh-lang.js"></script>
<!-- Library -->
<script src="../js/govbh-library.min.js"></script>
<!-- Utils -->
<script src="../js/govbh-utils.js"></script>
<!-- smartmenus -->
<script src="../js/jquery.smartmenus.min.js"></script>
<!-- Themes -->
<script src="../js/govbh-themes-0.0.1.js"></script>

<?php
if ($page == 'index' || $page == 'index-02' || $page == 'index-03' || $page == 'index-04' || $page == 'map' || $page == 'contact-us' || $page == 'contact-us-2' || $page == 'events-detail-page') {
	?>
	<!-- Leaflet Map -->
	<script src="../js/leaflet.min.js" defer></script>
	<script src="../js/govbh-map-script.js" defer></script>
<?php } ?>
<!-- Script Ends -->
</body>

</html>