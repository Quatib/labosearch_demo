<?php $this->load->view('common/header'); ?>
<div class=' about_div'>
    <img src='<?php echo base_url() ?>assets/images/banner.png' alt='Banner'>
</div>
<section class='section_top about_div'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 about_text'>
                <h1 class="about_haed">
                    <span class="page_haedss">About Labosearch</span> A Trusted Source for High-Quality Laboratory
                    Equipment with Unparalleled Excellence
                </h1>
                <p class='pre_text'>
                    Labosearch is a leading supplier renowned for its extensive range of Laboratory Equipment designed
                    for Research and Development ( R&D ), Educational, and Research Laboratories.
                </p>
                <p class='pre_text'>Our product catalogue includes a diverse array of items such as Autoclaves,
                    Centrifuges, Incubators, Freezers, Fume Hoods, Glassware Washers, Hematology Analyzers, Ice Maker
                    Machines, Furnaces, Blood Bank Refrigerators, Rotary Evaporators, Ovens, Spectrophotometers, and
                    Test Chambers.
                </p>
                <p class='pre_text'>We are committed to delivering products that emphasize safety, reliability, and
                    exceptional quality. Our dedication to providing top-tier products is matched by our passion for
                    building lasting relationships with our customers. Each item in our range undergoes rigorous
                    individual inspection by our skilled technicians before being dispatched, ensuring quality and
                    durability.
                </p>
                <p class='pre_text'>Labosearch holds certifications in accordance with ISO 9001:2015 and ISO 13485:2015
                    guidelines, demonstrating our unwavering commitment to quality and operational excellence.
                </p>
                <p class='pre_text'>Our products meet stringent international standards and align with various
                    certifications, including the Certificate of Compliance for the 2014/35/EU Low Voltage Directive and
                    the 2014/32/EU Measuring Instruments Directive.
                </p>
                <p class='pre_text'>Moreover, we provide Installation Qualification ( IQ ), Operational Qualification (
                    OQ ), and
                    Performance Qualification ( PQ ) Certifications alongside our products, ensuring comprehensive
                    support for our customers' needs.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="no_desktop">
    <div class='container'>
    <div class='section__title'>
                <h1> Product Lists</h1>
            </div>
        <ul class="list_ul ">
            <?php $i = 1;
            foreach ($categories as $rcategory) {
                
                
                if ($i <= 5) { ?>
                    <li class="pl_list"><a href="<?php echo $categories[$rcategory['id']]['category_url']; ?>"><?php echo $categories[$rcategory['id']]['name']; ?></a></li>
            <?php $i++;
                }
            } ?>
            <li class="pl_listing_more"><a href="<?php echo base_url() ?>all-category">View More</a></li>
        </ul>
    </div>
</section>
<section class='section_top'>
    <div class='container'>
        <div class='row'>
            <div class='section__head d-md-flex justify-content-between '>
                <div class='section__title'>
                    <h1> Top Popular Categories</h1>
                </div>
            </div>
            <div class='col-12'>
                <div class='product_carousel product_column5 owl-carousel'>
                    <?php foreach ($random_categories as $rcategory) {
                        // echo'<pre>';
                        // print_r($rcategory);
                        // echo'</pre>';
                        $rcatimage = json_decode($categories[$rcategory['id']]['image_url']);
                        if (empty($rcatimage->small)) {
                            $rcatimage = base_url('assets/images/no_photo.png');
                        } else {
                            $rcatimage = base_url($rcatimage->small);
                        }
                    ?>
                        <div class='single_product'>
                            <div class='product_thumb'>
                                <a class='primary_img' href='<?php echo $categories[$rcategory['id']]['category_url']; ?>'>
                                    <img src='<?php echo $rcatimage; ?>' alt='<?php echo $categories[$rcategory['id']]['name']; ?>' class='primary_img_product'>
                                </a>
                            </div>
                            <div class='product_name'>
                                <h6>
                                    <a href='<?php echo $categories[$rcategory['id']]['category_url']; ?>'><?php echo $categories[$rcategory['id']]['name']; ?></a>
                                </h6>
                            </div>
                        </div>
                    <?php $i++;
                    }   ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_top top_catagires">
    <div class="container">
        <div class='section__head d-md-flex justify-content-between '>
            <div class='section__title'>
                <h2> Trending Laboratory Products</h2>
            </div>
        </div>
        <div class="row">
            <?php $i = 1;
            foreach ($random_products as $fproduct) {
                $product_url = base_url() . strtolower($categories[$fproduct['category_id']]['url_title']) . "/" . strtolower($fproduct['sku']);
                $fpimage = json_decode($fproduct['image_url']);
                if (empty($fpimage->medium)) {
                    $fpimage = base_url('assets/images/no_photo.png');
                } else {
                    $fpimage = base_url($fpimage->medium);
                }
                if ($i <= 12) {
            ?>
                    <div class="col-lg-3 col-sm-4 col-6 col-md-4 top_itemes">
                        <div class="fp_box">
                            <a href="<?php echo $product_url; ?>" title=""><img class="fp_img" src="<?php echo $fpimage; ?>" alt="<?php echo $fproduct['name']; ?>"></a>
                            <a href="<?php echo $product_url; ?>" title="">
                                <p class="fp_head"><?php echo $fproduct['name']; ?></p>
                            </a>
                            <div class="product_sub">
                                <ul class="cate_luu">
                                    <?php
                                    $features = explode("\n", $fproduct['features']);
                                    $featuresToShow = array_slice($features, 0, 3);
                                    foreach ($featuresToShow as $feature) {
                                    ?>
                                        <li>
                                            <i class="fa fa-angle-double-right me-2"></i><?php echo $feature; ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php $i++;
                }
            }  ?>
        </div>
    </div>
</section>
<section class="section_top">
    <div class="container">

        <div class='section__head d-md-flex justify-content-between '>
            <div class='section__title'>
                <h2> Featured Products</h2>
            </div>
        </div>
        <div class="row">
            <?php $i = 1;
            foreach ($latest_products as $lproduct) {
                $product_url = base_url() . strtolower($categories[$lproduct['category_id']]['url_title']) . "/" . strtolower($lproduct['sku']);
                $product_spec = json_decode($lproduct['specifications'], true);
                $lpimage = json_decode($lproduct['image_url']);
                if (empty($lpimage->medium)) {
                    $lpimage = base_url('assets/images/no_photo.png');
                } else {
                    $lpimage = base_url($lpimage->medium);
                }
                if ($i <= 10) {
            ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6  trending_box">
                        <div class="frame ">
                            <a href="<?php echo $product_url; ?>" title=""><img src="<?php echo $lpimage; ?>" class="our_img" alt="Product Image"></a>
                            <h4 class="probycat_text"> <a href="<?php echo $product_url; ?>" title=""><?php echo $lproduct['name']; ?></a></h4>
                        </div>
                    </div>
            <?php $i++;
                }
            } ?>
        </div>
    </div>
</section>
<?php $this->load->view('common/footer'); ?>