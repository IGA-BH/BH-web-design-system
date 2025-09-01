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
					<div class="govbh-user-rating__head-content-title">هل هذه الصفحة مفيدة لك؟</div>
					<div class="govbh-user-rating__head-content-text">
						<p class="m-0">شاركنا تعليقك حتى نتمكن من تحسين تجربتك.</p>
					</div>
				</div>
				<div class="govbh-user-rating__head-button">
					<button type="button" class="govbh-btn govbh-btn--outline govbh-btn--medium govbh-btn--left-icon"
						aria-label="Is this page useful to you? - Yes" data-bs-toggle="modal" data-bs-target="#smilyfeedback"><i class="ph ph-thumbs-up" aria-hidden="true"></i>
						نعم</button>
					<button type="button"
						class="govbh-btn govbh-btn--outline govbh-btn--medium govbh-btn--left-icon govbh-toggler"
						data-target-on="#sharethoughts" aria-label="Is this page useful to you? - No" aria-controls="sharethoughts" aria-expanded="false"><i
							class="ph ph-thumbs-down" aria-hidden="true"></i>
						لا</button><!-- The govbh-toggler and data-target-on attributes are used to target the visibility of the govbh-user-rating__body -->
				</div>
			</div>
			<!-- User rating body section -->
			<div class="govbh-user-rating__body" id="sharethoughts" style="display:none;">
				<div class="govbh-user-rating__body-title">ساعدنا لتحسين البوابة الوطنية لمملكة البحرين</div>
				<div class="govbh-user-rating__body-content">
					<p>لمساعدتنا في تحسين البوابة الوطنية لمملكة البحرين، يسرنا معرفة المزيد عن زيارتك اليوم.</p>
				</div>
				<form action="#">
					<div class="row gy-2">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="emailaddress">عنوان البريد الإلكتروني</label>
								</div>
								<div class="col-12">
									<input type="email" class="form-control" id="emailaddress"
										placeholder="عنوان البريد الإلكتروني" aria-label="Enter your email address">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="phone">رقم الهاتف</label>
								</div>
								<div class="col-12">
									<input type="tel" class="form-control" id="phone" placeholder="رقم الهاتف" value=""
										aria-label="Enter your phone number">
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="govbh-form-control form-check">
								<div class="form-label">ما هي المشكلة التي تواجهك؟<span>*</span></div>
								<fieldset class="form-check__group bg--grey form-check__group--padding">
									<legend class="visually-hidden"></legend>
									<div class="form-check__item">
										<input type="checkbox" id="option1" name="problemsyouface" value="1"
											aria-label="Information not up to date">
										<label for="option1">المعلومات غير محدثة</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option2" name="problemsyouface" value="2" checked
											aria-label="Information not complete">
										<label for="option2">المعلومات غير كاملة</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option3" name="problemsyouface" value="3"
											aria-label="Page contains spelling/grammar mistakes">
										<label for="option3">الصفحة فيها أخطاء إملائية/ نحوية</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option4" name="problemsyouface" value="4"
											aria-label="Page contains broken links">
										<label for="option4">الصفحة فيها روابط غير مفعلة</label>
									</div>
									<div class="form-check__item">
										<input type="checkbox" id="option5" name="problemsyouface" value="5"
											aria-label="Other">
										<label for="option5">أخرى</label>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="govbh-form-control form-group row g-0">
								<div class="col-12">
									<label for="comments001" id="footertellsomethingyourself">تعليقات</label>
								</div>
								<div class="col-12">
									<textarea class="form-control form-textarea" name="comments001" id="comments001"
										placeholder="تفضل بكتابة تعليقك " aria-label="Enter your comments"
										maxlength="300" aria-labelledby="footertellsomethingyourself charecterlimit-usefulpage"></textarea>
									<div id="charecterlimit-usefulpage" class="form-floating__character-limit text-end" aria-live="polite" role="alert">
										<span class="textarea-character-limit"></span> الحروف المتبقية</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="govbh-user-rating__body-recaptcha mb-4">
								<p class="govbh-text--extra-small">هذه الاستمارة محمية باختبار reCAPTCHA غير المرئي <a href="https://policies.google.com/privacy?hl=ar" aria-label="View google privacy policy" rel="noopener noreferrer" target="_blank" class="govbh-is-external">الخصوصية</a> | <a href="https://policies.google.com/terms?hl=ar" target="_blank" aria-label="View google terms of use" rel="noopener noreferrer" class="govbh-is-external">الشروط والأحكام</a></p>
							</div>
							<div class="d-flex flex-wrap gap-3">
								<button type="button" class="govbh-btn govbh-btn--primary">إرسال</button>
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
				<div class="govbh-footer__head govbh-fs-h5">اتصل بنا</div>
				<address class="govbh-footer__body" role="region" aria-labelledby="contact-footer-title">
					<dl>
						<dt><i class="ph ph-map-pin" aria-hidden="true"></i><span class="visually-hidden">العنوان</span></dt>
						<dd class="govbh-footer__paragraph" id="contact-footer-title">
							<p class="mb-1">مبنى 517، طريق 1010، المنامة 410، ص.ب. 332، محافظة العاصمة، مملكة البحرين</p>
                            <a href="https://www.google.com/maps/place/Survey+and+Land+Registration+Bureau/data=!4m2!3m1!1s0x0:0x5b91813512d8543e?sa=X&ved=1t:2428&ictx=111" target="_blank" aria-label="Get directions to Survey and Land Registration Bureau – opens in a new window" class="govbh-footer__direction govbh-is-external" rel="noopener noreferrer">للحصول على الاتجاهات</a>
						</dd>
						<dt><i class="ph ph-phone" aria-hidden="true"></i><span class="visually-hidden">الهاتف</span></dt>
						<dd><a href="tel:+97317204050" aria-label="Call us at +973 17204050" dir="ltr" class="govbh-footer__tel">+973 17204050</a></dd>
						<dt><i class="ph ph-envelope-simple" aria-hidden="true"></i><span class="visually-hidden">البريد الإلكتروني</span></dt>
						<dd><a href="mailto:info@slrb.gov.bh" aria-label="Email us at info@slrb.gov.bh" class="govbh-footer__tel">info@slrb.gov.bh</a></dd>
					</dl>
				</address>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">روابط سريعة</div>
				<div class="govbh-footer__body">
					<ul class="govbh-footer__link">
						<li><a href="#" target="_blank" class="govbh-is-external" rel="noopener noreferrer"
								aria-label="روابط سريعة 1 - opens in a new window">روابط سريعة 1</a></li>
						<li><a href="#">روابط سريعة 2</a></li>
						<li><a href="#">روابط سريعة 3</a></li>
						<li><a href="#">روابط سريعة 4</a></li>
						<li><a href="#">روابط سريعة 5</a></li>
						<li><a href="#">روابط سريعة 6</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">وزارات ذات علاقة</div>
				<div class="govbh-footer__body">
					<ul class="govbh-footer__link">
						<li><a href="#">رابط الوزارة 1</a></li>
						<li><a href="#">رابط الوزارة 2</a></li>
						<li><a href="#" target="_blank" class="govbh-is-external" rel="noopener noreferrer"
								aria-label="رابط الوزارة 3 - opens in a new window">رابط الوزارة 3</a></li>
						<li><a href="#">رابط الوزارة 4</a></li>
						<li><a href="#">رابط الوزارة 5</a></li>
						<li><a href="#">رابط الوزارة 6</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="govbh-footer__head govbh-fs-h5">اشترك في نشرة الأخبار</div>
				<div class="govbh-footer__body">
					<form class="govbh-footer__newsletter">
						<div class="govbh-footer__newsletter-input newsletter-input-is-invalid">
							<!-- newsletter-input-is-success, newsletter-input-is-invalid -->
							<input type="text" name="email" value="" id="enteremail" aria-label="Enter your email"
								placeholder="أدخل بريدك الإلكتروني" aria-invalid="true" aria-describedby="newsletteremail-error">
							<button type="button" aria-label="Subscribe to Newsletter"><i class="ph ph-arrow-right"
									aria-hidden="true"></i></button>
						</div>
						<p>بتفعيلي للاشتراك، أوافق على سياسة الخصوصية <a href="#">سياسة الخصوصية</a></p>
						<div id="newsletteremail-error" class="govbh-footer__newsletter--validation-message"><i class="ph ph-warning"></i> تنسيق البريد الإلكتروني غير صالح.</div>
					</form>
				</div>
				<!-- Social WIdget Starts -->
				<div class="govbh-footer__solcial-widget mt-2">
					<div class="govbh-fs-h5">تابعنا</div>
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
								src="../images/bahrain-government-design-system-white-logo-ar.svg"
								alt="Gov bahrain Logo" width="272" height="70"></a>
					</div>
					<div class="hr m-0 d-lg-none d-md-block d-block"></div>
					<div class="govbh-footer__logos-col">
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
					<p><i class="ph ph-clock" aria-hidden="true"></i> آخر تحديث للموقع: 29 مايو 2025</p>
				</div>
				<ul>
					<li><a href="terms-of-use.html">شروط الاستخدام</a></li>
					<li><a href="privacy-policy.html">سياسة الخصوصية</a></li>
					<li><a href="accessibility.html">سهولة الوصول</a></li>
					<li><a href="eparticipation.html">المشاركة الإلكترونية</a></li>
					<li><a href="sitemap.html">خريطة الموقع</a></li>
				</ul>
			</div>
			<div class="govbh-footer__copyrights">
				<p>©
					<script>var d = new Date(); document.write(d.getFullYear());</script> [اسم الوزارة]، جميع الحقوق
					محفوظة.
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
					<div class="model-body__title">شكراً لك!</div>
					<div class="model-body__text">نشكرك على المشاركة في استطلاعنا عبر الإنترنت</div>
					<div class="d-flex flex-wrap gap-3 justify-content-center mt-4 mb-4">
						<button type="button" class="govbh-btn govbh-btn--outline m-0" data-bs-dismiss="modal">إغلاق</button>
						<button type="button" class="govbh-btn govbh-btn--primary m-0">عرض نتائج الاستطلاع <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
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
					<div class="model-body__title">شكراً لك!</div>
					<div class="model-body__text">يسرنا رضاك عن خدماتنا.</div>
					<button type="button" class="govbh-btn govbh-btn--primary" data-bs-dismiss="modal">إغلاق <i
							class="ph ph-x" aria-hidden="true"></i></button>
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
					<div class="model-body__title">شكرا لك على المشاركة</div>
					<div class="model-body__subtitle">هل ترغب في مشاركة تعليقاتك؟</div>
					<div class="col-12 pt-3">
						<div class="d-flex flex-wrap gap-3 justify-content-center">
							<button type="button" class="govbh-btn govbh-btn--outline mt-0" data-bs-dismiss="modal">لا</button>
							<button type="button" class="govbh-btn govbh-btn--primary mt-0  govbh-open-user-rating" data-bs-dismiss="modal">نعم</button>
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
					<div class="model-body__title">آسف على تعليقك</div>
					<div class="model-body__subtitle">هل ترغب في مشاركة تعليقاتك؟</div>
					<div class="col-12 pt-3">
						<div class="d-flex flex-wrap gap-3 justify-content-center">
							<button type="button" class="govbh-btn govbh-btn--outline mt-0" data-bs-dismiss="modal">لا</button>
							<button type="button" class="govbh-btn govbh-btn--primary mt-0 govbh-open-user-rating" data-bs-dismiss="modal">نعم</button>
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
<script src="../js/govbh-lang-ar.js"></script>
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