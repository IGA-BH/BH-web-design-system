<?php
include "../globals.php";
$page = 'photos-and-videos';
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
                    <li class="govbh-breadcrumb__item-last" aria-current="page">Photos & Videos</li>
                </ul>
            </nav>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <h1>Photos & Videos</h1>
            </div>
            <div
                class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-sm-start justify-content-start">
                <div class="govbh-sharethis govbh-sharethis--vertical theme--dark" role="region" aria-label="Share this page on Social Media" tabindex="0">
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
        </div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<!-- Photos & Videos Section Starts -->
<section class="govbh-section" aria-labelledby="photos-videos-title">
    <div class="container">
        <!-- Search Container Starts -->
        <form action="#" autocomplete="on" class="govbh-search-card bg--grey mb-lg-5 mb-md-4 mb-4">
            <div class="govbh-search-card__title govbh-fs-h5 text--brand">Search Photos & Videos</div>
            <div class="govbh-search-card__head">
                <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                    <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                    <input type="search" class="form-control" id="floatingInput" aria-label="Enter your keyword" placeholder="">
                    <label for="floatingInput">Enter your keyword</label>
                </div>
                <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i
                        class="ph ph-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="row g-2 m-0">
                <div class="col-12">
                    <div class="govbh-advanced-search">
                        <button type="button" class="govbh-advanced-search__head govbh-toggler m-0"
                            data-target-on="#advancesearch" aria-expanded="false">
                            <i class="ph-fill ph-caret-down" aria-hidden="true"></i> <span>Show</span> Advanced Search
                        </button>
                        <div class="govbh-advanced-search__body" id="advancesearch" style="display:none;">
                            <fieldset>
                                <legend class="visually-hidden">Advanced Search Field</legend>
                                <div class="row g-4">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="Search a Category"
                                                data-placeholder="Select Category" data-columns="1" data-select-all="yes"
                                                data-select-all-text="Select All" data-unselect-all-text="Unselect All"
                                                data-selected-option-text=" selected" multiple id="select-002">
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 1</option>
                                                <option value="3">Value 3</option>
                                                <option value="4">Value 4</option>
                                                <option value="5">Value 5</option>
                                                <option value="6">Value 6</option>
                                                <option value="7">Value 7</option>
                                            </select>
                                            <label for="select-002">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div
                                            class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                            <select class="with-search" data-placeholder-search="Search a Category"
                                                data-placeholder="Select Category" data-columns="1" data-select-all="yes"
                                                data-select-all-text="Select All" data-unselect-all-text="Unselect All"
                                                data-selected-option-text="selected" multiple id="select-003">
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 1</option>
                                                <option value="3">Value 3</option>
                                                <option value="4">Value 4</option>
                                                <option value="5">Value 5</option>
                                                <option value="6">Value 6</option>
                                                <option value="7">Value 7</option>
                                            </select>
                                            <label for="select-003">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="govbh-btn govbh-btn--primary"
                                            aria-label="Click here to search">Search <i class="ph ph-arrow-right"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Search Container Ends -->

        <!-- List Grid Starts -->
        <div role="region" aria-label="All Photos & Videos">
            <!-- Title and Sort by Starts -->
            <div class="row align-items-center g-3 mb-4">
                <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                    <h2 id="photos-videos-title" class="m-0">All Photos & Videos</h2><!-- id comes from section aria-labelledby -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" aria-labelledby="sort-options">
                    <div class="d-flex justify-content-end gap-2">
                        <div class="visually-hidden" id="sort-options">Sort Option</div>
                        <div class="govbh-form-control form-floating govbh-form-control--select"
                            aria-labelledby="sort-options">
                            <select class="form-select select2" id="select-001" name="select-001">
                                <option value="">Select Sort Option</option>
                                <option value="1">Name Ascending</option>
                                <option value="2">Name Descending</option>
                            </select>
                            <label for="select-001">Sort by</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title and Sort by Ends -->

            <div class="row g-4 mb-md-5 mb-sm-4 mb-4">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-1" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/banner-021.webp" alt="Image: Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-1" class="govbh-card__title mb-0"><a role="button" class="cbbox-01" data-cb-gallery="cbbox-01" data-cb-type="photo" href="../images/photos-videos/1.webp" title="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)"
                                        aria-label="View Gallery: Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)">Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)</a></h3>
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                    <!-- ColorBox Gallery -->
                    <div class="d-none">
                        <a class="cbbox-01" aria-label="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)" title="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT) 2" href="../images/photos-videos/2.webp"></a>
                        <a class="cbbox-01" aria-label="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)" title="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT) 3" href="../images/photos-videos/3.webp"></a>
                        <a class="cbbox-01" aria-label="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT)" title="Minister's visit to the Bahrain Institute for Pearls and Gemstones (DANAT) 4" href="../images/photos-videos/4.webp"></a>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-2" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/banner-013.webp" alt="Image: Meeting of a relevant minister with a relevant minister" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-2" class="govbh-card__title mb-0"><a role="button" class="cbbox-02" data-cb-gallery="cbbox-02" data-cb-type="photo" href="../images/photos-videos/4.webp" title="Meeting of a relevant minister with a relevant minister"
                                        aria-label="View Gallery: Meeting of a relevant minister with a relevant minister">Meeting of a relevant minister with a relevant minister</a></h3>
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                    <!-- ColorBox Gallery -->
                    <div class="d-none">
                        <a class="cbbox-02" aria-label="Meeting of a relevant minister with a relevant minister 2" title="Meeting of a relevant minister with a relevant minister 2" href="../images/photos-videos/3.webp"></a>
                        <a class="cbbox-02" aria-label="Meeting of a relevant minister with a relevant minister 3" title="Meeting of a relevant minister with a relevant minister 3" href="../images/photos-videos/1.webp"></a>
                        <a class="cbbox-02" aria-label="Meeting of a relevant minister with a relevant minister 4" title="Meeting of a relevant minister with a relevant minister 4" href="../images/photos-videos/2.webp"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-3" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/banner-018.webp" alt="Play Video: Approval to continue strengthening cooperation ties between Bahrain and the Egypt" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-3" class="govbh-card__title mb-0"><a role="button" class="cbbox-03" data-cb-gallery="cbbox-03" data-cb-type="video" href="https://www.youtube.com/embed/KCPvImAdC5o?rel=0&amp;wmode=transparent&amp;autoplay=1" title="Approval to continue strengthening cooperation ties between Bahrain and the Egypt, YouTube video, 82 seconds, Arabic only"
                                        aria-label="Play video: Approval to continue strengthening cooperation ties between Bahrain and the Egypt, YouTube video, 82 seconds, Arabic only">Approval to continue strengthening cooperation ties between Bahrain and the Egypt</a></h3>

                                
                                <!-- Transcript Starts -->
                                <div class="govbh-image-block__transcript visually-hidden">
                                    <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-1" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-1" role="button">Show Transcript</a>
                                    <div id="video-transcript-1" style="display:none">
                                    <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                        Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                        [Cut to an architect pointing at a blueprint of the plant]                                            
                                        Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                        [Scene transitions to a team of engineers inspecting the construction site]                                            
                                        Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                                    </div>
                                </div>
                                <!-- Transcript Ends -->
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                    <!-- ColorBox Gallery -->
                    <div class="d-none">
                        <a class="cbbox-03" aria-label="Play video: Approval to continue strengthening cooperation ties between Bahrain and the Egypt, YouTube video, 82 seconds, Arabic only" title="Approval to continue strengthening cooperation ties between Bahrain and the Egypt, YouTube video, 82 seconds, Arabic only" href="../html/local-video-iframe-source.html"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-4" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/banner-019.webp" alt="Image: His Majesty the King's approval and issuance of Law (11) of 2025" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-4" class="govbh-card__title mb-0"><a role="button" class="cbbox-04" data-cb-gallery="cbbox-04" data-cb-type="photo" href="../images/photos-videos/5.webp" title="His Majesty the King's approval and issuance of Law (11) of 2025"
                                        aria-label="View Gallery: His Majesty the King's approval and issuance of Law (11) of 2025">His Majesty the King's approval and issuance of Law (11) of 2025</a></h3>
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-5" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/banner-020.webp" alt="Play Video: Launching investment opportunities in government lands" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-video" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-fill ph-play-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-5" class="govbh-card__title mb-0"><a role="button" class="cbbox-05" data-cb-gallery="cbbox-05" data-cb-type="video" href="https://www.youtube.com/embed/KCPvImAdC5o?rel=0&amp;wmode=transparent&amp;autoplay=1" title="Launching investment opportunities in government lands (YouTube video, 82 seconds, Arabic only)"
                                        aria-label="Play video: Launching investment opportunities in government lands (YouTube video, 82 seconds, Arabic only)">Launching investment opportunities in government lands</a></h3>
                                <!-- Transcript Starts -->
                                <div class="govbh-image-block__transcript visually-hidden">
                                    <a href="javascript:void(0)" class="govbh-toggler" data-target-on="#video-transcript-2" aria-expanded="false" aria-label="Show Transcript" data-aria-expanded-text="Hide Transcript" data-toggled-text="Hide Transcript" aria-controls="video-transcript-2" role="button">Show Transcript</a>
                                    <div id="video-transcript-2" style="display:none">
                                    <p>Video Transcript: [Opening shot of a construction site with workers and machinery] 
                                        Narrator: "As part of our commitment to sustainable development, we are excited to announce the project to develop a new power and water plant in Sitra. This groundbreaking initiative aims to revolutionize the way we produce and distribute essential resources in the region."                                            
                                        [Cut to an architect pointing at a blueprint of the plant]                                            
                                        Architect: "The new plant will feature state-of-the-art technology to maximize efficiency and minimize environmental impact. By integrating renewable energy sources and advanced water treatment processes, we are setting a new standard for power and water infrastructure."                                            
                                        [Scene transitions to a team of engineers inspecting the construction site]                                            
                                        Engineer: "Our team of dedicated engineers and technicians is working tirelessly to ensure that every aspect of the project meets the highest standards of quality and safety. From design to implementation, we are committed to excellence every step of the way."</p>
                                    </div>
                                </div>
                                <!-- Transcript Ends -->
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <article role="region" aria-labelledby="media-title-6" class="govbh-card govbh-card--with-image">
                        <div class="govbh-card__head">
                            <div class="govbh-card__head-image">
                                <img src="../images/photos-videos/7-thumb.webp" alt="Image: Participation of a relevant minister in the activities of the World Economic Forum" loading="lazy" width="416"
                                    height="234">
                                <div class="govbh-card__head-thumb"><i class="ph ph-images" aria-hidden="true"></i></div>
                                <div class="govbh-card__head-play"><i class="ph-thin ph-plus" aria-hidden="true"></i></div>
                            </div>
                            <div class="govbh-card__head-content">
                                <div class="govbh-card__date">29 May, 2024</div>
                                <h3 id="media-title-6" class="govbh-card__title mb-0"><a role="button" class="cbbox-06" data-cb-gallery="cbbox-06" data-cb-type="photo" href="../images/photos-videos/7.webp" title="Participation of a relevant minister in the activities of the World Economic Forum"
                                        aria-label="View Gallery: Participation of a relevant minister in the activities of the World Economic Forum">Participation of a relevant minister in the activities of the World Economic Forum</a></h3>
                            </div>
                        </div>
                        <div class="govbh-card__foot">
                            <div class="govbh-card__foot-icon"><i class="ph ph-arrow-right" aria-hidden="true"></i></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <!-- List Grid ENds -->

        <!-- Pagination Starts -->
        <div class="govbh-pagination">
            <nav aria-label="Browse pages">
                <ul>
                    <li class="govbh-pagination__prev"><a href="#" aria-label="First Page" rel="first"><i
                                class="ph ph-caret-double-left"></i> <span>First</span></a></li>
                    <li class="govbh-pagination__prev"><a href="#" aria-label="Previous Page" rel="prev"><i
                                class="ph ph-caret-left"></i> <span>Prev</span></a></li>
                    <li><a href="#" aria-label="Page 1">1</a></li>
                    <li><a href="#" aria-label="Page 2">2</a></li>
                    <li class="govbh-pagination__current" aria-current="page" title="Page 3">3</li>
                    <li class="govbh-pagination__truncate" title="Pages">...</li>
                    <li><a href="#" aria-label="Page 4">4</a></li>
                    <li class="govbh-pagination__next"><a href="#" aria-label="Next Page" rel="next"><span>Next</span> <i
                                class="ph ph-caret-right"></i></a></li>
                    <li class="govbh-pagination__next"><a href="#" aria-label="Last Page" rel="last"><span>Last</span> <i
                                class="ph ph-caret-double-right"></i></a></li>
                </ul>
            </nav>
            <div class="govbh-pagination__info">Showing 2 to 10 of 100 records</div>
        </div>
        <!-- Pagination Ends -->

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
<!-- Photos & Videos Section Ends -->

<!-- Related pages Section Starts -->
<section class="govbh-section bg--grey" aria-labelledby="related-page-title" tabindex="0">
    <div class="container">
        <!-- Carousel Starts -->
        <div class="govbh-carousel" data-carousel="custom" data-slidesperview-xxxs="1" data-slidesperview-xxs="1"
            data-slidesperview-xs="2" data-slidesperview-md="2" data-slidesperview-lg="3" data-slidesperview-xl="3">
            <div class="row align-items-center mb-3">
                <div class="col-md-6 col-sm-8 col-9">
                    <h2 id="related-page-title" class="m-0">Related Pages</h2>
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
            <div class="govbh-carousel__slider swiper" aria-roledescription="carousel" role="region" aria-label="Related Pages Slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" tabindex="0" role="group">
                        <article role="region" aria-labelledby="related-title-1"
                            class="govbh-card govbh-card--icon-without-circle">
                            <div class="govbh-card__head">
                                <div class="govbh-card__head-content">
                                    <h3 id="related-title-1" class="govbh-card__title"><a href="#"
                                            aria-label="Click here to open - Message from the President">Message from
                                            the President</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
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
                                            aria-label="Click here to open - History">History</a></h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
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
                                            aria-label="Click here to open - Executive Profiles">Executive Profiles</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
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
                                            aria-label="Click here to open - Ministry Overview">Ministry Overview</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="govbh-card__foot pe-none">
                                <div class="govbh-card__foot-button">
                                    <div class="govbh-btn govbh-btn--outline govbh-btn--medium z-1">Read More <i
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