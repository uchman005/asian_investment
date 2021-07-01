<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">

    <base href="<?= domain ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/meanmenu.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/boxicons.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/animate.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/fonts/flaticon.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/odometer.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/nice-select.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/magnific-popup.min.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">

    <link rel="stylesheet" href="<?= $assets ?>/css/responsive.css">
    <title><?= $title ?></title>
    <link rel="icon" type="image/png" href="<?= $assets ?>/img/favicon.png">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                <a href="#">
                                    504 White St . Dawsonville, New York
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href=""><span class="__cf_email__" data-cfemail="81e9e4ededeec1e7e8efeeefafe2eeec">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="./" class="logo">
                <img src="<?= $assets ?>/img/logo-four.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="./">
                        <img src="<?= $assets ?>/img/logo-three.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="./" class="nav-link<?= $menukey == '' ? ' active' : null ?>">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Pages <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Users </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./loan" class="nav-link">Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apply.html" class="nav-link">Apply Now</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a href="./about" class="nav-link<?= $menukey == 'about' ? ' active' : null ?>">About</a>
                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                                <a href="./projects" class="nav-link<?= $menukey == 'projects' ? ' active' : null ?>">Projects</a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="projects.html" class="nav-link">Projects Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="projects-2.html" class="nav-link">Projects Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project-details.html" class="nav-link">Project Details</a>
                                    </li>
                                </ul> -->
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a href="./contact" class="nav-link<?= $menukey == 'contact' ? ' active' : null ?>">Contact Us</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <div class="language">
                                <!-- <select>
                                    <option>English</option>
                                    <option>العربيّة</option>
                                    <option>Deutsch</option>
                                    <option>Português</option>
                                </select> -->
                            </div>
                            <a class="consultant-btn" href="#">
                                Get Funding
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>