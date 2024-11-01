<?php $this->load->view('common/header'); ?>
<section class="section_top inner_pages">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading_product"><?php echo $category['name']; ?></h2>
            </div>
            <p class="item_drec"><?php echo $category['description']; ?></p>
            <div class="div_flext">
                <?php foreach ($categories[$category['id']]['children_ids'] as $child_category_id) { ?>
                    <div class="cat_div">
                        <a href="<?php echo $categories[$child_category_id]['category_url'] ?>">
                            <?php echo $categories[$child_category_id]['name'] ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <?php
            if (!empty($products)) {
                foreach ($products as $product) {
                    $product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
                    $product_image = json_decode($product['image_url']);
                    if (empty($product_image->medium))
                        $product_image = base_url('assets/images/no_photo.png');
                    else $product_image = base_url($product_image->medium);
                    $product_spec = json_decode($product['specifications'], true);
            ?>
                    <div class="col-lg-4 border-bottom_pf">
                        <div class=" pf_by_center">
                            <div class="product_flex">
                                <div class="img_pf_section">
                                    <a href="<?php echo $product_url; ?>">
                                        <img src="<?php echo $product_image; ?>" alt="<?php echo $product['name']; ?>" class="img_by_pf">
                                    </a>
                                </div>
                                <div class="btng_compare">
                                    <div class="btng_product">
                                        <div>
                                            <label class="action action--compare-add m-right">
                                                <input class="check-hidden checkbox" type="checkbox" value="<?php echo $product['sku'] ?>" id="<?php echo $product['sku'] ?>">
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-check me-1"></i>Compare
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="product_header_inner">
                                <a href="<?php echo $product_url; ?>"><?php echo $product['name']; ?></a>
                            </h4>
                            <ul class="feature-ul">
                                <?php $count = 1;
                                foreach ($product_spec as $spec => $value) {
                                    if ($count <= 5) {
                                ?>
                                        <li>
                                            <?php echo $spec; ?> :
                                            <?php if (is_array($value)) {
                                                foreach ($value as $key => $value1) {
                                                    echo $key . " : " . $value1 . "<br>";
                                                }
                                            } else {
                                                echo $value;
                                            }
                                            ?>
                                        </li>
                                <?php }
                                    $count++;
                                } ?>
                            </ul>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<div class="compare compare_btn">
    <div class="row row-2 compare-section">
        <a href="javascript:" class="btn compare_btn pull-right btn-compare" style="display: none;"> </a><br>
    </div>
</div>
<?php $this->load->view('common/footer'); ?>