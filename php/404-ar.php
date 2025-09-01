<?php
include "../globals.php";
$page = '404';
include "includes/header.php"; 
?>


    <!-- Content Section Starts -->
    <section class="govbh-section" id="404-page-title" aria-describedby="404-page-title">
        <div class="container">
            <!-- Content Starts -->
            <div class="govbh-error-block">
                <h1>404</h1>
                <div class="govbh-error-block__title">ربما تم نقل الصفحة أو لم تعد موجودة</div>
                <div class="govbh-error-block__content pb-2"><p>استخدم أداة البحث في منطقة الرأس أو انقر أدناه للانتقال إلى الصفحة الرئيسية.</p></div>
                <a href="index.html" role="button" aria-label="Go to home page" class="govbh-btn govbh-btn--primary govbh-btn--left-icon"><i class="ph ph-house" aria-hidden="true"></i> انتقل إلى الصفحة الرئيسية</a>
            </div>
            <!-- Content Ends -->
        </div>
    </section>
    <!-- Content Section Ends -->


<?php 
include "includes/footer.php";
?>