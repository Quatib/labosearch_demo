<footer id="footer">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class=" col-xl-3 col-lg-3 col-md-4 col-xs-3">
                    <div class="footer">
                        <h3 class="footer-title footer_logo">Comapny Info</h3>
                        <p class="footer_info">Labosearch, a leading enterprise, provides a diverse range of laboratory
                            equipment tailored for R&D, educational, and research applications. Our unique focus is on
                            cultivating positive and friendly relationships with all of our customers.
                        </p>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-4 col-xs-3">
                    <div class="footer">
                        <h3 class="footer-title">QUICK LINKS</h3>
                        <ul class="footer-links">
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><a href="<?php echo base_url('about-us') ?>">About Us</a></li>
                            <li><a href="<?php echo base_url('all-products') ?>">All products</a></li>
                            <li><a href="<?php echo base_url('all-category') ?>">Categorys</a></li>
                            <li><a href="<?php echo base_url('sitemap') ?>">Site Map</a></li>
                            <li><a href="<?php echo base_url('contact-us') ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-4 col-xs-3">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <?php $category_count = 1;
                                foreach($random_categories as $footer_cat){ 
                                if($category_count <= 6){	
                            ?>
                                <li>
                                    <a href="<?php echo $categories[$footer_cat['id']]['category_url']?>">
                                        <?php echo $categories[$footer_cat['id']]['name']?>
                                    </a>
                                </li>
                            <?php $category_count++; } } ?>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-4 col-xs-3">
                    <div class="footer">
                        <h3 class="footer-title">Best Seller</h3>
                        <ul class="footer-links">
                            <?php $product_count = 1;
                                foreach($random_products as $fproduct){
                                if($product_count<=4 ){	
                                $product_url =base_url().strtolower($categories[$fproduct['category_id']]['url_title'])."/".strtolower($fproduct['sku']);
                            ?>
                                <li>
                                    <a href="<?php echo $product_url; ?>"><?php echo $fproduct['name'];?></a>
                                </li>
                            <?php $product_count++; } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="info_deatiles">
                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#"> Call +1 438 901 2321</a></li>
                    <li><a href="mailto:info@labosearch.com"> <i class="fa fa-envelope"></i> Mail Us : info@labosearch.com</a></li>
                    <li><i class="fa fa-map-marker"></i> Location : Labosearch.Inc 360 Bloomfield Avenue, Windsor CT, 06095, USA.</li>
                </ul>
            </div>
            <div class="footer_border">
                <p class="footer_text_ineerr">Copyright © 2024 All Rights Reserved | 
                    <a href="<?php echo base_url()?>">labosearch.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<a title="+1 438 901 2321" href="https://wa.me/+14389012321" class="float bounce" target="_blank">
    <img src="<?php echo base_url() ?>assets/images/icon_whatsapp.png" alt="Whatsapp" class="icon_whatsapp">
</a>
<div class="go-top_whatapp3"><a href="" data-bs-toggle="modal" data-bs-target="#logModal" style="cursor: pointer;">
    <i class="fa fa-comment-alt" aria-hidden="true"></i>Inquiry</a>
</div>
<div class="modal modal_box fade" id="logModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_box">
            <div class="modal-header catalog_modal_header">
                <h5 class="modal-title" id="sub_cat_name" style="color: #000; font-size: 20px !important;">Inquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>" method="post" id="contact_form" class="contact-form mb-3" onsubmit="enq_form_btn.disabled=true;return true;">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 Top">
                            <label class="sr-only">Name </label>
                            <input type="text" class="form-controll" name="qq_name" placeholder="Name" required="">
                            <span class="err_message">
                                <?php echo form_error('qq_name'); ?>
                            </span>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 Top">
                            <label class="sr-only">Email </label>
                            <input type="email" class="form-controll" name="qq_email" placeholder="Email" required="">
                            <span class="err_message">
                                <?php echo form_error('qq_email'); ?>
                            </span>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 Top">
                            <label class="sr-only">Product </label>
                            <input type="text" class="form-controll" name="qq_product" placeholder="Enter Your Product Details " required="">
                            <span class="err_message">
                                <?php echo form_error('qq_product'); ?>
                            </span>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 Top">
                            <label class="sr-only">Message </label>
                            <input type="text" class="form-controll" name="qq_message" placeholder="Enter Your Product Details " required="">
                            <span class="err_message">
                                <?php echo form_error('qq_message'); ?>
                            </span>
                        </div>
                    </div>
                    <?php echo captcha_common_html(2); ?>
                    <input type="hidden" class="form-control" name="qq_value" value="enquiry">
                    <div class="modal-footer">
                        <button type="submit" id="enq_form_btn" class="btn btn-outline-primary-2 btn-minwidth-sm modal_btn">
                            <span>SUBMIT</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/js_min/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.countdown.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.ui.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.elevatezoom.js"></script>
<script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/slinky.menu.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<script src="<?php echo base_url() ?>assets/js/btn.js"></script>
<script>
    $(document).ready(function () {

        $('.card').delay(1800).queue(function (next) {
            $(this).removeClass('hover');
            $('a.hover').removeClass('hover');
            next();
        });
    });
</script>
<script>
    var correctCaptcha2 = function (response) {
        if (response.length == 0) {
            alert('Please verify captcha');
        } else {
            document.getElementById("enq_form_btn").removeAttribute("disabled");
        }
    }

    //Refresh Captcha

    //Contact Us
    function refreshCaptcha() {
        var img = document.images['captcha_image'];
        img.src = img.src.substring(
            0, img.src.lastIndexOf("?")
        ) + "?rand=" + Math.random() * 1000;
    }
    //ENQUIRY DESK
    function refreshCaptcha2() {
        var img = document.images['captcha_image2'];
        img.src = img.src.substring(
            0, img.src.lastIndexOf("?")
        ) + "?rand=" + Math.random() * 1000;
    }
    //Product Description
    function refreshCaptcha3() {
        var img = document.images['captcha_image3'];
        img.src = img.src.substring(
            0, img.src.lastIndexOf("?")
        ) + "?rand=" + Math.random() * 1000;
    }
    function refreshCaptcha4() {
        var img = document.images['captcha_image4'];
        img.src = img.src.substring(
            0, img.src.lastIndexOf("?")
        ) + "?rand=" + Math.random() * 1000;
    }
</script>
</body>
</html>