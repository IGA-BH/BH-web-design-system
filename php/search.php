<?php
include "../globals.php";
$page = 'search';
include "includes/header.php"; 
?>


    <!-- Dark Breadcrumb Starts -->
    <div class="govbh-section govbh-breadcrumb theme--dark bg--brand" role="breadcrumbs">
        <div class="container">
            <div class="row g-2">
                <div class="col-12">
                    <h1>Search</h1>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <ul class="govbh-breadcrumb__group">
                        <li class="govbh-breadcrumb__item-home">
                            <a href="index.html" aria-label="Go to home"><i class="ph ph-house" aria-hidden="true"></i><span>Home</span></a>
                        </li>
                        <li><a href="#">Component</a></li>
                        <li class="govbh-breadcrumb__item-last" aria-current="page">Search</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="govbh-sharethis theme--dark justify-content-lg-end justify-content-md-start justify-content-start">
                    <div class="govbh-sharethis__title">Share this page:</div>
                        <ul>
                            <li><a href="#" target="__blank" aria-label="Facebook" rel="noopener noreferrer"><span class="icon-facebook" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="__blank" aria-label="LinkedIn" rel="noopener noreferrer"><span class="icon-linkedin" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="__blank" aria-label="Whatsapp" rel="noopener noreferrer"><span class="icon-whatsapp" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="__blank" aria-label="Twitter" rel="noopener noreferrer"><span class="icon-twitter" aria-hidden="true" role="presentation"></span></a></li>
                            <li><a href="#" target="__blank" aria-label="Email" rel="noopener noreferrer"><span class="icon-mail"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="govbh-section">
        <div class="container">
            <h2>Search</h2>
            <p>Search inputs allow users to find content by entering a search term.</p>
            <div class="govbh-boxshadow-container">
                <h6>Default</h6>
                <div class="govbh-search-card p-0">
                    <div class="govbh-search-card__head">
                        <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                            <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Text">
                            <label for="floatingInput">Enter your keyword</label>
                        </div>
                        <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="hr mt-3"></div>
                <h6>With Advanced Search (Collapsed)</h6>
                <div class="govbh-search-card p-0">
                    <div class="govbh-search-card__head">
                        <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                            <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Text">
                            <label for="floatingInput">Enter your keyword</label>
                        </div>
                        <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                    </div>
                    <form class="row g-2 m-0">
                        <div class="col-12">
                            <div class="govbh-advanced-search">
                                <a href="#" class="govbh-advanced-search__head govbh-toggler" data-target-on="#advancesearch">
                                    <i class="ph-fill ph-caret-down" aria-hidden="true"></i> <span>Show</span> Advanced Search
                                </a>
                                <div class="govbh-advanced-search__body" id="advancesearch" style="display:none;">
                                    <div class="row g-4">
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--select">
                                                <select class="form-select select2" id="select-001" name="select-001">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                    <option value="5">Option 5</option>
                                                    <option value="6">Option 6</option>
                                                    <option value="7">Option 7</option>
                                                </select>
                                                <label for="select-001">Search Field 1</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--icon-right">
                                                <div class="form-floating__ico"><i class="ph ph-copy-simple"></i></div>
                                                <input type="text" class="form-control" id="input-016" placeholder="Text" value="Text">
                                                <label for="input-016">Search Field 2<span>*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--icon-right">
                                                <div class="form-floating__ico"><i class="ph ph-copy-simple"></i></div>
                                                <input type="text" class="form-control" id="input-015" placeholder="Text" value="Text">
                                                <label for="input-015">Search Field 3<span>*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-floating govbh-form-control--select govbh-form-control--label-top">
                                                <select class="with-search" data-placeholder-search="Search Options"
                                                    data-placeholder="Select Multiple Values" data-columns="1" data-select-all="yes"
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
                                                <label for="select-002">Select Option<span>*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-check">      
                                                <label for="checklabel4">Search Option 1</label>                  
                                                <div id="checklabel4" class="form-check__group bg--grey form-check__group--padding mt-2">                        
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option1" name="Checkboxdemo-004" value="1">
                                                        <label for="option1">Option 1</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option2" name="Checkboxdemo-004"  value="2" checked>
                                                        <label for="option2">Option 2</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option3" name="Checkboxdemo-004"  value="3">
                                                        <label for="option3">Option 3</label>
                                                    </div>                        
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option4" name="Checkboxdemo-004"  value="4">
                                                        <label for="option4">Option 4</label>
                                                    </div>                        
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-check">      
                                                <label for="radiolabel4">Search Option 2</label>                  
                                                <div id="radiolabel4" class="form-check__group bg--grey form-check__group--padding mt-2">                        
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio7" name="options" value="1">
                                                        <label for="radio7">Option 1</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio5" name="options"  value="2" checked>
                                                        <label for="radio5">Option 2</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio6" name="options"  value="3">
                                                        <label for="radio6">Option 3</label>
                                                    </div>                         
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio4" name="options"  value="4">
                                                        <label for="radio4">Option 4</label>
                                                    </div>                         
                                                </div>
                                            </div>     
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-check">      
                                                <label for="checklabel4">Search Option 3</label>                  
                                                <div id="checklabel4" class="form-check__group bg--grey form-check__group--padding mt-2">                        
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option5" name="Checkboxdemo-005" value="1" checked>
                                                        <label for="option5">Option 1</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option6" name="Checkboxdemo-005"  value="2" checked>
                                                        <label for="option6">Option 2</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option7" name="Checkboxdemo-005"  value="3">
                                                        <label for="option7">Option 3</label>
                                                    </div>                        
                                                    <div class="form-check__item">
                                                        <input type="checkbox" id="option8" name="Checkboxdemo-005"  value="4">
                                                        <label for="option8">Option 4</label>
                                                    </div>                        
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="govbh-form-control form-check">      
                                                <label for="radiolabel5">Search Option 4</label>                  
                                                <div id="radiolabel5" class="form-check__group bg--grey form-check__group--padding mt-2">                        
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio12" name="options1" value="1" checked>
                                                        <label for="radio12">Option 1</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio13" name="options1"  value="2" >
                                                        <label for="radio13">Option 2</label>
                                                    </div>
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio14" name="options1"  value="3">
                                                        <label for="radio14">Option 3</label>
                                                    </div>                         
                                                    <div class="form-check__item">
                                                        <input type="radio" id="radio15" name="options1"  value="4">
                                                        <label for="radio15">Option 4</label>
                                                    </div>                         
                                                </div>
                                            </div>     
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="hr mt-3"></div>
                <h6>With Commonly Used Keywords</h6>
                <div class="govbh-search-card p-0">
                    <div class="govbh-search-card__head">
                        <div class="govbh-form-control form-floating govbh-form-control--icon-left">
                            <div class="form-floating__ico"><i class="ph ph-magnifying-glass" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" id="floatingInput" placeholder="Text">
                            <label for="floatingInput">Enter your keyword</label>
                        </div>
                        <button type="button" class="govbh-btn govbh-btn--primary" aria-label="Click here to search">Search <i class="ph ph-arrow-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="row g-2 pb-4">
                        <div class="col-12">
                            <div class="govbh-advanced-search__content mt-2">
                                <p>Your may want to search the following topics:</p>
                                <ul>
                                    <li><a href="#">Identity, Passports and Visas</a></li>
                                    <li><a href="#">Traffic, Vehicles and Transportation</a></li>
                                    <li><a href="#">Electricity, Water and Infrastructure</a></li>
                                    <li><a href="#">Education and Students</a></li>
                                    <li><a href="#">Courts and Legislations</a></li>
                                    <li><a href="#">Health and Medical Care</a></li>
                                    <li><a href="#">Marriage, Birth and Death</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>



<?php 
include "includes/footer.php";
?>