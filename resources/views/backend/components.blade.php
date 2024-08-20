<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
           <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->


                <?php require("components/header.php"); ?>




                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">

                                <div class="themesflat-container full">
                                    <div class="row">
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Alerts</h3>
                                                <div class="block-warning">
                                                    <i class="icon-alert-octagon"></i>
                                                    <div class="body-title-2">Your license is invalid. Please activate your license!</div>
                                                </div>
                                                <div class="block-warning w-full">
                                                    <i class="icon-alert-octagon"></i>
                                                    <div class="body-title-2">Your license is invalid. Please activate your license!</div>
                                                </div>
                                                <div class="block-warning type-main">
                                                    <i class="icon-alert-octagon"></i>
                                                    <div class="body-title-2">Blacklist contact requests if it includes those keywords in the content field (separate by comma).</div>
                                                </div>
                                                <div class="block-warning type-main w-full">
                                                    <i class="icon-alert-octagon"></i>
                                                    <div class="body-title-2">Blacklist contact requests if it includes those keywords in the content field (separate by comma).</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Button</h3>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use class .tf-button</p>
                                                    <button class="tf-button">Add product</button>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use .style-1 in class .btn class to change style 1</p>
                                                    <button class="tf-button style-1">Add product</button>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use .style-2 in class .btn class to change style 2</p>
                                                    <button class="tf-button style-2">Add product</button>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Button funtion</p>
                                                    <div class="tf-button-funtion">
                                                        <i class="icon-upload-cloud"></i>
                                                        <div class="body-title">Upload</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Radio buttons</p>
                                                    <div class="radio-buttons">
                                                        <div class="item">
                                                            <input class="" type="radio" name="admin-language" id="admin-language1" checked="">
                                                            <label class="" for="admin-language1"><span class="body-title-2">Left to Right</span></label>
                                                        </div>
                                                        <div class="item">
                                                            <input class="" type="radio" name="admin-language" id="admin-language2">
                                                            <label class="" for="admin-language2"><span class="body-title-2">Right to Left</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Badges</h3>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use class .block-not-available</p>
                                                    <div class="block-not-available">Not Available</div>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use class .block-available</p>
                                                    <div class="block-available">Available</div>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use class .block-published</p>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div class="flex items-center gap10 flex-wrap">
                                                    <p>Use class .block-pending</p>
                                                    <div class="block-pending">Pending</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Chart</h3>
                                                <div class="row">
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart default</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart bar</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-6"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart area</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-7"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart bar two column</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-14"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart bar full column</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-18"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart line</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-15"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart half donut</h5>
                                                            <div class="wrap-chart">
                                                                <div id="line-chart-9"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart donut</h5>
                                                            <div class="flex justify-center">
                                                                <div id="morris-donut-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Chart map</h5>
                                                            <div id="usa-vectormap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Dropdowns</h3>
                                                <div class="row">
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">Select has image</h6>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Use &lt;select&gt; and class .image-select.no-text</p>
                                                                <select class="image-select no-text">
                                                                    <option data-thumbnail="images/country/1.png">ENG</option>
                                                                    <option data-thumbnail="images/country/9.png">VIE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">Dropdowns has content</h6>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Dropdown default</p>
                                                                <div class="popup-wrap noti type-header">
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <span class="item">
                                                                                <span class="text-tiny">1</span>
                                                                                <i class="icon-bell"></i>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="dropdown-menu has-content" aria-labelledby="dropdownButton1" >
                                                                            <li>
                                                                                <h6>Message</h6>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-11.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Hello?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-12.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Ralph Edwards</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Are you there?  interested i this...</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-13.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Eleanor Pena</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Interested in this loads?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-11.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Jane Cooper</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Okay...Do we have a deal?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Dropdown end : add class .dropdown-menu-end in ul.dropdown-menu</p>
                                                                <div class="popup-wrap noti type-header">
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <span class="item">
                                                                                <span class="text-tiny">1</span>
                                                                                <i class="icon-bell"></i>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownButton2" >
                                                                            <li>
                                                                                <h6>Message</h6>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-11.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Hello?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-12.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Ralph Edwards</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Are you there?  interested i this...</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-13.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Eleanor Pena</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Interested in this loads?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="noti-item w-full wg-user active">
                                                                                    <div class="image">
                                                                                        <img src="images/avatar/user-11.png" alt="">
                                                                                    </div>
                                                                                    <div class="flex-grow">
                                                                                        <div class="flex items-center justify-between">
                                                                                            <a href="#" class="body-title">Jane Cooper</a>
                                                                                            <div class="time">10:13 PM</div>
                                                                                        </div>
                                                                                        <div class="text-tiny">Okay...Do we have a deal?</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">More</h6>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Dropdown more</p>
                                                                <div class="dropdown default">
                                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                       <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li>
                                                                            <a href="javascript:void(0);">This Week</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">Last Week</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">View all</h6>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Dropdown view all</p>
                                                                <div class="dropdown default">
                                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li>
                                                                            <a href="javascript:void(0);">3 days</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">7 days</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">Sort</h6>
                                                            <div class="flex items-center gap10 flex-wrap">
                                                                <p>Use &lt;select&gt; and class .style-default</p>
                                                                <div class="select style-default">
                                                                    <select class="">
                                                                        <option>Sort</option>
                                                                        <option>Name</option>
                                                                        <option>Day</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">Box dropdown no select</h6>
                                                            <div class="dropdown default style-box">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="view-all">Week<i class="icon-chevron-down"></i></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="javascript:void(0);">Month</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);">Year</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h6 class="mb-10">Box dropdown select</h6>
                                                            <div class="select">
                                                                <select class="">
                                                                    <option>EU - 44</option>
                                                                    <option>EU - 40</option>
                                                                    <option>EU - 50</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Form</h3>
                                                <div class="row">
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Form search</h5>
                                                            <form class="form-search">
                                                                <fieldset class="name">
                                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                                </fieldset>
                                                                <div class="button-submit">
                                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Form select date</h5>
                                                            <form class="" >
                                                                <div class="select">
                                                                    <input type="date" name="date" value="2023-11-20">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 mb-20">
                                                        <div>
                                                            <h5 class="mb-16">Form checkbox</h5>
                                                            <form class="">
                                                                <div class="wrap-checkbox">
                                                                    <ul class="table-title flex gap20 mb-14">
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="total-checkbox" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">Stt</div>
                                                                        </li>
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="checkbox-item" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">#01</div>
                                                                        </li>
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="checkbox-item" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">#02</div>
                                                                        </li>
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="checkbox-item" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">#03</div>
                                                                        </li>
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="checkbox-item" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">#04</div>
                                                                        </li>
                                                                        <li class="countries-item">
                                                                            <div class="mb-10">
                                                                                <input class="checkbox-item" type="checkbox">
                                                                            </div>
                                                                            <div class="body-text">#05</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Form text</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div>
                                                            <form class="">
                                                                <fieldset class="name mb-24">
                                                                    <div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
                                                                    <input class="" type="text" placeholder="Name" name="text" tabindex="0" value="" aria-required="true" required="">
                                                                </fieldset>
                                                                <fieldset class="email mb-24">
                                                                    <div class="body-title mb-10">Admin email</div>
                                                                    <input class="flex-grow" type="email" placeholder="Enter your email" name="email" tabindex="0" value="" aria-required="true" required="">
                                                                </fieldset>
                                                                <fieldset class="description mb-24">
                                                                    <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                                                    <textarea class="" name="description" placeholder="Description" tabindex="0" aria-required="true" required=""></textarea>
                                                                </fieldset>
                                                                <div class="bot">
                                                                    <button class="tf-button w208" type="submit">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Form text</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <form class="form-style-1" >
                                                            <fieldset class="name mb-24">
                                                                <div class="body-title">Product name <span class="tf-color-1">*</span></div>
                                                                <input class="flex-grow" type="text" placeholder="Category name" name="text" tabindex="0" value="" aria-required="true" required="">
                                                            </fieldset>
                                                            <fieldset class="email mb-24">
                                                                <div class="body-title mb-10">Admin email</div>
                                                                <input class="flex-grow" type="email" placeholder="Enter your email" name="email" tabindex="0" value="" aria-required="true" required="">
                                                            </fieldset>
                                                            <div class="bot">
                                                                <div></div>
                                                                <button class="tf-button w208" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box">
                                                <h3>Add image</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="upload-image mb-16">
                                                            <div class="item">
                                                                <img src="images/images-section/gallery-1.png" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img src="images/images-section/gallery-2.png" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img src="images/images-section/gallery-3.png" alt="">
                                                            </div>
                                                            <div class="item">
                                                                <img src="images/images-section/gallery-4.png" alt="">
                                                            </div>
                                                            <div class="item up-load">
                                                                <label class="uploadfile" for="myFile">
                                                                    <span class="icon">
                                                                        <i class="icon-upload-cloud"></i>
                                                                    </span>
                                                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                                    <input type="file" id="myFile" name="filename">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Offcanvas</h3>
                                                <div class="setting cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">
                                                    <p>Offcanvas Right</p>
                                                </div>
                                                <div class="setting cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart1" aria-controls="offcanvasStart1">
                                                    <p>Offcanvas Left</p>
                                                </div>
                                                <div class="setting cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1" aria-controls="offcanvasTop1">
                                                    <p>Offcanvas Top</p>
                                                </div>
                                                <div class="setting cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom1">
                                                    <p>Offcanvas Bottom</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Pagination</h3>
                                                <div>
                                                    <p class="mb-10">Pagination start</p>
                                                    <ul class="wg-pagination">
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-left"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <p class="mb-10">Pagination center : add class .justify-content-center</p>
                                                    <ul class="wg-pagination justify-content-center">
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-left"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <p class="mb-10">Pagination end : add class .justify-content-end</p>
                                                    <ul class="wg-pagination justify-content-end">
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-left"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icon-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Progress</h3>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">20%</div>
                                                    <div class="progress-level-bar w-full">
                                                        <span data-progress="20" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">40%</div>
                                                    <div class="progress-level-bar t1 w-full">
                                                        <span data-progress="40" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">50%</div>
                                                    <div class="progress-level-bar t2 w-full">
                                                        <span data-progress="50" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">60%</div>
                                                    <div class="progress-level-bar t3 w-full">
                                                        <span data-progress="60" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">80%</div>
                                                    <div class="progress-level-bar t4 w-full">
                                                        <span data-progress="80" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between gap10">
                                                    <div class="text-tiny">100%</div>
                                                    <div class="progress-level-bar t5 w-full">
                                                        <span data-progress="100" data-max="100" class=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Tabs</h3>
                                                <div>
                                                    <h5 class="mb-16">Tabs default</h5>
                                                    <div class="widget-tabs">
                                                        <ul class="widget-menu-tab">
                                                            <li class="item-title active">
                                                                <span class="inner"><span class="h6">Tabs 1</span></span>
                                                            </li>
                                                            <li class="item-title">
                                                                <span class="inner"><span class="h6">Tabs 2</span></span>
                                                            </li>
                                                        </ul>
                                                        <div class="widget-content-tab">
                                                            <div class="widget-content-inner active">
                                                                <p>
                                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo molestias saepe id dolores at sed, numquam vero, amet iure reiciendis exercitationem ut laudantium! Voluptas tempora architecto dicta ex a eum?
                                                                    Neque distinctio, deleniti enim, similique accusantium saepe asperiores sed aperiam tenetur itaque ullam quidem qui minus culpa minima, id pariatur unde. Eum, nobis? Animi consequatur et dolorum distinctio veniam assumenda.
                                                                </p>
                                                            </div>
                                                            <div class="widget-content-inner">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit doloribus quibusdam a quae? Eveniet modi obcaecati, quis a debitis minima! Optio libero quam vitae expedita quisquam minus voluptatem debitis?
                                                                    Aspernatur minima reprehenderit culpa rerum, asperiores recusandae. Sunt molestias fugiat impedit, porro itaque iusto dolor consectetur excepturi, tenetur quae sed architecto ab explicabo voluptate at modi! Expedita quisquam accusantium quas.
                                                                    Aliquam placeat beatae iste eos optio enim in, aperiam ipsa qui similique sapiente, quos exercitationem tempore, obcaecati libero quas aut repellendus rerum ab vitae dicta dolor a dignissimos modi. Maxime.
                                                                    Pariatur harum mollitia numquam impedit vitae magnam quo quaerat dignissimos ipsam sunt, itaque beatae, sequi velit! Voluptas magni adipisci mollitia minus, veniam illo excepturi commodi odit nihil tempora eum impedit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-16">Tabs style 1</h5>
                                                    <div class="widget-tabs">
                                                        <ul class="widget-menu-tab style-1">
                                                            <li class="item-title active">
                                                                <span class="inner"><span class="h6">Tabs 1</span></span>
                                                            </li>
                                                            <li class="item-title">
                                                                <span class="inner"><span class="h6">Tabs 2</span></span>
                                                            </li>
                                                        </ul>
                                                        <div class="widget-content-tab">
                                                            <div class="widget-content-inner active">
                                                                <p>
                                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo molestias saepe id dolores at sed, numquam vero, amet iure reiciendis exercitationem ut laudantium! Voluptas tempora architecto dicta ex a eum?
                                                                    Neque distinctio, deleniti enim, similique accusantium saepe asperiores sed aperiam tenetur itaque ullam quidem qui minus culpa minima, id pariatur unde. Eum, nobis? Animi consequatur et dolorum distinctio veniam assumenda.
                                                                </p>
                                                            </div>
                                                            <div class="widget-content-inner">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit doloribus quibusdam a quae? Eveniet modi obcaecati, quis a debitis minima! Optio libero quam vitae expedita quisquam minus voluptatem debitis?
                                                                    Aspernatur minima reprehenderit culpa rerum, asperiores recusandae. Sunt molestias fugiat impedit, porro itaque iusto dolor consectetur excepturi, tenetur quae sed architecto ab explicabo voluptate at modi! Expedita quisquam accusantium quas.
                                                                    Aliquam placeat beatae iste eos optio enim in, aperiam ipsa qui similique sapiente, quos exercitationem tempore, obcaecati libero quas aut repellendus rerum ab vitae dicta dolor a dignissimos modi. Maxime.
                                                                    Pariatur harum mollitia numquam impedit vitae magnam quo quaerat dignissimos ipsam sunt, itaque beatae, sequi velit! Voluptas magni adipisci mollitia minus, veniam illo excepturi commodi odit nihil tempora eum impedit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Typography</h3>
                                                <p>Display Headings</p>
                                                <h1>h1</h1>
                                                <h2>h2</h2>
                                                <h3>h3</h3>
                                                <h4>h4</h4>
                                                <h5>h5</h5>
                                                <h6>h5</h6>
                                                <div class="body-title">body title</div>
                                                <div class="body-title-2">body title 2</div>
                                                <div class="body-text">body text</div>
                                                <div class="text-tiny">text tiny</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3 class="mb-16">Other</h3>
                                                <div>
                                                    <h5 class="mb-10">Rating</h5>
                                                    <div class="flex items-center gap10">
                                                        <p>Rating default</p>
                                                        <div class="ratings">
                                                            <i class="icon-star1 active"></i>
                                                            <i class="icon-star1 active"></i>
                                                            <i class="icon-star1 active"></i>
                                                            <i class="icon-star1 active"></i>
                                                            <i class="icon-star1"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <p>Rating has number</p>
                                                        <div class="rating-number">
                                                            <div class="icon">
                                                                <i class="icon-star1"></i>
                                                            </div>
                                                            <div class="number body-text">4.7</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-10">List box text</h5>
                                                    <div class="list-box-value mb-10">
                                                        <div class="box-value-item"><div class="body-text">EU - 38.5</div></div>
                                                        <div class="box-value-item"><div class="body-text">EU - 39</div></div>
                                                        <div class="box-value-item"><div class="body-text">EU - 40</div></div>
                                                        <div class="box-value-item"><div class="body-text">EU - 38.5</div></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-10">List icon function</h5>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Box icon</h3>
                                                <div class="">
                                                    <p>Change number up</p>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">1.56%</div>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <h4>$37,802</h4>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                        <div class="text-tiny">since last weekend</div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p>No-change number</p>
                                                    <div class="box-icon-trending">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.00%</div>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <h4>$37,802</h4>
                                                        <div class="box-icon-trending">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">0.00%</div>
                                                        </div>
                                                        <div class="text-tiny">since last weekend</div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p>Change number down</p>
                                                    <div class="box-icon-trending down">
                                                        <i class="icon-trending-down"></i>
                                                        <div class="body-title number">1.56%</div>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <h4>$37,802</h4>
                                                        <div class="box-icon-trending down">
                                                            <i class="icon-trending-down"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                        <div class="text-tiny">since last weekend</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Breadcrumb</h3>
                                                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                                    <li>
                                                        <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                                    </li>
                                                    <li>
                                                        <i class="icon-chevron-right"></i>
                                                    </li>
                                                    <li>
                                                        <a href="#"><div class="text-tiny">Ecommerce</div></a>
                                                    </li>
                                                    <li>
                                                        <i class="icon-chevron-right"></i>
                                                    </li>
                                                    <li>
                                                        <div class="text-tiny">Add product</div>
                                                    </li>
                                                </ul>
                                                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                                    <li>
                                                        <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                                    </li>
                                                    <li>
                                                        <i class="icon-chevron-right"></i>
                                                    </li>
                                                    <li>
                                                        <div class="text-tiny">Setting</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Gallery item</h3>
                                                <div class="row">
                                                    <div class="col-xl-12 mb-20">
                                                        <div class="flex">
                                                            <a href="#" class="gallery-item">
                                                                <div class="image">
                                                                    <img src="images/images-section/all-gallery-4.png" alt="">
                                                                </div>
                                                                <div class="text-tiny">Feed for dogs and cats – Brit</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Product item</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="product-item">
                                                            <div class="image">
                                                                <img src="images/products/1.png" alt="">
                                                            </div>
                                                            <div class="flex items-center justify-between flex-grow">
                                                                <div class="name">
                                                                    <a href="product-list.php" class="body-title-2">Patimax Fragrance Long...</a>
                                                                    <div class="text-tiny mt-3">100 Items</div>
                                                                </div>
                                                                <div>
                                                                    <div class="text-tiny mb-3">Coupon Code</div>
                                                                    <div class="body-text">Sflat</div>
                                                                </div>
                                                                <div class="country">
                                                                    <img src="images/country/2.png" alt="">
                                                                </div>
                                                                <div>
                                                                    <div class="body-title-2 mb-3">-15%</div>
                                                                    <div class="text-tiny">$27.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Country item</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="country-item">
                                                            <div class="image">
                                                                <img src="images/country/6.png" alt="">
                                                            </div>
                                                            <div class="flex-grow flex items-center justify-between">
                                                                <a href="countries.php" class="body-text name">Turkish Flag</a>
                                                                <div class="box-icon-trending up">
                                                                    <i class="icon-trending-up"></i>
                                                                </div>
                                                                <div class="body-text number">6,972</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Shop item</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="shop-item">
                                                            <div class="image">
                                                                <img src="images/shop/1.png" alt="">
                                                            </div>
                                                            <div class="flex-grow flex items-center justify-between gap20">
                                                                <div>
                                                                    <a href="#" class="body-text name">Robert</a>
                                                                    <div class="text-tiny mt-4">73 Purchases</div>
                                                                </div>
                                                                <div class="body-text">Kitchen, Pets</div>
                                                                <div class="body-text">$1,000</div>
                                                                <div class="flex items-center justify-between gap10">
                                                                    <div class="progress-level-bar">
                                                                        <span data-progress="29" data-max="70" class="" style="width: 41.4286%;"></span>
                                                                    </div>
                                                                    <div class="text-tiny">100%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Comment item</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="comment-item">
                                                            <div class="image">
                                                                <img src="images/avatar/user-4.png" alt="">
                                                            </div>
                                                            <div class="">
                                                                <div class="mb-4 name">
                                                                    <a href="all-user.php" class="body-title-2">Devon Lane</a>
                                                                </div>
                                                                <div class="ratings mb-10">
                                                                    <i class="icon-star1 active"></i>
                                                                    <i class="icon-star1 active"></i>
                                                                    <i class="icon-star1 active"></i>
                                                                    <i class="icon-star1 active"></i>
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="text-tiny">Morbi eget commodo diam. Praesent dignissim purus ac turpis porta</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="wg-box h-full">
                                                <h3>Attribute item</h3>
                                                <div class="row">
                                                    <div class="col-12 mb-20">
                                                        <div class="attribute-item flex items-center justify-between gap20 mb-10">
                                                            <div class="name">
                                                                <a href="add-attributes.php" class="body-title-2">Color</a>
                                                            </div>
                                                            <div class="body-text">Blue, green, white</div>
                                                            <div class="list-icon-function">
                                                                <div class="item eye">
                                                                    <i class="icon-eye"></i>
                                                                </div>
                                                                <div class="item edit">
                                                                    <i class="icon-edit-3"></i>
                                                                </div>
                                                                <div class="item trash">
                                                                    <i class="icon-trash-2"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="attribute-item flex items-center justify-between gap20">
                                                            <div class="name">
                                                                <a href="add-attributes.php" class="body-title-2">Size</a>
                                                            </div>
                                                            <div class="body-text">S, M, L, XL</div>
                                                            <div class="list-icon-function">
                                                                <div class="item eye">
                                                                    <i class="icon-eye"></i>
                                                                </div>
                                                                <div class="item edit">
                                                                    <i class="icon-edit-3"></i>
                                                                </div>
                                                                <div class="item trash">
                                                                    <i class="icon-trash-2"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="wg-box h-full">
                                                <h3>Roadmap</h3>
                                                <div class="road-map">
                                                    <div class="road-map-item active">
                                                        <div class="icon"><i class="icon-check"></i></div>
                                                        <h6>Receiving orders</h6>
                                                        <div class="body-text">05:43 AM</div>
                                                    </div>
                                                    <div class="road-map-item active">
                                                        <div class="icon"><i class="icon-check"></i></div>
                                                        <h6>Order processing</h6>
                                                        <div class="body-text">01:21 PM</div>
                                                    </div>
                                                    <div class="road-map-item active">
                                                        <div class="icon"><i class="icon-check"></i></div>
                                                        <h6>Being delivered</h6>
                                                        <div class="body-text">Processing</div>
                                                    </div>
                                                    <div class="road-map-item">
                                                        <div class="icon"><i class="icon-check"></i></div>
                                                        <h6>Delivered</h6>
                                                        <div class="body-text">Pending</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <?php require("components/footer.php"); ?>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1">
            <div class="offcanvas-header">
                <h6>Offcanvas</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Offcanvas Right</p>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart1">
            <div class="offcanvas-header">
                <h6>Offcanvas</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Offcanvas Left</p>
            </div>
        </div>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop1">
            <div class="offcanvas-header">
                <h6>Offcanvas</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Offcanvas Top</p>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1">
            <div class="offcanvas-header">
                <h6>Offcanvas</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Offcanvas Bottom</p>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/zoom.js"></script>
    <script src="js/jvectormap-1.2.2.min.js"></script>
    <script src="js/jvectormap-us-lcc.js"></script>
    <script src="js/jvectormap.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.js"></script>
    <script src="js/apexcharts/apexcharts.js"></script>
    <script src="js/apexcharts/line-chart-1.js"></script>
    <script src="js/apexcharts/line-chart-6.js"></script>
    <script src="js/apexcharts/line-chart-7.js"></script>
    <script src="js/apexcharts/line-chart-9.js"></script>
    <script src="js/apexcharts/line-chart-14.js"></script>
    <script src="js/apexcharts/line-chart-15.js"></script>
    <script src="js/apexcharts/line-chart-18.js"></script>
    <script src="js/switcher.js"></script>
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from themesflat.co/html/remos/components.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 19:40:07 GMT -->
</html>
