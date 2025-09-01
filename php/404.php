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
                <div class="govbh-error-block__title">The page might have been moved or  no longer exists</div>
                <div class="govbh-error-block__content pb-2"><p>Use the search tool on the header area or click below to go to the homepage.</p></div>
                <a href="index.html" role="button" aria-label="Go to home page" class="govbh-btn govbh-btn--primary govbh-btn--left-icon"><i class="ph ph-house" aria-hidden="true"></i> Go to Homepage</a>
            </div>
            <!-- Content Ends -->
        </div>
    </section>
    <!-- Content Section Ends -->


<?php 
include "includes/footer.php";
?>