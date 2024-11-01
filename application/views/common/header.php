<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Laboratory Equipment | Analytical Instruments | Labosearch.com</title> -->
    <title><?php echo $meta_info['meta-title']; ?></title>
    <meta name="description" content="<?php echo $meta_info['meta-description']; ?>">
    <meta name="keyword" content="<?php echo $meta_info['meta-keyword']; ?>">
    <meta name="author" content="labosearch.com">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/fav.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slinky.menu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section class="top_haeder">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mob_none">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo" alt="logo"></a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="info_details">
                        <div class="number_infoo infoing">
                            <div><img src="<?php echo base_url(); ?>assets/images/call.png" alt="Call" class="img-email"></div>
                            <div><a href="#">+1 438 901 2321</a></div>
                        </div>
                        <div class="number_infoo ">
                            <div><img src="<?php echo base_url(); ?>assets/images/email.png" alt="Email" class="img-email"></div>
                            <div><a href="mailto:info@labosearch.com">info@labosearch.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ask_btng mob_none">
                    <div class="number_infooo">
                        <a class="ask_btng" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            Ask An Expert <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="header_area">
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mob_none">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                                    <li><a href="<?php echo base_url('all-products') ?>"> A-Z Products</a></li>
                                    <li><a href="<?php echo base_url('all-category') ?>">Category</a></li>
                                    <li><a href="<?php echo base_url('catalogs') ?>"> Catalogs</a></li>
                                    <li><a href="<?php echo base_url('contact-us') ?>">Contact Us </a></li>
                                    <li><a href="<?php echo base_url('about-us') ?>">About us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <form action="<?php echo html_escape(base_url('search')); ?>" method="get">
                            <div class="input-group ">
                                <input type="text" class="form-control" name="search" placeholder="Search for products..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button type="submit" class="input-group-text" id="basic-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" class="logo_mob">
                            </a>
                        </span>
                        <a href="javascript:void(0)"><i class="fa fa-bars" style="font-size: 20px;"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url() ?>">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url('all-products') ?>">A-Z Products</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url('all-category') ?>">Category</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url('catalogs') ?>">Catalogs</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url('about-us') ?>">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url('contact-us') ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Ask An Expert</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="<?php echo base_url() ?>" method="post" onsubmit="req_send_btn.disabled=true;return true;">
                <div class="row">
                    <div class="col-lg-12  Top">
                        <label class="sr-only">Name </label>
                        <input type="text" class="get_coral" name="lname" placeholder="Name" required="">
                        <span class="err_message">
                            <?php echo form_error('lname'); ?>
                        </span>
                    </div>
                    <div class="col-lg-12  Top">
                        <label class="sr-only">Email </label>
                        <input type="email" class="get_coral" name="lemail" placeholder="Email " required="">
                        <span class="err_message">
                            <?php echo form_error('lemail'); ?>
                        </span>
                    </div>
                    <div class="col-lg-12  Top">
                        <label class="sr-only">Product</label>
                        <input type="text" class="get_coral" name="lproduct_name" placeholder="Enter Your Product Details " required="">
                        <span class="err_message">
                            <?php echo form_error('lproduct_name'); ?>
                        </span>
                    </div>
                    <input type="hidden" class="form-control" name="lvalue" value="inquiry">
                    <?php echo captcha_common_html(4); ?>

                    <button id="req_send_btn" type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm modal_btn">
                        <span>send</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php $breadcrumbs =  array_unique($breadcrumbs);
    if (is_array($breadcrumbs)) {
        if (sizeof($breadcrumbs) != 1) { ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumbs as $breadcrumb => $link) {
                        if ($breadcrumb == 'compare') {
                            $link = '#';
                        }
                        if ($breadcrumb == 'Home') { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class='fa fa-home me-1'></i> Home </a></li>
                        <?php } else { ?>
                            <li class="breadcrumb-item" aria-current='page'> <a href="<?= $link ?>">
                                    <?= ucwords($breadcrumb); ?>
                                </a></li>
                    <?php }
                    } ?>
                </ol>
            </nav>
    <?php }
    } ?>